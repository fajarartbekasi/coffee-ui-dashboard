<div class="collapse bg-white" id="navbarHeader">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-4 py-4">
                <h4 class="text-orange-900">App</h4>
                <div class="row">
                    <div class="col-3">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link" href="{{route('mail')}}">
                                <h6 class="text-orange">Email</h6>
                            </a>
                            <a class="nav-link" href="{{route('chats')}}"><h6 class="text-orange">Chat</h6></a>
                            <a class="nav-link">
                                <h6 class="text-orange" href="{{route('todo')}}">Todo</h6>
                            </a>
                            <div class="dropdown">
                                <button class="btn btn-outline-white dropdown-toggle text-orange" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    eCommerce
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{route('shop.index')}}">Shop</a>
                                    <a class="dropdown-item" href="{{route('shop.show')}}">Item Details</a>
                                    <a class="dropdown-item" href="{{route('shop.wishlist')}}">Wish List</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 py-4">
                <h4 class="text-orange-900">Pages</h4>
                <div class="row">
                    <div class="col-5">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link " href="{{route('user.profile')}}">
                                <h6 class="text-orange">
                                    Profile
                                </h6>
                            </a>
                            <div class="dropdown">
                                <button class="btn btn-outline-white text-orange dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Authentication
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Login</a>
                                    <a class="dropdown-item" href="#">Register</a>
                                    <a class="dropdown-item" href="#">Forgot password</a>
                                    <a class="dropdown-item" href="#">Reset password</a>
                                    <a class="dropdown-item" href="#">Lock Screen</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 py-4">
                <h4 class="text-orange-900">Users</h4>
                <div class="row">
                    <div class="col-3">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link" href="{{route('user.list')}}">
                                <h6 class="text-orange">
                                    List
                                </h6>
                            </a>
                            <a class="nav-link" href="{{route('user.profile')}}">
                                <h6 class="text-orange">
                                    View
                                </h6>
                            </a>
                            <a class="nav-link" href="{{route('user.edit.profile')}}">
                                <h6 class="text-orange">
                                    Edit
                                </h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>