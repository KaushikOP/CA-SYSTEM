-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2021 at 04:32 PM
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
  `tax_amount` double NOT NULL,
  `service_note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill_details`
--

INSERT INTO `bill_details` (`bill_details_id`, `bill_master_id`, `firm_id`, `service_id`, `taxable_amount`, `tax_amount`, `service_note`) VALUES
(2, '2021-22/1', 3, 4, 3500, 4130, 'GSTR 9- FY 2019-20'),
(3, '2021-22/3', 3, 2, 3500, 4130, 'TCHFL- FY 2019-20'),
(4, '2021-22/4', 3, 4, 3000, 3540, 'Audit & I.T. Filing AY 2020-21'),
(5, '2021-22/4', 3, 3, 2500, 2950, ''),
(6, '2021-22/5', 3, 4, 8000, 9440, ''),
(7, '2020-21/1', 3, 4, 10000, 11800, 'AY 2020-21'),
(8, '2020-21/2', 3, 3, 12500, 14750, 'Renewal of 12AA & 80G Registration'),
(9, '2020-21/3', 3, 4, 15000, 17700, 'Audit -AY 2020-21'),
(10, '2020-21/1', 2, 10, 9000, 0, 'Jan 20 - Mar 20'),
(11, '2020-21/1', 2, 9, 15000, 0, 'Jan 20 - Mar 20'),
(12, '2020-21/2', 2, 14, 6500, 0, 'Surendra Khule'),
(13, '2020-21/4', 3, 4, 55000, 64900, ''),
(14, '2020-21/3', 2, 14, 30000, 0, ''),
(15, '2020-21/1', 1, 15, 13000, 0, ''),
(16, '2020-21/2', 1, 10, 9000, 0, 'Q2 FY 2020-21'),
(17, '2020-21/2', 1, 9, 15000, 0, 'Q2 FY 2020-21'),
(18, '2020-21/2', 1, 16, 4000, 0, 'FY 2020-21'),
(19, '2020-21/3', 1, 17, 2000, 0, ''),
(20, '2020-21/4', 1, 10, 7500, 0, ' Swavin Business Consultants Pvt Ltd'),
(21, '2020-21/5', 1, 10, 10000, 0, 'First Insight FY 2019-20'),
(22, '2020-21/6', 1, 10, 10000, 0, 'First Insight FY 2019-20 (Cash) Total Bill Rs. 20000'),
(23, '2020-21/4', 2, 18, 6000, 0, '3 days'),
(24, '2020-21/4', 2, 10, 15000, 0, 'Q2 - First Insight'),
(25, '2020-21/7', 1, 9, 16500, 0, 'Q4 -FY 2019-20'),
(26, '2020-21/7', 1, 10, 4500, 0, 'Q4 -FY 2019-20'),
(27, '2020-21/7', 1, 7, 1500, 0, 'Q4 -FY 2019-20'),
(28, '2020-21/5', 2, 7, 1500, 0, 'Q4 -FY 2019-20'),
(29, '2020-21/6', 2, 9, 15000, 0, '31.03.20'),
(30, '2020-21/6', 2, 14, 15000, 0, 'Certification & Submissions');

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
('2020-21/1', 1, '2021-01-05', 18, 13000, 0, '0000-00-00', '0', '0', '0', 0, NULL),
('2020-21/1', 2, '2020-04-26', 15, 24000, 0, '0000-00-00', '0', '0', '0', 0, NULL),
('2020-21/1', 3, '2021-01-01', 13, 11800, 0, '0000-00-00', '0', '0', '0', 0, 27),
('2020-21/2', 1, '2020-11-02', 15, 28000, 0, '0000-00-00', '0', '0', '0', 0, NULL),
('2020-21/2', 2, '2020-04-26', 17, 6500, 0, '0000-00-00', '0', '0', '0', 0, NULL),
('2020-21/2', 3, '2021-01-04', 10, 14750, 0, '0000-00-00', '0', '0', '0', 0, 27),
('2020-21/3', 1, '2020-12-01', 17, 2000, 0, '0000-00-00', '0', '0', '0', 0, NULL),
('2020-21/3', 2, '2020-09-17', 18, 30000, 0, '0000-00-00', '0', '0', '0', 0, NULL),
('2020-21/3', 3, '2021-01-09', 14, 17700, 0, '0000-00-00', '0', '0', '0', 0, 27),
('2020-21/4', 1, '2020-10-26', 19, 7500, 0, '0000-00-00', '0', '0', '0', 0, NULL),
('2020-21/4', 2, '2020-09-04', 19, 21000, 0, '0000-00-00', '0', '0', '0', 0, NULL),
('2020-21/4', 3, '2020-09-01', 18, 64900, 0, '0000-00-00', '0', '0', '0', 0, 27),
('2020-21/5', 1, '2020-10-26', 19, 10000, 0, '0000-00-00', '0', '0', '0', 0, NULL),
('2020-21/5', 2, '2020-10-09', 20, 1500, 0, '0000-00-00', '0', '0', '0', 0, NULL),
('2020-21/6', 1, '2020-10-26', 19, 10000, 0, '0000-00-00', '0', '0', '0', 0, NULL),
('2020-21/6', 2, '2020-10-09', 20, 30000, 0, '0000-00-00', '0', '0', '0', 0, NULL),
('2020-21/7', 1, '2020-07-13', 11, 22500, 0, '0000-00-00', '0', '0', '0', 0, NULL),
('2021-22/1', 3, '2021-03-24', 8, 4130, 0, '0000-00-00', '0', '0', '0', 0, 27),
('2021-22/2', 3, '2021-03-24', 9, 0, 0, '0000-00-00', '0', '0', '0', 0, 4),
('2021-22/3', 3, '2020-09-29', 10, 4130, 0, '0000-00-00', '0', '0', '0', 0, 27),
('2021-22/4', 3, '2020-10-26', 11, 6490, 0, '0000-00-00', '0', '0', '0', 0, 27),
('2021-22/5', 3, '2020-12-18', 12, 9440, 0, '0000-00-00', '0', '0', '0', 0, 27);

