<!DOCTYPE html>
<html>
<head>
    <title>Reports</title>
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
    <h1>Reports</h1>

    <p>Welcome to the Reports page.</p>

    <p>Here you can view reports about your products, orders, and users.</p>

    <a href="{{ route('dashboard') }}" class="back">
        Back to Dashboard
    </a>
</div>

</body>
</html>

