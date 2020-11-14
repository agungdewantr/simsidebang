-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2020 at 06:51 AM
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
-- Table structure for table `data_sayur_keluar`
--

CREATE TABLE `data_sayur_keluar` (
  `idSayurKeluar` bigint(20) UNSIGNED NOT NULL,
  `idHargajual` bigint(20) UNSIGNED NOT NULL,
  `namaPenerima` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kotaTujuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaSopir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notelpSopir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hargajual` bigint(20) NOT NULL,
  `jumlah` bigint(20) NOT NULL,
  `totalHarga` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_sayur_keluar`
--

INSERT INTO `data_sayur_keluar` (`idSayurKeluar`, `idHargajual`, `namaPenerima`, `kotaTujuan`, `namaSopir`, `notelpSopir`, `hargajual`, `jumlah`, `totalHarga`, `created_at`, `updated_at`) VALUES
(1, 1, 'Bu Aini (pasar tanah abang)', 'Jakarta', 'Andi', '08123456999', 50000, 1000, 50000000, '2020-10-21 08:53:56', '2020-11-11 23:10:48'),
(2, 2, 'Bu Joko (Resto Seafood)', 'Medan', 'Bono', '087675254121', 25000, 300, 7500000, '2020-11-11 23:04:11', '2020-11-11 23:11:43');

-- --------------------------------------------------------

--
-- Table structure for table `data_sayur_masuk`
--

CREATE TABLE `data_sayur_masuk` (
  `idSayurMasuk` bigint(20) UNSIGNED NOT NULL,
  `namaPenjual` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hargabeli` bigint(20) NOT NULL,
  `jumlah` bigint(20) NOT NULL,
  `totalHarga` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `idHargabeli` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_sayur_masuk`
--

INSERT INTO `data_sayur_masuk` (`idSayurMasuk`, `namaPenjual`, `hargabeli`, `jumlah`, `totalHarga`, `created_at`, `updated_at`, `idHargabeli`) VALUES
(1, 'Budi', 21000, 1200, 2520000, '2020-11-11 19:23:21', '2020-11-11 20:04:42', 1),
(2, 'Tuan', 12000, 150, 1800000, '2020-11-11 19:53:01', '2020-11-11 20:12:18', 2),
(3, 'uts1', 21000, 100, 2100000, '2020-11-13 01:23:15', '2020-11-13 01:24:15', 1);

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
(1, 'Cabe', 21000, '2020-11-11 19:10:23', '2020-11-11 19:10:23'),
(2, 'Jagung', 12000, '2020-11-11 19:10:35', '2020-11-11 19:10:35'),
(3, 'Kol', 19500, '2020-11-11 19:11:02', '2020-11-11 23:13:19'),
(4, 'Tomat', 11000, '2020-11-11 19:11:17', '2020-11-11 19:11:17'),
(5, 'Tomat', 16000, '2020-11-13 01:22:09', '2020-11-13 01:22:30');

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
(1, 'Cabe', 50000, '2020-11-11 20:47:05', '2020-11-11 20:47:05'),
(2, 'Jagung', 25000, '2020-11-11 20:47:24', '2020-11-11 20:47:24'),
(3, 'Kol', 26000, '2020-11-11 20:47:42', '2020-11-11 20:47:42'),
(4, 'Tomat', 19000, '2020-11-11 20:47:53', '2020-11-11 20:47:53');

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
(22, '2014_10_12_000000_create_users_table', 1),
(23, '2014_10_12_100000_create_password_resets_table', 1),
(24, '2020_10_20_132753_create_data_sayur_masuk_table', 1),
(25, '2020_10_22_141607_create_hargabeli_table', 1),
(26, '2020_10_22_141829_create_hargajual_table', 1),
(27, '2020_11_12_014713_add_kolom_to_data_sayur_masuk', 2),
(28, '2020_11_12_015207_create_data_sayur_keluar_table', 3);

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
(1, 'Sidebang', 'simsidebang@gmail.com', NULL, '$2y$10$61uyeKPEG5/rFwu/BR.Qfuy3I/tC2aLHepz6SEaUvYdWWWzLCAPjK', 'pegawai', NULL, '2020-11-11 19:09:13', '2020-11-11 19:09:13'),
(2, 'Budi', 'budi@gmail.com', NULL, '$2y$10$QRld8rRRTZddaq4lHEI8eO9vLOhD1oB2p4Wb86Jk2Ei0moa.ihdxy', 'pemilik', NULL, '2020-11-13 19:55:47', '2020-11-13 19:55:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_sayur_keluar`
--
ALTER TABLE `data_sayur_keluar`
  ADD PRIMARY KEY (`idSayurKeluar`),
  ADD KEY `data_sayur_keluar_idhargajual_foreign` (`idHargajual`);

--
-- Indexes for table `data_sayur_masuk`
--
ALTER TABLE `data_sayur_masuk`
  ADD PRIMARY KEY (`idSayurMasuk`),
  ADD KEY `data_sayur_masuk_idhargabeli_foreign` (`idHargabeli`);

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
-- AUTO_INCREMENT for table `data_sayur_keluar`
--
ALTER TABLE `data_sayur_keluar`
  MODIFY `idSayurKeluar` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_sayur_masuk`
--
ALTER TABLE `data_sayur_masuk`
  MODIFY `idSayurMasuk` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hargabeli`
--
ALTER TABLE `hargabeli`
  MODIFY `idHargabeli` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hargajual`
--
ALTER TABLE `hargajual`
  MODIFY `idHargajual` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_sayur_keluar`
--
ALTER TABLE `data_sayur_keluar`
  ADD CONSTRAINT `data_sayur_keluar_idhargajual_foreign` FOREIGN KEY (`idHargajual`) REFERENCES `hargajual` (`idHargajual`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_sayur_masuk`
--
ALTER TABLE `data_sayur_masuk`
  ADD CONSTRAINT `data_sayur_masuk_idhargabeli_foreign` FOREIGN KEY (`idHargabeli`) REFERENCES `hargabeli` (`idHargabeli`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
