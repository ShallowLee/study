<!DOCTYPE html>
<html>
<head>
	<title>自己的电商系统</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?php echo base_url()?>public/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo base_url()?>public/css/bootstrap-theme.min.css" />
	<link rel="stylesheet" href="<?php echo base_url()?>public/css/nivo-slider.css" />
	<link rel="stylesheet" href="<?php echo base_url()?>public/css/front.css" />
</head>
<body>
	<div class="container">
		<div class="row" id="header">
			<div class="col-md-3">
				<a href="<?=site_url()?>"><img id="logo" src="<?php echo base_url("public/img/logo.png")?>" /></a>
			</div>
		</div>
		<br />
	</div>
	<div id="login_wrapper">
	<div class="container">
		<div id="login">
			<div class="panel panel-default">
				<div class="panel-heading">
					欢迎登录
				</div>
				<div class="panel-body">
<<<<<<< HEAD
					<form action="" method="post">
						<div class="form-group">
							<label>账户名</label>
							<input type="text" value="<?=set_value('username')?>" class="form-control" name="username" placeholder="请输入账户名...">
							<?php echo form_error('username'); ?>
						</div>
						<div class="form-group">
							<label>密码</label>
							<input type="password" value="<?=set_value('password')?>" class="form-control" name="password" placeholder="请输入密码...">
							<?php echo form_error('password'); ?>
						</div>
						<div class="form-group">
							<label>验证码</label>
							<div class="row">
								<div class="col-md-6">
									<input type="text"  value="<?=set_value('verify')?>" class="form-control" name="verify" placeholder="请输入验证码...">
									<?php echo form_error('verify'); ?>
								</div>
								<div class="col-md-6">
									<img style="cursor:pointer;" id="verify" src="<?php echo site_url("user/verify")?>" />
								</div>

							</div>
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-block btn-success">登录</button>	
=======
					<form>
						<div class="form-group">
							<label>账户名</label>
							<input type="text" class="form-control" name="username" placeholder="请输入账户名...">
						</div>
						<div class="form-group">
							<label>密码</label>
							<input type="password" class="form-control" name="password" placeholder="请输入密码...">
						</div>
						<div class="form-group">
							<button type="button" class="btn btn-block btn-success">登录</button>	
>>>>>>> origin/master
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
	</div>
<<<<<<< HEAD
	<script type="text/javascript" src="<?php echo base_url('public/js/jquery.js')?>"></script>
	<script type="text/javascript">
		$(function(){
			$('#verify').click(function(){
				var src = "<?php echo site_url("user/verify")?>"+"?"+Math.floor(Math.random()*1000);
				console.log(src);
				$(this).attr('src',src);
			});
		})
	</script>
=======

>>>>>>> origin/master
</body>
</html>