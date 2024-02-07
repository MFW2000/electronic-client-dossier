<x-app-layout>
    <x-slot name="header">{{ __('users.create_user') }}</x-slot>

    <p>{{ __('users.create.context') }}</p>

    <form method="post" action="{{ route('users.store') }}">
        @csrf

        <div class="row">
            <div class="col-lg-6 mb-3">
                <x-input-label for="name" :value="__('common.name')"/>
                <x-text-input
                    id="name"
                    name="name"
                    type="text"
                    autocomplete="name"
                    required
                    :value="old('name')"
                    :messages="$errors->get('name')"
                />
                <x-input-error :messages="$errors->get('name')"/>
            </div>

            <div class="col-lg-6 mb-3">
                <x-input-label for="email" :value="__('common.email')"/>
                <x-text-input
                    id="email"
                    name="email"
                    type="email"
                    autocomplete="username"
                    required
                    :value="old('email')"
                    :messages="$errors->get('email')"
                />
                <x-input-error :messages="$errors->get('email')"/>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 mb-3">
                <x-input-label for="password" :value="__('common.password')"/>
                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    autocomplete="new-password"
                    required
                    :messages="$errors->get('password')"
                />
                <x-input-error :messages="$errors->get('password')"/>

                <div class="form-text">
                    <span>{{ __('users.password_context') }}</span>
                </div>
            </div>

            <div class="col-lg-6 mb-3">
                <x-input-label for="password_confirmation" :value="__('users.confirm_password')"/>
                <x-text-input
                    id="password_confirmation"
                    name="password_confirmation"
                    type="password"
                    autocomplete="new-password"
                    required
                    :messages="$errors->get('password')"
                />
                <x-input-error :messages="$errors->get('password_confirmation')"/>
            </div>
        </div>

        <a href="{{ route('users.index') }}" class="btn btn-secondary">{{ __('common.back') }}</a>

        <x-button>{{ __('common.save') }}</x-button>
    </form>
</x-app-layout>
