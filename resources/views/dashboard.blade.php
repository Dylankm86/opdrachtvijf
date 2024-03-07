@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Dashboard</h1>


<table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
        <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Barcode</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Naam</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">VerpakkingsEenheid</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">AantalAanwezig</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">LeverancierNaam</th>
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
        @foreach ($products as $product)
        <tr>
            <td class="px-6 py-4 whitespace-nowrap">{{ $product->Barcode }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{ $product->Naam }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{ $product->VerpakkingsEenheid }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{ $product->AantalAanwezig }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{ $product->LeverancierNaam }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection