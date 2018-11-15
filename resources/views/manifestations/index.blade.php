@extends('layout')

@section('title', 'Manifestations')

    @section('content')
    <h2>Your Manifestations</h2>
    <div class="msg-container">
    @foreach ($messages as $message)
    <div class="msg">
            <div class="edit-delete">
            <p class='datetime'>{{ $message->created_at}}<br></p>
            <a href="/manifestations/{{ $message->id }}/edit"><img src="images/pen.svg" class="edit-btn"></a>
        
        
            </div>
            {{ $message->content }}<br>
    </div>  
 
    @endforeach
    
    @endsection
</div>
