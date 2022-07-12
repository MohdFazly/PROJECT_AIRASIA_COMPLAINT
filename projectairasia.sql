-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 12, 2022 at 02:11 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectairasia`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminn`
--

CREATE TABLE `adminn` (
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminn`
--

INSERT INTO `adminn` (`fullname`, `email`, `address`, `password`) VALUES
('[Fazly]', '[fazly@gmail.com]', '[Kampung Batu 12]', '[fazly]'),
('[Fazly]', '[fazly@gmail.com]', '[Kampung Batu 12]', '[fazly]'),
('Admin', 'admin@gmail.com', 'Kampung Admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `categorydepartment`
--

CREATE TABLE `categorydepartment` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `department_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorydepartment`
--

INSERT INTO `categorydepartment` (`id`, `category`, `department_id`) VALUES
(1, 'Refund', 2),
(2, 'Reschedule', 8),
(3, 'Luggage', 7);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `departmentList` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `departmentList`) VALUES
(2, 'Finance'),
(7, 'Luggage'),
(8, 'Landside Operation');

-- --------------------------------------------------------

--
-- Table structure for table `department12`
--

CREATE TABLE `department12` (
  `id` int(11) NOT NULL,
  `departmentList` varchar(256) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `detailDescription` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department12`
--

INSERT INTO `department12` (`id`, `departmentList`, `fullname`, `detailDescription`) VALUES
(2, 'Finance', 'Liyana', 'Tolong bagi duit saya balik'),
(7, 'Luggage', 'nenna', 'wsded'),
(8, 'Landside Operation', 'haha', 'huhu');

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE `officer` (
  `id` int(10) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `hpnumber` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `departmentList` varchar(255) NOT NULL,
  `passwordd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `officer`
--

INSERT INTO `officer` (`id`, `fullname`, `hpnumber`, `email`, `departmentList`, `passwordd`) VALUES
(4, 'Hafizah', 143958431, 'hafizah@gmail.com', 'Finance', 'hafizah'),
(5, 'Mardiana', 1131623836, 'mardiana@gmail.com', 'Lanside Operation', 'mardiana'),
(6, 'Khairun', 1331623836, 'khairun@gmail.com', 'Baggage', 'khairun');

-- --------------------------------------------------------

--
-- Table structure for table `officer12`
--

CREATE TABLE `officer12` (
  `id` int(10) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `department_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `officer12`
--

INSERT INTO `officer12` (`id`, `fullname`, `email`, `password`, `department_id`) VALUES
(1, 'mar', 'mar@gmail.com', 'mar', 2),
(2, 'faz', 'faz@gmail.com', 'faz', 7),
(3, 'zah', 'zah@gmail.com', 'zah', 8);

-- --------------------------------------------------------

--
-- Table structure for table `officerdepartment`
--

CREATE TABLE `officerdepartment` (
  `id` int(10) NOT NULL,
  `datetime` datetime NOT NULL,
  `comCategory` varchar(100) NOT NULL,
  `flightNumber` varchar(100) NOT NULL,
  `fromm` varchar(100) NOT NULL,
  `too` varchar(100) NOT NULL,
  `status` varchar(256) NOT NULL,
  `officer_fullname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usercomplaint`
--

CREATE TABLE `usercomplaint` (
  `id` int(11) NOT NULL,
  `user_id` int(8) DEFAULT NULL,
  `officer_id` int(8) DEFAULT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `comCategory` varchar(100) NOT NULL,
  `flightNumber` varchar(100) NOT NULL,
  `fromm` varchar(100) NOT NULL,
  `too` varchar(100) NOT NULL,
  `comDescription` varchar(256) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'PENDING'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usercomplaint`
--

INSERT INTO `usercomplaint` (`id`, `user_id`, `officer_id`, `fullname`, `email`, `datetime`, `comCategory`, `flightNumber`, `fromm`, `too`, `comDescription`, `status`) VALUES
(2, 0, NULL, 'Mohd Fazly', 'Mohdfazly@gmail.com', '2022-07-03 06:58:19', 'Refund', 'WAW123', 'KLIA2', 'Sandakan', 'reschedule suddenly', 'PENDING'),
(3, 0, NULL, '', '', '2022-07-03 06:58:19', 'Refund', 'hhh', 'haha', 'hihi', 'huhu', 'PENDING'),
(4, 0, NULL, '', '', '2022-07-03 06:58:19', 'Refund', 'haha', 'hihi', 'huhu', 'lala', 'PENDING'),
(5, 0, NULL, '', '', '2022-07-03 06:58:19', 'Reschedule', 'akblabla', 'abblabla', 'aublabla', 'cacaca', 'PENDING'),
(6, 0, NULL, '', '', '2022-07-03 06:58:19', 'Refund', 'duitku', 'duitmu', 'jua', 'lahhh', 'PENDING'),
(7, 0, NULL, 'wawan', '', '2022-07-03 06:58:19', 'Reschedule', '12298239', 'Sandakan', 'KLIA2', 'Complaint about try', 'PENDING'),
(8, 0, NULL, 'Fazly', 'Mohdfazly@gmail.com', '2022-07-03 06:58:19', 'Mishandled Baggage', '123465', 'Sandakan', 'KLIA2', 'missing luggage', 'PENDING'),
(9, 0, NULL, 'Fazly', 'Mohdfazly@gmail.com', '2022-07-03 06:58:19', 'Refund', '12298239', 'Sandakan', 'KLIA2', 'Minta Pulang', 'PENDING'),
(10, 0, NULL, 'Fazly', 'Mohdfazly@gmail.com', '2022-07-03 06:58:19', 'Other', 'duitku', 'Sandakan', 'KLIA2', 'dekiabb', 'PENDING'),
(11, 0, NULL, 'Fazly', 'Mohdfazly@gmail.com', '2022-07-03 06:58:19', 'Food', '12298239', 'Sandakan', 'KLIA2', 'not good', 'PENDING'),
(12, 0, NULL, 'wawan', 'wawan@gmail.com', '2022-07-03 06:58:19', 'Refund', '12566', 'Tawau', 'Kota Kinabalu', 'Terbakar', 'PENDING'),
(13, 0, NULL, 'wawan', 'wawan@gmail.com', '2022-07-03 06:58:19', 'Refund', '12566', 'Tawau', 'Kota Kinabalu', 'Terbakar', 'PENDING'),
(14, 0, NULL, 'wawan', 'wawan@gmail.com', '2022-07-03 06:58:19', 'Refund', 'hhj', 'kk', 'llklk', 'jkjlkj', 'PENDING'),
(15, NULL, NULL, 'wawan', 'wawan@gmail.com', '2022-07-06 06:35:34', 'Reschedule', '12567', 'Sandakan', 'Kota Kinabalu', 'Jadual Padat', 'PENDING'),
(16, NULL, NULL, 'wawan', 'wawan@gmail.com', '2022-07-06 06:48:57', 'Luggage', '12567', 'Tawau', 'Kota Kinabalu', 'lost Bagasi', 'PENDING'),
(17, NULL, NULL, 'qaqa', 'qaqa@gmail.com', '2022-07-09 06:43:56', 'Refund', 'KA1236', 'Langkawi', 'KLIA2', 'Cancel Flight', 'PENDING'),
(18, NULL, NULL, 'fazly', 'mohdfazly@gmail.com', '2022-07-09 09:20:21', 'Luggage', 'KA1256', 'Kuching', 'Sandakan', 'Lost Parcel', 'PENDING'),
(19, NULL, NULL, 'ali', 'ali@gmail.com', '2022-07-09 09:47:45', 'Refund', 'AK1236', 'KLIA2', 'Sandakan', 'Money back', 'PENDING'),
(20, NULL, NULL, 'qaqar', 'qaqar@gmail.com', '2022-07-09 09:49:45', 'Luggage', 'AK4571', 'KLIA2', 'Kuantan', 'Lost luggage', 'PENDING'),
(21, NULL, NULL, 'mardiana', 'mardiana@gmail.com', '2022-07-09 09:53:43', 'Refund', 'KA1256', 'Lahad Datu', 'KLIA2', 'Mahu Duitku Balik', 'PENDING'),
(22, NULL, NULL, 'khalid al-walid', 'khalid@gmail.com', '2022-07-09 09:56:24', 'Reschedule', 'KA1988', 'Pasir Mas', 'KLIA2', 'Nak Minggu depan yer', 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `address` varchar(256) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `address`, `date`, `email`, `password`) VALUES
(1, 'fazly', '', '2022-06-24 15:40:39', 'mohdfazly@gmail.com', 'fazly'),
(3, 'ali', '', '2022-06-24 15:40:39', 'ali@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(6, 'baba', '', '2022-06-24 15:40:39', 'baba@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'wawan', '', '2022-06-24 15:40:39', 'wawan@gmail.com', 'wawan'),
(9, 'mardiana', '', '2022-06-24 15:40:39', 'mardiana@gmail.com', 'mar'),
(10, 'qaqa', '', '2022-06-24 15:40:39', 'qaqa@gmail.com', 'cab197e67ce18583777baa6157e52c53'),
(13, 'qaqar', '', '2022-06-24 15:40:39', 'qaqar@gmail.com', 'qaqa'),
(14, 'suhayl', '', '2022-06-24 15:40:39', 'suhayl@gmail.com', '0ce2d0818945a84277e959dac0718a10'),
(16, 'Nisa', '', '2022-06-24 15:40:39', 'nisa@gmail.com', '5fad30428811fe378fd389cd7659a33c'),
(17, 'Mohd Fazly', '', '2022-06-24 15:40:39', '2020819344@student.uitm.edu.my', '1bad59b570b8141779739c1bbf16e9eb'),
(21, 'Mohd Fazly', 'Kampung Pisang', '2022-06-29 00:00:00', 'Mohdfazly@gmail.com', '24f5335b0a330adf7690a813567d8532'),
(22, 'ali', 'Kampung Pisang', '2022-06-29 00:00:00', 'ali@gmail.com', 'ali'),
(23, 'Besar', 'Kampung Besar', '2022-07-09 00:00:00', 'besar@gmail.com', 'b6aa11eb569552a47ce27a90459ef42e'),
(26, 'Mohd Nasrun', 'Kampung Pisang', '2022-08-06 00:00:00', 'nasrun@gmail.com', 'nasrunn'),
(28, 'bapa', 'Kampung Pisang', '2022-07-09 00:00:00', 'bapa@gmail.com', 'bapa'),
(30, 'besar', 'Kampung Pisang', '2022-07-09 00:00:00', 'besar@gmail.com', 'besar'),
(31, 'aaa', 'Kampung Pisang', '2022-07-09 00:00:00', 'aaa@gmail.com', 'aaa'),
(34, 'khalid al-walid', 'Kampung Tengah Kota Bharu', '2022-07-09 00:00:00', 'khalid@gmail.com', 'khalid');

-- --------------------------------------------------------

--
-- Table structure for table `userss`
--

CREATE TABLE `userss` (
  `id` int(10) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `address` varchar(256) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userss`
--

INSERT INTO `userss` (`id`, `fullname`, `address`, `date`, `email`, `user_type`, `password`) VALUES
(1, 'fazly', '', '2022-06-24 15:40:39', 'mohdfazly@gmail.com', 'user', '202cb962ac59075b964b07152d234b70'),
(3, 'ali', '', '2022-06-24 15:40:39', 'ali@gmail.com', 'user', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'fazly', '', '2022-06-24 15:40:39', 'mohdfazly@gmail.com', 'user', '827ccb0eea8a706c4c34a16891f84e7b'),
(5, 'fazly', '', '2022-06-24 15:40:39', 'mohdfazly@gmail.com', 'user', '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'baba', '', '2022-06-24 15:40:39', 'baba@gmail.com', 'admin', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'wawan', '', '2022-06-24 15:40:39', 'wawan@gmail.com', 'user', '0a000f688d85de79e3761dec6816b2a5'),
(8, 'khalid', '', '2022-06-24 15:40:39', 'khalid@gmail.com', 'user', '794761a765ceca759536a1bf39100142'),
(9, 'mardiana', '', '2022-06-24 15:40:39', 'mardiana@gmail.com', 'user', 'a8c42785f460a80554cf047a54360edc'),
(10, 'qaqa', '', '2022-06-24 15:40:39', 'qaqa@gmail.com', 'user', 'cab197e67ce18583777baa6157e52c53'),
(13, 'qaqar', '', '2022-06-24 15:40:39', 'qaqar@gmail.com', 'user', 'cab197e67ce18583777baa6157e52c53'),
(14, 'suhayl', '', '2022-06-24 15:40:39', 'suhayl@gmail.com', 'user', '0ce2d0818945a84277e959dac0718a10'),
(15, 'Fazly', '', '2022-06-24 15:40:39', 'Mohdfazly@gmail.com', 'user', '24f5335b0a330adf7690a813567d8532'),
(16, 'Nisa', '', '2022-06-24 15:40:39', 'nisa@gmail.com', 'user', '5fad30428811fe378fd389cd7659a33c'),
(17, 'Mohd Fazly', '', '2022-06-24 15:40:39', '2020819344@student.uitm.edu.my', 'user', '1bad59b570b8141779739c1bbf16e9eb'),
(18, 'Mohd Fazly', '', '2022-06-24 15:40:39', 'Mohdfazly@gmail.com', 'user', '24f5335b0a330adf7690a813567d8532');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorydepartment`
--
ALTER TABLE `categorydepartment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department12`
--
ALTER TABLE `department12`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `officer`
--
ALTER TABLE `officer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `officer12`
--
ALTER TABLE `officer12`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `officerdepartment`
--
ALTER TABLE `officerdepartment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usercomplaint`
--
ALTER TABLE `usercomplaint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userss`
--
ALTER TABLE `userss`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorydepartment`
--
ALTER TABLE `categorydepartment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `department12`
--
ALTER TABLE `department12`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `officer`
--
ALTER TABLE `officer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `officer12`
--
ALTER TABLE `officer12`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `officerdepartment`
--
ALTER TABLE `officerdepartment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usercomplaint`
--
ALTER TABLE `usercomplaint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `userss`
--
ALTER TABLE `userss`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
