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
						<h2><i class="icon-edit"></i> Examination information</h2>
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
						<?php echo $this->Form->input('id')?>
						  <fieldset>
						  	<legend>Generate New Examination</legend>

							<div class="control-group">
							  <label class="control-label" for="typeahead">Examination name </label>
							  <div class="controls">
							  	<?php echo $this->Form->input('name', array('label'=>false, 'class'=>'span7 typeahead'))?>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Category </label>
							  <div class="controls">
							  	<?php echo $this->Form->input('category_id', array('label'=>false, 'class'=>'span7 typeahead','options'=>$category_list))?>
							  </div>
							</div>
							
							<?php 
							$key = -1;
							$total = 0;
							$current_number = 0;
							foreach($level_list as $level_id => $level_name):
								$key++;
								foreach ($examination_rule_level_list as $ruleLevel):
									if(!empty($this->data)) {
										foreach ($this->data['ExaminationRuleLevel'] as $key1 => $value1) {
											if($value1['level_id'] == $level_id) {
												$current_number = $value1['num_of_question'];
												$total += $current_number;
												break;
											}
										}
									}
									else if($ruleLevel['ExaminationRuleLevel']['level_id'] == $level_id){
										$current_number = $ruleLevel['ExaminationRuleLevel']['num_of_question'];
										$total += $current_number;
										break;
									}
								endforeach
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
							  <button type="submit" class="btn btn-primary">Generate</button>
							  <a href="/examination_rules/" class="btn">Cancel</a>
							</div>
						  </fieldset>
						<?php echo $this->Form->end()?>
					</div>
				</div><!--/span-->
			</div><!--/row-->