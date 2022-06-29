-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 26, 2022 at 07:31 AM
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

INSERT INTO `users` (`id`, `fullname`, `address`, `date`, `email`, `user_type`, `password`) VALUES
(1, 'fazly', '', '2022-06-24 15:40:39', 'mohdfazly@gmail.com', 'user', '202cb962ac59075b964b07152d234b70'),
(2, 'fazly', '', '2022-06-24 15:40:39', 'mohdfazly@gmail.com', 'user', '202cb962ac59075b964b07152d234b70'),
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
