<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
$koneksi = mysqli_connect("localhost","root","","autis");
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['hakakses']=="Admin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['hakakses'] = "Admin";
		// alihkan ke halaman dashboard admin
		//header("location:../build/admin/home.php");
		header("location:../index1.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['hakakses']=="Pakar"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['hakakses'] = "Pakar";
		// alihkan ke halaman dashboard pegawai
		header("location:../build/pakar/pakar.php");
 
	// cek jika user login sebagai pengurus
	}else if($data['hakakses']=="Pasien"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['hakakses'] = "Pasien";
		// alihkan ke halaman dashboard pengurus
		header("location:../index2.php");
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:../index.php?pesan=gagal");
	}	
}else{
	header("location:../index.php?pesan=gagal");
}
 
?>