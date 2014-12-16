		<script type="text/javascript">
			function delete_confirm(id,element)
			{
				var cfm = window.confirm('Bạn có chắc chắn muốn xóa tài liệu này?');
				if(cfm == true) {
					var column = element.parent();
					var row = element.parents('tr');
					var old_html = column.html();
					$.ajax({
						url:"<?php echo $this->Html->url(array('controller'=>'documents','action'=>'delete'))?>/"+id,
						dataType:"html",
						beforeSend:function() {
							column.html('Deleting...');
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
		</script>
		
		<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-th"></i> Trạng thái hồ sơ</h2>
						<div class="box-icon">
							<!-- <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> -->
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<!-- <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a> -->
						</div>
					</div>
					<div class="box-content">
						<div class="toolbar">
							<a href="/documents/add/<?php echo $student_id?>/1/" class="btn btn-primary">
								<i class="icon-white icon-plus"></i>
								Thêm tài liệu mới
							</a>
						</div>
						<?php echo $this->Element('index_status', array('item_name'=>'category'))?>
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
							  	  <th style="width:30px">STT</th>
								  <th>Tên tài liệu</th>
								  <th>Đường dẫn</th>
								  <th>Mô tả</th>
							  </tr>
						  </thead>   
						  <tbody>
						  	<?php 
						  		$index = 0;
						  		foreach($datasource as $key => $item):
						  		if($item['Document']['doc_type'] != 1) continue;
						  		$index++;
						  		?>
							<tr>
								<td><?php echo $index?></td>
								<td class="center"><?php echo $item['Document']['name']?></td>
								<td class="center">
									<a href='<?php echo $FRONT_END_WEBSITE_URL?>upload/documents/<?php echo $item['Document']['url']?>' target="_blank">
									<?php echo $item['Document']['url']?></a>
								</td>
								<td class="center"><?php echo $item['Document']['description']?></td>
								<td class="center" style="width:150px">
									<a class="btn btn-info" href="/documents/edit/<?php echo $item['Document']['id']?>/">
										<i class="icon-edit icon-white"></i>  
										Sửa                            	                
									</a>
									<a class="btn btn-danger" href="javascript:void(0);" onclick="delete_confirm('<?php echo $item['Document']['id']?>',$(this))">
										<i class="icon-trash icon-white"></i> 
										Xóa
									</a>
								</td>
							</tr>
							<?php endforeach ?>
						  </tbody>
					  </table>
					</div>
				</div><!--/span-->	
			</div><!--/row-->
			
		<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-th"></i> Tài liệu tải xuống</h2>
						<div class="box-icon">
							<!-- <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> -->
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<!-- <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a> -->
						</div>
					</div>
					<div class="box-content">
						<div class="toolbar">
							<a href="/documents/add/<?php echo $student_id?>/2/" class="btn btn-primary">
								<i class="icon-white icon-plus"></i>
								Thêm tài liệu mới
							</a>
						</div>
						<?php echo $this->Element('index_status', array('item_name'=>'category'))?>
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
							  	  <th style="width:30px">STT</th>
								  <th>Tên tài liệu</th>
								  <th>Đường dẫn</th>
								  <th>Mô tả</th>
							  </tr>
						  </thead>   
						  <tbody>
						  	<?php 
						  		$index = 0;
						  		foreach($datasource as $key => $item):
						  		if($item['Document']['doc_type'] != 2) continue;
								$index++;
						  		?>
							<tr>
								<td><?php echo $index?></td>
								<td class="center"><?php echo $item['Document']['name']?></td>
								<td class="center">
									<a href='<?php echo $FRONT_END_WEBSITE_URL?>upload/documents/<?php echo $item['Document']['url']?>' target="_blank">
									<?php echo $item['Document']['url']?></a>
								</td>
								<td class="center"><?php echo $item['Document']['description']?></td>
								<td class="center" style="width:150px">
									<a class="btn btn-info" href="/documents/edit/<?php echo $item['Document']['id']?>/">
										<i class="icon-edit icon-white"></i>  
										Sửa                            	                
									</a>
									<a class="btn btn-danger" href="javascript:void(0);" onclick="delete_confirm('<?php echo $item['Document']['id']?>',$(this))">
										<i class="icon-trash icon-white"></i> 
										Xóa
									</a>
								</td>
							</tr>
							<?php endforeach ?>
						  </tbody>
					  </table>
					</div>
				</div><!--/span-->	
			</div><!--/row-->
