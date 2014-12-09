<form class="form-inline" method="post">
	<div class="form-group">
		<input required="true" name="student_code" type="text" placeholder="Mã đăng nhập" class="form-control"/>
	</div>
	<div class="form-group">
		<input required="true" name="email" type="email" placeholder="Email" class="form-control"/>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary">
			<i class="glyphicon glyphicon-ok"></i>
			Gửi
		</button>
	</div>
</form>

<div style="margin-top: 20px">
	<?php if($page == 2):?>
	<a href="/customerseg/">Quay lại</a>
	<?php else :?>
	<a href="/customerlhe/">Quay lại</a>
	<?php endif?>	
</div>