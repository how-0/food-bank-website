-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2024 at 01:59 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `whiteflagdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblfood`
--

CREATE TABLE `tblfood` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phonenum` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tblfood`
--

INSERT INTO `tblfood` (`id`, `name`, `phonenum`, `email`, `quantity`, `date`, `time`) VALUES
(11, 'KIA', '102574', 'dsfsdf@sdfnk.com', '', '0000-00-00', '00:00:00'),
(6, 'JOHNNYIEY', '1111111111', 'dsfsdf@sdfnk.com', '', '0000-00-00', '00:00:00'),
(9, '', '', '', '', '0000-00-00', '00:00:00'),
(10, 'KKK', '102574', 'dsfsdf@sdfnk.com', '11', '2023-08-03', '01:36:00'),
(12, 'KKKsdfasdf', '102574', 'dsfsdf@sdfnk.com', '', '0000-00-00', '00:00:00'),
(13, 'KKKsdfasdf', '102574', 'dsfsdf@sdfnk.com', '', '0000-00-00', '00:00:00'),
(14, 'KKKsdfasdf', '102574', 'dsfsdf@sdfnk.com', '', '0000-00-00', '00:00:00'),
(15, '', '', '', '', '0000-00-00', '00:00:00'),
(16, '', '', '', '11', '0000-00-00', '00:00:00'),
(17, 'KKKsdfasdf', '102574', '12122', '', '0000-00-00', '00:00:00'),
(18, 'KKKsdfasdf', '102574', '', '', '0000-00-00', '00:00:00'),
(19, 'KKKsdfasdf', '102574', 'hh', '', '0000-00-00', '00:00:00'),
(20, 'KKK', '102574', 'dsfsdf@sdfnk.com', '', '0000-00-00', '00:00:00'),
(21, 'JOHNNY', '1111111111', 'dsfsdf@sdfnk.com', '', '0000-00-00', '00:00:00'),
(22, 'JOHNNY', '1111111111', 'dsfsdf@sdfnk.com', '', '0000-00-00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblmoney`
--

CREATE TABLE `tblmoney` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phonenum` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tblmoney`
--

INSERT INTO `tblmoney` (`id`, `name`, `phonenum`, `email`, `amount`) VALUES
(1, '', '', '', 0),
(2, 'KKKsdfasdf', '102574', 'hh', 50),
(9, '', '', '', 50),
(4, 'KKKsdfasdf', '102574', 'hh', 50),
(5, '', '', '', 50),
(6, 'JOHN', '1111111111', 'dsfsdf@sdfnk.com', 50),
(8, '', '', '', 50);

-- --------------------------------------------------------

--
-- Table structure for table `tblrecord`
--

CREATE TABLE `tblrecord` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(150) NOT NULL,
  `contact1` varchar(15) NOT NULL,
  `contact2` varchar(15) DEFAULT NULL,
  `gmail` varchar(320) NOT NULL,
  `map` varchar(700) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblrecord`
--

INSERT INTO `tblrecord` (`id`, `name`, `address`, `contact1`, `contact2`, `gmail`, `map`) VALUES
(1, 'HungerHurts ', '1-7-7. Jalan Tinju 13/50, Seksyen 13, Shah Alam, Selangor 40100, MY', '+6012 9486 920', '+603 3940 9302', 'hungerhurts@gmail.com', 'https://maps.google.com/maps?q=hungerhurts%20selangor&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed'),
(17, 'Food Aid Foundation', '9, Jalan 7/118b, Desa Tun Razak, 56000 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur', '+603 9226 5500', '+603 9226 5377', 'info@foodaidfoundation.org', 'https://maps.google.com/maps?q=Food%20Aid%20Foundation&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed'),
(14, 'PERTIWI', 'No 63 Jalan SS 3/53, Taman Subang, 47300 Petaling Jaya, Selangor Darul Ehsan, Malaysia', '+603 7874 4203', '+6012 236 3639', 'pertiwi.malaysia.gmail.com', 'https://maps.google.com/maps?q=PERTIWI%20soup%20kitchen&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed'),
(21, '', '', '', '', '', ''),
(22, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblrequest`
--

CREATE TABLE `tblrequest` (
  `id` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `phonenum` varchar(15) NOT NULL,
  `eaddress` varchar(30) NOT NULL,
  `haddress` varchar(255) NOT NULL,
  `datepu` date NOT NULL,
  `ctime` time NOT NULL,
  `descr` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tblrequest`
--

INSERT INTO `tblrequest` (`id`, `uname`, `phonenum`, `eaddress`, `haddress`, `datepu`, `ctime`, `descr`) VALUES
(1, 'James', '01135545266', '', '1313,jalsna asdwd1', '0000-00-00', '00:00:00', '1e1e									'),
(23, 'James', '6666', '', '', '0000-00-00', '00:00:00', '		'),
(24, 'dd', '12563', 'h', 'ef', '2023-08-23', '11:24:00', '		');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `userId` int(11) NOT NULL,
  `userName` varchar(225) NOT NULL,
  `contact` varchar(225) NOT NULL,
  `gender` varchar(225) NOT NULL,
  `pwd` varchar(225) NOT NULL,
  `position` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`userId`, `userName`, `contact`, `gender`, `pwd`, `position`) VALUES
(1, 'john', '999', 'male', '111', 'admin'),
(2, 'James', '312', 'male', '000', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tblvolunteer`
--

CREATE TABLE `tblvolunteer` (
  `id` int(11) NOT NULL,
  `userName` varchar(225) NOT NULL,
  `ssn` varchar(225) NOT NULL,
  `phoneNo` varchar(225) NOT NULL,
  `age` varchar(100) NOT NULL,
  `email` varchar(225) NOT NULL,
  `homeAddress` varchar(225) NOT NULL,
  `flyer` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `data` int(11) NOT NULL,
  `relations` int(11) NOT NULL,
  `door` int(11) NOT NULL,
  `clerical` int(11) NOT NULL,
  `descr` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tblvolunteer`
--

INSERT INTO `tblvolunteer` (`id`, `userName`, `ssn`, `phoneNo`, `age`, `email`, `homeAddress`, `flyer`, `phone`, `data`, `relations`, `door`, `clerical`, `descr`) VALUES
(1, 'John', '0144164611', '10', '', 'john@gmail.com', '17, Jalan Harapan', 0, 0, 1, 0, 1, 1, ':)	'),
(2, '', '', '', '', '', '', 0, 0, 1, 0, 0, 0, '	k	');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblfood`
--
ALTER TABLE `tblfood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblmoney`
--
ALTER TABLE `tblmoney`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblrecord`
--
ALTER TABLE `tblrecord`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblrequest`
--
ALTER TABLE `tblrequest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `tblvolunteer`
--
ALTER TABLE `tblvolunteer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblfood`
--
ALTER TABLE `tblfood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tblmoney`
--
ALTER TABLE `tblmoney`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblrecord`
--
ALTER TABLE `tblrecord`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tblrequest`
--
ALTER TABLE `tblrequest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblvolunteer`
--
ALTER TABLE `tblvolunteer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
