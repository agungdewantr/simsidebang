-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2020 at 07:18 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sidebang`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_sayur_masuk`
--

CREATE TABLE `data_sayur_masuk` (
  `idSayurMasuk` bigint(20) UNSIGNED NOT NULL,
  `jenis` enum('Cabe','Jagung','Kol','Tomat') COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaPenjual` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hargabeli` bigint(20) NOT NULL,
  `jumlah` bigint(20) NOT NULL,
  `totalHarga` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_sayur_masuk`
--

INSERT INTO `data_sayur_masuk` (`idSayurMasuk`, `jenis`, `namaPenjual`, `hargabeli`, `jumlah`, `totalHarga`, `created_at`, `updated_at`) VALUES
(1, 'Cabe', 'Agung', 11000, 140, 1540000, '2020-10-29 20:30:52', '2020-10-29 20:32:04'),
(2, 'Kol', 'Novinda', 13000, 400, 5200000, '2020-10-29 20:32:39', '2020-10-29 20:32:39'),
(3, 'Jagung', 'Grace', 12000, 95, 1140000, '2020-10-29 20:33:06', '2020-10-29 20:33:06'),
(4, 'Tomat', 'Olivia', 14000, 120, 1680000, '2020-10-29 20:33:44', '2020-10-29 20:33:44'),
(5, 'Kol', 'Melva', 13000, 150, 1950000, '2020-10-29 20:34:17', '2020-10-29 20:34:17'),
(7, 'Cabe', 'Agung', 11000, 100, 1100000, '2020-10-31 23:05:54', '2020-10-31 23:06:44');

-- --------------------------------------------------------

--
-- Table structure for table `hargabeli`
--

CREATE TABLE `hargabeli` (
  `idHargabeli` bigint(20) UNSIGNED NOT NULL,
  `jenis` enum('Cabe','Jagung','Kol','Tomat') COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hargabeli`
--

INSERT INTO `hargabeli` (`idHargabeli`, `jenis`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'Cabe', 11000, '2020-10-29 20:27:27', '2020-10-29 20:27:27'),
(2, 'Jagung', 12000, '2020-10-29 20:27:38', '2020-10-29 20:27:38'),
(3, 'Kol', 13000, '2020-10-29 20:27:49', '2020-10-29 20:27:49');

-- --------------------------------------------------------

--
-- Table structure for table `hargajual`
--

CREATE TABLE `hargajual` (
  `idHargajual` bigint(20) UNSIGNED NOT NULL,
  `jenis` enum('Cabe','Jagung','Kol','Tomat') COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hargajual`
--

INSERT INTO `hargajual` (`idHargajual`, `jenis`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'Cabe', 15000, '2020-10-29 20:28:17', '2020-10-29 20:28:17'),
(2, 'Jagung', 14000, '2020-10-29 20:28:42', '2020-10-29 20:28:42'),
(3, 'Kol', 17000, '2020-10-29 20:28:54', '2020-10-29 20:28:54'),
(4, 'Tomat', 18000, '2020-10-29 20:29:10', '2020-10-29 20:29:10');

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
(15, '2014_10_12_000000_create_users_table', 1),
(16, '2014_10_12_100000_create_password_resets_table', 1),
(17, '2020_10_20_132753_create_data_sayur_masuk_table', 1),
(18, '2020_10_22_141607_create_hargabeli_table', 1),
(19, '2020_10_22_141829_create_hargajual_table', 1);

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('pemilik','pegawai') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Agung Dewantara', 'agung@sidebang.com', '2020-10-29 20:16:57', '$2y$10$h9/2qIGaeyneoV.JLCGcHOUpglICj/hRW7DI7dOzzFfedm/y8vHPa', 'pemilik', 'zow8zVUd52lJgmitj7UXDOEokY1yMHxDpLY6WjynzrlKIekVnCmkyuL5pY4A', '2020-10-29 20:16:58', '2020-10-29 20:21:13'),
(4, 'UD. Sidebang', 'simsidebang@gmail.com', NULL, '$2y$10$Se96POx6a5IKqmjEkNvzJuFqQCXrHA0d5POYn7B1lpXFETD8mMBva', 'pegawai', NULL, '2020-10-29 20:24:43', '2020-10-29 20:24:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_sayur_masuk`
--
ALTER TABLE `data_sayur_masuk`
  ADD PRIMARY KEY (`idSayurMasuk`);

--
-- Indexes for table `hargabeli`
--
ALTER TABLE `hargabeli`
  ADD PRIMARY KEY (`idHargabeli`);

--
-- Indexes for table `hargajual`
--
ALTER TABLE `hargajual`
  ADD PRIMARY KEY (`idHargajual`);

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
-- AUTO_INCREMENT for table `data_sayur_masuk`
--
ALTER TABLE `data_sayur_masuk`
  MODIFY `idSayurMasuk` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hargabeli`
--
ALTER TABLE `hargabeli`
  MODIFY `idHargabeli` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hargajual`
--
ALTER TABLE `hargajual`
  MODIFY `idHargajual` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
