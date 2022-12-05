<div class="content-wrapper">
	<div class="row padtop">


		<div class="col-md-6 col-md-offset-1">
			<?php if($this->session->flashdata('class')):?>
				<div class="alert <?php echo $this->session->flashdata('class')?> alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<?php echo $this->session->flashdata('message');?>
				</div>
			<?php endif; ?>
			<h3> Update Model</h3>
			<?php echo form_open_multipart('admin/updateModel','','')?>
			<div class="form-group">
				<?php echo form_input('modelName',$models[0]['mName'],array('placeholder'=>'Enter Model Name','class'=>'form-control'));?>
			</div>
			<div class="form-group">
				<?php echo form_textarea('modelDesc',$models[0]['mDescription'],array('placeholder'=>'Enter model description','class'=>'form-control'));?>
			</div>
			<input type="hidden" name="mDi" value="<?php echo $models[0]['mId']?>">
			<input type="hidden" name="oldimg" value="<?php echo $models[0]['mDp']?>">
			<div class="form-group">
				<?php
				$productsOptions =array();
				foreach ($products->result() as $product) {
					$productsOptions[$product->pId] = $product->pName;
				}
				echo form_dropdown('productId',$productsOptions,$models[0]['productId'],'class="form-control"');
				?>
			</div>
			<div class="form-group">
				<?php echo form_upload('modelDp','','class="form-control"');?>
			</div>
			<div class="form-group">
				<?php echo form_submit('Update Model','Update Model','class="btn btn-primary"');?>
			</div>
			<?php echo form_close(); ?>
		</div>
		<di class="col-md-4">
			<img src="<?php echo base_url('assets/images/models/'.$models[0]['mDp'])?>" class="img-responsive">
		</di>
	</div>
</div>
