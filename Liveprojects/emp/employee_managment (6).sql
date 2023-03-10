-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2023 at 01:31 PM
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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `asset_brands`
--

INSERT INTO `asset_brands` (`id`, `uuid`, `name`, `is_active`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '5a1edfba-923f-4da7-91a8-644360f69801', 'SGER', 0, 1, 1, '2023-02-22 03:35:40', '2023-02-22 04:48:10'),
(2, '7f880f72-932f-4a93-9423-f6fd9384363d', 'sadasd dvsd', 1, 1, 1, '2023-02-22 04:47:53', '2023-03-06 06:51:10'),
(3, '6ad6633b-1525-416c-abc9-66a64034b4f0', 'zxzfbdf fsd', 1, 1, NULL, '2023-02-22 04:48:24', '2023-02-22 04:48:24'),
(4, '0da0dc2b-336e-4e7b-88d3-66ec4c4c6f64', 'aaa', 0, 1, 1, '2023-02-24 02:30:29', '2023-03-06 05:13:44'),
(5, '7435b86e-3c79-435e-b5f9-f818d532dfe9', 'bbb', 0, 1, 1, '2023-02-24 02:30:52', '2023-03-02 00:42:58'),
(6, '530293b0-ec88-4099-8179-ce2bb497da42', 'wqwqd', 0, 1, 1, '2023-02-24 02:31:07', '2023-02-24 02:31:37'),
(7, 'c6836f8b-d348-41c2-a06f-b89fb986b02d', 'dsdfwe', 0, 1, 1, '2023-02-24 02:31:18', '2023-03-02 00:42:55'),
(8, '0149b679-f93c-41c8-8de1-a77cf7fd6ff8', 'cvsdvsdvs', 0, 1, 1, '2023-02-24 02:38:30', '2023-02-24 02:38:50'),
(9, '4c0fe634-3e6a-4c73-8b14-3d4b4747bd7a', 'fjdjdryj', 0, 1, 1, '2023-02-24 02:40:52', '2023-03-02 01:34:11'),
(10, 'c360b562-8e19-4092-8dd7-5e81a430923d', 'gfjnfj', 0, 1, 1, '2023-02-24 02:41:04', '2023-02-24 02:41:32'),
(11, '3c37cd7d-fc5c-43cf-9ef6-624f4da2c4c1', 'HP', 0, 1, 1, '2023-02-27 02:35:59', '2023-03-02 00:42:51'),
(12, '13d9533f-1009-4ef2-8d16-235659aa4795', 'aaaa', 1, 1, 1, '2023-03-02 00:42:43', '2023-03-06 05:13:35'),
(13, '4358b16b-a41f-4d82-831c-55748d751d76', 'hppdsv', 1, 1, 1, '2023-03-02 01:33:42', '2023-03-02 01:34:00');

-- --------------------------------------------------------

--
-- Table structure for table `asset_sub_types`
--

CREATE TABLE `asset_sub_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asset_type_id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `asset_sub_types`
--

INSERT INTO `asset_sub_types` (`id`, `uuid`, `asset_type_id`, `type`, `is_active`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '1fed0f7b-5111-44b7-8aab-6b009ae9d3d9', 1, 'sferf', 0, 1, NULL, '2023-03-06 05:43:13', '2023-03-06 05:44:13'),
(2, '240dd37a-8337-419b-ad70-7f9e61ccf79b', 4, 'svdfgver', 1, 1, NULL, '2023-03-06 05:43:22', '2023-03-06 05:43:22'),
(3, '2babc7ef-79cd-4dbd-aa88-526ced7085bd', 4, 'sfvdfv', 1, 1, NULL, '2023-03-06 05:43:32', '2023-03-06 05:43:32');

-- --------------------------------------------------------

--
-- Table structure for table `asset_types`
--

CREATE TABLE `asset_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `asset_types`
--

INSERT INTO `asset_types` (`id`, `uuid`, `type`, `is_active`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '68638031-d8c3-4985-8192-4f2343843a52', 'abc', 0, 1, 1, '2023-03-06 05:42:14', '2023-03-06 05:44:13'),
(2, '5e44725c-f55b-45a4-a81a-6472250c59b3', 'cde', 1, 1, NULL, '2023-03-06 05:42:30', '2023-03-06 05:42:30'),
(3, '27c69214-a39a-4ae2-9497-368debe5a6b7', 'dfg', 1, 1, NULL, '2023-03-06 05:42:40', '2023-03-06 05:42:40'),
(4, '9470dec9-27a1-4b52-ad54-b01162d3f612', 'dddd', 1, 1, NULL, '2023-03-06 05:42:56', '2023-03-06 05:42:56');

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `attendance_date` date NOT NULL,
  `check_in` time NOT NULL,
  `check_out` time NOT NULL,
  `half_day` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_check_in` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country _id` bigint(20) UNSIGNED NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `company_locations`
--

CREATE TABLE `company_locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_locations`
--

INSERT INTO `company_locations` (`id`, `uuid`, `name`, `is_active`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '843ef0ce-3df5-4b08-9ed3-3dbf9c6536c0', 'Ahmedabadd', 1, 1, 1, '2023-02-22 04:40:32', '2023-03-01 06:13:38'),
(2, '499730d4-94bc-47df-b12d-9f963b42b277', 'vnfg cghg', 0, 1, 1, '2023-02-22 04:41:04', '2023-02-22 04:41:08'),
(3, '253a3594-710f-418e-b4b0-c5ad2c0caa05', 'asdad', 0, 1, 1, '2023-02-24 02:59:36', '2023-03-06 04:48:22'),
(4, '5e17ac01-4d2d-4d0b-aae6-6944cd2fb183', 'dsdfa', 1, 1, NULL, '2023-02-24 02:59:54', '2023-02-24 02:59:54'),
(5, '4bae0326-cb15-475f-b355-844eb6c23385', 'bombay', 1, 1, 1, '2023-02-24 03:00:16', '2023-03-06 04:45:48'),
(6, '363603a1-303c-4ff5-9ff0-539e380dfac3', 'sdvsdv', 0, 1, 1, '2023-02-24 03:00:28', '2023-03-01 05:45:52'),
(7, 'c392ead0-f142-4918-bc5f-6a40b67201e2', 'sdvsdv', 0, 1, 1, '2023-02-24 03:00:39', '2023-03-01 06:13:44'),
(8, '8df6f88d-32c1-4e8f-aeee-ba2a317eab78', 'zxvzsdv', 0, 1, 1, '2023-02-24 03:00:58', '2023-02-24 03:01:23'),
(9, 'c4dc0801-8e5c-4072-9935-1f9bacabff8a', 'goa', 0, 1, 1, '2023-03-01 05:58:25', '2023-03-01 06:17:05'),
(10, '53e9e0a0-0bfa-439e-8164-bff12d8c3474', 'bombay', 0, 1, 1, '2023-03-01 06:00:59', '2023-03-06 04:45:56');

-- --------------------------------------------------------

--
-- Table structure for table `company_location_types`
--

CREATE TABLE `company_location_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_location_types`
--

