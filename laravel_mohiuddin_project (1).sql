-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2024 at 07:49 PM
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
-- Database: `laravel_mohiuddin_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mohiuddin', 'admin@gmail.com', '$2y$10$sh30aeDWaRy7AWwR/TRqz.LHQ367Wp4YPLNLLHpre7v.H0pjXznLm', NULL, '2024-11-30 01:20:06', '2024-11-30 01:20:06');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `car_id` int(11) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `details` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `car_id`, `name`, `email`, `phone`, `details`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Mohiuddin', 'mohiuddin@gmail.com', '01789632556', 'Toyota Car Booked Now!!!', '2024-11-30 01:29:29', '2024-11-30 01:29:45'),
(2, NULL, 'Saif Jahan', 'saif@gmail.com', '01789645214', 'Ford Car Booked Now!!!', '2024-11-30 01:32:47', '2024-11-30 12:44:29'),
(3, NULL, 'Rakib Hossain', 'rakib@gmail.com', '01758965489', 'BMW i8 Car Booked In!!!', '2024-11-30 12:45:29', '2024-11-30 12:45:42'),
(5, NULL, 'Nazrul Islam', 'nazrul@gmail.com', '01954856325', 'Nissan Patrol Urgent Book Now!!!', '2024-11-30 12:47:02', '2024-11-30 12:47:02'),
(6, NULL, 'Nusrat Jahan', 'njs@gmail.com', '01963548964', 'Tata Harrier 12/02/2024 Book Now!!!!', '2024-11-30 12:48:13', '2024-11-30 12:48:13');

-- --------------------------------------------------------

--
-- Table structure for table `car_lists`
--

CREATE TABLE `car_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `engine` varchar(255) NOT NULL,
  `price_per_day` decimal(8,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_lists`
--

INSERT INTO `car_lists` (`id`, `brand`, `model`, `engine`, `price_per_day`, `image`, `status`, `created_at`, `updated_at`) VALUES
(21, 'Toyota', 'Land Cruiser', '2700hz', 5000.00, 'images/20241130072446.png', 'Available', '2024-11-30 01:24:46', '2024-11-30 01:24:46'),
(22, 'Ford', 'Axio', '3600hz', 4500.00, 'images/20241130131004.png', 'Available', '2024-11-30 01:31:10', '2024-11-30 07:10:04'),
(23, 'Volkswagen', 'Golf', '3200hz', 6000.00, 'images/20241130184904.png', 'Available', '2024-11-30 12:32:29', '2024-11-30 12:49:04'),
(24, 'Mitsubishi', 'Lancer', '3600hz', 5500.00, 'images/20241130183318.png', 'Available', '2024-11-30 12:33:18', '2024-11-30 12:33:18'),
(25, 'BMW', 'i8', '3600hz', 8000.00, 'images/20241130183426.png', 'Available', '2024-11-30 12:34:26', '2024-11-30 12:34:26'),
(26, 'Honda', 'CR-V', '3200hz', 7000.00, 'images/20241130183513.png', 'Available', '2024-11-30 12:35:13', '2024-11-30 12:35:13'),
(27, 'Mercedes', 'Benz-F5', '3200hz', 7500.00, 'images/20241130183604.png', 'Available', '2024-11-30 12:36:04', '2024-11-30 12:36:04'),
(28, 'Suzuki', 'Dezire', '2200hz', 4500.00, 'images/20241130183646.png', 'Available', '2024-11-30 12:36:46', '2024-11-30 12:36:46'),
(29, 'Nissan', 'Patrol', '2500hz', 5500.00, 'images/20241130183721.png', 'Available', '2024-11-30 12:37:21', '2024-11-30 12:37:21'),
(30, 'Tata', 'Harrier', '3200hz', 6000.00, 'images/20241130183751.png', 'Available', '2024-11-30 12:37:51', '2024-11-30 12:37:51');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `email`, `password`, `photo`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Abdullah', 'asm@gmail.com', '$2y$10$qwhakX3hj7Dt/5.2b4L3e.7RuFaRN9cbwuJU9PBPXkp/LtTW8WbMK', NULL, NULL, NULL, '2024-11-30 01:20:06', '2024-11-30 01:20:06'),
(2, 'Jamil Hossain', 'jamil@gmail.com', '$2y$10$7lTHs4/xg6qAE5PE7h9jXO00qF1OeeD9DJ0TaejAodVNAUBaz8gje', 'mohiuddin.png', NULL, 'active', '2024-11-30 11:49:46', '2024-11-30 11:49:46'),
(3, 'Rakib', 'rakib@gmail.com', '$2y$10$uo22g2sRouQUix61FlI7NeMsMpwTITkqo77w3/n6xb9/a38hyWaOK', 'I:\\xampp82\\tmp\\phpA29B.tmp', NULL, 'active', '2024-11-30 12:05:25', '2024-11-30 12:05:25'),
(4, 'Arif Hossain', 'arif@gmail.com', '$2y$10$8.gwj.y1m.ZAc7pmbulA0.Egps9Trt3j8iVoX3zrM.ahs1AKG4nii', 'I:\\xampp82\\tmp\\php25D3.tmp', NULL, 'active', '2024-11-30 12:10:20', '2024-11-30 12:10:20');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `car_id` int(11) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `details` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `car_id`, `name`, `email`, `phone`, `details`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Saif Jahan', 'saif@gmail.com', '01789632556', 'Siddiq Bazar,Gulisthan', '2024-11-30 01:28:01', '2024-11-30 01:28:30'),
(2, NULL, 'Arif Hossain', 'arif@gmail.com', '01789542365', 'Badda, Buddo Mondir', '2024-11-30 12:39:26', '2024-11-30 12:39:26'),
(3, NULL, 'Jamil Hossain', 'jamil@gmail.com', '01758463589', 'Shajahanpur, Motijheel', '2024-11-30 12:41:10', '2024-11-30 12:41:10'),
(4, NULL, 'Nazrul Islam', 'nazrul@gmail.com', '01758496358', 'Jatrabari', '2024-11-30 12:41:51', '2024-11-30 12:41:51'),
(5, NULL, 'Rakib Hossain', 'rakib@gmail.com', '01796584589', 'Narayangong!!', '2024-11-30 12:42:23', '2024-11-30 12:43:23');

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
(71, '2014_10_12_000000_create_users_table', 1),
(72, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(73, '2019_08_19_000000_create_failed_jobs_table', 1),
(74, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(75, '2024_11_19_161352_create_admins_table', 1),
(76, '2024_11_19_171833_create_clients_table', 1),
(77, '2024_11_26_181716_create_drivers_table', 1),
(78, '2024_11_28_040917_create_bookings_table', 1),
(79, '2024_11_30_071405_create_car_lists_table', 1);

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
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_lists`
--
ALTER TABLE `car_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clients_email_unique` (`email`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
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
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `car_lists`
--
ALTER TABLE `car_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
