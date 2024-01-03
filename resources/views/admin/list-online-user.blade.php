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
                            <h4 class="card-title">Basic User List</h4>
                            <button id="nextBtn" class="btn btn-success">Next</button>
                            <button id="prevBtn" class="btn btn-secondary" style="display: none;">Previous</button>
                            <div class="table-responsive">
                                <table class="table table-dark text-center">
                                    <thead>
                                        <tr>
                                            <th> # </th>
                                            <th> User ID </th>
                                            <th> Eamil ID </th>
                                            <th> View </th>
                                            <th> Edit </th>
                                            <th> Delete </th>
                                            <th> Block </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @if(!empty($uses->online_list))
                                        @foreach($users as $key => $user)
                                        <tr>
                                            <td> {{ $key + 1 + ($currentPage - 1) * 10 }} </td>
                                            <td> {{$user->user_id}} </td>
                                            <td> {{$user->email}} </td>
                                            <td> <a href="/admin/adminView/{{$admin->admin_id}}"><button class="btn btn-primary"><i class="mdi mdi-eye"></i></button></a> </td>
                                            <td> <a href="/admin/adminEdit/{{$admin->admin_id}}"><button class="btn btn-info"><i class="mdi mdi-table-edit"></i></button></a> </td>
                                            <td> <button class="btn btn-dark" onclick="confirmDelete({{$admin->adminId}})"><i class="mdi mdi-delete"></i></button> </td>
                                            <td>
                                                @if(empty($user->block))
                                                    <a href="/admin/adminBlock/{{$admin->admin_id}}"><button class="btn btn-danger"><i class="mdi mdi-account-off"></i></button></a> 
                                                @else
                                                    <a href="/admin/adminUnblock/{{$admin->admin_id}}"><button class="btn btn-success"><i class="mdi mdi-account-check"></i></button></a>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
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