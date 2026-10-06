<!DOCTYPE html>
<html>
<head>
    <title>Settings</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 40px;
        }

        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            max-width: 900px;
            margin: auto;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        h1 {
            color: #333;
        }

        .setting-box {
            padding: 15px;
            margin-top: 15px;
            background: #f8f9fa;
            border-radius: 5px;
        }

        .back {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 18px;
            background: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Settings</h1>

    <p>Manage your system settings here.</p>

    <div class="setting-box">
        <strong>System Name</strong>
        <p>Mobile Phone Shop Management System</p>
    </div>

    <div class="setting-box">
        <strong>Account Settings</strong>
        <p>Manage your account information.</p>
    </div>

    <div class="setting-box">
        <strong>System Preferences</strong>
        <p>Manage your system preferences.</p>
    </div>

    <a href="{{ route('dashboard') }}" class="back">
        Back to Dashboard
    </a>

</div>

</body>
</html>

