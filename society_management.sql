-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2021 at 05:17 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `society_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `meeting`
--

CREATE TABLE `meeting` (
  `sno` int(50) NOT NULL,
  `society_id` varchar(15) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `agenda` text NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `meeting_platform` varchar(50) NOT NULL,
  `meeting_link` varchar(255) NOT NULL,
  `status` varchar(15) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meeting`
--

INSERT INTO `meeting` (`sno`, `society_id`, `title`, `agenda`, `date`, `time`, `meeting_platform`, `meeting_link`, `status`, `timestamp`) VALUES
(1, 'sid551526', 't', 't', '1111-11-11', '04:54:00.000000', 'Zoom', 'https://meet.google.com/jdd-dfed-qqq', 'not finished', '2021-07-27 16:54:13'),
(2, 'sid551526', '1124 meeting', 'Hostel agenda', '2021-07-27', '18:17:00.000000', 'Google Meet', 'https://meet.google.com/jdd-dfed-qqq', 'not finished', '2021-07-27 17:18:01'),
(6, 'sid551526', 'kkk', 'kghopf', '0434-03-04', '03:44:00.000000', 'Google Duo', 'hvdygdyhgdbysd', 'not finished', '2021-07-27 17:22:00'),
(7, 'sid551526', 'demo', 'de mo', '1111-11-11', '23:11:00.000000', 'Google Meet', 'https://meet.google.com/jdd-dfed-qqq', 'not finished', '2021-07-27 17:45:43'),
(8, 'sid551526', 'yes', 'yes', '2021-07-02', '17:56:00.000000', 'Zoom', 'https://meet.google.com/jdd-dfed-qqq', 'not finished', '2021-07-27 17:53:35'),
(9, 'sid551526', 'movie', '5656', '2021-07-28', '04:53:00.000000', 'Google Meet', 'https://meet.google.com/jdd-dfed-qqq', 'not finished', '2021-07-27 18:19:48'),
(10, 'sid551526', 'jil', 'jil', '0003-03-24', '06:21:00.000000', 'Google Meet', 'https://meet.google.com/jdd-dfed-qqq', 'not finished', '2021-07-27 18:21:37'),
(11, 'sid291282', 'abc', '76876876', '2021-07-17', '06:26:00.000000', 'Microsoft Teams', 'hvdygdyhgdbysd', 'not finished', '2021-07-27 18:26:50'),
(12, 'sid291282', 'movie', 'jklghudjhklfhlh', '2021-07-22', '06:29:00.000000', 'Microsoft Teams', 'jil4546', 'not finished', '2021-07-27 18:29:24'),
(13, 'sid291282', '1124 meeting', 'jill;g;lkhl;', '2021-07-17', '06:30:00.000000', 'Google Meet', 'jilutjgyjgj', 'not finished', '2021-07-27 18:30:49'),
(14, 'sid551526', 'mblb', 'ghmfglhmhl', '2021-07-22', '06:32:00.000000', 'Google Duo', 'https://meet.google.com/jdd-dfed-qqq', 'not finished', '2021-07-27 18:32:51'),
(15, 'sid551526', 'shubham', 'fgh', '2021-07-15', '00:00:00.000000', 'Google Duo', 'jilklh', 'not finished', '2021-07-27 18:48:26');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `society_id` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(500) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `profile_photo` varchar(255) NOT NULL,
  `identity_photo` varchar(255) NOT NULL,
  `identity_number` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `house_no` varchar(50) NOT NULL,
  `flat_type` varchar(20) NOT NULL,
  `is_owner` varchar(5) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `occupation_details` text NOT NULL,
  `role` varchar(30) NOT NULL,
  `otp` varchar(6) NOT NULL,
  `status` varchar(8) NOT NULL,
  `approve` varchar(15) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`society_id`, `username`, `name`, `email`, `phone`, `address`, `dob`, `profile_photo`, `identity_photo`, `identity_number`, `password`, `house_no`, `flat_type`, `is_owner`, `occupation`, `occupation_details`, `role`, `otp`, `status`, `approve`, `timestamp`) VALUES
('sid291282', 's', 's', 'snehaldusane2004@gmail.com', '2', '2', '2021-06-22', '../../media/contact us 2.jfif', '../../media/contact us 2.jfif', '122343444', '12', '1', 'raw_house', 'Yes', 'xyz', 'xyz', 'admin', '987338', 'active', 'approved', '2021-06-16 12:04:51'),
('sid291282', 'shubham', 'Shubham', 'shubhamdusane2002@gmail.com', '8737', ' nbchvyv', '2021-07-01', 'https://image.flaticon.com/icons/png/128/3177/3177440.png', 'none', 'none', '123', '34', 'raw_house', 'Yes', 'none', 'none', 'member', '185725', 'active', 'approved', '2021-07-05 09:58:55'),
('sid551526', 'Jil', 'jil', 'jil1704.jp@gmail.com', '9783783748', 's', '1111-11-11', 'https://image.flaticon.com/icons/png/128/3135/3135715.png', 'none', 'none', '123', '12', '2BHK', 'No', 'none', 'none', 'admin', '405240', 'active', 'approved', '2021-07-27 16:07:51');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(200) NOT NULL,
  `society_id` varchar(10) NOT NULL,
  `noti_from` varchar(200) NOT NULL,
  `notification` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `society_id`, `noti_from`, `notification`) VALUES
(12, 'sid291282', 'Shubham', 'please,approve my request to join the society');

-- --------------------------------------------------------

--
-- Table structure for table `society`
--

CREATE TABLE `society` (
  `society_id` varchar(10) NOT NULL,
  `society_name` varchar(255) NOT NULL,
  `society_address` varchar(500) NOT NULL,
  `society_type` varchar(20) NOT NULL,
  `number_of_house` varchar(5) NOT NULL,
  `rules` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pincode` varchar(20) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `society`
--

INSERT INTO `society` (`society_id`, `society_name`, `society_address`, `society_type`, `number_of_house`, `rules`, `city`, `state`, `pincode`, `country`) VALUES
('sid385070', 'a', 'a', 'Row House', '12', 'none', 'a', 'a', 'a', 'a'),
('sid291282', 'a', 'a', 'Row House', '12', 'none', 'a', 'a', 'a', 'a'),
('sid781300', 'a', 'a', 'Row House', '12', 'none', 'a', 'a', 'a', 'a'),
('sid551526', 's', 's', 'Building', '50', 'none', 's', 's', 's', 's');

-- --------------------------------------------------------

--
-- Table structure for table `society_details`
--

CREATE TABLE `society_details` (
  `society_id` varchar(10) NOT NULL,
  `flat_type` varchar(100) NOT NULL,
  `maintenance_amount` varchar(200) NOT NULL,
  `penalty_amount` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `society_details`
--

INSERT INTO `society_details` (`society_id`, `flat_type`, `maintenance_amount`, `penalty_amount`) VALUES
('sid385070', 'raw_house', '0', '0'),
('sid291282', 'raw_house', '0', '0'),
('sid781300', 'raw_house', '0', '0'),
('sid551526', '2BHK,3BHK,4BHK', '0', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meeting`
--
ALTER TABLE `meeting`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meeting`
--
ALTER TABLE `meeting`
  MODIFY `sno` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
