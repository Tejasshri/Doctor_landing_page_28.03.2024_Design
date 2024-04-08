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
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `video_id` int(11) NOT NULL,
  `vcat` varchar(50) DEFAULT NULL,
  `vsubcat` varchar(50) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `thumbnail_name` varchar(255) DEFAULT NULL,
  `video_url` varchar(255) DEFAULT NULL,
  `video_status` int(11) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `modified_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`video_id`, `vcat`, `vsubcat`, `title`, `description`, `thumbnail_name`, `video_url`, `video_status`, `created_on`, `modified_on`) VALUES
(1, '1', '1', 'Successful Oral chemotherapy & mastectomy surgery', '', 'bgidvideo_thumbnail_1702982724.webp', 'https://www.youtube.com/watch?v=Tf_ii5HFKEU&feature=youtu.be', 1, '2023-08-01 17:39:22', '2023-12-19 16:15:24'),
(2, '1', '1', 'Successful Bone Marrow Transplantation', '', 'bgidvideo_thumbnail_1702982678.webp', 'https://www.youtube.com/watch?v=SGTNyCHyDMA&feature=youtu.be', 1, '2023-08-01 17:31:06', '2023-12-19 16:14:38'),
(3, '1', '1', 'Successful Oophorectomy & Hemicolectomy', '', 'bgidvideo_thumbnail_1702982707.webp', 'https://www.youtube.com/watch?v=j2EEyXBOcvc&feature=youtu.be', 1, '2023-08-01 17:31:39', '2023-12-19 16:15:07'),
(4, '1', '1', 'Successful Chemotherapy', '', 'bgidvideo_thumbnail_1702982651.webp', 'https://www.youtube.com/watch?v=dPqNWgYPggQ&feature=youtu.be', 1, '2023-08-01 17:32:12', '2023-12-19 16:14:11'),
(7, '1', '1', 'Successful Complex Surgery Mandibulectomy Reconstruction', 'Embark on the journey of Vemula Ravikumar, who faced the rare challenge of myoepithelial carcinoma, a form of cancer. Battling thoughts of giving up, he sought hope by knocking on various doors until Cion Cancer Clinics opened a new chapter for him. \r\nHis surgery, the most complex ever done in the city, marked a pivotal moment in 2023. Eight dedicated doctors embraced the challenge, transforming Ravikumar\'s life.\r\nPost-treatment, our unwavering support persists, offering monitoring and comprehensive care, including nutritional, psycho-oncology, and genetic counseling. At Cion Cancer Clinics, we go beyond treating patients; we genuinely care for them, ensuring they are not alone in their journey to recovery', 'bgidvideo_thumbnail_1702982472.webp', 'https://youtu.be/2TeYNMOKAsc?feature=shared', 1, '2023-12-12 16:20:40', '2023-12-19 16:15:51'),
(8, '1', '1', 'Successful Surgery by Dr. Mohammed Imaduddin', 'Advancing care, passionately now in Toli Chowki - CION Cancer Clinics \r\nAvail free Oncology second opinion. To book your free Appointment call us to : 1800 120 2676', 'bgidvideo_thumbnail_1702982743.webp', 'https://youtu.be/sO-LvSifnVk?feature=shared', 1, '2023-12-12 16:38:48', '2023-12-19 16:15:43'),
(9, '1', '1', 'Successful Buccal Mucosa Surgery ', 'Join us on this journey of discovery, as we combine our expertise with compassionate care to make a difference in the lives of our patients. Together, we are committed to fighting cancer and fostering a brighter future', 'bgidvideo_thumbnail_1702982542.webp', 'https://youtu.be/F3cYrUxQHAU?feature=shared', 1, '2023-12-12 16:40:59', '2023-12-19 16:12:22'),
(10, '1', '1', 'Successful Chemotherapy ', 'Join us on this journey of discovery, as we combine our expertise with compassionate care to make a difference in the lives of our patients. Together, we are committed to fighting cancer and fostering a brighter future.', 'bgidvideo_thumbnail_1702982489.webp', 'https://youtu.be/PWbhzE1DVjI?feature=shared', 1, '2023-12-12 16:41:58', '2023-12-19 16:11:29'),
(11, '2', '7', 'What is a PET-CT scan | Dr. Muralidhar Muddusetty | CION Cancer clinics | Best cancer treatment', 'Understand the fundamentals of a PET-CT scan, which stands for Positron Emission Tomography-Computed Tomography. This advanced imaging technique is used for cancer diagnosis. Discover how the PET-CT scanner combines PET and CT imaging to create detailed images of the body.', 'bgidvideo_thumbnail_1705928163.png', 'https://www.youtube.com/watch?v=lE6bzCEjyU0', 0, '2024-03-13 17:08:15', '2024-03-13 16:09:50'),
(12, '2', '28', 'Test Video', '', 'bgidvideo_thumbnail_1709111352.png', 'https://youtu.be/F3cYrUxQHAU?feature=shared', 1, '2024-02-28 14:39:12', '2024-02-28 09:09:12'),
(13, '2', '6', 'What treatments are available for lung cancer in Telugu | Dr. Bharati Devi | CION cancer clinics', '', 'bgidvideo_thumbnail_1710306032.jpeg', 'https://www.youtube.com/watch?v=t8kFPqxDJHI\r\n', 1, '2024-03-13 10:30:32', '2024-03-13 05:00:32'),
(14, '2', '6', 'What are the Stages of Lung cancer in Telugu |  Dr. Bharati Devi | CION cancer clinics | Vizag', '', 'bgidvideo_thumbnail_1710307034.jpeg', 'https://www.youtube.com/watch?v=hWwZx1dtCcU\r\n', 1, '2024-03-13 10:47:14', '2024-03-13 05:17:14'),
(15, '2', '6', 'How to identify lung cancer in Telugu | Dr. Bharati Devi | CION cancer clinics | Hyderabad', '', 'bgidvideo_thumbnail_1710307214.jpeg', 'https://www.youtube.com/watch?v=uatX6pLIhmo&t=1s\r\n', 1, '2024-03-13 10:50:14', '2024-03-13 05:20:14'),
(16, '2', '6', 'Symptoms of lung cancer in Telugu | Dr. Bharati Devi | CION cancer clinics | Hyderabad', '', 'bgidvideo_thumbnail_1710307330.jpeg', 'https://www.youtube.com/watch?v=-pl_XW9OuXo\r\n', 1, '2024-03-13 10:52:10', '2024-03-13 05:22:10'),
(17, '2', '6', 'Why does lung cancer occur in Telugu | Dr. Bharati Devi | CION cancer clinics', '', 'bgidvideo_thumbnail_1710322465.jpeg', 'https://www.youtube.com/watch?v=_yJIvaHHBFE\r\n', 1, '2024-03-13 15:04:25', '2024-03-13 09:34:25'),
(18, '2', '6', 'Lung cancer know the basics of it in Telugu | Dr. Bharati Devi | CION cancer clinics', '', 'bgidvideo_thumbnail_1710322585.jpeg', 'https://www.youtube.com/watch?v=92Yk-x1r6Nw\r\n', 1, '2024-03-13 15:06:25', '2024-03-13 09:36:25'),
(33, '2', '13', 'Are there any vaccines for cancer in Telugu | Dr. Rajendar Byshetty | CION CancerClinics | Hyderabad', '', 'dr_rajendar_vaccine_cancer.jpg', 'https://www.youtube.com/watch?v=ReSBu0pZS3g', 1, '2024-03-18 10:46:48', '2024-03-18 10:46:48'),
(34, '2', '13', 'can we perform PET-CT for cancer screening in Telugu | Dr. Rajendar Byshetty | CION Cancer Clinics', '', 'dr_rajendar_pet_ct.jpg', 'https://www.youtube.com/watch?v=m0rTdLLfjfk', 1, '2024-03-18 10:46:48', '2024-03-18 10:46:48'),
(35, '2', '13', 'What is Screening in Telugu | Dr. Rajendar Byshetty | CION Cancer Clinics | cancer treatment', '', 'dr_rajendar_screening.jpg', 'https://www.youtube.com/watch?v=ViFpotfLs-w', 1, '2024-03-18 10:46:48', '2024-03-18 10:46:48'),
(36, '2', '13', 'Are there any Genetic tests for cancer in Telugu |  Dr. Rajendar Byshetty | CION Cancer Clinics', '', 'dr_rajendar_genetic_test.jpg', 'https://www.youtube.com/watch?v=5KlsG32oOM8', 1, '2024-03-18 10:46:48', '2024-03-18 10:46:48'),
(37, '2', '13', 'Do family members needs test if one get cancer in Telugu|  Dr. Rajendar Byshetty | CION Cancer', '', 'dr_rajendar_family.jpg', 'https://www.youtube.com/watch?v=13aeSNRypqM', 1, '2024-03-18 10:46:48', '2024-03-18 10:46:48'),
(38, '2', '13', 'Family Cancer Risk Could Others Be Affected in Telugu | Dr. Rajendar Byshetty | CION Cancer Clinics', '', 'dr_rajendar_family_cancer.jpg', 'https://www.youtube.com/watch?v=MbTNniAWtbA', 1, '2024-03-18 10:46:48', '2024-03-18 10:46:48'),
(39, '2', '13', 'Oral cancer Survival Outcomes in Telugu | Dr  Rajendar Byshetty | CION Cancer Clinics', '', 'dr_rajendar_oral_cancer.jpg', 'https://www.youtube.com/watch?v=bf6qDOF7dLs', 1, '2024-03-18 10:46:48', '2024-03-18 10:46:48'),
(40, '2', '6', 'Childhood cancers:  know the myths and facts in Telugu | Dr. Bharati Devi | CION cancer clinics', '', 'dr_bharatidevi_part6.jpg', 'https://www.youtube.com/watch?v=QY4_KKutGxg', 1, '2024-03-18 10:58:14', '2024-03-18 10:58:14'),
(41, '2', '6', 'Childhood cancer A guide for parents and children in Telugu | Dr. Bharati Devi | CION cancer clinics', '', 'dr_bharatidevi_part5.jpg', 'https://www.youtube.com/watch?v=lHqV6QAI_XI', 1, '2024-03-18 10:58:14', '2024-03-18 10:58:14'),
(42, '2', '6', 'How to detect cancers in children in Telugu | Dr. Bharati Devi | CION cancer clinics | Hyderabad', '', 'dr_bharatidevi_part4.jpg', 'https://www.youtube.com/watch?v=LTL3-94T2zs', 1, '2024-03-18 10:58:14', '2024-03-18 10:58:14'),
(43, '2', '6', 'Childhood cancer: What could be the possible causes? | Dr. Bharati Devi | CION cancer clinics', '', 'dr_bharatidevi_part3.jpg', 'https://www.youtube.com/watch?v=LaOlqdhxiUs', 1, '2024-03-18 10:58:14', '2024-03-18 10:58:14'),
(44, '2', '6', 'Childhood cancer: symptoms you should know in Telugu | Dr. Bharati Devi | CION cancer clinics', '', 'dr_bharatidevi_part2.jpg', 'https://www.youtube.com/watch?v=VZg5Qv2y7Zo', 1, '2024-03-18 10:58:14', '2024-03-18 10:58:14'),
(45, '2', '6', 'Childhood cancer: What you should know ? | in Telugu | Dr. Bharati Devi | CION cancer clinics', '', 'dr_bharatidevi_part1.jpg', 'https://www.youtube.com/watch?v=yX3oUjRDC4I&t=1s', 1, '2024-03-18 10:58:14', '2024-03-18 10:58:14'),
(46, '2', '5', 'Life Expectancy After Stage 4 Cancer Diagnosis in Telugu | Dr. Ragavendra Reddy | CION Hyderbad', '', 'dr_ragavendra_after_stage_4.jpg', 'https://www.youtube.com/watch?v=f3UlZhb2Vu0', 1, '2024-03-18 11:02:09', '2024-03-18 11:02:09'),
(47, '2', '5', 'Stages of cancer explaining by Dr. Ragavendra Reddy | CION Cancer clinics | Best cancer Hyderabad', '', 'dr_ragavendra_stages_of_cancer.jpg', 'https://www.youtube.com/watch?v=ttAzFNQfc0U', 1, '2024-03-18 11:02:09', '2024-03-18 11:02:09'),
(48, '2', '5', 'What are the tests done for cancer | Family History | Dr. Ragavendra Reddy | CION Cancer Clinics', '', 'dr_ragavendra_tests_done_cancer.jpg', 'https://www.youtube.com/watch?v=xvuF0FjvmwE&t=25s', 1, '2024-03-18 11:02:09', '2024-03-18 11:02:09'),
(49, '2', '5', 'Risk factors of Breast Cancer | Dr. Ragavendra Reddy | Cion cancer clinics  In Hyderabad', '', 'dr_ragavendra_bc_risk_factor.jpg', 'https://www.youtube.com/watch?v=uG5OwxP6Srg', 1, '2024-03-18 11:02:09', '2024-03-18 11:02:09'),
(50, '2', '5', 'How to do a Self Breast Exam examination | Dr. Ragavendra Reddy | CION Cancer Clinics | Hyderabad', '', 'dr_ragavendra_examination_home.jpg', 'https://www.youtube.com/watch?v=EcqGH0RMJLY', 1, '2024-03-18 11:02:09', '2024-03-18 11:02:09'),
(51, '2', '5', 'Are all Lumps in the Breast Indicative of Cancer? | Dr. Ragavendra Reddy | CION Cancer Clinics', '', 'dr_ragavendra_lumps_bc.jpg', 'https://www.youtube.com/watch?v=iUbQJbYhpwo', 1, '2024-03-18 11:02:09', '2024-03-18 11:02:09'),
(52, '2', '5', 'Symptoms of Breast cancer in Telugu  | Dr. Ragavendra Reddy | CION Cancer Clinics | Hyderabad', '', 'dr_ragavendra_symptoms_bc.jpg', 'https://www.youtube.com/watch?v=owI3osDU5LU', 1, '2024-03-18 11:02:09', '2024-03-18 11:02:09'),
(53, '2', '2', 'Why Health Insurance is a Must Have in Your Life | Dr. Gundu Naresh |  CION Cancer Clinics', '', 'Dr_Gundu_Naresh_part2.jpg', 'https://www.youtube.com/watch?v=xwrFrjOHoNs', 1, '2024-03-18 11:02:09', '2024-03-18 11:02:09'),
(54, '2', '2', 'Why Health Insurance is a Must Have in Your Life | Dr. Gundu Naresh |  CION Cancer Clinics', '', 'Gundu-mahesh-part1.jpg', 'https://www.youtube.com/watch?v=c-oA2Et1BJc', 1, '2024-03-18 11:02:09', '2024-03-18 11:02:09'),
(55, '2', '2', 'Myth - 9 Does cancer get cured by Ayurveda or mushrooms? | Dr. Gundu Naresh | CION Cancer clinics', '', 'Dr_Gundu_Naresh_part9.jpg', 'https://www.youtube.com/watch?v=ms2fZZ-0SVI', 1, '2024-03-18 11:02:09', '2024-03-18 11:02:09'),
(56, '2', '2', 'Myth - 7 Does more pollution mean a higher risk of cancer? | Dr. Gundu Naresh | CION Cancer clinics', '', 'Dr_Gundu_Naresh_part7.jpg', 'https://www.youtube.com/watch?v=tL_GD1SRNc8', 1, '2024-03-18 11:02:09', '2024-03-18 11:02:09'),
(57, '2', '2', 'Myth - 6 Cancer and Genetics: How Family History Matters | Dr. Gundu Naresh |  CION Cancer clinics', '', 'Dr_Gundu_Naresh_part6.jpg', 'https://www.youtube.com/watch?v=Vna3n6kM1bU', 1, '2024-03-18 11:02:09', '2024-03-18 11:02:09'),
(58, '2', '2', 'Myth - 5 Many think cancer is always really obvious or causes big issues | Dr. Gundu Naresh', '', 'Dr_Gundu_Naresh_part5.jpg', 'https://www.youtube.com/watch?v=zaulpeufUro', 1, '2024-03-18 11:02:09', '2024-03-18 11:02:09'),
(59, '2', '2', 'Myth - 4 Some think if there are no symptoms, there`s no cancer | Dr. Gundu Naresh | Hyderabad', '', 'Dr_Gundu_Naresh_part4.jpg', 'https://www.youtube.com/watch?v=YuWI68JhyS0', 1, '2024-03-18 11:02:09', '2024-03-18 11:02:09'),
(60, '2', '2', 'Myth 3: Many believe cancer is due to fate or bad luck | Dr. Gundu Naresh | CION Cancer clinics', '', 'Dr_Gundu_Naresh_part3.jpg', 'https://www.youtube.com/watch?v=SFk8jDfww7Q', 1, '2024-03-18 11:02:09', '2024-03-18 11:02:09'),
(61, '2', '2', 'Myth 2: Biopsy Testing Causes Fear of Cancer Spread | Dr. Gundu Naresh | CION Cancer clinics', '', 'Dr_Gundu_Naresh_part2.jpg', 'https://www.youtube.com/watch?v=CarO-G6ZCZU', 1, '2024-03-18 11:02:09', '2024-03-18 11:02:09'),
(62, '2', '2', 'Myth-1 Diagnosed with cancer is a death sentence ? | Dr. Gundu Naresh | CION Cancer clinics |', '', 'Diagnosed_cancer_part1.jpg', 'https://www.youtube.com/watch?v=ZrCrr2M_nN4', 1, '2024-03-18 11:02:09', '2024-03-18 11:02:09'),
(63, '2', '2', 'Is it true that using cell phones really poses a risk of cancer | Dr. Gundu Naresh | Hyderabad', '', 'Risk_of_cancer_part3.jpg', 'https://www.youtube.com/watch?v=7IDSSM2G44k', 1, '2024-03-18 11:02:09', '2024-03-18 11:02:09'),
(64, '2', '2', 'Why does using cell phones seem to increase the risk of cancer | in Telugu | Dr. Gundu Naresh', '', 'Risk_of_cancer_part2.jpg', 'https://www.youtube.com/watch?v=Jiqa3ey7f9Q', 1, '2024-03-18 11:02:09', '2024-03-18 11:02:09'),
(65, '2', '2', 'Does Phone Usage Increase the Risk of Cancer? | in Telugu | Dr. Gundu Naresh | CION Cancer clinics', '', 'Risk_of_cancer_part1.jpg', 'https://www.youtube.com/watch?v=DXrYZ6hDUx8', 1, '2024-03-18 11:02:09', '2024-03-18 11:02:09'),
(66, '2', '2', 'How can we reduce the risk of diabetes and cancer? | in Telugu | Dr. Gundu Naresh | Hyderabad', '', 'Diabetics_And_Cancer_part3.jpg', 'https://www.youtube.com/watch?v=nhJSJfVO3m4', 1, '2024-03-18 11:02:09', '2024-03-18 11:02:09'),
(67, '2', '2', 'What type of cancer affect in diabetic patient in Telugu | Dr. Gundu Naresh | CION Cancer clinics', '', 'type_of_cancer_part2.jpg', 'https://www.youtube.com/watch?v=w4GaMi907QE', 1, '2024-03-18 11:02:09', '2024-03-18 11:02:09'),
(68, '2', '2', 'Introduction to diabetes and cancer in Telugu | Dr. Gundu Naresh | CION Cancer clinics', '', 'Intro_dia_cancer_part1.jpg', 'https://www.youtube.com/watch?v=w7KMoFwDIGM', 1, '2024-03-18 11:02:09', '2024-03-18 11:02:09'),
(69, '2', '2', 'How diabetes affects the treatment in cancer patients in Telugu | Dr. Gundu Naresh | Hyderabad', '', 'treatment_affects_cp-part6.jpg', 'https://www.youtube.com/watch?v=xHyg5NJcaHg', 1, '2024-03-18 11:02:09', '2024-03-18 11:02:09'),
(70, '2', '2', 'How can we decrease cancer risk in diabetic patients in Telugu | Dr. Gundu Naresh | Hyderabad', '', 'decrease_cancer_dia_part5.jpg', 'https://www.youtube.com/watch?v=XIsJ-ogDPL4', 1, '2024-03-18 11:02:09', '2024-03-18 11:02:09'),
(71, '2', '2', 'What type of cancer affects diabetic patients in Telugu | Dr. Gundu Naresh | CION Cancer clinics', '', 'type_of_cancer_part4.jpg', 'https://www.youtube.com/watch?v=sSAh1_VF3X4', 1, '2024-03-18 11:02:09', '2024-03-18 11:02:09'),
(72, '2', '2', 'Is diabetes a risk factor for cancer in Telugu | Dr. Gundu Naresh | CION Cancer clinics | Hyderabad', '', 'dia_risk_factor_part3.jpg', 'https://www.youtube.com/watch?v=hKKm6aV4lLU', 1, '2024-03-18 11:02:09', '2024-03-18 11:02:09'),
(73, '2', '2', 'Let’s talk about diabetes in Telugu | Dr. Gundu Naresh | CION Cancer clinics | Hyderabad', '', 'talk_about_diabetics_part2.jpg', 'https://www.youtube.com/watch?v=1g6FhRZpay4', 1, '2024-03-18 11:02:09', '2024-03-18 11:02:09'),
(74, '2', '2', 'Introduction to diabetes and cancer | Dr. Gundu Naresh | CION Cancer clinics', '', 'dr_intro_dia_cancer_part1.jpg', 'https://www.youtube.com/watch?v=UcPTrdb9ZyY', 1, '2024-03-18 11:02:09', '2024-03-18 11:02:09'),
(75, '2', '2', 'Is Cancer Contagious: Can it spread through contact? | Dr. Gundu Naresh | CION Cancer clinics', '', 'Cancer_contagious.jpg', 'https://www.youtube.com/watch?v=37bONFEl_4w', 1, '2024-03-18 11:02:09', '2024-03-18 11:02:09'),
(76, '2', '2', 'Is There Any Way To Prevent Cancer in Telugu | Dr. Gundu Naresh | CION Cancer clinics', '', 'Dr_GN_PreventCancer_part3.jpg', 'https://www.youtube.com/watch?v=WkZSgGTr8wQ', 1, '2024-03-18 11:02:09', '2024-03-18 11:02:09'),
(77, '2', '2', 'What Type Of Infections Can Lead To Cancer? in Telugu |  Dr. Gundu Naresh | CION Cancer clinics', '', 'DR_GN_typeof_infection_part2.jpg', 'https://www.youtube.com/watch?v=_0z91MAOGbg', 1, '2024-03-18 11:02:09', '2024-03-18 11:02:09'),
(78, '2', '2', 'Can Infections Cause Cancer in Telugu | Dr. Gundu Naresh | CION Cancer clinics', '', 'Dr_GN_infect_cancer_part1.jpg', 'https://www.youtube.com/watch?v=-kVE16hEpIU', 1, '2024-03-18 11:02:10', '2024-03-18 11:02:10'),
(79, '2', '2', 'How a liver cancer screening is performed in Telugu | Dr. Gundu Naresh | CION Cancer clinics', '', 'Dr_GN_livercancer_part5.jpg', 'https://www.youtube.com/watch?v=z8EI_ucHfSM', 1, '2024-03-18 11:02:10', '2024-03-18 11:02:10'),
(80, '2', '2', 'What treatment options are available for Liver cancer  | Dr. Gundu Naresh | CION Cancer clinics', '', 'treatment_livercancer_part4.jpg', 'https://www.youtube.com/watch?v=FeD0A7Ub1Gc&t=26s', 1, '2024-03-18 11:02:10', '2024-03-18 11:02:10'),
(81, '2', '2', 'Liver cancer know the symptoms and diagnosis in Telugu |  Dr. Gundu Naresh | CION Cancer clinics', '', 'liver_telugu_part3.jpg', 'https://www.youtube.com/watch?v=NLp2MiyC6OQ', 1, '2024-03-18 11:02:10', '2024-03-18 11:02:10'),
(82, '2', '2', 'Liver cancer Risk factors you should know in Telugu |  Dr. Gundu Naresh | CION Cancer clinics', '', 'liver_telugu_part2.jpg', 'https://www.youtube.com/watch?v=3HEze1xJ6_Q', 1, '2024-03-18 11:02:10', '2024-03-18 11:02:10'),
(83, '2', '2', 'Understanding liver cancer: know the basics of it in Telugu | Dr. Gundu Naresh | CION Cancer clinics', '', 'liver_telugu_part1.jpg', 'https://www.youtube.com/watch?v=8TaaGVqPqe4', 1, '2024-03-18 11:02:10', '2024-03-18 11:02:10'),
(84, '2', '2', 'What Is Anemia in Telugu |  రక్తహీనత అంటే ఏమిటి | CION Cancer clinics | Dr. Gundu Naresh', '', 'Dr_gn_anemia.jpg', 'https://www.youtube.com/watch?v=4prWog9Inew', 1, '2024-03-18 11:02:10', '2024-03-18 11:02:10'),
(85, '2', '2', 'Side effects of immunotherapy in Telugu | Dr. Gundu Naresh | CION Cancer clinics | Hyderabad', '', 'Side_Immunotherapy.jpg', 'https://www.youtube.com/watch?v=9IZbeiwbuAQ', 1, '2024-03-18 11:02:10', '2024-03-18 11:02:10'),
(86, '2', '2', 'What is the cost of immunotherapy in Telugu | Dr. Gundu Naresh | CION Cancer clinics | Hyderabad', '', 'cost_immunotherapy.jpg', 'https://www.youtube.com/watch?v=RPIYTCAVwmc', 1, '2024-03-18 11:02:10', '2024-03-18 11:02:10'),
(87, '2', '2', 'Immunotherapy types in Telugu | Dr.Gundu Naresh | Cancer treatment Hyderabad | CION Cancer clinics', '', 'immuno_diff_types.jpg', 'https://www.youtube.com/watch?v=35ReRE6Bt9A', 1, '2024-03-18 11:02:10', '2024-03-18 11:02:10'),
(88, '2', '2', 'What is Immunotherapy in Telugu | Cancer Treatment | Dr.Gundu Naresh | CION Cancer Clinics Hyderabad', '', 'what_immuno.jpg', 'https://www.youtube.com/watch?v=qu3JGX9i5zQ', 1, '2024-03-18 11:02:10', '2024-03-18 11:02:10'),
(89, '2', '2', 'What is Adolescents and Young Adults Cancers in Telugu | Dr. Gundu Naresh | CION Cancer Clinics', '', 'aya_cancer_dr_gn.jpg', 'https://www.youtube.com/watch?v=g6Aw9Bm7Uxk', 1, '2024-03-18 11:02:10', '2024-03-18 11:02:10'),
(90, '2', '2', 'Factors Risks increase in Oral Cancer in Telugu | Dr. Gundu Naresh | CION Cancer Clinics', '', 'dr_gn_oralcancer.jpg', 'https://www.youtube.com/watch?v=Fr4UjWPStYk', 1, '2024-03-18 11:02:10', '2024-03-18 11:02:10'),
(91, '2', '2', 'Oral cancer awareness in Telugu | Dr.Gundu Naresh | CION Cancer Clinics', '', 'oral_cancer_awarness.jpg', 'https://www.youtube.com/watch?v=d5SGknYjmrI', 1, '2024-03-18 11:02:10', '2024-03-18 11:02:10'),
(92, '2', '2', 'Our Happy Patient  treatment done by Dr. Gundu Naresh | CION Cancer Clinics', '', 'dr_gn_happypatient.jpg', 'https://www.youtube.com/watch?v=rsQkAui-_sg', 1, '2024-03-18 11:02:10', '2024-03-18 11:02:10'),
(93, '2', '2', 'Incidence of Oral Cancer in Telugu | Dr. Gundu Naresh | CION Cancer Clinics', '', 'incidence_oralcancer.jpg', 'https://www.youtube.com/watch?v=gR9XUfc_mEM', 1, '2024-03-18 11:02:10', '2024-03-18 11:02:10'),
(94, '2', '7', 'Is there a universal diagnostic test for cancer? | Dr. Muralidhar Muddusetty | CION cancer clinics', '', 'Dr_muralidhar_Muddusetty.jpg', 'https://www.youtube.com/watch?v=qqRnF0Zye3U', 1, '2024-03-18 11:02:10', '2024-03-18 11:02:10'),
(95, '2', '7', 'Is there a vaccine to protect against cancer ? |  Dr. Muralidhar Muddusetty | CION cancer clinics |', '', 'vaccine_Muralidhar.jpg', 'https://www.youtube.com/watch?v=oJpKxy0Qi6I', 1, '2024-03-18 11:02:10', '2024-03-18 11:02:10'),
(96, '2', '7', 'Can Fibroadenomas become Cancerous? | Dr. Muralidhar Muddusetty | CION cancer clinics | Hyderabad', '', 'Fibroadenomas_Dr_MM.jpg', 'https://www.youtube.com/watch?v=dTmpcOu3RHo', 1, '2024-03-18 11:02:10', '2024-03-18 11:02:10'),
(97, '2', '7', 'Does having lump in breast mean cancer | Dr. Muralidhar Muddusetty | CION cancer clinics | Hyderabad', '', 'lump_breast_Dr_MM.jpg', 'https://www.youtube.com/watch?v=hTKWVDUCXwg', 1, '2024-03-18 11:02:10', '2024-03-18 11:02:10'),
(98, '2', '7', 'Is self breast examination reliable | Dr. Muralidhar Muddusetty | CION cancer clinics | Hyderabad', '', 'self_breast_examination_dr_mm.jpg', 'https://www.youtube.com/watch?v=V4bci1Sf4eo', 1, '2024-03-18 11:02:10', '2024-03-18 11:02:10'),
(99, '2', '7', 'What is the role of the ultrasound in breast cancer screening | Dr. Muralidhar Muddusetty | CION', '', 'role_ultrasound_bc.jpg', 'https://www.youtube.com/watch?v=T55R24ZEXeI', 1, '2024-03-18 11:02:10', '2024-03-18 11:02:10'),
(100, '2', '7', 'What are the Earliest Signs and Symptoms of Breast Cancer | Dr. Muralidhar Muddusetty | CION Cancer', '', 'symptoms_breastcancer.jpg', 'https://www.youtube.com/watch?v=3LZP4HKig00', 1, '2024-03-18 11:02:10', '2024-03-18 11:02:10'),
(101, '2', '7', 'What is the difference between mammography and thermography? | Dr. Muralidhar Muddusetty |', '', 'diff_mammography_thermography.jpg', 'https://www.youtube.com/watch?v=68nBdcccmcU', 1, '2024-03-18 11:02:10', '2024-03-18 11:02:10'),
(102, '2', '7', 'How often should I have oral cancer screening | Dr. Muralidhar Muddusetty | Hyderabad | CION Cancer', '', 'dr_mm_oralcancer_screening.jpg', 'https://www.youtube.com/watch?v=3kQimjNmSh4', 1, '2024-03-18 11:02:10', '2024-03-18 11:02:10'),
(103, '2', '7', 'How often should i get breast cancer screening | Dr. Muralidhar Muddusetty | Hyderabad | CION Cancer', '', 'dr_mm_bc_screening.jpg', 'https://www.youtube.com/watch?v=OilxaE-mXN0', 1, '2024-03-18 11:02:10', '2024-03-18 11:02:10'),
(104, '2', '7', 'What are the common treatment options for Oral Cancer | Dr. Muralidhar Muddusetty | CION | Hyderabad', '', 'treatment_oralcancer.jpg', 'https://www.youtube.com/watch?v=FqxPmsXBEVI', 1, '2024-03-18 11:02:10', '2024-03-18 11:02:10'),
(105, '2', '7', 'Does mouth , throat or tongue cancer develop quickly ? | Dr. Muralidhar Muddusetty | Hyderabad', '', 'cancer_quickly_dr_mm.jpg', 'https://www.youtube.com/watch?v=T4sDkbbykJM', 1, '2024-03-18 11:02:10', '2024-03-18 11:02:10'),
(106, '2', '7', 'What are the most common risk factor for oral cancers | Dr. Muralidhar Muddusetty | CION | Hyderabad', '', 'common_treat_oc_Drmm.jpg', 'https://www.youtube.com/watch?v=DMqXAuG4CA8', 1, '2024-03-18 11:02:10', '2024-03-18 11:02:10'),
(107, '2', '7', 'What are the first signs of Tongue cancer |  Dr. Muralidhar Muddusetty | CION Cancer clinics', '', 'dr_mm_first_sign_tc.jpg', 'https://www.youtube.com/watch?v=3agx8V67ylE', 1, '2024-03-18 11:02:10', '2024-03-18 11:02:10'),
(108, '2', '7', 'What are the first signs of Oral Cancer | Dr. Muralidhar Muddusetty | CION Cancer clinics', '', 'dr_mm_first_sign_oc.jpg', 'https://www.youtube.com/watch?v=dPRsj7A7bVY', 1, '2024-03-18 11:02:10', '2024-03-18 11:02:10'),
(109, '2', '7', 'What are the Surgical procedures for the Gallbladder | Dr. Muralidhar Muddusetty | Hyderabad', '', 'dr_mm_surgical_gallbladder.jpg', 'https://www.youtube.com/watch?v=Fqjowchz5vM', 1, '2024-03-18 11:02:10', '2024-03-18 11:02:10'),
(110, '2', '7', 'How it Gallbladder Cancer Spreads | Dr. Muralidhar Muddusetty |  CION Cancer clinics', '', 'dr_mm_gc_spread.jpg', 'https://www.youtube.com/watch?v=K4VqNuKbAdY', 1, '2024-03-18 11:02:10', '2024-03-18 11:02:10'),
(111, '2', '7', 'Symptoms of Gallbladder Cancer | Dr. Muralidhar Muddusetty |  CION Cancer clinics | Cancer Treatment', '', 'dr_mm_gc_symptoms.jpg', 'https://www.youtube.com/watch?v=6ASzB_vY1eY', 1, '2024-03-18 11:02:11', '2024-03-18 11:02:11'),
(112, '2', '7', 'What is Gallbladder Cancer ? | Dr. Muralidhar Muddusetty |  CION Cancer clinics | Cancer Treatment', '', 'dr_mm_what_gc.jpg', 'https://www.youtube.com/watch?v=5whyUKHncrE', 1, '2024-03-18 11:02:11', '2024-03-18 11:02:11'),
(113, '2', '7', 'What are the advantages of doing robotic surgery over normal one | Dr. Muralidhar Muddusetty | CION', '', 'dr_mm_robosurg_normal.jpg', 'https://www.youtube.com/watch?v=Qx0Akn27Umc', 1, '2024-03-18 11:02:11', '2024-03-18 11:02:11'),
(114, '2', '7', 'What questions to ask the surgeon in post op consultation | Dr. Muralidhar Muddusetty | Hyderabad', '', 'Dr_mm_post_op_questions.jpg', 'https://www.youtube.com/watch?v=jOeqx5wz3bk', 1, '2024-03-18 11:02:11', '2024-03-18 11:02:11'),
(115, '2', '7', 'Can surgery be done at 80 years old ? | Dr. Muralidhar Muddusetty | CION Cancer clinics| Hyderabad', '', 'Dr_mm_80_surgery.jpg', 'https://www.youtube.com/watch?v=6fwdsgLASmE', 1, '2024-03-18 11:02:11', '2024-03-18 11:02:11'),
(116, '2', '7', 'What is Whipples surgery | Dr. Muralidhar Muddusetty | CION Cancer clinics | Best cancer treatment', '', 'dr_mm_whippless_surgery.jpg', 'https://www.youtube.com/watch?v=Wi-vAA0On7s', 1, '2024-03-18 11:02:11', '2024-03-18 11:02:11'),
(117, '2', '7', 'What is the impact of cervical cancer on womens reproductive health | Dr. Muralidhar Muddusetty', '', 'dr_mm_cervical_cancer.jpg', 'https://www.youtube.com/watch?v=HX6DBi8P_UY', 1, '2024-03-18 11:02:11', '2024-03-18 11:02:11'),
(118, '2', '7', 'How important is vaccination against HPV in preventing cervical cancer | Dr. Muralidhar Muddusetty', '', 'Dr_mm_preventing_cervical.jpg', 'https://www.youtube.com/watch?v=3Sq1H38Zk40', 1, '2024-03-18 11:02:11', '2024-03-18 11:02:11'),
(119, '2', '7', 'Treatment options available for cervical cancer | Dr. Muralidhar Muddusetty | CION cancer |', '', 'Dr_mm_treat_cervical.jpg', 'https://www.youtube.com/watch?v=zxzg9KV_RvY', 1, '2024-03-18 11:02:11', '2024-03-18 11:02:11'),
(120, '2', '7', 'What are the early signs and symptoms of cervical cancer | Dr. Muralidhar Muddusetty | CION cancer', '', 'dr_mm_early_sign_cervical.jpg', 'https://www.youtube.com/watch?v=FiN3POOX17Q', 1, '2024-03-18 11:02:11', '2024-03-18 11:02:11'),
(121, '2', '7', 'What role does HPV play in the development of cervical cancer | Dr. Muralidhar Muddusetty | CION', '', 'Dr_mm_role_hpv_develop_cervical.jpg', 'https://www.youtube.com/watch?v=svpZWzvy3yc', 1, '2024-03-18 11:02:11', '2024-03-18 11:02:11'),
(122, '2', '7', 'What advancements in 2023 cancer research | Dr. Muralidhar Muddusetty | CION Cancer clinics |', '', 'dr_mm_adv_2023_cancer.jpg', 'https://www.youtube.com/watch?v=UbfPiQomm3w', 1, '2024-03-18 11:02:11', '2024-03-18 11:02:11'),
(123, '2', '7', 'Does Mobile Phone Towers Cause Cancer? | Dr. Muralidhar Muddusetty | Hyderabad', '', 'dr_mm_phone_causes_cancer.jpg', 'https://www.youtube.com/watch?v=9iRRRtGAYgw', 1, '2024-03-18 11:02:11', '2024-03-18 11:02:11'),
(124, '2', '7', 'Is There Any Possibility That Covid 19 Vaccines Cause Cancer | Dr. Muralidhar Muddusetty | Hyderabad', '', 'dr_mm_covid19_causes_cancer.jpg', 'https://www.youtube.com/watch?v=ntGpn52wCCI', 1, '2024-03-18 11:02:11', '2024-03-18 11:02:11'),
(125, '2', '7', 'Why is there no common cure for all cancers | Dr. Muralidhar Muddusetty | CION Cancer clinics', '', 'dr_mm_single_cure_cancer.jpg', 'https://www.youtube.com/watch?v=gqE9F27EoLM', 1, '2024-03-18 11:02:11', '2024-03-18 11:02:11'),
(126, '2', '7', 'What are the Surgical treatment options for colorectal Cancer ? | Dr. Muralidhar Muddusetty', '', 'dr_mm_surgical_colorectal.jpg', 'https://www.youtube.com/watch?v=-WluQseTYmI', 1, '2024-03-18 11:02:11', '2024-03-18 11:02:11'),
(127, '2', '7', 'Surgery options for breast cancer removal | | Dr. Muralidhar Muddusetty | CION Cancer clinics', '', 'dr_mm_surgery_bc.jpg', 'https://www.youtube.com/watch?v=xEeQhMaQxbg', 1, '2024-03-18 11:02:11', '2024-03-18 11:02:11'),
(128, '2', '7', 'Mammography Insights from Our Senior Oncologist | Dr. Muralidhar Muddusetty | CION Cancer clinics |', '', 'dr_mm_mammography.jpg', 'https://www.youtube.com/watch?v=OwuRlkFWKeM', 1, '2024-03-18 11:02:11', '2024-03-18 11:02:11'),
(129, '2', '7', 'What is a PET-CT scan | Dr. Muralidhar Muddusetty | CION Cancer clinics | Best cancer treatment', '', 'dr_mm_pet_ct_scan.jpg', 'https://www.youtube.com/watch?v=lE6bzCEjyU0&t=1s', 1, '2024-03-18 11:02:11', '2024-03-18 11:02:11'),
(130, '2', '7', 'Chemotherapy - Does it cure breast cancer completely? |  Dr. Muralidhar Muddusetty | Hyderabad', '', 'DR_MM.jpg', 'https://www.youtube.com/watch?v=omErQGhdTVI', 1, '2024-03-18 11:02:11', '2024-03-18 11:02:11'),
(131, '2', '7', 'What is the high risk for triple-negative breast cancer? | Dr. Muralidhar Muddusetty', '', 'dr_mm_triple_negative_risk.jpg', 'https://www.youtube.com/watch?v=AntQ0jdXimY', 1, '2024-03-18 11:02:11', '2024-03-18 11:02:11'),
(132, '2', '7', 'Should Letrozole be used in advanced-stage breast cancer? | Dr. Muralidhar Muddusetty | Hyderabad', '', 'dr_mm_success_rate.jpg', 'https://www.youtube.com/watch?v=1Tl971N27MI', 1, '2024-03-18 11:02:11', '2024-03-18 11:02:11'),
(133, '2', '7', 'Chemotherapy and Radiation for Breast Cancer - Is it a must? | Dr. Muralidhar Muddusetty', '', 'dr_mm_chemotherapy.jpg', 'https://www.youtube.com/watch?v=Ch-HLlUg7b8', 1, '2024-03-18 11:02:11', '2024-03-18 11:02:11'),
(134, '2', '7', 'Inflammatory Breast Cancer - Why is it detected late? | CION Cancerclinics Dr. Muralidhar Muddusetty', '', 'dr_mm_inflammatory_breast_cancer.jpg', 'https://www.youtube.com/watch?v=NOSP5hdbmmc', 1, '2024-03-18 11:02:11', '2024-03-18 11:02:11'),
(135, '2', '7', 'Best advice given to a breast cancer survivor | CION Cancer clinics | Dr. Muralidhar Muddusetty', '', 'dr_mm_bc_survivor.jpg', 'https://www.youtube.com/watch?v=23fsWFQJSxM', 1, '2024-03-18 11:02:11', '2024-03-18 11:02:11'),
(136, '2', '7', 'Do all types of breast cancer need chemo ? | CION Cancer clinics | Muralidhar Muddusetty', '', 'dr_mm_breast_cancer_chemo.jpg', 'https://www.youtube.com/watch?v=Zaq5nMC0dzY', 1, '2024-03-18 11:02:11', '2024-03-18 11:02:11'),
(137, '2', '7', 'Lymph node Biopsy in Telugu | Dr. Muralidhar Muddusetty | Surgical Oncologist | CION Cancer clinics', '', 'dr_mm_lymph_node_biopsy.jpg', 'https://www.youtube.com/watch?v=X_jpthJVB8s', 1, '2024-03-18 11:02:11', '2024-03-18 11:02:11'),
(138, '2', '7', 'Prostate cancer biopsy in Telugu | Dr. Muralidhar Muddusetty | Surgical Oncologist | CION Cancer', '', 'dr_mm_prostate_cancer_biopsy.jpg', 'https://www.youtube.com/watch?v=VM9CfIfapSY', 1, '2024-03-18 11:02:11', '2024-03-18 11:02:11'),
(139, '2', '7', 'Bladder Cancer Biopsy in Telugu | Dr. Muralidhar Muddusetty | Surgical Oncologist | CION Cancer', '', 'dr_mm_bladder-cancer_biopsy.jpg', 'https://www.youtube.com/watch?v=IYAK_MVNxjk', 1, '2024-03-18 11:02:11', '2024-03-18 11:02:11'),
(140, '2', '7', 'Blood cancer biopsy in Telugu | Dr. Muralidhar Muddusetty | Surgical Oncologist | CION Cancer', '', 'dr_mm_blood_cancer_biopsy.jpg', 'https://www.youtube.com/watch?v=ztGRssvCU7Q', 1, '2024-03-18 11:02:11', '2024-03-18 11:02:11'),
(141, '2', '7', 'Kidney Cancer Biopsy in Telugu | Dr. Muralidhar Muddusetty | Surgical Oncologist | CION Cancer', '', 'dr_mm_kidney_cancer_biopsy.jpg', 'https://www.youtube.com/watch?v=IsTDdDX5xgg', 1, '2024-03-18 11:02:11', '2024-03-18 11:02:11'),
(142, '2', '7', 'Liver cancer biopsy in Telugu | Dr. Muralidhar Muddusetty | Surgical Oncologist | CION Cancer', '', 'dr_mm_liver_cancer_biopsy.jpg', 'https://www.youtube.com/watch?v=036oam7_n_E', 1, '2024-03-18 11:02:11', '2024-03-18 11:02:11'),
(143, '2', '7', 'Ovarian cancer biopsy in Telugu | Dr. Muralidhar Muddusetty | Surgical Oncologist | CION Cancer', '', 'dr_mm_ovarian_cancer_biopsy.jpg', 'https://www.youtube.com/watch?v=XOZriQOi_Jc', 1, '2024-03-18 11:02:11', '2024-03-18 11:02:11'),
(144, '2', '7', 'Gynecologic cancer biopsy in Telugu | Dr. Muralidhar Muddusetty | Surgical Oncologist | CION Cancer', '', 'dr_gyneco_biopsy.jpg', 'https://www.youtube.com/watch?v=GonbOso6Eh0', 1, '2024-03-18 11:02:11', '2024-03-18 11:02:11'),
(145, '2', '7', 'Lung cancer biopsy in Telugu | Dr. Muralidhar Muddusetty | Surgical Oncologist | CION Cancer clinics', '', 'dr_mm_lung_biopsy.jpg', 'https://www.youtube.com/watch?v=Y4CIDkC4rIo', 1, '2024-03-18 11:02:12', '2024-03-18 11:02:12'),
(146, '2', '7', 'Intestinal cancer biopsy in Telugu | Dr. Muralidhar Muddusetty | Surgical Oncologist | CION Cancer', '', 'dr_mm_intestine_biopsy.jpg', 'https://www.youtube.com/watch?v=6XOu-yMmKOo', 1, '2024-03-18 11:02:12', '2024-03-18 11:02:12'),
(147, '2', '7', 'Breast cancer biopsy in Telugu | Dr. Muralidhar Muddusetty | Surgical Oncologist | CION Cancer', '', 'dr_mm_breast_biopsy.jpg', 'https://www.youtube.com/watch?v=GJCrk5Xa8-o', 1, '2024-03-18 11:02:12', '2024-03-18 11:02:12'),
(148, '2', '7', 'What is biopsy in Telugu | Dr. Muralidhar Muddusetty | Surgical Oncologist | CION Cancer Clinics', '', 'dr_mm_what_biopsy.jpg', 'https://www.youtube.com/watch?v=1HEbk3Jikc8', 1, '2024-03-18 11:02:12', '2024-03-18 11:02:12'),
(149, '2', '7', 'Know More About Our Surgical Oncologist | DR. M. Muralidhar', '', 'dr_mm_consult.jpg', 'https://www.youtube.com/watch?v=DdTfjSJ9zZc&t=3s', 1, '2024-03-18 11:02:12', '2024-03-18 11:02:12'),
(150, '2', '7', 'Dr. Muralidhar Muddusetty', '', 'dr_mm_contact.jpg', 'https://www.youtube.com/watch?v=-BztvEF_4KM', 1, '2024-03-18 11:02:12', '2024-03-18 11:02:12'),
(151, '2', '10', 'Diagnostic Insights On Brain Tumor by our Consultant Radiation Oncologist | Dr Gangadhar Vajrala', '', 'consult_cancer_clinics.jpg', 'https://www.youtube.com/watch?v=eXEFmhGLf4g', 1, '2024-03-18 11:02:12', '2024-03-18 11:02:12'),
(152, '2', '10', 'Know insights on brain tumor by our Consultant Radiation Oncologist | Dr Gangadhar Vajrala', '', 'dr_gangadhar_vajrala_consult.jpg', 'https://www.youtube.com/watch?v=J4fjZd_t4Xo&t=1s', 1, '2024-03-18 11:02:12', '2024-03-18 11:02:12'),
(153, '2', '10', 'Know Your Doctor| Dr. Gangadhar Vajrala | Senior Consultant | Radiation Oncology', '', 'dr_gangadhar_vajrala_contact.jpg', 'https://www.youtube.com/watch?v=EuOshYHgAbI&t=12s', 1, '2024-03-18 11:02:12', '2024-03-18 11:02:12'),
(154, '2', '24', 'Meet our Doctor - DR. Owais Mohammed Consult - Medical & Hemato Oncologist | CION Cancer clinics', '', 'dr_owais_mohammed.jpg', 'https://www.youtube.com/watch?v=Fhczw68viCg', 1, '2024-03-18 11:02:12', '2024-03-18 11:02:12'),
(155, '2', '3', 'Problems faced by the Oral cancer survivors | Dr. Purushotham Reddy K | CION Cancer Clinics', '', 'dr_purushotham_reddy_k.jpg', 'https://www.youtube.com/watch?v=_pvjr6ILawU', 1, '2024-03-18 11:02:12', '2024-03-18 11:02:12'),
(156, '2', '8', 'Dr. P. Venkata Sushma | Breast Cancer Awareness 2020 | Cancer Clinics', '', 'think_me.jpg', 'https://www.youtube.com/watch?v=fk1N49U_zjk&t=7s', 1, '2024-03-18 11:02:12', '2024-03-18 11:02:12'),
(157, '2', '9', 'Dr. Kirti Ranjan Mohanty', '', 'Dr_kirti_ranjan_mohanty.jpg', 'https://www.youtube.com/watch?v=2dgpqQzSWnU', 1, '2024-03-18 11:02:12', '2024-03-18 11:02:12'),
(158, '1', '3', 'Successful Oral chemotherapy & mastectomy surgery', '', 'assets/patientsReviewImg1.webp', 'https://www.youtube.com/embed/2TeYNMOKAsc?si=0TFJuMUUscyKYC4N', 1, '2023-12-19 16:15:24', '2023-12-19 16:15:24'),
(159, '1', '3', 'Successful Oral chemotherapy & mastectomy surgery', '', 'assets/patientsReviewImg2.webp', 'https://www.youtube.com/embed/F3cYrUxQHAU?si=vyTgggNPqzVJ580D', 1, '2023-12-19 16:15:24', '2023-12-19 00:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
