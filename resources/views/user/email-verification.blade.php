<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Email Verification</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f9f9f9; 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            margin-top: 80px; 
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }
        h2 {
            color: #333; 
            text-align: center;
            margin-bottom: 20px;
        }
        p {
            color: #555; 
            line-height: 1.6;
        }
        .btn-success {
            background-color: #28a745; 
            border-color: #28a745; 
            margin-top: 20px; 
        }  
        .btn-success:hover {
            background-color: #218838;
            border-color: #218838;
        }
        #emailVerificationForm {
            margin-top: 20px;
        }
        #verificationStatus {
            margin-top: 20px;
            text-align: center;
            color: #dc3545; 
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Email Verification</h2>
                <p>Welcome {{$detail->first_name}} {{$detail->last_name}},</p>
                <p>First, verify your Email ID to access your dashboard.</p>
                <p>OTP has already been sent to your registered email ID:</p>
                <p><strong>Registered email ID:</strong> {{$email}}</p>
                @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif
                <a href="/user/logout"><button type="button" class="btn btn-success">Back</button></a>
                <form id="emailVerificationForm" method="POST" action="/user-verification">
                    @csrf
                    <div class="form-group">
                        <label for="inputOTP">Enter OTP</label>
                        <input type="password" class="form-control" id="inputOTP" name="otp" placeholder="Enter OTP" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Verify OTP</button>
                    </div>
                </form>
                <div id="verificationStatus"></div>
            </div>
        </div>
    </div>
</body>
</html>
