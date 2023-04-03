-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 03, 2023 at 08:01 PM
-- Server version: 8.0.31
-- PHP Version: 7.4.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daycare`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `ChildID` int NOT NULL,
  `Date` varchar(256) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`ChildID`, `Date`) VALUES
(1, '04-03-23 07:41:38 PM'),
(2, '04-03-23 07:42:38 PM'),
(1, '04-03-23 03:46:27 PM');

-- --------------------------------------------------------

--
-- Table structure for table `children`
--

CREATE TABLE `children` (
  `ChildID` int NOT NULL,
  `Child` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Contact` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Email` text COLLATE utf8mb4_general_ci NOT NULL,
  `Parent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Username` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `children`
--

INSERT INTO `children` (`ChildID`, `Child`, `Contact`, `Email`, `Parent`, `Username`) VALUES
(1, 'Jacob Hamilton', '123-456-7891', 'Tarahamilton53@gmail.com', 'Tara Hamilton', 'taraHam'),
(2, 'Georgia Pendleton ', '109-876-5342', 'gPendle56@icloud.com', 'Abby Pendleton', 'AbbyCUDC'),
(3, 'Susan Smith', '111-222-3333', 'SmithS89@outlook.com', 'Jane Smith', 'JustJane'),
(4, 'David White', '366-553-7896', 'MelindaWho@outlook.com', 'Melinda White', 'mWhite1');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `Comments` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ChildID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`Comments`, `ChildID`) VALUES
('Allergic to grass', 1);

-- --------------------------------------------------------

--
-- Table structure for table `diaper Changes`
--

CREATE TABLE `diaper Changes` (
  `ChildID` int NOT NULL,
  `ChangeTime` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `diaper Changes`
--

INSERT INTO `diaper Changes` (`ChildID`, `ChangeTime`) VALUES
(4, '03-31-23 06:17:52 PM');

-- --------------------------------------------------------

--
-- Table structure for table `meal times`
--

CREATE TABLE `meal times` (
  `ChildID` int NOT NULL,
  `MealTime` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `meal times`
--

INSERT INTO `meal times` (`ChildID`, `MealTime`) VALUES
(2, '03-31-23 06:17:35 PM');

-- --------------------------------------------------------

--
-- Table structure for table `nap times`
--

CREATE TABLE `nap times` (
  `ChildID` int NOT NULL,
  `NapTime` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `ChildID` int NOT NULL,
  `Parent` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `ClassID` int NOT NULL,
  `Teacher` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Username` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`ClassID`, `Teacher`, `Username`) VALUES
(1, 'Katherine Williams', 'Kathy77'),
(2, 'Christiana Bloom', 'ChristiB'),
(3, 'Nancy Cook', 'NancyCook'),
(4, 'Taylor Johns', 'TaysUser');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `children`
--
ALTER TABLE `children`
  ADD PRIMARY KEY (`ChildID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`ChildID`);

--
-- Indexes for table `meal times`
--
ALTER TABLE `meal times`
  ADD PRIMARY KEY (`ChildID`);

--
-- Indexes for table `nap times`
--
ALTER TABLE `nap times`
  ADD PRIMARY KEY (`ChildID`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`ChildID`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`ClassID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `children`
--
ALTER TABLE `children`
  MODIFY `ChildID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `meal times`
--
ALTER TABLE `meal times`
  MODIFY `ChildID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nap times`
--
ALTER TABLE `nap times`
  MODIFY `ChildID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `ChildID` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
