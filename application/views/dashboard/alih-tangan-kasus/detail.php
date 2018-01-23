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
							    <a class="breadcrumb-item" href="<?php echo site_url('SatkungAlihTanganKasus');?>"><span class="glyphicon glyphicon-book"></span> Satkung Alih tangan Kasus</a> > 
							  <span class="breadcrumb-item active"><span class="glyphicon glyphicon-search"></span> detail</span>
							</nav>
							 <div class="panel panel-primary">
						      <div class="panel-heading">Formulir Detail Satkung Alih tangan Kasus</div>
						      <div class="panel-body">
						      		<?php foreach($data as $list) { ?>
						      		<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('SatkungAlihTanganKasus/update') ;?>">
										<div class="row">
											<div class="col-md-4">
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label text-danger">NIS</label>
												<div class="col-sm-9">
												<div class="input-group">
												 <p class="p_adjust"><?php echo $list->nis;?></p>
												</div>
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
												<label for="input" class="col-sm-3 control-label">Alamat Rumah</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->alamat_rumah;?></p>
												</div>
											</div>
												</div>
												<div class="col-md-8">
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Topik / Permasalahan</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->topik;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Bidang Bimbingan</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->bidang_bimbingan;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Jenis Kegiatan</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->jenis_kegiatan;?></p>
												</div>
											</div>
												<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Fungsi Kegiatan</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->fungsi_kegiatan;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Tujuan Kegiatan</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->tujuan_kegiatan;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Hasil yang ingin dicapai</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->hasil;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Subjek yang mengalami masalah</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->subjek;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Gambaran ringkas masalah</label>
												<div class="col-sm-9">
												<p class="p_adjust"><?php echo $list->ringkas;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Kepada siapa di alih tangankan</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->kepada;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Alasan pengalihan tangan</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->alasan;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Kapan pengalihan tangan</label>
												<div class="col-sm-9">
												<p class="p_adjust"><?php echo $list->kapan;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Bahan yang disertakan dalam alih tangan</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->bahan;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Kegiatan pendukung terdahulu</label>
												<div class="col-sm-9">
												<p class="p_adjust"><?php echo $list->pendukung;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Rencana penilaian / tindak lanjut kegiatan</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->tindak_lanjut;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Catatan khusus</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->catatan_khusus;?></p>
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
</body>
</html>