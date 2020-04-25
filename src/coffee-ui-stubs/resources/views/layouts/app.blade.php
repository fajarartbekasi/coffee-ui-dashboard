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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>
        <link rel="stylesheet" href="{{asset('css/')}}/app.css">
    </head>
    <body>
        @include('layouts.page_template.nav')
        <div class="container-fluid">
            @include('layouts.page_template.left')
            <div class="row">
                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                    @yield('content')

                </main>
            </div>
        </div>
        <script type="text/javascript" scr="{{asset('js/')}}/app.js"></script>
        <script src="{{asset('js/')}}/chartDoughNut.js"></script>
        <script src="{{asset('js/')}}/chartOrder.js"></script>
        <script src="{{asset('js/')}}/revenueGrowth.js"></script>
        <script src="{{asset('js/')}}/polar.js"></script>
        <script src="{{asset('js/')}}/users.js"></script>
        <script src="{{asset('js/')}}/bounceRate.js"></script>
        <script src="{{asset('js/')}}/sessions.js"></script>
        <script src="{{asset('js/')}}/websiteAnalitics.js"></script>
        <script src="{{asset('js/')}}/referral.js"></script>
        <script src="{{asset('js/')}}/profit.js"></script>
        <script src="{{asset('js/')}}/registration.js"></script>
        <script>
            function myFunction() {
                document.getElementById("myDropdown").classList.toggle("show");
            }
            window.onclick = function(event) {
                if (!event.target.matches('.dropbtn')) {
                            var dropdowns = document.getElementsByClassName("dropdown-content");
                            var i;
                            for (i = 0; i < dropdowns.length; i++) {
                            var openDropdown = dropdowns[i];
                            if (openDropdown.classList.contains('show')) {
                                openDropdown.classList.remove('show');
                            }
                        }
                    }
                }
        </script>
        <script>
            var dropdown = document.getElementsByClassName("dropdown-btn");
            var i;

            for (i = 0; i < dropdown.length; i++) {
                dropdown[i].addEventListener("click", function () {
                    this.classList.toggle("active");
                    var dropdownContent = this.nextElementSibling;
                    if (dropdownContent.style.display === "block") {
                        dropdownContent.style.display = "none";
                    } else {
                        dropdownContent.style.display = "block";
                    }
                });
            }
        </script>
    </body>
</html>