
<nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color: rgba(252,223,135,255);">
    <a class="navbar-brand" href="{{ route('homepage') }}">
        <img src="{{ asset('images/homepage/LOGO2.png') }}" alt="Logo" width="120" height="65">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">
        <a class="nav-link" href="{{ route('homepage') }}">Home</a>
        <a class="nav-link" href="{{ route('catsitting') }}">Cat Sitting</a>
        <a class="nav-link" href="{{ route('forums.index') }}">Forum</a>
        <a class="nav-link" href="#">Shop</a>
        <a class="nav-link" href="{{ route('signs') }}">Cat Astrology</a>

        <!-- Authentication Links -->
        @guest
            <a class="nav-link" href="{{ route('login') }}">Login</a>
            @if (Route::has('register'))
                <a class="nav-link" href="{{ route('register') }}">Register</a>
            @endif
        @else
            <a class="nav-link" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @endguest
    </div>
</nav>

