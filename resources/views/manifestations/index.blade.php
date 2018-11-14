@extends('layout')

@section('title', 'Manifestations')

    @section('content')
    <h2>Your Manifestations</h2>
    
    @foreach ($messages as $message)
    <div class="msg">
            <!--<h4>{{ $message->title }}</h4>-->
            <div class="edit-delete">
            <p class='datetime'>{{ $message->created_at}}<br></p>
            <a href="/manifestations/{{ $message->id }}/edit"><img src="images/pen.svg" class="edit-btn"></a>
            </div>
            {{ $message->content }}<br>
    </div>    
    @endforeach
    
    @endsection
