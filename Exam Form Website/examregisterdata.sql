-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2023 at 01:41 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `examregisterdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminsignup`
--

CREATE TABLE `adminsignup` (
  `id` int(100) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_id` varchar(10) NOT NULL,
  `admin_phone_no` int(10) NOT NULL,
  `admin_password` int(6) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_date_of_birth` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminsignup`
--

INSERT INTO `adminsignup` (`id`, `admin_name`, `admin_id`, `admin_phone_no`, `admin_password`, `admin_email`, `admin_date_of_birth`) VALUES
(7, 'Rushabh', 'admin1', 369258147, 159, 'rushdhamne@gmail.com', '2023-07-31');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `Programming_Lang` varchar(100) NOT NULL,
  `Q1` longtext NOT NULL,
  `Q2` varchar(100) NOT NULL,
  `Q3` varchar(100) NOT NULL,
  `Q4` varchar(100) NOT NULL,
  `Q5` varchar(100) NOT NULL,
  `Q6` varchar(100) NOT NULL,
  `Q7` varchar(100) NOT NULL,
  `Q8` varchar(100) NOT NULL,
  `Q9` varchar(100) NOT NULL,
  `Q10` varchar(100) NOT NULL,
  `Grade` varchar(5) NOT NULL,
  `Marks` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `user_name`, `Programming_Lang`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`, `Q10`, `Grade`, `Marks`) VALUES
(1, 'Rushabh', 'PHP', 'SGARWTGAFWF', 'ARGEGEAHAEG', 'ARAQWERGGRFG', 'WRGEGADFGAWRG', 'FAGWRGEGFEG', 'WRGTFGAWSG', 'AGGFGRWEYHJH', 'AGRGGFGRTHHT', 'ARGERFDGAGHHA', 'GERERHHSGFH', 'A', 500);

-- --------------------------------------------------------

--
-- Table structure for table `examanswerdata`
--

CREATE TABLE `examanswerdata` (
  `id` int(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `Answer1` longtext NOT NULL,
  `Answer2` longtext NOT NULL,
  `Answer3` longtext NOT NULL,
  `Answer4` longtext NOT NULL,
  `Answer5` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `examanswerdata`
--

INSERT INTO `examanswerdata` (`id`, `user_name`, `Answer1`, `Answer2`, `Answer3`, `Answer4`, `Answer5`) VALUES
(1, 'Rushabh', '', '', '', '', ''),
(2, 'Abhijit', '', '', '', '', ''),
(3, 'Uttam', '', '', '', '', ''),
(4, 'Rushabh', '', '', '', '', ''),
(5, '', '', '', '', '', ''),
(6, '', '', '', '', '', ''),
(7, '', '', '', '', '', ''),
(8, '', '', '', '', '', ''),
(9, '', '', '', '', '', ''),
(10, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(100) NOT NULL,
  `Programming_Languages` varchar(100) NOT NULL,
  `Q1` varchar(100) NOT NULL,
  `Q2` varchar(100) NOT NULL,
  `Q3` varchar(100) NOT NULL,
  `Q4` varchar(100) NOT NULL,
  `Q5` varchar(100) NOT NULL,
  `Q6` varchar(100) NOT NULL,
  `Q7` varchar(100) NOT NULL,
  `Q8` varchar(100) NOT NULL,
  `Q9` varchar(100) NOT NULL,
  `Q10` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `Programming_Languages`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`, `Q10`) VALUES
(1, 'PHP', 'Write a program in Php to check whether a number is prime or not.', 'Write a program to find no of days between two dates in Php.', 'Write a program in PHP to find the occurrence of a word in a string.', 'Write a program to upload a file in PHP.', 'Write a program to find a string is palindrome or not.', 'Write a program to find the factorial of a number in PHP.', 'Php Code to find whether a number Armstrong or not.', 'Php Program to generate Fibonacci series.', 'Write a program in PHP to print a table of a number.', 'Write a program in PHP to reverse a number.'),
(2, 'C', 'DFGHVFGHdgf', 'dfgDFGDdf', 'SDFEWSTYTWE', 'RESDFGGHH', 'AWTQWTQWT', 'QRTQRTGF', 'ATW4TRFGFG', 'WTRTRTGH', 'AQTRWQTTQT', 'QRTYEYHGSD');

-- --------------------------------------------------------

--
-- Table structure for table `regisdata`
--

CREATE TABLE `regisdata` (
  `Id` int(100) NOT NULL,
  `Name_of_Certificate` varchar(100) NOT NULL,
  `user_Name` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL,
  `select_Language` varchar(100) NOT NULL,
  `user_photo` varchar(100) NOT NULL,
  `Permission` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `regisdata`
--

INSERT INTO `regisdata` (`Id`, `Name_of_Certificate`, `user_Name`, `password`, `select_Language`, `user_photo`, `Permission`) VALUES
(1, 'Full stack', 'Rushabh', '147', 'C++', '45 Photos That Prove _Steven Universe_ Is The Most Gorgeous Show On TV.jpeg', 'True');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminsignup`
--
ALTER TABLE `adminsignup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examanswerdata`
--
ALTER TABLE `examanswerdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regisdata`
--
ALTER TABLE `regisdata`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminsignup`
--
ALTER TABLE `adminsignup`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `examanswerdata`
--
ALTER TABLE `examanswerdata`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `regisdata`
--
ALTER TABLE `regisdata`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
