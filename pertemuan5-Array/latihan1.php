<?php 

// array
// variabel yang dapat memiliki banyak nilai
// nilai array sekarang kita sebut "elemen"
// elemen pada array boleh memiliki tipe data yang berbeda
// Pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0

// dua cara membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");

// Cara baru
$bulan = ["Januari", "Februari", "Maret"];

// elemen pada array tipe datanya boleh berbeda
$arr1 = [123, "text", true];

$hari1 = 1;
$hari1 += 2;
echo $hari1;
// Menampilkan Array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// array(<jumlah elemen>) {
// [<index>] => 
// string(6) "Senin";
//}
// print_r($bulan);
// echo "<br>";
// Array{
// [0] => Januari
// }

// tidak bisa menggunakan echo, karena yang tampil adalah pembungkusnya
// $hari = array("Senin");
// echo $hari; yang tampil ialah Array

// Menampilkan 1 elemen pada array
// sesuai dengan index
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

// Menambah elemen baru pada array
// Pengolaan array sederhana
// var_dump($hari);
// $hari[] = "Kamis";
// $hari[] = "Jum'at";
// echo "<br>";
// var_dump($hari);



?>