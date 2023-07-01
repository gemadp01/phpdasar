<?php
require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // cek apakah data berhasil di tambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "data berhasil ditambahkan!";
    } else {
        echo "data gagal ditambahkan!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data mahasiswa</title>
</head>

<body>

    <h1>Tambah data mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="npm">NPM : </label>
                <input type="text" name="npm" id="npm" placeholder="NPM">
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" placeholder="Nama">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" placeholder="Email">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" placeholder="Jurusan">
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>
        </ul>
    </form>

</body>

</html>