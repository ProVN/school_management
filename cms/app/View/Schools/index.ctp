		<script type="text/javascript">
			function delete_confirm(id,element)
			{
				var cfm = window.confirm('Bạn có chắc chắn muốn xóa trường học này?');
				if(cfm == true) {
					var column = element.parent();
					var row = element.parents('tr');
					var old_html = column.html();
					$.ajax({
						url:"<?php echo $this->Html->url(array('controller'=>'schools','action'=>'delete'))?>/"+id,
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
		</script>
		
		<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-th"></i> Trường học</h2>
						<div class="box-icon">
							<!-- <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> -->
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<!-- <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a> -->
						</div>
					</div>
					<div class="box-content">
						<div class="toolbar">
							<a href="/schools/add/" class="btn btn-primary">
								<i class="icon-white icon-plus"></i>
								Thêm trường học mới
							</a>
						</div>
						<?php echo $this->Element('index_status', array('item_name'=>'category'))?>
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
							  	  <th style="width:100px">Logo</th>
								  <th>Tên trường</th>
								  <th>Ghi chú</th>						
								  <th></th>
							  </tr>
						  </thead>   
						  <tbody>
						  	<?php foreach($datasource as $key => $item):?>
							<tr>
								<td class="center">
									<img src='<?php echo Configure::read('FRONT_END_WEBSITE_URL')?>upload/img/schools/<?php echo $item['School']['logo']?>' style="width:100px" />
									
								</td>
								<td class="center"><?php echo $item['School']['name']?></td>
								<td class="center"><?php echo $item['School']['description']?></td>
								<td class="center" style="width:150px">
									<a class="btn btn-info" href="/schools/edit/<?php echo $item['School']['id']?>/">
										<i class="icon-edit icon-white"></i>  
										Sửa                            	                
									</a>
									<a class="btn btn-danger" href="javascript:void(0);" onclick="delete_confirm('<?php echo $item['School']['id']?>',$(this))">
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
