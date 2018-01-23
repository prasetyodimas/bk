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
							    <a class="breadcrumb-item" href="<?php echo site_url('visit/HomeVisit');?>"><span class="breadcrumb-item active"><span class="glyphicon glyphicon-book"></span> Surat tugas home visit</span></a> > 
							  <span class="breadcrumb-item active"><span class="glyphicon glyphicon-edit"></span> Buat Surat</span>
							</nav>
							 <div class="panel panel-primary">
						      <div class="panel-heading">Formulir Surat tugas home visit</div>
						      <div class="panel-body">
						      		<form target="_blank" class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('visit/saveHomeVisit') ;?>">
										<div class="row">
											<div class="col-md-8">
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">No surat</label>
												<div class="col-sm-9">
													<input type="text" name="no_surat" class="form-control"  placeholder="Masukan Nomor surat..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Nama</label>
												<div class="col-sm-9">
													<input type="text" name="nama" class="form-control" placeholder="Masukan Nama..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">NIP</label>
												<div class="col-sm-9">
													<input type="text" name="nip" class="form-control" placeholder="Masukan NIP..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Jabatan</label>
												<div class="col-sm-9">
													<input type="text" name="jabatan" class="form-control" id="nis_view" placeholder="Masukan Jabatan..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Tanggal</label>
												<div class="col-sm-9">
													<input type="date" name="tanggal" class="form-control" id="nis_view" placeholder="Masukan tangal..">
												</div>
											</div>
												<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Waktu</label>
												<div class="col-sm-9">
													<input type="time" name="waktu" class="form-control" id="nis_view" placeholder="Masukan waktu..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Keperluan</label>
												<div class="col-sm-9">
													<textarea id="alamat" style="text-align:justify" placeholder="Masukkan keperluan.." name="keperluan" class="text-left control-label form-control" rows="5" cols="30"></textarea>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Tempat</label>
												<div class="col-sm-9">
													<input type="text" name="tempat" class="form-control" id="nis_view" placeholder="Masukan tempat..">
												</div>
											</div>
												<div class="form-group">
													<div class="col-sm-4 pull-right">
														<input type="submit"  class="form-control btn btn-block btn-primary" id="input" value="Cetak">
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