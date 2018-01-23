<!doctype html>
<html class="no-js" lang="">
<?php $this->load->view('include/header');?>
<body>
	<div class="container">
		<div class="row login">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-primary">
						<div class="panel-heading">
							<div class="panel-title">
								<h4 class="text-center">Sistem Siswa dan Konseling</h4>
							</div>
						</div>
						<div class="panel-body">
						<form class="form-horizontal" method="post" action="<?php echo base_url('auth/login') ;?>">
							<div class="failed">
								<?php if($failed==true){ ?>
									<div class="alert alert-danger alert-dismissible fade in" role="alert">
										<h4>Gagal Login</h4> <p>pastikan username dan password benar</p>
									</div>
								<?php };?>
							</div>
							<div class="form-group">
								<label for="inputUsername" class="col-sm-2 control-label">Username</label>
								<div class="col-sm-8">
									<input type="text" name="username" class="form-control" id="inputUsername" placeholder="Masukan username">
								</div>
							</div>
							<div class="form-group">
								<label for="inputPass" class="col-sm-2 control-label">Password</label>
								<div class="col-sm-8">
									<input type="password" name="password" class="form-control" id="inputPass" placeholder="Masukan password">
								</div>
							</div>
							<div class="form-group">
							<div class="col-sm-8 col-sm-offset-2">
							<button class="btn btn-primary btn-block" type="submit">Masuk</button>
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