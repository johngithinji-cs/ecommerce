<div class="content-wrapper">
	<div class="row padtop">
		<div class="col-md-6 col-md-offset-3">
			<?php if($this->session->flashdata('class')):?>
				<div class="alert <?php echo $this->session->flashdata('class')?> alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<?php echo $this->session->flashdata('message');?>
				</div>
			<?php endif; ?>
			<h2>All Specs</h2>
			<div class="error">

			</div>
			<?php if($allSpecs) : ?>
				<table class="table table-dashed">
					<th>Id</th>
					<th>Specs Name</th>
					<th>Model Name</th>
					<th>Edit</th>
					<th>Delete</th>
					<?php foreach ($allSpecs as $specs): ?>
						<tr class="ccat<?php echo $specs->spId;?>">
							<td>
								<?php echo $specs->spId?>
							</td>
							<td>
								<?php echo $specs->spName?>
							</td>
							<td>
								<?php echo $specs->mName?>
							</td>
							<td>
								<a href="<?php echo site_url('admin/editSpec/'.$specs->spId)?>" class="btn btn-info">Edit</a>
							</td>
							<td>
								<a href="javascript:void(0)" class="btn btn-danger delSpec" data-id="<?php echo $specs->spId;?>" data-text="<?php echo $this->encryption->encrypt($specs->spId)?>">Delete</a>
							</td>
						</tr>
					<?php endforeach;?>
				</table>
				<?php echo $links;?>

			<?php else: ?>
				Products not available
			<?php endif; ?>

		</div>
	</div>
</div>
