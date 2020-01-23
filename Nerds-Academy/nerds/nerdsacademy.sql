-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2020 at 11:04 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nerdsacademy`
--

-- --------------------------------------------------------

--
-- Table structure for table `attachments`
--

CREATE TABLE `attachments` (
  `id` int(10) UNSIGNED NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `text`, `user_id`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 'its very greatits very greatits very greatits very great', 1, 2, NULL, NULL),
(4, 'Math very Great Its allows make you great with logic\'s  and puzzles So ,study hard ', 1, 2, NULL, NULL),
(5, 'Math very Great Its allows make you great with logic\'s  and puzzles So ,study hard ', 1, 2, NULL, NULL),
(14, 'newjkrnqwnrkqwnekqwneqwkewqkonjwwqkmeldsaklmsjfasdksamldj', 3, 1, '2020-01-21 10:49:06', '2020-01-21 19:02:43'),
(18, 'ccna', 1, 1, '2020-01-21 11:12:14', '2020-01-21 11:12:14'),
(23, 'What is The result of 8 * 8', 3, 3, '2020-01-21 18:08:45', '2020-01-21 19:07:02'),
(25, 'omarr553', 3, 32, '2020-01-23 22:09:56', '2020-01-23 22:09:56'),
(26, 'Khaled222', 2, 32, '2020-01-23 22:11:41', '2020-01-23 22:11:41'),
(27, 'the course its so bad', 1, 35, '2020-01-23 23:00:23', '2020-01-23 23:00:23');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `major_id` int(10) UNSIGNED NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Author` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `major_id`, `description`, `user_id`, `image`, `created_at`, `updated_at`, `Author`) VALUES
(1, 'Circuits 101', 12, 'Circuits 101 Circuits 101 Circuits 101 Circuits 101 Circuits 101 Circuits 101 ', 1, '', NULL, NULL, 'Dan Fullerton'),
(2, 'Calculus 101', 6, '<p>very great cource</p>', 1, 'aaa', NULL, '2020-01-18 23:47:10', 'ahmad taha'),
(3, 'Algebra', 6, 'Dealing with algorithms and equations', 1, 'aaa', '2020-01-16 01:31:38', '2020-01-17 04:28:17', 'Dan Fullerton'),
(29, 'Ali', 6, '<p>AliAliAliAliAliAliAliAliAliAliAliAli</p>', 1, 'aaa', '2020-01-22 05:10:58', '2020-01-22 05:14:22', 'Ali'),
(31, 'omar', 35, '<p>omar</p>', 1, 'aaa', '2020-01-23 20:23:14', '2020-01-23 20:23:14', 'omar'),
(32, 'Omar2', 35, '<p>Omar2</p>', 1, 'aaa', '2020-01-23 21:34:44', '2020-01-23 21:34:44', 'Omar2'),
(35, 'basketball', 37, '<p>iashdisabdiyasdb&nbsp;iashdisabdiyasdb&nbsp;iashdisabdiyasdb&nbsp;iashdisabdiyasdb&nbsp;</p>', 1, 'aaa', '2020-01-23 22:59:50', '2020-01-23 22:59:50', 'omar');

-- --------------------------------------------------------

--
-- Table structure for table `course_major`
--

CREATE TABLE `course_major` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `major_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `majors`
--

CREATE TABLE `majors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `majors`
--

