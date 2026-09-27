<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi Anak</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 480px;
            margin: 40px auto;
            color: #333;
        }

        h1 {
            font-size: 24px;
        }

        form {
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 20px;
        }

        .field {
            margin-bottom: 14px;
        }

        label {
            display: block;
            margin-bottom: 4px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"],
        textarea {
            width: 100%;
            box-sizing: border-box;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font: inherit;
        }

        textarea {
            height: 70px;
            resize: vertical;
        }

        .radio {
            font-weight: normal;
            margin-bottom: 6px;
        }

        .radio input {
            margin-right: 6px;
        }

        button {
            background-color: #2563eb;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 18px;
            font: inherit;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <h1>Form Registrasi Anak</h1>
    <form action="/proses-data-anak" method="POST">
        @csrf
        <div class="field">
            <label for="nama">Nama Anak</label>
            <input type="text" name="nama" id="nama">
        </div>
        <div class="field">
            <label>Jenis Kelamin</label>
            <label class="radio"><input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki</label>
            <label class="radio"><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan</label>
        </div>
        <div class="field">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir">
        </div>
        <div class="field">
            <label for="nama_orang_tua">Nama Orang Tua</label>
            <input type="text" name="nama_orang_tua" id="nama_orang_tua">
        </div>
        <div class="field">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat"></textarea>
        </div>
        <button type="submit">Daftar</button>
    </form>
</body>

</html>
