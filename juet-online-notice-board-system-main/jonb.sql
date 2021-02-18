-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 06, 2020 at 03:30 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jonb`
--

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

DROP TABLE IF EXISTS `notices`;
CREATE TABLE IF NOT EXISTS `notices` (
  `slno` int(100) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`slno`, `title`, `description`, `created_at`) VALUES
(1, 'title sample', 'description sample', '2020-12-03 15:52:58'),
(22, 'title sample', 'description sample', '2020-12-03 15:52:58'),
(23, '', '', '2020-12-03 16:42:02'),
(24, '', 'another sample', '2020-12-03 16:44:25'),
(25, 'title two', 'another sample', '2020-12-03 16:45:22'),
(26, 'four', 'four', '2020-12-03 16:45:43'),
(27, 'four', 'four', '2020-12-03 16:46:22'),
(28, 'five', 'five', '2020-12-03 16:53:32'),
(29, 'five', 'five', '2020-12-03 16:53:46'),
(30, 'five', 'five', '2020-12-03 16:54:28'),
(31, 'five', 'five', '2020-12-03 16:57:26'),
(32, '', 'without title', '2020-12-03 16:57:40'),
(33, '', 'without title', '2020-12-03 17:02:41'),
(34, 'test notice', 'notice after sql connection success!', '2020-12-04 09:42:08'),
(35, 'sample notice', 'sample notice notice', '2020-12-06 14:28:58'),
(36, 'Notice check', 'This is a sample notice check after creating login system.', '2020-12-06 14:37:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`) VALUES
(1, 'Akshay Srivastava', 'akshaysrivastava46@gmail.com', '*6A7A490FB9DC8C33C2B025A91737077A7E9CC5E5', '7355044476'),
(2, 'Akshay Srivastava', 'akshaysrivastava46@gmail.com', '*6A7A490FB9DC8C33C2B025A91737077A7E9CC5E5', '7355044476'),
(3, 'abcdef', 'ab@ab.com', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', '1234567890'),
(4, 'abc', 'a@a.com', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', '1234567890'),
(5, 'administrator', 'admin@admin.com', '*4ACFE3202A5FF5CF467898FC58AAB1D615029441', '0000000000'),
(6, 'administrator', 'admin@admin.com', '*4ACFE3202A5FF5CF467898FC58AAB1D615029441', '1234567890');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
