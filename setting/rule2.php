<?php
if(isset($_GET['page'])){
switch($_GET['page']){

	case 'identifikasi';
	include 'build/pasien/identifikasi/home.php';
	break;

}


}
else{
include 'build/home.php';

}

?>