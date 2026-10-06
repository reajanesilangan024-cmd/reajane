<!DOCTYPE html>
<html>
<head>
    <title>Product Details</title>
</head>
<body>

    <h1>Mobile Phone Shop Management System</h1>

    <h2>Product Details</h2>

    <p><strong>Product Name:</strong> {{ $product->name }}</p>

    <p><strong>Brand:</strong> {{ $product->brand }}</p>

    <p><strong>Price:</strong> ₱{{ $product->price }}</p>

    <p><strong>Stock:</strong> {{ $product->stock }}</p>

    <br>

    <a href="{{ route('products.index') }}">← Back to Products</a>

</body>
</html>

