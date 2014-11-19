		<script type="text/javascript">
			function delete(id,element)
			{
				var cfm = window.confirm('Bạn có chắc chắn muốn xóa quốc gia này?');
				if(cfm == true) {
					var column = element.parent();
					var row = element.parents('tr');
					var old_html = column.html();
					$.ajax({
						url:"<?php echo $this->Html->url(array('controller'=>'countries','action'=>'delete'))?>/"+id,
						dataType:"html",
						beforeSend:function() {							column.html(get_mini_loading_image_html());
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
						<h2><i class="icon-th"></i> Quốc gia</h2>
						<div class="box-icon">
							<!-- <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> -->
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<!-- <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a> -->
						</div>
					</div>
					<div class="box-content">
						<div class="toolbar">
							<a href="/countries/add/" class="btn btn-primary">
								<i class="icon-white icon-plus"></i>
								Thêm quốc gia mới
							</a>
						</div>
						<?php echo $this->Element('index_status', array('item_name'=>'category'))?>
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
							  	  <th>Số thứ tự</th>
								  <th>Tên quốc gia</th>
								  <th>Ghi chú</th>
								  <th></th>
							  </tr>
						  </thead>   
						  <tbody>
						  	<?php foreach($datasource as $key => $item):?>
							<tr>
								<td><?php echo $key+1?></td>
								<td class="center"><?php echo $item['Country']['name']?></td>
								<td class="center"><?php echo $item['Country']['description']?></td>
								<td class="center" style="width:150px">
									<a class="btn btn-info" href="/countries/edit/<?php echo $item['Country']['id']?>/">
										<i class="icon-edit icon-white"></i>  
										Sửa                            	                
									</a>
									<a class="btn btn-danger" href="javascript:void(0);" onclick="delete('<?php echo $item['Country']['id']?>',$(this))">
										<i class="icon-trash icon-white"></i> 
										Delete
									</a>
								</td>
							</tr>
							<?php endforeach ?>
						  </tbody>
					  </table>
					</div>
				</div><!--/span-->	
			</div><!--/row-->
