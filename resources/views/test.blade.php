<!DOCTYPE html>
<html>

<head>
    <title>Test View</title>
</head>

<body>
    <h1>This is a test view.</h1>

    @foreach ($products as $product)
    <p>{{ $product->Naam }}</p>
    @endforeach
</body>

</html>