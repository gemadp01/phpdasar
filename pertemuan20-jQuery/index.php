<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
require 'functions.php';



$mahasiswa = query("SELECT * FROM mahasiswa");

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
        $mahasiswa = query("SELECT * FROM mahasiswa");
        // var_dump($mahasiswa);
    } else {
        $mahasiswa = cari($_POST["keyword"]);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        .loader {
            width: 30px;
            position: absolute;
            top: 135px;
            left: 330px;
            z-index: -1;
            display: none;
        }
    </style>
    <script src="js/jquery-3.7.0.min.js"></script>
    <script src="js/script.js"></script>

</head>

<body>
    <a href="logout.php">Logout</a>

    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah data mahasiswa</a>
    <br><br>

    <form action="" method="post" id="pencarian">
        <input type="text" name="keyword" id="keyword" size="40" autofocus autocomplete="off" placeholder="Masukkan kata pencarian...">
        <button type="submit" name="cari" id="tombolCari">Cari</button>
        <img src="img/Rhombus.gif" class="loader">
    </form>

    <?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic;">Data tidak ditemukan!</p>
    <?php endif; ?>

    <div id="container">
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
    </div>


</body>

</html>