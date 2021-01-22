<?php
if(isset($_GET['page'])){
switch($_GET['page']){

	case 'gejala';
	include 'build/admin/gejala/gejala.php';
	break;
	case 'pengetahuan';
	include 'page/pengetahuan/home.php';
	break;
	
	case 'identifikasi';
	include 'build/admin/identifikasi/home.php';
	break;
	case 'daftardef';
	include 'page/daftardef/home.php';
	break;
}


}
else{
include 'build/home.php';

}

?>