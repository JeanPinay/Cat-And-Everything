<form id="logout-form" action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" class="nav-link btn btn-link">{{ __('Logout') }}</button>
</form>
