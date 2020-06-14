<div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown active">
            <a class="nav-link " href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-3 icon-list icon-badge-container mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30" height="30"><path fill="#FEEBC8" class="heroicon-ui" d="M13 20v-5h-2v5a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-7.59l-.3.3a1 1 0 1 1-1.4-1.42l9-9a1 1 0 0 1 1.4 0l9 9a1 1 0 0 1-1.4 1.42l-.3-.3V20a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2zm5 0v-9.59l-6-6-6 6V20h3v-5c0-1.1.9-2 2-2h2a2 2 0 0 1 2 2v5h3z"/></svg>
                </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item text-gray-600" href="{{route('home')}}">
                    Analitycs
                </a>
                <a class="dropdown-item text-gray-600" href="{{route('eCommerce')}}">
                    eCommerce
                </a>
            </div>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="{{route('todo')}}">
                <span class="mr-2 icon-list">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30" height="30">
                        <path fill="#FEEBC8" class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-2.3-8.7l1.3 1.29 3.3-3.3a1 1 0 0 1 1.4 1.42l-4 4a1 1 0 0 1-1.4 0l-2-2a1 1 0 0 1 1.4-1.42z"/>
                    </svg>
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('chats')}}">
                <span class="mr-2 icon-list">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30" height="30">
                        <path fill="#FEEBC8" class="heroicon-ui" d="M6 14H4a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h12a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v13a1 1 0 0 1-1.7.7L16.58 18H8a2 2 0 0 1-2-2v-2zm0-2V8c0-1.1.9-2 2-2h8V4H4v8h2zm14-4H8v8h9a1 1 0 0 1 .7.3l2.3 2.29V8z"/>
                    </svg>
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('mail')}}">
                <span class="mr-2 icon-list">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30" height="30">
                        <path fill="#FEEBC8" class="heroicon-ui" d="M4 4h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2zm16 3.38V6H4v1.38l8 4 8-4zm0 2.24l-7.55 3.77a1 1 0 0 1-.9 0L4 9.62V18h16V9.62z"/>
                    </svg>
                </span>
            </a>
        </li>
        <li class="nav-item dropdown active">
            <a class="nav-link " href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="icon-list">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30" height="30">
                        <path fill="#FEEBC8" class="heroicon-ui" d="M17 16a3 3 0 1 1-2.83 2H9.83a3 3 0 1 1-5.62-.1A3 3 0 0 1 5 12V4H3a1 1 0 1 1 0-2h3a1 1 0 0 1 1 1v1h14a1 1 0 0 1 .9 1.45l-4 8a1 1 0 0 1-.9.55H5a1 1 0 0 0 0 2h12zM7 12h9.38l3-6H7v6zm0 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                    </svg>
                </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item text-gray-600" href="{{route('shop.index')}}">
                    Shop
                </a>
                <a class="dropdown-item text-gray-600" href="{{route('shop.show')}}">
                    Item Details
                </a>
                <a class="dropdown-item text-gray-600" href="{{route('shop.wishlist')}}">
                    Wish List
                </a>
                <a class="dropdown-item text-gray-600" href="{{route('shop.checkout')}}">
                    Checkout
                </a>
            </div>
        </li>
        <a class="nav-link active"
            data-toggle="collapse"
            data-target="#navbarHeader"
            aria-controls="navbarHeader"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="#FEEBC8" class="heroicon-ui" d="M4 15a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0-2a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm8 2a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0-2a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm8 2a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0-2a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/></svg></span>
        </a>
    </ul>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="#">
                <span class="mr-2 icon-list">
                    <svg xmlns="http://www.w3.org/2000/svg"  width="30" height="30" viewBox="0 0 99.325 99.299">
                        <path fill="#FEEBC8" id="icons8-search" d="M52.35,14.4A38,38,0,1,0,79.2,25.5,37.852,37.852,0,0,0,52.35,14.4ZM52.3,20.3a31.551,31.551,0,0,1,22.6,9.4,31.873,31.873,0,1,1-22.6-9.4Zm0,6A25.413,25.413,0,0,0,34,34a25.974,25.974,0,0,0-7.6,17.4,2.946,2.946,0,0,0,2.9,3.1h.1a3.058,3.058,0,0,0,3-2.9,20.287,20.287,0,0,1,5.8-13.4,19.833,19.833,0,0,1,14.1-5.9,3,3,0,0,0,0-6ZM35,64a3,3,0,1,0,3,3A3,3,0,0,0,35,64ZM83.363,80.5a2.777,2.777,0,0,0-2.062.9,2.9,2.9,0,0,0,0,4.2l2.5,2.5a8.6,8.6,0,0,0-.9,3.9,9,9,0,0,0,2.6,6.4L98.3,111a9.018,9.018,0,0,0,6.4,2.7,9.35,9.35,0,0,0,6.4-2.6,8.992,8.992,0,0,0,0-12.7L98.3,85.6A9,9,0,0,0,91.9,83a8.6,8.6,0,0,0-3.9.9l-2.5-2.5A3.023,3.023,0,0,0,83.363,80.5ZM91.9,88.9a2.723,2.723,0,0,1,2.1.9l12.7,12.7a2.969,2.969,0,0,1-4.2,4.2L89.8,94.1a3.1,3.1,0,0,1-.9-2.2,2.723,2.723,0,0,1,.9-2.1A2.878,2.878,0,0,1,91.9,88.9Z" transform="translate(-14.4 -14.4)"/>
                    </svg>
                </span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link " href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-3 icon-list icon-badge-container mr-3">
                    <span class="icon-badge" style="z-index:1;">6</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon-badge-icon dropbtn dropdown-toggle" viewBox="0 0 24 24" width="30" height="30"><path fill="#FEEBC8" class="heroicon-ui" d="M17 16a3 3 0 1 1-2.83 2H9.83a3 3 0 1 1-5.62-.1A3 3 0 0 1 5 12V4H3a1 1 0 1 1 0-2h3a1 1 0 0 1 1 1v1h14a1 1 0 0 1 .9 1.45l-4 8a1 1 0 0 1-.9.55H5a1 1 0 0 0 0 2h12zM7 12h9.38l3-6H7v6zm0 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/></svg></span>
                    </span>
                    </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item text-gray-600" href="{{route('user.profile')}}">
                    <img src="{{asset('images/american coffee.jpg')}}"
                    width="30"
                    height="30"
                    class="rounded-circle shadow"
                    alt="" >
                    American Coffee 2x
                </a>
                <a class="dropdown-item text-gray-600" href="{{route('user.profile')}}">
                    <img src="{{asset('images/Black coffee mix.jpg')}}"
                    width="30"
                    height="30"
                    class="rounded-circle shadow"
                    alt="" >
                    Black coffee mix 2x
                </a>
                <a class="dropdown-item text-gray-600" href="{{route('user.profile')}}">
                    <img src="{{asset('images/Black-coffee-feature-image.jpg')}}"
                    width="30"
                    height="30"
                    class="rounded-circle shadow"
                    alt="" >
                    Black coffee Feature 2x
                </a>
                <a class="dropdown-item text-gray-600" href="{{route('user.profile')}}">
                    <img src="{{asset('images/carammel latte.jpg')}}"
                    width="30"
                    height="30"
                    class="rounded-circle shadow"
                    alt="" >
                    carammel latte 2x
                </a>
                <a class="dropdown-item text-gray-600" href="{{route('user.profile')}}">
                    <img src="{{asset('images/Espresso Macchiato.jpg')}}"
                    width="30"
                    height="30"
                    class="rounded-circle shadow"
                    alt="" >
                    Espresso Macchiato 2x
                </a>
                <a class="dropdown-item text-gray-600" href="{{route('user.profile')}}">
                    <img src="{{asset('images/coffee moca.jpeg')}}"
                    width="30"
                    height="30"
                    class="rounded-circle shadow"
                    alt="" >
                    coffee moca 2x
                </a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link " href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-3 icon-list icon-badge-container mr-3">
                    <span class="icon-badge" style="z-index:1;">1</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="34" height="34"><path fill="#FEEBC8" class="heroicon-ui" d="M15 19a3 3 0 0 1-6 0H4a1 1 0 0 1 0-2h1v-6a7 7 0 0 1 4.02-6.34 3 3 0 0 1 5.96 0A7 7 0 0 1 19 11v6h1a1 1 0 0 1 0 2h-5zm-4 0a1 1 0 0 0 2 0h-2zm0-12.9A5 5 0 0 0 7 11v6h10v-6a5 5 0 0 0-4-4.9V5a1 1 0 0 0-2 0v1.1z"/></svg>
                </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item text-gray-600" href="#">
                    <img src="{{asset('images/andrey-zvyagintsev-aN_m_CK5M3Q-unsplash.jpg')}}"
                    width="30"
                    height="30"
                    class="rounded-circle shadow"
                    alt="" >
                    Congratulation...
                </a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link " href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <small class="text-orange font-weight-bolder mr-2">
                    Chaerul Fajar Subhi
                </small>
                <img src="{{asset('images/user.jpg')}}"
                    width="30"
                    height="30"
                    class="rounded-circle shadow"
                    alt="" >
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item text-gray-600" href="{{route('user.profile')}}">
                    <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 12a5 5 0 1 1 0-10 5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v2z"/></svg></span>
                    Profile
                </a>
                <a class="dropdown-item text-gray-600" href="{{route('mail')}}">
                    <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M4 4h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2zm16 3.38V6H4v1.38l8 4 8-4zm0 2.24l-7.55 3.77a1 1 0 0 1-.9 0L4 9.62V18h16V9.62z"/></svg></span>
                    Inbox
                </a>
                <a class="dropdown-item text-gray-600" href="{{route('chats')}}">
                    <span><svg viewBox="0 -24 480 480" width="24" height="24" xmlns="http://www.w3.org/2000/svg"><path d="m408 0h-336c-39.746094.0429688-71.9570312 32.253906-72 72v208c.0429688 39.746094 32.253906 71.957031 72 72h22.238281l-14.078125 70.398438c-.605468 3.027343.585938 6.128906 3.054688 7.976562s5.78125 2.109375 8.511718.671875l150.25-79.046875h166.023438c39.746094-.042969 71.957031-32.253906 72-72v-208c-.042969-39.746094-32.253906-71.9570312-72-72zm56 280c-.035156 30.914062-25.085938 55.964844-56 56h-168c-1.300781 0-2.578125.316406-3.726562.921875l-137.128907 72.175781 12.695313-63.496094c.480468-2.355468-.121094-4.800781-1.640625-6.660156-1.519531-1.863281-3.796875-2.941406-6.199219-2.941406h-32c-30.914062-.035156-55.964844-25.085938-56-56v-208c.035156-30.914062 25.085938-55.964844 56-56h336c30.914062.035156 55.964844 25.085938 56 56zm0 0"/></svg></span>
                    Chat
                </a>
                <a class="dropdown-item text-gray-600" href="{{route('shop.wishlist')}}">
                    <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12.76 3.76a6 6 0 0 1 8.48 8.48l-8.53 8.54a1 1 0 0 1-1.42 0l-8.53-8.54a6 6 0 0 1 8.48-8.48l.76.75.76-.75zm7.07 7.07a4 4 0 1 0-5.66-5.66l-1.46 1.47a1 1 0 0 1-1.42 0L9.83 5.17a4 4 0 1 0-5.66 5.66L12 18.66l7.83-7.83z"/></svg></span>
                    Wish List
                </a>

                <a class="dropdown-item text-gray-600"
                   href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M6 18.7V21a1 1 0 0 1-2 0v-5a1 1 0 0 1 1-1h5a1 1 0 1 1 0 2H7.1A7 7 0 0 0 19 12a1 1 0 1 1 2 0 9 9 0 0 1-15 6.7zM18 5.3V3a1 1 0 0 1 2 0v5a1 1 0 0 1-1 1h-5a1 1 0 0 1 0-2h2.9A7 7 0 0 0 5 12a1 1 0 1 1-2 0 9 9 0 0 1 15-6.7z"/></svg>
                    </span>
                    Logout
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </a>
            </div>
        </li>
    </ul>
</div>