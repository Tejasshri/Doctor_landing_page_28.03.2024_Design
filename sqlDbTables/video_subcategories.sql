-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 08, 2024 at 06:57 AM
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
-- Table structure for table `video_subcategories`
--

CREATE TABLE `video_subcategories` (
  `subcat_id` varchar(512) DEFAULT NULL,
  `subcategory` varchar(512) DEFAULT NULL,
  `cat_id` varchar(512) DEFAULT NULL,
  `subcat_status` varchar(512) DEFAULT NULL,
  `created_on` varchar(512) DEFAULT NULL,
  `modified_on` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `video_subcategories`
--

INSERT INTO `video_subcategories` (`subcat_id`, `subcategory`, `cat_id`, `subcat_status`, `created_on`, `modified_on`) VALUES
('1', 'Hyderabad Patient Videos', '1', '1', '2023-08-01 18:09:07', '2023-08-01 11:50:58'),
('2', 'Dr. Muralidhar Muddushetty ', '2', '1', '2024-01-22 18:21:54', '2024-01-22 12:51:54'),
('3', 'Dr. Purushotham Reddy K', '1', '1', '2024-01-22 18:21:54\r\n', '2024-01-22 18:21:54\r\n');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
