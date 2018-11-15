@extends('layout')

@section('content')
<h1>Welcome</h1>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <p>You are logged in!</p>
@endsection
