<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Allergens for {{ $product->Naam }}</h1>

    <table>
        <thead>
            <tr>
                <th>Allergen Name</th>
                <!-- Add more columns if needed -->
            </tr>
        </thead>
        <tbody>
            @foreach ($allergens as $allergen)
            <tr>
                <td>{{ $allergen->name }}</td>
                <!-- Add more cells if needed -->
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>