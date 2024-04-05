-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 05, 2024 at 05:48 AM
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
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `video_id` int(11) PRIMARY KEY AUTOINCREMENT,
  `vcat` INT,
  `vsubcat` INT,
  `title` TEXT,
  `description` TEXT ,
  `thumbnail_name` TEXT,
  `video_url` TEXT,
  `video_status` INT,
  `created_on` datetime ,
  `modified_on` datetime 
);

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`video_id`, `vcat`, `vsubcat`, `title`, `description`, `thumbnail_name`, `video_url`, `video_status`, `created_on`, `modified_on`) VALUES
(158, 1, 3, 'Successful Oral chemotherapy & mastectomy surgery', '', 'assets/patientsReviewImg1.webp', 'https://www.youtube.com/embed/2TeYNMOKAsc?si=0TFJuMUUscyKYC4N', 1, '2023-12-19 16:15:24', '2023-12-19 16:15:24'),
(159, 3, 3, 'Successful Oral chemotherapy & mastectomy surgery', '', 'assets/patientsReviewImg2.webp', 'https://www.youtube.com/embed/F3cYrUxQHAU?si=vyTgggNPqzVJ580D', 1, '2023-12-19 16:15:24', '2023-12-19 00:00:00');
;


