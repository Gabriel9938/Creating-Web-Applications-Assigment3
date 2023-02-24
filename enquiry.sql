-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2019 at 07:14 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `userID` int(11) UNSIGNED NOT NULL,
  `givename` varchar(30) NOT NULL,
  `famname` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `street` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL,
  `state` text NOT NULL,
  `postcode` varchar(5) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `room` text NOT NULL,
  `duration` varchar(100) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`userID`, `givename`, `famname`, `email`, `street`, `city`, `state`, `postcode`, `phone`, `room`, `duration`, `comment`) VALUES
(1, 'Parry', 'Liaw', 'Parry@gmail.com', 'lot jalan simpang tiga', 'Kuching', 'Sarawak', '93350', '0165545578', 'Damai Puri Resort & Spa', '4', 'add 1 bad'),
(2, 'Gabriel', 'Kong', 'gbkong98@gmail.com', 'lot 495 jlan jalan', 'Lawas', 'Sarawak', '98850', '0198874587', 'Cove 55', '3', 'add 2 blanket'),
(3, 'Ali', 'Baba', 'Ali@gmail.com', 'lot 000 jalan jalan', 'Kuching', 'Sarawak', '93350', '0198745623', 'An Historic Tribeca Treasure', '2', 'none'),
(4, 'Darrell', 'Lai', 'Lai@gmail.com', 'lot 888 jalan jalan', 'Kuching', 'Sarawak', '98850', '0126489523', 'Arc de Triomphe', '3', 'none'),
(5, 'Allen', 'lau', 'Allen@gmail.com', 'Lot678', 'sibu', 'Sarawak', '93341', '0111235484', 'Dunes Village', '4', '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `userID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
