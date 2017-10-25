-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-08-27 14:51:26
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wall`
--

-- --------------------------------------------------------

--
-- 表的结构 `wish`
--

CREATE TABLE `wish` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '主键',
  `paperClass` char(2) NOT NULL COMMENT '愿望纸类型',
  `content` varchar(200) NOT NULL COMMENT '愿望内容',
  `author` varchar(10) NOT NULL COMMENT '署名',
  `addTime` char(20) DEFAULT NULL COMMENT '添加时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `wish`
--

INSERT INTO `wish` (`id`, `paperClass`, `content`, `author`, `addTime`) VALUES
(1, 'a2', '美好的祝福送给你', '天上有云', '2017-08-27 22:43'),
(2, 'a5', 'best wishes for you', 'May', '2017-08-27 22:44'),
(3, 'a3', '祝你前程似锦！', '小雪', '2017-08-27 22:44'),
(5, 'a4', '祝你身体健康！', '午后狂睡', '2017-08-27 22:46'),
(6, 'a5', '索尼大法好！', '姨父', '2017-08-27 22:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wish`
--
ALTER TABLE `wish`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `wish`
--
ALTER TABLE `wish`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键', AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
