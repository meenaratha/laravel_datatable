
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">





    <!---custom css-->
  <link rel="stylesheet" href="{{asset('user/custom/registerstyle.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css">
  <link rel="stylesheet" href="https://unpkg.com/dropzone/dist/dropzone.css" />
		<link href="https://unpkg.com/cropperjs/dist/cropper.css" rel="stylesheet"/>
		<script src="https://unpkg.com/dropzone"></script>
		<script src="https://unpkg.com/cropperjs"></script>
        <!-- Include Cropper.js CSS (if available) -->
    <link rel="stylesheet" href="path/to/cropper.css">

    <!-- Include Cropper.js script -->
    <script src="path/to/cropper.js"></script>


</head>
<body>
<form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
    @csrf
<div class="container form-container">
    <p class="text-center mb-4" style="text-align: right;">Personal Details</p>


     <!----image upload-->
     <div class="form-row">
        <div class="col-md-4">
        <div class="container" align="center">
        <div class="image_area">

                    <label for="upload_image" class="image-cont">
                        <img src="{{asset('user/custom/images/user.png')}}" id="uploaded_image" class="uploaded-img" />
                        <div class="overlay">
                            <div class="text"> Edit <br><i class="fas fa-edit"></i></div>
                        </div>
                        <input type="file" name="image" class="image" id="upload_image" style="display:none;" >
                    </label>


            </div>

            @error('image')
            <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                        @enderror
    </div>
     </div>
    </div>
    <div class="form-row ">
        <div class="col-md-4">
            <label for="firstName">First Name</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <!-- Font Awesome Icon for User -->
                        <i class="fas fa-user"></i>
                    </span>
                </div>
                <input type="text" class="form-control custom-background"  name="first_name" id="firstName" placeholder="Enter your First Name">

            </div>

            @error('first_name')
