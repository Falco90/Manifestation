<div class="navbar">
    <ul class="nav-ul">
    <li class="nav-li">
    <a href="{{ route('login') }}">{{ __('Login') }}</a>
    </li>
    <li class="nav-li">
    @if (Route::has('register'))
    <a href="{{ route('register') }}">{{ __('Register') }}</a>
    @endif
    </li>
    </ul>
</div>
