<x-guest-layout>
    <div class="forgot-password card m-auto">
        <div class="card-body">
            <div class="mb-3">
                <span>{{ __('auth.forgot_password.context') }}</span>
            </div>

            <form method="post" action="{{ route('password.email') }}">
                @csrf

                <div class="mb-3">
                    <x-input-label for="email" :value="__('common.email')"/>
                    <x-text-input
                        id="email"
                        type="email"
                        name="email"
                        autofocus
                        required
                        :value="old('email')"
                        :messages="$errors->get('email')"
                    />
                    <x-input-error :messages="$errors->get('email')"/>
                </div>

                <x-alert :message="session('status')" variant="success"/>

                <x-button class="float-end">{{ __('auth.forgot_password.submit') }}</x-button>
            </form>
        </div>
    </div>
</x-guest-layout>