INSERT INTO `company_location_types` (`id`, `uuid`, `type`, `is_active`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '7f1d8541-ed7b-4226-9d0b-9ba2c5d46158', 'Sf dvsdvs', 0, 1, 1, '2023-02-22 04:42:19', '2023-02-22 04:42:52'),
(2, 'ed4e76eb-9f9d-4386-ae03-d23d4501d290', 'remote dd', 1, 1, NULL, '2023-02-22 04:42:47', '2023-02-22 04:42:47'),
(3, '87f18a37-c94c-4ec0-901e-90136b974d8d', 'sdvsdv', 1, 1, NULL, '2023-02-22 04:43:06', '2023-02-22 04:43:06'),
(4, '3773d43c-06c9-411d-9437-24e437ca8ad2', 'cvcvb', 0, 1, 1, '2023-02-24 03:06:18', '2023-03-06 04:51:11'),
(5, '2ab763a3-c401-4e74-b55c-673f4af57bc1', 'zxvzdf', 1, 1, NULL, '2023-02-24 03:07:00', '2023-02-24 03:07:00'),
(6, '46c7f6d0-ddfb-415f-82aa-7e8c2c070c94', 'DCD', 0, 1, 1, '2023-02-24 03:07:30', '2023-03-01 06:42:45'),
(7, '639d0a8c-d119-48f2-9903-93b2fe11b215', 'dvsdv', 0, 1, 1, '2023-02-24 03:07:42', '2023-03-01 06:35:00'),
(8, '69856c8d-4415-49dc-a854-29a83c6f49b6', 'ghcgh', 0, 1, 1, '2023-02-24 03:09:46', '2023-02-24 03:09:56'),
(9, 'f653c886-94c4-4ea7-aa8e-73e99aba6fc1', 'roaddd', 1, 1, 1, '2023-03-01 06:34:52', '2023-03-01 06:44:00'),
(10, 'be6bb287-9eb8-407b-bd9d-8d778222431d', 'xzcvxdv', 0, 1, 1, '2023-03-01 06:45:25', '2023-03-01 06:48:26'),
(11, '3558fb79-be11-4da6-8ae3-e4c25f8a75f9', 'road', 1, 1, NULL, '2023-03-01 06:48:44', '2023-03-01 06:48:44');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `current_residence_types`
--

CREATE TABLE `current_residence_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `current_residence_types`
--

INSERT INTO `current_residence_types` (`id`, `uuid`, `type`, `is_active`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '54d54399-83b3-4c1f-9ae3-e3dd99d7d58e', 'bxb gbd ff', 0, 1, 1, '2023-02-22 04:52:21', '2023-02-22 04:52:39'),
(2, 'd234125c-8c96-4ed9-8e65-a9a415f7a61a', 'Vsdvsdv', 1, 1, NULL, '2023-02-24 03:36:41', '2023-02-24 03:36:41'),
(3, '01ba0193-fb76-49bb-af23-382d37a6bfe4', 'zzzzz', 1, 1, 1, '2023-02-24 03:36:55', '2023-03-02 04:48:14'),
(4, 'e337a8e5-5049-4caf-8908-9735277825de', 'xc vzdxfv', 1, 1, NULL, '2023-02-24 03:37:16', '2023-02-24 03:37:16'),
(5, '48af1534-adf6-4ab1-8e2e-f9f5330338da', 'Vsdvsdv', 0, 1, 1, '2023-02-24 03:37:30', '2023-03-06 05:20:01'),
(6, '1cf53699-1535-4a82-b4af-4965ac7a0954', 'xvdfv', 0, 1, 1, '2023-02-24 03:37:44', '2023-02-24 03:38:25'),
(7, '7511d624-beaf-4d66-a735-1fb186f27990', 'xxxx', 0, 1, 1, '2023-02-24 03:38:01', '2023-03-02 04:43:21'),
(8, 'dbadbd16-3fe1-47ec-9b23-cc6e4135a0e6', 'zxvsdv', 0, 1, 1, '2023-02-24 03:38:15', '2023-03-02 04:43:18'),
(9, 'f5a6ef25-e403-4a83-b9a2-6d7916e2a327', 'dxfbdf', 0, 1, 1, '2023-02-24 05:36:46', '2023-02-24 05:42:09'),
(10, 'ff848ae7-9dae-465e-ad6f-061ecfa9e27b', 'homeee', 1, 1, NULL, '2023-03-02 04:33:51', '2023-03-02 04:33:51'),
(11, 'e011ec79-45e1-4daa-a25d-ebf1f1b13245', 'road', 1, 1, NULL, '2023-03-02 04:47:43', '2023-03-02 04:47:43');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `uuid`, `name`, `is_active`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'f17008ba-ad19-487a-b950-5ff14d12d8cb', 'designing', 0, 1, 1, '2023-03-06 02:36:22', '2023-03-06 02:41:01'),
(2, 'd43ff533-3bb7-43f3-91dc-673dc9b5bf2c', 'coding', 0, 1, 1, '2023-03-06 02:36:31', '2023-03-06 04:06:42'),
(3, '3f8f24b3-e2cd-4a92-be24-19a706b916af', 'testing', 0, 1, 1, '2023-03-06 02:36:41', '2023-03-06 04:19:52'),
(4, '8cc9a15b-a0da-4faa-a38c-f88b4d2a7bfd', 'hr', 0, 1, 1, '2023-03-06 02:36:49', '2023-03-06 04:09:51'),
(5, 'bda738d3-324b-4f35-bf93-7bf34b588b48', 'abc', 0, 1, 1, '2023-03-06 02:37:10', '2023-03-06 02:37:24'),
(6, '256bfe6b-ee49-42fe-af0b-eed8736146f2', 'cdf', 0, 1, 1, '2023-03-06 02:37:17', '2023-03-06 04:28:11'),
(7, '13d68720-4283-4ad9-bdae-7541a6be485f', 'hfhrfrh', 1, 1, NULL, '2023-03-06 04:26:44', '2023-03-06 04:26:44'),
(8, '08f08828-c4d5-4e05-99e5-bf3bf532cd06', 'gbdg', 1, 1, NULL, '2023-03-06 04:37:45', '2023-03-06 04:37:45');

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `uuid`, `name`, `department_id`, `is_active`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'e40e91a6-4711-415d-aa26-560a15999617', 'senior designer', 1, 0, 1, NULL, '2023-03-06 02:38:40', '2023-03-06 02:41:01'),
(2, '35afc0b7-65e7-48e5-afd9-0dbd29b8c14e', 'manager designer', 1, 0, 1, 1, '2023-03-06 02:39:11', '2023-03-06 02:41:01'),
(3, 'c94977a8-1411-4b69-aad6-712cc56fbe67', 'reena', 2, 0, 1, NULL, '2023-03-06 02:39:33', '2023-03-06 04:06:42'),
(4, '148d3189-08ff-48a1-bceb-730391696b4b', 'mitesh', 4, 0, 1, NULL, '2023-03-06 02:42:13', '2023-03-06 04:09:51'),
(5, '512ca900-b7c6-45de-8445-e1ba03cb772a', 'riya', 4, 0, 1, NULL, '2023-03-06 04:08:50', '2023-03-06 04:09:51'),
(6, 'a8ffc399-1622-48bf-9f28-f6dd2673d266', 'khanak', 6, 0, 1, 1, '2023-03-06 04:09:05', '2023-03-06 04:28:11'),
(7, '182aa44e-a7f7-424f-97cc-70a9fb6a6b7d', 'krisha', 6, 0, 1, NULL, '2023-03-06 04:11:45', '2023-03-06 04:28:11'),
(8, 'd7c9d78f-19a1-4c62-8cc0-ecc1806bd222', 'hanishka', 3, 0, 1, NULL, '2023-03-06 04:12:02', '2023-03-06 04:19:52'),
(9, 'ceb8a170-6357-4fc0-ab3d-84e26bfd0a29', 'nghj', 6, 0, 1, 1, '2023-03-06 04:25:48', '2023-03-06 04:28:11'),
(10, 'e6ea457e-c619-4c1a-b6ea-65d49d3cda87', 'nhfhn', 6, 0, 1, NULL, '2023-03-06 04:25:59', '2023-03-06 04:28:11'),
(11, 'ee4461d5-2798-4e4b-85a5-3ef969a2f0aa', 'dgedeg', 7, 1, 1, NULL, '2023-03-06 04:27:00', '2023-03-06 04:27:00'),
(12, '5441e9f1-f80b-4c5a-b861-4561f0ff6a72', 'gndgb', 7, 1, 1, NULL, '2023-03-06 04:37:53', '2023-03-06 04:37:53'),
(13, '0bee4556-ed85-40b2-943c-3b3940708f8c', 'vzdvzdv', 8, 1, 1, NULL, '2023-03-06 04:39:06', '2023-03-06 04:39:06');

-- --------------------------------------------------------

--
-- Table structure for table `document_types`
--

CREATE TABLE `document_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `document_types`
--

