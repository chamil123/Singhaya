-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2019 at 05:00 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sinhaya`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_role`
--

CREATE TABLE `admin_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `ad_id` bigint(20) UNSIGNED NOT NULL,
  `ad_cusName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad_address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad_email` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad_nic` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad_homeNumber` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad_mobileNumber` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad_province` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad_district` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad_homeTown` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad_recNumber` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad_description` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad_remark` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `ad_title` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad_companyName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published_by` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cat_id` int(10) UNSIGNED NOT NULL,
  `type_id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bannertypes`
--

CREATE TABLE `bannertypes` (
  `id` int(10) UNSIGNED NOT NULL,
  `type_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bannertypes`
--

INSERT INTO `bannertypes` (`id`, `type_name`, `created_at`, `updated_at`) VALUES
(1, 'Featured', NULL, NULL),
(2, 'Slider', NULL, NULL),
(3, 'Normal', NULL, NULL),
(4, 'Normal super', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `created_at`, `updated_at`) VALUES
(1, 'Homes', NULL, NULL),
(2, 'Restaurants', NULL, NULL),
(3, 'Lands', NULL, NULL),
(4, 'Educations', NULL, NULL),
(5, 'Matrimonies', NULL, NULL),
(6, 'Saloons & Spa', NULL, NULL),
(7, 'Vehicles', NULL, NULL),
(8, 'Recruitments', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE `educations` (
  `edu_id` int(10) UNSIGNED NOT NULL,
  `medium` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locations` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exams` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subjects` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `houses`
--

CREATE TABLE `houses` (
  `house_id` int(10) UNSIGNED NOT NULL,
  `bath_rooms` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rooms` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `land_size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `water` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `electricity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `img_id` bigint(20) UNSIGNED NOT NULL,
  `img_path` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ad_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `job_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experiance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lands`
--

CREATE TABLE `lands` (
  `land_id` int(10) UNSIGNED NOT NULL,
  `size` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `electricity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `water` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roads` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `metrimonies`
--

CREATE TABLE `metrimonies` (
  `met_id` int(10) UNSIGNED NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `horoscope` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_03_06_023521_create_admins_table', 1),
(4, '2017_03_06_053834_create_admin_role_table', 1),
(5, '2018_03_06_023523_create_roles_table', 1),
(6, '2019_09_22_000001_create_categories_table', 1),
(7, '2019_09_22_000002_create_banner_types_table', 1),
(8, '2019_09_22_000003_create_types_table', 1),
(9, '2019_09_22_000004_create_ads_table', 1),
(10, '2019_09_22_000005_create_jobs_table', 1),
(11, '2019_09_22_000006_create_vehicles_table', 1),
(12, '2019_09_22_000007_create_houses_table', 1),
(13, '2019_09_22_000008_create_restaurants_table', 1),
(14, '2019_09_22_000009_create_educations_table', 1),
(15, '2019_09_22_000010_create_lands_table', 1),
(16, '2019_09_22_000011_create_metrimonies_table', 1),
(17, '2019_09_22_000012_create_images_table', 1),
(18, '2019_10_04_000013_create_typeCollection_table', 1);

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
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `rest_id` int(10) UNSIGNED NOT NULL,
  `room_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_specs` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `typecollections`
--

CREATE TABLE `typecollections` (
  `collection_id` bigint(20) UNSIGNED NOT NULL,
  `ad_id` bigint(20) UNSIGNED NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `name`, `cat_id`, `created_at`, `updated_at`) VALUES
(1, 'restaurants', 2, NULL, NULL),
(2, 'guest houses', 2, NULL, NULL),
(3, 'hotels', 2, NULL, NULL),
(4, 'cottages', 2, NULL, NULL),
(5, 'residences', 1, NULL, NULL),
(6, 'business', 1, NULL, NULL),
(7, 'other purposes', 1, NULL, NULL),
(8, 'training programs', 4, NULL, NULL),
(9, 'academic exams', 4, NULL, NULL),
(10, 'profesienal  exams', 4, NULL, NULL),
(11, 'other studies', 4, NULL, NULL),
(12, 'residences', 3, NULL, NULL),
(13, 'cultivate', 3, NULL, NULL),
(14, 'business', 3, NULL, NULL),
(15, 'other purposes', 3, NULL, NULL),
(16, 'motor cycles', 7, NULL, NULL),
(17, 'cars', 7, NULL, NULL),
(18, 'three wheelers', 7, NULL, NULL),
(19, 'vans', 7, NULL, NULL),
(20, 'jeeps', 7, NULL, NULL),
(21, 'full time', 8, NULL, NULL),
(22, 'part time', 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hometown` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone1` double NOT NULL,
  `phone2` double DEFAULT '0',
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(10) UNSIGNED NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `engine_capacity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transmision` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `milage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `condition` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad_id` bigint(20) UNSIGNED NOT NULL,
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
-- Indexes for table `admin_role`
--
ALTER TABLE `admin_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_role_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`ad_id`),
  ADD KEY `ads_cat_id_foreign` (`cat_id`),
  ADD KEY `ads_type_id_foreign` (`type_id`),
  ADD KEY `ads_user_id_foreign` (`user_id`);

--
-- Indexes for table `bannertypes`
--
ALTER TABLE `bannertypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`edu_id`),
  ADD KEY `educations_ad_id_foreign` (`ad_id`);

--
-- Indexes for table `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`house_id`),
  ADD KEY `houses_ad_id_foreign` (`ad_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`img_id`),
  ADD KEY `images_ad_id_foreign` (`ad_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_ad_id_foreign` (`ad_id`);

--
-- Indexes for table `lands`
--
ALTER TABLE `lands`
  ADD PRIMARY KEY (`land_id`),
  ADD KEY `lands_ad_id_foreign` (`ad_id`);

--
-- Indexes for table `metrimonies`
--
ALTER TABLE `metrimonies`
  ADD PRIMARY KEY (`met_id`),
  ADD KEY `metrimonies_ad_id_foreign` (`ad_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`rest_id`),
  ADD KEY `restaurants_ad_id_foreign` (`ad_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `typecollections`
--
ALTER TABLE `typecollections`
  ADD PRIMARY KEY (`collection_id`),
  ADD KEY `typecollections_ad_id_foreign` (`ad_id`),
  ADD KEY `typecollections_type_id_foreign` (`type_id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `types_cat_id_foreign` (`cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehicles_ad_id_foreign` (`ad_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_role`
--
ALTER TABLE `admin_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `ad_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bannertypes`
--
ALTER TABLE `bannertypes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `educations`
--
ALTER TABLE `educations`
  MODIFY `edu_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `houses`
--
ALTER TABLE `houses`
  MODIFY `house_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `img_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lands`
--
ALTER TABLE `lands`
  MODIFY `land_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `metrimonies`
--
ALTER TABLE `metrimonies`
  MODIFY `met_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `rest_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `typecollections`
--
ALTER TABLE `typecollections`
  MODIFY `collection_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_role`
--
ALTER TABLE `admin_role`
  ADD CONSTRAINT `admin_role_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ads`
--
ALTER TABLE `ads`
  ADD CONSTRAINT `ads_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `ads_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `bannertypes` (`id`),
  ADD CONSTRAINT `ads_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `educations`
--
ALTER TABLE `educations`
  ADD CONSTRAINT `educations_ad_id_foreign` FOREIGN KEY (`ad_id`) REFERENCES `ads` (`ad_id`);

--
-- Constraints for table `houses`
--
ALTER TABLE `houses`
  ADD CONSTRAINT `houses_ad_id_foreign` FOREIGN KEY (`ad_id`) REFERENCES `ads` (`ad_id`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ad_id_foreign` FOREIGN KEY (`ad_id`) REFERENCES `ads` (`ad_id`);

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_ad_id_foreign` FOREIGN KEY (`ad_id`) REFERENCES `ads` (`ad_id`);

--
-- Constraints for table `lands`
--
ALTER TABLE `lands`
  ADD CONSTRAINT `lands_ad_id_foreign` FOREIGN KEY (`ad_id`) REFERENCES `ads` (`ad_id`);

--
-- Constraints for table `metrimonies`
--
ALTER TABLE `metrimonies`
  ADD CONSTRAINT `metrimonies_ad_id_foreign` FOREIGN KEY (`ad_id`) REFERENCES `ads` (`ad_id`);

--
-- Constraints for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD CONSTRAINT `restaurants_ad_id_foreign` FOREIGN KEY (`ad_id`) REFERENCES `ads` (`ad_id`);

--
-- Constraints for table `typecollections`
--
ALTER TABLE `typecollections`
  ADD CONSTRAINT `typecollections_ad_id_foreign` FOREIGN KEY (`ad_id`) REFERENCES `ads` (`ad_id`),
  ADD CONSTRAINT `typecollections_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`);

--
-- Constraints for table `types`
--
ALTER TABLE `types`
  ADD CONSTRAINT `types_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `vehicles_ad_id_foreign` FOREIGN KEY (`ad_id`) REFERENCES `ads` (`ad_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
