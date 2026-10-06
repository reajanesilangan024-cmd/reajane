<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Staff Dashboard - Mobile Phone Shop</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
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
            padding: 25px 15px;
        }

        .logo {
            text-align: center;
            color: white;
            margin-bottom: 30px;
        }

        .logo h2 {
            font-size: 20px;
        }

        .logo p {
            color: #9ca3af;
            margin-top: 5px;
            font-size: 13px;
        }

        .menu {
            list-style: none;
        }

        .menu li {
            margin-bottom: 8px;
        }

        .menu a {
            display: block;
            padding: 13px 15px;
            color: #d1d5db;
            text-decoration: none;
            border-radius: 7px;
        }

        .menu a:hover,
        .menu a.active {
            background: #2563eb;
            color: white;
        }

        .logout {
            position: absolute;
            left: 15px;
            right: 15px;
            bottom: 25px;
        }

        .logout button {
            width: 100%;
            padding: 12px;
            border: 0;
            border-radius: 7px;
            background: #dc2626;
            color: white;
            cursor: pointer;
            font-size: 14px;
        }

        .main {
            margin-left: 250px;
            min-height: 100vh;
        }

        .topbar {
            background: white;
            padding: 20px 30px;
            border-bottom: 1px solid #e5e7eb;

            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .topbar h1 {
            color: #111827;
            font-size: 25px;
        }

        .role {
            background: #dcfce7;
            color: #166534;
            padding: 8px 14px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: bold;
        }

        .content {
            padding: 30px;
        }

        .welcome {
            background: white;
            padding: 25px;
            border-radius: 12px;
            margin-bottom: 25px;
            box-shadow: 0 2px 10px rgba(0,0,0,.06);
        }

        .welcome h2 {
            color: #111827;
            margin-bottom: 8px;
        }

        .welcome p {
            color: #6b7280;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-bottom: 30px;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,.06);
        }

        .icon {
            font-size: 32px;
            margin-bottom: 15px;
        }

        .card h3 {
            color: #374151;
            margin-bottom: 8px;
        }

        .card p {
            color: #6b7280;
            font-size: 14px;
        }

        .section {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,.06);
        }

        .section h2 {
            margin-bottom: 20px;
            color: #111827;
        }

        .actions {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }

        .action {
            display: inline-block;
            padding: 12px 18px;
            background: #2563eb;
            color: white;
            text-decoration: none;
            border-radius: 7px;
            font-size: 14px;
        }

        .action:hover {
            background: #1d4ed8;
        }

        .footer {
            padding: 25px 30px;
            color: #6b7280;
            font-size: 13px;
        }

        @media (max-width: 900px) {
            .cards {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            .sidebar {
                position: relative;
                width: 100%;
                height: auto;
            }

            .logout {
                position: static;
                margin-top: 20px;
            }

            .main {
                margin-left: 0;
            }

            .cards {
                grid-template-columns: 1fr;
            }

            .content {
                padding: 15px;
            }
        }
    </style>
</head>

<body>

    <!-- SIDEBAR -->
    <div class="sidebar">

        <div class="logo">
            <h2>Mobile Phone Shop</h2>
            <p>Staff Panel</p>
        </div>

        <ul class="menu">

            <!-- STAFF DASHBOARD -->
            <li>
                <a href="{{ route('staff.dashboard') }}" class="active">
                    🏠 Dashboard
                </a>
            </li>

            <!-- PRODUCTS -->
            <li>
                <a href="{{ route('products.index') }}">
                    📱 Products
                </a>
            </li>

            <!-- CUSTOMERS -->
            <li>
                <a href="{{ route('customers.index') }}">
                    👥 Customers
                </a>
            </li>

            <!-- ORDERS -->
            <li>
                <a href="{{ route('orders.index') }}">
                    🛒 Orders
                </a>
            </li>

            <!-- PAYMENTS -->
            <li>
                <a href="{{ route('payments.index') }}">
                    💳 Payments
                </a>
            </li>

        </ul>

        <!-- LOGOUT -->
        <div class="logout">

            <form method="POST" action="{{ route('logout') }}">

                @csrf

                <button type="submit">
                    🚪 Logout
                </button>

            </form>

        </div>

    </div>


    <!-- MAIN -->
    <div class="main">

        <!-- TOPBAR -->
        <div class="topbar">

            <h1>Staff Dashboard</h1>

            <span class="role">
                STAFF
            </span>

        </div>


        <!-- CONTENT -->
        <div class="content">

            <!-- WELCOME -->
            <div class="welcome">

                <h2>
                    Welcome, {{ auth()->user()->name }}!
                </h2>

                <p>
                    Welcome to the Mobile Phone Shop Management System.
                </p>

            </div>


            <!-- CARDS -->
            <div class="cards">

                <div class="card">

                    <div class="icon">
                        📱
                    </div>

                    <h3>
                        Products
                    </h3>

                    <p>
                        View and manage mobile phone products.
                    </p>

                </div>


                <div class="card">

                    <div class="icon">
                        👥
                    </div>

                    <h3>
                        Customers
                    </h3>

                    <p>
                        View and manage customer records.
                    </p>

                </div>


                <div class="card">

                    <div class="icon">
                        🛒
                    </div>

                    <h3>
                        Orders
                    </h3>

                    <p>
                        View and manage customer orders.
                    </p>

                </div>


                <div class="card">

                    <div class="icon">
                        💳
                    </div>

                    <h3>
                        Payments
                    </h3>

                    <p>
                        View and manage payments.
                    </p>

                </div>

            </div>


            <!-- QUICK ACTIONS -->
            <div class="section">

                <h2>
                    Quick Actions
                </h2>

                <div class="actions">

                    <a
                        href="{{ route('products.index') }}"
                        class="action"
                    >
                        📱 View Products
                    </a>

                    <a
                        href="{{ route('customers.index') }}"
                        class="action"
                    >
                        👥 View Customers
                    </a>

                    <a
                        href="{{ route('orders.index') }}"
                        class="action"
                    >
                        🛒 View Orders
                    </a>

                    <a
                        href="{{ route('payments.index') }}"
                        class="action"
                    >
                        💳 View Payments
                    </a>

                </div>

            </div>

        </div>


        <!-- FOOTER -->
        <div class="footer">

            © {{ date('Y') }} Mobile Phone Shop Management System

        </div>

    </div>

</body>
</html>