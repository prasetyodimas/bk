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
							  <span class="breadcrumb-item active"><span class="glyphicon glyphicon-edit"></span> Edit satkung</span>
							</nav>
							 <div class="panel panel-primary">
						      <div class="panel-heading">Formulir data Edit Satkung home visit</div>
						      <div class="panel-body">
						      		<?php foreach($data as $list ) { ?>
						      		<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('visit/updateSatkung') ;?>">
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
													<input type="text" value="<?php echo $list->nama;?>" disabled name="nama" class="form-control" id="nama" placeholder="Masukan Nama siswa..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Kelas</label>
												<div class="col-sm-9">
													<input type="text"  value="<?php echo $list->kelas;?>" disabled name="kelas" class="form-control" id="kelas" placeholder="Masukan kelas..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Alamat Rumah</label>
												<div class="col-sm-9">
													<textarea id="alamat" disabled style="text-align:justify" placeholder="Alamat rumah.." name="alamat_rumah" class="text-left control-label form-control" rows="5" cols="30"><?php echo $list->alamat_rumah;?></textarea>
												</div>
											</div>
												</div>
												<div class="col-md-8">
												<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Tahun Ajaran</label>
												<div class="col-sm-9">
													<input type="text" disabled value="<?php echo $list->thn_pelajaran;?>" name="tahun_ajaran" class="form-control" id="thn_ajaran" placeholder="Masukan Tahun ajaran..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Sasaran Pelayanan</label>
												<div class="col-sm-9">
													<input type="text"  value="<?php echo $list->sasaran_pelayanan;?>" name="sasaran_pelayanan" class="form-control" id="sasaran1" placeholder="Masukan sasaran pelayanan..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Topik / Permasalahan</label>
												<div class="col-sm-9">
													<input type="text" value="<?php echo $list->topik;?>" name="topik" class="form-control" id="input" placeholder="Masukan Topik / Permasalahan..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Bidang Layanan</label>
												<div class="col-sm-9">
													<input type="text" value="<?php echo $list->bidang_layanan;?>" name="bidang_layanan" class="form-control" id="input" placeholder="Masukan Bidang Layanan ">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Jenis Layanan</label>
												<div class="col-sm-9">
													<input type="text" value="<?php echo $list->jenis_layanan;?>" name="jenis_layanan" class="form-control" id="input" placeholder="Masukan Jenis layanan..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Fungsi Layanan</label>
												<div class="col-sm-9">
													<input type="text" value="<?php echo $list->fungsi_layanan;?>" name="fungsi_layanan" class="form-control" id="input" placeholder="Masukan Fungsi layanan..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Kompetensi yang ingin dicapai</label>
												<div class="col-sm-9">
													<input type="text" value="<?php echo $list->kompetensi;?>" name="kompetensi" class="form-control" id="input" placeholder="Masukan Kompetensi yang ingin dicapai..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Bentuk kegiatan</label>
												<div class="col-sm-9">
													<input type="text" value="<?php echo $list->bentuk_kegiatan;?>" name="bentuk_kegiatan" class="form-control" id="input" placeholder="Masukan Bentuk kegiatan..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Alokasi Waktu</label>
												<div class="col-sm-9">
													<input type="text" value="<?php echo $list->alokasi_waktu;?>" name="alokasi_waktu" class="form-control" id="input" placeholder="Masukan Alokasi waktu..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Waktu Pelaksanaan / Semester</label>
												<div class="col-sm-9">
													<input type="text" value="<?php echo $list->waktu_pelaksanaan;?>" name="waktu_pelaksanaan" class="form-control" id="input" placeholder="Masukan waktu pelaksanaan..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Tempat kegiatan</label>
												<div class="col-sm-9">
													<input type="text" value="<?php echo $list->tempat_kegiatan;?>" name="tempat_kegiatan" class="form-control" id="input" placeholder="Masukan tempat kegiatan..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Pelaksana kegiatan</label>
												<div class="col-sm-9">
													<input type="text" value="<?php echo $list->pelaksana_kegiatan;?>" name="pelaksana_kegiatan" class="form-control" id="input" placeholder="Masukan pelaksana kegiatan..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Pihak yang disertakan</label>
												<div class="col-sm-9">
													<input type="text" value="<?php echo $list->pihak;?>" name="pihak" class="form-control" id="input" placeholder="Masukan pihak yang disertakan..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Alat perlengkapan</label>
												<div class="col-sm-9">
													<input type="text"  value="<?php echo $list->alat;?>"name="alat" class="form-control" id="input" placeholder="Masukan alat perlengkapan..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Konselor</label>
												<div class="col-sm-9">
													<input type="text" value="<?php echo $list->konselor;?>" name="konselor" class="form-control" id="input" placeholder="Masukan konselor..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Konseli / Klien</label>
												<div class="col-sm-9">
													<input type="text" value="<?php echo $list->konseli;?>" name="konseli" class="form-control" id="sasaran2" placeholder="Masukan konseli / klien..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">laiseg</label>
												<div class="col-sm-9">
													<input type="text" value="<?php echo $list->laiseg;?>" name="laiseg" class="form-control" id="input" placeholder="Masukan laiseg..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">laiapen</label>
												<div class="col-sm-9">
													<input type="text" value="<?php echo $list->laijapen;?>" name="laijapen" class="form-control" id="input" placeholder="Masukan lailapen..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">laipang</label>
												<div class="col-sm-9">
													<input type="text" value="<?php echo $list->laijapang;?>" name="laijapang" class="form-control" id="input" placeholder="Masukan lailapen..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Rencana tindak lanjut</label>
												<div class="col-sm-9">
													<input type="text" value="<?php echo $list->rencana_tidak_lanjut;?>" name="rencana_tidak_lanjut" class="form-control" id="input" placeholder="Masukan rencana tindak lanjut..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">pembiayaan</label>
												<div class="col-sm-9">
													<input type="text" value="<?php echo $list->pembiayaan;?>" name="pembiayaan" class="form-control" id="input" placeholder="Masukan pembiayaan..">
												</div>
											</div>
											<input id="id_student" type="hidden" value="<?php echo $list->id_student;?>" name="id_student">
											<input id="id_satkung_home_visit" type="hidden" value="<?php echo $list->id_satkung_home_visit;?>" name="id_satkung_home_visit">
											
											<div class="form-group">
													<div class="col-sm-6 pull-right">
														<input type="submit"  class="form-control btn btn-block btn-primary" id="input" value="Ubah">
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
						$("#sasaran1").val(result.nama);
						$("#sasaran2").val(result.nama);
					}
					
				});

			})
			

		})
	</script>
</body>
</html>