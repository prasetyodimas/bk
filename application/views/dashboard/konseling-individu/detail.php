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
							  <span class="breadcrumb-item active"><span class="glyphicon glyphicon-search"></span> detail</span>
							</nav>
							 <div class="panel panel-primary">
						      <div class="panel-heading">Formulir Detail Hasil Konseling Individu</div>
						      <div class="panel-body">
						      		<?php foreach($data as $list) { ?>
						      		<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('KonselingIndividu/update') ;?>">
										<div class="row">
											<div class="col-md-4">
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label text-danger">NIS</label>
												<div class="col-sm-9">
												<p class="p_adjust" id="nis"><?php echo $list->nis;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Nama</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->nama;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Kelas</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->kelas;?></p>
												</div>
											</div>
												<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Jurusan</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->jurusan;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Umur</label>
												<div class="col-sm-9">
												<p class="p_adjust" id="umur"></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Jenis Kelamin</label>
												<div class="col-sm-9">
													<p class="p_adjust" id="jkel"></p>
												</div>
											</div>

												</div>
												<div class="col-md-8">
												
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Tanggal Pelayanan</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->tanggal_pelayanan;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">pertemuan Ke</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->pertemuan_ke;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Format</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->format;?></p>
												</div>
											</div>

											<div class="form-group">
												<label for="input" class="col-sm-3 control-label text-danger">Identifikasi Masalah</label>
											</div>

											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Umum</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->klasifikasi_umum;?></p>
												</div>
											</div>

											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Belajar</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->belajar;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Deskrpisi Masalah</label>
											<p class="p_adjust"><?php echo $list->deskrpisi_masalah;?></p>
											</div>

											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Diagnosa</label>
												<div class="col-sm-9">
												<p class="p_adjust">Diagnosa 1: <?php echo $list->diagnosa1;?></p>
												<p class="p_adjust">Diagnosa 2: <?php echo $list->diagnosa2;?></p>
												<p class="p_adjust">Diagnosa 3: <?php echo $list->diagnosa3;?></p>
												</div>
											</div>

											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Prognosa</label>
												<div class="col-sm-9">
												<p class="p_adjust">Prognosa 1: <?php echo $list->prognosa1;?></p>
												<p class="p_adjust">Prognosa 2: <?php echo $list->prognosa2;?></p>
												<p class="p_adjust">Prognosa 3: <?php echo $list->prognosa3;?></p>
												</div>
											</div>

											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Treatment</label>
												<div class="col-sm-9">
													<p class="p_adjust">Tahap: <?php echo $list->tahap;?></p>
													<p class="p_adjust">Treatment: ahap <?php echo $list->treatment;?></p>
													<p class="p_adjust">Teknis: <?php echo $list->teknis;?></p>
												</div>
											</div>
											
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Evaluasi tindak lanjut</label>
												<div class="col-sm-9">
												<p class="p_adjust">Understanding: <?php echo $list->understanding;?></p>
												<p class="p_adjust">Comfort: <?php echo $list->comfort;?></p>
												<p class="p_adjust">Action: <?php echo $list->action;?></p>
												<p class="p_adjust">Tindak lanjut: <?php echo $list->tindak_lanjut;?></p>
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
			var nis=$('#nis').text();
			var url="<?php echo site_url();?>";
			$.getJSON({
				url:url+'visit/getData/'+nis,
				}).done(function(data){
					var result=data[0];
						console.log(result);
					if(result==undefined){
					}else{
						$("#nama").val(result.nama);
						$("#kelas").val(result.kelas);
						$("#alamat").val(result.alamat_rumah);
						$("#nis_view").val(result.nis);
						$("#id_student").val(result.id_student);
						$("#thn_ajaran").val(result.thn_pelajaran);
						$("#jurusan").val(result.jurusan);
						
						if(result.jkel==1){
							$('#jkel').text('laki laki');
						}else{
							$('#jkel').text('perempuan');	
						}
						var ttl=result.tanggal_lahir;
						var split=ttl.split('-');

						var year=parseInt(new Date().getFullYear())-parseInt(split[0],10);
						$('#umur').text(year);
					}
					
				});
		});

</script>
</body>
</html>