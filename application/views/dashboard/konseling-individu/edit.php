<!doctype html>
<html class="no-js" lang="">
<?php $this->load->view('include/header');?>
<body>
	<div class="container-fluid">
		<?php $this->load->view('dashboard/include/nav');?>
		<div class="row  main-container">
			<?php $this->load->view('dashboard/include/sidebar');?>
						<div class="col-md-9">
							<?php $this->load->view('dashboard/include/alert');?>
							<nav class="breadcrumb">
							  <a class="breadcrumb-item" href="<?php echo site_url('dashboard');?>"><span class="glyphicon glyphicon-home"></span> Beranda</a> > 
							    <a class="breadcrumb-item" href="<?php echo site_url('KonselingIndividu/');?>"><span class="glyphicon glyphicon-file"></span>Konseling Individu </a>
							  <span class="breadcrumb-item active"><span class="glyphicon glyphicon-edit"></span> Edit</span>
							</nav>
							 <div class="panel panel-primary">
						      <div class="panel-heading">Formulir Ubah Hasil Konseling Individu</div>
						      <div class="panel-body">
						      		<?php foreach($data as $list) { ?>
						      		<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('KonselingIndividu/update') ;?>">
										<div class="row">
											<div class="col-md-4">
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label text-danger">NIS</label>
												<div class="col-sm-9">
												<div class="input-group">
												  <input type="text" value="<?php echo $list->nis;?>" name="nis" class="form-control" id="nis" placeholder="Masukan NIS..">
												    <span class="input-group-btn">
											        <button class="btn btn-primary" type="button" id="search">Cari </button>
											      </span>
												</div>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Nama</label>
												<div class="col-sm-9">
													<input  type="text" disabled name="nama" class="form-control" id="nama" placeholder="Masukan Nama siswa..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Kelas</label>
												<div class="col-sm-9">
													<input type="text"  disabled name="kelas" class="form-control" id="kelas" placeholder="Masukan kelas..">
												</div>
											</div>
												<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Jurusan</label>
												<div class="col-sm-9">
													<input type="text" disabled name="jurusan" class="form-control" id="jurusan" placeholder="Masukan Jurusan..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Umur</label>
												<div class="col-sm-9">
													<input type="text"  disabled name="umur" class="form-control" id="umur" placeholder="Masukan Umur..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Jenis Kelamin</label>
												<div class="col-sm-9">
													<input type="radio" name="jkel" id="jkel1"> Laki-laki
													<input type="radio" name="jkel" id="jkel2"> Perempuan
												</div>
											</div>

												</div>
												<div class="col-md-8">
												
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Tanggal Pelayanan</label>
												<div class="col-sm-9">
													<input type="date" value="<?php echo $list->tanggal_pelayanan;?>" name="tanggal_pelayanan" class="form-control" placeholder="Tanggal pelayanan..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">pertemuan Ke</label>
												<div class="col-sm-9">
													<input type="text" value="<?php echo $list->pertemuan_ke;?>" name="pertemuan_ke" class="form-control" placeholder="Pertemuan ke..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Format</label>
												<div class="col-sm-9">
													<?php
													if($list->format=='individu') { ?>
													<input type="radio" name="format" value="individu" checked> Individu
													<input type="radio" name="format" value="kelompok"> Kelompok<br>
													<?php }else{ ;?>
													<input type="radio" name="format" value="individu"> Individu
													<input type="radio" name="format" value="kelompok" checked> Kelompok<br>
													<?php } ;?>
												</div>
											</div>

											<div class="form-group">
												<label for="input" class="col-sm-3 control-label text-danger">Identifikasi Masalah</label>
											</div>

											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Umum</label>
												<div class="col-sm-9">
													
													<input type="radio" name="klasifikasi_umum" value="jdk" <?php if($list->klasifikasi_umum=='jdk'){ echo 'checked';};?>> JDK 
													<input type="radio" name="klasifikasi_umum" value="edk" <?php if($list->klasifikasi_umum=='edk'){ echo 'checked';};?>> EDK 
													<input type="radio" name="klasifikasi_umum" value="anm" <?php if($list->klasifikasi_umum=='anm'){ echo 'checked';};?>> ANM 
													<input type="radio" name="klasifikasi_umum" value="khk" <?php if($list->klasifikasi_umum=='khk'){ echo 'checked';};?>> KHK 
													<input type="radio" name="klasifikasi_umum" value="dpi" <?php if($list->klasifikasi_umum=='dpi'){ echo 'checked';};?>> DPI 
													<input type="radio" name="klasifikasi_umum" value="kdp" <?php if($list->klasifikasi_umum=='kdp'){ echo 'checked';};?>> KDP 
													<input type="radio" name="klasifikasi_umum" value="hmm" <?php if($list->klasifikasi_umum=='hmm'){ echo 'checked';};?>> HMM 
													<input type="radio" name="klasifikasi_umum" value="wsg" <?php if($list->klasifikasi_umum=='wsg'){ echo 'checked';};?>> WSG 
													<input type="radio" name="klasifikasi_umum" value="hso" <?php if($list->klasifikasi_umum=='hso'){ echo 'checked';};?>> HSO 
													<input type="radio" name="klasifikasi_umum" value="hkp" <?php if($list->klasifikasi_umum=='hkp'){ echo 'checked';};?>> KHP 
													<input type="radio" name="klasifikasi_umum" value="hpm" <?php if($list->klasifikasi_umum=='hpm'){ echo 'checked';};?>> HMP 
													<input type="radio" name="klasifikasi_umum" value="-" <?php if($list->klasifikasi_umum=='-'){ echo 'checked';};?>> - 
												</div>
											</div>

											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Belajar</label>
												<div class="col-sm-9">
													<input type="radio" name="belajar" value="p" <?php if($list->belajar=='p'){ echo 'checked';};?>> P 
													<input type="radio" name="belajar" value="t" <?php if($list->belajar=='t'){ echo 'checked';};?>> T 
													<input type="radio" name="belajar" value="s" <?php if($list->belajar=='s'){ echo 'checked';};?>> S
													<input type="radio" name="belajar" value="d" <?php if($list->belajar=='d'){ echo 'checked';};?>> D
													<input type="radio" name="belajar" value="l" <?php if($list->belajar=='l'){ echo 'checked';};?>> L
													<input type="radio" name="belajar" value="-" <?php if($list->belajar=='-'){ echo 'checked';};?>> -
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Deskrpisi Masalah</label>
												<div class="col-sm-9">
												<textarea style="text-align:justify" placeholder="Masukkan deskripsi masalah.." name="deskrpisi_masalah" class="text-left control-label form-control" rows="5" cols="30"><?php echo $list->deskrpisi_masalah;?></textarea>
												</div>
											</div>

											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Diagnosa</label>
												<div class="col-sm-9">
												<input type="text" value="<?php echo $list->diagnosa1;?>" name="diagnosa1" class="form-control" placeholder="Masukan Diagnosa 1.."><br>
												<input type="text" value="<?php echo $list->diagnosa2;?>" name="diagnosa2" class="form-control" placeholder="Masukan Diagnosa 2.."><br>
												<input type="text" value="<?php echo $list->diagnosa3;?>" name="diagnosa3" class="form-control" placeholder="Masukan Diagnosa 3..">
												</div>
											</div>

											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Prognosa</label>
												<div class="col-sm-9">
												<input type="text" value="<?php echo $list->prognosa1;?>" name="prognosa1" class="form-control" placeholder="Masukan prognosa 1.."><br>
												<input type="text" value="<?php echo $list->prognosa2;?>" name="prognosa2" class="form-control" placeholder="Masukan prognosa 2.."><br>
												<input type="text" value="<?php echo $list->prognosa3;?>" name="prognosa3" class="form-control" placeholder="Masukan prognosa 3..">
												</div>
											</div>

											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Treatment</label>
												<div class="col-sm-3">
													<textarea style="text-align:justify" placeholder="Masukkan Tahap.." name="tahap" class="text-left control-label form-control" rows="5" cols="30"><?php echo $list->tahap;?></textarea>
												</div>
												<div class="col-sm-3">
												<textarea style="text-align:justify" placeholder="Masukkan treatment.." name="treatment" class="text-left control-label form-control" rows="5" cols="30"><?php echo $list->treatment;?></textarea>
												</div>
												<div class="col-sm-3">
												<textarea style="text-align:justify" placeholder="Masukkan pendekatan / teknis .." name="teknis" class="text-left control-label form-control" rows="5" cols="30"><?php echo $list->teknis;?></textarea>
												</div>

											</div>
											
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Evaluasi tindak lanjut</label>
												<div class="col-sm-9">
												<input type="text" value="<?php echo $list->understanding;?>" name="understanding" class="form-control" placeholder="Masukan Understanding.."><br>
												<input type="text" value="<?php echo $list->comfort;?>" name="comfort" class="form-control" placeholder="Masukan comfort.."><br>
												<input type="text" value="<?php echo $list->action;?>" name="action" class="form-control" placeholder="Masukan Action.."><br>
												<textarea style="text-align:justify" placeholder="Masukkan Tindak Lanjut.." name="tindak_lanjut" class="text-left control-label form-control" rows="5" cols="30"><?php echo $list->tindak_lanjut;?></textarea>
												</div>
											</div>


										
											<input id="id_student" type="hidden" value="<?php echo $list->id_student;?>" name="id_student">
											<input type="hidden" value="<?php echo $list->id_konseling_individu;?>" name="id_konseling_individu">
											<div class="form-group">
													<div class="col-sm-6 pull-right">
														<input type="submit"  class="form-control btn btn-block btn-primary" id="input" value="update">
													</div>
												</div>

												</div>
												
									</form>
									<?php };?>
						      </div>
						    </div>
						</div>
					</div>
				</div>
