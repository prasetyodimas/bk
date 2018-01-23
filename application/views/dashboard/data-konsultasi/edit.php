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
							    <a class="breadcrumb-item" href="<?php echo site_url('DataKonsultasi/');?>"><span class="glyphicon glyphicon-file"></span> Data Konsultasi</a> > 
							  <span class="breadcrumb-item active"><span class="glyphicon glyphicon-edit"></span> Edit</span>
							</nav>
							 <div class="panel panel-primary">
						      <div class="panel-heading">Formulir Buat Data Konsultasi</div>
						      <div class="panel-body">
						      	<?php foreach($data as $list) { ?>
						      		<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('DataKonsultasi/update') ;?>">
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
												<label for="input"  class="col-sm-3 control-label">Nama</label>
												<div class="col-sm-9">
													<input value="<?php echo $list->nama;?>" type="text" disabled name="nama" class="form-control" id="nama" placeholder="Masukan Nama siswa..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Kelas</label>
												<div class="col-sm-9">
													<input type="text" value="<?php echo $list->kelas;?>"  disabled name="kelas" class="form-control" id="kelas" placeholder="Masukan kelas..">
												</div>
											</div>
												<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Jurusan</label>
												<div class="col-sm-9">
													<input type="text"  value="<?php echo $list->jurusan;?>" disabled name="jurusan" class="form-control" id="jurusan" placeholder="Masukan Jurusan..">
												</div>
											</div>
												</div>
												<div class="col-md-8">
												
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Menghadap</label>
												<div class="col-sm-9">
													<input type="text" value="<?php echo $list->menghadap;?>" name="menghadap" class="form-control" id="sasaran1" placeholder="Menghadap..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Jam ke</label>
												<div class="col-sm-9">
													<input type="text" value="<?php echo $list->jam_ke;?>" name="jam_ke" class="form-control" id="input" placeholder="Masukan jam ke..">
												</div>
											</div>
												<div class="form-group">
												<label for="input" class="col-sm-3 control-label text-danger">Selesai Konsultasi</label>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Pukul</label>
												<div class="col-sm-9">
													<input type="text" value="<?php echo $list->selesai_pukul;?>" name="selesai_pukul" class="form-control" id="input" placeholder="Masukan selesai pukul.. ">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Jam ke</label>
												<div class="col-sm-9">
													<input type="text" value="<?php echo $list->selesai_jam_ke;?>" name="selesai_jam" class="form-control" id="input" placeholder="Masukan jam selesai pukul..">
												</div>
											</div>
										
											<input id="id_student" type="hidden" value="<?php echo $list->id_student;?>" name="id_student">
											<input id="id_data_konsultasi" type="hidden" value="<?php echo $list->id_data_konsultasi;?>" name="id_data_konsultasi">
											
											<div class="form-group">
													<div class="col-sm-6 pull-right">
														<input type="submit"  class="form-control btn btn-block btn-primary" id="input" value="ubah">
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