<?php 
$page='Gejala';
?>

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
    	<h3 class="text-themecolor"><?=$page?></h3>
    </div>
	<div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
        	<li class="breadcrumb-item active"><?=$page?></li>
		</ol>
    </div>
	<div>
    	<button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
	</div>
</div>
<div class="container-fluid">
<?php if(empty($_GET['act'])){?>

    <div class="row">
        <div class="col-lg-12 col-xlg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
						<div class="col-md-12">
						<a href="?page=<?=$_GET['page']?>&act=add" class="btn btn-sm btn-primary"><i class="mdi mdi-database-plus"></i>&nbsp;&nbsp;Tambah Data</a>
					   <div class="table-responsive m-t-40">
					   <?php
					   include "notif.php";
					   ?>
					   
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th rowspan="2" style="vertical-align: middle; text-align:center">Kode Gejala</th>
                                                <th rowspan="2" style="vertical-align: middle; text-align:center">Gejala</th>
											
                                                <th colspan="3" style="vertical-align: middle; text-align:center">Nilai Tingkat Keparahan</th>
                                                <th rowspan="2" style="vertical-align: middle; text-align:center">Aksi</th>
                                            </tr>
											<tr>
											<th style="vertical-align: middle; text-align:center">Ringan</th>
											<th style="vertical-align: middle; text-align:center">Sedang</th>
											<th style="vertical-align: middle; text-align:center">berat</th>
											</tr>
                                        </thead>
                                        <tbody>
										<?php 
										$koneksi = mysqli_connect("localhost","root","","autis");
										$cek=mysqli_query($koneksi,"select * from gejala");
										while($p=mysqli_fetch_assoc($cek)){
										?>
                                            <tr>
                                                <td style="vertical-align:middle"><?=$p['id_gejala']?></td>
                                                <td style="vertical-align:middle"><?=$p['gejala']?></td>
                                                <td style="vertical-align:middle"><?=$p['ringan']?></td>
                                                <td style="vertical-align:middle"><?=$p['sedang']?></td>
                                                <td style="vertical-align:middle"><?=$p['berat']?></td>
												<td style="vertical-align:middle"><a class="bnt btn-sm btn-warning" href="?page=<?php echo $_GET['page']; ?>&act=edit&id=<?=$p['id_gejala']?>"><i class="fa fa-edit"></i></a> &nbsp;
                            <a class="bnt btn-sm btn-danger" href="?page=<?php echo $_GET['page']; ?>&act=delete&id=<?=$p['id_gejala']?>" onClick="return confirm('Apakah Anda benar-benar mau menghapusnya?')"><i class="fa fa-trash"></i></a></td>
                                            </tr>
										<?php }?>
                                          
                                        </tbody>
                                    </table>
                                </div>
					</div>
					</div>
               	</div>
			</div>
		</div>
	</div>
	<script>
	$(document).ready(function() {
        $('#myTable').DataTable();
		});
	</script>
	<?php
}
else if($_GET['act'] == "add"){include "add.php";}
else if($_GET['act'] == "edit"){include "edit.php";}
else if($_GET['act'] == "delete"){include "delate.php";}
?>
</div>
