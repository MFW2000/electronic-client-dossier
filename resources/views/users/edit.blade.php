<x-app-layout>
    <x-slot name="header">{{ __('users.update.title') }}</x-slot>

    <form method="post" action="{{ route('users.update', ['id' => $user->id]) }}">
        @csrf
        @method('patch')

        <div class="row">
            <div class="col-lg-6 mb-3">
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

            <div class="col-lg-6 mb-3">
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
        </div>

        <a href="{{ route('users.index') }}" class="btn btn-secondary">{{ __('common.back') }}</a>

        <x-button>{{ __('common.save') }}</x-button>
    </form>
</x-app-layout>
