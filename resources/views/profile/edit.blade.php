{{-- TODO: Style profile management --}}
<x-app-layout>
    <x-slot name="header">
        <h1>{{ __('Profile') }}</h1>
    </x-slot>

    <div>
        <div>
            @include('profile.partials.update-profile-information-form')
        </div>

        <div>
            @include('profile.partials.update-password-form')
        </div>

        <div>
            @include('profile.partials.delete-user-form')
        </div>
    </div>
</x-app-layout>
