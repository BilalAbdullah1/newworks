-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2023 at 06:40 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab_automation`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagorytb`
--

CREATE TABLE `catagorytb` (
  `cid` int(11) NOT NULL,
  `catname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catagorytb`
--

INSERT INTO `catagorytb` (`cid`, `catname`) VALUES
(53, 'category'),
(57, 'dsada');

-- --------------------------------------------------------

--
-- Table structure for table `registertb`
--

CREATE TABLE `registertb` (
  `regid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ustatus` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registertb`
--

INSERT INTO `registertb` (`regid`, `username`, `email`, `password`, `ustatus`) VALUES
(3, 'bab', 'bab@gmail.com', '$2y$10$A5eoWj6FFRNzKqjV6Aa1suumLk7vhHohah7VnTd5GajexoVu4Vwdm', 1),
(4, 'afshan', 'afshan@gmail.com', '$2y$10$WpyoVnC7BeU7Mvmqe1UdgOIBZLbt49yUctWVmbVjHBCz7fNlc8PUK', 1),
(5, 'ahmer', 'ahmer@gmail.com', '$2y$10$Q9rIx5QZGjZJjE6tARl4C.1zr.BHdbF9qcbY.NsLnpZ8PZBOUHi9a', 1),
(6, 'hassan', 'hassan@gmail.com', '$2y$10$usDEyFR75DNFuEZOUbf.EuStKil..ZO2D.ajf5U4c1OIrEyxHgy9q', 1),
(7, 'admin', 'admin@gmail.com', '$2y$10$3TITJaLz0R/41fwberc32uu7XrFPOGoD4zDXHuJMlQyaoj9OhITAS', 1),
(8, 'bilal', 'bilal@gmail.com', '$2y$10$KYatJFVhHpfwjMTj4Dd0m.X82lZ8CHQ9hUsVmF9wL7yTrF3PGUs0a', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagorytb`
--
ALTER TABLE `catagorytb`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `registertb`
--
ALTER TABLE `registertb`
  ADD PRIMARY KEY (`regid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catagorytb`
--
ALTER TABLE `catagorytb`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `registertb`
--
ALTER TABLE `registertb`
  MODIFY `regid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
