<div class="row">
	<div class="col-lg-12 col-xlg-12">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-md-12">
						<a href="?page=<?=$_GET['page']?>" class="btn btn-sm btn-warning"><i class="mdi mdi-backburger"></i>&nbsp;&nbsp;Kembali</a><hr />
					</div></div>
				<div class="row">
						
					<div class="col-md-12">
						<?php 
						$n_keparahan['ringan'] = 'ringan';
						$n_keparahan['sedang'] = 'sedang';
						$n_keparahan['berat'] = 'berat';
						$koneksi = mysqli_connect("localhost","root","","autis");
						$t_keparahan=array();
						$pp=mysqli_fetch_assoc(mysqli_query($koneksi,"select * from keparahan where id_keparahan='1'"));
						$t_keparahan['ringan']['min']=$pp['rangeMin'];
						$t_keparahan['ringan']['max']=$pp['rangeMax'];
						$pp=mysqli_fetch_assoc(mysqli_query($koneksi,"select * from keparahan where id_keparahan='2'"));
						$t_keparahan['sedang']['min']=$pp['rangeMin'];
						$t_keparahan['sedang']['max']=$pp['rangeMax'];
						$pp=mysqli_fetch_assoc(mysqli_query($koneksi,"select * from keparahan where id_keparahan='3'"));
						$t_keparahan['berat']['min']=$pp['rangeMin'];
						$t_keparahan['berat']['max']=$pp['rangeMax'];
						$gejala=array();
						$q=mysqli_query($koneksi,"select * from gejala");
						while($p=mysqli_fetch_assoc($q)){
							if(isset($_POST['gejala'.$p['id_gejala']])){
								$gejala[$p['id_gejala']]['nama'] = $p['gejala'];
								$gejala[$p['id_gejala']]['tingkat'] = $_POST['keparahan'.$p['id_gejala']];
								$gejala[$p['id_gejala']]['nilai'] = $p[$_POST['keparahan'.$p['id_gejala']]];
							
								$nilai=0;
								$a=$t_keparahan[$_POST['keparahan'.$p['id_gejala']]]['min'];
								$b=($t_keparahan[$_POST['keparahan'.$p['id_gejala']]]['min']+$t_keparahan[$_POST['keparahan'.$p['id_gejala']]]['max'])/2;
								$c=$t_keparahan[$_POST['keparahan'.$p['id_gejala']]]['max'];
								$x=$gejala[$p['id_gejala']]['nilai'];
								if(($x>=$a)&&($x<=$b)){
									$nilai = ($x-$a)/($b-$a);
								}
								else if(($x>=$b)&&($x<=$c)){
									$nilai = ($c-$x)/($c-$b);
							
								}
								$gejala[$p['id_gejala']]['belief'] = $nilai;
								$gejala[$p['id_gejala']]['plausa'] = 1-$nilai;
							 
						
							}
							?>
							<?php }?>
						
					    
						 
						<h4>Gejala yang dipilih: </h4>
						
						<div class="card w-100">
                            <div class="card-body">
							<table class="table table-bordered">
							<tr><th>Kode Gejala</th><th>Gejala</th><th>Keparahan</th></tr>
							<?php foreach($gejala as $aa=>$bb){?>
							<tr><td><?=$aa?></td><td><?=$bb['nama']?></td><td><?=$n_keparahan[$bb['tingkat']]?></td></tr>
							<?php }?>
							</table>
							
							
							</div>
						</div>
						
						<div id="divproses" style="display:none">
						<table class="table table-bordered">
							<?php 
							$def=array();
							$hitung=array();
							$no=0;

							foreach($gejala as $a=>$b){
								$no++;
								$def[$a]=array();
								$pp=mysqli_query($koneksi,"select * from pengetahuan where id_gejala = '$a'");
								$txt='';
								while($qq=mysqli_fetch_assoc($pp)){
									if($txt==''){
										$txt.='{'.$qq['id_defisiensi'];
									}
									else{
										$txt.=', '.$qq['id_defisiensi'];
									}
						 
									array_push($def[$a],$qq['id_defisiensi']);
								}
								$txt.='}';
						 
								?>
								<tr>
									<td colspan="4"><?=$a?> | <?=$b['nama']?></td>
								</tr>
								<tr><th>Keparahan</th><th>Belief</th><th>Plausability</th></th><th>Defisiasi</th></tr>
								<tr><td><?=$n_keparahan[$b['tingkat']]?></td><td><?=$b['belief']?></td><td><?=$b['plausa']?><td><?=$txt?></td></tr>
								<tr><td colspan="4">
										<?php 
										if(count($def)==1){
											$hitung[$txt]=$b['belief'];
											$hitung['{teta}']=$b['plausa'];
											?>
											M<?=$no?> <?=$txt?> : <?=$b['belief']?><br />
											M<?=$no?>{teta} : <?=$b['plausa']?><br />
											<?php
										}else{
											?>
											<table class="table table_borderd">
												<tr><td></td>
													<td>M<?=$no?> <?=$txt?> : <?=$b['belief']?></td>
													<td>M<?=$no?>{teta} : <?=$b['plausa']?></td>
												</tr>
												<?php 
												$hitungBaru=array();
												$newhitung=array();
												$newhitung2=array();
												foreach($hitung as $aa=>$bb){
													$nilbaru1='';
													$angkabaru=0;
													$bnt1=str_replace('}','',str_replace('{','',$aa));
													$bnt2=str_replace('}','',str_replace('{','',$txt));
													$arbnt1=explode(',',$bnt1);
													$arbnt2=explode(',',$bnt2);
													if($bnt1=='teta'){
														$nilbaru1=$txt;
													}else if($bnt2=='teta'){
														$nilbaru1=$aa;
													}
													else{
														$nilbnt=array_intersect($arbnt1,$arbnt2);
														$nilbaru1='';
														foreach($nilbnt as $aa1=>$bb1){
															if($nilbaru1==''){
																$nilbaru1.='{'.$bb1;
															} else{
																$nilbaru1.=','.$bb1;
															}
														}
														if($nilbaru1==''){
														$nilbaru1.='{';
														}	
														$nilbaru1.='}';
													}
								
													$nilbaru2=$aa;
													$hitungBaru[$aa][$txt]=$b['belief']*$bb;
													$hitungBaru[$aa]['{tera}']=$b['plausa']*$bb;
													if($nilbaru1!='{}'){
													$newhitung[$nilbaru1]=@$newhitung[$nilbaru1]+$hitungBaru[$aa][$txt];
													}
													if($nilbaru2!='{}'){
													$newhitung[$nilbaru2]=@$newhitung[$nilbaru2]+$hitungBaru[$aa]['{tera}'];
													}
													if($nilbaru1!='{}'){
													if((!isset($newhitung2[$nilbaru1]))){
														$newhitung2[$nilbaru1]='( '.$hitungBaru[$aa][$txt];
													}else{
														$newhitung2[$nilbaru1].=' + '.$hitungBaru[$aa][$txt];
													}
													}
													
													if($nilbaru2!='{}'){
													
													if((!isset($newhitung2[$nilbaru2]))){
														$newhitung2[$nilbaru2]='( '.$hitungBaru[$aa]['{tera}'];
													}else{
														$newhitung2[$nilbaru2].=' + '.$hitungBaru[$aa]['{tera}'];
													}
													}
													//array_intersect
													?>
													<tr>
														<td>M<?=$no-1?><?=$aa?> : <?=$bb?></td>
														<?php if($nilbaru1=='{}'){
														?>
														<td>{} <?=$hitungBaru[$aa][$txt]?></td>
														<?php
														} else{
														?>
														<td><?=$nilbaru1?> : <?=$hitungBaru[$aa][$txt]?></td>
														<?php } ?>
														
														<?php if($nilbaru2=='{}'){
														?>
														<td>{}</td>
														<?php
														} else{
														?>
														<td><?=$nilbaru2?> : <?=$hitungBaru[$aa]['{tera}']?></td>
														<?php }?>
													</tr>
													<?php }
													
													$no++;
													?>
											</table>
											<?php 
											$hitung=$newhitung;
											foreach($newhitung as $aax=>$bbx){?>
											M<?=$no?> <?=$aax?> = <?=$newhitung2[$aax]?> ) / 1-0 = <?=$bbx?><br />
											<?php } ?>
											
											<?php
											//$newhitung;
										}
										
										
										?>
						 
									</td></tr>
								<?php
								
								 }
								
								 ?>
						</table>
						</div>
						<?php 
								 
								 $hasil= array_keys($hitung,max($hitung));
								 $hasilnya=$hasil[0];
								
						?>
						<h4>Hasil Identifikasi: <button id="tbuka" class="btn btn-info btn-sm" style="float:right; margin-bottom:10px" onclick="return bukadiv()">Tampilkan Proses</button>
						<button onclick="return tutupdiv()" id="ttutup" class="btn btn-warning btn-sm" style="float:right; margin-bottom:10px; display:none">Sembunyikan Proses</button>
						</h4> 
						<script>
							function bukadiv(){
							$('#tbuka').hide();
							$('#ttutup').show();
							$('#divproses').show();
							
							}
							function tutupdiv(){
							$('#tbuka').show();
							$('#ttutup').hide();
							$('#divproses').hide();
							}
						</script>
						<div class="card w-100">
                            <div class="card-body">
                                
                                <p class="card-text">Hasil Identifikasi Menunjukan Anak Autis/Tidak mengalami defisiensi unsur hara : <br />
								<ul>
									<?php
									 $bnt1=str_replace('}','',str_replace('{','',$hasilnya));
									 $arbnt1=explode(',',$bnt1);
									 $solusi = '';
									 foreach($arbnt1 as $ha=>$hb){
									 $hbbnt=str_replace(' ','',$hb);
									$qh=mysqli_fetch_assoc(mysqli_query($koneksi,"select * from defisiensi where id_defisiensi = '$hbbnt'"));
									$solusi .= '<p>'.$qh['solusi'].$bnt1.'</p>';
									?>
									<li><?=$qh['id_defisiensi']?> : <?=$qh['defisiensi']?></li>
									<?php } ?>
								</ul>
								</p>
								<h5>Solusi</h5>
								<p><?=$solusi?></p>
                                
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
