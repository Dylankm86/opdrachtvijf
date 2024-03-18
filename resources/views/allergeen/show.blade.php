<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
        }

        .back-button {
            display: inline-block;
            background-color: #4a5568;
            color: #ffffff;
            padding: 0.5rem 1rem;
            text-decoration: none;
            border-radius: 0.25rem;
        }

        .back-button:hover {
            background-color: #2d3748;
        }
    </style>
</head>

<body>

    <div class="container">
        <a href="{{ route('dashboard') }}" class="back-button">Terug naar het Dashboard</a>
        <table class="dashboard-table">
            <thead>
                <h1>Allergeen info</h1>
                <tr>
                    <th>Productnaam</th>
                    <th>Allergeen</th>
                    <th>Omschrijving</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($product as $product)
                <tr>
                    <td>{{ $product->Naam }}</td>
                    <td>{{$product->allergeen_naam}}</td>
                    <td>{{$product->allergeen_omschrijving}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>