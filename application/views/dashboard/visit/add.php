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
							    <a class="breadcrumb-item" href="<?php echo site_url('visit');?>"><span class="glyphicon glyphicon-road"></span> Data Kunjungan Rumah</a> > 
							  <span class="breadcrumb-item active"><span class="glyphicon glyphicon-plus"></span> Tambah</span>
							</nav>
							 <div class="panel panel-primary">
						      <div class="panel-heading">Formulir data Kunjungan Rumah</div>
						      <div class="panel-body">
						      		<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('visit/save') ;?>">
										<div class="row">
											<div class="col-md-6">
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label text-danger">Cari NIS siswa</label>
												<div class="col-sm-9">
												<div class="input-group">
												  <input type="text" name="nis" class="form-control" id="nis" placeholder="Masukan NIS..">
												    <span class="input-group-btn">
											        <button class="btn btn-primary" type="button" id="search">Cari </button>
											      </span>
												</div>

													
													
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Nama Siswa</label>
												<div class="col-sm-9">
													<input type="text" disabled name="nama" class="form-control" id="nama" placeholder="Masukan Nama siswa..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Kelas</label>
												<div class="col-sm-9">
													<input type="text"  disabled name="kelas" class="form-control" id="kelas" placeholder="Masukan kelas..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">NIS</label>
												<div class="col-sm-9">
													<input type="text" disabled name="nis" class="form-control" id="nis_view" placeholder="Masukan NIS..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Alamat Rumah</label>
												<div class="col-sm-9">
													<textarea id="alamat" disabled style="text-align:justify" placeholder="Alamat rumah.." name="alamat_rumah" class="text-left control-label form-control" rows="5" cols="30"></textarea>
												</div>
											</div>
												<div class="form-group">
													<div class="col-sm-12">
														<input type="submit"  class="form-control btn btn-block btn-primary" id="input" value="simpan">
													</div>
												</div>
												</div>
												<div class="col-md-6">
												<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Tanggal Kunjungan</label>
												<div class="col-sm-9">
													<input type="date" name="tgl_kunjungan" class="form-control" id="input" placeholder="Masukan Tgl kunjungan..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">petugas 1</label>
												<div class="col-sm-9">
													<input type="text" name="nama_petugas_1" class="form-control" id="input" placeholder="Masukan Nama petugas 1..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">NIP</label>
												<div class="col-sm-9">
													<input type="text" name="nip_petugas_1" class="form-control" id="input" placeholder="Masukan NIP petugas 1..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Jabatan</label>
												<div class="col-sm-9">
													<input type="text" name="jabatan_1" class="form-control" id="input" placeholder="Masukan Jabatan petugas 1">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">petugas 2</label>
												<div class="col-sm-9">
													<input type="text" name="nama_petugas_2" class="form-control" id="input" placeholder="Masukan Nama sekolah..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">NIP</label>
												<div class="col-sm-9">
													<input type="text" name="nip_petugas_2" class="form-control" id="input" placeholder="Masukan Nama sekolah..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Jabatan</label>
												<div class="col-sm-9">
													<input type="text" name="jabatan_2" class="form-control" id="input" placeholder="Masukan Nama sekolah..">
												</div>
											</div>
												<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Hasil Kunjungan</label>
												<div class="col-sm-9">
													<textarea style="text-align:justify" placeholder="Hasil Kunjungan.." name="hasil" class="text-left control-label form-control" rows="5" cols="30"></textarea>
												</div>
											</div>
												</div>
												<input id="id_student" type="hidden" value="" name="id_student">
									</form>
						      </div>
						    </div>
						</div>
					</div>
				</div>
<?php $this->load->view('include/footer');?>
	<script type="text/javascript">
		$(document).ready(function(){
			var url="<?php echo site_url();?>";
			$("#search").click(function(e){
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
						$("#kelas").val(result.kelas);
						$("#alamat").val(result.alamat_rumah);
						$("#nis_view").val(result.nis);
						$("#id_student").val(result.id_student);
					}
					
				});

			})
			

		})
	</script>
</body>
</html>