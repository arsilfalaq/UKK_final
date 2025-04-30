<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        
        h1 {
            text-align: center;
            color: #333;
            margin-top: 30px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 40px;
        }

        p {
            font-size: 16px;
            color: #555;
            line-height: 1.6;
        }

        .profile-info {
            margin-bottom: 20px;
        }

        .profile-info strong {
            color: #333;
        }

        a {
            display: inline-block;
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
            margin-top: 20px;
        }

        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Profile of {{ $user->name }}</h1>
        
        <div class="profile-info">
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Joined on:</strong> {{ $user->created_at->format('d M Y') }}</p>
        </div>

        <!-- Add other user info as needed -->

        <a href="{{ route('user.dashboard') }}">Back to Dashboard</a>
    </div>
</body>
</html>
