-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2024 at 02:16 PM
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
(1, 'Mohiuddin', 'admin@gmail.com', '$2y$10$BVvcNn1F1DBCBs5lFhGvc.ZnM3BjAKi2CNOvV5KyLPpynLGT/sfIC', NULL, '2024-12-03 21:45:27', '2024-12-03 21:45:27');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `car_list_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `details` varchar(150) NOT NULL,
  `date` date NOT NULL,
  `status` enum('pending','confirm') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `car_list_id`, `name`, `email`, `phone`, `details`, `date`, `status`, `created_at`, `updated_at`) VALUES
(1, 12, 'Abdullah', 'asm@gmail.com', '01789632556', 'Book Now!!', '2024-12-06', 'confirm', '2024-12-03 22:00:01', '2024-12-03 22:00:04'),
(2, 17, 'Rakib Hossain', 'rakib@gmail.com', '01752548624', 'Booked Now!!!', '2024-12-07', 'pending', '2024-12-04 06:17:52', '2024-12-04 06:17:52'),
(3, 19, 'Mohiuddin Islam', 'mohiuddincr7@gmail.com', '01567980553', 'Booked Car!!!', '2024-12-06', 'pending', '2024-12-04 06:23:00', '2024-12-04 06:23:00'),
(4, 14, 'Mahamud', 'mahamud@gmail.com', '01752548621', 'Booked Now!!!', '2024-12-07', 'confirm', '2024-12-04 11:51:55', '2024-12-04 12:23:03');

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
(11, 'Toyota', 'Land Cruiser', '3600hz', 8000.00, 'images/20241204034727.png', 'Available', '2024-12-03 21:47:27', '2024-12-03 21:47:27'),
(12, 'Ford', 'Axio', '2700hz', 6000.00, 'images/20241204034753.png', 'Available', '2024-12-03 21:47:53', '2024-12-03 21:47:53'),
(13, 'Audi', 'R-8', '3600hz', 7500.00, 'images/20241204034818.png', 'Available', '2024-12-03 21:48:18', '2024-12-03 21:48:18'),
(14, 'Tesla', 'XL', '3200hz', 5500.00, 'images/20241204034846.png', 'Available', '2024-12-03 21:48:46', '2024-12-03 21:48:46'),
(15, 'Suzuki', 'Dezire', '2600hz', 6500.00, 'images/20241204034927.png', 'Available', '2024-12-03 21:49:27', '2024-12-03 21:49:27'),
(16, 'Mitsubishi', 'Lancer', '3600hz', 9000.00, 'images/20241204035001.png', 'Available', '2024-12-03 21:50:01', '2024-12-03 21:50:01'),
(17, 'BMW', 'i8', '3600hz', 9000.00, 'images/20241204035042.png', 'Available', '2024-12-03 21:50:42', '2024-12-03 21:50:42'),
(18, 'Nissan', 'Petrol', '2700hz', 4500.00, 'images/20241204035154.png', 'Available', '2024-12-03 21:51:54', '2024-12-03 21:51:54'),
(19, 'Mercedes-Benz', 'Class', '3200hz', 6500.00, 'images/20241204035230.png', 'Available', '2024-12-03 21:52:30', '2024-12-03 21:52:30'),
(20, 'Honda', 'CR-V', '2700hz', 8500.00, 'images/20241204035255.png', 'Available', '2024-12-03 21:52:55', '2024-12-03 21:52:55'),
(21, 'Lamborghini', 'Huracan', '3600hz', 40000.00, 'images/20241205143933.png', 'Select One', '2024-12-04 12:09:02', '2024-12-05 08:39:33');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `email`, `password`, `photo`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Abdullah', 'asm@gmail.com', '$2y$10$uGgG.4asfMOby3wWD05GZ.UorMj1L2tsjAcHpO/s8yPBxce6fq0si', '', NULL, '', '2024-12-03 21:45:27', '2024-12-03 21:45:27'),
(2, 'Mahamud', 'mahamud@gmail.com', '$2y$10$HU.pel6NOfAMOUL.LHhLVeXdTuSJ9GzchhB6kQLnbiMmgqn/8AC4K', 'I:\\xampp82\\tmp\\phpF804.tmp', NULL, 'active', '2024-12-04 11:57:38', '2024-12-04 11:57:38'),
(3, 'Rakib', 'rakib@gmail.com', '$2y$10$A935tjw9T/j61XcsS2bBru8SeX0.4MklOarvt.7z3U54D3RLUMpAO', 'I:\\xampp82\\tmp\\php3898.tmp', NULL, 'active', '2024-12-04 15:01:24', '2024-12-04 15:01:24'),
(4, 'Jamil', 'jamil@gmail.com', '$2y$10$EJ1TlKJUhku6udJiqKHmj.UbCbSc15WAZoWeeb5iCKLmvi/9qmu0a', 'I:\\xampp82\\tmp\\phpE686.tmp', NULL, 'active', '2024-12-04 15:10:53', '2024-12-04 15:10:53');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `details` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `phone`, `details`, `created_at`, `updated_at`) VALUES
(1, 'Mohiuddin', 'mohiuddin@gmail.com', 'Need Car!!!', '01752437955', 'Car Service always good!!!', '2024-12-05 11:47:29', '2024-12-05 11:47:29'),
(2, 'Abdullah', 'asm@gmail.com', 'asm@gmail.com', '01758964568', 'Wel car Need!!!', '2024-12-05 11:50:02', '2024-12-05 11:50:02'),
(4, 'Nazrul Islam', 'nazrul@gmail.com', 'nazrul@gmail.com', '01758965478', 'Do you have a Toyota Primo car for free on the 25th?', '2024-12-05 12:36:55', '2024-12-05 12:36:55'),
(5, 'Jamil Hossain', 'jamil@gmail.com', 'jamil@gmail.com', '01956896358', 'Wel car Need!!!', '2024-12-05 13:25:44', '2024-12-05 13:25:44');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `car_list_id` int(11) DEFAULT NULL,
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

INSERT INTO `drivers` (`id`, `car_list_id`, `name`, `email`, `phone`, `details`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Saif Jahan', 'saif@gmail.com', '01789652340', 'Siddiq Bazar!!', '2024-12-03 21:57:47', '2024-12-03 21:58:11'),
(3, NULL, 'Arif Hossain', 'arif@gmail.com', '01758964895', 'Basabo, Drive Toyota Car!!!', '2024-12-04 06:11:36', '2024-12-04 06:11:36'),
(4, NULL, 'Jamil', 'jamil@gmail.com', '01759846552', 'Sajahanpur', '2024-12-04 06:12:38', '2024-12-04 06:12:38'),
(5, NULL, 'Nazrul', 'nazrul@gmail.com', '01758965425', 'Jatrabari, Drive Nissan Car!!', '2024-12-04 06:14:08', '2024-12-04 06:14:08'),
(6, NULL, 'Fahim Ahmed', 'fahim@gmail.com', '01755689452', 'Good Drive at BMW!!!', '2024-12-05 08:38:04', '2024-12-05 08:38:27');

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
(107, '2014_10_12_000000_create_users_table', 1),
(108, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(109, '2019_08_19_000000_create_failed_jobs_table', 1),
(110, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(111, '2024_11_19_161352_create_admins_table', 1),
(112, '2024_11_19_171833_create_clients_table', 1),
(113, '2024_11_26_181716_create_drivers_table', 1),
(114, '2024_11_28_040917_create_bookings_table', 1),
(115, '2024_11_30_071405_create_car_lists_table', 1),
(116, '2024_12_05_145913_create_contacts_table', 2);

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
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `car_lists`
--
ALTER TABLE `car_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

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
