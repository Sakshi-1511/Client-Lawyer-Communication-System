-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2023 at 07:31 AM
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
-- Database: `client&lawyer`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientsignup`
--

CREATE TABLE `clientsignup` (
  `Fname` varchar(30) NOT NULL,
  `Lname` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clientsignup`
--

INSERT INTO `clientsignup` (`Fname`, `Lname`, `Email`, `Phone`, `Password`, `Gender`, `Address`) VALUES
('sss', 'sss', 'pardeshisakshi15@gmail.com', 1234577890, '123', 'Male', 'Nashik');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Name` varchar(30) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Name`, `Email`, `Phone`, `Address`, `Message`) VALUES
('sss', 'pardeshisakshi15@gma', 2147483647, 'Nashik', 'xx');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `Name` varchar(30) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Question` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `Name` varchar(30) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Enrollno` int(5) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Pincode` int(10) NOT NULL,
  `Address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`Name`, `Email`, `Phone`, `Password`, `Enrollno`, `Gender`, `City`, `State`, `Pincode`, `Address`) VALUES
('SDFG', 'pardeshisakshi15@gma', 1234567890, '123', 124, 'Female', 'Nashik', 'Maharashtra', 422101, 'Nashik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientsignup`
--
ALTER TABLE `clientsignup`
  ADD PRIMARY KEY (`Phone`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Phone`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`Phone`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`Phone`),
  ADD UNIQUE KEY `Email` (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
