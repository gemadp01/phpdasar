<?php 

// var_dump() dan print_r() digunakan untuk menampilkan array pada saat debugging
// untuk DEVELOPER

// menampilkan dengan cara yang benar
// Pengulangan pada array
// for / 
// foreach, pengulangan khusus array
$angka = [3, 2, 15, 20, 11];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>

<!-- mengulang div dengan perintah for-->
<!-- ($i = 0; $i < jumlah elemen pada array; $i++) -->
<!-- fungsi count() untuk menghitung jumlah elemen pada array -->
<?php for($i = 0; $i < count($angka); $i++) { ?>
    
    <div class="kotak"><?php echo $angka[$i]; ?></div>
<?php } ?>

<div class="clear"></div>

<!-- mengulang div dengan perintah foreach (mudah me-looping array) -->
<!-- foreach(untuk setiap elemen yang ada pada array lakukan sesuatu) -->
<!-- 
    $angka adalah arraynya, kita akan melakukan looping untuk tiap" elemen didalamnya
    ketika kita ambil 1 elemen, kita harus simpan kedalam variabel baru
    kemudian variabel baru tampilkan
    variabel baru mempresentasikan satu elemen dari elemen" yang ada pada array $angka
 -->
 <!-- 
    tutorial dalam bahasa inggris (plural dan singular)
    array ditulis biasanya dalam bentuk JAMAK
    as sebagai singular
    contoh
    $books as $book
    $students as $student
  -->
  <!-- 
    gak perlu mikir ngulang berapa kali, hitung elemen array ada berapa

   -->
   <br><br>
<?php foreach($angka as $a) { ?>
    <?php var_dump($angka); ?>
    <div class="kotak"><?php echo $a; ?></div>
<?php } ?>

<div class="clear"></div>

<!-- gaya penulisan templating -->
<?php foreach($angka as $a) : ?>
    <div class="kotak"><?= $a; ?></div>
<?php endforeach; ?>

</body>
</html>