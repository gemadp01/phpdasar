<?php 

// cek apakah tidak ada data di $_GET
// isset, apabila sebuah variabel sudah di bikin/ada isi tampilkan
// !isset, apabila sebuah variabel tidak/belum dibikin tidak ada isinya 
// !isset = belum dibikin
// isset = udah dibikin
if(!isset($_GET["nama"]) ||
    !isset($_GET["npm"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["gambar"])) {
    // paksa user pindah dari halaman ke halaman lain
    // redirect
    header("Location: latihan2.php");
    // fungsi exit, agar script di bawahnya tidak dieksekusi
    exit;
}
// ketika kita langsung pindah ke latihan 3 tanpa mengirim datanya lewat url 
// maka akan error
// karena superglobals $_GET berusaha mencetak elemen yang tidak ada
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    
    <ul>
        <li>
            <!-- url mempunyai batas karakter/string, nanti yang dikirim berupa identifier(id) -->
            <!-- 
                metode request get, adalah metode pengiriman data melalui url, 
                dan data tersebut bisa diambil/ditangkap oleh variable superglobals $_GET
             -->
            <!-- "gambar" diambil dari key yang dikirim pada url ?gambar=... -->
            <img src="img/<?= $_GET["gambar"]; ?>" alt="<?= $_GET["nama"]; ?>">
        </li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["npm"]; ?></li>
        <li><?= $_GET["jurusan"]; ?></li>
        <li><?= $_GET["email"]; ?></li>
    </ul>

    <br>
    <a href="latihan2.php">Kembali ke daftar mahasiswa</a>

</body>
</html>