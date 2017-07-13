-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-05-09 10:53:58
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `indexcontent`--
CREATE DATABASE IF NOT EXISTS `indexcontent` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `indexcontent`;

-- 
--

-- --------------------------------------------------------

--
-- 表的结构 `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `Id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `picture` varchar(50) DEFAULT NULL,
  `text` text,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `coontent`
--

INSERT INTO `content` (`Id`, `picture`, `text`) VALUES
(1, 'images/index1.jpg', ' ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
