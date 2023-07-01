<?php 

// fungsi harus didefinisikan terlebih dahulu
// function biasa mengembalikan NILAI
function salam($waktu = "datang",$nama = "Gemadp") {
    return "Selamat Datang, $nama!";
}
// ketika argument hanya 1 dan parameter 2 maka akan error
// cara mengakalinya ialah memberi isi pada parameter variabel pertama (default)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    
    <h1><?= salam("gemadp"); ?></h1>

</body>
</html>