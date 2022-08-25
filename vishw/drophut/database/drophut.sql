-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2022 at 09:09 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drophut`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `Profile_img` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `Profile_img`, `username`, `password`) VALUES
(1, '', 'vishv', '0d7f9017fbda691900187b22404b8a1f');

-- --------------------------------------------------------

--
-- Table structure for table `billing_details`
--

CREATE TABLE `billing_details` (
  `billing_details_id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `street_address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `order_notes` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `billing_details`
--

INSERT INTO `billing_details` (`billing_details_id`, `first_name`, `last_name`, `company_name`, `country`, `street_address`, `city`, `state`, `phone`, `email`, `order_notes`) VALUES
(1, 'chand', 'bhalodiya', 'Shift IZI Nano', 'India', 'Opposite,150ft ring road', 'Rajkot', 'Gujarat', '6362405070', 'chandbhalodiya@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `droneadv_id` int(11) NOT NULL,
  `drone_pic` varchar(255) NOT NULL,
  `drone_model` varchar(255) NOT NULL,
  `drone_price` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `Client_id` int(11) NOT NULL,
  `Profile_img` varchar(255) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Mobile_no` int(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Gender` varchar(255) NOT NULL,
  `shop_name` varchar(255) NOT NULL,
  `shop_address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pincode` int(11) NOT NULL,
  `User_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_dt` datetime NOT NULL,
  `updated_dt` datetime NOT NULL,
  `status` enum('Block','Unblock') NOT NULL DEFAULT 'Block'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`Client_id`, `Profile_img`, `Name`, `Mobile_no`, `Email`, `Gender`, `shop_name`, `shop_address`, `city`, `pincode`, `User_name`, `password`, `created_dt`, `updated_dt`, `status`) VALUES
(31, 'images.jpg', 'chand bhalodiya', 2147483647, 'chandbhalodiya@gmail.com', '', '', '', '', 0, '1111', '4a7d1ed414474e4033ac29ccb8653d9b', '2022-03-18 17:12:20', '2022-03-18 17:12:20', 'Unblock'),
(32, 'testimonial-1.jpg', 'shyam', 2147483647, 'shyam@gmail.com', 'male', '', '', '', 0, 'shyam', '5a4cd850fc787d454416aa3a47580468', '2022-03-18 17:14:14', '2022-03-22 11:34:53', 'Unblock'),
(33, 'drone4.4.jpg', 'krish', 1236549852, 'krish@gmail.com', '', '', '', '', 0, 'krish', '0d57dca2d8e0e017e963be8d42022ab3', '2022-03-19 10:48:48', '2022-03-19 10:48:48', 'Unblock'),
(34, 'download.jpg', 'hepil', 1456985856, 'hepil@gmail.com', 'male', 'Hepil drone shop', 'near sola bridge', 'ahmedabad', 382415, 'hepil', 'bfa4cbd892759ea923c0acf830846269', '2022-03-29 11:14:17', '2022-03-29 11:39:09', 'Unblock');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `created_dt` datetime NOT NULL,
  `updated_dt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`contact_id`, `name`, `email`, `message`, `created_dt`, `updated_dt`) VALUES
