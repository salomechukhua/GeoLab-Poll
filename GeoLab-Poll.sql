-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2018 at 06:41 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iblog`
--

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
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2018_03_18_092138_create_questions_table', 1),
(12, '2018_03_27_120231_create_sessions_table', 1);

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
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `subject`, `type`, `value`, `created_at`, `updated_at`) VALUES
(1, 'დიდხანს შემიძლია თავსატეხების, ამოცანების ამოხსნა.', 'პროგრამირება', 'შესავალი', 1, '2018-04-01 09:31:54', '2018-04-01 09:42:05'),
(4, 'თვლიან, რომ მდიდარი წარმოსახვა მაქვს.', 'დიზაინი', 'შესავალი', 1, '2018-04-01 12:22:27', '2018-04-01 12:22:27'),
(6, 'თვლიან, რომ შემოქმედებითი უნარები მაქვს.', 'დიზაინი', 'შესავალი', 1, '2018-04-01 12:23:26', '2018-04-01 12:23:26'),
(7, 'მაინტერესებს სამეცნიერო-პოპულარული ლიტერატურა.', 'პროგრამირება', 'შესავალი', 1, '2018-04-01 12:24:01', '2018-04-01 12:24:01'),
(9, 'ყოველთვის ინტერესით ვუყურებ სამეცნიერო ფანტასტიკის ჟანრის ფილმებს.', 'პროგრამირება', 'შესავალი', 1, '2018-04-03 05:24:43', '2018-04-03 05:24:43'),
(11, 'მინდა ჩემი იდეები გამოვსახო ვიზუალურად.', 'დიზაინი', 'საკონტროლო', 1, '2018-04-03 05:30:23', '2018-04-03 05:30:23'),
(12, 'მინდა ვისწავლო პროგრამული კოდის წერა.', 'პროგრამირება', 'საკონტროლო', 1, '2018-04-03 05:30:54', '2018-04-03 05:30:54'),
(13, 'კარგად ვუხამებ ერთმანეთს ფერებს.', 'დიზაინი', 'შესავალი', 1, '2018-04-03 09:48:44', '2018-04-03 09:48:44'),
(14, 'გამომიცდია საკუთარი ძალები ხელოვნების სხვადასხვა დარგში.', 'დიზაინი', 'შესავალი', 1, '2018-04-03 10:00:54', '2018-04-03 10:00:54'),
(15, 'ხალისით და დიდხანს შემიძლია რაღაცის გამოთვლა, დახაზვა.', 'პროგრამირება', 'შესავალი', 1, '2018-04-03 10:01:56', '2018-04-03 10:01:56'),
(16, 'მაქვს დრო გავიარო ხანგრძლივი  (4 თვიანი) კურსი.', 'ორივე', 'ხანგრძლივობის დასადგენი', 1, '2018-04-03 11:59:45', '2018-04-03 12:04:43'),
(17, 'ყოველთვის ყურადღებით ვაკვირდები ვებგვერდის ან/და მობილური აპლიკაციის დიზაინს.', 'ინტერფეისის დიზაინი', 'პროფესიული', 2, '2018-04-03 13:29:20', '2018-04-03 13:29:20'),
(18, 'ვიდეო ტუტორიალების მეშვეობით მიცდია გრაფიკულ რედაქტორებთან მუშაობა.', 'ინტერფეისის დიზაინი', 'პროფესიული', 2, '2018-04-03 13:30:20', '2018-04-03 13:30:20'),
(19, 'მინდა საიტის ან/და მობილური აპლიკაციის დიზაინი შევქმნა.', 'ინტერფეისის დიზაინი', 'პროფესიული', 5, '2018-04-03 13:31:31', '2018-04-03 13:31:31'),
(20, 'მომწონს 3D ანიმაციების ყურება.', '3D დიზაინი', 'პროფესიული', 2, '2018-04-03 13:32:37', '2018-04-03 13:32:37'),
(21, 'ყოველთვის მაინტერესებდა, როგორ ეწყობა 3D თამაშების ან/და ანიმაციების პერსონაჟები.', '3D დიზაინი', 'პროფესიული', 2, '2018-04-03 13:34:13', '2018-04-03 13:34:13'),
(22, 'ჩემით მიცდია 3D ობიექტის აწყობა.', '3D დიზაინი', 'პროფესიული', 5, '2018-04-03 13:35:11', '2018-04-03 13:35:11'),
(23, 'ვიცი რა არის Helvetica.', 'შრიფტის დიზაინი', 'პროფესიული', 2, '2018-04-05 03:17:59', '2018-04-05 03:17:59'),
(24, 'ვიცი ვექტორულ გრაფიკასთან მუშაობა.', 'შრიფტის დიზაინი', 'პროფესიული', 2, '2018-04-05 03:18:38', '2018-04-09 07:39:49'),
(25, 'მინდა შევქმნა საკუთარი შრიფტი.', 'შრიფტის დიზაინი', 'პროფესიული', 5, '2018-04-05 03:20:43', '2018-04-05 03:20:43'),
(26, 'გრაფიკულ პროგრამებში სრულიად ახალბედა ვარ.', 'პოლიგრაფიული დიზაინი', 'პროფესიული', 2, '2018-04-09 05:43:51', '2018-04-09 05:43:51'),
(27, 'მაინტერესებს პოსტერებისა და ლოგოების კეთება.', 'პოლიგრაფიული დიზაინი', 'პროფესიული', 2, '2018-04-09 05:44:22', '2018-04-09 05:44:22'),
(28, 'მინდა ვისწავლო კომპიუტერში ფოტოს დამუშავება.', 'პოლიგრაფიული დიზაინი', 'პროფესიული', 5, '2018-04-09 05:44:50', '2018-04-09 05:44:50'),
(29, 'ვიცი რა პროგრამაში ხდება ვიდეო გამოსახულების დამუშავება.', 'ვიდეო გრაფიკა', 'პროფესიული', 2, '2018-04-09 05:45:50', '2018-04-09 05:45:50'),
(30, 'მინდა ვისწავლო ვიდეო გადაღება.', 'ვიდეო გრაფიკა', 'პროფესიული', 2, '2018-04-09 05:46:20', '2018-04-09 05:46:20'),
(31, 'ჩემით მიცდია ვიდეოს დამონტაჟება.', 'ვიდეო გრაფიკა', 'პროფესიული', 5, '2018-04-09 05:46:46', '2018-04-09 05:46:46');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('osHSBgmNp35tHVLFmUvVGkqu00drArXHIGjGRVs8', 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36', 'YToxNjp7czo2OiJfdG9rZW4iO3M6NDA6ImFNZDZDZTFPc2x4NFd2R2dvWk5VNGJPQ1pBb0o4cVJUWUVDSU55VmoiO3M6NToiZmlyc3QiO2k6NDtzOjY6InNlY29uZCI7aTo0O3M6NToidGhpcmQiO2k6MDtzOjE5OiJxdWFudGl0eU9mUXVlc3Rpb25zIjtpOjA7czoxNzoiZmlyc3RDb3Vyc2VSZXN1bHQiO2k6MztzOjE4OiJzZWNvbmRDb3Vyc2VSZXN1bHQiO2k6MDtzOjE3OiJ0aGlyZENvdXJzZVJlc3VsdCI7aTowO3M6ODoiZHVyYXRpb24iO2k6MDtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo1NDoiaHR0cDovL2xvY2FsaG9zdC9HZW9MYWItUG9sbC9wdWJsaWMvYWRtaW4vcGFnZXMvY2hhcnRzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czoxMDoicHJvZ3JhbWluZyI7aTowO3M6NjoiZGVzaWduIjtpOjA7czoxNzoicHJvZ3JhbWluZ19yZXN1bHQiO2k6MDtzOjEzOiJkZXNpZ25fcmVzdWx0IjtpOjA7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NDt9', 1523378346);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `repassword` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image`, `password`, `repassword`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'admin', 'admin@polls.ge', 'owll.jpg', '$2y$10$EvOlKVKEIOBu1FuG/pKGceCGWrXvg9q83iAvCjgfqiH7SYt4d7EVO', '$2y$10$Dzj7cGQ..bP35.3PQTr7eekRi3FeD6mavouL7ELtHWLy5IZUnFH4S', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
