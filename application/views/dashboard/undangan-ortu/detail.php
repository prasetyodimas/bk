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
							    <a class="breadcrumb-item" href="<?php echo site_url('SuratUndanganOrangTua/index');?>"><span class="glyphicon glyphicon-bullhorn"></span> Undangan Orang Tua</a> > 
							  <span class="breadcrumb-item active"><span class="glyphicon glyphicon-search"></span> Detail</span>
							</nav>
							 <div class="panel panel-primary">
						      <div class="panel-heading">Formulir Undangan Orang tua</div>
						      <div class="panel-body">
						      		<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('SuratUndanganOrangTua/update') ;?>">
						      		<?php foreach($data as $list ) { ?>
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
												<label for="input" class="col-sm-3 control-label">Orang Tua</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->orang_tua;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Di</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->di;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Tanggal</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->tanggal;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Waktu</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->waktu;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Tempat</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->tempat;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Keperluan</label>
												<div class="col-sm-9">
														<p class="p_adjust"><?php echo $list->keperluan;?></p>
												</div>
											</div>
												</div>
												<?php };?>
									</form>
						      </div>
						    </div>
						</div>
					</div>
				</div>
<?php $this->load->view('include/footer');?>
</body>
</html>