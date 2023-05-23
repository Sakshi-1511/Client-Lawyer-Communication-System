-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2023 at 08:44 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lawyer_client`
--

-- --------------------------------------------------------

--
-- Table structure for table `booktable`
--

-- CREATE TABLE `booktable` (
--   `name` varchar(20) NOT NULL,
--   `email` varchar(30) NOT NULL,
--   `date` date NOT NULL,
--   `mobile` bigint(11) NOT NULL,
--   `peoples` int(3) NOT NULL,
--   `message` varchar(50) NOT NULL,
--   `time` time DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `clientsignup` (
  `Fname` varchar(30) NOT NULL,
  `Lname` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone` int(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
-- Dumping data for table `booktable`
--

-- INSERT INTO `booktable` (`name`, `email`, `date`, `mobile`, `peoples`, `message`, `time`) VALUES
-- ('zzz', 'zz@gmail.com', '2023-03-10', 4865, 1, '1564', '23:02:00'),
-- ('ooop', 'p@gmail.com', '2023-02-28', 156, 1, 'mlk', '20:15:00'),
-- ('aas', 'as@gmail.com', '2023-02-28', 6546, 2, 'mknx', '23:09:00'),
-- ('jk', 'w@g.com', '2023-02-28', 165, 1, 'mb', '14:22:00'),
-- ('mknkj', 'W@gmail.com', '2022-12-21', 564, 1, 'hvu', '23:34:00'),
-- ('jbk', 'l@gmail.com', '2023-02-15', 1615, 1, 'za', '23:36:00'),
-- ('l', 'l@gmail.com', '2023-02-28', 21, 1, 'xax', '23:41:00'),
-- ('bkjb', 'p@gmail.com', '2023-04-13', 1351, 1, 'gbk', '00:39:00');

-- --------------------------------------------------------
INSERT INTO `clientsignup` (`Fname`, `Lname`, `Email`, `Phone`, `password`, `Gender`, `Address`) VALUES
('sss', 'sss', 'pardeshisakshi15@gmail.com', 1234567890, '123', 'Male', 'Nashik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientsignup`
--
ALTER TABLE `clientsignup`
  ADD PRIMARY KEY (`Phone`),
  ADD UNIQUE KEY `Email` (`Email`);
COMMIT;
--
-- Table structure for table `contact`
--




--
-- Dumping data for table `userprofile`
--

INSERT INTO `userprofile` (`username`, `name`, `email`, `mobile`) VALUES
('admin', 'psw', 'p@gmail.com', 7774041842);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
