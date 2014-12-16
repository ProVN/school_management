		<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Thiết lập thông tin website</h2>
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
							  <label class="control-label" for="typeahead">Địa chỉ website</label>
							  <div class="controls">
							  	<?php echo $this->Form->input('FRONT_END_WEBSITE_URL', array('label'=>false, 'class'=>'span7 typeahead','value'=>$FRONT_END_WEBSITE_URL['Config']['value']))?>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Server FTP</label>
							  <div class="controls">
							  	<?php echo $this->Form->input('FRONT_END_FTP_URL', array('label'=>false, 'class'=>'span7 typeahead', 'value'=>$FRONT_END_FTP_URL))?>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Tài khoản FTP</label>
							  <div class="controls">
							  	<?php echo $this->Form->input('FRONT_END_FTP_UID', array('label'=>false, 'class'=>'span7 typeahead', 'value'=>$FRONT_END_FTP_UID))?>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Mật khẩu FTP</label>
							  <div class="controls">
							  	<?php echo $this->Form->input('FRONT_END_FTP_PWD', array('label'=>false, 'class'=>'span7 typeahead', 'value'=>$FRONT_END_FTP_PWD))?>
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="typeahead">Thư mục gốc trên FTP</label>
							  <div class="controls">
							  	<?php echo $this->Form->input('FRONT_END_FTP_ROOT', array('label'=>false, 'class'=>'span7 typeahead', 'value'=>$FRONT_END_FTP_ROOT))?>
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