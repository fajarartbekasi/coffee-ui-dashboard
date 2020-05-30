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
        Email
    </li>

    <li class="">
        <svg xmlns="http://www.w3.org/2000/svg" class="mr-3  ml-3 " width="20" height="20" viewBox="0 0 24.523 24.18">
            <g id="Group_515" data-name="Group 515" transform="translate(-344 -262)">
                <path id="icon-cheveron-right" d="M9.593,11.048a2.467,2.467,0,0,1,3.454-3.454l9.869,9.869a2.467,2.467,0,0,1,0,3.454l-9.869,9.869a2.467,2.467,0,0,1-3.454-3.454l8.118-8.142L9.569,11.048Z" transform="translate(334.9 254.9)" fill="#6a6a6a"/>
                <path id="icon-cheveron-right-2" data-name="icon-cheveron-right" d="M9.593,11.048a2.467,2.467,0,0,1,3.454-3.454l9.869,9.869a2.467,2.467,0,0,1,0,3.454l-9.869,9.869a2.467,2.467,0,0,1-3.454-3.454l8.118-8.142L9.569,11.048Z" transform="translate(344.9 254.9)" fill="#6a6a6a"/>
            </g>
        </svg>
      </span>
        Inbox
    </li>
  </ol>
</nav>
<div class="row pt-8 mb-3">
    <div class="col-sm-3 col-md-3">
        <div class="card border-0">
            <div class="card-body">
                <a href="" class="btn btn-primary btn-block mb-3" role="button"> + Compose</a>
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active"
                       id="v-pills-home-tab"
                       data-toggle="pill"
                       href="#v-pills-home"
                       role="tab"
                       aria-controls="v-pills-home"
                       aria-selected="true">
                       <span class="mr-2">
                           <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                width="24"
                                height="24">
                                <path class="heroicon-ui" d="M4 4h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2zm16 3.38V6H4v1.38l8 4 8-4zm0 2.24l-7.55 3.77a1 1 0 0 1-.9 0L4 9.62V18h16V9.62z"/></svg></span>
                       Inbox
                       <span class="badge badge-pill badge-success float-right text-primary">5</span>
                    </a>
                    <a class="nav-link text-muted" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                        <span class="mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <g id="send" transform="translate(0 0)">
                                    <path id="Path_432" data-name="Path 432" d="M8.75,17.612V22.25a.75.75,0,0,0,1.354.444L12.817,19Z" transform="translate(0 1)" fill="#6a6a6a"/>
                                    <path id="Path_433" data-name="Path 433" d="M23.685.146A.72.72,0,0,0,22.9.089L.4,12.427a.8.8,0,0,0-.4.758.783.783,0,0,0,.5.686l6.255,2.245L20.083,4.156,9.775,17.2l10.483,3.762A.734.734,0,0,0,20.5,21a.727.727,0,0,0,.39-.114.794.794,0,0,0,.352-.556L23.992.9a.807.807,0,0,0-.307-.758Z" transform="translate(0 0)" fill="#6a6a6a"/>
                                </g>
                            </svg>
                        </span>
                        Sent
                    </a>
                    <a class="nav-link text-muted" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                        <span class="mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M6.3 12.3l10-10a1 1 0 0 1 1.4 0l4 4a1 1 0 0 1 0 1.4l-10 10a1 1 0 0 1-.7.3H7a1 1 0 0 1-1-1v-4a1 1 0 0 1 .3-.7zM8 16h2.59l9-9L17 4.41l-9 9V16zm10-2a1 1 0 0 1 2 0v6a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2h6a1 1 0 0 1 0 2H4v14h14v-6z"/></svg>
                        </span>
                        Draf
                    </a>
                    <a class="nav-link text-muted" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                        <span class="mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M6.1 21.98a1 1 0 0 1-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 0 1 .56-1.71l6.05-.88 2.7-5.48a1 1 0 0 1 1.8 0l2.7 5.48 6.06.88a1 1 0 0 1 .55 1.7l-4.38 4.27 1.04 6.03a1 1 0 0 1-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 0 1 .93 0l4.08 2.15-.78-4.55a1 1 0 0 1 .29-.88l3.3-3.22-4.56-.67a1 1 0 0 1-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 0 1-.75.54l-4.57.67 3.3 3.22a1 1 0 0 1 .3.88l-.79 4.55 4.09-2.15z"/></svg>
                        </span>
                        Started
                    </a>
                    <a class="nav-link text-muted" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                        <span class="mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <g id="Group_386" data-name="Group 386" transform="translate(-306 -709)">
                                    <g id="Ellipse_54" data-name="Ellipse 54" transform="translate(306 709)" fill="none" stroke="#717171" stroke-width="3">
                                    <circle cx="12" cy="12" r="12" stroke="none"/>
                                    <circle cx="12" cy="12" r="10.5" fill="none"/>
                                    </g>
                                    <text id="i" transform="translate(316 729)" fill="#6a6a6a" font-size="21" font-family="HelveticaNeue, Helvetica Neue"><tspan x="0" y="0">i</tspan></text>
                                </g>
                            </svg>
                        </span>
                        Spam
                    </a>
                    <a class="nav-link text-muted" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                        <span class="mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M8 6V4c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v2h5a1 1 0 0 1 0 2h-1v12a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V8H3a1 1 0 1 1 0-2h5zM6 8v12h12V8H6zm8-2V4h-4v2h4zm-4 4a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0v-6a1 1 0 0 1 1-1zm4 0a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0v-6a1 1 0 0 1 1-1z"/></svg>
                        </span>
                        Trash
                    </a>
                    <h6 class="ml-3 pt-3 font-weight-bold">Labels</h6>
                    <a href="" class="nav-link text-muted">Products <span class="badge badge-pill badge-success float-right text-success">3</span></a>
                    <a href="" class="nav-link text-muted">Work <span class="badge badge-pill badge-success float-right text-success">3</span></a>
                    <a href="" class="nav-link text-muted">Misc <span class="badge badge-pill badge-success float-right text-success">3</span></a>
                    <a href="" class="nav-link text-muted">Familly <span class="badge badge-pill badge-success float-right text-success">3</span></a>
                    <a href="" class="nav-link text-muted">Design <span class="badge badge-pill badge-success float-right text-success">3</span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-9 col-md-9">
        <div class="card border-0">
            <div class="card-header bg-white">
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1">
                            <label class="custom-control-label" for="customSwitch1"></label>
                        </div>
                        <div class="ml-1">
                            <button type="button" class="btn btn-outline-secondary">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M8 6V4c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v2h5a1 1 0 0 1 0 2h-1v12a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V8H3a1 1 0 1 1 0-2h5zM6 8v12h12V8H6zm8-2V4h-4v2h4zm-4 4a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0v-6a1 1 0 0 1 1-1zm4 0a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0v-6a1 1 0 0 1 1-1z"/></svg>
                                </span>
                            </button>
                        </div>
                        <div class="ml-1">
                            <button type="button" class="btn btn-outline-secondary">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M4 4h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2zm16 3.38V6H4v1.38l8 4 8-4zm0 2.24l-7.55 3.77a1 1 0 0 1-.9 0L4 9.62V18h16V9.62z"/></svg>
                                </span>
                            </button>
                        </div>
                        <div class="ml-1">
                            <button type="button" class="btn btn-outline-secondary">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M20 6a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2h7.41l2 2H20zM4 6v12h16V8h-7.41l-2-2H4zm9 6h2a1 1 0 0 1 0 2h-2v2a1 1 0 0 1-2 0v-2H9a1 1 0 0 1 0-2h2v-2a1 1 0 0 1 2 0v2z"/></svg>
                                </span>
                            </button>
                        </div>
                        <div class="ml-1">
                            <button type="button" class="btn btn-outline-secondary">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M2.59 13.41A1.98 1.98 0 0 1 2 12V7a5 5 0 0 1 5-5h4.99c.53 0 1.04.2 1.42.59l8 8a2 2 0 0 1 0 2.82l-8 8a2 2 0 0 1-2.82 0l-8-8zM20 12l-8-8H7a3 3 0 0 0-3 3v5l8 8 8-8zM7 8a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/></svg>
                                </span>
                            </button>
                        </div>
                        <div class="ml-1">
                            <form>
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <div class="input-group-prepend ">
                                                <span class="input-group-text bg-white border-rigth-0" id="inputGroupPrepend2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="19.944" height="19.943" viewBox="0 0 19.944 19.943">
                                                        <path id="icon-zoom-out" d="M16.32,14.9l5.39,5.4a1,1,0,0,1-1.42,1.4l-5.38-5.38a8,8,0,1,1,1.41-1.41ZM10,16a6,6,0,1,0-6-6A6,6,0,0,0,10,16Z" transform="translate(-2.002 -2.002)"/>
                                                    </svg>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control border-left-0" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" placeholder="seacrh....." required>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div>
                            <button type="button" class="btn btn-outline-secondary">
                                1-25 of 45
                            </button>
                        </div>
                        <div class="ml-1">
                            <button type="button" class="btn btn-outline-secondary">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M14.7 15.3a1 1 0 0 1-1.4 1.4l-4-4a1 1 0 0 1 0-1.4l4-4a1 1 0 0 1 1.4 1.4L11.42 12l3.3 3.3z"/></svg>
                                </span>
                            </button>
                        </div>
                        <div class="ml-1">
                            <button type="button" class="btn btn-outline-secondary">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M9.3 8.7a1 1 0 0 1 1.4-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.4-1.4l3.29-3.3-3.3-3.3z"/></svg>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body min-vh-50">
                <div class="d-flex py-2 justify-content-between ">
                    <div class="d-flex align-items-center">
                        <div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="#F25B23" class="heroicon-ui" d="M6.1 21.98a1 1 0 0 1-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 0 1 .56-1.71l6.05-.88 2.7-5.48a1 1 0 0 1 1.8 0l2.7 5.48 6.06.88a1 1 0 0 1 .55 1.7l-4.38 4.27 1.04 6.03a1 1 0 0 1-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 0 1 .93 0l4.08 2.15-.78-4.55a1 1 0 0 1 .29-.88l3.3-3.22-4.56-.67a1 1 0 0 1-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 0 1-.75.54l-4.57.67 3.3 3.22a1 1 0 0 1 .3.88l-.79 4.55 4.09-2.15z"/></svg>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex ml-2">
                            <img src="{{asset('images/user.jpg')}}"
                                width="60"
                                height="60"
                                class="rounded-circle shadow"
                                alt="" >
                            <div class="ml-3">
                                <h5 class="font-weight-bold">fajarbekasieditting@gmail.com</h5>
                                <p class="text-muted">simply dummy text of the printing and typesetting industry. </p>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <h5 class="font-weight-bold">21 minute ago</h5>
                        <span class="badge badge-pill badge-success text-success">3</span>
                    </div>
                </div>
                <div class="d-flex py-2 justify-content-between ">
                    <div class="d-flex align-items-center">
                        <div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M6.1 21.98a1 1 0 0 1-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 0 1 .56-1.71l6.05-.88 2.7-5.48a1 1 0 0 1 1.8 0l2.7 5.48 6.06.88a1 1 0 0 1 .55 1.7l-4.38 4.27 1.04 6.03a1 1 0 0 1-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 0 1 .93 0l4.08 2.15-.78-4.55a1 1 0 0 1 .29-.88l3.3-3.22-4.56-.67a1 1 0 0 1-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 0 1-.75.54l-4.57.67 3.3 3.22a1 1 0 0 1 .3.88l-.79 4.55 4.09-2.15z"/></svg>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex ml-2">
                            <img src="{{asset('images/user.jpg')}}"
                                width="60"
                                height="60"
                                class="rounded-circle shadow"
                                alt="" >
                            <div class="ml-3">
                                <h5 class="font-weight-bold">fajarbekasieditting@gmail.com</h5>
                                <p class="text-muted">simply dummy text of the printing and typesetting industry. </p>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <h5 class="font-weight-bold">21 minute ago</h5>
                        <span class="badge badge-pill badge-success text-success">3</span>
                    </div>
                </div>
                <div class="d-flex py-2 justify-content-between ">
                    <div class="d-flex align-items-center">
                        <div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M6.1 21.98a1 1 0 0 1-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 0 1 .56-1.71l6.05-.88 2.7-5.48a1 1 0 0 1 1.8 0l2.7 5.48 6.06.88a1 1 0 0 1 .55 1.7l-4.38 4.27 1.04 6.03a1 1 0 0 1-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 0 1 .93 0l4.08 2.15-.78-4.55a1 1 0 0 1 .29-.88l3.3-3.22-4.56-.67a1 1 0 0 1-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 0 1-.75.54l-4.57.67 3.3 3.22a1 1 0 0 1 .3.88l-.79 4.55 4.09-2.15z"/></svg>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex ml-2">
                            <img src="{{asset('images/user.jpg')}}"
                                width="60"
                                height="60"
                                class="rounded-circle shadow"
                                alt="" >
                            <div class="ml-3">
                                <h5 class="font-weight-bold">fajarbekasieditting@gmail.com</h5>
                                <p class="text-muted">simply dummy text of the printing and typesetting industry. </p>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <h5 class="font-weight-bold">21 minute ago</h5>
                        <span class="badge badge-pill badge-success text-success">3</span>
                    </div>
                </div>
                <div class="d-flex py-2 justify-content-between ">
                    <div class="d-flex align-items-center">
                        <div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M6.1 21.98a1 1 0 0 1-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 0 1 .56-1.71l6.05-.88 2.7-5.48a1 1 0 0 1 1.8 0l2.7 5.48 6.06.88a1 1 0 0 1 .55 1.7l-4.38 4.27 1.04 6.03a1 1 0 0 1-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 0 1 .93 0l4.08 2.15-.78-4.55a1 1 0 0 1 .29-.88l3.3-3.22-4.56-.67a1 1 0 0 1-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 0 1-.75.54l-4.57.67 3.3 3.22a1 1 0 0 1 .3.88l-.79 4.55 4.09-2.15z"/></svg>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex ml-2">
                            <img src="{{asset('images/user.jpg')}}"
                                width="60"
                                height="60"
                                class="rounded-circle shadow"
                                alt="" >
                            <div class="ml-3">
                                <h5 class="font-weight-bold">fajarbekasieditting@gmail.com</h5>
                                <p class="text-muted">simply dummy text of the printing and typesetting industry. </p>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <h5 class="font-weight-bold">21 minute ago</h5>
                        <span class="badge badge-pill badge-success text-success">3</span>
                    </div>
                </div>
                <div class="d-flex py-2 justify-content-between ">
                    <div class="d-flex align-items-center">
                        <div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M6.1 21.98a1 1 0 0 1-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 0 1 .56-1.71l6.05-.88 2.7-5.48a1 1 0 0 1 1.8 0l2.7 5.48 6.06.88a1 1 0 0 1 .55 1.7l-4.38 4.27 1.04 6.03a1 1 0 0 1-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 0 1 .93 0l4.08 2.15-.78-4.55a1 1 0 0 1 .29-.88l3.3-3.22-4.56-.67a1 1 0 0 1-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 0 1-.75.54l-4.57.67 3.3 3.22a1 1 0 0 1 .3.88l-.79 4.55 4.09-2.15z"/></svg>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex ml-2">
                            <img src="{{asset('images/user.jpg')}}"
                                width="60"
                                height="60"
                                class="rounded-circle shadow"
                                alt="" >
                            <div class="ml-3">
                                <h5 class="font-weight-bold">fajarbekasieditting@gmail.com</h5>
                                <p class="text-muted">simply dummy text of the printing and typesetting industry. </p>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <h5 class="font-weight-bold">21 minute ago</h5>
                        <span class="badge badge-pill badge-success text-success">3</span>
                    </div>
                </div>
                <div class="d-flex py-2 justify-content-between ">
                    <div class="d-flex align-items-center">
                        <div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M6.1 21.98a1 1 0 0 1-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 0 1 .56-1.71l6.05-.88 2.7-5.48a1 1 0 0 1 1.8 0l2.7 5.48 6.06.88a1 1 0 0 1 .55 1.7l-4.38 4.27 1.04 6.03a1 1 0 0 1-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 0 1 .93 0l4.08 2.15-.78-4.55a1 1 0 0 1 .29-.88l3.3-3.22-4.56-.67a1 1 0 0 1-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 0 1-.75.54l-4.57.67 3.3 3.22a1 1 0 0 1 .3.88l-.79 4.55 4.09-2.15z"/></svg>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex ml-2">
                            <img src="{{asset('images/user.jpg')}}"
                                width="60"
                                height="60"
                                class="rounded-circle shadow"
                                alt="" >
                            <div class="ml-3">
                                <h5 class="font-weight-bold">fajarbekasieditting@gmail.com</h5>
                                <p class="text-muted">simply dummy text of the printing and typesetting industry. </p>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <h5 class="font-weight-bold">21 minute ago</h5>
                        <span class="badge badge-pill badge-success text-success">3</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
