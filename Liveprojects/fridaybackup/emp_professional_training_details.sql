-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2023 at 03:35 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee_managment`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp_professional_training_details`
--

CREATE TABLE `emp_professional_training_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name_of_institute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `to` date NOT NULL,
  `from` date NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `certificate_pdf` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `emp_professional_training_details`
--

INSERT INTO `emp_professional_training_details` (`id`, `uuid`, `user_id`, `name_of_institute`, `address`, `to`, `from`, `description`, `certificate_pdf`, `is_active`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(10, 'baf0fb0a-fd7b-42d2-a5cc-58646b637595', 18, 'Jillian Petersen', 'Repellendus Eum dui', '1999-04-25', '1982-03-10', 'Cupiditate velit mol', '1679754803385296412_image.jpeg', 1, 1, NULL, '2023-03-25 09:03:23', '2023-03-25 09:03:23'),
(12, 'dae3b6ea-e622-4859-94c2-5dd586ac647b', 16, 'Dante Donaldson', 'Anim consequatur cor', '1982-05-22', '2011-07-14', 'Omnis commodo rem no', '16799786721065058747_image.jpeg', 1, 1, NULL, '2023-03-27 23:14:32', '2023-03-27 23:14:32'),
(19, '7c161f94-7d8b-4f60-bd5c-7cca4d0653ee', 19, 'Destiny Franks', 'Sed velit officia de', '2021-11-03', '2020-08-20', 'Et laboris obcaecati', '16802629522140054888_image.jpeg', 1, 1, NULL, '2023-03-31 06:12:32', '2023-03-31 06:12:32'),
(22, '1575e80e-83d1-4123-a892-430b6df33f81', 23, 'Janna Donovan', 'Vel tempora totam as', '2019-12-18', '2006-01-09', 'Et quam cumque autem', '16802655361125584143_image.jpeg', 1, 1, NULL, '2023-03-31 06:55:36', '2023-03-31 06:55:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp_professional_training_details`
--
ALTER TABLE `emp_professional_training_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp_professional_training_details_user_id_foreign` (`user_id`),
  ADD KEY `emp_professional_training_details_created_by_foreign` (`created_by`),
  ADD KEY `emp_professional_training_details_updated_by_foreign` (`updated_by`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp_professional_training_details`
--
ALTER TABLE `emp_professional_training_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `emp_professional_training_details`
--
ALTER TABLE `emp_professional_training_details`
  ADD CONSTRAINT `emp_professional_training_details_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `emp_professional_training_details_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `emp_professional_training_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
