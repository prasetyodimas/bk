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
							    <a class="breadcrumb-item" href="<?php echo site_url('UndanganKonferensi/');?>"><span class="glyphicon glyphicon-bullhorn"></span> Undangan Konferensi kasus</a> > 
							  <span class="breadcrumb-item active"><span class="glyphicon glyphicon-plus"></span> Tambah</span>
							</nav>
							 <div class="panel panel-primary">
						      <div class="panel-heading">Formulir Undangan Konferensi Kasus</div>
						      <div class="panel-body">
						      		<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('UndanganKonferensi/save') ;?>">
										<div class="row">
										<div class="col-md-8">
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">No surat</label>
												<div class="col-sm-9">
													<input type="text" name="no_surat" class="form-control" placeholder="No surat..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Perihal</label>
												<div class="col-sm-9">
													<input type="text" name="perihal" class="form-control" id="input" placeholder="Perihal..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Rujukan kepada:</label>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Bapak / Ibu</label>
												<div class="col-sm-9">
													<input type="text" name="yang_diundang" class="form-control" id="input" placeholder="Bapak / Ibu .. ">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Di</label>
												<div class="col-sm-9">
													<input type="text" name="di" class="form-control" id="input" placeholder="Di..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Tanggal</label>
												<div class="col-sm-9">
													<input type="date" name="tanggal" class="form-control" id="input" placeholder="Tanggal..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Waktu</label>
												<div class="col-sm-9">
													<input type="time" name="waktu" class="form-control" id="input" placeholder="Waktu..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Tempat</label>
												<div class="col-sm-9">
													<input type="text" name="tempat" class="form-control" id="input" placeholder="Waktu..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Keperluan</label>
												<div class="col-sm-9">
													<textarea style="text-align:justify" placeholder="Keperluan.." name="keperluan" class="text-left control-label form-control" rows="5" cols="30"></textarea>
												</div>
											</div>
											<div class="form-group">
													<div class="col-sm-6 pull-right">
														<input type="submit"  class="form-control btn btn-block btn-primary" id="input" value="simpan">
													</div>
											</div>
												</div>
									</form>
						      </div>
						    </div>
						</div>
					</div>
				</div>
<?php $this->load->view('include/footer');?>
</body>
</html>