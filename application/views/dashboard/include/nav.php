<div class="row">
	<div class="col-md-12">
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">SIBK</a>
			</div>
			<p class="navbar-text">sistem informasi bimbingan konseling</p>
			<?php if($this->session->userdata('level')==2 || $this->session->userdata('level')==3 ){ ;?>
			<ul class="nav navbar-nav navbar-right">
					 <li><a href="<?php echo site_url('dashboard');?>"><span class="glyphicon glyphicon-home"></span> Beranda</a></li>
					 <!--   <li><a href="<?php echo site_url('school');?>"><span class="glyphicon glyphicon-briefcase"></span> Data Sekolah</a></li>
					    <li><a href="<?php echo site_url('Agenda');?>"><span class="glyphicon glyphicon-book"></span> Agenda Kegiatan</a></li> -->
					<li class=""><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> ( <?php echo $this->session->userdata('username');?> )</a></li>

					<li class="active"><a href="<?php echo site_url('dashboard/logout');?>"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</a></li>
				</ul>
			<?php ;};?>

			<?php if($this->session->userdata('level')==0){ ;?>
			<ul class="nav navbar-nav navbar-right">
					 <li><a href="<?php echo site_url('dashboard');?>"><span class="glyphicon glyphicon-home"></span> Beranda</a></li>
					  <!--  <li><a href="<?php echo site_url('school');?>"><span class="glyphicon glyphicon-briefcase"></span> Data Sekolah</a></li>
					    <li><a href="<?php echo site_url('Agenda');?>"><span class="glyphicon glyphicon-book"></span> Agenda Kegiatan</a></li> -->
					<li class=""><a href="<?php echo site_url('auth/profile');?>"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> ( <?php echo $this->session->userdata('username');?> )</a></li>

					<li class="active"><a href="<?php echo site_url('dashboard/logout');?>"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</a></li>
				</ul>
			<?php ;};?>

			<?php if($this->session->userdata('level')==1){ ;?>
			<ul class="nav navbar-nav navbar-right">
					 <li><a href="<?php echo site_url('dashboard');?>"><span class="glyphicon glyphicon-home"></span> Beranda</a></li>
					   <li><a href="<?php echo site_url('school');?>"><span class="glyphicon glyphicon-briefcase"></span> Data Sekolah</a></li>
					    <li><a href="<?php echo site_url('Agenda');?>"><span class="glyphicon glyphicon-book"></span> Agenda Kegiatan</a></li>
					<li class=""><a href="<?php echo site_url('auth/profile');?>"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> ( <?php echo $this->session->userdata('username');?> )</a></li>

					<li class="active"><a href="<?php echo site_url('dashboard/logout');?>"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</a></li>
				</ul>
			<?php ;};?>

			</div>
		</nav>
	</div>
</div>