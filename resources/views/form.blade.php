<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <form action="/proses" method="POST">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama">
        <br>
        <label for="umur">Umur:</label>
        <input type="number" name="umur" id="umur">
        <br>
        <label for="alamat">Alamat:</label>
        <textarea name="alamat" id="alamat"></textarea>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>