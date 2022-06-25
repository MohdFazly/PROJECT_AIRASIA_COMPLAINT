-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 16, 2022 at 12:59 PM
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
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `address`, `password`) VALUES
(1, 'fazly', 'mohdfazly@gmail.com', 'user', '202cb962ac59075b964b07152d234b70'),
(2, 'fazly', 'mohdfazly@gmail.com', 'user', '202cb962ac59075b964b07152d234b70'),
(3, 'ali', 'ali@gmail.com', 'user', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'fazly', 'mohdfazly@gmail.com', 'user', '827ccb0eea8a706c4c34a16891f84e7b'),
(5, 'fazly', 'mohdfazly@gmail.com', 'user', '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'baba', 'baba@gmail.com', 'admin', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'wawan', 'wawan@gmail.com', 'user', '0a000f688d85de79e3761dec6816b2a5'),
(8, 'khalid', 'khalid@gmail.com', 'user', '794761a765ceca759536a1bf39100142');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
