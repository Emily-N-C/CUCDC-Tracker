-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 20, 2023 at 06:04 PM
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
-- Database: `Daycare`
--

-- --------------------------------------------------------

--
-- Table structure for table `Attendance`
--

CREATE TABLE `Attendance` (
  `ChildID` int NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Children`
--

CREATE TABLE `Children` (
  `Child` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ChildID` int NOT NULL,
  `ClassID` int NOT NULL,
  `Contact` text COLLATE utf8mb4_general_ci NOT NULL,
  `Parent` text COLLATE utf8mb4_general_ci NOT NULL,
  `Username` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Children`
--

INSERT INTO `Children` (`Child`, `ChildID`, `ClassID`, `Contact`, `Parent`, `Username`) VALUES
('Jacob Hamilton', 1, 1, '123-456-7891', 'Tara Hamilton', 'taraHam'),
('Georgia Pendleton', 2, 2, '109-876-5432', 'Abby Pendleton', 'AbbyCUDC'),
('Susan Smith', 3, 3, '111-222-3333', 'Jane Smith', 'JustJane'),
('David White', 4, 4, '444-555-6666', 'Hunter White', 'HunterWhite');

-- --------------------------------------------------------

--
-- Table structure for table `Comments`
--

CREATE TABLE `Comments` (
  `Comments` text COLLATE utf8mb4_general_ci NOT NULL,
  `ChildID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Comments`
--

INSERT INTO `Comments` (`Comments`, `ChildID`) VALUES
('Allergic to grass', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Diaper Changes`
--

CREATE TABLE `Diaper Changes` (
  `ChildID` int NOT NULL,
  `ChangeTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Diaper Changes`
--

INSERT INTO `Diaper Changes` (`ChildID`, `ChangeTime`) VALUES
(1, '17:03:05');

-- --------------------------------------------------------

--
-- Table structure for table `Meal Times`
--

CREATE TABLE `Meal Times` (
  `ChildID` int NOT NULL,
  `MealTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Meal Times`
--

INSERT INTO `Meal Times` (`ChildID`, `MealTime`) VALUES
(1, '14:03:48');

-- --------------------------------------------------------

--
-- Table structure for table `Parents`
--

CREATE TABLE `Parents` (
  `ChildID` int NOT NULL,
  `Parent` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Teachers`
--

CREATE TABLE `Teachers` (
  `ClassID` int NOT NULL,
  `Teacher` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Username` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Teachers`
--

INSERT INTO `Teachers` (`ClassID`, `Teacher`, `Username`) VALUES
(1, 'Katherine Williams', 'Kathy77'),
(2, 'Christiana Bloom', 'ChristiB'),
(3, 'Nancy Cook', 'NancyCook'),
(4, 'Taylor Johns', 'TaysUser');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Children`
--
ALTER TABLE `Children`
  ADD PRIMARY KEY (`ChildID`);

--
-- Indexes for table `Parents`
--
ALTER TABLE `Parents`
  ADD PRIMARY KEY (`ChildID`);

--
-- Indexes for table `Teachers`
--
ALTER TABLE `Teachers`
  ADD PRIMARY KEY (`ClassID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Children`
--
ALTER TABLE `Children`
  MODIFY `ChildID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Parents`
--
ALTER TABLE `Parents`
  MODIFY `ChildID` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
