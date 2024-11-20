-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2024 at 06:45 PM
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
(1, 'Test User', 'admin@gmail.com', '$2y$10$0jQgCMqxAe.sEAo5.OXKlOTXOYJrMhtU6OLi6.aIFtUhZRTOnar0W', NULL, '2024-11-19 10:35:16', '2024-11-19 10:35:16');

-- --------------------------------------------------------

--
-- Table structure for table `car_lists`
--

CREATE TABLE `car_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `engine` varchar(255) NOT NULL,
  `price_per_day` decimal(8,2) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` enum('available','unavailable') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_lists`
--

INSERT INTO `car_lists` (`id`, `brand`, `model`, `engine`, `price_per_day`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'id cumque illum', 'qui necessitatibus amet quaerat et et ad est vel molestias qui mollitia officiis nam consequatur', 'necessitatibus autem doloremque', 6000.00, 'iste accusantium harum', 'available', '2024-11-20 10:47:45', '2024-11-20 10:47:45'),
(2, 'ullam enim quia', 'corrupti animi ducimus est magnam dolorem beatae ipsa recusandae est accusamus dolor magnam atque est', 'occaecati repellendus non', NULL, 'nihil hic rerum', NULL, '2024-11-20 10:47:45', '2024-11-20 10:47:45'),
(3, 'soluta ab autem', 'odit repellat quod dolores quisquam ex quisquam eos qui quas accusamus optio id officia beatae', 'sunt rem tempore', NULL, 'doloremque totam blanditiis', NULL, '2024-11-20 10:47:45', '2024-11-20 10:47:45'),
(4, 'sint id earum', 'odit vel qui qui sed unde laboriosam rerum autem unde provident dicta ullam placeat et', 'mollitia rerum laborum', NULL, 'eaque enim neque', NULL, '2024-11-20 10:47:45', '2024-11-20 10:47:45'),
(5, 'autem minus voluptates', 'molestias ea dolorem cum laudantium asperiores excepturi assumenda deleniti atque voluptas aliquam voluptatibus nam illo', 'reprehenderit et facere', NULL, 'ea eum aut', NULL, '2024-11-20 10:47:45', '2024-11-20 10:47:45'),
(6, 'tempore ut adipisci', 'est a corrupti non ipsa qui numquam et est iste et quisquam quas et id', 'minus aliquid voluptatem', NULL, 'non ut et', NULL, '2024-11-20 10:47:45', '2024-11-20 10:47:45'),
(7, 'explicabo esse et', 'sit est explicabo voluptas eveniet eum voluptatum architecto iusto qui officiis non harum id nobis', 'laudantium veniam qui', NULL, 'amet qui est', NULL, '2024-11-20 10:47:45', '2024-11-20 10:47:45'),
(8, 'fugiat omnis similique', 'nesciunt necessitatibus beatae sint inventore consequatur perspiciatis nemo voluptatum at et repellendus esse molestias suscipit', 'repellendus saepe qui', NULL, 'qui neque iste', NULL, '2024-11-20 10:47:45', '2024-11-20 10:47:45'),
(9, 'consequuntur aut aut', 'nihil aut est eveniet voluptatum sint aut laborum dolorum ut iusto placeat placeat dicta voluptatibus', 'numquam ut quia', NULL, 'id iure omnis', NULL, '2024-11-20 10:47:45', '2024-11-20 10:47:45'),
(10, 'pariatur natus optio', 'ut maiores voluptas velit laudantium corporis facilis aut earum quia tempore autem illum provident harum', 'et inventore molestiae', NULL, 'voluptate sunt dolor', NULL, '2024-11-20 10:47:45', '2024-11-20 10:47:45'),
(11, 'provident aspernatur culpa', 'maiores dolorem omnis illo commodi dolor placeat at voluptatem atque laudantium illo culpa voluptates et', 'dolores fugit voluptate', NULL, 'cumque sed distinctio', NULL, '2024-11-20 10:47:45', '2024-11-20 10:47:45'),
(12, 'dignissimos sint dolores', 'ea quae temporibus reiciendis incidunt omnis nobis minima a voluptas aperiam ea impedit distinctio omnis', 'provident qui iusto', NULL, 'dolores porro sapiente', NULL, '2024-11-20 10:47:45', '2024-11-20 10:47:45'),
(13, 'accusantium officiis alias', 'facere consequatur quo minima labore consequatur sit reiciendis minima voluptas et et quis architecto expedita', 'et sunt itaque', NULL, 'vero voluptates maxime', NULL, '2024-11-20 10:47:45', '2024-11-20 10:47:45'),
(14, 'voluptatem quia sapiente', 'voluptatum repudiandae commodi sapiente iste occaecati atque qui architecto nobis voluptas fugit sit eos dicta', 'aspernatur rem velit', NULL, 'aut fugit necessitatibus', NULL, '2024-11-20 10:47:45', '2024-11-20 10:47:45'),
(15, 'libero perspiciatis maiores', 'soluta et quia magni animi excepturi consequatur recusandae dolor non ut voluptatibus quia in quis', 'cumque itaque ex', NULL, 'fugit consequatur et', NULL, '2024-11-20 10:47:45', '2024-11-20 10:47:45'),
(16, 'dignissimos beatae ratione', 'optio quae sed nobis sit dolore doloremque sed quod voluptatem voluptate vitae harum nam sint', 'voluptates est sit', NULL, 'fugit repellat voluptate', NULL, '2024-11-20 10:47:45', '2024-11-20 10:47:45'),
(17, 'aut nihil et', 'ut perspiciatis sapiente culpa beatae quia quia fuga eos omnis dicta sit doloremque debitis vitae', 'et animi iusto', NULL, 'autem tempora qui', NULL, '2024-11-20 10:47:46', '2024-11-20 10:47:46'),
(18, 'voluptatem vitae eaque', 'minima et officiis labore sint in saepe est et nostrum aliquam veniam architecto aut temporibus', 'nisi at id', NULL, 'vitae dolores quisquam', NULL, '2024-11-20 10:47:46', '2024-11-20 10:47:46'),
(19, 'sequi provident quia', 'impedit suscipit magni id aut dolorum facere amet numquam sed veritatis unde sunt autem officiis', 'at occaecati maiores', NULL, 'esse qui reiciendis', NULL, '2024-11-20 10:47:46', '2024-11-20 10:47:46'),
(20, 'perferendis quos est', 'impedit quia autem soluta tenetur placeat exercitationem dolor voluptas dolore ut sit labore rerum modi', 'nulla consequatur necessitatibus', NULL, 'illo veritatis excepturi', NULL, '2024-11-20 10:47:46', '2024-11-20 10:47:46');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT 'nophoto.jpg',
  `remember_token` varchar(100) DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `email`, `password`, `photo`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Abdullah', 'asm@gmail.com', '$2y$10$b0mijDVA8MOsSrZ.G4BpXe2TeHpGHO0n4f70TQXjrCyQOgCKAgEwe', 'nophoto.jpg', NULL, 'active', '2024-11-19 11:39:23', '2024-11-19 11:39:23');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_11_19_161352_create_admins_table', 2),
(6, '2024_11_19_171833_create_clients_table', 3),
(7, '2024_11_20_131830_create_cars_table', 4),
(8, '2024_11_20_131830_create_car_lists_table', 5);

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mohiuddin', 'admin@gmail.com', NULL, '$2y$10$7zyqfy62gSGrJHkdCX/vLe1LmLKbP5tYJgwvN91w7f4VIZ0gtz54m', NULL, '2024-11-19 08:45:53', '2024-11-19 08:45:53');

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
-- AUTO_INCREMENT for table `car_lists`
--
ALTER TABLE `car_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
