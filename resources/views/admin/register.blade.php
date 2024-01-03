<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Registration</title>
  <style>
    .container{
        max-width: 600px;
    }
  </style>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container mt-5">
    <h2>Admin Registration</h2>
    <form action="/add-admin" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="firstName">First Name</label>
          <input type="text" class="form-control" name="first_name" id="firstName" placeholder="Enter First Name">
        </div>
        <div class="form-group col-md-6">
          <label for="lastName">Last Name</label>
          <input type="text" class="form-control" name="last_name" id="lastName" placeholder="Enter Last Name">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="email">Email</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
        </div>
        <div class="form-group col-md-6">
          <label for="contactNumber">Contact Number</label>
          <input type="tel" class="form-control" name="contact_number" id="contactNumber" placeholder="Enter Contact Number">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="gender">Gender</label>
          <select class="form-control" id="gender" name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="dob">Date of Birth</label>
          <input type="date" class="form-control" id="dob" name="date_of_birth">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="password">Password</label>
          <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
        </div>
        <div class="form-group col-md-6">
          <label for="image">Image</label>
          <input type="file" class="form-control-file" name="image" id="image">
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Register</button>
    </form>
  </div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>
