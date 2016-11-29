<?php
	function conn(){
		$conn = mysqli_connect('127.0.0.1',"root","");
		if(!$conn){
			echo "链接错误";
			exit();
		}
		//选择数据库
		mysqli_query($conn,"use blog");
		//选择字符集
		mysqli_query($conn,"set names utf8");
		return $conn;
	}
