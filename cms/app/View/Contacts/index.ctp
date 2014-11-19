		<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Thông tin liên hệ</h2>
						<div class="box-icon">
							<!-- <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> -->
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<!-- <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a> -->
						</div>
					</div>
					<div class="box-content">
						<?php echo $this->Form->create('Contact', array('class'=>'form-horizontal'))?>
						<?php echo $this->Form->input('id')?>
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Địa chỉ</label>
							  <div class="controls">
							  	<?php echo $this->Form->input('address', array('label'=>false, 'class'=>'span7 typeahead'))?>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Email</label>
							  <div class="controls">
							  	<?php echo $this->Form->input('email', array('label'=>false, 'class'=>'span7 typeahead'))?>
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="typeahead">Số điện thoại</label>
							  <div class="controls">
							  	<?php echo $this->Form->input('phone', array('label'=>false, 'class'=>'span7 typeahead'))?>
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="typeahead">Website</label>
							  <div class="controls">
							  	<?php echo $this->Form->input('website', array('label'=>false, 'class'=>'span7 typeahead'))?>
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