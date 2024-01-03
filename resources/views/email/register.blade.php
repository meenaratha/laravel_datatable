<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #1F2032;
            color: #FFE5C1;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .email-container {
            background-color: #F9977B;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            width: 80%;
            max-width: 400px;
        }
        .logo {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }
        .thank-you-image {
            width: 200px;
            height: 120px;
            margin: 20px auto;
        }
        .social-icons {
            margin-top: 20px;
        }
        .social-icons a {
            margin: 0 10px;
            text-decoration: none;
            color: #FFE5C1;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <img src="{{ $message->embed(public_path('email/logo.png')) }}" alt="Company Logo" class="logo">
        <h2>Smiling Buddha</h2>
        <p>Thank you, {{$data2['first_name']}} {{$data2['last_name']}}, for choosing Smiling Buddha for your cryptocurrency stock registration.</p>
        <p>Your User ID is: <strong>{{$data2['user_id']}}</strong></p>
        {{-- <p>Date of registration: <strong>{{$data2['date']}}</strong>, Time: <strong>{{$data2['time']}}</strong></p> --}}
        <p>Your email verification code is: <strong>{{$data2['rand']}}</strong></p>
        <img src="{{ $message->embed(public_path('email/thankyou.png')) }}" alt="Thank You" class="thank-you-image">
        <div class="social-icons">
            <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
        </div>        
        <p>If you have any questions or need assistance, feel free to contact us. Welcome to Smiling Buddha!</p>
    </div>
</body>
</html>

