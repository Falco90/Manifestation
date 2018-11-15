@extends('layoutsplash')

@section('content')
<div class="container">
    <div class="login-form">
    <h2>{{ __('Login') }}</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group row">
            <label for="email">{{ __('E-Mail Address') }}</label><br>
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
        </div>
        <div class="form-group row">
            <label for="password">{{ __('Password') }}</label><br>
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
        </div>
        <div>
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>
        </div>
        <div class="login">
            <button type="submit" class="login-btn">
                        {{ __('Login') }}
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
    <div class="form-group forgot-pw">
            <a class="btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
                </a>
        </div>
    </div>
</div>
@endsection
