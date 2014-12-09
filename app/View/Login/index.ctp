		<?php if(isset($error)):?>
		<div>
			<span style="font-weight: bold; text-align: center; padding: 10px; border: 1px solid tomato; border-radius: 5px; float:none; background-color: #F2DEDE" class="col-lg-6 col-md-6 col-xs-10"><?php echo $error?></span>
			<div style="clear:both"></div>
		</div>		
		<div style="margin-top:20px">
		<?php else:?>
		<div>
		<?php endif?>
		
		<form id="form" class="form-inline" method="post">
	    			<div class="form-group">
						<input type="text" name="student_code" placeholder="Mã đăng nhập" class="form-control"/>
					</div>
					<div class="form-group">
						<input type="password" name="password" placeholder="Mật khẩu" class="form-control"/>
					</div>	    
					<div class="form-group">
						<button type="submit" class="btn btn-primary">
							<i class="glyphicon glyphicon-ok"></i>
							Đăng nhập</button>
					</div>	  
						  			
	    		</form>
	    		<div style="margin-top: 20px">
	    			<a href="/forgotpassword/">Quên mật khẩu?</a>
	    		</div>
	   </div>