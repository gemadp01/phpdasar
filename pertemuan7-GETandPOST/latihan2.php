<?php 

// Variable Superglobals adalah variable-variable yang sudah dimiliki php
// yang bisa diakses dimanapun dan kapanpun dihalaman php kita
// variable ini walaupun tidak dibuat, sudah di siapkan oleh php
// $_GET
// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV *Environment
// variable superglobals merupakan array associative
// perlakukan lah variable superglobals ini sebagaimana memperlakukan array associative

// $_GET
// memasukkan data dengan cara normal
// $_GET["nama"] = "gemadp";

// memasukkan data ke dalam $_GET 
// menggunakan string didalam url/alamat websitenya
// ? (sekarang saya akan memasukkan data ke halaman ini (kedalam variabel $_GET))
// menggunakan key dan value
// phpdasar/pertemuan7/latihan1.php?nama=Gema Dodi Pranata
// ?nama=Gema Dodi Pranata
// yang berarti saya akan memasukkan sebuah data yang key-nya nama dan value nya Gema dodi pranata kedalam variable $_GET
// saya bisa mengirimkan data ke halaman ini menggunakan metode request $_GET
/* 
    jadi kalau metode request $_GET
    datanya akan dikirim di url
    kemudian data tersebut akan ditangkap oleh variable superglobals $_GET
*/
// tanda spasi pada url %20
// & (untuk menambah data selanjutnya)
// url?nama=Gema Dodi Pranata&npm=19111038

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

// get memungkinkan data yang di klik sesuai dengan halaman tujuan
// data dikirim melalui url, dibagian href
$test = [1]; 
$_GET["nama"] = "gemaa";
var_dump(isset($_GET));
var_dump($_GET);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    
    <h1>Daftar Mahasiswa</h1>
<!-- karena di halaman latihan 3 ditulis secara manual
dengan menggunakan get nanti 
kita bisa tau data yang tampil di latihan 3 akan sesuai dengan data yang diklik oleh user di halaman latihan 2 
-->
<!-- kita harus kirimkan dulu datanya kehalaman 3 menggunakan url metode request get-->
<?php 

// latihan3.php?nama=<?= $mhs["nama"]; ? > 

?>
    
        <ul>
            <?php foreach($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan3.php?gambar=<?= $mhs["gambar"]; ?>&nama=<?= $mhs["nama"]; ?>&npm=<?= $mhs["npm"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&email=<?= $mhs["email"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
            <?php endforeach; ?>
        </ul>
    

        

</body>
</html>