-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2023 at 09:10 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mv-ldcs`
--

-- --------------------------------------------------------

--
-- Table structure for table `aircrafts`
--

CREATE TABLE `aircrafts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `regno` varchar(255) NOT NULL,
  `airline` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aircrafts`
--

INSERT INTO `aircrafts` (`id`, `regno`, `airline`, `created_at`, `updated_at`) VALUES
(1, 'A12334dsa', 'Emirates', '2023-05-13 13:32:26', '2023-05-13 13:32:26'),
(2, '12wxcwq', 'Qatar', '2023-05-13 13:32:54', '2023-05-13 13:32:54'),
(3, 'MV1231', 'Maldivian', '2023-05-13 13:33:46', '2023-05-13 13:33:46');

-- --------------------------------------------------------

--
-- Table structure for table `airports`
--

CREATE TABLE `airports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iata_code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `airports`
--

INSERT INTO `airports` (`id`, `iata_code`, `name`, `country`, `created_at`, `updated_at`) VALUES
(1, 'MLE', 'Velana International Airport', '1', '2023-05-13 13:38:29', '2023-05-13 13:38:29'),
(2, 'QR', 'Qatar International Aiport', '2', '2023-05-13 13:39:23', '2023-05-13 13:39:23'),
(3, 'DBX', 'Dubai International Airport', '3', '2023-05-13 13:40:39', '2023-05-13 13:40:39');

-- --------------------------------------------------------

--
-- Table structure for table `apis`
--

CREATE TABLE `apis` (
  `passengerID` bigint(20) UNSIGNED NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `countryOfResidence` bigint(20) UNSIGNED NOT NULL,
  `documentType` varchar(255) NOT NULL,
  `documentNo` varchar(255) NOT NULL,
  `documentExpiry` date NOT NULL,
  `countryOfIssue` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apis`
--

INSERT INTO `apis` (`passengerID`, `dob`, `gender`, `nationality`, `countryOfResidence`, `documentType`, `documentNo`, `documentExpiry`, `countryOfIssue`, `created_at`, `updated_at`) VALUES
(1, '1993-10-29', 'M', 'Maldives', 1, 'passport', 'LA12E1', '2023-06-09', 1, '2023-05-13 13:58:29', '2023-05-13 13:58:29'),
(2, '2312-12-31', 'as', 'asd', 1, 'asd', 'asd', '2012-12-31', 1, '2023-05-13 14:04:20', '2023-05-13 14:04:20');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `code`, `name`, `created_at`, `updated_at`) VALUES
(1, 'MLE', 'Maldives', '2023-05-13 13:35:41', '2023-05-13 13:35:41'),
(2, 'QR', 'Qatar', '2023-05-13 13:36:21', '2023-05-13 13:36:21'),
(3, 'DBX', 'Dubai', '2023-05-13 13:36:36', '2023-05-13 13:36:36');

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
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `flightno` varchar(255) NOT NULL,
  `std_date` date NOT NULL,
  `std_time` time NOT NULL,
  `destination` int(11) NOT NULL,
  `aircraftid` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `etd_date` date NOT NULL,
  `etd_time` time NOT NULL,
  `brd_gate` int(11) NOT NULL,
  `brd_time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`id`, `flightno`, `std_date`, `std_time`, `destination`, `aircraftid`, `status`, `etd_date`, `etd_time`, `brd_gate`, `brd_time`, `created_at`, `updated_at`) VALUES
(1, 'EK656', '2023-05-14', '09:09:00', 1, 1, 'Check-in open', '2023-05-14', '12:44:00', 1, '12:45:00', '2023-05-13 13:45:15', '2023-05-13 13:45:15'),
(2, 'QR675', '2023-05-14', '13:47:00', 1, 2, 'Check-in open', '2023-05-14', '16:47:00', 3, '15:50:00', '2023-05-13 13:47:09', '2023-05-13 13:47:09');

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
(5, '2023_04_22_153835_create_aircrafts_table', 1),
(6, '2023_04_22_192056_create_countries_table', 1),
(7, '2023_04_23_081555_create_airports_table', 1),
(8, '2023_04_29_052957_create_flights_table', 1),
(9, '2023_05_01_093414_create_passengers_table', 1),
(10, '2023_05_12_143711_create_apis_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `passengers`
--

CREATE TABLE `passengers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `seatno` int(11) DEFAULT NULL,
  `ticketno` varchar(255) NOT NULL,
  `pnrno` varchar(255) NOT NULL,
  `ssrsno` varchar(255) DEFAULT NULL,
  `seqno` varchar(255) NOT NULL,
  `bagsandweight` double NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `flightid` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `passengers`
--

INSERT INTO `passengers` (`id`, `firstname`, `lastname`, `seatno`, `ticketno`, `pnrno`, `ssrsno`, `seqno`, `bagsandweight`, `status`, `flightid`, `created_at`, `updated_at`) VALUES
(1, 'Ahmed', 'Absal', 1, '123123133', 'A132', NULL, '1', 12, 'Boarded', 1, '2023-05-13 13:54:22', '2023-05-13 14:05:52'),
(2, 'Mohamed', 'Jaish', 2, '131231241', 'A21', NULL, '2', 25, 'Checked-In', 1, '2023-05-13 13:56:15', '2023-05-13 14:04:20'),
(3, 'Mohamed', 'Hansd', NULL, '213123123', 'A21', NULL, '3', 12, NULL, 1, '2023-05-13 14:01:58', '2023-05-13 14:01:58');

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
  `userid` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `accesslevel` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `name`, `email`, `password`, `accesslevel`, `created_at`, `updated_at`) VALUES
(1, 'Adhuham Yoonus', 'adhuham@gmail.com', '$2y$10$nxQ3/hyJBy0MP3TQGPrmku9Flbf7oumfJIjsq2drU7yhkjTrMI7pu', 3, '2023-05-13 13:24:42', '2023-05-13 13:24:42'),
(2, 'Ahmed Absal', 'absal2009@live.com', '$2y$10$WBpUREMj.klu7EAJk8AVCO/zoWmD3zdUuXaTPiNJmG/.qFIOY7kXm', 2, '2023-05-13 13:29:58', '2023-05-13 13:29:58'),
(3, 'Ali Jinah', 'jinah@gmail.com', '$2y$10$38zFps9ZKIMWz/cpcNv0EefaveHy7.viOTudWHnoCBBOdUNtf.Zae', 1, '2023-05-13 13:30:46', '2023-05-13 13:30:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aircrafts`
--
ALTER TABLE `aircrafts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `aircrafts_regno_unique` (`regno`);

--
-- Indexes for table `airports`
--
ALTER TABLE `airports`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passengers`
--
ALTER TABLE `passengers`
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
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aircrafts`
--
ALTER TABLE `aircrafts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `airports`
--
ALTER TABLE `airports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `passengers`
--
ALTER TABLE `passengers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
