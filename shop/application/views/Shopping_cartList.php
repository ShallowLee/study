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
<body id="cart_list">
	<div class="container">
		<div class="row" id="header">
			<div class="col-md-3">
				<a href="<?=site_url()?>"><img id="logo" src="<?php echo base_url("public/img/logo.png")?>" /></a>
			</div>
			<div class="col-md-9">
				<img style="height:50px;" class="pull-right" src="public/img/shop_step_1.jpg" />	
			</div>
		</div>
		<br />
		<div class="row">
			<div class="col-md-12">
				<table class="table table-bordered">
					<tr>
						<th width="100"></th>
						<th>商品</th>
						<th width="150">价格</th>
						<th width="150">数量</th>
						<th width="120">小计</th>
						<th width="80">操作</th>
					</tr>
					<?php
						$sum = 0;
						foreach($carts as $c){
						$product = $this->Products_model->get_one($c->product_id);
					?>
					<tr class='t'>
						<td class="text-center"><input  class="is_select" value="<?=$c->id?>"  type="checkbox"></td>
						<td><img style="width:60px;" src="<?=base_url($product->img)?>"><a href="<?=site_url('product/detail/'.$product->id)?>"><?=$product->title?></a></td>
						<td>￥<?=$product->price?></td>
						<td class="cart_num">
							<span class="minus">-</span>
							<input name="num" type="text" class="n" value="<?=$c->num?>"/>
							<span class="add">+</span>
						</td>
						<td>￥<?php echo $p = intval($product->price) * intval($c->num)?></td>

						<?php $sum = $sum +$p;?>
						<td><a href="<?=site_url('shopping/cartdel/'.$c->id)?>">删除</a></td>
					</tr>
					<?php }?>
					<tr>
						<td  class="text-center">
							 <div class="checkbox">
							    <label>
							      <input type="checkbox" id='checkall'> 全选
							    </label>
							  </div>
						</td>
						<td colspan="10">
							<a id="delete_all" href="#">删除</a>
							<p class="text-right num">合计：￥<?=$sum?></p>
						</td>
					</tr>
				</table>
			</div>
		</div>
		
	</div>

	<script type="text/javascript" src="<?php echo base_url('public/js/jquery.js')?>"></script>
	<script type="text/javascript">
		$(function(){
			$("#checkall").click(function(){    
	            $('.is_select').prop("checked",this.checked); 
			});
			$('#delete_all').click(function(){
				var ids = [];
				$('.is_select').each(function(i,item){
					if($(item).prop('checked')){
						ids.push($(item).val());
					}
				});
				if(ids.length == 0){
					alert('没有选中任何商品');
				}else{
					$.post("<?=site_url('shopping/cartdels')?>",{
						'ids':ids
					},function(data){
						console.log(data);
						if(data == 'ok'){
							location.reload()
						}
					})
				}
				return false;
			})
			$(".minus").click(function(){
				var id = $(this).parents('.t').find('.is_select').val();
				var num = parseInt($(this).parents('.cart_num').find('.n').val()) - 1;
				$.get('<?=site_url('shopping/updateCart')?>',{
					'id':id,
					'num':num
				},function(data){
					if(data == 'ok'){
						location.reload();
					}else{
						alert(data);
					}
				})
			})
			$(".add").click(function(){
				var id = $(this).parents('.t').find('.is_select').val();
				var num = parseInt($(this).parents('.cart_num').find('.n').val()) + 1;
				$.get('<?=site_url('shopping/updateCart')?>',{
					'id':id,
					'num':num
				},function(data){
					if(data == 'ok'){
						location.reload();
					}else{
						alert(data);
					}
				})
			})
			$('.n').blur(function(){
				var id = $(this).parents('.t').find('.is_select').val();
				var num = parseInt($(this).val());
				$.get('<?=site_url('shopping/updateCart')?>',{
					'id':id,
					'num':num
				},function(data){
					if(data == 'ok'){
						location.reload();
					}else{
						alert(data);
					}
				})
			})
		})
		
	
	</script>
</body>
</html>