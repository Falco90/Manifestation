@extends('layoutsplash')

@section('content')
<div class="container">
    <div class="login-form">
        <h2>{{ __('Reset Password') }}</h2>
        <p id="email-text">Fill in your email-address so we can send you a link to reset your password</p>
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                <!--@if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif-->
                            </div>
                        </div>

                        <div class="login">
                            <button type="submit" class="login-btn">
                                {{ __('Send') }}
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
        </div>
@endsection
