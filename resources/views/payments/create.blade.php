<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Payment</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            margin: 0;
            background: #f5f7fb;
            color: #1f2937;
        }

        .main {
            padding: 35px;
            max-width: 900px;
            margin: auto;
        }

        .header {
            margin-bottom: 25px;
        }

        .header h1 {
            margin: 0 0 7px;
            font-size: 28px;
        }

        .header p {
            margin: 0;
            color: #6b7280;
        }

        .payment-card {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 3px 12px rgba(0,0,0,.08);
        }

        .payment-card h2 {
            margin-top: 0;
            margin-bottom: 25px;
            font-size: 20px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            font-size: 14px;
        }

        input,
        select {
            width: 100%;
            padding: 12px 13px;
            border: 1px solid #d1d5db;
            border-radius: 7px;
            font-size: 14px;
            background: white;
        }

        input:focus,
        select:focus {
            outline: none;
            border-color: #1677ff;
        }

        .error-box {
            background: #fee2e2;
            color: #991b1b;
            padding: 13px 18px;
            border-radius: 7px;
            margin-bottom: 20px;
        }

        .error-box ul {
            margin: 0;
            padding-left: 20px;
        }

        .buttons {
            margin-top: 10px;
            display: flex;
            gap: 10px;
        }

        .save-btn {
            border: none;
            background: #1677ff;
            color: white;
            padding: 12px 22px;
            border-radius: 7px;
            cursor: pointer;
            font-size: 14px;
        }

        .save-btn:hover {
            background: #0d63d6;
        }

        .back-btn {
            background: #6b7280;
            color: white;
            padding: 12px 22px;
            border-radius: 7px;
            text-decoration: none;
            font-size: 14px;
        }

        @media (max-width: 700px) {
            .form-row {
                grid-template-columns: 1fr;
            }

            .main {
                padding: 20px;
            }
        }
    </style>
</head>

<body>

<div class="main">

    <div class="header">
        <h1>💳 Add Payment</h1>
        <p>Add a new payment transaction.</p>
    </div>


    @if($errors->any())

        <div class="error-box">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    @endif


    <div class="payment-card">

        <h2>Payment Information</h2>

        <form action="{{ route('payments.store') }}" method="POST">

            @csrf

            <div class="form-row">

                <div class="form-group">
                    <label for="order_id">Order ID</label>

                    <input
                        type="text"
                        id="order_id"
                        name="order_id"
                        value="{{ old('order_id', '1') }}"
                        placeholder="Enter order ID"
                        required
                    >
                </div>


                <div class="form-group">
                    <label for="amount">Amount</label>

                    <input
                        type="number"
                        id="amount"
                        name="amount"
                        step="0.01"
                        value="{{ old('amount', '15000') }}"
                        placeholder="Enter amount"
                        required
                    >
                </div>

            </div>


            <div class="form-row">

                <div class="form-group">
                    <label for="payment_method">Payment Method</label>

                    <select
                        id="payment_method"
                        name="payment_method"
                        required
                    >
                        <option value="">Select Method</option>
                        <option value="Cash">Cash</option>
                        <option value="GCash">GCash</option>
                        <option value="Bank Transfer">Bank Transfer</option>
                    </select>
                </div>


                <div class="form-group">
                    <label for="payment_status">Payment Status</label>

                    <select
                        id="payment_status"
                        name="payment_status"
                        required
                    >
                        <option value="Pending">Pending</option>
                        <option value="Paid">Paid</option>
                        <option value="Failed">Failed</option>
                    </select>
                </div>

            </div>


            <div class="form-row">

                <div class="form-group">
                    <label for="reference_number">Reference Number</label>

                    <input
                        type="text"
                        id="reference_number"
                        name="reference_number"
                        value="{{ old('reference_number', 'CASH-001') }}"
                        placeholder="Example: CASH-001"
                    >
                </div>


                <div class="form-group">
                    <label for="payment_date">Payment Date</label>

                    <input
                        type="date"
                        id="payment_date"
                        name="payment_date"
                        value="{{ old('payment_date', date('Y-m-d')) }}"
                        required
                    >
                </div>

            </div>


            <div class="buttons">

                <button type="submit" class="save-btn">
                    💾 Save Payment
                </button>

                <a href="{{ route('payments.index') }}" class="back-btn">
                    ← Back to Payments
                </a>

            </div>

        </form>

    </div>

</div>

</body>
</html>

