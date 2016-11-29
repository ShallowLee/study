<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>ex1</title>
</head>
<body>
	<?php
		$x = $_GET['x'];
		$y = $_GET['y'];
		for ($i=0; $i < $x; $i++) { 
			for ($j=0; $j < $y; $j++) { 
	?>
				<span>*</span>
	<?php
			}
	?>
		<br />
	<?php
		}
	?>
</body>
</html>