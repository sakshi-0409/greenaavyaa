-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2023 at 07:59 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `brokers`
--

CREATE TABLE `brokers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brokerid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `join_date` date NOT NULL,
  `work_as` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `identity_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `identity` blob NOT NULL,
  `remark` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brokers`
--

INSERT INTO `brokers` (`id`, `brokerid`, `join_date`, `work_as`, `status`, `name`, `gender`, `dob`, `email`, `mobile`, `whatsapp`, `country`, `state`, `city`, `zip`, `address`, `identity_type`, `identity`, `remark`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '0002', '2023-08-08', 'Agent', 'active', 'sakshi', 'female', '2023-09-01', 'sakshi@gmail.com', '8768567657', '67567657667', 'Nepal', 'Rajasthan', 'Ujjain', '789654', 'test address', 'Adhar Card', 0x433a5c78616d7070335c746d705c706870434133332e746d70, 'test remark', '2023-08-01 00:54:50', '2023-08-04 04:18:27', NULL),
(3, '0001', '2023-08-08', 'Builder', 'active', 'sakshi', 'female', '2023-07-02', 'admin@gmail.com', '8768567657', '67567657667', 'Nepal', 'Gujrat', 'Bhopal', '67657', 'gfhgfhg', 'Adhar Card', 0x433a5c78616d7070335c746d705c706870423942312e746d70, 'gdfgfd gdfgfdgfd gdf', '2023-08-04 02:33:02', '2023-08-04 05:15:11', NULL),
(4, '0003', '2023-08-29', 'Builder', 'active', 'sakshi', 'female', '2023-08-13', 'sakshi@gmail.com', '8768567657', '67567657667', 'Nepal', 'Madhya Pradesh', 'Jabalpur', '789654', 'test address', 'Adhar Card', 0x433a5c78616d7070335c746d705c706870323534462e746d70, 'gfh gfhghgh gh gh', '2023-08-04 05:14:33', '2023-08-04 05:14:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contactid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_of` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remark` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `contactid`, `date`, `source`, `contact_of`, `company_name`, `name`, `email`, `mobile`, `whatsapp`, `country`, `state`, `city`, `zip`, `address`, `location`, `remark`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, '002', '2023-08-09', 'Email', 'Realtor', 'fhgfh', 'sakshi', 'sakshi@gmail.com', '8787856464564', '67567657667', 'Pakistan', 'Rajasthan', 'Bhopal', '67655465445', 'test address', 'test location', 'dfghdfg ghdfgh f', '2023-08-02 06:09:19', '2023-08-04 04:35:16', NULL),
(4, '001', '2023-08-15', 'Website', 'Dealer', 'sakshi', 'sakshi', 'sakshi@gmail.com', '8768567657', '67567657667', 'Bhutan', 'Gujrat', 'Indore', '789654', 'test address', 'test location', 'dfkjhgkjfh gdfkjghjfh g', '2023-08-04 04:30:22', '2023-08-04 04:30:22', NULL),
(5, '003', '2023-08-22', 'Website', 'Builder', 'sakshi', 'sakshi', 'admin@gmail.com', '8768567657', '67567657667', 'Nepal', 'Punjab', 'Jabalpur', '789654', 'test address', 'test location', 'fdg fgfdgfd gfdgfdg', '2023-08-04 05:16:13', '2023-08-04 05:16:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lead_id` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `source` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leadby` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leadfor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leadtype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remark` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`id`, `lead_id`, `date`, `source`, `leadby`, `leadfor`, `leadtype`, `priority`, `status`, `company_name`, `name`, `email`, `mobile_no`, `whatsapp_no`, `country`, `state`, `city`, `zip`, `address`, `location`, `remark`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, '003', '2023-08-15', 'Website', 'Coloniser', 'rent', 'Land', 'high', 'Executed', 'sakshi', 'sakshi', 'sakshi@gmail.com', '8768567657', '67567657667', 'Bhutan', 'Rajasthan', 'Bhopal', '789654', 'test address', 'test location', 'rtgy gt g', '2023-08-01 03:56:36', '2023-08-04 05:02:55', NULL),
(3, '004', '2023-08-15', 'Website', 'Agent', 'buy', 'Raw House', 'normal', 'Rejected', 'sakshi', 'sakshi', 'sakshi@gmail.com', '8768567657', '67567657667', 'India', 'Madhya Pradesh', 'Bhopal', '789654', 'test address', 'test location', 'hgh', '2023-08-01 05:58:58', '2023-08-04 05:03:11', NULL),
(5, '001', '2023-08-15', 'Email', 'Realtor', 'rent', 'House', 'normal', 'Inprocess', 'sakshi', 'sakshi', 'sakshi@gmail.com', '8768567657', '67567657667', 'Nepal', 'Gujrat', 'Jabalpur', '789654', 'test address', 'test location', 'dhjgfdhjg fjfhdjh47854898htrjfk hf', '2023-08-01 07:48:57', '2023-08-04 05:02:24', NULL),
(6, '002', '2023-08-16', 'Whatsapp', 'Real Estate Company', 'sale', 'Bunglow', 'medium', 'Executed', 'sakshi', 'sakshi', 'sakshi@gmail.com', '8768567657', '67567657667', 'Bhutan', 'Rajasthan', 'Indore', '67655', 'test address', 'test location', 'hghgh ghghghghghg', '2023-08-04 04:52:15', '2023-08-04 05:01:26', NULL),
(7, '005', '2023-08-22', 'Networking', 'Builder', 'buy', 'Bunglow', 'normal', 'Rejected', 'sakshi', 'sakshi', 'sakshi@gmail.com', '8768567657', '67567657667', 'India', 'Gujrat', 'Jabalpur', '67655', 'test address', 'test location', 'dftgfdyhtf hgfhgfhgfh', '2023-08-04 05:08:11', '2023-08-04 05:08:11', NULL),
(8, '006', '2023-08-09', 'Website', 'Agent', 'sale', 'Raw House', 'medium', 'Rejected', 'sakshi', 'sakshi', 'sakshi@gmail.com', '8768567657', '67567657667', 'SriLanka', 'Rajasthan', 'Indore', '787878', 'test address', 'test location', 'fdgdfgdfgfdgfdg', '2023-08-04 05:11:12', '2023-08-04 05:11:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_28_065132_create_properties_table', 2),
(6, '2023_07_28_103610_create_contacts_table', 3),
(7, '2023_07_31_075840_add_column_to_properties_table', 4),
(8, '2023_07_31_082108_add_column_to_properties_table', 5),
(9, '2023_07_31_083341_add_column_to_properties_table', 6),
(10, '2023_07_31_083439_add_column_to_properties_table', 7),
(11, '2023_07_31_120807_create_leads_table', 8),
(12, '2023_07_31_135221_create_brokers_table', 9),
(13, '2023_08_01_070500_create_contacts_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `for` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `property_date` date NOT NULL,
  `property_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `financial` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `documents` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `availability` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `demanded_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `final_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_size_unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_mob_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_wp_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `broker_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `broker_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `broker_mob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `broker_wp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remark` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `property_id`, `location`, `for`, `title`, `owner_name`, `created_at`, `updated_at`, `deleted_at`, `property_date`, `property_by`, `property_type`, `priority`, `status`, `financial`, `documents`, `age`, `availability`, `demanded_price`, `final_price`, `property_size`, `property_size_unit`, `direction`, `owner_email`, `owner_mob_no`, `owner_wp_no`, `broker_name`, `broker_email`, `broker_mob`, `broker_wp`, `country`, `state`, `city`, `zip`, `address`, `remark`, `images`) VALUES
