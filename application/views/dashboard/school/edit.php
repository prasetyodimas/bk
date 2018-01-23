<?php foreach ($data as $data){ ?>
<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('school/update') ;?>">
		<div class="row">
	<div class="col-md-7">
	<div class="form-group">
		<label for="input" class="col-sm-3 control-label">Logo Sekolah</label>
		<div class="col-sm-9">
			<img src="<?php echo $data->logo_sekolah;?>" class="img-responsive" width="100px"><br>
			<input type="file" name="logo_sekolah" class="form-control" id="input" placeholder="Masukan Photo..">
		</div>
	</div>
	<div class="form-group">
		<label for="input" class="col-sm-3 control-label">Logo kabupaten</label>
		<div class="col-sm-9">
			<img src="<?php echo $data->logo_kabupaten;?>" class="img-responsive" width="100px"><br>
			<input type="file" name="logo_kabupaten" class="form-control" id="input" placeholder="Masukan Photo..">
		</div>
	</div>
	<div class="form-group">
		<label for="input" class="col-sm-3 control-label">Kop Surat Satu</label>
		<div class="col-sm-9">
			<textarea style="text-align:justify" placeholder="Kop surat satu.." name="kop_surat1" class="text-left control-label form-control" rows="5" cols="30"><?php echo $data->kop_surat1;?></textarea>
		</div>
	</div>
	<div class="form-group">
		<label for="input" class="col-sm-3 control-label">Kop Surat Dua</label>
		<div class="col-sm-9">
			<textarea style="text-align:justify" placeholder="Kop surat dua.." name="kop_surat2" class="text-left control-label form-control" rows="5" cols="30"><?php echo $data->kop_surat2;?></textarea>
		</div>
	</div>
	<div class="form-group">
		<label for="input" class="col-sm-3 control-label">Nama Sekolah</label>
		<div class="col-sm-9">
			<input type="text" value="<?php echo $data->nama;?>" name="nama" class="form-control" id="input" placeholder="Masukan Nama sekolah..">
		</div>
	</div>
	<div class="form-group">
		<label for="input" class="col-sm-3 control-label">Alamat</label>
		<div class="col-sm-9">
			<textarea style="text-align:justify" placeholder="Alamat sekolah.." name="alamat" class="text-left control-label form-control" rows="5" cols="30"><?php echo $data->alamat;?></textarea>
		</div>
	</div>
	<div class="form-group">
		<label for="input" class="col-sm-3 control-label">No telp</label>
		<div class="col-sm-9">
			<input type="text" value="<?php echo $data->telp;?>" name="telp" class="form-control" id="input" placeholder="Nomor telp..">
		</div>
	</div>
	<div class="form-group">
		<label for="input" class="col-sm-3 control-label">Fax</label>
		<div class="col-sm-9">
			<input type="text" value="<?php echo $data->fax;?>" name="fax" class="form-control" id="input" placeholder="Masukan fax..">
		</div>
	</div>
	<div class="form-group">
		<label for="input" class="col-sm-3 control-label">Email</label>
		<div class="col-sm-9">
			<input value="<?php echo $data->email;?>" type="text" name="email" class="form-control" id="input" placeholder="Masukan email..">
		</div>
	</div>
	<div class="form-group">
		<label for="input" class="col-sm-3 control-label">Situs</label>
		<div class="col-sm-9">
			<input value="<?php echo $data->situs;?>" type="text" name="situs" class="form-control" id="input" placeholder="Masukan situs..">
		</div>
	</div>
	<div class="form-group">
		<label for="input" class="col-sm-3 control-label">Kepala sekolah</label>
		<div class="col-sm-9">
			<input value="<?php echo $data->kepsek;?>" type="text" name="kepsek" class="form-control" id="input" placeholder="Masukan nama kepsek..">
		</div>
	</div>
	<div class="form-group">
		<label for="input" class="col-sm-3 control-label">NIP</label>
		<div class="col-sm-9">
			<input value="<?php echo $data->nip;?>" type="text" name="nip" class="form-control" id="input" placeholder="Masukan NIP..">
		</div>
	</div>
	<div class="form-group">
		<label for="input" class="col-sm-3 control-label">Kabupaten / Kota</label>
		<div class="col-sm-9">
			<input value="<?php echo $data->kota;?>" type="text" name="kota" class="form-control" id="input" placeholder="Masukan Kota..">
		</div>
	</div>
	<div class="form-group">
		<label for="input" class="col-sm-3 control-label">Provinsi</label>
		<div class="col-sm-9">
			<input value="<?php echo $data->provinsi;?>" type="text" name="provinsi" class="form-control" id="input" placeholder="Masukan Provinsi..">
		</div>
	</div>
		<div class="form-group">
			<div class="col-sm-12">
				<input name="old_logo_sekolah" value="<?php echo $data->logo_sekolah;?>" type="hidden">
				<input name="old_logo_kabupaten" value="<?php echo $data->logo_kabupaten;?>" type="hidden">
				<input name="id_sekolah" value="<?php echo $data->id_sekolah;?>" type="hidden">
				<input type="submit"  class="form-control btn btn-block btn-primary" id="input" value="update">
			</div>
		</div>
		</div>
	</div>
	</form>
	<?php };?>