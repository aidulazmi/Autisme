<?php
$koneksi = mysqli_connect("localhost","root","","autis");
$id=$_GET['id'];

$jum=mysqli_num_rows(mysqli_query($koneksi,"select * from gejala where id_gejala='$id'"));
$qwr=mysqli_fetch_assoc(mysqli_query($koneksi,"select * from gejala where id_gejala='$id'"));
if($jum>0){

mysqli_query($koneksi,"delete from gejala where id_gejala='$id'");
?>
<script>
	 window.location='?page=<?php echo $_GET['page']; ?>&alert=2';
</script>
<?php
} else{
?>
<script>
	 window.location='?page=<?php echo $_GET['page']; ?>';
</script>
<?php
 }?>