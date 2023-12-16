<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" style="background-color: rgba(252, 223, 135, 255); padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
        @csrf

        <!-- Name -->
        <div style="margin-bottom: 20px;">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" style="width: 100%; padding: 10px; border: 2px solid #80728d; border-radius: 4px;" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div style="margin-bottom: 20px;">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" style="width: 100%; padding: 10px; border: 2px solid #80728d; border-radius: 4px;" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div style="margin-bottom: 20px;">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" style="width: 100%; padding: 10px; border: 2px solid #80728d; border-radius: 4px;" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div style="margin-bottom: 20px;">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" style="width: 100%; padding: 10px; border: 2px solid #80728d; border-radius: 4px;" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end" style="margin-top: 20px;">
            <a class="underline text-sm" href="{{ route('login') }}" style="color: #80728d; margin-right: 10px;">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button style="background-color: #80728d; color: white; border: none; padding: 10px 20px; border-radius: 4px;">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
