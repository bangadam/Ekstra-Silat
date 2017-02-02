-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2017 at 11:23 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eskul_silat`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id_absen` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `absen` varchar(5) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id_absen`, `siswa_id`, `id_kelas`, `absen`, `created_at`, `updated_at`) VALUES
(7, 6, 6, 'Hadir', '2017-01-30 02:21:26', '2017-01-29 19:21:26'),
(8, 3, 3, 'Alfa', '2017-01-30 02:21:26', '2017-01-29 19:21:26'),
(9, 4, 4, 'Sakit', '2017-01-30 02:21:26', '2017-01-29 19:21:26'),
(10, 5, 5, 'Izin', '2017-01-30 02:21:26', '2017-01-29 19:21:26');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatans`
--

CREATE TABLE `kegiatans` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kegiatan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tempat_kegiatan` text COLLATE utf8_unicode_ci NOT NULL,
  `administrasi` int(11) NOT NULL,
  `tgl_pel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `created_at`, `updated_at`) VALUES
(1, 'X RPL 2', '2017-01-13 20:49:34', '2017-01-13 20:49:34'),
(2, 'XI RPL 2', '2017-01-13 20:49:34', '2017-01-13 20:49:34'),
(3, 'XII RPL 2', '2017-01-13 20:49:34', '2017-01-13 20:49:34'),
(4, 'X RPL 1', '2017-01-13 20:49:34', '2017-01-13 20:49:34'),
(5, 'XI RPL 1', '2017-01-13 20:49:34', '2017-01-13 20:49:34'),
(6, 'XII RPL 1', '2017-01-13 20:49:34', '2017-01-13 20:49:34'),
(7, 'X JB 1', '2017-01-13 20:49:34', '2017-01-13 20:49:34'),
(8, 'XI JB 1', '2017-01-13 20:49:34', '2017-01-13 20:49:34'),
(9, 'XII JB 1', '2017-01-13 20:49:34', '2017-01-13 20:49:34'),
(10, 'X JB 2', '2017-01-13 20:49:34', '2017-01-13 20:49:34'),
(11, 'XI JB 2', '2017-01-13 20:49:34', '2017-01-13 20:49:34'),
(12, 'XII JB 2', '2017-01-13 20:49:34', '2017-01-13 20:49:34'),
(13, 'X MM 3', '2017-01-13 20:49:34', '2017-01-13 20:49:34'),
(14, 'XI MM 3', '2017-01-13 20:49:34', '2017-01-13 20:49:34'),
(15, 'XII MM 3', '2017-01-13 20:49:34', '2017-01-13 20:49:34'),
(16, 'X MM 2', '2017-01-13 20:49:34', '2017-01-13 20:49:34'),
(17, 'XI MM 2', '2017-01-13 20:49:34', '2017-01-13 20:49:34'),
(18, 'XII MM 2', '2017-01-13 20:49:34', '2017-01-13 20:49:34'),
(19, 'X MM 1', '2017-01-13 20:49:34', '2017-01-13 20:49:34'),
(20, 'XII MM 1', '2017-01-13 20:49:34', '2017-01-13 20:49:34'),
(21, 'XII MM 1', '2017-01-13 20:49:34', '2017-01-13 20:49:34'),
(22, 'X APH 1', '2017-01-13 20:49:34', '2017-01-13 20:49:34'),
(23, 'XI APH 1', '2017-01-13 20:49:34', '2017-01-13 20:49:34'),
(24, 'XII APH 1', '2017-01-13 20:49:34', '2017-01-13 20:49:34'),
(25, 'X APH 2', '2017-01-13 20:49:34', '2017-01-13 20:49:34'),
(26, 'XI APH 2', '2017-01-13 20:49:34', '2017-01-13 20:49:34'),
(27, 'XII APH 2', '2017-01-13 20:49:34', '2017-01-13 20:49:34'),
(28, 'X ANM 1', '2017-01-13 20:49:34', '2017-01-13 20:49:34'),
(29, 'XI ANM 1', '2017-01-13 20:49:35', '2017-01-13 20:49:35'),
(30, 'XII ANM 1', '2017-01-13 20:49:35', '2017-01-13 20:49:35'),
(31, 'X ANM 2', '2017-01-13 20:49:35', '2017-01-13 20:49:35'),
(32, 'XI ANM 2', '2017-01-13 20:49:35', '2017-01-13 20:49:35'),
(33, 'X TKJ 1', '2017-01-13 20:49:35', '2017-01-13 20:49:35'),
(34, 'XI TKJ 1', '2017-01-13 20:49:35', '2017-01-13 20:49:35'),
(35, 'XII TKJ 1', '2017-01-13 20:49:35', '2017-01-13 20:49:35'),
(36, 'X TKJ 2', '2017-01-13 20:49:35', '2017-01-13 20:49:35'),
(37, 'XI TKJ 2', '2017-01-13 20:49:35', '2017-01-13 20:49:35'),
(38, 'XII TKJ 2', '2017-01-13 20:49:35', '2017-01-13 20:49:35'),
(39, 'X TKJ 3', '2017-01-13 20:49:35', '2017-01-13 20:49:35'),
(40, 'XI TKJ 3', '2017-01-13 20:49:35', '2017-01-13 20:49:35'),
(41, 'XII TKJ 3', '2017-01-13 20:49:35', '2017-01-13 20:49:35');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2016_11_13_111603_create_users_table', 1),
('2016_11_20_114537_create_kelas_table', 1),
('2016_11_30_032830_create_kegiatans_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pel`
--

CREATE TABLE `pel` (
  `id` int(11) NOT NULL,
  `id_sabuk` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nama_pel` varchar(30) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `alamat_pel` text NOT NULL,
  `JK` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pel`
--

INSERT INTO `pel` (`id`, `id_sabuk`, `id_kelas`, `nama_pel`, `ttl`, `no_hp`, `alamat_pel`, `JK`, `created_at`, `updated_at`) VALUES
(1, 5, 3, 'saya', '1997-09-24', '085111111111', 'jaringan sari', 'pria', '2017-01-30 02:15:17', '2017-01-29 19:15:17');

-- --------------------------------------------------------

--
-- Table structure for table `sabuk`
--

CREATE TABLE `sabuk` (
  `id_sabuk` int(11) NOT NULL,
  `tingkatan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sabuk`
--

INSERT INTO `sabuk` (`id_sabuk`, `tingkatan`) VALUES
(1, 'Polos'),
(2, 'Jambon'),
(3, 'Hijau'),
(4, 'Putih'),
(5, 'Mori');

-- --------------------------------------------------------

--
-- Table structure for table `t_siswa`
--

CREATE TABLE `t_siswa` (
  `id` int(11) NOT NULL,
  `id_sabuk` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `alamat_siswa` text NOT NULL,
  `JK` varchar(1) NOT NULL,
  `Ttl` date NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'didik', '$2y$10$aTskJ6T9kcYyOFagUiYY9.OAqh6VBom.7NaakZMIefohkFST6Y7Ru', 'admin', 'wNt6hzCRn76MdfpvlleAPirmtTu3oHDy4347aQNBZKCdUCVqpnnOrs22QZe3', '2017-01-13 20:49:34', '2017-01-13 20:49:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absen`),
  ADD KEY `siswa_id` (`siswa_id`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `kegiatans`
--
ALTER TABLE `kegiatans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `pel`
--
ALTER TABLE `pel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sabuk` (`id_sabuk`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `sabuk`
--
ALTER TABLE `sabuk`
  ADD PRIMARY KEY (`id_sabuk`);

--
-- Indexes for table `t_siswa`
--
ALTER TABLE `t_siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sabuk` (`id_sabuk`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `kegiatans`
--
ALTER TABLE `kegiatans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `pel`
--
ALTER TABLE `pel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sabuk`
--
ALTER TABLE `sabuk`
  MODIFY `id_sabuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `t_siswa`
--
ALTER TABLE `t_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pel`
--
ALTER TABLE `pel`
  ADD CONSTRAINT `pel_ibfk_1` FOREIGN KEY (`id_sabuk`) REFERENCES `sabuk` (`id_sabuk`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
