<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>User Profile</title>
        <link rel="stylesheet" href="{{asset('user/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('user/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
        <link rel="stylesheet" href="{{asset('user/assets/vendors/css/vendor.bundle.base.css')}}">
        <link rel="stylesheet" href="{{asset('user/assets/vendors/select2/select2.min.css')}}" />
        <link rel="stylesheet" href="{{asset('user/assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{asset('user/assets/css/demo_1/style.css')}}" />
        <link rel="shortcut icon" href="../../../assets/images/favicon.png" />
    </head>
    <body>
        <div class="container-scroller">
        @include('user.partials._sidebar')
            <div class="container-fluid page-body-wrapper">
            <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
                @include('user.partials._settings-panel')
                @include('user.partials._navbar')
                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="container bg-white py-3 px-3 " style=" border:1px solid rgb(226, 218, 218)">
                            <div class="page-header">
                                <h5 class="page-title">Profile Settings</h5>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <img src="/storage/{{$details->image}}" class="text-center" alt="profile_image" srcset="" style="height: 120px; width:120px; border-radius:50%; margin-left:43%">
                                    </div>
                                </div>
                            </div>
                            <form action="/user-image-update" id="imageForm" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="file" class="form-control" id="imageUpload" accept="image/*" name="image" />
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cropModal">
                                                Choose Image
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <button id="saveBtn" class="btn btn-warning d-none">Save</button>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <span id="cancelBtn" class="btn btn-light d-none">Cancel</span>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <div id="profile-success-message" style="display: none;" class="alert alert-success"></div>
                            <form action="/user-personal-update" method="POST" id="profileForm">
                                @csrf
                                <div class="row ">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="firstName">First Name</label>
                                            <input type="text" class="form-control" id="firstName" name="first_name" value="{{$details->first_name}}" placeholder="Enter First Name" required >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="lastName">Last Name</label>
                                            <input type="text" class="form-control" id="lastName" name="last_name" value="{{$details->last_name}}" placeholder="Enter Last Name" required >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" id="email" name="email" value="{{$user->email}}" placeholder="Enter Email" required >
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="date_of_birth">Date Of Birth</label>
                                            <input type="date" class="form-control" id="date_of_birth" value="{{$details->date_of_birth}}" name="date_of_birth" placeholder="Enter First Name" required >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="nric_number">NRIC Number</label>
                                            <input type="text" class="form-control" id="nric_number" value="{{$details->nric_number}}" name="nric_number" placeholder="Enter Last Name" required >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="passport_number">Passport Number</label>
                                            <input type="text" class="form-control" id="passport_number" value="{{$details->passport_number}}" name="passport_number" placeholder="Enter Email" required >
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="gender">Gender</label>
                                            <select name="gender" class="form-control" id="gender" >
                                                <option value="{{$details->gender}}">{{$details->gender}}</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="short_name">Short Name</label>
                                            <input type="text" class="form-control" id="short_name" value="{{$details->short_name}}" name="short_name" placeholder="Enter Last Short Name" required >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="race">Race</label>
                                            <input type="text" class="form-control" id="rece" value="{{$details->race}}" name="race" placeholder="Enter Race" required >
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="address1">Address 1</label>
                                            <input type="text" class="form-control" id="address1" value="{{$details->address1}}" name="address1" placeholder="Enter Address 1" required >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="address2">Address 2</label>
                                            <input type="text" class="form-control" id="address2" value="{{$details->address2}}" name="address2" placeholder="Enter Address 2" required >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="city">City</label>
                                            <input type="text" class="form-control" id="city" value="{{$details->city}}" name="city" placeholder="Enter city" required >
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="postal_code">Postal Code</label>
                                            <input type="text" class="form-control" id="postal_code" value="{{$details->postal_code}}" name="postal_code" placeholder="Enter Postal Code" required >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="state">State</label>
                                            <input type="text" class="form-control" id="state" value="{{$details->state}}" name="state" placeholder="Enter State" required >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="country">Country</label>
                                            <select name="country" id="country" class="form-control" >
                                                <option value="{{$details->country}}">{{$details->country}}</option>
                                                {{-- @foreach ($counties as $countries) <!--table name store in $country assign $countries-->
                                                <option value="{{$countries->name}}">{{$countries->name}}</option>
                                                @endforeach --}}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="postal_code">Country Code</label>
                                            <input type="text" class="form-control" id="postal_code" value="{{$details->country_code}}" name="postal_code" placeholder="Enter Postal Code" required >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="state">State</label>
                                            <input type="text" class="form-control" id="state" value="{{$details->mobile_number}}" name="state" placeholder="Enter State" required >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="country">Employment Status</label>
                                            <select name="country" id="country" class="form-control" >
                                                <option value="{{$details->employment_status}}">{{$details->employment_status}}</option>
                                                {{-- @foreach ($counties as $country)
                                                <option value="{{$country->name}}">{{$country->name}}</option>
                                                @endforeach --}}
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row ">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="postal_code">Facebook</label>
                                            <input type="text" class="form-control" id="postal_code" value="{{$details->facebook}}" name="postal_code" placeholder="Enter Postal Code" required >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="state">Twitter</label>
                                            <input type="text" class="form-control" id="state" value="{{$details->twitter}}" name="state" placeholder="Enter State" required >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="country">Linkedin</label>
                                            <input type="text" class="form-control" id="state" value="{{$details->linkedin}}" name="state" placeholder="Enter State" required >
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" id="profileSaveButton" class="btn btn-success d-none" >Save</button>
                                <button type="button" id="profileCancelButton" class="btn btn-danger d-none">Cancel</button>
                                <span id="profileEditButton" class="btn btn-secondary">Edit</span>
                            </form>
                        </div>
                        <!---employee status-->
                        <div class="container bg-white py-3 px-3 " style=" border:1px solid rgb(226, 218, 218); margin-top:20px;">
                            <div class="page-header">
                                <h5 class="page-title">Empolyees Details</h5>
                            </div>
                            <div id="bank-success-message" style="display: none;" class="alert alert-success"></div>
                            <form action="/user-bank-update" method="POST" id="bankForm">
                                @csrf
                                <div class="row ">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="bank_name">Roles</label>
                                            <input type="text" class="form-control" id="bank_name" value="New User" name="bank_name" placeholder="Enter Bamk Name" required >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="account_holder">Joining Date</label>
                                            <input type="text" class="form-control" id="account_holder" value="{{$details->joining_date}}" name="account_holder" placeholder="Enter Account Holder Name" required >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="account_number">Designation</label>
                                            <input type="text" class="form-control" id="account_number" value="{{$details->designation}}" name="account_number" placeholder="Enter Account Number" required >
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="swift_code">Department</label>
                                            <input type="text" class="form-control" id="swift_code" value="{{$details->department}}" name="swift_code" placeholder="Enter Bamk Name" required >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="bank_branch">Staff Postion</label>
                                            <input type="text" class="form-control" id="bank_branch" value="{{$details->staff_position}}" name="bank_branch" placeholder="Enter Account Holder Name" required >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="bank_address1">Salary Grade</label>
                                            <input type="text" class="form-control" id="bank_address1" value="{{$details->salary_grade}}" name="bank_address1" placeholder="Enter Salary Grade" required >
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="bank_address2">Staff Qualification</label>
                                            <input type="text" class="form-control" id="bank_address2" value="{{$details->staff_qualification}}" name="bank_address2" placeholder="Enter Bamk Name" required >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="bank_city">Stream Type</label>
                                            <input type="text" class="form-control" id="bank_city" value="{{$details->stream_type}}" name="bank_city" placeholder="Enter Account Holder Name" required >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="bank_state">Staff Category</label>
                                            <input type="text" class="form-control" id="bank_state" value="{{$details->staff_category}}" name="bank_state" placeholder="Enter Account Number" required >
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" id="bankSaveButton" class="btn btn-success d-none" >Save</button>
                                <button type="button" id="bankCancelButton" class="btn btn-danger d-none">Cancel</button>
                                <span id="bankEditButton" class="btn btn-secondary">Edit</span>
                            </form>
                        </div>

                         <!---login status-->
                         <div class="container bg-white py-3 px-3 " style=" border:1px solid rgb(226, 218, 218); margin-top:20px;">
                            <div class="page-header">
                                <h5 class="page-title">Login Details</h5>
                            </div>
                            <div id="bank-success-message" style="display: none;" class="alert alert-success"></div>
                            <form action="/user-bank-update" method="POST" id="bankForm">
                                @csrf
                                <div class="row ">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="bank_name">User Name</label>
                                            <input type="text" class="form-control" id="bank_name" value="{{$user->user_name}}" name="bank_name" placeholder="Enter Bamk Name" required >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="account_number">Email</label>
                                            <input type="text" class="form-control" id="account_number" value="{{$user->email}}" name="account_number" placeholder="Enter Account Number" required >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="account_holder">Password</label>
                                            <input type="password" class="form-control" id="account_holder" value="{{$user->password}}" name="account_holder" placeholder="Enter Account Holder Name" required >
                                        </div>
                                    </div>

                                </div>



                                <button type="submit" id="bankSaveButton" class="btn btn-success d-none" >Save</button>
                                <button type="button" id="bankCancelButton" class="btn btn-danger d-none">Cancel</button>
                                <span id="bankEditButton" class="btn btn-secondary">Edit</span>
                            </form>
                        </div>

                         <!---medical history-->
                         <div class="container bg-white py-3 px-3 " style=" border:1px solid rgb(226, 218, 218); margin-top:20px;">
                            <div class="page-header">
                                <h5 class="page-title">Medical History</h5>
                            </div>
                            <div id="bank-success-message" style="display: none;" class="alert alert-success"></div>
                            <form action="/user-bank-update" method="POST" id="bankForm">
                                @csrf
                                <div class="row ">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="bank_name">Height</label>
                                            <input type="text" class="form-control" id="bank_name" value="{{$details->height}}" name="bank_name" placeholder="Enter Bamk Name" required >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="account_number">Weight</label>
                                            <input type="text" class="form-control" id="account_number" value="{{$details->weight}}" name="account_number" placeholder="Enter Account Number" required >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="account_holder">Allergy</label>
                                            <input type="password" class="form-control" id="account_holder" value="{{$details->allergy}}" name="account_holder" placeholder="Enter Account Holder Name" required >
                                        </div>
                                    </div>

                                </div>



                                <button type="submit" id="bankSaveButton" class="btn btn-success d-none" >Save</button>
                                <button type="button" id="bankCancelButton" class="btn btn-danger d-none">Cancel</button>
                                <span id="bankEditButton" class="btn btn-secondary">Edit</span>
                            </form>
                        </div>


                        <div class="container bg-white py-3 px-3 " style=" border:1px solid rgb(226, 218, 218); margin-top:20px;">
                            <div class="page-header">
                                <h5 class="page-title">Bank Settings</h5>
                            </div>
                            <div id="bank-success-message" style="display: none;" class="alert alert-success"></div>
                            <form action="/user-bank-update" method="POST" id="bankForm">
                                @csrf
                                <div class="row ">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="bank_name">Bank Name</label>
                                            <input type="text" class="form-control" id="bank_name" value="{{$bank->bank_name}}" name="bank_name" placeholder="Enter Bamk Name" required >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="account_holder">Account Holder Name</label>
                                            <input type="text" class="form-control" id="account_holder" value="{{$bank->account_holder}}" name="account_holder" placeholder="Enter Account Holder Name" required >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="account_number">Account Number</label>
                                            <input type="text" class="form-control" id="account_number" value="{{$bank->account_number}}" name="account_number" placeholder="Enter Account Number" required >
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="swift_code">Swift Code</label>
                                            <input type="text" class="form-control" id="swift_code" value="{{$bank->swift_code}}" name="swift_code" placeholder="Enter Bamk Name" required >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="bank_branch">Bank Branch</label>
                                            <input type="text" class="form-control" id="bank_branch" value="{{$bank->bank_branch}}" name="bank_branch" placeholder="Enter Account Holder Name" required >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="bank_address1">Bank Address</label>
                                            <input type="text" class="form-control" id="bank_address1" value="{{$bank->bank_address}}" name="bank_address1" placeholder="Enter Account Number" required >
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="bank_address2">IFSC Code</label>
                                            <input type="text" class="form-control" id="bank_address2" value="{{$bank->ifsc_code}}" name="bank_address2" placeholder="Enter Bamk Name" required >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="bank_city">Address 1</label>
                                            <input type="text" class="form-control" id="bank_city" value="{{$bank->address1}}" name="bank_city" placeholder="Enter Account Holder Name" required >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="bank_state">Address 2</label>
                                            <input type="text" class="form-control" id="bank_state" value="{{$bank->address2}}" name="bank_state" placeholder="Enter Account Number" required >
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="bank_address2">City</label>
                                            <input type="text" class="form-control" id="bank_address2" value="{{$bank->city}}" name="bank_address2" placeholder="Enter Bamk Name" required >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="bank_city">State</label>
                                            <input type="text" class="form-control" id="bank_city" value="{{$bank->state}}" name="bank_city" placeholder="Enter Account Holder Name" required >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="bank_state">Postel Code</label>
                                            <input type="text" class="form-control" id="bank_state" value="{{$bank->postal_code}}" name="bank_state" placeholder="Enter Account Number" required >
                                        </div>
                                    </div>
                                </div>

                                <div class="row ">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="bank_postal_code">Country</label>
                                            <input type="text" class="form-control" id="bank_postal_code" value="{{$bank->country}}" name="bank_postal_code" placeholder="Enter Bamk Name" required >
                                        </div>

                                    </div>

                                </div>
                                <button type="submit" id="bankSaveButton" class="btn btn-success d-none" >Save</button>
                                <button type="button" id="bankCancelButton" class="btn btn-danger d-none">Cancel</button>
                                <span id="bankEditButton" class="btn btn-secondary">Edit</span>
                            </form>
                        </div>
                    </div>


                    <div class="modal fade" id="cropModal" tabindex="-1" role="dialog" aria-labelledby="cropModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="cropModalLabel">Crop Image</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="cropper-container">
                                        <img id="croppableImage" src="/path_to_default_image" alt="profile_image" />
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button id="saveCroppedImage" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('user.partials._footer')
                </div>
            </div>
        </div>
        <script src="{{asset('user/assets/vendors/js/vendor.bundle.base.js')}}"></script>
        <script src="{{asset('user/assets/vendors/select2/select2.min.js')}}"></script>
        <script src="{{asset('user/assets/vendors/typeahead.js/typeahead.bundle.min.js')}}"></script>
        <script src="{{asset('user/assets/js/off-canvas.js')}}"></script>
        <script src="{{asset('user/assets/js/hoverable-collapse.js')}}"></script>
        <script src="{{asset('user/assets/js/misc.js')}}"></script>
        <script src="{{asset('user/assets/js/settings.js')}}"></script>
        <script src="{{asset('user/assets/js/todolist.js')}}"></script>
        <script src="{{asset('user/assets/js/file-upload.js')}}"></script>
        <script src="{{asset('user/assets/js/typeahead.js')}}"></script>
        <script src="{{asset('user/assets/js/select2.js')}}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                $('form').on('submit', function(e) {
                    e.preventDefault();
                    var formData = $(this).serialize();
                    $.ajax({
                        type: 'POST',
                        url: '/user-update',
                        data: formData,
                        success: function(response) {
                            $('#success-message').html('Profile update successfully').fadeIn();
                            $('#user-form')[0].reset();
                            setTimeout(function() {
                                $('#success-message').fadeOut();
                            }, 3000);
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                        }
                    });
                });
            });
        </script>
    </body>
</html>
