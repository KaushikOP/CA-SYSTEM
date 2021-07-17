-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2021 at 05:08 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `casystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill_details`
--

CREATE TABLE `bill_details` (
  `bill_details_id` int(11) NOT NULL,
  `bill_master_id` varchar(15) CHARACTER SET latin1 NOT NULL,
  `firm_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `taxable_amount` double NOT NULL,
  `tax_amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill_details`
--

INSERT INTO `bill_details` (`bill_details_id`, `bill_master_id`, `firm_id`, `service_id`, `taxable_amount`, `tax_amount`) VALUES
(1, '2021-22/0', 3, 4, 1000, 1180),
(2, '2021-22/0', 3, 1, 2000, 2360),
(3, '2021-22/1', 3, 4, 2000, 2360),
(4, '2021-22/1', 3, 1, 3029, 3574.22),
(5, '2021-22/1', 3, 2, 450, 531),
(6, '2021-22/0', 1, 9, 1000, 0),
(7, '2021-22/0', 1, 10, 2000, 0),
(8, '2021-22/1', 1, 10, 1000, 0),
(9, '2021-22/1', 1, 8, 2092, 0),
(10, '2021-22/2', 3, 5, 1209, 1426.62),
(11, '2021-22/2', 3, 2, 3448, 4068.64);

-- --------------------------------------------------------

--
-- Table structure for table `bill_master`
--

CREATE TABLE `bill_master` (
  `invoice_no` varchar(15) NOT NULL,
  `firm_id` int(11) NOT NULL,
  `invoice_date` date NOT NULL,
  `client_id` int(11) NOT NULL,
  `total_amount` double NOT NULL,
  `amount_received` int(11) DEFAULT NULL,
  `receipt_date` date DEFAULT NULL,
  `payment_mode` text DEFAULT NULL,
  `cheque_no` text DEFAULT NULL,
  `amount_pending` text DEFAULT NULL,
  `tds` double DEFAULT NULL,
  `state_code` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill_master`
--

INSERT INTO `bill_master` (`invoice_no`, `firm_id`, `invoice_date`, `client_id`, `total_amount`, `amount_received`, `receipt_date`, `payment_mode`, `cheque_no`, `amount_pending`, `tds`, `state_code`) VALUES
('2021-22/0', 1, '2021-07-01', 3, 3000, 0, '0000-00-00', '0', '0', '0', 0, NULL),
('2021-22/0', 3, '2021-07-02', 1, 3540, 0, '0000-00-00', '0', '0', '0', 0, 27),
('2021-22/1', 1, '2021-07-01', 1, 3092, 0, '0000-00-00', '0', '0', '0', 0, NULL),
('2021-22/1', 3, '2021-04-09', 4, 6465.22, 0, '0000-00-00', '0', '0', '0', 0, 24),
('2021-22/2', 3, '2021-03-16', 4, 5495.26, 0, '0000-00-00', '0', '0', '0', 0, 24);

-- --------------------------------------------------------

--
-- Table structure for table `clientlist`
--

CREATE TABLE `clientlist` (
  `clientId` int(11) NOT NULL,
  `clientName` text NOT NULL,
  `GST` varchar(15) NOT NULL,
  `clientAddress` longtext DEFAULT NULL,
  `mobile_no` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientlist`
--

INSERT INTO `clientlist` (`clientId`, `clientName`, `GST`, `clientAddress`, `mobile_no`) VALUES
(1, 'REAL LAMINATES', '27AAFFR1902F1ZJ', 'Plot No. 13, New Timber Market, Bhawani Peth, Pune 411 002.', '1234567795'),
(2, 'B. U. BHANDARI VAASTU', '27AAHFB1197Q1ZV', 'Gandhinagar', ''),
(3, 'B. U. BHANDARI ERANDWANA (AOP)', '27AACAB9561G1ZN', '', '9876543211'),
(4, 'SANKET IMPEX\r\n', '27AOIPB9142E1Z4', '1ST FLOOR, SAMRAT HOUSE, 39 - D, 2/6, SHANKARSETH ROAD PUNE - 411037\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `firmname`
--

CREATE TABLE `firmname` (
  `firmNameId` int(11) NOT NULL,
  `name` text NOT NULL,
  `shortForm` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `firmname`
--

INSERT INTO `firmname` (`firmNameId`, `name`, `shortForm`) VALUES
(1, 'jinal Waghela & Associates', 'JWA'),
(2, 'MoneySphere Solutions', 'MSP'),
(3, 'H. Mistry & Associates', 'HMA');

-- --------------------------------------------------------

--
-- Table structure for table `gst_state_code_list`
--

CREATE TABLE `gst_state_code_list` (
  `state_code` int(11) NOT NULL,
  `state_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gst_state_code_list`
--

INSERT INTO `gst_state_code_list` (`state_code`, `state_name`) VALUES
(1, 'JAMMU AND KASHMIR'),
(2, 'HIMACHAL PRADESH'),
(3, 'PUNJAB'),
(4, 'CHANDIGARH'),
(5, 'UTTARAKHAND'),
(6, 'HARYANA'),
(7, 'DELHI'),
(8, 'RAJASTHAN'),
(9, 'UTTAR PRADESH'),
(10, 'BIHAR'),
(11, 'SIKKIM'),
(12, 'ARUNACHAL PRADESH'),
(13, 'NAGALAND'),
(14, 'MANIPUR'),
(15, 'MIZORAM'),
(16, 'TRIPURA'),
(17, 'MEGHALAYA'),
(18, 'ASSAM'),
(19, 'WEST BENGAL'),
(20, 'JHARKHAND'),
(21, 'ODISHA'),
(22, 'CHATTISGARH'),
(23, 'MADHYA PRADESH'),
(24, 'GUJARAT'),
(25, 'HARYANA'),
(26, 'DADRA AND NAGAR HAVELI AND DAMAN AND DIU'),
(27, 'MAHARASHTRA'),
(29, 'KARNATAKA'),
(30, 'GOA'),
(31, 'LAKSHADWEEP'),
(32, 'KERALA'),
(33, 'TAMIL NADU'),
(34, 'PUDUCHERRY'),
(35, 'ANDAMAN AND NICOBAR ISLANDS'),
(36, 'TELANGANA'),
(37, 'ANDHRA PRADESH'),
(38, 'LADAKH ');

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
(1, 'Legal advisory and representation services concerning other fields of law', 'Legal advisory', 998212, 3),
(2, 'Legal documentation and certification services concerning other documents\r\n', 'Certification Fees\r\n', 998214, 3),
(3, 'Other legal services\r\n', 'Other legal services\r\n', 998216, 3),
(4, 'Financial auditing services\r\n', 'Audit Fees\r\n', 998221, 3),
(5, 'Accounting and bookkeeping service\r\n', 'Accounting and Bookkeeping\r\n', 998222, 3),
(6, 'Audit Fees for JWA', 'Audit Fees', 234, 1),
(7, '', 'E - TDS RETURN FILING FEES\r\n', 0, 1),
(8, '', 'INCOME TAX RETURN FILING FEES\r\n', 0, 1),
(9, '', 'ACCOUNTING/BOOK KEEPING FEES\r\n', 0, 1),
(10, '', 'GST RETURN FILING FEES\r\n', 0, 1),
(11, 'Test Service', 'This is a test service', 123456, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill_details`
--
ALTER TABLE `bill_details`
  ADD PRIMARY KEY (`bill_details_id`),
  ADD KEY `service_id` (`service_id`),
  ADD KEY `firm_id` (`firm_id`),
  ADD KEY `bill_master_id` (`bill_master_id`);

--
-- Indexes for table `bill_master`
--
ALTER TABLE `bill_master`
  ADD PRIMARY KEY (`invoice_no`,`firm_id`),
  ADD KEY `firm_id` (`firm_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `bill_master_ibfk_3` (`state_code`);

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
-- Indexes for table `gst_state_code_list`
--
ALTER TABLE `gst_state_code_list`
  ADD PRIMARY KEY (`state_code`);

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
-- AUTO_INCREMENT for table `bill_details`
--
ALTER TABLE `bill_details`
  MODIFY `bill_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `clientlist`
--
ALTER TABLE `clientlist`
  MODIFY `clientId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `firmname`
--
ALTER TABLE `firmname`
  MODIFY `firmNameId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gst_state_code_list`
--
ALTER TABLE `gst_state_code_list`
  MODIFY `state_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `serviceId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill_details`
--
ALTER TABLE `bill_details`
  ADD CONSTRAINT `bill_details_ibfk_2` FOREIGN KEY (`service_id`) REFERENCES `services` (`serviceId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bill_details_ibfk_3` FOREIGN KEY (`firm_id`) REFERENCES `firmname` (`firmNameId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bill_details_ibfk_4` FOREIGN KEY (`bill_master_id`) REFERENCES `bill_master` (`invoice_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bill_master`
--
ALTER TABLE `bill_master`
  ADD CONSTRAINT `bill_master_ibfk_1` FOREIGN KEY (`firm_id`) REFERENCES `firmname` (`firmNameId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bill_master_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `clientlist` (`clientId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bill_master_ibfk_3` FOREIGN KEY (`state_code`) REFERENCES `gst_state_code_list` (`state_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `firmnameForeignkey` FOREIGN KEY (`firmNameId`) REFERENCES `firmname` (`firmNameId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
