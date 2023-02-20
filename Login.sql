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
-- Database: `Login`
--

-- --------------------------------------------------------

--
-- Table structure for table `User Information`
--

CREATE TABLE `User Information` (
  `Email` text COLLATE utf8mb4_general_ci NOT NULL,
  `Username` tinytext COLLATE utf8mb4_general_ci NOT NULL,
  `Password` tinytext COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `User Information`
--

INSERT INTO `User Information` (`Email`, `Username`, `Password`) VALUES
('tarahamilton@gmail.com', 'taraHam', 'T@ra1980'),
('abbypendleton@gmail.com', 'AbbyCUDC', 'Abby#1234'),
('janesmith@gmail.com', 'JustJane', 'J@ne1324'),
('hunterwhite@gmail.com', 'HunterWhite', 'AVeryGoodPassword'),
('katherinewilliams@gmail.com', 'Kathy77', 'K@thy77'),
('christianabloom@gmail.com', 'ChristiB', 'ChristiDaycare'),
('nancycook@gmail.com', 'NancyCook', 'APassword1'),
('taylorjohns@gmail.com', 'TaysUser', 'T@ylorPassword');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
