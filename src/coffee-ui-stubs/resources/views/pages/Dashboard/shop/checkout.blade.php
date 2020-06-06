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
            Checkout
        </li>
    </ol>
</nav>
<div class="card border-0 shadow">
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs process-model more-icon-preocess" role="tablist">
                <li role="presentation" class="active">
                    <a href="#discover" aria-controls="discover" role="tab" data-toggle="tab">
                        <i class="fa fa-search" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M17 16a3 3 0 1 1-2.83 2H9.83a3 3 0 1 1-5.62-.1A3 3 0 0 1 5 12V4H3a1 1 0 1 1 0-2h3a1 1 0 0 1 1 1v1h14a1 1 0 0 1 .9 1.45l-4 8a1 1 0 0 1-.9.55H5a1 1 0 0 0 0 2h12zM7 12h9.38l3-6H7v6zm0 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/></svg>
                        </i>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#strategy" aria-controls="strategy" role="tab" data-toggle="tab">
                        <i class="fa fa-send-o" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M13 20v-5h-2v5a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-7.59l-.3.3a1 1 0 1 1-1.4-1.42l9-9a1 1 0 0 1 1.4 0l9 9a1 1 0 0 1-1.4 1.42l-.3-.3V20a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2zm5 0v-9.59l-6-6-6 6V20h3v-5c0-1.1.9-2 2-2h2a2 2 0 0 1 2 2v5h3z"/></svg>
                        </i>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#optimization" aria-controls="optimization" role="tab" data-toggle="tab">
                        <i class="fa fa-qrcode" aria-hidden="true">
                            <svg height="24" viewBox="0 0 480 480.00029" width="24" xmlns="http://www.w3.org/2000/svg"><path d="m400 345.886719-20.375-12.207031c-6.210938-3.714844-13.316406-5.675782-20.554688-5.679688h-30.664062c-6.277344-.011719-12.527344.796875-18.597656 2.398438l-92.390625 24.800781c-10.101563 2.789062-18.214844 10.3125-21.753907 20.175781l-81.265624-43.964844c-6.589844-3.75-14.304688-5.023437-21.75-3.59375-2.808594.496094-5.53125 1.390625-8.089844 2.65625-5.777344 2.765625-10.570313 7.234375-13.742188 12.800782-2.773437 4.847656-4.230468 10.335937-4.230468 15.917968-.085938 11.398438 5.953124 21.960938 15.8125 27.671875l145.648437 87.144531c6.328125 3.917969 13.617187 5.992188 21.058594 5.992188h112.71875c5.035156.003906 10.023437-.949219 14.703125-2.800781l23.472656-9.269531v12.070312h80v-160h-80zm-29.351562 116.433593c-2.800782 1.105469-5.789063 1.675782-8.800782 1.679688h-112.742187c-4.507813-.003906-8.925781-1.273438-12.746094-3.664062l-145.847656-87.246094c-4.957031-2.863282-7.992188-8.167969-7.953125-13.890625.011718-2.804688.75-5.5625 2.144531-8 1.59375-2.761719 3.992187-4.976563 6.871094-6.34375 1.269531-.617188 2.613281-1.054688 4-1.296875 1.011719-.1875 2.039062-.285156 3.066406-.285156 2.75-.007813 5.453125.710937 7.839844 2.078124l88.121093 47.617188c.101563.488281.101563.96875.230469 1.457031 3.789063 13.964844 16.457031 23.664063 30.929688 23.679688 4.453125-.40625 8.863281-1.195313 13.183593-2.351563l83.117188-22.242187-4.125-15.457031-82.847656 22.144531c-3.648438.839843-8.355469 1.800781-9.328125 1.882812-7.226563.011719-13.5625-4.816406-15.464844-11.785156-.257813-.96875-.410156-1.960937-.464844-2.960937 0 0-.0625-1.9375 0-2.617188.609375-6.691406 5.296875-12.308594 11.769531-14.109375l92.351563-24.707031c4.714844-1.261719 9.574219-1.902344 14.453125-1.902344h30.664062c4.34375 0 8.605469 1.179688 12.328126 3.410156l28.601562 17.125v86.183594zm45.351562-126.320312h48v128h-48zm0 0"/><path d="m329.953125 64-42.914063-42.910156c-13.472656-13.550782-31.804687-21.1445315-50.910156-21.089844h-100.578125c-6.207031.0078125-12.328125 1.457031-17.886719 4.222656l-17.929687 8.96875c-3.59375 1.808594-7.585937 2.671875-11.605469 2.511719l-8.128906-.285156v-15.417969h-80v176h80v-24h13.601562l4.839844 3.199219c13.542969 8.992187 29.3125 14.070312 45.558594 14.664062v102.136719h336v-208zm-265.953125 96h-48v-144h48zm43.296875-18.113281-8.898437-5.886719h-18.398438v-104.574219l7.542969.269531c6.699219.238282 13.347656-1.203124 19.34375-4.191406l17.914062-8.96875c3.335938-1.667968 7.019531-2.535156 10.75-2.535156h100.578125c14.859375-.042969 29.121094 5.863281 39.597656 16.398438l31.601563 31.601562h-66.015625l-19.417969-19.414062-11.308593 11.308593 56.511718 56.515625c6.277344 6.25 6.296875 16.40625.046875 22.6875-6.253906 6.277344-16.410156 6.296875-22.6875.046875l-47.199219-47.199219-5.601562 4.800782c-15.464844 13.132812-38.070312 13.46875-53.921875.796875l-4.636719-3.757813-10.082031 12.429688 4.6875 3.800781c4.902344 3.917969 10.40625 7.019531 16.296875 9.183594v38.65625c-13.09375-.582031-25.785156-4.71875-36.703125-11.96875zm113.800781-7.488281 12.070313 12.074218c12.53125 12.34375 32.648437 12.363282 45.199219.039063-11.742188 18.183593-7.109376 42.382812 10.519531 54.941406 17.628906 12.558594 42.015625 9.03125 55.363281-8.003906 13.347656-17.039063 10.9375-41.5625-5.476562-55.671875-16.410157-14.109375-41.019532-12.816406-55.859376 2.933594 5.464844-8.582032 6.441407-19.277344 2.621094-28.710938h107.128906c3.441407 20.128906 19.207032 35.894531 39.335938 39.335938v33.328124c-20.128906 3.441407-35.894531 19.207032-39.335938 39.335938h-161.328124c-3.441407-20.128906-19.207032-35.894531-39.335938-39.335938v-33.328124c11.433594-1.925782 21.773438-7.945313 29.097656-16.9375zm66.902344 33.601562c0-13.253906 10.746094-24 24-24s24 10.746094 24 24-10.746094 24-24 24-24-10.746094-24-24zm176 88h-304v-137.449219c12.683594.953125 25.328125-2.28125 36-9.199219l13.648438 13.648438c-6.003907 8.15625-15.519532 12.980469-25.648438 13h-8v64h8c17.671875 0 32 14.328125 32 32v8h192v-8c0-17.671875 14.328125-32 32-32h8v-64h-8c-17.671875 0-32-14.328125-32-32v-8h-134.6875l-16-16h206.6875zm0 0"/></svg>
                        </i>
                    </a>
                </li>
            </ul>
            <div class="tab-content py-3 px-3">
                <div role="tabpanel" class="tab-pane active" id="discover">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card-checkout border-0 shadow-sm mb-2">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <img src="{{asset('images/Black coffee mix.jpg')}}" class="rounded" width="200" height="200" alt="">
                                        <div class="">
                                            <div class="ml-3">
                                                <h4 class="font-weight-bold text-gray-600 ">Black Coffee Mix</h4>
                                                <h6 class="text-gray-600 ">By: Warkop Coffee</h6>
                                                <h6 class="text-orange-700">In Stock</h6>
                                                <h6 class="text-gray-600 ">Quantity</h6>
                                                <div class="product-count mb-2">
                                                    <form action="#" class="count-inlineflex">
                                                        <div class="qtyminus">-</div>
                                                        <input type="text" name="quantity" value="1" class="qty">
                                                        <div class="qtyplus">+</div>
                                                    </form>
                                                </div>
                                                <h6 class="text-gray-600">Delivery by, Wed Apr 15</h6>
                                                <h6 class="text-orange-700">17% off 4 offers Available</h6>
                                            </div>
                                            <div>

                                            </div>
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-outline-orange align-items-center mb-3"> 4
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path class="heroicon-ui" d="M6.1 21.98a1 1 0 0 1-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 0 1 .56-1.71l6.05-.88 2.7-5.48a1 1 0 0 1 1.8 0l2.7 5.48 6.06.88a1 1 0 0 1 .55 1.7l-4.38 4.27 1.04 6.03a1 1 0 0 1-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 0 1 .93 0l4.08 2.15-.78-4.55a1 1 0 0 1 .29-.88l3.3-3.22-4.56-.67a1 1 0 0 1-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 0 1-.75.54l-4.57.67 3.3 3.22a1 1 0 0 1 .3.88l-.79 4.55 4.09-2.15z"/></svg>
                                                </span>
                                            </button>
                                            <h3 class="text-gray-600 ">$39.99</h3>
                                            <span class="text-gray-600 mb-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M17 16a3 3 0 1 1-2.83 2H9.83a3 3 0 1 1-5.62-.1A3 3 0 0 1 5 12V4H3a1 1 0 1 1 0-2h3a1 1 0 0 1 1 1v1h14a1 1 0 0 1 .9 1.45l-4 8a1 1 0 0 1-.9.55H5a1 1 0 0 0 0 2h12zM7 12h9.38l3-6H7v6zm0 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/></svg>
                                                Free Shipping
                                            </span>
                                            <div>
                                                <div>
                                                    <button type="submit" class="btn btn-orange btn-block">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M16.24 14.83a1 1 0 0 1-1.41 1.41L12 13.41l-2.83 2.83a1 1 0 0 1-1.41-1.41L10.59 12 7.76 9.17a1 1 0 0 1 1.41-1.41L12 10.59l2.83-2.83a1 1 0 0 1 1.41 1.41L13.41 12l2.83 2.83z"/></svg>
                                                        Remove
                                                    </button>
                                                    <button type="submit" class="btn btn-orange-500 btn-block">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12.76 3.76a6 6 0 0 1 8.48 8.48l-8.53 8.54a1 1 0 0 1-1.42 0l-8.53-8.54a6 6 0 0 1 8.48-8.48l.76.75.76-.75zm7.07 7.07a4 4 0 1 0-5.66-5.66l-1.46 1.47a1 1 0 0 1-1.42 0L9.83 5.17a4 4 0 1 0-5.66 5.66L12 18.66l7.83-7.83z"/></svg>
                                                        Whislist
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-checkout border-0 shadow-sm mb-2">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <img src="{{asset('images/Black coffee mix.jpg')}}" class="rounded" width="200" height="200" alt="">
                                        <div class="">
                                            <div class="ml-3">
                                                <h4 class="font-weight-bold text-gray-600 ">Black Coffee Mix</h4>
                                                <h6 class="text-gray-600 ">By: Warkop Coffee</h6>
                                                <h6 class="text-orange-700">In Stock</h6>
                                                <h6 class="text-gray-600 ">Quantity</h6>
                                                <div class="product-count mb-2">
                                                    <form action="#" class="count-inlineflex">
                                                        <div class="qtyminus">-</div>
                                                        <input type="text" name="quantity" value="1" class="qty">
                                                        <div class="qtyplus">+</div>
                                                    </form>
                                                </div>
                                                <h6 class="text-gray-600">Delivery by, Wed Apr 15</h6>
                                                <h6 class="text-orange-700">17% off 4 offers Available</h6>
                                            </div>
                                            <div>

                                            </div>
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-outline-orange align-items-center mb-3"> 4
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path class="heroicon-ui" d="M6.1 21.98a1 1 0 0 1-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 0 1 .56-1.71l6.05-.88 2.7-5.48a1 1 0 0 1 1.8 0l2.7 5.48 6.06.88a1 1 0 0 1 .55 1.7l-4.38 4.27 1.04 6.03a1 1 0 0 1-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 0 1 .93 0l4.08 2.15-.78-4.55a1 1 0 0 1 .29-.88l3.3-3.22-4.56-.67a1 1 0 0 1-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 0 1-.75.54l-4.57.67 3.3 3.22a1 1 0 0 1 .3.88l-.79 4.55 4.09-2.15z"/></svg>
                                                </span>
                                            </button>
                                            <h3 class="text-gray-600 ">$39.99</h3>
                                            <span class="text-gray-600 mb-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M17 16a3 3 0 1 1-2.83 2H9.83a3 3 0 1 1-5.62-.1A3 3 0 0 1 5 12V4H3a1 1 0 1 1 0-2h3a1 1 0 0 1 1 1v1h14a1 1 0 0 1 .9 1.45l-4 8a1 1 0 0 1-.9.55H5a1 1 0 0 0 0 2h12zM7 12h9.38l3-6H7v6zm0 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/></svg>
                                                Free Shipping
                                            </span>
                                            <div>
                                                <div>
                                                    <button type="submit" class="btn btn-orange btn-block">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M16.24 14.83a1 1 0 0 1-1.41 1.41L12 13.41l-2.83 2.83a1 1 0 0 1-1.41-1.41L10.59 12 7.76 9.17a1 1 0 0 1 1.41-1.41L12 10.59l2.83-2.83a1 1 0 0 1 1.41 1.41L13.41 12l2.83 2.83z"/></svg>
                                                        Remove
                                                    </button>
                                                    <button type="submit" class="btn btn-orange-500 btn-block">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12.76 3.76a6 6 0 0 1 8.48 8.48l-8.53 8.54a1 1 0 0 1-1.42 0l-8.53-8.54a6 6 0 0 1 8.48-8.48l.76.75.76-.75zm7.07 7.07a4 4 0 1 0-5.66-5.66l-1.46 1.47a1 1 0 0 1-1.42 0L9.83 5.17a4 4 0 1 0-5.66 5.66L12 18.66l7.83-7.83z"/></svg>
                                                        Whislist
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-checkout border-0 shadow-sm mb-2">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <img src="{{asset('images/Black coffee mix.jpg')}}" class="rounded" width="200" height="200" alt="">
                                        <div class="">
                                            <div class="ml-3">
                                                <h4 class="font-weight-bold text-gray-600 ">Black Coffee Mix</h4>
                                                <h6 class="text-gray-600 ">By: Warkop Coffee</h6>
                                                <h6 class="text-orange-700">In Stock</h6>
                                                <h6 class="text-gray-600 ">Quantity</h6>
                                                <div class="product-count mb-2">
                                                    <form action="#" class="count-inlineflex">
                                                        <div class="qtyminus">-</div>
                                                        <input type="text" name="quantity" value="1" class="qty">
                                                        <div class="qtyplus">+</div>
                                                    </form>
                                                </div>
                                                <h6 class="text-gray-600">Delivery by, Wed Apr 15</h6>
                                                <h6 class="text-orange-700">17% off 4 offers Available</h6>
                                            </div>
                                            <div>

                                            </div>
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-outline-orange align-items-center mb-3"> 4
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path class="heroicon-ui" d="M6.1 21.98a1 1 0 0 1-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 0 1 .56-1.71l6.05-.88 2.7-5.48a1 1 0 0 1 1.8 0l2.7 5.48 6.06.88a1 1 0 0 1 .55 1.7l-4.38 4.27 1.04 6.03a1 1 0 0 1-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 0 1 .93 0l4.08 2.15-.78-4.55a1 1 0 0 1 .29-.88l3.3-3.22-4.56-.67a1 1 0 0 1-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 0 1-.75.54l-4.57.67 3.3 3.22a1 1 0 0 1 .3.88l-.79 4.55 4.09-2.15z"/></svg>
                                                </span>
                                            </button>
                                            <h3 class="text-gray-600 ">$39.99</h3>
                                            <span class="text-gray-600 mb-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M17 16a3 3 0 1 1-2.83 2H9.83a3 3 0 1 1-5.62-.1A3 3 0 0 1 5 12V4H3a1 1 0 1 1 0-2h3a1 1 0 0 1 1 1v1h14a1 1 0 0 1 .9 1.45l-4 8a1 1 0 0 1-.9.55H5a1 1 0 0 0 0 2h12zM7 12h9.38l3-6H7v6zm0 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/></svg>
                                                Free Shipping
                                            </span>
                                            <div>
                                                <div>
                                                    <button type="submit" class="btn btn-orange btn-block">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M16.24 14.83a1 1 0 0 1-1.41 1.41L12 13.41l-2.83 2.83a1 1 0 0 1-1.41-1.41L10.59 12 7.76 9.17a1 1 0 0 1 1.41-1.41L12 10.59l2.83-2.83a1 1 0 0 1 1.41 1.41L13.41 12l2.83 2.83z"/></svg>
                                                        Remove
                                                    </button>
                                                    <button type="submit" class="btn btn-orange-500 btn-block">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12.76 3.76a6 6 0 0 1 8.48 8.48l-8.53 8.54a1 1 0 0 1-1.42 0l-8.53-8.54a6 6 0 0 1 8.48-8.48l.76.75.76-.75zm7.07 7.07a4 4 0 1 0-5.66-5.66l-1.46 1.47a1 1 0 0 1-1.42 0L9.83 5.17a4 4 0 1 0-5.66 5.66L12 18.66l7.83-7.83z"/></svg>
                                                        Whislist
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-checkout border-0 shadow-sm mb-2">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <img src="{{asset('images/Black coffee mix.jpg')}}" class="rounded" width="200" height="200" alt="">
                                        <div class="">
                                            <div class="ml-3">
                                                <h4 class="font-weight-bold text-gray-600 ">Black Coffee Mix</h4>
                                                <h6 class="text-gray-600 ">By: Warkop Coffee</h6>
                                                <h6 class="text-orange-700">In Stock</h6>
                                                <h6 class="text-gray-600 ">Quantity</h6>
                                                <div class="product-count mb-2">
                                                    <form action="#" class="count-inlineflex">
                                                        <div class="qtyminus">-</div>
                                                        <input type="text" name="quantity" value="1" class="qty">
                                                        <div class="qtyplus">+</div>
                                                    </form>
                                                </div>
                                                <h6 class="text-gray-600">Delivery by, Wed Apr 15</h6>
                                                <h6 class="text-orange-700">17% off 4 offers Available</h6>
                                            </div>
                                            <div>

                                            </div>
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-outline-orange align-items-center mb-3"> 4
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path class="heroicon-ui" d="M6.1 21.98a1 1 0 0 1-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 0 1 .56-1.71l6.05-.88 2.7-5.48a1 1 0 0 1 1.8 0l2.7 5.48 6.06.88a1 1 0 0 1 .55 1.7l-4.38 4.27 1.04 6.03a1 1 0 0 1-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 0 1 .93 0l4.08 2.15-.78-4.55a1 1 0 0 1 .29-.88l3.3-3.22-4.56-.67a1 1 0 0 1-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 0 1-.75.54l-4.57.67 3.3 3.22a1 1 0 0 1 .3.88l-.79 4.55 4.09-2.15z"/></svg>
                                                </span>
                                            </button>
                                            <h3 class="text-gray-600 ">$39.99</h3>
                                            <span class="text-gray-600 mb-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M17 16a3 3 0 1 1-2.83 2H9.83a3 3 0 1 1-5.62-.1A3 3 0 0 1 5 12V4H3a1 1 0 1 1 0-2h3a1 1 0 0 1 1 1v1h14a1 1 0 0 1 .9 1.45l-4 8a1 1 0 0 1-.9.55H5a1 1 0 0 0 0 2h12zM7 12h9.38l3-6H7v6zm0 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/></svg>
                                                Free Shipping
                                            </span>
                                            <div>
                                                <div>
                                                    <button type="submit" class="btn btn-orange btn-block">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M16.24 14.83a1 1 0 0 1-1.41 1.41L12 13.41l-2.83 2.83a1 1 0 0 1-1.41-1.41L10.59 12 7.76 9.17a1 1 0 0 1 1.41-1.41L12 10.59l2.83-2.83a1 1 0 0 1 1.41 1.41L13.41 12l2.83 2.83z"/></svg>
                                                        Remove
                                                    </button>
                                                    <button type="submit" class="btn btn-orange-500 btn-block">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12.76 3.76a6 6 0 0 1 8.48 8.48l-8.53 8.54a1 1 0 0 1-1.42 0l-8.53-8.54a6 6 0 0 1 8.48-8.48l.76.75.76-.75zm7.07 7.07a4 4 0 1 0-5.66-5.66l-1.46 1.47a1 1 0 0 1-1.42 0L9.83 5.17a4 4 0 1 0-5.66 5.66L12 18.66l7.83-7.83z"/></svg>
                                                        Whislist
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-checkout border-0 shadow-sm">
                                <div class="card-body">
                                    <h6 class="text-gray-600">Options</h6>
                                    <div class="d-flex border-bottom">
                                        <div class="mr-auto"><h4 class="text-gray-600">Coupons</h4></div>
                                        <div>
                                            <h4 class="text-gray-600">Apply</h4>
                                        </div>
                                    </div>
                                    <ul class="list-group">
                                        <li class="list-group-item border-0">
                                            <div class="d-flex">
                                                <div class="mr-auto">Total MRP</div>
                                                <div>$598</div>
                                            </div>
                                        </li>
                                        <li class="list-group-item border-0">
                                            <div class="d-flex">
                                                <div class="mr-auto">Bag Discount</div>
                                                <div class="text-orange-600">-25$</div>
                                            </div>
                                        </li>
                                        <li class="list-group-item border-0">
                                            <div class="d-flex">
                                                <div class="mr-auto">Estimated Tax</div>
                                                <div>$1.3</div>
                                            </div>
                                        </li>
                                        <li class="list-group-item border-0">
                                            <div class="d-flex">
                                                <div class="mr-auto">EMI Eligibility</div>
                                                <div >Details</div>
                                            </div>
                                        </li>
                                        <li class="list-group-item border-0">
                                            <div class="d-flex">
                                                <div class="mr-auto">Delivery Charges</div>
                                                <div class="text-orange-600">Free</div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="d-flex border-top">
                                        <div class="mr-auto text-gray-600">Total</div>
                                        <div class="text-gray-600"> $574.3</div>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-orange-500 btn-block">
                                            Place Order
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="strategy">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card-checkout border-0 shadow-sm">
                                <div class="card-body">
                                    <div>
                                        <h3 class="text-gray-600 font-weight-bold">Add New Address </h3>
                                        <h3 class="text-gray-600">Be sure to check “Deliver to this address” when you have finished</h3>
                                    </div>
                                    <form action="" method="post">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="" class="text-gray-600">Full Name</label>
                                                    <input type="text" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="" class="text-gray-600">Mobile Number</label>
                                                    <input type="text" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="" class="text-gray-600">Flat, House No</label>
                                                    <input type="text" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="" class="text-gray-600">Landmark e.g. near apollo hospital</label>
                                                    <input type="text" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="" class="text-gray-600">Town/City</label>
                                                    <input type="text" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="" class="text-gray-600">Pincode</label>
                                                    <input type="text" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="" class="text-gray-600">State</label>
                                                    <input type="text" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="" class="text-gray-600">Address Type</label>
                                                    <input type="text" class="form-control" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="float-right">
                                            <button type="submit" class="btn btn-orange-500">Save And Deliver Here</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-checkout border-0 shadow-sm">
                                <div class="card-body">
                                    <h3 class="text-gray-600">Chaerul Fajar Subhi</h3>
                                    <h6 class="text-gray-600">Jl. Raya Kebalen No 54, Babelan Bekasi Indonesia.</h6>
                                    <h6 class="text-gray-600">GMT+9: Eastern Standard Time (EST)</h6>
                                    <h6 class="text-gray-600 border-bottom">+62 896xxxxxxxxxx</h6>
                                    <div>
                                        <button type="submit" class="btn btn-orange-500 btn-block">Deliver to this Address</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="optimization">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="card-checkout border-0 shadow-sm">
                                <div class="card-body">
                                    <div>
                                        <h3 class="text-gray-600 font-weight-bold">Payment </h3>
                                    </div>
                                    <form action="" method="post">
                                        <div class="form-check-inline">
                                            <label class="customradio">
                                                <input type="radio" checked="checked" name="radio">
                                                <span class="checkmark"></span>
                                                <span class="radiotextsty">US Unlocked Debit Card 12XX XXXX XXXX 0000</span>
                                                <span class="radiotextsty ml-2">Chaerul Fajar Subhi</span>
                                                <span class="radiotextsty ml-2">11/2020</span>
                                            </label>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Enter CVV</label>
                                            <div class="col-sm-8">
                                                <input type="password" class="form-control" id="inputPassword">
                                            </div>
                                            <button type="submit" class="btn btn-orange-500 col-sm-2">Continue</button>
                                        </div>
                                        <div class="form-check-inline col-md-12 mb-2">
                                            <label class="customradio">
                                                <input type="radio" checked="checked" name="radio">
                                                <span class="checkmark"></span>
                                                <span class="radiotextsty">Credit/Debit/Atm Card</span>
                                            </label>
                                        </div>
                                        <div class="form-check-inline col-md-8 mb-2">
                                            <label class="customradio">
                                                <input type="radio" checked="checked" name="radio">
                                                <span class="checkmark"></span>
                                                <span class="radiotextsty">Net Banking</span>
                                            </label>
                                        </div>
                                        <div class="form-check-inline col-md-8 mb-2">
                                            <label class="customradio">
                                                <input type="radio" checked="checked" name="radio">
                                                <span class="checkmark"></span>
                                                <span class="radiotextsty">EMI (Easy Installment)</span>
                                            </label>
                                        </div>
                                        <div class="form-check-inline border-bottom mb-2 col-md-12">
                                            <label class="customradio">
                                                <input type="radio" checked="checked" name="radio">
                                                <span class="checkmark"></span>
                                                <span class="radiotextsty">Cash On Delivery</span>
                                            </label>
                                        </div>
                                    </form>
                                    <div>

                                        <button type="submit" class="btn btn-outline-orange">+ Add Dift Card</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card-checkout border-0 shadow-sm">
                                <div class="card-body">
                                    <h3 class="text-gray-600">Price Details</h3>
                                    <div class="d-flex mb-3">
                                        <div class="mr-auto">
                                            <h6 class="text-gray-600">Price 3 Items</h6>
                                        </div>
                                        <div>
                                            <h6 class="text-gray-600">$699.30</h6>
                                        </div>
                                    </div>
                                    <div class="d-flex border-bottom mb-3">
                                        <div class="mr-auto">
                                            <h6 class="text-gray-600">Delivery Charges</h6>
                                        </div>
                                        <div>
                                            <h6 class="text-gray-600">Free</h6>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="mr-auto">
                                            <h6 class="text-gray-600">Amount Payable</h6>
                                        </div>
                                        <div>
                                            <h6 class="text-gray-600">$699.30</h6>
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
</div>

