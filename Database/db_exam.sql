-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2019 at 04:48 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminId` int(11) NOT NULL,
  `adminUser` varchar(50) NOT NULL,
  `adminPass` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminId`, `adminUser`, `adminPass`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ans`
--

CREATE TABLE `tbl_ans` (
  `id` int(11) NOT NULL,
  `quesno` int(11) NOT NULL,
  `rightans` int(11) NOT NULL DEFAULT '0',
  `ans` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ans`
--

INSERT INTO `tbl_ans` (`id`, `quesno`, `rightans`, `ans`) VALUES
(1, 1, 1, 'Rasmus Lerdorf'),
(2, 1, 0, 'Willam Makepiece'),
(3, 1, 0, 'Drek Kolkevi'),
(4, 1, 0, 'List Barely'),
(5, 2, 0, '.html'),
(6, 2, 0, '.xml'),
(7, 2, 1, '.php'),
(8, 2, 0, '.ph'),
(9, 3, 0, '< php >'),
(10, 3, 0, '< ? php ?>'),
(11, 3, 0, '< ? ? >'),
(12, 3, 1, '< ?php ? >'),
(13, 4, 0, 'for loop '),
(14, 4, 0, 'while loop'),
(15, 4, 1, 'do-while loop'),
(16, 4, 0, 'foreach loop'),
(17, 5, 0, 'Notepad '),
(18, 5, 1, 'Notepad++'),
(19, 5, 0, 'Adobe Dreamweaver'),
(20, 5, 0, 'PDT'),
(21, 6, 0, 'All of the mentioned'),
(22, 6, 0, 'Only (ii)'),
(23, 6, 0, '(ii) and (iii)'),
(24, 6, 1, '(ii), (iii) and (iv)'),
(25, 7, 0, 'PHP 4'),
(26, 7, 1, 'PHP 5'),
(27, 7, 0, 'PHP 5.3'),
(28, 7, 0, 'PHP 6'),
(29, 8, 1, 'n'),
(30, 8, 0, 'r'),
(31, 8, 0, '/n'),
(32, 8, 0, '/r'),
(33, 9, 0, '12'),
(34, 9, 0, '1'),
(35, 9, 0, 'Error'),
(36, 9, 1, '5'),
(37, 10, 0, '$add = $add'),
(38, 10, 1, '$add = $add +$add'),
(39, 10, 0, '$add = $add + 1'),
(40, 10, 0, '$add = $add + $add + 1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ques`
--

CREATE TABLE `tbl_ques` (
  `id` int(11) NOT NULL,
  `Q_cat` varchar(10) NOT NULL,
  `quesno` int(11) NOT NULL,
  `ques` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ques`
--

INSERT INTO `tbl_ques` (`id`, `Q_cat`, `quesno`, `ques`) VALUES
(1, '1', 1, 'Who is the father of PHP?'),
(2, '1', 2, 'PHP files have a default file extension of.'),
(3, '1', 3, 'A PHP script should start with ___ and end with ___:'),
(4, '1', 4, 'Which of the looping statements is/are supported by PHP?'),
(5, '1', 5, 'Which of the following is/are a PHP code editor? ditor?'),
(6, '1', 6, 'Which of the following must be installed on your computer so as to run PHP script? i) Adobe Dreamweaver  ii) PHP iii) Apache iv) IIS'),
(7, '1', 7, 'Which version of PHP introduced Try/catch Exception?'),
(8, '1', 8, 'Which of the below symbols is a newline character?'),
(9, '1', 9, 'If $a = 12 what will be returned when ($a == 12) ? 5 : 1 is executed?'),
(10, '1', 10, 'Which of the below statements is equivalent to $add += $add ?');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_result`
--

CREATE TABLE `tbl_result` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `p1` varchar(20) NOT NULL DEFAULT '0',
  `j2` varchar(20) NOT NULL DEFAULT '0',
  `c3` varchar(20) NOT NULL DEFAULT '0',
  `p4` varchar(20) NOT NULL DEFAULT '0',
  `o5` varchar(20) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_result`
--

INSERT INTO `tbl_result` (`id`, `userid`, `p1`, `j2`, `c3`, `p4`, `o5`) VALUES
(1, 1, '3', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `userid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`userid`, `name`, `username`, `password`, `email`, `status`) VALUES
(1, 'Bapon Gharami', 'Bapon', '202cb962ac59075b964b07152d234b70', 'baponbiswas94@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `tbl_ans`
--
ALTER TABLE `tbl_ans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ques`
--
ALTER TABLE `tbl_ques`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_result`
--
ALTER TABLE `tbl_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_ans`
--
ALTER TABLE `tbl_ans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tbl_ques`
--
ALTER TABLE `tbl_ques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_result`
--
ALTER TABLE `tbl_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
