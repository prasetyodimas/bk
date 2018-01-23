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
							   <span class="breadcrumb-item active">Formulir Data Sekolah</span>
							</nav>
							 <div class="panel panel-primary">
						      <div class="panel-heading">Formulir Data Sekolah</div>
						      <div class="panel-body">
						      <?php if($check==0){ 
						      		$this->load->view('dashboard/school/add');
						      	}else{
						      		$this->load->view('dashboard/school/edit');
						      	}	
						       ;?>
						      	
						      </div>
						    </div>
						</div>
					</div>
				</div>
<?php $this->load->view('include/footer');?>
</body>
</html>