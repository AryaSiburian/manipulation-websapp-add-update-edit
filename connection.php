<?php

$koneksi = mysqli_connect("localhost", "root", "", "mahasiswa" );

if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
