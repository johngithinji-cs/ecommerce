-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2022 at 02:26 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `aName` varchar(20) NOT NULL,
  `aDate` date NOT NULL,
  `aEmail` varchar(20) NOT NULL,
  `aPassword` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `aName`, `aDate`, `aEmail`, `aPassword`) VALUES
(1, 'james', '2022-11-09', 'james@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cId` int(11) NOT NULL,
  `cName` varchar(100) NOT NULL,
  `cStatus` int(11) NOT NULL DEFAULT 1,
  `cDate` date NOT NULL,
  `cDp` varchar(200) NOT NULL,
  `adminId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cId`, `cName`, `cStatus`, `cDate`, `cDp`, `adminId`) VALUES
(18, 'mobile', 1, '0000-00-00', 'was1.jpeg', 1),
(19, 'watches', 1, '0000-00-00', 'phone2.jpeg', 1),
(20, 'rsteg', 1, '2022-11-15', 'phone1.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `mId` int(11) NOT NULL,
  `mName` varchar(200) NOT NULL,
  `mDate` date NOT NULL,
  `mStatus` int(11) NOT NULL DEFAULT 1,
  `productId` int(11) NOT NULL,
  `adminId` int(11) NOT NULL,
  `mDp` varchar(200) NOT NULL,
  `mDescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`mId`, `mName`, `mDate`, `mStatus`, `productId`, `adminId`, `mDp`, `mDescription`) VALUES
(3, 'sdxhfnZXXXCwdsxxzx updated', '2022-11-16', 1, 18, 1, 'phone2.jpeg', 'zxbfnitygfnv');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pId` int(11) NOT NULL,
  `pName` varchar(200) NOT NULL,
  `pStatus` int(11) NOT NULL DEFAULT 1,
  `pDate` datetime NOT NULL,
  `categoryID` int(11) NOT NULL,
  `adminId` int(11) NOT NULL,
  `pDp` varchar(200) NOT NULL,
  `pCompany` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `specs`
--

CREATE TABLE `specs` (
  `spId` int(11) NOT NULL,
  `spName` varchar(200) NOT NULL,
  `spDate` date NOT NULL,
  `spStatus` int(11) NOT NULL DEFAULT 1,
  `adminId` int(11) NOT NULL,
  `modelId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `specs`
--

INSERT INTO `specs` (`spId`, `spName`, `spDate`, `spStatus`, `adminId`, `modelId`) VALUES
(27, 'sfedgrtfhyjuio updatedf', '2022-11-18', 1, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `spec_values`
--

CREATE TABLE `spec_values` (
  `specId` int(11) NOT NULL,
  `spvId` int(11) NOT NULL,
  `spvName` varchar(200) NOT NULL,
  `apId` int(11) NOT NULL,
  `adminId` int(11) NOT NULL,
  `spvStatus` int(11) NOT NULL DEFAULT 1,
  `spvDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spec_values`
--

INSERT INTO `spec_values` (`specId`, `spvId`, `spvName`, `apId`, `adminId`, `spvStatus`, `spvDate`) VALUES
(27, 35, 'wert5y7u', 0, 1, 1, '2022-11-18'),
(27, 36, 'tyu76i787ot65o', 0, 1, 1, '2022-11-18');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uId` int(11) NOT NULL,
  `uFirstName` varchar(200) NOT NULL,
  `uLastName` varchar(200) NOT NULL,
  `uEmail` varchar(200) NOT NULL,
  `uPassword` varchar(200) NOT NULL,
  `uLink` varchar(200) NOT NULL,
  `uDate` date NOT NULL,
  `uStatus` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cId`),
  ADD KEY `categories_fk` (`adminId`);

--
-- Indexes for table `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`mId`),
  ADD KEY `models_admin_fk` (`adminId`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pId`),
  ADD KEY `products_admin_fk` (`adminId`),
  ADD KEY `products_categories_cId_fk` (`categoryID`);

--
-- Indexes for table `specs`
--
ALTER TABLE `specs`
  ADD PRIMARY KEY (`spId`),
  ADD KEY `specs_admin_aid_fk` (`adminId`),
  ADD KEY `specs_models_mid_fk` (`modelId`);

--
-- Indexes for table `spec_values`
--
ALTER TABLE `spec_values`
  ADD PRIMARY KEY (`spvId`),
  ADD KEY `spec_values_fk` (`adminId`),
  ADD KEY `spec_values_specs_fk` (`specId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `models`
--
ALTER TABLE `models`
  MODIFY `mId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `specs`
--
ALTER TABLE `specs`
  MODIFY `spId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `spec_values`
--
ALTER TABLE `spec_values`
  MODIFY `spvId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_fk` FOREIGN KEY (`adminId`) REFERENCES `admin` (`aid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `models`
--
ALTER TABLE `models`
  ADD CONSTRAINT `models_admin_fk` FOREIGN KEY (`adminId`) REFERENCES `admin` (`aid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_admin_fk` FOREIGN KEY (`adminId`) REFERENCES `admin` (`aid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_categories_cId_fk` FOREIGN KEY (`categoryID`) REFERENCES `categories` (`cId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `specs`
--
ALTER TABLE `specs`
  ADD CONSTRAINT `specs_admin_aid_fk` FOREIGN KEY (`adminId`) REFERENCES `admin` (`aid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `specs_models_mid_fk` FOREIGN KEY (`modelId`) REFERENCES `models` (`mId`);

--
-- Constraints for table `spec_values`
--
ALTER TABLE `spec_values`
  ADD CONSTRAINT `spec_values_specs_fk` FOREIGN KEY (`specId`) REFERENCES `specs` (`spId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
