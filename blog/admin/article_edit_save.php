<?php
if ($_FILES["img"]["error"] > 0){
  echo "Error: " . $_FILES["img"]["error"] . "<br />";
  exit();
}else{
	$img = "uploads/".$_FILES["img"]["name"];
	$path = '../'.$img;
	if (!file_exists($img)){
      move_uploaded_file($_FILES["img"]["tmp_name"],$path);
	}
}

$id = $_POST['id'];
$title = $_POST['title'];
$catalog_id = $_POST['catalog_id'];
$content = addslashes($_POST['content']);
$desc = $_POST['desc'];
$sql = "update article set title=\"$title\",catalog_id=$catalog_id,`desc`=\"$desc\",content=\"$content\",img=\"$img\" where id=$id";
include('../conn.php');
$result = mysqli_query($conn,$sql);
header("location:article_edit.php?id=$id");