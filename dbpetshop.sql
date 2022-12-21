-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2022 at 07:22 AM
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
-- Database: `dbpetshop`
--

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
-- Table structure for table `grooming`
--

CREATE TABLE `grooming` (
  `idgrooming` bigint(20) UNSIGNED NOT NULL,
  `nogrooming` varchar(10) NOT NULL,
  `pemilik` varchar(35) NOT NULL,
  `tipe` varchar(25) NOT NULL,
  `pj` varchar(25) NOT NULL,
  `harga` varchar(25) NOT NULL,
  `hargapokok` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_29_200553_create_login_table', 1),
(6, '2022_11_29_200854_create_register_table', 1),
(7, '2022_11_30_000022_create_services_table', 1),
(8, '2022_11_30_000425_create_services_penitipan_table', 1),
(9, '2022_12_17_234016_create_produk_table', 2),
(10, '2022_12_20_221230_create_grooming_table', 2),
(11, '2022_12_21_055818_create_penitipan_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penitipan`
--

CREATE TABLE `penitipan` (
  `idpenitipan` bigint(20) UNSIGNED NOT NULL,
  `nopenitipan` varchar(10) NOT NULL,
  `pemilik` varchar(35) NOT NULL,
  `tipe` varchar(25) NOT NULL,
  `pj` varchar(25) NOT NULL,
  `harga` varchar(25) NOT NULL,
  `hargapokok` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penitipan`
--

INSERT INTO `penitipan` (`idpenitipan`, `nopenitipan`, `pemilik`, `tipe`, `pj`, `harga`, `hargapokok`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', 'novi', 'losman', '-', '25.000', '25.000', 'belum terlayani', '2022-12-20 23:20:28', '2022-12-20 23:20:28');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `hargapokok` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `namahewan` varchar(255) NOT NULL,
  `jenishewan` varchar(255) NOT NULL,
  `umur` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `notelp` varchar(255) NOT NULL,
  `tipegrooming` varchar(255) NOT NULL,
  `sediapetcargo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services_penitipan`
--

CREATE TABLE `services_penitipan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namahewan` varchar(255) NOT NULL,
  `namapemilik` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `sediapetcargo` varchar(255) NOT NULL,
  `sediakandang` varchar(255) NOT NULL,
  `tanggalpenginapan` varchar(255) NOT NULL,
  `jenispaket` varchar(255) NOT NULL,
  `berapakalimakan` varchar(255) NOT NULL,
  `pakan` varchar(255) NOT NULL,
  `riwayatvaksin` varchar(255) NOT NULL,
  `kontak` varchar(255) NOT NULL,
  `riwayatpenyakit` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', NULL, '$2y$10$CkNM5BdlUk1uzfeJhcDCZehDVL5ZVd309pNPlxsnvY53P1.ocPIeW', 'admin', NULL, NULL, NULL),
(2, 'novita@gmail.com', NULL, '$2y$10$ohapHHVO6/T0zXLJ5dRViOSWoAvbbva4ozyCde7q0BTl6OtnUncIK', 'user', NULL, '2022-12-14 01:38:02', '2022-12-14 01:38:02'),
(3, 'noviana@gmail.com', NULL, '$2y$10$jqHfGFOanWyKlEo8om0rdOwkDaU51g28rTij.IUai5qqG53SqijMa', 'user', NULL, '2022-12-14 01:43:27', '2022-12-14 01:43:27'),
(4, 'dellajannatatie@gmail.com', NULL, '$2y$10$9L3/.DxhSwbLNR/BziBCG.lyV9x6qH17lCWn/JX9YMyePCuX/dKtO', 'user', NULL, '2022-12-14 01:49:53', '2022-12-14 01:49:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `grooming`
--
ALTER TABLE `grooming`
  ADD PRIMARY KEY (`idgrooming`),
  ADD KEY `grooming_nogrooming_index` (`nogrooming`),
  ADD KEY `grooming_pemilik_index` (`pemilik`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login_email_unique` (`email`);

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
-- Indexes for table `penitipan`
--
ALTER TABLE `penitipan`
  ADD PRIMARY KEY (`idpenitipan`),
  ADD KEY `penitipan_nopenitipan_index` (`nopenitipan`),
  ADD KEY `penitipan_pemilik_index` (`pemilik`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `register_email_unique` (`email`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_penitipan`
--
ALTER TABLE `services_penitipan`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grooming`
--
ALTER TABLE `grooming`
  MODIFY `idgrooming` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `penitipan`
--
ALTER TABLE `penitipan`
  MODIFY `idpenitipan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services_penitipan`
--
ALTER TABLE `services_penitipan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
