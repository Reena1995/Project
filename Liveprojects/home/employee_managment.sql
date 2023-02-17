-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2023 at 02:33 PM
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
-- Table structure for table `asset_brands`
--

CREATE TABLE `asset_brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `asset_brands`
--

INSERT INTO `asset_brands` (`id`, `uuid`, `name`, `is_active`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '6844538d-9fe4-4db5-95ef-12a9d7d4d6fc', 'aaa', 0, '1', '1', '2023-02-16 02:42:20', '2023-02-16 02:54:10'),
(2, '054968aa-125a-4130-9e90-09ce9808b533', 'Dell', 1, '1', '1', '2023-02-16 02:43:14', '2023-02-16 02:53:47'),
(3, 'c187ec64-f4fd-4c83-a87c-5248e05b96e2', 'HP', 0, '1', '1', '2023-02-16 02:43:41', '2023-02-16 02:54:55');

-- --------------------------------------------------------

--
-- Table structure for table `asset_sub_types`
--

CREATE TABLE `asset_sub_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asset_type_id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `asset_sub_types`
--

INSERT INTO `asset_sub_types` (`id`, `uuid`, `asset_type_id`, `type`, `is_active`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'b4b02fc7-a67a-4498-9b38-c3db107f97ee', 1, 'HDMIiii', 0, '1', '1', '2023-02-16 07:42:15', '2023-02-16 07:44:00'),
(2, '530f896b-788a-48d3-99ad-f75df0623b2f', 2, 'keyboard', 1, '1', NULL, '2023-02-16 07:42:43', '2023-02-16 07:42:43');

-- --------------------------------------------------------

--
-- Table structure for table `asset_types`
--

CREATE TABLE `asset_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `asset_types`
--

INSERT INTO `asset_types` (`id`, `uuid`, `type`, `is_active`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '46e5b21d-ec5d-4ca6-b923-881eb07bea03', 'laptop', 1, '1', NULL, '2023-02-16 07:41:18', '2023-02-16 07:41:18'),
(2, 'f435d70c-9ef4-4145-8bbb-5611026a00e8', 'pc', 1, '1', NULL, '2023-02-16 07:41:31', '2023-02-16 07:41:31'),
(3, 'a9f9223c-8fad-4621-b9a6-6dae49b085f3', 'tablate', 0, '1', '1', '2023-02-16 07:41:52', '2023-02-16 07:55:38');

-- --------------------------------------------------------

--
-- Table structure for table `company_locations`
--

CREATE TABLE `company_locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_locations`
--

INSERT INTO `company_locations` (`id`, `uuid`, `name`, `is_active`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'bf8fc689-fbe6-461c-9e9c-2767484b1e8b', 'Ahmedabad', 1, '1', '1', '2023-02-15 04:46:36', '2023-02-15 06:43:26'),
(2, '9be870f2-edb6-46d6-b97c-70c1efcfdda5', 'surat', 0, '1', '1', '2023-02-15 05:08:54', '2023-02-15 05:15:34');

-- --------------------------------------------------------

--
-- Table structure for table `company_location_types`
--

CREATE TABLE `company_location_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_location_types`
--

INSERT INTO `company_location_types` (`id`, `uuid`, `type`, `is_active`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, '06c57ecf-308d-4bcc-8818-1c41cc4da380', 'remote', 1, '1', '1', '2023-02-15 06:49:00', '2023-02-15 06:50:08'),
(3, '75d8b64b-cb60-442b-9f22-c320564e28ec', 'baselocation', 0, '1', '1', '2023-02-15 06:49:49', '2023-02-15 06:51:33');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `uuid`, `name`, `is_active`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '3dffc81d-2d24-418f-840e-478b34f49da0', 'HR', 1, '1', NULL, '2023-02-14 02:17:49', '2023-02-14 02:17:49'),
(2, 'da15ebf6-f5f3-476e-bc1f-dac4f8ee3325', 'Designing', 0, '1', '1', '2023-02-14 02:18:07', '2023-02-14 02:18:47'),
(3, '09af8f9f-687d-4e1b-b25b-a7977cd0e8b3', 'Designer', 1, '1', NULL, '2023-02-14 02:18:19', '2023-02-14 02:18:19'),
(4, '2fa7c578-892e-448a-accf-89a7d4177489', '44444444', 0, '1', '1', '2023-02-14 02:18:33', '2023-02-15 02:45:17'),
(7, '0988442e-2b78-4a67-91d8-f177f785e7ae', 'laravell', 0, '1', '1', '2023-02-15 04:22:16', '2023-02-15 04:22:46');

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `uuid`, `name`, `department_id`, `is_active`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(3, 'fa0c1ea1-0376-4321-b048-e03fcdf9810d', 'gggggg', 2, 0, '1', '1', '2023-02-14 04:51:27', '2023-02-14 05:51:08'),
(4, '449caa76-a9ff-4ec3-a111-9fc65707a8d4', 'xxxxx', 3, 1, '1', '1', '2023-02-14 05:50:59', '2023-02-14 06:44:06');

-- --------------------------------------------------------

--
-- Table structure for table `document_types`
--

CREATE TABLE `document_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `document_types`
--