<div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-4">
            <label for="firstName">Last Name</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <!-- Font Awesome Icon for User -->
                        <i class="fas fa-user"></i>
                    </span>
                </div>
                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter your Last Name">
            </div>
            @error('last_name')
            <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                        @enderror
        </div>
        <div class="col-md-4">
            <label for="gender">Gender</label>
            <select class="form-control" name="gender" id="gender">
                <option selected disabled>Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
            @error('gender')
            <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                        @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-4">
            <label for="firstName">Date Of Birth</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-birthday-cake"></i>

                    </span>
                </div>
                <input type="text" class="form-control" name="date_of_birth" id="date_of_birth" placeholder="Enter your Date Of Birth">
            </div>
            @error('date_of_birth')
            <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                        @enderror
        </div>
        <div class="col-md-4">
            <label for="firstName">NRIC Number</label>
            <div class="input-group">

                <input type="text" class="form-control" name="nric_number" id="nric_number" placeholder="Enter your Last Name">
            </div>

            @error('nric_number')
            <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                        @enderror
        </div>
        <div class="col-md-4">
            <label for="firstName">Passport Number</label>
            <div class="input-group">

                <input type="text" class="form-control" name="passport_number" id="passport_number" placeholder="Enter your Passport Number">
            </div>

            @error('genderpassport_number')
            <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                        @enderror
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-4">
            <label for="firstName">Short Name</label>
            <div class="input-group">

                <input type="text" class="form-control" name="short_name" id="short_name" placeholder="Enter your Short Name">
            </div>
            @error('short_name')
            <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                        @enderror

        </div>
        <div class="col-md-4">
            <label for="gender">Race</label>
            <select class="form-control" name="race" id="race">
                <option  selected disabled>Select Race</option>
                    <option >African Americans</option>
                    <option >American Indian or Alaska Native</option>
                    <option >Australoid</option>
                    <option >Causcasoid</option>
                    <option >Native Hawalian or other Pacific</option>
                    <option >White</option>
                    <option >Asian</option>
                    <option >Hispanic and Latino Americans</option>
                    <option >Melanesian</option>
                    <option >Monogoloid or asian</option>
            </select>
            @error('race')
            <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                        @enderror
        </div>
        <div class="col-md-4">
            <label for="religion">Religion</label>
            <select class="form-control" name="religion" id="religion">
                <option  selected disabled >Select Religion</option>
                    <option >Atheists</option>
                    <option >Agnostics</option>
                    <option >Bahais</option>
                    <option >Buddists</option>
                    <option >Chinese folk-religionists</option>
                    <option >Christians</option>
                    <option >Confuscianists</option>
                    <option >Daoists</option>
                    <option >Ethnoreligionists</option>
                    <option >Hindus</option>
                    <option >Jains</option>
                    <option >Jews</option>
                    <option >Muslims</option>
                    <option >New Religioists</option>
                    <option >Shintoists</option>
                    <option >Sikhs</option>
                    <option >Spritists</option>
                    <option >Zoroastrians</option>

            </select>
            @error('religion')
            <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                        @enderror
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-4">
            <label for="address1">Address 1</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <!-- Font Awesome Icon for User -->
                        <i class="fas fa-home"></i>
                    </span>
                </div>
                <input type="text" class="form-control"  name="address1"  id="address1" placeholder="Enter your Address 1">
            </div>
            @error('address1')
            <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                        @enderror
        </div>
        <div class="col-md-4">
            <label for="firstName">Address 2</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">

                        <i class="fas fa-home"></i>
                    </span>
                </div>
                <input type="text" class="form-control" name="address2" id="address2" placeholder="Enter your Address 2">
            </div>
            @error('address2')
            <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                        @enderror
        </div>
        <div class="col-md-4">
            <label for="firstName">City</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-building"></i>
                    </span>
                </div>
                <input type="text" class="form-control" name="city" id="city" placeholder="Enter your Address 2">
            </div>
            @error('city')
            <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                        @enderror
        </div>

        </div>
        <div class="form-row">
            <div class="col-md-4">
                <label for="firstName">Zip/Post Code</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-mail-bulk"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" name="postal_code" id="postal_code" placeholder="Enter your Zip/Post Code">
                </div>
                @error('postal_code')
                <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                            @enderror
            </div>
            <div class="col-md-4">
                <label for="postal_code">State/Province</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-map-marker-alt"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" name="state" id="state" placeholder="Enter your State/Province">
                </div>

                @error('state')
                <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                            @enderror
            </div>
            <div class="col-md-4">
                <label for="countryCode">Country</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="flag-icon2">
                            <i class="fas fa-plus"  id="plushide1"></i>
                        </span>
                    </div>
                    <select class="form-control" name="country" id="countryDropdown" onchange="changeFlag()">
                        <option value="" >Select Country </option>
                        <option value="IN" > India(IN) </option>


                        <!-- Add more country codes as needed -->
                    </select>
                </div>

                @error('country')
                <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                            @enderror
            </div>


        </div>
        <div class="form-row">
            <div class="col-md-4 ">
                <label for="countryCode">Country Code</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="flag-icon1">
                            <i class="fas fa-plus" id="plushide"></i>
                        </span>
                    </div>
                    <select class="form-control" name="country_code" id="countryCode1" onchange="changeFlagAndCode()">
                        <option value="" >Select Country Code</option>
                        <option value="IN">IN (+91)</option>
                        <option value="US"> US (+1)  </option>
                        <option value="GB">GB (+44) </option>

                        <!-- Add more country codes as needed -->
                    </select>
                </div>

                @error('country_code')
                <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                            @enderror
            </div>
            <div class="col-md-4">
                <label for="mobile_number">Phone No</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-phone-alt"></i>

                        </span>
                    </div>
                    <input type="tel" class="form-control" id="mobile_number" name="mobile_number" placeholder="Enter your Phone No" pattern="[0-9]{10}">
                </div>

                @error('mobile_number')
                <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                            @enderror
            </div>

            <div class="col-md-4">
                <label for="countryCode">Employment Status</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-user-tie"></i>

                        </span>
                    </div>
                    <select class="form-control" name="employee_status" id="countryCode">
                    <option  selected>Select Employment Status</option>
                        <option >xx-xx</option>
                        <option >xx-xx</option>
                        <option >xx-xx</option>
                        <!-- Add more country codes as needed -->
                    </select>
                </div>
                @error('employee_status')
                <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                            @enderror
            </div>

        </div>

     </div>
  <!-- Add more form rows as needed -->

