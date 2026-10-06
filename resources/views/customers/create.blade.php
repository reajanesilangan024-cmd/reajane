<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Customer - Mobile Phone Shop</title>

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

        .container {
            width: 700px;
            max-width: 90%;
            margin: 50px auto;
        }

        .box {
            background: white;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 2px 12px rgba(0,0,0,.08);
        }

        h1 {
            color: #111827;
            margin-bottom: 10px;
        }

        .subtitle {
            color: #6b7280;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #374151;
        }

        input,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #d1d5db;
            border-radius: 7px;
            font-size: 14px;
        }

        textarea {
            min-height: 100px;
            resize: vertical;
        }

        input:focus,
        textarea:focus {
            outline: none;
            border-color: #2563eb;
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
            text-decoration: none;
            cursor: pointer;
            font-size: 14px;
            font-weight: bold;
        }

        .save {
            background: #2563eb;
            color: white;
        }

        .save:hover {
            background: #1d4ed8;
        }

        .cancel {
            background: #6b7280;
            color: white;
        }

        .cancel:hover {
            background: #4b5563;
        }

        .errors {
            background: #fee2e2;
            color: #991b1b;
            padding: 15px;
            border-radius: 7px;
            margin-bottom: 20px;
        }

        .errors ul {
            margin-left: 20px;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="box">

        <h1>Add Customer</h1>

        <p class="subtitle">
            Add a new customer to the Mobile Phone Shop.
        </p>

        @if($errors->any())

            <div class="errors">

                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

            </div>

        @endif

        <form action="{{ route('customers.store') }}" method="POST">

            @csrf

            <div class="form-group">

                <label for="name">
                    Customer Name
                </label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    value="{{ old('name') }}"
                    placeholder="Enter customer name"
                    required
                >

            </div>


            <div class="form-group">

                <label for="email">
                    Email
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="Enter email"
                >

            </div>


            <div class="form-group">

                <label for="phone">
                    Phone
                </label>

                <input
                    type="text"
                    id="phone"
                    name="phone"
                    value="{{ old('phone') }}"
                    placeholder="Enter phone number"
                >

            </div>


            <div class="form-group">

                <label for="address">
                    Address
                </label>

                <textarea
                    id="address"
                    name="address"
                    placeholder="Enter customer address"
                >{{ old('address') }}</textarea>

            </div>


            <div class="buttons">

                <button
                    type="submit"
                    class="btn save"
                >
                    💾 Save Customer
                </button>

                <a
                    href="{{ route('customers.index') }}"
                    class="btn cancel"
                >
                    Cancel
                </a>

            </div>

        </form>

    </div>

</div>

</body>
</html>