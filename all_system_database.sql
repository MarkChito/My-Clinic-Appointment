-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2023 at 08:09 PM
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
(1, 'Mar Chito', 'Anteja', '00anteja23@gmail.com', '09511816599', '123456789', 'Internal Medicine', 'I am pogeeeee!', 'Approved');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_myclinicappointment_appointments`
--

INSERT INTO `tbl_myclinicappointment_appointments` (`id`, `first_name`, `last_name`, `email_address`, `mobile_number`, `doctor_specialization`, `doctor_name`, `appointment_date`, `appointment_time`, `contact_method`, `reasons`, `status`) VALUES
(1, 'Boo', 'King', '00python23@gmail.com', '09696969699', 'Internal Medicine', '3', '2023-12-17', '08:04', 'Phone Call', 'Fuck You!', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_myclinicappointment_doctors`
--

CREATE TABLE `tbl_myclinicappointment_doctors` (
  `id` int(11) NOT NULL,
  `useraccount_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `mobile_num` varchar(255) NOT NULL,
  `mode_of_payment` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `specialization` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_myclinicappointment_doctors`
--

INSERT INTO `tbl_myclinicappointment_doctors` (`id`, `useraccount_id`, `name`, `email`, `date_of_birth`, `gender`, `mobile_num`, `mode_of_payment`, `payment`, `specialization`) VALUES
(1, 3, 'Mar Chito Anteja', '00anteja23@gmail.com', '', '', '09511816599', '', '', 'Internal Medicine');

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
-- Table structure for table `tbl_myclinicappointment_notifications`
--

CREATE TABLE `tbl_myclinicappointment_notifications` (
  `id` int(11) NOT NULL,
  `useraccount_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_myclinicappointment_useraccounts`
--

INSERT INTO `tbl_myclinicappointment_useraccounts` (`id`, `name`, `email`, `mobile_number`, `username`, `password`, `image`, `user_type`) VALUES
(1, 'Administrator', 'admin@gmail.com', '09111111111', 'admin', '$2y$10$qZaaUdNw9dwAlnMZDFfqSOj5mVKvlNC86XHgRRWs/UaKyQMHZINby', '382957542_6999962560038529_6101523634310671937_n.jpg', 'admin'),
(2, 'Juan Dela Cruz', '', '', 'juan', '$2y$10$R0rbCuFmh7WlkDM5PcdePepFKjnadtVI2zVj/DiBREqWS/p7vhTmW', '358800055_3590945784508683_6720599458643742977_n.jpg', 'admin2'),
(3, 'Mar Chito Anteja', '00anteja23@gmail.com', '09511816599', 'chito23', '$2y$10$x1len2cHwYMTA4ScF//YpunXyttNvxSEK8tmkcTOkcgc9fKuQb/Ky', 'default_image_user.png', 'doctor');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_myclinicappointment_appointments`
--
ALTER TABLE `tbl_myclinicappointment_appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_myclinicappointment_doctors`
--
ALTER TABLE `tbl_myclinicappointment_doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_myclinicappointment_doctors_schedule`
--
ALTER TABLE `tbl_myclinicappointment_doctors_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_myclinicappointment_messages`
--
ALTER TABLE `tbl_myclinicappointment_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_myclinicappointment_notifications`
--
ALTER TABLE `tbl_myclinicappointment_notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_myclinicappointment_transaction`
--
ALTER TABLE `tbl_myclinicappointment_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_myclinicappointment_useraccounts`
--
ALTER TABLE `tbl_myclinicappointment_useraccounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
