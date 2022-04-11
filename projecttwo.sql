-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2022 at 03:54 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projecttwo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `userID` char(100) NOT NULL,
  `password` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `systemID` int(11) NOT NULL,
  `contactID` int(11) NOT NULL,
  `contactName` char(200) NOT NULL,
  `emailAddress` char(200) NOT NULL,
  `addressLine1` varchar(500) NOT NULL,
  `addressLine2` varchar(500) NOT NULL,
  `addressLine3` varchar(500) NOT NULL,
  `city` char(200) NOT NULL,
  `state` char(200) NOT NULL,
  `zip` int(11) NOT NULL,
  `country` char(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`systemID`, `contactID`, `contactName`, `emailAddress`, `addressLine1`, `addressLine2`, `addressLine3`, `city`, `state`, `zip`, `country`) VALUES
(1, 1, 'tester1', 'test1@test.com', 'test rd', '', '', 'milledgeville', 'GA', 12345, 'USA'),
(2, 2, 'tester2contact', 'test2@test.com', 'test drive', '', '', 'mcaon', 'GA', 54321, 'USA');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `systemID` int(11) NOT NULL,
  `contactID` int(11) NOT NULL,
  `question` text NOT NULL,
  `status` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`systemID`, `contactID`, `question`, `status`) VALUES
(1, 1, 'How do I fix this?', ''),
(2, 2, 'My screen stopped working?', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `systemID` int(11) NOT NULL,
  `userID` char(100) NOT NULL,
  `password` char(200) NOT NULL,
  `name` char(200) NOT NULL,
  `notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`systemID`, `userID`, `password`, `name`, `notes`) VALUES
(1, 'test1', '4ff1a33e188b7b86123d6e3be2722a23514a83b4', 'tester1', ''),
(2, 'test2', '8e59a08ba401da8aedd958b3a65c2d8e70dc8da2', 'tester2', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`contactID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`systemID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `contactID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `systemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
