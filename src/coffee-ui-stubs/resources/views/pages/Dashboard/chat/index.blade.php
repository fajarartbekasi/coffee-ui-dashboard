@extends('layouts.app')

@section('content')
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