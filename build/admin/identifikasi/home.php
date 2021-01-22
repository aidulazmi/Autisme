<?php 
$page='Identifikasi';
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
						<h3>Pilih Gejala</h3>
						
					   <div class="">
					   <?php
					   include "notif.php";
					   ?>
					    <form class="m-t-40" novalidate action="?page=<?=$_GET['page']?>&act=proses"  method="post" name="demo-form">
                                   
								
								<?php 
								$koneksi = mysqli_connect("localhost","root","","autis");
								$q=mysqli_query($koneksi,"select * from gejala");
								while($p=mysqli_fetch_assoc($q)){
								?>
								<div class="form-group row m-b-15">
									<div class="col-md-12 col-sm-12">
										<input type="checkbox" onchange="return bukadiv<?=$p['id_gejala']?>()"  id="gejala<?=$p['id_gejala']?>" name="gejala<?=$p['id_gejala']?>" class="chk-col-red" />
                                    <label for="gejala<?=$p['id_gejala']?>"><?=$p['gejala']?></label>
									</div>
								</div>
								<div class="row edtt" style=" margin-bottom:100px; display:none" id="row<?=$p['id_gejala']?>">
									<div class="col-md-4" style="text-align:center">
									<input name="keparahan<?=$p['id_gejala']?>" type="radio" id="ringan<?=$p['id_gejala']?>" value="ringan" class="radio-col-red" checked />
									 <label for="ringan<?=$p['id_gejala']?>">
									<br />
									Ringan : <?=$p['ringan']?>
									</label>
									</div>
									<div class="col-md-4" style="text-align:center">
									<input name="keparahan<?=$p['id_gejala']?>" type="radio" id="sedang<?=$p['id_gejala']?>" value="sedang" class="radio-col-red"  />
									 <label for="sedang<?=$p['id_gejala']?>">
									<br />
									sedang : <?=$p['sedang']?>
									</label>
									</div>
									<div class="col-md-4" style="text-align:center">
									<input name="keparahan<?=$p['id_gejala']?>" type="radio" id="berat<?=$p['id_gejala']?>" class="radio-col-red"  value="berat" />
									 <label for="berat<?=$p['id_gejala']?>">
									<br />
									Berat : <?=$p['berat']?>
									</label>
									</div>
								</div>
							<script>
							function bukadiv<?=$p['id_gejala']?>(){
								if($('#gejala<?=$p['id_gejala']?>').is(':checked')==true){
									$('#row<?=$p['id_gejala']?>').show();
								}
								else{
									$('#row<?=$p['id_gejala']?>').hide();
								}
							}
							</script>
								<?php }?>
								
								<div class="form-group row m-b-0">
									
									<div class="col-md-12 col-sm-12" style="text-align:right">
										<button type="submit" class="btn btn-primary" name="simpan" style="min-width:150px">Proses</button>
									</div>
								</div>
                            </form>	
					   
                                    
                                </div>
					</div>
					</div>
               	</div>
			</div>
		</div>
	</div>
	
	<?php
}
else if($_GET['act'] == "proses"){include "proses.php";}
?>
</div>
