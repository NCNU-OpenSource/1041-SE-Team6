-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2015-12-29 10:56:47
-- 伺服器版本: 5.6.26
-- PHP 版本： 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `mydb`
--

-- --------------------------------------------------------

--
-- 資料表結構 `land`
--

CREATE TABLE IF NOT EXISTS `land` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `item_onland` int(11) NOT NULL,
  `endtime` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `land`
--

INSERT INTO `land` (`id`, `status`, `item_onland`, `endtime`) VALUES
(1, 0, 0, 0),
(2, 2, 1, 0),
(3, 2, 1, 0),
(4, 2, 1, 0),
(5, 2, 1, 0),
(6, 2, 3, 0),
(7, 2, 3, 0),
(8, 2, 1, 0),
(9, 2, 1, 0),
(10, 2, 1, 0),
(11, 2, 4, 0),
(12, 2, 3, 0);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `land`
--
ALTER TABLE `land`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `land`
--
ALTER TABLE `land`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
