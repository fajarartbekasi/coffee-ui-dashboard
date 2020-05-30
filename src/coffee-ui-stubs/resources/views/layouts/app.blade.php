
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Coffee UI Dashboard</title>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{asset('css/')}}/app.css">
  </head>
  <body class="bg-gray-100">
        <div id="app">
            @include('layouts.page_template.nav')
            @include('layouts.page_template.navheader')
            <main role="main" class="container">
                <div class="my-3 py-3">
                    @yield('content')
                </div>
            </main>
        </div>
        <script src="{{asset('js/')}}/app.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="{{asset('js/')}}/offcanvas.js"></script>
        @stack('scripts')
    </body>
</html>
