@extends(
    'layouts.welcome'
)

@section('content')

<div class="flex-center position-ref full-height">
    <div class="content">
        <svg xmlns="http://www.w3.org/2000/svg" width="40%" height="40%" viewBox="0 0 898 604">
            <g id="Group_375" data-name="Group 375" transform="translate(-2344 -2975.875)">
            <text id="Coffee" transform="translate(2352 3405.875)" fill="#8b6b61" font-size="471" font-family="Rithem" letter-spacing="0.057em"><tspan x="0" y="0">Coffee</tspan></text>
            <text id="Dashboard" transform="translate(2366 3480.875)" fill="#cb998a" font-size="67" font-family="HelveticaNeue-Bold, Helvetica Neue" font-weight="700"><tspan x="0" y="0">Dashboard</tspan></text>
            </g>
        </svg>
        <div class="title">
           Let’s to start you’re journey with coffee
           <div>
                @auth
                    @include('layouts.buttons.auth')
                @endauth
                @guest
                    @include('layouts.buttons.guest')
                @endguest
           </div>
        </div>
    </div>
</div>
@endsection