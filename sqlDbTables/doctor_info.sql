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
-- Table structure for table `doctor_info`
--

CREATE TABLE `doctor_info` (
  `dr_id` int(11) NOT NULL,
  `dr_name` varchar(255) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `experience` varchar(50) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `timings` varchar(100) DEFAULT NULL,
  `expertise` varchar(100) DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `ip_link` varchar(100) DEFAULT NULL,
  `specialities` text DEFAULT NULL,
  `education` text DEFAULT NULL,
  `research_interests` text DEFAULT NULL,
  `extra_info` text DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctor_info`
--

INSERT INTO `doctor_info` (`dr_id`, `dr_name`, `gender`, `experience`, `location`, `timings`, `expertise`, `role`, `image`, `ip_link`, `specialities`, `education`, `research_interests`, `extra_info`, `sort_order`, `status`, `created_on`, `updated_on`) VALUES
(1, 'Dr. Muralidhar Muddusetty', 'Male', '18+ years', 'Hyderabad', 'On call', 'Surgical Oncology', 'Senior Consultant', 'Dr. Muralidhar Muddusetty1687240344-Dr Murali.jpg', 'dr_muralidhar', 'Surgical Oncology', 'MRCS - Edinburgh', '', '', 7, 1, '2023-03-17 10:24:40', '2023-07-04 14:52:13'),
(2, 'Dr. Raghunadha Rao', 'Male', '45+ years', 'Vizag', 'On call', 'Medical Oncology', 'Advisor', 'Dr. Raghunadharao1687240892-Dr. ragunandanrao.jpg', 'raghunadharao', 'Senior Clinical advisor & Senior Consultant Medical Oncologist', 'DM Medical Oncology', '', '', 14, 1, '2023-03-17 10:24:40', '2023-08-04 11:07:11'),
(3, 'Dr. Purushotham Reddy K', 'Male', '7+ years', 'Hyderabad', '10AM - 5PM', 'Surgical Oncology', 'Consultant', 'Dr. Purushotham Reddy K1687240295-Dr. Purusotham.jpg', 'purushotham-reddy', 'CONSULTANT - SURGICAL ONCOLOGY', 'M. Ch. Surgical Oncology', '', '', 2, 1, '2023-03-17 10:24:40', '2023-07-04 14:52:27'),
(4, 'Dr. Kirti Ranjan Mohanty', 'Male', '10+ years', 'Hyderabad', '2PM - 5PM', 'Radiation Oncology', 'Senior Consultant', 'Dr. Kirti Ranjan Mohanty1687240529-Dr. Kiriti rajan mohanty.jpg', 'kirti-ranjan-mohanty', 'Senior Consultant - Radiation oncology', 'MD Radiation Oncology', '', '', 9, 1, '2023-03-17 10:24:40', '2023-07-04 15:13:15'),
(5, 'Dr. Sushma P Venkata', 'Female', '15+ years', 'Vizag', '2PM - 5PM', 'Radiation Oncology', 'Senior Consultant', 'Dr. Venkata Sushma1687240495-Dr. Sushma.jpg', 'venkata-sushma', 'Senior Consultant - Radiation Oncology, Women’s Oncology, Neuro Oncology', 'MD Radiation Oncology', '', '', 8, 1, '2023-03-17 10:24:40', '2023-07-04 15:13:31'),
(6, 'Dr. Gangadhar Vajrala', 'Male', '10+ years', 'Hyderabad', '2PM - 5PM', 'Radiation Oncology', 'Senior Consultant', 'Dr. Gangadhar Vajrala1687240568-Dr. Gangadhar.jpg', 'gangadhar-vajrala', 'Senior Consultant - Radiation oncology', 'MD Radiation Oncology', '', '', 10, 1, '2023-03-17 10:24:40', '2023-07-04 15:13:49'),
(7, 'Dr. Naresh Gundu', 'Male', '7+ years', 'Hyderabad', '10AM - 5PM', 'Medical Oncology', 'Consultant', 'Dr. Gundu Naresh1687240282-Dr. Gundu Naresh.jpg', 'gundu-naresh', 'Consultant Medical Oncologist and Hematologist', 'DM Medical Oncology - AIIMS Delhi', '', '', 1, 1, '2023-03-17 10:24:40', '2023-07-04 14:14:00'),
(8, 'DR. SARITA SHRIVASTVA', 'Female', '7+ years', 'Hyderabad', '10AM - 5PM', 'Medical Oncology', 'Consultant', '3_sarita.jpg', 'None', 'Medical oncology', 'DM Medical Oncology - NIMS Hyderabad', '', '', 3, 0, '2023-03-17 10:24:40', '2023-03-17 10:24:40'),
(9, 'Dr. Nagarjuna Chakravarthy', 'Male', '15+ years', 'Hyderabad', 'On call', 'Anaesthesiology', 'Advisor', 'Dr. Nagarjuna Chakravarthy1687241075-Untitled design (10).png', 'nagarjuna-chakravarthy', 'Anaesthesiology, Critical Care and Palliative Medicine', 'DNB', '', '', 15, 1, '2023-03-17 10:24:40', '2023-07-04 15:15:53'),
(10, 'Dr. Mahendra Parage', 'Male', '25+ years', 'Hyderabad', '10AM - 5PM', 'Pathology', 'Advisor', 'Dr. Mahendra Parage1687241062-Untitled design (9).png', 'mahendra-parage', 'Pathology', 'MD Pathology', '', '', 16, 1, '2023-03-17 10:24:40', '2023-07-04 15:16:04'),
(11, 'Dr. Sasi Prabha Rokkam', 'Female', '50+ years', 'Vizag', '10AM - 5PM', 'Gynaecology', 'Advisor', 'Dr. Sasi Prabha Rokkam1687240953-Dr. Sasi Prabha.jpg', 'sasi-prabha-rokkam', 'Obstetrics and Gynaecology', 'MBBS MD DGO', '', '', 18, 1, '2023-03-17 10:24:40', '2023-08-04 11:09:27'),
(12, 'Dr. Mahati Chittem', 'Female', '11+ years', 'Hyderabad', 'On Call', 'Onco-Psychology', 'Supportive Care Specialist', 'Dr. Mahati Chittem1687240916-Dr. Mahati.jpg', 'mahati-chittem', 'Psycho-oncology, Health Psychology, Medical Psychology', 'PHD Health Psychology', '', '', 20, 1, '2023-03-17 10:24:40', '2023-08-04 11:09:38'),
(13, 'Vasudha Mathur', 'Female', '20+ years', 'Hyderabad', '10AM - 5PM', 'Onco-Nutrition', 'Supportive Care Specialist', 'Vasudha Mathur1687240930-Dr. Vasudha.jpg', 'vasudha-mathur', 'Nutrition and Dietetics', 'Post Graduate Diploma', '', '', 21, 1, '2023-03-17 10:24:40', '2023-08-04 11:09:52'),
(14, 'Dr. Srinivasulu Putcha Reddy', 'Male', '13+ years', 'Vizag', '10AM - 5PM', 'Radiation Oncology', 'Consultant', 'Dr. Srinivasulu Reddy Putcha1687240581-Dr. Srinivasulu.jpg', 'srinivasulu-reddy-putcha', 'CONSULTANT - RADIATION ONCOLOGY', 'MD Radiation Oncology', '', '', 11, 1, '2023-03-17 10:24:40', '2023-07-04 15:14:07'),
(15, 'Dr. Imaduddin Mohammed', 'Male', '6+ years', 'Hyderabad', '10AM - 5PM', 'Surgical Oncology', 'Consultant', 'Dr. Mohammed Imaduddin1687240309-Dr. Imad.jpg', 'mohammed-imaduddin', 'Consultant, Surgical Oncology', 'M. Ch. Surgical Oncology', '', '', 4, 1, '2023-03-17 10:24:40', '2023-07-04 14:54:11'),
(16, 'Dr. Raghavendra Reddy', 'Male', '6+ years', 'Hyderabad', '10AM - 5PM', 'Medical Oncology', 'Consultant', 'Dr. C Raghavendra Reddy1687240320-Dr. Raghavendra.jpg', 'ragavendra-reddy', 'Consultant Medical Oncologist', 'DM Medical Oncology - Gold Medal', '', '', 5, 1, '2023-03-17 10:24:40', '2023-07-04 14:14:38'),
(17, 'Dr. Bharati Devi Gorantla', 'Female', '7+ years', 'Vizag', '10AM - 5PM', 'Medical Oncology', 'Consultant', 'Dr. Bharati Devi Gorantla1687240331-Dr. Bharathi Devi.jpg', 'bharati-devi-gorantla', 'Consultant Medical Oncologist', 'DM Medical Oncology', '', '', 6, 1, '2023-03-17 10:24:40', '2023-07-04 14:14:56'),
(22, 'Dr. Srinivasulu Mukta', 'Male', '35+ years', 'Hyderabad', '10AM - 5PM', 'Surgical Oncology', 'Advisor', 'Dr. Srinivasulu Mukta1687240943-D.jpg', 'DrSrinivasulu-Mukta', '', 'M CH Surgical Oncology', '', '', 17, 1, '2023-03-23 11:06:28', '2023-08-04 11:09:15'),
(23, 'Dr. Annie Q. Hasan', 'Female', '32+ years', 'Hyderabad', '10AM - 5PM', 'Onco-Genetic Counselling', 'Supportive Care Specialist', 'Dr. Annie Q. Hasan1687240904-Dr. Anniee.jpg', 'annie-q-hasan', '', 'PHD Genetics', '', '', 19, 1, '2023-03-23 11:06:28', '2023-07-04 15:18:03'),
(25, 'Dr. Rajendar Byshetty', 'Male', '8+ years', 'Hyderabad', '10AM-5PM', 'Surgical Oncology', 'Consultant', 'Dr. Rajendar Byshetty1687240609-Dr. Rajendar Byshetty.jpg', 'rajendar-byshetty', 'Consultant & Surgical Oncology', 'MBBS , MS (JIPMER), DNB,MCh , (AIIMS) FMAS', '', '', 13, 1, '2023-04-07 14:25:15', '2023-08-04 11:07:31'),
(26, 'Dr. Vinay Mamidala', 'Male', '6+ years', 'Hyderabad', '9:30 Am - 6:00 Pm', 'Surgical Oncology', 'Consultant', 'Dr. Vinay Mamidala1687240621-Dr. Vinay Mamidala.jpg', 'dr_vinay_mamidala', '', 'FMAS , FARIS, M. Ch - 2023 , Ms  MBBS', '', '', 12, 1, '2023-06-13 17:20:32', '2023-08-04 11:07:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor_info`
--
ALTER TABLE `doctor_info`
  ADD PRIMARY KEY (`dr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor_info`
--
ALTER TABLE `doctor_info`
  MODIFY `dr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
