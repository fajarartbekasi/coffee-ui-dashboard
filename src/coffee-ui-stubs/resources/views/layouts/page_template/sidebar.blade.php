<nav id="sidebarMenu" class="col-md-2 col-lg-2 d-md-block bg-light sidebar collapse bg-white">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column ml-3">
          <li class="nav-item pt-3 mb-3">
            <a class="nav-link active" href="#">
                <span class="mr-3 icon-list icon-badge-container mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="40" height="40"><path fill="#55352F" class="heroicon-ui" d="M13 20v-5h-2v5a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-7.59l-.3.3a1 1 0 1 1-1.4-1.42l9-9a1 1 0 0 1 1.4 0l9 9a1 1 0 0 1-1.4 1.42l-.3-.3V20a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2zm5 0v-9.59l-6-6-6 6V20h3v-5c0-1.1.9-2 2-2h2a2 2 0 0 1 2 2v5h3z"/></svg>
                    <span class="text-muted">Home</span>
                </span>
            </a>
          </li>
          <li class="nav-item pt-3 mb-3">
            <a class="nav-link" href="#">
              <span class="mr-2 icon-list">

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="40" height="40">
                        <path fill="#FEEBC8" class="heroicon-ui" d="M4 4h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2zm16 3.38V6H4v1.38l8 4 8-4zm0 2.24l-7.55 3.77a1 1 0 0 1-.9 0L4 9.62V18h16V9.62z"/>
                    </svg>
                    <span class="text-muted">Inbox</span>
                </span>
            </a>
          </li>
          <li class="nav-item pt-3 mb-3">
            <a class="nav-link" href="#">
              <span class="mr-2 icon-list">

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="40" height="40">
                        <path fill="#FEEBC8" class="heroicon-ui" d="M6 14H4a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h12a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v13a1 1 0 0 1-1.7.7L16.58 18H8a2 2 0 0 1-2-2v-2zm0-2V8c0-1.1.9-2 2-2h8V4H4v8h2zm14-4H8v8h9a1 1 0 0 1 .7.3l2.3 2.29V8z"/>
                    </svg>
                    <span class="text-muted">Message</span>
                </span>
            </a>
          </li>
          <li class="nav-item pt-3 mb-3">
            <a class="nav-link" href="#">
              <span class="mr-2 icon-list">

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="40" height="40">
                        <path fill="#FEEBC8" class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-2.3-8.7l1.3 1.29 3.3-3.3a1 1 0 0 1 1.4 1.42l-4 4a1 1 0 0 1-1.4 0l-2-2a1 1 0 0 1 1.4-1.42z"/>
                    </svg>
                    <span class="text-muted">ToDo</span>
                </span>
            </a>
          </li>
          <li class="nav-item dropdown pt-3 mb-3">
                <a class="nav-link " href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="icon-list">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="40" height="40">
                            <path fill="#FEEBC8" class="heroicon-ui" d="M17 16a3 3 0 1 1-2.83 2H9.83a3 3 0 1 1-5.62-.1A3 3 0 0 1 5 12V4H3a1 1 0 1 1 0-2h3a1 1 0 0 1 1 1v1h14a1 1 0 0 1 .9 1.45l-4 8a1 1 0 0 1-.9.55H5a1 1 0 0 0 0 2h12zM7 12h9.38l3-6H7v6zm0 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                        </svg>
                        <span class="text-muted">Shoppe</span>
                    </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item text-gray-600" href="{{route('shop.index')}}">
                        Shop
                    </a>
                    <a class="dropdown-item text-gray-600" href="{{route('shop.show')}}">
                        Item Details
                    </a>
                    <a class="dropdown-item text-gray-600" href="{{route('shop.wishlist')}}">
                        Wish List
                    </a>
                    <a class="dropdown-item text-gray-600" href="{{route('shop.checkout')}}">
                        Checkout
                    </a>
                </div>
            </li>

          <li class="nav-item dropdown pt-3 mb-3">
              <a class="nav-link " href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span>

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="40" height="40">
                            <path  fill="#FEEBC8" class="heroicon-ui" d="M12 12a5 5 0 1 1 0-10 5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v2z"/>
                        </svg>
                        <span class="text-muted">Settings</span>
                  </span>
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                  <a class="dropdown-item text-gray-600" href="{{route('shop.index')}}">
                      Shop
                  </a>
                  <a class="dropdown-item text-gray-600" href="{{route('shop.show')}}">
                      Item Details
                  </a>
                  <a class="dropdown-item text-gray-600" href="{{route('shop.wishlist')}}">
                      Wish List
                  </a>
                  <a class="dropdown-item text-gray-600" href="{{route('shop.checkout')}}">
                      Checkout
                  </a>
              </div>
          </li>
        </ul>
      </div>
    </nav>