<?php if($this->session->flashdata('error')!=''){ ?>
<div class="alert alert-warning alert-dismissable">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<strong class="text-warning">Peringatan:</strong>
<p><?php echo $this->session->flashdata('error');?></p>
</div>
<?php ;};?>

<?php if($this->session->flashdata('success')!=''){ ?>
<div class="alert alert-success alert-dismissable">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<strong class="text-success">Perhatian:</strong>
<p><?php echo $this->session->flashdata('success');?></p>
</div>
<?php ;};?>