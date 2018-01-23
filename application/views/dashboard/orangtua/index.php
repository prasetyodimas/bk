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
				  <span class="breadcrumb-item active"><span class="glyphicon glyphicon-user"></span>  Data Pribadi Orang tua</span>
				</nav>
				<div class="panel panel-primary">
				<div class="panel-heading">
				Daftar Orang tua
				<div class="btn-group pull-right">
					<a href="<?php echo site_url('orangtua/add');?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-plus"></span>Tambah Orang tua</a>
					<!-- <a href="<?php echo site_url('orangtua/import');?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-import"></span> Import data</a>
					<a href="<?php echo site_url('orangtua/export');?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-export"></span> Export data</a> -->
				</div>
				</div>
				<div class="panel-body">
					<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
				        <thead>
				            <tr>
				                <th>NIS</th>
								<th>Nama Anak</th>
				                <th>Nama Lengkap</th>
				               <!--  <th>Alamat</th> -->
				                <th>Hp</th>
				                <th>Aksi</th>
				            </tr>
				        </thead>
        
				        <tbody>
				        	<?php foreach($data as $list) { ;?>
				            <tr>
				                <td><?php echo $list->nis;?></td>
								<td><?php echo $list->nama_anak;?></td>
				                <td><?php echo $list->nama_orangtua;?></td>
				                <!--  <td><?php echo $list->alamat_rumah;?></td> -->
				                <td><?php echo $list->telp;?></td>
				                <td>
				                	<div class="btn-group">
				                	<a href="<?php echo site_url('orangtua/edit/').$list->id_orangtua;?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-edit"></span> edit</a>
				                	<!-- <a href="<?php echo site_url('orangtua/detail/').$list->id_orangtua;?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-search"></span> detail</a> -->
				                	<!-- <a target="_blank" href="<?php echo site_url('orangtua/pdf/').$list->id_orangtua;?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-print"></span> cetak</a> -->
				                	<a href="<?php echo site_url('orangtua/delete/').$list->id_orangtua.'/'.$list->nis;?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-trash"></span> hapus</a>
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