@extends('layoutsplash')

@section('content')
    <div class="container">
        <div class="login-form">
        <h2>{{ __('Register') }}</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group row">
                <label for="name">{{ __('Name') }}</label><br>
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>
            </div>        
            <div class="form-group row">
                <label for="email">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
            </div>
            <div class="form-group row">
                <label for="password">{{ __('Password') }}</label><br>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
            </div>
            <div class="form-group row">
                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>
            <div class="login">
                <button type="submit" class="login-btn">
                    {{ __('Register') }}
                </button>
            </div>
       
        </form>
        @if ($errors->any())
        <div class="notification">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        </div>  
    </div>        
@endsection
