-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2024 at 02:48 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `billing_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `details_tb`
--

CREATE TABLE `details_tb` (
  `id` int(100) NOT NULL,
  `c_country` varchar(100) NOT NULL,
  `c_fname` varchar(100) NOT NULL,
  `c_lname` varchar(100) NOT NULL,
  `c_company_name` varchar(100) NOT NULL,
  `c_address` varchar(50) NOT NULL,
  `c_address2` varchar(50) NOT NULL,
  `c_state` varchar(50) NOT NULL,
  `c_postal` varchar(20) NOT NULL,
  `c_email` varchar(20) NOT NULL,
  `c_phone` varchar(20) NOT NULL,
  `c_password` varchar(20) NOT NULL,
  `c_order_notes` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `details_tb`
--

INSERT INTO `details_tb` (`id`, `c_country`, `c_fname`, `c_lname`, `c_company_name`, `c_address`, `c_address2`, `c_state`, `c_postal`, `c_email`, `c_phone`, `c_password`, `c_order_notes`) VALUES
(1, '3', 'kats', 'daniel', 'devs', '12345', 'suiot', 'uganda', '2342', 'dan@gmail.com', '1234567890', '1234', 'here we are');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(100) NOT NULL,
  `photo_path` varchar(225) NOT NULL,
  `item` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `photo_path`, `item`, `price`) VALUES
(1, 'uploads/dan.jpg', '345678', '234567'),
(3, 'uploads/run.jpg', 'it is an image', '300ph'),
(4, 'uploads/run.jpg', 'it is an image', '300ph');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details_tb`
--
ALTER TABLE `details_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details_tb`
--
ALTER TABLE `details_tb`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
