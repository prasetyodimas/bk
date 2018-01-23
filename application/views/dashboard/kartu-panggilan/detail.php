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
							    <a class="breadcrumb-item" href="<?php echo site_url('KartuPanggilan/');?>"><span class="glyphicon glyphicon-bullhorn"></span> Kartu Panggilan</a> > 
							  <span class="breadcrumb-item active"><span class="glyphicon glyphicon-search"></span> Detail</span>
							</nav>
							 <div class="panel panel-primary">
						      <div class="panel-heading">Formulir Detail Kartu Panggilan</div>
						      <div class="panel-body">
						      	<?php foreach ($data as $list ) { ?>
						      		<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('KartuPanggilan/update') ;?>">
										<div class="row">
											<div class="col-md-4">
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">NIS</label>
												<div class="col-sm-9">
												<div class="input-group">
												<p class="p_adjust"><?php echo $list->nis;?></p>
												</div>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Nama</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->nama;?></p>
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
												<div class="col-md-8">
												
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">jam ke</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->jam_ke;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Di Ruangan</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->ruang;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Menghadap</label>
												<div class="col-sm-9">
												<p class="p_adjust"><?php echo $list->menghadap;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Perihal</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->perihal;?></p>
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