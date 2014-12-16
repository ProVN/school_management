		<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Thông tin tài liệu</h2>
						<div class="box-icon">
							<!-- <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> -->
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<!-- <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a> -->
						</div>
					</div>
					<div class="box-content">
						<?php echo $this->Form->create('Document', array('class'=>'form-horizontal','enctype' => 'multipart/form-data'))?>
						<?php echo $this->Form->input('id')?>
						  <fieldset>
						  	<?php if(empty($this->data)):?>
						  	<legend>Thêm tài liệu mới</legend>
						  	<?php else :?>
							<legend>Sửa thông tin tài liệu : <?php echo $this->data['Document']['name']?></legend>
							<?php endif?>
							<?php if(isset($student_id)):?>
							<?php echo $this->Form->input('student_id', array('label'=>false, 'type'=>'hidden' ,'value' => $student_id))?>
							<?php else:?>
								<?php echo $this->Form->input('student_id', array('label'=>false, 'type'=>'hidden'))?>
							<?php endif?>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Tên tài liệu</label>
							  <div class="controls">
							  	<?php echo $this->Form->input('name', array('label'=>false, 'class'=>'span7 typeahead'))?>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Đường dẫn</label>
							  <div class="controls">
							  	<?php echo $this->Form->input('file_url', array('label'=>false, 'type'=>'file'))?>
							  </div>
							</div>							
							<div class="control-group">
							  <label class="control-label" for="typeahead">Mô tả</label>
							  <div class="controls">
							  	<?php echo $this->Form->input('description', array('label'=>false, 'class'=>'span7 typeahead'))?>
							  </div>
							</div>							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Lưu lại</button>
							  <a href="/documents/index/<?php echo $student_id?>" class="btn">Hủy</a>
							</div>
						  </fieldset>
						<?php echo $this->Form->end()?>
					</div>
				</div><!--/span-->
			</div><!--/row-->