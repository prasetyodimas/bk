<!doctype html>
<html class="no-js" lang="">
<?php $this->load->view('include/header');?>
<body>
	<div class="container-fluid">
		<?php $this->load->view('dashboard/include/nav');?>
		<div class="row  main-container">
			<?php $this->load->view('dashboard/include/sidebar');?>
						<div class="col-md-9">
							<nav class="breadcrumb">
							  <a class="breadcrumb-item" href="<?php echo site_url('dashboard');?>"><span class="glyphicon glyphicon-home"></span> Beranda</a> > 
							    <a class="breadcrumb-item" href="<?php echo site_url('HasilKonferensi/');?>"><span class="glyphicon glyphicon-blackboard"></span> Hasil Konferensi</a> > 
							  <span class="breadcrumb-item active"><span class="glyphicon glyphicon-searchs"></span> Detail</span>
							</nav>
							 <div class="panel panel-primary">
						      <div class="panel-heading">Formulir Detail Hasil Konferensi</div>
						      <div class="panel-body">
						      		<?php foreach($data as $list) { ?>
						      		<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('HasilKonferensi/update') ;?>">
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
												</div>
												<div class="col-md-8">
												
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Tanggal</label>
												<div class="col-sm-9">
													<p class="p_adjust"> <?php echo  date("d-m-Y", strtotime($list->tanggal));?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Deskripsi kasus</label>
												<div class="col-sm-9">
												<p class="p_adjust"><?php echo $list->deskripsi_kasus;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label text-danger">Dafter Peserta Konferensi Kasus</label>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Peserta 1</label>
												<div class="col-sm-9">
													<div class="row">
														<div class="col-sm-6">
														<p class="p_adjust"><?php echo $list->nama_1;?></p>
														</div>
														<div class="col-sm-6">
														<p class="p_adjust"><b>Jabatan: </b> <?php echo $list->jabatan_1;?></p>
														</div>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Peserta 2</label>
												<div class="col-sm-9">
													<div class="row">
														<div class="col-sm-6">
														<p class="p_adjust"><?php echo $list->nama_2;?></p>
														</div>
														<div class="col-sm-6">
														<p class="p_adjust"><b>Jabatan: </b> <?php echo $list->jabatan_2;?></p>
														</div>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Peserta 3</label>
												<div class="col-sm-9">
													<div class="row">
														<div class="col-sm-6">
														<p class="p_adjust"><?php echo $list->nama_3;?></p>
														</div>
														<div class="col-sm-6">
														<p class="p_adjust"><b>Jabatan: </b> <?php echo $list->jabatan_3;?></p>
														</div>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Peserta 4</label>
												<div class="col-sm-9">
													<div class="row">
														<div class="col-sm-6">
														<p class="p_adjust"><?php echo $list->nama_4;?></p>
														</div>
														<div class="col-sm-6">
														<p class="p_adjust"><b>Jabatan: </b><?php echo $list->jabatan_4;?></p>
														</div>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Peserta 5</label>
												<div class="col-sm-9">
													<div class="row">
														<div class="col-sm-6">
														<p class="p_adjust"><?php echo $list->nama_5;?></p>
														</div>
														<div class="col-sm-6">
														<p class="p_adjust"><b>Jabatan: </b> <?php echo $list->jabatan_5;?></p>
														</div>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Hasil Konferensi kasus</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->hasil;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Evaluasi Tindak Lanjut</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->evaluasi;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Catatan khusus</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->catatan;?></p>
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