<x-app-layout>
    <x-slot name="header">{{ __('profile.title') }}</x-slot>

    @include('profile.partials.update-profile-information-form')
    <hr>

    @include('profile.partials.update-password-form')
</x-app-layout>
