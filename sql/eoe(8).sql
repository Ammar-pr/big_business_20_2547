-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2019 at 08:45 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eoe`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `id` int(11) NOT NULL,
  `car_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ex_id` int(11) DEFAULT NULL,
  `car_status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `car_period` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Car_plate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fuel` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `request_status` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Name_of_Trainer` varchar(265) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `car_name`, `ex_id`, `car_status`, `car_period`, `Car_plate`, `fuel`, `request_status`, `Name_of_Trainer`) VALUES
(1, 'camry', 1, 'broke', 'afternone', '4574 bgh', NULL, 'مؤكد', NULL),
(2, NULL, 56, 'ØªØ§Ù„Ù', '8 - 12 - Ù…Ø³Ø§Ø¡', '4574', NULL, 'مؤكد', NULL),
(3, NULL, 56, 'تالف', '8 - 12 - مساء', '4574', NULL, 'مؤكد', NULL),
(4, NULL, 56, 'تالف', '6 - 12 - صباح', '4574', NULL, 'مؤكد', NULL),
(5, NULL, 56, 'غير تالف', '12 - 6 - مساء', '4574 bgh', NULL, 'مؤكد', NULL),
(6, NULL, 56, 'تالف', '8 - 12 - مساء', '4574 bgh', NULL, 'مؤكد', NULL),
(7, NULL, 56, 'حادث', '8 - 12 - صباح', '4574 bgh', NULL, 'مؤكد', NULL),
(8, NULL, 56, 'حادث', '12 - 6 - صباح', '4574 bgh', NULL, 'مؤكد', NULL),
(9, NULL, 56, 'حادث', '8 - 12 - مساء', '4574 bgh', NULL, 'مؤكد', NULL),
(10, NULL, 56, 'حادث', '8 - 12 - مساء', '4574 bgh', NULL, 'مؤكد', NULL),
(11, NULL, 56, 'حادث', '8 - 12 - مساء', '4574 bgh', '95', 'مؤكد', NULL),
(12, NULL, 56, 'نظافة', '12 - 6 - صباح', '4574 bgh', '95', 'مؤكد', NULL),
(13, NULL, 56, 'حادث', '8 - 12 - مساء', '4574 bgh', '95', 'مؤكد', NULL),
(14, NULL, 56, 'حادث', '8 - 12 - مساء', '4574 bgh', '95', 'مؤكد', NULL),
(15, NULL, 56, 'حادث', '8 - 12 - مساء', '4574 bgh', '95', 'مؤكد', NULL),
(16, NULL, 56, 'حادث', '12 - 6 - مساء', '4574 bgh', '95', 'مؤكد', NULL),
(17, NULL, 56, 'حادث', '8 - 12 - مساء', '4574', '95', 'مؤكد', NULL),
(18, NULL, 56, 'نظافة', '8 - 12 - صباح', '4574 bgh', '95', 'مؤكد', NULL),
(19, NULL, 56, 'Ø­Ø§Ø¯Ø«', '8 - 12 - Ù…Ø³Ø§Ø¡', '4574 bgh', '95', NULL, NULL),
(20, NULL, 56, 'حادث', '8 - 12 - مساء', '4574 bgh', '95', 'مؤكد', NULL),
(21, NULL, 56, 'نظافة', '8 - 12 - مساء', '4574 bgh', '95', NULL, NULL),
(22, NULL, 56, 'حادث', '8 - 12 - مساء', '4574 bgh', '95', NULL, NULL),
(23, NULL, 56, 'صيانة', '8 - 12 - مساء', '4574 bgh', '95', 'مؤكد', NULL),
(24, NULL, 56, 'صيانة', '6 - 12 - صباح', '4574', '95', NULL, NULL),
(25, NULL, 56, 'حادث', '6 - 12 - صباح', '4574', '95', NULL, NULL),
(26, NULL, 56, 'حادث', '8 - 12 - مساء', '4574 bgh', '95', NULL, NULL),
(27, NULL, 57, 'حادث', '12 - 6 - صباح', '4574 bgh', '95', 'مؤكد', NULL),
(28, NULL, 57, 'حادث', '8 - 12 - صباح', '4574', '95', NULL, ''),
(29, NULL, 57, 'نظافة', '12 - 6 - مساء', '4574 bgh', '95', NULL, ''),
(30, NULL, 57, 'حادث', '12 - 6 - مساء', '4574 bgh', '95', NULL, ''),
(31, NULL, 57, 'حادث', '8 - 12 - مساء', '4574 bgh', '95', NULL, '1212');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(59) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telphone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(59) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sec_email` varchar(59) COLLATE utf8_unicode_ci DEFAULT NULL,
  `replece_phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `relative` varchar(59) COLLATE utf8_unicode_ci DEFAULT NULL,
  `relative_phone` varchar(59) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `example`
--

CREATE TABLE `example` (
  `id` int(11) NOT NULL,
  `dataone` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datatow` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `example`
--

INSERT INTO `example` (`id`, `dataone`, `datatow`) VALUES
(5, '', 'ujk'),
(6, 'll', 'ujk'),
(7, 'll', 'ujk'),
(8, 'll', 'ujk');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `detailing` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `payment` double NOT NULL,
  `case_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `final_verdict`
--

CREATE TABLE `final_verdict` (
  `id` int(11) NOT NULL,
  `email_cus` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `case_id` int(11) NOT NULL,
  `case_final_status` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `emd_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_12_03_191119_creare_projects_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'my first prject ', ' Prject discription', '2018-12-03 17:32:40', '2018-12-03 17:32:40'),
(2, 'test', 'test', '2018-12-27 02:00:00', '2018-12-27 02:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Validity` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `secret_question` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `assistant_evaluation` int(11) DEFAULT NULL,
  `manger_evaluation` int(11) DEFAULT NULL,
  `Management` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `Validity`, `secret_question`, `answer`, `assistant_evaluation`, `manger_evaluation`, `Management`) VALUES
(56, '', 'qgx@hotmail.com', NULL, '$2y$10$ZrXMscNxcl//SXMxk/UUvei8r01WGzwjE7gRzunw.j1AJOOjdiv1i', NULL, NULL, NULL, 'HR', '', '', NULL, NULL, NULL),
(57, 'Trainer@hotmail.com', 'Trainer@hotmail.com', NULL, '$2y$10$ZrXMscNxcl//SXMxk/UUvei8r01WGzwjE7gRzunw.j1AJOOjdiv1i', NULL, '2019-07-22 21:00:00', '2019-07-23 21:00:00', 'Trainer', 'what is the monther name ?', 'lolo', 11, 11, '11'),
(58, 'vehicles@hotmail.com', 'vehicles@hotmail.com', NULL, '$2y$10$ZrXMscNxcl//SXMxk/UUvei8r01WGzwjE7gRzunw.j1AJOOjdiv1i', NULL, NULL, NULL, 'Vehicles', '', '', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `example`
--
ALTER TABLE `example`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `final_verdict`
--
ALTER TABLE `final_verdict`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD UNIQUE KEY `password_resets_email_unique` (`email`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
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
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `example`
--
ALTER TABLE `example`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `final_verdict`
--
ALTER TABLE `final_verdict`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
