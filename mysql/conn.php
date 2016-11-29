<?php
	error_reporting(E_ALL);
	$conn = mysqli_connect("127.0.0.1", "root", "123123");

	if(!mysqli_query($conn,"use student")){
		echo "数据库选择错误";
		exit();
	}

	mysqli_query($conn,"set names utf8");
