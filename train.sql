-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 05, 2020 at 07:41 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `train`
--

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `procession` varchar(3) NOT NULL,
  `Departure_station` varchar(255) NOT NULL,
  `Time_out` varchar(255) NOT NULL,
  `To_huayrat` varchar(255) NOT NULL,
  `Out_huayrat` varchar(255) NOT NULL,
  `Terminal` varchar(255) NOT NULL,
  `To_terminal` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`procession`, `Departure_station`, `Time_out`, `To_huayrat`, `Out_huayrat`, `Terminal`, `To_terminal`, `note`) VALUES
('234', 'สุรินทร์', '05.20', '05.53', '05.54', 'กรุงเทพ', '14.15', 'รถธรรมดา'),
('424', 'สำโรงทาบ', '05.50', '07.39', '07.40', 'นครราชสีมา', '09.50', 'รถดีเซลราง'),
('428', 'อุบลราชธานี', '06.20', '09.38', '09.39', 'นครราชสีมา', '11.45', 'รถดีเซลราง'),
('72', 'อุบลราชธานี', '05.40', '08.22', '08.23', 'กรุงเทพ', '14.55', 'รถด่วนดีเซลราง');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`procession`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
