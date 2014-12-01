		<script type="text/javascript">
			function delete_confirm(id,element)
			{
				var cfm = window.confirm('Bạn có chắc chắn muốn xóa năm học này?');
				if(cfm == true) {
					var column = element.parent();
					var row = element.parents('tr');
					var old_html = column.html();
					$.ajax({
						url:"<?php echo $this->Html->url(array('controller'=>'student_calendar_years','action'=>'delete'))?>/"+id,
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
						<h2><i class="icon-th"></i> Thời khóa biểu - <?php echo $student['Student']['name']?> (<?php echo $student['Student']['code']?>)</h2>
						<div class="box-icon">
							<!-- <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> -->
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<!-- <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a> -->
						</div>
					</div>
					<div class="box-content">
						<div class="toolbar">
							<a href="/student_calendar_years/add/<?php echo $student['Student']['id']?>/" class="btn btn-primary">
								<i class="icon-white icon-plus"></i>
								Thêm năm học mới
							</a>
						</div>
						<?php echo $this->Element('index_status', array('item_name'=>'category'))?>
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
							  	  <th>Tên năm học</th>
								  						
								  <th></th>
							  </tr>
						  </thead>   
						  <tbody>
						  	<?php foreach($datasource as $key => $item):?>
							<tr>
								<td class="center"><?php echo $item['StudentCalendarYear']['name']?></td>
								<td class="center" style="width:250px">
									<a class="btn btn-info" href="/student_calendar_years/edit/<?php echo $item['StudentCalendarYear']['id']?>/">
										<i class="icon-edit icon-white"></i>  
										Sửa                            	                
									</a>
									<a class="btn btn-danger" href="javascript:void(0);" onclick="delete_confirm('<?php echo $item['StudentCalendarYear']['id']?>',$(this))">
										<i class="icon-trash icon-white"></i> 
										Xóa
									</a>
									<a class="btn btn-primary" href="/student_calendar_sems/index/<?php echo $item['StudentCalendarYear']['id']?>/">
										<i class="icon-calendar icon-white"></i>  
										Xem học kỳ                            	                
									</a>
								</td>
							</tr>
							<?php endforeach ?>
						  </tbody>
					  </table>
					  <a href="/students/" class="btn btn-primary">
								<i class="icon-white icon-backward"></i>
								Quay lại
							</a>
					</div>
				</div><!--/span-->	
			</div><!--/row-->
