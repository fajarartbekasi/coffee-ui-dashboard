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
      Analitycs
    </li>
  </ol>
</nav>
<div class="row pt-8 pb-2 mb-3">

    <div class="col-md-6">
      <div class="card border-0">
        <div class="card-body">
          <h4 class="font-weight-bolder">Congratulation Fajar !</h4>
          <h6 class="text-muted">Best seller of the month</h6>

          <div class="d-flex pt-3">
            <div class="mr-auto">
              <h3 class="text-info font-weight-bolder">$89K</h3>
              <p class="text-muted text-align-center">
                You have done 57.6% more sales today.
              </p>

              <div class="pt-3 ">
                <a href="#" class="btn btn-info"> View Sales</a>
              </div>
            </div>
            <div class="pt-2 mr-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 24 24">
                <path id="icon-trophy" d="M12.8,23.6V21.1a7.2,7.2,0,0,1-5.088-3.6A4.824,4.824,0,0,1,2,12.8v-6A2.407,2.407,0,0,1,4.4,4.4H6.8A2.407,2.407,0,0,1,9.2,2h9.6a2.4,2.4,0,0,1,2.4,2.4h2.4A2.4,2.4,0,0,1,26,6.8v6a4.8,4.8,0,0,1-5.712,4.716A7.2,7.2,0,0,1,15.2,21.1v2.5H20A1.2,1.2,0,0,1,20,26H8a1.2,1.2,0,1,1,0-2.4Zm8.3-8.4h.1a2.4,2.4,0,0,0,2.4-2.4v-6H21.2V14A7.961,7.961,0,0,1,21.1,15.2ZM6.9,15.2A7.248,7.248,0,0,1,6.8,14V6.8H4.4v6a2.4,2.4,0,0,0,2.5,2.4ZM9.2,4.4V14a4.8,4.8,0,0,0,9.6,0V4.4Z" transform="translate(-2 -2)" fill="#ff7d47"/>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card border-0">
        <div class="card-body text-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="#659398" width="120" height="120" viewBox="0 0 42 36.484">
              <path id="icon-briefcase" d="M14.6,11.107V7.054A4.141,4.141,0,0,1,18.8,3h8.4a4.129,4.129,0,0,1,4.2,4.054v4.054h8.4A4.129,4.129,0,0,1,44,15.161V35.43a4.129,4.129,0,0,1-4.2,4.054H6.2A4.129,4.129,0,0,1,2,35.43V15.161a4.141,4.141,0,0,1,4.2-4.054Zm16.8,4.054H14.6V35.43H31.4Zm4.2,0V35.43h4.2V15.161Zm-25.2,0H6.2V35.43h4.2Zm8.4-4.054h8.4V7.054H18.8Z" transform="translate(-2 -3)"/>
            </svg>
            <div class="pt-3">
              <h6 class="text-muted">New Products</h6>
              <h3 class="text-info font-weight-bolder">1.2K</h3>
            </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card border-0">
        <div class="card-body text-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="#AF4448" viewBox="0 0 24 24" width="120" height="120">
              <path class="heroicon-ui" d="M12 12a5 5 0 1 1 0-10 5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v2z"/>
            </svg>
            <div class="pt-3">
              <h6 class="text-muted">New Users</h6>
              <h3 class="text-info font-weight-bolder">45.6 K</h3>
            </div>
        </div>
      </div>
    </div>