INSERT INTO `document_types` (`id`, `uuid`, `type`, `is_active`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'b226f4f9-36e2-4440-acf9-f5a7facc6fc4', 'hscv', 0, 1, 1, '2023-02-22 04:47:17', '2023-02-22 04:47:38'),
(2, '68a36bba-e2ac-406b-8b85-4580966e1dca', 'xvxdv', 1, 1, NULL, '2023-02-24 03:59:22', '2023-02-24 03:59:22'),
(3, '20e3370d-3f10-489a-b351-ba2c42238c7a', 'cvxcv', 1, 1, NULL, '2023-02-24 03:59:38', '2023-02-24 03:59:38'),
(4, '9d83cef6-cd9b-4847-a3cf-626b2c6d8994', 'cvxcv', 0, 1, 1, '2023-02-24 03:59:57', '2023-03-06 05:10:11'),
(5, 'b9469061-8536-451b-a17f-047e0c7adb01', 'xcbxfb', 1, 1, NULL, '2023-02-24 04:00:10', '2023-02-24 04:00:10'),
(6, 'd6b6d690-b58e-4cfd-875c-acc4100f7d98', 'cbcvb', 0, 1, 1, '2023-02-24 04:00:22', '2023-03-02 00:12:12'),
(7, 'd3bd2ba6-9240-427e-808a-c91d97c1c4d0', 'cbcvb', 0, 1, 1, '2023-02-24 04:00:34', '2023-03-02 00:12:15'),
(8, '01c2cbc2-868f-409e-b8f3-9276ab120b33', 'vc bcb', 0, 1, 1, '2023-02-24 04:00:48', '2023-02-24 04:01:00'),
(9, 'fd7aea93-6283-4b16-abb6-00350e70e304', 'markshhersdvs', 1, 1, 1, '2023-03-02 00:11:52', '2023-03-02 00:22:52'),
(10, '61fc6914-4f76-4203-aec3-0a43884b571e', 'sdv', 1, 1, NULL, '2023-03-02 00:26:07', '2023-03-02 00:26:07');

-- --------------------------------------------------------

--
-- Table structure for table `education_levels`
--

CREATE TABLE `education_levels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education_levels`
--

INSERT INTO `education_levels` (`id`, `uuid`, `name`, `is_active`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '07dd4297-1ab8-4039-95d2-f1c7327ad5bf', 'BCA fef', 0, 1, 1, '2023-02-22 04:46:00', '2023-02-22 04:46:40'),
(2, '8179d7af-2d7e-44ff-8018-0fb200149d7f', 'ssc', 1, 1, 1, '2023-02-22 04:46:36', '2023-03-06 06:49:03'),
(3, 'a981b5a8-64c8-4812-8439-1025cbe0c758', 'sdvffdv', 1, 1, NULL, '2023-02-24 05:13:29', '2023-02-24 05:13:29'),
(4, 'c86e717b-a9e4-4d4a-aaba-d700ea133d97', 'dcsdc', 1, 1, NULL, '2023-02-24 05:13:42', '2023-02-24 05:13:42'),
(5, 'f75c3700-00d4-4686-933e-221661a3bcbe', 'dcsdc', 0, 1, 1, '2023-02-24 05:13:55', '2023-03-06 04:59:36'),
(6, '5a9ced11-6438-4e68-a38c-b9399d1736e6', 'grtgtr', 0, 1, 1, '2023-02-24 05:14:05', '2023-03-01 23:36:50'),
(7, '1062199e-e60a-47d0-aca3-8bb6f23846ee', 'fgbfgh', 0, 1, 1, '2023-02-24 05:14:18', '2023-03-01 23:36:54'),
(8, '767f55dc-6be2-4599-8fd3-107eb16c0c06', 'fgbfgh', 0, 1, 1, '2023-02-24 05:14:32', '2023-02-24 05:15:07'),
(9, '13db7232-f733-45f1-9a16-850ad096cd7c', 'ghghrth', 0, 1, 1, '2023-02-24 05:14:59', '2023-03-01 23:36:57'),
(10, 'e6874553-60ba-4174-800b-8df23184a4fb', 'kg', 0, 1, 1, '2023-03-01 08:01:08', '2023-03-01 23:36:59'),
(11, '66234f42-ac32-485d-aebf-5cbefeb01562', 'nurshing', 0, 1, 1, '2023-03-01 23:31:40', '2023-03-01 23:44:57'),
(12, '87c3efa9-cbf0-49d8-ab3a-84a5a287575e', 'nurshing', 0, 1, 1, '2023-03-01 23:44:01', '2023-03-01 23:45:00'),
(13, '13fbaa21-9995-499a-ae73-8bc301908390', 'nurshing', 1, 1, 1, '2023-03-01 23:44:31', '2023-03-01 23:45:41'),
(14, '1ce9d9c9-5d2d-4f82-97cd-ec992240f795', 'dcscac', 0, 1, 1, '2023-03-01 23:50:09', '2023-03-06 05:06:44'),
(15, 'dff9fc37-3f7f-4e69-ad3a-ca46f81df9d2', 'ccccccccZSCasc', 0, 1, 1, '2023-03-01 23:56:05', '2023-03-01 23:56:32');

-- --------------------------------------------------------

--
-- Table structure for table `employee_job_profile_details`
--

CREATE TABLE `employee_job_profile_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_employee_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_emp_device_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `designation_id` bigint(20) UNSIGNED NOT NULL,
  `organization_role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_location_histories`
--

CREATE TABLE `employee_location_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `company_location_id` bigint(20) UNSIGNED NOT NULL,
  `company_location_type_id` bigint(20) UNSIGNED NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_personal_details`
--

CREATE TABLE `employee_personal_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marital_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` int(11) NOT NULL,
  `alternate_no` int(11) NOT NULL,
  `blood_group` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_residence_type_id` bigint(20) UNSIGNED NOT NULL,
  `details_of_disability` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_of_experience` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_country_id` bigint(20) UNSIGNED NOT NULL,
  `current_state_id` bigint(20) UNSIGNED NOT NULL,
  `current_city_id` bigint(20) UNSIGNED NOT NULL,
  `current_pincode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_country_id` bigint(20) UNSIGNED NOT NULL,
  `permanent_state_id` bigint(20) UNSIGNED NOT NULL,
  `permanent_city_id` bigint(20) UNSIGNED NOT NULL,
  `permanent_pincode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mode_of_transportation_id` bigint(20) UNSIGNED NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_personal_detail_histories`
--

CREATE TABLE `employee_personal_detail_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_personal_dtl_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marital_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` int(11) NOT NULL,
  `alternate_no` int(11) NOT NULL,
  `blood_group` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_residence_type_id` bigint(20) UNSIGNED NOT NULL,
  `details_of_disability` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_of_experience` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_country_id` bigint(20) UNSIGNED NOT NULL,
  `current_state_id` bigint(20) UNSIGNED NOT NULL,
  `current_city_id` bigint(20) UNSIGNED NOT NULL,
  `current_pincode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_country_id` bigint(20) UNSIGNED NOT NULL,
  `permanent_state_id` bigint(20) UNSIGNED NOT NULL,
  `permanent_city_id` bigint(20) UNSIGNED NOT NULL,
  `permanent_pincode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mode_of_transportation_id` bigint(20) UNSIGNED NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emp_asset_details`
--

CREATE TABLE `emp_asset_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `asset_brand_id` bigint(20) UNSIGNED NOT NULL,
  `asset_sub_type_id` bigint(20) UNSIGNED NOT NULL,
  `serial_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purchased_dn` date NOT NULL,
  `purchased_from` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warranty_period` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization_asset_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asset_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emp_bank_details`
--

CREATE TABLE `emp_bank_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `ac_holder_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ifsc_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emp_document_details`
--

CREATE TABLE `emp_document_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `document_type_id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emp_education_details`
--

