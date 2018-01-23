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
							    <a class="breadcrumb-item" href="<?php echo site_url('visit/satkung');?>"><span class="glyphicon glyphicon-book"></span> Satkung home visit</a> > 
							  <span class="breadcrumb-item active"><span class="glyphicon glyphicon-search"></span> Detail satkung</span>
							</nav>
							 <div class="panel panel-primary">
						      <div class="panel-heading">Formulir data Edit Satkung home visit</div>
						      <div class="panel-body">
						      		<?php foreach($data as $list ) { ?>
						      		<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('visit/updateSatkung') ;?>">
										<div class="row">
												<div class="col-md-10">
												<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Tahun Ajaran</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->thn_pelajaran;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Sasaran Pelayanan</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->sasaran_pelayanan;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Topik / Permasalahan</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->topik;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Bidang Layanan</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->bidang_layanan;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Jenis Layanan</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->jenis_layanan;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Fungsi Layanan</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->fungsi_layanan;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Kompetensi yang ingin dicapai</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->kompetensi;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Bentuk kegiatan</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->bentuk_kegiatan;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Alokasi Waktu</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->alokasi_waktu;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Waktu Pelaksanaan / Semester</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->waktu_pelaksanaan;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Tempat kegiatan</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->tempat_kegiatan;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Pelaksana kegiatan</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->pelaksana_kegiatan;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Pihak yang disertakan</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->pihak;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Alat perlengkapan</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->alat;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Konselor</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->konselor;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Konseli / Klien</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->konseli;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">laiseg</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->laiseg;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">laiapen</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->laijapen;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">laipang</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->laijapang;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Rencana tindak lanjut</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->rencana_tidak_lanjut;?></p>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">pembiayaan</label>
												<div class="col-sm-9">
													<p class="p_adjust"><?php echo $list->pembiayaan;?></p>
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