INSERT INTO `document_types` (`id`, `uuid`, `type`, `is_active`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '15614515-19ce-4406-b3c9-7602465e2d0b', 'hsc', 1, '1', '1', '2023-02-16 02:03:31', '2023-02-16 02:15:05'),
(2, '23970934-b37a-442a-9e4a-ce1acf6e333b', 'ssc', 0, '1', '1', '2023-02-16 02:04:13', '2023-02-16 02:15:46'),
(3, '921b181b-43ca-42be-9d3c-c825b91aadb2', 'ccccccccc', 0, '1', '1', '2023-02-16 02:16:44', '2023-02-16 02:17:27');

-- --------------------------------------------------------

--
-- Table structure for table `education_levels`
--

CREATE TABLE `education_levels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education_levels`
--

INSERT INTO `education_levels` (`id`, `uuid`, `name`, `is_active`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'b8885abd-0b80-4c43-895f-5d235e2dc944', 'BCA', 1, '1', NULL, '2023-02-16 01:19:50', '2023-02-16 01:19:50'),
(2, 'cf0bd2a8-741c-4c6f-9b46-59bdc276940d', 'MCA', 1, '1', '1', '2023-02-16 01:21:15', '2023-02-16 01:32:16'),
(3, '5f7ca940-5f9d-4c74-b2f9-13697c555f5c', 'engineer', 0, '1', '1', '2023-02-16 01:22:09', '2023-02-16 01:33:02');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `uuid`, `name`, `is_active`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'e092b586-87d8-4c1b-a9ea-31255ed327a5', 'Mararthi', 1, '1', NULL, '2023-02-16 00:00:50', '2023-02-16 00:00:50'),
(2, 'c1722bba-620d-46c9-92e9-8bb059ae679e', 'Hindi', 1, '1', '1', '2023-02-16 00:03:28', '2023-02-16 00:14:14'),
(3, 'd9932854-9e5d-4af1-b5c3-52d7ada6d411', 'English', 1, '1', NULL, '2023-02-16 00:04:15', '2023-02-16 00:04:15'),
(4, '1d46d38e-7ba0-4bd5-aee9-f987ade048cd', 'reena', 0, '1', '1', '2023-02-16 00:14:43', '2023-02-16 00:14:48');

-- --------------------------------------------------------

--
-- Table structure for table `medium_of_instructions`
--

CREATE TABLE `medium_of_instructions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medium_of_instructions`
--

