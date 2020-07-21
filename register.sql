-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 21, 2020 at 04:13 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL,
  `comments` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `comments`) VALUES
(1, 'kasuri', 'abilashinikasu7@gmail.com', 715501646, 'swsw'),
(2, 'nimmi', 'nimmi@gmail.com', 714562584, 'hello'),
(3, 'kasuri', 'abilashinikasu7@gmail.com', 715501646, 'hftyt');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productname` varchar(25) NOT NULL,
  `code` varchar(100) NOT NULL,
  `productprice` float NOT NULL,
  `productimage` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `productname`, `code`, `productprice`, `productimage`) VALUES
(1, 'Black frost cake', 'a1', 100, 'uploads/cake01.png'),
(2, 'Black frost cake', 'a9', 150, 'uploads/cake02.jpg'),
(3, 'Black frost cake', 'a8', 150, 'uploads/cake03.jpg'),
(4, 'Black frost cake', 'a7', 200, 'uploads/cake04.jpg'),
(5, 'Black frost cake', 'a6', 250, 'uploads/cake05.jpg'),
(6, 'Black frost cake', 'a5', 160, 'uploads/cake06.jpg'),
(7, 'Black frost cake', 'a4', 130, 'uploads/cake07.jpg'),
(8, 'Black frost cake', 'a3', 100, 'uploads/cake08.jpg'),
(9, 'Black frost cake', 'a2', 100, 'uploads/cake09.jpg'),
(10, 'Black frost cake', 'a10', 100, 'uploads/cake10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'kasuri', 'abilashinikasu7@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'Roshenka', 'roshenka@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
