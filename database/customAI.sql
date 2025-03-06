-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Mar 06, 2025 at 08:50 AM
-- Server version: 5.7.44
-- PHP Version: 8.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+01:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customAI`
--
DROP DATABASE IF EXISTS `customAI`;
CREATE DATABASE IF NOT EXISTS `customAI` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `customAI`;

-- --------------------------------------------------------

--
-- Table structure for table `Chatbot`
--

DROP TABLE IF EXISTS `Chatbot`;
CREATE TABLE IF NOT EXISTS `Chatbot` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `companyID` int(11) NOT NULL,
  `promptID` int(11) NOT NULL,
  `websiteOwnerID` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `companyID` (`companyID`),
  KEY `promptID` (`promptID`),
  KEY `websiteOwnerID` (`websiteOwnerID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Company`
--

DROP TABLE IF EXISTS `Company`;
CREATE TABLE IF NOT EXISTS `Company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `website` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Prompt`
--

DROP TABLE IF EXISTS `Prompt`;
CREATE TABLE IF NOT EXISTS `Prompt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prompt` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `WebsiteOwner`
--

DROP TABLE IF EXISTS `WebsiteOwner`;
CREATE TABLE IF NOT EXISTS `WebsiteOwner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Chatbot`
--
ALTER TABLE `Chatbot`
  ADD CONSTRAINT `companyID` FOREIGN KEY (`companyID`) REFERENCES `Company` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `promptID` FOREIGN KEY (`promptID`) REFERENCES `Prompt` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `websiteOwnerID` FOREIGN KEY (`websiteOwnerID`) REFERENCES `WebsiteOwner` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
