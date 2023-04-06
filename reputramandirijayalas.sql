-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2023 at 05:24 AM
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
-- Database: `reputramandirijayalas`
--

-- --------------------------------------------------------

--
-- Table structure for table `galeris`
--

CREATE TABLE `galeris` (
  `id_galeri` bigint(20) UNSIGNED NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laporans`
--

CREATE TABLE `laporans` (
  `id_laporan` bigint(20) UNSIGNED NOT NULL,
  `id_transaksi` bigint(20) NOT NULL,
  `id_produk` bigint(20) NOT NULL,
  `judul_pekerjaan` varchar(255) NOT NULL,
  `nama_pekerjaan` varchar(255) NOT NULL,
  `bahan` varchar(255) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `totalharga` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laporans`
--

INSERT INTO `laporans` (`id_laporan`, `id_transaksi`, `id_produk`, `judul_pekerjaan`, `nama_pekerjaan`, `bahan`, `jumlah`, `harga`, `totalharga`, `created_at`, `updated_at`) VALUES
(1, 4, 3, 'Laporan Pekerjaan Udin', 'Kanopi Alderon Hitam Baru', '2023-04-05', '1', '2500000', '2500000', '2023-04-05 01:09:06', '2023-04-05 01:09:06');

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
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2023_03_30_043228_create_users_table', 1),
(10, '2023_03_30_065406_create_transaksis_table', 2),
(12, '2023_03_30_070218_create_detail_transaksis_table', 3),
(13, '2023_03_30_071400_create_produks_table', 4),
(14, '2023_03_30_071132_create_pegawais_table', 5),
(15, '2023_03_30_071817_create_galeris_table', 6),
(17, '2023_03_30_073240_create_pesanans_table', 7),
(18, '2023_03_30_073424_create_detail_pesanans_table', 8),
(19, '2023_04_05_064418_create_laporans_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `pegawais`
--

CREATE TABLE `pegawais` (
  `id_pegawai` bigint(20) UNSIGNED NOT NULL,
  `nama_pegawai` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pegawais`
--

INSERT INTO `pegawais` (`id_pegawai`, `nama_pegawai`, `telepon`, `email`, `jabatan`, `created_at`, `updated_at`) VALUES
(1, 'Corki D.', '08442242412412', 'corki@abc.com', 'Karyawan', '2023-04-03 21:58:10', '2023-04-03 22:06:02'),
(2, 'Gio', '08121212132', 'gio@abc.com', 'Karyawan', '2023-04-03 22:05:19', '2023-04-03 22:06:00'),
(3, 'Dio', '0827812321312', 'dio@abc.com', 'karyawan', '2023-04-03 22:06:16', '2023-04-03 22:06:16');

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
-- Table structure for table `pesanans`
--

CREATE TABLE `pesanans` (
  `id_pesanan` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `id_produk` bigint(20) UNSIGNED NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `jumlah_pesanan` int(100) NOT NULL,
  `tanggal_pesanan` date NOT NULL,
  `status_pesanan` varchar(255) NOT NULL,
  `total_harga` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesanans`
--

INSERT INTO `pesanans` (`id_pesanan`, `name`, `id_produk`, `nama_produk`, `jumlah_pesanan`, `tanggal_pesanan`, `status_pesanan`, `total_harga`, `created_at`, `updated_at`) VALUES
(15, 'Udin', 4, 'Teralis Minimalis', 5, '2023-04-06', 'pending', '2000000', '2023-04-05 20:16:37', '2023-04-05 20:16:37');

-- --------------------------------------------------------

--
-- Table structure for table `produks`
--

CREATE TABLE `produks` (
  `id_produk` bigint(20) UNSIGNED NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `bahan` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `jenis_produk` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produks`
--

INSERT INTO `produks` (`id_produk`, `nama_produk`, `bahan`, `foto`, `jenis_produk`, `harga`, `keterangan`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Kanopi Alderon Hitam Baru', '<br>• besi\r\n<br>• besi\r\n<br>• besi\r\n<br>• besi', '1680235990kanopi1.jpg', 'canopy', '2500000', 'Kanopi Tahan Lama Dengan Desain Yang Bagus', 'tersedia', '2023-03-30 21:13:10', '2023-04-05 19:37:20'),
(4, 'Teralis Minimalis', '<br>• besi\r\n<br>• besi\r\n<br>• besi \r\n<br>• besi', '1680502949tralisjendela.jpg', 'teralis', '400000', 'Teralis Bagus', 'tersedia', '2023-04-02 23:22:29', '2023-04-05 19:37:12'),
(5, 'Canopy Tes', '<br>• besi\r\n<br>• besi \r\n<br>• besi\r\n<br>• besi\r\n<br>• besi\r\n<br>• besi', '1680748169kanopi1.jpg', 'canopy', '121212121', 'gud', 'tersedia', '2023-04-05 19:29:29', '2023-04-05 19:29:29');

-- --------------------------------------------------------

--
-- Table structure for table `transaksis`
--

CREATE TABLE `transaksis` (
  `id_transaksi` bigint(20) UNSIGNED NOT NULL,
  `id_pesanan` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `id_produk` bigint(20) UNSIGNED NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `jumlah_produk` varchar(255) NOT NULL,
  `total_harga` varchar(255) NOT NULL,
  `nama_pegawai` varchar(255) NOT NULL,
  `status_transaksi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksis`
--

INSERT INTO `transaksis` (`id_transaksi`, `id_pesanan`, `name`, `id_produk`, `tanggal_transaksi`, `jumlah_produk`, `total_harga`, `nama_pegawai`, `status_transaksi`, `created_at`, `updated_at`) VALUES
(4, 14, 'Udin', 3, '2023-04-05', '1', '2500000', 'Corki D.', 'selesai', '2023-04-05 01:02:02', '2023-04-05 01:09:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `alamat`, `telepon`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Admin', 'Jakarta', '08000000000', 'admin@admin.com', '$2y$10$oz.zS7rkf.G29d0TfGr71ejn6e0Upz4ZX1D9gK1.F.pq745J/iXyi', 'admin', NULL, '2023-03-30 05:16:28', '2023-03-30 05:16:28'),
(4, 'User', 'Jakarta', '08888888888', 'user@user.com', '$2y$10$TG9hWbw6xTlcOfRIAki5muXl/CBfYTQGPZOy3ikaHOvzbYwG5xbA6', 'user', NULL, '2023-03-30 05:16:28', '2023-03-30 05:16:28'),
(5, 'Udin', 'Jakarta Barat', '08921221212', 'udin@udin.com', '$2y$10$xbkvFkrkMtgm0bEdd0lRoelq1cyZhXaB2gts.SJNwhNuPQszJAhxq', 'user', NULL, '2023-03-30 05:35:17', '2023-03-30 05:35:17'),
(6, 'coki pardayday', 'Depok Selatan', '0872121212', 'coki@coki.com', '$2y$10$EOZFnipD9S5hk5GvmKNDMeyK4lUtMnVMufsPfCyiP4KPbatg70zUy', 'user', NULL, '2023-03-30 05:44:20', '2023-03-30 20:35:04'),
(7, 'han', 'depok', '08212121213', 'han@han.com', '$2y$10$79e.4xCO/514KXvAN5ktJudPuJrkFCccae27hQMfpSeuvq.p0K25S', 'user', NULL, '2023-04-05 19:39:18', '2023-04-05 19:39:18'),
(8, 'Tono', 'Jakarta Barat', '087464223', 'tono@tono.com', '$2y$10$H3Y2q/Am9r3GHiyIVBqg2OBZ0jFDTY8UrPq93a2ZOJbLhuf1LkceC', 'user', NULL, '2023-04-05 19:40:45', '2023-04-05 19:40:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galeris`
--
ALTER TABLE `galeris`
  ADD PRIMARY KEY (`id_galeri`),
  ADD UNIQUE KEY `nama_produk` (`nama_produk`);

--
-- Indexes for table `laporans`
--
ALTER TABLE `laporans`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawais`
--
ALTER TABLE `pegawais`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD UNIQUE KEY `nama_pegawai` (`nama_pegawai`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pesanans`
--
ALTER TABLE `pesanans`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id_produk`),
  ADD UNIQUE KEY `nama_produk` (`nama_produk`);

--
-- Indexes for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD UNIQUE KEY `id_pesanan` (`id_pesanan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galeris`
--
ALTER TABLE `galeris`
  MODIFY `id_galeri` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporans`
--
ALTER TABLE `laporans`
  MODIFY `id_laporan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pegawais`
--
ALTER TABLE `pegawais`
  MODIFY `id_pegawai` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanans`
--
ALTER TABLE `pesanans`
  MODIFY `id_pesanan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `produks`
--
ALTER TABLE `produks`
  MODIFY `id_produk` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id_transaksi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
