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
							    <a class="breadcrumb-item" href="<?php echo site_url('Agenda/');?>"><span class="glyphicon glyphicon-book"></span> Agenda Kegiatan</a> > 
							  <span class="breadcrumb-item active"><span class="glyphicon glyphicon-edit"></span> Edit</span>
							</nav>
							 <div class="panel panel-primary">
						      <div class="panel-heading">Formulir Buat Agenda Kegiatan</div>
						      <div class="panel-body">
						      	<?php foreach($data as $list) { ?>
						      		<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('Agenda/update') ;?>">
										<div class="row">
											<div class="col-md-8">
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Tanggal</label>
												<div class="col-sm-9">
													<input value="<?php echo $list->tgl;?>" type="date" name="tgl" class="form-control" placeholder="Tanggal kejadian..">
												</div>
											</div>
										
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Kegiatan</label>
												<div class="col-sm-9">
													<textarea style="text-align:justify" placeholder="Masukkan Kegiatan.." name="kegiatan" class="text-left control-label form-control" rows="5" cols="30"><?php echo $list->kegiatan;?></textarea>
												</div>
											</div>

											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">keterangan</label>
												<div class="col-sm-9">
													<textarea style="text-align:justify" placeholder="Masukkan keterangan.." name="keterangan" class="text-left control-label form-control" rows="5" cols="30"><?php echo $list->keterangan;?></textarea>
												</div>
											</div>
											<input type="hidden" value="<?php echo $list->id_agenda;?>" name="id_agenda">
											<div class="form-group">
													<div class="col-sm-6 pull-right">
														<input type="submit"  class="form-control btn btn-block btn-primary" id="input" value="ubah">
													</div>
												</div>
											</div>
												
									</form>
									<?php }?>
						      </div>
						    </div>
						</div>
					</div>
				</div>
<?php $this->load->view('include/footer');?>
</body>
</html>