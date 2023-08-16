
<nav class="navbar navbar-expand-lg navbar-light sticky-top "  style="background-color: rgba(252,223,135,255); ">
<a class="navbar-brand" href="{{ route('homepage') }}">
<img src="{{ asset('images/homepage/LOGO2.png') }}" alt="Logo" width="120" height="65">
</a>
  <a class="nav-link" href="{{ route('homepage') }}">Home</a>
  <a class="nav-link" href="{{ route('catsitting') }}">Cat Sitting</a>
  <a class="nav-link" href="{{ route('forums.index') }}">Forum</a>
  <a class="nav-link" href="#">Shop</a>
  <a class="nav-link" href="{{ route('signs') }}">Cat Astrology</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" id="text1" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" id="text1" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</nav>


