<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Coffee</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/')}}/_auth.css">
    </head>
    <body>
        <main id="app" class="flex-shrink-0">
            <div class="container py-6">
                <div class="row d-flex justify-content-center">
                    @yield('content')
                </div>
            </div>

        </main>
        <footer class="footer mt-auto py-3">
            <div class="container">
                <div class="d-flex">
                    <div class="mr-auto ml-4">
                        <p>2020 Copyright FajarDev</p>
                    </div>
                    <div class="mr-4">
                        <p>Coffe By FajarDev</p>
                    </div>
                </div>
            </div>
        </footer
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