@endsection

@push('scripts')
<script>
        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

            var href = $(e.target).attr('href');
            var $curr = $(".process-model  a[href='" + href + "']").parent();

            $('.process-model li').removeClass();

            $curr.addClass("active");
            $curr.prevAll().addClass("visited");
        });
        $(document).ready(function() {
            var slider = $("#slider");
            var thumb = $("#thumb");
            var slidesPerPage = 4; //globaly define number of elements per page
            var syncedSecondary = true;
            slider.owlCarousel({
                items: 1,
                slideSpeed: 2000,
                nav: false,
                autoplay: false,
                dots: false,
                loop: true,
                responsiveRefreshRate: 200
            }).on('changed.owl.carousel', syncPosition);
            thumb
                .on('initialized.owl.carousel', function() {
                    thumb.find(".owl-item").eq(0).addClass("current");
                })
                .owlCarousel({
                    items: slidesPerPage,
                    dots: false,
                    nav: true,
                    item: 4,
                    smartSpeed: 200,
                    slideSpeed: 500,
                    slideBy: slidesPerPage,
                    navText: ['<svg width="18px" height="18px" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>', '<svg width="25px" height="25px" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
                    responsiveRefreshRate: 100
                }).on('changed.owl.carousel', syncPosition2);
            function syncPosition(el) {
                var count = el.item.count - 1;
                var current = Math.round(el.item.index - (el.item.count / 2) - .5);
                if (current < 0) {
                    current = count;
                }
                if (current > count) {
                    current = 0;
                }
                thumb
                    .find(".owl-item")
                    .removeClass("current")
                    .eq(current)
                    .addClass("current");
                var onscreen = thumb.find('.owl-item.active').length - 1;
                var start = thumb.find('.owl-item.active').first().index();
                var end = thumb.find('.owl-item.active').last().index();
                if (current > end) {
                    thumb.data('owl.carousel').to(current, 100, true);
                }
                if (current < start) {
                    thumb.data('owl.carousel').to(current - onscreen, 100, true);
                }
            }
            function syncPosition2(el) {
                if (syncedSecondary) {
                    var number = el.item.index;
                    slider.data('owl.carousel').to(number, 100, true);
                }
            }
            thumb.on("click", ".owl-item", function(e) {
                e.preventDefault();
                var number = $(this).index();
                slider.data('owl.carousel').to(number, 300, true);
            });


            $(".qtyminus").on("click",function(){
                var now = $(".qty").val();
                if ($.isNumeric(now)){
                    if (parseInt(now) -1> 0)
                    { now--;}
                    $(".qty").val(now);
                }
            })
            $(".qtyplus").on("click",function(){
                var now = $(".qty").val();
                if ($.isNumeric(now)){
                    $(".qty").val(parseInt(now)+1);
                }
            });
        });
</script>

@endpush