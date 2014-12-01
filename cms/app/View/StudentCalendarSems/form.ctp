		<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Thông tin học kỳ</h2>
						<div class="box-icon">
							<!-- <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> -->
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<!-- <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a> -->
						</div>
					</div>
					<div class="box-content">
						<?php echo $this->Form->create('StudentCalendarSem', array('class'=>'form-horizontal','enctype' => 'multipart/form-data'))?>
						<?php echo $this->Form->input('id')?>
						<?php echo $this->Form->input('student_calendar_year_id',array('type'=>'hidden','value'=>$student_calendar_year_id))?>
						  <fieldset>
						  	<?php if(empty($this->data)):?>
						  	<legend>Thêm học kỳ mới</legend>
						  	<?php else :?>
							<legend>Sửa thông tin học kỳ : <?php echo $this->data['StudentCalendarSem']['name']?></legend>
							<?php endif?>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Tên năm học</label>
							  <div class="controls">
							  	<?php echo $this->Form->input('name', array('label'=>false, 'class'=>'span7 typeahead'))?>
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="typeahead">Nội dung</label>
							  <div class="controls">
							  	<?php echo $this->Form->input('content', array('label'=>false, 'class'=>'cleditor', 'type'=>'textarea'))?>
							  </div>
							</div>
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Lưu lại</button>
							  <a href="/student_calendar_sems/index/<?php echo $student_calendar_year_id?>" class="btn">Hủy</a>
							</div>
						  </fieldset>
						<?php echo $this->Form->end()?>
					</div>
				</div><!--/span-->
			</div><!--/row-->