<?php 

// membuat sebuah data mahasiswa
// biasanya mahasiswa mempunyai
// nama, npm, jurusan, email

// array multidimensi/array didalam array
// urutan tidak boleh salah dikarenakan php akan menggapnya baik" saja
// semisal "npm", "nama"
// urutan penempatan akan terbalik
// apabila menggunakan teknik ini kita tidak dapat kasih tau data ini namanya apa
// karena array yang dibuat adalah array numerik
// array numerik adalah array yang index-nya angka
// untuk menghindari masalah ini
// kita mengubah array numerik menjadi array associative
// array associative, index-nya bukan lagi angka melainkan string (yang kita buat sendiri)
// untuk mengasosiasikan ke nilai yang ada pada array
$mahasiswa = [
    ["Gema Dodi Pranata", "19111038", "Informatika", "gemadp01@gmail.com"],
    ["Renza", "19111030", "Informatika", "renza@gmail.com"]
];




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    
    <h1>Daftar Mahasiswa</h1>
    <!-- kita akan menampilkan data mahasiswa dalam bentuk list -->
    <?php foreach($mahasiswa as $mhs) : ?>
    <?php var_dump($mhs); ?>
    <ul>
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NPM : <?= $mhs[1]; ?></li>
        <li>Jurusan : <?= $mhs[2]; ?></li>
        <li>Email : <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>

    
</body>
</html>