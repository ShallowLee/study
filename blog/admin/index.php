<?php
	session_start();
	if(!$_SESSION['is_login']){
		header("location:login.php");
	}
	include('../conn.php');
	$total = mysqli_fetch_assoc(mysqli_query($conn,'select count(*) as num from article'));
	$total = (int)$total['num'];
	$pageSize = 10;
	$totalPage = (int)($total/$pageSize);
	$page = (int)(array_key_exists('page', $_GET)?$_GET['page']:1);
	$offset = ($page-1)*$pageSize;
	$sql = "select * from article order by id desc limit $offset,$pageSize";
	$result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>admin</title>
	<?php include('css.php');?>
</head>
<body>
	<a href="article_add.php">添加</a>
	<table class="table">
		<tr>
			<th>标题</th>
			<th>创建时间</th>
			<th>访问人数</th>
			<th>操作</th>
		</tr>

		<?php while($row = mysqli_fetch_assoc($result)){?>
		<tr>
			<td><?php echo $row['title']?></td>
			<td><?php echo date("Y-m-d H:i:s",$row['create_time'])?></td>
			<td><?php echo $row['view']?></td>
			<td><a href="article_edit.php?id=<?php echo $row['id']?>">修改</a>/<a href="article_del.php?id=<?php echo $row['id']?>">删除</a></td>
		</tr>
		<?php }?>
	</table>
	<?php 
		for ($i=1; $i <= $totalPage; $i++) {
			if($i == $page){
	?>
		<span><?php echo $i?></span>
	<?php
			}else{
	?>
		<a href="index.php?page=<?php echo $i?>"><?php echo $i?></a>
	<?php
			}
		}
	?>
</body>
<?php include('js.php');?>
</html>