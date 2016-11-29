-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

INSERT INTO `tb_class` (`classNo`, `className`, `department`, `grade`, `classNum`) VALUES
('AC1301',	'会计13-1班',	'会计学院',	2013,	35),
('AC1302',	'会计13-2班',	'会计学院',	2013,	35),
('CS1401',	'计算机14-1班',	'计算机学院',	2014,	35),
('IS1301',	'信息系统13-1班级',	'信息学院',	2013,	NULL),
('IS1401',	'信息系统14-1班级',	'信息学院',	2013,	30);

INSERT INTO `tb_course` (`courseNo`, `courseName`, `credit`, `courseHour`, `term`, `priorCourse`) VALUES
(11003,	'管理学',	2,	32,	2,	NULL),
(11005,	'会计学',	3,	48,	3,	NULL),
(21001,	'计算机基础',	3,	48,	2,	NULL),
(21002,	'OFFICE高级应用',	3,	48,	2,	21001),
(21004,	'程序设计',	4,	64,	2,	210001),
(21005,	'数据库',	4,	64,	4,	21004),
(21006,	'操作系统',	4,	64,	4,	21001),
(31001,	'管理信息系统',	3,	48,	3,	21004),
(31002,	'信息系统_分析与设计',	3,	48,	4,	31001),
(31005,	'项目管理',	3,	48,	5,	31001);

INSERT INTO `tb_score` (`studentNo`, `corseNo`, `score`) VALUES
(2013110101,	11003,	90),
(2013110101,	21001,	86),
(2013110103,	11003,	89),
(2013110103,	21001,	88),
(2013110201,	11003,	78),
(2013110201,	21001,	92),
(2013110202,	11003,	82),
(2013110202,	21001,	85),
(2013310101,	21004,	83),
(2013310101,	31002,	68),
(2013310103,	21004,	80),
(2013310103,	31002,	76),
(2014210101,	21002,	93),
(2014210101,	21004,	89),
(2014210102,	21002,	95),
(2014210102,	21004,	88),
(2014310101,	21001,	79),
(2014310101,	21004,	80),
(2014310102,	21001,	91),
(2014310102,	21004,	87);

INSERT INTO `tb_student` (`studentNo`, `studentName`, `sex`, `birthday`, `native`, `nation`, `classNo`) VALUES
(2013110101,	'张晓勇',	'男',	'1997-12-11',	'山西',	'汉',	'AC1301'),
(2013110103,	'王一敏',	'女',	'1996-03-25',	'河北',	'汉',	'AC301'),
(2013110201,	'江山',	'女',	'1996－09-17',	'内蒙古',	'锡伯',	'AC1302'),
(2013110202,	'李明',	'男',	'1996-01-14',	'广西',	'壮',	'AC1302'),
(2013310101,	'黄菊',	'女',	'1995-09-30',	'北京',	'汉',	'IS1301'),
(2013310103,	'吴昊',	'男',	'1995-11-18',	'河北',	'汉',	'IS1301'),
(2014210101,	'刘涛',	'男',	'1997-04-03',	'湖南',	'回',	'CS1401'),
(2014310101,	'王林',	'男',	'1996-10-09',	'河南',	'汉',	'IS1401'),
(2014310102,	'李怡然',	'男',	'1996-12-31',	'辽宁',	'汉',	'IS1401');

-- 2016-07-17 13:21:58