<?php $this->load->view('include/footer');?>
	<script type="text/javascript">
		$(document).ready(function(){
			var nis=$('#nis').val();
			var url="<?php echo site_url();?>";
			$.getJSON({
				url:url+'visit/getData/'+nis,
				}).done(function(data){
					var result=data[0];
						console.log(result);
					if(result==undefined){
						alert("data siswa tidak ditemukan");
					}else{
						$("#nama").val(result.nama);
						$("#kelas").val(result.kelas);
						$("#alamat").val(result.alamat_rumah);
						$("#nis_view").val(result.nis);
						$("#id_student").val(result.id_student);
						$("#thn_ajaran").val(result.thn_pelajaran);
						$("#jurusan").val(result.jurusan);
						
						if(result.jkel==1){
							$('#jkel1').prop('checked', true);
						}else{
							$('#jkel2').prop('checked', true);	
						}
						var ttl=result.tanggal_lahir;
						var split=ttl.split('-');

						var year=parseInt(new Date().getFullYear())-parseInt(split[0],10);
						$('#umur').val(year);
					}
					
				});

			
			$("#search").click(function(e){
				e.preventDefault();
				var nis=$('#nis').val();
				$.getJSON({
				url:url+'visit/getData/'+nis,
				}).done(function(data){

					var result=data[0];
						console.log(result);
					if(result==undefined){
						alert("data siswa tidak ditemukan");
					}else{
						$("#nama").val(result.nama);
						$("#kelas").val(result.kelas);
						$("#alamat").val(result.alamat_rumah);
						$("#nis_view").val(result.nis);
						$("#id_student").val(result.id_student);
						$("#thn_ajaran").val(result.thn_pelajaran);
						$("#jurusan").val(result.jurusan);
						
						if(result.jkel==1){
							$('#jkel1').prop('checked', true);
						}else{
							$('#jkel2').prop('checked', true);	
						}
						var ttl=result.tanggal_lahir;
						var split=ttl.split('-');

						var year=parseInt(new Date().getFullYear())-parseInt(split[0],10);
						$('#umur').val(year);
					}
					
				});

			})
			

		})
	</script>
</body>
</html>