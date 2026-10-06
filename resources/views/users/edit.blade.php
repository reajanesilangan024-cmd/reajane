<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit User - Mobile Phone Shop Management System</title>

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

        .header {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            margin-bottom: 20px;
        }

        .header h1 {
            color: #111827;
            font-size: 28px;
        }

        .header p {
            color: #6b7280;
            margin-top: 8px;
        }

        .form-container {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            max-width: 800px;
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
        .form-group select {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 14px;
            outline: none;
        }

        .form-group input:focus,
        .form-group select:focus {
            border-color: #2563eb;
        }

        .help {
            color: #6b7280;
            font-size: 12px;
            margin-top: 6px;
        }

        .error {
            color: #dc2626;
            font-size: 13px;
            margin-top: 6px;
        }

        .buttons {
            display: flex;
            gap: 10px;
            margin-top: 25px;
        }

        .update-btn,
        .cancel-btn {
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            text-decoration: none;
            cursor: pointer;
            font-size: 14px;
            font-weight: bold;
        }

        .update-btn {
            background: #2563eb;
            color: white;
        }

        .update-btn:hover {
            background: #1d4ed8;
        }

        .cancel-btn {
            background: #6b7280;
            color: white;
        }

        .cancel-btn:hover {
            background: #4b5563;
        }

        footer {
            text-align: center;
            margin-top: 30px;
            color: #6b7280;
            font-size: 13px;
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

            .buttons {
                flex-direction: column;
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
                <a href="{{ route('dashboard') }}">
                    🏠 Dashboard
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
                <a href="{{ route('users.index') }}" class="active">
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

        <div class="header">

            <h1>✏️ Edit User</h1>

            <p>
                Update the information of this user account.
            </p>

        </div>


        <div class="form-container">

            <form
                action="{{ route('users.update', $user) }}"
                method="POST"
            >

                @csrf
                @method('PUT')


                <!-- NAME -->
                <div class="form-group">

                    <label for="name">
                        Full Name
                    </label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        value="{{ old('name', $user->name) }}"
                        placeholder="Enter full name"
                        required
                    >

                    @error('name')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <!-- EMAIL -->
                <div class="form-group">

                    <label for="email">
                        Email Address
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email', $user->email) }}"
                        placeholder="Enter email address"
                        required
                    >

                    @error('email')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <!-- PASSWORD -->
                <div class="form-group">

                    <label for="password">
                        New Password
                    </label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Leave blank to keep current password"
                    >

                    <div class="help">
                        Leave this field blank if you do not want to change the password.
                    </div>

                    @error('password')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <!-- ROLE -->
                <div class="form-group">

                    <label for="role">
                        User Role
                    </label>

                    <select
                        id="role"
                        name="role"
                        required
                    >

                        <option
                            value="admin"
                            {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}
                        >
                            Administrator
                        </option>

                        <option
                            value="staff"
                            {{ old('role', $user->role) == 'staff' ? 'selected' : '' }}
                        >
                            Staff
                        </option>

                        <option
                            value="customer"
                            {{ old('role', $user->role) == 'customer' ? 'selected' : '' }}
                        >
                            Customer
                        </option>

                    </select>

                    @error('role')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <!-- BUTTONS -->
                <div class="buttons">

                    <button
                        type="submit"
                        class="update-btn"
                    >
                        💾 Update User
                    </button>

                    <a
                        href="{{ route('users.index') }}"
                        class="cancel-btn"
                    >
                        ↩ Cancel
                    </a>

                </div>

            </form>

        </div>


        <footer>
            © {{ date('Y') }} Mobile Phone Shop Management System
        </footer>

    </main>

</body>
</html>