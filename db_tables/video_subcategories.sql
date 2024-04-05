-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 05, 2024 at 05:49 AM
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
  `subcat_id`INT PRIMARY KEY,
  `subcategory` varchar(512),
  `cat_id`INT,
  `subcat_status` INT,
  `created_on` DATETIME,
  `modified_on` CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `video_subcategories`
--

INSERT INTO `video_subcategories` (`subcat_id`, `subcategory`, `cat_id`, `subcat_status`, `created_on`, `modified_on`) VALUES
(3, 'Dr. Purushotham Reddy K', 1, 1, '2024-01-22 18:21:54', '2024-01-22 18:21:54\r\n');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
