-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 29, 2021 at 01:47 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

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
-- Table structure for table `appid`
--

CREATE TABLE `appid` (
  `userID` int(11) NOT NULL,
  `ApplicationID` int(11) NOT NULL,
  `status` text NOT NULL,
  `Remark` text NOT NULL,
  `print_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appid`
--

INSERT INTO `appid` (`userID`, `ApplicationID`, `status`, `Remark`, `print_date`) VALUES
(4, 101010101, 'Verified', 'trial 5', '2021-12-28 23:59:09'),
(5, 991122334, 'Rejected', 'trial 7', '2021-12-28 23:59:09'),
(6, 123456789, 'Verified', 'trial 4', '2021-12-28 23:59:09'),
(7, 464485637, 'Rejected', 'trial 6', '2021-12-28 23:59:09'),
(8, 223150054, 'Verified', 'Correct details', '2021-12-28 23:59:09'),
(9, 550936097, 'Verified', 'details are correct', '2021-12-28 23:59:09'),
(10, 409613991, 'Rejected', 'not correct', '2021-12-28 23:59:09'),
(11, 311371658, 'Rejected', 'Wrong details', '2021-12-28 23:59:09'),
(12, 475985975, 'Pending', '', '2021-12-28 23:59:09'),
(13, 532996904, 'Pending', '', '2021-12-28 23:59:09'),
(14, 230829652, 'Pending', '', '2021-12-28 23:59:09');

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

--
-- Dumping data for table `fathers_info`
--

INSERT INTO `fathers_info` (`fname`, `fmname`, `flname`, `faadhar`, `femail`, `fmobile`, `freligion`, `foccup`, `feducate`, `id`) VALUES
('hbiu', 'u', 'j', 45, 'd@g.cin', 5, 'h', 'h', 'h', 4),
('j', 'j', 'j', 2, '89@ghbn.nkml', 4, 'i', 'i', 'o', 5),
('Dilip', 'Rangrao', 'Kulkarni', 12457896312, 'dilip@kulkarni.com', 7678029900, 'Hindu', 'Accountant', 'MBA', 6),
('Amit', 'Raghvendra', 'Hulyalkar', 996633885522, 'amit.h@gmail.com', 8452842998, 'Hindu', 'LIC Agent', 'MCom', 7),
('Raghvendra', 'Madhav', 'Hulyalkar', 968574321123, 'raghvendra.h@gmail.com', 843362518478, 'Hindu', 'LIC Agent', 'BCom', 8),
('Amit', 'Raghvendra', 'Hulyalkar', 139745682555, 'anu@gmail.com', 8454048929, 'Hindu', 'LIC Agent', 'MBA', 9),
('Vinod', 'Vishal', 'Nandwani', 456789120003, 'vinod@n.com', 753398461200, 'Hindu', 'businessman', 'PhD', 10),
('gjy', 'jhk', 'hjbmh', 45126, 'sanika@gom.vj', 8422369, 'hingj', 'jhjhj', 'hjjj', 11),
('gjy', 'jhk', 'hjbmh', 45126, 'sanika@gom.vj', 8422369, 'hingj', 'jhjhj', 'hjjj', 12),
('gjy', 'jhk', 'hjbmh', 45126, 'sanika@gom.vj', 8422369, 'hingj', 'jhjhj', 'hjjj', 13),
('Sandeep', 'Vishwas', 'Lodaya', 753869123, 'sandeep.l@gmail.com', 7418529631, 'hindu', 'businessman', 'phd', 14);

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

--
-- Dumping data for table `informants_info`
--

INSERT INTO `informants_info` (`inffname`, `infmname`, `inflname`, `infaddress`, `infpin`, `infmobile`, `reportdate`, `id`) VALUES
('hiuh', 'h', 'hjuj', 'j', 7, 8, '2021-12-22', 4),
('j', 'k', 'k', 'k', 4, 5, '2021-12-31', 5),
('Shweta', 'Dilip', 'Kulkarni', 'Kalyan Shil Road', 421204, 843368032, '2021-12-22', 6),
('Shweta', 'Dilip', 'Kulkarni', 'Kalyan Shil Road', 421204, 8433628032, '2021-12-22', 7),
('Meghashyam', 'Raghav', 'Talikoti', 'Ulhasnagar', 421506, 7548296310, '2021-12-23', 8),
('Shweta', 'Dilip', 'Kulkarni', 'Kalyan Shil Road', 421204, 8433628032, '2021-12-24', 9),
('Vinod', 'Vishal', 'Nandwani', 'Kalyan', 42621, 7538694120, '2021-12-24', 10),
('Shweta', 'Dilip', 'Kulkarni', 'Kalyan Shil Road', 421204, 8433628032, '2021-12-25', 11),
('Shweta', 'Dilip', 'Kulkarni', 'Kalyan Shil Road', 421204, 8433628032, '2021-12-25', 12),
('Shweta', 'Dilip', 'Kulkarni', 'Kalyan Shil Road', 421204, 8433628032, '2021-12-25', 13),
('Sameer', 'Ankit', 'Lodaya', 'Karanja', 444105, 8495162372, '2021-12-27', 14);

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

--
-- Dumping data for table `info_of_child`
--

INSERT INTO `info_of_child` (`firstname`, `midname`, `lastname`, `dob`, `gender`, `cweight`, `aadhar`, `id`) VALUES
('Sanika', 'Dilip', 'Kulkarni', '2021-12-10', 'Female', 531, 5621, 4),
('s', 's', 's', '2021-12-31', 'Male', -0.01, -1, 5),
('Sanika', 'Dilip', 'Kulkarni', '2003-09-06', 'Female', 5, 12345678901, 6),
('Sujal', 'Amit', 'Hulyalkar', '2008-06-03', 'Male', 5, 225588774411, 7),
('Vaishali', 'Raghvendra', 'Hulyalkar', '1974-12-16', 'Female', 5, 159487263951, 8),
('Neel', 'Amit', 'Hulyalkar', '2013-10-10', 'Male', 5, 179385264132, 9),
('soniya', 'vinod', 'nandwani', '2021-12-02', 'Female', 4, 456789113120, 10),
('hjkj', 'jk', 'kj', '2021-12-18', 'Female', 5, 5656526, 11),
('hjkj', 'jk', 'kj', '2021-12-18', 'Female', 5, 5656526, 12),
('hjkj', 'jk', 'kj', '2021-12-18', 'Female', 5, 5656526, 13),
('Hiteshi', 'Sandeep', 'Lodaya', '2003-11-16', 'Female', 5, 123456789789, 14);

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

--
-- Dumping data for table `mothers_info`
--

INSERT INTO `mothers_info` (`mfname`, `mmidname`, `mlname`, `maadhar`, `memail`, `mmobile`, `mreligion`, `moccup`, `meducate`, `id`) VALUES
('k', 'k', 'k', 8, 'i@h.n', 4, 'j', 'j', 'j', 4),
('o', 'o', 'o', 7, 'i@h.n', 8, 'l', 'l', 'l', 5),
('Shweta', 'Dilip', 'Kulkarni', 98765432199, 'shweta@k.com', 8433628032, 'Hindu', 'Auditor', 'GDCA', 6),
('Anushri', 'Amit', 'Hulyalkar', 798456123132, 'anu@gmail.com', 8454048929, 'Hindu', 'HouseWife', 'Graduate', 7),
('Kamal', 'Raghvendra', 'Hulyalkar', 753869421000, 'kamal.h@gmail.com', 7538694120, 'Hindu', 'HouseWife', '12th', 8),
('Anushri', 'Amit', 'Hulyalkar', 197384625000, 'anu@gmail.com', 8454048929, 'Hindu', 'HouseWife', 'Graduate', 9),
('Preeti', 'Vinod', 'Nandwani', 999999999999, 'preeti.n@gmail.com', 4567891230, 'Hindu', 'Architect', 'MA', 10),
('Anushri', 'Amit', 'Hulyalkar', 54212, 'anu@gmail.com', 8454048929, 'hjh', 'kjl', 'kj', 11),
('Anushri', 'Amit', 'Hulyalkar', 54212, 'anu@gmail.com', 8454048929, 'hjh', 'kjl', 'kj', 12),
('Anushri', 'Amit', 'Hulyalkar', 54212, 'anu@gmail.com', 8454048929, 'hjh', 'kjl', 'kj', 13),
('Aarya', 'Sandeep', 'Lodaya', 94856321700, 'aarya.l@gmail.com', 9874123650, 'hindu', 'businesswoman', 'phd', 14);

-- --------------------------------------------------------

--
-- Table structure for table `other_info`
--

CREATE TABLE `other_info` (
  `mage` int(15) NOT NULL,
  `chborn` int(10) NOT NULL,
  `delmeth` varchar(200) NOT NULL,
  `aadharproof` text NOT NULL,
  `affproof` text NOT NULL,
  `id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `other_info`
--

INSERT INTO `other_info` (`mage`, `chborn`, `delmeth`, `aadharproof`, `affproof`, `id`) VALUES
(5, 5, 'Caesaren Delivery(C-Section)', 'FCOW19118_Exp12.pdf', 'FCOW19118_Exp8.pdf', 4),
(8, 8, 'Caesaren Delivery(C-Section)', 'FCOW19118_Exp12.pdf', 'FCOW19118_Exp2.pdf', 5),
(28, 1, 'Caesaren Delivery(C-Section)', 'FCOW19118_Exp1.pdf', 'FCOW19118_Exp2.pdf', 6),
(25, 2, 'Caesaren Delivery(C-Section)', 'FCOW19118_Exp10.pdf', 'FCOW19118_Exp10.pdf', 7),
(22, 1, 'Normal Delivery', 'FCOW19118_AJ-10.pdf', 'FCOW19118_AJ-1.pdf', 8),
(28, 2, 'Caesaren Delivery(C-Section)', 'FCOW19118_Python-Exp-1.pdf', 'FCOW19118_Python-Exp-2.pdf', 9),
(28, 2, 'Caesaren Delivery(C-Section)', 'FCOW19118_Python-Exp-4.pdf', 'FCOW19118_Python-Exp-3.pdf', 10),
(35, 2, 'Caesaren Delivery(C-Section)', 'FCOW19118_WT-9.pdf', 'FCOW19118_AJ-9.pdf', 11),
(35, 2, 'Caesaren Delivery(C-Section)', 'FCOW19118_WT-9.pdf', 'FCOW19118_AJ-9.pdf', 12),
(35, 2, 'Caesaren Delivery(C-Section)', 'FCOW19118_WT-9.pdf', 'FCOW19118_AJ-9.pdf', 13),
(32, 2, 'Normal Delivery', 'FCOW19118_WT-4.pdf', 'FCOW19118_WT-8.pdf', 14);

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

--
-- Dumping data for table `permanent_addr`
--

INSERT INTO `permanent_addr` (`place`, `perbldg`, `perhouse`, `perstreet`, `perlocal`, `perstate`, `perdistr`, `pervillage`, `perpin`, `id`) VALUES
('In India', 'i', 'i', 'i', 'i', 'Maharashtra', 'i', ' Jalgaon ', 78, 4),
('In India', 'k', 'k', 'k', 'k', 'Jharkhand', 'kj', ' Baharagora ', 8, 5),
('In India', 'Lake View chs', 'C-101', 'Kalyan Shil Road', 'Lodha Heaven', 'Maharashtra', 'Thane', ' Kalyan ', 421204, 6),
('In India', '1, Shiv Mahadev', '003', 'Kailash Nagar', 'Ambernath', 'Maharashtra', 'Thane', ' Badnapur', 421501, 7),
('In India', 'Kurla Camp', '001', 'Near Hanuman Mandir', 'Ulhasnagar', 'Maharashtra', 'Thane', ' Badnapur', 421505, 8),
('In India', '01 Shiv Mahadev chs', '003', 'Kailash Nagar', 'Ambernath', 'Maharashtra', 'Thane', ' Badnapur', 421501, 9),
('In India', 'Great heights', '802', 'Kalyan Bazaar', 'bail pola road', 'Maharashtra', 'Thane', ' Kalyan ', 421621, 10),
('In India', '005shiv mahadev', '005', 'Kailash Nagar', 'ambernath', 'Maharashtra', 'thane', ' Kalyan ', 421204, 11),
('In India', '005shiv mahadev', '005', 'Kailash Nagar', 'ambernath', 'Maharashtra', 'thane', ' Kalyan ', 421204, 12),
('In India', '005shiv mahadev', '005', 'Kailash Nagar', 'ambernath', 'Maharashtra', 'thane', ' Kalyan ', 421204, 13),
('In India', 'Shraddha Bunglow', '003', 'Karanja', 'Karanja', 'Maharashtra', 'wasihm', ' Karanja Lad ', 444105, 14);

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
-- Dumping data for table `place_of_birth`
--

INSERT INTO `place_of_birth` (`pob`, `bldg_no_name`, `house_no`, `street_lane`, `pstate`, `district`, `village_town`, `pincode`, `id`) VALUES
('House', 'jnk', 'kj', 'Kalyan Shil Road', 'Maharashtra', 'jj', ' Jalgaon ', 421204, 4),
('House', 'j', 'j', 'j', 'Jammu & Kashmir', 'j', ' Baharagora ', 8, 5),
('Other', 'Chirayush Hospital', '102', 'Kailash Nagar', 'Maharashtra', 'Ambernath', ' Badnapur', 421204, 6),
('Other', 'Date Hospital', '103', 'Shivaji Udyog Nagar', 'Maharashtra', 'Thane', ' Badnapur', 421201, 7),
('House', 'Kurla camp', '001', 'Ulhasnagar', 'Maharashtra', 'Thane', ' Badnapur', 421504, 8),
('House', '01, Shiv Mahadev chs', '003', 'Kailash Nagar', 'Maharashtra', 'Thane', ' Badnapur', 421499, 9),
('Other', 'hospital 2', '697', 'ulhasnagar', 'Maharashtra', 'thane', ' Kalyan ', 184695, 10),
('Other', 'hjhk', 'kj', 'hjh', 'Maharashtra', 'Thane', ' Kalyan ', 421201, 11),
('Other', 'hjhk', 'kj', 'hjh', 'Maharashtra', 'Thane', ' Kalyan ', 421201, 12),
('Other', 'hjhk', 'kj', 'hjh', 'Maharashtra', 'Thane', ' Kalyan ', 421201, 13),
('House', 'Shraddha Bunglow', '003', 'Karanja', 'Maharashtra', 'Washim', ' Karanja Lad ', 444105, 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appid`
--
ALTER TABLE `appid`
  ADD PRIMARY KEY (`userID`);

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

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appid`
--
ALTER TABLE `appid`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `fathers_info`
--
ALTER TABLE `fathers_info`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `informants_info`
--
ALTER TABLE `informants_info`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `info_of_child`
--
ALTER TABLE `info_of_child`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `mothers_info`
--
ALTER TABLE `mothers_info`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `other_info`
--
ALTER TABLE `other_info`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `permanent_addr`
--
ALTER TABLE `permanent_addr`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `place_of_birth`
--
ALTER TABLE `place_of_birth`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