CREATE TABLE `emp_education_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `education_level_id` bigint(20) UNSIGNED NOT NULL,
  `medium_instruction_id` bigint(20) UNSIGNED NOT NULL,
  `university_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specilaization` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passing_year` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emp_emergency_contacts`
--

CREATE TABLE `emp_emergency_contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `relationship` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emp_employment_details`
--

CREATE TABLE `emp_employment_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_joining` date NOT NULL,
  `date_of_resigning` date DEFAULT NULL,
  `date_of_leaving` date DEFAULT NULL,
  `reason_for_leaving` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resign_letter_pdf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emp_employment_detail_histories`
--

CREATE TABLE `emp_employment_detail_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_employment_detail_id` bigint(20) UNSIGNED NOT NULL,
  `date_of_joining` date NOT NULL,
  `date_of_resigning` date DEFAULT NULL,
  `date_of_leaving` date DEFAULT NULL,
  `reason_for_leaving` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resign_letter_pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emp_family_details`
--

CREATE TABLE `emp_family_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relationship` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no` int(11) NOT NULL,
  `is_dependent` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emp_job_prof_dtl_histories`
--

CREATE TABLE `emp_job_prof_dtl_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_job_prof_dtl_id` bigint(20) UNSIGNED NOT NULL,
  `company_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_employee_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_emp_device_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `designation_id` bigint(20) UNSIGNED NOT NULL,
  `organization_role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emp_lang_details`
--

CREATE TABLE `emp_lang_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `read` tinyint(1) NOT NULL,
  `write` tinyint(1) NOT NULL,
  `speak` tinyint(1) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emp_leave_details`
--

CREATE TABLE `emp_leave_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `leave_type_id` bigint(20) UNSIGNED NOT NULL,
  `date_of_request` date NOT NULL,
  `leave_start_date` date NOT NULL,
  `leave_end_date` date NOT NULL,
  `no_of_days` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `half_day_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `return_date` date NOT NULL,
  `leave_reason` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_approved` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_cancelled` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emp_leave_detail_histories`
--

CREATE TABLE `emp_leave_detail_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_leave_detail_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `leave_type_id` bigint(20) UNSIGNED NOT NULL,
  `date_of_request` date NOT NULL,
  `leave_start_date` date NOT NULL,
  `leave_end_date` date NOT NULL,
  `no_of_days` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `half_day_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `return_date` date NOT NULL,
  `leave_reason` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_approved` tinyint(1) NOT NULL,
  `remarks` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_cancelled` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `emp_work_experience_details`
--

CREATE TABLE `emp_work_experience_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_joining` date NOT NULL,
  `date_of_leaving` date NOT NULL,
  `joining_designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leaving_designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_salary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leaving_reason` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `reporting_authority_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reporting_authority_contact` int(11) NOT NULL,
  `reporting_authority_designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience_certificate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `uuid`, `name`, `is_active`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '906a50ed-f869-4248-9ec8-de06539b943c', 'Mararthi', 1, 1, NULL, '2023-02-22 04:44:53', '2023-02-22 04:44:53'),
(2, '16d0a884-46c5-4417-a55d-bb02ddb70c3f', 'tttt', 0, 1, 1, '2023-02-22 04:45:40', '2023-02-22 04:45:43'),
(3, '047edbfe-1d8a-4a55-b6ca-0a45d496dd0e', 'acascfa', 1, 1, NULL, '2023-02-24 05:19:14', '2023-02-24 05:19:14'),
(4, '677277ae-13ec-4240-9035-078cbc7904a3', 'xzvsfv', 1, 1, NULL, '2023-02-24 05:19:26', '2023-02-24 05:19:26'),
(5, '9afe3a08-1958-4179-9f95-5c5d5d47614c', 'csdvsd', 1, 1, NULL, '2023-02-24 05:19:38', '2023-02-24 05:19:38'),
(6, '57bad99b-7f48-44c7-9eea-889d55806272', 'DVsdv', 0, 1, 1, '2023-02-24 05:19:51', '2023-03-01 07:34:29'),
(7, '7d58380d-aaff-4ac0-a75b-a09aff8a1a49', 'dcvsvd', 0, 1, 1, '2023-02-24 05:20:06', '2023-03-01 07:34:25'),
(8, '0f4f38bf-319e-4782-985e-124369160455', 'xcvsfv', 0, 1, 1, '2023-02-24 05:20:19', '2023-02-24 05:20:28'),
(9, '89085756-8f99-4216-b5a7-4ae13f9a46cd', 'turkishas', 0, 1, 1, '2023-03-01 07:33:42', '2023-03-01 07:47:03'),
(10, 'bf32f6a7-dc46-44cb-a1ea-7f06f83aab7c', 'csdvsd', 0, 1, 1, '2023-03-01 07:43:57', '2023-03-06 04:57:20');

-- --------------------------------------------------------

--
-- Table structure for table `leave_types`
--

CREATE TABLE `leave_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leave_types`
--

INSERT INTO `leave_types` (`id`, `uuid`, `type`, `is_active`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '5215ea0a-b776-4861-b00a-04bf3e0e1127', 'fbfb fbdf cbdfb fbdfv', 0, 1, 1, '2023-02-22 04:53:41', '2023-02-22 04:54:09'),
(2, '0df44d8b-4814-4ee8-978f-e582cd4a2216', 'scascas', 1, 1, NULL, '2023-02-24 05:24:39', '2023-02-24 05:24:39'),
(3, 'e9f46de3-53e0-4f29-8f2c-3247d17ac050', 'zzzz', 1, 1, 1, '2023-02-24 05:25:00', '2023-03-02 05:51:01'),
(4, 'd4f73feb-56c5-46b7-bb3d-73497e046321', 'ssssssss', 0, 1, 1, '2023-02-24 05:25:10', '2023-03-06 05:29:00'),
(5, '74647a71-b9e4-4a09-9d89-7a67b0ad4021', 'xxxxxxxxx', 1, 1, 1, '2023-02-24 05:25:22', '2023-03-02 05:51:11'),
(6, '08b95dec-b51e-4d6c-9061-5d007292e54f', 'ZVadV', 0, 1, 1, '2023-02-24 05:25:34', '2023-03-02 05:42:58'),
(7, '5948135f-9b24-44eb-8a37-a562d14194c3', 'ZDVzdV', 0, 1, 1, '2023-02-24 05:25:46', '2023-03-02 05:43:01'),
(8, 'ba7ee1b0-8372-460c-a656-c3c4cd5677f1', 'zvzdVad', 0, 1, 1, '2023-02-24 05:25:58', '2023-02-24 05:26:19'),
(9, 'faae0bf3-d0a3-405b-a355-2deff42093b1', 'casuallljjh', 1, 1, 1, '2023-03-02 05:42:52', '2023-03-02 05:55:50'),
(10, '3af96fd8-c59b-4462-98c0-811d28ab5361', 'general', 1, 1, NULL, '2023-03-02 05:55:27', '2023-03-02 05:55:27');

-- --------------------------------------------------------

--
-- Table structure for table `medium_of_instructions`
--

CREATE TABLE `medium_of_instructions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medium_of_instructions`
--

