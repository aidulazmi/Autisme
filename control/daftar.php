<?php
$koneksi = mysqli_connect("localhost","root","","autis");
						    $carikode = mysqli_query($koneksi,"select max(id) from user") or die (mysqli_error());
						  // menjadikannya array
						  $datakode = mysqli_fetch_array($carikode);
						  // jika $datakode
						   if ($datakode) {
						   // membuat variabel baru untuk mengambil kode barang mulai dari 1
						   $nilaikode = substr($datakode[0], 3);
						   // menjadikan $nilaikode ( int )
						   $kode = (int) $nilaikode;
						   // setiap $kode di tambah 1
						   $kode = $kode + 1;
						   // hasil untuk menambahkan kode 
						   // angka 3 untuk menambahkan tiga angka setelah B dan angka 0 angka yang berada di tengah
						   // atau angka sebelum $kode
						   $hasilkode = "USA".str_pad($kode, 3, "0", STR_PAD_LEFT);
						  } 
						  else {
						   $hasilkode = "USA001";
 						  }

$username = @$_POST['username'];
$password = @$_POST['password'];
$hakakses = @$_POST['hakakses'];
$nama = @$_POST ['nama'];
$jk = @$_POST ['jk'];
$email = @$_POST ['email'];
$hp = @$_POST ['hp'];
$Simpan = @$_POST ['simpan'];



if (isset($Simpan)){

 if ($username == "" || $password == "" || $nama == "" || $jk == "") { ?>
	 <script type="text/javascript">alert("Form tidak boleh kosong");document.location = 'index.php?pages=master'</script>
	     <?php 
      } else {


	$sql=  mysqli_query($koneksi,"INSERT INTO user VALUES ('$hasilkode', '$username','$password','$hakakses','$nama','$jk','$email','$hp')");
	if ($sql){
		?>
			<script> alert('Anda Berhasil Mendaftar');document.location = '../index.php'  </script>
         <?php
		}
		else {
		?>
			<script> alert('Anda Gagal Mendaftar');history.back();</script>
         <?php
		}
	}
}
?>
