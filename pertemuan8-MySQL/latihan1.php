<?php 

// Data, Representasi FAKTA di dunia nyata
// Contoh: nama, judul buku, No KTP, Harga, Foto, Video, Dokumen
// Data saling terkait dan dapat dihubungkan terhadap sesuatu
// Buku = judul, pengarang, penerbit, dll (data buku)
// Mahasiswa = nama, nrp, email, jurusan, dll (data mahasiswa)

// Masalah dalam mengelola data: kapasitas, kecepatan, keamanan, duplikasi
// Solusi: Skalabilitas, Tersedia, Aman, Permanen

// DataBase Management System (Software untuk mengelola Database)
// Oracle, MySQL, SQL Server, PostgreSQL, MongoDB

// Database adalah data didalam dbms-nya
// jadi, DBMS dapat mengelola database

// Jenis-jenis DBMS
// Relational DBMS, Hierarchical DBMS, Network DBMS, NoSQL DBMS
// MongoDB itu adalah NoSQL DBMS (tidak menggunakan SQL)

// SQL merupakan bahasa sendiri untuk melakukan interaksi pada db

// MySQL yang akan dipelajari masuk kedalam Relational DBMS (RDBMS)
// didalam database dapat membuat keterhubungan antar data-nya
// Database yang didalamnya mempunyai tabel

// Tabel dalam database
// Baris = record
// Kolom = Field (berisikan juga aturan)

// Data Mahasiswa
// Field = Nama, NPM, Email, Jurusan, Gambar
// Record = data 1 mahasiswa

// Primary Key, 
// sebuah data yang dapat merepresentasikan satu baris record secara unik
// unik = tidak boleh ada data yang sama

// Misal Mahasiswa dengan field = Nama, NPM, Email, Jurusan, Gambar
// Nama, Jurusan, Gambar
// NPM dan Email merupakan kandidat yang dapat merepresentasikan record mahasiswa tertentu
// NPM = primary key (karena dengan npm dapat mengetahui field lainnya hanya dengan 1 npm)
/* 
tidak mungkin mahasiswa menentukan/memilih NPM nya sendiri
pasti dibuatkan oleh sistem/diinputkan oleh admin
misalkan diinput manual oleh admin
admin nya harus tau bahwa yang diinputkan belum ada sebelumnya

nah kita bisa membuat sistemnya mengisikan secara otomatis ketika mahasiswa baru datang
otomatis npm bertambah +1
19111001 = 19111002 
maka tipe datanya harus ANGKA

angka tidak mungkin dimulai dari 0 maka npm yang berawalan angka 0 harus diubah menjadi string
tidak bisa menjadi primary key

atau tidak membuat field baru yang isinya angka
yang mana angkanya dijumlahkan terus menerus (increment)
 
*/
// Istilah
// Field/Column, Row, Key (Primary & Foreign), Auto Increment, Relationship, Normalization

// menjalankan dbms-nya
// xampp/mysql/bin/mysql.exe

// akses mysql
// mysql -u root -p

?>