</div>
<!-- second content -->
<div class="row mb-3">
  <div class="col-md-6">
    <div class="card border-0" style="height: 300px;">
      <div class="card-body">
        <div class="d-flex">
            <div class="mr-auto">
                <h5 class="font-weight-bolder">Revenue Growth</h5>
            </div>
            <div class="d-flex">
              <h5>$25,980</h5>
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 7.465 26.031">
                  <path id="icon-more-horiz" d="M4.55,16.465A3.644,3.644,0,0,1,1,12.732,3.644,3.644,0,0,1,4.55,9,3.644,3.644,0,0,1,8.1,12.732a3.644,3.644,0,0,1-3.55,3.732Zm0-2.488a1.246,1.246,0,0,0,0-2.488,1.246,1.246,0,0,0,0,2.488Zm9.466,2.488a3.644,3.644,0,0,1-3.55-3.732A3.644,3.644,0,0,1,14.016,9a3.644,3.644,0,0,1,3.55,3.732A3.644,3.644,0,0,1,14.016,16.465Zm0-2.488a1.246,1.246,0,1,0-1.183-1.244A1.215,1.215,0,0,0,14.016,13.976Zm9.466,2.488a3.644,3.644,0,0,1-3.55-3.732,3.554,3.554,0,1,1,7.1,0A3.644,3.644,0,0,1,23.482,16.465Zm0-2.488A1.246,1.246,0,1,0,22.3,12.732,1.215,1.215,0,0,0,23.482,13.976Z" transform="translate(16.465 -1) rotate(90)"/>
                </svg>
              </span>
            </div>
        </div>
        <div class="" style="top:94px; left:20px; width:450px; height:230px;">
          <canvas id="revenueGrowth" ></canvas>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card border-0">
      <div class="card-body">
        <div class="d-flex">
            <div class="mr-auto">
                <h5 class="font-weight-bolder">Visit of 2020</h5>
            </div>
            <div class="d-flex">
              <h5>$25,980</h5>
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 7.465 26.031">
                  <path id="icon-more-horiz" d="M4.55,16.465A3.644,3.644,0,0,1,1,12.732,3.644,3.644,0,0,1,4.55,9,3.644,3.644,0,0,1,8.1,12.732a3.644,3.644,0,0,1-3.55,3.732Zm0-2.488a1.246,1.246,0,0,0,0-2.488,1.246,1.246,0,0,0,0,2.488Zm9.466,2.488a3.644,3.644,0,0,1-3.55-3.732A3.644,3.644,0,0,1,14.016,9a3.644,3.644,0,0,1,3.55,3.732A3.644,3.644,0,0,1,14.016,16.465Zm0-2.488a1.246,1.246,0,1,0-1.183-1.244A1.215,1.215,0,0,0,14.016,13.976Zm9.466,2.488a3.644,3.644,0,0,1-3.55-3.732,3.554,3.554,0,1,1,7.1,0A3.644,3.644,0,0,1,23.482,16.465Zm0-2.488A1.246,1.246,0,1,0,22.3,12.732,1.215,1.215,0,0,0,23.482,13.976Z" transform="translate(16.465 -1) rotate(90)"/>
                </svg>
              </span>
            </div>
        </div>
        <div class="d-flex mx-auto" style="top:94px; left:20px; width:500px; height:230px;">
          <canvas id="myChart" ></canvas>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- tree content -->
<div class="row mb-3 pt-3">
  <div class="col-md-12">
    <div class="card border-0">
      <div class="card-body">
        <div class="row">
          <div class="col-md-8">
            <div class="car-body">
                <div class="d-flex">
                  <div class="mr-auto">
                    <h5 class="text-muted">
                      Order Summary
                    </h5>
                  </div>
                  <div class="d-flex">
                      <button type="submit" class=" btn btn-teal-light mr-3">Month</button>
                      <button type="submit" class=" btn btn-blue-light">Week</button>
                  </div>
                </div>
                <div style="top:94px; left:20px; width:650px; height:330px;">
                    <canvas id="order"></order>
                </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-body border-left border-bottom">
              <h5 class="text-muted">Sales History</h5>
              <div class="pt-3">
                <div class="d-flex">
                  <div class="mr-auto">
                    <div>
                      <h6 class="font-weight-bolder">Airpods</h6>
                      <h6 class="text-muted">35 min ago</h6>
                    </div>
                  </div>
                  <div>
                    <h6>+ $50</h6>
                  </div>
                </div>
                <div class="d-flex">
                  <div class="mr-auto">
                    <div class="font-weight-bolder">
                      <h6>iPhone</h6>
                      <h6 class="text-muted">2 hour ago</h6>
                    </div>
                  </div>
                  <div>
                      <h6>- $50</h6>
                  </div>
                </div>
                <div class="d-flex">
                  <div class="mr-auto">
                    <div class="font-weight-bolder">
                      <h6>Mackbook</h6>
                      <h6 class="text-muted">1 day ago</h6>
                    </div>
                  </div>
                  <div>
                      <h6>- $50</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body border-left">
              <h5 class="text-muted">Total Sales</h5>
              <div class="progress">
                <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- four content -->
