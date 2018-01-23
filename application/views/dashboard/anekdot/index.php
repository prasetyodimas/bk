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
				  <span class="breadcrumb-item active"><span class="glyphicon glyphicon-book"></span> Catatan Anekdot</span>
				</nav>
				<div class="panel panel-primary">
				<div class="panel-heading">
				Daftar Catatan Anekdot
				<div class="btn-group pull-right">
					<a href="<?php echo site_url('Anekdot/add');?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-plus"></span>Tambah</a>
				</div>
				</div>
				<div class="panel-body">
					<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
				        <thead>
				            <tr>
				                <th>&nbsp;</th>
				                <th>NIS</th>
				                <th>Nama</th>
				                <th>Kejadian</th>
				                <th>Aksi</th>
				            </tr>
				        </thead>
        
				        <tbody>
				        	<?php $x=1; foreach($data as $list) {;?>
				            <tr>
				            	<td><?php echo $x;?></td>
				               <td>
				               	<?php echo $list->nis;?>
				               </td>
				               <td>
								<?php echo $list->nama;?>
				               </td>
				               <td>
				               		<?php echo $list->ket_kejadian;?>
				              </td>
				                <td width="28%">
				                	<div class="btn-group">
				                	<a href="<?php echo site_url('Anekdot/edit/').$list->id_anekdot;?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-edit"></span> edit</a>
				                	<a href="<?php echo site_url('Anekdot/detail/').$list->id_anekdot;?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-search"></span> detail</a>
				                	<a target="_blank" href="<?php echo site_url('Anekdot/pdf/').$list->id_anekdot;?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-print"></span> cetak</a>
				                	<a href="<?php echo site_url('Anekdot/delete/').$list->id_anekdot;?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-trash"></span> hapus</a>
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