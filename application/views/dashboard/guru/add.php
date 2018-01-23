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
							   <a class="breadcrumb-item" href="<?php echo site_url('guru');?>"><span class="glyphicon glyphicon-user"></span> Data Guru BK</a> > 
							   <span class="breadcrumb-item active">Formulir data Guru BK baru</span>
							</nav>
							 <div class="panel panel-primary">
						      <div class="panel-heading">Formulir data Guru BK baru</div>
						      <div class="panel-body">
						      	<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('guru/register') ;?>">
						      		<div class="row">
									<div class="col-md-7">
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">NIP</label>
										<div class="col-sm-9">
											<input type="text" name="nik" class="form-control" id="input" placeholder="Masukan NIP..">
										</div>
									</div>
									
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">Nama Lengkap</label>
										<div class="col-sm-9">
											<input type="text" name="nama" class="form-control" id="input" placeholder="Masukan nama..">
										</div>
									</div>
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">Kelas</label>
										<div class="col-sm-9">
											<input type="text" name="Kelas" class="form-control" id="input" placeholder="Kelas..">
										</div>
									</div>
										<div class="form-group">
											<label for="input" class="col-sm-3 control-label">Password</label>
											<div class="col-sm-9">
												<input type="password" name="password" class="form-control" id="input" placeholder="Masukan password..">
											</div>
										</div>
										<div class="form-group">
											<label for="input" class="col-sm-3 control-label">Ulangi Password</label>
											<div class="col-sm-9">
												<input type="password" name="password2" class="form-control" id="input" placeholder=" Ulangi Pasword..">
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-12">
												<input type="submit"  class="form-control btn btn-block btn-primary" id="input" value="simpan">
											</div>
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