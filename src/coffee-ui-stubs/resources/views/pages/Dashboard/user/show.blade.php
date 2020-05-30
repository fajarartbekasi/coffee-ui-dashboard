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
        User
    </li>

    <li class="">
        <svg xmlns="http://www.w3.org/2000/svg" class="mr-3  ml-3 " width="20" height="20" viewBox="0 0 24.523 24.18">
            <g id="Group_515" data-name="Group 515" transform="translate(-344 -262)">
                <path id="icon-cheveron-right" d="M9.593,11.048a2.467,2.467,0,0,1,3.454-3.454l9.869,9.869a2.467,2.467,0,0,1,0,3.454l-9.869,9.869a2.467,2.467,0,0,1-3.454-3.454l8.118-8.142L9.569,11.048Z" transform="translate(334.9 254.9)" fill="#6a6a6a"/>
                <path id="icon-cheveron-right-2" data-name="icon-cheveron-right" d="M9.593,11.048a2.467,2.467,0,0,1,3.454-3.454l9.869,9.869a2.467,2.467,0,0,1,0,3.454l-9.869,9.869a2.467,2.467,0,0,1-3.454-3.454l8.118-8.142L9.569,11.048Z" transform="translate(344.9 254.9)" fill="#6a6a6a"/>
            </g>
        </svg>
      </span>
        View
    </li>
  </ol>
</nav>

<div class="pt-6">
  <div class="card border-0 shadow-sm">
    <div class="card-body">
      <div class="row">
        <div class="col-md-12">
          <div class="card-body bg-white shadow-sm" style="margin-top: -120px; ">
            <div>
              <h5 class="text-muted">Account</h5>
              <div class="d-flex">
                <img src="{{asset('images/user.jpg')}}" width="100" height="100" class="rounded" alt="">
                <div class="ml-3">
                  <div class="d-flex">
                    <h5 class="mr-3">Username</h5>
                    <h5>Chaerul Fajar Subhi</h5>
                  </div>
                  <div class="d-flex">
                    <h5 class="mr-3">Name</h5>
                    <h5>Fajar</h5>
                  </div>
                  <div class="d-flex">
                    <h5 class="mr-3">Email</h5>
                    <h5>fajarbekasieditting@gmail.com</h5>
                  </div>
                </div>
                <div class="ml-3">
                  <div class="d-flex">
                    <h5 class=" mr-3">Status</h5>
                    <h5 class="">active</h5>
                  </div>
                  <div class="d-flex">
                    <h5 class="mr-3">Role</h5>
                    <h5 class="">admin</h5>
                  </div>
                  <div class="d-flex">
                    <h5 class="mr-3">Company</h5>
                    <h5 class="">-</h5>
                  </div>
                </div>
              </div>
              <div class="d-flex pt-3">
                  <button type="submit" class="btn btn-orange mr-3">
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M6.3 12.3l10-10a1 1 0 0 1 1.4 0l4 4a1 1 0 0 1 0 1.4l-10 10a1 1 0 0 1-.7.3H7a1 1 0 0 1-1-1v-4a1 1 0 0 1 .3-.7zM8 16h2.59l9-9L17 4.41l-9 9V16zm10-2a1 1 0 0 1 2 0v6a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2h6a1 1 0 0 1 0 2H4v14h14v-6z"/></svg>
                    </span>
                    Edit
                  </button>
                  <button type="submit" class="btn btn-orange-500">
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M8 6V4c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v2h5a1 1 0 0 1 0 2h-1v12a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V8H3a1 1 0 1 1 0-2h5zM6 8v12h12V8H6zm8-2V4h-4v2h4zm-4 4a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0v-6a1 1 0 0 1 1-1zm4 0a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0v-6a1 1 0 0 1 1-1z"/></svg>
                    </span>
                    Delete
                  </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-between py-3">
        <div>
          <h5 class="text-muted">Information</h5>
          <div>
            <table class="table table-borderless">
              <tbody>
                <tr>
                  <td>Birth Date</td>
                  <td>29 November 1992</td>
                </tr>
                <tr>
                  <td>Mobile </td>
                  <td>+62 89672650972</td>
                </tr>
                <tr>
                  <td>Website</td>
                  <td>-</td>
                </tr>
                <tr>
                  <td>Language</td>
                  <td>Indonesia, English</td>
                </tr>
                <tr>
                  <td>Gender</td>
                  <td>Male</td>
                </tr>
                <tr>
                  <td>Contact</td>
                  <td>Email,message,phone</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div>
          <h5 class="text-muted">Social Links</h5>
          <div>
            <table class="table table-borderless">
              <tbody>
                <tr>
                  <td>Twitter</td>
                  <td>-</td>
                </tr>
                <tr>
                  <td>Facebook</td>
                  <td>-</td>
                </tr>
                <tr>
                  <td>Instagram</td>
                  <td>FajarDev</td>
                </tr>
                <tr>
                  <td>Github</td>
                  <td>https://github.com/fajarartbekasi</td>
                </tr>
                <tr>
                  <td>CodePen</td>
                  <td>-</td>
                </tr>
                <tr>
                  <td>Slack</td>
                  <td>-</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="pt-2">
        <h5  class="text-muted">Permissions</h5>
        <table class="table table-borderless">
            <thead>
              <tr>
                <th>Module</th>
                <th>Read</th>
                <th>Write</th>
                <th>Create</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                  <td>users</td>
                  <form action="" method="post">
                    <td><input type="checkbox" name="" id=""></td>
                    <td><input type="checkbox" name="" id=""></td>
                    <td><input type="checkbox" name="" id=""></td>
                    <td><input type="checkbox" name="" id=""></td>
                  </form>
                </tr>
                <tr>
                  <td>posts</td>
                  <form action="" method="post">
                    <td><input type="checkbox" name="" id=""></td>
                    <td><input type="checkbox" name="" id=""></td>
                    <td><input type="checkbox" name="" id=""></td>
                    <td><input type="checkbox" name="" id=""></td>
                  </form>
                </tr>
                <tr>
                  <td>comments</td>
                  <form action="" method="post">
                    <td><input type="checkbox" name="" id=""></td>
                    <td><input type="checkbox" name="" id=""></td>
                    <td><input type="checkbox" name="" id=""></td>
                    <td><input type="checkbox" name="" id=""></td>
                  </form>
                </tr>
            </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection