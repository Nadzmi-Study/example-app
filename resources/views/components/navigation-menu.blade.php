<ul class="nav nav-pills">
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/') }}">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/pdf') }}">PDF</a>
    </li>

    @if ($isLoggedIn)
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/user') }}">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/logout') }}">Logout</a>
        </li>
    @else
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/login') }}">Login</a>
        </li>
    @endif
</ul>
