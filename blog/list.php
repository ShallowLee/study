<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Blog</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php
		include("conn.php");
		$id = $_GET['cata_id'];
		$result = mysqli_query($conn,"select * from catalog");
	?>

	<div class="header">
		<h1 class="title">朱沛然的博客</h1>
		<ul class="nav">
			<li><a href="index.php">首页</a></li>
			<?php while($row = mysqli_fetch_assoc($result)){?>
			<li><a href="list.php?cata_id=<?php echo $row['id']?>"><?php echo $row['name']?></a></li>
			<?php }?>
		</ul>
	</div>	
	<?php
		$result = mysqli_query($conn,"select * from article where catalog_id =" .$id);
		while($row = mysqli_fetch_assoc($result)){
	?>
	<div class="item">
		<img src="<?php echo $row['img']?>" />
		<a class="title" href="view?id=<?php echo $row['id']?>"><?php echo $row["title"]?></a><span class="read"><?php echo $row['view']?>人看过</span>
		<p class="time"><?php echo date("Y-m-d h:i:s",$row['create_time']);?></p>
		<p class="content"><?php echo $row["desc"];?></p>
		<a class="readAll" href="view?id=<?php echo $row['id']?>">阅读全文>></a>
	</div>
	<?php
		}
	?>
</body>
</html>