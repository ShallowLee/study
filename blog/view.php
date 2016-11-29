<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Blog</title>
	<link rel="stylesheet" href="style.css">
	<?php
		include("conn.php");
		$sql = "select * from article where id=".$_GET['id'];
		mysqli_query($conn,'update article set view = view+1 where id='.$_GET['id']);
		$result = mysqli_query($conn,$sql);
		$data = mysqli_fetch_assoc($result);
	?>

</head>
<body>
	<div class="header">
		<h1 class="title"><?php echo $data['title']?></h1>
		<ul class="nav">
			<li><a href="index.php">首页</a></li>
			<?php 
			$result_nav = mysqli_query($conn,"select * from catalog");
			while($row = mysqli_fetch_assoc($result_nav)){?>
				<li><a href="list.php?cata_id=<?php echo $row['id']?>"><?php echo $row['name']?></a></li>
			<?php }?>
		</ul>
	</div>
		<div class="body">
			<?php echo $data['content']?>
		</div>
</body>
</html>