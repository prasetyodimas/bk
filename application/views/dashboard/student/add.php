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
							   <span class="breadcrumb-item active">Formulir data siswa baru</span>
							</nav>
							 <div class="panel panel-primary">
						      <div class="panel-heading">Formulir data siswa baru</div>
						      <div class="panel-body">
						      	<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('student/register') ;?>">
						      		<div class="row">
									<div class="col-md-7">
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">NIS</label>
										<div class="col-sm-9">
											<input type="text" name="nis" class="form-control" id="input" placeholder="Masukan NIS..">
										</div>
									</div>
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">Photo</label>
										<div class="col-sm-9">
											<input type="file" name="photo" class="form-control" id="input" placeholder="Masukan Photo..">
										</div>
									</div>
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">Nama</label>
										<div class="col-sm-9">
											<input type="text" name="nama" class="form-control" id="input" placeholder="Masukan nama..">
										</div>
									</div>
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">Nama Pangilan</label>
										<div class="col-sm-9">
											<input type="text" name="nama_pangilan" class="form-control" id="input" placeholder="Masukan Nama Pangilan..">
										</div>
									</div>
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">Tempat Lahir</label>
										<div class="col-sm-9">
											<input type="text" name="tempat_lahir" class="form-control" id="input" placeholder="Masukan Tempat Lahir..">
										</div>
									</div>
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">Tanggal Lahir</label>
										<div class="col-sm-9">
											<input type="date" name="tanggal_lahir" class="form-control" id="input" placeholder="Masukan Tanggal Lahir..">
										</div>
									</div>
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">Telepon Rumah</label>
										<div class="col-sm-9">
											<input type="text" name="telp_rumah" class="form-control" id="input" placeholder="Masukan telepon rumah..">
										</div>
									</div>
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">Hp</label>
										<div class="col-sm-9">
											<input type="text" name="hp" class="form-control" id="input" placeholder="Masukan Hp..">
										</div>
									</div>
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">Alamat Rumah</label>
										<div class="col-sm-9">
											<textarea style="text-align:justify" placeholder="Alamat rumah.." name="alamat_rumah" class="text-left control-label form-control" rows="5" cols="30"></textarea>
										</div>
									</div>
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">Gol Darah</label>
										<div class="col-sm-9">
											<input type="text" placeholder="golongan darah" name="gol_darah" class="form-control" id="input" placeholder="Masukan NIS..">
										</div>
									</div>
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">Tinggi badan</label>
										<div class="col-sm-9">
											<input type="text" name="tinggi_badan" class="form-control" id="input" placeholder="Masukan tinggi badan..">
										</div>
									</div>
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">Berat Badan</label>
										<div class="col-sm-9">
											<input type="text" name="berat_badan" class="form-control" id="input" placeholder="Masukan berat badan..">
										</div>
									</div>
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">Jenis Kelamin</label>
										<div class="col-sm-9" style="margin-top:6px">
											<input type="radio"  name="jkel" value="1"> Laki-Laki 
											<input type="radio" name="jkel" value="2"> Wanita
										</div>
									</div>
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">Agama</label>
										<div class="col-sm-9">
											<select name="agama" class="form-control">
												<option class="form-control">[ Pilih salah satu ]</option>
												<option value="1">Islam</option>
												<option value="2">Katolik</option>
												<option value="3">Protestan</option>
												<option value="4">Hindu</option>
												<option value="5">Budha</option>
												<option value="6">Konghuchu</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">Anak ke</label>
										<div class="col-sm-9">
											<input type="text" name="anak_ke" class="form-control" id="input" placeholder="Masukan Anak ke..">
										</div>
									</div>
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">Jumlah Saudara</label>
										<div class="col-sm-9">
											<input type="text" name="jumlah_saudara" class="form-control" id="input" placeholder="Masukan Jumlah saudara..">
										</div>
									</div>
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">Hobby</label>
										<div class="col-sm-9">
											<input type="text" name="hobby" class="form-control" id="input" placeholder="Masukan hobby..">
										</div>
									</div>
						      		<div class="col-md-10">
							      		<div class="form-group">
											<label for="input" class="col-sm-3 control-label">Thn Pelajaran</label>
											<div class="col-sm-9">
												<input type="text" name="thn_pelajaran" class="form-control" id="input" placeholder="Masukan tahun pelajaran..">
											</div>
										</div>
										<div class="form-group">
											<label for="input" class="col-sm-3 control-label">Kelas</label>
											<div class="col-sm-9">
												<input type="text" name="kelas" class="form-control" id="input" placeholder="Masukan Kelas..">
											</div>
										</div>
										<div class="form-group">
											<label for="input" class="col-sm-3 control-label">Jurusan</label>
											<div class="col-sm-9">
												<input type="text" name="jurusan" class="form-control" id="input" placeholder="Masukan Jurusan..">
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
												<input type="password" name="password2" class="form-control" id="input" placeholder="Masukan ulangi pasword..">
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