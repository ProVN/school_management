	
		<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-th"></i> Members</h2>
						<div class="box-icon">
							<!-- <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a> -->
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<!-- <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a> -->
						</div>
					</div>
					<div class="box-content">
						<?php echo $this->Element('index_status', array('item_name'=>'member'))?>
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Facebook account</th>
								  <th>Grade</th>
								  <th>Last activity time</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody id="category_list">
						  	<?php foreach($members as $member):?>
							<tr>
								<td><?php echo $member['Member']['facebook']?></td>
								<td><?php echo $member['Grade']['name']?></td>
								<td class="center">
									<?php 
									$time = 'No activity avaiable.';
									foreach ($member['AuthToken'] as $key => $value) {
										$time = $value['last_request_time'];
									}
									echo $time;
									?>
									
								</td>
								<td class="center" style="width:200px">
									<a class="btn btn-info" href="/members/edit/<?php echo $member['Member']['id']?>/">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
									</a>
									<a class="btn btn-success" href="/member_histories/index/<?php echo $member['Member']['id']?>/">
										<i class="icon-play icon-white"></i>  
										Show histories                                            
									</a>
								</td>
							</tr>
							<?php endforeach ?>
						  </tbody>
					  </table>
					</div>
				</div><!--/span-->	
			</div><!--/row-->
