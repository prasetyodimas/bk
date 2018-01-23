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
							    <a class="breadcrumb-item" href="<?php echo site_url('visit');?>"><span class="glyphicon glyphicon-road"></span> Data Kunjungan Rumah</a> > 
							  <span class="breadcrumb-item active"><span class="glyphicon glyphicon-search"></span> Detail</span>
							</nav>
							 <div class="panel panel-primary">
						      <div class="panel-heading">Formulir edit data Kunjungan Rumah</div>
						      <div class="panel-body">
						      		<?php foreach($data as $list ) { ?>
						      		<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('visit/update') ;?>">
										<div class="row">
											<div class="col-md-6">
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Nama Siswa</label>
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
												<label for="input" class="col-sm-3 control-label">NIS</label>
												<div class="col-sm-9">
														<p class="p_adjust"><?php echo $list->nis;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Alamat Rumah</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->alamat_rumah;?></p>
												</div>
											</div>
												</div>
												<div class="col-md-6">
												<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Tanggal Kunjungan</label>
												<div class="col-sm-9">
														<p class="p_adjust"> <?php echo  date("d-m-Y", strtotime($list->tgl_kunjungan));?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">petugas 1</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->nama_petugas_1;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">NIP</label>
												<div class="col-sm-9">
												
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Jabatan</label>
												<div class="col-sm-9">
												<p class="p_adjust"><?php echo $list->jabatan_1;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">petugas 2</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->nama_petugas_2;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">NIP</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->nip_petugas_2;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Jabatan</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->jabatan_1;?></p>
												</div>
											</div>
												<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Hasil Kunjungan</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->hasil;?></p>
												</div>
											</div>
												</div>
									</form>
									<?php } ;?>
						      </div>
						    </div>
						</div>
					</div>
				</div>
<?php $this->load->view('include/footer');?>
</body>
</html>