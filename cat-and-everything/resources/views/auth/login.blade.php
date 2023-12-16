<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />


    
    <form method="POST" action="{{ route('login') }}" style="background-color: rgba(252, 223, 135, 255); padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
        @csrf

        <!-- Email Address -->
        <div style="margin-bottom: 20px;">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" style="width: 100%; padding: 10px; border: 2px solid #80728d; border-radius: 4px;" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div style="margin-bottom: 20px;">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" style="width: 100%; padding: 10px; border: 2px solid #80728d; border-radius: 4px;" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block" style="margin-bottom: 20px;">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm" style="color: #80728d;">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end" style="margin-top: 20px;">
            @if (Route::has('password.request'))
                <a class="underline text-sm hover:text-gray-900" href="{{ route('password.request') }}" style="color: #80728d; margin-right: 10px;">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button style="background-color: #80728d; color: white; border: none; padding: 10px 20px; border-radius: 4px;">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
