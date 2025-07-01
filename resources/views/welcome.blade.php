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
                {{-- <h1 class="fm fm-chewy">{{ __('Welcome!!') }}</h1> --}}
                {{-- <h2 class="fm fm-fredoka">{{ __('This is Laravel 12 with Bootstrap 5.3') }}</h2> --}}
                {{-- <button class="fm fm-chewy"> Masuk </button> --}}

                <div class="row w-100">
                    <div class="col-md-3 px-3 text-center">
                        <div class="scroll-banner scroll-banner-wood scroll-banner-sm">
                            <div class="scroll-banner-content">
                                <button type="button" class="scroll-banner-btn fm fm-chewy">Small</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 px-3 text-center">
                        <div class="scroll-banner scroll-banner-wood scroll-banner-md">
                            <div class="scroll-banner-content">
                                <button type="button" class="scroll-banner-btn fm fm-chewy">Medium</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 px-3 text-center">
                        <div class="scroll-banner scroll-banner-wood scroll-banner-lg">
                            <div class="scroll-banner-content">
                                <button type="button" class="scroll-banner-btn fm fm-chewy">Large</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 px-3 text-center">
                        <div class="scroll-banner scroll-banner-wood scroll-banner-xl">
                            <div class="scroll-banner-content">
                                <button type="button" class="scroll-banner-btn fm fm-chewy">Xtra Large</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </body>
</html>
