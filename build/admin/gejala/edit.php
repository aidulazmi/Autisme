<?php
$koneksi = mysqli_connect("localhost","root","","autis");
$id=$_GET['id'];
$jum=mysqli_num_rows(mysqli_query($koneksi,"select * from gejala where id_gejala='$id'"));
$qwr=mysqli_fetch_assoc(mysqli_query($koneksi,"select * from gejala where id_gejala='$id'"));
if($jum<=0){
?>
<script>
	 window.location='?page=<?php echo $_GET['page']; ?>&alert=1';
</script>
<?php
}
else{
if(isset($_POST['simpan'])){
	// simpan data
	$sql = ("UPDATE gejala SET 
	 
  `gejala` = '$_POST[gejala]',
  `ringan` = '$_POST[ringan]',
  `sedang` = '$_POST[sedang]',
  `berat` = '$_POST[berat]'
	 where `id_gejala` = '$_POST[kode]'
	");
	
	
  	if(mysqli_query($koneksi,$sql)) {
?>
<script>
	 window.location='?page=<?php echo $_GET['page']; ?>&alert=1';
</script>
<?php
  	} 
}
?>


<div class="row">
        <div class="col-lg-12 col-xlg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
						<div class="col-md-12">
						<a href="?page=<?=$_GET['page']?>" class="btn btn-sm btn-warning"><i class="mdi mdi-backburger"></i>&nbsp;&nbsp;Kembali</a><hr />
						</div></div>
						<div class="row">
						<div class="col-md-3"></div>
						<div class="col-md-8">
					   <form class="m-t-40" novalidate  method="post" name="demo-form" enctype="multipart/form-data">
                                   
								
								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="website">Kode Gejala<span class="text-danger">*</span>:</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" id="kode" name="kode" readonly=""  placeholder="Kode Gejala" value="<?=$qwr['id_gejala']?>" required>
									</div>
								</div>
								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="website">Gejala<span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" id="gejala" name="gejala"  value="<?=$qwr['gejala']?>"  placeholder="Gejala" required>
									</div>
								</div>
								
								<div class="form-group row m-b-15">
									<label class="col-md-12 col-sm-12 col-form-label" for="website"><em>Nilai Tingkat Keparahan</em><span class="text-danger">*</span> :</label>
									
								</div>
								
								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="website">Ringan<span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" onkeypress="return hanyaAngka(event)"   value="<?=$qwr['ringan']?>" type="text" id="ringan" name="ringan"  placeholder="Ringan" required>
									</div>
								</div>
								
								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="website">Sedang<span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
									
										<input class="form-control" onkeypress="return hanyaAngka(event)"  value="<?=$qwr['sedang']?>"  type="text" id="agak_parah" name="sedang"  placeholder="Sedang" required>
									</div>
								</div>
								
								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="website">Berat<span class="text-danger">*</span> :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" onkeypress="return hanyaAngka(event)"  value="<?=$qwr['berat']?>"  id="parah" name="berat"  placeholder="Berat" required>
									</div>
								</div>
								
								
								<div class="form-group row m-b-0">
									<label class="col-md-4 col-sm-4 col-form-label">&nbsp;</label>
									<div class="col-md-8 col-sm-8">
										<button type="submit" class="btn btn-primary" style="width:100%" name="simpan">Submit</button>
									</div>
								</div>
                            </form>	
					</div>
					</div>
               	</div>
			</div>
		</div>
	</div>
<script>
 ! function(window, document, $) {
        "use strict";
        $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(), $(".skin-square input").iCheck({
            checkboxClass: "icheckbox_square-green",
            radioClass: "iradio_square-green"
        }), $(".touchspin").TouchSpin(), $(".switchBootstrap").bootstrapSwitch();
    }(window, document, jQuery);
    </script>


<?php }?>