-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2016 at 10:35 PM
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
(0, 'social', 'english', 'geography', 'yo'),
(0, 'erferr', 'uhk', 'ukj', 'uhkj'),
(0, 'rrgrtt', 'yiuy', 'uouiu', 'khj'),
(0, 'iyjhku', 'khlih', 'uhoilj', 'ouijuoi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
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

INSERT INTO `users` (`Id`, `student_firstname`, `student_lastname`, `username`, `parent_email`, `year`, `student_bio`) VALUES
(1, 'dhruv', 'patelyh', 'dpatel', 'etgudiya@gmail.com', 2007, 'ggy'),
(2, 'sds', 'fgfd', 'dgfd', 'etgudiya@gmail.com', 2006, 'jkhlkj'),
(3, 'yoiu', 'iouo', 'ouo', 'etgudiya@gmail.com', 2006, 'hljl'),
(4, 'uhoui', 'uhi', 'ukh', 'etgudiya@gmail.com', 2007, 'kuhil'),
(5, 'oijl', 'uoholi', 'iouji', 'etgudiya@gmail.com', 2005, 'hkuhli');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
