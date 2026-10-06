<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Customers - Mobile Phone Shop</title>

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
            color: #15803d;
            padding: 8px 14px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: bold;
        }

        .content {
            padding: 30px;
        }

        .page-header {
            background: white;
            padding: 25px;
            border-radius: 12px;
            margin-bottom: 25px;

            display: flex;
            justify-content: space-between;
            align-items: center;

            box-shadow: 0 2px 10px rgba(0,0,0,0.06);
        }

        .page-header h2 {
            color: #111827;
            margin-bottom: 6px;
        }

        .page-header p {
            color: #6b7280;
            font-size: 14px;
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

        .alert {
            padding: 14px 18px;
            border-radius: 8px;
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
            padding: 25px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.06);
            overflow-x: auto;
        }

        .table-title {
            font-size: 20px;
            color: #111827;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #f9fafb;
            color: #374151;
            text-align: left;
            padding: 14px;
            border-bottom: 2px solid #e5e7eb;
            font-size: 13px;
        }

        td {
            padding: 14px;
            border-bottom: 1px solid #e5e7eb;
            font-size: 14px;
        }

        tr:hover {
            background: #f9fafb;
        }

        .customer-name {
            font-weight: bold;
            color: #111827;
        }

        .actions {
            white-space: nowrap;
        }

        .btn {
            display: inline-block;
            padding: 8px 11px;
            border-radius: 6px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            font-size: 12px;
            margin-right: 4px;
        }

        .view-btn {
            background: #6b7280;
            color: white;
        }

        .edit-btn {
            background: #2563eb;
            color: white;
        }

        .delete-btn {
            background: #dc2626;
            color: white;
        }

        .view-btn:hover {
            background: #4b5563;
        }

        .edit-btn:hover {
            background: #1d4ed8;
        }

        .delete-btn:hover {
            background: #b91c1c;
        }

        .empty {
            text-align: center;
            padding: 40px 20px;
            color: #6b7280;
        }

        .empty-icon {
            font-size: 45px;
            margin-bottom: 15px;
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

            .page-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
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

            .content {
                padding: 15px;
            }

            .topbar {
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
                <a href="{{ route('products.index') }}">
                    📱 Products
                </a>
            </li>

            <li>
                <a href="{{ route('customers.index') }}" class="active">
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

            <h1>Customers</h1>

            <span class="role">
                STAFF
            </span>

        </div>


        <div class="content">

            <div class="page-header">

                <div>
                    <h2>Customer Management</h2>

                    <p>
                        Manage customer information for the mobile phone shop.
                    </p>
                </div>

                <a
                    href="{{ route('customers.create') }}"
                    class="add-btn"
                >
                    ➕ Add Customer
                </a>

            </div>


            @if(session('success'))

                <div class="alert success">
                    {{ session('success') }}
                </div>

            @endif


            @if(session('error'))

                <div class="alert error">
                    {{ session('error') }}
                </div>

            @endif


            <div class="table-container">

                <h3 class="table-title">
                    Customer List
                </h3>


                @if($customers->count() > 0)

                    <table>

                        <thead>

                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>EMAIL</th>
                                <th>PHONE</th>
                                <th>ADDRESS</th>
                                <th>ACTIONS</th>
                            </tr>

                        </thead>


                        <tbody>

                            @foreach($customers as $customer)

                                <tr>

                                    <td>
                                        {{ $customer->id }}
                                    </td>

                                    <td class="customer-name">
                                        {{ $customer->name }}
                                    </td>

                                    <td>
                                        {{ $customer->email }}
                                    </td>

                                    <td>
                                        {{ $customer->phone }}
                                    </td>

                                    <td>
                                        {{ $customer->address }}
                                    </td>

                                    <td class="actions">

                                        <a
                                            href="{{ route('customers.show', $customer->id) }}"
                                            class="btn view-btn"
                                        >
                                            👁️ View
                                        </a>

                                        <a
                                            href="{{ route('customers.edit', $customer->id) }}"
                                            class="btn edit-btn"
                                        >
                                            ✏️ Edit
                                        </a>

                                        <form
                                            action="{{ route('customers.destroy', $customer->id) }}"
                                            method="POST"
                                            style="display:inline;"
                                            onsubmit="return confirm('Are you sure you want to delete this customer?');"
                                        >

                                            @csrf

                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="btn delete-btn"
                                            >
                                                🗑️ Delete
                                            </button>

                                        </form>

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                @else

                    <div class="empty">

                        <div class="empty-icon">
                            👥
                        </div>

                        <h3>
                            No Customers Found
                        </h3>

                        <p>
                            There are currently no customers in the system.
                        </p>

                    </div>

                @endif

            </div>

        </div>


        <div class="footer">
            © {{ date('Y') }} Mobile Phone Shop Management System
        </div>

    </div>

</body>
</html>