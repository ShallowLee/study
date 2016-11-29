<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>ex1</title>
</head>
<body>
<?php 
	// //一班的函数
	// function simple(){
	// 	echo "Simple";
	// }

	// //带返回值的函数
	// function re(){
	// 	return "return";
	// }
	// $a = re();
	// var_dump($a);

	// //返回值后的语句不执行
	// function re1(){
	// 	return "return";
	// 	echo "after return";
	// }
	// echo re1();

	// //带参数的函数
	// function printName($name){
	// 	echo "您的名字是".$name;
	// }
	// printName("好人");

	// //带两个参数的函数
	// function printNameAndAge($name,$age){
	// 	echo "您的名字是$name,您的年纪是$age";
	// }
	// printNameAndAge("好人",33);

	// //带两个参数的函数
	// function printNameAndAge($name,$age){
	// 	echo "您的名字是$name,您的年纪是$age";
	// }
	// $age = "哈哈哈哈";
	// printNameAndAge($age,33);
	
	// //带默认参数的函数
	// function printNameAndAge($name,$age=21){
	// 	echo "您的名字是$name,您的年纪是$age";
	// }
	// printNameAndAge("好人");


	//函数的作用域
	$i = 10;
	function a(){
		global $i;
		echo $i;
	}
	a();
	echo $i;


?>
</body>
</html>