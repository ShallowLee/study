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
		<div class="page-header">
		<h1>文章管理<a href="<?php echo site_url("admin/article/add")?>" class="pull-right btn btn-success">添加</a></h1>
		</div>
		<table class="table table-bordered">
			<tr>
				<th>标题</th>
				<th>创建时间</th>
				<th>访问人数</th>
				<th>是否推荐</th>
				<th width="180">操作</th>
			</tr>
			<?php if(empty($articles)){?>
				<tr>
					<td colspan="9" class="empty">没有数据</td>
				</tr>
			<?php }?>
			<?php foreach($articles as $a){?>
			<tr>
				<td><?php echo $a->title?></td>
				<td><?php echo date("Y-m-d H:i:s", $a->create_time)?></td>
				<td><?php echo $a->view?></td>
				<td><?php echo $a->recommend==1?'<label class="label label-success">已推荐</label>':""?></td>
				<td>
					<?php if($a->recommend==1){?>
					<a class="btn btn-warning btn-xs" href="article_recommend.php?id=<?php echo $a->id?>">取消推荐</a>
					<?php }else{?>
					<a  class="btn btn-info btn-xs"  href="article_recommend.php?id=<?php echo $a->id?>">推荐</a>
					<?php }?>
					<a  class="btn btn-primary btn-xs" href="article_edit.php?id=<?php echo $a->id?>">修改</a>
					<a class="btn btn-danger del btn-xs" href="article_del.php?id=<?php echo $a->id?>">删除</a></td>
			</tr>
			<?php }?>
		</table>
		<?php echo $this->pagination->create_links();?>
	</div>
</body>
</html>