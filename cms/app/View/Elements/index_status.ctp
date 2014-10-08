<div id="index_status">
<?php if($db_result_mode != null):?>
	<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert">×</button>
		<?php if($db_result_mode == 'success'):?>
			<strong>Well done!</strong> Your <?php echo $item_name?> was saved to the system
		<?php endif?>
	</div>
<?php endif?>
</div>