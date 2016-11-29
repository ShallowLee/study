<?php
	session_start();
	if(!$_SESSION['is_login']){
		header("location:login.php");
	}
	include('../conn.php');
	$id = $_GET['id'];
	$result = mysqli_query($conn,"select * from article where id = $id");
	$data = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>admin</title>
	<link rel="stylesheet" href="css/style.css">
	<script charset="utf-8" src="js/kindeditor/kindeditor-all-min.js"></script>
	<script charset="utf-8" src="js/kindeditor/lang/zh-CN.js"></script>

</head>
<body>
	<form  enctype="multipart/form-data"  id="article_edit" action="article_edit_save.php" method="post">
		<input type="hidden" name="id" value="<?=$data['id']?>" />
		<table>
			<tr>
				<td width="150">标题</td>
				<td><input name="title" type="text" value="<?=$data['title']?>" /></td>
			</tr>

			<tr>
				<td>所属分类</td>
				<td>
					<select name="catalog_id" >
						<?php 
							$result = mysqli_query($conn,"select * from catalog");
							while($row = mysqli_fetch_assoc($result)){?>
								<option <?php if($row['id']==$data['catalog_id']){?>selected="selected"<?php }?> value="<?=$row['id']?>"><?=$row['name']?></option>
						<?php }?>
					</select>
				</td>
			</tr>
			<tr>
				<td>图片</td>
				<td>
					<img style="height:150px;" src="../<?=$data['img']?>">
					<input name="img" type='file' value=""/>
				</td>
			</tr>				

			<tr>
				<td>描述</td>
				<td>
					<textarea rows="5" name="desc"><?=$data['desc']?></textarea>
				</td>
			</tr>			
	
			<tr>
				<td>内容</td>
				<td>
					<textarea name="content"><?=$data['content']?></textarea>
				</td>
			</tr>			

			<tr>
				<td></td>
				<td>
					<input type="submit" />
					<a href="index.php">返回</a>
				</td>
			</tr>			

		</table>
	</form>
</body>
<script type="text/javascript">
	editor = KindEditor.create('textarea[name="content"]', {
		allowFileManager : true
	});
</script>

</html>