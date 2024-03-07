@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Barcode</th>
                <th>Name</th>
                <th>VerpakkingsEenheid</th>
                <th>AantalAanwezig</th>
                <th>Allergeen</th>
                <th>Leverancier</th>
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
</div>
@endsection