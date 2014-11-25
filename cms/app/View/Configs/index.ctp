		<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Thiết lập email</h2>
						<div class="box-icon">
							<!-- <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> -->
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<!-- <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a> -->
						</div>
					</div>
					<div class="box-content">
						<?php echo $this->Form->create('Configs', array('class'=>'form-horizontal','enctype' => 'multipart/form-data'))?>
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Email host</label>
							  <div class="controls">
							  	<?php echo $this->Form->input('email_host', array('label'=>false, 'class'=>'span7 typeahead','value'=>$email_host))?>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Email Port</label>
							  <div class="controls">
							  	<?php echo $this->Form->input('email_port', array('label'=>false, 'class'=>'span7 typeahead', 'value'=>$email_port))?>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Email username</label>
							  <div class="controls">
							  	<?php echo $this->Form->input('email_username', array('label'=>false, 'class'=>'span7 typeahead', 'value'=>$email_username))?>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Email password</label>
							  <div class="controls">
							  	<?php echo $this->Form->input('email_password', array('label'=>false, 'class'=>'span7 typeahead', 'value'=>$email_password))?>
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="typeahead">Email target</label>
							  <div class="controls">
							  	<?php echo $this->Form->input('email_received', array('label'=>false, 'class'=>'span7 typeahead', 'value'=>$email_received))?>
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