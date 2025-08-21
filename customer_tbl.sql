-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2025 at 09:14 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `invoice_mgmt_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_tbl`
--

CREATE TABLE `customer_tbl` (
  `cust_id` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email_id` varchar(100) DEFAULT NULL,
  `gstin/uin` varchar(100) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `vat` varchar(100) DEFAULT NULL,
  `trn` varchar(100) DEFAULT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_tbl`
--

INSERT INTO `customer_tbl` (`cust_id`, `company_name`, `address`, `email_id`, `gstin/uin`, `phone`, `vat`, `trn`, `country`) VALUES
(1, 'TRANSWORLD TECHNOLOGIES Ltd.', 'C-3, /8 Rakshalekha, Ln No. 6 Koregoan Park, Pune 411001', ' vpuri@poshsmetal.com ', NULL, NULL, NULL, NULL, 'India'),
(2, 'MTech Engineering', 'Flat No 17, S. No. 231/1, BLDG-A Wing, Hari Om Apts, Bhosari, Pune - 411039', '', '27AGYPT8938L1ZY', 0, '', '', 'India'),
(3, 'Precitech Industries', 'Gat No. 2001, Chakan Mahalunge Chakan Road, Pune - 410501', 'rajesh_precitech@yahoo.co.in', '27ABEPH8484J1Z7', 0, '', '', 'India'),
(4, 'DPCP Enterprises', 'Industrial Area, Plot No. 161 Phase II, Panchkula, Haryana 134112', '', '06BFHPK4869Q1ZL', 0, '', '', 'India'),
(5, 'Ramasa Cranes Pvt.Ltd.', ' Gat no-85, Dehu bypass road, Vitthal Nagar, Dehu, Tal-Haveli, Pune- 412109', '', '27AAHCR7921F1Z8', 0, '', '', 'India'),
(6, 'Varun Engineers', 'Plot No. 143 / A, Sector - 7, PCNTDA, Bhosari, Pune - 411026', 'varun.engineers@yahoo.co.in', '27AIXPG2975P1Z6', 0, '', '', 'India');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_tbl`
--
ALTER TABLE `customer_tbl`
  ADD PRIMARY KEY (`cust_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_tbl`
--
ALTER TABLE `customer_tbl`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
