<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Note</title>
	<style type="text/css">
		*{
			margin:0px;
			padding:0px;
		}
		h1{
			text-align: center;
			margin:1em;
		}
		.form{
			width:500px;
			margin:0px auto;
		}
		table{
			width:100%;
		}
		table input[type=text]{
			width:100%;
		}
		table textarea{
			width:100%;
		}
		#list{
			margin-top:20px;
		}
		.item{
			width:500px;
			margin: 0px auto;
			border:1px solid #ddd;	
		}
		.item .title{
			background:#efefef;
			padding:5px 10px;
		}
		.item .title b{
			color:blue;
			font-weight: bold;
		}
		.item .title a{
			float:right;
		}
		.item .content{
			padding:10px;
			color:#666;
		}
		.item .time{
			border-top:1px solid #ddd;
			padding: 5px 10px;
			text-align: right;
		}

	</style>
</head>
<body>
	<?php include("function.php") ?>
	<h1>朱沛然的留言板</h1>
	<form action="save.php" method="post" class="form">
		<table>
			<tr>
				<td>姓名</td>
				<td><input type="text" name="name" value="" /></td>
			</tr>
			<tr>
				<td>内容</td>
				<td>
					<textarea name="content" rows="5"></textarea>	
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" /></td>
			</tr>
		</table>
	</form>
	<div id="list">
	<?php
		$data = getAll();
		$i = 0;
		foreach ($data as  $d) {
			if($d != ''){
				$d = explode(',',$d);
	?>
		<div class="item">
			<p class='title'>
				留言人:<b><?php echo $d[0]?></b><a href="del.php?id=<?php echo $i?>">删除</a>
			</p>
			<p class="content">
				<?php echo $d[1]?>
			</p>
			<p class="time">
				留言时间：<?php echo date("Y-m-d H:i:s",$d[2])?>
			</p>
		</div>
	<?php
			}
			$i++;
		}
	?>
	</div>
	</table>
</body>
</html>