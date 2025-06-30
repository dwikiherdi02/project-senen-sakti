<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="id">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport"
            content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
        {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Disable tap highlight on IE -->
        <meta name="msapplication-tap-highlight" content="no">

        <title>{{ config('app.name', 'Laravel') }} | {{ $title ?? '' }}</title>

        @livewireStyles
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    </head>

    <body class="bg-1">
        <div class="container">
            {{ $slot }}
        </div>
        
        @livewireScripts
        {{-- @livewireScriptConfig --}}
    </body>
</html>