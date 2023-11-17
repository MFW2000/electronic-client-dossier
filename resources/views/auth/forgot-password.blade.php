<x-guest-layout>
    <div class="forgot-password card m-auto">
        <div class="card-body">
            <div class="mb-3">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            <form method="post" action="{{ route('password.email') }}">
                @csrf

                <div class="mb-3">
                    <x-input-label for="email" :value="__('Email')"/>
                    <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus :messages="$errors->get('email')"/>
                    <x-input-error :messages="$errors->get('email')"/>
                </div>

                <x-alert :message="session('status')" variant="success"/>

                <x-button class="float-end">{{ __('Email Password Reset Link') }}</x-button>
            </form>
        </div>
    </div>
</x-guest-layout>
