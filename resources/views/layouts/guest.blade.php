<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex, nofollow">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Electronic Client Dossier') }}</title>

        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    </head>

    <body>
        <div class="guest container-fluid">
            <div class="vh-100 d-flex flex-column justify-content-center align-items-center">
                <div class="logo-container mb-4">
                    <a href="{{ route('login') }}">
                        <x-application-logo />
                    </a>
                </div>

                <div class="authentication w-100">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>
</html>
