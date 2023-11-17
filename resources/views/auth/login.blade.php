<x-guest-layout>
    <div class="login card m-auto">
        <div class="card-body">
            <form method="post" action="{{ route('login') }}">
                @csrf

                <div class="mb-2">
                    <x-input-label for="email" :value="__('Email')"/>
                    <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" :messages="$errors->get('email')"/>
                    <x-input-error :messages="$errors->get('email')"/>
                </div>

                <div class="mb-2">
                    <x-input-label for="password" :value="__('Password')"/>
                    <x-text-input id="password" type="password" name="password" required autocomplete="current-password" :messages="$errors->get('password')"/>
                    <x-input-error :messages="$errors->get('password')"/>
                </div>

                <div class="form-check mb-2">
                    <input id="remember_me" type="checkbox" name="remember" class="form-check-input">
                    <label for="remember_me" class="form-check-label">{{ __('Remember me') }}</label>
                </div>

                @if (Route::has('password.request'))
                    <div class="mb-2">
                        <a href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
                    </div>
                @endif

                <x-alert :message="session('status')" variant="success"/>

                <x-button class="w-100">{{ __('Log in') }}</x-button>
            </form>
        </div>
    </div>
</x-guest-layout>
