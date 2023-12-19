-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 19, 2023 at 04:41 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sispak`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Manage system'),
(2, 'pengguna', 'Konsumer');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int UNSIGNED NOT NULL DEFAULT '0',
  `permission_id` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int UNSIGNED NOT NULL DEFAULT '0',
  `user_id` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 9),
(1, 11),
(2, 10);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'dafahan', 8, '2023-12-04 14:30:15', 0),
(2, '::1', 'dafahanid@gmail.com', 8, '2023-12-04 14:31:20', 1),
(3, '::1', 'dafahanid@gmail.com', 8, '2023-12-04 14:34:56', 1),
(4, '::1', 'dafahan', 9, '2023-12-04 14:39:08', 0),
(5, '::1', 'dafahanid@gmail.com', 9, '2023-12-04 14:39:46', 1),
(6, '::1', 'dafa', 10, '2023-12-04 16:30:36', 0),
(7, '::1', 'dafahanreg@gmail.com', 10, '2023-12-04 16:31:18', 1),
(8, '::1', 'dafahanid@gmail.com', 9, '2023-12-04 16:35:25', 1),
(9, '::1', 'dafahanid@gmail.com', 9, '2023-12-04 17:15:43', 1),
(10, '::1', 'dafahanreg@gmail.com', 10, '2023-12-04 17:16:02', 1),
(11, '::1', 'dafahanid@gmail.com', 9, '2023-12-04 17:16:49', 1),
(12, '::1', 'admin', NULL, '2023-12-19 04:03:28', 0),
(13, '::1', 'admin', NULL, '2023-12-19 04:03:36', 0),
(14, '::1', 'admin', NULL, '2023-12-19 04:03:39', 0),
(15, '::1', 'admin', NULL, '2023-12-19 04:03:43', 0),
(16, '::1', 'admin@ad.min', 11, '2023-12-19 04:06:47', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int UNSIGNED NOT NULL DEFAULT '0',
  `permission_id` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `diagnosis`
--

CREATE TABLE `diagnosis` (
  `id` int NOT NULL,
  `user_id` int UNSIGNED DEFAULT NULL,
  `nama_penyakit` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `diagnosis`
--

INSERT INTO `diagnosis` (`id`, `user_id`, `nama_penyakit`, `tanggal`) VALUES
(15, 9, 'Retardasi Mental', '2023-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` int UNSIGNED NOT NULL,
  `gejala` varchar(300) NOT NULL,
  `kode_gejala` varchar(5) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `gejala`, `kode_gejala`, `created_at`, `updated_at`) VALUES
(1, 'Sering menderita sakit kepala', 'G1', NULL, NULL),
(2, 'Tidak memiliki nafsu makan', 'G2', NULL, NULL),
(3, 'Sulit tidur', 'G3', NULL, NULL),
(4, 'Mudah takut', 'G4', NULL, NULL),
(5, 'Merasa tegang, cemas atau kuatir', 'G5', NULL, NULL),
(6, 'Tangan gemetar', 'G6', NULL, NULL),
(7, 'Pencernaan terganggu/buruk', 'G7', NULL, NULL),
(8, 'Sulit untuk berpikir jernih', 'G8', NULL, NULL),
(9, 'Merasa tidak bahagia', 'G9', NULL, NULL),
(10, 'Menangis lebih sering', 'G10', NULL, NULL),
(11, 'Sulit menjalani aktivitas sehari-hari secara normal', 'G11', NULL, NULL),
(12, 'Sulit untuk mengambil keputusan', 'G12', NULL, NULL),
(13, 'Pekerjaan terganggu', 'G13', NULL, NULL),
(14, 'Tidak mampu melakukan hal-hal yang bermanfaat dalam hidup', 'G14', NULL, NULL),
(15, 'Kehilangan minat pada berbagai hal', 'G15', NULL, NULL),
(16, 'Merasa tidak berharga', 'G16', NULL, NULL),
(17, 'Memiliki pikiran untuk mengakhiri hidup', 'G17', NULL, NULL),
(18, 'Merasa lelah sepanjang waktu', 'G18', NULL, NULL),
(19, 'Mengalami rasa tidak enak di perut', 'G19', NULL, NULL),
(20, 'Mudah lelah', 'G20', NULL, NULL),
(21, 'Merasa kesulitan dalam pengendalian emosi, seperti mudah marah', 'G21', NULL, NULL),
(22, 'Mengalami gangguan dalam berbicara, atau sering telat dalam berbicara', 'G22', NULL, '2023-12-03 14:36:48'),
(25, 'Tantrum Banget', 'G23', '2023-12-19 04:30:24', '2023-12-19 04:32:31');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int NOT NULL,
  `batch` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2023-12-01-100352', 'App\\Database\\Migrations\\Migration1', 'default', 'App', 1701438134, 1),
