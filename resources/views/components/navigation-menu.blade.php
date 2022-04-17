<div>
    <a href="{{ url('/') }}">Home</a>

    @if ($isLoggedIn)
        <a href="{{ url('/user') }}">Profile</a>
        <a href="{{ url('/logout') }}">Logout</a>
    @else
        <a href="{{ url('/login') }}">Login</a>
    @endif
</div>
