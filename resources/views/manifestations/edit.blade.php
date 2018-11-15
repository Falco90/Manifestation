@extends('layout')

@section('title', 'Update Manifestation')
@section('content')
    <h1>Update Manifestation<h1>
    <form method="POST" class="msg-form" action="/manifestations/{{ $message->id }}">
                {{ method_field('PATCH') }}
                {{ csrf_field() }}
        
        
                <div>
                <textarea name="content" class="message" placeholder="Manifestation content">{{ $message->content }}</textarea>
        
                </div>
                <div class="buttons">
                    <div>
                    <button type="submit" class="submit-btn">Update</button>
                    </div>
                    <div>
                    <button type="button" id="show" class="submit-btn">Delete</button>
                    </div>
                </div>
            
            </form>

            
            <ul id="popup" style="display:none">
                <li>Are you sure you want to delete this manifestation? <div class="buttons"><form method="POST" action="/manifestations/{{ $message->id }}" required>
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                    <button id="yes-btn" type="submit" class="btn-link">Yes</button>
            </form>
            <button type="button" id="no-btn" class="btn-link" onclick="showPopup()">No</button></div>
        </li>
</ul>
<script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
@endsection