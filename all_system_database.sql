-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2023 at 07:39 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_myclinicappointment_applications`
--

INSERT INTO `tbl_myclinicappointment_applications` (`id`, `first_name`, `last_name`, `email_address`, `mobile_number`, `medical_license_number`, `specialization`, `description`, `status`) VALUES
(36, 'Erica', 'Amen', 'ericaamen@gmail.com', '09123456789', '321645987', 'Internal Medicine', 'Sample', 'Approved'),
(37, 'errol', 'gengeng', 'errol09876@gmail.com', '0214563987', '1236547889', 'Radiology', 'Crazy', 'Approved'),
(39, 'Robert', 'San Antonio', 'marcrobertsanantonio@gmail.com', '09214740633', '123456', 'Infectious Disease', 'A Good doctor and not so suspicious madman\r\n', 'Approved');

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
  `appointment_time` varchar(255) NOT NULL,
  `contact_method` varchar(255) NOT NULL,
  `reasons` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_myclinicappointment_appointments`
--

INSERT INTO `tbl_myclinicappointment_appointments` (`id`, `first_name`, `last_name`, `email_address`, `mobile_number`, `doctor_specialization`, `doctor_name`, `appointment_date`, `appointment_time`, `contact_method`, `reasons`, `status`) VALUES
(8, 'Katere', 'Tungol', 'katere123@gmail.com', '123456789', 'Internal Medicine', '47', 'October 15, 2024', '10:00', 'Phone Call', 'sample', 'Pending'),
(9, 'name', 'name2', 'kate100797@gmail.com', '09123456789', 'Internal Medicine', '47', 'December 14, 2023 8:00 AM', 'undefined NaN, NaN 12:NaN AM', 'Email', 'adasda', 'Approved'),
(10, 'name', 'name2', 'qweer@gmail.com', '09123456789', 'Internal Medicine', '47', 'January 2, 2024 8:00 AM', 'undefined NaN, NaN 12:NaN AM', 'Email', '21321321', 'Approved'),
(11, 'name', 'name2', 'jameel.mapagmahal@gmail.com', '09123456789', 'Internal Medicine', '47', 'December 30, 2023 8:00 AM', 'undefined NaN, NaN 12:NaN AM', 'Phone Call', 'asdasd', 'Approved'),
(12, 'name', 'name2', 'jameel.mapagmahal@gmail.com', '09123456789', 'Radiology', '48', 'December 26, 2023 8:00 AM', 'undefined NaN, NaN 12:NaN AM', 'Email', '3213213', 'Pending'),
(13, 'name', 'Sugarplum', 'jameel.mapagmahal@gmail.com', '09123456789', 'Infectious Disease', '49', '2023-12-22', '12:15', 'Email', '12321', 'Pending'),
(14, 'Erica', 'Me', 'ericame123@gmail.com', '09123456789', 'Internal Medicine', '47', '2023-12-18', '10:30', 'Phone Call', 'sample', 'Approved'),
(15, 'kate', 'katey', 'katekatey123@gmail.com', '09123456789', 'Internal Medicine', '47', '2023-12-14', '10:30', 'Email', 'sample', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_myclinicappointment_doctors`
--

CREATE TABLE `tbl_myclinicappointment_doctors` (
  `id` int(11) NOT NULL,
  `useraccount_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_num` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `mode_of_payment` varchar(255) NOT NULL,
  `specialization` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_myclinicappointment_doctors`
--

INSERT INTO `tbl_myclinicappointment_doctors` (`id`, `useraccount_id`, `name`, `date_of_birth`, `gender`, `email`, `mobile_num`, `payment`, `mode_of_payment`, `specialization`) VALUES
(34, 47, 'Erica Amen', 'ericaamen@gmail.com', '03/03/1998', 'male', '09123456789', '', '500', 'Internal Medicine'),
(35, 48, 'errol gengeng', '', '', 'errol09876@gmail.com', '0214563987', '', '', 'Radiology'),
(36, 49, 'Robert San Antonio', '', '', 'marcrobertsanantonio@gmail.com', '09214740633', '', '', 'Infectious Disease');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_myclinicappointment_doctors_schedule`
--

CREATE TABLE `tbl_myclinicappointment_doctors_schedule` (
  `id` int(11) NOT NULL,
  `useraccount_id` int(11) NOT NULL,
  `week` varchar(255) NOT NULL,
  `time_in` varchar(255) NOT NULL,
  `time_out` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_myclinicappointment_doctors_schedule`
--

INSERT INTO `tbl_myclinicappointment_doctors_schedule` (`id`, `useraccount_id`, `week`, `time_in`, `time_out`) VALUES
(4, 48, 'Monday', '10:00', '11:00'),
(5, 48, 'Tuesday', '11:00', '12:00'),
(6, 48, 'Wednesday', '09:00', '10:00'),
(7, 48, 'Thursday', '07:00', '08:00'),
(8, 48, 'Friday', '07:30', '08:30'),
(9, 48, 'Saturday', '14:00', '15:00'),
(10, 48, 'Sunday', '12:20', '13:20'),
(11, 49, 'Monday', '12:00', '17:00'),
(12, 49, 'Tuesday', '11:00', '16:00'),
(13, 49, 'Wednesday', '07:00', '11:00'),
(14, 47, 'Monday', '08:00', '17:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_myclinicappointment_messages`
--

CREATE TABLE `tbl_myclinicappointment_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_myclinicappointment_messages`
--

INSERT INTO `tbl_myclinicappointment_messages` (`id`, `name`, `email`, `message`) VALUES
(1, 'Juanny', 'Juanny@gmail.com', 'I have a problem'),
(2, 'Juanny', 'kadhjsa@gmail.com', 'nsadkjhaskdfsakjdhksaj'),
(3, 'marc', 'marc@gmail.com', 'i have concern'),
(4, 'katere tungol', 'katere123@gmail.com', 'sample');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_myclinicappointment_transaction`
--

CREATE TABLE `tbl_myclinicappointment_transaction` (
  `id` int(11) NOT NULL,
  `doctors_id` int(11) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `appointment_date` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_myclinicappointment_useraccounts`
--

CREATE TABLE `tbl_myclinicappointment_useraccounts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_myclinicappointment_useraccounts`
--

INSERT INTO `tbl_myclinicappointment_useraccounts` (`id`, `name`, `email`, `mobile_number`, `username`, `password`, `image`, `user_type`) VALUES
(1, 'Kate', 'kate100797@gmail.com', '09123456789', 'admin', '$2y$10$qZaaUdNw9dwAlnMZDFfqSOj5mVKvlNC86XHgRRWs/UaKyQMHZINby', 'bde6cdb96890a0902ecfdb7ad50cabc1.jpg', 'admin'),
(24, 'Emmanuel O. Nario', '', '', 'SuperNario', '$2y$10$oYug5CYi.sG5M4lmvsMGxulH5dp6ZhgBIYbunHCoH/9FF0eC9ZE2W', 'nario.png', 'admin2'),
(25, 'Erianie Jean B. Opima', '', '', 'Yhanie', '$2y$10$mpDUC0ciQrc.oBvYSy3i8eK/dyqYKhQf0hqFbhIv7sevRl7mYl1um', 'errianie.png', 'admin2'),
(26, 'Norianamy A. Baldado', '', '', 'namy', '$2y$10$c9QFyD/Meq8wSvGoLRecVe4Y99vqX/FIMyGtVOf2XEsL9fSNrUf5u', 'namy.png', 'admin2'),
(27, 'marc robert', '', '', 'Wehrmacht', '$2y$10$1x1YKFnBPlcgC4MNRxXdiOBg7Tm2O5JVPp7UeDv2mUQAiaFIVIjca', 'marc.png', 'admin2'),
(28, 'Erica T. Mamanao', '', '', 'Erica', '$2y$10$rTAc6PxX312T0WzQUG/2uOaOU3koqTUyvq/o.nD3I2hhacxhbD3cS', 'erica.png', 'admin2'),
(29, 'Errol valencia', '', '', 'Errol', '$2y$10$XIPOOjrzW/yNmhrvTmJ8pe2bMg7Qhv5/eCOP61nLnvFDJq2QAPwti', 'errol.png', 'admin2'),
(30, 'Rica Sobretodo', '', '', 'Rica', '$2y$10$2LEzxgiUq5by3mY/2hC5RuHdQjl/L2OzFySYf7ktKYktlIts0yeHG', 'rica.png', 'admin2'),
(47, 'Erica Amen', 'ericaamen@gmail.com', '09123456789', 'ericaamen', '$2y$10$yCgB63kGF.dseHcQqJbAyuQkelcldzY6g.R82uN5T7C4NvEPFTuE.', 'sugarplum.png', 'doctor'),
(48, 'errol gengeng', '', '', 'errolboy', '$2y$10$2z.AZCHfQpRwgYBOTVkr..BNQiOYM7099JSo5c3ieEsJQ31JaC5Z.', 'default_image_user.png', 'doctor'),
(49, 'Robert San Antonio', '', '', 'area51', '$2y$10$gc8kXnch8BHYWf0IFxiDSeH54ljEmMQhJKQOLMACZ8YdmGDmzdjiW', 'default_image_user.png', 'doctor');

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
-- Indexes for table `tbl_myclinicappointment_doctors_schedule`
--
ALTER TABLE `tbl_myclinicappointment_doctors_schedule`
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
-- Indexes for table `tbl_myclinicappointment_transaction`
--
ALTER TABLE `tbl_myclinicappointment_transaction`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tbl_myclinicappointment_appointments`
--
ALTER TABLE `tbl_myclinicappointment_appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_myclinicappointment_doctors`
--
ALTER TABLE `tbl_myclinicappointment_doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_myclinicappointment_doctors_schedule`
--
ALTER TABLE `tbl_myclinicappointment_doctors_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_myclinicappointment_messages`
--
ALTER TABLE `tbl_myclinicappointment_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_myclinicappointment_notifications`
--
ALTER TABLE `tbl_myclinicappointment_notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_myclinicappointment_transaction`
--
ALTER TABLE `tbl_myclinicappointment_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_myclinicappointment_useraccounts`
--
ALTER TABLE `tbl_myclinicappointment_useraccounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
