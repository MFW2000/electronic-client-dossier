<section>
    <h2>{{ __('Profile Information') }}</h2>
    <p>{{ __("Update your account's profile information and email address.") }}</p>

    <form method="post" action="{{ route('profile.update') }}">
        @csrf
        @method('patch')

        <div class="mb-3">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" :value="old('name', $user->name)" required autocomplete="name" :messages="$errors->get('name')" />
            <x-input-error :messages="$errors->get('name')" />
        </div>

        <div class="mb-3">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" :value="old('email', $user->email)" required autocomplete="username" :messages="$errors->get('email')" />
            <x-input-error :messages="$errors->get('email')" />
        </div>

        @if (session('status') === 'profile-updated')
            <x-alert :message="__('Saved.')" :type="'success'" />
        @endif

        <x-primary-button>{{ __('Save') }}</x-primary-button>
    </form>
</section>
