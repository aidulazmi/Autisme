<?php
if(isset($_GET['page'])){
switch($_GET['page']){
	
	case 'defisiensi';
	include 'page/defisiensi/home.php';
	break;
	case 'gejala';
	include 'page/gejala/home.php';
	break;
	case 'pengetahuan';
	include 'page/pengetahuan/home.php';
	break;
	case 'keparahan';
	include 'page/keparahan/home.php';
	break;
	case 'identifikasi';
	include 'page/identifikasi/home.php';
	break;
	case 'daftardef';
	include 'page/daftardef/home.php';
	break;
}


}
else{
include 'page/home.php';

}

?>