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
							    <a class="breadcrumb-item" href="<?php echo site_url('RujukanAlihTanganKasus/');?>"><span class="glyphicon glyphicon-book"></span> Rujukan Alih Tangan Kasus</a> > 
							  <span class="breadcrumb-item active"><span class="glyphicon glyphicon-search"></span> Detail</span>
							</nav>
							 <div class="panel panel-primary">
						      <div class="panel-heading">Formulir Ubah Rujukan Alih tangan kasus</div>
						      <div class="panel-body">
						      		<?php foreach($data as $list) { ?>
						      		<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('RujukanAlihTanganKasus/update') ;?>">
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
												<label for="input" class="col-sm-3 control-label">Jurusan</label>
												<div class="col-sm-9">
												<p class="p_adjust"><?php echo $list->jurusan;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Alamat</label>
												<div class="col-sm-9">
														<p class="p_adjust"><?php echo $list->alamat_rumah;?></p>
												</div>
											</div>
												</div>
												<div class="col-md-8">
						      <div class="panel-body">

											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">No surat</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->no_surat;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Perihal</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->perihal;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Pekerjaan</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->pekerjaan;?></p>
												</div>
											</div>

											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Masalah yang sedang dihadapi</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->masalah;?></p>
												</div>
											</div>

											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Laporan hasil konseling</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->hasil_konseling;?></p>
												</div>
											</div>

											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Catatan khusus</label>
												<div class="col-sm-9">
												<p class="p_adjust"><?php echo $list->catatan_khusus;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Rujukan kepada:</label>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Bapak / Ibu</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->yang_diundang;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Jabatan</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->jabatan;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Di</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->di;?></p>
												</div>
											</div>
											<div class="form-group">
									</form>
									<?php };?>
						      </div>
						</div>
					</div>
				</div>
<?php $this->load->view('include/footer');?>
</body>
</html>