<div class="container form-container">
    <p class="text-center mb-4" style="text-align: right;">Empolyees Details</p>

    <div class="form-row">
        <div class="col-md-4">
            <label for="firstName">Roles</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-user"></i>

                    </span>
                </div>
                <input type="text" value="New User" class="form-control" name="new_user" id="firstName" placeholder="Enter your Roles" disabled>
            </div>
            @error('')
            <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                        @enderror
        </div>
        <div class="col-md-4" id="calendarContainer">
            <label for="joining_date">Joining Date</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <!--<span class="input-group-text" id="calendarIcon">
                        <i class="fas fa-calendar-alt"></i>

                    </span>-->
                    <span class="input-group-text" id="">
                        <i class="fas fa-calendar-alt"></i>

                    </span>
                    <!----calender  popup-->
                    <div id="calendarPopup">
                        <ul class="calendar"></ul>
                    </div>

                </div>
                <input type="text" class="form-control" name="joining_date" id="dateInput" readonly placeholder="YYYY/MM/DD">
            </div>
            @error('joining_date')
            <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                        @enderror
        </div>

        <div class="col-md-4">
            <label for="designation">Designation</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-user-tie"></i>

                    </span>
                </div>
                <input type="text" class="form-control" name="designation" id="designation" placeholder="Choose your Designation">
            </div>

            @error('designation')
            <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                        @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-4">
            <label for="department">Department</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-building"></i>

                    </span>
                </div>
                <input type="text" class="form-control" name="department" id="department" placeholder="Choose your Designation">
            </div>
            @error('department')
            <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                        @enderror
        </div>
        <div class="col-md-4">
            <label for="staff_position">Staff Postion</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-user-tag"></i>

                    </span>
                </div>
                <select class="form-control" name="staff_position" id="staff_position">
                <option  selected>Select Staff Postion</option>
                    <option >xx-xx</option>
                    <option >xx-xx</option>
                    <option >xx-xx</option>
                    <!-- Add more country codes as needed -->
                </select>
            </div>
            @error('staff_position')
            <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                        @enderror
        </div>
        <div class="col-md-4">
            <label for="salary_grade">Salary Grade</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-dollar-sign"></i>

                    </span>
                </div>
                <input type="text" class="form-control" name="salary_grade" id="salary_grade" placeholder="Enter your Salary Grad">
            </div>
            @error('salary_grade')
            <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                        @enderror
        </div>

    </div>
    <div class="form-row">
        <div class="col-md-4">
            <label for="staff_category">Staff Category</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-users"></i>

                    </span>
                </div>
                <select class="form-control" name="staff_category" id="staff_category">
                <option  selected>Select Staff Category</option>
                    <option >xx-xx</option>
                    <option >xx-xx</option>
                    <option >xx-xx</option>
                    <!-- Add more country codes as needed -->
                </select>
            </div>
            @error('staff_category')
            <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                        @enderror
        </div>
        <div class="col-md-4">
            <label for="staff_qualification">Staff Qualification</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-graduation-cap"></i>
                    </span>
                </div>
                <input type="text" class="form-control" name="staff_qualification" id="staff_qualification" placeholder="Choose your Staff Qualification">
            </div>
            @error('staff_qualification')
            <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                        @enderror
        </div>
        <div class="col-md-4">
            <label for="stream_type">Stream Type</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-user-tag"></i>

                    </span>
                </div>
                <select class="form-control" name="stream_type" id="stream_type">
                <option  selected>Select Stream Type</option>
                    <option >xx-xx</option>
                    <option >xx-xx</option>
                    <option >xx-xx</option>
                    <!-- Add more country codes as needed -->
                </select>
            </div>
            @error('stream_type')
            <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                        @enderror
        </div>
    </div>

</div>
<div class="container form-container">
    <p class="text-center mb-4" style="text-align: right;">Login Details</p>
  <div class="form-row">
        <div class="col-md-3">
            <label for="firstName">Email</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-envelope"></i>

                    </span>
                </div>
                <input type="text" name="email" class="form-control" id="firstName" placeholder="xxxx-xxxx@gamil.com">
            </div>
            @error('email')
            <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                        @enderror
        </div>
        <div class="col-md-3">
            <label for="firstName">Password</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">

                        <i class="fas fa-lock"></i>

                    </span>
                </div>
                <input type="password" name="password" class="form-control" id="firstName" placeholder="**********">
            </div>
            @error('password')
            <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                        @enderror
        </div>
        <div class="col-md-3">
            <label for="firstName">Retype Password</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">

                        <i class="fas fa-lock"></i>

                    </span>
                </div>
                <input type="password" name="confirm_password" class="form-control" id="firstName" placeholder="**********">
            </div>
            @error('confirm_password')
            <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                        @enderror


        </div>
        <div class="col-md-1 ml-5">
            <label for="authentication" class="ml-5">Authentication</label>
            <div class="custom-control custom-switch ml-5">
                <input type="checkbox" name="authentication" class="custom-control-input" id="authentication">
                <label class="custom-control-label" for="authentication"> Lock</label>
            </div>
            @error('authentication')
            <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                        @enderror
        </div>



