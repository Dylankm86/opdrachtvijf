<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

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
</x-app-layout>