<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
      @include('admin.partials._sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->
        @include('admin.partials._navbar')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Admin Personal Details</h6>
                            <form class="forms-sample">
                                <div class="form-group">
                                    <label for="exampleInputName1">First Name</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="first_name" placeholder="First Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Last Name</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="last_name" placeholder="Last Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectGender">Gender</label>
                                    <select class="form-control" id="exampleSelectGender" name="gender">
                                        <option value="Male">Male</option>
                                        <option value="Femail">Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Date Of Birth</label>
                                    <input type="date" class="form-control " id="exampleInputName1" name="date_of_birth">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Email</label>
                                    <input type="date" class="form-control " id="exampleInputName1" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">contact Number</label>
                                    <input type="text" class="form-control " id="exampleInputName1" name="contact_number">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Password</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Image</label>
                                    <input type="file" class="form-control" id="exampleInputName1" name="image" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Passport Number</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="passportNumber" placeholder="Passport Number">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Short Name</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="shortName" placeholder="Short Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectGender">Race</label>
                                    <select class="form-control" id="exampleSelectGender" name="race">
                                        <option value="Male">select your value</option>
                                        <option value="Femail">Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectGender">Relegion</label>
                                    <select class="form-control" id="exampleSelectGender" name="relegion">
                                        <option value="Male">select your relegion</option>
                                        <option value="Femail">Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputCity1">Address 1</label>
                                    <input type="text" class="form-control" id="exampleInputCity1" name="address1" placeholder="Address1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputCity1">Address 2</label>
                                    <input type="text" class="form-control" id="exampleInputCity1" name="address2" placeholder="Address 2">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputCity1">City</label>
                                    <input type="text" class="form-control" id="exampleInputCity1" name="city" placeholder="City">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputCity1">ZIP/Postal Code</label>
                                    <input type="text" class="form-control" id="exampleInputCity1" placeholder="ZIP/Postal Code">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputCity1">State/Provice</label>
                                    <input type="text" class="form-control" id="exampleInputCity1" placeholder="State/Provice">
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectGender">Country</label>
                                    <select class="form-control" id="exampleSelectGender" name="relegion">
                                        <option value="Male">select your country</option>
                                        <option value="Femail">Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectGender">Country Code</label>
                                    <select class="form-control" id="countyCode" name="countryCode">
                                        <option value="">select your country code</option>
                                        {{-- Values append here --}}
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Contact Number</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="showCountryCode">Code</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Contact Number" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectGender">Employee Status</label>
                                    <select class="form-control" id="exampleSelectGender" name="relegion">
                                        <option value="">select your status</option>
                                        <option value="self">self</option>
                                    </select>
                                </div>
                                
                                
                                {{-- <div class="form-group">
                                    <label>File upload</label>
                                    <input type="file" name="image" class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                        </span>
                                    </div>
                                </div> --}}
                                <div class="form-group">
                                    <label for="exampleTextarea1">Textarea</label>
                                    <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                                <button class="btn btn-dark">Cancel</button>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('admin/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('admin/assets/vendors/select2/select2.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendors/typeahead.js/typeahead.bundle.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('admin/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('admin/assets/js/misc.js')}}"></script>
    <script src="{{asset('admin/assets/js/settings.js')}}"></script>
    <script src="{{asset('admin/assets/js/todolist.js')}}"></script>
    <script src="{{asset('admin/assets/js/file-upload.js')}}"></script>
    <script src="{{asset('admin/assets/js/typeahead.js')}}"></script>
    <script src="{{asset('admin/assets/js/select2.js')}}"></script>
  </body>
</html>