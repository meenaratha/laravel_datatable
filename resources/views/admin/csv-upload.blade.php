<!DOCTYPE html>
<html lang="en">
    <head>
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
            @include('admin.partials._sidebar')
            <div class="container-fluid page-body-wrapper">
                @include('admin.partials._navbar')
                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="row">
                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card">
                                    <div id="success-message" style="display: none;" class="alert alert-success"></div>
                                    <div class="card-header">Upload CSV</div>
                                    <div class="card-body">
                                        <form id="csvUploadForm" action="/handleCSVUpload" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row ">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label for="">Select Table</label>
                                                        <select id="table_name" class="js-example-basic-single form-control" style="width: 50%;" name="table_name">
                                                            <option value="" selected disabled>Select Table</option>
                                                            @foreach($table as  $tableData)
                                                            <option value="{{ $tableData }}">{{ $tableData }}</option>
                                                            @endforeach
                                                        </select>   
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row ">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label for="">Choose CSV File</label>
                                                        <input type="file" class="form-control" id="csvFile" name="csvFile">   
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Upload</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @include('admin.partials._footer')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script>
        $(document).ready(function () {
            $('#csvUploadForm').submit(function (e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    type: 'POST',
                    url: '/handleCSVUpload',
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        $('#success-message').html(JSON.stringify(response)).show();
                        console.log(response);
                    },
                    error: function (error) {
                        console.log(error);
                    }
                });
            });
        });
    </script>
</html>