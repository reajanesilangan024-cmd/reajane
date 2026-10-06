<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details - Mobile Phone Shop</title>
</head>

<body>

    <h1>Mobile Phone Shop Management System</h1>

    <h2>Order Details</h2>

    <p><strong>Order ID:</strong> {{ $order->id }}</p>

    <p><strong>Customer:</strong> {{ $order->customer }}</p>

    <p><strong>Product:</strong> {{ $order->product }}</p>

    <p><strong>Quantity:</strong> {{ $order->quantity }}</p>

    <p><strong>Status:</strong> {{ $order->status }}</p>

    <br>

    <a href="{{ route('orders.index') }}">
        ← Back to Orders
    </a>

</body>

</html>

