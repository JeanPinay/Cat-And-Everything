@extends('layouts.layout')

@section('content')

<main class="home">
<section class="py-5 text-center container">
    <div class="p-4 p-md-5 mb-4 text-black rounded" style="background-color: #fef2cf;">
        <div class="col-lg-9 col-md-8 mx-auto">
        <h3 style="font-family: 'Gagalin', sans-serif;"> Welcome Meowback!</h3>
        </div>
    </div>
<div class="login-form" style="background-color:  rgba(252,223,135,255);">
    <h2>Login</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <label for="email">{{ __('Email Address') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <!-- <div class="form-group" style="margin-bottom: 15px;">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember" style="white-space: nowrap;">
                    Remember Me
                </label>
            </div>
        </div> -->

        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                {{ __('Login') }}
            </button>
        </div>
    </form>
    <p style="text-align: center; color: #888888; margin-top: 10px;">Don't have an account yet? <a href="{{ route('register') }}">Create account</a></p>
</div>
</section>
</main>
@endsection
