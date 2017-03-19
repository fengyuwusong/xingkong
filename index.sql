-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 03 月 19 日 20:55
-- 服务器版本: 5.5.40
-- PHP 版本: 5.3.29

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `index`
--

-- --------------------------------------------------------

--
-- 表的结构 `index_config`
--

CREATE TABLE IF NOT EXISTS `index_config` (
  `id` int(11) NOT NULL,
  `banner1` varchar(300) NOT NULL,
  `banner2` varchar(300) NOT NULL,
  `banner3` varchar(300) NOT NULL,
  `banner4` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

--
-- 转存表中的数据 `index_config`
--

INSERT INTO `index_config` (`id`, `banner1`, `banner2`, `banner3`, `banner4`) VALUES
(1, 'tree.jpg', 'banner1.png', 'esbanner.png', 'live_common.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
