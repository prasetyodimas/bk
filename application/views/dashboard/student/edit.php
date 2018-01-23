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
							   <span class="breadcrumb-item active">Edit Formulir data siswa baru</span>
							</nav>
							 <div class="panel panel-primary">
						      <div class="panel-heading">Edit Formulir data siswa baru</div>
						      <div class="panel-body">
						      <?php foreach($data as $list) { ?>
						      	<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('student/update') ;?>">
						      		<div class="row">
									<div class="col-md-7">
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">NIS</label>
										<div class="col-sm-9">
											<input disabled value="<?php echo $list->nis;?>" type="text" name="nis" class="form-control" id="input" placeholder="Masukan NIS..">
										</div>
									</div>
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">Photo</label>
										<div class="col-sm-9">
											 <?php if($list->photo!=='') { ?> 
							                <img src="<?php echo base_url().$list->photo;?>" width="100%">
							                <?php }else { ?>
											<img src="<?php echo base_url('public/image/user.png')?>" width="10%">
							                <?php ;};?><br><br>

											<input type="file" name="photo" class="form-control" id="input" placeholder="Masukan Photo..">
										</div>
									</div>
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">Nama</label>
										<div class="col-sm-9">
											<input value="<?php echo $list->nama;?>" type="text" name="nama" class="form-control" id="input" placeholder="Masukan nama..">
										</div>
									</div>
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">Nama Pangilan</label>
										<div class="col-sm-9">
											<input value="<?php echo $list->nama_pangilan;?>" type="text" name="nama_pangilan" class="form-control" id="input" placeholder="Masukan Nama Pangilan..">
										</div>
									</div>
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">Tempat Lahir</label>
										<div class="col-sm-9">
											<input type="text" value="<?php echo $list->tempat_lahir;?>" name="tempat_lahir" class="form-control" id="input" placeholder="Masukan Tempat Lahir..">
										</div>
									</div>
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">Tanggal Lahir</label>
										<div class="col-sm-9">
											<input type="date" value="<?php echo $list->tanggal_lahir;?>" name="tanggal_lahir" class="form-control" id="input" placeholder="Masukan Tanggal Lahir..">
										</div>
									</div>
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">Telepon Rumah</label>
										<div class="col-sm-9">
											<input type="text" value="<?php echo $list->telp_rumah;?>" name="telp_rumah" class="form-control" id="input" placeholder="Masukan telepon rumah..">
										</div>
									</div>
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">Hp</label>
										<div class="col-sm-9">
											<input type="text" value="<?php echo $list->hp;?>" name="hp" class="form-control" id="input" placeholder="Masukan Hp..">
										</div>
									</div>
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">Alamat Rumah</label>
										<div class="col-sm-9">
											<input type="text" value="<?php echo $list->alamat_rumah;?>"  name="alamat_rumah" class="form-control" id="input" placeholder="Masukan Telepon kost..">
										</div> 
									</div>
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">Gol Darah</label>
										<div class="col-sm-9">
											<input value="<?php echo $list->gol_darah;?>"  type="text" placeholder="golongan darah" name="gol_darah" class="form-control" id="input" placeholder="Masukan NIS..">
										</div>
									</div>
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">Tinggi badan</label>
										<div class="col-sm-9">
											<input type="text" value="<?php echo $list->tinggi_badan;?>"  name="tinggi_badan" class="form-control" id="input" placeholder="Masukan tinggi badan..">
										</div>
									</div>
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">Berat Badan</label>
										<div class="col-sm-9">
											<input type="text" value="<?php echo $list->berat_badan;?>"  name="berat_badan" class="form-control" id="input" placeholder="Masukan berat badan..">
										</div>
									</div>
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">Jenis Kelamin</label>
										<div class="col-sm-9" style="margin-top:6px">
											<input type="radio"  name="jkel" value="1" <?php echo $list->jkel==1 ? 'checked' :'' ;?>> Laki-Laki 
											<input type="radio" name="jkel" value="2" <?php echo $list->jkel==2 ? 'checked' :'' ;?>> Wanita
										</div>
									</div>
									<div class="form-group">
										<label for="input" class="col-sm-3 control-label">Agama</label>
										<div class="col-sm-9">
											<select name="agama" class="form-control">
												<option class="form-control">[ Pilih salah satu ]</option>
												<option value="1" <?php echo $list->agama==1 ? 'selected' :'' ;?>>Islam</option>
												<option value="2" <?php echo $list->agama==2 ? 'selected' :'' ;?>>Katolik</option>
												<option value="3" <?php echo $list->agama==3 ? 'selected' :'' ;?>>Protestan</option>
												<option value="4" <?php echo $list->agama==4 ? 'selected' :'' ;?>>Hindu</option>
												<option value="5" <?php echo $list->agama==5 ? 'selected' :'' ;?>>Budha</option>
												<option value="6" <?php echo $list->agama==6 ? 'selected' :'' ;?>>Konghuchu</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label for="input"  class="col-sm-3 control-label">Anak ke</label>
										<div class="col-sm-9">
											<input type="text" value="<?php echo $list->anak_ke;?>"  name="anak_ke" class="form-control" id="input" placeholder="Masukan Anak ke..">
										</div>
									</div>
									<div class="form-group">
										<label for="input"   class="col-sm-3 control-label">Jumlah Saudara</label>
										<div class="col-sm-9">
											<input type="text" value="<?php echo $list->jumlah_saudara;?>" name="jumlah_saudara" class="form-control" id="input" placeholder="Masukan Jumlah saudara..">
										</div>
									</div>
									<div class="form-group">
										<label for="input"  class="col-sm-3 control-label">Hobby</label>
										<div class="col-sm-9">
											<input type="text" value="<?php echo $list->hobby;?>"  name="hobby" class="form-control" id="input" placeholder="Masukan hobby..">
										</div>
									</div>
						      		<div class="col-md-10">
							      		<div class="form-group">
											<label for="input" class="col-sm-3 control-label">Thn Pelajaran</label>
											<div class="col-sm-9">
												<input type="text" value="<?php echo $list->thn_pelajaran;?>" name="thn_pelajaran" class="form-control" id="input" placeholder="Masukan tahun pelajaran..">
											</div>
										</div>
										<div class="form-group">
											<label for="input" class="col-sm-3 control-label">Kelas</label>
											<div class="col-sm-9">
												<input type="text" value="<?php echo $list->kelas;?>" name="kelas" class="form-control" id="input" placeholder="Masukan Kelas..">
											</div>
										</div>
										<div class="form-group">
											<label for="input" class="col-sm-3 control-label">Jurusan</label>
											<div class="col-sm-9">
												<input type="text" value="<?php echo $list->jurusan;?>" name="jurusan" class="form-control" id="input" placeholder="Masukan Jurusan..">
											</div>
										</div>

										<div class="form-group">
											<div class="col-sm-12">
												<input type="hidden" name="id_student" value="<?php echo $list->id_student;?>">
												<input type="hidden" name="old_photo" value="<?php echo $list->photo;?>">
												<input type="submit"  class="form-control btn btn-block btn-primary" id="input" value="update">
											</div>
										</div>
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
</body>
</html>