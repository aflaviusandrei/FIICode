-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16 Ian 2017 la 20:55
-- Versiune server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fiicode`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `activated` tinyint(1) NOT NULL DEFAULT '0',
  `activation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `persist_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reset_password_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Salvarea datelor din tabel `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `permissions`, `activated`, `activation_code`, `activated_at`, `last_login`, `persist_code`, `reset_password_code`, `remember_token`, `first_name`, `last_name`, `created_at`, `updated_at`) VALUES
(1, 'admin@fiicode.com', '$2y$10$q6QkHtJJe96Y2eaWalsh2e1S4HVRRz0rTtdNiVjvz.RG0oiH7IU7m', NULL, 0, NULL, NULL, NULL, NULL, NULL, 'uJBblAIq5LBFNipN7jHrz1YrP7ztW1Y60A6bnvB00PGEVywre9DtbTBwayhu', '', '', '2016-03-18 06:34:25', '2016-03-18 07:35:05');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mesaj` text NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `citit` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `links`
--

CREATE TABLE `links` (
  `id` int(10) UNSIGNED NOT NULL,
  `display` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `main` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Salvarea datelor din tabel `links`
--

INSERT INTO `links` (`id`, `display`, `url`, `created_at`, `updated_at`, `main`) VALUES
(1, 'Links', 'Link', '2016-03-18 06:34:25', '2016-03-18 06:34:25', 1),
(5, 'Mesaje Primite', 'Contacts', '2016-03-18 06:44:27', '2016-03-18 09:10:32', NULL),
(6, 'Newsfeed', 'Newsfeeds', '2016-03-18 06:55:29', '2016-03-18 09:10:17', NULL),
(7, 'Participanti', 'Users', '2016-03-18 06:58:42', '2016-03-18 09:09:58', NULL);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Salvarea datelor din tabel `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_11_16_205658_create_admins_table', 1),
('2014_12_02_152920_create_password_reminders_table', 1),
('2015_02_20_130902_create_url_table', 1),
('2015_03_15_123956_edit_url_table', 1);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `newsfeeds`
--

CREATE TABLE `newsfeeds` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `aprecieri` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `password_reminders`
--

CREATE TABLE `password_reminders` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nume` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `prezentare` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `bitbucket` varchar(100) NOT NULL,
  `oras` varchar(100) NOT NULL,
  `varsta` int(11) NOT NULL,
  `telefon` varchar(20) NOT NULL,
  `scoala` varchar(255) NOT NULL,
  `web` tinyint(4) NOT NULL,
  `algoritmica` tinyint(4) NOT NULL,
  `gamedev` tinyint(4) NOT NULL,
  `numeproiect` varchar(255) NOT NULL,
  `tehnologii` varchar(200) NOT NULL,
  `nume2` varchar(255) NOT NULL,
  `email2` varchar(255) NOT NULL,
  `nume3` varchar(255) NOT NULL,
  `email3` varchar(255) NOT NULL,
  `nume4` varchar(255) NOT NULL,
  `email4` varchar(255) NOT NULL,
  `changepass` varchar(10) NOT NULL,
  `repogithub` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `remember_token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD KEY `admins_activation_code_index` (`activation_code`),
  ADD KEY `admins_reset_password_code_index` (`reset_password_code`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsfeeds`
--
ALTER TABLE `newsfeeds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reminders`
--
ALTER TABLE `password_reminders`
  ADD KEY `password_reminders_email_index` (`email`),
  ADD KEY `password_reminders_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `newsfeeds`
--
ALTER TABLE `newsfeeds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=353;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
