<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pelaporan</title>
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

        form {
            width: min(100%, 440px);
            padding: 28px;
            background: #ffffff;
            box-shadow: 0 8px 24px rgba(15, 23, 42, .1);
            border: 1px solid red;
        }

        h1 {
            margin: 0 0 24px;
            text-align: center;
            color: red;
        }

        label {
            display: block;
            margin: 16px 0 6px;
            font-weight: 600;
        }

        input {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #cbd5e1;
            font: inherit;
        }

        input:focus {
            outline: 2px solid red;
            border-color: red;
        }

        button {
            width: 100%;
            margin-top: 24px;
            padding: 11px;
            border: 0;
            background: red;
            color: #fff;
            font: inherit;
            font-weight: 700;
            cursor: pointer;
        }

        button:hover {
            background: salmon;
        }
    </style>
</head>

<body>
    <form action="/proses-pelaporan" method="POST">
        <h1>FORM PELAPORAN</h1>
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="lokasi">Lokasi Kejadian:</label>
        <input type="text" id="lokasi" name="lokasi" required><br><br>

        <label for="tinggi">Tinggi Genangan (cm):</label>
        <input type="number" id="tinggi" name="tinggi" required><br><br>

        <button type="submit">Kirim Laporan</button>
    </form>
</body>

</html>