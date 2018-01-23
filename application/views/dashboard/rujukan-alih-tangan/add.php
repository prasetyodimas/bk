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
							    <a class="breadcrumb-item" href="<?php echo site_url('RujukanAlihTanganKasus/');?>"><span class="glyphicon glyphicon-book"></span> Rujukan Alih Tangan Kasus</a> > 
							  <span class="breadcrumb-item active"><span class="glyphicon glyphicon-file"></span> Buat</span>
							</nav>
							 <div class="panel panel-primary">
						      <div class="panel-heading">Formulir Buat Rujukan Alih tangan kasus</div>
						      <div class="panel-body">
						      		<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('RujukanAlihTanganKasus/save') ;?>">
										<div class="row">
											<div class="col-md-4">
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label text-danger">NIS</label>
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
												<label for="input" class="col-sm-3 control-label">Nama</label>
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
												<label for="input" class="col-sm-3 control-label">Jurusan</label>
												<div class="col-sm-9">
													<input type="text"  disabled name="jurusan" class="form-control" id="jurusan" placeholder="Masukan Jurusan..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Alamat</label>
												<div class="col-sm-9">
														<textarea id="alamat" style="text-align:justify" name="alamat" class="text-left control-label form-control" rows="5" cols="30"></textarea>
												</div>
											</div>
												</div>
												<div class="col-md-8">
						      <div class="panel-body">
						      				<div class="form-group">
												<label for="input" class="col-sm-3 control-label">No surat</label>
												<div class="col-sm-9">
													<input type="text" name="no_surat" class="form-control" placeholder="No surat..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Perihal</label>
												<div class="col-sm-9">
													<input type="text" name="perihal" class="form-control" id="input" placeholder="Perihal..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Pekerjaan</label>
												<div class="col-sm-9">
													<input type="text" name="pekerjaan" class="form-control" id="input" placeholder="pekerjaan..">
												</div>
											</div>

											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Masalah yang sedang dihadapi</label>
												<div class="col-sm-9">
													<textarea style="text-align:justify" placeholder="masalah yang sedang dihadapi.." name="masalah" class="text-left control-label form-control" rows="5" cols="30"></textarea>
												</div>
											</div>

											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Laporan hasil konseling</label>
												<div class="col-sm-9">
													<textarea style="text-align:justify" placeholder="Laporan hasil koseling.." name="hasil_konseling" class="text-left control-label form-control" rows="5" cols="30"></textarea>
												</div>
											</div>

											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Catatan khusus</label>
												<div class="col-sm-9">
													<textarea style="text-align:justify" placeholder="Catatan khusus.." name="catatan_khusus" class="text-left control-label form-control" rows="5" cols="30"></textarea>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Rujukan kepada:</label>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Bapak / Ibu</label>
												<div class="col-sm-9">
													<input type="text" name="yang_diundang" class="form-control" id="input" placeholder="Bapak / Ibu .. ">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Jabatan</label>
												<div class="col-sm-9">
													<input type="text" name="jabatan" class="form-control" id="input" placeholder="Jabatan..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Di</label>
												<div class="col-sm-9">
													<input type="text" name="di" class="form-control" id="input" placeholder="di..">
												</div>
											</div>
										<input id="id_student" type="hidden" value="" name="id_student">
											<div class="form-group">
													<div class="col-sm-6 pull-right">
														<input type="submit"  class="form-control btn btn-block btn-primary" id="input" value="simpan">
													</div>
									</form>
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
						$("#thn_ajaran").val(result.thn_pelajaran);
						$("#jurusan").val(result.jurusan);
							
					}
					
				});

			})
			

		})
	</script>
</body>
</html>