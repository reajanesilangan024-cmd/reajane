<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Orders - Mobile Phone Shop Management System</title>

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

        /* =========================
           SIDEBAR
        ========================= */

        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 250px;
            height: 100vh;
            background: #111827;
            color: white;
            padding: 25px 18px;
        }

        .logo {
            font-size: 20px;
            font-weight: bold;
            line-height: 1.4;
            margin-bottom: 8px;
        }

        .panel-title {
            color: #9ca3af;
            font-size: 13px;
            margin-bottom: 30px;
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

        .logout {
            position: absolute;
            bottom: 25px;
            left: 18px;
            right: 18px;
        }

        .logout button {
            width: 100%;
            border: none;
            padding: 12px;
            border-radius: 8px;
            background: #dc2626;
            color: white;
            cursor: pointer;
            font-size: 14px;
        }

        .logout button:hover {
            background: #b91c1c;
        }

        /* =========================
           MAIN
        ========================= */

        .main {
            margin-left: 250px;
            min-height: 100vh;
        }

        /* =========================
           TOPBAR
        ========================= */

        .topbar {
            height: 75px;
            background: white;
            border-bottom: 1px solid #e5e7eb;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 35px;
        }

        .topbar h1 {
            font-size: 24px;
            color: #111827;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .user-name {
            font-weight: bold;
            color: #374151;
        }

        .badge {
            background: #2563eb;
            color: white;
            padding: 7px 13px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
        }

        /* =========================
           CONTENT
        ========================= */

        .content {
            padding: 35px;
        }

        .page-header {
            background: white;
            padding: 25px 30px;
            border-radius: 12px;
            border: 1px solid #e5e7eb;
            margin-bottom: 25px;
        }

        .page-header h2 {
            color: #111827;
            font-size: 26px;
            margin-bottom: 8px;
        }

        .page-header p {
            color: #6b7280;
            font-size: 14px;
        }

        /* =========================
           BUTTONS
        ========================= */

        .actions-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            gap: 10px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-block;
            text-decoration: none;
            border: none;
            padding: 11px 18px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px;
        }

        .dashboard-btn {
            background: #111827;
            color: white;
        }

        .dashboard-btn:hover {
            background: #374151;
        }

        .add-btn {
            background: #2563eb;
            color: white;
        }

        .add-btn:hover {
            background: #1d4ed8;
        }

        /* =========================
           SUCCESS / ERROR
        ========================= */

        .alert {
            padding: 14px 18px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .success {
            background: #dcfce7;
            color: #166534;
            border: 1px solid #bbf7d0;
        }

        .error {
            background: #fee2e2;
            color: #991b1b;
            border: 1px solid #fecaca;
        }

        /* =========================
           TABLE CARD
        ========================= */

        .table-card {
            background: white;
            border-radius: 12px;
            border: 1px solid #e5e7eb;
            overflow: hidden;
        }

        .table-header {
            padding: 22px 25px;
            border-bottom: 1px solid #e5e7eb;
        }

        .table-header h3 {
            color: #111827;
            margin-bottom: 5px;
        }

        .table-header p {
            color: #6b7280;
            font-size: 13px;
        }

        .table-wrapper {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 900px;
        }

        thead {
            background: #eff6ff;
        }

        th {
            text-align: left;
            padding: 16px;
            color: #334155;
            font-size: 13px;
            text-transform: uppercase;
            border-bottom: 1px solid #dbeafe;
        }

        td {
            padding: 16px;
            border-bottom: 1px solid #e5e7eb;
            font-size: 14px;
            color: #374151;
        }

        tbody tr:hover {
            background: #f9fafb;
        }

        /* =========================
           ID
        ========================= */

        .id-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 35px;
            height: 30px;
            padding: 0 8px;
            border-radius: 7px;
            background: #dbeafe;
            color: #1d4ed8;
            font-weight: bold;
        }

        /* =========================
           CUSTOMER
        ========================= */

        .customer-name {
            font-weight: bold;
            color: #1e3a8a;
        }

        /* =========================
           PRODUCT
        ========================= */

        .product-name {
            font-weight: bold;
            color: #111827;
        }

        /* =========================
           STATUS
        ========================= */

        .status {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
        }

        .status-pending {
            background: #fef3c7;
            color: #92400e;
        }

        .status-processing {
            background: #dbeafe;
            color: #1e40af;
        }

        .status-completed {
            background: #dcfce7;
            color: #166534;
        }

        .status-cancelled {
            background: #fee2e2;
            color: #991b1b;
        }

        .status-default {
            background: #e5e7eb;
            color: #374151;
        }

        /* =========================
           ACTIONS
        ========================= */

        .table-actions {
            display: flex;
            gap: 7px;
            align-items: center;
        }

        .view-btn {
            background: #111827;
            color: white;
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 6px;
            font-size: 12px;
        }

        .view-btn:hover {
            background: #374151;
        }

        .edit-btn {
            background: #2563eb;
            color: white;
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 6px;
            font-size: 12px;
        }

        .edit-btn:hover {
            background: #1d4ed8;
        }

        .delete-btn {
            background: #dc2626;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 6px;
            font-size: 12px;
            cursor: pointer;
        }

        .delete-btn:hover {
            background: #b91c1c;
        }

        /* =========================
           EMPTY
        ========================= */

        .empty {
            text-align: center;
            padding: 60px 20px;
            color: #6b7280;
        }

        .empty-icon {
            font-size: 50px;
            margin-bottom: 15px;
        }

        .empty h3 {
            color: #374151;
            margin-bottom: 8px;
        }

        /* =========================
           FOOTER
        ========================= */

        .footer {
            text-align: center;
            color: #9ca3af;
            padding: 25px;
            font-size: 13px;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 900px) {

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
                padding: 0 20px;
            }

            .content {
                padding: 20px;
            }

            .user-info {
                display: none;
            }
        }

    </style>

