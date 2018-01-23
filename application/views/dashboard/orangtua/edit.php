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
			   <a class="breadcrumb-item" href="<?php echo site_url('orangtua');?>"><span class="glyphicon glyphicon-user"></span> Data Pribadi Orang tua</a> > 
			   <span class="breadcrumb-item active">Formulir data Orang tua baru</span>
			</nav>
			 <div class="panel panel-primary">
		      <div class="panel-heading">Formulir data Orang tua baru</div>
		      <div class="panel-body">
		      	<?php foreach($data as $list) { ; ?>
		      	<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('orangtua/update') ;?>">
		      		<div class="row">
					<div class="col-md-7">
						<div class="form-group">
							<label for="input" class="col-sm-3 control-label text-danger">NIS</label>
							<div class="col-sm-9">
								<div class="input-group">
									<input type="text" name="nis" class="form-control" id="nis" placeholder="Masukan NIS.." value="<?php echo $list->nis;?>">
									<span class="input-group-btn">
										<button class="btn btn-primary" type="button" id="search">Cari </button>
									</span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="input" class="col-sm-3 control-label">Nama Anak</label>
							<div class="col-sm-9">
								<input type="text" name="nama_anak" class="form-control" id="nama" value="<?php echo $list->nama_anak; ?>">
								<div style="display:none;">
									<select name="id_student" class="form-control">
										<!-- <option value='<?php echo $list->id_student;?>' selected></option> -->
										<?php foreach($list_student as $student) {; ?>
											<?php if($list->id_student==$student->id_student){ ;?>
											<option value="<?php echo $student->id_student;?>" selected><?php echo $student->nama;?></option>
											<?php }else{ ?> 
											<option value="<?php echo $student->id_student;?>"><?php echo $student->nama;?></option>
											<?php ;};?>
										<?php ;};?>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="input" class="col-sm-3 control-label">Nama Ortu</label>
							<div class="col-sm-9">
								<input value="<?php echo $list->nama_orangtua;?>" type="text" name="nama_orangtua" class="form-control" id="input" placeholder="Masukan nama..">
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
							<label for="input" class="col-sm-3 control-label">Hp</label>
							<div class="col-sm-9">
								<input type="text" value="<?php echo $list->telp;?>" name="hp" class="form-control" id="input" placeholder="Masukan Hp..">
							</div>
						</div>
						<div class="form-group">
							<label for="input" class="col-sm-3 control-label">Alamat Rumah</label>
							<div class="col-sm-9">
								<textarea style="text-align:justify" placeholder="Alamat rumah.." name="alamat_rumah" class="text-left control-label form-control" rows="5" cols="30"><?php echo $list->alamat_rumah;?></textarea>
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
									<input type="hidden" name="id_orangtua" value="<?php echo $list->id_orangtua;?>">
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
<script type="text/javascript">
	$('document').ready(function(){
		var url="<?php echo site_url();?>";
		$('#search').on('click',function(e){
			e.preventDefault();
			var nis=$('#nis').val();
			$.getJSON({
				url:url+'visit/getData/'+nis,
			}).done(function(data){
				var result=data[0];
				console.log(result);
				if(result==undefined){
					alert("data siswa tidak ditemukan");
				}else{
					$("#nama").val(result.nama);
					// $("#kelas").val(result.kelas);
					// $("#alamat").val(result.alamat_rumah);
					// $("#nis_view").val(result.nis);
					// $("#id_student").val(result.id_student);
					// $("#thn_ajaran").val(result.thn_pelajaran);
					// $("#jurusan").val(result.jurusan);
				}
			});
		});
	});
</script>