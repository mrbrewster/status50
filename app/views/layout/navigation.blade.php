<nav>
    <ul>
        @if(!Auth::check())
            <li><a href="{{ URL::to('/session/create') }}">Login</a></li>
            <li><a href="{{ URL::to('/account/create') }}">Register</a></li>
        @elseif(Auth::check())
            <li><a href="{{ URL::to('/ticket/create') }}">Create Ticket</a></li>
            <li><a href="{{ URL::to('/session/delete') }}">Logout</a></li>
        @endif
    </ul>
</nav>