</div>
    </div>
<div class="container form-container">
    <p class="text-center mb-4" style="text-align: right;">Enable Two Factor Authentication</p>

    <div class="form-row">
        <div class="col-md-4">
            <label for="firstName">Turn on/Turn off</label>
            <div class="custom-control custom-switch">
                <input type="checkbox" name="two_factor" class="custom-control-input" id="toggleFirstName1">
                <label class="custom-control-label" for="toggleFirstName1"> Enable Two Factor Authentication</label>
            </div>
            @error('two_factor')
            <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                        @enderror
        </div>
    </div>
</div>
<div class="container form-container">
    <p class="text-center mb-4" style="text-align: right;">Social Links</p>

    <div class="form-row">
        <div class="col-md-4">
            <label for="facebook">Facebook</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fab fa-facebook"></i>

                    </span>
                </div>
                <input type="text" class="form-control" name="facebook" id="facebook" placeholder="Enter your Facebook">
            </div>
            @error('facebook')
            <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                        @enderror
        </div>
        <div class="col-md-4">
            <label for="twitter">Twitter</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fab fa-twitter"></i>
                    </span>
                </div>
                <input type="text" class="form-control" name="twitter" id="twitter" placeholder="Enter your Twitter">
            </div>
            @error('twitter')
            <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                        @enderror
        </div>
        <div class="col-md-4">
            <label for="linkedIn">Linkedin</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fab fa-linkedin"></i>
                    </span>
                </div>
                <input type="text" class="form-control" name="linkedIn" id="linkedIn" placeholder="Enter your Linkedin">
            </div>
            @error('linkedIn')
            <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                        @enderror
        </div>

    </div>

        </div>



<div class="container form-container">
    <p class="text-center mb-4" style="text-align: right;">Medical History</p>
  <div class="form-row">
        <div class="col-md-4">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" name="disable_medical"  class="custom-control-input" id="disablemedicalinput">
                <label class="custom-control-label" for="disablemedicalinput"> Skipped Medical Histroy</label>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-4">
            <label for="firstName">Height</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-ruler"></i>

                    </span>
                </div>
                <input type="text" class="form-control inputField" name="height" id="medical" placeholder="Enter your Height" >
            </div>
            @error('height')
            <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                        @enderror
        </div>
        <div class="col-md-4">
            <label for="weight">Weight</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-weight"></i>
                    </span>
                </div>
                <input type="text" class="form-control inputField" name="weight" id="medical" placeholder="Enter your Weight" >
            </div>
            @error('weight')
            <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                        @enderror
        </div>
        <div class="col-md-4">
            <label for="allergy">Allergy</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-allergies"></i>
                    </span>
                </div>
                <input type="text" class="form-control inputField" name="allergy" id="medical" placeholder="Enter your Allergy" >
            </div>
            @error('allergy')
            <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                        @enderror
        </div>
    </div>
        </div>



