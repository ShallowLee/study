-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `tb_class`;
CREATE TABLE `tb_class` (
  `classNo` varchar(10) NOT NULL,
  `className` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `grade` int(5) NOT NULL,
  `classNum` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `tb_course`;
CREATE TABLE `tb_course` (
  `courseNo` int(10) NOT NULL,
  `courseName` varchar(20) NOT NULL,
  `credit` int(2) NOT NULL,
  `courseHour` int(2) NOT NULL,
  `term` int(1) NOT NULL,
  `priorCourse` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `tb_score`;
CREATE TABLE `tb_score` (
  `studentNo` int(10) NOT NULL,
  `corseNo` int(10) NOT NULL,
  `score` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `tb_student`;
CREATE TABLE `tb_student` (
  `studentNo` int(10) NOT NULL,
  `studentName` varchar(20) NOT NULL,
  `sex` varchar(1) NOT NULL,
  `birthday` varchar(10) NOT NULL,
  `native` varchar(5) NOT NULL,
  `nation` varchar(5) NOT NULL,
  `classNo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- 2016-07-17 13:20:38