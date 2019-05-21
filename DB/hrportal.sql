-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2019 at 02:40 PM
-- Server version: 5.7.14
-- PHP Version: 7.1.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(10) UNSIGNED NOT NULL,
  `attendance_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time_from` time DEFAULT NULL,
  `time_to` time DEFAULT NULL,
  `total_time` double DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `attendance_status`, `date`, `time_from`, `time_to`, `total_time`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'attended', '2019-04-16', '01:00:00', '02:00:00', NULL, 3, '2019-05-21 10:26:53', '2019-05-21 10:26:53'),
(9, 'attended', '2019-05-22', '10:00:00', '13:00:00', 3, 3, '2019-05-21 12:28:52', '2019-05-21 12:28:52'),
(4, 'attended', '2019-05-16', '10:00:00', '13:00:00', NULL, 3, '2019-05-21 11:49:51', '2019-05-21 11:49:51'),
(5, 'attended', '2019-05-09', '10:00:00', '13:00:00', 3, 5, '2019-05-21 11:50:23', '2019-05-21 11:50:23'),
(6, 'attended', '2019-05-01', '09:00:00', '13:00:00', NULL, 5, '2019-05-21 11:51:27', '2019-05-21 11:51:27'),
(7, 'attended', '2019-05-22', '09:00:00', '13:00:00', NULL, 3, '2019-05-21 11:52:29', '2019-05-21 11:52:29'),
(8, 'absence', '2019-05-10', '10:00:00', '13:00:00', 3, 3, '2019-05-21 11:54:18', '2019-05-21 11:54:18');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_05_21_095135_create_attendance_table', 1),
(4, '2019_05_21_095453_create_workingdays_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hiringdate` date NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `role`, `phone_number`, `hiringdate`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'HrManager', 'HrManager', 'manager', '01147372828', '2019-05-01', 'HrManager@Garment.com', 'a8698009bce6d1b8c2128eddefc25aad', NULL, NULL, NULL),
(2, 'Hadeel', 'Mostafa', 'employee', '01147372526', '2019-05-21', 'Hadeel@test.com', 'a8698009bce6d1b8c2128eddefc25aad', NULL, NULL, NULL),
(3, 'Mohamed', 'Mostafa', 'employee', '01147372526', '2019-05-21', 'MohHadeel@test.com', 'a8698009bce6d1b8c2128eddefc25aad', NULL, NULL, NULL),
(5, 'asdasd', 'Ha', 'employee', '011473532', '2019-05-22', 'soaad@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', NULL, '2019-05-21 09:28:31', '2019-05-21 12:28:02');

-- --------------------------------------------------------

--
-- Table structure for table `workingdays`
--

CREATE TABLE `workingdays` (
  `id` int(10) UNSIGNED NOT NULL,
  `days` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_from` time NOT NULL,
  `time_to` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attendance_user_id_foreign` (`user_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `workingdays`
--
ALTER TABLE `workingdays`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `workingdays`
--
ALTER TABLE `workingdays`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
