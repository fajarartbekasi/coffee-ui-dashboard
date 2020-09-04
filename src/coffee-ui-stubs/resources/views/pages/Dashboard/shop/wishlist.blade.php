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
            Wish List
        </li>

    </ol>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-end">
                        <div class="dropdown">
                            <button class="dropdown-toggle btn-rounded-full" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M9 4.58V4c0-1.1.9-2 2-2h2a2 2 0 0 1 2 2v.58a8 8 0 0 1 1.92 1.11l.5-.29a2 2 0 0 1 2.74.73l1 1.74a2 2 0 0 1-.73 2.73l-.5.29a8.06 8.06 0 0 1 0 2.22l.5.3a2 2 0 0 1 .73 2.72l-1 1.74a2 2 0 0 1-2.73.73l-.5-.3A8 8 0 0 1 15 19.43V20a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-.58a8 8 0 0 1-1.92-1.11l-.5.29a2 2 0 0 1-2.74-.73l-1-1.74a2 2 0 0 1 .73-2.73l.5-.29a8.06 8.06 0 0 1 0-2.22l-.5-.3a2 2 0 0 1-.73-2.72l1-1.74a2 2 0 0 1 2.73-.73l.5.3A8 8 0 0 1 9 4.57zM7.88 7.64l-.54.51-1.77-1.02-1 1.74 1.76 1.01-.17.73a6.02 6.02 0 0 0 0 2.78l.17.73-1.76 1.01 1 1.74 1.77-1.02.54.51a6 6 0 0 0 2.4 1.4l.72.2V20h2v-2.04l.71-.2a6 6 0 0 0 2.41-1.4l.54-.51 1.77 1.02 1-1.74-1.76-1.01.17-.73a6.02 6.02 0 0 0 0-2.78l-.17-.73 1.76-1.01-1-1.74-1.77 1.02-.54-.51a6 6 0 0 0-2.4-1.4l-.72-.2V4h-2v2.04l-.71.2a6 6 0 0 0-2.41 1.4zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/></svg>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item text-gray-600" href="#">
                                    <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 12a5 5 0 1 1 0-10 5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v2z"/></svg></span>
                                    Profile
                                </a>
                                <a class="dropdown-item text-gray-600" href="#">
                                    <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M4 4h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2zm16 3.38V6H4v1.38l8 4 8-4zm0 2.24l-7.55 3.77a1 1 0 0 1-.9 0L4 9.62V18h16V9.62z"/></svg></span>
                                    Inbox
                                </a>
                                <a class="dropdown-item text-gray-600" href="#">
                                    <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-2.3-8.7l1.3 1.29 3.3-3.3a1 1 0 0 1 1.4 1.42l-4 4a1 1 0 0 1-1.4 0l-2-2a1 1 0 0 1 1.4-1.42z"/></svg></span>
                                    Tasks
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="pt-3">
                      <div class="row">
                          <div class="col-md-3 mb-3">
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
                          <div class="col-md-3 mb-3">
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
                                            <h6 class="pt-2 mb-2">American Coffe</h6>
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
                          <div class="col-md-3 mb-3">
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
                                            <h6 class="pt-2 mb-2">Black coffee feature</h6>
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
                          <div class="col-md-3 mb-3">
                              <div class="card">
                                    <div class="card-body mx-auto">
                                        <div class=" pt-3 mb-3">
                                            <img src="{{asset('images/Carammel Latte.jpg')}}" class="rounded" width="150" height="150" alt="" srcset="">
                                            <div class="d-flex align-items-center justify-content-between pt-3">
                                                <button type="submit" class="btn btn-outline-orange align-items-center"> 4
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path class="heroicon-ui" d="M6.1 21.98a1 1 0 0 1-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 0 1 .56-1.71l6.05-.88 2.7-5.48a1 1 0 0 1 1.8 0l2.7 5.48 6.06.88a1 1 0 0 1 .55 1.7l-4.38 4.27 1.04 6.03a1 1 0 0 1-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 0 1 .93 0l4.08 2.15-.78-4.55a1 1 0 0 1 .29-.88l3.3-3.22-4.56-.67a1 1 0 0 1-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 0 1-.75.54l-4.57.67 3.3 3.22a1 1 0 0 1 .3.88l-.79 4.55 4.09-2.15z"/></svg>
                                                    </span>
                                                </button>
                                                <h5 class="text-orange-500">$39.99</h5>
                                            </div>
                                            <h6 class="pt-2 mb-2">Carramel Late</h6>
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
                          <div class="col-md-3 mb-3">
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
                          <div class="col-md-3 mb-3">
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
                          <div class="col-md-3 mb-3">
                              <div class="card">
                                    <div class="card-body mx-auto">
                                        <div class=" pt-3 mb-3">
                                            <img src="{{asset('images/ice coffee.PNG')}}" class="rounded" width="150" height="150" alt="" srcset="">
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
                          <div class="col-md-3 mb-3">
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
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection