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
        List
    </li>
  </ol>
</nav>

<div class="pt-6">
    <div class="card border-0">
        <div class="card-body">
            <div class="card border-0" style="margin-top: -100px;">
                <div class="card-body shadow-sm" >
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="text-gray-600">Filters</h4>
                        </div>
                        <div class="d-flex">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 22.563 13.552">
                                    <path id="icon-cheveron-right" d="M.46,3.684A2.3,2.3,0,0,1,3.684.46l9.21,9.21a2.3,2.3,0,0,1,0,3.223L3.684,22.1A2.3,2.3,0,0,1,.46,18.88l7.575-7.6-7.6-7.6Z" transform="translate(22.563) rotate(90)" fill="#c9c9c9"/>
                                </svg>

                            </span>
                            <span class="ml-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20.156 22.395">
                                    <path id="icon-refresh" d="M6.359,20.7v2.575a1.12,1.12,0,0,1-2.24,0v-5.6a1.12,1.12,0,0,1,1.12-1.12h5.6a1.12,1.12,0,0,1,0,2.24H7.591a7.838,7.838,0,0,0,13.325-5.6,1.12,1.12,0,0,1,2.24,0,10.078,10.078,0,0,1-16.8,7.5ZM19.8,5.7V3.12a1.12,1.12,0,1,1,2.24,0v5.6a1.12,1.12,0,0,1-1.12,1.12h-5.6a1.12,1.12,0,1,1,0-2.24h3.247A7.838,7.838,0,0,0,5.24,13.2,1.12,1.12,0,1,1,3,13.2,10.078,10.078,0,0,1,19.8,5.7Z" transform="translate(-3 -2)" fill="#c9c9c9"/>
                                </svg>

                            </span>
                            <span class="ml-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 22.395 22.395">
                                    <path id="Union_2" data-name="Union 2" d="M18.739,21.945,11.2,14.531,3.656,21.967v-.022A2.31,2.31,0,0,1,.67,21.735,2.229,2.229,0,0,1,.457,18.79l7.7-7.593L.457,3.605A2.229,2.229,0,0,1,.67.66,2.308,2.308,0,0,1,3.656.45L11.2,7.865,18.739.428V.45A2.31,2.31,0,0,1,21.726.66a2.23,2.23,0,0,1,.212,2.945l-7.7,7.592,7.7,7.593a2.23,2.23,0,0,1-.212,2.945,2.311,2.311,0,0,1-2.987.209Z" transform="translate(0 0)" fill="#c9c9c9"/>
                                </svg>

                            </span>
                        </div>
                    </div>
                    <div class="pt-2">
                        <form action="">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Role</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Select youre role</option>
                                            <option value="admin">Admin</option>
                                            <option value="staff">Staff</option>
                                            <option value="user">User</option>
                                            <option value="designer">Designer</option>
                                            <option value="photographer">Photo Grapher</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Select Status</option>
                                            <option value="active">Active</option>
                                            <option value="deactive">Deactive</option>
                                            <option value="blocked">Blocked</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Verified</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Select Verified</option>
                                            <option value="verified">Verified</option>
                                            <option value="waitting">Waitting</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Departement</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Select youre Departement</option>
                                            <option value="developement">Development</option>
                                            <option value="sales">Sales</option>
                                            <option value="management">Management</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between pt-3">
                <div>
                    <button type="submit" class="btn btn-outline-secondary">1 - 10 of 50</button>
                </div>
                <div>
                    <form action="" method="post" class="form-inline">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search.......">
                        </div>
                        <div class="ml-2">
                            <button type="submit" class="btn btn-orange-500">Actions </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="pt-2">
                <div class="table-responsive-md">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">ID</label>
                                </th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Name</th>
                                <th>Country</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Verified</th>
                                <th>Departement</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">317</label>
                                    </div>
                                </td>
                                <td>
                                    <img src="{{asset('images/user.jpg')}}"
                                        width="30"
                                        height="30"
                                        class="rounded-circle shadow"
                                        alt="" >
                                        Chaerul Fajar Subhi
                                </td>
                                <td>fajarbekasieditting@gmail.com</td>
                                <td>Fajar</td>
                                <td>Bekasi</td>
                                <td>Admin</td>
                                <td>
                                    <span class="badge badge-pill badge-info">Active</span>
                                </td>
                                <td>
                                    <span class="verified-active">12</span>
                                </td>
                                <td>Development</td>
                                <td>
                                    <button type="submit" class="btn btn-outline-light btn">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15.986" height="15.986" viewBox="0 0 15.986 15.986">
                                                <path id="icon-edit" d="M6.3,12.3l10-10a1,1,0,0,1,1.4,0l4,4a1,1,0,0,1,0,1.4l-10,10a1,1,0,0,1-.7.3H7a1,1,0,0,1-1-1V13a1,1,0,0,1,.3-.7ZM8,16h2.59l9-9L17,4.41l-9,9Z" transform="translate(-6 -2.014)"/>
                                            </svg>
                                        </span>
                                    </button>
                                    <button type="submit" class="btn btn-outline-light">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                                <path id="icon-trash" d="M8,6V4a2.006,2.006,0,0,1,2-2h4a2,2,0,0,1,2,2V6h5a1,1,0,0,1,0,2H20V20a2,2,0,0,1-2,2H6a2,2,0,0,1-2-2V8H3A1,1,0,0,1,3,6ZM6,8V20H18V8Zm8-2V4H10V6Zm-4,4a1,1,0,0,1,1,1v6a1,1,0,0,1-2,0V11A1,1,0,0,1,10,10Zm4,0a1,1,0,0,1,1,1v6a1,1,0,0,1-2,0V11A1,1,0,0,1,14,10Z" transform="translate(-2 -2)"/>
                                            </svg>

                                        </span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">317</label>
                                    </div>
                                </td>
                                <td>
                                    <img src="{{asset('images/andrey-zvyagintsev-aN_m_CK5M3Q-unsplash.jpg')}}"
                                        width="30"
                                        height="30"
                                        class="rounded-circle shadow"
                                        alt="" >
                                        Andrey zvyagintsev
                                </td>
                                <td>Andreyzvyagintsev@example.com</td>
                                <td>Andrey</td>
                                <td>Turkmenistan</td>
                                <td>Staff</td>
                                <td>
                                    <span class="badge badge-pill badge-info">Deactive</span>
                                </td>
                                <td>
                                    <span class="verified-active">12</span>
                                </td>
                                <td>Sales</td>
                                <td>
                                    <button type="submit" class="btn btn-outline-light">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15.986" height="15.986" viewBox="0 0 15.986 15.986">
                                                <path id="icon-edit" d="M6.3,12.3l10-10a1,1,0,0,1,1.4,0l4,4a1,1,0,0,1,0,1.4l-10,10a1,1,0,0,1-.7.3H7a1,1,0,0,1-1-1V13a1,1,0,0,1,.3-.7ZM8,16h2.59l9-9L17,4.41l-9,9Z" transform="translate(-6 -2.014)"/>
                                            </svg>
                                        </span>
                                    </button>
                                    <button type="submit" class="btn btn-outline-light">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                                <path id="icon-trash" d="M8,6V4a2.006,2.006,0,0,1,2-2h4a2,2,0,0,1,2,2V6h5a1,1,0,0,1,0,2H20V20a2,2,0,0,1-2,2H6a2,2,0,0,1-2-2V8H3A1,1,0,0,1,3,6ZM6,8V20H18V8Zm8-2V4H10V6Zm-4,4a1,1,0,0,1,1,1v6a1,1,0,0,1-2,0V11A1,1,0,0,1,10,10Zm4,0a1,1,0,0,1,1,1v6a1,1,0,0,1-2,0V11A1,1,0,0,1,14,10Z" transform="translate(-2 -2)"/>
                                            </svg>

                                        </span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">317</label>
                                    </div>
                                </td>
                                <td>
                                    <img src="{{asset('images/andriyko-podilnyk-P78G-hXN_eE-unsplash.jpg')}}"
                                        width="30"
                                        height="30"
                                        class="rounded-circle shadow"
                                        alt="" >
                                        Andriyko Podilnyk
                                </td>
                                <td>andriykopodilnyk@example.com</td>
                                <td>Andriyko</td>
                                <td>Finlandia</td>
                                <td>Staff</td>
                                <td>
                                    <span class="badge badge-pill badge-info">Active</span>
                                </td>
                                <td>
                                    <span class="verified-deactive">12</span>
                                </td>
                                <td>Photographer</td>
                                <td>
                                    <button type="submit" class="btn btn-outline-light">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15.986" height="15.986" viewBox="0 0 15.986 15.986">
                                                <path id="icon-edit" d="M6.3,12.3l10-10a1,1,0,0,1,1.4,0l4,4a1,1,0,0,1,0,1.4l-10,10a1,1,0,0,1-.7.3H7a1,1,0,0,1-1-1V13a1,1,0,0,1,.3-.7ZM8,16h2.59l9-9L17,4.41l-9,9Z" transform="translate(-6 -2.014)"/>
                                            </svg>
                                        </span>
                                    </button>
                                    <button type="submit" class="btn btn-outline-light">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                                <path id="icon-trash" d="M8,6V4a2.006,2.006,0,0,1,2-2h4a2,2,0,0,1,2,2V6h5a1,1,0,0,1,0,2H20V20a2,2,0,0,1-2,2H6a2,2,0,0,1-2-2V8H3A1,1,0,0,1,3,6ZM6,8V20H18V8Zm8-2V4H10V6Zm-4,4a1,1,0,0,1,1,1v6a1,1,0,0,1-2,0V11A1,1,0,0,1,10,10Zm4,0a1,1,0,0,1,1,1v6a1,1,0,0,1-2,0V11A1,1,0,0,1,14,10Z" transform="translate(-2 -2)"/>
                                            </svg>

                                        </span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">317</label>
                                    </div>
                                </td>
                                <td>
                                    <img src="{{asset('images/houcine-ncib-B4TjXnI0Y2c-unsplash.jpg')}}"
                                        width="30"
                                        height="30"
                                        class="rounded-circle shadow"
                                        alt="" >
                                        Houcine Ncib
                                </td>
                                <td>houncinencibg@example.com</td>
                                <td>Houcine</td>
                                <td>North Korea</td>
                                <td>User</td>
                                <td>
                                    <span class="badge badge-pill badge-danger">Blocked</span>
                                </td>
                                <td>
                                    <span class="verified-deactive">12</span>
                                </td>
                                <td>Management</td>
                                <td>
                                    <button type="submit" class="btn btn-outline-light">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15.986" height="15.986" viewBox="0 0 15.986 15.986">
                                                <path id="icon-edit" d="M6.3,12.3l10-10a1,1,0,0,1,1.4,0l4,4a1,1,0,0,1,0,1.4l-10,10a1,1,0,0,1-.7.3H7a1,1,0,0,1-1-1V13a1,1,0,0,1,.3-.7ZM8,16h2.59l9-9L17,4.41l-9,9Z" transform="translate(-6 -2.014)"/>
                                            </svg>
                                        </span>
                                    </button>
                                    <button type="submit" class="btn btn-outline-light">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                                <path id="icon-trash" d="M8,6V4a2.006,2.006,0,0,1,2-2h4a2,2,0,0,1,2,2V6h5a1,1,0,0,1,0,2H20V20a2,2,0,0,1-2,2H6a2,2,0,0,1-2-2V8H3A1,1,0,0,1,3,6ZM6,8V20H18V8Zm8-2V4H10V6Zm-4,4a1,1,0,0,1,1,1v6a1,1,0,0,1-2,0V11A1,1,0,0,1,10,10Zm4,0a1,1,0,0,1,1,1v6a1,1,0,0,1-2,0V11A1,1,0,0,1,14,10Z" transform="translate(-2 -2)"/>
                                            </svg>

                                        </span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">317</label>
                                    </div>
                                </td>
                                <td>
                                    <img src="{{asset('images/joel-mott-LaK153ghdig-unsplash.jpg')}}"
                                        width="30"
                                        height="30"
                                        class="rounded-circle shadow"
                                        alt="" >
                                        Joel Mott
                                </td>
                                <td>joelmottg@gmail.com</td>
                                <td>Joel</td>
                                <td>Bekasi</td>
                                <td>User</td>
                                <td>
                                    <span class="badge badge-pill badge-warning">Deactive</span>
                                </td>
                                <td>
                                    <span class="verified-deactive">12</span>
                                </td>
                                <td>Development</td>
                                <td>
                                    <button type="submit" class="btn btn-outline-light">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15.986" height="15.986" viewBox="0 0 15.986 15.986">
                                                <path id="icon-edit" d="M6.3,12.3l10-10a1,1,0,0,1,1.4,0l4,4a1,1,0,0,1,0,1.4l-10,10a1,1,0,0,1-.7.3H7a1,1,0,0,1-1-1V13a1,1,0,0,1,.3-.7ZM8,16h2.59l9-9L17,4.41l-9,9Z" transform="translate(-6 -2.014)"/>
                                            </svg>
                                        </span>
                                    </button>
                                    <button type="submit" class="btn btn-outline-light">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                                <path id="icon-trash" d="M8,6V4a2.006,2.006,0,0,1,2-2h4a2,2,0,0,1,2,2V6h5a1,1,0,0,1,0,2H20V20a2,2,0,0,1-2,2H6a2,2,0,0,1-2-2V8H3A1,1,0,0,1,3,6ZM6,8V20H18V8Zm8-2V4H10V6Zm-4,4a1,1,0,0,1,1,1v6a1,1,0,0,1-2,0V11A1,1,0,0,1,10,10Zm4,0a1,1,0,0,1,1,1v6a1,1,0,0,1-2,0V11A1,1,0,0,1,14,10Z" transform="translate(-2 -2)"/>
                                            </svg>

                                        </span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">317</label>
                                    </div>
                                </td>
                                <td>
                                    <img src="{{asset('images/max-ilienerwise-FVaLDrhGo_o-unsplash.jpg')}}"
                                        width="30"
                                        height="30"
                                        class="rounded-circle shadow"
                                        alt="" >
                                        Max Ilienerwise
                                </td>
                                <td>maxilinerwiseg@gmail.com</td>
                                <td>Max</td>
                                <td>Albania</td>
                                <td>User</td>
                                <td>
                                    <span class="badge badge-pill badge-danger">Blocked</span>
                                </td>
                                <td>
                                    <span class="verified-deactive">12</span>
                                </td>
                                <td>Sales</td>
                                <td>
                                    <button type="submit" class="btn btn-outline-light">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15.986" height="15.986" viewBox="0 0 15.986 15.986">
                                                <path id="icon-edit" d="M6.3,12.3l10-10a1,1,0,0,1,1.4,0l4,4a1,1,0,0,1,0,1.4l-10,10a1,1,0,0,1-.7.3H7a1,1,0,0,1-1-1V13a1,1,0,0,1,.3-.7ZM8,16h2.59l9-9L17,4.41l-9,9Z" transform="translate(-6 -2.014)"/>
                                            </svg>
                                        </span>
                                    </button>
                                    <button type="submit" class="btn btn-outline-light">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                                <path id="icon-trash" d="M8,6V4a2.006,2.006,0,0,1,2-2h4a2,2,0,0,1,2,2V6h5a1,1,0,0,1,0,2H20V20a2,2,0,0,1-2,2H6a2,2,0,0,1-2-2V8H3A1,1,0,0,1,3,6ZM6,8V20H18V8Zm8-2V4H10V6Zm-4,4a1,1,0,0,1,1,1v6a1,1,0,0,1-2,0V11A1,1,0,0,1,10,10Zm4,0a1,1,0,0,1,1,1v6a1,1,0,0,1-2,0V11A1,1,0,0,1,14,10Z" transform="translate(-2 -2)"/>
                                            </svg>

                                        </span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">317</label>
                                    </div>
                                </td>
                                <td>
                                    <img src="{{asset('images/michael-dam-mEZ3PoFGs_k-unsplash.jpg')}}"
                                        width="30"
                                        height="30"
                                        class="rounded-circle shadow"
                                        alt="" >
                                        Michael dam
                                </td>
                                <td>michaeldam@example.com</td>
                                <td>Michael</td>
                                <td>Gambia</td>
                                <td>Staff</td>
                                <td>
                                    <span class="badge badge-pill badge-info">Active</span>
                                </td>
                                <td>
                                    <span class="verified-active">12</span>
                                </td>
                                <td>Designer</td>
                                <td>
                                    <button type="submit" class="btn btn-outline-light">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15.986" height="15.986" viewBox="0 0 15.986 15.986">
                                                <path id="icon-edit" d="M6.3,12.3l10-10a1,1,0,0,1,1.4,0l4,4a1,1,0,0,1,0,1.4l-10,10a1,1,0,0,1-.7.3H7a1,1,0,0,1-1-1V13a1,1,0,0,1,.3-.7ZM8,16h2.59l9-9L17,4.41l-9,9Z" transform="translate(-6 -2.014)"/>
                                            </svg>
                                        </span>
                                    </button>
                                    <button type="submit" class="btn btn-outline-light">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                                <path id="icon-trash" d="M8,6V4a2.006,2.006,0,0,1,2-2h4a2,2,0,0,1,2,2V6h5a1,1,0,0,1,0,2H20V20a2,2,0,0,1-2,2H6a2,2,0,0,1-2-2V8H3A1,1,0,0,1,3,6ZM6,8V20H18V8Zm8-2V4H10V6Zm-4,4a1,1,0,0,1,1,1v6a1,1,0,0,1-2,0V11A1,1,0,0,1,10,10Zm4,0a1,1,0,0,1,1,1v6a1,1,0,0,1-2,0V11A1,1,0,0,1,14,10Z" transform="translate(-2 -2)"/>
                                            </svg>

                                        </span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">317</label>
                                    </div>
                                </td>
                                <td>
                                    <img src="{{asset('images/roksolana-zasiadko-3EaevlO2uPI-unsplash.jpg')}}"
                                        width="30"
                                        height="30"
                                        class="rounded-circle shadow"
                                        alt="" >
                                        Roksolana Zasiadko
                                </td>
                                <td>roksolanazasiadko@example.com</td>
                                <td>Roksolana</td>
                                <td>Guinea</td>
                                <td>Staff</td>
                                <td>
                                    <span class="badge badge-pill badge-info">Active</span>
                                </td>
                                <td>
                                    <span class="verified-deactive">12</span>
                                </td>
                                <td>Designer</td>
                                <td>
                                    <button type="submit" class="btn btn-outline-light">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15.986" height="15.986" viewBox="0 0 15.986 15.986">
                                                <path id="icon-edit" d="M6.3,12.3l10-10a1,1,0,0,1,1.4,0l4,4a1,1,0,0,1,0,1.4l-10,10a1,1,0,0,1-.7.3H7a1,1,0,0,1-1-1V13a1,1,0,0,1,.3-.7ZM8,16h2.59l9-9L17,4.41l-9,9Z" transform="translate(-6 -2.014)"/>
                                            </svg>
                                        </span>
                                    </button>
                                    <button type="submit" class="btn btn-outline-light">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                                <path id="icon-trash" d="M8,6V4a2.006,2.006,0,0,1,2-2h4a2,2,0,0,1,2,2V6h5a1,1,0,0,1,0,2H20V20a2,2,0,0,1-2,2H6a2,2,0,0,1-2-2V8H3A1,1,0,0,1,3,6ZM6,8V20H18V8Zm8-2V4H10V6Zm-4,4a1,1,0,0,1,1,1v6a1,1,0,0,1-2,0V11A1,1,0,0,1,10,10Zm4,0a1,1,0,0,1,1,1v6a1,1,0,0,1-2,0V11A1,1,0,0,1,14,10Z" transform="translate(-2 -2)"/>
                                            </svg>

                                        </span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">317</label>
                                    </div>
                                </td>
                                <td>
                                    <img src="{{asset('images/user.jpg')}}"
                                        width="30"
                                        height="30"
                                        class="rounded-circle shadow"
                                        alt="" >
                                        Chaerul Fajar Subhi
                                </td>
                                <td>fajarbekasieditting@gmail.com</td>
                                <td>Fajar</td>
                                <td>Bekasi</td>
                                <td>Admin</td>
                                <td>
                                    <span class="badge badge-pill badge-info">Active</span>
                                </td>
                                <td>
                                    <span class="verified-deactive">12</span>
                                </td>
                                <td>Development</td>
                                <td>
                                    <button type="submit" class="btn btn-outline-light">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15.986" height="15.986" viewBox="0 0 15.986 15.986">
                                                <path id="icon-edit" d="M6.3,12.3l10-10a1,1,0,0,1,1.4,0l4,4a1,1,0,0,1,0,1.4l-10,10a1,1,0,0,1-.7.3H7a1,1,0,0,1-1-1V13a1,1,0,0,1,.3-.7ZM8,16h2.59l9-9L17,4.41l-9,9Z" transform="translate(-6 -2.014)"/>
                                            </svg>
                                        </span>
                                    </button>
                                    <button type="submit" class="btn btn-outline-light">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                                <path id="icon-trash" d="M8,6V4a2.006,2.006,0,0,1,2-2h4a2,2,0,0,1,2,2V6h5a1,1,0,0,1,0,2H20V20a2,2,0,0,1-2,2H6a2,2,0,0,1-2-2V8H3A1,1,0,0,1,3,6ZM6,8V20H18V8Zm8-2V4H10V6Zm-4,4a1,1,0,0,1,1,1v6a1,1,0,0,1-2,0V11A1,1,0,0,1,10,10Zm4,0a1,1,0,0,1,1,1v6a1,1,0,0,1-2,0V11A1,1,0,0,1,14,10Z" transform="translate(-2 -2)"/>
                                            </svg>

                                        </span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">317</label>
                                    </div>
                                </td>
                                <td>
                                    <img src="{{asset('images/user.jpg')}}"
                                        width="30"
                                        height="30"
                                        class="rounded-circle shadow"
                                        alt="" >
                                        Chaerul Fajar Subhi
                                </td>
                                <td>fajarbekasieditting@gmail.com</td>
                                <td>Fajar</td>
                                <td>Bekasi</td>
                                <td>Admin</td>
                                <td>
                                    <span class="badge badge-pill badge-info">Active</span>
                                </td>
                                <td>
                                    <span class="verified-active">12</span>
                                </td>
                                <td>Development</td>
                                <td>
                                    <button type="submit" class="btn btn-outline-light">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15.986" height="15.986" viewBox="0 0 15.986 15.986">
                                                <path id="icon-edit" d="M6.3,12.3l10-10a1,1,0,0,1,1.4,0l4,4a1,1,0,0,1,0,1.4l-10,10a1,1,0,0,1-.7.3H7a1,1,0,0,1-1-1V13a1,1,0,0,1,.3-.7ZM8,16h2.59l9-9L17,4.41l-9,9Z" transform="translate(-6 -2.014)"/>
                                            </svg>
                                        </span>
                                    </button>
                                    <button type="submit" class="btn btn-outline-light">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                                <path id="icon-trash" d="M8,6V4a2.006,2.006,0,0,1,2-2h4a2,2,0,0,1,2,2V6h5a1,1,0,0,1,0,2H20V20a2,2,0,0,1-2,2H6a2,2,0,0,1-2-2V8H3A1,1,0,0,1,3,6ZM6,8V20H18V8Zm8-2V4H10V6Zm-4,4a1,1,0,0,1,1,1v6a1,1,0,0,1-2,0V11A1,1,0,0,1,10,10Zm4,0a1,1,0,0,1,1,1v6a1,1,0,0,1-2,0V11A1,1,0,0,1,14,10Z" transform="translate(-2 -2)"/>
                                            </svg>

                                        </span>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="pt-3 mb-3 d-flex justify-content-end">
                        <ul class="pagination pagination-primary">
                            <li class="page-item"><a href="javascript:void(0);" class="page-link">1</a></li>
                            <li class="page-item"><a href="javascript:void(0);" class="page-link">...</a></li>
                            <li class="page-item"><a href="javascript:void(0);" class="page-link">5</a></li>
                            <li class="page-item"><a href="javascript:void(0);" class="page-link">6</a></li>
                            <li class="active page-item"><a href="javascript:void(0);" class="page-link">7</a></li>
                            <li class="page-item"><a href="javascript:void(0);" class="page-link">8</a></li>
                            <li class="page-item"><a href="javascript:void(0);" class="page-link">9</a></li>
                            <li class="page-item"><a href="javascript:void(0);" class="page-link">...</a></li>
                            <li class="page-item"><a href="javascript:void(0);" class="page-link">12</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection