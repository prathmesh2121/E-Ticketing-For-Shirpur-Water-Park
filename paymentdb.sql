-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2021 at 08:01 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paymentdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedbackdata`
--

CREATE TABLE `feedbackdata` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `feedback` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback_db`
--

CREATE TABLE `feedback_db` (
  `name1` text NOT NULL DEFAULT '',
  `comments1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment_data`
--

CREATE TABLE `payment_data` (
  `id` int(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `email` varchar(500) NOT NULL,
  `name` varchar(500) NOT NULL,
  `phone-no` varchar(10) NOT NULL,
  `adults` int(10) NOT NULL,
  `childs_below_10yrs` int(10) NOT NULL,
  `childs_below_18yrs` int(10) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_data`
--

INSERT INTO `payment_data` (`id`, `order_id`, `status`, `email`, `name`, `phone-no`, `adults`, `childs_below_10yrs`, `childs_below_18yrs`, `amount`, `date`) VALUES
(1, '111', 'success', 'jayashripawar13358@gmail.com', 'Jayashri Pawar', '0', 0, 0, 0, '101', '0000-00-00 00:00:00'),
(2, 'order_HIe7qldsZkRU0u', 'success', 'jaya@321', 'Jayashri Devidas Pawar', '0', 0, 0, 0, '101', '0000-00-00 00:00:00'),
(3, 'order_HIeDx0A3wsIADf', 'success', 'koamla12@gmail.com', 'Komal  Mali', '0', 0, 0, 0, '845', '0000-00-00 00:00:00'),
(4, 'order_HIeIOyCL8pqxuG', 'success', 'Prathmesh@gmail.com', 'Prathmesh Pawar', '0', 0, 0, 0, '1000', '0000-00-00 00:00:00'),
(5, 'order_HIeNHv2xoyflPX', 'success', 'Prathmesh@gmail.com', 'Prathmesh Pawar', '0', 0, 0, 0, '110', '0000-00-00 00:00:00'),
(6, 'order_HIeNHv2xoyflPX', 'success', 'Prathmesh@gmail.com', 'Prathmesh Pawar', '0', 0, 0, 0, '110', '0000-00-00 00:00:00'),
(7, 'order_HKtSC2SXjRRhG6', 'success', 'Prathmesh@gmail.com', 'Prathmesh pawar', '0', 0, 0, 0, '1213', '0000-00-00 00:00:00'),
(8, 'checking', 'success', 'chekingcheker@gmail.com', 'checker', '999999999', 0, 0, 0, '998', '2021-06-16 19:02:31'),
(9, 'New data ', 'new', 'new ', 'new', '902248130', 0, 0, 0, '912', '2021-06-30 19:39:28'),
(10, 'jaya123', 'success', 'jaya003@gmail.com', 'Jayashri Pawar', '9022481308', 0, 0, 0, '101', '2021-06-15 19:45:41'),
(11, 'order_HRy9BkZAy9KAP8', 'Success', 'jayashripawar13358@gmail.com', 'Jayashri pawar', '1234567891', 1, 1, 1, '1', '2021-06-27 11:17:09'),
(12, 'order_HS0nWg2sV3gjFk', 'Success', 'jayashripawar13358@gmail.com', 'Jayashri pawar', '9022481308', 6, 1, 2, '1', '2021-06-27 13:38:33'),
(13, 'order_HS3jNa7fc44BtP', 'Success', 'jayashripawar13358@gmail.com', 'Jayashri Pawar', '9022481308', 15, 79, 5, '1', '2021-06-27 16:29:56'),
(14, 'order_HS3mhlliefsIsM', 'Success', 'jayashripawar13358@gmail.com', 'Yogita Pawar', '9022481308', 15, 79, 8, '1', '2021-06-27 16:32:40'),
(15, 'order_HSKyM83izbBPm4', 'Success', 'jayashripawar13358@', 'Jayashri Pawar', '9022481308', 1, 1, 1, '1', '2021-06-28 09:23:24');

-- --------------------------------------------------------

--
-- Table structure for table `user-contact`
--

CREATE TABLE `user-contact` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mob` int(10) NOT NULL,
  `msg` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user-contact`
--

INSERT INTO `user-contact` (`id`, `name`, `mob`, `msg`) VALUES
(1, 'Jayashri Pawar', 0, '123456'),
(2, 'Jayashri Pawar', 0, 'lljdkljklf'),
(3, 'Jayashri Pawar', 0, 'lljdkljklf'),
(4, '', 0, ''),
(5, '', 0, ''),
(6, '', 0, ''),
(7, 'Jayashri Pawar', 2147483647, 'Thank You'),
(8, '', 0, ''),
(9, 'Jayashri Pawar', 2147483647, 'my message'),
(10, 'Jayashri Pawar', 2147483647, 'my message'),
(11, 'Jayashri Pawar', 1234567891, 'Thank You'),
(12, 'Jayashri Pawar', 1234567891, 'jdlkfjkldfj'),
(13, 'Jayashri Pawar', 1234567891, 'jdlkfjkldfj'),
(14, 'Jayashri Pawar', 1234567891, 'New Query'),
(15, 'Jayashri Pawar', 2147483647, 'jfkjkljd'),
(16, 'Komal Mali', 1245786936, 'New message from komal mali\r\nWhat is moto');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedbackdata`
--
ALTER TABLE `feedbackdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_data`
--
ALTER TABLE `payment_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user-contact`
--
ALTER TABLE `user-contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedbackdata`
--
ALTER TABLE `feedbackdata`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_data`
--
ALTER TABLE `payment_data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user-contact`
--
ALTER TABLE `user-contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
