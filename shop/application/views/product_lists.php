<!DOCTYPE html>
<html>
<head>
	<title>自己的电商系统</title>
	<meta charset="utf-8">
	<base href="http://localhost/shop/" />
	<link rel="stylesheet" href="public/css/bootstrap.min.css" />
	<link rel="stylesheet" href="public/css/bootstrap-theme.min.css" />
	<link rel="stylesheet" href="public/css/front.css" />
</head>
<body id="product_lists">
	<div class="container">
		<?php $this->load->view('header')?>
		<br />
		<div class="row">
			<div class="col-md-3">
				<div id="product_menu">
					<div id="product_menu_title">
						<i class="glyphicon glyphicon-menu-hamburger"></i><?=$parent_catalog->name?>
					</div>	
					<ul>
						<?php foreach($children_catalogs as $c){?>
						<li <?php if($c->id == $catalog->id){?>class="active"<?php }?> ><a href="<?=site_url('product/lists/'.$c->id)?>"><?=$c->name?></a></li>
						<?php }?>
					</ul>
				</div>
			</div>
			<div class="col-md-9">
				<div class="row">
					<div class="col-md-12">
						<?php foreach($brands as $b){?>
							<a href="<?php echo current_url()."?brand=".$b->id?>"><?=$b->name?></a>
						<?php }?>
					</div>
				</div>
				<div class="row">
					<?php foreach($products as $p){?>
					<div class="col-md-3 product_item">
						<img class="product_item_img" src="<?=base_url($p->img)?>">
						<?php $imgs = $this->Products_img_model->get_by_product_id($p->id)?>
						<ul class="clearfix">
							<?php foreach($imgs as $img){?>
							<li><img src="<?=base_url($img->url)?>"/></li>
							<?php }?>
						</ul>
						<h5><?=$p->title?></h5>
						<p class="price">￥<?=$p->price?></p>
						<a href="<?=site_url('product/detail/'.$p->id)?>" class="btn btn-danger">立即购买</a>
					</div>
					<?php }?>
				</div>

			</div>
		</div>
	</div>

	<script type="text/javascript" src="public/js/jquery.js"></script>
	<script type="text/javascript">
	    $(function() {
	    	$('.product_item ul li').mouseover(function(){
	    		$(this).parents('.product_item').find('ul li').removeClass("hover");
	    		$(this).addClass('hover');
	    		var src  = $(this).find('img').attr('src');
	    		$(this).parents('.product_item').find('.product_item_img').attr('src',src);
	    		
	    	})
	    })
	</script>
</body>
</html>