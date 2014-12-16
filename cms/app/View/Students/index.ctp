		<script type="text/javascript">
			function delete_confirm(id,element)
			{
				var cfm = window.confirm('Bạn có chắc chắn muốn xóa học viên này?');
				
				if(cfm == true) {
					
					var column = element.parent();
					var row = element.parents('tr');
					var old_html = column.html();
					$.ajax({
						url:"<?php echo $this->Html->url(array('controller'=>'students','action'=>'delete'))?>/"+id,
						dataType:"html",
						beforeSend:function() {							column.html('Deleting...');
						},
						success:function (data) {
							row.fadeOut(500);
						},
						error:function(request, error) {
							alert(error)
							column.html(old_html);
						}
					});
				}
			}
			function showSearch(){
				var country = $('#country').val();
				var school = $('#school').val();
				window.location = '/students/index/'+country+"/"+school+"/";								
			}
		</script>
		
		<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-th"></i> Học viên</h2>
						<div class="box-icon">
							<!-- <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> -->
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<!-- <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a> -->
						</div>
					</div>
					<div class="box-content">
						<div class="toolbar">
							<a href="/students/add/" class="btn btn-primary">
								<i class="icon-white icon-plus"></i>
								Thêm học viên mới
							</a>
							<div style="float:right; margin-left:10px">
								<button class="btn btn-primary" onclick="showSearch()">Tìm kiếm</button>
							</div>
								<div style="float:right">
								Quốc gia:
								<select id="country">
									<option value="0">Tất cả</option>
									<?php foreach ($cities as $key => $value):?>
									<option value="<?php echo $key?>" <?php if($key==$country) echo 'selected="selected"'?>><?php echo $value?></option>	
									<?php endforeach?>
								</select>
								</div>
								<div style="float:right; margin-right: 30px">
								Trường:
								<select id="school">
									<option value="0">Tất cả</option>
									<?php foreach ($schools as $key => $value):?>
									<option value="<?php echo $key?>" <?php if($key==$school) echo 'selected="selected"'?>><?php echo $value?></option>	
									<?php endforeach?>
								</select>
								</div>							
						</div>
						<?php echo $this->Element('index_status', array('item_name'=>'Student'))?>
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
							  	  <th>Mã học viên</th>
								  <th>Tên học viên</th>
								  <th>Ngày sinh</th>
								  <th>Trường</th>
								  <th>Quốc gia</th>
								  <th>Ngày tạo</th>
								  <th>Lần đăng nhập cuối</th>
								  <th>Số lần đăng nhập</th>
								  <th></th>
							  </tr>
						  </thead>   
						  <tbody>
						  	<?php foreach($datasource as $item):?>
							<tr>
								<td><?php echo $item['Student']['code']?></td>
								<td class="center"><?php echo $item['Student']['name']?></td>
								<td class="center"><?php echo $item['Student']['birthday']?></td>
								<td class="center"><?php echo $item['School']['name']?></td>
								<td class="center"><?php echo $item['Country']['name']?></td>
								<td class="center"><?php echo $item['Student']['create_date']?></td>
								<td class="center"><?php echo $item['Student']['lastlogin']?></td>
								<td class="center"><?php echo $item['Student']['login_cnt']?></td>
								<td class="center" style="width:380px">
									<a class="btn btn-info" href="/students/edit/<?php echo $item['Student']['id']?>/">
										<i class="icon-edit icon-white"></i>  
										Sửa                            	                
									</a>
									<a class="btn btn-danger" href="javascript:void(0);" onclick="delete_confirm(<?php echo $item['Student']['id']?>,$(this))">
										<i class="icon-trash icon-white"></i> 
										Xóa
									</a>
									<a class="btn btn-primary" href="/documents/index/<?php echo $item['Student']['id']?>/">
										<i class="icon-edit icon-white"></i>  
										Xem tài liệu                            	                
									</a>
									<a class="btn btn-primary" href="/student_calendar_years/index/<?php echo $item['Student']['id']?>/">
										<i class="icon-calendar icon-white"></i>  
										Thời khóa biểu                            	                
									</a>
								</td>
							</tr>
							<?php endforeach ?>
						  </tbody>
					  </table>
					</div>
				</div><!--/span-->	
			</div><!--/row-->
