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
				  <span class="breadcrumb-item active"><span class="glyphicon glyphicon-user"></span>  Data Guru BK</span>
				</nav>
				<div class="panel panel-primary">
				<div class="panel-heading">
				Daftar Guru Bk
				<div class="btn-group pull-right">
					<a href="<?php echo site_url('guru/add');?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-plus"></span>Tambah Guru BK</a>
					<!-- <a href="<?php echo site_url('guru/import');?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-import"></span> Import data</a>
					<a href="<?php echo site_url('guru/export');?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-export"></span> Export data</a> -->
				</div>
				</div>
				<div class="panel-body">
					<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
				        <thead>
				            <tr>
				                <th>NIP</th>
				                <th>Nama Lengkap</th>
				                <th>Kelas</th>
				                <th>Aksi</th>
				            </tr>
				        </thead>
        
				        <tbody>
				        	<?php foreach($data as $list) { ;?>
				            <tr>
				                <td><?php echo $list->nis;?></td>
				                <td><?php echo $list->nama;?></td>
				                <td><?php echo $list->kelas;?></td>
				                <td>
				                	<div class="btn-group">
				                	<a href="<?php echo site_url('guru/edit/').$list->id_guru;?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-edit"></span> edit</a>
				                	<!-- <a href="<?php echo site_url('guru/detail/').$list->id_guru;?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-search"></span> detail</a> -->
				                	<!-- <a target="_blank" href="<?php echo site_url('guru/pdf/').$list->id_guru;?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-print"></span> cetak</a> -->
				                	<?php if($list->status==0) { ;?>
				                		<a href="<?php echo site_url('guru/delete/').$list->id_guru.'/'.$list->nis;?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span> hapus</a>
				                	<?php };?>
				                	<?php if($list->status==1) { ;?>
				                		<a href="<?php echo site_url('guru/restore/').$list->id_guru.'/'.$list->nis;?>" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-repeat"></span> restore</a>
				                	<?php };?>

				                	</div>


				                </td>
				            </tr>
				            <?php };?>
				            
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