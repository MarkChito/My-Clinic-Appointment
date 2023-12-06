-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2023 at 07:42 AM
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

--
-- Dumping data for table `tbl_myclinicappointment_applications`
--

INSERT INTO `tbl_myclinicappointment_applications` (`id`, `first_name`, `last_name`, `email_address`, `mobile_number`, `medical_license_number`, `specialization`, `description`, `status`) VALUES
(1, 'Juan', 'Dela Cruz', 'reymartosabel@gmail.com', '09123334456', '123908213098', 'Obstetrics and Gynecology', 'Lorem Ipsum', 'Approved'),
(2, 'rica', 'sobretod', 'ricasobretodo@gmail.com', '013234213', '12343', 'Pathology', 'hdhufdjbcjsgd', 'Pending'),
(3, 'erica', 'mamanao', 'erica123@gmail.com', '09123456789', '1234567899', 'Oncology', 'sample', 'Pending'),
(4, 'ERROL', 'NARIO', 'errolnario123@gmail.com', '09123456789', '123456789', 'Psychiatry', 'meee', 'Pending'),
(5, 'qwe', 'qwe', 'qwe@gmail.com', '09108662314', '123123123123', 'Ophthalmology', 'This is nothing to me', 'Pending');

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
  `doctor_specialization` varchar(255) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `appointment_date` varchar(255) NOT NULL,
  `contact_method` varchar(255) NOT NULL,
  `reasons` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_myclinicappointment_appointments`
--

INSERT INTO `tbl_myclinicappointment_appointments` (`id`, `first_name`, `last_name`, `email_address`, `mobile_number`, `doctor_specialization`, `doctor_name`, `appointment_date`, `contact_method`, `reasons`, `status`) VALUES
(1, 'name', 'name2', 'qweer@gmail.com', '09123456789', 'Surgery', '8', 'December 20, 2023 1:58 PM', 'Email', 'pineapple pen', 'Pending'),
(2, 'Jameel', 'Sugarplum', 'jameel.mapagmahal@gmail.com', '09123456789', 'Pediatrics', '7', 'December 14, 2023 1:58 PM', 'Email', 'fgh', 'Pending'),
(3, 'Jameel', 'Sugarplum', 'jameel.mapagmahal@gmail.com', '09123456789', 'Surgery', '8', 'January 5, 2024 1:59 PM', 'Phone Call', 'asdsads', 'Pending'),
(4, 'name', 'name2', 'jameel.mapagmahal@gmail.com', '09123456789', 'Pediatrics', '7', 'December 7, 2023 2:08 PM', 'Email', '123213', 'Pending'),
(5, 'Erica', 'sad', 'ericasad@gmail.com', '09123456789', 'Surgery', '8', 'December 14, 2023 8:20 AM', 'Phone Call', 'Sample', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_myclinicappointment_doctors`
--

