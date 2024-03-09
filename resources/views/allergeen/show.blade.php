<!DOCTYPE html>
<html lang="en">
<!-- ... -->

<body>
    <div class="container">
        <a href="{{ route('dashboard') }}" class="back-button">Back to Dashboard</a>
        <h1>{{ $product->Naam }}</h1>
        <table class="dashboard-table">
            <thead>
                <tr>
                    <th>Allergen Name</th>
                    <th>Description</th>
                    <!-- Add other columns as needed -->
                </tr>
            </thead>
            <tbody>
                @foreach ($allergens as $allergeen)
                <tr>
                    <td>{{ $allergeen->Naam }}</td>
                    <td>{{ $allergeen->Omschrijving }}</td>
                    <!-- Add other columns as needed -->
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>