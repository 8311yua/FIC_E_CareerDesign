-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- サーバのバージョン： 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reserve_bakery`
--
CREATE DATABASE IF NOT EXISTS `reserve_bakery` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `reserve_bakery`;

-- --------------------------------------------------------

--
-- テーブルの構造 `commodity`
--

CREATE TABLE `commodity` (
  `commodity_id` int(13) NOT NULL,
  `commodity_name` varchar(200) NOT NULL,
  `price` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `commodity`
--

INSERT INTO `commodity` (`commodity_id`, `commodity_name`, `price`) VALUES
(1, 'クッキー\r\n', 120),
(2, 'クロワッサン\r\n', 200),
(3, 'タルト\r\n', 400),
(4, 'ケーキ\r\n', 400),
(5, 'サンドイッチ\r\n', 300),
(6, 'パンケーキ\r\n', 500),
(7, 'フレンチトースト\r\n', 250),
(8, 'アイスレモンティー\r\n', 400),
(9, 'アイスミルクティー\r\n', 400),
(10, 'アイスティー\r\n', 400),
(11, 'レモンティー\r\n', 400),
(12, 'ミルクティー\r\n', 400),
(13, '紅茶\r\n', 400),
(14, 'アイスコーヒー', 350),
(15, 'ホットコーヒー', 350),
(16, 'アイスラテ', 400),
(17, 'ラテ', 400),
(18, 'アイスキャラメルラテ', 450),
(19, 'キャラメルラテ', 450),
(20, 'アイスココア', 450),
(21, 'ココア', 450),
(22, 'ホットチョコレート', 450),
(23, 'オレンジジュース', 300);

-- --------------------------------------------------------

--
-- テーブルの構造 `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `password`, `address`) VALUES
(1, 'test', 'aa111111', 'aa@aaaa'),
(2, 'test_2', 'aa111111', 'aa@aaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
