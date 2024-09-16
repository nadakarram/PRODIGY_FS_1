-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2024 at 11:53 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `softwarecompany`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `phone_number`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'nada', 'nada@gmail.com', '1234', '01233445567', NULL, '2024-04-27 19:07:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Ice Coffee', '2024-04-27 22:02:13', '2024-09-15 19:32:24'),
(2, 'Hot Drinks', '2024-04-27 22:02:13', '2024-09-15 19:32:39');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `problem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `solution` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `technical_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feilds`
--

CREATE TABLE `feilds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feilds`
--

INSERT INTO `feilds` (`id`, `name`, `photo`, `state`, `desc`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Busniess Servies', '/storage/images/1726439825.png', 'Available', 'Loremttt ipsum dolor sit amet consectetur adipisicing elit. Blanditiis alias, expedita adipisci debitis labore quis, id perferendis corrupti quisquam delectus atque commodi doloremque eligendi voluptas temporibus inventore nihil error sequi?', 1, '2024-04-14 20:46:35', '2024-09-15 19:37:07'),
(2, 'Own Busniss', '/storage/images/1715531239.jpg', 'Available', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis alias, expedita adipisci debitis labore quis, id perferendis corrupti quisquam delectus atque commodi doloremque eligendi voluptas temporibus inventore nihil error sequi?', 2, '2024-04-14 20:46:35', '2024-05-12 13:27:20'),
(3, 'Dlivre Servies', '/storage/images/1715531306.jpeg', 'Available', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis alias, expedita adipisci debitis labore quis, id perferendis corrupti quisquam delectus atque commodi doloremque eligendi voluptas temporibus inventore nihil error sequi?', 2, '2024-04-14 20:47:23', '2024-05-12 13:28:26'),
(9, 'omer', '/storage/images/1726437520.jpeg', 'Available', 'rertghjklok,m', 2, '2024-09-15 18:58:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `adress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `working_hours` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'users', 1),
(2, 'admins', 2),
(3, 'feilds', 3),
(4, 'technicals', 4),
(5, 'locations', 5),
(6, 'fQAs', 6),
(7, 'requests', 7),
(8, 'categories', 8),
(9, 'tickitss', 9);

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `adress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `feild_id` bigint(20) UNSIGNED NOT NULL,
  `location_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `technicals`
--

CREATE TABLE `technicals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feild_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `technicals`
--

INSERT INTO `technicals` (`id`, `name`, `email`, `password`, `phone_number`, `feild_id`, `created_at`, `updated_at`) VALUES
(1, 'tech1', 'tech1@gmail.com', '1234', '01233445567', 1, '2024-04-27 19:12:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tickitss`
--

CREATE TABLE `tickitss` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `issus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `solution` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedback` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `technical_id` bigint(20) UNSIGNED NOT NULL,
  `request_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `phone_number` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `massage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_for` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_adress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone_number`, `massage`, `work_for`, `company_name`, `photo`, `user_adress`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nada karram', 'nadakarram758@gmail.com', NULL, '$2y$12$4G/3gNXWkLClnTg6NagWQOTE4hOwn9D6RVO0XZpBmOBzrfiE6N0AC', '01003883379', NULL, 'company', 'opr .programing', NULL, '13 street between 7 and 8 street', NULL, '2024-04-14 16:00:34', NULL),
