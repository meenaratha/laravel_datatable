<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Additional styles can be added here */
    body {
      background-color: #f8f9fa;
    }
    .login-container {
      margin-top: 100px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center login-container">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title text-center">Admin Login</h3>
          </div>
          <div class="card-body">
            @if(session('error'))
            <div class="alert alert-danger">
              {{ session('error') }}
            </div>
            @endif
            @if(session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
            @endif
            <div id="loginForm">
            <form action="/authenticate-admin" method="POST">
                @csrf
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="email" required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
              </div>
              <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
            <button type="button" class="btn btn-link" id="forgotPasswordBtn">Forgot Password?</button>
          </div>
            <div id="forgotPasswordForm">
              <p class="text-center">Forgot your password?</p>
              <form action="/forgot-password-admin" method="POST">
                @csrf
                <div class="form-group">
                  <label for="forgotEmail">Enter your email</label>
                  <input type="email" class="form-control" id="forgotEmail" name="email" required>
                </div>
                <button type="submit" class="btn btn-secondary btn-block">Reset Password</button>
                <button type="button" class="btn btn-link" id="cancelForgotPassword">Cancel</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script>
  $(document).ready(function() {
    // Initially, hide the forgot password form
    $("#forgotPasswordForm").hide();

    // Show the forgot password form and hide the login form when "Forgot Password" button is clicked
    $("#forgotPasswordBtn").click(function() {
      $("#loginForm").hide();
      $("#forgotPasswordForm").show();
    });

    // Show the login form and hide the forgot password form when "Cancel" button is clicked
    $("#cancelForgotPassword").click(function() {
      $("#forgotPasswordForm").hide();
      $("#loginForm").show();
    });
  });
</script>

</body>
</html>