(16, 'Vishv Unjiya S.', 'vishvunjiya3058822@gmail.com', 'thank you', '2022-03-01 12:04:00', '2022-03-01 12:04:00'),
(17, 'krish vekariya', 'krish@gmail.com', 'hello!!', '2022-03-05 11:11:41', '2022-03-05 11:11:41');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `Profile_img` varchar(255) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Mobile_no` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Gender` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `User_name` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `status` enum('Block','Unblock') NOT NULL DEFAULT 'Unblock',
  `created_dt` datetime NOT NULL,
  `updated_dt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `Profile_img`, `Name`, `Mobile_no`, `Email`, `Gender`, `Address`, `User_name`, `Password`, `status`, `created_dt`, `updated_dt`) VALUES
(13, 'Marvel-Spiderman-With-Hooded-Suit-4K-Live-Wallpaper_thumbnail-scaled.jpg', 'chand', '6352405070', 'chandbhalodiya@gmail.com', 'male', 'opposite,150ft ring road,Rajkot', 'chand', 'aeda6d66c337fa09f185719baa2334f9', 'Block', '2022-03-05 11:27:24', '2022-03-28 12:27:58'),
(15, 'download (2).jpg', 'shreyansh', '6353304527', 'shreyansh@gmail.com', 'male', 'opposite,150ft ring road,Rajkot', 'shreyansh', '81dc9bdb52d04dc20036dbd8313ed055', 'Unblock', '2022-03-07 10:15:10', '2022-03-07 13:30:09'),
(16, 'drone6.1.jpg', 'shyam', '4523625451', 'shyam@gmail.com', 'male', 'B-201 vishala landmark , sp ring road, hp petrol pump ni pachhad , nikol 382415 , ahmedabad', 'shyam', '5a4cd850fc787d454416aa3a47580468', 'Unblock', '2022-03-21 11:37:57', '2022-03-21 11:37:57');

-- --------------------------------------------------------

--
-- Table structure for table `droneadv`
--

CREATE TABLE `droneadv` (
  `droneadv_id` int(11) NOT NULL,
  `drone_type_id` int(11) NOT NULL,
  `Client_id` int(11) NOT NULL,
  `Location_id` int(11) NOT NULL,
  `drone_shop` varchar(255) NOT NULL,
  `drone_pic` varchar(255) NOT NULL,
  `drone_model` varchar(255) NOT NULL,
  `drone_price` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `drone_status` enum('Available','Not available') NOT NULL DEFAULT 'Available',
  `adv_status` enum('Approved','Not approved') NOT NULL DEFAULT 'Not approved',
  `Created_dt` datetime NOT NULL,
  `Updated_dt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `droneadv`
--

INSERT INTO `droneadv` (`droneadv_id`, `drone_type_id`, `Client_id`, `Location_id`, `drone_shop`, `drone_pic`, `drone_model`, `drone_price`, `description`, `drone_status`, `adv_status`, `Created_dt`, `Updated_dt`) VALUES
(12, 1, 32, 2, 'krishna shop', 'drone3.4.jpg', 'lml', '183.25', 'cdfvgbhnjmkl', 'Available', 'Not approved', '2022-03-28 11:42:34', '2022-03-28 11:42:34');

-- --------------------------------------------------------

--
-- Table structure for table `drone_type`
--

CREATE TABLE `drone_type` (
  `drone_type_id` int(11) NOT NULL,
  `drone_img` varchar(255) NOT NULL,
  `drone_type` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_dt` datetime NOT NULL,
  `updated_dt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drone_type`
--

INSERT INTO `drone_type` (`drone_type_id`, `drone_img`, `drone_type`, `description`, `created_dt`, `updated_dt`) VALUES
(1, 'drone1.6.jpg', 'flayer', 'nice product', '2022-03-25 13:08:57', '2022-03-25 13:08:57'),
(2, 'drone1.5.jpg', 'toy', 'nice product', '2022-03-28 10:01:57', '2022-03-28 10:01:57');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Employee_id` int(11) NOT NULL,
  `Profile_img` varchar(100) DEFAULT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `First_name` varchar(255) DEFAULT NULL,
  `Last_name` varchar(255) DEFAULT NULL,
  `Birth_of_date` varchar(100) DEFAULT NULL,
  `Gender` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Mobile_no` varchar(255) DEFAULT NULL,
  `Job_title` varchar(255) DEFAULT NULL,
  `Salary` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `created_dt` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_dt` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` enum('Block','Unblock') DEFAULT 'Unblock'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Employee_id`, `Profile_img`, `Username`, `Password`, `First_name`, `Last_name`, `Birth_of_date`, `Gender`, `Email`, `Mobile_no`, `Job_title`, `Salary`, `Address`, `created_dt`, `updated_dt`, `status`) VALUES
