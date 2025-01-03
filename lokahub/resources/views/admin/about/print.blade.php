<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print About Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 80%;
            margin: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        .print-button {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>About Us</h1>
        <table>
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($abouts as $about)
                <tr>
                    <td>{{ $about->title }}</td>
                    <td>{{ $about->description }}</td>
                    <td>
                        @if ($about->image)
                            <img src="{{ asset('storage/' . $about->image) }}" alt="Gambar" width="100">
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="print-button">
            <button onclick="window.print()">Print</button>
        </div>
    </div>
</body>
</html>
