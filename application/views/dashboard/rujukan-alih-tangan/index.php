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
				  <span class="breadcrumb-item active"><span class="glyphicon glyphicon-book"></span> Rujukan Alih Tangan Kasus</span>
				</nav>
				<div class="panel panel-primary">
				<div class="panel-heading">
				Daftar Rujukan Alih tangan Kasus
				<div class="btn-group pull-right">
					<a href="<?php echo site_url('RujukanAlihTanganKasus/add');?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-edit"></span> Buat</a>
				</div>
				</div>
				<div class="panel-body">
					<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
				        <thead>
				            <tr>
				                <th>&nbsp;</th>
				                 <th>Tanggal Dibuat</th>
				                <th>No Surat</th>
				                <th>Yang Diundang</th>
				                <th>Aksi</th>
				            </tr>
				        </thead>
        
				        <tbody>
				        	<?php $x=1; foreach($data as $list) {;?>
				            <tr>
				            	<td><?php echo $x;?></td>
				            	<td> <?php echo  date("d-m-Y", strtotime($list->date));?></td>
				               <td>
				               	<?php echo $list->no_surat;?>
				               </td>
				               <td>
								<?php echo $list->yang_diundang;?>
				               </td>
				                <td width="28%">
				                	<div class="btn-group">
				                	<a href="<?php echo site_url('RujukanAlihTanganKasus/edit/').$list->id_rujukan_alih_tangan_kasus;?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-edit"></span> edit</a>
				                	<a href="<?php echo site_url('RujukanAlihTanganKasus/detail/').$list->id_rujukan_alih_tangan_kasus;?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-search"></span> detail</a>
				                	<a target="_blank" href="<?php echo site_url('RujukanAlihTanganKasus/pdf/').$list->id_rujukan_alih_tangan_kasus;?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-print"></span> cetak</a>
				                	<a href="<?php echo site_url('RujukanAlihTanganKasus/delete/').$list->id_rujukan_alih_tangan_kasus;?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-trash"></span> hapus</a>
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