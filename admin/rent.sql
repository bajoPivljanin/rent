-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2024 at 04:02 PM
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
-- Database: `rent`
--

-- --------------------------------------------------------

--
-- Table structure for table `ad_type`
--

CREATE TABLE `ad_type` (
  `ad_type_id` int(11) NOT NULL,
  `ad_name` varchar(255) NOT NULL,
  `ad_price` varchar(50) NOT NULL,
  `ad_description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ad_type`
--

INSERT INTO `ad_type` (`ad_type_id`, `ad_name`, `ad_price`, `ad_description`) VALUES
(1, 'Classic', '2000', 'Oglašavanje na sajtu,Objava na instagram profilu'),
(2, 'Standard', '3000', 'Oglašavanje na sajtu | Objava na instagram profilu | TikTok Video');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `name`, `state_id`) VALUES
(1, 'Beograd', 1),
(2, 'Podgorica', 2);

-- --------------------------------------------------------

--
-- Table structure for table `house_type`
--

CREATE TABLE `house_type` (
  `house_type_id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `house_type`
--

INSERT INTO `house_type` (`house_type_id`, `name`) VALUES
(1, 'Rent a Car');

-- --------------------------------------------------------

--
-- Table structure for table `rent_house`
--

CREATE TABLE `rent_house` (
  `house_id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `type_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `instagram` varchar(500) NOT NULL,
  `site_url` varchar(500) NOT NULL,
  `site_name` varchar(255) NOT NULL,
  `prictures` text NOT NULL,
  `description` text NOT NULL,
  `joined_at` date NOT NULL,
  `subscribed_to` date NOT NULL,
  `ad_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rent_house`
--

INSERT INTO `rent_house` (`house_id`, `name`, `type_id`, `city_id`, `state_id`, `phone`, `price`, `email`, `instagram`, `site_url`, `site_name`, `prictures`, `description`, `joined_at`, `subscribed_to`, `ad_type_id`) VALUES
(1, 'Test', 1, 1, 1, '0615165161', '50', '', 'ceoparfem.rs', 'ceoparfem.rs', 'CeoParfem', '', 'Random neki tekst', '2024-08-30', '2024-09-30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `name`) VALUES
(1, 'Srbija'),
(2, 'Crna Gora');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(500) NOT NULL,
  `is_admin` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `is_admin`, `created_at`) VALUES
(1, 'admin', '$2y$10$/cVto2GIKLOQusn/24Sam.hfRjEhQ4YBV3E7/fse.6LRyIkD9H2Vi', 1, '2024-08-28 16:15:14'),
(2, 'admin2', '$2y$10$myPzoMlc7CHx5vczR0qb/eClbwLsdhL4QPhI.FqU.ttU9t9s9XIu2', 0, '2024-08-31 18:44:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ad_type`
--
ALTER TABLE `ad_type`
  ADD PRIMARY KEY (`ad_type_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `house_type`
--
ALTER TABLE `house_type`
  ADD PRIMARY KEY (`house_type_id`);

--
-- Indexes for table `rent_house`
--
ALTER TABLE `rent_house`
  ADD PRIMARY KEY (`house_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ad_type`
--
ALTER TABLE `ad_type`
  MODIFY `ad_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `house_type`
--
ALTER TABLE `house_type`
  MODIFY `house_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rent_house`
--
ALTER TABLE `rent_house`
  MODIFY `house_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
