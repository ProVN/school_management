		<script type="text/javascript">
			function delete_category(category_id,element)
			{
				var cfm = window.confirm('Are you sure want to delete this examination rules?');
				if(cfm == true) {
					var column = element.parent();
					var row = element.parents('tr');
					var old_html = column.html();
					$.ajax({
						url:"<?php echo $this->Html->url(array('controller'=>'examination_rules','action'=>'delete'))?>/"+category_id,
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
						<h2><i class="icon-th"></i> Examination Rules</h2>
						<div class="box-icon">
							<!-- <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> -->
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<!-- <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a> -->
						</div>
					</div>
					<div class="box-content">
						<div class="toolbar">
							<a href="/examination_rules/add/" class="btn btn-primary">
								<i class="icon-white icon-plus"></i>
								Add new rules
							</a>
						</div>
						<?php echo $this->Element('index_status', array('item_name'=>'category'))?>
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Rule Name</th>
								  <th>Description</th>
								  <th>Grades</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody id="category_list">
						  	<?php foreach($examination_rule_list as $examination_rule):?>
							<tr>
								<td><?php echo $examination_rule['ExaminationRule']['name']?></td>
								<td class="center"><?php echo $examination_rule['ExaminationRule']['description']?></td>
								<td class="center"><?php echo $examination_rule['rule_list']?></td>
								<td class="center" style="width:320px">
									<a class="btn btn-info" href="/examination_rules/edit/<?php echo $examination_rule['ExaminationRule']['id']?>/">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
									</a>
									<a class="btn btn-danger" href="javascript:void(0);" onclick="delete_category('<?php echo $examination_rule['ExaminationRule']['id']?>',$(this))">
										<i class="icon-trash icon-white"></i> 
										Delete
									</a>
									<a class="btn btn-success" href="/examination_rules/preview/<?php echo $examination_rule['ExaminationRule']['id']?>/">
										<i class="icon-play icon-white"></i> 
										Generate examination
									</a>
								</td>
							</tr>
							<?php endforeach ?>
						  </tbody>
					  </table>
					</div>
				</div><!--/span-->	
			</div><!--/row-->
