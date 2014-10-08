		<script type="text/javascript">		
			function delete_category(level_id,element)
			{
				var cfm = window.confirm('Are you sure want to delete this grade?');
				if(cfm == true) {
					var column = element.parent();
					var row = element.parents('tr');
					var old_html = column.html();
					$.ajax({
						url:"<?php echo $this->Html->url(array('controller'=>'grades','action'=>'delete'))?>/"+level_id,
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
						<h2><i class="icon-th"></i> Grades</h2>
						<div class="box-icon">
							<!-- <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> -->
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<!-- <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a> -->
						</div>
					</div>
					<div class="box-content">
						<div class="toolbar">
							<a href="/grades/add/" class="btn btn-primary">
								<i class="icon-white icon-plus"></i>
								Add new grade
							</a>
						</div>
						<?php echo $this->Element('index_status', array('item_name'=>'grade'))?>
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Grade Name</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody id="category_list">
						  	<?php foreach($grade_list as $grade):?>
							<tr>
								<td><?php echo $grade['Grade']['name']?></td>
								<td class="center" style="width:150px">
									<a class="btn btn-info" href="/grades/edit/<?php echo $grade['Grade']['id']?>/">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
									</a>
									<a class="btn btn-danger" href="javascript:void(0);" onclick="delete_category('<?php echo $grade['Grade']['id']?>',$(this))">
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
