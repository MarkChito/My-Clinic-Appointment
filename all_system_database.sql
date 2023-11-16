-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2023 at 04:29 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `all_system_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_myclinicappointment_applications`
--

CREATE TABLE `tbl_myclinicappointment_applications` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `medical_license_number` varchar(255) NOT NULL,
  `specialization` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_myclinicappointment_appointments`
--

CREATE TABLE `tbl_myclinicappointment_appointments` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `appointment_date` varchar(255) NOT NULL,
  `contact_method` varchar(255) NOT NULL,
  `reasons` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_myclinicappointment_messages`
--

CREATE TABLE `tbl_myclinicappointment_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_myclinicappointment_useraccounts`
--

CREATE TABLE `tbl_myclinicappointment_useraccounts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_myclinicappointment_useraccounts`
--

INSERT INTO `tbl_myclinicappointment_useraccounts` (`id`, `name`, `username`, `password`, `user_type`) VALUES
(1, 'Administrator', 'admin', '$2y$10$qZaaUdNw9dwAlnMZDFfqSOj5mVKvlNC86XHgRRWs/UaKyQMHZINby', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_myclinicappointment_applications`
--
ALTER TABLE `tbl_myclinicappointment_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_myclinicappointment_appointments`
--
ALTER TABLE `tbl_myclinicappointment_appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_myclinicappointment_messages`
--
ALTER TABLE `tbl_myclinicappointment_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_myclinicappointment_useraccounts`
--
ALTER TABLE `tbl_myclinicappointment_useraccounts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_myclinicappointment_applications`
--
ALTER TABLE `tbl_myclinicappointment_applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_myclinicappointment_appointments`
--
ALTER TABLE `tbl_myclinicappointment_appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_myclinicappointment_messages`
--
ALTER TABLE `tbl_myclinicappointment_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_myclinicappointment_useraccounts`
--
ALTER TABLE `tbl_myclinicappointment_useraccounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
