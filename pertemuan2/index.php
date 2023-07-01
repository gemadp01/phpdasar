<?php 

// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Output
// echo, print
// print_r(); (khusus mencetak array)
// var_dump(); (untuk melihat isi dari variable, tampil informasi variabel tersebut)
// untuk debugging (mengidentifikasi dan menemukan masalah)

// echo "Gema Dodi Pranata";

// Penulisan Sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP (Tidka disarankan)

// Variabel dan Tipe data
// Variabel, (untuk menampung sebuah nilai)
// Tidak boleh diawali dengan angka, tapi boleh mengandung angka
// Penulisan variabel tidak boleh memakasi strip dan spasi

// $nama = "Gema";

// Interpolasi apabila menggunakan kutip 1 tidak jalan sebaliknya dengan kutip 2 akan berjalan, echo "nama $nama";

// Operator
// Aritmatika, + - * / %
// Concatenation / Concat / Penggabung String
// titik "."
// $nama_depan = "gema";
// $nama_belakang = "dp";
// echo $nama_depan . " " . $nama_belakang;

// Assignment / Operator Penugasan
// =, +=, -=, *=, /=, %=, .=
// Ketika nama variabel ditulis 2x/sama maka variabel pertama akan ditimpa dengan variabel ke 2
// $x = 1;
// $x -= 5;
// echo $x;
// $nama = "Gema";
// $nama .= " ";
// $nama .= "dp";
// echo $nama;

// Operator Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 < 5); akan menghasilkan boolean
// apabila var_dump(1 == "1"); tidak mengecek identitas/tipe data

// Operator Identitas
// ===, !== (mengecek nilai dan tipe data)
// var_dump(1 === "1");

// Operator Logika
// &&, ||, !

?>