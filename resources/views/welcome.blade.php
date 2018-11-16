@extends('layout')

@section('content')
<h2>Welcome {{ Auth::user()->name }}!</h2>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <p>You are now logged in to the Floating Oasis! Now you can start manifesting. <br><br>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam erat libero, facilisis at metus aliquam, sagittis consequat turpis. Proin vel nisl lacinia, semper tortor iaculis, eleifend ipsum. Vestibulum laoreet vel leo sit amet ultricies. Nunc quam turpis, aliquet sed bibendum vitae, dignissim sit amet massa.</p>
@endsection
