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
				  <span class="breadcrumb-item active"><span class="glyphicon glyphicon-book"></span> Satkung Alih Tangan Kasus</span>
				</nav>
				<div class="panel panel-primary">
				<div class="panel-heading">
				Daftar Satkung Alih tangan Kasus
				<div class="btn-group pull-right">
					<a href="<?php echo site_url('SatkungAlihTanganKasus/add');?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-edit"></span> Buat</a>
				</div>
				</div>
				<div class="panel-body">
					<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
				        <thead>
				            <tr>
				                <th>&nbsp;</th>
				                 <th>Tanggal Dibuat</th>
				                <th>Topik</th>
				                <th>Tujuan Kegiatan</th>
				                <th>Aksi</th>
				            </tr>
				        </thead>
        
				        <tbody>
				        	<?php $x=1; foreach($data as $list) {;?>
				            <tr>
				            	<td><?php echo $x;?></td>
				            	<td> <?php echo  date("d-m-Y", strtotime($list->date));?></td>
				               <td>
				               	<?php echo $list->topik;?>
				               </td>
				               <td>
								<?php echo $list->tujuan_kegiatan;?>
				               </td>
				                <td width="28%">
				                	<div class="btn-group">
				                	<a href="<?php echo site_url('SatkungAlihTanganKasus/edit/').$list->id_satkung_alih_tangan_kasus;?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-edit"></span> edit</a>
				                	<a href="<?php echo site_url('SatkungAlihTanganKasus/detail/').$list->id_satkung_alih_tangan_kasus;?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-search"></span> detail</a>
				                	<a target="_blank" href="<?php echo site_url('SatkungAlihTanganKasus/pdf/').$list->id_satkung_alih_tangan_kasus;?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-print"></span> cetak</a>
				                	<a href="<?php echo site_url('SatkungAlihTanganKasus/delete/').$list->id_satkung_alih_tangan_kasus;?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-trash"></span> hapus</a>
				                	</div>
				                </td>
				            </tr>
				            <?php $x++; };?>
				            
				        </tbody>
    				</table>
				</div>
				</div>
			</div>
		</div>
	</div>
<?php $this->load->view('include/footer');?>
<script>
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</body>
</html>