		<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Member information</h2>
						<div class="box-icon">
							<!-- <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> -->
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<!-- <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a> -->
						</div>
					</div>
					<div class="box-content">
						<?php echo $this->Form->create('Member', array('class'=>'form-horizontal'))?>
						<?php echo $this->Form->input('id')?>
						  <fieldset>
							<legend>Editing Member: <?php echo $this->data['Member']['facebook']?></legend>						
							<div class="control-group">
							  <label class="control-label" for="typeahead">Member name </label>
							  <div class="controls">
							  	<?php echo $this->Form->input('facebook', array('label'=>false, 'class'=>'span7 typeahead', 'readonly'=>'readonly'))?>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Member name </label>
							  <div class="controls">
							  	<?php echo $this->Form->input('grade_id', array('label'=>false, 'class'=>'span7 typeahead', 'options'=>$grade_list))?>
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save changes</button>
							  <a href="/members/" class="btn">Cancel</a>
							</div>
						  </fieldset>
						<?php echo $this->Form->end()?>
					</div>
				</div><!--/span-->
			</div><!--/row-->