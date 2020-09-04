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
                Shop
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
                Index
            </li>
        </ol>
    </nav>
    <div class="container pt-8 mb-3">
        <h5 class="text-orange-100">Filter</h5>
        <div class="row">
            <div class="col-md-3">
                <ul class="list-group">
                    <li class="list-group-item border-0">
                        <h5 class="mb-2">Price Slider</h5>
                        <div class="form-check-inline">
                            <label class="customradio">
                                <input type="radio" checked="checked" name="radio">
                                <span class="checkmark"></span>
                                <span class="radiotextsty">All</span>
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item border-0">
                        <label class="customradio">
                            <input type="radio" name="radio">
                            <span class="radiotextsty"><= $10</span>
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li class="list-group-item border-0">
                        <label class="customradio">
                            <input type="radio" name="radio">
                            <span class="radiotextsty">$10 - $100</span>
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li class="list-group-item border-0">
                        <label class="customradio">
                            <input type="radio" name="radio">
                            <span class="radiotextsty">$100 - $500</span>
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li class="list-group-item border-0">
                        <label class="customradio">
                            <input type="radio" name="radio">
                            <span class="radiotextsty"> >= $500</span>
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <div class="border-top border-bottom">
                        <li class="list-group-item border-0">
                            <h5 class="mb-2">Price Slider</h5>
                            <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                        </li>
                    </div>
                    <li class="list-group-item border-0">
                        <h5 class="mb-2">Category</h5>
                        <label class="customradio">
                            <input type="radio" name="radio">
                            <span class="radiotextsty"> Affogato</span>
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li class="list-group-item border-0">
                        <label class="customradio">
                            <input type="radio" name="radio">
                            <span class="radiotextsty"> Asiático </span>
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li class="list-group-item border-0">
                        <label class="customradio">
                            <input type="radio" name="radio">
                            <span class="radiotextsty"> Beaten Coffee </span>
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li class="list-group-item border-0">
                        <label class="customradio">
                            <input type="radio" name="radio">
                            <span class="radiotextsty"> Bica (Coffee) </span>
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li class="list-group-item border-0">
                        <label class="customradio">
                            <input type="radio" name="radio">
                            <span class="radiotextsty"> Bicerin </span>
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li class="list-group-item border-0">
                        <label class="customradio">
                            <input type="radio" name="radio">
                            <span class="radiotextsty"> Black Rusian </span>
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li class="list-group-item border-0">
                        <label class="customradio">
                            <input type="radio" name="radio">
                            <span class="radiotextsty"> Café au lait </span>
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li class="list-group-item border-0">
                        <label class="customradio">
                            <input type="radio" name="radio">
                            <span class="radiotextsty"> Café con leche </span>
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li class="list-group-item border-0">
                        <label class="customradio">
                            <input type="radio" name="radio">
                            <span class="radiotextsty"> Café de olla </span>
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li class="list-group-item border-0">
                        <label class="customradio">
                            <input type="radio" name="radio">
                            <span class="radiotextsty"> Café Touba </span>
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li class="list-group-item border-0">
                        <h5 class="mb-2">Brand</h5>
                        <label class="customradio">
                            <input type="radio" name="radio">
                            <span class="radiotextsty"> Starbuck</span>
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li class="list-group-item border-0">
                        <label class="customradio">
                            <input type="radio" name="radio">
                            <span class="radiotextsty"> Mount Hagen </span>
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li class="list-group-item border-0">
                        <label class="customradio">
                            <input type="radio" name="radio">
                            <span class="radiotextsty"> Maxwell House </span>
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li class="list-group-item border-0">
                        <label class="customradio">
                            <input type="radio" name="radio">
                            <span class="radiotextsty"> Nescafe Clasico </span>
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li class="list-group-item border-0">
                        <label class="customradio">
                            <input type="radio" name="radio">
                            <span class="radiotextsty"> Douwe Egberts Pure Gold </span>
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li class="list-group-item border-0">
                        <label class="customradio">
                            <input type="radio" name="radio">
                            <span class="radiotextsty"> Folgers </span>
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li class="list-group-item border-0">
                        <label class="customradio">
                            <input type="radio" name="radio">
                            <span class="radiotextsty"> Nescafe Taster's Choice </span>
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li class="list-group-item border-0">
                        <label class="customradio">
                            <input type="radio" name="radio">
                            <span class="radiotextsty"> Jacobs Kronung </span>
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li class="list-group-item border-0">
                        <label class="customradio">
                            <input type="radio" name="radio">
                            <span class="radiotextsty"> ABC Susu </span>
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li class="list-group-item border-0">
                        <label class="customradio">
                            <input type="radio" name="radio">
                            <span class="radiotextsty"> Kapal Api </span>
                            <span class="checkmark"></span>
                        </label>
                    </li>
                </ul>
            </div>
            <div class="col-md-9">
                <div class="card border-0 shadow-sm">
                    <div class="pt-3 px-3">
                        <div class="d-flex mb-2 justify-content-between">
                            <div><h5>21469 results found in 2ms</h5></div>
                            <div>
                                <button type="submit" class="btn btn-outline-secondary">
                                    Featured
                                    <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M15.3 9.3a1 1 0 0 1 1.4 1.4l-4 4a1 1 0 0 1-1.4 0l-4-4a1 1 0 0 1 1.4-1.4l3.3 3.29 3.3-3.3z"/></svg></span>
                                </button>
                                <button type="submit" class="btn btn-outline-secondary">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M5 3h4a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2zm0 2v4h4V5H5zm10-2h4a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2h-4a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2zm0 2v4h4V5h-4zM5 13h4a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4c0-1.1.9-2 2-2zm0 2v4h4v-4H5zm10-2h4a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2h-4a2 2 0 0 1-2-2v-4c0-1.1.9-2 2-2zm0 2v4h4v-4h-4z"/></svg>
                                    </span>
                                </button>
                                <button type="submit" class="btn btn-outline-secondary">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/></svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <form action="" method="post">
                            @csrf
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-white border-0">
                                     <span>
                                      <svg xmlns="http://www.w3.org/2000/svg"
                                           viewBox="0 0 24 24"
                                           width="24"
                                           height="24">
                                           <path class="heroicon-ui"
                                                 d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"/>
                                           </svg>
                                     </span>
                                    </div>
                                </div>
                                <input type="text" class="form-control border-0" id="inlineFormInputGroup" placeholder="Search.........">
                            </div>
                        </form>
                    </div>
                    <div class="row py-3 px-3">
                        <div class="col-md-4 mb-2">
                            <div class="card">
                                <div class="card-body mx-auto">
                                    <div class=" pt-3 mb-3">
                                        <img src="{{asset('images/Black coffee mix.jpg')}}" class="rounded" width="150" height="150" alt="" srcset="">
                                        <div class="d-flex align-items-center justify-content-between pt-3">
                                            <button type="submit" class="btn btn-outline-orange align-items-center"> 4
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path class="heroicon-ui" d="M6.1 21.98a1 1 0 0 1-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 0 1 .56-1.71l6.05-.88 2.7-5.48a1 1 0 0 1 1.8 0l2.7 5.48 6.06.88a1 1 0 0 1 .55 1.7l-4.38 4.27 1.04 6.03a1 1 0 0 1-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 0 1 .93 0l4.08 2.15-.78-4.55a1 1 0 0 1 .29-.88l3.3-3.22-4.56-.67a1 1 0 0 1-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 0 1-.75.54l-4.57.67 3.3 3.22a1 1 0 0 1 .3.88l-.79 4.55 4.09-2.15z"/></svg>
                                                </span>
                                            </button>
                                            <h5 class="text-orange-500">$39.99</h5>
                                        </div>
                                        <h6 class="pt-2 mb-2">American Coffe Mix</h6>
                                    </div>
                                </div>
                                <div class="card-fotter d-flex justify-content-between bg-white border-0 mb-2 px-3">
                                    <button type="submit" class="btn btn-orange-500 btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path class="heroicon-ui" d="M12.76 3.76a6 6 0 0 1 8.48 8.48l-8.53 8.54a1 1 0 0 1-1.42 0l-8.53-8.54a6 6 0 0 1 8.48-8.48l.76.75.76-.75zm7.07 7.07a4 4 0 1 0-5.66-5.66l-1.46 1.47a1 1 0 0 1-1.42 0L9.83 5.17a4 4 0 1 0-5.66 5.66L12 18.66l7.83-7.83z"/></svg>

                                    </button>
                                    <button type="submit" class="btn btn-orange btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path class="heroicon-ui" d="M17 16a3 3 0 1 1-2.83 2H9.83a3 3 0 1 1-5.62-.1A3 3 0 0 1 5 12V4H3a1 1 0 1 1 0-2h3a1 1 0 0 1 1 1v1h14a1 1 0 0 1 .9 1.45l-4 8a1 1 0 0 1-.9.55H5a1 1 0 0 0 0 2h12zM7 12h9.38l3-6H7v6zm0 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/></svg>

                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="card">
                                <div class="card-body mx-auto">
                                    <div class=" pt-3 mb-3">
                                        <img src="{{asset('images/american coffee.jpg')}}" class="rounded" width="150" height="150" alt="" srcset="">
                                        <div class="d-flex align-items-center justify-content-between pt-3">
                                            <button type="submit" class="btn btn-outline-orange align-items-center"> 4
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path class="heroicon-ui" d="M6.1 21.98a1 1 0 0 1-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 0 1 .56-1.71l6.05-.88 2.7-5.48a1 1 0 0 1 1.8 0l2.7 5.48 6.06.88a1 1 0 0 1 .55 1.7l-4.38 4.27 1.04 6.03a1 1 0 0 1-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 0 1 .93 0l4.08 2.15-.78-4.55a1 1 0 0 1 .29-.88l3.3-3.22-4.56-.67a1 1 0 0 1-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 0 1-.75.54l-4.57.67 3.3 3.22a1 1 0 0 1 .3.88l-.79 4.55 4.09-2.15z"/></svg>
                                                </span>
                                            </button>
                                            <h5 class="text-orange-500">$39.99</h5>
                                        </div>
                                        <h6 class="pt-2 mb-2">American Coffee</h6>
                                    </div>
                                </div>
                                <div class="card-fotter d-flex justify-content-between bg-white border-0 mb-2 px-3">
                                    <button type="submit" class="btn btn-orange-500 btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path class="heroicon-ui" d="M12.76 3.76a6 6 0 0 1 8.48 8.48l-8.53 8.54a1 1 0 0 1-1.42 0l-8.53-8.54a6 6 0 0 1 8.48-8.48l.76.75.76-.75zm7.07 7.07a4 4 0 1 0-5.66-5.66l-1.46 1.47a1 1 0 0 1-1.42 0L9.83 5.17a4 4 0 1 0-5.66 5.66L12 18.66l7.83-7.83z"/></svg>

                                    </button>
                                    <button type="submit" class="btn btn-orange btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path class="heroicon-ui" d="M17 16a3 3 0 1 1-2.83 2H9.83a3 3 0 1 1-5.62-.1A3 3 0 0 1 5 12V4H3a1 1 0 1 1 0-2h3a1 1 0 0 1 1 1v1h14a1 1 0 0 1 .9 1.45l-4 8a1 1 0 0 1-.9.55H5a1 1 0 0 0 0 2h12zM7 12h9.38l3-6H7v6zm0 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/></svg>

                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="card">
                                <div class="card-body mx-auto">
                                    <div class=" pt-3 mb-3">
                                        <img src="{{asset('images/Black-coffee-feature-image.jpg')}}" class="rounded" width="150" height="150" alt="" srcset="">
                                        <div class="d-flex align-items-center justify-content-between pt-3">
                                            <button type="submit" class="btn btn-outline-orange align-items-center"> 4
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path class="heroicon-ui" d="M6.1 21.98a1 1 0 0 1-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 0 1 .56-1.71l6.05-.88 2.7-5.48a1 1 0 0 1 1.8 0l2.7 5.48 6.06.88a1 1 0 0 1 .55 1.7l-4.38 4.27 1.04 6.03a1 1 0 0 1-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 0 1 .93 0l4.08 2.15-.78-4.55a1 1 0 0 1 .29-.88l3.3-3.22-4.56-.67a1 1 0 0 1-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 0 1-.75.54l-4.57.67 3.3 3.22a1 1 0 0 1 .3.88l-.79 4.55 4.09-2.15z"/></svg>
                                                </span>
                                            </button>
                                            <h5 class="text-orange-500">$39.99</h5>
                                        </div>
                                        <h6 class="pt-2 mb-2">Black Coffee</h6>
                                    </div>
                                </div>
                                <div class="card-fotter d-flex justify-content-between bg-white border-0 mb-2 px-3">
                                    <button type="submit" class="btn btn-orange-500 btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path class="heroicon-ui" d="M12.76 3.76a6 6 0 0 1 8.48 8.48l-8.53 8.54a1 1 0 0 1-1.42 0l-8.53-8.54a6 6 0 0 1 8.48-8.48l.76.75.76-.75zm7.07 7.07a4 4 0 1 0-5.66-5.66l-1.46 1.47a1 1 0 0 1-1.42 0L9.83 5.17a4 4 0 1 0-5.66 5.66L12 18.66l7.83-7.83z"/></svg>

                                    </button>
                                    <button type="submit" class="btn btn-orange btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path class="heroicon-ui" d="M17 16a3 3 0 1 1-2.83 2H9.83a3 3 0 1 1-5.62-.1A3 3 0 0 1 5 12V4H3a1 1 0 1 1 0-2h3a1 1 0 0 1 1 1v1h14a1 1 0 0 1 .9 1.45l-4 8a1 1 0 0 1-.9.55H5a1 1 0 0 0 0 2h12zM7 12h9.38l3-6H7v6zm0 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/></svg>

                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="card">
                                <div class="card-body mx-auto">
                                    <div class=" pt-3 mb-3">
                                        <img src="{{asset('images/carammel latte.jpg')}}" class="rounded" width="150" height="150" alt="" srcset="">
                                        <div class="d-flex align-items-center justify-content-between pt-3">
                                            <button type="submit" class="btn btn-outline-orange align-items-center"> 4
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path class="heroicon-ui" d="M6.1 21.98a1 1 0 0 1-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 0 1 .56-1.71l6.05-.88 2.7-5.48a1 1 0 0 1 1.8 0l2.7 5.48 6.06.88a1 1 0 0 1 .55 1.7l-4.38 4.27 1.04 6.03a1 1 0 0 1-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 0 1 .93 0l4.08 2.15-.78-4.55a1 1 0 0 1 .29-.88l3.3-3.22-4.56-.67a1 1 0 0 1-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 0 1-.75.54l-4.57.67 3.3 3.22a1 1 0 0 1 .3.88l-.79 4.55 4.09-2.15z"/></svg>
                                                </span>
                                            </button>
                                            <h5 class="text-orange-500">$39.99</h5>
                                        </div>
                                        <h6 class="pt-2 mb-2">Carammel Latte</h6>
                                    </div>
                                </div>
                                <div class="card-fotter d-flex justify-content-between bg-white border-0 mb-2 px-3">
                                    <button type="submit" class="btn btn-orange-500 btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path class="heroicon-ui" d="M12.76 3.76a6 6 0 0 1 8.48 8.48l-8.53 8.54a1 1 0 0 1-1.42 0l-8.53-8.54a6 6 0 0 1 8.48-8.48l.76.75.76-.75zm7.07 7.07a4 4 0 1 0-5.66-5.66l-1.46 1.47a1 1 0 0 1-1.42 0L9.83 5.17a4 4 0 1 0-5.66 5.66L12 18.66l7.83-7.83z"/></svg>

                                    </button>
                                    <button type="submit" class="btn btn-orange btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path class="heroicon-ui" d="M17 16a3 3 0 1 1-2.83 2H9.83a3 3 0 1 1-5.62-.1A3 3 0 0 1 5 12V4H3a1 1 0 1 1 0-2h3a1 1 0 0 1 1 1v1h14a1 1 0 0 1 .9 1.45l-4 8a1 1 0 0 1-.9.55H5a1 1 0 0 0 0 2h12zM7 12h9.38l3-6H7v6zm0 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/></svg>

                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="card">
                                <div class="card-body mx-auto">
                                    <div class=" pt-3 mb-3">
                                        <img src="{{asset('images/coffee moca.jpeg')}}" class="rounded" width="150" height="150" alt="" srcset="">
                                        <div class="d-flex align-items-center justify-content-between pt-3">
                                            <button type="submit" class="btn btn-outline-orange align-items-center"> 4
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path class="heroicon-ui" d="M6.1 21.98a1 1 0 0 1-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 0 1 .56-1.71l6.05-.88 2.7-5.48a1 1 0 0 1 1.8 0l2.7 5.48 6.06.88a1 1 0 0 1 .55 1.7l-4.38 4.27 1.04 6.03a1 1 0 0 1-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 0 1 .93 0l4.08 2.15-.78-4.55a1 1 0 0 1 .29-.88l3.3-3.22-4.56-.67a1 1 0 0 1-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 0 1-.75.54l-4.57.67 3.3 3.22a1 1 0 0 1 .3.88l-.79 4.55 4.09-2.15z"/></svg>
                                                </span>
                                            </button>
                                            <h5 class="text-orange-500">$39.99</h5>
                                        </div>
                                        <h6 class="pt-2 mb-2">Coffee Moca</h6>
                                    </div>
                                </div>
                                <div class="card-fotter d-flex justify-content-between bg-white border-0 mb-2 px-3">
                                    <button type="submit" class="btn btn-orange-500 btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path class="heroicon-ui" d="M12.76 3.76a6 6 0 0 1 8.48 8.48l-8.53 8.54a1 1 0 0 1-1.42 0l-8.53-8.54a6 6 0 0 1 8.48-8.48l.76.75.76-.75zm7.07 7.07a4 4 0 1 0-5.66-5.66l-1.46 1.47a1 1 0 0 1-1.42 0L9.83 5.17a4 4 0 1 0-5.66 5.66L12 18.66l7.83-7.83z"/></svg>

                                    </button>
                                    <button type="submit" class="btn btn-orange btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path class="heroicon-ui" d="M17 16a3 3 0 1 1-2.83 2H9.83a3 3 0 1 1-5.62-.1A3 3 0 0 1 5 12V4H3a1 1 0 1 1 0-2h3a1 1 0 0 1 1 1v1h14a1 1 0 0 1 .9 1.45l-4 8a1 1 0 0 1-.9.55H5a1 1 0 0 0 0 2h12zM7 12h9.38l3-6H7v6zm0 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/></svg>

                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="card">
                                <div class="card-body mx-auto">
                                    <div class=" pt-3 mb-3">
                                        <img src="{{asset('images/Espresso Macchiato.jpg')}}" class="rounded" width="150" height="150" alt="" srcset="">
                                        <div class="d-flex align-items-center justify-content-between pt-3">
                                            <button type="submit" class="btn btn-outline-orange align-items-center"> 4
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path class="heroicon-ui" d="M6.1 21.98a1 1 0 0 1-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 0 1 .56-1.71l6.05-.88 2.7-5.48a1 1 0 0 1 1.8 0l2.7 5.48 6.06.88a1 1 0 0 1 .55 1.7l-4.38 4.27 1.04 6.03a1 1 0 0 1-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 0 1 .93 0l4.08 2.15-.78-4.55a1 1 0 0 1 .29-.88l3.3-3.22-4.56-.67a1 1 0 0 1-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 0 1-.75.54l-4.57.67 3.3 3.22a1 1 0 0 1 .3.88l-.79 4.55 4.09-2.15z"/></svg>
                                                </span>
                                            </button>
                                            <h5 class="text-orange-500">$39.99</h5>
                                        </div>
                                        <h6 class="pt-2 mb-2">Espresso Macchiato</h6>
                                    </div>
                                </div>
                                <div class="card-fotter d-flex justify-content-between bg-white border-0 mb-2 px-3">
                                    <button type="submit" class="btn btn-orange-500 btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path class="heroicon-ui" d="M12.76 3.76a6 6 0 0 1 8.48 8.48l-8.53 8.54a1 1 0 0 1-1.42 0l-8.53-8.54a6 6 0 0 1 8.48-8.48l.76.75.76-.75zm7.07 7.07a4 4 0 1 0-5.66-5.66l-1.46 1.47a1 1 0 0 1-1.42 0L9.83 5.17a4 4 0 1 0-5.66 5.66L12 18.66l7.83-7.83z"/></svg>

                                    </button>
                                    <button type="submit" class="btn btn-orange btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path class="heroicon-ui" d="M17 16a3 3 0 1 1-2.83 2H9.83a3 3 0 1 1-5.62-.1A3 3 0 0 1 5 12V4H3a1 1 0 1 1 0-2h3a1 1 0 0 1 1 1v1h14a1 1 0 0 1 .9 1.45l-4 8a1 1 0 0 1-.9.55H5a1 1 0 0 0 0 2h12zM7 12h9.38l3-6H7v6zm0 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/></svg>

                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="card">
                                <div class="card-body mx-auto">
                                    <div class=" pt-3 mb-3">
                                        <img src="{{asset('images/espresso.png')}}" class="rounded" width="150" height="150" alt="" srcset="">
                                        <div class="d-flex align-items-center justify-content-between pt-3">
                                            <button type="submit" class="btn btn-outline-orange align-items-center"> 4
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path class="heroicon-ui" d="M6.1 21.98a1 1 0 0 1-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 0 1 .56-1.71l6.05-.88 2.7-5.48a1 1 0 0 1 1.8 0l2.7 5.48 6.06.88a1 1 0 0 1 .55 1.7l-4.38 4.27 1.04 6.03a1 1 0 0 1-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 0 1 .93 0l4.08 2.15-.78-4.55a1 1 0 0 1 .29-.88l3.3-3.22-4.56-.67a1 1 0 0 1-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 0 1-.75.54l-4.57.67 3.3 3.22a1 1 0 0 1 .3.88l-.79 4.55 4.09-2.15z"/></svg>
                                                </span>
                                            </button>
                                            <h5 class="text-orange-500">$39.99</h5>
                                        </div>
                                        <h6 class="pt-2 mb-2">Espresso</h6>
                                    </div>
                                </div>
                                <div class="card-fotter d-flex justify-content-between bg-white border-0 mb-2 px-3">
                                    <button type="submit" class="btn btn-orange-500 btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path class="heroicon-ui" d="M12.76 3.76a6 6 0 0 1 8.48 8.48l-8.53 8.54a1 1 0 0 1-1.42 0l-8.53-8.54a6 6 0 0 1 8.48-8.48l.76.75.76-.75zm7.07 7.07a4 4 0 1 0-5.66-5.66l-1.46 1.47a1 1 0 0 1-1.42 0L9.83 5.17a4 4 0 1 0-5.66 5.66L12 18.66l7.83-7.83z"/></svg>

                                    </button>
                                    <button type="submit" class="btn btn-orange btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path class="heroicon-ui" d="M17 16a3 3 0 1 1-2.83 2H9.83a3 3 0 1 1-5.62-.1A3 3 0 0 1 5 12V4H3a1 1 0 1 1 0-2h3a1 1 0 0 1 1 1v1h14a1 1 0 0 1 .9 1.45l-4 8a1 1 0 0 1-.9.55H5a1 1 0 0 0 0 2h12zM7 12h9.38l3-6H7v6zm0 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/></svg>

                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="card">
                                <div class="card-body mx-auto">
                                    <div class=" pt-3 mb-3">
                                        <img src="{{asset('images/ice coffee.png')}}" class="rounded" width="150" height="150" alt="" srcset="">
                                        <div class="d-flex align-items-center justify-content-between pt-3">
                                            <button type="submit" class="btn btn-outline-orange align-items-center"> 4
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path class="heroicon-ui" d="M6.1 21.98a1 1 0 0 1-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 0 1 .56-1.71l6.05-.88 2.7-5.48a1 1 0 0 1 1.8 0l2.7 5.48 6.06.88a1 1 0 0 1 .55 1.7l-4.38 4.27 1.04 6.03a1 1 0 0 1-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 0 1 .93 0l4.08 2.15-.78-4.55a1 1 0 0 1 .29-.88l3.3-3.22-4.56-.67a1 1 0 0 1-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 0 1-.75.54l-4.57.67 3.3 3.22a1 1 0 0 1 .3.88l-.79 4.55 4.09-2.15z"/></svg>
                                                </span>
                                            </button>
                                            <h5 class="text-orange-500">$39.99</h5>
                                        </div>
                                        <h6 class="pt-2 mb-2">Ice Coffee</h6>
                                    </div>
                                </div>
                                <div class="card-fotter d-flex justify-content-between bg-white border-0 mb-2 px-3">
                                    <button type="submit" class="btn btn-orange-500 btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path class="heroicon-ui" d="M12.76 3.76a6 6 0 0 1 8.48 8.48l-8.53 8.54a1 1 0 0 1-1.42 0l-8.53-8.54a6 6 0 0 1 8.48-8.48l.76.75.76-.75zm7.07 7.07a4 4 0 1 0-5.66-5.66l-1.46 1.47a1 1 0 0 1-1.42 0L9.83 5.17a4 4 0 1 0-5.66 5.66L12 18.66l7.83-7.83z"/></svg>

                                    </button>
                                    <button type="submit" class="btn btn-orange btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path class="heroicon-ui" d="M17 16a3 3 0 1 1-2.83 2H9.83a3 3 0 1 1-5.62-.1A3 3 0 0 1 5 12V4H3a1 1 0 1 1 0-2h3a1 1 0 0 1 1 1v1h14a1 1 0 0 1 .9 1.45l-4 8a1 1 0 0 1-.9.55H5a1 1 0 0 0 0 2h12zM7 12h9.38l3-6H7v6zm0 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/></svg>

                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="card">
                                <div class="card-body mx-auto">
                                    <div class=" pt-3 mb-3">
                                        <img src="{{asset('images/Venice Coffee.jpg')}}" class="rounded" width="150" height="150" alt="" srcset="">
                                        <div class="d-flex align-items-center justify-content-between pt-3">
                                            <button type="submit" class="btn btn-outline-orange align-items-center"> 4
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path class="heroicon-ui" d="M6.1 21.98a1 1 0 0 1-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 0 1 .56-1.71l6.05-.88 2.7-5.48a1 1 0 0 1 1.8 0l2.7 5.48 6.06.88a1 1 0 0 1 .55 1.7l-4.38 4.27 1.04 6.03a1 1 0 0 1-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 0 1 .93 0l4.08 2.15-.78-4.55a1 1 0 0 1 .29-.88l3.3-3.22-4.56-.67a1 1 0 0 1-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 0 1-.75.54l-4.57.67 3.3 3.22a1 1 0 0 1 .3.88l-.79 4.55 4.09-2.15z"/></svg>
                                                </span>
                                            </button>
                                            <h5 class="text-orange-500">$39.99</h5>
                                        </div>
                                        <h6 class="pt-2 mb-2">Venice Coffee</h6>
                                    </div>
                                </div>
                                <div class="card-fotter d-flex justify-content-between bg-white border-0 mb-2 px-3">
                                    <button type="submit" class="btn btn-orange-500 btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path class="heroicon-ui" d="M12.76 3.76a6 6 0 0 1 8.48 8.48l-8.53 8.54a1 1 0 0 1-1.42 0l-8.53-8.54a6 6 0 0 1 8.48-8.48l.76.75.76-.75zm7.07 7.07a4 4 0 1 0-5.66-5.66l-1.46 1.47a1 1 0 0 1-1.42 0L9.83 5.17a4 4 0 1 0-5.66 5.66L12 18.66l7.83-7.83z"/></svg>

                                    </button>
                                    <button type="submit" class="btn btn-orange btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path class="heroicon-ui" d="M17 16a3 3 0 1 1-2.83 2H9.83a3 3 0 1 1-5.62-.1A3 3 0 0 1 5 12V4H3a1 1 0 1 1 0-2h3a1 1 0 0 1 1 1v1h14a1 1 0 0 1 .9 1.45l-4 8a1 1 0 0 1-.9.55H5a1 1 0 0 0 0 2h12zM7 12h9.38l3-6H7v6zm0 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/></svg>

                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-3 mb-3 d-flex justify-content-end">
                        <ul class="pagination pagination-primary">
                            <li class="page-item"><a href="javascript:void(0);" class="page-link">1</a></li>
                            <li class="page-item"><a href="javascript:void(0);" class="page-link">...</a></li>
                            <li class="page-item"><a href="javascript:void(0);" class="page-link">5</a></li>
                            <li class="page-item"><a href="javascript:void(0);" class="page-link">6</a></li>
                            <li class="active page-item"><a href="javascript:void(0);" class="page-link">7</a></li>
                            <li class="page-item"><a href="javascript:void(0);" class="page-link">8</a></li>
                            <li class="page-item"><a href="javascript:void(0);" class="page-link">9</a></li>
                            <li class="page-item"><a href="javascript:void(0);" class="page-link">...</a></li>
                            <li class="page-item"><a href="javascript:void(0);" class="page-link">12</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
