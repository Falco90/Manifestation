@extends('layout')

@section('content')
<h2>Welcome {{ Auth::user()->name }}!</h2>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <p>You are now logged in to the Floating Oasis!<br><br>
        More content will be coming soon!
    </p>
@endsection
