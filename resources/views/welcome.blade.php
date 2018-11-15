@extends('layout')

@section('content')
<h1>Welcome</h1>
<div class="container">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    You are logged in!
</div>
@endsection
