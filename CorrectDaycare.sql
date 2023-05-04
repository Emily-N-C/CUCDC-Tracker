-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 28, 2023 at 06:42 PM
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
  `Date` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
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
  `Email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
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
  `ChangeTime` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `diaper Changes`
--

INSERT INTO `diaper Changes` (`ChildID`, `ChangeTime`) VALUES
(4, '03-31-23 06:17:52 PM');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Position` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Username` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Password` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Child` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ChildID` text COLLATE utf8mb4_general_ci NOT NULL,
  `Contact` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Allergies` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Position`, `Name`, `Email`, `Username`, `Password`, `Child`, `ChildID`, `Contact`, `Allergies`) VALUES
('Parent', 'Abby Pendleton', 'abbypendleton@gmail.com', 'AbbyCUDC', 'Abby#1234', 'Georgia Pendleton', '2', '109-876-5342', 'Bees'),
('Teacher', 'Christiana Bloom', 'christianabloom@gmail.com', 'ChristiB', 'ChristiDaycare', '', 'None', '0', ''),
('Parent', 'Hunter White', 'hunterwhite@gmail.com', 'HunterWhite', 'AVeryGoodPassword', 'David White', '4', '366-553-7896', 'None'),
('Parent', 'Jane Smith', 'janesmith@gmail.com', 'JustJane', 'J@ne1324', 'Susan Smith', '3', '111-222-3333', 'Peanuts'),
('Teacher', 'Katherine Williams', 'katherinewilliams@gmail.com', 'Kathy77', 'K@thy77', '', 'None', '0', ''),
('Teacher', 'Nancy Cook', 'nancycook@gmail.com', 'NancyCook', 'APassword1', '', 'None', '0', ''),
('Parent', 'Tara Hamilton', 'tarahamilton@gmail.com', 'taraHam', 'T@ra1980', 'Jacob Hamilton', '1', '123-456-7891', ''),
('Teacher', 'Taylor Johns', 'taylorjohns@gmail.com', 'TaysUser', 'T@ylorPassword', '', 'None', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `mealtimes`
--

CREATE TABLE `mealtimes` (
  `ChildID` int NOT NULL,
  `MealTime` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mealtimes`
--

INSERT INTO `mealtimes` (`ChildID`, `MealTime`) VALUES
(2, '04-27-23 05:52:15 PM'),
(2, '04-27-23 05:52:17 PM'),
(2, '04-27-23 06:01:31 PM');

-- --------------------------------------------------------

--
-- Table structure for table `naptimes`
--

CREATE TABLE `naptimes` (
  `ChildID` text COLLATE utf8mb4_general_ci NOT NULL,
  `NapTime` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
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
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `Child` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ChildID` int NOT NULL,
  `ClassID` int NOT NULL,
  `Contact` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Parent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Username` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Teacher` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Allergies` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Other` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`Child`, `ChildID`, `ClassID`, `Contact`, `Parent`, `Username`, `Password`, `Teacher`, `Allergies`, `Other`) VALUES
('Jacob Hamilton', 1, 1, '123-456-7891', 'Tara Hamilton', 'taraHam', 'T@ra1980', 'Katherine Williams', '', ''),
('Georgia Pendleton', 2, 2, '109-876-5432', 'Abby Pendleton', 'AbbyCUDC', 'Abby#1234', 'Christiana Bloom', '', ''),
('Susan Smith', 3, 3, '111-222-3333', 'Jane Smith', 'JustJane', 'J@ne1234', 'Nancy Cook', '', ''),
('David White', 4, 4, '444-555-6666', 'Hunter White', 'HunterWhite', 'AVeryGoodPassword', 'Taylor Johns', '', '');

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
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`ChildID`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
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
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `ChildID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `ChildID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
