<div class="col-md-3">
				<div class="panel panel-default">
					<?php if($this->session->userdata('level')==1){ ;?>
					<div class="panel-heading">
						Guru BK
					</div>
					<div class="panel-body">
						<ul class="nav nav-pills-nav-stacked">
							 <li><a href="<?php echo site_url('guru');?>"><span class="glyphicon glyphicon-user"></span> Data Guru BK</a></li>
					   	  <!-- 	<li><a href="#"><span class="glyphicon glyphicon-road"></span> Data Kunjungan Siswa</a></li> -->
						</ul>
					</div>
					<?php };?>

					<?php if($this->session->userdata('level')!=0){ ;?>
					


					<div class="panel-heading">
						Orang tua
					</div>
					<div class="panel-body">
						<ul class="nav nav-pills-nav-stacked">
							 <li><a href="<?php echo site_url('orangtua');?>"><span class="glyphicon glyphicon-user"></span> Data Pribadi Orang tua</a></li>
					   	  <!-- 	<li><a href="#"><span class="glyphicon glyphicon-road"></span> Data Kunjungan Siswa</a></li> -->
						</ul>
					</div>
					
					<div class="panel-heading">
						Siswa
					</div>
					<div class="panel-body">
						<ul class="nav nav-pills-nav-stacked">
							 <li><a href="<?php echo site_url('student');?>"><span class="glyphicon glyphicon-user"></span> Data Pribadi Siswa</a></li>
					   	  <!-- 	<li><a href="#"><span class="glyphicon glyphicon-road"></span> Data Kunjungan Siswa</a></li> -->
						</ul>
					</div>

					<div class="panel-heading">
						Kunjungan
					</div>
						<div class="panel-body">
						<ul class="nav nav-pills-nav-stacked">
							 <li><a href="<?php echo site_url('visit');?>"><span class="glyphicon glyphicon-road"></span> Data Kunjungan Rumah</a></li>
							  <li><a href="<?php echo site_url('visit/homeVisit');?>"><span class="glyphicon glyphicon-book"></span> Surat tugas home visit</a></li>

							   <li><a href="<?php echo site_url('visit/satkung');?>"><span class="glyphicon glyphicon-book"></span> Satkung home visit</a></li>
						</div>
					<?php ;};?>
					
					<div class="panel-heading">
						Konseling &amp; Konsultasi
					</div>
						<div class="panel-body">
						<ul class="nav nav-pills-nav-stacked">
						 	  <li><a href="<?php echo site_url('KartuPanggilan');?>"><span class="glyphicon glyphicon-bullhorn"></span> Kartu Panggilan</a></li>
						 	  <li><a href="<?php echo site_url('DataKonsultasi');?>"><span class="glyphicon glyphicon-file"></span> Data Konsultasi</a></li>
						 	   <li><a href="<?php echo site_url('HasilKonferensi');?>"><span class="glyphicon glyphicon-blackboard"></span> Hasil koferensi</a></li>
						 	     <li><a href="<?php echo site_url('UndanganKonferensi');?>"><span class="glyphicon glyphicon-bullhorn"></span> Undangan Konferensi Kasus</a></li>
						 	    <li><a href="<?php echo site_url('SuratUndanganOrangTua');?>"><span class="glyphicon glyphicon-bullhorn"></span> Undangan Orang Tua</a></li>
						 	 <li><a href="<?php echo site_url('KonselingIndividu');?>"><span class="glyphicon glyphicon-file"></span> Konseling Individu</a></li>
						 	 <li><a href="<?php echo site_url('SatkungAlihTanganKasus');?>"><span class="glyphicon glyphicon-book"></span> Satkung Alih tangan kasus</a></li>
				 	 	 	 <li><a href="<?php echo site_url('RujukanAlihTanganKasus');?>"><span class="glyphicon glyphicon-book"></span> Rujukan Alih tangan kasus</a></li>
				 	 	 	  <li><a href="<?php echo site_url('Anekdot');?>"><span class="glyphicon glyphicon-book"></span> Catatan Anekdot</a></li>
			 	 	 	</ul>
						</div>
				</div>			
			</div>