<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Products - Mobile Phone Shop</title>

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

        .back-dashboard {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 18px;
            background: #2563eb;
            color: white;
            text-decoration: none;
            border-radius: 7px;
            font-size: 14px;
            font-weight: bold;
        }

        .back-dashboard:hover {
            background: #1d4ed8;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .page-header h2 {
            color: #111827;
        }

        .add-btn {
            background: #2563eb;
            color: white;
            text-decoration: none;
            padding: 12px 18px;
            border-radius: 7px;
            font-size: 14px;
        }

        .add-btn:hover {
            background: #1d4ed8;
        }

        .message {
            padding: 15px;
            border-radius: 7px;
            margin-bottom: 20px;
        }

        .success {
            background: #dcfce7;
            color: #166534;
        }

        .error {
            background: #fee2e2;
            color: #991b1b;
        }

        .table-container {
            background: white;
            border-radius: 12px;
            overflow-x: auto;
            box-shadow: 0 2px 10px rgba(0,0,0,.06);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #111827;
            color: white;
            padding: 15px;
            text-align: left;
            font-size: 14px;
        }

        td {
            padding: 15px;
            border-bottom: 1px solid #e5e7eb;
            font-size: 14px;
        }

        tr:hover {
            background: #f9fafb;
        }

        .price {
            font-weight: bold;
        }

        .actions {
            white-space: nowrap;
        }

        .btn {
            display: inline-block;
            padding: 7px 11px;
            border-radius: 5px;
            text-decoration: none;
            color: white;
            font-size: 12px;
            border: none;
            cursor: pointer;
        }

        .view {
            background: #6b7280;
        }

        .edit {
            background: #2563eb;
        }

        .delete {
            background: #dc2626;
        }

        .empty {
            text-align: center;
            padding: 40px;
            color: #6b7280;
        }

        .footer {
            padding: 25px 30px;
            color: #6b7280;
            font-size: 13px;
        }

        @media (max-width: 700px) {
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

            .page-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
        }
    </style>
</head>

<body>

    <!-- SIDEBAR -->
    <div class="sidebar">

        <div class="logo">
            <h2>Mobile Phone Shop</h2>
            <p>
                {{ ucfirst(auth()->user()->role) }} Panel
            </p>
        </div>

        <ul class="menu">

            <!-- DASHBOARD -->
            <li>
                @if(auth()->user()->role === 'admin')

                    <a href="{{ route('dashboard') }}">
                        🏠 Dashboard
                    </a>

                @elseif(auth()->user()->role === 'staff')

                    <a href="{{ route('staff.dashboard') }}">
                        🏠 Dashboard
                    </a>

                @elseif(auth()->user()->role === 'customer')

                    <a href="{{ route('customer.dashboard') }}">
                        🏠 Dashboard
                    </a>

                @endif
            </li>

            <!-- PRODUCTS -->
            <li>
                <a href="{{ route('products.index') }}" class="active">
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

            <h1>Products</h1>

            <span class="role">
                {{ strtoupper(auth()->user()->role) }}
            </span>

        </div>


        <!-- CONTENT -->
        <div class="content">

            <!-- BACK TO DASHBOARD -->
            @if(auth()->user()->role === 'admin')

                <a href="{{ route('dashboard') }}" class="back-dashboard">
                    ← Back to Dashboard
                </a>

            @elseif(auth()->user()->role === 'staff')

                <a href="{{ route('staff.dashboard') }}" class="back-dashboard">
                    ← Back to Dashboard
                </a>

            @elseif(auth()->user()->role === 'customer')

                <a href="{{ route('customer.dashboard') }}" class="back-dashboard">
                    ← Back to Dashboard
                </a>

            @endif


            <!-- HEADER -->
            <div class="page-header">

                <h2>
                    Product List
                </h2>

                <a
                    href="{{ route('products.create') }}"
                    class="add-btn"
                >
                    + Add Product
                </a>

            </div>


            <!-- SUCCESS MESSAGE -->
            @if(session('success'))

                <div class="message success">
                    {{ session('success') }}
                </div>

            @endif


            <!-- ERROR MESSAGE -->
            @if(session('error'))

                <div class="message error">
                    {{ session('error') }}
                </div>

            @endif


            <!-- VALIDATION ERRORS -->
            @if($errors->any())

                <div class="message error">

                    <ul style="margin-left: 20px;">

                        @foreach($errors->all() as $error)

                            <li>
                                {{ $error }}
                            </li>

                        @endforeach

                    </ul>

                </div>

            @endif


            <!-- PRODUCT TABLE -->
            <div class="table-container">

                @if(isset($products) && $products->count() > 0)

                    <table>

                        <thead>

                            <tr>
                                <th>ID</th>
                                <th>PRODUCT NAME</th>
                                <th>BRAND</th>
                                <th>PRICE</th>
                                <th>STOCK</th>
                                <th>ACTIONS</th>
                            </tr>

                        </thead>

                        <tbody>

                            @foreach($products as $product)

                                <tr>

                                    <td>
                                        {{ $product->id }}
                                    </td>

                                    <td>
                                        {{ $product->name }}
                                    </td>

                                    <td>
                                        {{ $product->brand }}
                                    </td>

                                    <td class="price">
                                        ₱{{ number_format((float) $product->price, 2) }}
                                    </td>

                                    <td>
                                        {{ $product->stock }}
                                    </td>

                                    <td class="actions">

                                        <!-- VIEW -->
                                        <a
                                            href="{{ route('products.show', $product->id) }}"
                                            class="btn view"
                                        >
                                            View
                                        </a>

                                        <!-- EDIT -->
                                        <a
                                            href="{{ route('products.edit', $product->id) }}"
                                            class="btn edit"
                                        >
                                            Edit
                                        </a>

                                        <!-- DELETE -->
                                        <form
                                            action="{{ route('products.destroy', $product->id) }}"
                                            method="POST"
                                            style="display:inline;"
                                            onsubmit="return confirm('Are you sure you want to delete this product?');"
                                        >

                                            @csrf

                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="btn delete"
                                            >
                                                Delete
                                            </button>

                                        </form>

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                @else

                    <div class="empty">

                        <h3>
                            No Products Found
                        </h3>

                        <p>
                            There are currently no products in the system.
                        </p>

                    </div>

                @endif

            </div>

        </div>


        <!-- FOOTER -->
        <div class="footer">

            © {{ date('Y') }} Mobile Phone Shop Management System

        </div>

    </div>

</body>
</html>