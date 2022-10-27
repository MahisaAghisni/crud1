<?php

$host = 'webapp.cuzqsi4uwlwo.us-east-1.rds.amazonaws.com';
$nama = 'root';
$pass = 'root12345678';
$db = 'webapp';

$koneksi = mysqli_connect($host, $nama,$pass, $db);
if (!$koneksi){
    die("Koneksi gagal:".mysqli_connect_error());
}

?>