<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>User Management - Mobile Phone Shop Management System</title>

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

        .header-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
        }

        .header h1 {
            color: #111827;
            font-size: 28px;
        }

        .header p {
            color: #6b7280;
            margin-top: 8px;
        }

        .add-btn {
            display: inline-block;
            background: #2563eb;
            color: white;
            text-decoration: none;
            padding: 12px 18px;
            border-radius: 8px;
            font-weight: bold;
        }

        .add-btn:hover {
            background: #1d4ed8;
        }

        .message {
            padding: 14px 18px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .success {
            background: #dcfce7;
            color: #166534;
        }

        .error {
            background: #fee2e2;
            color: #991b1b;
        }

        .content {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        .content h2 {
            color: #111827;
            margin-bottom: 20px;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 750px;
        }

        th {
            background: #111827;
            color: white;
            padding: 14px;
            text-align: left;
            font-size: 14px;
        }

        td {
            padding: 14px;
            border-bottom: 1px solid #e5e7eb;
            font-size: 14px;
        }

        tr:hover td {
            background: #f9fafb;
        }

        .role {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
            text-transform: capitalize;
        }

        .role-admin {
            background: #fee2e2;
            color: #991b1b;
        }

        .role-staff {
            background: #dbeafe;
            color: #1d4ed8;
        }

        .role-customer {
            background: #dcfce7;
            color: #166534;
        }

        .actions {
            white-space: nowrap;
        }

        .edit-btn,
        .delete-btn {
            display: inline-block;
            border: none;
            padding: 8px 12px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 13px;
            cursor: pointer;
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

        .empty {
            text-align: center;
            padding: 30px;
            color: #6b7280;
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

            .header-top {
                flex-direction: column;
                align-items: flex-start;
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

            <div class="header-top">

                <div>
                    <h1>👤 User Management</h1>

                    <p>
                        Manage administrator, staff, and customer accounts.
                    </p>
                </div>

                <a href="{{ route('users.create') }}" class="add-btn">
                    ➕ Add User
                </a>

            </div>

        </div>


        @if(session('success'))
            <div class="message success">
                {{ session('success') }}
            </div>
        @endif


        @if(session('error'))
            <div class="message error">
                {{ session('error') }}
            </div>
        @endif


        @if($errors->any())
            <div class="message error">
                {{ $errors->first() }}
            </div>
        @endif


        <div class="content">

            <h2>User List</h2>

            <div class="table-wrapper">

                <table>

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>EMAIL</th>
                            <th>ROLE</th>
                            <th>ACTIONS</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($users as $user)

                            <tr>

                                <td>
                                    {{ $user->id }}
                                </td>

                                <td>
                                    <strong>
                                        {{ $user->name }}
                                    </strong>
                                </td>

                                <td>
                                    {{ $user->email }}
                                </td>

                                <td>

                                    @if($user->role === 'admin')

                                        <span class="role role-admin">
                                            Admin
                                        </span>

                                    @elseif($user->role === 'staff')

                                        <span class="role role-staff">
                                            Staff
                                        </span>

                                    @else

                                        <span class="role role-customer">
                                            Customer
                                        </span>

                                    @endif

                                </td>

                                <td class="actions">

                                    <a
                                        href="{{ route('users.edit', $user) }}"
                                        class="edit-btn"
                                    >
                                        ✏️ Edit
                                    </a>

                                    <form
                                        action="{{ route('users.destroy', $user) }}"
                                        method="POST"
                                        style="display:inline;"
                                        onsubmit="return confirm('Are you sure you want to delete this user?');"
                                    >

                                        @csrf

                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="delete-btn"
                                        >
                                            🗑️ Delete
                                        </button>

                                    </form>

                                </td>

                            </tr>

                        @empty

                            <tr>
                                <td colspan="5" class="empty">
                                    No users found.
                                </td>
                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>


        <footer>
            © {{ date('Y') }} Mobile Phone Shop Management System
        </footer>

    </main>

</body>
</html>