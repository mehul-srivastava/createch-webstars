-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 12, 2021 at 06:14 PM
-- Server version: 10.4.14-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u711328531_webstars`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_status` varchar(120) NOT NULL,
  `payment_id` varchar(120) NOT NULL,
  `category` varchar(255) NOT NULL,
  `invoice` varchar(255) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `user_id`, `amount`, `payment_status`, `payment_id`, `category`, `invoice`, `added_on`) VALUES
(1, 24, 2832000, 'completed', 'pay_HwdmdU04hAE2lq', 'CorsView', '1631468715.pdf', '2021-09-12 11:14:36');

-- --------------------------------------------------------

--
-- Table structure for table `contact_queries`
--

CREATE TABLE `contact_queries` (
  `id` int(11) NOT NULL,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_queries`
--

INSERT INTO `contact_queries` (`id`, `name`, `email`, `message`, `status`) VALUES
(1, 'wfeq', 'wfe', 'qsefeqf', 'attended'),
(2, '3reg', 'eqf', 'eqfdva', 'attended'),
(3, 'ef1q', 'feqf', '4ef2dqw', 'attended'),
(4, 'Name', 'email@gmail.com', 'message', 'attended'),
(5, 'Name', 'email@gmail.com', 'message', 'attended'),
(6, '24r', 'qefwrbtfg@324e.co', 'w2fgtbe', 'attended'),
(7, 'qef2rgte', 'jstseguru@gmail.com', 'eqrfw', 'attended'),
(8, 'name', 'wefqdrfw@2f4.co', 'tuvyihbjo', 'attended'),
(9, 'name', 'wefqdrfw@2f4.co', 'tuvyihbjo', 'attended'),
(10, 'name', 'wefqdrfw@2f4.co', 'tuvyihbjo', 'attended'),
(11, 'tehrf', 'jstseguru@gmail.com', '3efdrw', 'attended'),
(12, 'tehrf', 'jstseguru@gmail.com', '3efdrw', 'attended'),
(13, 'Divyam Prusty', 'divyamprusty@protonmail.com', 'Hello Mr. Garu. I want to join your team.', 'attended');

-- --------------------------------------------------------

--
-- Table structure for table `otp_authentication`
--

CREATE TABLE `otp_authentication` (
  `id` int(11) NOT NULL,
  `otp` varchar(11) NOT NULL,
  `phone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `otp_authentication`
--

INSERT INTO `otp_authentication` (`id`, `otp`, `phone`) VALUES
(30, '671646', '9811679046');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `age` varchar(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `age`, `password`) VALUES
(17, 'Garv Jain', 'garvj03@gmail.com', '9811679045', '', '$2y$10$JqrrBnNtNUW5tdPVOftqROKtmcEfu1jDY0Ch9l1CaN5IZHdwKmsCq'),
(18, 'Divyam Prusty', 'divyamprusty536@gmail.com', '8920403423', '15', '$2y$10$4QyhXslYGOUbDvUBIDYveeyd4jpfehmuzfZdiS9UOG/EJSYwRlMjS'),
(24, 'Mehul Srivastava', 'mehulsrivastava1206@gmail.com', '9811679046', '19', '$2y$10$ETueR36N1/fVCLTtlx8rN.Z5aZdWT3VpaGfD6ibDvn5xA7ipWqC96');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_queries`
--
ALTER TABLE `contact_queries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otp_authentication`
--
ALTER TABLE `otp_authentication`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_queries`
--
ALTER TABLE `contact_queries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `otp_authentication`
--
ALTER TABLE `otp_authentication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
