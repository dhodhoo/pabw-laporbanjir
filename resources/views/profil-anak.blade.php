<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Anak</title>
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

        .profil {
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 20px;
        }

        .baris {
            display: flex;
            padding: 8px 0;
            border-bottom: 1px solid #eee;
        }

        .baris:last-child {
            border-bottom: none;
        }

        .label {
            width: 130px;
            font-weight: bold;
        }

        .nilai {
            flex: 1;
        }

        a {
            display: inline-block;
            margin-top: 16px;
            color: #2563eb;
        }
    </style>
</head>

<body>
    <h1>Profil Anak</h1>
    <div class="profil">
        <div class="baris">
            <div class="label">Nama Anak</div>
            <div class="nilai">{{ $nama }}</div>
        </div>
        <div class="baris">
            <div class="label">Jenis Kelamin</div>
            <div class="nilai">{{ $jenisKelamin }}</div>
        </div>
        <div class="baris">
            <div class="label">Tanggal Lahir</div>
            <div class="nilai">{{ $tanggalLahir }}</div>
        </div>
        <div class="baris">
            <div class="label">Nama Orang Tua</div>
            <div class="nilai">{{ $namaOrangTua }}</div>
        </div>
        <div class="baris">
            <div class="label">Alamat</div>
            <div class="nilai">{{ $alamat }}</div>
        </div>
    </div>
    <a href="/form-registrasi-anak">Isi form lagi</a>
</body>

</html>
