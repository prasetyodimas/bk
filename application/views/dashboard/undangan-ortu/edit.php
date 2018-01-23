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
							    <a class="breadcrumb-item" href="<?php echo site_url('SuratUndanganOrangTua/index');?>"><span class="glyphicon glyphicon-bullhorn"></span> Undangan Orang Tua</a> > 
							  <span class="breadcrumb-item active"><span class="glyphicon glyphicon-edit"></span> Edit</span>
							</nav>
							 <div class="panel panel-primary">
						      <div class="panel-heading">Formulir Undangan Orang tua</div>
						      <div class="panel-body">
						      		<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('SuratUndanganOrangTua/update') ;?>">
						      		<?php foreach($data as $list ) { ?>
										<div class="row">
											<div class="col-md-4">
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label text-danger">NIS</label>
												<div class="col-sm-9">
												<div class="input-group">
												  <input type="text" value="<?php echo $list->nis;?>" name="nis" class="form-control" id="nis" placeholder="Masukan NIS..">
												    <span class="input-group-btn">
											        <button class="btn btn-primary" type="button" id="search">Cari </button>
											      </span>
												</div>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Nama</label>
												<div class="col-sm-9">
													<input value="<?php echo $list->nama;?>" type="text" disabled name="nama" class="form-control" id="nama" placeholder="Masukan Nama siswa..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Kelas</label>
												<div class="col-sm-9">
													<input value="<?php echo $list->kelas;?>" type="text"  disabled name="kelas" class="form-control" id="kelas" placeholder="Masukan kelas..">
												</div>
											</div>
												<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Jurusan</label>
												<div class="col-sm-9">
													<input value="<?php echo $list->jurusan;?>"  type="text"  disabled name="jurusan" class="form-control" id="jurusan" placeholder="Masukan Jurusan..">
												</div>
											</div>
												</div>
												<div class="col-md-8">
												
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">No surat</label>
												<div class="col-sm-9">
													<input value="<?php echo $list->no_surat;?>" type="text" name="no_surat" class="form-control" id="sasaran1" placeholder="No surat..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Perihal</label>
												<div class="col-sm-9">
													<input value="<?php echo $list->perihal;?>" type="text" name="perihal" class="form-control" id="sasaran1" placeholder="Perihal..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Orang Tua</label>
												<div class="col-sm-9">
													<input value="<?php echo $list->orang_tua;?>" type="text" name="orang_tua" class="form-control" id="sasaran1" placeholder="Orang tua..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Di</label>
												<div class="col-sm-9">
													<input  value="<?php echo $list->di;?>" type="text" name="di" class="form-control" id="sasaran1" placeholder="Di..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Tanggal</label>
												<div class="col-sm-9">
													<input value="<?php echo $list->tanggal;?>" type="date" name="tanggal" class="form-control" id="input" placeholder="Tanggal..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Waktu</label>
												<div class="col-sm-9">
													<input value="<?php echo $list->waktu;?>" type="time" name="waktu" class="form-control" id="input" placeholder="Waktu..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Tempat</label>
												<div class="col-sm-9">
													<input value="<?php echo $list->tempat;?>" type="text" name="tempat" class="form-control" id="input" placeholder="Waktu..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Keperluan</label>
												<div class="col-sm-9">
														<textarea style="text-align:justify" placeholder="Keperluan.." name="keperluan" class="text-left control-label form-control" rows="5" cols="30"><?php echo $list->keperluan;?></textarea>
												</div>
											</div>
										
											<input type="hidden" value="<?php echo $list->id_undangan_orang_tua;?>" name="id_undangan_orang_tua">
											<input type="hidden" id="id_student" value="<?php echo $list->id_student;?>" name="id_student">

											<div class="form-group">
													<div class="col-sm-6 pull-right">
														<input type="submit"  class="form-control btn btn-block btn-primary" id="input" value="Update">
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