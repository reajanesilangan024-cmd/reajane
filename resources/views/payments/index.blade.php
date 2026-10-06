<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Payments</title>

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
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
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

        .buttons a {
            display: inline-block;
            padding: 11px 18px;
            border-radius: 7px;
            text-decoration: none;
            color: white;
            margin-left: 8px;
        }

        .add-btn {
            background: #1677ff;
        }

        .dashboard-btn {
            background: #6b7280;
        }

        .success {
            background: #dcfce7;
            color: #166534;
            padding: 13px;
            border-radius: 7px;
            margin-bottom: 20px;
        }

        .table-box {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,.06);
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #f1f5f9;
            text-align: left;
            padding: 14px;
        }

        td {
            padding: 14px;
            border-bottom: 1px solid #e5e7eb;
        }

        .paid {
            color: #15803d;
            font-weight: bold;
        }

        .pending {
            color: #ca8a04;
            font-weight: bold;
        }

        .failed {
            color: #dc2626;
            font-weight: bold;
        }

        .empty {
            text-align: center;
            color: #6b7280;
            padding: 30px;
        }
    </style>
</head>

<body>

<div class="main">

    <div class="header">

        <div>
            <h1>💳 Payments</h1>
            <p>Manage payment transactions</p>
        </div>

        <div class="buttons">
            <a href="{{ route('payments.create') }}" class="add-btn">
                + Add Payment
            </a>

            <a href="{{ route('dashboard') }}" class="dashboard-btn">
                Dashboard
            </a>
        </div>

    </div>


    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif


    <div class="table-box">

        <table>

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Order ID</th>
                    <th>Amount</th>
                    <th>Payment Method</th>
                    <th>Status</th>
                    <th>Reference Number</th>
                    <th>Payment Date</th>
                </tr>
            </thead>

            <tbody>

                @forelse($payments as $payment)

                    <tr>
                        <td>{{ $payment->id }}</td>

                        <td>{{ $payment->order_id }}</td>

                        <td>
                            ₱{{ number_format($payment->amount, 2) }}
                        </td>

                        <td>{{ $payment->payment_method }}</td>

                        <td>
                            @if($payment->payment_status == 'Paid')
                                <span class="paid">
                                    {{ $payment->payment_status }}
                                </span>
                            @elseif($payment->payment_status == 'Pending')
                                <span class="pending">
                                    {{ $payment->payment_status }}
                                </span>
                            @else
                                <span class="failed">
                                    {{ $payment->payment_status }}
                                </span>
                            @endif
                        </td>

                        <td>{{ $payment->reference_number }}</td>

                        <td>{{ $payment->payment_date }}</td>
                    </tr>

                @empty

                    <tr>
                        <td colspan="7" class="empty">
                            No payments found.
                        </td>
                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

</body>
</html>

