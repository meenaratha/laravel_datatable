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
    <style>
        .admin-profile img {
            width: 75px;
            height: 75px;
            border-radius: 50%;
            object-fit: cover;
        }
        .admin-details-table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        .admin-details-table th,
        .admin-details-table td {
            padding: 12px;
            border: 1px solid #212129;
            color: #ffffff;
        }
        .admin-details-table th {
            background-color: #40445a;
            font-weight: bold;
        }
        .admin-details-table tr:nth-child(even) {
            background-color: #3d3e51;
        }
        .admin-details-table tr:nth-child(odd) {
            background-color: #323949;
        }
    </style>
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
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Admin Profile</h4>
                                <div class="admin-profile">
                                    <img src="/storage/{{$data->image}}" alt="Admin Avatar">
                                    <h5 style=" margin-top:15px;">{{$data->first_name}} {{$admin->last_name}}</h5>
                                    <p style="">Admin ID: {{$data->admin_id}}</p>
                                </div>
                                <form action="/edit-admin/{{$data->admin_id}}" method="POST">
                                    @csrf
                                    <table class="admin-details-table">
                                        <tr>
                                            <th>Field</th>
                                            <th>Details</th>
                                        </tr>
                                        <tr>
                                            <td>First Name</td>
                                            <td><input type="text" name="first_name" class="form-control" value="{{$data->first_name}}" id=""></td>
                                        </tr>
                                        <tr>
                                            <td>Last Name</td>
                                            <td><input type="text" name="last_name" class="form-control" value="{{$data->last_name}}" id=""></td>
                                        </tr>
                                        <tr>
                                            <td>Email ID</td>
                                            <td>{{$admin->email}}</td>
                                        </tr>
                                    </table><br>
                                    <button class="btn btn-success"  type="submit">Save</button>
                                </form>
                            </div>
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