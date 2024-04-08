-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 08, 2024 at 06:58 AM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id21984239_cion_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city_id` int(11) NOT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `city_status` int(11) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `modified_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `city`, `state_id`, `city_status`, `created_on`, `modified_on`) VALUES
(1, 'Hyderabad', 2, 1, '2023-06-05 11:04:35', '2023-06-05 11:04:35'),
(2, 'Vizag', 1, 1, '2023-06-05 11:04:35', '2023-06-05 11:04:35'),
(6, 'Mahabubnagar', 2, 1, '2023-06-05 17:18:32', '2023-06-05 17:18:32'),
(7, 'Tandur', 2, 1, '2023-06-05 17:20:03', '2023-06-05 17:20:03'),
(8, 'Shadnagar', 2, 1, '2023-06-05 17:20:29', '2023-06-05 17:20:29'),
(9, 'Vikarabad', 2, 1, '2023-06-05 17:21:03', '2023-06-05 17:21:03'),
(10, 'Vizianagaram', 1, 0, '2023-06-21 16:40:45', '2023-06-05 17:55:20'),
(12, 'Karimnagar', 2, 1, '2023-06-15 15:18:10', '2023-06-15 09:48:10'),
(13, 'Sadashivpet', 2, 1, '2023-06-15 15:46:08', '2023-06-15 10:16:08'),
(14, 'Siddipet', 2, 1, '2023-06-15 16:23:18', '2023-06-15 10:53:18'),
(15, 'Kamareddy', 2, 1, '2023-06-21 15:46:07', '2023-06-21 10:16:07'),
(16, 'Medak', 2, 1, '2023-06-21 15:51:39', '2023-06-21 10:21:39'),
(17, 'Sangareddy', 2, 0, '2023-06-21 15:59:07', '2023-06-21 10:26:22'),
(18, 'Narayankhed', 2, 1, '2023-06-21 15:59:22', '2023-06-21 10:29:22'),
(19, 'Chevella', 2, 1, '2023-06-21 16:19:53', '2023-06-21 10:49:53'),
(20, 'Vizianagaram', 1, 1, '2023-09-21 14:53:34', '2023-09-21 09:23:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`city_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
