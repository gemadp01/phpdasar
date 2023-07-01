<?php
    //Koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");

    // ambil data dari tabel mahasiswa / istilahnya query data mahasiswa
    $result = mysqli_query($conn, "SELECT * FROM mahasiswa");

    // $mhs = mysqli_fetch_assoc($result);
    // $rows = [];
    // while($row = mysqli_fetch_assoc($result)) {
    //     $rows[] = $row;
    // var_dump($row);
        
    // }
    // var_dump($mhs);
    $mahasiswa = [
        "nama" => "Gema Dodi Pranata", 
        "npm" => "19111038"];
    var_dump($mahasiswa);
    

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
            <?php while($row = mysqli_fetch_assoc($result)) : ?>

            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="">Ubah</a> ||
                    <a href="">Hapus</a>
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
            <?php endwhile; ?>
        </tbody>
    </table>

</body>
</html>