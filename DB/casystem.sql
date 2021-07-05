-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2021 at 09:09 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dmsca`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientlist`
--

CREATE TABLE `clientlist` (
  `clientId` int(11) NOT NULL,
  `clientName` text NOT NULL,
  `GST` varchar(15) NOT NULL,
  `clientAddress` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientlist`
--

INSERT INTO `clientlist` (`clientId`, `clientName`, `GST`, `clientAddress`) VALUES
(1, 'REAL LAMINATES\r\n\r\n', '27AAFFR1902F1ZJ', 'Plot No. 13, New Timber Market, Bhawani Peth, Pune 411 002.\r\n'),
(2, 'B. U. BHANDARI VAASTU\r\n', '27AAHFB1197Q1ZV', ''),
(3, 'B. U. BHANDARI ERANDWANA (AOP)\r\n', '27AACAB9561G1ZN', ''),
(4, 'SANKET IMPEX\r\n', '27AOIPB9142E1Z4', '1ST FLOOR, SAMRAT HOUSE, 39 - D, 2/6, SHANKARSETH ROAD PUNE - 411037\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `firmname`
--

CREATE TABLE `firmname` (
  `firmNameId` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `firmname`
--

INSERT INTO `firmname` (`firmNameId`, `name`) VALUES
(1, 'jinal Waghela & Associates'),
(2, 'MoneySphere Solutions'),
(3, 'H. Mistry & Associates');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `serviceId` int(11) NOT NULL,
  `serviceName` longtext DEFAULT NULL,
  `serviceDescription` longtext NOT NULL,
  `SAC` int(11) NOT NULL,
  `firmNameId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`serviceId`, `serviceName`, `serviceDescription`, `SAC`, `firmNameId`) VALUES
(1, 'Legal advisory and representation services concerning other fields of law\r\n', 'Legal advisory\r\n', 998212, 3),
(2, 'Legal documentation and certification services concerning other documents\r\n', 'Certification Fees\r\n', 998214, 3),
(3, 'Other legal services\r\n', 'Other legal services\r\n', 998216, 3),
(4, 'Financial auditing services\r\n', 'Audit Fees\r\n', 998221, 3),
(5, 'Accounting and bookkeeping service\r\n', 'Accounting and Bookkeeping\r\n', 998222, 3),
(6, '', 'Audit Fees', 0, 1),
(7, '', 'E - TDS RETURN FILING FEES\r\n', 0, 1),
(8, '', 'INCOME TAX RETURN FILING FEES\r\n', 0, 1),
(9, '', 'ACCOUNTING/BOOK KEEPING FEES\r\n', 0, 1),
(10, '', 'GST RETURN FILING FEES\r\n', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientlist`
--
ALTER TABLE `clientlist`
  ADD PRIMARY KEY (`clientId`);

--
-- Indexes for table `firmname`
--
ALTER TABLE `firmname`
  ADD PRIMARY KEY (`firmNameId`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`serviceId`),
  ADD KEY `firmnameForeignkey` (`firmNameId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientlist`
--
ALTER TABLE `clientlist`
  MODIFY `clientId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `firmname`
--
ALTER TABLE `firmname`
  MODIFY `firmNameId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `serviceId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `firmnameForeignkey` FOREIGN KEY (`firmNameId`) REFERENCES `firmname` (`firmNameId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
