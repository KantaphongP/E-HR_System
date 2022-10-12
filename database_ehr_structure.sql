-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2022 at 08:25 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ehrdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `log_detail`
--

CREATE TABLE `log_detail` (
  `TS_ID` varchar(13) NOT NULL,
  `LDATE` date NOT NULL,
  `MANDAY` float NOT NULL,
  `DETAIL` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_detail`
--

INSERT INTO `log_detail` (`TS_ID`, `LDATE`, `MANDAY`, `DETAIL`) VALUES
('2210P01D01S01', '2022-10-12', 1, 'Work E-HR Project'),
('2210P01D01S01', '2022-10-13', 1, 'Work E-HR Project'),
('2210P01D01S01', '2022-10-14', 1, 'Co-op Prepare Presentation '),
('2210P01D01S01', '2022-10-15', 1, 'Work AI Project'),
('2210P01D01S01', '2022-10-16', 1, 'Work AI Project');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log_detail`
--
ALTER TABLE `log_detail`
  ADD PRIMARY KEY (`LDATE`),
  ADD KEY `TS_ID` (`TS_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `log_detail`
--
ALTER TABLE `log_detail`
  ADD CONSTRAINT `log_detail_ibfk_1` FOREIGN KEY (`TS_ID`) REFERENCES `log` (`TS_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
