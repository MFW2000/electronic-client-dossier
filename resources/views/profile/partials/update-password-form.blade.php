<section>
    <h2>{{ __('profile.update_password.title') }}</h2>
    <p>{{ __('profile.update_password.context') }}</p>

    <form method="post" action="{{ route('password.update') }}">
        @csrf
        @method('put')

        <div class="mb-3">
            <x-input-label for="current_password" :value="__('profile.update_password.current')"/>
            <x-text-input
                id="current_password"
                name="current_password"
                type="password"
                autocomplete="current-password"
                required
                :messages="$errors->updatePassword->get('current_password')"
            />
            <x-input-error :messages="$errors->updatePassword->get('current_password')"/>
        </div>

        <div class="mb-3">
            <x-input-label for="password" :value="__('profile.update_password.new')"/>
            <x-text-input
                id="password"
                name="password"
                type="password"
                autocomplete="new-password"
                required
                :messages="$errors->updatePassword->get('password')"
            />
            <x-input-error :messages="$errors->updatePassword->get('password')"/>

            <div class="form-text">
                <span>{{ __('common.password_context') }}</span>
            </div>
        </div>

        <div class="mb-3">
            <x-input-label for="password_confirmation" :value="__('common.confirm_password')"/>
            <x-text-input
                id="password_confirmation"
                name="password_confirmation"
                type="password"
                autocomplete="new-password"
                required
                :messages="$errors->updatePassword->get('password_confirmation')"
            />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')"/>
        </div>

        @if (session('status') === 'password-updated')
            <x-alert :message="__('profile.update_password.saved')" variant="success"/>
        @endif

        <x-button>{{ __('common.save') }}</x-button>
    </form>
</section>
