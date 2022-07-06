-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2021 at 03:57 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `neutron`
--

-- --------------------------------------------------------

--
-- Table structure for table `datajamals`
--

CREATE TABLE `datajamals` (
  `id` bigint(20) NOT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(20) NOT NULL,
  `harga` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datajamals`
--

INSERT INTO `datajamals` (`id`, `keterangan`, `jumlah`, `harga`, `total`, `kode`, `updated_at`, `created_at`) VALUES
(1, 'Sepatu Adidas', 1, 'Rp. 300.000', 'Rp. 300.000', '#00003', NULL, NULL),
(2, 'Baju Kemeja', 2, 'Rp. 125.000', 'Rp. 250.000', '', NULL, NULL),
(3, 'Sepatu Nike', 1, 'Rp. 280.000', 'Rp.280.000', NULL, '2021-11-15 11:04:38', '2021-11-15 11:04:38');

-- --------------------------------------------------------

--
-- Table structure for table `datanurs`
--

CREATE TABLE `datanurs` (
  `id` bigint(20) NOT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(20) NOT NULL,
  `harga` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datanurs`
--

INSERT INTO `datanurs` (`id`, `keterangan`, `jumlah`, `harga`, `total`, `kode`, `updated_at`, `created_at`) VALUES
(1, 'Sepatu Adidas', 1, 'Rp. 300.000', 'Rp. 300.000', '#00001', NULL, NULL),
(2, 'Baju Hangat', 2, 'Rp. 120.000', 'Rp. 240.000', '', NULL, NULL),
(3, 'Sepatu Nike', 1, 'Rp. 280.000', 'Rp.280.000', NULL, '2021-11-15 11:04:38', '2021-11-15 11:04:38'),
(4, 'Sepatu Spotec', 1, 'Rp. 250.000', 'Rp.250.000', NULL, '2021-11-15 11:26:15', '2021-11-15 11:06:25'),
(5, 'Baju Kaos', 1, 'Rp. 100.000', 'Rp. 100.000', NULL, '2021-11-15 22:08:52', '2021-11-15 22:08:32');

-- --------------------------------------------------------

--
-- Table structure for table `datasitis`
--

CREATE TABLE `datasitis` (
  `id` bigint(20) NOT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(20) NOT NULL,
  `harga` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datasitis`
--

INSERT INTO `datasitis` (`id`, `keterangan`, `jumlah`, `harga`, `total`, `kode`, `updated_at`, `created_at`) VALUES
(1, 'Sepatu Ventela', 2, 'Rp. 250.000', 'Rp. 500.000', '#00002', NULL, NULL),
(2, 'Baju Hangat', 2, 'Rp. 120.000', 'Rp. 240.000', '', NULL, NULL),
(3, 'Sepatu Nike', 1, 'Rp. 280.000', 'Rp.280.000', NULL, '2021-11-15 11:04:38', '2021-11-15 11:04:38');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_13_131126_create_outlet_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `outlets`
--

CREATE TABLE `outlets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `outlet_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `outlet_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `outlets`
--

INSERT INTO `outlets` (`id`, `outlet_name`, `kota`, `alamat`, `outlet_email`, `updated_at`, `created_at`) VALUES
(1, 'Distro Murah', 'Jambi', 'Jl. Yunus Sanis NO. 22', 'distro.sao@gmail.com', '2021-11-15 10:41:00', NULL),
(2, 'Jerseyzone', 'Malang', 'Jl. Raya Candi V', 'jersey.zone@gmail.com', '2021-11-14 11:51:49', '2021-11-13 06:51:41'),
(3, 'Distro Anime', 'Yogyakata', 'Jl. Brigjen Katamso', 'distro.anime@gmail.com', '2021-11-13 06:53:28', '2021-11-13 06:53:28');

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
-- Table structure for table `stoks`
--

CREATE TABLE `stoks` (
  `nama_barang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kondisi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_barang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_barang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stoks`
--

INSERT INTO `stoks` (`nama_barang`, `kondisi`, `kategori_barang`, `kode_barang`, `id`, `created_at`, `updated_at`) VALUES
('Baju Hangat', 'Bekas', 'Pakaian Wanita', '#00000003', 3, '2021-11-13 07:42:34', '2021-11-13 07:42:34'),
('Sepatu Nike', 'Baru', 'Pakaian Pria', '#00000004', 4, '2021-11-13 07:43:43', '2021-11-13 07:43:43'),
('Sepatu Adidas', 'Baru', 'Pakaian Pria', '#00000005', 5, '2021-11-13 07:44:34', '2021-11-13 07:44:34'),
('Jersey Home Chelsea', 'Baru', 'Pakaian Pria', '#00000006', 6, '2021-11-13 07:50:28', '2021-11-13 07:50:28'),
('Jersey Home Ajax', 'Bekas', 'Pakaian Pria', '#00000007', 7, '2021-11-13 07:53:33', '2021-11-13 07:53:33'),
('Jersey Home MU', 'Bekas', 'Pakaian Pria', '#00000007', 8, '2021-11-13 07:56:17', '2021-11-13 07:56:17'),
('Jersey Home Barcelona', 'Baru', 'Pakaian Pria', '#00000008', 9, '2021-11-13 07:58:23', '2021-11-13 07:58:23'),
('Jersey Away Chelsea', 'Baru', 'Pakaian Pria', '#00000009', 10, '2021-11-13 07:59:47', '2021-11-13 07:59:47'),
('Jersey Third Ajax', 'Owner', 'Pakaian Pria', '#00000010', 11, '2021-11-13 08:00:25', '2021-11-14 11:52:26'),
('Jersey Away MU', 'Bekas', 'Pakaian Pria', '#00000011', 12, '2021-11-13 08:02:29', '2021-11-13 08:02:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `employee`, `no_hp`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aldhika', 'Owner', '(+62) 896 6914 0731', 'dhikaaldhika019@gmail.com', NULL, '$2y$10$rHYVFNB87aRHkcIhLMvhyuzFVfOLpa0L7cBGwooaeDaNZXFxmhTLK', NULL, '2021-11-13 05:57:47', '2021-11-14 09:00:39'),
(2, 'Hasan', 'Manajer', '(+62) 852 1415 00**', 'khasan.4@gmail.com', NULL, '$2y$10$KaCZ.KNf6lQ0C53R40ZGrOQHyN2eYJwOTRHEvxTrIBjLL3AJPbiIW', NULL, '2021-11-13 05:59:00', '2021-11-15 19:37:22'),
(3, 'Ahmad Setiaji', 'Manajer', '(+62) 852 1415 03**', 'ahmadsetiaji12@gmail.com', NULL, '$2y$10$UKU0vPIl1Bq4wo4k0pgcD.Efj.ZeLiINHNdH1/R5H6wzghw/ZSbiK', NULL, '2021-11-13 05:59:24', '2021-11-15 19:38:08'),
(14, 'Gita Dhika', 'Manajer', '+62 896 9614 0733', 'dhikagita@gmail.com', NULL, '$2y$10$hKTsid4NjBNF2bgvjZuyKeTtIlykB3jU/MiIXGZtyqEkuEjw7.QUa', NULL, '2021-11-25 07:22:04', '2021-11-25 07:22:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datajamals`
--
ALTER TABLE `datajamals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datanurs`
--
ALTER TABLE `datanurs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datasitis`
--
ALTER TABLE `datasitis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outlets`
--
ALTER TABLE `outlets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `stoks`
--
ALTER TABLE `stoks`
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
-- AUTO_INCREMENT for table `datajamals`
--
ALTER TABLE `datajamals`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `datanurs`
--
ALTER TABLE `datanurs`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `datasitis`
--
ALTER TABLE `datasitis`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `outlets`
--
ALTER TABLE `outlets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stoks`
--
ALTER TABLE `stoks`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
