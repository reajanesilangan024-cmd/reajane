```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard - Mobile Phone Shop Management System</title>

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
            padding: 25px 18px;
            color: white;
        }

        .logo {
            text-align: center;
            margin-bottom: 35px;
        }

        .logo h2 {
            font-size: 20px;
            line-height: 1.4;
        }

        .logo p {
            color: #9ca3af;
            font-size: 13px;
            margin-top: 5px;
        }

        .menu {
            list-style: none;
        }

        .menu li {
            margin-bottom: 10px;
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

        .logout-area {
            position: absolute;
            bottom: 25px;
            left: 18px;
            right: 18px;
        }

        .logout-btn {
            width: 100%;
            border: none;
            background: #dc2626;
            color: white;
            padding: 12px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px;
        }

        .logout-btn:hover {
            background: #b91c1c;
        }

        .main {
            margin-left: 250px;
            min-height: 100vh;
            padding: 30px;
        }

        .topbar {
            background: white;
            padding: 20px 25px;
            border-radius: 12px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            margin-bottom: 25px;
        }

        .topbar h1 {
            font-size: 25px;
            color: #111827;
        }

        .role {
            background: #fee2e2;
            color: #b91c1c;
            padding: 8px 14px;
            border-radius: 20px;
            font-weight: bold;
            font-size: 13px;
        }

        .welcome {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            margin-bottom: 25px;
        }

        .welcome h2 {
            font-size: 28px;
            margin-bottom: 10px;
            color: #111827;
        }

        .welcome p {
            color: #6b7280;
            font-size: 15px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 25px;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            text-decoration: none;
            color: inherit;
            transition: 0.2s;
        }

        .card:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.12);
        }

        .card-icon {
            font-size: 35px;
            margin-bottom: 12px;
        }

        .card h3 {
            font-size: 19px;
            margin-bottom: 8px;
            color: #111827;
        }

        .card p {
            color: #6b7280;
            font-size: 14px;
            line-height: 1.5;
        }

        .user-management {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            margin-bottom: 25px;
        }

        .user-management h2 {
            color: #111827;
            margin-bottom: 10px;
        }

        .user-management p {
            color: #6b7280;
            margin-bottom: 20px;
        }

        .user-btn {
            display: inline-block;
            text-decoration: none;
            background: #2563eb;
            color: white;
            padding: 12px 20px;
            border-radius: 8px;
            font-size: 14px;
        }

        .user-btn:hover {
            background: #1d4ed8;
        }

        footer {
            text-align: center;
            margin-top: 30px;
            color: #6b7280;
            font-size: 13px;
        }

        @media (max-width: 1100px) {
            .cards {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 900px) {
            .sidebar {
                width: 210px;
            }

            .main {
                margin-left: 210px;
            }
        }

        @media (max-width: 700px) {
            .sidebar {
                position: relative;
                width: 100%;
                height: auto;
            }

            .logout-area {
                position: static;
                margin-top: 25px;
            }

            .main {
                margin-left: 0;
                padding: 20px;
            }

            .topbar {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }

            .cards {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <!-- SIDEBAR -->
    <aside class="sidebar">

        <div class="logo">
            <h2>📱 Mobile Phone<br>Shop</h2>
            <p>Administrator Panel</p>
        </div>

        <ul class="menu">

            <li>
                <a href="{{ route('dashboard') }}" class="active">
                    🏠 Dashboard
                </a>
            </li>

            <li>
                <a href="{{ route('weather.dashboard') }}">
                    🌤️ Weather Dashboard
                </a>
            </li>

            <li>
                <a href="{{ route('products.index') }}">
                    📱 Products
                </a>
            </li>

            <li>
                <a href="{{ route('customers.index') }}">
                    👥 Customers
                </a>
            </li>

            <li>
                <a href="{{ route('orders.index') }}">
                    🛒 Orders
                </a>
            </li>

            <li>
                <a href="{{ route('payments.index') }}">
                    💳 Payments
                </a>
            </li>

            <li>
                <a href="{{ route('users.index') }}">
                    👤 User Management
                </a>
            </li>

            <li>
                <a href="{{ route('reports.index') }}">
                    📊 Reports
                </a>
            </li>

            <li>
                <a href="{{ route('settings.index') }}">
                    ⚙️ Settings
                </a>
            </li>

        </ul>

        <div class="logout-area">

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="logout-btn">
                    🚪 Logout
                </button>

            </form>

        </div>

    </aside>


    <!-- MAIN CONTENT -->
    <main class="main">

        <!-- TOP BAR -->
        <div class="topbar">

            <h1>Admin Dashboard</h1>

            <div class="role">
                👑 Administrator
            </div>

        </div>


        <!-- WELCOME -->
        <div class="welcome">

            <h2>Welcome, Administrator!</h2>

            <p>
                Welcome to the Mobile Phone Shop Management System.
                Manage products, customers, orders, payments, and users
                from the administrator dashboard.
            </p>

        </div>


        <!-- MANAGEMENT CARDS -->
        <div class="cards">

            <a href="{{ route('products.index') }}" class="card">

                <div class="card-icon">
                    📱
                </div>

                <h3>Products</h3>

                <p>
                    Add, view, update, and delete mobile phone products.
                </p>

            </a>


            <a href="{{ route('customers.index') }}" class="card">

                <div class="card-icon">
                    👥
                </div>

                <h3>Customers</h3>

                <p>
                    Manage customer information and records.
                </p>

            </a>


            <a href="{{ route('orders.index') }}" class="card">

                <div class="card-icon">
                    🛒
                </div>

                <h3>Orders</h3>

                <p>
                    Manage customer orders and transactions.
                </p>

            </a>


            <a href="{{ route('payments.index') }}" class="card">

                <div class="card-icon">
                    💳
                </div>

                <h3>Payments</h3>

                <p>
                    Manage payment records and transactions.
                </p>

            </a>


            <a href="{{ route('users.index') }}" class="card">

                <div class="card-icon">
                    👤
                </div>

                <h3>User Management</h3>

                <p>
                    Add, edit, and delete system users.
                </p>

            </a>


            <a href="{{ route('reports.index') }}" class="card">

                <div class="card-icon">
                    📊
                </div>

                <h3>Reports</h3>

                <p>
                    View system reports and information.
                </p>

            </a>

        </div>


        <!-- ADMINISTRATOR FUNCTIONS -->
        <div class="user-management">

            <h2>Administrator Functions</h2>

            <p>
                User Management is available only to Administrator accounts.
            </p>

            <a href="{{ route('users.index') }}" class="user-btn">
                👤 Open User Management
            </a>

        </div>


        <footer>
            © {{ date('Y') }} Mobile Phone Shop Management System
        </footer>

    </main>

</body>
</html>

