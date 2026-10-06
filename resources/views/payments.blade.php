<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Payment</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f5f7fb;
            color: #1f2937;
        }

        .main {
            padding: 35px;
        }

        .header {
            margin-bottom: 25px;
        }

        .header h1 {
            font-size: 28px;
            margin-bottom: 8px;
        }

        .header p {
            color: #6b7280;
        }

        .payment-box {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,.06);
            max-width: 700px;
        }

        .payment-box h2 {
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 7px;
            font-weight: bold;
        }

        input,
        select {
            width: 100%;
            padding: 12px;
            border: 1px solid #d1d5db;
            border-radius: 7px;
            font-size: 14px;
        }

        input:focus,
        select:focus {
            outline: none;
            border-color: #1677ff;
        }

        .save-btn {
            border: none;
            background: #1677ff;
            color: white;
            padding: 13px 20px;
            border-radius: 7px;
            cursor: pointer;
            font-size: 14px;
        }

        .save-btn:hover {
            background: #0d63d6;
        }

        .back-btn {
            display: inline-block;
            margin-left: 10px;
            padding: 13px 20px;
            background: #6b7280;
            color: white;
            text-decoration: none;
            border-radius: 7px;
            font-size: 14px;
        }
    </style>
</head>

<body>

    <div class="main">

        <div class="header">
            <h1>💳 Add Payment</h1>
            <p>Enter payment information for an order.</p>
        </div>

        <div class="payment-box">

            <h2>Payment Information</h2>

            <form action="#" method="POST">

                @csrf

                <!-- ORDER ID -->
                <div class="form-group">
                    <label for="order_id">Order ID</label>

                    <input
                        type="number"
                        id="order_id"
                        name="order_id"
                        value="1"
                        required
                    >
                </div>

                <!-- AMOUNT -->
                <div class="form-group">
                    <label for="amount">Amount</label>

                    <input
                        type="number"
                        id="amount"
                        name="amount"
                        value="15000"
                        step="0.01"
                        required
                    >
                </div>

                <!-- PAYMENT METHOD -->
                <div class="form-group">
                    <label for="payment_method">Payment Method</label>

                    <select
                        id="payment_method"
                        name="payment_method"
                        required
                    >
                        <option value="Cash" selected>Cash</option>
                        <option value="GCash">GCash</option>
                        <option value="Bank Transfer">Bank Transfer</option>
                    </select>
                </div>

                <!-- PAYMENT STATUS -->
                <div class="form-group">
                    <label for="payment_status">Payment Status</label>

                    <select
                        id="payment_status"
                        name="payment_status"
                        required
                    >
                        <option value="Paid" selected>Paid</option>
                        <option value="Pending">Pending</option>
                        <option value="Cancelled">Cancelled</option>
                    </select>
                </div>

                <!-- REFERENCE NUMBER -->
                <div class="form-group">
                    <label for="reference_number">Reference Number</label>

                    <input
                        type="text"
                        id="reference_number"
                        name="reference_number"
                        value="CASH-001"
                        required
                    >
                </div>

                <!-- PAYMENT DATE -->
                <div class="form-group">
                    <label for="payment_date">Payment Date</label>

                    <input
                        type="date"
                        id="payment_date"
                        name="payment_date"
                        value="{{ date('Y-m-d') }}"
                        required
                    >
                </div>

                <!-- BUTTONS -->
                <button type="submit" class="save-btn">
                    Save Payment
                </button>

                <a href="{{ route('dashboard') }}" class="back-btn">
                    Back to Dashboard
                </a>

            </form>

        </div>

    </div>

</body>
</html>

