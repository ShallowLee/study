#javascript入门

> 1.Javascript可以对鼠标单击事件或者键盘操作等用户输入信息作出反应。2.javascript 可以操作操作浏览器和html文档。

## 页面中插入js的方式
	<script>
		alert("123");
	</script>
	<script src="#"></script>

## JS的注释
	//
	/* */
	
## 类型
###原始类型
* undefined 一个值没有被定义。
* null 一般作为上不存在的对象。
* Boolea类型 一般为true或者false
* Number 类型一般为数字。
* String 类型 为字符串

###引用类型
* Array类型
* Date类型
* Math类型


## 变量
	`var 变量名 ＝ 值;`
	
	var x;
	var b = true;
	var k = 20;
	var s = "abc";

## 表达式
	1+1;
	true == true;
	var s = 1;s*3; 
	"1"+"123" //返回值为 1123
	var s = "d"
	"123"+s //返回值为 123d
	"123"+1 //返回值是 1231
	/*以上都是表达式*/
## if语句
	var s = 3;
	if(s >= 3){
		alert("大于3");
	}else{
		alert("小于3");
	}
	
	switch(a){
		case 1:x="a";break;
		case 1:x="b";break;
		case 1:x="c";break;
		default:x="d";
	}
## 循环
	while(x<5){
		y+=5;
		x++;
	}
	//从0开始 当i小于10的时候，执行括号内的语句，然后在执行 i++
	var sum = 0;
	for(var i=0;i<10;i++){
		sum = sum + 1; //或者写成 sum += 1;
	}
##函数
>需要反复调用的一些代码，我们把它封装成一个函数
	function 函数名(参数表){
		函数体
		return 返回值;
	}
	
	/*函数的定义*/
	function a(msg){
		alert(msg)
	}
	var a = function(msg){
		alert(msg)
	}
	/*函数的使用*/
	a("111");
##javascript对象
>由属性和方法组成的一个数据结构，是对某一种事物的抽象。
比如 String对象，Array对象，Date对象，Math对象。

	var str = new String("test");
	var str = "test";
	
	vat text = "Hello world!";
	document.write(text.toUpperCase());
	document.write(text.length);
	
	document.write(Math.round(4.8));
	ducument.write(Math.random()*10);
	

## chrome下的调试
###控制台的使用
>任何一个js的代码错误都会在控制台中显示

###控制台对于css的调试

>可以看到当前标签的css的继承情况。

###打印调试信息
>console.log();

##事件 
>事件是用户作出某一个动作的一个消息。比如，点击某个元素，或者是在键盘中输入点什么。

###点击事件 onclick

	<p onclick="alert('p标签被惦记')">点我</p>

###鼠标按下事件 onmousedown
	<p onmousedown="whickMouseDown(event)">点我</p>
	<script>
		function whickMouseDown(e){
			if(e.button==2){
				alert('你点的是右键');
			}else{
				alert('你点的是左键');
			}
		}
	</script>
>chrome断点工具的使用。

###鼠标抬起事件 onmouseup
###鼠标经过事件 onmouseover
	<a href="#" onmouseover="windows.state='Hello'">请点击</a>
###鼠标移出事件 onmouseout
###文本输入框及选择域的内容变化事件 onchange
	<select name="site" onchange="chagne(this)">
		<option value="1">学生</option>
		<option value="2">教师</option>
		<option value="3">工人</option>
		<option value="4">农民</option>
	</select>
###文本框获得焦点事件 onfocus
	<input onfocus="alert('我被选中啦')" />
###文本框获取焦点事件 onblur
###页面载入事件和卸载事件


