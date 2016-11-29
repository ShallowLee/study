<?php
	$conn = mysqli_connect("127.0.0.1",'root','123123');
	if(!$conn){
		echo "连接出错";
		eixt();
	}
	if(!mysqli_query($conn,"use blog")){
		echo "选择数据库失败";
	}
	mysqli_query($conn,"set names utf8");
