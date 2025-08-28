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
    @if ( session('success') )
        <div style="color: green">
            {{ session('success') }}
        </div>
    @endif
    <form method="POST" action="{{ route('product.store') }}">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" value="{{ old('name') }}" required></br>
        @error('name')
        <div style="color: red">
            {{ $message }}
        </div>
        @enderror

        <label>Price:</label>
        <input type="text" name="price" value="{{ old('price') }}" required></br>
        @error('price')
        <div style="color: red">
            {{ $message }}
        </div>
        @enderror

        <label>Description:</label>
        <textarea name="description">{{ old('description') }}</textarea></br>
        @error('description')
        <div style="color: red">
            {{ $message }}
        </div>
        @enderror

        <label>Stock:</label>
        <select name="stock">
            <option value="1" {{ old('stock') == '1' ? 'selected' : '' }} >In Stock</option>
            <option value="0" {{ old('stock') == '0' ? 'selected' : '' }} >Out of Stock</option>
        </select></br>
        @error('stock')
        <div style="color: red">
            {{ $message }}
        </div>
        @enderror

        <button type="submit">Create Product</button>
    </form>
</body>
</html>