		<script type="text/javascript">
			function delete_category(category_id,element)
			{
				var cfm = window.confirm('Are you sure want to delete this question?');
				if(cfm == true) {
					var column = element.parent();
					var row = element.parents('tr');
					var old_html = column.html();
					$.ajax({
						url:"<?php echo $this->Html->url(array('controller'=>'questions','action'=>'delete'))?>/"+category_id,
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
						<h2><i class="icon-th"></i> Question Bank</h2>
						<div class="box-icon">
							<!-- <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> -->
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<!-- <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a> -->
						</div>
					</div>
					<div class="box-content">
						<div class="toolbar">
							<a href="/questions/add/" class="btn btn-primary">
								<i class="icon-white icon-plus"></i>
								Add new question
							</a>
						</div>
						<?php echo $this->Element('index_status', array('item_name'=>'question'))?>
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Question</th>
								  <th>No. of answers</th>
								  <th>Category</th>
								  <th>Level</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody id="category_list">
						  	<?php foreach($questions as $question):?>
							<tr>
								<td><?php echo $question['Question']['name']?></td>
								<td class="center" style="width:100px; text-align: center"><?php echo count($question['Answer'])?></td>
								<td><?php echo $question['Category']['name']?></td>
								<td><?php echo $question['Level']['name']?></td>
								<td class="center" style="width:150px">
									<a class="btn btn-info" href="/questions/edit/<?php echo $question['Question']['id']?>/">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
									</a>
									<a class="btn btn-danger" href="javascript:void(0);" onclick="delete_category('<?php echo $question['Question']['id']?>',$(this))">
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