(4, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1701663223, 2);

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id_penyakit` int UNSIGNED NOT NULL,
  `kode_penyakit` varchar(5) NOT NULL,
  `nama_penyakit` varchar(200) NOT NULL,
  `penjelasan` varchar(5000) NOT NULL,
  `gejala` varchar(5000) NOT NULL,
  `penanganan` varchar(5000) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `kode_penyakit`, `nama_penyakit`, `penjelasan`, `gejala`, `penanganan`, `created_at`, `updated_at`) VALUES
(10, 'P1', 'Gangguan Mental Organik', '', '', '', NULL, NULL),
(11, 'P2', 'Gangguan Penggunaan NAPZA (Alkohol, zat dan tembakau)', '', '', '', NULL, NULL),
(12, 'P3', 'Skizofrenia dan Gangguan Psikotik Kronik Lain', '', '', '', NULL, NULL),
(13, 'P4', 'Gangguan Psikotik Akut', '', '', '', NULL, NULL),
(14, 'P5', 'Gangguan Bipolar', '', '', '', NULL, NULL),
(15, 'P6', 'Gangguan Depresi', '', '', '', NULL, NULL),
(16, 'P7', 'Gangguan Neurotik (ansietas) (Panik, ansietas menyeluruh, campuran ansietas dan depresi, obsesif kompulsif, penyesuaian, somatoform)', '', '', '', NULL, NULL),
(17, 'P8', 'Retardasi Mental', '', '', '', NULL, NULL),
(18, 'P9', 'Gangguan kesehatan jiwa anak dan remaja (perkembangan pervasif dan hiperkinetik)', '', '', '', NULL, '2023-12-03 14:46:36');

-- --------------------------------------------------------

--
-- Table structure for table `rule`
--

CREATE TABLE `rule` (
  `id_rule` int UNSIGNED NOT NULL,
  `kode_rule` varchar(5) NOT NULL,
  `kode_gejala` varchar(1000) NOT NULL,
  `kode_penyakit` varchar(5) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `rule`
--

INSERT INTO `rule` (`id_rule`, `kode_rule`, `kode_gejala`, `kode_penyakit`, `created_at`, `updated_at`) VALUES
(1, 'R1', 'G1 and G5 and G8 and G11 and G12', 'P1', NULL, NULL),
(2, 'R2', 'G3 and G5 and G7 and G14 and G18 and G19 and G20', 'P2', NULL, NULL),
(3, 'R3', 'G3 and G4 and G8 and G9 and G11 and G12 and G13 and G14 and G15', 'P3', NULL, NULL),
(4, 'R4', 'G2 and G3 and G5 and G8 and G9 and G14 and G15 and G16 and G17', 'P4', NULL, NULL),
(5, 'R5', 'G2 and G3 and G5 and G9 and G11 and G12 and G13 and G14 and G15 and G16 and G17', 'P5', NULL, NULL),
(6, 'R6', 'G1 and G2 and G5 and G8 and G9 and G11 and G15 and G16 and G20', 'P6', NULL, NULL),
(7, 'R7', 'G4 and G5 and G7 and G8 and G16', 'P7', NULL, NULL),
(8, 'R8', 'G21 and G22', 'P8', NULL, NULL),
(9, 'R9', 'G1 and G2 and G4 and G5 and G8 and G9 and G12 and G15 and G17 and G21', 'P9', NULL, NULL),
(11, 'R10', 'G3 and G4', 'P1', '2023-12-19 04:28:20', '2023-12-19 04:33:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(9, 'dafahanid@gmail.com', 'dafahan', '$2y$10$cIJ9fCpecejiMU5xGumMlOWADKheBkERaB8iVsAVQqHmkSdi0o91K', NULL, NULL, NULL, '497e6ff7dd2864aecacea1f7c9effc0e', NULL, NULL, 1, 0, '2023-12-04 14:38:54', '2023-12-04 14:38:54', NULL),
(10, 'dafahanreg@gmail.com', 'dafa', '$2y$10$CPNOUc/6Ez05wkURENmST.bNI.FhBcp3snzJUSy/7HOYfGCLLhQu.', NULL, NULL, NULL, '7f889594b45368df71b96bf1bc569896', NULL, NULL, 1, 0, '2023-12-04 16:30:31', '2023-12-04 16:30:31', NULL),
(11, 'admin@ad.min', 'admin', '$2y$10$YLx8OO7YTymaELNm2ZXCnOmqvdO6XIS2qPI1UPcifoyW/2orpO2UW', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-12-19 04:06:44', '2023-12-19 04:06:44', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `diagnosis`
--
ALTER TABLE `diagnosis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indexes for table `rule`
--
ALTER TABLE `rule`
  ADD PRIMARY KEY (`id_rule`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `diagnosis`
--
ALTER TABLE `diagnosis`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id_gejala` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id_penyakit` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `rule`
--
ALTER TABLE `rule`
  MODIFY `id_rule` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `diagnosis`
--
ALTER TABLE `diagnosis`
  ADD CONSTRAINT `diagnosis_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
