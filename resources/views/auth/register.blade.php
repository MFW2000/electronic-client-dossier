<x-guest-layout>
    <form method="post" action="{{ route('register') }}">
        @csrf

        <div>
            <x-input-label for="name" :value="__('Name')"/>
            <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name"/>
            <x-input-error :messages="$errors->get('name')"/>
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')"/>
            <x-text-input id="email" type="email" name="email" :value="old('email')" required autocomplete="username"/>
            <x-input-error :messages="$errors->get('email')"/>
        </div>

        <div>
            <x-input-label for="password" :value="__('Password')"/>
            <x-text-input id="password" type="password" name="password" required autocomplete="new-password"/>
            <x-input-error :messages="$errors->get('password')"/>
        </div>

        <div>
            <x-input-label for="password_confirmation" :value="__('Confirm Password')"/>
            <x-text-input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"/>
            <x-input-error :messages="$errors->get('password_confirmation')"/>
        </div>

        <div>
            <a href="{{ route('login') }}">{{ __('Already registered?') }}</a>

            <x-button>{{ __('Register') }}</x-button>
        </div>
    </form>
</x-guest-layout>
