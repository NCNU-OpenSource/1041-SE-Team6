-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2015 年 12 月 26 日 15:24
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
-- 資料表結構 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` varchar(15) COLLATE utf8_bin NOT NULL,
  `password` varchar(15) COLLATE utf8_bin NOT NULL,
  `cashinhand` int(11) NOT NULL DEFAULT '100',
  `lovecount` int(11) NOT NULL DEFAULT '5',
  `level` int(11) NOT NULL DEFAULT '1',
  `exp` int(11) NOT NULL DEFAULT '0',
  `carrot_qty` int(11) NOT NULL DEFAULT '0',
  `mushroom_qty` int(11) NOT NULL DEFAULT '0',
  `eggplant_qty` int(11) NOT NULL DEFAULT '0',
  `corn_qty` int(11) NOT NULL DEFAULT '0',
  `meat_qty` int(11) NOT NULL DEFAULT '0',
  `land_qty` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 資料表的匯出資料 `user`
--

INSERT INTO `user` (`id`, `password`, `cashinhand`, `lovecount`, `level`, `exp`, `carrot_qty`, `mushroom_qty`, `eggplant_qty`, `corn_qty`, `meat_qty`, `land_qty`) VALUES
('111', '111', 0, 5, 1, 0, 10, 10, 10, 10, 10, 10),
('userT', '9999', 60, 3, 3, 0, 0, 0, 0, 0, 0, 0),
('william', 'william', 40, 2, 4, 0, 0, 0, 0, 0, 0, 0);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
