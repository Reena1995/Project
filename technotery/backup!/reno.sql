-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 16, 2023 at 06:11 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reno`
--

-- --------------------------------------------------------

--
-- Table structure for table `addtocarts`
--

DROP TABLE IF EXISTS `addtocarts`;
CREATE TABLE IF NOT EXISTS `addtocarts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `cart_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `addtocarts_user_id_foreign` (`user_id`),
  KEY `addtocarts_cart_id_foreign` (`cart_id`),
  KEY `addtocarts_product_id_foreign` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addtocarts`
--

INSERT INTO `addtocarts` (`id`, `user_id`, `cart_id`, `product_id`, `quantity`, `price`, `total`, `uuid`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 2, 23, 6, '3', '1500', '4500', '79e66543-e61b-44e7-a25e-1ff8e83621ab', 0, '2023-01-16 00:31:57', '2023-01-16 00:35:23'),
(2, 2, 23, 6, '1', '1500', '1500', '72d43d59-2c14-4ac0-92eb-88fd41a3aa20', 1, '2023-01-16 00:36:13', '2023-01-16 00:36:13');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `uuid`, `image`, `is_active`, `created_at`, `updated_at`) VALUES
(8, 'clothes', 'f904d27c-47f2-49a2-95f9-c89cb07d7fc8', '1673445288_image.jpeg', '1', '2023-01-11 08:24:48', '2023-01-11 08:24:48'),
(7, 'watch', 'e0503659-354c-49cf-b627-ba7feaa1adb5', '1672747967_image.jpeg', '1', '2023-01-03 06:42:47', '2023-01-03 06:42:47'),
(6, 'laptop', 'a653d6cb-52d7-4a5a-9b8b-ce3e684924a8', '1672732370_image.jpeg', '1', '2023-01-03 02:22:50', '2023-01-03 02:22:50');

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

DROP TABLE IF EXISTS `favourites`;
CREATE TABLE IF NOT EXISTS `favourites` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `favourites_product_id_foreign` (`product_id`),
  KEY `favourites_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favourites`
--

