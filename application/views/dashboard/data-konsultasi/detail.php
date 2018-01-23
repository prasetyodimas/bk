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
							    <a class="breadcrumb-item" href="<?php echo site_url('DataKonsultasi/');?>"><span class="glyphicon glyphicon-file"></span> Data Konsultasi</a> > 
							  <span class="breadcrumb-item active"><span class="glyphicon glyphicon-search"></span> Detail</span>
							</nav>
							 <div class="panel panel-primary">
						      <div class="panel-heading">Formulir Detail Data Konsultasi</div>
						      <div class="panel-body">
						      	<?php foreach($data as $list) { ?>
						      		<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('DataKonsultasi/update') ;?>">
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
												<label for="input"  class="col-sm-3 control-label">Nama</label>
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
												<label for="input" class="col-sm-3 control-label">Menghadap</label>
												<div class="col-sm-9">
													 <p class="p_adjust"><?php echo $list->menghadap;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Jam ke</label>
												<div class="col-sm-9">
												 <p class="p_adjust"><?php echo $list->jam_ke;?></p>
												</div>
											</div>
												<div class="form-group">
												<label for="input" class="col-sm-3 control-label text-danger">Selesai Konsultasi</label>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Pukul</label>
												<div class="col-sm-9">
													 <p class="p_adjust"><?php echo $list->selesai_pukul;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Jam ke</label>
												<div class="col-sm-9">
													 <p class="p_adjust"><?php echo $list->selesai_jam_ke;?></p>
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