@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb ">
    <ol class="breadcrumb bg-transparent text-orange-100">
        <li class="breadcrumb-item text-orange-100 " aria-current="page">
        <span class="mr-3 icon-list icon-badge-container mr-3">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26"><path fill="#8B6B61" class="heroicon-ui" d="M13 20v-5h-2v5a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-7.59l-.3.3a1 1 0 1 1-1.4-1.42l9-9a1 1 0 0 1 1.4 0l9 9a1 1 0 0 1-1.4 1.42l-.3-.3V20a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2zm5 0v-9.59l-6-6-6 6V20h3v-5c0-1.1.9-2 2-2h2a2 2 0 0 1 2 2v5h3z"/></svg>
        </span>
        <span class="mr-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24.523 24.18">
                <g id="Group_515" data-name="Group 515" transform="translate(-344 -262)">
                    <path id="icon-cheveron-right" d="M9.593,11.048a2.467,2.467,0,0,1,3.454-3.454l9.869,9.869a2.467,2.467,0,0,1,0,3.454l-9.869,9.869a2.467,2.467,0,0,1-3.454-3.454l8.118-8.142L9.569,11.048Z" transform="translate(334.9 254.9)" fill="#6a6a6a"/>
                    <path id="icon-cheveron-right-2" data-name="icon-cheveron-right" d="M9.593,11.048a2.467,2.467,0,0,1,3.454-3.454l9.869,9.869a2.467,2.467,0,0,1,0,3.454l-9.869,9.869a2.467,2.467,0,0,1-3.454-3.454l8.118-8.142L9.569,11.048Z" transform="translate(344.9 254.9)" fill="#6a6a6a"/>
                </g>
            </svg>
        </span>
            eCommerce
        </li>
        <li class="">
            <span class="mr-3 ml-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24.523 24.18">
                    <g id="Group_515" data-name="Group 515" transform="translate(-344 -262)">
                        <path id="icon-cheveron-right" d="M9.593,11.048a2.467,2.467,0,0,1,3.454-3.454l9.869,9.869a2.467,2.467,0,0,1,0,3.454l-9.869,9.869a2.467,2.467,0,0,1-3.454-3.454l8.118-8.142L9.569,11.048Z" transform="translate(334.9 254.9)" fill="#6a6a6a"/>
                        <path id="icon-cheveron-right-2" data-name="icon-cheveron-right" d="M9.593,11.048a2.467,2.467,0,0,1,3.454-3.454l9.869,9.869a2.467,2.467,0,0,1,0,3.454l-9.869,9.869a2.467,2.467,0,0,1-3.454-3.454l8.118-8.142L9.569,11.048Z" transform="translate(344.9 254.9)" fill="#6a6a6a"/>
                    </g>
                </svg>
            </span>
            Shop
        </li>
        <span class="mr-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24.523 24.18">
                <g id="Group_515" data-name="Group 515" transform="translate(-344 -262)">
                    <path id="icon-cheveron-right" d="M9.593,11.048a2.467,2.467,0,0,1,3.454-3.454l9.869,9.869a2.467,2.467,0,0,1,0,3.454l-9.869,9.869a2.467,2.467,0,0,1-3.454-3.454l8.118-8.142L9.569,11.048Z" transform="translate(334.9 254.9)" fill="#6a6a6a"/>
                    <path id="icon-cheveron-right-2" data-name="icon-cheveron-right" d="M9.593,11.048a2.467,2.467,0,0,1,3.454-3.454l9.869,9.869a2.467,2.467,0,0,1,0,3.454l-9.869,9.869a2.467,2.467,0,0,1-3.454-3.454l8.118-8.142L9.569,11.048Z" transform="translate(344.9 254.9)" fill="#6a6a6a"/>
                </g>
            </svg>
        </span>
            Item Detail
        </li>
    </ol>
