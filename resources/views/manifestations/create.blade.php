@extends('layout')

@section('title', 'New Manifestation')
@section('content')
    <h2>New Manifestation</h2>
    <h3>"Inspiring quote" - Some wise person</h3>
    
    <form class="msg-form" method="POST" action="/manifestations">
        {{ csrf_field() }}
        <div>
        <textarea name="content"  class="message {{ $errors->has('title') ? 'is-danger' : '' }}" placeholder="Manifestation content" value="{{ old('content') }}"></textarea>

        </div>
        <div>
            <input type="submit" class="submit-btn" value="Manifest">
        </div>

        @if ($errors->any())
        <div class="notification">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif


    </form>
@endsection