INSERT INTO `medium_of_instructions` (`id`, `uuid`, `name`, `is_active`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '7605af53-ee77-4b3d-be48-b74d39b8e5b7', 'Hindi', 1, '1', '1', '2023-02-15 07:34:26', '2023-02-15 07:50:57'),
(2, 'ffcf1876-f805-4c3b-ac8c-7746b3fb7167', 'aaa', 0, '1', '1', '2023-02-15 07:36:34', '2023-02-15 07:50:37'),
(3, 'd8c2fd3c-a744-47c1-8ece-e3ccdf5a2e56', 'English', 1, '1', NULL, '2023-02-15 07:40:02', '2023-02-15 07:40:02');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(75, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(76, '2023_02_09_102041_create_roles_table', 1),
(77, '2014_10_12_000000_create_users_table', 2),
(78, '2014_10_12_100000_create_password_resets_table', 2),
(79, '2019_08_19_000000_create_failed_jobs_table', 2),
(80, '2023_02_09_103029_create_departments_table', 3),
(81, '2023_02_09_103316_create_designations_table', 4),
(82, '2023_02_09_105503_create_organization_roles_table', 5),
(83, '2023_02_09_105736_create_company_locations_table', 6),
(84, '2023_02_09_105927_create_company_location_types_table', 7),
(85, '2023_02_09_132404_create_medium_of_instructions_table', 8),
(86, '2023_02_16_050836_create_languages_table', 9),
(87, '2023_02_09_134355_create_education_levels_table', 10),
(88, '2023_02_10_054304_create_document_types_table', 11),
(89, '2023_02_10_134130_create_asset_brands_table', 12),
(90, '2023_02_10_055344_create_asset_types_table', 13),
(91, '2023_02_10_055243_create_asset_sub_types_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `organization_roles`
--

CREATE TABLE `organization_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `designation_id` bigint(20) UNSIGNED NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `organization_roles`
--

INSERT INTO `organization_roles` (`id`, `uuid`, `name`, `department_id`, `designation_id`, `is_active`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '2a499062-4875-4fab-bea5-1d5475d336a4', 'organizationroledsegwe', 1, 4, 1, '1', '1', '2023-02-14 23:44:53', '2023-02-15 00:37:20'),
(2, '87aa985e-dd37-404e-95de-99bf76f354f9', 'asdaWFDQW', 4, 3, 1, '1', NULL, '2023-02-15 00:53:37', '2023-02-15 00:53:37'),
(3, 'f73f1691-76b5-4036-a1d4-e23db86ea28b', 'BBBBBBBBBBBB', 4, 3, 0, '1', '1', '2023-02-15 00:54:24', '2023-02-15 00:55:52'),
(4, '190a249f-5f1c-4442-b15a-91061962ad5e', 'wwwwwww', 3, 4, 0, '1', '1', '2023-02-15 02:39:59', '2023-02-15 02:41:15');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `uuid`, `name`, `created_at`, `updated_at`) VALUES
(1, '519355b8-46c1-4309-8407-91ccaf0cf621', 'admin', NULL, NULL),
(2, '1df2d56b-5c8f-47ff-a9ad-ef87d5b0b0ee', 'user', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uuid`, `name`, `email`, `password`, `role_id`, `created_by`, `updated_by`, `is_active`, `created_at`, `updated_at`) VALUES
(1, '5efa9bf3-5aef-46f9-88cc-7f094cb1f4e2', 'admin', 'admin@gmail.com', '$2y$10$lujqp.rZbhC3/5E/NMzR9uZPcimwyulBnDEozERtRPAMWd9NFOv4W', 1, '1', NULL, 1, NULL, NULL),
(2, 'f6ff1d6d-0e2e-416f-8290-79d976ac2d66', 'riya', 'riya@gmail.com', '$2y$10$MssUM1wr8PCbWWmusbTTkuC/OG7PmjvMgumunmX0i6aC6huhxLZd.', 2, '2', NULL, 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asset_brands`
--
ALTER TABLE `asset_brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asset_sub_types`
--
ALTER TABLE `asset_sub_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `asset_sub_types_asset_type_id_foreign` (`asset_type_id`);

--
-- Indexes for table `asset_types`
--
ALTER TABLE `asset_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_locations`
--
ALTER TABLE `company_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_location_types`
--
ALTER TABLE `company_location_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `designations_department_id_foreign` (`department_id`);

--
-- Indexes for table `document_types`
--
ALTER TABLE `document_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education_levels`
--
ALTER TABLE `education_levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medium_of_instructions`
--
ALTER TABLE `medium_of_instructions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organization_roles`
--
ALTER TABLE `organization_roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `organization_roles_department_id_foreign` (`department_id`),
  ADD KEY `organization_roles_designation_id_foreign` (`designation_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asset_brands`
--
ALTER TABLE `asset_brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `asset_sub_types`
--
ALTER TABLE `asset_sub_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `asset_types`
--
ALTER TABLE `asset_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `company_locations`
--
ALTER TABLE `company_locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `company_location_types`
--
ALTER TABLE `company_location_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `document_types`
--
ALTER TABLE `document_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `education_levels`
--
ALTER TABLE `education_levels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `medium_of_instructions`
--
ALTER TABLE `medium_of_instructions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `organization_roles`
--
ALTER TABLE `organization_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `asset_sub_types`
--
ALTER TABLE `asset_sub_types`
  ADD CONSTRAINT `asset_sub_types_asset_type_id_foreign` FOREIGN KEY (`asset_type_id`) REFERENCES `asset_types` (`id`);

--
-- Constraints for table `designations`
--
ALTER TABLE `designations`
  ADD CONSTRAINT `designations_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`);

--
-- Constraints for table `organization_roles`
--
ALTER TABLE `organization_roles`
  ADD CONSTRAINT `organization_roles_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `organization_roles_designation_id_foreign` FOREIGN KEY (`designation_id`) REFERENCES `designations` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
