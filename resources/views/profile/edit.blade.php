<x-app-layout>
    <x-slot name="header">
        <h1>{{ __('Profile') }}</h1>
        <hr>
    </x-slot>

    @include('profile.partials.update-profile-information-form')
    <hr>

    @include('profile.partials.update-password-form')
</x-app-layout>
