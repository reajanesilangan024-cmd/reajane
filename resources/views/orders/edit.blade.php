<!DOCTYPE html>
<html>
<head>
    <title>Edit Order - Mobile Phone Shop</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f3f6;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 700px;
            margin: auto;
            background: white;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        }

        .back {
            display: inline-block;
            margin-bottom: 35px;
            color: #2563eb;
            font-size: 18px;
        }

        h1 {
            font-size: 40px;
            margin-bottom: 30px;
        }

        label {
            display: block;
            font-size: 18px;
            margin-top: 20px;
            margin-bottom: 8px;
        }

        input,
        select {
            width: 100%;
            box-sizing: border-box;
            padding: 14px;
            font-size: 16px;
            border: 1px solid #999;
            border-radius: 5px;
        }

        button {
            margin-top: 30px;
            padding: 14px 25px;
            background: #2563eb;
            color: white;
            border: none;
            border-radius: 7px;
            font-size: 17px;
            cursor: pointer;
        }

        button:hover {
            background: #1d4ed8;
        }
    </style>
</head>

<body>

<div class="container">

    <a href="{{ route('orders.index') }}" class="back">
        ← Back to Orders
    </a>

    <h1>Edit Customer Order</h1>

    <form action="{{ route('orders.update', $order) }}" method="POST">

        @csrf
        @method('PUT')

        <label>Customer</label>
        <input
            type="text"
            name="customer"
            value="{{ $order->customer }}"
            required
        >

        <label>Product</label>
        <input
            type="text"
            name="product"
            value="{{ $order->product }}"
            required
        >

        <label>Quantity</label>
        <input
            type="number"
            name="quantity"
            value="{{ $order->quantity }}"
            min="1"
            required
        >

        <label>Status</label>
        <select name="status" required>
            <option value="Pending" {{ $order->status == 'Pending' ? 'selected' : '' }}>
                Pending
            </option>

            <option value="Processing" {{ $order->status == 'Processing' ? 'selected' : '' }}>
                Processing
            </option>

            <option value="Completed" {{ $order->status == 'Completed' ? 'selected' : '' }}>
                Completed
            </option>

            <option value="Cancelled" {{ $order->status == 'Cancelled' ? 'selected' : '' }}>
                Cancelled
            </option>
        </select>

        <button type="submit">
            Update Order
        </button>

    </form>

</div>

</body>
</html>