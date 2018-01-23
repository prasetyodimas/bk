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
							   <a class="breadcrumb-item" href="<?php echo site_url('student');?>"><span class="glyphicon glyphicon-user"></span> Data Pribadi Siswa</a> > 
							   <span class="breadcrumb-item active">Formulir detail siswa baru</span>
							</nav>
							 <div class="panel panel-primary">
						      <div class="panel-heading">Formulir detail siswa baru</div>
						      <div class="panel-body">
						      <?php foreach($data as $list) { ?>
						      	<form class="form-horizontal">
						      		<div class="row">
									<div class="col-md-7">
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">NIS</label>
										<div class="col-sm-9">
											<p class="p_adjust"><?php echo $list->nis;?></p>
										</div>
									</div>
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">Photo</label>
										<div class="col-sm-9">
											<img src="<?php echo base_url().$list->photo;?>" class="img img-circle" width="20%"><br>
										</div>
									</div>
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">Nama</label>
										<div class="col-sm-9">
											<p class="p_adjust"><?php echo $list->nama;?></p>
										</div>
									</div>
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">Nama Pangilan</label>
										<div class="col-sm-9">
											<p class="p_adjust"><?php echo $list->nama_pangilan;?></p>
										</div>
									</div>
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">Tempat Lahir</label>
										<div class="col-sm-9">
											<p class="p_adjust"><?php echo $list->tempat_lahir;?></p>
										</div>
									</div>
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">Tanggal Lahir</label>
										<div class="col-sm-9">
											<p class="p_adjust"><?php echo $list->tanggal_lahir;?></p>
										</div>
									</div>
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">Telepon Rumah</label>
										<div class="col-sm-9">
											<p class="p_adjust"><?php echo $list->telp_rumah;?></p>
										</div>
									</div>
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">Hp</label>
										<div class="col-sm-9">
											<p class="p_adjust"><?php echo $list->hp;?></p>
										</div>
									</div>
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">Alamat Rumah</label>
										<div class="col-sm-9">
											<p class="p_adjust"><?php echo $list->alamat_rumah;?></p>
											
										</div>
									</div>
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">Gol Darah</label>
										<div class="col-sm-9">
											<p class="p_adjust"><?php echo $list->gol_darah;?></p>
										</div>
									</div>
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">Tinggi badan</label>
										<div class="col-sm-9">
											<p class="p_adjust"><?php echo $list->tinggi_badan;?></p>
										</div>
									</div>
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">Berat Badan</label>
										<div class="col-sm-9">
											<p class="p_adjust"><?php echo $list->berat_badan;?></p>
										</div>
									</div>
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">Jenis Kelamin</label>
										<div class="col-sm-9">
											<p class="p_adjust"><?php echo $list->jkel==1 ? 'laki laki' :'wanita' ;?></p>
										</div>
									</div>
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">Agama</label>
										<div class="col-sm-9">
										<p class="p_adjust">
										<?php 
											if($list->agama==1){
											echo 'Islam';
											}else if($list->agama==2){
											echo 'katolik';
											}else if($list->agama==3){
											echo 'Protestan';
											}else if($list->agama==4){
											echo 'Hindu';
											}else if($list->agama==5){
											echo 'Budha';
											}else{
											echo 'Konghuchu';
											}
										;?>
										</p>
										</div>
									</div>
									<div class="form-group">
										<label for="input"  class="col-sm-3 control-label">Anak ke</label>
										<div class="col-sm-9">
											<p class="p_adjust"><?php echo $list->anak_ke;?></p>
										</div>
									</div>
									<div class="form-group">
										<label for="input"   class="col-sm-3 control-label">Jumlah Saudara</label>
										<div class="col-sm-9">
											<p class="p_adjust"><?php echo $list->jumlah_saudara;?></p>
										</div>
									</div>
									<div class="form-group">
										<label for="input"  class="col-sm-3 control-label">Hobby</label>
										<div class="col-sm-9">
											<p class="p_adjust"><?php echo $list->hobby;?></p>
										</div>
									</div>
						      		<div class="col-md-10">
							      		<div class="form-group">
											<label for="input" class="col-sm-3 control-label">Thn Pelajaran</label>
											<div class="col-sm-9">
												<p class="p_adjust"><?php echo $list->thn_pelajaran;?></p>
											</div>
										</div>
										<div class="form-group">
											<label for="input" class="col-sm-3 control-label">Kelas</label>
											<div class="col-sm-9">
												<p class="p_adjust"><?php echo $list->kelas;?></p>
											</div>
										</div>
										<div class="form-group">
											<label for="input" class="col-sm-3 control-label">Jurusan</label>
											<div class="col-sm-9">
												<p class="p_adjust"><?php echo $list->jurusan;?></p>
											</div>
										</div>

									</div>
									</div>
						      	<?php };?>
						      </form>
						      </div>
						    </div>
						</div>
					</div>
				</div>
<?php $this->load->view('include/footer');?>
</body>
</html>