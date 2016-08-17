-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2016 at 01:18 AM
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
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `ClassId` int(11) NOT NULL,
  `ClassName` varchar(50) NOT NULL,
  `CLassLanguage` varchar(50) NOT NULL,
  `ClassSubject` varchar(50) NOT NULL,
  `ClassDescription` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`ClassId`, `ClassName`, `CLassLanguage`, `ClassSubject`, `ClassDescription`) VALUES
(1, 'vcb', 'cb', 'cvn@gmail.com', 'https://myconestoga.ca'),
(2, 'cvb', 'vcb', 'cvb@com', 'https://conestogaodfdsfnline.ca'),
(3, 'erew', 'ghj', 'hj@gmail.com', 'https://conestogaobnvnbvnline.ca'),
(4, 'fgfh', 'hgfg', 'fdgfdhg@gmail.com', 'https://conestogaofdgfgfgbnvnbvnline.ca'),
(5, 'hgmhjm', 'ghfng', 'dfvgf@gmail.com', 'https://conestogaogfhjgfhfdgfgfgbnvnbvnline.ca'),
(6, 'fhgfh', 'gfhgh', 'gfhg@gmail.com', 'https://conestogaogfhjgfhfdgfgfgbnvnbvnline.ca'),
(7, 'fghcvf', 'cvbvc', 'bvn', 'bvn'),
(8, '', '', '', ''),
(9, 'fgfsg', 'dfsgdfsh', 'fgdfsgd', 'fdgdfsg'),
(10, 'fgfhg', 'gfhgfh', 'ghjgdh', 'gfhgf'),
(11, 'fdgf', 'huih', 'ghjh', 'uhjoli');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`ClassId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `ClassId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
