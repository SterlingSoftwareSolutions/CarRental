<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
        }

        h1 {
            color: #333;
        }

        p {
            font-size: 16px;
            color: #555;
        }

        .footer {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            width: 80%
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to AutoMobex Car Rental Platform!</h1>
        <p>Dear {{ $user->first_name }},</p>
        <p>Welcome to AutoMobex Car Rental Platform! We're thrilled to have you on board. Thank you for choosing AutoMobex Car Rental Platform. We're here to help you every step of the way.</p>
        <p>Your registered email: {{$user->email}}</p>
    </div>
    <div class="footer">
        Best regards, The AutoMobex Team
    </div>
</body>
</html>
