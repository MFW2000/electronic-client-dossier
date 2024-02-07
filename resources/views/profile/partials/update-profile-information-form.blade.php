<section>
    <h2>{{ __('profile.update_profile_information.title') }}</h2>
    <p>{{ __("profile.update_profile_information.context") }}</p>

    <form method="post" action="{{ route('profile.update') }}">
        @csrf
        @method('patch')

        <div class="mb-3">
            <x-input-label for="name" :value="__('common.name')"/>
            <x-text-input
                id="name"
                name="name"
                type="text"
                autocomplete="name"
                required
                :value="old('name', $user->name)"
                :messages="$errors->get('name')"
            />
            <x-input-error :messages="$errors->get('name')"/>
        </div>

        <div class="mb-3">
            <x-input-label for="email" :value="__('common.email')"/>
            <x-text-input
                id="email"
                name="email"
                type="email"
                autocomplete="username"
                required
                :value="old('email', $user->email)"
                :messages="$errors->get('email')"
            />
            <x-input-error :messages="$errors->get('email')"/>
        </div>

        @if (session('status') === 'profile-updated')
            <x-alert :message="__('profile.update_profile_information.saved')" variant="success"/>
        @endif

        <x-button>{{ __('common.save') }}</x-button>
    </form>
</section>
