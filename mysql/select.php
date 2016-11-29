<?php
	error_reporting(E_ALL);

	//链接数据库
	$conn = mysqli_connect("127.0.0.1", "root", "123123");

	//选择数据库
	if(!mysqli_query($conn,"use student")){
		echo "数据库选择错误";
		exit();
	}

	//修改字符集
	mysqli_query($conn,"set names utf8");

	//执行查询语句
	$resource = mysqli_query($conn,"select * from student");

	//一个一个获取数据
	$data = array();
	while($row = mysqli_fetch_row($resource)){
		$data[] = $row;
	}
	var_dump($data);
