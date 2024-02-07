<x-guest-layout>
    <div class="login card m-auto">
        <div class="card-body">
            <form method="post" action="{{ route('login') }}">
                @csrf

                <div class="mb-2">
                    <x-input-label for="email" :value="__('common.email')"/>
                    <x-text-input
                        id="email"
                        type="email"
                        name="email"
                        autocomplete="username"
                        autofocus
                        required
                        :value="old('email')"
                        :messages="$errors->get('email')"
                    />
                    <x-input-error :messages="$errors->get('email')"/>
                </div>

                <div class="mb-2">
                    <x-input-label for="password" :value="__('common.password')"/>
                    <x-text-input
                        id="password"
                        type="password"
                        name="password"
                        autocomplete="current-password"
                        required
                        :messages="$errors->get('password')"
                    />
                    <x-input-error :messages="$errors->get('password')"/>
                </div>

                <div class="form-check mb-2">
                    <input id="remember_me" type="checkbox" name="remember" class="form-check-input">
                    <label for="remember_me" class="form-check-label">{{ __('auth.login.remember_me') }}</label>
                </div>

                @if (Route::has('password.request'))
                    <div class="mb-2">
                        <a href="{{ route('password.request') }}">{{ __('auth.login.forgot_password') }}</a>
                    </div>
                @endif

                <x-alert :message="session('status')" variant="success"/>

                <x-button class="w-100">{{ __('auth.login.submit') }}</x-button>
            </form>
        </div>
    </div>
</x-guest-layout>