(3, '0003', 'test location', 'sale', 'traditional villa', 'sakshi', '2023-07-31 04:58:01', '2023-08-04 01:59:45', NULL, '2023-07-05', 'Open this select menu', 'houses', 'low', 'Rejected', 'Financed', 'Registry', '2 Year', 'Availabile', '5656', '56565', '123', 'Square Meter', 'South', 'sakshi@gmail.com', '7896541236', '7896541236', 'test', 'test@gmail.com', '56767676756', '6547893214', 'Pakistan', 'Gujrat', 'Bhopal', '789654', 'test address', '123', 0x756e646566696e6564),
(7, '0004', 'test location', 'rent', 'traditional villa', 'sakshi', '2023-07-31 05:31:19', '2023-08-04 02:01:07', NULL, '2023-07-11', 'owner', 'villas', 'medium', 'Inprocess', 'Freehold', 'Notary', '2 Year', 'Availabile', '6787877', '8768768', '3', 'Square Feet', 'South', 'sakshi@gmail.com', '7896541236', '7896541236', 'test', 'test@gmail.com', '56767676756', '6547893214', 'Pakistan', 'Rajasthan', 'Bhopal', '6765', 'test address', 'test remark', 0x756e646566696e6564),
(13, '0007', 'test location', 'sale', 'traditional villa', 'sakshi', '2023-07-31 05:49:36', '2023-08-04 02:04:53', NULL, '2023-07-12', 'owner', 'duplexes', 'medium', 'Executed', 'Financed', 'Sale Deed', '3 Year', 'Not Availabile', '56576', '676767', '7', 'Bigha', 'South', 'sakshi@gmail.com', '7896541236', '7896541236', 'test', 'test@gmail.com', '56767676756', '6547893214', 'Pakistan', 'Rajasthan', 'Indore', '789654', 'test address', 'utuyjug jjg hjkuk', 0x756e646566696e6564),
(17, '0005', 'test location', 'rent', 'traditional villa', 'sakshi', '2023-08-03 07:49:39', '2023-08-04 02:02:42', NULL, '2023-08-20', 'owner', 'twin homes', 'medium', 'Onhold', 'Freehold', 'Notary', '5 Year', 'Not Availabile', '6575677', '567567868', '2', 'Square Meter', 'North', 'sakshi@gmail.com', '7896541236', '7896541236', 'test', 'test@gmail.com', '56767676756', '6547893214', 'India', 'Gujrat', 'Jabalpur', '789654', 'gfhgfhg', 'hgjgjgyhj', 0x756e646566696e6564),
(18, '0006', 'bgngfh', 'buy', 'traditional villa', 'sakshi04', '2023-08-03 08:10:31', '2023-08-04 02:04:03', NULL, '2023-08-23', 'owner', 'villas', 'low', 'Inprocess', 'Freehold', 'Sale Deed', '4 Year', 'Not Availabile', '565757', '34235435', '3', 'Square Meter', 'South', 'sakshi@gmail.com', '7896541236', '7896541236', 'test', 'test@gmail.com', '56767676756', '6547893214', 'Nepal', 'Punjab', 'Jabalpur', '67657', 'gfhgfhg', 'rtfyght tgf htghtg', 0x756e646566696e6564),
(19, '0001', 'bgngfh', 'sale', 'traditional villa', 'sakshi04', '2023-08-04 01:50:25', '2023-08-04 01:50:25', NULL, '2023-08-29', 'others', 'triplexes', 'medium', 'Executed', 'Freehold', 'Sale Deed', '2 Year', 'Availabile', '24324545', '987967897', '4', 'Square Feet', 'South', 'sakshi@gmail.com', '7896541236', '7896541236', 'test', 'test@gmail.com', '56767676756', '6547893214', 'India', 'Madhya Pradesh', 'Indore', '67657', 'gfhgfhg', 'rtggtfgfgf', 0x756e646566696e6564),
(20, '0002', 'bgngfh', 'rent', 'traditional villa', 'sakshi04', '2023-08-04 01:51:56', '2023-08-04 01:58:30', NULL, '2023-08-16', 'owner', 'twin homes', 'normal', 'Executed', 'Freehold', 'Notary', '3 Year', 'Not Availabile', '35345', '9789678', '4', 'Square Feet', 'South', 'sakshi@gmail.com', '7896541236', '7896541236', 'test', 'test@gmail.com', '56767676756', '6547893214', 'Pakistan', 'Rajasthan', 'Ujjain', '789654', 'test address', 'tytr ytyhtyhtryrtyhgfh gfhgfhgfhg', 0x756e646566696e6564),
(21, '0008', 'bgngfh', 'sale', 'traditional villa', 'sakshi', '2023-08-04 05:13:04', '2023-08-04 05:13:26', NULL, '2023-08-22', 'owner', 'villas', 'medium', 'Inprocess', 'Freehold', 'Agreement', '2 Year', 'Availabile', '576756765', '56456421', '4', 'Bigha', 'South', 'sakshi@gmail.com', '7896541236', '7896541236', 'test', 'test@gmail.com', '56767676756', '6547893214', 'Nepal', 'Gujrat', 'Jabalpur', '67658', 'test address', 'ytuytutuyh jy yy', 0x756e646566696e6564);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brokers`
--
ALTER TABLE `brokers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brokers`
--
ALTER TABLE `brokers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
