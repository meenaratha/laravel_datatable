<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flag-icon-css@3.5.0/css/flag-icon.min.css">
    <style>
        body {
            /* background-color: #ff0000; */
            background-image: url("https://img.freepik.com/free-vector/gradient-stock-market-concept_23-2149166910.jpg") ;
            position: sticky;
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .custom-container {
            max-width: 800px; 
            margin: auto; 
            padding: 20px; 
            /* From https://css.glass */
            background: rgba(235, 236, 238, 0.3);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(6.9px);
            -webkit-backdrop-filter: blur(6.9px);
        }
        input[type="text"],
        input[type="email"],
        input[type="file"],
        .btn-primary {
            background-color: #BEF0FF; 
            border-color: #005ACD; 
            color: #005ACD; 
        }
        .btn-primary:hover,
        .btn-primary:focus {
            background-color: #0093CB; 
            border-color: #0093CB; 
            color: #fff;
        }
        h2 {
            color: #005ACD; 
        }
    </style>
</head>
<body>
    <div class="container custom-container" style="top: 20px;">
        <h2>Registration Form</h2><br>
        <h5>Personal Details</h5>
        <form action="/add-user" method="POST" enctype="multipart/form-data" style="margin-top: 20px;">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" id="firstName" name="first_name" placeholder="Enter First Name" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" id="lastName" name="last_name" placeholder="Enter Last Name" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="gender" >Gender  </label>
                        <select id="gender" class="form-control" name="gender" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="date_of_borth">Date Of Birth</label>
                        <input type="date" class="form-control" id="date_of_borth" name="date_of_birth" placeholder="Enter Date Of Birth" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nric_number">NRIC Number</label>
                        <input type="text" class="form-control" id="nric_number" name="nric_number" placeholder="Enter NRIC Number" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="passport_number">Passport Number</label>
                        <input type="text" class="form-control" id="passport_number" name="passport_number" placeholder="Enter Passport Number" required>
                    </div>
                </div>
            </div>
            <div class="row">        
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="short_name">Short Name</label>
                        <input type="text" class="form-control" id="short_name" name="short_name" placeholder="Enter Short Name" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="race">Race</label>
                        <input type="text" class="form-control" id="race" name="race" placeholder="Enter Race" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="address1">Address 1</label>
                        <input type="text" class="form-control" id="address1" name="address1" placeholder="Enter Address 1" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="address2">Address 2</label>
                        <input type="text" class="form-control" id="address2" name="address2" placeholder="Enter Address 2" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="Enter City">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="state">State</label>
                        <input type="text" class="form-control" id="state" name="state" placeholder="Enter State">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="country">Country</label>
                        <select id="country" class="form-control" name="country">
                            @foreach ($countries as $country)
                                <option value="{{$country->name}}">{{$country->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="postal_code">Postal Code</label>
                        <input type="text" class="form-control" id="postal_code" name="postal_code" placeholder="Enter ostal Code">
                    </div>
                </div>
            </div>  
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="country_code">Country Code</label>
                        <select id="country_code" class="form-control" name="country_code">
                            @foreach ($countries as $country)
                                <option value="{{ $country->phone }}">
                                    {{ $country->name }} +{{ $country->phone }}
                                    <i class="{{ $country->flag }}"></i>
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="mobile_number">Mobile Number</label>
                        <input type="text" class="form-control" id="mobile_number" name="mobile_number" placeholder="Enter Mobile Number">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="employment_status">Employement Status</label>
                        <select id="employment_status" class="form-control" name="employment_status">
                            <option value="Company">Company</option>
                            <option value="Self Employed">Self Employed</option>
                            <option value="Trader">Trader</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="religion">Religion</label>
                        <select id="religion" class="form-control" name="religion">
                            <option value="">India</option>
                            <option value="">USA</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="address1">Profile Photo</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="validatedCustomFile" name="image" required>
                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                </div>
                <p class="mt-2">Selected File: <span id="fileInfo"></span></p>
            </div><br>
            <h5>Login Details</h5>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="Enter Email">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Enter Confirm Password">
                    </div>
                </div>
            </div><br>
            <h5>User Details</h5>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="role">Role</label>
                        <select name="role" id="role" class="form-control">
                            <option value="3">Trail User</option>
                            <option value="2">Basic User</option>
                            <option value="1">Premium User</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="registering_date">Registering Date</label>
                        <input type="text" readonly name="registering_date" class="form-control" id="registering_date">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="designation">Designation</label>
                        <input type="text" name="designation" class="form-control" id="designation" placeholder="Enter Designation">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="industry">Industry</label>
                        <input type="text" name="industry" class="form-control" id="industry" placeholder="Enter Industry">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="salary_range">Salary Range</label>
                        <input type="text" name="salary_range" class="form-control" id="salary_range" placeholder="Enter Salary Range">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="qualification">Qualification</label>
                        <select name="qualification" id="qualification" class="form-control">
                            <option value="">India</option>
                            <option value="">USA</option>
                        </select>
                    </div>
                </div>
            </div><br>
            <h5>Social Media</h5>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="facebook">Facebook</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend"><i class="fab fa-facebook"></i></span>
                        </div>
                        <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="linkedIn">LinkedIn</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend"><i class="fab fa-linkedin"></i></span>
                        </div>
                        <input type="text" class="form-control" id="linkedIn" name="linkedIn" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="twitter">Twitter X</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend"><i class="fab fa-twitter"></i></span>
                        </div>
                        <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                    </div>
                </div>
            </div><br>
            <h5>Bank Details</h5>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="bank_name">Bank Name</label>
                        <input type="text" name="bank_name" id="bank_name" class="form-control" placeholder="Enter Bank Name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account_holder">Account Holder</label>
                        <input type="text" name="account_holder" id="account_holder" class="form-control" placeholder="Enter Account Holder" >
                    </div>        
                </div>
            </div>
            <div class="row">        
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account_number">Account Number</label>
                        <input type="text" name="account_number" id="account_number" class="form-control" placeholder="Enter Account Number">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Re-AccountNumber">Re-Account Number</label>
                        <input type="text" name="re_account_number" class="form-control" id="Re-AccountNumber" placeholder="Enter Re-Account Number">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="swift_code">Swift Code</label>
                        <input type="text" name="swift_code" id="swift_code" class="form-control" placeholder="Enter Swift Code">
                    </div>
                </div>        
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="bank_branch">Bank Branch</label>
                        <input type="text" name="bank_branch" class="form-control" id="bank_branch" placeholder="Enter Bank Branch">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="bank_address_1">Address 1</label>
                        <input type="text" name="bank_address_1" id="bank_address_1" class="form-control" placeholder="Enter Address 1">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="bank_address_2">Address 2</label>
                        <input type="text" name="bank_address_2" class="form-control" id="bank_address_2" placeholder="Enter Address 2">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="bank_city">City</label>
                        <input type="text" name="bank_city" id="bank_city" class="form-control" placeholder="Enter City">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="bank_postal_code">ZIP/Postal Code</label>
                        <input type="text" name="bank_postal_code" class="form-control" id="bank_postal_code" placeholder="Enter Postal Code">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="bank_state">State/Province</label>
                        <input type="text" name="bank_state" id="bank_state" class="form-control" placeholder="Enter State/Province">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="bank_country">Country</label>
                        <select name="bank_country" id="bank_country" class="form-control">
                            <option value="India">India</option>
                        </select>
                    </div>
                </div>
            </div>
            <input type="hidden" name="online_list" value="<?php rand(100, 999) ?>">
            <button type="submit" class="btn btn-primary form-control">Submit</button>
        </form>
    </div>
    
    <script>
        document.getElementById('validatedCustomFile').addEventListener('change', function (e) {
            const fileName = document.getElementById("validatedCustomFile").files[0].name;
            document.getElementById('fileInfo').innerText = fileName;
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
        let registeringDateInput = document.getElementById('registering_date');
        let currentDate = new Date();
        let day = currentDate.getDate().toString().padStart(2, '0');
        let month = (currentDate.getMonth() + 1).toString().padStart(2, '0');
        let year = currentDate.getFullYear();
        let formattedDate = `${day}/${month}/${year}`;
        registeringDateInput.value = formattedDate;
    </script>
    
</body>
</html>


