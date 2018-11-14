<div class="navbar">
    <ul class="nav-ul">
        <a href='/home' class="menu"><li class="nav-li">Home</li></a>
        <a href='/manifestations/create' class="menu"><li class="nav-li">New manifestation</li></a>
        <a href='/manifestations' class="menu"><li class="nav-li">Your manifestations</li></a>
        <li class="nav-li"><form id="logout-form" action="{{ route('logout') }}" method="POST"><button class="btn-link" type="submit">
                                        @csrf
                                        Logout</button>
                                    
                                    </form></li>
    </ul>
    </ul>
</div>