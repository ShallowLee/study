<!DOCTYPE html>
<html>
<head>
	<title>自己的电商系统</title>
	<meta charset="utf-8">
	<base href="http://localhost/shop/" />
	<link rel="stylesheet" href="<?php echo base_url()?>public/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo base_url()?>public/css/bootstrap-theme.min.css" />
	<link rel="stylesheet" href="<?php echo base_url()?>public/css/front.css" />
</head>
<body id="product_detail">
	<div class="container">
		<?php $this->load->view('header')?>
		<br />
		<div class="row">
			<div class="col-md-6">
				<div id="product_imgs">
					<img id="product_main_img" src="<?=base_url($product->img)?>"  data-zoom-image="<?=base_url($product->img)?>"/>
					<ul>
						<?php foreach($imgs as $i){?>
						<li><img src="<?=base_url($i->url)?>"></li>
						<?php }?>
					</ul>
				</div>
			</div>
			<div class="col-md-6">
				<div id="product_main">
					<h3><?=$product->title?></h3>
					<table class="product_arg">
						<tr>
							<td class="l">价格：</td>
							<td class="price">￥<?=$product->price?></td>
						</tr>
						<tr>
							<td class="l">商品评分：</td>
							<td class="star">
								<?php for($i=0;$i<5;$i++){?>
									<?php if($i < $product->star){?>
									<i class="glyphicon glyphicon-star"></i>
									<?php }else{?>
									<i class="glyphicon glyphicon-star-empty"></i>
									<?php }?>
								<?php }?>
							</td>
						</tr>
						<tr>
							<td class="l">运费：</td>
							<td class="deliver_fee">满99免运费</td>
						</tr>
					<form action="<?=site_url("shopping/addToCart")?>" method="post">
						<input type="hidden" name="product_id" value="<?=$product->id?>">
						<tr>
							<td class="l">购买数量：</td>
							<td class="num">
								<span class="minus">-</span><input name="num" type="text" class="n" value="1"/><span class="add">+</span>
							</td>
						</tr>
						<tr>
							<td class="l">送货:</td>
							<td class="deliver">由仓库全国最近点 发货，并提供售后服务。如有问题咨询在线客服~!上午08:30前完成下单下午送达,下午下单隔日第二天送达.</td>
						</tr>
					</table>
					<a href="#" class="btn btn-success btn-lg">立即购买</a>
					<button type="submit" href="#" class="btn btn-danger btn-lg">加入购物车</button>
					</form>
				</div>
			</div>
		</div>
		<br />
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-9">
				<h3>商品详情</h3>
				<?=htmlspecialchars_decode($product->content)?>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="public/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url('public/js/jquery.elevateZoom-3.0.8.min.js')?>"></script>
    <script type="text/javascript">
	    $(function() {
	    	$('#product_imgs ul li').mouseover(function(){
	    		$('#product_imgs ul li').removeClass("hover");
	    		$(this).addClass('hover');
	    		var src  = $(this).find('img').attr('src');
	    		$('#product_main_img').attr('src',src);
	    		$('.zoomWindowContainer div').css('background-image','url("'+src+'")');
	    	})
	    	$('.num .add').click(function(){
	    		var n = $(".num .n").val();
	    		n = parseInt(n)+1;
	    		$(".num .n").val(n);
	    	})
	    	$('.num .minus').click(function(){
	    		var n = $(".num .n").val();
	    		n = parseInt(n)-1;
	    		if(n>0){
		    		$(".num .n").val(n);
		    	}
	    	})

	    	$('#product_main_img').elevateZoom({
	    		 zoomType: "inner",
	    		zoomWindowWidth: 100,
				zoomWindowHeight: 100
	    	});
	    });
    </script>

</body>
</html>