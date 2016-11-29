<?php
	session_start();
	include("../conn.php");
	$username = $_POST['username'];
	$password = $_POST['password'];
	$result = mysqli_query($conn,"select * from admin where username=\"$username\" and password=\"$password\"");
	if(!$result){
		echo "用户密码错误";
		exit();
	}elseif(!mysqli_fetch_row($result)){
		echo "用户密码错误";
		exit();
	}else{
		$_SESSION['is_login'] = true;
		header("Location:index.php");
	}
