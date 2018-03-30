-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2018 at 09:11 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tp`
--

-- --------------------------------------------------------

--
-- Table structure for table `autofield`
--

CREATE TABLE `autofield` (
  `kid` int(11) NOT NULL,
  `tname` varchar(20) NOT NULL,
  `pur` varchar(20) NOT NULL,
  `paid` int(20) NOT NULL,
  `mem` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `autofield`
--

INSERT INTO `autofield` (`kid`, `tname`, `pur`, `paid`, `mem`) VALUES
(1, 'pawan', 'kj', 0, 'kj'),
(2, 'pawan', 'gy', 0, 'gy');

-- --------------------------------------------------------

--
-- Table structure for table `tregister`
--

CREATE TABLE `tregister` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `uid` varchar(15) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `pno` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tregister`
--

INSERT INTO `tregister` (`id`, `name`, `uid`, `pwd`, `pno`) VALUES
(3, 'Pawan Lokapur', 'paw123', 'pawan', 2147483647),
(4, 'Vinit Kale', 'vin123', 'vinit', 2147483647),
(5, 'akshay', 'as', '123', 2147483647),
(6, 'amol', 'amol', '123', 2147483647),
(7, 'sahil', 'sahil123', 'sahil', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `tripd`
--

CREATE TABLE `tripd` (
  `ttid` int(11) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `tname` varchar(30) NOT NULL,
  `sep` int(11) NOT NULL,
  `pur` varchar(30) NOT NULL,
  `paid` int(8) NOT NULL,
  `mem` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tripd`
--

INSERT INTO `tripd` (`ttid`, `uid`, `tname`, `sep`, `pur`, `paid`, `mem`) VALUES
(159, 'paw123', 'suraj park', 1, 'asach', 1300, 'pawan'),
(160, 'paw123', 'suraj park', 2, '', 1000, 'sachin'),
(161, 'paw123', 'suraj park', 3, '', 2000, 'vinay');

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `tid` int(11) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `tname` varchar(20) NOT NULL,
  `nom` int(10) NOT NULL,
  `m1` varchar(20) NOT NULL,
  `m2` varchar(20) DEFAULT NULL,
  `m3` varchar(20) DEFAULT NULL,
  `m4` varchar(20) DEFAULT NULL,
  `m5` varchar(20) DEFAULT NULL,
  `m6` varchar(20) DEFAULT NULL,
  `m7` varchar(20) DEFAULT NULL,
  `m8` varchar(20) DEFAULT NULL,
  `count` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`tid`, `uid`, `tname`, `nom`, `m1`, `m2`, `m3`, `m4`, `m5`, `m6`, `m7`, `m8`, `count`) VALUES
(30, 'paw123', 'suraj park', 3, 'pawan', 'sachin', 'vinay', '', '', '', '', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autofield`
--
ALTER TABLE `autofield`
  ADD PRIMARY KEY (`kid`);

--
-- Indexes for table `tregister`
--
ALTER TABLE `tregister`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tripd`
--
ALTER TABLE `tripd`
  ADD PRIMARY KEY (`ttid`);

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autofield`
--
ALTER TABLE `autofield`
  MODIFY `kid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tregister`
--
ALTER TABLE `tregister`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `tripd`
--
ALTER TABLE `tripd`
  MODIFY `ttid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;
--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