<div class="container form-container">
    <p class="text-center mb-4" style="text-align: right;">Bank Details</p>
   <div class="form-row">
        <div class="col-md-4">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" name="checknullable" class="custom-control-input" id="disablebankCheckbox">
                <label class="custom-control-label" for="disablebankCheckbox"> Skipped Bank Details</label>
            </div>
        </div>


    </div>
        <div class="form-row">
            <div class="col-md-4">
                <label for="bank_name">Bank Name</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-building"></i>

                        </span>
                    </div>
                    <input type="text" class="form-control disable-inputs" name="bank_name" id="bankfield1" placeholder="Enter your Bank Name" >
                </div>
                @error('bank_name')
                <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                            @enderror
            </div>
            <div class="col-md-4">
                <label for="account_holder">Account Holder</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <!-- Font Awesome Icon for User -->
                            <i class="fas fa-user"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control disable-inputs" name="account_holder"  id="bankfield2" placeholder="Enter your Account Holder" >
                </div>
                @error('account_holder')
                <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                            @enderror
            </div>
            <div class="col-md-4">
                <label for="firstName">Bank Branch</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-map-marker"></i>

                        </span>
                    </div>
                    <input type="text" class="form-control disable-inputs" name="bank_branch" id="bankfield3" placeholder="Enter your LBank Branch" >
                </div>
                @error('bank_branch')
                <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                            @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4">
                <label for="firstName">Bank Address</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-map-marker"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control disable-inputs" name="bank_address" id="bankfield4" placeholder="Enter your Bank Address" >
                </div>
                @error('bank_address')
                <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                            @enderror
            </div>
            <div class="col-md-4">
                <label for="firstName">IFSC Code</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-barcode"></i>

                        </span>
                    </div>
                    <input type="text" class="form-control disable-inputs" name="ifsc_code" id="bankfield5" placeholder="Enter your IFSC Code">
                </div>
                @error('ifsc_code')
                <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                            @enderror
            </div>
            <div class="col-md-4">
                <label for="firstName">Account No</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-hashtag"></i>

                        </span>
                    </div>
                    <input type="text" class="form-control disable-inputs" name="account_number" id="bankfield6" placeholder="Enter your Account No">
                </div>
                @error('account_number')
                <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                            @enderror
            </div>

        </div>

        <div class="form-row">
            <div class="col-md-4">
                <label for="firstName">Swift Code</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fab fa-swift"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control disable-inputs" name="swift_code" id="bankfield7" placeholder="Enter your Swift Code" >
                </div>
                @error('swift_code')
                <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                            @enderror
            </div>
            <div class="col-md-4">
                <label for="firstName">Address 1</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-map-marker-alt"></i>

                        </span>
                    </div>
                    <input type="text" class="form-control disable-inputs" name="bank_address_1" id="bankfield8" placeholder="Enter your Address 1">
                </div>
                @error('bank_address_1')
                <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                            @enderror
            </div>
            <div class="col-md-4">
                <label for="firstName">Address 2</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-map-marker-alt"></i>

                        </span>
                    </div>
                    <input type="text" class="form-control disable-inputs" name="bank_address_2" id="bankfield9" placeholder="Enter your Address 2" >
                </div>
                @error('bank_address_2')
                <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                            @enderror
            </div>

        </div>

        <div class="form-row">

            <div class="col-md-4">
                <label for="firstName">City</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-city"></i>

                        </span>
                    </div>
                    <input type="text" class="form-control disable-inputs" name="bank_city" id="bankfield10" placeholder="Enter your City" >
                </div>
                @error('bank_city')
                <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                            @enderror
            </div>
            <div class="col-md-4">
                <label for="firstName">Zip/Postal Code</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-map-marker-alt"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control disable-inputs" name="bank_postal_code" id="bankfield11" placeholder="Enter Postal Code" >
                </div>
                @error('bank_postal_code')
                <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                            @enderror
            </div>

            <div class="col-md-4">
                <label for="firstName">State/Province</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-map-marker-alt"></i>

                        </span>
                    </div>
                    <input type="text" class="form-control disable-inputs" name="bank_state" id="bankfield12" placeholder="Enter your Province" >
                </div>
                @error('bank_state')
                <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                            @enderror
            </div>

        </div>

        <div class="form-row">
            <div class="col-md-4">
                <label for="firstName">Country</label>
                <div class="input-group">


                    <div class="input-group-prepend">
                        <span class="input-group-text" id="flag-icon3">
                            <i class="fas fa-globe" id="plushide2"></i>
                        </span>
                    </div>
                    <select class="form-control disable-inputs" name="bank_country" id="countryCode2" onchange="changeFlag3()" >
                        <option value="" selected disabled>Select Country</option>
                        <option value="IN"> India(IN) </option>

                            <!-- Add more country codes as needed -->
                        </select>

                </div>

                @error('bank_country')
                <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                            @enderror
            </div>

        </div>

