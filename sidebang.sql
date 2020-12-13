-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2020 at 04:53 PM
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
(2, 2, 'Bu Joko (Resto Seafood)', 'Medan', 'Bono', '087675254121', 25000, 300, 7500000, '2020-11-11 23:04:11', '2020-11-11 23:11:43'),
(3, 1, 'Bu UTs', 'jakarta', 'budi', NULL, 50000, 100, 5000000, '2020-11-15 01:19:50', '2020-11-15 01:31:31'),
(4, 4, 'Siapa', 'bandung', 'siapa sopir', '08216212616271', 19000, 250, 4750000, '2020-11-15 01:21:14', '2020-11-15 01:32:27'),
(5, 1, 'Uji Coba', 'Semarang', 'Uji Lagi', '0876666666', 50000, 130, 6500000, '2020-09-15 04:02:52', '2020-11-19 04:02:52'),
(6, 1, 'Pak Muji', 'Yogyakarta', 'Andri', '0981218128', 50000, 90, 4500000, '2020-09-22 04:04:49', '2020-11-19 04:04:49'),
(7, 3, 'Andi', 'Semarang', 'Ahmad', '0876212311', 26000, 400, 10400000, '2020-11-26 18:49:52', '2020-11-26 18:49:52'),
(8, 3, 'Bu Iga', 'Medan', 'Budi', '1082121651', 26000, 150, 3900000, '2020-10-05 18:52:33', '2020-11-26 18:52:33'),
(9, 3, 'Bu Oliv', 'Semarang', 'Anton', '-', 26000, 240, 6240000, '2020-09-08 18:54:34', '2020-11-26 18:54:34'),
(10, 1, 'Sri', 'Sampang', 'Atok', '0876875641', 50000, 500, 25000000, '2020-12-03 04:48:43', '2020-12-03 04:48:43'),
(11, 3, 'inem', 'Semarang', 'Joko', '08888888', 26000, 480, 12480000, '2020-12-03 04:52:13', '2020-12-03 04:52:13'),
(12, 2, 'Atem', 'Bandung', 'Joko', '0877575555', 25000, 320, 8000000, '2020-12-03 04:53:01', '2020-12-03 04:53:01'),
(13, 4, 'Susi', 'Jakarta Barat', 'Budi', '0875421212', 19000, 250, 4750000, '2020-12-03 04:53:55', '2020-12-03 04:53:55');

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
(3, 'uts1', 21000, 100, 2100000, '2020-11-13 01:23:15', '2020-11-13 01:24:15', 1),
(4, 'P. Joko', 21000, 300, 6300000, '2020-12-03 04:28:01', '2020-12-03 04:28:01', 1),
(5, 'Andi', 11000, 250, 2750000, '2020-12-03 04:28:31', '2020-12-03 04:28:31', 4),
(6, 'P. Joko', 19500, 100, 1950000, '2020-12-03 04:29:18', '2020-12-03 04:29:18', 3),
(7, 'Andi', 12000, 285, 3420000, '2020-12-03 04:29:44', '2020-12-03 04:29:44', 2),
(8, 'agungagungagungagungagungagung', 12000, 1, 12000, '2020-12-04 06:11:29', '2020-12-04 06:11:29', 2);

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
(1, 'Cabe', 200000000000, '2020-11-11 19:10:23', '2020-12-04 06:07:39'),
(2, 'Jagung', 12000, '2020-11-11 19:10:35', '2020-11-11 19:10:35'),
(3, 'Kol', 19500, '2020-11-11 19:11:02', '2020-11-11 23:13:19'),
(4, 'Tomat', 11000, '2020-11-11 19:11:17', '2020-11-11 19:11:17');

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
-- Table structure for table `keuangan`
--

CREATE TABLE `keuangan` (
  `idKeuangan` int(11) NOT NULL,
  `waktu` date DEFAULT NULL,
  `omzet` int(11) NOT NULL,
  `keuntungan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keuangan`
--

INSERT INTO `keuangan` (`idKeuangan`, `waktu`, `omzet`, `keuntungan`) VALUES
(2, '2020-12-31', 50230000, 35798000),
(3, '2019-09-30', 100, 11),
(4, '2020-01-31', 1, 1);

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
(28, '2020_11_12_015207_create_data_sayur_keluar_table', 3),
(29, '2020_11_19_114016_create_prediksi_table', 4);

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
-- Table structure for table `prediksi`
--

CREATE TABLE `prediksi` (
  `idprediksi` bigint(20) UNSIGNED NOT NULL,
  `idJenisSayur` bigint(11) UNSIGNED NOT NULL,
  `dataBulanPertama` bigint(20) NOT NULL,
  `dataBulanKedua` bigint(20) NOT NULL,
  `dataBulanKetiga` bigint(20) NOT NULL,
  `bulanPrediksi` bigint(20) NOT NULL,
  `tahunPrediksi` bigint(20) NOT NULL,
  `hasilPrediksi` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prediksi`
--

INSERT INTO `prediksi` (`idprediksi`, `idJenisSayur`, `dataBulanPertama`, `dataBulanKedua`, `dataBulanKetiga`, `bulanPrediksi`, `tahunPrediksi`, `hasilPrediksi`, `created_at`, `updated_at`) VALUES
(1, 1, 220, 1000, 100, 12, 2020, 420, '2020-11-21 18:55:53', NULL),
(23, 1, 1000, 100, 500, 1, 2021, 450, '2020-12-03 19:09:44', NULL),
(24, 1, 220, 1000, 100, 12, 2020, 420, '2020-12-03 18:03:19', NULL);

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
(2, 'Budi Budi', 'budi@gmail.com', NULL, '$2y$10$4d.OPRWHPoATauqzNgF7jO..n7anTJO3k39S2KUfvkbHSZD3xG4ha', 'pemilik', NULL, '2020-11-13 19:55:47', '2020-11-26 07:24:17');

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
-- Indexes for table `keuangan`
--
ALTER TABLE `keuangan`
  ADD PRIMARY KEY (`idKeuangan`);

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
-- Indexes for table `prediksi`
--
ALTER TABLE `prediksi`
  ADD PRIMARY KEY (`idprediksi`),
  ADD KEY `prediksi_idjenissayur_foreign` (`idJenisSayur`);

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
  MODIFY `idSayurKeluar` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `data_sayur_masuk`
--
ALTER TABLE `data_sayur_masuk`
  MODIFY `idSayurMasuk` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
-- AUTO_INCREMENT for table `keuangan`
--
ALTER TABLE `keuangan`
  MODIFY `idKeuangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `prediksi`
--
ALTER TABLE `prediksi`
  MODIFY `idprediksi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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

--
-- Constraints for table `prediksi`
--
ALTER TABLE `prediksi`
  ADD CONSTRAINT `prediksi_idjenissayur_foreign` FOREIGN KEY (`idJenisSayur`) REFERENCES `hargajual` (`idHargajual`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
