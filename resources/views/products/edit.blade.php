<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Product - Mobile Phone Shop</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f4f6f9;
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
            font-size: 13px;
            margin-top: 5px;
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
            border: none;
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
            font-size: 25px;
            color: #111827;
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

        .form-container {
            max-width: 700px;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,.06);
        }

        .form-container h2 {
            margin-bottom: 25px;
            color: #111827;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #374151;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #d1d5db;
            border-radius: 7px;
            font-size: 14px;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #2563eb;
        }

        textarea {
            resize: vertical;
            min-height: 120px;
        }

        .error {
            color: #dc2626;
            font-size: 13px;
            margin-top: 5px;
        }

        .buttons {
            display: flex;
            gap: 10px;
            margin-top: 25px;
        }

        .btn {
            padding: 12px 20px;
            border: none;
            border-radius: 7px;
            color: white;
            text-decoration: none;
            cursor: pointer;
            font-size: 14px;
        }

        .update {
            background: #2563eb;
        }

        .update:hover {
            background: #1d4ed8;
        }

        .cancel {
            background: #6b7280;
        }

        .cancel:hover {
            background: #4b5563;
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

            <li>
                <a href="{{ route('staff.dashboard') }}">
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

        <div class="topbar">

            <h1>Edit Product</h1>

            <span class="role">
                STAFF
            </span>

        </div>


        <div class="content">

            <div class="form-container">

                <h2>
                    Edit Product Information
                </h2>


                @if ($errors->any())

                    <div style="background:#fee2e2; color:#991b1b; padding:15px; border-radius:7px; margin-bottom:20px;">

                        <strong>Please fix the following errors:</strong>

                        <ul style="margin-top:10px; padding-left:20px;">

                            @foreach ($errors->all() as $error)

                                <li>{{ $error }}</li>

                            @endforeach

                        </ul>

                    </div>

                @endif


                <form
                    action="{{ route('products.update', $product->id) }}"
                    method="POST"
                >

                    @csrf

                    @method('PUT')


                    <!-- PRODUCT NAME -->
                    <div class="form-group">

                        <label for="name">
                            Product Name
                        </label>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            value="{{ old('name', $product->name) }}"
                            required
                        >

                        @error('name')
                            <div class="error">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    <!-- BRAND -->
                    <div class="form-group">

                        <label for="brand">
                            Brand
                        </label>

                        <input
                            type="text"
                            id="brand"
                            name="brand"
                            value="{{ old('brand', $product->brand) }}"
                            required
                        >

                        @error('brand')
                            <div class="error">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    <!-- PRICE -->
                    <div class="form-group">

                        <label for="price">
                            Price
                        </label>

                        <input
                            type="number"
                            id="price"
                            name="price"
                            value="{{ old('price', $product->price) }}"
                            min="0"
                            step="0.01"
                            required
                        >

                        @error('price')
                            <div class="error">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    <!-- STOCK -->
                    <div class="form-group">

                        <label for="stock">
                            Stock
                        </label>

                        <input
                            type="number"
                            id="stock"
                            name="stock"
                            value="{{ old('stock', $product->stock) }}"
                            min="0"
                            required
                        >

                        @error('stock')
                            <div class="error">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    <!-- DESCRIPTION -->
                    <div class="form-group">

                        <label for="description">
                            Description
                        </label>

                        <textarea
                            id="description"
                            name="description"
                        >{{ old('description', $product->description) }}</textarea>

                        @error('description')
                            <div class="error">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    <!-- BUTTONS -->
                    <div class="buttons">

                        <button
                            type="submit"
                            class="btn update"
                        >
                            💾 Update Product
                        </button>

                        <a
                            href="{{ route('products.index') }}"
                            class="btn cancel"
                        >
                            Cancel
                        </a>

                    </div>

                </form>

            </div>

        </div>


        <div class="footer">

            © {{ date('Y') }} Mobile Phone Shop Management System

        </div>

    </div>

</body>
</html>