(14, 'account.png', 'chand', 'aeda6d66c337fa09f185719baa2334f9', 'chand', 'bhalodiya', '2022-03-14', 'male', 'chandbhalodiya@gmail.com', '6352405070', 'maintainus', '10000', '150ft, ring road rajkot', '2022-03-22 11:03:53', '2022-03-22 11:03:53', 'Unblock'),
(15, 'economy1.jpg', 'abhi', 'd76f3d05cc9ac98f1f9160274a39fe33', 'abhi', 'vaghasiya', '2022-03-16', 'male', 'abhi@gmail.com', '9624088387', 'maintainus', '10000', 'B-201 vishala landmark , sp ring road, hp petrol pump ni pachhad , nikol 382415 , ahmedabad', '2022-03-17 11:13:25', '2022-03-17 11:13:25', 'Unblock');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `created_dt` datetime NOT NULL,
  `updated_dt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `name`, `email`, `message`, `created_dt`, `updated_dt`) VALUES
(11, 'vishv', 'vishvunjiya3058822@gmail.com', 'hii', '2022-03-01 12:55:43', '2022-03-01 12:55:43'),
(12, 'vishv', 'vishvunjiya3058822@gmail.com', 'hii', '2022-03-01 12:57:41', '2022-03-01 12:57:41'),
(14, 'Vishv Unjiya', 'vishvunjiya3058822@gmail.com', 'nice', '2022-03-01 12:58:39', '2022-03-01 12:58:39'),
(15, 'Vishv Unjiya', 'vishvunjiya3058822@gmail.com', 'hiiii', '2022-03-01 12:59:33', '2022-03-01 12:59:33');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `Location_id` int(11) NOT NULL,
  `Loca_name` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Created_dt` datetime NOT NULL,
  `Updated_dt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`Location_id`, `Loca_name`, `City`, `Created_dt`, `Updated_dt`) VALUES
(2, 'maninagar', 'ahmedabad', '2022-03-26 17:05:22', '2022-03-26 17:05:22');

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `payment_details_id` int(11) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip` int(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `card_no` int(255) DEFAULT NULL,
  `exp_month` varchar(255) DEFAULT NULL,
  `exp_year` varchar(255) DEFAULT NULL,
  `cvv` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`payment_details_id`, `full_name`, `Address`, `city`, `state`, `zip`, `phone`, `Email`, `card_no`, `exp_month`, `exp_year`, `cvv`) VALUES
(1, 'chand bhalodiya', 'opposite,150ft ring road', 'rajkot', 'gujarat', 360005, '6352405070', 'chandbhalodiya@gmail.com', 1568745632, 'april', '2025', 123);

-- --------------------------------------------------------

--
-- Table structure for table `your_order`
--

CREATE TABLE `your_order` (
  `order_list_id` int(11) NOT NULL,
  `product` varchar(255) DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `cart_subtotal` varchar(255) DEFAULT NULL,
  `shipping` varchar(255) DEFAULT NULL,
  `order_total` varchar(100) DEFAULT NULL,
  `COD` varchar(255) DEFAULT NULL,
  `paypal` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `your_order`
--

INSERT INTO `your_order` (`order_list_id`, `product`, `total`, `cart_subtotal`, `shipping`, `order_total`, `COD`, `paypal`) VALUES
(1, 'Shift IZI Nano', '180.32', '180.32', '5', '185.32', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `billing_details`
--
ALTER TABLE `billing_details`
  ADD PRIMARY KEY (`billing_details_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `droneadv_id` (`droneadv_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`Client_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `droneadv`
--
ALTER TABLE `droneadv`
  ADD PRIMARY KEY (`droneadv_id`),
  ADD KEY `drone_type_id` (`drone_type_id`),
  ADD KEY `Client_id` (`Client_id`),
  ADD KEY `Location_id` (`Location_id`);

--
-- Indexes for table `drone_type`
--
ALTER TABLE `drone_type`
  ADD PRIMARY KEY (`drone_type_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Employee_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`Location_id`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`payment_details_id`);

--
-- Indexes for table `your_order`
--
ALTER TABLE `your_order`
  ADD PRIMARY KEY (`order_list_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `billing_details`
--
ALTER TABLE `billing_details`
  MODIFY `billing_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `Client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `droneadv`
--
ALTER TABLE `droneadv`
  MODIFY `droneadv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `drone_type`
--
ALTER TABLE `drone_type`
  MODIFY `drone_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `Location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `payment_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `your_order`
--
ALTER TABLE `your_order`
  MODIFY `order_list_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`droneadv_id`) REFERENCES `droneadv` (`droneadv_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `droneadv`
--
ALTER TABLE `droneadv`
  ADD CONSTRAINT `droneadv_ibfk_1` FOREIGN KEY (`drone_type_id`) REFERENCES `drone_type` (`drone_type_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `droneadv_ibfk_2` FOREIGN KEY (`Client_id`) REFERENCES `client` (`Client_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `droneadv_ibfk_3` FOREIGN KEY (`Location_id`) REFERENCES `location` (`Location_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
