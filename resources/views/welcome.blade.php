<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles / Scripts -->
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <div class="container vh-100">
            <div class="d-flex flex-column justify-content-center align-items-center vh-100">
                <h1 class="fm fm-chewy">{{ __('Welcome!!') }}</h1>
                <h2 class="fm fm-fredoka">{{ __('This is Laravel 12 with Bootstrap 5.3') }}</h2>
            </div> 
        </div>
    </body>
</html>
