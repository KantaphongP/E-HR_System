-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2022 at 12:37 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

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
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `TS_ID` varchar(13) NOT NULL,
  `STATUS_ID` int(11) NOT NULL,
  `STAFF_ID` varchar(5) NOT NULL,
  `TOTAL_MANDAY` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`TS_ID`, `STATUS_ID`, `STAFF_ID`, `TOTAL_MANDAY`) VALUES
('202201S02', 0, 'STF02', 0),
('202204S02', 0, 'STF02', 0),
('202210S01', 0, 'STF01', 3),
('202210S02', 0, 'STF02', 7),
('202302S02', 0, 'STF02', 4),
('202401S02', 0, 'STF02', 2);

-- --------------------------------------------------------

--
-- Table structure for table `log_detail`
--

CREATE TABLE `log_detail` (
  `TS_ID` varchar(13) NOT NULL,
  `LDATE` date NOT NULL,
  `MANDAY` float NOT NULL,
  `DETAIL` text NOT NULL,
  `NOTE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_detail`
--

INSERT INTO `log_detail` (`TS_ID`, `LDATE`, `MANDAY`, `DETAIL`, `NOTE`) VALUES
('202201S02', '2022-10-18', 0.5, 'what', ''),
('202204S02', '2022-04-12', 1, 'NONO', ''),
('202210S01', '2022-10-14', 1, 'อยากได้สกินมังกือ', 'อยากเล่นๆ'),
('202210S01', '2022-10-15', 1, 'workwork', 'NONO'),
('202210S01', '2022-10-16', 1, 'pooooooo', 'momo'),
('202210S02', '2022-10-12', 1, 'Work E-HR Project', ''),
('202210S02', '2022-10-13', 1, 'Work E-HR Project', ''),
('202210S02', '2022-10-14', 1, 'Co-op Prepare Presentation ', ''),
('202210S02', '2022-10-15', 1, 'Work AI Project', ''),
('202210S02', '2022-10-16', 1, 'Work AI Project', ''),
('202210S02', '2022-10-17', 0.5, 'what', ''),
('202210S02', '2022-10-18', 2, 'Work Project', 'เข้าค่ายลูกเสือ'),
('202210S02', '2022-10-19', 1, 'Presentation', 'เหนื่อยนะ'),
('202210S02', '2022-10-20', 1, 'workwork', 'ฟ'),
('202210S02', '2022-10-21', 1, 'workwork', 'หฟก้ฟกฟห'),
('202210S02', '2022-10-22', 4, 's', 's'),
('202302S02', '2023-02-11', 2, 'workwork', 'บ้าหน่า'),
('202302S02', '2023-02-12', 2, 'workworkwork', 'hohohohohhohhoh'),
('202302S02', '2023-02-18', 2, 'เข้าาค่ายลูกเสือ', 'NONO'),
('202401S02', '2024-01-05', 1, 'เล่นเกม', 'เก่งมาก'),
('202401S02', '2024-01-09', 1, 'workwork', 'hohohohohhohhoh');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `PROJ_ID` varchar(5) NOT NULL,
  `PROJ_NAME` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`PROJ_ID`, `PROJ_NAME`) VALUES
('PRJ01', 'Project1'),
('PRJ02', 'Project2'),
('PRJ03', 'Project3');

-- --------------------------------------------------------

--
-- Table structure for table `sl`
--

CREATE TABLE `sl` (
  `LEAD_ID` varchar(5) NOT NULL,
  `STAFF_ID` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sl`
--

INSERT INTO `sl` (`LEAD_ID`, `STAFF_ID`) VALUES
('STF04', 'STF01'),
('STF04', 'STF02'),
('STF04', 'STF03');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `STAFF_ID` varchar(5) NOT NULL,
  `S_FNAME` varchar(20) NOT NULL,
  `S_LNAME` varchar(20) NOT NULL,
  `DOB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`STAFF_ID`, `S_FNAME`, `S_LNAME`, `DOB`) VALUES
