-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2021 at 04:16 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `razorpay`
--

-- --------------------------------------------------------

--
-- Table structure for table `lost_payment`
--

CREATE TABLE `lost_payment` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_status` varchar(50) NOT NULL,
  `payment_id` varchar(50) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lost_payment`
--

INSERT INTO `lost_payment` (`id`, `fullname`, `amount`, `payment_status`, `payment_id`, `added_on`) VALUES
(1, 'soniya', 200, 'complete', 'pay_IVQCoqH3ESJA0o', '2021-12-09 04:12:36');

-- --------------------------------------------------------

--
-- Table structure for table `update_payment`
--

CREATE TABLE `update_payment` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_status` varchar(50) NOT NULL,
  `payment_id` varchar(50) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `update_payment`
--

INSERT INTO `update_payment` (`id`, `fullname`, `amount`, `payment_status`, `payment_id`, `added_on`) VALUES
(1, 'bella', 100, 'complete', 'pay_IVPZUyp2iFSOJG', '2021-12-09 03:35:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lost_payment`
--
ALTER TABLE `lost_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `update_payment`
--
ALTER TABLE `update_payment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lost_payment`
--
ALTER TABLE `lost_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `update_payment`
--
ALTER TABLE `update_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
