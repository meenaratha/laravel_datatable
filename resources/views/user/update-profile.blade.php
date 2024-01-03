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
                        <div class="row">
                            <div class="container mt-4">
                                <div class="row">
                                    <div id="success-message" style="display: none;" class="alert alert-success">
                                    </div>
                                    <div class="container">
                                        <form action="/user-update" method="POST" id="user-update">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="firstName">First Name</label>
                                                        <input type="text" class="form-control" id="first_name" name="first_name" value="{{$details->first_name}}" placeholder="Enter First Name" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="firstName">Last Name</label>
                                                        <input type="text" class="form-control" id="first_last" name="last_name" value="{{$details->last_name}}" placeholder="Enter First Name" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="firstName">Date Of Birth</label>
                                                        <input type="date" class="form-control" id="first_last" name="date_of_birth" value="{{$details->date_of_birth}}" placeholder="Enter First Name" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary form-control">Save</button>
                                        </form>
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