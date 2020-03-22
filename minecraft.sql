-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2020 at 03:16 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minecraft`
--

-- --------------------------------------------------------

--
-- Table structure for table `authme`
--

CREATE TABLE `authme` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `realname` varchar(255) NOT NULL,
  `password` varchar(255) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `ip` varchar(40) CHARACTER SET ascii COLLATE ascii_bin DEFAULT NULL,
  `lastlogin` bigint(20) DEFAULT NULL,
  `x` double NOT NULL DEFAULT 0,
  `y` double NOT NULL DEFAULT 0,
  `z` double NOT NULL DEFAULT 0,
  `world` varchar(255) NOT NULL DEFAULT 'world',
  `regdate` bigint(20) NOT NULL DEFAULT 0,
  `regip` varchar(40) CHARACTER SET ascii COLLATE ascii_bin DEFAULT NULL,
  `yaw` float DEFAULT NULL,
  `pitch` float DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `isLogged` smallint(6) NOT NULL DEFAULT 0,
  `hasSession` smallint(6) NOT NULL DEFAULT 0,
  `point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authme`
--

INSERT INTO `authme` (`id`, `username`, `realname`, `password`, `ip`, `lastlogin`, `x`, `y`, `z`, `world`, `regdate`, `regip`, `yaw`, `pitch`, `email`, `isLogged`, `hasSession`, `point`) VALUES
(1, 'o0koonboom0o', 'o0KoonBoom0o', '$SHA$209224f26884e924$ce17ac8df1cfac175801165ed2cdd6fd8bfe703aaf69ed10d687a7e12382ff38', '180.183.247.168', 1579759586354, 0, 0, 0, 'world', 1579702163904, '124.122.193.160', NULL, NULL, NULL, 0, 0, 82320),
(2, 'stopjeve', 'StopJeve', '$SHA$d186ac8fd75b6c6a$b844d27e581906c1106135810b2c154c17eb35aadd98ff59703c76d30934e48a', '182.232.137.105', 1579762062817, 0, 0, 0, 'world', 1579734422326, '180.183.247.168', NULL, NULL, NULL, 0, 0, 1320),
(3, 'timcook', 'TimCook', '$SHA$60ea6c16738b6426$9ddabdbe549d52f48b999a49597036ebecae2eec83a444eacdeb0c2316e2adfc', '180.183.247.168', 1579739013059, 0, 0, 0, 'world', 1579734526839, '180.183.247.168', NULL, NULL, NULL, 0, 0, 10000),
(4, 'stevejobs', 'SteveJobs', '$SHA$65dc55f7e8125a0d$ff8e0c4fcdfdc764ca00f5c61068fd1e0bff75c9dc39e45f48c797e540cef9bc', '180.183.247.168', 1579735266210, 0, 0, 0, 'world', 1579734563598, '180.183.247.168', NULL, NULL, NULL, 0, 0, 10000),
(5, 'tamakodgi', 'Tamakodgi', '$SHA$5d00a439aa89b857$387ff7d3acc698248027ca3f162a26577bc7a9016ad11a740ef28129519b7202', '202.28.62.97', 1579738943845, 0, 0, 0, 'world', 1579735254204, '202.28.62.97', NULL, NULL, NULL, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `backend_name` varchar(255) NOT NULL,
  `mcname` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `name`, `backend_name`, `mcname`, `amount`, `price`) VALUES
(1, 'Oak Wood', 'Oak_Wood', 'log', 64, 100),
(2, 'Gold Block', 'Gold_Block', 'Gold_Block', 64, 700),
(3, 'Coal', 'Coal', 'Coal', 64, 200),
(4, 'Diamond', 'Diamond', 'Diamond', 64, 700),
(5, 'Emerald', 'Emerald', 'Emerald', 64, 1200),
(6, 'Diamond_Sword', 'Diamond_Sword', 'Diamond_Sword', 1, 360),
(7, 'Diamond_Shovel', 'Diamond_Shovel', 'Diamond_Shovel', 1, 300),
(8, 'Diamond_Pickaxe', 'Diamond_Pickaxe', 'Diamond_Pickaxe', 1, 420),
(9, 'Diamond_Axe', 'Diamond_Axe', 'Diamond_Axe', 1, 390);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authme`
--
ALTER TABLE `authme`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authme`
--
ALTER TABLE `authme`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
