<?php 

// $mahasiswa = [
//     ["Gema Dodi Pranata", "19111038", "gemadp01@gmail.com", "Teknik Informatika"],
//     ["Renza", "19111030", "Informatika", "renza@gmail.com"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Gema Dodi Pranata", 
        "npm" => "19111038",
        "jurusan" => "Teknik Informatika",
        "email" => "gemadp01@gmail.com",
        "gambar" => "gema.png"
    ],
    [
        "nama" => "Renza", 
        "npm" => "19111030",
        "jurusan" => "Teknik Informatika",
        "email" => "renza@gmail.com",
        "gambar" => "renza.png"
    ]
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

    <?php foreach($mahasiswa as $mhs) : ?>
        <?php var_dump($mhs); ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>" alt="<?= $mhs["nama"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NPM : <?= $mhs["npm"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
    

</body>
</html>