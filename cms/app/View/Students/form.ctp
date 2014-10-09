		<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Thông tin học viên</h2>
						<div class="box-icon">
							<!-- <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> -->
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<!-- <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a> -->
						</div>
					</div>
					<div class="box-content">
						<?php echo $this->Form->create('Student', array('class'=>'form-horizontal'))?>
						<?php echo $this->Form->input('id')?>
						  <fieldset>
						  	<?php if(empty($this->data)):?>
						  	<legend>Thêm học viên mới</legend>
						  	<?php else :?>
							<legend>Sửa thông tin học viên : <?php echo $this->data['Student']['name']?></legend>
							<?php endif?>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Trường học</label>
							  <div class="controls">
							  	<?php echo $this->Form->input('school_id', array('label'=>false, 'class'=>'span7 typeahead','options'=>$school_list))?>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Quốc gia</label>
							  <div class="controls">
							  	<?php echo $this->Form->input('country_id', array('label'=>false, 'class'=>'span7 typeahead','options'=>$country_list))?>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Mã học viên</label>
							  <div class="controls">
							  	<?php echo $this->Form->input('code', array('label'=>false, 'class'=>'span7 typeahead'))?>
							  </div>
							</div>							
							<div class="control-group">
							  <label class="control-label" for="typeahead">Tên học viên</label>
							  <div class="controls">
							  	<?php echo $this->Form->input('name', array('label'=>false, 'class'=>'span7 typeahead'))?>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Địa chỉ</label>
							  <div class="controls">
							  	<?php echo $this->Form->input('address', array('label'=>false, 'class'=>'span7 typeahead'))?>
							  </div>
							</div>
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Lưu lại</button>
							  <a href="/cms/students/" class="btn">Hủy</a>
							</div>
						  </fieldset>
						<?php echo $this->Form->end()?>
					</div>
				</div><!--/span-->
			</div><!--/row-->