INSERT INTO `medium_of_instructions` (`id`, `uuid`, `name`, `is_active`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '4a5955ac-329c-49f1-a099-1677385fae40', 'Hindi', 1, 1, 1, '2023-02-22 04:43:48', '2023-02-22 04:44:11'),
(2, '8a01d5e2-9bc2-4e83-9cb2-4cc41cae92bc', 'eee', 0, 1, 1, '2023-02-22 04:44:24', '2023-02-22 04:44:28'),
(3, '648c95d1-f568-4755-a3b4-2f1c43e4b148', 'csdcsd', 1, 1, NULL, '2023-02-24 05:31:28', '2023-02-24 05:31:28'),
(4, 'd0a30cca-4596-4126-8dc7-e48913da4fe7', 'zcDc', 0, 1, 1, '2023-02-24 05:31:44', '2023-03-06 04:54:44'),
(5, '0b676fc6-d2ea-4e61-8086-02b6c43e77b4', 'marathi', 1, 1, 1, '2023-02-24 05:31:59', '2023-03-01 07:14:06'),
(6, 'cd1ca73f-17c9-48eb-b8b0-0ad26469928d', 'zcdscd', 0, 1, 1, '2023-02-24 05:32:23', '2023-03-01 07:05:23'),
(7, 'ff916941-e1f4-4b46-ac58-deec25135ec9', 'csdcsd', 0, 1, 1, '2023-02-24 05:32:37', '2023-03-01 07:05:27'),
(8, 'e4aaa441-d5de-43cb-ab63-54af6a5c6165', 'zcsdca', 0, 1, 1, '2023-02-24 05:33:00', '2023-02-24 05:33:09'),
(9, 'af773a87-d030-442c-8f01-a0bf8a0ece68', 'English', 1, 1, 1, '2023-02-27 02:34:32', '2023-02-27 02:34:54'),
(10, '21c27d8e-3927-455c-844a-158f754e18e6', 'gujarati', 1, 1, NULL, '2023-03-01 07:05:17', '2023-03-01 07:05:17'),
(11, '5cd2446e-621e-4656-b632-3e62ae43c107', 'urdu', 1, 1, NULL, '2023-03-01 07:18:11', '2023-03-01 07:18:11');

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
(6, '2014_10_11_000000_create_roles_table', 1),
(7, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(8, '2014_10_12_000000_create_users_table', 2),
(9, '2023_02_09_103029_create_departments_table', 3),
(10, '2014_10_12_100000_create_password_resets_table', 4),
(11, '2019_08_19_000000_create_failed_jobs_table', 4),
(12, '2023_02_09_103316_create_designations_table', 4),
(13, '2023_02_09_104306_create_countries_table', 5),
(14, '2023_02_09_104621_create_states_table', 6),
(15, '2023_02_09_105020_create_cities_table', 7),
(16, '2023_02_09_105503_create_organization_roles_table', 8),
(17, '2023_02_09_105736_create_company_locations_table', 9),
(18, '2023_02_09_105927_create_company_location_types_table', 10),
(19, '2023_02_09_111820_create_mode_of_transportations_table', 11),
(20, '2023_02_09_112411_create_current_residence_types_table', 12),
(21, '2023_02_09_132404_create_medium_of_instructions_table', 13),
(22, '2023_02_09_134355_create_education_levels_table', 14),
(23, '2023_02_09_114317_create_employee_personal_details_table', 15),
(24, '2023_02_09_110413_create_employee_location_histories_table', 16),
(25, '2023_02_09_123055_create_employee_personal_detail_histories_table', 17),
(26, '2023_02_16_050836_create_languages_table', 18),
(27, '2023_02_09_131116_create_employee_job_profile_details_table', 19),
(28, '2023_02_22_054348_create_emp_job_prof_dtl_histories_table', 20),
(29, '2023_02_09_133207_create_emp_lang_details_table', 21),
(30, '2023_02_10_050143_create_emp_education_details_table', 22),
(31, '2023_02_22_055514_create_emp_professional_training_details_table', 23),
(32, '2023_02_10_051436_create_emp_family_details_table', 24),
(33, '2023_02_10_052045_create_emp_emergency_contacts_table', 25),
(34, '2023_02_22_061228_create_emp_work_experience_details_table', 26),
(35, '2023_02_10_053600_create_emp_bank_details_table', 27),
(36, '2023_02_10_054304_create_document_types_table', 28),
(37, '2023_02_10_054517_create_emp_documents_table', 29),
(38, '2023_02_22_070021_create_emp_document_details_table', 30),
(39, '2023_02_10_055344_create_asset_types_table', 31),
(40, '2023_02_10_134130_create_asset_brands_table', 31),
(41, '2023_02_10_055243_create_asset_sub_types_table', 32),
(42, '2023_02_10_060456_create_emp_asset_details_table', 33),
(43, '2023_02_10_063950_create_attendances_table', 34),
(44, '2023_02_10_114427_create_emp_employment_details_table', 35),
(46, '2023_02_10_115306_create_emp_employment_detail_histories_table', 36),
(47, '2023_02_11_151245_create_leave_types_table', 37),
(48, '2023_02_11_151510_create_emp_leave_details_table', 38),
(50, '2023_02_11_153456_create_emp_leave_detail_histories_table', 39),
(51, '2023_02_20_060403_create_images_table', 40);

-- --------------------------------------------------------

--
-- Table structure for table `mode_of_transportations`
--

CREATE TABLE `mode_of_transportations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mode_of_transportations`
--

INSERT INTO `mode_of_transportations` (`id`, `uuid`, `type`, `is_active`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'e7424497-11f2-417c-8c9c-121ef407ea6e', 'xbxfb dvdCSC vsdv', 0, 1, 1, '2023-02-22 04:53:05', '2023-02-22 04:53:23'),
(2, '221ffcbc-0d2f-40b1-bf8d-0af41531389e', 'ZXCZDCa', 0, 1, 1, '2023-02-24 05:37:00', '2023-03-02 05:06:59'),
(3, 'c0ae52d9-b71e-4d6f-94e1-ad6129c38184', 'zCdc', 0, 1, 1, '2023-02-24 05:37:14', '2023-03-02 05:07:02'),
(4, 'ddb18038-940a-4473-8fcd-0566434a8c55', 'zDvdv', 0, 1, 1, '2023-02-24 05:37:24', '2023-03-02 05:07:06'),
(5, 'a6bf6c95-ff56-4cea-9121-3fad8320f84c', 'xxxx', 0, 1, 1, '2023-02-24 05:37:34', '2023-03-06 05:24:12'),
(6, 'b5724fb6-6270-4b35-9374-d400ad2524a7', 'XFsfvssdcsdc', 0, 1, 1, '2023-02-24 05:37:47', '2023-03-02 05:24:05'),
(7, '672c6d58-797f-4363-906f-62e9b701a902', 'bus', 1, 1, 1, '2023-02-24 05:38:14', '2023-03-02 05:23:56'),
(8, '506d5315-0720-4b9b-bd28-d47a06296d04', 'zdDVd', 0, 1, 1, '2023-02-24 05:38:26', '2023-02-24 05:38:35'),
(9, 'bad5d5d5-9c6c-4a0f-9928-cd16be55b5b1', 'DCDCa', 0, 1, 1, '2023-02-24 05:38:48', '2023-03-02 05:06:56'),
(10, 'caa0d938-36b8-430d-a377-f50a56db8165', 'DVDV', 0, 1, 1, '2023-02-24 05:39:01', '2023-02-24 05:39:18'),
(11, 'ccfe69a0-05e8-47c8-855b-fcc90c597f48', 'activa', 1, 1, NULL, '2023-03-02 05:06:49', '2023-03-02 05:06:49'),
(12, '6887696c-50b3-4da3-be30-cb3412110258', 'xxxx', 1, 1, 1, '2023-03-02 05:18:57', '2023-03-02 05:20:03'),
(13, '1f98bfe0-722c-47bc-af0e-e0461ec5ebee', 'bike', 1, 1, NULL, '2023-03-02 05:23:37', '2023-03-02 05:23:37');

-- --------------------------------------------------------

--
-- Table structure for table `organization_roles`
--

CREATE TABLE `organization_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `designation_id` bigint(20) UNSIGNED NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `organization_roles`
--

INSERT INTO `organization_roles` (`id`, `uuid`, `name`, `department_id`, `designation_id`, `is_active`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '42f8fa6f-5dc5-41f8-abff-9e3c82e7b46e', 'xxxx', 6, 6, 0, 1, NULL, '2023-03-06 04:11:32', '2023-03-06 04:28:11'),
(2, '014248af-3eef-437b-af2c-9179975f0466', 'cccc', 3, 8, 0, 1, NULL, '2023-03-06 04:12:32', '2023-03-06 04:19:52'),
(3, '89593564-4c3b-4146-9a1c-10dc5ac09ff6', 'cacs', 6, 6, 0, 1, NULL, '2023-03-06 04:13:01', '2023-03-06 04:28:11'),
(4, 'd12f2de5-5750-428d-b8a7-9a88eb8663ff', 'bbfhd', 6, 7, 0, 1, NULL, '2023-03-06 04:25:39', '2023-03-06 04:28:11'),
(5, 'a042b3c8-140c-4bf4-a915-9fc0ec7397a9', 'nf', 6, 9, 0, 1, NULL, '2023-03-06 04:26:11', '2023-03-06 04:28:11'),
(6, '21750b0c-8283-4be4-b25f-fd7e0d5555d7', 'nhgyhntrfh', 6, 10, 0, 1, NULL, '2023-03-06 04:26:29', '2023-03-06 04:28:11'),
(7, 'ef8b0240-c10e-4110-b3f1-298cca01d779', 'dhdrth', 7, 11, 1, 1, NULL, '2023-03-06 04:27:56', '2023-03-06 04:27:56'),
(8, 'a8b3fcab-64cf-4dc9-b0f6-c82eb75b890d', 'xfbzfbg', 7, 11, 1, 1, NULL, '2023-03-06 04:37:36', '2023-03-06 04:37:36'),
(9, '43cc4c3e-7d5b-459a-bfc3-1e9d38e82e9d', 'gndghbd', 8, 11, 0, 1, 1, '2023-03-06 04:38:04', '2023-03-06 04:39:36'),
(10, '85e5c0a5-c453-4a65-9fed-6f676682d404', 'cvzdv', 8, 13, 1, 1, NULL, '2023-03-06 04:39:18', '2023-03-06 04:39:18');

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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `uuid`, `name`, `created_at`, `updated_at`) VALUES
(1, 'b746967a-5755-4439-a64c-e1f8bc065d5f', 'admin', NULL, NULL),
(2, '6c1f19e6-5c2b-4ac1-9717-228c34f90988', 'user', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country _id` bigint(20) UNSIGNED NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uuid`, `name`, `email`, `password`, `role_id`, `created_by`, `updated_by`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'f56639f3-e5b0-4a4c-b3e2-ad8ee08fca3f', 'admin', 'admin@gmail.com', '$2y$10$/jp7p6MMO/3ejXu2trWzYekmc6H6DzAztMd2iby3XEGcMVK7QtTAy', 1, 1, NULL, 1, NULL, NULL),
(2, 'b10c6e1e-4eeb-44a9-a1ed-0fea02672f6f', 'riya', 'riya@gmail.com', '$2y$10$leqB9wyxWCz55Ioc2dLuRuOQyxvnrlUY0hAzqCiZuBhqUE/WW4wTe', 2, 2, NULL, 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asset_brands`
--
ALTER TABLE `asset_brands`
  ADD PRIMARY KEY (`id`),
  ADD KEY `asset_brands_created_by_foreign` (`created_by`),
  ADD KEY `asset_brands_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `asset_sub_types`
--
ALTER TABLE `asset_sub_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `asset_sub_types_asset_type_id_foreign` (`asset_type_id`),
  ADD KEY `asset_sub_types_created_by_foreign` (`created_by`),
  ADD KEY `asset_sub_types_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `asset_types`
--
ALTER TABLE `asset_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `asset_types_created_by_foreign` (`created_by`),
  ADD KEY `asset_types_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attendances_user_id_foreign` (`user_id`),
  ADD KEY `attendances_created_by_foreign` (`created_by`),
  ADD KEY `attendances_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_country _id_foreign` (`country _id`),
  ADD KEY `cities_state_id_foreign` (`state_id`),
  ADD KEY `cities_created_by_foreign` (`created_by`),
  ADD KEY `cities_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `company_locations`
--
ALTER TABLE `company_locations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_locations_created_by_foreign` (`created_by`),
  ADD KEY `company_locations_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `company_location_types`
--
ALTER TABLE `company_location_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_location_types_created_by_foreign` (`created_by`),
  ADD KEY `company_location_types_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `countries_created_by_foreign` (`created_by`),
  ADD KEY `countries_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `current_residence_types`
--
ALTER TABLE `current_residence_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `current_residence_types_created_by_foreign` (`created_by`),
  ADD KEY `current_residence_types_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departments_created_by_foreign` (`created_by`),
  ADD KEY `departments_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `designations_department_id_foreign` (`department_id`),
  ADD KEY `designations_created_by_foreign` (`created_by`),
  ADD KEY `designations_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `document_types`
--
ALTER TABLE `document_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `document_types_created_by_foreign` (`created_by`),
  ADD KEY `document_types_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `education_levels`
--
ALTER TABLE `education_levels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `education_levels_created_by_foreign` (`created_by`),
  ADD KEY `education_levels_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `employee_job_profile_details`
--
ALTER TABLE `employee_job_profile_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_job_profile_details_user_id_foreign` (`user_id`),
  ADD KEY `employee_job_profile_details_department_id_foreign` (`department_id`),
  ADD KEY `employee_job_profile_details_designation_id_foreign` (`designation_id`),
  ADD KEY `employee_job_profile_details_organization_role_id_foreign` (`organization_role_id`),
  ADD KEY `employee_job_profile_details_created_by_foreign` (`created_by`),
  ADD KEY `employee_job_profile_details_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `employee_location_histories`
--
ALTER TABLE `employee_location_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_location_histories_user_id_foreign` (`user_id`),
  ADD KEY `employee_location_histories_company_location_id_foreign` (`company_location_id`),
  ADD KEY `employee_location_histories_company_location_type_id_foreign` (`company_location_type_id`),
  ADD KEY `employee_location_histories_created_by_foreign` (`created_by`),
  ADD KEY `employee_location_histories_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `employee_personal_details`
--
ALTER TABLE `employee_personal_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_personal_details_user_id_foreign` (`user_id`),
  ADD KEY `employee_personal_details_current_residence_type_id_foreign` (`current_residence_type_id`),
  ADD KEY `employee_personal_details_mode_of_transportation_id_foreign` (`mode_of_transportation_id`),
  ADD KEY `employee_personal_details_current_country_id_foreign` (`current_country_id`),
  ADD KEY `employee_personal_details_current_state_id_foreign` (`current_state_id`),
  ADD KEY `employee_personal_details_current_city_id_foreign` (`current_city_id`),
  ADD KEY `employee_personal_details_permanent_country_id_foreign` (`permanent_country_id`),
  ADD KEY `employee_personal_details_permanent_state_id_foreign` (`permanent_state_id`),
  ADD KEY `employee_personal_details_permanent_city_id_foreign` (`permanent_city_id`),
  ADD KEY `employee_personal_details_created_by_foreign` (`created_by`),
  ADD KEY `employee_personal_details_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `employee_personal_detail_histories`
--
ALTER TABLE `employee_personal_detail_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_personal_detail_histories_emp_personal_dtl_id_foreign` (`emp_personal_dtl_id`);

--
-- Indexes for table `emp_asset_details`
--
ALTER TABLE `emp_asset_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp_asset_details_user_id_foreign` (`user_id`),
  ADD KEY `emp_asset_details_asset_brand_id_foreign` (`asset_brand_id`),
  ADD KEY `emp_asset_details_asset_sub_type_id_foreign` (`asset_sub_type_id`),
  ADD KEY `emp_asset_details_created_by_foreign` (`created_by`),
  ADD KEY `emp_asset_details_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `emp_bank_details`
--
ALTER TABLE `emp_bank_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp_bank_details_user_id_foreign` (`user_id`),
  ADD KEY `emp_bank_details_created_by_foreign` (`created_by`),
  ADD KEY `emp_bank_details_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `emp_document_details`
--
ALTER TABLE `emp_document_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp_document_details_user_id_foreign` (`user_id`),
  ADD KEY `emp_document_details_document_type_id_foreign` (`document_type_id`),
  ADD KEY `emp_document_details_created_by_foreign` (`created_by`),
  ADD KEY `emp_document_details_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `emp_education_details`
--
ALTER TABLE `emp_education_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp_education_details_user_id_foreign` (`user_id`),
  ADD KEY `emp_education_details_education_level_id_foreign` (`education_level_id`),
  ADD KEY `emp_education_details_medium_instruction_id_foreign` (`medium_instruction_id`),
  ADD KEY `emp_education_details_created_by_foreign` (`created_by`),
  ADD KEY `emp_education_details_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `emp_emergency_contacts`
--
ALTER TABLE `emp_emergency_contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp_emergency_contacts_user_id_foreign` (`user_id`),
  ADD KEY `emp_emergency_contacts_created_by_foreign` (`created_by`),
  ADD KEY `emp_emergency_contacts_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `emp_employment_details`
--
ALTER TABLE `emp_employment_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp_employment_details_user_id_foreign` (`user_id`),
  ADD KEY `emp_employment_details_created_by_foreign` (`created_by`),
  ADD KEY `emp_employment_details_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `emp_employment_detail_histories`
--
ALTER TABLE `emp_employment_detail_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp_employment_detail_histories_emp_employment_detail_id_foreign` (`emp_employment_detail_id`);

--
-- Indexes for table `emp_family_details`
--
ALTER TABLE `emp_family_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp_family_details_user_id_foreign` (`user_id`),
  ADD KEY `emp_family_details_created_by_foreign` (`created_by`),
  ADD KEY `emp_family_details_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `emp_job_prof_dtl_histories`
--
ALTER TABLE `emp_job_prof_dtl_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp_job_prof_dtl_histories_emp_job_prof_dtl_id_foreign` (`emp_job_prof_dtl_id`);

--
-- Indexes for table `emp_lang_details`
--
ALTER TABLE `emp_lang_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp_lang_details_language_id_foreign` (`language_id`),
  ADD KEY `emp_lang_details_user_id_foreign` (`user_id`),
  ADD KEY `emp_lang_details_created_by_foreign` (`created_by`),
  ADD KEY `emp_lang_details_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `emp_leave_details`
--
ALTER TABLE `emp_leave_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp_leave_details_user_id_foreign` (`user_id`),
  ADD KEY `emp_leave_details_leave_type_id_foreign` (`leave_type_id`),
  ADD KEY `emp_leave_details_created_by_foreign` (`created_by`),
  ADD KEY `emp_leave_details_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `emp_leave_detail_histories`
--
ALTER TABLE `emp_leave_detail_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp_leave_detail_histories_emp_leave_detail_id_foreign` (`emp_leave_detail_id`);

--
-- Indexes for table `emp_professional_training_details`
--
ALTER TABLE `emp_professional_training_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp_professional_training_details_user_id_foreign` (`user_id`),
  ADD KEY `emp_professional_training_details_created_by_foreign` (`created_by`),
  ADD KEY `emp_professional_training_details_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `emp_work_experience_details`
--
ALTER TABLE `emp_work_experience_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp_work_experience_details_user_id_foreign` (`user_id`),
  ADD KEY `emp_work_experience_details_created_by_foreign` (`created_by`),
  ADD KEY `emp_work_experience_details_updated_by_foreign` (`updated_by`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `languages_created_by_foreign` (`created_by`),
  ADD KEY `languages_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `leave_types`
--
ALTER TABLE `leave_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `leave_types_created_by_foreign` (`created_by`),
  ADD KEY `leave_types_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `medium_of_instructions`
--
ALTER TABLE `medium_of_instructions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `medium_of_instructions_created_by_foreign` (`created_by`),
  ADD KEY `medium_of_instructions_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mode_of_transportations`
--
ALTER TABLE `mode_of_transportations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mode_of_transportations_created_by_foreign` (`created_by`),
  ADD KEY `mode_of_transportations_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `organization_roles`
--
ALTER TABLE `organization_roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `organization_roles_department_id_foreign` (`department_id`),
  ADD KEY `organization_roles_designation_id_foreign` (`designation_id`),
  ADD KEY `organization_roles_created_by_foreign` (`created_by`),
  ADD KEY `organization_roles_updated_by_foreign` (`updated_by`);

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
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`),
  ADD KEY `states_country _id_foreign` (`country _id`),
  ADD KEY `states_created_by_foreign` (`created_by`),
  ADD KEY `states_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_role_id_foreign` (`role_id`),
  ADD KEY `users_created_by_foreign` (`created_by`),
  ADD KEY `users_updated_by_foreign` (`updated_by`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asset_brands`
--
ALTER TABLE `asset_brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `asset_sub_types`
--
ALTER TABLE `asset_sub_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `asset_types`
--
ALTER TABLE `asset_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_locations`
--
ALTER TABLE `company_locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `company_location_types`
--
ALTER TABLE `company_location_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `current_residence_types`
--
ALTER TABLE `current_residence_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `document_types`
--
ALTER TABLE `document_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `education_levels`
--
ALTER TABLE `education_levels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `employee_job_profile_details`
--
ALTER TABLE `employee_job_profile_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_location_histories`
--
ALTER TABLE `employee_location_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_personal_details`
--
ALTER TABLE `employee_personal_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_personal_detail_histories`
--
ALTER TABLE `employee_personal_detail_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_asset_details`
--
ALTER TABLE `emp_asset_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_bank_details`
--
ALTER TABLE `emp_bank_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_document_details`
--
ALTER TABLE `emp_document_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_education_details`
--
ALTER TABLE `emp_education_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_emergency_contacts`
--
ALTER TABLE `emp_emergency_contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_employment_details`
--
ALTER TABLE `emp_employment_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_employment_detail_histories`
--
ALTER TABLE `emp_employment_detail_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_family_details`
--
ALTER TABLE `emp_family_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_job_prof_dtl_histories`
--
ALTER TABLE `emp_job_prof_dtl_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_lang_details`
--
ALTER TABLE `emp_lang_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_leave_details`
--
ALTER TABLE `emp_leave_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_leave_detail_histories`
--
ALTER TABLE `emp_leave_detail_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_professional_training_details`
--
ALTER TABLE `emp_professional_training_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_work_experience_details`
--
ALTER TABLE `emp_work_experience_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `leave_types`
--
ALTER TABLE `leave_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `medium_of_instructions`
--
ALTER TABLE `medium_of_instructions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `mode_of_transportations`
--
ALTER TABLE `mode_of_transportations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `organization_roles`
--
ALTER TABLE `organization_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `asset_brands`
--
ALTER TABLE `asset_brands`
  ADD CONSTRAINT `asset_brands_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `asset_brands_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `asset_sub_types`
--
ALTER TABLE `asset_sub_types`
  ADD CONSTRAINT `asset_sub_types_asset_type_id_foreign` FOREIGN KEY (`asset_type_id`) REFERENCES `asset_types` (`id`),
  ADD CONSTRAINT `asset_sub_types_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `asset_sub_types_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `asset_types`
--
ALTER TABLE `asset_types`
  ADD CONSTRAINT `asset_types_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `asset_types_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `attendances`
--
ALTER TABLE `attendances`
  ADD CONSTRAINT `attendances_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `attendances_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `attendances_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_country _id_foreign` FOREIGN KEY (`country _id`) REFERENCES `countries` (`id`),
  ADD CONSTRAINT `cities_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `cities_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`),
  ADD CONSTRAINT `cities_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `company_locations`
--
ALTER TABLE `company_locations`
  ADD CONSTRAINT `company_locations_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `company_locations_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `company_location_types`
--
ALTER TABLE `company_location_types`
  ADD CONSTRAINT `company_location_types_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `company_location_types_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `countries`
--
ALTER TABLE `countries`
  ADD CONSTRAINT `countries_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `countries_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `current_residence_types`
--
ALTER TABLE `current_residence_types`
  ADD CONSTRAINT `current_residence_types_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `current_residence_types_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `departments`
--
ALTER TABLE `departments`
  ADD CONSTRAINT `departments_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `departments_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `designations`
--
ALTER TABLE `designations`
  ADD CONSTRAINT `designations_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `designations_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `designations_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `document_types`
--
ALTER TABLE `document_types`
  ADD CONSTRAINT `document_types_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `document_types_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `education_levels`
--
ALTER TABLE `education_levels`
  ADD CONSTRAINT `education_levels_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `education_levels_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `employee_job_profile_details`
--
ALTER TABLE `employee_job_profile_details`
  ADD CONSTRAINT `employee_job_profile_details_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `employee_job_profile_details_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `employee_job_profile_details_designation_id_foreign` FOREIGN KEY (`designation_id`) REFERENCES `designations` (`id`),
  ADD CONSTRAINT `employee_job_profile_details_organization_role_id_foreign` FOREIGN KEY (`organization_role_id`) REFERENCES `organization_roles` (`id`),
  ADD CONSTRAINT `employee_job_profile_details_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `employee_job_profile_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `employee_location_histories`
--
ALTER TABLE `employee_location_histories`
  ADD CONSTRAINT `employee_location_histories_company_location_id_foreign` FOREIGN KEY (`company_location_id`) REFERENCES `company_locations` (`id`),
  ADD CONSTRAINT `employee_location_histories_company_location_type_id_foreign` FOREIGN KEY (`company_location_type_id`) REFERENCES `company_location_types` (`id`),
  ADD CONSTRAINT `employee_location_histories_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `employee_location_histories_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `employee_location_histories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `employee_personal_details`
--
ALTER TABLE `employee_personal_details`
  ADD CONSTRAINT `employee_personal_details_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `employee_personal_details_current_city_id_foreign` FOREIGN KEY (`current_city_id`) REFERENCES `cities` (`id`),
  ADD CONSTRAINT `employee_personal_details_current_country_id_foreign` FOREIGN KEY (`current_country_id`) REFERENCES `countries` (`id`),
  ADD CONSTRAINT `employee_personal_details_current_residence_type_id_foreign` FOREIGN KEY (`current_residence_type_id`) REFERENCES `current_residence_types` (`id`),
  ADD CONSTRAINT `employee_personal_details_current_state_id_foreign` FOREIGN KEY (`current_state_id`) REFERENCES `states` (`id`),
  ADD CONSTRAINT `employee_personal_details_mode_of_transportation_id_foreign` FOREIGN KEY (`mode_of_transportation_id`) REFERENCES `mode_of_transportations` (`id`),
  ADD CONSTRAINT `employee_personal_details_permanent_city_id_foreign` FOREIGN KEY (`permanent_city_id`) REFERENCES `cities` (`id`),
  ADD CONSTRAINT `employee_personal_details_permanent_country_id_foreign` FOREIGN KEY (`permanent_country_id`) REFERENCES `countries` (`id`),
  ADD CONSTRAINT `employee_personal_details_permanent_state_id_foreign` FOREIGN KEY (`permanent_state_id`) REFERENCES `states` (`id`),
  ADD CONSTRAINT `employee_personal_details_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `employee_personal_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `employee_personal_detail_histories`
--
ALTER TABLE `employee_personal_detail_histories`
  ADD CONSTRAINT `employee_personal_detail_histories_emp_personal_dtl_id_foreign` FOREIGN KEY (`emp_personal_dtl_id`) REFERENCES `employee_personal_details` (`id`);

--
-- Constraints for table `emp_asset_details`
--
ALTER TABLE `emp_asset_details`
  ADD CONSTRAINT `emp_asset_details_asset_brand_id_foreign` FOREIGN KEY (`asset_brand_id`) REFERENCES `asset_brands` (`id`),
  ADD CONSTRAINT `emp_asset_details_asset_sub_type_id_foreign` FOREIGN KEY (`asset_sub_type_id`) REFERENCES `asset_sub_types` (`id`),
  ADD CONSTRAINT `emp_asset_details_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `emp_asset_details_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `emp_asset_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `emp_bank_details`
--
ALTER TABLE `emp_bank_details`
  ADD CONSTRAINT `emp_bank_details_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `emp_bank_details_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `emp_bank_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `emp_document_details`
--
ALTER TABLE `emp_document_details`
  ADD CONSTRAINT `emp_document_details_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `emp_document_details_document_type_id_foreign` FOREIGN KEY (`document_type_id`) REFERENCES `document_types` (`id`),
  ADD CONSTRAINT `emp_document_details_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `emp_document_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `emp_education_details`
--
ALTER TABLE `emp_education_details`
  ADD CONSTRAINT `emp_education_details_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `emp_education_details_education_level_id_foreign` FOREIGN KEY (`education_level_id`) REFERENCES `education_levels` (`id`),
  ADD CONSTRAINT `emp_education_details_medium_instruction_id_foreign` FOREIGN KEY (`medium_instruction_id`) REFERENCES `medium_of_instructions` (`id`),
  ADD CONSTRAINT `emp_education_details_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `emp_education_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `emp_emergency_contacts`
--
ALTER TABLE `emp_emergency_contacts`
  ADD CONSTRAINT `emp_emergency_contacts_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `emp_emergency_contacts_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `emp_emergency_contacts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `emp_employment_details`
--
ALTER TABLE `emp_employment_details`
  ADD CONSTRAINT `emp_employment_details_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `emp_employment_details_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `emp_employment_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `emp_employment_detail_histories`
--
ALTER TABLE `emp_employment_detail_histories`
  ADD CONSTRAINT `emp_employment_detail_histories_emp_employment_detail_id_foreign` FOREIGN KEY (`emp_employment_detail_id`) REFERENCES `emp_employment_details` (`id`);

--
-- Constraints for table `emp_family_details`
--
ALTER TABLE `emp_family_details`
  ADD CONSTRAINT `emp_family_details_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `emp_family_details_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `emp_family_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `emp_job_prof_dtl_histories`
--
ALTER TABLE `emp_job_prof_dtl_histories`
  ADD CONSTRAINT `emp_job_prof_dtl_histories_emp_job_prof_dtl_id_foreign` FOREIGN KEY (`emp_job_prof_dtl_id`) REFERENCES `employee_job_profile_details` (`id`);

--
-- Constraints for table `emp_lang_details`
--
ALTER TABLE `emp_lang_details`
  ADD CONSTRAINT `emp_lang_details_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `emp_lang_details_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`),
  ADD CONSTRAINT `emp_lang_details_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `emp_lang_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `emp_leave_details`
--
ALTER TABLE `emp_leave_details`
  ADD CONSTRAINT `emp_leave_details_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `emp_leave_details_leave_type_id_foreign` FOREIGN KEY (`leave_type_id`) REFERENCES `leave_types` (`id`),
  ADD CONSTRAINT `emp_leave_details_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `emp_leave_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `emp_leave_detail_histories`
--
ALTER TABLE `emp_leave_detail_histories`
  ADD CONSTRAINT `emp_leave_detail_histories_emp_leave_detail_id_foreign` FOREIGN KEY (`emp_leave_detail_id`) REFERENCES `emp_leave_details` (`id`);

--
-- Constraints for table `emp_professional_training_details`
--
ALTER TABLE `emp_professional_training_details`
  ADD CONSTRAINT `emp_professional_training_details_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `emp_professional_training_details_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `emp_professional_training_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `emp_work_experience_details`
--
ALTER TABLE `emp_work_experience_details`
  ADD CONSTRAINT `emp_work_experience_details_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `emp_work_experience_details_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `emp_work_experience_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `languages`
--
ALTER TABLE `languages`
  ADD CONSTRAINT `languages_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `languages_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `leave_types`
--
ALTER TABLE `leave_types`
  ADD CONSTRAINT `leave_types_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `leave_types_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `medium_of_instructions`
--
ALTER TABLE `medium_of_instructions`
  ADD CONSTRAINT `medium_of_instructions_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `medium_of_instructions_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `mode_of_transportations`
--
ALTER TABLE `mode_of_transportations`
  ADD CONSTRAINT `mode_of_transportations_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `mode_of_transportations_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `organization_roles`
--
ALTER TABLE `organization_roles`
  ADD CONSTRAINT `organization_roles_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `organization_roles_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `organization_roles_designation_id_foreign` FOREIGN KEY (`designation_id`) REFERENCES `designations` (`id`),
  ADD CONSTRAINT `organization_roles_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `states`
--
ALTER TABLE `states`
  ADD CONSTRAINT `states_country _id_foreign` FOREIGN KEY (`country _id`) REFERENCES `countries` (`id`),
  ADD CONSTRAINT `states_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `states_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `users_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