INSERT INTO `favourites` (`id`, `product_id`, `user_id`, `uuid`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'f8338d44-b5d7-4692-8ebc-d2b93be60f4c', 0, '2023-01-11 11:01:20', '2023-01-11 11:01:39'),
(2, 1, 2, '1981ae1a-87e4-472d-9c79-4ebb721f574d', 0, '2023-01-11 11:01:49', '2023-01-11 11:02:36'),
(3, 2, 2, '94d39522-3af2-4a5b-bfe9-aa1ab4c32f6c', 0, '2023-01-11 11:02:52', '2023-01-11 11:02:52'),
(4, 2, 2, 'fe68b193-d51f-46dd-86f9-5435dad60888', 1, '2023-01-11 11:02:55', '2023-01-11 11:02:55'),
(5, 3, 2, '70895b4b-74b8-4fb2-ae95-0f11f7a6887a', 0, '2023-01-11 11:02:59', '2023-01-11 11:04:09'),
(6, 3, 2, '6a44fd32-da79-44ac-bd27-65e2740c3918', 0, '2023-01-12 06:08:09', '2023-01-12 06:08:09');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_feature` tinyint(1) NOT NULL DEFAULT '0',
  `is_active` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `images_product_id_foreign` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=100 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `product_id`, `image`, `uuid`, `is_feature`, `is_active`, `created_at`, `updated_at`) VALUES
(40, 4, '16727328341588821148_image.jpeg', 'f134903a-6414-429c-9c6d-c8002f794921', 1, '1', '2023-01-03 02:30:34', '2023-01-03 02:30:34'),
(41, 4, '16727328341836189814_image.jpeg', '5b95f78b-b6f1-403e-b637-abe34b93389f', 1, '0', '2023-01-03 02:30:34', '2023-01-03 02:33:13'),
(42, 4, '16727328341884487351_image.jpeg', 'af5fedd9-e57a-4b10-ac62-4d5a27dbc7e6', 0, '0', '2023-01-03 02:30:34', '2023-01-03 02:33:28'),
(43, 4, '1672732834126283346_image.jpeg', '220854b1-c8ba-47a2-b859-46c422a664f7', 0, '0', '2023-01-03 02:30:34', '2023-01-03 02:39:34'),
(44, 4, '16727328951298051837_image.jpeg', '5e687b99-99a6-4b36-877d-d121d0bc1a8b', 0, '0', '2023-01-03 02:31:35', '2023-01-03 04:17:48'),
(45, 4, '16727329671376837163_image.jpeg', '97e589cf-c988-455c-9729-8799fa64ee48', 0, '1', '2023-01-03 02:32:47', '2023-01-03 02:32:47'),
(46, 5, '16727480761429913139_image.jpeg', 'e38f752e-b428-4fc9-8e47-347a9da82038', 1, '1', '2023-01-03 06:44:36', '2023-01-03 06:44:36'),
(47, 5, '1672748076586682904_image.jpeg', 'a9b4911b-db29-45ba-b233-e33b71c345a5', 0, '0', '2023-01-03 06:44:36', '2023-01-07 08:30:37'),
(48, 5, '1672748076723822632_image.jpeg', '36b9b0db-63fd-41f2-bd60-6061d66aee4a', 0, '0', '2023-01-03 06:44:36', '2023-01-07 09:16:29'),
(49, 5, '16727480761859545853_image.jpeg', '35193190-3ce9-4a4c-b67e-74cef8dd917b', 0, '0', '2023-01-03 06:44:36', '2023-01-07 09:16:30'),
(50, 5, '16727480761182722949_image.jpeg', '4aee6003-e8c8-44e1-ad90-30f63c00fbc6', 0, '1', '2023-01-03 06:44:36', '2023-01-03 06:44:36'),
(51, 6, '16727481561972081442_image.jpeg', '38267c93-1e06-4dc7-b07a-864fb823310c', 1, '1', '2023-01-03 06:45:56', '2023-01-03 06:45:56'),
(52, 6, '16727481561917473953_image.jpeg', 'adeec1d8-57fe-49f1-b2e6-cf0c34892f6b', 0, '1', '2023-01-03 06:45:56', '2023-01-03 06:45:56'),
(53, 6, '16727481561327840732_image.jpeg', 'dac9e9a9-d9b4-4000-91a4-eb55527ef19d', 0, '1', '2023-01-03 06:45:56', '2023-01-03 06:45:56'),
(54, 6, '1672748156777424605_image.jpeg', 'f0d04624-37cf-469a-8eaa-6d80238a6246', 0, '1', '2023-01-03 06:45:56', '2023-01-03 06:45:56'),
(55, 7, '1672748253546779517_image.jpeg', '6a08d17a-45bd-440d-890e-e32bdf934aec', 1, '1', '2023-01-03 06:47:33', '2023-01-03 06:47:33'),
(56, 7, '1672748253210785733_image.jpeg', 'efeef607-bb7e-4b78-bfa0-34ff3f4e7c7d', 0, '1', '2023-01-03 06:47:33', '2023-01-03 06:47:33'),
(57, 7, '1672748253635467264_image.jpeg', '0d137225-6cd2-4935-941d-0efd57824307', 0, '1', '2023-01-03 06:47:33', '2023-01-03 06:47:33'),
(58, 7, '1672748253850123715_image.jpeg', '591f888f-71b0-45d1-a322-cd53e11c499b', 0, '1', '2023-01-03 06:47:33', '2023-01-03 06:47:33'),
(59, 7, '16727482531427103936_image.jpeg', '91088c72-ebe2-475a-804f-3ed224d73d26', 0, '1', '2023-01-03 06:47:33', '2023-01-03 06:47:33'),
(60, 7, '16727482531250597800_image.jpeg', '642c4d22-6e82-485b-a6fa-df838bb9b414', 0, '1', '2023-01-03 06:47:33', '2023-01-03 06:47:33'),
(61, 7, '1672748253898022697_image.jpeg', '3170cdd7-e798-4046-87f7-31af0d97ac28', 0, '1', '2023-01-03 06:47:33', '2023-01-03 06:47:33'),
(62, 8, '16728195731020333443_image.jpeg', '49c5c12f-9c94-4637-a766-08ed2269695b', 1, '1', '2023-01-04 02:36:13', '2023-01-04 02:36:13'),
(63, 8, '16728195731204221535_image.jpeg', 'f3cfa0b4-9922-4226-8ad3-77f5d7e495ee', 0, '1', '2023-01-04 02:36:13', '2023-01-04 02:36:13'),
(64, 8, '16728195731610101145_image.jpeg', 'fdc8a6e7-72d5-4fde-9db0-1dddcc17ee58', 0, '1', '2023-01-04 02:36:13', '2023-01-04 02:36:13'),
(65, 8, '167281957327531286_image.jpeg', '63234626-c05d-4d53-82c9-723d7ccbf1d2', 0, '1', '2023-01-04 02:36:13', '2023-01-04 02:36:13'),
(66, 9, '16728208552118755890_image.jpeg', '6ac2c554-eca1-4f56-a340-4cb38eadefbc', 1, '1', '2023-01-04 02:57:35', '2023-01-04 02:57:35'),
(67, 9, '16728208552147254832_image.jpeg', '58dad98b-b2f7-46ad-b542-507e6c725c6a', 0, '1', '2023-01-04 02:57:35', '2023-01-04 02:57:35'),
(68, 9, '16728208551458305650_image.jpeg', '88127111-931a-4d19-b311-53ced859e0bf', 0, '1', '2023-01-04 02:57:35', '2023-01-04 02:57:35'),
(69, 9, '16728208551575717767_image.jpeg', '4779ec20-95b5-4536-8bb6-e132d0790e84', 0, '1', '2023-01-04 02:57:35', '2023-01-04 02:57:35'),
(70, 10, '16734450061563597535_image.jpeg', 'f94b1d32-bfe6-4ebc-a417-800b9b7ebccc', 1, '1', '2023-01-11 08:20:06', '2023-01-11 08:20:06'),
(71, 10, '1673445006777700634_image.jpeg', '8da89c4c-821f-41e4-8e16-7a063f05cfdc', 0, '1', '2023-01-11 08:20:06', '2023-01-11 08:20:06'),
(72, 10, '1673445006750696172_image.jpeg', 'f16db48e-e475-48f0-848a-ade15482b879', 0, '1', '2023-01-11 08:20:06', '2023-01-11 08:20:06'),
(73, 10, '16734450062060912035_image.jpeg', 'deed49e8-ebd8-43d1-99f9-2d8d80f01f8d', 0, '1', '2023-01-11 08:20:06', '2023-01-11 08:20:06'),
(74, 10, '16734450061496724580_image.jpeg', 'a998ef63-b308-4a43-8422-0035c717bdaf', 0, '1', '2023-01-11 08:20:06', '2023-01-11 08:20:06'),
(75, 10, '16734450062041668019_image.jpeg', '380ad0da-2905-4135-ac7d-62d91773ea54', 0, '1', '2023-01-11 08:20:06', '2023-01-11 08:20:06'),
(76, 1, '1673445124575628363_image.jpeg', '5b42b99f-59ef-4e09-9d1a-8d6ef750702e', 1, '1', '2023-01-11 08:22:04', '2023-01-11 08:22:04'),
(77, 1, '16734451241315853970_image.jpeg', '34f3a92a-7338-46c9-a57c-fc76938f2152', 0, '1', '2023-01-11 08:22:04', '2023-01-11 08:22:04'),
(78, 1, '16734451241803405995_image.jpeg', '5b34d1d0-444c-43b7-9906-3e3fddb35dc2', 0, '1', '2023-01-11 08:22:04', '2023-01-11 08:22:04'),
(79, 1, '1673445124227765391_image.jpeg', '96654951-2962-4484-8b3c-919cb0075637', 0, '1', '2023-01-11 08:22:04', '2023-01-11 08:22:04'),
(80, 2, '16734452511013859202_image.jpeg', '8d24f898-b9f7-40e6-b843-a6bce28785ef', 1, '1', '2023-01-11 08:24:11', '2023-01-11 08:24:11'),
(81, 2, '167344525177179215_image.jpeg', '314a43d8-12e3-4363-8447-46db4aa3b484', 0, '1', '2023-01-11 08:24:11', '2023-01-11 08:24:11'),
(82, 2, '16734452511528407328_image.jpeg', '9b470d63-e233-4ca7-89e6-9e437d6334f4', 0, '1', '2023-01-11 08:24:11', '2023-01-11 08:24:11'),
(83, 2, '1673445251942696540_image.jpeg', '6c657532-37f0-40dc-bd44-64320da78da0', 0, '1', '2023-01-11 08:24:11', '2023-01-11 08:24:11'),
(84, 3, '1673445359350849087_image.jpeg', 'b2555635-776a-4eba-bc80-39405d78a285', 1, '1', '2023-01-11 08:25:59', '2023-01-11 08:25:59'),
(85, 3, '1673445359118919281_image.jpeg', '1ae2708c-52bb-43cf-8081-70093592f1d2', 0, '1', '2023-01-11 08:25:59', '2023-01-11 08:25:59'),
(86, 3, '16734453592143061663_image.jpeg', '2064cf54-c9be-4a83-9b46-ca6a60b01297', 0, '1', '2023-01-11 08:25:59', '2023-01-11 08:25:59'),
(87, 3, '1673445359861804830_image.jpeg', '12d3a01c-6102-451c-989a-e638d0661f30', 0, '1', '2023-01-11 08:25:59', '2023-01-11 08:25:59'),
(88, 4, '16734454171948386001_image.jpeg', '8a7be976-8704-4e80-86e4-d36b4bf639e4', 1, '1', '2023-01-11 08:26:57', '2023-01-11 08:26:57'),
(89, 4, '16734454171050183980_image.jpeg', '0872f24c-170e-45b0-ba37-9f09773255a8', 0, '1', '2023-01-11 08:26:57', '2023-01-11 08:26:57'),
(90, 4, '167344541757847484_image.jpeg', '801ff7c8-2696-49da-827d-505a6afc6c3a', 0, '1', '2023-01-11 08:26:57', '2023-01-11 08:26:57'),
(91, 4, '1673445417388755111_image.jpeg', '1ff5ca7f-4130-4e2d-a936-0c660fc07e90', 0, '1', '2023-01-11 08:26:57', '2023-01-11 08:26:57'),
(92, 4, '16734454172010067980_image.jpeg', 'fa28e435-f30e-4830-bc47-26b4241be45a', 0, '1', '2023-01-11 08:26:57', '2023-01-11 08:26:57'),
(93, 5, '16734454891960306491_image.jpeg', 'efdc2b83-12a5-43c6-95bb-a938ff76ab1c', 1, '1', '2023-01-11 08:28:09', '2023-01-11 08:28:09'),
(94, 5, '167344548984385746_image.jpeg', '5e511aef-1716-4dc7-a8f7-c2f0b5760e49', 0, '1', '2023-01-11 08:28:09', '2023-01-11 08:28:09'),
(95, 5, '1673445489333581251_image.jpeg', 'b87c3f07-e4ed-4f16-9432-19c11f894870', 0, '1', '2023-01-11 08:28:09', '2023-01-11 08:28:09'),
(96, 6, '16734455391888843844_image.jpeg', '63fe7d36-efa2-4dbb-885f-ec2c92560554', 1, '1', '2023-01-11 08:28:59', '2023-01-11 08:28:59'),
(97, 6, '1673445539591611050_image.jpeg', '25cb823c-ab86-431f-a9ed-7021063f9183', 0, '1', '2023-01-11 08:28:59', '2023-01-11 08:28:59'),
(98, 6, '16734455391946858375_image.jpeg', '24a43958-99a7-4a5b-9537-3175ec155761', 0, '1', '2023-01-11 08:28:59', '2023-01-11 08:28:59'),
(99, 6, '16734455391678934862_image.jpeg', '61cc5cb8-237c-4fa0-8566-b5b47a710feb', 0, '1', '2023-01-11 08:28:59', '2023-01-11 08:28:59');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2022_12_26_071040_create_roles_table', 1),
(2, '2022_12_26_072143_create_users_table', 1),
(3, '2022_12_26_072925_create_categories_table', 1),
(4, '2022_12_26_073203_create_products_table', 1),
(5, '2022_12_26_073609_create_product_details_table', 1),
(6, '2022_12_26_074017_create_images_table', 1),
(8, '2022_12_28_132435_create_registers_table', 2),
(9, '2023_01_05_131643_create_favourites_table', 3),
(14, '2023_01_10_111127_create_add_to_carts_table', 8),
(13, '2023_01_10_111237_create_product_carts_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `productcarts`
--

DROP TABLE IF EXISTS `productcarts`;
CREATE TABLE IF NOT EXISTS `productcarts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `productcarts_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productcarts`
--

