<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Thời khóa biểu</h2>
						<div class="box-icon">
							<!-- <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> -->
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<!-- <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a> -->
						</div>
					</div>
					<div class="box-content">
						<?php echo $this->Form->create('Calendar', array('class'=>'form-horizontal','enctype' => 'multipart/form-data'))?>
						<?php echo $this->Form->input('id')?>
						<?php echo $this->Form->input('student_id',array('value'=>$student_id, 'type'=>'hidden'))?>
						  
							<div class="control-group">
							  <label class="control-label" for="typeahead">Nội dung thời khóa biểu</label>
							  <div class="controls">
							  	<?php echo $this->Form->input('calendar', array('type'=>'textarea','label'=>false, 'class'=>'cleditor'))?>
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