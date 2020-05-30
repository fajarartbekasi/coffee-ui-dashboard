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
      Home
    </li>
    <li>
        <span class="mr-3 ml-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24.523 24.18">
                <g id="Group_515" data-name="Group 515" transform="translate(-344 -262)">
                    <path id="icon-cheveron-right" d="M9.593,11.048a2.467,2.467,0,0,1,3.454-3.454l9.869,9.869a2.467,2.467,0,0,1,0,3.454l-9.869,9.869a2.467,2.467,0,0,1-3.454-3.454l8.118-8.142L9.569,11.048Z" transform="translate(334.9 254.9)" fill="#6a6a6a"/>
                    <path id="icon-cheveron-right-2" data-name="icon-cheveron-right" d="M9.593,11.048a2.467,2.467,0,0,1,3.454-3.454l9.869,9.869a2.467,2.467,0,0,1,0,3.454l-9.869,9.869a2.467,2.467,0,0,1-3.454-3.454l8.118-8.142L9.569,11.048Z" transform="translate(344.9 254.9)" fill="#6a6a6a"/>
                </g>
            </svg>
        </span>
        eCommerce
    </li>
  </ol>
</nav>
<div class="row pt-8 mb-3">
    <div class="col-md-12">
        <div class="card border-0">
            <div class="card-body">
                <div class="d-flex">
                    <div class="mr-auto">
                        <h3>Website Analitycs</h3>
                    </div>
                    <div>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="15"
                                 height="15"
                                 viewBox="0 0 7.465 26.031">
                                <path id="icon-more-horiz"
                                      d="M4.55,16.465A3.644,3.644,0,0,1,1,12.732,3.644,3.644,0,0,1,4.55,9,3.644,3.644,0,0,1,8.1,12.732a3.644,3.644,0,0,1-3.55,3.732Zm0-2.488a1.246,1.246,0,0,0,0-2.488,1.246,1.246,0,0,0,0,2.488Zm9.466,2.488a3.644,3.644,0,0,1-3.55-3.732A3.644,3.644,0,0,1,14.016,9a3.644,3.644,0,0,1,3.55,3.732A3.644,3.644,0,0,1,14.016,16.465Zm0-2.488a1.246,1.246,0,1,0-1.183-1.244A1.215,1.215,0,0,0,14.016,13.976Zm9.466,2.488a3.644,3.644,0,0,1-3.55-3.732,3.554,3.554,0,1,1,7.1,0A3.644,3.644,0,0,1,23.482,16.465Zm0-2.488A1.246,1.246,0,1,0,22.3,12.732,1.215,1.215,0,0,0,23.482,13.976Z"
                                      transform="translate(16.465 -1) rotate(90)"/>
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <span class="mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 24 24"
                                 width="50"
                                 height="50">
                                <path class="heroicon-ui"
                                      fill="#707070"
                                      d="M12 12a5 5 0 1 1 0-10 5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v2z"/>
                            </svg>
                        </span>
                        <h4>Users</h4>

                    </div>

                    <div class="d-flex align-items-center">
                        <span class="mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 24 24"
                                 width="50"
                                 height="50">
                                <path class="heroicon-ui"
                                      fill="#707070"
                                      d="M20 15a1 1 0 0 0 2 0V7a1 1 0 0 0-1-1h-8a1 1 0 0 0 0 2h5.59L13 13.59l-3.3-3.3a1 1 0 0 0-1.4 0l-6 6a1 1 0 0 0 1.4 1.42L9 12.4l3.3 3.3a1 1 0 0 0 1.4 0L20 9.4V15z"/>
                            </svg>
                        </span>
                        <h4>Sessions</h4>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                  width="40"
                                  height="40"
                                  viewBox="0 0 32 32">
                                <g id="Group_229"
                                   data-name="Group 229"
                                   transform="translate(-801 -263)">
                                    <g id="Ellipse_40"
                                       data-name="Ellipse 40"
                                       transform="translate(801 263)"
                                       fill="#fff"
                                       stroke="#707070"
                                       stroke-width="3">
                                    <circle cx="16" cy="16" r="16" stroke="none"/>
                                    <circle cx="16" cy="16" r="14.5" fill="none"/>
                                    </g>
                                    <path id="Path_294"
                                          data-name="Path 294"
                                          d="M4780.334,216.544H4765V203.019"
                                          transform="translate(-3948 60)"
                                          fill="none"
                                          stroke="#707070"
                                          stroke-width="3"/>
                                </g>
                            </svg>
                        </span>
                        <h4>Bounce Rate</h4>
                    </div>

                </div>

                <!-- web analytics chart -->
                <div class="d-flex justify-content-between">
                    <div class="pt-2" style="left:20px; width:200px; height:130px;">
                        <canvas class="usersDial" width="200" height="130"></canvas>
                    </div>
                    <div class="pt-2" style="left:20px; width:200px; height:130px;">
                        <canvas class="sessions"></canvas>
                    </div>
                    <div class="pt-2" style="left:20px; width:200px; height:130px;">
                        <canvas class="bounceRate"></canvas>
                    </div>
                </div>
               <canvas id="analytics" width="400" height="100"></canvas>
            </div>
        </div>
    </div>

    <!-- second thread -->

    <div class="col-md-4 pt-3">
        <div class="card border-0">
            <div class="card-body">
                <div class="text-center pb-2">
                    <h3 class="text-info text-center font-weight-bolder">
                        $32, 690
                    </h3>
                    <h6 class="text-muted">Referral 40%</h6>
                </div>
                <div class="d-flex mx-auto">
                    <canvas id="referral" width="100" height="50"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 pt-3">
        <div class="card border-0">
            <div class="card-body">
                <div class="d-flex mx-auto">
                    <canvas id="bubble" width="77" height="58"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 pt-3">
        <div class="card border-0" style="height: 15.5rem;">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-center pt-4">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 24 24"
                         width="150"
                         height="150">
                    <path class="heroicon-ui"
                          fill="#659398"
                          d="M8 7V5c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v2h4a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V9c0-1.1.9-2 2-2h4zm8 2H8v10h8V9zm2 0v10h2V9h-2zM6 9H4v10h2V9zm4-2h4V5h-4v2z"/></svg>
                    <div>
                        <h6 class="text-muted font-weight-bolder">
                            New Products
                        </h6>
                        <h2 class="text-info text-center font-weight-bolder">1.2 K</h2>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- three thread -->
    <div class="col-md-6 pt-3">
        <div class="card border-0">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        width="70"
                        height="70">
                    <path class="heroicon-ui"
                        fill="#AF4448"
                        d="M12 12a5 5 0 1 1 0-10 5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v2z"/></svg>
                    <div>
                        <h3 class="text-info font-weight-bolder">
                            $38,566
                        </h3>
                        <h6 class="text-muted text-right">
                            conversions
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 pt-3">
        <div class="card border-0">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        width="70"
                        height="70">
                    <path class="heroicon-ui"
                        fill="#0BA872"
                        d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm1-11v2h1a3 3 0 0 1 0 6h-1v1a1 1 0 0 1-2 0v-1H8a1 1 0 0 1 0-2h3v-2h-1a3 3 0 0 1 0-6h1V6a1 1 0 0 1 2 0v1h3a1 1 0 0 1 0 2h-3zm-2 0h-1a1 1 0 1 0 0 2h1V9zm2 6h1a1 1 0 0 0 0-2h-1v2z"/></svg>
                    <div>
                        <h3 class="text-info font-weight-bolder">
                            $53,659
                        </h3>
                        <h6 class="text-muted text-right">
                            Income
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- activity thread -->

    <div class="col-md-6 pt-3">
        <div class="card border-0">
            <div class="card-body">
                <h3 class="">Activity</h3>
                <div class="">
                    <div class="py-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24"
                                        width="50"
                                        height="50">
                                    <path class="heroicon-ui"
                                            fill="#3B86FF"
                                            d="M20 15a1 1 0 0 0 2 0V7a1 1 0 0 0-1-1h-8a1 1 0 0 0 0 2h5.59L13 13.59l-3.3-3.3a1 1 0 0 0-1.4 0l-6 6a1 1 0 0 0 1.4 1.42L9 12.4l3.3 3.3a1 1 0 0 0 1.4 0L20 9.4V15z"/>
                                </svg>
                                <h6 class="text-muted">Total sales</h6>
                            </div>

                            <div>
                                <h6 class="text-muted">
                                    $8.125
                                </h6>
                            </div>
                        </div>

                        <div class="progress" style="height: 3px;">
                            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="py-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 24 24"
                                     width="50"
                                     height="50">
                                     <path class="heroicon-ui"
                                           fill="#0BA872"
                                           d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm1-11v2h1a3 3 0 0 1 0 6h-1v1a1 1 0 0 1-2 0v-1H8a1 1 0 0 1 0-2h3v-2h-1a3 3 0 0 1 0-6h1V6a1 1 0 0 1 2 0v1h3a1 1 0 0 1 0 2h-3zm-2 0h-1a1 1 0 1 0 0 2h1V9zm2 6h1a1 1 0 0 0 0-2h-1v2z"/>
                                </svg>
                                <h6 class="text-muted">Total income</h6>
                            </div>

                            <div>
                                <h6 class="text-muted">
                                    $18.963
                                </h6>
                            </div>
                        </div>

                        <div class="progress" style="height: 3px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="py-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 24 24"
                                     width="50"
                                     height="50">
                                     <path class="heroicon-ui"
                                           fill="#CB9924"
                                           d="M4 3h16a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2zm16 4V5H4v2h16zm0 2H4v10h16V9z"/>
                                </svg>
                                <h6 class="text-muted">Total budget</h6>
                            </div>

                            <div>
                                <h6 class="text-muted">
                                    $14.150
                                </h6>
                            </div>
                        </div>

                        <div class="progress" style="height: 3px;">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 65%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="py-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 24 24"
                                     width="50"
                                     height="50">
                                     <path class="heroicon-ui"
                                           fill="#AF4448"
                                           d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-2.3-8.7l1.3 1.29 3.3-3.3a1 1 0 0 1 1.4 1.42l-4 4a1 1 0 0 1-1.4 0l-2-2a1 1 0 0 1 1.4-1.42z"/>
                                </svg>
                                <h6 class="text-muted">Total budget</h6>
                            </div>

                            <div>
                                <h6 class="text-muted">
                                    $14.150
                                </h6>
                            </div>
                        </div>

                        <div class="progress" style="height: 3px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 35%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 pt-3">
        <div class="card border-0 mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h3> Profit Report</h3>
                    <svg xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 24 24"
                         width="24"
                         height="24">
                         <path class="heroicon-ui"
                               d="M4 15a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0-2a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm8 2a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0-2a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm8 2a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0-2a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                    </svg>
                </div>

                <div class="d-flex justify-content-between py-3">
                    <div class="d-flex align-items-center">
                        <canvas id="profit" width="77" height="30"></canvas>
                        <div>
                            <h6>
                                $12K
                            </h6>
                            <p class="text-muted">2019</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <canvas id="provit" width="77" height="30"></canvas>
                        <div>
                            <h6>
                                $64K
                            </h6>
                            <p class="text-muted">2019</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-0">
            <div class="card-body">
                <div class="">
                    <h3>Registrations</h3>
                </div>

                <div class="d-flex justify-content-between py-3">

                    <div class="d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 24 24"
                             width="24"
                             height="24">
                             <path class="heroicon-ui"
                                   fill="#8DEABC"
                                   d="M20 15a1 1 0 0 0 2 0V7a1 1 0 0 0-1-1h-8a1 1 0 0 0 0 2h5.59L13 13.59l-3.3-3.3a1 1 0 0 0-1.4 0l-6 6a1 1 0 0 0 1.4 1.42L9 12.4l3.3 3.3a1 1 0 0 0 1.4 0L20 9.4V15z"/>
                        </svg>
                        <div>
                            <h3 class="text-reg">
                                12.8%
                            </h3>
                        </div>
                    </div>
                    <div>
                        <canvas id="regist" width="200" height="45"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- last thread -->

    <div class="col-md-6 pt-3">
        <div class="card border-0">
            <div class="card-body">
                <div class="d-flex border-bottom justify-content-between align-items-center">
                    <div class="d-flex">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            width="30"
                            height="30"
                            viewBox="0 0 27.976 22.489">
                            <path id="Path_651" data-name="Path 651" d="M4498.29,1088.889l8,6.441,16.6-17.375" transform="translate(-4496.722 -1076.229)" fill="none" stroke="#6a6a6a" stroke-width="5"/>
                        </svg>
                        <h3 class="ml-3">Tasks</h3>
                    </div>
                    <div class="d-flex">
                        <div class="dropdown">
                            <button class="btn btn-white border-0 dropdown-toggle" type="button" onclick="myFunction()">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" ><path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-2.3-8.7l1.3 1.29 3.3-3.3a1 1 0 0 1 1.4 1.42l-4 4a1 1 0 0 1-1.4 0l-2-2a1 1 0 0 1 1.4-1.42z"/>
                                </svg>
                                </span>
                                All tasks
                            </button>
                            <div id="myDropdown" class="dropdown-content dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                         </div>
                         <div class="dropdown">
                            <button class="btn btn-white border-0 dropdown-toggle" type="button" onclick="myFunction()">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" ><path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-2.3-8.7l1.3 1.29 3.3-3.3a1 1 0 0 1 1.4 1.42l-4 4a1 1 0 0 1-1.4 0l-2-2a1 1 0 0 1 1.4-1.42z"/>
                                </svg>
                                </span>
                                All tasks
                            </button>
                            <div id="myDropdown" class="dropdown-content dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                         </div>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between pt-3">
                    <label>
                        <input type="checkbox" name=""> Add SCSS and JS files  if required
                    </label>
                    <span class="badge badge-pill badge-success">Developer & UI/UX</span>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg"
                                width="15"
                                height="15"
                                viewBox="0 0 7.465 26.031">
                            <path id="icon-more-horiz"
                                    d="M4.55,16.465A3.644,3.644,0,0,1,1,12.732,3.644,3.644,0,0,1,4.55,9,3.644,3.644,0,0,1,8.1,12.732a3.644,3.644,0,0,1-3.55,3.732Zm0-2.488a1.246,1.246,0,0,0,0-2.488,1.246,1.246,0,0,0,0,2.488Zm9.466,2.488a3.644,3.644,0,0,1-3.55-3.732A3.644,3.644,0,0,1,14.016,9a3.644,3.644,0,0,1,3.55,3.732A3.644,3.644,0,0,1,14.016,16.465Zm0-2.488a1.246,1.246,0,1,0-1.183-1.244A1.215,1.215,0,0,0,14.016,13.976Zm9.466,2.488a3.644,3.644,0,0,1-3.55-3.732,3.554,3.554,0,1,1,7.1,0A3.644,3.644,0,0,1,23.482,16.465Zm0-2.488A1.246,1.246,0,1,0,22.3,12.732,1.215,1.215,0,0,0,23.482,13.976Z"
                                    transform="translate(16.465 -1) rotate(90)"/>
                        </svg>
                    </span>
                </div>
                <div class="d-flex align-items-center justify-content-between pt-3">
                    <label>
                        <input type="checkbox" name=""> Add new design ui for Admin dashboard
                    </label>
                    <span class="badge badge-pill badge-danger">Web Design</span>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg"
                                width="15"
                                height="15"
                                viewBox="0 0 7.465 26.031">
                            <path id="icon-more-horiz"
                                    d="M4.55,16.465A3.644,3.644,0,0,1,1,12.732,3.644,3.644,0,0,1,4.55,9,3.644,3.644,0,0,1,8.1,12.732a3.644,3.644,0,0,1-3.55,3.732Zm0-2.488a1.246,1.246,0,0,0,0-2.488,1.246,1.246,0,0,0,0,2.488Zm9.466,2.488a3.644,3.644,0,0,1-3.55-3.732A3.644,3.644,0,0,1,14.016,9a3.644,3.644,0,0,1,3.55,3.732A3.644,3.644,0,0,1,14.016,16.465Zm0-2.488a1.246,1.246,0,1,0-1.183-1.244A1.215,1.215,0,0,0,14.016,13.976Zm9.466,2.488a3.644,3.644,0,0,1-3.55-3.732,3.554,3.554,0,1,1,7.1,0A3.644,3.644,0,0,1,23.482,16.465Zm0-2.488A1.246,1.246,0,1,0,22.3,12.732,1.215,1.215,0,0,0,23.482,13.976Z"
                                    transform="translate(16.465 -1) rotate(90)"/>
                        </svg>
                    </span>
                </div>
                <div class="d-flex align-items-center justify-content-between pt-3">
                    <label>
                        <input type="checkbox" name=""> Generate token auto
                    </label>
                    <span class="badge badge-pill badge-primary">Developer</span>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg"
                                width="15"
                                height="15"
                                viewBox="0 0 7.465 26.031">
                            <path id="icon-more-horiz"
                                    d="M4.55,16.465A3.644,3.644,0,0,1,1,12.732,3.644,3.644,0,0,1,4.55,9,3.644,3.644,0,0,1,8.1,12.732a3.644,3.644,0,0,1-3.55,3.732Zm0-2.488a1.246,1.246,0,0,0,0-2.488,1.246,1.246,0,0,0,0,2.488Zm9.466,2.488a3.644,3.644,0,0,1-3.55-3.732A3.644,3.644,0,0,1,14.016,9a3.644,3.644,0,0,1,3.55,3.732A3.644,3.644,0,0,1,14.016,16.465Zm0-2.488a1.246,1.246,0,1,0-1.183-1.244A1.215,1.215,0,0,0,14.016,13.976Zm9.466,2.488a3.644,3.644,0,0,1-3.55-3.732,3.554,3.554,0,1,1,7.1,0A3.644,3.644,0,0,1,23.482,16.465Zm0-2.488A1.246,1.246,0,1,0,22.3,12.732,1.215,1.215,0,0,0,23.482,13.976Z"
                                    transform="translate(16.465 -1) rotate(90)"/>
                        </svg>
                    </span>
                </div>
                <div class="d-flex align-items-center justify-content-between pt-3">
                    <label>
                        <input type="checkbox" name=""> Generate alert for Message
                    </label>
                    <span class="badge badge-pill badge-warning">Developer</span>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg"
                                width="15"
                                height="15"
                                viewBox="0 0 7.465 26.031">
                            <path id="icon-more-horiz"
                                    d="M4.55,16.465A3.644,3.644,0,0,1,1,12.732,3.644,3.644,0,0,1,4.55,9,3.644,3.644,0,0,1,8.1,12.732a3.644,3.644,0,0,1-3.55,3.732Zm0-2.488a1.246,1.246,0,0,0,0-2.488,1.246,1.246,0,0,0,0,2.488Zm9.466,2.488a3.644,3.644,0,0,1-3.55-3.732A3.644,3.644,0,0,1,14.016,9a3.644,3.644,0,0,1,3.55,3.732A3.644,3.644,0,0,1,14.016,16.465Zm0-2.488a1.246,1.246,0,1,0-1.183-1.244A1.215,1.215,0,0,0,14.016,13.976Zm9.466,2.488a3.644,3.644,0,0,1-3.55-3.732,3.554,3.554,0,1,1,7.1,0A3.644,3.644,0,0,1,23.482,16.465Zm0-2.488A1.246,1.246,0,1,0,22.3,12.732,1.215,1.215,0,0,0,23.482,13.976Z"
                                    transform="translate(16.465 -1) rotate(90)"/>
                        </svg>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 pt-3">
        <div class="card border-0">
            <div class="card-body">
                <h3>Order Timeline</h3>
                <div class="py-3">
                    <ul class="timeline">
                        <li>
                            <div class="d-flex justify-content-between">
                                <h6>1983, Orders, $4220</h6>
                                <h6 class="text-muted">september, 16</h6>
                            </div>
                            <p class="text-muted">2 hour ago</p>
                            <div class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    width="30"
                                    height="30"
                                    viewBox="0 0 24 24">
                                        <g id="Group_384" data-name="Group 384" transform="translate(-1283 -4723)">
                                            <rect id="Rectangle_419" data-name="Rectangle 419" width="24" height="24" transform="translate(1283 4723)" fill="#f7f5f5"/>
                                            <g id="Group_380" data-name="Group 380" transform="translate(1289.541 4729.023)">
                                            <path id="Path_430" data-name="Path 430" d="M5386.555,1508.551s-2.528,8-8.014,10.8" transform="translate(-5378.541 -1508.551)" fill="none" stroke="#eb0e0e" stroke-width="1"/>
                                            <path id="Path_431" data-name="Path 431" d="M5385,1512.5s-.86,6.1,2.05,8.638" transform="translate(-5378.541 -1508.551)" fill="none" stroke="#eb0e0e" stroke-width="1"/>
                                            </g>
                                        </g>
                                </svg>
                                <h3 class="text-muted ml-3">New Order.pdf</h3>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex justify-content-between">
                                <h6>1983, Orders, $4220</h6>
                                <h6 class="text-muted">september, 16</h6>
                            </div>
                            <p class="text-muted">2 hour ago</p>
                            <div class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    width="30"
                                    height="30"
                                    viewBox="0 0 24 24">
                                        <g id="Group_384" data-name="Group 384" transform="translate(-1283 -4723)">
                                            <rect id="Rectangle_419" data-name="Rectangle 419" width="24" height="24" transform="translate(1283 4723)" fill="#f7f5f5"/>
                                            <g id="Group_380" data-name="Group 380" transform="translate(1289.541 4729.023)">
                                            <path id="Path_430" data-name="Path 430" d="M5386.555,1508.551s-2.528,8-8.014,10.8" transform="translate(-5378.541 -1508.551)" fill="none" stroke="#eb0e0e" stroke-width="1"/>
                                            <path id="Path_431" data-name="Path 431" d="M5385,1512.5s-.86,6.1,2.05,8.638" transform="translate(-5378.541 -1508.551)" fill="none" stroke="#eb0e0e" stroke-width="1"/>
                                            </g>
                                        </g>
                                </svg>
                                <h3 class="text-muted ml-3">New Order.pdf</h3>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex justify-content-between">
                                <h6>1983, Orders, $4220</h6>
                                <h6 class="text-muted">september, 16</h6>
                            </div>
                            <p class="text-muted">2 hour ago</p>
                            <div class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    width="30"
                                    height="30"
                                    viewBox="0 0 24 24">
                                        <g id="Group_384" data-name="Group 384" transform="translate(-1283 -4723)">
                                            <rect id="Rectangle_419" data-name="Rectangle 419" width="24" height="24" transform="translate(1283 4723)" fill="#f7f5f5"/>
                                            <g id="Group_380" data-name="Group 380" transform="translate(1289.541 4729.023)">
                                            <path id="Path_430" data-name="Path 430" d="M5386.555,1508.551s-2.528,8-8.014,10.8" transform="translate(-5378.541 -1508.551)" fill="none" stroke="#eb0e0e" stroke-width="1"/>
                                            <path id="Path_431" data-name="Path 431" d="M5385,1512.5s-.86,6.1,2.05,8.638" transform="translate(-5378.541 -1508.551)" fill="none" stroke="#eb0e0e" stroke-width="1"/>
                                            </g>
                                        </g>
                                </svg>
                                <h3 class="text-muted ml-3">New Order.pdf</h3>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script src="{{asset('js/')}}/polar.js"></script>
<script src="{{asset('js/')}}/users.js"></script>
<script src="{{asset('js/')}}/bounceRate.js"></script>
<script src="{{asset('js/')}}/sessions.js"></script>
<script src="{{asset('js/')}}/websiteAnalitics.js"></script>
<script src="{{asset('js/')}}/referral.js"></script>
<script src="{{asset('js/')}}/profit.js"></script>
<script src="{{asset('js/')}}/registration.js"></script>
@endpush