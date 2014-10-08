		<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Question information</h2>
						<div class="box-icon">
							<!-- <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> -->
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<!-- <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a> -->
						</div>
					</div>
					<div class="box-content">
						<?php echo $this->Form->create('Question', array('class'=>'form-horizontal'))?>
						<?php echo $this->Form->input('id')?>
						<?php echo $this->Form->input('number_of_answer',array('value'=>$number_of_answer,'type'=>'hidden'))?>
						  <fieldset>
						  	<?php if(empty($this->data)):?>
						  	<legend>Add New Question</legend>
						  	<?php else :?>
							<legend>Editing Question: <?php echo $this->data['Question']['name']?></legend>
							<?php endif?>							
							
							<div class="control-group">
							  <label class="control-label" for="textarea2">Category</label>
							  <div class="controls">
							  	<?php echo $this->Form->input('category_id', array('label'=>false,'class'=>"typeahead", 'options'=>$category_list))?>
							  </div>
							</div>							
							
							<div class="control-group">
							  <label class="control-label" for="textarea2">Category</label>
							  <div class="controls">
							  	<?php echo $this->Form->input('grade_id', array('label'=>false,'class'=>"typeahead", 'options'=>$grade_list))?>
							  </div>
							</div>	
							
							<div class="control-group">
							  <label class="control-label" for="textarea2">Level</label>
							  <div class="controls">
							  	<?php echo $this->Form->input('level_id', array('label'=>false,'class'=>"typeahead", 'options'=>$level_list))?>
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="textarea2">Question</label>
							  <div class="controls">
							  	<?php echo $this->Form->input('name', array('label'=>false, 'class'=>'typeahead span7','type'=>'textarea'))?>
							  </div>
							</div>
							<div id="answer_region">
								<?php for ($key = 0; $key < $number_of_answer;$key++):
									$answer = (isset($this->data['Answer']) && $key < count($this->data['Answer'])) ? $this->data['Answer'][$key] : null;		
								?>
								<div class="control-group">
								 <label class="control-label" for="typeahead">
								  	<?php if($key == 0) echo 'Answer '?>
								  	<input type="radio" value="<?php echo $key?>"/>
								 </label>
								 <div class="controls">
								 	<input type="hidden" name="data[Answer][<?php echo $key?>][question_id]" value ="<?php if(isset($this->data['Question']['id'])) echo $this->data['Question']['id']?>" class="span7 typeahead">
								  	<input type="text" name="data[Answer][<?php echo $key?>][name]" value ="<?php echo $answer['name']?>" class="span7 typeahead">
								 </div>
								</div>
								<?php endfor?>
							</div>
							<div class="control-group">
								  <div class="controls">
								  	<button type="submit" name="submit_type" value="new_answer_row" class="btn btn-success" onclick='add_new_answer_row()'>
										<i class="icon-plus icon-white"></i>
										Add more answer
									</button>
								  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" name="submit_type" value="form_submit" class="btn btn-primary">Save changes</button>
							  <a href="/questions/" class="btn">Cancel</a>
							</div>
						  </fieldset>
						<?php echo $this->Form->end()?>
					</div>
				</div><!--/span-->
			</div><!--/row-->