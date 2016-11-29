 #sql查询语句入门

##单表查询

###选择字段

	select 目标列1，目标列2，目标列3...目标列n from 表名;
	
* 例1:选择所有班级的班级编号，所属学院和班级名称。

		select classNo,department,className from tb_class;

* 例2:从班级表中查询处所有的院系名称。

		select department from tb_class;

* 例3:在例2的基础上去除重复纪录
		
		select distinct department from tb_class;

* 例4:查询所有字段

		select * from tb_class;

⚠️可以使用as来实现字断别名

###选择指定纪录
	
	select 目标列1，目标列2，目标列3...目标列n from 表名 where 查询条件;
	
####比较大小
* 例1:查询课时大于等于48学时的课程名称及学分

		select courseName,credit,courseHour from tb_course where courseHour >= 48;

* 例2:查询少数名族学生的姓名、性别、籍贯和名族。
		
		select courseName,sex,native,nation from tb_student where nation != "汉";

####in关键字的集合查询
* 例1:查询籍贯是北京天津和上海的学生信息
		
		select * from tb_student where nation in ('北京','天津','上海');

####like关键字的字符串匹配查询
* 例1:查询所有姓王的的学生的学号、姓名和班号。

		select studentNo,studentName,classNo from tb_student where studentName like "王%";
* 例2:查询姓名中包含“林”的学生的学号，姓名和班号
	
		select studentNo,studentName,className from tb_student where studentName like "％林％";
		
####多条件查询
* 例1:查询学分大于等于3且学时数大于32的课程名称，学分和学时数
	
		select courseName,credit,courseHour from tb_course where credit>=3 and courseHour>32;
	
* 例2:查询籍贯是北京或者上海的学生的姓名，籍贯和名族。

		select studentName,native,nation from tb_student where nation ="北京" or nation="上海";
* 例3:查询籍贯是北京或者湖南的少数名族男生的姓名、籍贯和名族

		select studentName,native,nation from tb_student where nation ="北京" or nation="湖南" and nation!="汉" and sex = "男";

####对查询语句的结果排序
>关键组 asc 表示顺序,关键字 desc表示逆序。

* 例1:查询学生的姓名、籍贯和名族，并按照姓名生序排序
	
		select studentName,native,nation from tb_student order by studentName;
		
* 例2:查询学生成绩大于85分的学号、课程号和成绩信息，并将查询结果先按照学号升序排序，再按成绩降序排列。

		select * from tb_score where scour>85 order by studentNo,score desc;
		
####限制查询结果
> limit [位置偏移量,]行数

* 例1:查询成绩排名第3到第5的学生学号、课程号和成绩。

		select studentNo,corseNo,score from tb_score order by score desc limit 2,3
		
####使用聚合函数
* 例1:查询学生总数
		
		select count(*) from tb_student;
		
* 例2:计算徐选秀课程编号为“21001”的学生的平均成绩
	
		select avg(score) from tb_score where corseNo = "21001";
		
##数据更新
###插入数据
	insert into tb_name (字段列表) values (值列表);
* 例1:向表tb_student中插入一条记录("2014210103",'王玲','女','1988-02-21','安徽','汉','CS1401')
	
		insert into tb_student values("2014210103",'王玲','女','1988-02-21','安徽','汉','CS1401')
		
###修改数据
* 例1:将表tb_student中学号为“2014210101”的学生姓名修改为“黄涛”，籍贯修改为“湖北”，名族修改为“汉”

		update tb_student set student="黄涛",native="湖北",nation="汉" where studentNo='2014210101';
* 例子2:将tb_student 中所有的学生的成绩提高5%;

###删除数据记录
* 例1:删除名字叫王一敏的学生
		
		delete from tb_student where studentName = "王一敏";
	
