<div class="content-wrapper">
<div class="row padtop">


	<div class="col-md-6 col-md-offset-3">
		<?php if($this->session->flashdata('class')):?>
			<div class="alert <?php echo $this->session->flashdata('class')?> alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<?php echo $this->session->flashdata('message');?>
			</div>
		<?php endif; ?>
		<?php echo form_open_multipart('admin/addCategory','','')?>
		<div class="form-group">
			<?php echo form_input('categoryName','',array('placeholder'=>'Enter category name','class'=>'form-control'));?>
		</div>
		<div class="form-group">
			<?php echo form_upload('catDp','','class="form-control"');?>
		</div>
		<div class="form-group">
			<?php echo form_submit('Add category','Add category','class="btn btn-primary"');?>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>
</div>
