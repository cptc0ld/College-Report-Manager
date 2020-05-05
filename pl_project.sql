-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2020 at 11:56 AM
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
-- Table structure for table `closing_report`
--

CREATE TABLE `closing_report` (
  `clsoe_id` int(111) NOT NULL,
  `rid` varchar(111) NOT NULL,
  `cgap` varchar(111) NOT NULL,
  `cga` varchar(111) NOT NULL,
  `cgbp` varchar(111) NOT NULL,
  `cgb` varchar(111) NOT NULL,
  `cgcp` varchar(111) NOT NULL,
  `cgc` varchar(111) NOT NULL,
  `cgd` varchar(111) NOT NULL,
  `cgf` varchar(111) NOT NULL,
  `tb1` varchar(1000) NOT NULL,
  `tb2` varchar(1000) NOT NULL,
  `apo1` varchar(111) NOT NULL,
  `apo2` varchar(111) NOT NULL,
  `apo3` varchar(111) NOT NULL,
  `apo4` varchar(111) NOT NULL,
  `apo5` varchar(121) NOT NULL,
  `apo6` varchar(121) NOT NULL,
  `apo7` varchar(121) NOT NULL,
  `apo8` varchar(121) NOT NULL,
  `apo9` varchar(121) NOT NULL,
  `apo10` varchar(121) NOT NULL,
  `apo11` varchar(121) NOT NULL,
  `apo12` varchar(121) NOT NULL,
  `apso1` varchar(121) NOT NULL,
  `apso2` varchar(121) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `closing_report`
--

INSERT INTO `closing_report` (`clsoe_id`, `rid`, `cgap`, `cga`, `cgbp`, `cgb`, `cgcp`, `cgc`, `cgd`, `cgf`, `tb1`, `tb2`, `apo1`, `apo2`, `apo3`, `apo4`, `apo5`, `apo6`, `apo7`, `apo8`, `apo9`, `apo10`, `apo11`, `apo12`, `apso1`, `apso2`) VALUES
(7, '3', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '13', '1', '143', '1', '1', '1', '1', '1', '1', '1', 'www', '1', '1'),
(8, '6', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '13', '1', '143', '1', '1', '1', '1', '1', '1', '1', 'www', '1', '1'),
(9, '7', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `exit_report`
--

CREATE TABLE `exit_report` (
  `exit_id` int(111) NOT NULL,
  `rid` varchar(111) NOT NULL,
  `sname` varchar(111) NOT NULL,
  `sroll` varchar(111) NOT NULL
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
(1, 'Test_user', '0000000000', 'test@test.com', 'CSE', '7246320e6b47c135e67ba3a0c990118c', '2020-05-04 16:59:02'),
(2, '45', '45', '45@gmail.com', 'IT', '6c8349cc7260ae62e3b1396831a8398f', '2020-05-05 07:49:33'),
(3, 'Test', 'test1', 'tes@gmail.com', 'ECE', '5a105e8b9d40e1329780d62ea2265d8a', '2020-05-05 09:21:03');

-- --------------------------------------------------------

--
-- Table structure for table `open_report`
--

CREATE TABLE `open_report` (
  `open_id` int(111) NOT NULL,
  `rid` varchar(100) NOT NULL,
  `otb1` varchar(111) NOT NULL,
  `otb2` varchar(111) NOT NULL,
  `otb3` varchar(111) NOT NULL,
  `course_co` varchar(111) NOT NULL,
  `module_co` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `open_report`
--

INSERT INTO `open_report` (`open_id`, `rid`, `otb1`, `otb2`, `otb3`, `course_co`, `module_co`) VALUES
(4, '3', '2', '2', '2', '2', '2'),
(5, '6', '1', '1', '1', '1', '1'),
(6, '7', '1', '1', '1', '1', '1');

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
  `added_on` datetime NOT NULL,
  `nba` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`report_id`, `report_name`, `branch`, `course_code`, `course_name`, `semester`, `year`, `created_by`, `added_on`, `nba`) VALUES
(1, 'Test Report', 'CSE', '', '', 7, '2019-2020', 'Test_user', '2020-05-04 18:27:12', ''),
(2, 'Test Report 2', 'CSE', '', '', 7, '2019-2020', 'Test_user', '2020-05-04 18:33:43', ''),
(3, 'Test Report 3', 'IT', '', '', 7, '2019-2020', 'Test_user', '2020-05-04 18:34:10', ''),
(4, 'Test Report 4', 'CSE', '', '', 7, '2019-2020', 'Test_user', '2020-05-04 18:36:58', ''),
(5, 'Test Report 5', 'CSE', 'T1', 'Test', 3, '2018-2019', 'Test_user', '2020-05-05 01:25:55', 'T'),
(6, 'Test Report', 'ECE', 'T1', 'Test', 7, '2019-2020', 'Test_user', '2020-05-05 04:46:47', 'X'),
(7, 'Test Report 21', 'IT', 'T1', 'Test', 7, '2019-2020', '45', '2020-05-05 13:58:01', 'T');

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `row_id` int(11) NOT NULL,
  `rid` int(100) NOT NULL,
  `c_no` varchar(111) NOT NULL,
  `c_des` varchar(111) NOT NULL,
  `cog_level` varchar(111) NOT NULL,
  `direct_assesment` varchar(1000) NOT NULL,
  `indirect_assesment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`row_id`, `rid`, `c_no`, `c_des`, `cog_level`, `direct_assesment`, `indirect_assesment`) VALUES
(1, 3, '1', '2', '3', ' w   ', ' wq   '),
(2, 3, '1', '1', '1', '2 ', ' qw   '),
(3, 3, '1', '1', '1', ' w   ', ' w   '),
(4, 3, '1', '1', '1', '  w  ', '  w  '),
(5, 3, '1', '1', '1', '  w  ', '  w  '),
(6, 3, '1', '1', '1', '  w  ', '  w  '),
(7, 3, '1', '11', '1', '  w  ', '  w  '),
(15, 6, '1', '1', '1', '', ''),
(16, 7, '1', '1', '1', ' 1', ' 1');

-- --------------------------------------------------------

--
-- Table structure for table `table2`
--

CREATE TABLE `table2` (
  `row_id` int(100) NOT NULL,
  `rid` int(111) NOT NULL,
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
-- Dumping data for table `table2`
--

INSERT INTO `table2` (`row_id`, `rid`, `cos`, `PO1`, `PO2`, `PO3`, `PO4`, `PO5`, `PO6`, `PO7`, `PO8`, `PO9`, `PO10`, `PO11`, `PO12`, `PSO1`, `PSO2`) VALUES
(7, 3, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(8, 3, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(9, 3, '6', '6', '6', '6', '6', '6', '6', '6', '6', '6', '6', '6', '6', '6', '6'),
(10, 3, '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2'),
(13, 6, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(14, 7, '1', '1', '1', '1', '1', '1', '1', '1', '1', '11', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `table3`
--

CREATE TABLE `table3` (
  `row_id` int(100) NOT NULL,
  `rid` int(100) NOT NULL,
  `c1` varchar(1000) NOT NULL,
  `c2` varchar(1111) NOT NULL,
  `c3` varchar(1111) NOT NULL,
  `c4` varchar(1111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table3`
--

INSERT INTO `table3` (`row_id`, `rid`, `c1`, `c2`, `c3`, `c4`) VALUES
(1, 3, '1', '1', '1', '1'),
(2, 3, '1', '1', '1', '1'),
(3, 3, '1', '1', '1', '1'),
(4, 3, '1', '1', '1', '1'),
(8, 3, '1', '1', '1', '1'),
(9, 3, '1', '1', '1', '1'),
(10, 3, '', '2', '2', '2'),
(11, 6, '1', '1', '1', '1'),
(12, 7, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `table5`
--

CREATE TABLE `table5` (
  `row_id` int(100) NOT NULL,
  `rid` int(100) NOT NULL,
  `c1` varchar(1111) NOT NULL,
  `c2` varchar(1111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table5`
--

INSERT INTO `table5` (`row_id`, `rid`, `c1`, `c2`) VALUES
(1, 3, '1', '1'),
(2, 3, '1', '1'),
(7, 3, '2', '2'),
(9, 6, '1', '1'),
(10, 7, '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `table6`
--

CREATE TABLE `table6` (
  `row_id` int(100) NOT NULL,
  `rid` int(100) NOT NULL,
  `c1` varchar(1111) NOT NULL,
  `c2` varchar(1111) NOT NULL,
  `c3` varchar(1111) NOT NULL,
  `c4` varchar(1111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table6`
--

INSERT INTO `table6` (`row_id`, `rid`, `c1`, `c2`, `c3`, `c4`) VALUES
(1, 3, '1', '1', '1', '1'),
(2, 3, '1', '1', '1', '1'),
(9, 6, '1', '1', '1', '1'),
(10, 7, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `table7`
--

CREATE TABLE `table7` (
  `row_id` int(111) NOT NULL,
  `rid` int(100) NOT NULL,
  `sno` int(11) NOT NULL,
  `mname` varchar(1000) NOT NULL,
  `mdesc` varchar(1111) NOT NULL,
  `mnum` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table7`
--

INSERT INTO `table7` (`row_id`, `rid`, `sno`, `mname`, `mdesc`, `mnum`) VALUES
(10, 6, 1, '2', '3', '4'),
(11, 6, 1, '2', '3', '4'),
(14, 3, 1, '1', '1', '1'),
(15, 7, 1, '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `table8`
--

CREATE TABLE `table8` (
  `row_id` int(111) NOT NULL,
  `rid` int(100) NOT NULL,
  `comp` varchar(1111) NOT NULL,
  `maxmarks` varchar(1111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table9`
--

CREATE TABLE `table9` (
  `row_id` int(111) NOT NULL,
  `sno` int(11) NOT NULL,
  `rid` int(100) NOT NULL,
  `material` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table9`
--

INSERT INTO `table9` (`row_id`, `sno`, `rid`, `material`) VALUES
(3, 1, 6, '1'),
(4, 1, 6, '1'),
(7, 1, 3, '1'),
(8, 1, 7, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `closing_report`
--
ALTER TABLE `closing_report`
  ADD PRIMARY KEY (`clsoe_id`);

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
-- Indexes for table `table3`
--
ALTER TABLE `table3`
  ADD PRIMARY KEY (`row_id`);

--
-- Indexes for table `table5`
--
ALTER TABLE `table5`
  ADD PRIMARY KEY (`row_id`);

--
-- Indexes for table `table6`
--
ALTER TABLE `table6`
  ADD PRIMARY KEY (`row_id`);

--
-- Indexes for table `table7`
--
ALTER TABLE `table7`
  ADD PRIMARY KEY (`row_id`);

--
-- Indexes for table `table8`
--
ALTER TABLE `table8`
  ADD PRIMARY KEY (`row_id`);

--
-- Indexes for table `table9`
--
ALTER TABLE `table9`
  ADD PRIMARY KEY (`row_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `closing_report`
--
ALTER TABLE `closing_report`
  MODIFY `clsoe_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `exit_report`
--
ALTER TABLE `exit_report`
  MODIFY `exit_id` int(111) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_usertable`
--
ALTER TABLE `m_usertable`
  MODIFY `user_sys_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `open_report`
--
ALTER TABLE `open_report`
  MODIFY `open_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `table1`
--
ALTER TABLE `table1`
  MODIFY `row_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `table2`
--
ALTER TABLE `table2`
  MODIFY `row_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `table3`
--
ALTER TABLE `table3`
  MODIFY `row_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `table5`
--
ALTER TABLE `table5`
  MODIFY `row_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `table6`
--
ALTER TABLE `table6`
  MODIFY `row_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `table7`
--
ALTER TABLE `table7`
  MODIFY `row_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `table8`
--
ALTER TABLE `table8`
  MODIFY `row_id` int(111) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table9`
--
ALTER TABLE `table9`
  MODIFY `row_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
