<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Customer Dashboard - Mobile Phone Shop Management System</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: #f4f6f9;
            color: #222;
        }

        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 250px;
            height: 100vh;
            background: #111827;
            color: white;
            padding: 25px 18px;
        }

        .logo {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 8px;
            line-height: 1.4;
        }

        .panel-title {
            font-size: 13px;
            color: #9ca3af;
            margin-bottom: 30px;
        }

        .menu {
            list-style: none;
        }

        .menu li {
            margin-bottom: 8px;
        }

        .menu a {
            display: block;
            text-decoration: none;
            color: #d1d5db;
            padding: 13px 15px;
            border-radius: 8px;
            transition: 0.2s;
        }

        .menu a:hover {
            background: #1f2937;
            color: white;
        }

        .menu a.active {
            background: #2563eb;
            color: white;
        }

        .logout {
            position: absolute;
            bottom: 25px;
            left: 18px;
            right: 18px;
        }

        .logout button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background: #dc2626;
            color: white;
            cursor: pointer;
            font-size: 14px;
        }

        .logout button:hover {
            background: #b91c1c;
        }

        .main {
            margin-left: 250px;
            min-height: 100vh;
        }

        .topbar {
            background: white;
            height: 75px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 35px;
            border-bottom: 1px solid #e5e7eb;
        }

        .topbar h1 {
            font-size: 24px;
            color: #111827;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .user-name {
            font-weight: bold;
            color: #374151;
        }

        .badge {
            background: #2563eb;
            color: white;
            padding: 7px 13px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
        }

        .content {
            padding: 35px;
        }

        .welcome {
            background: white;
            padding: 30px;
            border-radius: 12px;
            margin-bottom: 30px;
            border: 1px solid #e5e7eb;
        }

        .welcome h2 {
            font-size: 28px;
            color: #111827;
            margin-bottom: 10px;
        }

        .welcome p {
            color: #6b7280;
            font-size: 15px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 30px;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 12px;
            border: 1px solid #e5e7eb;
        }

        .card h3 {
            color: #111827;
            margin-bottom: 10px;
            font-size: 19px;
        }

        .card p {
            color: #6b7280;
            line-height: 1.5;
            margin-bottom: 18px;
        }

        .card a {
            display: inline-block;
            text-decoration: none;
            background: #2563eb;
            color: white;
            padding: 10px 16px;
            border-radius: 7px;
            font-size: 14px;
        }

        .card a:hover {
            background: #1d4ed8;
        }

        .quick-actions {
            background: white;
            padding: 25px;
            border-radius: 12px;
            border: 1px solid #e5e7eb;
        }

        .quick-actions h2 {
            margin-bottom: 20px;
            color: #111827;
        }

        .actions {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .action-btn {
            text-decoration: none;
            padding: 12px 20px;
            border-radius: 8px;
            background: #111827;
            color: white;
            font-size: 14px;
        }

        .action-btn:hover {
            background: #374151;
        }

        @media (max-width: 900px) {
            .sidebar {
                width: 210px;
            }

            .main {
                margin-left: 210px;
            }

            .cards {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 650px) {
            .sidebar {
                position: relative;
                width: 100%;
                height: auto;
            }

            .logout {
                position: static;
                margin-top: 25px;
            }

            .main {
                margin-left: 0;
            }

            .topbar {
                padding: 0 20px;
            }

            .content {
                padding: 20px;
            }

            .user-info {
                display: none;
            }
        }
    </style>
</head>

<body>

    <!-- SIDEBAR -->
    <div class="sidebar">

        <div class="logo">
            Mobile Phone Shop
        </div>

        <div class="panel-title">
            Customer Panel
        </div>

        <ul class="menu">

            <li>
                <a href="{{ route('customer.dashboard') }}" class="active">
                    Dashboard
                </a>
            </li>

            <li>
                <a href="{{ route('products.index') }}">
                    Products
                </a>
            </li>

            <li>
                <a href="{{ route('orders.index') }}">
                    My Orders
                </a>
            </li>

            <li>
                <a href="{{ route('payments.index') }}">
                    Payments
                </a>
            </li>

        </ul>

        <!-- LOGOUT -->
        <div class="logout">

            <form method="POST" action="{{ route('logout') }}">

                @csrf

                <button type="submit">
                    Logout
                </button>

            </form>

        </div>

    </div>


    <!-- MAIN CONTENT -->
    <div class="main">

        <!-- TOPBAR -->
        <div class="topbar">

            <h1>
                Customer Dashboard
            </h1>

            <div class="user-info">

                <span class="user-name">
                    {{ auth()->user()->name }}
                </span>

                <span class="badge">
                    CUSTOMER
                </span>

            </div>

        </div>


        <!-- CONTENT -->
        <div class="content">

            <!-- WELCOME -->
            <div class="welcome">

                <h2>
                    Welcome Customer!
                </h2>

                <p>
                    Welcome to the Mobile Phone Shop Management System.
                </p>

            </div>


            <!-- CARDS -->
            <div class="cards">

                <!-- PRODUCTS -->
                <div class="card">

                    <h3>
                        Products
                    </h3>

                    <p>
                        View available mobile phones and products in the shop.
                    </p>

                    <a href="{{ route('products.index') }}">
                        View Products
                    </a>

                </div>


                <!-- ORDERS -->
                <div class="card">

                    <h3>
                        My Orders
                    </h3>

                    <p>
                        View and manage your orders and purchase records.
                    </p>

                    <a href="{{ route('orders.index') }}">
                        View Orders
                    </a>

                </div>


                <!-- PAYMENTS -->
                <div class="card">

                    <h3>
                        Payments
                    </h3>

                    <p>
                        View your payment records and transaction information.
                    </p>

                    <a href="{{ route('payments.index') }}">
                        View Payments
                    </a>

                </div>

            </div>


            <!-- QUICK ACTIONS -->
            <div class="quick-actions">

                <h2>
                    Quick Actions
                </h2>

                <div class="actions">

                    <a
                        href="{{ route('products.index') }}"
                        class="action-btn"
                    >
                        Browse Products
                    </a>

                    <a
                        href="{{ route('orders.index') }}"
                        class="action-btn"
                    >
                        My Orders
                    </a>

                    <a
                        href="{{ route('payments.index') }}"
                        class="action-btn"
                    >
                        Payment Records
                    </a>

                </div>

            </div>

        </div>

    </div>

</body>
</html>