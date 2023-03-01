-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2023 at 12:14 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spa`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` int(10) NOT NULL,
  `date` varchar(20) NOT NULL,
  `description` varchar(200) NOT NULL,
  `email` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `phone` int(16) NOT NULL,
  `payment_mode` varchar(250) NOT NULL,
  `amount_paid` varchar(250) NOT NULL,
  `service` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `stat` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `date`, `description`, `email`, `name`, `phone`, `payment_mode`, `amount_paid`, `service`, `time`, `stat`) VALUES
(36, '2022-09-07', 'full', 'mwai.marywatetu@gmail.com', 'mary', 715821004, 'Mpesa', '1', 'Standard Package (Ks', '0900 hrs - 1100 hrs', '0'),
(43, '2022-09-08', 'kk', 'mwai.marywatetu@gmail.com', 'mary', 715821004, 'Mpesa', '1', 'Standard Package (Ks', '0900 hrs - 1100 hrs', NULL),
(44, '2022-09-08', 'fff', 'mwai.marywatetu@gmail.com', 'mary', 715821004, 'Mpesa', '1', 'Standard Package (Ks', '0900 hrs - 1100 hrs', NULL),
(45, '2022-09-08', 'pedicure and manicure', 'olala@00', 'mary', 715821004, 'Mpesa', '1', 'Standard Package (Ks', '0900 hrs - 1100 hrs', '1'),
(47, '2022-02-22', 'Officia doloribus du', 'muxawasy@mailinator.com', 'Cheyenne Thompson', 22, 'Payment After Service', 'Not Paid', 'Choose the service y', 'Choose the time', NULL),
(48, '2003-09-02', 'Officia est est am', 'nogo@mailinator.com', 'Alice Padilla', 2147483647, 'Mpesa', '1', 'Standard Package (Ks', '1100 - 1300', '1'),
(49, '2023-03-02', 'quick fast minus slow', 'tshelby@gmail.com', 'Thomas Shelby', 712345678, 'Payment After Service', 'Not Paid', 'Pedicure', 'Choose the time', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `message` varchar(200) NOT NULL,
  `name` varchar(18) NOT NULL,
  `subject` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `package_id` int(4) NOT NULL,
  `package` varchar(18) NOT NULL,
  `price` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(40) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `username` varchar(18) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_role` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `firstname`, `lastname`, `password`, `username`, `user_id`, `user_role`) VALUES
('mary@gmail.com', 'mary', 'watetu', 'password', 'mary', 8, 'Admin'),
('olala@00', 'Victor', 'Olala', 'admin@00', 'Olala', 12, 'Admin'),
('bihybawo@mailinator.com', 'Abigail Weeks', 'Dieter Hood', 'Pa$$w0rd!', 'nefyza', 15, '2'),
('fynuhulyr@mailinator.com', 'Ezra Delaney', 'Hammett Rasmussen', 'Pa$$w0rd!', 'caqidiwewe', 16, 'User'),
('liziburu@mailinator.com', 'Florence Richard', 'Xena Slater', 'Pa$$w0rd!', 'kosaqema', 17, 'User'),
('tshelby@gmail.com', 'Thomas', 'Shelby', 'Tshelby@1', 'Shelby', 20, 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
