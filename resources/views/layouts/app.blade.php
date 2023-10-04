<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Electronic Client Dossier') }}</title>

        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    </head>

    <body>
        <div>
            @include('layouts.navigation')

            @if (isset($header))
                <header class="bg-white shadow">
                    {{ $header }}
                </header>
            @endif

            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
