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
							   <a class="breadcrumb-item" href="<?php echo site_url('student');?>"><span class="glyphicon glyphicon-user"></span> Data Pribadi Siswa</a> > 
							   <span class="breadcrumb-item active">Upload Daftar Siswa</span>
							</nav>
				<div class="panel panel-primary">
				<div class="panel-heading">
				Upload Daftar Siswa
				<div class="btn-group pull-right">
					<a href="<?php echo site_url('student/add');?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-plus"></span>Tambah Siswa</a>
					<a href="<?php echo site_url('student/import');?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-import"></span> Import data</a>
				</div>
				</div>
				<div class="panel-body">
					<form class="form-horizontal" action="<?php echo site_url('student/dataUpload/');?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
										<label for="input" class="col-sm-3 control-label">Upload File:</label>
										<div class="col-sm-9">
											<input class="form-control" type="file" name="file"/><input style="margin-top:10px;"	 class="btn btn-primary" type="submit" value="Upload"/>
											<a style="margin-top:10px;" href="<?php echo base_url();?>public/excel/test.xls" class="btn btn-success"><span class="glyphicon glyphicon-download"></span> template</a>
										</div>
									</div>
					</form>
				</div>
				</div>
			</div>
		</div>
	</div>
<?php $this->load->view('include/footer');?>
<script>
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</body>
</html>
