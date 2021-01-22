<?php
if(@$_GET['alert'] == "1"){
?>
<div class="alert alert-success alert-rounded"><i class="mdi mdi-check"></i> Data Berhasi Disimpan <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">x</span> </button></div>
<?php	
}
?>

<?php
if(@$_GET['alert'] == "2"){
?>
<div class="alert alert-success alert-rounded"><i class="mdi mdi-recycle"></i>  Data Berhasi Dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">x</span> </button></div>
<?php	
}
?>

<?php
if(@$_GET['alert'] == "3"){
?>
<div class="alert alert-danger">Terjadi Kesalahan <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">x</span> </button> </div>
<?php	
}
?>

<?php
if(@$_GET['alert'] == "4"){
?>
<script>
$.gritter.add({
			title: 'Success!',
			text: 'Data Berhasil Ditambahkan ',
			
			sticky: true,
			time: '',
			class_name: 'my-sticky-class'
		});
</script>
<?php	
}
?>