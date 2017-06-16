-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 16, 2017 at 05:22 AM
-- Server version: 5.7.18-0ubuntu0.17.04.1
-- PHP Version: 7.0.20-2~ubuntu17.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MyanFoodDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `itemTable`
--

CREATE TABLE `itemTable` (
  `itemId` varchar(255) NOT NULL,
  `itemName` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `descripton` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `restaurantId` varchar(255) NOT NULL,
  `itemPhoto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `itemTable`
--

INSERT INTO `itemTable` (`itemId`, `itemName`, `price`, `descripton`, `category`, `restaurantId`, `itemPhoto`) VALUES
('593e488a1eaa288f03829b68', 'မုန့်တီ', '2500MMK', '', 'မြန်မာရိုးရာ', '593e47e11eaa288f03829b26', ''),
('593e48c61eaa288f03829b83', 'အကြော်စုံ', '1000MMK', '', 'မြန်မာရိုးရာ', '593e47e11eaa288f03829b26', ''),
('593e49301eaa288f03829bb4', 'မုန့်ဟင်းခါး', '1500MMK', '', 'မြန်မာရိုးရာ', '593e47e11eaa288f03829b26', ''),
('5940e8fb4e49eb59b5cc9acb', 'လက်ဖက်သုပ်', '1000MMK', '', 'မြန်မာရိုးရာ', '593e47e11eaa288f03829b26', ''),
('5940e9314e49eb59b5cc9adc', 'သာကူယို', '500MMK', '', 'မြန်မာရိုးရာ', '593e47e11eaa288f03829b26', '');

-- --------------------------------------------------------

--
-- Table structure for table `menuPackage`
--

CREATE TABLE `menuPackage` (
  `packageId` varchar(255) NOT NULL,
  `packageName` varchar(255) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `restaurantId` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ownerTable`
--

CREATE TABLE `ownerTable` (
  `ownerId` varchar(255) NOT NULL,
  `ownerName` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ownerTable`
--

INSERT INTO `ownerTable` (`ownerId`, `ownerName`, `password`, `email`) VALUES
('593e45d31eaa288f03829a91', 'Banner', 'bannercoe', 'bbannercoe');

-- --------------------------------------------------------

--
-- Table structure for table `restaurantsTable`
--

CREATE TABLE `restaurantsTable` (
  `Id` varchar(255) NOT NULL,
  `restaurantName` varchar(255) NOT NULL,
  `phoneNumber` int(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `townshipName` varchar(255) NOT NULL,
  `openTime` time NOT NULL,
  `closeTime` time NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `restaurantPhoto` varchar(255) NOT NULL,
  `ownerId` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurantsTable`
--

INSERT INTO `restaurantsTable` (`Id`, `restaurantName`, `phoneNumber`, `address`, `townshipName`, `openTime`, `closeTime`, `latitude`, `longitude`, `restaurantPhoto`, `ownerId`) VALUES
('593e47e11eaa288f03829b26', 'ဒေါ်လှ မုန့်တီ', 0, '7th floor, Excel Tower', 'ဗဟန်း', '09:00:00', '21:00:00', '16.807658', '96.155082', '', '593e45d31eaa288f03829a91');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `restaurantsTable`
--
ALTER TABLE `restaurantsTable`
  ADD UNIQUE KEY `id` (`Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
