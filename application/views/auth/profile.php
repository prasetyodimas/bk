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
				<div class="panel panel-primary">
				<div class="panel-heading">
				Ubah  password
				</div>
				<div class="panel-body">
				<?php foreach($data as $data ) { ;?>
					<form class="form-horizontal" action="<?php echo site_url('auth/change/');?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="input" class="col-sm-3 control-label">Username</label>
						<div class="col-sm-9">
							<p class="form-control"><?php echo $data->username;?></p>
						</div>
					</div>
					<div class="form-group">
						<label for="input" class="col-sm-3 control-label">Ubah Password</label>
						<div class="col-sm-9">
							<input type="password" name="password" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label for="input" class="col-sm-3 control-label">Ulangi Password</label>
						<div class="col-sm-9">
							<input type="password" name="password2" class="form-control"><br>
							<input type="hidden" name="id_user" value="<?php echo $data->id_user;?>">
							<button type="submit" class="btn btn-primary">Ubah</button>
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
<script>
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</body>
</html>
