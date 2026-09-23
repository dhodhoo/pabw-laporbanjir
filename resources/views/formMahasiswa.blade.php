<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>
</head>

<body>
    <h1>Form Mahasiswa</h1>
    <form action="/proses-mahasiswa" method="POST">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama">
        <br>
        <label for="nim">NIM:</label>
        <input type="text" name="nim" id="nim">
        <br>
        <label for="prodi">Program Studi:</label>
        <input type="text" name="prodi" id="prodi">
        <br>
        <label for="semester">Semester:</label>
        <input type="text" name="semester" id="semester">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>