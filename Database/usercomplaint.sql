-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 17, 2022 at 09:15 AM
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
-- Table structure for table `usercomplaint`
--

CREATE TABLE `usercomplaint` (
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comCategory` varchar(100) NOT NULL,
  `flightNumber` varchar(100) NOT NULL,
  `fromm` varchar(100) NOT NULL,
  `too` varchar(100) NOT NULL,
  `comDescription` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usercomplaint`
--

INSERT INTO `usercomplaint` (`fullname`, `email`, `comCategory`,`flightNumber`, `fromm`, `too`, `comDescription`) VALUES
('', '', '', '', '', '', ''),
('Mohd Fazly', 'Mohdfazly@gmail.com', 'Refund', 'WAW123', 'KLIA2', 'Sandakan', 'reschedule suddenly');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
