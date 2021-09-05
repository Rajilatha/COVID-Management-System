-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2021 at 03:51 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php`
--

-- --------------------------------------------------------

--
-- Table structure for table `coronas`
--

CREATE TABLE `coronas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `total_cases` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_cases` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `new_cases` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `death` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coronas`
--

INSERT INTO `coronas` (`id`, `total_cases`, `active_cases`, `new_cases`, `recover`, `death`, `created_at`, `updated_at`) VALUES
(1, '\r\n362074', '\r\n43921', '\r\n3435', '\r\n312057', '\r\n312057', '2021-08-17 07:00:05', '2021-08-17 07:00:05');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `counts` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `description`, `counts`, `created_at`, `updated_at`) VALUES
(1, 'Cases', '354968', NULL, NULL),
(2, 'Deaths', '6096', NULL, NULL),
(3, 'Recovered', '309732', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `covids`
--

CREATE TABLE `covids` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `districts` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `positive` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `death` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `covids`
--

INSERT INTO `covids` (`id`, `districts`, `positive`, `death`, `created_at`, `updated_at`) VALUES
(7, 'Kilinochi', '15', '50', '2021-07-29 22:04:11', '2021-07-30 01:19:45'),
(8, 'Jaffna', '100', '21', '2021-07-29 23:42:34', '2021-07-29 23:42:34'),
(9, 'Colombo', '1000', '100', '2021-07-30 01:13:32', '2021-07-30 01:20:46'),
(10, 'Mannar', '50', '20', '2021-08-06 20:45:24', '2021-08-06 20:45:24'),
(11, 'Ampara', '45', '12', '2021-08-06 20:46:41', '2021-08-06 20:46:41'),
(12, 'Anuradhapura', '145', '10', '2021-08-06 20:47:29', '2021-08-06 20:47:29'),
(13, 'Badulla', '159', '10', '2021-08-06 20:48:08', '2021-08-06 20:48:08'),
(14, 'Batticaloa', '59', '0', '2021-08-06 20:48:39', '2021-08-06 20:48:39'),
(15, 'Galle', '563', '10', '2021-08-06 20:50:18', '2021-08-06 20:50:18'),
(16, 'Gampaha', '52', '2', '2021-08-06 20:50:48', '2021-08-06 20:50:48'),
(17, 'Hambantota', '963', '63', '2021-08-06 20:51:23', '2021-08-06 20:51:23'),
(18, 'Kalutara', '6325', '200', '2021-08-06 20:52:38', '2021-08-06 20:52:38'),
(19, 'Kandy', '782', '10', '2021-08-06 20:53:11', '2021-08-06 20:53:11'),
(20, 'Kegalle', '159', '20', '2021-08-06 20:55:50', '2021-08-06 20:55:50'),
(21, 'Kurunegala', '58', '2', '2021-08-06 20:56:27', '2021-08-06 20:56:27'),
(22, 'Matale', '693', '63', '2021-08-06 20:57:03', '2021-08-06 20:57:03'),
(23, 'Matara', '596', '20', '2021-08-06 20:57:32', '2021-08-06 20:57:32'),
(24, 'Monaragala', '569', '52', '2021-08-06 21:00:05', '2021-08-06 21:00:05'),
(25, 'Mullaitivu', '526', '52', '2021-08-06 21:00:43', '2021-08-06 21:00:43'),
(26, 'Nuwara Eliya', '568', '50', '2021-08-06 21:01:12', '2021-08-06 21:01:12'),
(27, 'Polonnaruwa', '852', '25', '2021-08-06 21:01:36', '2021-08-06 21:01:36'),
(28, 'Puttalam', '963', '100', '2021-08-06 21:06:32', '2021-08-06 21:06:32'),
(29, 'Ratnapura', '1000', '200', '2021-08-06 21:06:59', '2021-08-06 21:06:59'),
(30, 'Trincomalee', '569', '50', '2021-08-06 21:07:23', '2021-08-06 21:07:23'),
(31, 'Vavuniya', '800', '50', '2021-08-06 21:07:44', '2021-08-07 21:29:42');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nic_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `v1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `v2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `nic_no`, `fname`, `lname`, `email`, `address`, `age`, `gender`, `v1`, `v2`, `created_at`, `updated_at`) VALUES
(1, '967834589v', 'vinoge', 'vamathevan', 'vinoge05@gmail.com', 'No:05,\r\ninuvil.', 25, 'gender', 'Vaccinated', 'Not vaccinated', NULL, NULL),
(2, '959645123v', 'Jenani', 'Jeyaveerasingam', 'jena@gmail.com', 'N0: 7\r\nKondvil', 25, 'Female', 'Not vaccinated', 'Not vaccinated', NULL, NULL),
(4, '968574123v', 'Rajilatha', 'Kulanayakam', 'rajilatha1996@gmail.com', 'No: 71\r\nPointpetro', 25, 'Female', 'Vaccinated', 'Not vaccinated', NULL, NULL),
(5, '974152639v', 'Sayanthan', 'Sathiyarasa', 'sajanth80@gmail.com', 'No:43\r\nElaalai', 24, 'Male', 'Not vaccinated', 'Not vaccinated', NULL, NULL),
(6, '789645216v', 'Raja', 'Balakumar', 'vinoge05@gmail.com', 'No:42\r\nJaffna', 45, 'Male', 'Not vaccinated', 'Not vaccinated', NULL, NULL),
(7, '985623147v', 'karsha', 'karshani', 'vinoge05@gmail.com', 'inuvil', 21, 'Female', 'Not vaccinated', 'Not vaccinated', NULL, NULL),
(8, '985623147v', 'karsha', 'karshani', 'vinoge05@gmail.com', 'inuvil', 21, 'Female', 'Not vaccinated', 'Not vaccinated', NULL, NULL),
(9, '985623147v', 'karsha', 'karshani', 'vinoge05@gmail.com', 'inuvil', 21, 'Female', 'Not vaccinated', 'Not vaccinated', NULL, NULL),
(10, 'v', 'v', 'vv', 'vinoge05@gmail.com', 'v', 34, 'Female', 'vaccinated', 'Not vaccinated', NULL, NULL),
(12, '967492728v', 'vinoge', 'vamathevan', 'cst17063@std.uwu.ac.lk', 'inuvil', 21, 'Female', 'Not vaccinated', 'Not vaccinated', NULL, NULL);

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
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `detail_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_29_134018_create_covid_table', 2),
(5, '2021_07_29_134802_create_covids_table', 3),
(6, '2021_08_03_150800_create_details_table', 4),
(7, '2021_08_03_151301_create_appointments_table', 4),
(8, '2021_08_05_044643_create_appointments2s_table', 5),
(9, '2021_08_08_071151_create_shedules_table', 6),
(10, '2021_08_08_080703_create_shedules_table', 7),
(11, '2021_08_08_082246_create_vaccineones_table', 8),
(12, '2021_08_08_112137_create_vaccineones_table', 9),
(13, '2021_08_09_112019_create_sheduluetwos_table', 10),
(14, '2021_08_09_114207_create_vaccinetwos_table', 11),
(15, '2021_08_10_031708_create_media_table', 12),
(16, '2021_08_10_051756_create_images_table', 13),
(17, '2021_08_11_142218_create_notices_table', 13),
(18, '2021_08_16_151505_create_countries_table', 14),
(19, '2021_08_18_065152_create_coronas_table', 15),
(20, '2021_08_24_094223_create_qurantinedeatils_table', 16),
(21, '2021_08_24_095328_create_pcr_results_table', 17),
(22, '2021_08_24_095540_create_pcr_appointments_table', 18),
(23, '2021_08_24_095645_create_testings_table', 19),
(24, '2021_08_24_100854_create_quarantinedetails_table', 20);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `name`, `detail`, `image`, `created_at`, `updated_at`) VALUES
(5, 'notice1', 'SPECIAL NOTICE - SUSPENSION OF VISAS IN SRI LANKA DUE TO THE COVID - 19 OUTBREAK - VII', '20210812090204.png', '2021-08-12 03:32:04', '2021-08-12 03:32:04'),
(6, 'Notice2', 'COVID 19 CRISIS A NEW SRI LANKA', '20210812090324.jpeg', '2021-08-12 03:33:24', '2021-08-12 03:33:24'),
(7, 'Notice3', 'COVID – 19 Fund increases further', '20210812090534.jpg', '2021-08-12 03:35:35', '2021-08-12 03:35:35'),
(9, 'Notice 4', 'Suspension of visas in Sri Lanka due to the COVID-19 outbreak', '20210812133957.jpg', '2021-08-12 08:09:57', '2021-08-12 08:09:57');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pcr_appointments`
--

