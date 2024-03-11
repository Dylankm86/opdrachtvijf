<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Allergeen</h1>

    <ul>
        @foreach ($allergeen as $item)
        <li>{{ $item->Naam }}</li>
        @endforeach
    </ul>
</body>

</html>