<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Settings - Mobile Phone Shop Management System</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
        }

        .header {
            background-color: #343a40;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .header h1 {
            margin: 0 0 10px 0;
        }

        .container {
            width: 90%;
            max-width: 1000px;
            margin: 30px auto;
        }

        .box {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .back-btn {
            display: inline-block;
            margin-top: 20px;
            background-color: #343a40;
            color: white;
            padding: 12px 20px;
            text-decoration: none;
            border-radius: 6px;
        }

        .back-btn:hover {
            background-color: #23272b;
        }
    </style>
</head>

<body>

    <div class="header">
        <h1>Mobile Phone Shop Management System</h1>
        <p>Settings</p>
    </div>

    <div class="container">

        <div class="box">

            <h2>System Settings</h2>

            <p>
                System settings will be managed here.
            </p>

            <a href="{{ route('dashboard') }}" class="back-btn">
                ← Back to Dashboard
            </a>

        </div>

    </div>

</body>
</html>