<?php
require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

//Ketika tombol cari di tekan
if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
    if ($mahasiswa == null) {
        $error = true;
        $mahasiswa = query("SELECT * FROM mahasiswa");
    }
    // var_dump($mahasiswa);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>

    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah data mahasiswa</a>
    <br><br>

    <form action="" method="post" id="pencarian">
        <input type="text" name="keyword" size="40" autofocus autocomplete="off" placeholder="Masukkan kata pencarian...">
        <button type="submit" name="cari">Cari</button>
    </form>

    <?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic;">Data tidak ditemukan!</p>
    <?php endif; ?>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>

            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <tbody>

            <?php $i = 1; ?>
            <?php foreach ($mahasiswa as $row) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td>
                        <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> ||
                        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Do you want to delete?')">Hapus</a>
                    </td>
                    <td>
                        <img src="img/<?= $row["gambar"]; ?>" alt="<?= $row["nama"]; ?>" width="50">
                    </td>
                    <td><?= $row["npm"]; ?></td>
                    <td><?= $row["nama"]; ?></td>
                    <td><?= $row["email"]; ?></td>
                    <td><?= $row["jurusan"]; ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>


</body>

</html>