<div class="content-wrapper">
	<div class="row padtop">


		<div class="col-md-6 col-md-offset-3">
			<?php if($this->session->flashdata('class')):?>
				<div class="alert <?php echo $this->session->flashdata('class')?> alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<?php echo $this->session->flashdata('message');?>
				</div>
			<?php endif; ?>
			<h3> Add new Product</h3>
			<?php echo form_open_multipart('admin/addProduct','','')?>
			<div class="form-group">
				<?php echo form_input('productName','',array('placeholder'=>'Enter Product Name','class'=>'form-control'));?>
			</div>
			<div class="form-group">
				<?php echo form_input('pCompany','',array('placeholder'=>'Enter company Name','class'=>'form-control'));?>
			</div>
			<div class="form-group">
				<?php echo form_input('pDescription','',array('placeholder'=>'Enter Product description','class'=>'form-control'));?>
			</div>
			<div class="form-group">
				<?php echo form_input('pPrice','',array('placeholder'=>'Enter Product price','class'=>'form-control'));?>
			</div>
			<div class="form-group">
				<?php echo form_input('pQuantity','',array('placeholder'=>'Enter Product quantity','class'=>'form-control'));?>
			</div>
			<div class="form-group">
				<?php
				$categoriesOptions =array();
				foreach ($categories->result() as $category) {
					$categoriesOptions[$category->cId] = $category->cName;
				}
				echo form_dropdown('categoryId',$categoriesOptions,'','class="form-control"');
				?>
			</div>
			<div class="form-group">
				<?php echo form_upload('prodDp','','class="form-control"');?>
			</div>
			<div class="form-group">
				<?php echo form_submit('Add Product','Add Product','class="btn btn-primary"');?>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>