<!-- Add more form rows as needed -->
<div class="form-row">
    <div class="col-md-4" style="margin-top: 30px;">
        <div class="custom-control custom-checkbox">
            <input type="checkbox" name="terms" class="custom-control-input" id="termsCheckbox" >
            <label class="custom-control-label" for="termsCheckbox" style="color: blue;text-decoration: underline; padding-left: 10px;"> Agree the Terms and Conditions </label>
        </div>
        @error('terms')
        <div class="error-message" style="color: red; font-size: 14px; margin-top: 5px; font-weight:500; paddding-left:5px;">{{ $message }}</div>
                    @enderror
    </div>
    <div class="col-md-4"></div>

    <div class="col-md-4" style="align-items: center;">
        <button type="submit" class="btn btn-success" style="float: right; width:160px;margin-top: 30px; margin-right:40px;">Submit</button>
    </div>

</div>
 <!----- <div class="row button-container">
        <div class="col" >
            <button type="submit" class="btn btn-success" style="float: right; width:180px;">Submit</button>
        </div>
    </div>-->
</div>


</form>



 <div class="container" align="center">
   <!--  <br />
    <h3 align="center">Crop Image Before Upload using CropperJS with PHP</h3>
    <br />
    Button trigger modal
 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal">
    Launch demo modal
  </button>
    <div class="row">
        <div class="col-md-4">&nbsp;</div>
        <div class="col-md-4">
            <div class="image_area">
                <form method="post">
                    <label for="upload_image">
                        <img src="images/user.png" id="uploaded_image" class="uploaded-img" />
                        <div class="overlay">
                            <div class="text">Click to Change Profile Image (500x500)</div>
                        </div>
                        <input type="file" name="image" class="image" id="upload_image" style="display:none">
                    </label>
                </form>
            </div>
        </div>-->
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
          <div class="modal-dialog " role="document">
            <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="img-container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="sample-img-content" >
                                <img src="" id="sample_image" >
                                </div>
                            </div>
                           <!---- <div class="col-md-4">
                                <div class="preview"></div>
                            </div>-->
                        </div>
                    </div>
                  </div>
                  <div class="modal-footer" >
                    <div class="col-md-12" style="text-align: center;">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="crop" style="margin-left: 20px;">Crop</button>
                    </div>
                  </div>
            </div>
          </div>
    </div>
</div>










<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
<!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<!---custom script-->


<script src="{{asset('user/custom/registerscript.js')}}"></script>

</body>
</html>
<script>
    // phone number validate in bootstrap
    $(document).ready(function() {
  // Initialize the intl-tel-input plugin
  $("#phone").intlTelInput({
    initialCountry: "auto",
    separateDialCode: true,
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
  });
});

</script>
<script>
    /*input field disable */

   document.addEventListener('DOMContentLoaded', function () {
  // Get references to the checkbox and all input fields with the specified class
  const disableInputCheckbox = document.getElementById('disablemedicalinput');
  const inputFields = document.querySelectorAll('.inputField');

  // Add a click event listener to the checkbox
  disableInputCheckbox.addEventListener('click', function () {
    // Iterate over all input fields and toggle the disabled property based on the checkbox state
    inputFields.forEach(function (inputField) {
      inputField.disabled = !inputField.disabled;

      inputField.required = !disableInputCheckbox.checked;
      // Optionally, you can clear the input values when removing the required attribute
      if (!disableInputCheckbox.checked) {
        inputField.value = '';}
    });
  });
});
</script>
<script>
    // Function to get the current date in DD/MM/YYYY format
    function getCurrentDate() {
      const today = new Date();
      const day = today.getDate().toString().padStart(2, '0');
      const month = (today.getMonth() + 1).toString().padStart(2, '0'); // Months are zero-indexed
      const year = today.getFullYear();
      return `${day}/${month}/${year}`;
    }

    // Set the value of the input field to the current date
    document.getElementById('dateInput').value = getCurrentDate();
  </script>


<script>
    // mobile code and flag


