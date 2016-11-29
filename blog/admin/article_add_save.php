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

$title = $_POST['title'];
$catalog_id = $_POST['catalog_id'];
$content = addslashes($_POST['content']);
$desc = $_POST['desc'];
$time = time();
$sql = "insert into article values(null,$catalog_id,\"$title\",\"$desc\",\"$content\",$time,\"$img\",0)";
echo $sql;
include('../conn.php');
$result = mysqli_query($conn,$sql);
header("location:index.php");