(2, 'karam', 'nadakarram78@gmail.com', NULL, '$2y$12$YkkvM3WsTuoAUjlo25Z0au48n1sUSiYzB6hx6CrpPf1qPq6htabSG', '01003883366', NULL, 'other', 'opr .programing', NULL, '13 street between 7 and 8 street', NULL, '2024-04-14 16:02:20', NULL),
(3, 'nada karram8', 'nadakarra8m758@gmail.com', NULL, '$2y$12$qbzY2/Gd4M0eCUiT.6ERhu3f3zFNx4l55D8ICExwoRy4f4eaqLwne', '01203883379', NULL, 'other', NULL, NULL, '13 street between', NULL, '2024-04-14 16:20:00', NULL),
(4, 'nada karram5', 'nadakarra5m758@gmail.com', NULL, '$2y$12$KSFLNQ3QoMC8SjMybGxJOeBSw/7ln1xjG1nbR8CfLQPM6nHVOXf.q', '01203880379', NULL, 'own busniss', NULL, NULL, '13 sreet between', NULL, '2024-04-14 16:20:39', NULL),
(6, 'nada karram88', 'nadakarram432@gmail.com', NULL, '$2y$12$VgXf9hRNWAc3W/bCecODDuwKVgmPuPHM4W6fVgyhlXvBb4YzDVcVC', '01003987379', NULL, 'own busniss', '898', NULL, '13 street between', NULL, '2024-04-14 16:47:26', NULL),
(7, 'nada karram', 'nadakar58@gmail.com', NULL, '$2y$12$MKvCkoqLVy9MKttBlvTjV.G2AfrZgGNLptLXY3RqmMnKzo0ehj4lG', '01006553379', NULL, 'own busniss', '5455676878', NULL, 'ugh', NULL, '2024-04-14 16:49:08', NULL),
(8, 'ahmed', 'ahmed@gmail.com', NULL, '$2y$12$216LAF74pqx/cm7nAFz1X..2IxBTDnSnkV/2lJZsEQ.GZfWX6VETG', '01559116470', NULL, 'other', NULL, NULL, '13 street between', NULL, '2024-04-14 16:58:18', NULL),
(9, 'nora', 'nora@gmail.com', NULL, '$2y$12$zTqEl/g2nU7DKWYb8Pnst.t5a41aAsA4pj8mQOuxrTbLj6n91LypK', '01203883355', NULL, 'other', NULL, '/storage/images/1713195972jpg', '13 street between 7 and 8 street', NULL, '2024-04-15 15:46:14', NULL),
(10, 'nora2', 'nora2@gmail.com', NULL, '$2y$12$OuDu3hk1S25YVsdMppHhOeTZrk.jcHjer4Ed9CAWWZluJ8PeXvfdi', '01203823355', NULL, 'own busniss', 'opr .programing2', '/storage/images/1713196114.jpeg', '13 street between 7 and 8 street', NULL, '2024-04-15 15:48:34', NULL),
(11, 'rawan', 'rawan@gmain.com', NULL, '$2y$12$EPQHj1r4/p4Kn7IL1FHjEuYFKszVzeSqH9iSp8aUIqZbf61FRSIWG', '01255676767', NULL, 'other', NULL, '/storage/images/1714244051.jpg', 'ugh', NULL, '2024-04-27 18:54:12', NULL),
(12, 'rawan', 'rawan55@gmain.com', NULL, '$2y$12$Eo9hj8FnAzl0NFrqKEn9YO0xTEq3RcXW9MafE4Spg44OTMZK.WJwi', '01250056767', NULL, 'other', NULL, '/storage/images/1715531435.jpeg', 'ugh', NULL, '2024-05-12 16:30:35', NULL),
(13, 'nada karram', 'nadakarram785@gmail.com', NULL, '$2y$12$RJDELu5ilrnJ8AlEqiWOQOZf1xwu417.Bli8E.dP4A/ufsvP0nA/e', '01003883370', NULL, 'other', NULL, '/storage/images/1726437080.jpeg', '13 street between 7 and 8 street', NULL, '2024-09-15 21:51:23', NULL),
(14, 'nada karram', 'nadakarram780@gmail.com', NULL, '$2y$12$qneLEzZXkxgdKT6HiP8YcuIvRF90i07NAhII5cGm4szGReeudxyO2', '01003883377', NULL, 'other', NULL, '/storage/images/1726440865.png', '13 street between 7 and 8 street', NULL, '2024-09-15 22:54:27', NULL),
(15, 'nada karram', 'nadakarram@gmail.com', NULL, '$2y$12$Sd15XHL3dT7tOc2JaMkZhOZt.ehSQKc9Bk1SZv92qw3QA5//B1wzG', '01003883390', NULL, 'other', NULL, '/storage/images/1726523204.png', '13 street between 7 and 8 street', NULL, '2024-09-16 21:46:46', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_phone_number_unique` (`phone_number`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faqs_technical_id_foreign` (`technical_id`);

--
-- Indexes for table `feilds`
--
ALTER TABLE `feilds`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `feilds_name_unique` (`name`),
  ADD KEY `feilds_ibfk_1` (`category_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `requests_feild_id_foreign` (`feild_id`),
  ADD KEY `requests_user_id_foreign` (`user_id`),
  ADD KEY `location_id` (`location_id`);

--
-- Indexes for table `technicals`
--
ALTER TABLE `technicals`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `technicals_email_unique` (`email`),
  ADD UNIQUE KEY `technicals_phone_number_unique` (`phone_number`),
  ADD KEY `technicals_feild_id_foreign` (`feild_id`);

--
-- Indexes for table `tickitss`
--
ALTER TABLE `tickitss`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tickitss_category_id_foreign` (`category_id`),
  ADD KEY `tickitss_technical_id_foreign` (`technical_id`),
  ADD KEY `tickitss_request_id_foreign` (`request_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_number_unique` (`phone_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feilds`
--
ALTER TABLE `feilds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `technicals`
--
ALTER TABLE `technicals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tickitss`
--
ALTER TABLE `tickitss`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `faqs`
--
ALTER TABLE `faqs`
  ADD CONSTRAINT `faqs_technical_id_foreign` FOREIGN KEY (`technical_id`) REFERENCES `technicals` (`id`);

--
-- Constraints for table `feilds`
--
ALTER TABLE `feilds`
  ADD CONSTRAINT `feilds_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `requests_feild_id_foreign` FOREIGN KEY (`feild_id`) REFERENCES `feilds` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `requests_ibfk_1` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `requests_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `technicals`
--
ALTER TABLE `technicals`
  ADD CONSTRAINT `technicals_feild_id_foreign` FOREIGN KEY (`feild_id`) REFERENCES `feilds` (`id`);

--
-- Constraints for table `tickitss`
--
ALTER TABLE `tickitss`
  ADD CONSTRAINT `tickitss_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `tickitss_request_id_foreign` FOREIGN KEY (`request_id`) REFERENCES `requests` (`id`),
  ADD CONSTRAINT `tickitss_technical_id_foreign` FOREIGN KEY (`technical_id`) REFERENCES `technicals` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