document.addEventListener('DOMContentLoaded', function () {
  const countryDropdown1 = document.getElementById('countryCode1');
  //const flagIcon = document.getElementById('flag-icon1');
  //const countryCodeDisplay = document.getElementById('countryCodeDisplay'); // Update to the actual ID for displaying country code

  // Fetch country data from the REST Countries API
  fetch('https://restcountries.com/v3.1/all')
    .then(response => response.json())
    .then(data => {
      // Populate the dropdown with country options
      data.forEach(country => {
        const option = document.createElement('option');
       // option.value = country.cca2;
        option.value = `${country.cca2} (+${country.ccn3})`; // Use the country code as the option value
        option.textContent = `${country.cca2} (+${country.ccn3})`; // Display code and mobile code
       // option.textContent = ` (+${country.ccn3})`; // mobile code
        countryDropdown1.appendChild(option);
        var countryflag = country.cca2;
        console.log('countery:' +country.cca2);

      });
    })
    .catch(error => {
      console.error('Error fetching country data:', error);
    });

  // Event listener for dropdown change
  countryDropdown1.addEventListener('change', function () {

    changeFlagAndCode(); // Call your changeFlagAndCode function when the dropdown changes
  });

  // Function to change the flag and display the country code based on the selected country code
  function changeFlagAndCode() {
    var countryCode = $('#countryCode1').val();

    var flagIcon = $('#flag-icon1');
    //var countryCodeDisplay = $('#countryCodeDisplay'); // Update to the actual ID for displaying country code
    const iconToHide = document.getElementById('plushide');
    // Add the 'hidden' class to hide the icon
    iconToHide.classList.add('iconhidden');
    // Use the flag-icon-css library to update the country flag
    flagIcon.removeClass().addClass('input-group-text flag-icon1 flag-icon-' + countryCode.toLowerCase());

    // Display the country code
   // countryCodeDisplay.text(countryCode);

}
});

//coutry name and flag change api
document.addEventListener('DOMContentLoaded', function () {
    const countryDropdown = document.getElementById('countryDropdown');

    // Fetch country data from the REST Countries API
    fetch('https://restcountries.com/v3.1/all')
      .then(response => response.json())
      .then(data => {
        // Populate the dropdown with country options
        data.forEach(country => {
          const option = new Option(`${country.name.common} (${country.cca2})`, country.cca2);
          option.value = `${country.cca2} (${country.name.common})`;
          countryDropdown.appendChild(option);
        });
      })
      .catch(error => {
        console.error('Error fetching country data:', error);
      });

    // Event listener for dropdown change
    countryDropdown.addEventListener('change', function () {
      changeFlag(); // Call your changeFlag function when the dropdown changes
    });

      function changeFlag() {
          var countryCodes = $('#countryDropdown').val();
          var flagIcons = $('#flag-icon2');
          const iconToHide1 = document.getElementById('plushide1');
      // Add the 'hidden' class to hide the icon
      iconToHide1.classList.add('iconhidden');
          // Use the flag-icon-css library to update the country flag
          flagIcons.removeClass().addClass('input-group-text flag-icon2 flag-icon-' + countryCodes.toLowerCase());
      }
      });


</script>

<script>
    //bank country flag change

$(document).ready(function () {
      const bankcountry = $('#countryCode2');
      const flagIconsbank = $('#flag-icon3');
      const hideglobe = $('#plushide2');

      // Fetch country data from the REST Countries API
      fetch('https://restcountries.com/v3.1/all')
        .then(response => response.json())
        .then(data => {
          // Populate the dropdown with country options
          data.forEach(country => {
            const option = new Option(`${country.name.common} (${country.cca2})`, country.cca2);
            option.value = country.cca2; // Use the country code as the option value

            bankcountry.append(option);
          });
        })
        .catch(error => {
          console.error('Error fetching country data:', error);
        });

      // Event listener for dropdown change
      bankcountry.on('change', function () {
        changeFlag3(); // Call your changeFlag3 function when the dropdown changes
      });

      function changeFlag3() {
        var countryCode = bankcountry.val();
        var flagIcon = $('#flag-icon3');
        // Add the 'hidden' class to hide the icon
        hideglobe.addClass('iconhidden');
       // Use the flag-icon-css library to update the country flag
       flagIcon.removeClass().addClass('input-group-text flag-icon3 flag-icon-' + countryCode.toLowerCase());
      }
    });


</script>





<script>
    //model
//image upload