</nav>
<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('images/coffee moca.jpeg') }}" alt="" width="300" height="300" class="rounded">
                        </div>
                        <div class="col-md-8">
                            <div>
                                <h3 class="text-orange-100 font-weight-bolder">COFFEE MOCA</h3>
                                <p class="text-orange-100">BY : Warkop Coffee</p>
                                <div class="d-flex">
                                    <p class="text-orange-100">
                                        $299
                                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="15" height="15"><path fill="#F6AD55" class="heroicon-ui" d="M6.1 21.98a1 1 0 0 1-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 0 1 .56-1.71l6.05-.88 2.7-5.48a1 1 0 0 1 1.8 0l2.7 5.48 6.06.88a1 1 0 0 1 .55 1.7l-4.38 4.27 1.04 6.03a1 1 0 0 1-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 0 1 .93 0l4.08 2.15-.78-4.55a1 1 0 0 1 .29-.88l3.3-3.22-4.56-.67a1 1 0 0 1-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 0 1-.75.54l-4.57.67 3.3 3.22a1 1 0 0 1 .3.88l-.79 4.55 4.09-2.15z"/></svg></span>
                                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="15" height="15"><path fill="#F6AD55" class="heroicon-ui" d="M6.1 21.98a1 1 0 0 1-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 0 1 .56-1.71l6.05-.88 2.7-5.48a1 1 0 0 1 1.8 0l2.7 5.48 6.06.88a1 1 0 0 1 .55 1.7l-4.38 4.27 1.04 6.03a1 1 0 0 1-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 0 1 .93 0l4.08 2.15-.78-4.55a1 1 0 0 1 .29-.88l3.3-3.22-4.56-.67a1 1 0 0 1-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 0 1-.75.54l-4.57.67 3.3 3.22a1 1 0 0 1 .3.88l-.79 4.55 4.09-2.15z"/></svg></span>
                                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="15" height="15"><path fill="#F6AD55" class="heroicon-ui" d="M6.1 21.98a1 1 0 0 1-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 0 1 .56-1.71l6.05-.88 2.7-5.48a1 1 0 0 1 1.8 0l2.7 5.48 6.06.88a1 1 0 0 1 .55 1.7l-4.38 4.27 1.04 6.03a1 1 0 0 1-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 0 1 .93 0l4.08 2.15-.78-4.55a1 1 0 0 1 .29-.88l3.3-3.22-4.56-.67a1 1 0 0 1-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 0 1-.75.54l-4.57.67 3.3 3.22a1 1 0 0 1 .3.88l-.79 4.55 4.09-2.15z"/></svg></span>
                                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="15" height="15"><path fill="#F6AD55" class="heroicon-ui" d="M6.1 21.98a1 1 0 0 1-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 0 1 .56-1.71l6.05-.88 2.7-5.48a1 1 0 0 1 1.8 0l2.7 5.48 6.06.88a1 1 0 0 1 .55 1.7l-4.38 4.27 1.04 6.03a1 1 0 0 1-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 0 1 .93 0l4.08 2.15-.78-4.55a1 1 0 0 1 .29-.88l3.3-3.22-4.56-.67a1 1 0 0 1-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 0 1-.75.54l-4.57.67 3.3 3.22a1 1 0 0 1 .3.88l-.79 4.55 4.09-2.15z"/></svg></span>
                                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="15" height="15"><path fill="#F6AD55" class="heroicon-ui" d="M6.1 21.98a1 1 0 0 1-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 0 1 .56-1.71l6.05-.88 2.7-5.48a1 1 0 0 1 1.8 0l2.7 5.48 6.06.88a1 1 0 0 1 .55 1.7l-4.38 4.27 1.04 6.03a1 1 0 0 1-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 0 1 .93 0l4.08 2.15-.78-4.55a1 1 0 0 1 .29-.88l3.3-3.22-4.56-.67a1 1 0 0 1-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 0 1-.75.54l-4.57.67 3.3 3.22a1 1 0 0 1 .3.88l-.79 4.55 4.09-2.15z"/></svg></span>
                                    </p>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <h5 class="text-orange-100">INGRIDIENTS</h5>
                                    <ul class="list-group">
                                        <li class="list-group-item border-0 text-orange-100">1/2 CUP MILK</li>
                                        <li class="list-group-item border-0 text-orange-100">
                                            3 to 4 tablespoons Smucker’s®
                                            Sundae Syrup™ Chocolate
                                            Flavored Syrup, plus additional
                                            for garnish
                                        </li>
                                        <li class="list-group-item border-0 text-orange-100">
                                            1/4 cup strong brewed Folgers®
                                            French Roast CoffeeOR 1/4 cup
                                            strong brewed
                                        </li>
                                        <li class="list-group-item border-0 text-orange-100">Whipped cream</li>
                                        <li class="list-group-item border-0 text-orange-100">
                                            Chocolate decorator sprinkles,
                                            for garnish
                                        </li>
                                    </ul>
                                    <h5 class="text-orange-100">INGRIDIENTS</h5>
                                    <ul class="list-group">
                                        <li class="list-group-item border-0 text-orange-100">1/2 CUP MILK</li>
                                        <li class="list-group-item border-0 text-orange-100">
                                            3 to 4 tablespoons Smucker’s®
                                            Sundae Syrup™ Chocolate
                                            Flavored Syrup, plus additional
                                            for garnish
                                        </li>
                                        <li class="list-group-item border-0 text-orange-100">
                                            1/4 cup strong brewed Folgers®
                                            French Roast CoffeeOR 1/4 cup
                                            strong brewed
                                        </li>
                                        <li class="list-group-item border-0 text-orange-100">Whipped cream</li>
                                        <li class="list-group-item border-0 text-orange-100">
                                            Chocolate decorator sprinkles,
                                            for garnish
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-fotter bg-white border-0 mb-2 px-3">
                        <h5 class="text-orange-100 text-center">AVAILABLE - IN STOCK</h5>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-orange mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M17 16a3 3 0 1 1-2.83 2H9.83a3 3 0 1 1-5.62-.1A3 3 0 0 1 5 12V4H3a1 1 0 1 1 0-2h3a1 1 0 0 1 1 1v1h14a1 1 0 0 1 .9 1.45l-4 8a1 1 0 0 1-.9.55H5a1 1 0 0 0 0 2h12zM7 12h9.38l3-6H7v6zm0 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/></svg>
                                view in cart
                            </button>
                            <button type="submit" class="btn btn-orange-500">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12.76 3.76a6 6 0 0 1 8.48 8.48l-8.53 8.54a1 1 0 0 1-1.42 0l-8.53-8.54a6 6 0 0 1 8.48-8.48l.76.75.76-.75zm7.07 7.07a4 4 0 1 0-5.66-5.66l-1.46 1.47a1 1 0 0 1-1.42 0L9.83 5.17a4 4 0 1 0-5.66 5.66L12 18.66l7.83-7.83z"/></svg>
                                whislist
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body bg-gray-300">
                    <div class="d-flex justify-content-between">
                        <div class="">
                            <div class="text-center">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 15.008 21.234">
                                        <g id="Group_541" data-name="Group 541" transform="translate(-379.794 -1304)">
                                            <line id="Line_57" data-name="Line 57" x1="2.795" y2="9.436" transform="translate(380.5 1315.092)" fill="none" stroke="#ED8936" stroke-linecap="round" stroke-width="1"/>
                                            <line id="Line_58" data-name="Line 58" x1="6.799" y2="5.939" transform="translate(380.5 1318.589)" fill="none" stroke="#ED8936" stroke-linecap="round" stroke-width="1"/>
                                            <line id="Line_59" data-name="Line 59" x2="2.767" y2="9.611" transform="translate(391.33 1314.917)" fill="none" stroke="#ED8936" stroke-linecap="round" stroke-width="1"/>
                                            <line id="Line_60" data-name="Line 60" x2="6.799" y2="5.939" transform="translate(387.299 1318.589)" fill="none" stroke="#ED8936" stroke-linecap="round" stroke-width="1"/>
                                            <g id="Ellipse_121" data-name="Ellipse 121" transform="translate(380.762 1304)" fill="none" stroke="#ED8936" stroke-width="1">
                                            <circle cx="6.463" cy="6.463" r="6.463" stroke="none"/>
                                            <circle cx="6.463" cy="6.463" r="5.963" fill="none"/>
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                                <p class="tex-center text-orange-100 pt-3">100% ORIGINAL</p>
                                <p class="text-orange-100 text-center">
                                    Chocolate bar candy canes ice cream toffee cookie halvah.
                                </p>
                            </div>
                        </div>
                        <div>
                            <div class="text-center">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg"  width="100" height="100" viewBox="0 0 21 21">
                                        <g id="Group_542" data-name="Group 542" transform="translate(-975 -1324.596)">
                                            <g id="Ellipse_122" data-name="Ellipse 122" transform="translate(975 1324.596)" fill="none" stroke="#ED8936" stroke-width="2">
                                            <circle cx="10.5" cy="10.5" r="10.5" stroke="none"/>
                                            <circle cx="10.5" cy="10.5" r="9.5" fill="none"/>
                                            </g>
                                            <line id="Line_61" data-name="Line 61" y2="7.355" transform="translate(985.113 1328.021)" fill="none" stroke="#ED8936" stroke-linecap="round" stroke-width="2"/>
                                            <line id="Line_62" data-name="Line 62" y2="7.355" transform="translate(992.468 1335.376) rotate(90)" fill="none" stroke="#ED8936" stroke-linecap="round" stroke-width="2"/>
                                        </g>
                                    </svg>

                                </span>
                                <p class="tex-center text-orange-100 pt-3">10 DAY REPLACEMENT</p>
                                <p class="text-orange-100 text-center">
                                    Marshmallow biscuit donut dragée fruitcake wafer.
                                </p>
                            </div>
                        </div>
                        <div>
                            <div class="text-center">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 16.966 20.124">
                                        <g id="weapons" transform="translate(-40.168)">
                                            <g id="Group_488" data-name="Group 488" transform="translate(40.168)">
                                            <path id="Path_495" data-name="Path 495" d="M56.714,2.393,48.821.025a.589.589,0,0,0-.339,0L40.588,2.393a.59.59,0,0,0-.42.565v8.683a5.609,5.609,0,0,0,1.359,3.436A14.048,14.048,0,0,0,44.359,17.7a25.4,25.4,0,0,0,4.052,2.373.589.589,0,0,0,.482,0A25.4,25.4,0,0,0,52.944,17.7a14.049,14.049,0,0,0,2.832-2.623,5.608,5.608,0,0,0,1.359-3.436V2.958A.589.589,0,0,0,56.714,2.393Zm-.759,9.248c0,2-2.005,3.873-3.688,5.093a24.964,24.964,0,0,1-3.616,2.149,24.963,24.963,0,0,1-3.616-2.149c-1.682-1.22-3.688-3.094-3.688-5.093V3.4l7.3-2.191,7.3,2.191Z" transform="translate(-40.168 0)" fill="#ED8936"/>
                                            </g>
                                        </g>
                                    </svg>

                                </span>
                                <p class="tex-center text-orange-100 pt-3">1 YEAR WARRANTY</p>
                                <p class="text-orange-100 text-center">
                                    Cotton candy gingerbread cake I love sugar sweet.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body bg-white">
                    <div class="text-center mb-3">
                        <h4 class="text-orange-100 font-weight-bolder">RELATED PRODUCTS</h4>
                        <H6 class="text-orange-100">People also search for this items</H6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div>
                            <img src="{{asset('images/carammel latte.jpg')}}" weight="250" height="250" alt="" class="rounded">
                        </div>
                        <div>
                            <img src="{{asset('images/coffee moca.jpeg')}}" weight="250" height="250" alt="" class="rounded">
                        </div>
                        <div>
                            <img src="{{asset('images/Espresso Macchiato.jpg')}}" weight="250" height="250" alt="" class="rounded">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection