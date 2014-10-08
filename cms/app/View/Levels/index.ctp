		<script type="text/javascript">
			function delete_category(level_id,element)
			{
				var cfm = window.confirm('Are you sure want to delete this level?');
				if(cfm == true) {
					var column = element.parent();
					var row = element.parents('tr');
					var old_html = column.html();
					$.ajax({
						url:"<?php echo $this->Html->url(array('controller'=>'levels','action'=>'delete'))?>/"+level_id,
						dataType:"html",
						beforeSend:function() {							column.html(get_mini_loading_image_html());
						},
						success:function (data) {
							if(data == '')
								row.fadeOut(500);
							else {
								column.html(old_html);
								show_index_status_error_message(data);
							}
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
						<h2><i class="icon-th"></i> Levels</h2>
						<div class="box-icon">
							<!-- <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> -->
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<!-- <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a> -->
						</div>
					</div>
					<div class="box-content">
						<div class="toolbar">
							<a href="/levels/add/" class="btn btn-primary">
								<i class="icon-white icon-plus"></i>
								Add new level
							</a>
						</div>
						<?php echo $this->Element('index_status', array('item_name'=>'level'))?>
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Level Name</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody id="category_list">
						  	<?php foreach($level_list as $level):?>
							<tr>
								<td><?php echo $level['Level']['name']?></td>
								<td class="center" style="width:150px">
									<a class="btn btn-info" href="/levels/edit/<?php echo $level['Level']['id']?>/">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
									</a>
									<a class="btn btn-danger" href="javascript:void(0);" onclick="delete_category('<?php echo $level['Level']['id']?>',$(this))">
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
