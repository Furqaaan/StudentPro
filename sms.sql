-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2022 at 10:06 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `term` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maths` int(11) NOT NULL,
  `science` int(11) NOT NULL,
  `history` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `student_id`, `term`, `maths`, `science`, `history`, `created_at`, `updated_at`) VALUES
(1, 1, 'two', 72, 24, 27, '2022-09-28 14:30:37', '2022-09-28 14:30:37'),
(2, 1, 'one', 27, 58, 42, '2022-09-28 14:30:37', '2022-09-28 14:30:37'),
(3, 7, 'one', 79, 55, 26, '2022-09-28 14:30:37', '2022-09-28 14:30:37'),
(4, 10, 'one', 12, 61, 28, '2022-09-28 14:30:37', '2022-09-28 14:30:37'),
(5, 1, 'two', 62, 93, 8, '2022-09-28 14:30:37', '2022-09-28 14:30:37'),
(6, 1, 'one', 42, 4, 61, '2022-09-28 14:30:37', '2022-09-28 14:30:37'),
(7, 7, 'one', 35, 82, 17, '2022-09-28 14:30:37', '2022-09-28 14:30:37'),
(8, 10, 'one', 11, 82, 18, '2022-09-28 14:30:37', '2022-09-28 14:30:37'),
(9, 5, 'two', 44, 53, 86, '2022-09-28 14:30:37', '2022-09-28 14:30:37'),
(11, 11, 'two', 12, 12, 1, '2022-09-28 14:35:22', '2022-09-28 14:35:22');

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
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_09_28_145329_create_teachers_table', 1),
(7, '2022_09_28_150449_create_students_table', 1),
(8, '2022_09_28_153742_create_marks_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `gender` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `age`, `gender`, `teacher_id`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Fern Marquardt Jr.', 20, 'F', 6, '2022-09-28 14:30:32', '2022-09-28 14:30:32'),
(2, 'Dr. Daisha Bruen PhD', 16, 'F', 7, '2022-09-28 14:30:32', '2022-09-28 14:30:32'),
(3, 'Lilla Bednar', 8, 'F', 7, '2022-09-28 14:30:32', '2022-09-28 14:30:32'),
(4, 'Thomas Flatley', 2, 'M', 6, '2022-09-28 14:30:32', '2022-09-28 14:30:32'),
(5, 'Rory Koelpin', 4, 'F', 10, '2022-09-28 14:30:32', '2022-09-28 14:30:32'),
(6, 'Alysha Shanahan', 17, 'M', 8, '2022-09-28 14:30:33', '2022-09-28 14:30:33'),
(7, 'Kiley West', 12, 'F', 5, '2022-09-28 14:30:33', '2022-09-28 14:30:33'),
(8, 'Ashly Collier Sr.', 13, 'F', 8, '2022-09-28 14:30:33', '2022-09-28 14:30:33'),
(9, 'Gaylord Bednar', 7, 'M', 6, '2022-09-28 14:30:33', '2022-09-28 14:30:33'),
(10, 'Idell Kovacek', 14, 'M', 3, '2022-09-28 14:30:33', '2022-09-28 14:30:33'),
(11, 'Muhammed Furqan', 25, 'M', 9, NULL, '2022-09-28 14:31:13');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Liana Morissette', '2022-09-28 14:30:15', '2022-09-28 14:30:15'),
(2, 'Mackenzie Brown V', '2022-09-28 14:30:15', '2022-09-28 14:30:15'),
(3, 'Trever Lowe', '2022-09-28 14:30:15', '2022-09-28 14:30:15'),
(4, 'Felicia Metz', '2022-09-28 14:30:15', '2022-09-28 14:30:15'),
(5, 'Federico Nikolaus', '2022-09-28 14:30:15', '2022-09-28 14:30:15'),
(6, 'Elise Anderson Jr.', '2022-09-28 14:30:15', '2022-09-28 14:30:15'),
(7, 'Olaf Smith', '2022-09-28 14:30:15', '2022-09-28 14:30:15'),
(8, 'Aurelia Nitzsche', '2022-09-28 14:30:15', '2022-09-28 14:30:15'),
(9, 'Addie Strosin', '2022-09-28 14:30:15', '2022-09-28 14:30:15'),
(10, 'Mr. Russell Osinski MD', '2022-09-28 14:30:16', '2022-09-28 14:30:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `marks_student_id_foreign` (`student_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `students_teacher_id_foreign` (`teacher_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `marks_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
