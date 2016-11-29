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
<div id="center_img"></div>
<hr />
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <?php foreach($articles as $a){?>
        <div class="item">
          <p>
            <a class="item-title" href="<?php echo site_url("/article/view/".$a->id);?>"><?=$a->title?></a>
            <span class="pull-right"><?=$a->view?>次浏览</span>
          </p>
          <div class="item-body clearfix">
            <img  class="thumbnail" src="<?php echo base_url().'public/'.$a->img?>">
            <p><?php echo substr($a->desc,0,300)?></p>
            <p class="item-time"><i class="glyphicon glyphicon-time"></i><?=date('Y-m-d',$a->create_time)?></p>
            <a href="<?php echo site_url("/article/view/".$a->id);?>" class="item-viewall btn btn-success">阅读全文>></a>
          </div>
        </div>
        <hr />
      <?php }?>
    </div>
    <div class="col-md-4">xxx</div>
  </div>
  
</div>
</body>
</html>