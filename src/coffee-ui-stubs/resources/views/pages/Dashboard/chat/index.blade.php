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
        Chat
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
        Conversation
    </li>
  </ol>
</nav>
<div class="row pt-8 mb-3">
    <div class="col-md-12">
        <div class="card border-0 shadow">
            <div class="row">
                <div class="col-md-4">
                    <div class="card-body bg-light">
                        <div class="d-flex ml-2 border-bottom">
                            <img src="{{asset('images/user.jpg')}}"
                                width="40"
                                height="40"
                                class="rounded-circle shadow"
                                alt="" >
                            <div class="ml-3">
                                <form action="" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="" class="form-control" id="" placeholder="search.......">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="pt-3">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5 for="" class="font-weight-bold">Channels</h5>
                                </div>
                                <div>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                            <path fill="#1763F2" class="heroicon-ui" d="M17 11a1 1 0 0 1 0 2h-4v4a1 1 0 0 1-2 0v-4H7a1 1 0 0 1 0-2h4V7a1 1 0 0 1 2 0v4h4z"/>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div class="pt-3 mb-3">
                                <h5 for="" class="text-muted">#Developers</h5>
                                <h5 for="" class="text-muted">#Designers</h5>
                            </div>
                            <div class="pt-3 mb-3">
                                <h5 class="font-weight-bolder mb-3">Chat</h5>
                                <div class="">
                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{asset('images/michael-dam-mEZ3PoFGs_k-unsplash.jpg')}}"
                                            width="40"
                                            height="40"
                                            class="rounded-circle shadow"
                                            alt="" >
                                        <div class="ml-2">
                                            <h5 class="text-muted">Michael</h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{asset('images/houcine-ncib-B4TjXnI0Y2c-unsplash.jpg')}}"
                                            width="40"
                                            height="40"
                                            class="rounded-circle shadow"
                                            alt="" >
                                        <div class="ml-2">
                                            <h5 class="text-muted">Michael</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-3 mb-3">
                                <h5 class="font-weight-bolder mb-3">Contacts</h5>
                                <div class="">
                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{asset('images/joel-mott-LaK153ghdig-unsplash.jpg')}}"
                                            width="40"
                                            height="40"
                                            class="rounded-circle shadow"
                                            alt="" >
                                        <div class="ml-2">
                                            <h5 class="text-muted">Joel Mott</h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{asset('images/andrey-zvyagintsev-aN_m_CK5M3Q-unsplash.jpg')}}"
                                            width="40"
                                            height="40"
                                            class="rounded-circle shadow"
                                            alt="" >
                                        <div class="ml-2">
                                            <h5 class="text-muted">Andrey zvyagintsevan</h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{asset('images/andriyko-podilnyk-P78G-hXN_eE-unsplash.jpg')}}"
                                            width="40"
                                            height="40"
                                            class="rounded-circle shadow"
                                            alt="" >
                                        <div class="ml-2">
                                            <h5 class="text-muted">Andriyko</h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{asset('images/max-ilienerwise-FVaLDrhGo_o-unsplash.jpg')}}"
                                            width="40"
                                            height="40"
                                            class="rounded-circle shadow"
                                            alt="" >
                                        <div class="ml-2">
                                            <h5 class="text-muted">Max ilienerwise</h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{asset('images/roksolana-zasiadko-3EaevlO2uPI-unsplash.jpg')}}"
                                            width="40"
                                            height="40"
                                            class="rounded-circle shadow"
                                            alt="" >
                                        <div class="ml-2">
                                            <h5 class="text-muted">Roksolana</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <div class="d-flex mx-auto">
                            <img src="{{asset('images/undraw_chatting_2yvo.png')}}" alt="" class="w-100">
                        </div>
                        <div class="text-center">
                            <h3 for="" class="text-muted">Select a contact to start a chat</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection