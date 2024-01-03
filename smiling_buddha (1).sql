-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2024 at 04:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smiling_buddha`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(30, '2014_10_12_000000_create_users_table', 1),
(31, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(32, '2019_08_19_000000_create_failed_jobs_table', 1),
(33, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(34, '2023_12_01_132050_create_admins_table', 1),
(35, '2023_12_01_140132_create_user_personal_details_table', 1),
(36, '2023_12_01_140152_create_user_bank_details_table', 1),
(37, '2023_12_02_053430_create_countries_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `email_verification` varchar(255) DEFAULT NULL,
  `login_ip` varchar(255) NOT NULL,
  `two_factor_authentication` varchar(255) DEFAULT NULL,
  `authendication` varchar(255) DEFAULT NULL,
  `validity_expired` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `email`, `password`, `role`, `email_verification`, `login_ip`, `two_factor_authentication`, `authendication`, `validity_expired`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'US000001', NULL, 'web@gmail.com', '$2y$12$aklcbfgVi9Zi8lzUa1xRle9jGxT/tQLLU57j7cQn/pHaX6/84./ja', NULL, '6169', '', NULL, NULL, NULL, NULL, NULL, '2024-01-03 01:15:41', '2024-01-03 01:15:41'),
(2, 'US000002', NULL, 'webs@gmail.com', '$2y$12$y1tuS9vL9BK/ti5H75.sO.ecWZKQEgPpw4Liv40clAV.0wkPoUtsW', NULL, '6839', '', '2047', '488', NULL, NULL, NULL, '2024-01-03 01:17:59', '2024-01-03 01:17:59'),
(4, 'US000003', NULL, 'webtys@gmail.com', '$2y$12$LA8HL9GmkG9D4.1qkTl/BuwZnEJtvS6c4Vxok3DJegYN4.XvvqAke', NULL, '8832', '', '6385', '124', NULL, NULL, NULL, '2024-01-03 01:19:47', '2024-01-03 01:19:47'),
(5, 'US000004', NULL, 'meentchipkr@gmail.com', '$2y$12$O8p/HVAhLbCaPeLZvCWZWeghmu813curNnPoxRquAxVh4EkdWZODS', NULL, '8650', '', '5694', '609', NULL, NULL, NULL, '2024-01-03 01:20:41', '2024-01-03 01:20:41'),
(7, 'US000005', NULL, 'mchipkr@gmail.com', '$2y$12$QD.O09A1mjH7CEgdVeuw.e.RanSuJHIbUzk.miGD9kKQ59W5qWxga', NULL, '4516', '', NULL, NULL, NULL, NULL, NULL, '2024-01-03 01:22:00', '2024-01-03 01:22:00'),
(8, 'US000006', NULL, 'tchipkr@gmail.com', '$2y$12$RigCCwrkO6uRx6XLvktzfe7GbyKClYLw/OK/EMveg5K2k474djmoe', NULL, '6526', '', '5136', '673', NULL, NULL, NULL, '2024-01-03 01:26:07', '2024-01-03 01:26:07'),
(10, 'US000007', NULL, 'hipkr@gmail.com', '$2y$12$qHnLfYhvE0UN7B9R7aiVzO.BjG7mxwGcj0gBiCWU5CBBaunF1.hV.', NULL, NULL, '127.0.0.1', '5961', '986', NULL, NULL, NULL, '2024-01-03 01:30:09', '2024-01-03 01:30:09');

-- --------------------------------------------------------

--
-- Table structure for table `user_bank_details`
--

CREATE TABLE `user_bank_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `account_holder` varchar(255) DEFAULT NULL,
  `account_number` varchar(255) DEFAULT NULL,
  `swift_code` varchar(255) DEFAULT NULL,
  `bank_branch` varchar(255) DEFAULT NULL,
  `bank_address` varchar(255) DEFAULT NULL,
  `ifsc_code` varchar(255) DEFAULT NULL,
  `address1` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `terms` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_bank_details`
--

INSERT INTO `user_bank_details` (`id`, `user_id`, `bank_name`, `account_holder`, `account_number`, `swift_code`, `bank_branch`, `bank_address`, `ifsc_code`, `address1`, `address2`, `city`, `state`, `postal_code`, `country`, `terms`, `created_at`, `updated_at`) VALUES
(1, 'US000007', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-03 01:30:09', '2024-01-03 01:30:09');

-- --------------------------------------------------------

--
-- Table structure for table `user_personal_details`
--

CREATE TABLE `user_personal_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `nric_number` varchar(255) DEFAULT NULL,
  `passport_number` varchar(255) DEFAULT NULL,
  `short_name` varchar(255) DEFAULT NULL,
  `race` varchar(255) DEFAULT NULL,
  `address1` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `country_code` varchar(255) DEFAULT NULL,
  `mobile_number` varchar(255) DEFAULT NULL,
  `employment_status` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `joining_date` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `staff_position` varchar(255) DEFAULT NULL,
  `salary_grade` varchar(255) DEFAULT NULL,
  `staff_qualification` varchar(255) DEFAULT NULL,
  `stream_type` varchar(255) DEFAULT NULL,
  `staff_category` varchar(255) DEFAULT NULL,
  `height` varchar(255) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `allergy` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_personal_details`
--

INSERT INTO `user_personal_details` (`id`, `user_id`, `first_name`, `last_name`, `gender`, `date_of_birth`, `nric_number`, `passport_number`, `short_name`, `race`, `address1`, `address2`, `city`, `postal_code`, `state`, `country`, `country_code`, `mobile_number`, `employment_status`, `religion`, `joining_date`, `designation`, `department`, `staff_position`, `salary_grade`, `staff_qualification`, `stream_type`, `staff_category`, `height`, `weight`, `allergy`, `facebook`, `twitter`, `linkedin`, `image`, `created_at`, `updated_at`) VALUES
(1, 'US000006', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '03/01/2024', NULL, NULL, 'Select Staff Postion', NULL, NULL, 'Select Stream Type', 'Select Staff Category', NULL, NULL, NULL, NULL, NULL, NULL, 'users/tyZcYGm3d01YMG9pvAHIsKKVUisL0nyefUgMlaWm.jpg', '2024-01-03 01:26:07', '2024-01-03 01:26:07'),
(2, 'US000007', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PK (Pakistan)', 'PK (+586)', '1234567890', NULL, NULL, '03/01/2024', NULL, NULL, 'Select Staff Postion', NULL, NULL, 'Select Stream Type', 'Select Staff Category', NULL, NULL, NULL, NULL, NULL, NULL, 'users/FGfasmlHBTm1XrzuvbM3Yp0PX8KDjl0El96HE6et.jpg', '2024-01-03 01:30:09', '2024-01-03 01:30:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_user_name_unique` (`user_name`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_bank_details`
--
ALTER TABLE `user_bank_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_personal_details`
--
ALTER TABLE `user_personal_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_bank_details`
--
ALTER TABLE `user_bank_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_personal_details`
--
ALTER TABLE `user_personal_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
