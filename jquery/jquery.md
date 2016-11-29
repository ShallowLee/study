#jquery
>要搞清楚dom元素和jquery对象的区别。
$(dom元素)返回值就是一个jquery对象。

>就是仿照css写的。它的精髓在于，当什么什么发生的时候先选择后操作。

手册地址：`http://www.jb51.net/shouce/jquery1.82/`
##选择器
* id选择器
* class选择器
* tag选择器

###层次结构的选择器 

* 父选择器 子选择器
* 父选择器>子选择器

###基本的过滤器
* :first 第一个
* :last 最后一个
* :even 偶数
* :odd 奇数
* :eq(数字) 第几个
* :lt(数字) 小于第几个
* :gt(数字) 大于第几个


##操作器
* 取值
	1. 取内部的值.//val()
	2. 取attr的值//attr(),data()
* 文档操作器
	1. 内部插入 //append prepend 
	2. 外部插入 //after
	3. 清空,内部修改//empty(),html(),text()
* 属性操作
	1. attr();
	2. css操作 //css(),addClass(),removeClass(),toggleClass()
	
##绑定事件
*

	