$(document).ready(function(){

/*function readURL(input)
{
      if(input.files && input.files[0])
      {
        var reader = new FileReader();

        reader.onload = function(event) {
              $('#uploaded_image').attr('src', event.target.result);
              $('#uploaded_image').removeClass('img-circle');
              $('#upload_image').after('<div align="center" id="crop_button_area"><br /><button type="button" class="btn btn-primary" id="crop">Crop</button></div>')
        }
        reader.readAsDataURL(input.files[0]); // convert to base64 string
      }
  }

  $("#upload_image").change(function() {
      readURL(this);
      var image = document.getElementById("uploaded_image");
      cropper = new Cropper(image, {
        aspectRatio: 1,
        viewMode: 3,
        preview: '.preview'
    });
});*/


var $modal = $('#modal');
var image = document.getElementById('sample_image');

var cropper;

//$("body").on("change", ".image", function(e){
$('#upload_image').change(function(event){
    var files = event.target.files;
    var done = function (url) {
          image.src = url;
          $modal.modal('show');

    };
    //var reader;
    //var file;
    //var url;

    if (files && files.length > 0)
    {
          /*file = files[0];
          if(URL)
          {
            done(URL.createObjectURL(file));
          }
          else if(FileReader)
          {*/
            reader = new FileReader();
            reader.onload = function (event) {
                  done(reader.result);
            };
            reader.readAsDataURL(files[0]);
          //}
    }
});

$modal.on('shown.bs.modal', function() {
    cropper = new Cropper(image, {
        aspectRatio: 1,
        viewMode: 1,
       // viewMode: 3, full width image
        preview: '.preview'
    });
}).on('hidden.bs.modal', function() {
       cropper.destroy();
       cropper = null;
});

$("#crop").click(function(){

    canvas = cropper.getCroppedCanvas({
          width: 200,
          height: 200,
    });
                    $modal.modal('hide');
                    $('#uploaded_image').attr('src', canvas.toDataURL());



});

});

</script>



<script>

    function updateMobileFlag() {
        var countryCode = $('#countryCode').val();
        var mobileNumber = $('#mobileNumber').val();
        var mobileFlag = $('#mobileFlag');

        // Use the flag-icon-css library to update the mobile number flag
        mobileFlag.removeClass().addClass('flag-icon flag-icon-' + countryCode.toLowerCase());
    }
</script>
<script>
    function changeFlagAndCode() {
        var countryCode = $('#countryCode').val();
        var flagIcon = $('#flag-icon');

        // Use the flag-icon-css library to update the country flag
        flagIcon.removeClass().addClass('input-group-text flag-icon flag-icon-' + countryCode.toLowerCase());

        // Display the country code
        $('#countryCode').attr('data-country-code', countryCode);
    }
</script>


<script>
    //bank input fields disable
    // Function to toggle the disabled property of specific input and textarea fields
    function toggleInputFields() {
      const checkbox = document.getElementById('disablebankCheckbox');
      const inputFields = document.querySelectorAll('.disable-inputs');

      inputFields.forEach(field => {
        field.disabled = checkbox.checked;
        if (checkbox.checked) {
            field.removeAttribute('required');
          field.value = ''; // Clear the value if checkbox is checked
        }
        else {
            // If checkbox is unchecked, make the input field required
           // field.setAttribute('required', 'required');
        }
      });
    }

    // Add event listener to the checkbox to toggle input and textarea fields
    document.getElementById('disablebankCheckbox').addEventListener('change', toggleInputFields);
  </script>

<script>
    const calendarIcon = document.getElementById('calendarIcon');
    const calendarPopup = document.getElementById('calendarPopup');
    const calendar = document.querySelector('.calendar');

    // Function to generate a calendar for the current year
    function generateYearCalendar() {
      const currentDate = new Date();
      const currentYear = currentDate.getFullYear();

      for (let month = 0; month < 12; month++) {
        const daysInMonth = new Date(currentYear, month + 1, 0).getDate();

        for (let day = 1; day <= daysInMonth; day++) {
          const calendarDay = document.createElement('li');
          calendarDay.textContent = day;
          calendarDay.classList.add(getMonthClass(month));
          calendar.appendChild(calendarDay);
        }
      }
    }

    // Show or hide the calendar popup
    calendarIcon.addEventListener('click', function () {
      calendarPopup.style.display = calendarPopup.style.display === 'block' ? 'none' : 'block';
    });

    // Generate the year calendar on load
    generateYearCalendar();

    // Helper function to get the month-specific class
    function getMonthClass(month) {
      const monthNames = ['january', 'february', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december'];
      return monthNames[month];
    }
  </script>
