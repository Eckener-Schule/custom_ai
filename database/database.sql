-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 27, 2025 at 09:46 AM
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
-- Database: `customAI`
--

-- --------------------------------------------------------

--
-- Table structure for table `Chatbot`
--

CREATE TABLE `Chatbot` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `promptID` int(11) NOT NULL,
  `websiteOwnerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `Chatbot`
--

INSERT INTO `Chatbot` (`id`, `name`, `promptID`, `websiteOwnerID`) VALUES
(2, 'OBIBot', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Chatbot`
--
ALTER TABLE `Chatbot`
  ADD PRIMARY KEY (`id`),
  ADD KEY `promptID` (`promptID`),
  ADD KEY `websiteOwnerID` (`websiteOwnerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Chatbot`
--
ALTER TABLE `Chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Chatbot`
--
ALTER TABLE `Chatbot`
  ADD CONSTRAINT `promptID` FOREIGN KEY (`promptID`) REFERENCES `Prompt` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `websiteOwnerID` FOREIGN KEY (`websiteOwnerID`) REFERENCES `WebsiteOwner` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
