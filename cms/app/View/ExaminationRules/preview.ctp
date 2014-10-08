		<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Preview Examination Information</h2>
						<div class="box-icon">
							<!-- <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> -->
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<!-- <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a> -->
						</div>
					</div>
					<div class="box-content">
						<?php if(isset($error_msg)):?>
							<div class="alert alert-error">
							<button type="button" class="close" data-dismiss="alert">×</button>
								<strong>Error!</strong><br/>
								<?php echo $error_msg?>
							</div>
						<?php endif?>
						
						<?php echo $this->Form->create('Examination', array('class'=>'form-horizontal'))?>
						  <fieldset>
						  	<legend>Generate Example Examination</legend>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Category </label>
							  <div class="controls">
							  	<?php echo $this->Form->input('category_id', array('label'=>false, 'class'=>'span7 typeahead','options'=>$category_list))?>
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="typeahead">Grade </label>
							  <div class="controls">
							  	<?php echo $this->Form->input('grade_id', array('label'=>false, 'class'=>'span7 typeahead','options'=>$grade_list))?>
							  </div>
							</div>
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Generate</button>
							  <a href="/examination_rules/" class="btn">Cancel</a>
							</div>
						  </fieldset>
						<?php echo $this->Form->end()?>
					</div>
				</div><!--/span-->
			</div><!--/row-->
		<?php if(isset($question_list)):?>
		<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Examination Preview</h2>
						<div class="box-icon">
							<!-- <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> -->
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<!-- <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a> -->
						</div>
					</div>
					<div class="box-content">
						<?php echo $this->Form->create('ExaminationQuestion', array('class'=>'form-horizontal'))?>
						  <fieldset>
						  	<?php foreach($question_list as $key => $item):?>
						  	<legend>Question <?php echo $key+1?></legend>					  															
							<?php echo $item['Question']['name']?>
							<div id="answer_region" style="margin-top:10px">
								<?php foreach ($item['Answer'] as $key1 => $answer):?>									
								<div class="control-group">
								 <label class="control-label" for="typeahead">
								  	<input type="radio" value="<?php echo $key?>"/>
								 </label>
								 <div class="controls" style="padding-top:4px">
								 	<span ><?php echo $answer['name']?></span>
								 </div>
								</div>
								<?php endforeach?>
							</div>
							<?php endforeach?>
						  </fieldset>
						<?php echo $this->Form->end()?>
					</div>
				</div><!--/span-->
			</div><!--/row-->
		<?php endif?>			