<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Access Denied - Mobile Phone Shop</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #f4f6f9;
        }

        .box {
            width: 450px;
            max-width: 90%;
            background: white;
            padding: 40px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.10);
        }

        .icon {
            font-size: 60px;
            margin-bottom: 20px;
        }

        h1 {
            color: #dc2626;
            font-size: 30px;
            margin-bottom: 15px;
        }

        p {
            color: #6b7280;
            line-height: 1.6;
            margin-bottom: 25px;
        }

        .logout {
            width: 100%;
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            background: #dc2626;
            color: white;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
        }

        .logout:hover {
            background: #b91c1c;
        }
    </style>
</head>

<body>

    <div class="box">

        <div class="icon">
            🚫
        </div>

        <h1>
            Access Denied
        </h1>

        <p>
            You do not have permission to access this page.
        </p>

        <form method="POST" action="{{ route('logout') }}">

            @csrf

            <button type="submit" class="logout">
                🚪 Logout
            </button>

        </form>

    </div>

</body>
</html>