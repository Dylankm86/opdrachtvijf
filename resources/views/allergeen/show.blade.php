<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allergeen Details</title>
</head>

<body>
    <h1>{{ $allergeen->Naam }}</h1>

    <h2>Associated Products</h2>
    @if($products->isEmpty())
    <p>No associated products found.</p>
    @else
    <ul>
        @foreach($products as $product)
        <li>{{ $product->Naam }}</li>
        @endforeach
    </ul>
    @endif

    <a href="{{ route('dashboard') }}">Back to Dashboard</a>
</body>

</html>