-- --------------------------------------------------------

--
-- Table structure for table `clientlist`
--

CREATE TABLE `clientlist` (
  `clientId` int(11) NOT NULL,
  `clientName` text NOT NULL,
  `GST` varchar(15) DEFAULT NULL,
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
(4, 'SANKET IMPEX\r\n', '27AOIPB9142E1Z4', '1ST FLOOR, SAMRAT HOUSE, 39 - D, 2/6, SHANKARSETH ROAD PUNE - 411037\r\n', ''),
(8, 'Royal Crown Laminates', '27AAVFR9464L1Z1', '5 Timber Market, Bhavani Peth, Near Association Building, Pune-411002', ''),
(9, 'Rajiv Traders', '27ADYPG5964A1Z8', 'Market Yard, Pune 411037', ''),
(10, 'Tara Mobile Creches', '', '1st Floor, Parvati Sadan, Lane 14, After Pune International School, Tingrenagar, Pune 411015', ''),
(11, 'Rosewood Laminates', '27ABAFR2195J1ZY', 'Plot No. 116, New Timber Market, Pune - 411042', ''),
(12, 'G C Electric Company', '27AABFG1103D1Z9', '458, Budhwar Peth, Pune 411002', ''),
(13, 'Autuskey Technology Development Pvt Ltd', '27AANCA5372R1ZT', '01, Unit No F1, Phoenix Market City, East Court, Wadgaon Sheri, Pune- 411058', ''),
(14, 'Mr. Sunil Desadla', '27AAVPD3373J1ZA', 'Desadla House, Plot No. A-55, Puru Co-operative Housing Society Ltd., New Airport Road, Lohegaon', ''),
(15, 'Guiding Light Consultants', '', 'C 501, Yin Yang, Vitthal Nagar, Kharadi, Pune-411014', ''),
(16, 'Anila Nair (iGrowMe Consultants)', '', 'Flat No. B 701, Lourdes Citadel, Bapusaheb Bagwe Road, Navagaon, Dahisar West, Mumbai-400068', ''),
(17, 'Bhargav Pattani', '', '43, 8th Floor, Nirmal Park, A wing, Satara Road, Opp. Aero Honda Showroom, Pune-411043', ''),
(18, 'Bora Agro Foods', '27AABFB4517E1ZW', '1st Floor, Samrat House, 39-D, 2/6, Shankar Sheth Road, Pune 411037', ''),
(19, 'M B Associates', '', 'Pune', ''),
(20, 'Kainos Global Foundation', '', 'Flat No 4/3, Champaratna Nagari, Uday Baug, Pune 411013', '');

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
  `serviceDescription` longtext DEFAULT NULL,
  `serviceName` longtext NOT NULL,
  `SAC` int(11) NOT NULL,
  `firmNameId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`serviceId`, `serviceDescription`, `serviceName`, `SAC`, `firmNameId`) VALUES
(1, 'Legal advisory and representation services concerning other fields of law', 'Legal advisory', 998212, 3),
(2, 'Legal documentation and certification services concerning other documents\r\n', 'Certification Fees\r\n', 998214, 3),
(3, 'Other legal services\r\n', 'Other legal services\r\n', 998216, 3),
(4, 'Financial auditing services\r\n', 'Audit Fees\r\n', 998221, 3),
(5, 'Accounting and bookkeeping service\r\n', 'Accounting and Bookkeeping\r\n', 998222, 3),
(6, 'Audit Fees', 'Audit Fees for JWA', 234, 1),
(7, '', 'E - TDS RETURN FILING FEES\r\n', 0, 1),
(8, '', 'INCOME TAX RETURN FILING FEES\r\n', 0, 1),
(9, '', 'ACCOUNTING/BOOK KEEPING FEES\r\n', 0, 1),
(10, '', 'GST RETURN FILING FEES\r\n', 0, 1),
(11, 'Test Service', 'This is a test service', 123456, 2),
(12, NULL, 'Other Similar Services', 998224, 3),
(13, NULL, 'GST Registration', 0, 2),
(14, '', 'Professional Fees', 0, 2),
(15, '', 'Retainership Fees', 0, 1),
(16, '', 'Application of TRC', 0, 1),
(17, '', 'Consultation Fees', 0, 1),
(18, '', 'Audit Supervision', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `userId` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `userId`, `password`) VALUES
(1, 'casystem', '3f427a1759d4f648a714065d7e250e99');

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill_details`
--
ALTER TABLE `bill_details`
  MODIFY `bill_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `clientlist`
--
ALTER TABLE `clientlist`
  MODIFY `clientId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
  MODIFY `serviceId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
