-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2019 at 08:43 PM
-- Server version: 5.5.64-MariaDB
-- PHP Version: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marriage`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `applicant_lname` varchar(255) DEFAULT NULL,
  `applicant_fname` varchar(255) DEFAULT NULL,
  `applicant_sname` varchar(255) DEFAULT NULL,
  `app_marital_stat` tinyint(4) NOT NULL,
  `court_file_no` varchar(255) DEFAULT NULL,
  `divorced_city` varchar(255) DEFAULT NULL,
  `divorced_country` varchar(255) DEFAULT NULL,
  `applicant_religion` varchar(255) NOT NULL,
  `applicant_dob` date NOT NULL,
  `applicant_age` varchar(255) NOT NULL,
  `app_birth_country` varchar(255) NOT NULL,
  `app_province` varchar(255) NOT NULL,
  `parents1_fname` varchar(255) DEFAULT NULL,
  `parents1_lname` varchar(255) DEFAULT NULL,
  `parents1_sname` varchar(255) DEFAULT NULL,
  `parents1_country` varchar(255) NOT NULL,
  `parents1_province` varchar(255) NOT NULL,
  `parents2_fname` varchar(255) DEFAULT NULL,
  `parents2_lname` varchar(255) DEFAULT NULL,
  `parents2_sname` varchar(255) DEFAULT NULL,
  `parents2_country` varchar(255) NOT NULL,
  `parents2_province` varchar(255) NOT NULL,
  `app_prsnt_street` varchar(255) NOT NULL,
  `app_prsnt_apt` varchar(255) NOT NULL,
  `app_prsnt_city` varchar(255) NOT NULL,
  `app_prsnt_country` varchar(255) NOT NULL,
  `app_prsnt_province` varchar(255) NOT NULL,
  `app_prsnt_pcode` varchar(255) NOT NULL,
  `app_prsnt_phone` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `general_infos`
--

CREATE TABLE `general_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `intented_place` tinyint(4) NOT NULL,
  `intented_city` varchar(255) NOT NULL,
  `intented_mar_date` date NOT NULL,
  `licence_lang` varchar(255) NOT NULL,
  `applicant_email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `general_infos`
--

INSERT INTO `general_infos` (`id`, `intented_place`, `intented_city`, `intented_mar_date`, `licence_lang`, `applicant_email`, `created_at`, `updated_at`) VALUES
(1, 1, 'Toronto', '2019-12-19', 'English', 'someone@someone.com', NULL, NULL),
(2, 1, 'Toronto', '2019-12-19', 'English', 'someone@someone.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `joint_applicants`
--

CREATE TABLE `joint_applicants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `japplicant_lname` varchar(255) DEFAULT NULL,
  `japplicant_fname` varchar(255) DEFAULT NULL,
  `japplicant_sname` varchar(255) DEFAULT NULL,
  `japp_marital_stat` tinyint(4) NOT NULL,
  `jcourt_file_no` varchar(255) DEFAULT NULL,
  `jdivorced_city` varchar(255) DEFAULT NULL,
  `jdivorced_country` varchar(255) DEFAULT NULL,
  `japplicant_religion` varchar(255) NOT NULL,
  `japplicant_dob` date NOT NULL,
  `japplicant_age` varchar(255) NOT NULL,
  `japp_birth_country` varchar(255) NOT NULL,
  `japp_province` varchar(255) NOT NULL,
  `jparents1_fname` varchar(255) DEFAULT NULL,
  `jparents1_lname` varchar(255) DEFAULT NULL,
  `jparents1_sname` varchar(255) DEFAULT NULL,
  `jparents1_country` varchar(255) NOT NULL,
  `jparents1_province` varchar(255) NOT NULL,
  `jparents2_fname` varchar(255) DEFAULT NULL,
  `jparents2_lname` varchar(255) DEFAULT NULL,
  `jparents2_sname` varchar(255) DEFAULT NULL,
  `jparents2_country` varchar(255) NOT NULL,
  `jparents2_province` varchar(255) NOT NULL,
  `japp_prsnt_street` varchar(255) NOT NULL,
  `japp_prsnt_apt` varchar(255) NOT NULL,
  `japp_prsnt_city` varchar(255) NOT NULL,
  `japp_prsnt_country` varchar(255) NOT NULL,
  `japp_prsnt_province` varchar(255) NOT NULL,
  `japp_prsnt_pcode` varchar(255) NOT NULL,
  `japp_prsnt_phone` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `joint_applicants`
--

INSERT INTO `joint_applicants` (`id`, `japplicant_lname`, `japplicant_fname`, `japplicant_sname`, `japp_marital_stat`, `jcourt_file_no`, `jdivorced_city`, `jdivorced_country`, `japplicant_religion`, `japplicant_dob`, `japplicant_age`, `japp_birth_country`, `japp_province`, `jparents1_fname`, `jparents1_lname`, `jparents1_sname`, `jparents1_country`, `jparents1_province`, `jparents2_fname`, `jparents2_lname`, `jparents2_sname`, `jparents2_country`, `jparents2_province`, `japp_prsnt_street`, `japp_prsnt_apt`, `japp_prsnt_city`, `japp_prsnt_country`, `japp_prsnt_province`, `japp_prsnt_pcode`, `japp_prsnt_phone`, `created_at`, `updated_at`) VALUES
(1, 'rouni', 'sssss', NULL, 1, NULL, NULL, NULL, 'Anglican', '2019-12-04', '22', 'Canada', 'Ontario', NULL, NULL, 'tuiop', 'Canada', 'Ontario', NULL, NULL, 'htrw', 'Canada', 'Ontario', '54', '65', 'Ottawa', 'Canada', 'Ontario', 'p4n 1w5', '705-498-7896', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2019_11_17_085351_create_applicants_table', 1),
(11, '2019_11_18_064125_create_joint_applicants_table', 1),
(12, '2019_11_18_064252_create_general_infos_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_infos`
--
ALTER TABLE `general_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `joint_applicants`
--
ALTER TABLE `joint_applicants`
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
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_infos`
--
ALTER TABLE `general_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `joint_applicants`
--
ALTER TABLE `joint_applicants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
