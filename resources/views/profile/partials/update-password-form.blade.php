<section>
    <h2>{{ __('Update Password') }}</h2>
    <p>{{ __('Ensure your account is using a long, random password to stay secure.') }}</p>

    <form method="post" action="{{ route('password.update') }}">
        @csrf
        @method('put')

        <div class="mb-3">
            <x-input-label for="current_password" :value="__('Current Password')"/>
            <x-text-input id="current_password" name="current_password" type="password" autocomplete="current-password" :messages="$errors->updatePassword->get('current_password')"/>
            <x-input-error :messages="$errors->updatePassword->get('current_password')"/>
        </div>

        <div class="mb-3">
            <x-input-label for="password" :value="__('New Password')"/>
            <x-text-input id="password" name="password" type="password" autocomplete="new-password" :messages="$errors->updatePassword->get('password')"/>
            <x-input-error :messages="$errors->updatePassword->get('password')"/>
        </div>

        <div class="mb-3">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')"/>
            <x-text-input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" :messages="$errors->updatePassword->get('password_confirmation')"/>
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')"/>
        </div>

        @if (session('status') === 'password-updated')
            <x-alert :message="__('Saved.')" variant="success"/>
        @endif

        <x-button>{{ __('Save') }}</x-button>
    </form>
</section>