('STF01', 'Chusana', 'Wilaivanichwong', '2001-07-28'),
('STF02', 'Bussakorn', 'Palatorn', '2000-10-26'),
('STF03', 'Kantaphong', 'Pitinorasate', '2012-10-27'),
('STF04', 'Tidarat ', 'Piajan', '2022-07-18');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `STATUS_ID` int(11) NOT NULL,
  `STATUS_NAME` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`STATUS_ID`, `STATUS_NAME`) VALUES
(0, 'Waiting Approve'),
(1, 'Approve');

-- --------------------------------------------------------

--
-- Table structure for table `stp`
--

CREATE TABLE `stp` (
  `STAFF_ID` varchar(5) NOT NULL,
  `TEAM_ID` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stp`
--

INSERT INTO `stp` (`STAFF_ID`, `TEAM_ID`) VALUES
('STF01', 'DEV01'),
('STF02', 'FNC01'),
('STF03', 'MID01');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `TEAM_ID` varchar(5) NOT NULL,
  `TEAM_NAME` varchar(50) NOT NULL,
  `PROJ_ID` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`TEAM_ID`, `TEAM_NAME`, `PROJ_ID`) VALUES
('DEV01', 'Developer Team1', 'PRJ01'),
('DEV02', 'Developer Team2', 'PRJ02'),
('FNC01', 'Functional Interface', 'PRJ01'),
('FNC02', 'Functional Workflow', 'PRJ02'),
('MID01', 'Middleware Team1', 'PRJ01'),
('MID02', 'Middleware Team2', 'PRJ02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`TS_ID`),
  ADD KEY `STATUS_ID` (`STATUS_ID`),
  ADD KEY `STAFF_ID` (`STAFF_ID`);

--
-- Indexes for table `log_detail`
--
ALTER TABLE `log_detail`
  ADD PRIMARY KEY (`TS_ID`,`LDATE`),
  ADD KEY `TS_ID` (`TS_ID`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`PROJ_ID`);

--
-- Indexes for table `sl`
--
ALTER TABLE `sl`
  ADD PRIMARY KEY (`STAFF_ID`),
  ADD KEY `LEAD_ID` (`LEAD_ID`,`STAFF_ID`),
  ADD KEY `STAFF_ID` (`STAFF_ID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`STAFF_ID`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`STATUS_ID`);

--
-- Indexes for table `stp`
--
ALTER TABLE `stp`
  ADD PRIMARY KEY (`STAFF_ID`),
  ADD KEY `STAFF_ID` (`STAFF_ID`),
  ADD KEY `TEAM_ID` (`TEAM_ID`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`TEAM_ID`),
  ADD KEY `PROJ_ID` (`PROJ_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `log_ibfk_1` FOREIGN KEY (`STATUS_ID`) REFERENCES `status` (`STATUS_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `log_ibfk_2` FOREIGN KEY (`STAFF_ID`) REFERENCES `sl` (`STAFF_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `log_detail`
--
ALTER TABLE `log_detail`
  ADD CONSTRAINT `log_detail_ibfk_1` FOREIGN KEY (`TS_ID`) REFERENCES `log` (`TS_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sl`
--
ALTER TABLE `sl`
  ADD CONSTRAINT `sl_ibfk_1` FOREIGN KEY (`STAFF_ID`) REFERENCES `staff` (`STAFF_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stp`
--
ALTER TABLE `stp`
  ADD CONSTRAINT `stp_ibfk_1` FOREIGN KEY (`STAFF_ID`) REFERENCES `staff` (`STAFF_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stp_ibfk_2` FOREIGN KEY (`TEAM_ID`) REFERENCES `team` (`TEAM_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `team`
--
ALTER TABLE `team`
  ADD CONSTRAINT `team_ibfk_1` FOREIGN KEY (`PROJ_ID`) REFERENCES `project` (`PROJ_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
