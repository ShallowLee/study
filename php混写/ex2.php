<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>ex1</title>
</head>
<body>
	<?php
		$good = $_GET['good'];
		if($good > 10){
	?>
		<p>大于10</p>
	<?php
		}else{
	?>
		<p>小于或等于10</p>
	<?php
		}
	?>
</body>
</html>