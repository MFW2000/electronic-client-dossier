<x-guest-layout>
    <div class="confirm-password card m-auto">
        <div class="card-body">
            <div class="mb-3">
                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
            </div>

            <form method="post" action="{{ route('password.confirm') }}">
                @csrf

                <div class="mb-3">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" />
                </div>

                <x-primary-button class="float-end">{{ __('Confirm') }}</x-primary-button>
            </form>
        </div>
    </div>
</x-guest-layout>
