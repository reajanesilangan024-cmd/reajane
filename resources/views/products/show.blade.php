<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Product - Mobile Phone Shop</title>

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
            padding: 25px 15px;
        }

        .logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo h2 {
            font-size: 21px;
            margin-bottom: 5px;
        }

        .logo p {
            color: #9ca3af;
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
            text-decoration: none;
            color: #d1d5db;
            padding: 13px 15px;
            border-radius: 7px;
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
            left: 15px;
            right: 15px;
        }

        .logout button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 7px;
            background: #dc2626;
            color: white;
            cursor: pointer;
            font-size: 15px;
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
            padding: 20px 30px;
            border-bottom: 1px solid #e5e7eb;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .topbar h1 {
            font-size: 25px;
            color: #111827;
        }

        .role {
            background: #dbeafe;
            color: #1d4ed8;
            padding: 8px 14px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: bold;
        }

        .content {
            padding: 30px;
        }

        .back-btn {
            display: inline-block;
            text-decoration: none;
            color: #374151;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .back-btn:hover {
            color: #2563eb;
        }

        .product-card {
            background: white;
            border-radius: 12px;
            padding: 30px;
            max-width: 850px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.06);
        }

        .product-title {
            font-size: 28px;
            color: #111827;
            margin-bottom: 25px;
            border-bottom: 1px solid #e5e7eb;
            padding-bottom: 18px;
        }

        .details {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .detail-box {
            background: #f9fafb;
            padding: 18px;
            border-radius: 8px;
        }

        .detail-box.full {
            grid-column: span 2;
        }

        .detail-label {
            font-size: 13px;
            color: #6b7280;
            margin-bottom: 7px;
            text-transform: uppercase;
        }

        .detail-value {
            font-size: 18px;
            color: #111827;
            font-weight: 600;
        }

        .price {
            color: #16a34a;
            font-size: 22px;
        }

        .stock {
            color: #2563eb;
        }

        .description {
            font-size: 16px;
            font-weight: normal;
            line-height: 1.6;
            color: #374151;
        }

        .actions {
            margin-top: 30px;
            display: flex;
            gap: 10px;
        }

        .btn {
            display: inline-block;
            padding: 11px 18px;
            border-radius: 7px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            font-size: 14px;
        }

        .edit-btn {
            background: #2563eb;
            color: white;
        }

        .edit-btn:hover {
            background: #1d4ed8;
        }

        .delete-btn {
            background: #dc2626;
            color: white;
        }

        .delete-btn:hover {
            background: #b91c1c;
        }

        .footer {
            padding: 25px 30px;
            color: #6b7280;
            font-size: 13px;
        }

        @media (max-width: 800px) {
            .sidebar {
                width: 210px;
            }

            .main {
                margin-left: 210px;
            }

            .details {
                grid-template-columns: 1fr;
            }

            .detail-box.full {
                grid-column: span 1;
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

            .topbar {
                padding: 15px;
            }

            .content {
                padding: 15px;
            }

            .actions {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>

    <!-- SIDEBAR -->
    <div class="sidebar">

        <div class="logo">
            <h2>Mobile Phone Shop</h2>
            <p>Admin Panel</p>
        </div>

        <ul class="menu">

            <li>
                <a href="{{ route('dashboard') }}">
                    🏠 Dashboard
                </a>
            </li>

            <li>
                <a href="{{ route('products.index') }}" class="active">
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

            <h1>View Product</h1>

            <span class="role">
                ADMIN
            </span>

        </div>


        <!-- CONTENT -->
        <div class="content">

            <a href="{{ route('products.index') }}" class="back-btn">
                ← Back to Products
            </a>


            <div class="product-card">

                <h2 class="product-title">
                    {{ $product->name }}
                </h2>


                <div class="details">

                    <!-- PRODUCT ID -->
                    <div class="detail-box">

                        <div class="detail-label">
                            Product ID
                        </div>

                        <div class="detail-value">
                            {{ $product->id }}
                        </div>

                    </div>


                    <!-- BRAND -->
                    <div class="detail-box">

                        <div class="detail-label">
                            Brand
                        </div>

                        <div class="detail-value">
                            {{ $product->brand }}
                        </div>

                    </div>


                    <!-- PRICE -->
                    <div class="detail-box">

                        <div class="detail-label">
                            Price
                        </div>

                        <div class="detail-value price">
                            ₱{{ number_format($product->price, 2) }}
                        </div>

                    </div>


                    <!-- STOCK -->
                    <div class="detail-box">

                        <div class="detail-label">
                            Stock
                        </div>

                        <div class="detail-value stock">
                            {{ $product->stock }}
                        </div>

                    </div>


                    <!-- DESCRIPTION -->
                    <div class="detail-box full">

                        <div class="detail-label">
                            Description
                        </div>

                        <div class="detail-value description">
                            {{ $product->description ?: 'No description available.' }}
                        </div>

                    </div>

                </div>


                <!-- ACTIONS -->
                <div class="actions">

                    <a
                        href="{{ route('products.edit', $product->id) }}"
                        class="btn edit-btn"
                    >
                        ✏️ Edit Product
                    </a>


                    <form
                        action="{{ route('products.destroy', $product->id) }}"
                        method="POST"
                        onsubmit="return confirm('Are you sure you want to delete this product?');"
                    >

                        @csrf

                        @method('DELETE')

                        <button
                            type="submit"
                            class="btn delete-btn"
                        >
                            🗑️ Delete Product
                        </button>

                    </form>

                </div>

            </div>

        </div>


        <div class="footer">
            © {{ date('Y') }} Mobile Phone Shop Management System
        </div>

    </div>

</body>
</html>