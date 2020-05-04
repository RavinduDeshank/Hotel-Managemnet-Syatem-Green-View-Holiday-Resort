-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2020 at 11:29 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

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

-- --------------------------------------------------------

--
-- Table structure for table `taxicustomer`
--

CREATE TABLE `taxicustomer` (
  `user_id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel_number` int(20) NOT NULL,
  `reserved_room_no` int(10) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `location` varchar(50) NOT NULL,
  `vehicle_type` varchar(20) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taxicustomer`
--

INSERT INTO `taxicustomer` (`user_id`, `username`, `password`, `user_type`, `full_name`, `email`, `tel_number`, `reserved_room_no`, `time`, `date`, `location`, `vehicle_type`, `is_deleted`) VALUES
(44, 'Isuru', '123456', 'Customer', 'Isuru sahan', 'isuru@gmail.com', 779055222, 5, '10:30:00', '2020-04-04', 'Malabe', 'Van', 0),
(50, 'chalaka5', '12345', 'Customer', 'chalaka jayasinghe', 'nbachalaka@gmail.com', 779066933, 7, '11:30:00', '2020-04-05', 'Malabe', 'Car', 1),
(51, 'fredy', 'fredy1234', 'Customer', 'fredy madushan', 'fredy@gmail.com', 779066922, 12, '14:30:00', '2020-05-15', 'Kurunegala', 'Car', 1);

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
(2, 'testing', '', '', '', '', '', '', 0, 'testing', 'Admin'),
(3, 'chalaka', 'chalaka', 'jayasinghe', 'male', 'malith@gmail.com', 'sri lanka', 'rambukkana', 779066933, '1234', 'Customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `taxicustomer`
--
ALTER TABLE `taxicustomer`
  ADD PRIMARY KEY (`user_id`);

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
-- AUTO_INCREMENT for table `taxicustomer`
--
ALTER TABLE `taxicustomer`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
