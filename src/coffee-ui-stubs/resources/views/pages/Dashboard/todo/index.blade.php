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
        ToDo
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
        ToDo
    </li>
  </ol>
</nav>
<div class="row pt-8 mb-3">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-3">
            <div class="card-body bg-light">
                <a href="" class="btn btn-primary btn-block mb-3" role="button"> + New Tasks</a>
                <div class="pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <span data-feather="file" class="mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="#64B5F6" class="heroicon-ui" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/></svg>
                                </span>
                                All
                            </a>
                        </li>
                        <h5 class="text-muted pt-3 mb-3"> Filters</h5>
                        <li class="nav-item">
                            <a class="nav-link text-muted" href="">
                                <span data-feather="file" class="mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M6.1 21.98a1 1 0 0 1-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 0 1 .56-1.71l6.05-.88 2.7-5.48a1 1 0 0 1 1.8 0l2.7 5.48 6.06.88a1 1 0 0 1 .55 1.7l-4.38 4.27 1.04 6.03a1 1 0 0 1-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 0 1 .93 0l4.08 2.15-.78-4.55a1 1 0 0 1 .29-.88l3.3-3.22-4.56-.67a1 1 0 0 1-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 0 1-.75.54l-4.57.67 3.3 3.22a1 1 0 0 1 .3.88l-.79 4.55 4.09-2.15z"/></svg>
                                </span>
                                Favorites
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-muted" href="">
                                <span data-feather="file" class="mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-2.3-8.7l1.3 1.29 3.3-3.3a1 1 0 0 1 1.4 1.42l-4 4a1 1 0 0 1-1.4 0l-2-2a1 1 0 0 1 1.4-1.42z"/></svg>
                                </span>
                                Done
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-muted" href="">
                                <span data-feather="file" class="mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M8 6V4c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v2h5a1 1 0 0 1 0 2h-1v12a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V8H3a1 1 0 1 1 0-2h5zM6 8v12h12V8H6zm8-2V4h-4v2h4zm-4 4a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0v-6a1 1 0 0 1 1-1zm4 0a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0v-6a1 1 0 0 1 1-1z"/></svg>
                                </span>
                                Delete
                            </a>
                        </li>
                        <h5 class="text-muted pt-3 mb-3">Labels</h5>
                        <li class="nav-item">
                            <a class="nav-link text-muted" href="">
                                Frontend
                                <span class="badge badge-pill badge-success float-right text-success">3</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-muted" href="">
                                Backend
                                <span class="badge badge-pill badge-success float-right text-success">3</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-muted" href="">
                                Issue
                                <span class="badge badge-pill badge-success float-right text-success">3</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-muted" href="">
                                Design
                                <span class="badge badge-pill badge-success float-right text-success">3</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-muted" href="">
                                Wireframe
                                <span class="badge badge-pill badge-success float-right text-success">3</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card-header border-bottom-0 bg-white">
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <form>
                                @csrf
                                <div class="row">
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
                        <div class="">
                            <form>
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <select name="" class="custom-select custom-select-md" >
                                            <option value="">Sort by</option>
                                            <option value="">All</option>
                                            <option value="">Read</option>
                                            <option value="">Unread</option>
                                            <option value="">Starred</option>
                                            <option value="">Unstarred</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="d-flex mb-3 align-items-center justify-content-between ">
                    <div class="d-flex align-items-center">
                        <div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">
                                    simply dummy text of the printing and typesetting industry.
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center ml-2">
                        <div class="mr-2"><span class="badge badge-pill badge-info text-white">Developer & UI/UX</span></div>
                        <img src="{{asset('images/user.jpg')}}"
                            width="50"
                            height="50"
                            class="rounded-circle shadow mr-2"
                            alt="" >
                        <span class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M6.1 21.98a1 1 0 0 1-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 0 1 .56-1.71l6.05-.88 2.7-5.48a1 1 0 0 1 1.8 0l2.7 5.48 6.06.88a1 1 0 0 1 .55 1.7l-4.38 4.27 1.04 6.03a1 1 0 0 1-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 0 1 .93 0l4.08 2.15-.78-4.55a1 1 0 0 1 .29-.88l3.3-3.22-4.56-.67a1 1 0 0 1-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 0 1-.75.54l-4.57.67 3.3 3.22a1 1 0 0 1 .3.88l-.79 4.55 4.09-2.15z"/></svg></span>
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M8 6V4c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v2h5a1 1 0 0 1 0 2h-1v12a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V8H3a1 1 0 1 1 0-2h5zM6 8v12h12V8H6zm8-2V4h-4v2h4zm-4 4a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0v-6a1 1 0 0 1 1-1zm4 0a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0v-6a1 1 0 0 1 1-1z"/></svg></span>
                    </div>
                </div>
                <div class="d-flex mb-3 justify-content-between ">
                    <div class="d-flex align-items-center">
                        <div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">
                                    simply dummy text of the printing and typesetting industry.
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center ml-2">
                        <div class="mr-2"><span class="badge badge-pill badge-info text-white">Web Design</span></div>
                        <img src="{{asset('images/michael-dam-mEZ3PoFGs_k-unsplash.jpg')}}"
                            width="50"
                            height="50"
                            class="rounded-circle shadow mr-2"
                            alt="" >
                        <span class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M6.1 21.98a1 1 0 0 1-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 0 1 .56-1.71l6.05-.88 2.7-5.48a1 1 0 0 1 1.8 0l2.7 5.48 6.06.88a1 1 0 0 1 .55 1.7l-4.38 4.27 1.04 6.03a1 1 0 0 1-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 0 1 .93 0l4.08 2.15-.78-4.55a1 1 0 0 1 .29-.88l3.3-3.22-4.56-.67a1 1 0 0 1-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 0 1-.75.54l-4.57.67 3.3 3.22a1 1 0 0 1 .3.88l-.79 4.55 4.09-2.15z"/></svg></span>
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M8 6V4c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v2h5a1 1 0 0 1 0 2h-1v12a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V8H3a1 1 0 1 1 0-2h5zM6 8v12h12V8H6zm8-2V4h-4v2h4zm-4 4a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0v-6a1 1 0 0 1 1-1zm4 0a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0v-6a1 1 0 0 1 1-1z"/></svg></span>
                    </div>
                </div>
                <div class="d-flex mb-3 justify-content-between ">
                    <div class="d-flex align-items-center">
                        <div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">
                                    simply dummy text of the printing and typesetting industry.
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center ml-2">
                        <div class="mr-2"><span class="badge badge-pill badge-info text-white">Developer</span></div>
                        <img src="{{asset('images/houcine-ncib-B4TjXnI0Y2c-unsplash.jpg')}}"
                            width="50"
                            height="50"
                            class="rounded-circle shadow mr-2"
                            alt="" >
                        <span class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M6.1 21.98a1 1 0 0 1-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 0 1 .56-1.71l6.05-.88 2.7-5.48a1 1 0 0 1 1.8 0l2.7 5.48 6.06.88a1 1 0 0 1 .55 1.7l-4.38 4.27 1.04 6.03a1 1 0 0 1-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 0 1 .93 0l4.08 2.15-.78-4.55a1 1 0 0 1 .29-.88l3.3-3.22-4.56-.67a1 1 0 0 1-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 0 1-.75.54l-4.57.67 3.3 3.22a1 1 0 0 1 .3.88l-.79 4.55 4.09-2.15z"/></svg></span>
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M8 6V4c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v2h5a1 1 0 0 1 0 2h-1v12a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V8H3a1 1 0 1 1 0-2h5zM6 8v12h12V8H6zm8-2V4h-4v2h4zm-4 4a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0v-6a1 1 0 0 1 1-1zm4 0a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0v-6a1 1 0 0 1 1-1z"/></svg></span>
                    </div>
                </div>
                <div class="d-flex mb-3 justify-content-between ">
                    <div class="d-flex align-items-center">
                        <div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">
                                    simply dummy text of the printing and typesetting industry.
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center ml-2">
                        <div class="mr-2"><span class="badge badge-pill badge-info text-white">Designer</span></div>
                        <img src="{{asset('images/joel-mott-LaK153ghdig-unsplash.jpg')}}"
                            width="50"
                            height="50"
                            class="rounded-circle shadow mr-2"
                            alt="" >
                        <span class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M6.1 21.98a1 1 0 0 1-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 0 1 .56-1.71l6.05-.88 2.7-5.48a1 1 0 0 1 1.8 0l2.7 5.48 6.06.88a1 1 0 0 1 .55 1.7l-4.38 4.27 1.04 6.03a1 1 0 0 1-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 0 1 .93 0l4.08 2.15-.78-4.55a1 1 0 0 1 .29-.88l3.3-3.22-4.56-.67a1 1 0 0 1-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 0 1-.75.54l-4.57.67 3.3 3.22a1 1 0 0 1 .3.88l-.79 4.55 4.09-2.15z"/></svg></span>
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M8 6V4c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v2h5a1 1 0 0 1 0 2h-1v12a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V8H3a1 1 0 1 1 0-2h5zM6 8v12h12V8H6zm8-2V4h-4v2h4zm-4 4a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0v-6a1 1 0 0 1 1-1zm4 0a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0v-6a1 1 0 0 1 1-1z"/></svg></span>
                    </div>
                </div>
                <div class="d-flex mb-3 justify-content-between ">
                    <div class="d-flex align-items-center">
                        <div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">
                                    simply dummy text of the printing and typesetting industry.
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center ml-2">
                        <div class="mr-2"><span class="badge badge-pill badge-info text-white">Animator</span></div>
                        <img src="{{asset('images/andriyko-podilnyk-P78G-hXN_eE-unsplash.jpg')}}"
                            width="50"
                            height="50"
                            class="rounded-circle shadow mr-2"
                            alt="" >
                        <span class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M6.1 21.98a1 1 0 0 1-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 0 1 .56-1.71l6.05-.88 2.7-5.48a1 1 0 0 1 1.8 0l2.7 5.48 6.06.88a1 1 0 0 1 .55 1.7l-4.38 4.27 1.04 6.03a1 1 0 0 1-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 0 1 .93 0l4.08 2.15-.78-4.55a1 1 0 0 1 .29-.88l3.3-3.22-4.56-.67a1 1 0 0 1-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 0 1-.75.54l-4.57.67 3.3 3.22a1 1 0 0 1 .3.88l-.79 4.55 4.09-2.15z"/></svg></span>
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M8 6V4c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v2h5a1 1 0 0 1 0 2h-1v12a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V8H3a1 1 0 1 1 0-2h5zM6 8v12h12V8H6zm8-2V4h-4v2h4zm-4 4a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0v-6a1 1 0 0 1 1-1zm4 0a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0v-6a1 1 0 0 1 1-1z"/></svg></span>
                    </div>
                </div>
                <div class="d-flex mb-3 justify-content-between ">
                    <div class="d-flex align-items-center">
                        <div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">
                                    simply dummy text of the printing and typesetting industry.
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center ml-2">
                        <div class="mr-2"><span class="badge badge-pill badge-info text-white">Product Manager</span></div>
                        <img src="{{asset('images/max-ilienerwise-FVaLDrhGo_o-unsplash.jpg')}}"
                            width="50"
                            height="50"
                            class="rounded-circle shadow mr-2"
                            alt="" >
                        <span class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M6.1 21.98a1 1 0 0 1-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 0 1 .56-1.71l6.05-.88 2.7-5.48a1 1 0 0 1 1.8 0l2.7 5.48 6.06.88a1 1 0 0 1 .55 1.7l-4.38 4.27 1.04 6.03a1 1 0 0 1-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 0 1 .93 0l4.08 2.15-.78-4.55a1 1 0 0 1 .29-.88l3.3-3.22-4.56-.67a1 1 0 0 1-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 0 1-.75.54l-4.57.67 3.3 3.22a1 1 0 0 1 .3.88l-.79 4.55 4.09-2.15z"/></svg></span>
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M8 6V4c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v2h5a1 1 0 0 1 0 2h-1v12a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V8H3a1 1 0 1 1 0-2h5zM6 8v12h12V8H6zm8-2V4h-4v2h4zm-4 4a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0v-6a1 1 0 0 1 1-1zm4 0a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0v-6a1 1 0 0 1 1-1z"/></svg></span>
                    </div>
                </div>
                <div class="d-flex mb-3 justify-content-between ">
                    <div class="d-flex align-items-center">
                        <div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">
                                    simply dummy text of the printing and typesetting industry.
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center ml-2">
                        <div class="mr-2"><span class="badge badge-pill badge-info text-white">Database Analist</span></div>
                        <img src="{{asset('images/max-ilienerwise-FVaLDrhGo_o-unsplash.jpg')}}"
                            width="50"
                            height="50"
                            class="rounded-circle shadow mr-2"
                            alt="" >
                        <span class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M6.1 21.98a1 1 0 0 1-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 0 1 .56-1.71l6.05-.88 2.7-5.48a1 1 0 0 1 1.8 0l2.7 5.48 6.06.88a1 1 0 0 1 .55 1.7l-4.38 4.27 1.04 6.03a1 1 0 0 1-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 0 1 .93 0l4.08 2.15-.78-4.55a1 1 0 0 1 .29-.88l3.3-3.22-4.56-.67a1 1 0 0 1-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 0 1-.75.54l-4.57.67 3.3 3.22a1 1 0 0 1 .3.88l-.79 4.55 4.09-2.15z"/></svg></span>
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M8 6V4c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v2h5a1 1 0 0 1 0 2h-1v12a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V8H3a1 1 0 1 1 0-2h5zM6 8v12h12V8H6zm8-2V4h-4v2h4zm-4 4a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0v-6a1 1 0 0 1 1-1zm4 0a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0v-6a1 1 0 0 1 1-1z"/></svg></span>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
