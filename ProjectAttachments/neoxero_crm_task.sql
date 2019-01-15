-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 15, 2019 at 02:27 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `neoxero_crm_task`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

DROP TABLE IF EXISTS `companies`;
CREATE TABLE IF NOT EXISTS `companies` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` longtext COLLATE utf8mb4_unicode_ci,
  `website` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `email`, `logo`, `website`, `created_at`, `updated_at`) VALUES
(1, 'adidas', NULL, '1547560992_1_94987527.png', NULL, '2019-01-15 14:03:12', '2019-01-15 14:03:12'),
(2, 'Aqua', NULL, '1547561017_2_39355178.png', 'https://translate.google.com/', '2019-01-15 14:03:37', '2019-01-15 14:03:37'),
(3, 'fox', 'fox@f.com', '1547561466_3_67355742.jpeg', 'https://translate.google.com/', '2019-01-15 14:11:06', '2019-01-15 14:11:06'),
(4, 'microsoft', 'shaimaa.aboelftoh@hotmail.com', '1547561482_4_44580361.png', 'https://laravel.com/docs/5.7/validation#working-with-error-messages', '2019-01-15 14:11:22', '2019-01-15 14:11:22'),
(5, 'PHP', NULL, '1547561503_5_63961379.png', 'https://ar.lipsum.com/', '2019-01-15 14:11:43', '2019-01-15 14:11:43'),
(6, 'intel', NULL, '1547561529_6_50852018.png', NULL, '2019-01-15 14:12:09', '2019-01-15 14:12:09'),
(7, 'nike', NULL, '1547561548_7_1736682.png', 'https://translate.google.com/', '2019-01-15 14:12:28', '2019-01-15 14:12:28'),
(8, 'cloud', NULL, '1547561563_8_64929914.png', NULL, '2019-01-15 14:12:43', '2019-01-15 14:12:43'),
(9, 'samsung', NULL, '1547561579_9_94112191.png', NULL, '2019-01-15 14:12:59', '2019-01-15 14:12:59'),
(10, 'bird', NULL, '1547561608_10_96321537.png', 'https://ar.lipsum.com/', '2019-01-15 14:13:28', '2019-01-15 14:13:28'),
(11, 'EDX', NULL, '1547561627_11_18352942.png', 'https://laravel.com/docs/5.7/validation#working-with-error-messages', '2019-01-15 14:13:47', '2019-01-15 14:13:47');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `firstName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `employees_company_id_foreign` (`company_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `firstName`, `lastName`, `company_id`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'shaimaa', 'Abo Elftoh', 1, 'shaimaa.aboelftoh@gmail.com', '01010101010', '2019-01-15 14:03:53', '2019-01-15 14:03:53'),
(3, 'hadeel', 'hazem', 3, 'shaimaa.aboelftoh@hotmail.com', '0123456789', '2019-01-15 14:14:39', '2019-01-15 14:14:39'),
(4, 'ahmed', 'wa2l', 11, NULL, '0150001010', '2019-01-15 14:15:14', '2019-01-15 14:15:14'),
(5, 'hassan', 'adel', 2, 'admin@admin.com', '0250001010', '2019-01-15 14:15:59', '2019-01-15 14:15:59'),
(6, 'yasser', 'hashem', 11, 'user1@example.com', '25555555555', '2019-01-15 14:16:39', '2019-01-15 14:16:39'),
(7, 'amgd', 'ya2kob', 6, 'a@a.com', '55555969999', '2019-01-15 14:17:29', '2019-01-15 14:17:29'),
(8, 'fatin', 'ali', 9, 'f@a.com', NULL, '2019-01-15 14:17:51', '2019-01-15 14:17:51'),
(9, 'hassan', 'hamed', 4, 'h@h.com', '64555555555', '2019-01-15 14:18:46', '2019-01-15 14:18:46'),
(10, 'wa2l', 'ayaad', 8, 'w@a.com', '556666655556', '2019-01-15 14:19:12', '2019-01-15 14:19:12'),
(11, 'jane', 'doe', 8, 'j@d.com', NULL, '2019-01-15 14:19:35', '2019-01-15 14:19:35'),
(12, 'jhon', 'doe', 9, NULL, NULL, '2019-01-15 14:20:01', '2019-01-15 14:20:01');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_01_14_171435_create_companies_table', 1),
(4, '2019_01_14_171814_create_employees_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@admin.com', '$2y$10$HrWTXPZ/ICtMnIcgdF.sOeRc/AYc4a8dcovtELlAJAVtyHdjcEn.O', '2019-01-15 14:27:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$1Yr1wevG46kASD.FZClyz.gDqgM3J4.afR6Lt1nQ4A3kZJBRDVyem', 'PdbhukkokFf27sScYjvHzC9ER0s7yOG4lJPETqy8BjZNMrJTihMKPwADln2v', NULL, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
