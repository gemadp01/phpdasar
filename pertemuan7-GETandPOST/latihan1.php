<?php 

// Variable Scope / lingkup variabel
// $x adalah variable local untuk latihan1.php
$x = 10;

// lingkup variable $x yang didalam function beda dengan diluar function
// meskipun nama variable sama, tetapi 2 variable ini berbeda

function tampilX() {
    // variable didalam function hanya berlaku di didalam function
    // mendefinisikan variable $x, apakah ada variable $x diluar function
    global $x;
    echo $x;
}

tampilX();

?>