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
							    <a class="breadcrumb-item" href="<?php echo site_url('SatkungAlihTanganKasus');?>"><span class="glyphicon glyphicon-book"></span> Satkung Alih tangan Kasus</a> > 
							  <span class="breadcrumb-item active"><span class="glyphicon glyphicon-edit"></span> Buat</span>
							</nav>
							 <div class="panel panel-primary">
						      <div class="panel-heading">Formulir data Buat Satkung Alih tangan Kasus</div>
						      <div class="panel-body">
						      		<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('SatkungAlihTanganKasus/save') ;?>">
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
												<label for="input" class="col-sm-3 control-label">Alamat Rumah</label>
												<div class="col-sm-9">
													<textarea id="alamat" disabled style="text-align:justify" placeholder="Alamat rumah.." name="alamat_rumah" class="text-left control-label form-control" rows="5" cols="30"></textarea>
												</div>
											</div>
												</div>
												<div class="col-md-8">
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Topik / Permasalahan</label>
												<div class="col-sm-9">
													<input type="text" name="topik" class="form-control" id="input" placeholder="Masukan Topik / Permasalahan..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Bidang Bimbingan</label>
												<div class="col-sm-9">
													<input type="text" name="bidang_bimbingan" class="form-control" id="input" placeholder="Masukan Bidang Bimbingan ">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Jenis Kegiatan</label>
												<div class="col-sm-9">
													<input type="text" name="jenis_kegiatan" class="form-control" id="input" placeholder="Masukan Jenis kegiatan..">
												</div>
											</div>
												<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Fungsi Kegiatan</label>
												<div class="col-sm-9">
													<input type="text" name="fungsi_kegiatan" class="form-control" id="input" placeholder="Masukan fungsi kegiatan..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Tujuan Kegiatan</label>
												<div class="col-sm-9">
													<input type="text" name="tujuan_kegiatan" class="form-control" id="input" placeholder="Masukan Tujuan kegiatan..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Hasil yang ingin dicapai</label>
												<div class="col-sm-9">
													<input type="text" name="hasil" class="form-control" id="input" placeholder="Masukan Hasil yang ingin dicapai..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Subjek yang mengalami masalah</label>
												<div class="col-sm-9">
													<input type="text" name="subjek" class="form-control" id="input" placeholder="Subjek yang mengalami masalah..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Gambaran ringkas masalah</label>
												<div class="col-sm-9">
												<input type="text" name="ringkas" class="form-control" id="input" placeholder="Gambaran ringkas masalah..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Kepada siapa di alih tangankan</label>
												<div class="col-sm-9">
													<input type="text" name="kepada" class="form-control" id="input" placeholder="Kepada siapa di alih tangankan..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Alasan pengalihan tangan</label>
												<div class="col-sm-9">
													<input type="text" name="alasan" class="form-control" id="input" placeholder="Masukan Alasan pengalihan tangan..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Kapan pengalihan tangan</label>
												<div class="col-sm-9">
													<input type="text" name="kapan" class="form-control" id="input" placeholder="Masukan kapan pengalihan tangan..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Bahan yang disertakan dalam alih tangan</label>
												<div class="col-sm-9">
													<input type="text" name="bahan" class="form-control" id="input" placeholder="Masukan bahan yang disertakan dalam alih tangan..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Kegiatan pendukung terdahulu</label>
												<div class="col-sm-9">
													<input type="text" name="pendukung" class="form-control" id="input" placeholder="Masukan kegiatan pendukung terdahulu..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Rencana penilaian / tindak lanjut kegiatan</label>
												<div class="col-sm-9">
													<input type="text" name="tindak_lanjut" class="form-control" id="input" placeholder="Masukan Rencana penilaian..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Catatan khusus</label>
												<div class="col-sm-9">
													<input type="text" name="catatan_khusus" class="form-control" id="input" placeholder="Masukan Catatan khusus..">
												</div>
											</div>
											<input id="id_student" type="hidden" value="" name="id_student">
											<div class="form-group">
													<div class="col-sm-6 pull-right">
														<input type="submit"  class="form-control btn btn-block btn-primary" id="input" value="simpan">
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
						$("#sasaran1").val(result.nama);
						$("#sasaran2").val(result.nama);
					}
					
				});

			})
			

		})
	</script>
</body>
</html>