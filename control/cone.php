<?php

$koneksi = mysqli_connect("localhost","root","","autis");

//cek

if(!$koneksi){

	die("Koneksi Gagal".mysqli_connect_error());
}
?>