CREATE TABLE `pcr_appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pcr_id` bigint(20) UNSIGNED NOT NULL,
  `time_slot` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pcr_appointments`
--

INSERT INTO `pcr_appointments` (`id`, `pcr_id`, `time_slot`, `date`, `place`, `created_at`, `updated_at`) VALUES
(7, 3, '9.00am to 5.00pm', '2021-08-20', 'jaffna hospital', NULL, NULL),
(8, 4, '9.00am to 5.00pm', '2021-08-20', 'jaffna hospital', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pcr_results`
--

CREATE TABLE `pcr_results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nic_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nic_owner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pcr_results`
--

INSERT INTO `pcr_results` (`id`, `nic_no`, `nic_owner`, `fname`, `lname`, `email`, `address`, `age`, `gender`, `result`, `created_at`, `updated_at`) VALUES
(3, '123456789V', 'Owner', 'jane', 'gow', 'kkdkd@gmail.com', 'jaffna', 19, 'Female', 'Positive', NULL, NULL),
(4, '956691850V', 'Owner', 'vino', 'vamathevan', 'vinoge05@gmail.com', 'inuvil', 25, 'Female', 'Negative', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `quarantinedetails`
--

CREATE TABLE `quarantinedetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nic_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quarantinedetails`
--

INSERT INTO `quarantinedetails` (`id`, `nic_no`, `fname`, `address`, `age`, `gender`, `start_date`, `end_date`, `status`, `created_at`, `updated_at`) VALUES
(1, '956691850V', 'jane', 'jaffna', 25, 'Female', '2021-08-16', '2021-08-27', 'Quarantine period', NULL, NULL),
(2, '123456789v', 'jena', 'mkdmdmld', 10, 'Male', '2021-08-19', '2021-08-25', 'Quarantine period', NULL, NULL),
(4, '956691850v', 'vino', 'inuvil', 25, 'Female', '2021-08-04', '2021-08-18', 'Released', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shedules`
--

CREATE TABLE `shedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vaccine` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shedules`
--

INSERT INTO `shedules` (`id`, `date`, `time`, `vaccine`, `created_at`, `updated_at`) VALUES
(3, '2021-08-18', '9.00am-5.00pm', 'sinopharm vaccine', NULL, NULL),
(4, '2021-08-26', '9.00am-5.00pm', 'pfizer vaccine', NULL, NULL),
(6, '2021-08-27', '9.00am-5.00pm', 'sinopharm vaccine', NULL, NULL),
(8, '2021-10-22', '9.00am-5.00pm', 'sinopharm vaccine', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sheduluetwos`
--

CREATE TABLE `sheduluetwos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vaccine` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sheduluetwos`
--

INSERT INTO `sheduluetwos` (`id`, `date`, `time`, `vaccine`, `created_at`, `updated_at`) VALUES
(1, '2021-08-18', '9.00am-5.00pm', 'pfizer vaccine', NULL, NULL),
(2, '2021-08-18', '9.00am-5.00pm', 'pfizer vaccine', NULL, NULL),
(3, '2021-08-18', '9.00am-5.00pm', 'sinopharm vaccine', NULL, NULL),
(4, '2021-08-18', '9.00am-5.00pm', 'sinopharm vaccine', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testings`
--

CREATE TABLE `testings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL,
  `time_slot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testings`
--

INSERT INTO `testings` (`id`, `date`, `time_slot`, `place`, `created_at`, `updated_at`) VALUES
(4, '2021-08-14', '9.00am to 5.00pm', 'Nallur MOH', NULL, NULL),
(5, '2021-08-20', '9.00am to 5.00pm', 'Jaffna Hospital', NULL, NULL),
(6, '2021-08-26', '1.00pm to 4.00pm', 'Thellipalai Hospital', NULL, NULL);

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
  `role` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'raji', 'rajikula96@gmail.com', NULL, '$2y$10$9YzcI/EmcBaekaYK3ee/iOyjQKmA4mq/Hk77tu8IrdeKMS0S2.Gue', NULL, NULL, '2021-07-23 15:56:03', '2021-07-23 15:56:03'),
(2, 'admin', 'admin@gmail.com', NULL, '$2y$10$/TRGF2kd7EUqe380iY7q/OEVy0Otednbk6g8bMSIwESfaXzqL/76m', 1, NULL, '2021-07-23 15:56:30', '2021-07-23 15:56:30'),
(3, 'gs', 'gs@gmai.com', NULL, '$2y$10$S.VW0.0Y2o.MWSJKdkhqoOdAoyM4IA9UoDZF9xCjZslKYrM4edj8q', 3, NULL, '2021-07-23 16:10:43', '2021-07-23 16:10:43'),
(4, 'phi', 'phi@gmail.com', NULL, '$2y$10$qgfo8B798F2bVYom1Fw.QOP1PHmFidrG8xMesR4qDUbmh7.zWszn.', 2, NULL, '2021-07-23 16:17:23', '2021-07-23 16:17:23'),
(5, 'vinoge', 'vinoge05@gmail.com', NULL, '$2y$10$.l.qmWQUHV/8.J3d7m1zV.wItGPJjnuKKK6PreZBiPG7tUb666p8e', NULL, NULL, '2021-08-03 08:33:53', '2021-08-03 08:33:53'),
(6, 'v', 'vino@gmail.com', NULL, '$2y$10$TnctNxFSiz.gCCTKMHLGkOWDpVhNuCVihJIwtHvBikxXBwza9VA0e', NULL, NULL, '2021-08-09 06:27:19', '2021-08-09 06:27:19'),
(7, 'abi', 'abi@gmail.com', NULL, '$2y$10$RprHPp4.kEoPkSiGPmH/8.SCDsHQh/f/UFdeQI4pJaV6Nbvhn7z8O', NULL, NULL, '2021-08-24 20:53:54', '2021-08-24 20:53:54'),
(8, 'hjfkj', 'rk@gmail.com', NULL, '$2y$10$E5UE.Yk.SovmQkie9uJ8YOc00hvmq7o44Mt/qMWQ9xhMpMWg05rCu', NULL, NULL, '2021-08-24 21:01:17', '2021-08-24 21:01:17');

-- --------------------------------------------------------

--
-- Table structure for table `vaccineones`
--

CREATE TABLE `vaccineones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `detail_id` bigint(20) UNSIGNED NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `vaccine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vaccineones`
--

INSERT INTO `vaccineones` (`id`, `detail_id`, `time`, `date`, `vaccine`, `created_at`, `updated_at`) VALUES
(1, 5, '9.00am-5.00pm', '2021-08-18', 'sinopharm vaccine', NULL, NULL),
(2, 6, '9.00am-5.00pm', '2021-08-18', 'sinopharm vaccine', NULL, NULL),
(3, 4, '9.00am-5.00pm', '2021-08-26', 'pfizer vaccine', NULL, NULL),
(7, 8, '9.00am-5.00pm', '2021-08-14', 'sinopharm vaccine', NULL, NULL),
(9, 9, '9.00am-5.00pm', '2021-08-03', 'sinopharm vaccine', NULL, NULL),
(10, 10, '9.00am-5.00pm', '2021-08-18', 'sinopharm vaccine', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vaccinetwos`
--

CREATE TABLE `vaccinetwos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `detail_id` bigint(20) UNSIGNED NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `vaccine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vaccinetwos`
--

INSERT INTO `vaccinetwos` (`id`, `detail_id`, `time`, `date`, `vaccine`, `created_at`, `updated_at`) VALUES
(1, 1, '9.00am-5.00pm', '2021-08-18', 'pfizer vaccine', NULL, NULL),
(2, 4, '9.00am-5.00pm', '2021-08-14', 'pfizer vaccine', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coronas`
--
ALTER TABLE `coronas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `covids`
--
ALTER TABLE `covids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pcr_appointments`
--
ALTER TABLE `pcr_appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pcr_appointments_pcr_id_foreign` (`pcr_id`);

--
-- Indexes for table `pcr_results`
--
ALTER TABLE `pcr_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quarantinedetails`
--
ALTER TABLE `quarantinedetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shedules`
--
ALTER TABLE `shedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sheduluetwos`
--
ALTER TABLE `sheduluetwos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testings`
--
ALTER TABLE `testings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vaccineones`
--
ALTER TABLE `vaccineones`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `detail_id` (`detail_id`);

--
-- Indexes for table `vaccinetwos`
--
ALTER TABLE `vaccinetwos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vaccinetwos_detail_id_foreign` (`detail_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coronas`
--
ALTER TABLE `coronas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `covids`
--
ALTER TABLE `covids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pcr_appointments`
--
ALTER TABLE `pcr_appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pcr_results`
--
ALTER TABLE `pcr_results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `quarantinedetails`
--
ALTER TABLE `quarantinedetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `shedules`
--
ALTER TABLE `shedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sheduluetwos`
--
ALTER TABLE `sheduluetwos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testings`
--
ALTER TABLE `testings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vaccineones`
--
ALTER TABLE `vaccineones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `vaccinetwos`
--
ALTER TABLE `vaccinetwos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pcr_appointments`
--
ALTER TABLE `pcr_appointments`
  ADD CONSTRAINT `pcr_appointments_pcr_id_foreign` FOREIGN KEY (`pcr_id`) REFERENCES `pcr_results` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `vaccineones`
--
ALTER TABLE `vaccineones`
  ADD CONSTRAINT `vaccineones_detail_id_foreign` FOREIGN KEY (`detail_id`) REFERENCES `details` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `vaccinetwos`
--
ALTER TABLE `vaccinetwos`
  ADD CONSTRAINT `vaccinetwos_detail_id_foreign` FOREIGN KEY (`detail_id`) REFERENCES `details` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
