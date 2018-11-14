@extends('layout')

@section('title', 'New Manifestation')
@section('content')
    <h1>New Manifestation</h1>

    <form class="msg-form" method="POST" action="/manifestations">
        {{ csrf_field() }}

        <!--<div>
        <input type="text" name="title" placeholder="Manifestation title" value="{{ old('title') }}" required>
        </div>-->

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

