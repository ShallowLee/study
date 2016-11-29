<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Blog</title>
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/bootstrap-theme.min.css" type="text/css" />
  	<link rel="stylesheet" href="<?php echo base_url();?>public/css/style.css" type="text/css" />
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div style="margin-top:150px;" class="panel panel-default">

				  <div class="panel-heading">登录</div>
				  <div class="panel-body">
				    <form  class="form-horizontal" action="" method="POST">
						<div class="form-group">
							<label  class="col-sm-2 control-label">用户名:</label>
							<div class="col-sm-10">
								<input type="text"  class="form-control" name="username" value="<?php echo set_value('username')?>" size="50" />
							<?php echo form_error('username'); ?>
							</div>
						</div>
						<div class="form-group">
							<label  class="col-sm-2 control-label">密码:</label>
							<div class="col-sm-10">
							    <input type="password"  class="form-control" name="password" value="<?php echo set_value('password')?>" size="50" />
							<?php echo form_error('password'); ?>
							</div>
					  	</div>
					  	<button type="submit" class="btn btn-block btn-success">提交</button>
					</form>
				  </div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>