@extends('layout')

@section('title', 'Update Manifestation')
@section('content')
    <h1>Update Manifestation<h1>
    <form method="POST" class="msg-form" action="/manifestations/{{ $message->id }}">
                {{ method_field('PATCH') }}
                {{ csrf_field() }}
        
                <!--<div>
                      <input type="text" name="title" placeholder="Manifestation title" value="{{ $message->title }}">
                </div>-->
        
                <div>
                <textarea name="content" class="message" placeholder="Manifestation content">{{ $message->content }}</textarea>
        
                </div>
                <div>
                    <button type="submit" class="submit-btn">Update</button>
                </div>
            
            </form>

            <form method="POST" action="/manifestations/{{ $message->id }}" required>
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                 
                <div>
                    <button type="submit" class="submit-btn">Delete</button>
                </div>

            </form>
@endsection