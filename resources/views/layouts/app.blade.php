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
        <div class="app min-vh-100">
            @include('layouts.navigation')

            <div class="container pt-4 pb-4">
                <div class="card">
                    <div class="card-body">
                        @if (isset($header))
                            <h1 class="card-title">{{ $header }}</h1>
                            <hr>
                        @endif

                        <main>
                            {{ $slot }}
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
