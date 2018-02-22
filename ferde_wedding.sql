-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2018 at 03:27 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ferde_wedding`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `value` varchar(100) NOT NULL,
  `section_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relation` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attend` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`id`, `name`, `email`, `phone`, `relation`, `message`, `attend`, `created_at`, `updated_at`) VALUES
(1, 'FERY PUTERA', 'feryyundaraputera123@gmail.com', '81224641242', 'friends of fery', 'monolithic system, we can run on multiple machines (hidden costs of hosting) to reduce our chances of failure, but with microservices, we can build systems that handle the total failure of services. Since services can fail at any time, it\'s important to be able to detect the failures quickly and, if', 'true', '2017-05-03 16:16:17', '2017-05-03 16:16:17'),
(2, 'dae uci', 'daeuci@gmail.com', '34254535345', 'friends of della', 'thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks', 'true', '2017-06-19 23:39:26', '2017-06-19 23:39:26'),
(3, 'dae ledo', 'daeledo@gmail.com', '123123123123123', 'friends of della', 'thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks', 'true', '2017-06-19 23:45:28', '2017-06-19 23:45:28'),
(4, 'cou wali', 'couwali@gmail.com', '12312312312', 'friends of della', 'thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks', 'true', '2017-06-19 23:45:59', '2017-06-19 23:45:59'),
(5, 'dae feroq', 'feryyundaraputera@gmail.com', '535646755761', 'friends of della', 'thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks', 'true', '2017-06-19 17:19:57', '2017-06-19 17:19:57'),
(16, 'dae feroqsdf', '23423@gmail.com', '535646755761', 'friends of della', 'thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks', 'true', '2017-06-19 17:19:57', '2017-06-19 17:19:57'),
(17, 'cou walifdf', '234234@gmail.com', '12312312312', 'friends of della', 'thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks', 'true', '2017-06-19 23:45:59', '2017-06-19 23:45:59'),
(18, 'dae ledodf', '2342342346@gmail.com', '123123123123123', 'friends of della', 'thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks', 'true', '2017-06-19 23:45:28', '2017-06-19 23:45:28'),
(19, 'dae ucidfdf', '4564564@gmail.com', '34254535345', 'friends of della', 'thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks', 'true', '2017-06-19 23:39:26', '2017-06-19 23:39:26'),
(20, 'FERY PUTERAdfd', '457457647422@gmail.com', '81224641242', 'friends of fery', 'monolithic system, we can run on multiple machines (hidden costs of hosting) to reduce our chances of failure, but with microservices, we can build systems that handle the total failure of services. Since services can fail at any time, it\'s important to be able to detect the failures quickly and, if', 'true', '2017-05-03 16:16:17', '2017-05-03 16:16:17'),
(26, 'dae feroq123', '123321@gmail.com', '535646755761', 'friends of della', 'thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks', 'true', '2017-06-19 17:19:57', '2017-06-19 17:19:57'),
(27, 'cou wali123', 'couwa233li@gmail.com', '12312312312', 'friends of della', 'thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks', 'true', '2017-06-19 23:45:59', '2017-06-19 23:45:59'),
(28, 'dae ledo123', 'daeled1233o@gmail.com', '123123123123123', 'friends of della', 'thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks', 'true', '2017-06-19 23:45:28', '2017-06-19 23:45:28'),
(29, 'dae uci123', 'da12323euci@gmail.com', '34254535345', 'friends of della', 'thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks', 'true', '2017-06-19 23:39:26', '2017-06-19 23:39:26'),
(30, 'FERY PUTERA123', 'feryy123undaraputera123@gmail.com', '81224641242', 'friends of fery', 'monolithic system, we can run on multiple machines (hidden costs of hosting) to reduce our chances of failure, but with microservices, we can build systems that handle the total failure of services. Since services can fail at any time, it\'s important to be able to detect the failures quickly and, if', 'true', '2017-05-03 16:16:17', '2017-05-03 16:16:17'),
(31, 'dae uci3dddd', 'daeddfsduci@gmail.com', '34254535345', 'friends of della', 'thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks thanks', 'true', '2017-06-19 23:39:26', '2017-06-19 23:39:26'),
(32, 'FERY PUTERAsdfs', 'feryysdfsdundaraputera123@gmail.com', '81224641242', 'friends of fery', 'monolithic system, we can run on multiple machines (hidden costs of hosting) to reduce our chances of failure, but with microservices, we can build systems that handle the total failure of services. Since services can fail at any time, it\'s important to be able to detect the failures quickly and, if', 'true', '2017-05-03 16:16:17', '2017-05-03 16:16:17');

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
(1, '2017_03_29_080819_create_guest_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `grade` int(100) NOT NULL,
  `section_id` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `name`, `grade`, `section_id`, `created_at`, `updated_at`) VALUES
(1, 'siapa', 7, 2, '2018-02-22 01:16:52', '0000-00-00 00:00:00'),
(2, 'kamu', 12, 3, '2018-02-21 23:28:04', '0000-00-00 00:00:00'),
(3, 'siapa nama kamu', 12, 2, '2018-02-21 18:38:48', '2018-02-21 18:38:48'),
(4, 'sdaed eadsad', 123, 2, '2018-02-21 18:51:18', '2018-02-21 18:51:18'),
(5, 'taiiiiiiii', 77, 3, '2018-02-21 18:55:52', '2018-02-21 18:55:52'),
(6, 'kamu kok begitu rambutmu', 12, 3, '2018-02-21 19:21:28', '2018-02-21 19:21:28');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `has_generic_answer` varchar(10) NOT NULL,
  `time_duration` int(10) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `name`, `description`, `has_generic_answer`, `time_duration`, `updated_at`, `created_at`) VALUES
(2, 'dae', 'gggfg', 'false', 23, '2018-02-21 08:16:08', '2018-02-21 08:16:08'),
(3, 'dae', 'test', 'true', 12, '2018-02-21 10:13:11', '2018-02-21 10:13:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `email`, `password`, `name`) VALUES
(1, 'TDBma6r2ptDyxHv7qiIbjhrPwd68lEUIDnJBzt9n6tQeTGUd1l442p5Cv3na', '2017-04-11 16:16:01', '2017-04-11 16:16:01', NULL, 'feryyundaraputera@gmail.com', '$2y$10$Rv2G.53vrHbQV8bx43Yds.NaWngIWarQ2v4YJVNRstYsoxD0hOp86', 'fery');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `guest_name_unique` (`name`),
  ADD UNIQUE KEY `guest_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