</head>


<body>


    <!-- =========================
         SIDEBAR
    ========================= -->

    <aside class="sidebar">

        <div class="logo">
            Mobile Phone Shop
            <br>
            Management System
        </div>

        <div class="panel-title">
            Staff Panel
        </div>


        <ul class="menu">

            <li>
                <a href="{{ route('staff.dashboard') }}">
                    Dashboard
                </a>
            </li>


            <li>
                <a href="{{ route('products.index') }}">
                    Products
                </a>
            </li>


            <li>
                <a href="{{ route('customers.index') }}">
                    Customers
                </a>
            </li>


            <li>
                <a href="{{ route('orders.index') }}" class="active">
                    Orders
                </a>
            </li>


            <li>
                <a href="{{ route('payments.index') }}">
                    Payments
                </a>
            </li>

        </ul>


        <!-- LOGOUT -->

        <div class="logout">

            <form
                method="POST"
                action="{{ route('logout') }}"
            >

                @csrf

                <button type="submit">
                    Logout
                </button>

            </form>

        </div>

    </aside>



    <!-- =========================
         MAIN
    ========================= -->

    <main class="main">


        <!-- TOPBAR -->

        <header class="topbar">

            <h1>
                Orders
            </h1>


            <div class="user-info">

                <span class="user-name">

                    {{ auth()->user()->name ?? 'User' }}

                </span>


                <span class="badge">

                    {{ strtoupper(auth()->user()->role ?? 'USER') }}

                </span>

            </div>

        </header>



        <!-- =========================
             CONTENT
        ========================= -->

        <section class="content">


            <!-- PAGE HEADER -->

            <div class="page-header">

                <h2>
                    Order Management
                </h2>

                <p>
                    View and manage customer orders.
                </p>

            </div>



            <!-- SUCCESS MESSAGE -->

            @if(session('success'))

                <div class="alert success">

                    {{ session('success') }}

                </div>

            @endif



            <!-- ERROR MESSAGE -->

            @if(session('error'))

                <div class="alert error">

                    {{ session('error') }}

                </div>

            @endif



            <!-- VALIDATION ERRORS -->

            @if($errors->any())

                <div class="alert error">

                    <strong>
                        Please check the following:
                    </strong>

                    <ul style="margin-top: 8px; padding-left: 20px;">

                        @foreach($errors->all() as $error)

                            <li>
                                {{ $error }}
                            </li>

                        @endforeach

                    </ul>

                </div>

            @endif



            <!-- TOP BUTTONS -->

            <div class="actions-top">

                <a
                    href="{{ route('staff.dashboard') }}"
                    class="btn dashboard-btn"
                >
                    ← Dashboard
                </a>


                <a
                    href="{{ route('orders.create') }}"
                    class="btn add-btn"
                >
                    + Add Order
                </a>

            </div>



            <!-- ORDER TABLE -->

            <div class="table-card">


                <div class="table-header">

                    <h3>
                        Order List
                    </h3>

                    <p>
                        All registered orders in the system.
                    </p>

                </div>



                @if(isset($orders) && $orders->count() > 0)


                    <div class="table-wrapper">

                        <table>


                            <thead>

                                <tr>

                                    <th>
                                        ID
                                    </th>

                                    <th>
                                        Customer
                                    </th>

                                    <th>
                                        Product
                                    </th>

                                    <th>
                                        Quantity
                                    </th>

                                    <th>
                                        Total
                                    </th>

                                    <th>
                                        Status
                                    </th>

                                    <th>
                                        Actions
                                    </th>

                                </tr>

                            </thead>



                            <tbody>


                                @foreach($orders as $order)


                                    <tr>


                                        <!-- ID -->

                                        <td>

                                            <span class="id-badge">

                                                {{ $order->id }}

                                            </span>

                                        </td>



                                        <!-- CUSTOMER -->

                                        <td class="customer-name">

                                            @if(isset($order->customer))

                                                {{ is_object($order->customer)
                                                    ? ($order->customer->name ?? 'N/A')
                                                    : $order->customer
                                                }}

                                            @elseif(isset($order->customer_name))

                                                {{ $order->customer_name }}

                                            @elseif(isset($order->customer_id))

                                                Customer #{{ $order->customer_id }}

                                            @else

                                                N/A

                                            @endif

                                        </td>



                                        <!-- PRODUCT -->

                                        <td class="product-name">

                                            @if(isset($order->product))

                                                {{ is_object($order->product)
                                                    ? ($order->product->name ?? 'N/A')
                                                    : $order->product
                                                }}

                                            @elseif(isset($order->product_name))

                                                {{ $order->product_name }}

                                            @elseif(isset($order->product_id))

                                                Product #{{ $order->product_id }}

                                            @else

                                                N/A

                                            @endif

                                        </td>



                                        <!-- QUANTITY -->

                                        <td>

                                            {{ $order->quantity ?? 0 }}

                                        </td>



                                        <!-- TOTAL -->

                                        <td>

                                            ₱{{ number_format((float)($order->total ?? $order->total_amount ?? 0), 2) }}

                                        </td>



                                        <!-- STATUS -->

                                        <td>

                                            @php

                                                $status = strtolower($order->status ?? 'pending');

                                            @endphp


                                            @if($status === 'pending')

                                                <span class="status status-pending">
                                                    Pending
                                                </span>

                                            @elseif($status === 'processing')

                                                <span class="status status-processing">
                                                    Processing
                                                </span>

                                            @elseif($status === 'completed')

                                                <span class="status status-completed">
                                                    Completed
                                                </span>

                                            @elseif($status === 'cancelled')

                                                <span class="status status-cancelled">
                                                    Cancelled
                                                </span>

                                            @else

                                                <span class="status status-default">

                                                    {{ ucfirst($status) }}

                                                </span>

                                            @endif

                                        </td>



                                        <!-- ACTIONS -->

                                        <td>

                                            <div class="table-actions">


                                                @if(Route::has('orders.show'))

                                                    <a
                                                        href="{{ route('orders.show', $order->id) }}"
                                                        class="view-btn"
                                                    >
                                                        View
                                                    </a>

                                                @endif



                                                @if(Route::has('orders.edit'))

                                                    <a
                                                        href="{{ route('orders.edit', $order->id) }}"
                                                        class="edit-btn"
                                                    >
                                                        Edit
                                                    </a>

                                                @endif



                                                @if(Route::has('orders.destroy'))

                                                    <form
                                                        action="{{ route('orders.destroy', $order->id) }}"
                                                        method="POST"
                                                        style="display:inline;"
                                                        onsubmit="return confirm('Are you sure you want to delete this order?');"
                                                    >

                                                        @csrf

                                                        @method('DELETE')

                                                        <button
                                                            type="submit"
                                                            class="delete-btn"
                                                        >
                                                            Delete
                                                        </button>

                                                    </form>

                                                @endif


                                            </div>

                                        </td>


                                    </tr>


                                @endforeach


                            </tbody>


                        </table>

                    </div>


                @else


                    <!-- NO ORDERS -->

                    <div class="empty">

                        <div class="empty-icon">
                            📦
                        </div>

                        <h3>
                            No Orders Found
                        </h3>

                        <p>
                            There are currently no orders registered.
                        </p>

                        <br>

                        <a
                            href="{{ route('orders.create') }}"
                            class="btn add-btn"
                        >
                            + Add First Order
                        </a>

                    </div>


                @endif


            </div>



            <!-- FOOTER -->

            <div class="footer">

                Mobile Phone Shop Management System

            </div>


        </section>


    </main>


</body>

</html>