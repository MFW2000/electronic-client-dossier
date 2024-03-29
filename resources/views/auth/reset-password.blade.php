<x-guest-layout>
    <div class="reset-password card m-auto">
        <div class="card-body">
            <form method="post" action="{{ route('password.store') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <div class="mb-3">
                    <x-input-label for="email" :value="__('common.email')"/>
                    <x-text-input
                        id="email"
                        type="email"
                        name="email"
                        :value="old('email', $request->email)"
                        required
                        autofocus
                        autocomplete="username"
                        :messages="$errors->get('email')"
                    />
                    <x-input-error :messages="$errors->get('email')"/>
                </div>

                <div class="mb-3">
                    <x-input-label for="password" :value="__('common.password')"/>
                    <x-text-input
                        id="password"
                        type="password"
                        name="password"
                        required
                        autocomplete="new-password"
                        :messages="$errors->get('password')"
                    />
                    <x-input-error :messages="$errors->get('password')"/>

                    <div class="form-text">
                        <span>{{ __('common.password_context') }}</span>
                    </div>
                </div>

                <div class="mb-3">
                    <x-input-label for="password_confirmation" :value="__('auth.reset_password.confirm')"/>
                    <x-text-input
                        id="password_confirmation"
                        type="password"
                        name="password_confirmation"
                        required
                        autocomplete="new-password"
                        :messages="$errors->get('password_confirmation')"
                    />
                    <x-input-error :messages="$errors->get('password_confirmation')"/>
                </div>

                <x-button class="float-end">{{ __('auth.reset_password.submit') }}</x-button>
            </form>
        </div>
    </div>
</x-guest-layout>
