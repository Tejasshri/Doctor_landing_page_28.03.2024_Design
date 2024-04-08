-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 08, 2024 at 07:00 AM
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
-- Table structure for table `lp_faqs`
--

CREATE TABLE `lp_faqs` (
  `lp_id` int(11) NOT NULL,
  `lp_name` varchar(255) DEFAULT NULL,
  `lp_question` text DEFAULT NULL,
  `lp_answer` text DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_on` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lp_faqs`
--

INSERT INTO `lp_faqs` (`lp_id`, `lp_name`, `lp_question`, `lp_answer`, `status`, `created_on`) VALUES
(1, 'dr.purushotham', 'Who is a Surgical Oncologist?', 'A Surgical Oncologist is a doctor who specializes in using surgery to treat cancer, removing tumors and cancerous tissues while aiming to preserve healthy tissue and function.', 1, '2024-04-04 06:07:41'),
(2, 'dr.purushotham', 'Why is Dr. Purushotham the best surgical oncologist in Hyderabad?', 'With over 10+ years of experience and 4000+ cancer surgeries, Dr. Puroshotham is considered the best surgical oncologist in hyderabad.', 1, '2024-04-04 06:07:41'),
(3, 'dr.purushotham', 'What types of cancers are treated using surgery?', 'Various types of cancers are treated using surgery depending on the stage, but the most common ones include breast cancer surgery, oral cancer surgery, lung cancer, and kidney cancer.', 1, '2024-04-04 06:07:41'),
(4, 'dr.purushotham', 'Where can I find a Surgical Oncologist near me?', 'We have multiple centers where we provide the best cancer treatment and surgical options all around Hyderabad, in Kukatpally, Tolichowki, Masab Tank, Ameerpet, Erragadda, and Kompally.', 1, '2024-04-04 06:07:41'),
(5, 'dr.purushotham', 'How can I get a free second opinion?', 'To get a free consultation or a free second opinion, call us at 18001202676 or fill out the form above, and we will get back to you with all the details regarding the free second opinion.', 1, '2024-04-04 06:07:41'),
(6, 'dr.purushotham', 'When is cancer surgery recommended?', 'Cancer surgery is recommended when the cancer is at an early stage, confined to one area, and can be safely removed, offering the best chance for cure or symptom relief.', 1, '2024-04-04 06:07:41'),
(7, 'dr.purushotham', 'What tests are required before cancer surgery?', 'Before cancer surgery, patients typically undergo tests such as imaging (PET CT, MRI, Ultrasound scans), biopsy, and blood tests to assess the cancer\'s extent and the patient\'s overall health.', 1, '2024-04-04 06:07:41'),
(8, 'dr.purushotham', 'How do I need to prepare for cancer surgery?', 'To prepare for cancer surgery, patients may need to: Follow pre-surgery instructions provided by the surgical oncologist, such as fasting before the procedure. Inform the cancer surgeon about any medications they are taking, including supplements and over-the-counter drugs.', 1, '2024-04-04 06:07:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lp_faqs`
--
ALTER TABLE `lp_faqs`
  ADD PRIMARY KEY (`lp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lp_faqs`
--
ALTER TABLE `lp_faqs`
  MODIFY `lp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
