<?php 

    // Date (perlu parameter)
    // memanggil sebuah fungsi date() di php untuk mengelola tanggal
    // untuk menampilkan tanggal dengan format tertentu
    // l = hari
    // d = tanggal
    // M = bulan (bulan dalam bentuk huruf)
    // m = bulan (bulan dalam bentuk angka), etc
    // echo date("l, d-M-Y");

    // Time (tidak memerlukan parameter)
    // time relatif terhadap waktu hari ini
    // UNIX Timestamp / EPOCH time
    // detik yang sudah berlalu sejak 1 Januari 1970
    // echo time();
    // date dengan dua parameter "l", time(), untuk sekarang sama saja
    // time() untuk menghitung berapa hari kedepan atau belakang
    // dengan hitungan detik
    // + (untuk tambah), - (untuk hitung kebelakang)
    // echo date("d M Y", time()+60*60*24*100);
    // atau
    // mktime
    // membuat sendiri detik
    // mk(0,0,0,0,0,0)
    // jam, menit, detik, bulan, tanggal, tahun
    // echo date("l", mktime(0, 0, 0, 8, 15, 2001));

    // strtotime
    // format tanggal, output detik
    var_dump("l", strtotime("15 aug 2001"));
?>