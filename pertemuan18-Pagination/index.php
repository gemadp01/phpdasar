<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
require 'functions.php';

$jumlahDataPerHalaman = 2;
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;

$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

// var_dump($awalData);

$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");

//Ketika tombol cari di tekan
if (isset($_POST["cari"])) {

    $keyword = $_POST["keyword"];
    $result = mysqli_query($conn, "SELECT * FROM mahasiswa
                            WHERE
                                nama LIKE '%$keyword%' OR
                                npm LIKE '%$keyword%' OR
                                email LIKE '%$keyword%' OR
                                jurusan LIKE '%$keyword%'
                            ");
    // var_dump(mysqli_num_rows($result));
    // die();
    if ($_POST["keyword"] === "" || mysqli_num_rows($result) === 0) {
        $error = true;
        $mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");
        // var_dump($mahasiswa);
    } else {
        $mahasiswa = cari($_POST["keyword"]);
        $jumlahData = count($mahasiswa);
        $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
        $halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;

        var_dump($jumlahData);
    }
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
    <a href="logout.php">Logout</a>

    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah data mahasiswa</a>
    <br><br>

    <form action="" method="post" id="pencarian">
        <input type="text" name="keyword" size="40" autofocus autocomplete="off" placeholder="Masukkan kata pencarian...">
        <button type="submit" name="cari">Cari</button>
    </form>
    <br><br>

    <?php if ($halamanAktif > 1) : ?>
        <a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo</a>
    <?php endif; ?>
    <!-- Navigasi -->
    <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
        <?php if ($i == $halamanAktif) : ?>
            <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: red;"><?= $i; ?></a>
        <?php else : ?>
            <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>

    <?php if ($halamanAktif < $jumlahHalaman) : ?>
        <a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo</a>
    <?php endif; ?>


    <?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic;">Data tidak ditemukan!</p>
    <?php endif; ?>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>

            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>NPM</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <tbody>

            <?php $i = 1; ?>
            <?php foreach ($mahasiswa as $row) : ?>
                <tr>
                    <td><?= $i + $awalData; ?></td>
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