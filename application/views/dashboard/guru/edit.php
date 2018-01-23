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
			   <a class="breadcrumb-item" href="<?php echo site_url('guru');?>"><span class="glyphicon glyphicon-user"></span> Data Guru</a> > 
			   <span class="breadcrumb-item active">Formulir data Guru</span>
			</nav>
			 <div class="panel panel-primary">
		      <div class="panel-heading">Formulir data Guru</div>
		      <div class="panel-body">
		      	<?php foreach($data as $list) { ; ?>
		      	<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('guru/update') ;?>">
		      		<div class="row">
					<div class="col-md-7">
					<div class="form-group">
						<label for="input" class="col-sm-3 control-label">NIP</label>
						<div class="col-sm-9">
							<input type="text" name="nik" class="form-control" id="input" placeholder="Masukan NIP.." value="<?php echo $list->nis;?>" readonly>
						</div>
					</div>
					
					<div class="form-group">
						<label for="input" class="col-sm-3 control-label">Nama Lengkap</label>
						<div class="col-sm-9">
							<input value="<?php echo $list->nama;?>" type="text" name="nama" class="form-control" id="input" placeholder="Masukan nama..">
						</div>
					</div>
					<div class="form-group">
						<label for="input" class="col-sm-3 control-label">Kelas</label>
						<div class="col-sm-9">
							<input value="<?php echo $list->kelas;?>"  type="text" name="kelas" class="form-control" id="input" placeholder="Kelas..">
						</div>
					</div>
						<!-- <div class="form-group">
							<label for="input" class="col-sm-3 control-label">Password</label>
							<div class="col-sm-9">
								<input type="password" name="password" class="form-control" id="input" placeholder="Masukan password..">
							</div>
						</div>
						<div class="form-group">
							<label for="input" class="col-sm-3 control-label">Ulangi Password</label>
							<div class="col-sm-9">
								<input type="password" name="password2" class="form-control" id="input" placeholder="Masukan ulangi pasword..">
							</div>
						</div> -->
						<div class="form-group">
							<div class="col-sm-12">
								<input type="hidden" name="id_guru" value="<?php echo $list->id_guru;?>">
								<input type="submit"  class="form-control btn btn-block btn-primary" id="input" value="Ubah">
							</div>
						</div>
		      		</div>
					</div>
		      	</form>
		      	<?php ;} ;?>
		      </div>
		    </div>
		</div>
	</div>
</div>
<?php $this->load->view('include/footer');?>
</body>
</html>