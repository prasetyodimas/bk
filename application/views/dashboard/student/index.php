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
				  <span class="breadcrumb-item active"><span class="glyphicon glyphicon-user"></span>  Data Pribadi Siswa</span>
				</nav>
				<div class="panel panel-primary">
				<div class="panel-heading">
				Daftar Siswa
				<div class="btn-group pull-right">
					<a href="<?php echo site_url('student/add');?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-plus"></span>Tambah Siswa</a>
					<a href="<?php echo site_url('student/import');?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-import"></span> Import data</a>
					<a href="<?php echo site_url('student/export');?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-export"></span> Export data</a>
				</div>
				</div>
				<div class="panel-body">
					<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
				        <thead>
				            <tr>
				                <th>&nbsp;</th>
				                <th>NIS</th>
				                <th>Nama Lengkap</th>
				                <th>Kelas</th>
				                <th>Jurusan</th>
				                <th>Hp</th>
				                <th>Aksi</th>
				            </tr>
				        </thead>
        
				        <tbody>
				        	<?php foreach($data as $list) { ;?>
				            <tr>
				                <td width="10%">
				                <?php if($list->photo!=='') { ?> 
				                <img src="<?php echo base_url().$list->photo;?>" width="100%">
				                <?php }else { ?>
								<img src="<?php echo base_url('public/image/user.png')?>" width="100%">
				                <?php ;};?>
				                </td>
				                <td><?php echo $list->nis;?></td>
				                <td><?php echo $list->nama;?></td>
				                <td width="10%"><?php echo $list->kelas;?></td>
				                <td><?php echo $list->jurusan;?></td>
				                <td><?php echo $list->hp;?></td>
				                <td>
				                	<div class="btn-group">
				                	<a href="<?php echo site_url('student/edit/').$list->id_student;?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-edit"></span> edit</a>
				                	<a href="<?php echo site_url('student/detail/').$list->id_student;?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-search"></span> detail</a>
				                	<a target="_blank" href="<?php echo site_url('student/pdf/').$list->id_student;?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-print"></span> cetak</a>
									<?php if($list->status==0) {;?>
				                		<a href="<?php echo site_url('student/delete/').$list->id_student;?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span> hapus</a>
									<?php ;};?>

									<?php if($list->status==1) {;?>
				                		<a href="<?php echo site_url('student/restore/').$list->id_student;?>" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-repeat"></span> restore</a>
									<?php ;};?>

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