CREATE TABLE `tbl_myclinicappointment_doctors` (
  `id` int(11) NOT NULL,
  `useraccount_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_num` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `specialization` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_myclinicappointment_doctors`
--

INSERT INTO `tbl_myclinicappointment_doctors` (`id`, `useraccount_id`, `name`, `email`, `mobile_num`, `payment`, `specialization`) VALUES
(3, 7, 'rica sobretod', 'ricasobretod@gmail.com', '09123456789', '0', 'Pediatrics'),
(4, 8, 'erica mamanao', '0', '0', '0', 'Surgery'),
(5, 10, 'mapagmahal', '0', '0', '0', 'Pediatrics'),
(6, 11, 'ERROL NARIO', '', '', '', ''),
(7, 12, 'Juan Dela Cruz', '', '', '', ''),
(8, 13, 'Juan Dela Cruz', '', '', '', '');

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

--
-- Dumping data for table `tbl_myclinicappointment_messages`
--

INSERT INTO `tbl_myclinicappointment_messages` (`id`, `name`, `email`, `message`) VALUES
(1, 'Juanny', 'Juanny@gmail.com', 'I have a problem'),
(2, 'Juanny', 'kadhjsa@gmail.com', 'nsadkjhaskdfsakjdhksaj'),
(3, 'marc', 'marc@gmail.com', 'i have concern');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_myclinicappointment_notifications`
--

CREATE TABLE `tbl_myclinicappointment_notifications` (
  `id` int(11) NOT NULL,
  `useraccount_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_myclinicappointment_notifications`
--

INSERT INTO `tbl_myclinicappointment_notifications` (`id`, `useraccount_id`, `title`, `details`, `status`) VALUES
(1, 7, 'New Appointment', 'Client Name: Juan Dela Cruz\r\nAppointment Date: December 8, 2023\r\nAppointment Time: 11:54 AM', 'unclicked'),
(2, 8, 'New Appointment', 'Client Name: Juan Dela Cruz\r\nAppointment Date: December 8, 2023\r\nAppointment Time: 11:54 AM', 'unclicked'),
(3, 7, 'New Appointment 2', 'Client Name: Juan Dela Cruz\r\nAppointment Date: December 8, 2023\r\nAppointment Time: 11:54 AM', 'clicked');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_myclinicappointment_useraccounts`
--

CREATE TABLE `tbl_myclinicappointment_useraccounts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_myclinicappointment_useraccounts`
--

INSERT INTO `tbl_myclinicappointment_useraccounts` (`id`, `name`, `username`, `password`, `image`, `user_type`) VALUES
(1, 'Administrator', 'admin', '$2y$10$qZaaUdNw9dwAlnMZDFfqSOj5mVKvlNC86XHgRRWs/UaKyQMHZINby', 'sugarplum.png', 'admin'),
(2, 'opima', 'admin2', '$2y$10$RAZR5b7wwDdiLnCjq56X/eUv6NzSHlivalZlC.8tYTJZYv3xij37C', '', 'admin'),
(3, 'Kate', 'kate100797', '$2y$10$RsLjVUGd1r7sR7HBwkfyAuyByc67PBhA8WgZvrzRj7tkkqHfvv2cy', 'sugarplum.png', 'admin'),
(4, 'erika', 'erika.mapagmahal', '$2y$10$iNBeaAherz/qgCdZZb05.u5nxfEkrm1BPIlU0q0pl2DGnXOWPebXa', 'sugarplum.png', 'admin2'),
(7, 'rica sobretod', 'rica', '$2y$10$Nbbtg.qRCohq05mboQD1J.H58.RhkM/.BndCuJQ7ZheMMeXtAUXAq', 'default_image_user.png', 'doctor'),
(8, 'erica mamanao', 'erica.mamanao@gmail.com', '$2y$10$KpioL6UhcMtPF9pEArWtn.CPB9aM6TtM4iCPcUEtGdegKmvGFB8ZG', 'default_image_user.png', 'doctor'),
(9, 'nario', 'nario@gmail.com', '$2y$10$svc3QN/qW6uztaCTa1tPXeoukd6ArrOqpaHfSqYaBlwnbk0LwZfom', 'amber.png', 'admin2'),
(10, '', 'errolnario123@gmail.com', '$2y$10$rDWGd5qD6e.QGplQf0wlze.4Y.zdVywqEtWNxcPoJyoSHaEEy/j7e', 'default_image_user.png', 'doctor'),
(11, 'ERROL NARIO', 'errol', '$2y$10$gqJaRVA1C5gZ/UFMdf/MdOJrcKxcXMtLTlNCpUYlVMkqJmv98jy72', 'default_image_user.png', 'doctor'),
(12, 'Juan Dela Cruz', 'asdsa', '$2y$10$zco2A2.dVcZGtHx5HLMpgObyKTM/ihxMa6bLNIrCBb/1EZix9qqce', 'default_image_user.png', 'doctor'),
(13, 'Juan Dela Cruz', 'reymart', '$2y$10$hMYbHdlpTzo6BmqxBJteBemA.AZYJJVX4wNowVbBs.w/1sgSKqj2a', 'default_image_user.png', 'doctor');

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
-- Indexes for table `tbl_myclinicappointment_doctors`
--
ALTER TABLE `tbl_myclinicappointment_doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_myclinicappointment_messages`
--
ALTER TABLE `tbl_myclinicappointment_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_myclinicappointment_notifications`
--
ALTER TABLE `tbl_myclinicappointment_notifications`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_myclinicappointment_appointments`
--
ALTER TABLE `tbl_myclinicappointment_appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_myclinicappointment_doctors`
--
ALTER TABLE `tbl_myclinicappointment_doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_myclinicappointment_messages`
--
ALTER TABLE `tbl_myclinicappointment_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_myclinicappointment_notifications`
--
ALTER TABLE `tbl_myclinicappointment_notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_myclinicappointment_useraccounts`
--
ALTER TABLE `tbl_myclinicappointment_useraccounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
