<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pelaporan</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: grid;
            place-items: center;
            padding: 24px;
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            color: #1e293b;
        }

        main {
            width: min(100%, 520px);
            padding: 28px;
            background: #ffffff;
            box-shadow: 0 8px 24px rgba(15, 23, 42, .1);
            border: 1px solid red;
        }

        h1 {
            margin: 0 0 24px;
            color: red;
        }

        p {
            margin: 0;
            padding: 14px 0;
            border-bottom: 1px solid #e2e8f0;
        }

        p:last-child {
            border-bottom: 0;
        }

        strong {
            display: inline-block;
            min-width: 170px;
            color: #475569;
        }
    </style>
</head>

<body>
    <main>
        <h1>HASIL PELAPORAN</h1>
        <p><strong>Nama:</strong> {{ $nama }}</p>
        <p><strong>Lokasi Kejadian:</strong> {{ $lokasi }}</p>
        <p><strong>Tinggi Genangan:</strong> {{ $tinggi }} cm</p>
    </main>
</body>

</html>