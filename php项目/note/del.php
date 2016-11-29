<?php
	$id = $_GET['id'];
	require('function.php');
	del($id);
	redirect("index.php");