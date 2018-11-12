@extends('layout')

@section('content')
    <h1>{{ $message->title }}</h1>

    <div>{{ $message->content }}</div>

    <p>
        <a href="/manifestations/{{ $message->id }}/edit">Edit</a>
    </p>


@endsection