INSERT INTO `productcarts` (`id`, `user_id`, `total`, `uuid`, `is_active`, `created_at`, `updated_at`) VALUES
(23, 2, '1500', 'd4ae094f-a736-427f-a539-c3dbcfc25bf7', 1, '2023-01-16 00:31:57', '2023-01-16 00:36:13');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_category_id_foreign` (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `uuid`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 6, '20c46538-8595-4612-a184-4f41b868ef8d', 'hp', 1, '2023-01-11 08:22:04', '2023-01-11 08:22:04'),
(2, 6, 'd1c06ccf-55c1-4dc4-9a5f-0a0c6c6b654c', 'Apple', 1, '2023-01-11 08:24:11', '2023-01-11 08:24:11'),
(3, 8, '3353fade-008a-4ed7-b73e-0000d4fb610b', 'jeans', 1, '2023-01-11 08:25:59', '2023-01-11 08:25:59'),
(4, 8, '85aee169-0a3d-41b7-91fc-35aab79b25c2', 'tshirt', 1, '2023-01-11 08:26:57', '2023-01-11 08:26:57'),
(5, 7, 'edfe2e24-efd6-4fcb-bb64-03e82f683053', 'lamex', 1, '2023-01-11 08:28:09', '2023-01-11 08:28:09'),
(6, 7, '976c7cc4-ad96-4b39-b369-a0aab8a80940', 'titan', 1, '2023-01-11 08:28:59', '2023-01-11 08:28:59');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

DROP TABLE IF EXISTS `product_details`;
CREATE TABLE IF NOT EXISTS `product_details` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `actualprice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discountprice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_details_product_id_foreign` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `product_id`, `description`, `actualprice`, `discountprice`, `quantity`, `is_active`, `created_at`, `updated_at`) VALUES
(3, 2, 'asdvasdfv', '50000', '45000', '4', '1', '2023-01-11 08:24:11', '2023-01-11 08:24:11'),
(2, 1, 'EWFAWERGAEWR', '45000', '40000', '3', '1', '2023-01-11 08:22:04', '2023-01-11 08:22:04'),
(4, 3, 'asvwsvr', '500', '400', '50', '1', '2023-01-11 08:25:59', '2023-01-11 08:25:59'),
(5, 4, 'asvadfsv', '400', '350', '40', '1', '2023-01-11 08:26:57', '2023-01-11 08:26:57'),
(6, 5, 'sdvgsrg', '800', '500', '25', '1', '2023-01-11 08:28:09', '2023-01-11 08:28:09'),
(7, 6, 'asvasfvserv', '2000', '1500', '20', '1', '2023-01-11 08:28:59', '2023-01-11 08:28:59');

-- --------------------------------------------------------

--
-- Table structure for table `registers`
--

DROP TABLE IF EXISTS `registers`;
CREATE TABLE IF NOT EXISTS `registers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pwd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registers`
--

INSERT INTO `registers` (`id`, `name`, `email`, `mobile`, `pwd`, `created_at`, `updated_at`) VALUES
(35, 'kinjalaaa', 'kinjallll@gmail.com', '9904154492', '133466', '2023-01-02 02:50:05', '2023-01-02 10:54:46'),
(36, 'hany', 'ayan@gmail.com', '8347256265', '123456', '2023-01-02 03:01:21', '2023-01-02 03:01:21'),
(37, 'shitallll', 'shital@gmail.com', '7990235233', '1234', '2023-01-02 04:19:11', '2023-01-02 10:50:29'),
(38, 'hetall', 'hetall@gmail.com', '658912453', '123456', '2023-01-02 04:20:22', '2023-01-02 10:58:47');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'user', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `is_active` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `users_role_id_foreign` (`role_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role_id`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$RAklUDWZeHSOgTMkSGuCEuiWZi.uC5qh1UGAgD5OZOeQtL7PGT51q', 1, '1', NULL, NULL),
(2, 'riya', 'riya@gmail.com', '$2y$10$Z6kGAYiXq0XH1xfQIT0WOeaGJFqqHMXTxJo6RjYT8KfgCnk6v0m4G', 2, '1', NULL, NULL),
(3, 'vishv', 'vishv@gmail.com', '$2y$10$Z6kGAYiXq0XH1xfQIT0WOeaGJFqqHMXTxJo6RjYT8KfgCnk6v0m4G', 2, '1', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
