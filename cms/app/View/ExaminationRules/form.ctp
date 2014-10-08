	<script type="text/javascript">
		function calculate_question(element)
		{
			var number_of_question = 0;
			$('.num_of_questions').each(function(){
				number_of_question += parseInt($(this).val());
			});
			$('#number_of_question').val(number_of_question);
		}
	</script>

		<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Examination Rule information</h2>
						<div class="box-icon">
							<!-- <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> -->
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<!-- <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a> -->
						</div>
					</div>
					<div class="box-content">
						<?php echo $this->Form->create('ExaminationRule', array('class'=>'form-horizontal'))?>
						<?php echo $this->Form->input('id')?>
						  <fieldset>
						  	<?php if(empty($this->data)):?>
						  	<legend>Add New Rule</legend>
						  	<?php else :?>
							<legend>Editing Rule: <?php echo $this->data['ExaminationRule']['name']?></legend>
							<?php endif?>							
							<div class="control-group">
							  <label class="control-label" for="typeahead">Rule name </label>
							  <div class="controls">
							  	<?php echo $this->Form->input('name', array('label'=>false, 'class'=>'span7 typeahead'))?>
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="typeahead">Apply for Grade </label>
							  	<?php 
							  		foreach($grade_list as $grade_id => $grade_name):
										$checked=false;
										if(!empty($this->data)){
							  				foreach ($this->data['ExaminationRuleGrade'] as $value) {
												  if($value['grade_id']==$grade_id)
											  	$checked=true;
										  	}
										}
							  		?>
							  	<div class="controls">
							  		<label class="checkbox inline">
									<div class="checker">
										<span>
											<input style="opacity: 0;" name="data[grade_list][]" value="<?php echo $grade_id?>" type="checkbox" <?php if($checked) echo 'checked="checked"'?>>
										</span>
									</div> <?php echo $grade_name?>
									</label>
								</div>
							  	<?php endforeach?>							  
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="textarea2">Description</label>
							  <div class="controls">
							  	<?php echo $this->Form->input('description', array('label'=>false, 'class'=>'cleditor','type'=>'textarea'))?>
							  </div>
							</div>
							<?php 
							$key = -1;
							$total = 0;
							$current_number = 0;
							foreach($level_list as $level_id => $level_name):
								$key++;
								if(!empty($this->data)){
									foreach ($this->data['ExaminationRuleLevel'] as $key => $ruleLevel){
										if($ruleLevel['level_id'] == $level_id){
											$current_number = $ruleLevel['num_of_question'];
											$total += $current_number;
											break;
										}
									}
								}
							?>
							<div class="control-group">
							  <label class="control-label" for="textarea2"><?php echo $level_name?></label>
							  <div class="controls">
							  	<div class="input-append">
							  		<input type="hidden" name="data[ExaminationRuleLevel][<?php echo $key?>][level_id]" value="<?php echo $level_id?>"/>
							  		<input type="text" name="data[ExaminationRuleLevel][<?php echo $key?>][num_of_question]" value="<?php if($current_number >0) echo $current_number?>" style="text-align:right" placeholder="0" class="num_of_questions typeahead span3"  onchange="calculate_question()"/>
							  		<span class="help-inline">questions</span>
							  	</div>
							  </div>
							</div>
							<?php endforeach?>
							<div class="control-group">
							  <label class="control-label" for="textarea2">Total of questions</label>
							  <div class="controls">
							  	<div class="input-append">
							  		<input type="text" id="number_of_question" readonly="readonly" name="total" style="text-align:right" value="<?php echo $total?>" class="typeahead span3"/>
							  		<span class="help-inline">questions</span>
							  	</div>
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save changes</button>
							  <a href="/examination_rules/" class="btn">Cancel</a>
							</div>
						  </fieldset>
						<?php echo $this->Form->end()?>
					</div>
				</div><!--/span-->
			</div><!--/row-->