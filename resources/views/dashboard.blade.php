@extends('layouts.app')

@section('content')
<h1>Dashboard</h1>

<table>
    <thead>
        <tr>
            <th>Barcode</th>
            <th>Naam</th>
            <th>VerpakkingsEenheid</th>
            <th>AantalAanwezig</th>
            <th>LeverancierNaam</th>
            <!-- Add more headers for the additional fields -->
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->Barcode }}</td>
            <td>{{ $product->Naam }}</td>
            <td>{{ $product->VerpakkingsEenheid }}</td>
            <td>{{ $product->AantalAanwezig }}</td>
            <td>{{ $product->LeverancierNaam }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection