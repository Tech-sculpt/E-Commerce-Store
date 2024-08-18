-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2024 at 09:15 PM
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
-- Database: `sign-up`
--

-- --------------------------------------------------------

--
-- Table structure for table `user sign-up`
--

CREATE TABLE `user sign-up` (
  `ID` int(100) NOT NULL,
  `User Name` text NOT NULL,
  `Email ID` varchar(100) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `Phone Number` varchar(14) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Date and Time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user sign-up`
--

INSERT INTO `user sign-up` (`ID`, `User Name`, `Email ID`, `Password`, `Phone Number`, `Address`, `Date and Time`) VALUES
(1, 'haris', 'abd@gmail.com', '12345', '03460965581', 'House no. 1009,Mughalabad street,Rawalpindi', '2024-07-25 13:16:21'),
(2, 'Ali', 'abc@gmail.com', '12345', '03185150216', 'Abc Street, Rawalpindi', '2024-07-25 18:03:53'),
(3, 'Ahmed', 'zzz@gmail.com', '12345', '03185150216', 'Aaaa Street, Rawalpindi', '2024-07-25 18:10:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user sign-up`
--
ALTER TABLE `user sign-up`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user sign-up`
--
ALTER TABLE `user sign-up`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
