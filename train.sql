-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 05, 2020 at 07:47 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: ` train`
--

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE `train` (
  `T` int(3) NOT NULL,
  `Station` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Timeout` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `To_Station` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `out_Station` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Station_destination` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `To_time` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Note` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`T`, `Station`, `Timeout`, `To_Station`, `out_Station`, `Station_destination`, `To_time`, `Note`) VALUES
(72, 'อุบลราชธานี', '05.40', '08.22', '08.23', 'กรุงเทพ', '14.55', 'รถด่วนดีเซลราง'),
(234, 'สุรินทร์', '05.20', '05.53', '05.54', 'กรุงเทพ', '14.15', 'รถดีเซลราง'),
(424, 'อุบลราชธานี', '05.50', '07.39', '07.40', 'นครราชสีมา', '09.50', 'รถดีเซลราง'),
(428, 'อุบลราชธานี', '06.20', '09.38', '09.39', 'นครราชสีมา', '11.45', 'รถดีเซลราง');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `train`
--
ALTER TABLE `train`
  ADD PRIMARY KEY (`T`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `train`
--
ALTER TABLE `train`
  MODIFY `T` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=429;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
