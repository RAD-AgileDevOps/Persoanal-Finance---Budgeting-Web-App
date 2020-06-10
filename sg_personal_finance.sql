-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jun 10, 2020 at 07:59 AM
-- Server version: 5.7.28
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sg_personal_finance`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sg_expenses`
--

DROP TABLE IF EXISTS `tbl_sg_expenses`;
CREATE TABLE IF NOT EXISTS `tbl_sg_expenses` (
  `logid` int(11) NOT NULL AUTO_INCREMENT,
  `budget_category` varchar(200) DEFAULT NULL,
  `date_incurred` date DEFAULT NULL COMMENT 'Invoice date or closet date recorded',
  `description` longtext COMMENT 'a brief overview of th  product/service bought',
  `establishment_exp_incurred` varchar(225) DEFAULT NULL COMMENT 'The business/individual item purchased product/service from',
  `purchase_cost` decimal(10,0) DEFAULT NULL,
  `method_of_payment` enum('Cash','cheque','credit card','WiPay','Internet Banking') DEFAULT NULL COMMENT 'Cost of item/service as per invoice or relevant source document',
  `bank_name` varchar(145) DEFAULT NULL,
  `card_issuer` varchar(45) DEFAULT NULL COMMENT 'The name of credit/debit card used',
  PRIMARY KEY (`logid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='business/pesonal expenses of Shereez Grant ';

--
-- Dumping data for table `tbl_sg_expenses`
--

INSERT INTO `tbl_sg_expenses` (`logid`, `budget_category`, `date_incurred`, `description`, `establishment_exp_incurred`, `purchase_cost`, `method_of_payment`, `bank_name`, `card_issuer`) VALUES
(1, 'Education', '2020-05-01', NULL, 'Foyles Bookshop', '1257', 'Cash', '', 'RBC'),
(2, 'Travelling Expenses', '2020-02-25', NULL, 'CAL ', '1250', 'credit card', 'Scotia Bank', 'VISA'),
(3, 'Grocery', '2020-03-31', NULL, 'misc items', '556', 'Cash', NULL, NULL),
(4, 'Education', '2020-02-28', NULL, 'Foyles Bookshop', '1257', 'Cash', 'RBS', 'RBC'),
(5, 'Education', '2020-02-28', NULL, 'Foyles Bookshop', '1257', 'Cash', 'RBS', 'RBC');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sg_scratch_notes`
--

DROP TABLE IF EXISTS `tbl_sg_scratch_notes`;
CREATE TABLE IF NOT EXISTS `tbl_sg_scratch_notes` (
  `logid` int(11) NOT NULL AUTO_INCREMENT,
  `fk_finance_logid` int(11) DEFAULT NULL,
  `description` longtext,
  PRIMARY KEY (`logid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sg_scratch_notes`
--

INSERT INTO `tbl_sg_scratch_notes` (`logid`, `fk_finance_logid`, `description`) VALUES
(1, 3, 'hello world'),
(2, 2, 'I love SQL'),
(3, 2, 'New World Order'),
(4, 5, 'I am not in main table'),
(5, NULL, 'Scratch pad for any ad-hoc finance notes'),
(6, NULL, 'Scratch pad for any ad-hoc finance notes');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
