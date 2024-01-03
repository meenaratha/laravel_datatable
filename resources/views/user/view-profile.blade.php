<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>User Profile Page</title>
        <link rel="stylesheet" href="{{asset('user/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('user/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
        <link rel="stylesheet" href="{{asset('user/assets/vendors/css/vendor.bundle.base.css')}}">
        <link rel="stylesheet" href="{{asset('user/assets/vendors/select2/select2.min.css')}}" />
        <link rel="stylesheet" href="{{asset('user/assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{asset('user/assets/css/demo_1/style.css')}}" />
        <link rel="shortcut icon" href="../../../assets/images/favicon.png" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
                      <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                              <div class="profile-container">
                                <img src="/storage/{{$detail->image}}" alt="Profile Image" id="profileImage" class="profile-image rounded-circle mt-3">
                                <i class="fas fa-camera camera-icon" id="cameraIcon"></i>
                                <h4 id="username" class="mt-3 text-left">User Name</h4>
                              </div>
                            </div>
                          </div>
                      <div class="row">
                        <div class="col-md-12">
                          <nav class="navbar navbar-expand-lg navbar-light bg-white">
                            <div class="collapse navbar-collapse" id="navbarNav">
                              <ul class="navbar-nav">
                                <li class="nav-item">
                                  <a class="nav-link " href="#" onclick="showProfile()">Profile Details</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#" onclick="showBankDetails()">Bank Details</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#" onclick="showLoginDetails()">Login Details</a>
                                </li>
                              </ul>
                            </div>
                          </nav>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="details-container">
                            <div class="profile-container" id="profileDetails">
                              <!-- Default: Profile Details -->
                              <h4>Profile Details</h4>
                              <table class="table">
                                <tbody>
                                  <tr>
                                    <th scope="row">Name</th>
                                    <td>User Name</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Email</th>
                                    <td>user@example.com</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Date of Birth</th>
                                    <td>01/01/1990</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            <div class="profile-container d-none" id="bankDetails">
                              <!-- Bank Details -->
                              <h4>Bank Details</h4>
                              <table class="table">
                                <tbody>
                                  <tr>
                                    <th scope="row">Account Number</th>
                                    <td>1234567890</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Bank Name</th>
                                    <td>Bank XYZ</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Holder Name</th>
                                    <td>User Name</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            <div class="profile-container d-none" id="loginDetails">
                              <!-- Login Details -->
                              <h4>Login Details</h4>
                              <table class="table">
                                <tbody>
                                  <tr>
                                    <th scope="row">Email ID</th>
                                    <td>user@example.com</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
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
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script>
          document.getElementById('cameraIcon').addEventListener('click', function() {
            document.getElementById('profileImage').src = 'path_to_selected_image.jpg';
          });

          function showProfile() {
            document.getElementById('profileDetails').classList.remove('d-none');
            document.getElementById('bankDetails').classList.add('d-none');
            document.getElementById('loginDetails').classList.add('d-none');
          }

          function showBankDetails() {
            document.getElementById('profileDetails').classList.add('d-none');
            document.getElementById('bankDetails').classList.remove('d-none');
            document.getElementById('loginDetails').classList.add('d-none');
          }

          function showLoginDetails() {
            document.getElementById('profileDetails').classList.add('d-none');
            document.getElementById('bankDetails').classList.add('d-none');
            document.getElementById('loginDetails').classList.remove('d-none');
          }
        </script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style>
          .profile-container {
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            position: relative;
          }
          #profileImage{
            height: 100px;
            width: 100px;
          }
          .camera-icon {
            position: absolute;
            bottom: 10px; /* Adjust bottom position */
            color: #888; /* Icon color */
            cursor: pointer;
          }
          .nav-link.active {
            color: blue !important;
          }
          .details-container {
            margin-top: 20px;
          }
          .profile-container {
            background-color: white;
            border: 1px solid black;
            border-radius: 5px;
            padding: 10px;
          }
        </style>
    </body>
</html>