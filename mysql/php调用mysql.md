#php调用mysql

##php链接mysql

	mysql_connect(主机名, 用户名, 密码);
	
	正确则返回一个链接标识。错误则返回false
	
##mysql选择数据库
	
	mysql_select_db(库名,链接标识);

##mysql出错的函数
	mysql_error();
##php执行sql语句
	mysql_query(sql语句,链接标识);
	正确则返回一个资源标识。错误则返回false
##php获取sql查询结果
	mysql_fetch_row(资源标识);
	mysql_fetch_object(资源标识);
	
⚠️ mysqli的mysqli_query的参数与mysql_query的参数顺序是相反的。