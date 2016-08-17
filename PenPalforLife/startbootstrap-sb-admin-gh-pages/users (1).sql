-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2016 at 01:19 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penpal`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `student_firstname` varchar(100) NOT NULL,
  `student_lastname` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `parent_email` varchar(50) NOT NULL,
  `year` year(4) NOT NULL,
  `student_bio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`student_firstname`, `student_lastname`, `username`, `parent_email`, `year`, `student_bio`) VALUES
('xcb', 'bhm', 'cb', 'xv', 2004, 'cb'),
('xvb', 'vxcb', 'xb', 'xb', 2003, 'fb'),
('h', 'jhk', 'jkh', 'j,hnj', 2004, 'jlkij'),
('fdgfg', 'fsgfd', 'fdsg', 'fgfd', 2003, 'dfdf'),
('gdfhngf', 'gfdhgfd', 'dgfh', 'ghj', 0000, 'fdgb'),
('gh', 'gh', 'gh', 'gfh', 0000, 'gfh'),
('bvnbv', 'bvn', 'bvnbv', 'bvn', 0000, 'bvn'),
('gfhgf', 'ghjgf', 'gfhgf', 'ghjgf', 0000, 'ghgf'),
('gfhgfhjgj', 'gfhgfjghfjghfj', 'ghjghjghfjhgj', 'ghjghjhgj', 0000, 'ghjhgj'),
('', '', '', '', 0000, ''),
('fdsgdfgs', 'sfgfdg', 'sgfg', 'etgudiya@gmail.com', 2004, 'fgfxg'),
('gfhgdh', 'gfdhg', 'hgfdh', 'etgudiya@gmail.com', 2003, 'dsgdf'),
('juhlu', 'hjuku', 'uhjlui', 'etgudiya@gmail.com', 0000, 'dfd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
