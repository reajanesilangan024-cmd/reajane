<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Order - Mobile Phone Shop Management System</title>

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
            margin-bottom: 35px;
        }

        .logo-icon {
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
        }

        .nav-link:hover {
            background: #374151;
            color: white;
            transform: translateX(3px);
        }

        .nav-link.active {
            background: #2563eb;
            color: white;
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

        /* MAIN */
        .main {
            margin-left: 250px;
            min-height: 100vh;
        }

        /* TOPBAR */
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
            font-size: 25px;
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
            font-size: 18px;
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

        /* PAGE HEADER */
        .page-header {
            background: linear-gradient(135deg, #2563eb, #3b82f6);
            color: white;
            padding: 30px;
            border-radius: 15px;
            margin-bottom: 25px;
            box-shadow: 0 5px 18px rgba(37, 99, 235, 0.25);
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .page-icon {
            width: 70px;
            height: 70px;
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.20);
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 38px;
        }

        .page-header h2 {
            margin: 0 0 8px;
            font-size: 30px;
        }

        .page-header p {
            margin: 0;
            font-size: 15px;
            opacity: 0.9;
        }

        /* FORM CARD */
        .form-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 3px 14px rgba(0, 0, 0, 0.07);
        }

        .form-title {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 7px;
        }

        .form-title-icon {
            width: 40px;
            height: 40px;
            background: #dbeafe;
            border-radius: 9px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 21px;
        }

        .form-title h3 {
            margin: 0;
            font-size: 21px;
        }

        .form-description {
            color: #64748b;
            margin: 0 0 30px 52px;
            font-size: 14px;
        }

        /* FORM GRID */
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group.full {
            grid-column: 1 / -1;
        }

        label {
            font-weight: bold;
            font-size: 14px;
            margin-bottom: 9px;
            color: #334155;
        }

        .required {
            color: #dc2626;
        }

        input {
            width: 100%;
            padding: 14px 15px;
            border: 1px solid #cbd5e1;
            border-radius: 9px;
            font-size: 15px;
            outline: none;
            transition: 0.2s;
            background: white;
        }

        input:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.10);
        }

        input::placeholder {
            color: #94a3b8;
        }

        /* ERROR */
        .error-box {
            background: #fee2e2;
            color: #991b1b;
            border: 1px solid #fecaca;
            border-radius: 9px;
            padding: 14px 18px;
            margin-bottom: 25px;
        }

        .error-box strong {
            display: block;
            margin-bottom: 7px;
        }

        .error-box ul {
            margin: 0;
            padding-left: 20px;
        }

        /* BUTTON AREA */
        .button-area {
            margin-top: 30px;
            padding-top: 25px;
            border-top: 1px solid #e2e8f0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .back-btn {
            display: inline-block;
            padding: 12px 20px;
            border: 1px solid #cbd5e1;
            color: #334155;
            background: white;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            font-size: 14px;
            transition: 0.2s;
        }

        .back-btn:hover {
            background: #f8fafc;
            border-color: #94a3b8;
        }

        .save-btn {
            border: none;
            background: #2563eb;
            color: white;
            padding: 13px 25px;
            border-radius: 8px;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.2s;
        }

        .save-btn:hover {
            background: #1d4ed8;
            transform: translateY(-1px);
        }

        /* FOOTER */
        .footer {
            text-align: center;
            padding: 30px;
            color: #94a3b8;
            font-size: 13px;
        }

        /* RESPONSIVE */
        @media (max-width: 900px) {

            .form-grid {
                grid-template-columns: 1fr;
            }

            .form-group.full {
                grid-column: auto;
            }
        }

        @media (max-width: 800px) {

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

            .topbar {
                padding: 18px;
            }

            .admin-info {
                display: none;
            }

            .content {
                padding: 20px;
            }

            .page-header {
                padding: 25px;
            }

            .page-header h2 {
                font-size: 24px;
            }

            .button-area {
                flex-direction: column;
                gap: 15px;
                align-items: stretch;
            }

            .back-btn,
            .save-btn {
                text-align: center;
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <!-- SIDEBAR -->
    <aside class="sidebar">

        <div class="logo">

            <div class="logo-icon">
                📱
            </div>

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

        <a href="{{ route('orders.index') }}" class="nav-link active">
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

        <!-- TOPBAR -->
        <div class="topbar">

            <div>

                <h1>
                    Add Order
                </h1>

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
                        {{ ucfirst(auth()->user()->role ?? 'Admin') }}
                    </div>

                </div>

            </div>

        </div>


        <!-- CONTENT -->
        <div class="content">


            <!-- BLUE PAGE HEADER -->
            <div class="page-header">

                <div class="page-icon">
                    🛒
                </div>

                <div>

                    <h2>
                        Create New Order
                    </h2>

                    <p>
                        Fill in the details below to create a new customer order.
                    </p>

                </div>

            </div>


            <!-- ERROR MESSAGE -->
            @if ($errors->any())

                <div class="error-box">

                    <strong>
                        Please fix the following errors:
                    </strong>

                    <ul>

                        @foreach ($errors->all() as $error)

                            <li>
                                {{ $error }}
                            </li>

                        @endforeach

                    </ul>

                </div>

            @endif


            <!-- FORM CARD -->
            <div class="form-card">

                <div class="form-title">

                    <div class="form-title-icon">
                        📝
                    </div>

                    <h3>
                        Order Information
                    </h3>

                </div>

                <p class="form-description">
                    Enter the customer, product, and quantity details.
                </p>


                <!-- ORDER FORM -->
                <form action="{{ route('orders.store') }}" method="POST">

                    @csrf


                    <div class="form-grid">


                        <!-- CUSTOMER -->
                        <div class="form-group">

                            <label for="customer">
                                Customer <span class="required">*</span>
                            </label>

                            <input
                                type="text"
                                id="customer"
                                name="customer"
                                value="{{ old('customer') }}"
                                placeholder="Customer name"
                                required
                            >

                        </div>


                        <!-- PRODUCT -->
                        <div class="form-group">

                            <label for="product">
                                Product <span class="required">*</span>
                            </label>

                            <input
                                type="text"
                                id="product"
                                name="product"
                                value="{{ old('product') }}"
                                placeholder="Product name"
                                required
                            >

                        </div>


                        <!-- QUANTITY -->
                        <div class="form-group">

                            <label for="quantity">
                                Quantity <span class="required">*</span>
                            </label>

                            <input
                                type="number"
                                id="quantity"
                                name="quantity"
                                value="{{ old('quantity', 1) }}"
                                min="1"
                                placeholder="Enter quantity"
                                required
                            >

                        </div>


                    </div>


                    <!-- BUTTONS -->
                    <div class="button-area">

                        <a href="{{ route('orders.index') }}"
                           class="back-btn">

                            ← Back to Orders

                        </a>


                        <button type="submit"
                                class="save-btn">

                            💾 Save Order

                        </button>

                    </div>


                </form>

            </div>


        </div>


        <!-- FOOTER -->
        <div class="footer">

            © 2026 Mobile Phone Shop Management System

        </div>

    </main>

</body>
</html>