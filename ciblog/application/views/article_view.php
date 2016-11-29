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
	<?php $this->load->view("header");?>
	<div class="container">
		<h1 class="text-center"><?=$article->title?></h1>
		<p>
			<?=$article->content?>
		</p>
	</div>
</body>
</html>