<div class="row mb-3">
  <div class="col-md-6 mb-3 pt-3">
    <div class="card border-0">
      <div class="card-body">
        <div class="d-flex mb-3">
          <div class="mr-auto">
              <h5 class="font-weight-bold">
                  Latest update
              </h5>
          </div>
          <div>
            <button type="submit" class="btn btn-outline-secondary text-muted">
                2019
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M8.7 14.7a1 1 0 0 1-1.4-1.4l4-4a1 1 0 0 1 1.4 0l4 4a1 1 0 0 1-1.4 1.4L12 11.42l-3.3 3.3z"/></svg>
                </span>
            </button>
          </div>
        </div>
        <div class="d-flex pt-3 mb-2">
            <div class="mr-auto">
              <div class="d-flex">
                <div class="card border-0 text-info p-3 card-product" >
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 18.98 39.686">
                    <path id="Path_1" data-name="Path 1" d="M2417.8,1390.142l-14.522,21.831,9.518-1.646-10.478,19.5,18.98-23.925-10.9,1.225Z" transform="translate(-2402.316 -1390.142)"/>
                  </svg>

                </div>
                <div class="ml-3">
                  <h5>Total Products</h5>
                  <h6 class="text-muted">
                    1.2k New products
                  </h6>
                </div>
              </div>
            </div>
            <div>
              <h5 class="text-muted">
                10.6K
              </h5>
            </div>
        </div>
        <div class="d-flex pt-3 mb-2">
            <div class="mr-auto">
              <div class="d-flex">
                <div class="card border-0 text-info p-3 card-sales" >
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path class="heroicon-ui" d="M20 9a1 1 0 0 1 2 0v8a1 1 0 0 1-1 1h-8a1 1 0 0 1 0-2h5.59L13 10.41l-3.3 3.3a1 1 0 0 1-1.4 0l-6-6a1 1 0 0 1 1.4-1.42L9 11.6l3.3-3.3a1 1 0 0 1 1.4 0l6.3 6.3V9z"/>
                </svg>
                </div>
                <div class="ml-3">
                  <h5>Total Sales</h5>
                  <h6 class="text-muted">
                    39.4k New Sales
                  </h6>
                </div>
              </div>
            </div>
            <div>
              <h5 class="text-muted">
                20M
              </h5>
            </div>
        </div>
        <div class="d-flex pt-3 mb-2">
            <div class="mr-auto">
              <div class="d-flex">
                <div class="card border-0 text-info p-3 card-revenue" >
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path class="heroicon-ui" d="M4 3h16a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2zm16 4V5H4v2h16zm0 2H4v10h16V9z"/>
                </svg>
                </div>
                <div class="ml-3">
                  <h5>Total Revenue</h5>
                  <h6 class="text-muted">
                    43.3k New Revenue
                  </h6>
                </div>
              </div>
            </div>
            <div>
              <h5 class="text-muted">
                15.89K
              </h5>
            </div>
        </div>
        <div class="d-flex pt-3 mb-2">
            <div class="mr-auto">
              <div class="d-flex">
                <div class="card border-0 text-info p-3 card-cost" >
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm1-11v2h1a3 3 0 0 1 0 6h-1v1a1 1 0 0 1-2 0v-1H8a1 1 0 0 1 0-2h3v-2h-1a3 3 0 0 1 0-6h1V6a1 1 0 0 1 2 0v1h3a1 1 0 0 1 0 2h-3zm-2 0h-1a1 1 0 1 0 0 2h1V9zm2 6h1a1 1 0 0 0 0-2h-1v2z"/>
                </svg>
                </div>
                <div class="ml-3">
                  <h5>Total Cost</h5>
                  <h6 class="text-muted">
                   Total Expense
                  </h6>
                </div>
              </div>
            </div>
            <div>
              <h5 class="text-muted">
                1.25B
              </h5>
            </div>
        </div>
        <div class="d-flex pt-3 mb-2">
            <div class="mr-auto">
              <div class="d-flex">
                <div class="card border-0 text-info p-3 card-user" >
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path class="heroicon-ui" d="M12 12a5 5 0 1 1 0-10 5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v2z"/>
                </svg>
                </div>
                <div class="ml-3">
                  <h5>Total User</h5>
                  <h6 class="text-muted">
                    New User
                  </h6>
                </div>
              </div>
            </div>
            <div>
              <h5 class="text-muted">
                15.89K
              </h5>
            </div>
        </div>
        <div class="d-flex pt-3 mb-2">
            <div class="mr-auto">
              <div class="d-flex">
                <div class="card border-0 text-info p-3 card-revenue" >
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path class="heroicon-ui" d="M6.3 12.3l10-10a1 1 0 0 1 1.4 0l4 4a1 1 0 0 1 0 1.4l-10 10a1 1 0 0 1-.7.3H7a1 1 0 0 1-1-1v-4a1 1 0 0 1 .3-.7zM8 16h2.59l9-9L17 4.41l-9 9V16zm10-2a1 1 0 0 1 2 0v6a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2h6a1 1 0 0 1 0 2H4v14h14v-6z"/>
                </svg>
                </div>
                <div class="ml-3">
                  <h5>Total Visits</h5>
                  <h6 class="text-muted">
                    New Visit
                  </h6>
                </div>
              </div>
            </div>
            <div>
              <h5 class="text-muted">
                15.89K
              </h5>
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 pt-3">
    <div class="card border-0">
      <div class="card-body">
        <div class="d-flex">
          <div class="mr-auto">
              <h5 class="font-weight-bold">
                  $Earnings
              </h5>
          </div>
          <div>
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 7.465 26.031">
                  <path id="icon-more-horiz" d="M4.55,16.465A3.644,3.644,0,0,1,1,12.732,3.644,3.644,0,0,1,4.55,9,3.644,3.644,0,0,1,8.1,12.732a3.644,3.644,0,0,1-3.55,3.732Zm0-2.488a1.246,1.246,0,0,0,0-2.488,1.246,1.246,0,0,0,0,2.488Zm9.466,2.488a3.644,3.644,0,0,1-3.55-3.732A3.644,3.644,0,0,1,14.016,9a3.644,3.644,0,0,1,3.55,3.732A3.644,3.644,0,0,1,14.016,16.465Zm0-2.488a1.246,1.246,0,1,0-1.183-1.244A1.215,1.215,0,0,0,14.016,13.976Zm9.466,2.488a3.644,3.644,0,0,1-3.55-3.732,3.554,3.554,0,1,1,7.1,0A3.644,3.644,0,0,1,23.482,16.465Zm0-2.488A1.246,1.246,0,1,0,22.3,12.732,1.215,1.215,0,0,0,23.482,13.976Z" transform="translate(16.465 -1) rotate(90)"/>
                </svg>
              </span>
          </div>
        </div>
        <div class="nav-scroller bg-white pt-1">
          <nav class="nav nav-underline">
            <button type="submit" class="btn btn-github nav-link mr-3">
              <div class="d-flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 32.055 31.405">
                <path id="icons8-github" d="M16.267,2.142a15.982,15.982,0,0,0-3.049,31.133V29.584a6.622,6.622,0,0,1-1.444.16A3.462,3.462,0,0,1,8.4,26.7a3.33,3.33,0,0,0-.963-1.6c-.481-.16-.642-.16-.642-.321,0-.321.481-.321.642-.321.963,0,1.765,1.123,2.086,1.6a2.925,2.925,0,0,0,2.247,1.6,3.2,3.2,0,0,0,1.444-.321,4.067,4.067,0,0,1,1.6-2.889c-3.691-.8-6.419-2.889-6.419-6.419a7.564,7.564,0,0,1,1.926-4.814,5.952,5.952,0,0,1-.321-2.247A5.5,5.5,0,0,1,10.49,8.4a7.222,7.222,0,0,1,4.493,2.086,8.686,8.686,0,0,1,3.049-.481,10.347,10.347,0,0,1,3.21.481A6.919,6.919,0,0,1,25.736,8.4a7.976,7.976,0,0,1,.321,2.568,5.336,5.336,0,0,1-.321,2.247,7.23,7.23,0,0,1,1.926,4.814c0,3.531-2.728,5.617-6.419,6.419a4.948,4.948,0,0,1,1.6,3.691v5.3a16.067,16.067,0,0,0-6.58-31.294Z" transform="translate(-2.026 -2.031)" fill="#757575"/>
                </svg>
                <div>
                  <div class="ml-3">
                  <div >
                      Repo Desing
                  </div>
                  <div class="mr-auto">
                      Github
                  </div>
                </div>
              </div>
            </button>
            <button type="submit" class="btn btn-union nav-link mr-3">
              <div class="d-flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 32 41">
                  <path id="Union_2" data-name="Union 2" d="M-1957.5,95.5a6,6,0,0,1,4-5.659V72.159a6,6,0,0,1-4-5.659,6,6,0,0,1,6-6,6,6,0,0,1,6,6,6,6,0,0,1-3.67,5.531c1.526,2.377,6.261,8.9,13.144,10.53A5.986,5.986,0,0,1-1931.5,80.5a6,6,0,0,1,6,6,6,6,0,0,1-6,6,6,6,0,0,1-6-5.836c-2.63-.991-8.351-3.6-12-8.595V89.841a6,6,0,0,1,4,5.659,6,6,0,0,1-6,6A6,6,0,0,1-1957.5,95.5Z" transform="translate(1957.5 -60.5)"/>
                </svg>

                <div>
                  <div class="ml-3">
                  <div >
                      Designer
                  </div>
                  <div class="mr-auto">
                      Women Clothes
                  </div>
                </div>
              </div>
            </button>
            <button type="submit" class="btn btn-github nav-link">
              <div class="d-flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 32.055 31.405">
                <path id="icons8-github" d="M16.267,2.142a15.982,15.982,0,0,0-3.049,31.133V29.584a6.622,6.622,0,0,1-1.444.16A3.462,3.462,0,0,1,8.4,26.7a3.33,3.33,0,0,0-.963-1.6c-.481-.16-.642-.16-.642-.321,0-.321.481-.321.642-.321.963,0,1.765,1.123,2.086,1.6a2.925,2.925,0,0,0,2.247,1.6,3.2,3.2,0,0,0,1.444-.321,4.067,4.067,0,0,1,1.6-2.889c-3.691-.8-6.419-2.889-6.419-6.419a7.564,7.564,0,0,1,1.926-4.814,5.952,5.952,0,0,1-.321-2.247A5.5,5.5,0,0,1,10.49,8.4a7.222,7.222,0,0,1,4.493,2.086,8.686,8.686,0,0,1,3.049-.481,10.347,10.347,0,0,1,3.21.481A6.919,6.919,0,0,1,25.736,8.4a7.976,7.976,0,0,1,.321,2.568,5.336,5.336,0,0,1-.321,2.247,7.23,7.23,0,0,1,1.926,4.814c0,3.531-2.728,5.617-6.419,6.419a4.948,4.948,0,0,1,1.6,3.691v5.3a16.067,16.067,0,0,0-6.58-31.294Z" transform="translate(-2.026 -2.031)" fill="#757575"/>
                </svg>
                <div>
                  <div class="ml-3">
                  <div >
                      Best Design
                  </div>
                  <div class="mr-auto">
                      Clothing
                  </div>
                </div>
              </div>
            </button>
          </nav>
        </div>
        <div class="justify-content-between pt-3 mb-3">
          <div>
            <div class="d-flex">
              <div class="mr-auto">
                <div>
                  <div class="d-flex">
                    <img src="{{asset('images/user.jpg')}}"
                          width="50"
                          height="50"
                          class="rounded-circle shadow"
                          alt="" >
                    <div class="ml-3">
                      <h5>Chaerul Fajar Subhi</h5>
                      <h6 class="text-muted">
                        Developer & UI/UX
                      </h6>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div>
                  <div class="card-earning earning-blue-light">
                    + $180
                  </div>
                </div>
              </div>
            </div>
            <div class="progress">
              <div style="width: 90%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="90" role="progressbar" class="purple progress-bar">
              <span>90%</span>
                </div>
            </div>
          </div>
        </div>
        <div class="justify-content-between pt-3 mb-3">
          <div>
            <div class="d-flex">
              <div class="mr-auto">
                <div>
                  <div class="d-flex">
                    <img src="{{asset('images/michael-dam-mEZ3PoFGs_k-unsplash.jpg')}}"
                          width="50"
                          height="50"
                          class="rounded-circle shadow"
                          alt="" >
                    <div class="ml-3">
                      <h5>Michel dam</h5>
                      <h6 class="text-muted">
                        web design
                      </h6>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div>
                  <div class="card-earning earning-green-light">
                    + $553
                  </div>
                </div>
              </div>
            </div>
            <div class="progress">
              <div style="width: 40%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="purple progress-bar">
              <span>40%</span>
                </div>
            </div>
          </div>
        </div>
        <div class="justify-content-between pt-3 mb-3">
          <div>
            <div class="d-flex">
              <div class="mr-auto">
                <div>
                  <div class="d-flex">
                    <img src="{{asset('images/houcine-ncib-B4TjXnI0Y2c-unsplash.jpg')}}"
                          width="50"
                          height="50"
                          class="rounded-circle shadow"
                          alt="" >
                    <div class="ml-3">
                      <h5>Houcine ncib</h5>
                      <h6 class="text-muted">
                        developer
                      </h6>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div>
                  <div class="card-earning earning-purple-light">+ $553</div>
                </div>
              </div>
            </div>
            <div class="progress">
              <div style="width: 20%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="purple progress-bar">
              <span>20%</span>
                </div>
            </div>
          </div>
        </div>
        <div class="justify-content-between pt-3 mb-3">
          <div>
            <div class="d-flex">
              <div class="mr-auto">
                <div>
                  <div class="d-flex">
                    <img src="{{asset('images/joel-mott-LaK153ghdig-unsplash.jpg')}}"
                          width="50"
                          height="50"
                          class="rounded-circle shadow"
                          alt="" >
                    <div class="ml-3">
                      <h5>Joel moot</h5>
                      <h6 class="text-muted">
                        developer
                      </h6>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div>
                  <div class="card-earning earning-red-light">+ $553</div>
                </div>
              </div>
            </div>
            <div class="progress">
              <div style="width: 20%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="purple progress-bar">
              <span>20%</span>
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
<script src="{{asset('js/')}}/chartDoughNut.js"></script>
<script src="{{asset('js/')}}/chartOrder.js"></script>
<script src="{{asset('js/')}}/revenueGrowth.js"></script>
@endpush