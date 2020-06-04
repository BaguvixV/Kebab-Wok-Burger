-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2020 at 05:04 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kwb`
--

-- --------------------------------------------------------

--
-- Table structure for table `piegade`
--

CREATE TABLE `piegade` (
  `id` int(11) NOT NULL,
  `pilseta` varchar(255) COLLATE utf8_latvian_ci NOT NULL,
  `cena` decimal(10,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_latvian_ci;

--
-- Dumping data for table `piegade`
--

INSERT INTO `piegade` (`id`, `pilseta`, `cena`) VALUES
(1, 'AIZKRAUKLE', '2.00'),
(2, 'AIZKRAUKLES PAGASTS', '3.00'),
(3, 'SĒRENE-CENTRS', '6.00'),
(4, 'KOKNESE', '7.35'),
(5, 'SKRĪVERI', '9.96'),
(6, 'SECE', '10.54'),
(7, 'DAUDZEVA', '11.12'),
(8, 'STABURAGS', '15.18'),
(9, 'ZIEDI', '5.05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `piegade`
--
ALTER TABLE `piegade`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `piegade`
--
ALTER TABLE `piegade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
