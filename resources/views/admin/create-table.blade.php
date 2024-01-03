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
                                    @if(session('success'))
                                    <div class="alert alert-success">
                                    {{ session('success') }}
                                    </div>
                                    @endif                                    
                                    @if(session('error'))
                                    <div class="alert alert-danger">
                                    {{ session('error') }}
                                    </div>
                                    @endif                                    
                                    <div class="card-header">Create New Exchange</div>
                                    <div class="card-body">
                                        <form action="/create-new-exchange" method="POST" id="exchangeForm">
                                            @csrf
                                            <div class="row ">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label for="">Exchange Name</label>
                                                        <input type="text" class="form-control" id="exchange" name="exchange_name">   
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Create</button>
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
    $('#exchangeForm').submit(function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        var form = $(this); // Reference to the form

        $.ajax({
            type: 'POST',
            url: '/create-new-exchange',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (response) {
                // Create success message element
                var successMessage = $('<div class="alert alert-success">Exchange created successfully</div>');
                
                // Prepend the success message before the form
                form.before(successMessage);

                // Reset the form after successful submission
                form[0].reset();

                // Hide the success message after 3 seconds (adjust as needed)
                setTimeout(function() {
                    successMessage.fadeOut('slow', function() {
                        $(this).remove(); // Remove the success message
                    });
                }, 3000);
            },
            error: function (error) {
                console.log(error);
            }
        });
    });
});

    </script>
</html>