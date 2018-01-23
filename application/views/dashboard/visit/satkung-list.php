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
				  <span class="breadcrumb-item active"><span class="glyphicon glyphicon-book"></span> Satkung home visit</span>
				</nav>
				<div class="panel panel-primary">
				<div class="panel-heading">
				Daftar Satkung home visit
				<div class="btn-group pull-right">
					<a href="<?php echo site_url('visit/addSatkung');?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-edit"></span>Buat Satkung</a>
					<a href="<?php echo site_url('visit/satkungPrint/all');?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-print"></span> Cetak Rekap</a>
				</div>
				</div>
				<div class="panel-body">
					<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
				        <thead>
				            <tr>
				                <th>&nbsp;</th>
				                <th>Nama</th>
				                <th>Kelas</th>
				                <th>Topik</th>
				                <th>Bidang Pelayanan</th>
				                <th>Jenis Pelayanan</th>
			                  	<th>Aksi</th>
				            </tr>
				        </thead>
        
				        <tbody>
				        	<?php $x=1; foreach($data as $list) {;?>
				            <tr>
				            	<td><?php echo $x;?></td>
				               <td>
				               	<?php echo $list->nama;?>
				               </td>
				               <td>
				               	<?php echo $list->kelas;?>
				               </td>
				               <td>
								<?php echo $list->topik;?>
				               </td>
				               <td>
				               		<?php echo $list->bidang_layanan;?>
				              </td>
				               <td>
				               		<?php echo $list->fungsi_layanan;?>
				              </td>
				                <td width="28%">
				                	<div class="btn-group">
				                	<a href="<?php echo site_url('visit/editSatkungVisit/').$list->id_satkung_home_visit;?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-edit"></span> edit</a>
				                		<a href="<?php echo site_url('visit/detailSatkung/').$list->id_satkung_home_visit;?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-search"></span> detail</a>
				                		<a href="<?php echo site_url('visit/satkungPrint/').$list->id_satkung_home_visit;?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-print"></span> cetak</a>
				                	<a href="<?php echo site_url('visit/deleteSatkungVisit/').$list->id_satkung_home_visit;?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-trash"></span> hapus</a>
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