INSERT INTO `majors` (`id`, `name`, `image`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Science', '', 0, '2020-01-11 12:22:21', '2020-01-11 12:22:21'),
(2, 'Engineering', '', 0, '2020-01-11 12:23:21', '2020-01-11 12:23:21'),
(3, 'Information Technology\r\n', '', 0, '2020-01-11 13:17:24', '2020-01-11 13:17:24'),
(4, 'Medical Sciences', '', 0, '2020-01-11 13:18:24', '2020-01-11 13:18:24'),
(5, 'Linguistics', '', 0, '2020-01-11 13:19:24', '2020-01-11 13:19:24'),
(6, 'Mathematics', '', 1, '2020-01-10 13:22:26', '2020-01-10 13:22:26'),
(7, 'Chemistry', '', 1, '2020-01-10 13:23:26', '2020-01-10 13:23:26'),
(8, 'Physics', '', 1, '2020-01-10 13:25:26', '2020-01-10 13:25:26'),
(9, 'Biology', '', 1, '2020-01-10 13:26:26', '2020-01-10 13:26:26'),
(10, 'Computer Engineering', '', 2, '2020-01-11 04:00:00', '2020-01-11 04:00:00'),
(11, 'Communication Engineering', '', 2, '2020-01-11 16:27:00', '2020-01-11 16:27:00'),
(12, 'Electrical Engineering', '', 2, '2020-01-11 16:28:00', '2020-01-11 16:28:00'),
(13, 'Civil Engineering', '', 2, '2020-01-11 16:29:00', '2020-01-11 16:29:00'),
(14, 'Architectural Engineering', '', 2, '2020-01-11 19:26:26', '2020-01-11 19:26:26'),
(15, 'Mechanical Engineering', '', 2, '2020-01-11 19:27:26', '2020-01-11 19:27:26'),
(16, 'Mechatronics Engineering', '', 2, '2020-01-11 19:28:26', '2020-01-11 19:28:26'),
(17, 'Chemical Engineering', '', 2, '2020-01-11 19:29:26', '2020-01-11 19:29:26'),
(18, 'Data Science', '', 3, '2020-01-11 20:21:26', '2020-01-11 20:21:26'),
(19, 'Computer Science', '', 3, '2020-01-11 20:22:26', '2020-01-11 20:22:26'),
(20, 'Computer Information Systems', '', 3, '2020-01-11 20:23:26', '2020-01-11 20:23:26'),
(21, 'Business Information Technology', '', 3, '2020-01-11 20:24:26', '2020-01-11 20:24:26'),
(22, 'Pharmacy', '', 4, '2020-01-11 20:25:26', '2020-01-11 20:25:26'),
(23, 'Medicine', '', 4, '2020-01-11 20:26:26', '2020-01-11 20:26:26'),
(24, 'Medical  Engineering', '', 4, '2020-01-11 20:30:26', '2020-01-11 20:30:26'),
(25, 'Dentistry', '', 4, '2020-01-11 20:31:26', '2020-01-11 20:31:26'),
(26, 'Nursing', '', 4, '2020-01-11 20:41:26', '2020-01-11 20:41:26'),
(27, 'Arabic Literature', '', 5, '2020-01-12 06:31:26', '2020-01-12 06:31:26'),
(28, 'English Literature', '', 5, '2020-01-12 06:32:26', '2020-01-12 06:32:26'),
(29, 'German language', '', 5, '2020-01-12 06:33:26', '2020-01-12 06:33:26'),
(30, 'Japanese', '', 5, '2020-01-12 06:34:26', '2020-01-12 06:34:26'),
(31, 'Spanish', '', 5, '2020-01-12 06:40:26', '2020-01-12 06:40:26'),
(32, 'Hebrew', '', 5, '2020-01-12 06:41:26', '2020-01-12 06:41:26'),
(35, 'Ali', NULL, 5, '2020-01-23 19:55:44', '2020-01-23 19:55:44'),
(36, 'Sports', NULL, 0, '2020-01-23 22:46:14', '2020-01-23 22:46:14'),
(37, 'Basketball', NULL, 36, '2020-01-23 22:46:48', '2020-01-23 22:46:48');

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
(3, '2020_01_06_203843_create_majors_table', 1),
(4, '2020_01_06_204456_create_courses_table', 1),
(5, '2020_01_06_204740_create_comments_table', 1),
(6, '2020_01_06_204941_create_coursemajors_table', 1),
(7, '2020_01_06_205120_create_attachments_table', 1),
(8, '2020_01_06_215140_add_major_foreign_key_to_users_table', 2),
(9, '2020_01_06_215433_add_major_foreign_key_to_courses_table', 3),
(10, '2020_01_06_215650_add_user_foreign_key_to_courses_table', 4),
(11, '2020_01_06_220005_add_user_foreign_key_to_comments_table', 5),
(12, '2020_01_06_220213_add_course_foreign_key_to_comments_table', 6),
(13, '2020_01_06_220437_add_course_foreign_key_to_attachment_table', 7),
(14, '2020_01_06_220703_add_course_and_major_foreign_keys_to_course_major_table', 8);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `university_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `major_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `email_verified_at`, `password`, `remember_token`, `f_name`, `l_name`, `username`, `university_name`, `major_id`, `image`, `role`, `created_at`, `updated_at`) VALUES
(1, 'ahmad@gmail.com', NULL, '$2y$10$fa4lnZS.msAUMRAJcSZS..PROxFzWN/WlIwfc1Cj3rdqWUvubOof.', 'M4lesfJ3qHdoRpk9Be5RFBOUjFDpVlhy4Yie6NOYVjs2Us2I3l3UtUU1DNHE', 'Ahmad', 'Taha', 'Abo_Taha', 'Philadelphia', 6, NULL, 'admin', '2020-01-14 02:29:50', '2020-01-21 22:10:08'),
(2, 'khaled@gmail.com', NULL, '$2y$10$GVb/GBzWG1p5JMK9VyA8JepV5aDI0cqfJzFn99uXPo7RvSUeraD5q', 'IZQL4tJ1s8aCnwLrtJ8ykA7dxotWuodeKAlXBW5tZtnVz4yvYasJzdfzvcZB', 'Khaled', 'Al-Najar', 'MR.Khaled', 'Al-Zaytoonah', 19, NULL, 'user', '2020-01-21 22:13:27', '2020-01-23 23:01:46'),
(3, 'omar@gmail.com', NULL, '$2y$10$nbRIcze8L6YEczE50ZqflOMTO4epWvYmBj7SWCLcQRtsKYOjacAbi', 'N7Nrr0r2voHS15An9AWcObByGtn1MJAiUx4MolA3HLJp8LWdltlf713Qw362', 'Omar', 'Taha', 'Abo_Malk', 'Al-Isra', 6, NULL, 'user', '2020-01-19 06:55:13', '2020-01-21 22:09:41'),
(4, 'rami@gmail.com', NULL, '$2y$10$8rs8fa4Y09xcISxEaS4WZOrgkLfJHTouhJp.U6JqSIqrPkJEUDqNy', NULL, 'Rami', 'Shaheen', 'RAMI', 'Jordan University', 6, NULL, 'user', '2020-01-21 22:02:51', '2020-01-21 22:02:51'),
(5, 'elzerowebschool@gmail.com', NULL, '$2y$10$Jt0FkHB1ERZQ142ynEpIfu7299pq.uNHbXRjd1dI8ilV8UrylfRze', 'YNQxLQTvrnjVJBkUssjxCrJ4Iritu2cnkAtVxdnHNBBi4lZ78yaxe3SivfZa', 'Osam', 'Elzero', 'Instructor', 'Al-albayt', 6, NULL, 'user', '2020-01-22 05:30:35', '2020-01-22 05:33:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attachments`
--
ALTER TABLE `attachments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attachments_course_id_foreign` (`course_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_course_id_foreign` (`course_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_major_id_foreign` (`major_id`),
  ADD KEY `courses_user_id_foreign` (`user_id`);

--
-- Indexes for table `course_major`
--
ALTER TABLE `course_major`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_major_course_id_foreign` (`course_id`),
  ADD KEY `course_major_major_id_foreign` (`major_id`);

--
-- Indexes for table `majors`
--
ALTER TABLE `majors`
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
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD KEY `users_major_id_foreign` (`major_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attachments`
--
ALTER TABLE `attachments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `course_major`
--
ALTER TABLE `course_major`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `majors`
--
ALTER TABLE `majors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attachments`
--
ALTER TABLE `attachments`
  ADD CONSTRAINT `attachments_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_major_id_foreign` FOREIGN KEY (`major_id`) REFERENCES `majors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `courses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `course_major`
--
ALTER TABLE `course_major`
  ADD CONSTRAINT `course_major_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `course_major_major_id_foreign` FOREIGN KEY (`major_id`) REFERENCES `majors` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_major_id_foreign` FOREIGN KEY (`major_id`) REFERENCES `majors` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
