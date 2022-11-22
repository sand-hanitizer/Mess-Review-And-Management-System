-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 22, 2022 at 03:11 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mess`
--

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `name` varchar(20) NOT NULL,
  `enroll` varchar(20) NOT NULL,
  `slot` varchar(10) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`name`, `enroll`, `slot`, `feedback`) VALUES
('Swetika', '455', 'Dinner', ' It was good but the quality can be improved further'),
('swetika swetika', '401', 'dinner', 'good'),
('Bhumika', '401', 'lunch', 'It was really bad!'),
('ananya', '411', 'breakfast', 'It was not cooked properly'),
('ananya', '411', 'breakfast', 'It was not cooked properly'),
('ananya', '411', 'breakfast', 'It was not cooked properly'),
('ananya', '411', 'breakfast', 'It was not cooked properly'),
('ananya', '411', 'breakfast', 'It was not cooked properly'),
('ananya', '411', 'breakfast', 'It was not cooked properly'),
('ananya', '411', 'breakfast', 'It was not cooked properly'),
('ananya', '411', 'breakfast', 'It was not cooked properly'),
('ananya', '411', 'breakfast', 'It was not cooked properly'),
('ananya', '411', 'breakfast', 'It was not cooked properly'),
('ananya', '411', 'breakfast', 'It was not cooked properly'),
('ananya', '411', 'breakfast', 'It was not cooked properly'),
('ananya', '411', 'breakfast', 'It was not cooked properly'),
('ananya', '411', 'breakfast', 'It was not cooked properly'),
('ananya', '411', 'breakfast', 'It was not cooked properly'),
('ananya', '411', 'breakfast', 'It was not cooked properly'),
('ananya', '411', 'breakfast', 'It was not cooked properly'),
('sanjana', '444', 'snacks', 'good but oily'),
('sanjana', '444', 'snacks', 'good but oily'),
('sanjana', '444', 'snacks', 'good but oily'),
('sanjana', '444', 'snacks', 'good but oily'),
('sanjana', '444', 'snacks', 'good but oily'),
('sanjana', '444', 'snacks', 'good but oily'),
('sanjana', '444', 'snacks', 'good but oily'),
('sanjana', '444', 'snacks', 'good but oily'),
('sanjana', '444', 'snacks', 'good but oily'),
('sanjana', '444', 'snacks', 'good but oily'),
('sanjana', '444', 'snacks', 'good but oily'),
('sanjana', '444', 'snacks', 'good but oily'),
('sanjana', '444', 'snacks', 'good but oily'),
('sanjana', '444', 'snacks', 'good but oily'),
('sanjana', '444', 'snacks', 'good but oily'),
('sanjana', '444', 'snacks', 'good but oily'),
('sanjana', '444', 'snacks', 'good but oily'),
('sanjana', '444', 'snacks', 'good but oily'),
('sanjana', '444', 'snacks', 'good but oily'),
('sanjana', '444', 'snacks', 'good but oily'),
('adi', '402', 'dinner', 'good'),
('aditya', '402', 'dinner', 'nice'),
('aditya', '402', 'dinner', 'nice'),
('aditya', '402', 'dinner', 'nice'),
('aditya', '402', 'dinner', 'nice');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
