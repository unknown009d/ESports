-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 13, 2022 at 02:35 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `FestGames`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataentry`
--

CREATE TABLE `dataentry` (
  `count` int(50) UNSIGNED NOT NULL COMMENT 'incVal',
  `uid` varchar(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `semester` int(11) NOT NULL,
  `game` varchar(355) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `TID` varchar(25) NOT NULL,
  `payStat` varchar(10) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dataentry`
--

INSERT INTO `dataentry` (`count`, `uid`, `name`, `branch`, `semester`, `game`, `mobile`, `TID`, `payStat`, `date`) VALUES
(7, 'N176I', 'Ashim Das', 'Others', 0, 'null', '7081301290', '1287ACV852-3P', 'paid', '12/06/22'),
(9, 'N200I', 'Subham Paul', 'DCST', 6, 'null', '8967934798', '85388QUGI92', 'pending', '12/06/22'),
(11, 'N214I', 'Abir Roy', 'DCST', 6, 'null', '9078309485', 'AJB9508sP', 'paid', '12/06/22'),
(14, 'N707I', 'Ruimi Chaudhaury', 'DCST', 6, 'csgo', '8948578723', '0', 'pending', '13/06/22'),
(13, 'N77I', 'Nuike Ciksj', 'DETE', 5, 'bgmi, nfs', '1289375917', '0', 'paid', '13/06/22'),
(5, 'N873I', 'Drubajyoti Debnath', 'DCST', 6, 'bgmi, nfs', '7819237981', '0', 'paid', '12/06/22'),
(10, 'N911I', 'Prajwal Ghosh', 'DCST', 6, 'null', '1987985679', '0', 'pending', '12/06/22'),
(6, 'N94I', 'Ronit Paul', 'Others', 0, 'null', '1872389123', '0', 'paid', '12/06/22'),
(8, 'N986I', 'Priyangshu Saha', 'Others', 0, 'bgmi', '1902381092', '0', 'pending', '12/06/22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataentry`
--
ALTER TABLE `dataentry`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `count` (`count`);
ALTER TABLE `dataentry` ADD FULLTEXT KEY `TID_2` (`TID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dataentry`
--
ALTER TABLE `dataentry`
  MODIFY `count` int(50) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'incVal', AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
