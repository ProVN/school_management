
		<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Thông tin năm học</h2>
						<div class="box-icon">
							<!-- <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> -->
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<!-- <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a> -->
						</div>
					</div>
					<div class="box-content">
						<?php echo $this->Form->create('StudentCalendarYear', array('class'=>'form-horizontal','enctype' => 'multipart/form-data'))?>
						<?php echo $this->Form->input('id')?>
						<?php echo $this->Form->input('student_id',array('type'=>'hidden','value'=>$student_id))?>
						  <fieldset>
						  	<?php if(empty($this->data)):?>
						  	<legend>Thêm năm học mới</legend>
						  	<?php else :?>
							<legend>Sửa thông tin năm học : <?php echo $this->data['StudentCalendarYear']['name']?></legend>
							<?php endif?>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Tên trường học</label>
							  <div class="controls">
							  	<?php echo $this->Form->input('name', array('label'=>false, 'class'=>'span7 typeahead'))?>
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Lưu lại</button>
							  <a href="/student_calendar_years/index/<?php echo $student_id?>" class="btn">Hủy</a>
							</div>
						  </fieldset>
						<?php echo $this->Form->end()?>
					</div>
				</div><!--/span-->
			</div><!--/row-->