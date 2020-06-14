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
        Edit
    </li>
  </ol>
</nav>
<div class="">
    <div class="card border-0 shadow">
        <div class="card-body">
            <div class="d-flex">
                <img src="{{asset('images/user.jpg')}}" width="100" height="100" class="rounded" alt="">
                <div class="ml-3">
                    <h4>Chaerul Fajar Subhi</h4>
                    <div>
                        <button type="submit" class="btn btn-indigo-700"> Change Avatar </button>
                        <button type="submit" class="btn btn-red-400"> Remove Avatar </button>
                    </div>
                </div>
            </div>
            <ul class="nav nav-tabs pt-3 border-0">
                <li class="nav-item border-0">
                    <a class="nav-link border-0 bg-orange-200" id="nav-account" href="#account" data-toggle="tab" role="tab" aria-controls="account" aria-selected="true">Account</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#information" id="nav-info" data-toggle="tab" role="tab" aria-controls="information" aria-selected="false">Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#social" id="nav-social" data-toggle="tab" role="tab" aria-controls="social" aria-selected="false">Social</a>
                </li>
            </ul>
        </div>
        <div class="card-footer bg-gray-300 border-0">
            <div class="panel-body">
                <div class="tab-content">
                    <div id="account" class="tab-pane fade show active" role="tabpanel" aria-labelledby="nav-account">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" name="username" id="username" class="form-control" value="Chaerul Fajar Subhi">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <input type="text" name="status" id="status" class="form-control" value="Active">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" id="name" class="form-control" value="Fajar">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="role">Role</label>
                                        <input type="text" name="role" id="role" class="form-control" value="Admin">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" id="email" class="form-control" value="fajarbekasieditting@gmail.com">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="company">Company</label>
                                        <input type="text" name="company" id="company" class="form-control" value="-">
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

                                            <td><input type="checkbox" name="" id=""></td>
                                            <td><input type="checkbox" name="" id=""></td>
                                            <td><input type="checkbox" name="" id=""></td>
                                            <td><input type="checkbox" name="" id=""></td>

                                        </tr>
                                        <tr>
                                        <td>posts</td>
                                        <td><input type="checkbox" name="" id=""></td>
                                            <td><input type="checkbox" name="" id=""></td>
                                            <td><input type="checkbox" name="" id=""></td>
                                            <td><input type="checkbox" name="" id=""></td>
                                        </tr>
                                        <tr>
                                        <td>comments</td>
                                        <td><input type="checkbox" name="" id=""></td>
                                            <td><input type="checkbox" name="" id=""></td>
                                            <td><input type="checkbox" name="" id=""></td>
                                            <td><input type="checkbox" name="" id=""></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                    <div id="information" class="tab-pane fade" role="tabpanel" aria-labelledby="nav-info">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="birth_date">Birth Date</label>
                                    <input type="text" name="birth_date" class="form-control" id="birth_date" value="29/11/1992">
                                </div>
                                <div class="col-md-6">
                                    <label for="address_line1">Address Line 1</label>
                                    <input type="text" name="address_line1" class="form-control" id="address_line1" value="-">
                                </div>
                                <div class="col-md-6">
                                    <label for="phone">Mobile Phone</label>
                                    <input type="text" name="phone" class="form-control" id="phone" value="+62 896XXXXXX">
                                </div>
                                <div class="col-md-6">
                                    <label for="address_line2">Address Line 2</label>
                                    <input type="text" name="address_line2" class="form-control" id="address_line2" value="-">
                                </div>
                                <div class="col-md-6">
                                    <label for="website">Website</label>
                                    <input type="text" name="website" class="form-control" id="website" value="-">
                                </div>
                                <div class="col-md-6">
                                    <label for="post_code">Post Code</label>
                                    <input type="text" name="post_code" class="form-control" id="post_code" value="-">
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Languages</label>
                                        <select class="custom-select" size="3">
                                            <option selected>Select youre choise</option>
                                            <option value="1">Indonesia</option>
                                            <option value="2">English</option>
                                            <option value="3">japanes</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="city">City</label>
                                    <input type="text" name="city" class="form-control" id="city" value="Bekasi">
                                </div>
                                <div class="col-md-6 ">
                                    <div class="form-group">
                                        <label for="state">Gender</label>
                                        <div class="d-flex">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                                                <label class="custom-control-label" for="customControlValidation2">Male</label>
                                            </div>
                                            <div class="custom-control custom-radio ml-2">
                                                <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                                                <label class="custom-control-label" for="customControlValidation2">Female</label>
                                            </div>
                                            <div class="custom-control custom-radio ml-2">
                                                <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                                                <label class="custom-control-label" for="customControlValidation2">Other</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="state">State</label>
                                    <input type="text" name="state" class="form-control" id="state" value="-">
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="state">Contact Options</label>
                                        <div class="d-flex">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                                                <label class="custom-control-label" for="customControlValidation2">Email</label>
                                            </div>
                                            <div class="custom-control custom-checkbox ml-2">
                                                <input type="checkbox" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                                                <label class="custom-control-label" for="customControlValidation2">Message</label>
                                            </div>
                                            <div class="custom-control custom-checkbox ml-2">
                                                <input type="checkbox" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                                                <label class="custom-control-label" for="customControlValidation2">Phone</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="country">Country</label>
                                    <input type="text" name="country" class="form-control" id="country" value="-">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="social" class="tab-pane fade" role="tabpanel" aria-labelledby="nav-social">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-6 pt-2">
                                    <label for="">Twitter</label>
                                    <div class="input-group is-invalid border-0">
                                        <div class="input-group-prepend border-0">
                                            <span class="input-group-text border-0 bg-white" id="validatedInputGroupPrepend">
                                                <svg viewBox="0 -47 512.00004 512"
                                                     width="24"
                                                     height="24"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="m512 55.964844c-32.207031 1.484375-31.503906 1.363281-35.144531 1.667968l19.074219-54.472656s-59.539063 21.902344-74.632813 25.820313c-39.640625-35.628907-98.5625-37.203125-140.6875-11.3125-34.496094 21.207031-53.011719 57.625-46.835937 100.191406-67.136719-9.316406-123.703126-41.140625-168.363282-94.789063l-14.125-16.964843-10.554687 19.382812c-13.339844 24.492188-17.769531 52.496094-12.476563 78.851563 2.171875 10.8125 5.863282 21.125 10.976563 30.78125l-12.117188-4.695313-1.4375 20.246094c-1.457031 20.566406 5.390625 44.574219 18.320313 64.214844 3.640625 5.53125 8.328125 11.605469 14.269531 17.597656l-6.261719-.960937 7.640625 23.199218c10.042969 30.480469 30.902344 54.0625 57.972657 67.171875-27.035157 11.472657-48.875 18.792969-84.773438 30.601563l-32.84375 10.796875 30.335938 16.585937c11.566406 6.324219 52.4375 27.445313 92.820312 33.78125 89.765625 14.078125 190.832031 2.613282 258.871094-58.664062 57.308594-51.613282 76.113281-125.03125 72.207031-201.433594-.589844-11.566406 2.578125-22.605469 8.921875-31.078125 12.707031-16.964844 48.765625-66.40625 48.84375-66.519531zm-72.832031 48.550781c-10.535157 14.066406-15.8125 32.03125-14.867188 50.578125 3.941407 77.066406-17.027343 136.832031-62.328125 177.628906-52.917968 47.660156-138.273437 66.367188-234.171875 51.324219-17.367187-2.722656-35.316406-8.820313-50.171875-14.910156 30.097656-10.355469 53.339844-19.585938 90.875-37.351563l52.398438-24.800781-57.851563-3.703125c-27.710937-1.773438-50.785156-15.203125-64.96875-37.007812 7.53125-.4375 14.792969-1.65625 22.023438-3.671876l55.175781-15.367187-55.636719-13.625c-27.035156-6.621094-42.445312-22.796875-50.613281-35.203125-5.363281-8.152344-8.867188-16.503906-10.96875-24.203125 5.578125 1.496094 12.082031 2.5625 22.570312 3.601563l51.496094 5.09375-40.800781-31.828126c-29.398437-22.929687-41.179687-57.378906-32.542969-90.496093 91.75 95.164062 199.476563 88.011719 210.320313 90.527343-2.386719-23.183593-2.449219-23.238281-3.074219-25.445312-13.886719-49.089844 16.546875-74.015625 30.273438-82.453125 28.671874-17.621094 74.183593-20.277344 105.707031 8.753906 6.808593 6.265625 16.015625 8.730469 24.632812 6.589844 7.734375-1.921875 14.082031-3.957031 20.296875-6.171875l-12.9375 36.945312 16.515625.011719c-3.117187 4.179688-6.855469 9.183594-11.351562 15.183594zm0 0"/>
                                                </svg>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control border-0" value="-">
                                    </div>
                                </div>
                                <div class="col-md-6 pt-2">
                                     <label for="">Github</label>
                                    <div class="input-group is-invalid border-0">
                                        <div class="input-group-prepend border-0">
                                            <span class="input-group-text border-0 bg-white" id="validatedInputGroupPrepend">
                                                <svg id="regular" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="m.184 10.462c-.779 4.906 1.401 10.823 8.123 13.006.12.022.231.032.335.032.782 0 1.32-.582 1.32-1.3-.097-.523.383-2.642-.92-2.357-2.519.536-2.821-.871-3.205-1.607 1.086 1.394 2.718 1.359 3.949.819.683-.3.326-1.064.65-1.343.496-.426.244-1.243-.407-1.314-2.314-.255-4.457-1.001-4.457-4.702 0-2.168 1.505-2.362 1.09-3.269-.015-.033-.333-.754-.045-1.849 1.419.262 2.072 1.28 2.753 1.097 1.687-.46 3.544-.46 5.23 0 .704.189 1.207-.801 2.738-1.103.441 1.654-.473 2.058.103 2.677.632.68.953 1.503.953 2.447 0 5.564-4.717 3.957-5.101 5.22-.088.288.005.599.235.792.61.513.53 1.83.465 2.889-.067 1.098-.125 2.045.482 2.579.214.19.595.393 1.284.253 6.634-2.131 8.83-8.022 8.063-12.917-2.096-13.368-21.526-13.352-23.638-.05zm8.27 10.978.004.505c-.523-.181-1.015-.39-1.475-.623.425.109.913.156 1.471.118zm.37-3.7c-.005.026-.01.053-.015.08-.853.252-1.509.001-1.957-.752 0-.001 0-.001-.001-.002.68.364 1.381.56 1.973.674zm3.176-15.74c11.833 0 14.502 16.267 3.469 19.941-.038-.297-.003-.857.021-1.252.058-.951.126-2.059-.213-2.985 5.088-1.059 5.513-6.646 3.554-9.135.243-.952.145-3.189-.729-3.463-.206-.065-1.305-.304-3.437 1.037-1.741-.416-3.62-.417-5.361 0-1.064-.667-3.462-1.752-3.922-.6-.534 1.342-.407 2.427-.248 3.03-1.739 2.204-1.218 5.894.534 7.626-.993-.475-2.361-.637-2.656.314-.323 1.037.912.911 1.679 2.804.073.236.208.513.415.788-6.811-5.565-3.525-18.105 6.894-18.105z"/>
                                                </svg>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control border-0" value="https://github.com/fajarartbekasi">
                                    </div>
                                </div>
                                <div class="col-md-6 pt-2">
                                    <label for="">Facebook</label>
                                    <div class="input-group is-invalid border-0">
                                        <div class="input-group-prepend border-0">
                                            <span class="input-group-text border-0 bg-white" id="validatedInputGroupPrepend">
                                                <svg height="24" viewBox="0 0 512 512" width="24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="m297.277344 508.667969c-2.132813.347656-4.273438.667969-6.421875.960937 2.148437-.292968 4.289062-.613281 6.421875-.960937zm0 0"/><path d="m302.398438 507.792969c-1.019532.1875-2.039063.359375-3.058594.535156 1.019531-.175781 2.039062-.347656 3.058594-.535156zm0 0"/><path d="m285.136719 510.339844c-2.496094.28125-5.007813.53125-7.527344.742187 2.519531-.210937 5.03125-.460937 7.527344-.742187zm0 0"/><path d="m290.054688 509.738281c-1.199219.160157-2.40625.308594-3.609376.449219 1.203126-.140625 2.410157-.289062 3.609376-.449219zm0 0"/><path d="m309.367188 506.410156c-.898438.191406-1.800782.382813-2.703126.566406.902344-.183593 1.804688-.375 2.703126-.566406zm0 0"/><path d="m326.664062 502.113281c-.726562.207031-1.453124.402344-2.179687.605469.726563-.203125 1.453125-.398438 2.179687-.605469zm0 0"/><path d="m321.433594 503.542969c-.789063.207031-1.582032.417969-2.375.617187.792968-.199218 1.585937-.40625 2.375-.617187zm0 0"/><path d="m314.589844 505.253906c-.835938.195313-1.679688.378906-2.523438.566406.84375-.1875 1.6875-.371093 2.523438-.566406zm0 0"/><path d="m277.527344 511.089844c-1.347656.113281-2.695313.214844-4.046875.304687 1.351562-.089843 2.699219-.191406 4.046875-.304687zm0 0"/><path d="m512 256c0-141.363281-114.636719-256-256-256s-256 114.636719-256 256 114.636719 256 256 256c1.503906 0 3-.03125 4.5-.058594v-199.285156h-55v-64.097656h55v-47.167969c0-54.703125 33.394531-84.476563 82.191406-84.476563 23.367188 0 43.453125 1.742188 49.308594 2.519532v57.171875h-33.648438c-26.546874 0-31.6875 12.617187-31.6875 31.128906v40.824219h63.476563l-8.273437 64.097656h-55.203126v189.453125c107.003907-30.675781 185.335938-129.257813 185.335938-246.109375zm0 0"/><path d="m272.914062 511.429688c-2.664062.171874-5.339843.308593-8.023437.398437 2.683594-.089844 5.359375-.226563 8.023437-.398437zm0 0"/><path d="m264.753906 511.835938c-1.414062.046874-2.832031.082031-4.25.105468 1.417969-.023437 2.835938-.058594 4.25-.105468zm0 0"/>
                                                </svg>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control border-0" value="-">
                                    </div>
                                </div>
                                <div class="col-md-6 pt-2">
                                    <label for="">CodePen</label>
                                    <div class="input-group is-invalid border-0">
                                        <div class="input-group-prepend border-0">
                                            <span class="input-group-text border-0 bg-white" id="validatedInputGroupPrepend">
                                                <svg enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="m.455 16.512 10.969 7.314c.374.23.774.233 1.152 0l10.969-7.314c.281-.187.455-.522.455-.857v-7.312c0-.335-.174-.67-.455-.857l-10.969-7.313c-.374-.23-.774-.232-1.152 0l-10.969 7.313c-.281.187-.455.522-.455.857v7.312c0 .335.174.67.455.857zm10.514 4.528-8.076-5.384 3.603-2.411 4.473 2.987zm2.062 0v-4.808l4.473-2.987 3.603 2.411zm8.907-7.314-2.585-1.727 2.585-1.728zm-8.907-10.767 8.076 5.384-3.603 2.411-4.473-2.987zm-1.031 6.602 3.643 2.438-3.643 2.438-3.643-2.438zm-1.031-6.602v4.808l-4.473 2.987-3.603-2.411zm-8.906 7.314v-.001l2.585 1.728-2.585 1.728z" fill="#212121"/>
                                                </svg>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control border-0" value="-">
                                    </div>
                                </div>
                                <div class="col-md-6 pt-2">
                                     <label for="">Instagram</label>
                                    <div class="input-group is-invalid border-0">
                                        <div class="input-group-prepend border-0">
                                            <span class="input-group-text border-0 bg-white" id="validatedInputGroupPrepend">
                                                <svg viewBox="0 0 512.00096 512.00096"
                                                     width="24"
                                                     height="24"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="m373.40625 0h-234.8125c-76.421875 0-138.59375 62.171875-138.59375 138.59375v234.816406c0 76.417969 62.171875 138.589844 138.59375 138.589844h234.816406c76.417969 0 138.589844-62.171875 138.589844-138.589844v-234.816406c0-76.421875-62.171875-138.59375-138.59375-138.59375zm108.578125 373.410156c0 59.867188-48.707031 108.574219-108.578125 108.574219h-234.8125c-59.871094 0-108.578125-48.707031-108.578125-108.574219v-234.816406c0-59.871094 48.707031-108.578125 108.578125-108.578125h234.816406c59.867188 0 108.574219 48.707031 108.574219 108.578125zm0 0"/>
                                                    <path d="m256 116.003906c-77.195312 0-139.996094 62.800782-139.996094 139.996094s62.800782 139.996094 139.996094 139.996094 139.996094-62.800782 139.996094-139.996094-62.800782-139.996094-139.996094-139.996094zm0 249.976563c-60.640625 0-109.980469-49.335938-109.980469-109.980469 0-60.640625 49.339844-109.980469 109.980469-109.980469 60.644531 0 109.980469 49.339844 109.980469 109.980469 0 60.644531-49.335938 109.980469-109.980469 109.980469zm0 0"/>
                                                    <path d="m399.34375 66.285156c-22.8125 0-41.367188 18.558594-41.367188 41.367188 0 22.8125 18.554688 41.371094 41.367188 41.371094s41.371094-18.558594 41.371094-41.371094-18.558594-41.367188-41.371094-41.367188zm0 52.71875c-6.257812 0-11.351562-5.09375-11.351562-11.351562 0-6.261719 5.09375-11.351563 11.351562-11.351563 6.261719 0 11.355469 5.089844 11.355469 11.351563 0 6.257812-5.09375 11.351562-11.355469 11.351562zm0 0"/>
                                                </svg>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control border-0" value="fajardev34">
                                    </div>
                                </div>
                                <div class="col-md-6 pt-2">
                                     <label for="">Slack</label>
                                    <div class="input-group is-invalid border-0">
                                        <div class="input-group-prepend border-0">
                                            <span class="input-group-text border-0 bg-white" id="validatedInputGroupPrepend">
                                                <svg version="1.1"
                                                        id="Capa_1"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        viewBox="0 0 512 512"
                                                        height="24"
                                                        width="24"
                                                        style="enable-background:new 0 0 512 512;"
                                                        xml:space="preserve">
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <path d="M283.312,143.904L163.024,187.68l-27.36-75.2L105.6,123.44l27.36,75.2L57.76,226l11.04,30l75.2-27.36l43.776,120.288
                                                                        l-75.2,27.36L123.44,406.4l75.2-27.36l27.36,75.2l30-10.96l-27.36-75.2l120.288-43.776l27.36,75.2l30.064-10.944l-27.36-75.2
                                                                        l75.2-27.36l-10.912-30l-75.2,27.36l-43.76-120.336l75.2-27.36L388.56,105.6l-75.2,27.36L286,57.76L256,68.8L283.312,143.904z
                                                                        M294.256,173.952l43.792,120.304l-120.304,43.792l-43.792-120.304L294.256,173.952z"/>
                                                                    <path d="M448,0h-32v32h32c17.673,0,32,14.327,32,32v384c0,17.673-14.327,32-32,32H64c-17.673,0-32-14.327-32-32V64
                                                                        c0-17.673,14.327-32,32-32h192V0H64C28.654,0,0,28.654,0,64v384c0,35.346,28.654,64,64,64h384c35.346,0,64-28.654,64-64V64
                                                                        C512,28.654,483.346,0,448,0z"/>
                                                                    <rect x="352" width="32" height="32"/>
                                                                    <rect x="288" width="32" height="32"/>
                                                                </g>
                                                            </g>
                                                        </g>
                                                </svg>

                                            </span>
                                        </div>
                                        <input type="text" class="form-control border-0" value="-">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection