<?php

namespace App\Http\Controllers;

use App\Message;

use Illuminate\Http\Request;

class ManifestationsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }


    public function index() {

        $messages = Message::where('owner_id', auth()->id())->orderBy('id', 'desc')->get();

        return view('manifestations.index', ['messages' => $messages]);

    }

    public function create() {

        return view('manifestations.create');
    }

    public function store() {

        $attributes = request()->validate([
            /*'title' => 'required',*/
            'content' => 'required'
        ]);

        $attributes['owner_id'] = auth()->id();
        
        
        Message::create($attributes);

        return redirect('/manifestations');

    }

    public function show(Message $message) {

        return view('manifestations.show', compact('message'));
    }

    public function edit(Message $message) {

        abort_if($message->owner_id !== auth()->id(), 403);
        return view('manifestations.edit', compact('message'));
    }

    public function update(Message $message) {

        /*$message->title = request('title');*/
        $message->content = request('content');

        $message->save();

        return redirect('/manifestations');
    }

    public function destroy(Message $message) {

        $message->delete();

        return redirect('/manifestations');

    }
}
