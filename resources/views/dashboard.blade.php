@extends('layouts.app')

@section('content')
<style>
    .dashboard-table {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 1rem;
        border: 1px solid #e2e8f0;
        border-radius: 0.5rem;
        overflow: hidden;
    }

    .dashboard-table thead {
        background-color: #f8fafc;
        border-bottom: 2px solid #e2e8f0;
    }

    .dashboard-table th,
    .dashboard-table td {
        padding: 1rem;
        text-align: left;
        font-weight: 600;
        color: #4a5568;
    }

    .dashboard-table tbody tr:nth-child(even) {
        background-color: #edf2f7;
    }

    .dashboard-table tbody tr:hover {
        background-color: #e2e8f0;
    }

    @media (max-width: 640px) {
        .dashboard-table {
            overflow-x: auto;
        }
    }
</style>
<h1 class="text-2xl font-bold mb-4">Dashboard</h1>

<table class="dashboard-table">
    <thead>
        <tr>
            <th>Barcode</th>
            <th>Naam</th>
            <th>VerpakkingsEenheid</th>
            <th>AantalAanwezig</th>
            <th>LeverancierNaam</th>
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