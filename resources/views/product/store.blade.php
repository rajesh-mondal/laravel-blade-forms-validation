<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Validation Demo</title>
    <link rel="stylesheet" href="//matcha.mizu.sh/matcha.css">
</head>
<body>
    <h1>Form Validation Demo</h1>
    <form method="POST" action="{{ route('product.store') }}">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required></br>

        <label>Price:</label>
        <input type="text" name="price" required></br>

        <label>Description:</label>
        <textarea name="description"></textarea></br>

        <label>Stock:</label>
        <select name="stock">
            <option value="1">In Stock</option>
            <option value="0">Out of Stock</option>
        </select></br>

        <button type="submit">Create Product</button>
    </form>
</body>
</html>