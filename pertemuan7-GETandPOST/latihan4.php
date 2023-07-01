<?php 

// metode request $_POST, data dikirim melalui form
// $_POST harus mempunyai form terlebih dahulu
// berbeda dengan $_GET karena data dikirim melalui url
// walaupun dengan menggunakan form, kita juga dapat menggunakan $_GET (Keduanya)
// url hanya bisa menggunakan $_GET
// kelebihan menggunakan form
// - ketika mengirimkan data kesebuah tempat/halaman
// data tidak akan terlihat pada url (penting saat membuat form login)
// $_POST

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    
    <!-- 
        form mempunyai 2 atribut penting yaitu action dan method
        ketika 2 atribut tersebut tidak di tulis, maka akan ada nilai default
     -->
     <!-- 
        cara baca*
        saya mau bikin sebuah form
        form ini menggunakan metode post dan semua datanya
        akan dikirimkan ke latihan5.php (action)
      -->
      <!-- 
        apabila action kosong, maka data akan dikirim ke halaman itu sendiri
       -->
    <!-- 
    apabila method kosong, default method get
    -->
    <!-- 
        jika sekarang udah pernah diset $_POST["nama"];
        maka tampilkan,
        apabila belum tidak tampil apa"
     -->
     <!-- 
        apakah tombol submit udah dipencet/belum
        apabila udah tampilkan pesan,
        apabila belum kosong
      -->
        <?php if(isset($_GET["submit"])) : ?>
            <h1>Halo, Selamat Datang <?= $_GET["nama"]; ?></h1>
        <?php endif; ?>
    <form action="" method="get">
        <label for="nama">Masukkan Nama :</label>
        <!-- 
            type dan name penting 
            name akan menjadi key di array associative $_POST
            value nya apapun yang diketikan
        -->
        <input type="text" name="nama" id="nama">
        <br>
        <!-- 
            untuk bisa mengirimkan datanya,
            membutuhkan tombol
         -->
        <button type="submit" name="submit">Kirim!</button>
    </form>

</body>
</html>