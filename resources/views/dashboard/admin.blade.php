<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard - Mobile Phone Shop Management System</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f1f5f9;
            color: #1e293b;
        }

        /* SIDEBAR */
        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 250px;
            height: 100vh;
            background: #111827;
            color: white;
            padding: 25px 15px;
            z-index: 10;
        }

        .logo {
            text-align: center;
            padding: 10px;
            margin-bottom: 35px;
        }

        .logo .phone-icon {
            font-size: 42px;
            margin-bottom: 8px;
        }

        .logo h2 {
            font-size: 19px;
            margin: 0;
            line-height: 1.4;
        }

        .logo p {
            color: #9ca3af;
            font-size: 12px;
            margin-top: 7px;
        }

        .nav-title {
            color: #9ca3af;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin: 15px 10px;
        }

        .nav-link {
            display: block;
            color: #d1d5db;
            text-decoration: none;
            padding: 13px 15px;
            margin-bottom: 7px;
            border-radius: 8px;
            transition: 0.2s;
            font-size: 15px;
        }

        .nav-link:hover {
            background: #374151;
            color: white;
            transform: translateX(3px);
        }

        .logout-side {
            position: absolute;
            bottom: 25px;
            left: 15px;
            right: 15px;
        }

        .logout-side button {
            width: 100%;
            border: none;
            background: #dc3545;
            color: white;
            padding: 12px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 15px;
            font-weight: bold;
        }

        .logout-side button:hover {
            background: #bb2d3b;
        }

        /* MAIN CONTENT */
        .main {
            margin-left: 250px;
            min-height: 100vh;
        }

        /* TOP BAR */
        .topbar {
            background: white;
            padding: 20px 35px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.06);
        }

        .topbar h1 {
            margin: 0;
            font-size: 24px;
        }

        .topbar p {
            margin: 5px 0 0;
            color: #64748b;
            font-size: 14px;
        }

        .admin-info {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .admin-avatar {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: #2563eb;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
        }

        .admin-name {
            font-weight: bold;
        }

        .admin-role {
            color: #64748b;
            font-size: 12px;
        }

        /* CONTENT */
        .content {
            padding: 30px 35px;
        }

        .welcome {
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            color: white;
            padding: 30px;
            border-radius: 15px;
            margin-bottom: 28px;
            box-shadow: 0 8px 20px rgba(37, 99, 235, 0.18);
        }

        .welcome h2 {
            margin: 0 0 8px;
            font-size: 27px;
        }

        .welcome p {
            margin: 0;
            opacity: 0.9;
        }

        /* CARDS */
        .section-title {
            font-size: 20px;
            margin-bottom: 18px;
        }

        .menu {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .card {
            background: white;
            padding: 25px;
            min-height: 170px;
            border-radius: 14px;
            text-decoration: none;
            color: #1e293b;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.07);
            transition: all 0.25s ease;
            position: relative;
            overflow: hidden;
        }

        .card::after {
            content: "";
            position: absolute;
            width: 70px;
            height: 70px;
            right: -20px;
            bottom: -20px;
            background: #f1f5f9;
            border-radius: 50%;
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
        }

        .icon {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 23px;
            margin-bottom: 15px;
        }

        .products-icon {
            background: #dbeafe;
        }

        .orders-icon {
            background: #fef3c7;
        }

        .customers-icon {
            background: #dcfce7;
        }

        .users-icon {
            background: #ede9fe;
        }

        .payments-icon {
            background: #fce7f3;
        }

        .reports-icon {
            background: #e0f2fe;
        }

        .settings-icon {
            background: #f3f4f6;
        }

        .card h3 {
            margin: 0 0 8px;
            font-size: 18px;
        }

        .card p {
            color: #64748b;
            font-size: 14px;
            margin: 0;
            line-height: 1.5;
        }

        .arrow {
            position: absolute;
            right: 20px;
            top: 25px;
            font-size: 20px;
            color: #94a3b8;
        }

        /* FOOTER */
        .footer {
            text-align: center;
            padding: 30px;
            color: #94a3b8;
            font-size: 13px;
        }

        /* RESPONSIVE */
        @media (max-width: 1000px) {
            .menu {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 700px) {
            .sidebar {
                position: relative;
                width: 100%;
                height: auto;
            }

            .logout-side {
                position: static;
                margin-top: 20px;
            }

            .main {
                margin-left: 0;
            }

            .menu {
                grid-template-columns: 1fr;
            }

            .topbar {
                padding: 18px;
            }

            .content {
                padding: 20px;
            }

            .admin-info {
                display: none;
            }
        }
    </style>
</head>

<body>

    <!-- SIDEBAR -->
    <aside class="sidebar">

        <div class="logo">

            <div class="phone-icon">📱</div>

            <h2>
                Mobile Phone Shop
            </h2>

            <p>
                Management System
            </p>

        </div>


        <div class="nav-title">
            Main Menu
        </div>


        <a href="{{ route('dashboard') }}" class="nav-link">
            🏠 Dashboard
        </a>

        <a href="{{ route('products.index') }}" class="nav-link">
            📱 Products
        </a>

        <a href="{{ route('orders.index') }}" class="nav-link">
            🛒 Orders
        </a>

        <a href="{{ route('customers.index') }}" class="nav-link">
            👥 Customers
        </a>

        <a href="{{ route('users.index') }}" class="nav-link">
            👤 Users
        </a>

        <a href="{{ route('payments.index') }}" class="nav-link">
            💳 Payments
        </a>

        <a href="{{ route('reports.index') }}" class="nav-link">
            📊 Reports
        </a>

        <a href="{{ route('settings.index') }}" class="nav-link">
            ⚙️ Settings
        </a>


        <div class="logout-side">

            <form action="{{ route('logout') }}" method="POST">

                @csrf

                <button type="submit">
                    🚪 Logout
                </button>

            </form>

        </div>

    </aside>


    <!-- MAIN -->
    <main class="main">

        <!-- TOP BAR -->
        <div class="topbar">

            <div>
                <h1>Admin Dashboard</h1>

                <p>
                    Mobile Phone Shop Management System
                </p>
            </div>


            <div class="admin-info">

                <div class="admin-avatar">
                    {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
                </div>

                <div>

                    <div class="admin-name">
                        {{ auth()->user()->name ?? 'Administrator' }}
                    </div>

                    <div class="admin-role">
                        Administrator
                    </div>

                </div>

            </div>

        </div>


        <!-- CONTENT -->
        <div class="content">

            <div class="welcome">

                <h2>
                    Welcome, {{ auth()->user()->name ?? 'Administrator' }}! 👋
                </h2>

                <p>
                    You are logged in as Administrator.
                    Manage your mobile phone shop from the dashboard.
                </p>

            </div>


            <h2 class="section-title">
                Management Menu
            </h2>


            <div class="menu">

                <!-- PRODUCTS -->
                <a href="{{ route('products.index') }}" class="card">

                    <div class="icon products-icon">
                        📱
                    </div>

                    <span class="arrow">→</span>

                    <h3>Products</h3>

                    <p>
                        Add, view, edit and manage mobile phone products and inventory.
                    </p>

                </a>


                <!-- ORDERS -->
                <a href="{{ route('orders.index') }}" class="card">

                    <div class="icon orders-icon">
                        🛒
                    </div>

                    <span class="arrow">→</span>

                    <h3>Orders</h3>

                    <p>
                        Manage customer orders and monitor order transactions.
                    </p>

                </a>


                <!-- CUSTOMERS -->
                <a href="{{ route('customers.index') }}" class="card">

                    <div class="icon customers-icon">
                        👥
                    </div>

                    <span class="arrow">→</span>

                    <h3>Customers</h3>

                    <p>
                        View registered customers and their account information.
                    </p>

                </a>


                <!-- USERS -->
                <a href="{{ route('users.index') }}" class="card">

                    <div class="icon users-icon">
                        👤
                    </div>

                    <span class="arrow">→</span>

                    <h3>Users</h3>

                    <p>
                        Manage system users and their assigned roles.
                    </p>

                </a>


                <!-- PAYMENTS -->
                <a href="{{ route('payments.index') }}" class="card">

                    <div class="icon payments-icon">
                        💳
                    </div>

                    <span class="arrow">→</span>

                    <h3>Payments</h3>

                    <p>
                        View and manage payment records and transactions.
                    </p>

                </a>


                <!-- REPORTS -->
                <a href="{{ route('reports.index') }}" class="card">

                    <div class="icon reports-icon">
                        📊
                    </div>

                    <span class="arrow">→</span>

                    <h3>Reports</h3>

                    <p>
                        View reports for products, orders, customers and payments.
                    </p>

                </a>


                <!-- SETTINGS -->
                <a href="{{ route('settings.index') }}" class="card">

                    <div class="icon settings-icon">
                        ⚙️
                    </div>

                    <span class="arrow">→</span>

                    <h3>Settings</h3>

                    <p>
                        Manage system settings and configuration.
                    </p>

                </a>

            </div>

        </div>


        <div class="footer">

            © 2026 Mobile Phone Shop Management System

        </div>

    </main>

</body>
</html>