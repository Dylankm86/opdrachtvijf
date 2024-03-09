@extends('layouts.app')

@section('content')
<style>
    .dashboard-table {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 1.5rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        border-radius: 0.5rem;
    }

    .dashboard-table thead {
        background-color: #4a5568;
        color: #ffffff;
        font-size: 0.9rem;
        text-transform: uppercase;
    }

    .dashboard-table th,
    .dashboard-table td {
        padding: 1.25rem 1rem;
        text-align: left;
        font-weight: 600;
    }

    .dashboard-table tbody tr:nth-child(even) {
        background-color: #edf2f7;
    }

    .dashboard-table tbody tr:hover {
        background-color: #d3dce6;
        transition: background-color 0.3s ease;
    }

    .dashboard-table th:first-child,
    .dashboard-table td:first-child {
        padding-left: 1.5rem;
    }

    .dashboard-table th:last-child,
    .dashboard-table td:last-child {
        padding-right: 1.5rem;
    }

    .dashboard-table tbody td {
        color: #4a5568;
    }

    .dashboard-table tbody tr:last-child {
        border-bottom: 2px solid #e2e8f0;
    }

    .dashboard-table th,
    .dashboard-table td {
        border-bottom: 1px solid #e2e8f0;
    }

    @media (max-width: 768px) {
        .dashboard-table {
            overflow-x: auto;
        }
    }

    h1 {
        text-align: center;
        font-size: 2rem;
        color: #4a5568;
        margin-top: 2rem;
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
            <td><a href="{{ route('leverancier.show', $product->LeverancierNaam) }}">{{ $product->LeverancierNaam }}</a></td>
            <td><a href="{{}}"></a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection