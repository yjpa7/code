<?php if (!defined('THINK_PATH')) exit();?><DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
	<title>管理员登陆</title>
	<script src="/Public/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="/Public/bootstrap/css/bootstrap.css">
	<script src="/Public/bootstrap/js/bootstrap.js"></script>
</head>
<body>
	<div class="container">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-primary" style="margin-top:200px;">
				<div class="panel-heading">管理员登陆</div>
				<div class="panel-body">
					<form action="<?php echo U('Admin/Index/login?do=chk'); ?>" method="post" class="form-horizontal">
					  <div class="form-group">
					    <label for="inputEmail3" class="col-sm-3 control-label">用户名</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" name="auser" placeholder="User">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputPassword3" class="col-sm-3 control-label">密码</label>
					    <div class="col-sm-9">
					      <input type="password" class="form-control" name="apass" placeholder="Password">
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="col-sm-offset-3 col-sm-9">
					      <button type="submit" class="btn btn-default">登录</button>
					    </div>
					  </div>
					</form>
				</div>
				<div class="panel-footer text-right">版权所有 盗版必究</div>
			</div>
		</div>
	</div>
</body>
</html>