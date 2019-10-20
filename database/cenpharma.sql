-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 20, 2019 at 04:07 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cenpharma`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `ID` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Password` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Email` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Mobile` bigint(10) NOT NULL,
  `Gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Dob` date NOT NULL,
  `PharmId` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `AddressLine1` longtext COLLATE utf8_unicode_ci NOT NULL,
  `AddressLine2` longtext COLLATE utf8_unicode_ci,
  `City` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Pincode` int(10) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `PharmId` (`PharmId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`ID`, `Name`, `Password`, `Email`, `Mobile`, `Gender`, `Dob`, `PharmId`, `AddressLine1`, `AddressLine2`, `City`, `Pincode`) VALUES
('CPA1000', 'Guransh Dua', 'e807f1fcf82d132f9bb018ca6738a19f', 'guransh.dua4@gmail.com', 9876543210, 'Male', '1999-08-26', 'CP1000', 'l-605', 'VIT', 'Vellore', 632014);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `ID` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `CartId` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `MedId` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `PharmId` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Quantity` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `MedId` (`MedId`),
  KEY `PharmId` (`PharmId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medbrands`
--

DROP TABLE IF EXISTS `medbrands`;
CREATE TABLE IF NOT EXISTS `medbrands` (
  `ID` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Address` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `format` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Name` (`Name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medicinecategory`
--

DROP TABLE IF EXISTS `medicinecategory`;
CREATE TABLE IF NOT EXISTS `medicinecategory` (
  `ID` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Category` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Featured` tinyint(1) NOT NULL,
  `Format` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Category` (`Category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `medicinecategory`
--

INSERT INTO `medicinecategory` (`ID`, `Category`, `Featured`, `Format`) VALUES
('CPC1689', 'Ayurveda', 1, 'png'),
('CPC3410', 'Homeopathy', 1, 'png'),
('CPC3693', 'Wellness', 1, 'png'),
('CPC8566', 'Allopathy', 1, 'png');

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

DROP TABLE IF EXISTS `medicines`;
CREATE TABLE IF NOT EXISTS `medicines` (
  `ID` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Brand` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Salts` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Disease` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Barcode` longtext COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Featured` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `Id` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `UserId` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Amount` int(10) NOT NULL,
  `Status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacies`
--

DROP TABLE IF EXISTS `pharmacies`;
CREATE TABLE IF NOT EXISTS `pharmacies` (
  `ID` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Email` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `AddressLine1` longtext COLLATE utf8_unicode_ci NOT NULL,
  `AddressLine2` longtext COLLATE utf8_unicode_ci,
  `City` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Pincode` int(10) NOT NULL,
  `DisplayAddress` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `format` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pharmacies`
--

INSERT INTO `pharmacies` (`ID`, `Name`, `Email`, `Mobile`, `AddressLine1`, `AddressLine2`, `City`, `Pincode`, `DisplayAddress`, `Description`, `format`) VALUES
('CP1000', 'CenPharma', 'duatechnologies@gmail.com', 9818984705, 'Technology Tower', 'VIT', 'Vellore', 632014, 'VIT VELLORE', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'png');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

DROP TABLE IF EXISTS `stock`;
CREATE TABLE IF NOT EXISTS `stock` (
  `ID` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `MedID` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `PharmID` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Stock` int(10) NOT NULL,
  `Mrp` bigint(10) NOT NULL,
  `Expiry` date NOT NULL,
  `Discount` int(4) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `PharmID` (`PharmID`),
  KEY `MedID` (`MedID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Address_Line1` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Address_Line2` longtext COLLATE utf8_unicode_ci,
  `City` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Pincode` int(11) NOT NULL,
  `Mobile` bigint(10) NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Password` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Gender` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Dob` date NOT NULL,
  `Last_Login` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Email` (`Email`),
  UNIQUE KEY `Mobile` (`Mobile`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Name`, `Address_Line1`, `Address_Line2`, `City`, `Pincode`, `Mobile`, `Email`, `Password`, `Gender`, `Dob`, `Last_Login`) VALUES
('CPU6931', 'Guransh Dua', 'L-605', 'VIT', 'Vellore', 632014, 9876543210, 'guransh.dua4@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', 'Male', '1999-08-26', NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_ibfk_1` FOREIGN KEY (`PharmId`) REFERENCES `pharmacies` (`ID`);

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`MedId`) REFERENCES `medicines` (`ID`),
  ADD CONSTRAINT `events_ibfk_2` FOREIGN KEY (`PharmId`) REFERENCES `pharmacies` (`ID`);

--
-- Constraints for table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `stock_ibfk_1` FOREIGN KEY (`PharmID`) REFERENCES `pharmacies` (`ID`),
  ADD CONSTRAINT `stock_ibfk_2` FOREIGN KEY (`MedID`) REFERENCES `medicines` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
