<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Florist Azzura - Products</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f5f5f5;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Flower Products</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bungas as $bunga)
                <tr>
                    <td>{{ $bunga->name }}</td>
                    <td>{{ $bunga->description }}</td>
                    <td>{{ $bunga->price }}</td>
                    <td><img src="{{ $bunga->image_url }}" alt="{{ $bunga->name }}" width="100"></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>