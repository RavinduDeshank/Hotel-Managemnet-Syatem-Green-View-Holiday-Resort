-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2020 at 01:49 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greenview`
--

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `pid` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `pTitle` varchar(50) NOT NULL,
  `pStartDate` varchar(20) NOT NULL,
  `pEndDate` varchar(20) NOT NULL,
  `Descrip` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`pid`, `pname`, `pTitle`, `pStartDate`, `pEndDate`, `Descrip`) VALUES
(5, 'ddada', 'scsv', '2020-03-09', '2020-03-17', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uId` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `ugender` varchar(50) NOT NULL,
  `umail` varchar(250) NOT NULL,
  `unation` varchar(50) NOT NULL,
  `uaddress` varchar(250) NOT NULL,
  `unumber` int(10) NOT NULL,
  `upass` varchar(250) NOT NULL,
  `utype` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uId`, `uname`, `fname`, `lname`, `ugender`, `umail`, `unation`, `uaddress`, `unumber`, `upass`, `utype`) VALUES
(1, 'test', 'test', 'test', 'male', 'test@gmail.com', 'test', 'sdnfalncljkajkl/cnka/lclkan/lkcnac', 201010110, 'test', 'Customer'),
(2, 'testing', '', '', '', '', '', '', 0, 'testing', 'Admin');

-- --------------------------------------------------------


--
-- Indexes for dumped tables
--

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uId`);




--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;


COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
