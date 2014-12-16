		<script type="text/javascript">
			function addRow(){
				var html = $("#template").html();
				$('#thong_tin_khac').append(html);				
			}
			
		</script>
		
		
		<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Thông tin học viên</h2>
						<div class="box-icon">
							<!-- <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> -->
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<!-- <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a> -->
						</div>
					</div>
					<div class="box-content">
						<?php echo $this->Form->create('Student', array('class'=>'form-horizontal','enctype' => 'multipart/form-data'))?>
						<?php echo $this->Form->input('id')?>
						  <fieldset>
						  	<?php if(empty($this->data)):?>
						  	<legend>Thêm học viên mới</legend>
						  	<?php else :?>
							<legend>Sửa thông tin học viên : <?php echo $this->data['Student']['name']?></legend>
							<?php endif?>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Trường học</label>
							  <div class="controls">
							  	<?php echo $this->Form->input('school_id', array('label'=>false, 'class'=>'span7 typeahead','options'=>$school_list))?>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Quốc gia</label>
							  <div class="controls">
							  	<?php echo $this->Form->input('country_id', array('label'=>false, 'class'=>'span7 typeahead','options'=>$country_list))?>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Mã học viên</label>
							  <div class="controls">
							  	<?php echo $this->Form->input('code', array('label'=>false, 'class'=>'span7 typeahead'))?>
							  </div>
							</div>	
							<div class="control-group">
							  <label class="control-label" for="typeahead">Mật khẩu đăng nhập</label>
							  <div class="controls">
							  	<?php echo $this->Form->input('password', array('label'=>false, 'class'=>'span7 typeahead','type'=>'text'))?>
							  </div>
							</div>							
							<div class="control-group">
							  <label class="control-label" for="typeahead">Tên học viên</label>
							  <div class="controls">
							  	<?php echo $this->Form->input('name', array('label'=>false, 'class'=>'span7 typeahead'))?>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Địa chỉ</label>
							  <div class="controls">
							  	<?php echo $this->Form->input('address', array('label'=>false, 'class'=>'span7 typeahead'))?>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Ngày sinh</label>
							  <div class="controls">
							  	<?php echo $this->Form->input('birthday', array('label'=>false, 'span5','minYear' => date('Y') - 100,))?>
							  </div>
							</div>		
							
							<div class="control-group">
							  <label class="control-label" for="typeahead">Email</label>
							  <div class="controls">
							  	<?php echo $this->Form->input('email', array('label'=>false, 'span5','type'=>'email'))?>
							  </div>
							</div>	
							
							<div class="control-group">
							  <label class="control-label" for="typeahead">Số điện thoại</label>
							  <div class="controls">
							  	<?php echo $this->Form->input('phone', array('label'=>false, 'span5'))?>
							  </div>
							</div>
												
							<div class="control-group">
							  <label class="control-label" for="typeahead">Hồ sơ hoàn tất</label>
							  <div class="controls">
							  	<div class="input-prepend input-append">
									<input name="data[Student][profile_process]" value="<?php if(!empty($this->data)) echo $this->data['Student']['profile_process']?>" size="16" type="text" style="width:30px; text-align:right"><span class="add-on">%</span>
								  </div>
							  </div>
							</div>	
							
							<div class="control-group">
							  <label class="control-label" for="typeahead">Hình đại diện (nhỏ)</label>
							  <div class="controls">
							  	<?php if(!empty($this->data)):?>
							  	<img src='<?php echo $FRONT_END_WEBSITE_URL?>upload/img/students/<?php echo $this->data['Student']['image_small']?>' style="width:200px"/>
							  	<?php endif?>
							  	<div>
							  		<input type="file" name="file1"/>
							  	</div>
							  	<p class="help-block">Để trống nếu bạn muốn giữ hình hiện tại</p>	
							  </div>
							</div>	
							<!--
							<div class="control-group">
							  <label class="control-label" for="typeahead">Hình chân dung (lớn)</label>
							  <div class="controls">
							  	<?php if(!empty($this->data)):?>
							  	<img src='<?php echo Configure::read('FRONT_END_WEBSITE_URL')?>upload/img/students/<?php echo $this->data['Student']['image_large']?>' style="width:200px"/>
							  	<?php endif?>
							  	<div>
							  		<input type="file" name="file2"/>
							  	</div>
							  	<p class="help-block">Để trống nếu bạn muốn giữ hình hiện tại</p>	
							  </div>
							</div>
							-->
						</fieldset>
						 <fieldset>
						  	<legend>Thông tin thêm</legend>							
							<div id="thong_tin_khac">
								<?php if(isset($this->data['StudentInfo'])):?>
								<?php foreach($this->data['StudentInfo'] as $key => $value){?>
									<div class="control-group">
							  			<label class="control-label" for="typeahead">
							  				<input name="data[StudentInfo][name][]" type="text" class="span12 typeahead" value="<?php echo $value['name']?>"></input>
							  			</label>
							  		<div class="controls" style="padding-top:5px">
								  		<input name="data[StudentInfo][value][]" type="text" class="span12 typeahead" value="<?php echo $value['value']?>"></input>
								  	</div>
								</div>
								<?php } endif?>
							</div>
							
							<button class="btn btn-success" type="button" onclick="addRow()">
								<i class="icon-white icon-plus"></i>
								Thêm thông tin
							</button>
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Lưu lại</button>
							  <a href="/students/" class="btn">Hủy</a>
							</div>
						 </fieldset> 
						<?php echo $this->Form->end()?>
						
						<div id="template" style="display:none">
							<div class="control-group">
							  	<label class="control-label" for="typeahead">
							  		<input name="data[StudentInfo][name][]" type="text" class="span12 typeahead"></input>
							  	</label>
							  		<div class="controls" style="padding-top:5px">
								  		<input name="data[StudentInfo][value][]" type="text" class="span12 typeahead"></input>
								  	</div>
								</div>
						</div>
						
					</div>
				</div><!--/span-->
			</div><!--/row-->