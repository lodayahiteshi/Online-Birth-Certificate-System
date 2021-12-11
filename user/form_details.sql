-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2021 at 11:22 PM
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
-- Database: `form_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `fathers_info`
--

CREATE TABLE `fathers_info` (
  `fname` varchar(50) NOT NULL,
  `fmname` varchar(50) NOT NULL,
  `flname` varchar(50) NOT NULL,
  `faadhar` bigint(12) NOT NULL,
  `femail` varchar(50) NOT NULL,
  `fmobile` bigint(10) NOT NULL,
  `freligion` varchar(15) NOT NULL,
  `foccup` varchar(150) NOT NULL,
  `feducate` varchar(150) NOT NULL,
  `id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `informants_info`
--

CREATE TABLE `informants_info` (
  `inffname` varchar(50) NOT NULL,
  `infmname` varchar(50) NOT NULL,
  `inflname` varchar(50) NOT NULL,
  `infaddress` varchar(200) NOT NULL,
  `infpin` bigint(15) NOT NULL,
  `infmobile` bigint(10) NOT NULL,
  `reportdate` date NOT NULL,
  `id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `info_of_child`
--

CREATE TABLE `info_of_child` (
  `firstname` varchar(15) NOT NULL,
  `midname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(15) NOT NULL,
  `cweight` float NOT NULL,
  `aadhar` bigint(12) NOT NULL,
  `id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mothers_info`
--

CREATE TABLE `mothers_info` (
  `mfname` varchar(50) NOT NULL,
  `mmidname` varchar(50) NOT NULL,
  `mlname` varchar(50) NOT NULL,
  `maadhar` bigint(12) NOT NULL,
  `memail` varchar(50) NOT NULL,
  `mmobile` bigint(10) NOT NULL,
  `mreligion` varchar(50) NOT NULL,
  `moccup` varchar(150) NOT NULL,
  `meducate` varchar(150) NOT NULL,
  `id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `other_info`
--

CREATE TABLE `other_info` (
  `mage` int(15) NOT NULL,
  `chborn` int(10) NOT NULL,
  `delmeth` varchar(200) NOT NULL,
  `aadharproof` longblob NOT NULL,
  `affproof` longblob NOT NULL,
  `id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `permanent_addr`
--

CREATE TABLE `permanent_addr` (
  `place` varchar(50) NOT NULL,
  `perbldg` varchar(50) NOT NULL,
  `perhouse` varchar(50) NOT NULL,
  `perstreet` varchar(50) NOT NULL,
  `perlocal` varchar(50) NOT NULL,
  `perstate` varchar(50) NOT NULL,
  `perdistr` varchar(50) NOT NULL,
  `pervillage` varchar(50) NOT NULL,
  `perpin` bigint(15) NOT NULL,
  `id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `place_of_birth`
--

CREATE TABLE `place_of_birth` (
  `pob` varchar(15) NOT NULL,
  `bldg_no_name` varchar(50) NOT NULL,
  `house_no` char(15) NOT NULL,
  `street_lane` varchar(50) NOT NULL,
  `pstate` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `village_town` varchar(50) NOT NULL,
  `pincode` bigint(25) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fathers_info`
--
ALTER TABLE `fathers_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informants_info`
--
ALTER TABLE `informants_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info_of_child`
--
ALTER TABLE `info_of_child`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mothers_info`
--
ALTER TABLE `mothers_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_info`
--
ALTER TABLE `other_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permanent_addr`
--
ALTER TABLE `permanent_addr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `place_of_birth`
--
ALTER TABLE `place_of_birth`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
