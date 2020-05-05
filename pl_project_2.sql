-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2020 at 06:04 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pl_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `assesment_report`
--

CREATE TABLE `assesment_report` (
  `ass_id` int(111) NOT NULL,
  `rid` varchar(111) NOT NULL,
  `nba` varchar(111) NOT NULL,
  `table10_id` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `closing_report`
--

CREATE TABLE `closing_report` (
  `closing_id` int(100) NOT NULL,
  `rid` varchar(111) NOT NULL,
  `table1_id` varchar(111) NOT NULL,
  `table2_id` varchar(111) NOT NULL,
  `table6_id` varchar(111) NOT NULL,
  `table7_id` varchar(111) NOT NULL,
  `table8_id` varchar(111) NOT NULL,
  `tb1_id` varchar(111) NOT NULL,
  `tb2_id` varchar(111) NOT NULL,
  `module_co` varchar(111) NOT NULL,
  `course_co` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exit_report`
--

CREATE TABLE `exit_report` (
  `exit_id` int(111) NOT NULL,
  `rid` varchar(111) NOT NULL,
  `sname` varchar(111) NOT NULL,
  `sroll` varchar(111) NOT NULL,
  `table9_id` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m_usertable`
--

CREATE TABLE `m_usertable` (
  `user_sys_id` int(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `mail_id` varchar(100) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_usertable`
--

INSERT INTO `m_usertable` (`user_sys_id`, `user_name`, `phone_no`, `mail_id`, `branch`, `password`, `date_time`) VALUES
(1, 'Test_user', '0000000000', 'test@test.com', 'CSE', '7246320e6b47c135e67ba3a0c990118c', '2020-05-04 16:59:02');

-- --------------------------------------------------------

--
-- Table structure for table `open_report`
--

CREATE TABLE `open_report` (
  `open_id` int(100) NOT NULL,
  `rid` varchar(100) NOT NULL,
  `table1_id` varchar(100) NOT NULL,
  `table2_id` varchar(111) NOT NULL,
  `table3_id` varchar(111) NOT NULL,
  `table4_id` varchar(111) NOT NULL,
  `table5_id` varchar(111) NOT NULL,
  `tb1_id` varchar(111) NOT NULL,
  `tb2_id` varchar(111) NOT NULL,
  `tb3_id` varchar(111) NOT NULL,
  `course_co` varchar(111) NOT NULL,
  `module_co` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `report_id` int(100) NOT NULL,
  `report_name` varchar(100) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `course_code` varchar(100) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `semester` int(10) NOT NULL,
  `year` varchar(30) NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`report_id`, `report_name`, `branch`, `course_code`, `course_name`, `semester`, `year`, `created_by`, `added_on`) VALUES
(1, 'Test Report', 'CSE', '', '', 7, '2019-2020', 'Test_user', '2020-05-04 18:27:12'),
(2, 'Test Report 2', 'CSE', '', '', 7, '2019-2020', 'Test_user', '2020-05-04 18:33:43'),
(3, 'Test Report 3', 'IT', '', '', 7, '2019-2020', 'Test_user', '2020-05-04 18:34:10'),
(4, 'Test Report 4', 'CSE', '', '', 7, '2019-2020', 'Test_user', '2020-05-04 18:36:58');

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `row_id` int(11) NOT NULL,
  `open_id` int(100) NOT NULL,
  `close_id` int(100) NOT NULL,
  `c_no` varchar(111) NOT NULL,
  `c_des` varchar(111) NOT NULL,
  `cog_level` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table2`
--

CREATE TABLE `table2` (
  `row_id` int(100) NOT NULL,
  `open_id` int(111) NOT NULL,
  `close_id` int(111) NOT NULL,
  `cos` varchar(111) NOT NULL,
  `PO1` varchar(111) NOT NULL,
  `PO2` varchar(111) NOT NULL,
  `PO3` varchar(111) NOT NULL,
  `PO4` varchar(111) NOT NULL,
  `PO5` varchar(111) NOT NULL,
  `PO6` varchar(111) NOT NULL,
  `PO7` varchar(111) NOT NULL,
  `PO8` varchar(111) NOT NULL,
  `PO9` varchar(111) NOT NULL,
  `PO10` varchar(111) NOT NULL,
  `PO11` varchar(111) NOT NULL,
  `PO12` varchar(111) NOT NULL,
  `PSO1` varchar(111) NOT NULL,
  `PSO2` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assesment_report`
--
ALTER TABLE `assesment_report`
  ADD PRIMARY KEY (`ass_id`);

--
-- Indexes for table `closing_report`
--
ALTER TABLE `closing_report`
  ADD PRIMARY KEY (`closing_id`);

--
-- Indexes for table `exit_report`
--
ALTER TABLE `exit_report`
  ADD PRIMARY KEY (`exit_id`);

--
-- Indexes for table `m_usertable`
--
ALTER TABLE `m_usertable`
  ADD PRIMARY KEY (`user_sys_id`);

--
-- Indexes for table `open_report`
--
ALTER TABLE `open_report`
  ADD PRIMARY KEY (`open_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `table1`
--
ALTER TABLE `table1`
  ADD PRIMARY KEY (`row_id`);

--
-- Indexes for table `table2`
--
ALTER TABLE `table2`
  ADD PRIMARY KEY (`row_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assesment_report`
--
ALTER TABLE `assesment_report`
  MODIFY `ass_id` int(111) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `closing_report`
--
ALTER TABLE `closing_report`
  MODIFY `closing_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exit_report`
--
ALTER TABLE `exit_report`
  MODIFY `exit_id` int(111) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_usertable`
--
ALTER TABLE `m_usertable`
  MODIFY `user_sys_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `open_report`
--
ALTER TABLE `open_report`
  MODIFY `open_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `table1`
--
ALTER TABLE `table1`
  MODIFY `row_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table2`
--
ALTER TABLE `table2`
  MODIFY `row_id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
