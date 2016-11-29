<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>ex1</title>
</head>
<body>
	<?php
		$msg = $_GET['msg'];
	?>
	<script type="text/javascript">
		alert("<?php echo $msg?>");
	</script>
</body>
</html>