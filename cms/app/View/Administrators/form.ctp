		<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Thông tin quản trị viên</h2>
						<div class="box-icon">
							<!-- <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> -->
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<!-- <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a> -->
						</div>
					</div>
					<div class="box-content">
						<?php echo $this->Form->create('Administrator', array('class'=>'form-horizontal'))?>
						<?php echo $this->Form->input('id')?>
						  <fieldset>
						  	<?php if(empty($this->data)):?>
						  	<legend>Thêm quản trị viên mới</legend>
						  	<?php else :?>
							<legend>Sửa thông tin quản trị viên : <?php echo $this->data['Administrator']['username']?></legend>
							<?php endif?>
							<div class="control-group">
							  <label class="control-label" for="typeahead">User Name</label>
							  <div class="controls">
							  	<?php echo $this->Form->input('username', array('label'=>false, 'class'=>'span7 typeahead'))?>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Password</label>
							  <div class="controls">
							  	<?php echo $this->Form->input('password', array('label'=>false, 'class'=>'span7 typeahead'))?>
							  </div>
							</div>
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Lưu lại</button>
							  <a href="/students/" class="btn">Hủy</a>
							</div>
						  </fieldset>
						<?php echo $this->Form->end()?>
					</div>
				</div><!--/span-->
			</div><!--/row-->