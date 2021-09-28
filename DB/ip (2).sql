-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2021 at 02:06 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ip`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `user_id` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `user_id`, `password`, `created_at`) VALUES
(1, 'admin', 'admin@admin.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-08-21 17:54:08');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `message` varchar(5000) DEFAULT NULL,
  `dd` varchar(50) DEFAULT NULL,
  `mm` varchar(50) DEFAULT NULL,
  `yyyy` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`, `dd`, `mm`, `yyyy`, `created_at`) VALUES
(1, 'arju hp', 'admin@admin.com', '1234567890', 'jgjh', '21', 'Aug', '2021', '2021-08-21 15:49:33'),
(2, 'arju hp', 'anarulm364@gmail.com', '1234567890', 'hi', '21', 'Aug', '2021', '2021-08-21 15:50:55');

-- --------------------------------------------------------

--
-- Table structure for table `ip_details`
--

CREATE TABLE `ip_details` (
  `id` int(11) NOT NULL,
  `price` varchar(250) DEFAULT NULL,
  `iptitle` varchar(1000) DEFAULT NULL,
  `proxyname` varchar(1000) DEFAULT NULL,
  `bandwidth` varchar(255) DEFAULT NULL,
  `speed` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `uptime` varchar(200) DEFAULT NULL,
  `dd` varchar(50) DEFAULT NULL,
  `mm` varchar(50) DEFAULT NULL,
  `yyyy` varchar(50) DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ip_details`
--

INSERT INTO `ip_details` (`id`, `price`, `iptitle`, `proxyname`, `bandwidth`, `speed`, `location`, `uptime`, `dd`, `mm`, `yyyy`, `status`, `created_at`) VALUES
(5, '1000', 'Private Proxy', 'Exclusive Proxies', 'Unlimited Bandwidth', '10', 'INDIA', '56', '20', 'Sep', '2021', 1, '2021-09-21 11:46:11'),
(6, '1000', 'Private Proxy', 'Exclusive Proxies', 'Unlimited Bandwidth', '10', 'INDIA', '56', '20', 'Sep', '2021', 1, '2021-09-21 11:46:11'),
(7, '10', 'Private Proxy', 'Exclusive Proxies', 'Unlimited Bandwidth', '10', 'INDIA', '562', '20', 'Sep', '2021', 1, '2021-09-21 11:47:27');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `ipno` varchar(255) DEFAULT NULL,
  `validity` varchar(255) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `protocol` varchar(255) DEFAULT NULL,
  `dd` varchar(20) DEFAULT NULL,
  `mm` varchar(20) DEFAULT NULL,
  `yyyy` varchar(20) DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone`, `password`, `ipno`, `validity`, `country`, `protocol`, `dd`, `mm`, `yyyy`, `status`, `created_at`) VALUES
(45, 'arju hp', 'admin', '1234567890', 'YWRtaW4=', NULL, NULL, NULL, NULL, '23', 'Aug', '2021', 1, '2021-08-23 06:40:21'),
(46, 'arju hp', 'admin', '1234567890', 'WVdSdGFXNHo=', NULL, NULL, NULL, NULL, '23', 'Aug', '2021', 1, '2021-08-23 06:43:52'),
(47, 'arju hp', 'admin@admin.com', '1234567890', 'TnpnNU5EVT0=', NULL, NULL, NULL, NULL, '23', 'Aug', '2021', 1, '2021-08-23 06:44:56'),
(48, 'arju hp', 'admin', '1234567890', 'WVdSdGFXND0=', NULL, NULL, NULL, NULL, '23', 'Aug', '2021', 1, '2021-08-23 06:47:28'),
(49, 'arju hp', 'admin', '1234567890', 'WVdSdGFXND0=', NULL, NULL, NULL, NULL, '23', 'Aug', '2021', 1, '2021-08-23 06:48:18'),
(50, 'arju hp', 'admin', '1234567890', 'WVdSdGFXND0=', NULL, NULL, NULL, NULL, '23', 'Aug', '2021', 1, '2021-08-23 06:49:03'),
(51, 'arju hp', 'admin', '1234567890', 'WVdSdGFXND0=', NULL, NULL, NULL, NULL, '23', 'Aug', '2021', 1, '2021-08-23 06:49:45'),
(52, 'arju hp', 'admin', '1234567890', 'WVdSdGFXND0=', NULL, NULL, NULL, NULL, '23', 'Aug', '2021', 1, '2021-08-23 06:50:21'),
(54, 'arju hp', 'admin@admin.com', '1234567890', 'TVRJek5EVTI=', NULL, NULL, NULL, NULL, '23', 'Aug', '2021', 1, '2021-08-23 10:47:14'),
(55, 'gfgfgf', 'admin@admfdgin.com', '12345', 'TVRJek5EVTJOdz09', NULL, NULL, NULL, NULL, '27', 'Aug', '2021', 1, '2021-08-27 10:02:25'),
(56, 'test', 'email@email.com', '6546541', 'TVRJPQ==', NULL, NULL, NULL, NULL, '27', 'Aug', '2021', 1, '2021-08-27 10:06:17'),
(57, 'sofiki', 'sofik@sofik.com', '1234567890', 'TWpVNE9UWXo=', NULL, NULL, NULL, NULL, '27', 'Aug', '2021', 1, '2021-08-27 10:09:10'),
(58, 'arju hp', 'admin@dfhgf.hj', '1234567890', 'TVRJek5EVTI=', NULL, NULL, NULL, NULL, '20', 'Sep', '2021', 1, '2021-09-20 15:15:42'),
(59, 'arju hp', 'admin@admin.coms', '1234567890', 'TVRJek5EVTI=', '2', '30', NULL, NULL, '20', 'Sep', '2021', 1, '2021-09-20 18:28:54'),
(60, 'arju hp', 'admin@admin.comll', '1234567890', 'TXpZNU9EVT0=', '2', '30', 'India', 'HTTP', '21', 'Sep', '2021', 1, '2021-09-21 07:25:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ip_details`
--
ALTER TABLE `ip_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ip_details`
--
ALTER TABLE `ip_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
