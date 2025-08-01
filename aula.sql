-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 01 Agu 2025 pada 09.55
-- Versi server: 8.0.31
-- Versi PHP: 8.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aula`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `details`
--

DROP TABLE IF EXISTS `details`;
CREATE TABLE IF NOT EXISTS `details` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `pesanan_id` bigint UNSIGNED NOT NULL,
  `varian_id` bigint UNSIGNED NOT NULL,
  `jumlah` int NOT NULL,
  `sub_total` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `details`
--

INSERT INTO `details` (`id`, `pesanan_id`, `varian_id`, `jumlah`, `sub_total`, `created_at`, `updated_at`) VALUES
(15, 11, 4, 2, 4578000, '2025-07-28 08:30:01', '2025-07-28 08:30:01'),
(14, 11, 22, 3, 1134000, '2025-07-28 08:30:01', '2025-07-28 08:30:01'),
(13, 11, 17, 1, 948000, '2025-07-28 08:30:01', '2025-07-28 08:30:01'),
(21, 15, 26, 5, 4575000, '2025-07-31 13:15:35', '2025-07-31 13:15:35'),
(20, 14, 12, 1, 479000, '2025-07-31 13:15:17', '2025-07-31 13:15:17'),
(19, 14, 16, 2, 2694000, '2025-07-31 13:15:17', '2025-07-31 13:15:17'),
(18, 13, 33, 9, 3303000, '2025-07-31 13:14:49', '2025-07-31 13:14:49'),
(17, 12, 16, 1, 1347000, '2025-07-28 12:34:03', '2025-07-28 12:34:03'),
(16, 12, 1, 2, 4578000, '2025-07-28 12:34:03', '2025-07-28 12:34:03'),
(12, 10, 9, 2, 1490000, '2025-07-28 07:24:46', '2025-07-28 07:24:46'),
(11, 9, 10, 1, 479000, '2025-07-26 13:32:54', '2025-07-26 13:32:54'),
(22, 15, 32, 2, 1790000, '2025-07-31 13:15:35', '2025-07-31 13:15:35'),
(23, 16, 22, 3, 1134000, '2025-07-31 13:26:50', '2025-07-31 13:26:50'),
(24, 17, 16, 3, 4041000, '2025-07-31 13:52:28', '2025-07-31 13:52:28'),
(25, 18, 7, 2, 2190000, '2025-07-31 15:18:17', '2025-07-31 15:18:17'),
(26, 18, 32, 1, 895000, '2025-07-31 15:18:17', '2025-07-31 15:18:17'),
(27, 19, 5, 1, 1095000, '2025-07-31 15:38:07', '2025-07-31 15:38:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `favorits`
--

DROP TABLE IF EXISTS `favorits`;
CREATE TABLE IF NOT EXISTS `favorits` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED NOT NULL,
  `produk_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `favorits`
--

INSERT INTO `favorits` (`id`, `user_id`, `produk_id`, `created_at`, `updated_at`) VALUES
(3, 2, 5, '2025-07-28 07:56:07', '2025-07-28 07:56:07'),
(2, 2, 6, '2025-07-26 14:44:46', '2025-07-26 14:44:46'),
(4, 2, 2, '2025-07-28 07:56:13', '2025-07-28 07:56:13'),
(5, 3, 4, '2025-07-28 12:32:14', '2025-07-28 12:32:14'),
(6, 2, 16, '2025-07-31 13:14:03', '2025-07-31 13:14:03'),
(7, 2, 19, '2025-07-31 13:14:06', '2025-07-31 13:14:06'),
(8, 5, 2, '2025-07-31 13:18:51', '2025-07-31 13:18:51'),
(9, 7, 2, '2025-07-31 13:50:34', '2025-07-31 13:50:34'),
(10, 7, 15, '2025-07-31 13:50:39', '2025-07-31 13:50:39'),
(11, 2, 1, '2025-07-31 15:17:23', '2025-07-31 15:17:23'),
(12, 2, 3, '2025-07-31 15:38:17', '2025-07-31 15:38:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fiturs`
--

DROP TABLE IF EXISTS `fiturs`;
CREATE TABLE IF NOT EXISTS `fiturs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `produk_id` bigint UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `fiturs`
--

INSERT INTO `fiturs` (`id`, `produk_id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 7, 'Mode Wired', '2025-07-23 09:07:16', '2025-07-23 09:07:16'),
(2, 7, 'multi-function knob', '2025-07-23 09:07:16', '2025-07-23 09:07:16'),
(3, 7, 'Regional light mixing', '2025-07-23 09:07:16', '2025-07-23 09:07:16'),
(4, 7, '104keys', '2025-07-23 09:07:16', '2025-07-23 09:07:16'),
(5, 7, 'Suitable for gaming, esports, and office use', '2025-07-23 09:07:16', '2025-07-23 09:07:16'),
(6, 6, 'Wireless tri-mode: BT / 2.4G / Wired', '2025-07-23 09:07:16', '2025-07-23 09:07:16'),
(7, 6, 'Gasket structure', '2025-07-23 09:07:16', '2025-07-23 09:07:16'),
(8, 6, 'Fully hot-swappable keys', '2025-07-23 09:07:16', '2025-07-23 09:07:16'),
(9, 6, 'Suitable for gaming, esports, and office use', '2025-07-23 09:07:16', '2025-07-23 09:07:16'),
(10, 3, 'mode: Wired', '2025-07-23 09:07:16', '2025-07-23 09:07:16'),
(11, 3, 'Suitable for gaming, esports, and office use', '2025-07-23 09:07:16', '2025-07-23 09:07:16'),
(12, 2, 'Wireless tri-mode: BT / 2.4G / Wired', '2025-07-23 09:07:16', '2025-07-23 09:07:16'),
(13, 2, 'Gasket structure', '2025-07-23 09:07:16', '2025-07-23 09:07:16'),
(14, 2, 'Fully hot-swappable keys', '2025-07-23 09:07:16', '2025-07-23 09:07:16'),
(15, 2, 'Suitable for gaming, esports, and office use', '2025-07-23 09:07:16', '2025-07-23 09:07:16'),
(16, 1, 'Wireless tri-mode: BT / 2.4G / Wired', '2025-07-23 09:07:16', '2025-07-31 13:55:00'),
(17, 1, 'Gasket structure', '2025-07-23 09:07:16', '2025-07-31 13:55:00'),
(18, 1, 'Fully hot-swappable keys', '2025-07-23 09:07:16', '2025-07-31 13:55:00'),
(19, 1, 'Suitable for gaming, esports, and office use', '2025-07-23 09:07:16', '2025-07-31 13:55:00'),
(20, 4, 'Wired', '2025-07-23 09:07:16', '2025-07-23 09:07:16'),
(21, 4, 'Magnetic Switch Keyboard', '2025-07-23 09:07:16', '2025-07-23 09:07:16'),
(22, 4, 'Extreme Response', '2025-07-23 09:07:16', '2025-07-23 09:07:16'),
(23, 5, 'Wired', '2025-07-23 09:07:16', '2025-07-23 09:07:16'),
(24, 5, 'Magnetic Switch Keyboard', '2025-07-23 09:07:16', '2025-07-23 09:07:16'),
(25, 5, 'Extreme Response', '2025-07-23 09:07:16', '2025-07-23 09:07:16'),
(26, 5, 'Suitable for gaming', '2025-07-23 09:07:16', '2025-07-23 09:07:16'),
(27, 10, 'Wired', '2025-07-30 09:16:18', '2025-07-30 09:16:18'),
(29, 15, 'Wireless tri-mode: BT / 2.4G / Wired', '2025-07-30 09:32:18', '2025-07-31 12:36:50'),
(31, 15, 'Gasket Structure', '2025-07-30 11:59:34', '2025-07-31 12:36:50'),
(35, 15, 'Suitable for gaming, esports, and office use', '2025-07-30 12:00:53', '2025-07-31 12:36:50'),
(36, 15, 'Fully hot-swappable keys', '2025-07-31 12:36:50', '2025-07-31 12:36:50'),
(37, 16, 'Wireless tri-mode: BT / 2.4G / Wired', '2025-07-31 12:42:09', '2025-07-31 12:42:09'),
(38, 16, 'Boat-shaped keyboard shell', '2025-07-31 12:42:09', '2025-07-31 12:42:09'),
(39, 16, 'Fully hot-swappable keys', '2025-07-31 12:42:09', '2025-07-31 12:42:09'),
(40, 16, 'Suitable for gaming, esports, and office use', '2025-07-31 12:42:09', '2025-07-31 12:42:09'),
(41, 17, 'Wired', '2025-07-31 12:46:00', '2025-07-31 12:50:48'),
(42, 17, 'multi-function knob', '2025-07-31 12:46:00', '2025-07-31 12:50:48'),
(43, 17, 'Regional light mixing', '2025-07-31 12:46:00', '2025-07-31 12:50:48'),
(44, 17, 'Suitable for gaming, esports, and office use', '2025-07-31 12:46:00', '2025-07-31 12:50:48'),
(45, 18, 'Wired', '2025-07-31 12:50:05', '2025-07-31 12:51:03'),
(46, 18, 'Multi-function knob', '2025-07-31 12:50:05', '2025-07-31 12:51:03'),
(47, 18, 'Regional light mixing', '2025-07-31 12:50:05', '2025-07-31 12:51:03'),
(48, 18, 'Suitable for gaming, esports, and office use', '2025-07-31 12:50:05', '2025-07-31 12:51:03'),
(49, 19, 'Wireless tri-mode: BT / 2.4G / Wired', '2025-07-31 12:54:43', '2025-07-31 12:54:43'),
(50, 19, 'Gasket structure', '2025-07-31 12:54:43', '2025-07-31 12:54:43'),
(51, 19, 'Fully hot-swappable keys', '2025-07-31 12:54:43', '2025-07-31 12:54:43'),
(52, 19, 'Suitable for gaming, esports, and office use', '2025-07-31 12:54:43', '2025-07-31 12:54:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjangs`
--

DROP TABLE IF EXISTS `keranjangs`;
CREATE TABLE IF NOT EXISTS `keranjangs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED NOT NULL,
  `varian_id` bigint UNSIGNED NOT NULL,
  `jumlah` int NOT NULL,
  `dipilih` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `keranjangs`
--

INSERT INTO `keranjangs` (`id`, `user_id`, `varian_id`, `jumlah`, `dipilih`, `created_at`, `updated_at`) VALUES
(23, 5, 19, 2, 0, '2025-07-31 13:26:33', '2025-07-31 13:26:33'),
(13, 3, 19, 3, 0, '2025-07-28 12:32:47', '2025-07-28 12:32:47'),
(12, 3, 5, 1, 0, '2025-07-28 12:32:35', '2025-07-28 12:32:35'),
(26, 7, 5, 1, 0, '2025-07-31 13:52:02', '2025-07-31 13:52:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_07_23_105817_create_produks_table', 1),
(6, '2025_07_23_110000_create_varians_table', 1),
(7, '2025_07_23_110026_create_fiturs_table', 1),
(8, '2025_07_23_110048_create_keranjangs_table', 1),
(9, '2025_07_23_110108_create_pesanans_table', 1),
(10, '2025_07_23_110116_create_details_table', 1),
(11, '2025_07_23_110148_create_favorits_table', 1),
(12, '2025_07_23_110713_create_roles_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanans`
--

DROP TABLE IF EXISTS `pesanans`;
CREATE TABLE IF NOT EXISTS `pesanans` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED NOT NULL,
  `status` enum('disiapkan','dikirim','selesai') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `total` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pesanans`
--

INSERT INTO `pesanans` (`id`, `user_id`, `status`, `tanggal`, `total`, `created_at`, `updated_at`) VALUES
(11, 2, 'selesai', '2025-07-28', 6688000, '2025-07-28 08:30:01', '2025-07-31 15:18:46'),
(12, 3, 'dikirim', '2025-07-28', 5953000, '2025-07-28 12:34:03', '2025-07-31 15:19:46'),
(10, 2, 'selesai', '2025-07-28', 1518000, '2025-07-28 07:24:46', '2025-07-28 07:24:46'),
(17, 7, 'disiapkan', '2025-07-31', 4069000, '2025-07-31 13:52:28', '2025-07-31 13:52:28'),
(16, 5, 'dikirim', '2025-07-31', 1162000, '2025-07-31 13:26:50', '2025-07-31 15:39:48'),
(15, 2, 'selesai', '2025-07-31', 6393000, '2025-07-31 13:15:35', '2025-07-31 13:57:12'),
(14, 2, 'selesai', '2025-07-31', 3201000, '2025-07-31 13:15:17', '2025-07-31 15:38:50'),
(13, 2, 'disiapkan', '2025-07-31', 3331000, '2025-07-31 13:14:49', '2025-07-31 13:14:49'),
(9, 2, 'selesai', '2025-07-26', 507000, '2025-07-26 13:32:54', '2025-07-31 12:22:35'),
(18, 2, 'disiapkan', '2025-07-31', 3113000, '2025-07-31 15:18:17', '2025-07-31 15:18:17'),
(19, 2, 'dikirim', '2025-07-31', 1123000, '2025-07-31 15:38:07', '2025-07-31 15:39:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produks`
--

DROP TABLE IF EXISTS `produks`;
CREATE TABLE IF NOT EXISTS `produks` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int NOT NULL,
  `layout` enum('60%','65%','75%','80%','95%','100%') COLLATE utf8mb4_unicode_ci NOT NULL,
  `knob` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `produks`
--

INSERT INTO `produks` (`id`, `nama`, `deskripsi`, `harga`, `layout`, `knob`, `created_at`, `updated_at`) VALUES
(1, 'AULA-LEOBOG A75 Gasket Mechanical', 'Keyboard mechanical dengan desain gasket mount yang memberikan sensasi mengetik lembut dan stabil, cocok untuk gaming dan produktivitas.', 2289000, '75%', 1, NULL, NULL),
(2, 'AULA-LEOBOG K81 Gasket Mechanical', 'keyboard mechanical layout dengan desain gasket mount yang menghadirkan pengalaman mengetik lebih halus dan senyap.', 1095000, '80%', 1, NULL, NULL),
(3, 'AULA F3061 Wired Mechanical', 'Keyboard mechanical berdesain ringkas dengan koneksi kabel, ideal untuk pengguna yang membutuhkan setup minimalis dan respons cepat.', 745000, '60%', 0, NULL, NULL),
(4, 'AULA WIN60HE Magnetic Switch', 'Keyboard dengan switch magnetik berpresisi tinggi dan fitur pengaturan aktuasi, memberikan pengalaman mengetik dan gaming yang sangat responsif.', 479000, '65%', 0, NULL, NULL),
(5, 'AULA-LEOBOG AMG65 Gasket Mechanical', 'Keyboard mechanical layout dengan mounting gasket, menggabungkan kenyamanan mengetik dengan ukuran compact yang tetap fungsional.', 1347000, '60%', 0, NULL, NULL),
(6, 'AULA F98 PRO Custom Mechanical', 'keyboard mechanical custom kelas menengah ke atas dengan desain gasket yang nyaman, layar & knob kontrol praktis, pilihan konektivitas fleksibel, serta estetika modern melalui keycaps dan RGB.', 948000, '95%', 1, NULL, NULL),
(7, 'AULA F2088 Mechanical Wired', 'keyboard mechanical full-size dengan koneksi kabel yang stabil, dilengkapi numpad dan fitur RGB.', 378000, '100%', 1, NULL, NULL),
(16, 'AULA S100Pro Mechanical', 'keyboard mekanikal 95% (99‑key) dengan desain “boat‑shaped shell” dan konektivitas tri‑mode (Bluetooth, 2.4 GHz, dan kabel) yang menawarkan fleksibilitas untuk gaming maupun penggunaan harian', 1168898, '95%', 0, '2025-07-31 12:42:09', '2025-07-31 12:42:09'),
(15, 'AULA-AU75 Gasket 3 in 1 Mechanical', 'keyboard mekanikal dengan desain compact 75% yang dilengkapi sistem gasket mount untuk kenyamanan dan stabilitas saat mengetik. Keyboard ini mendukung tiga mode koneksi—kabel, Bluetooth, dan 2.4GHz wireless—memberikan fleksibilitas tinggi untuk berbagai perangkat.', 915000, '75%', 1, '2025-07-30 09:32:17', '2025-07-31 12:36:50'),
(17, 'AULA F2088 Mechanical', 'keyboard mekanikal full‑size 104‑key dengan tampilan gaya typewriter retro punk yang menampilkan keycaps bulat tipe steampunk, cocok untuk kamu yang suka estetika klasik modern. Keyboard ini menggunakan switch clicky (biasanya blue switch) untuk respons cepat dan suara ketik yang memuaskan.', 895000, '75%', 1, '2025-07-31 12:46:00', '2025-07-31 12:50:48'),
(18, 'AULA F2058 USB Gaming', 'keyboard gaming kabel full‑size (104/108 tombol) dengan desain futuristik dan bodi metal berwarna hitam brushed yang kokoh. Keyboard ini dilengkapi dengan rotary knob multifungsi — dapat dialihkan antara kontrol volume dan mode efek lampu — serta backlight LED biru dengan beberapa efek seperti wave, breathing, rifle, dan ripple', 367000, '75%', 1, '2025-07-31 12:50:05', '2025-07-31 12:51:03'),
(19, 'AULA F87 Gasket Mechanical', 'keyboard mekanikal 87‑key (layout TKL ~80 %) dengan struktur gasket-mount yang menghadirkan sensasi mengetik lembut dan empuk, didukung oleh lapisan peredam suara lima tingkat dan PCB hot‑swappable untuk fleksibilitas penggantian switch tanpa solder.', 934998, '80%', 0, '2025-07-31 12:54:43', '2025-07-31 12:54:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2025-07-23 07:24:09', '2025-07-23 07:24:09'),
(2, 'User', '2025-07-23 07:24:09', '2025-07-23 07:24:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_id` bigint UNSIGNED NOT NULL,
  `img` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `role_id`, `img`, `name`, `alamat`, `nomor`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin.png', 'admin', 'Surabaya', '08123009876', 'admin@gmail.com', '$2y$12$rISjbNoLL9ehOxuxsJ9.vesxXump/6IMCcLqJ16mdcQtf7RpJfdD.', NULL, NULL, NULL),
(2, 2, '1753727330.png', 'Hanifa Jauza Apsarii', 'Jl. Ketintang, Ketintang, Kec. Gayungan, Surabaya, Jawa Timur 60232', '08123009856', 'hani@gmail.com', '$2y$12$IroYJh90S6Ub9CppicxJCu8ZYlEc05srev2Vv28yqNBw63UjQ8NMu', NULL, NULL, '2025-07-31 15:38:33'),
(3, 2, '1677652151.png', 'Putri', 'Jl. Blabla, Surabaya', '076587875596', 'putri@gmail.com', '$2y$12$o7IrLB7cqafaALUmXof30.LHfVGuUte.mqLFwmoFzmdKBB9H/n/.m', NULL, '2025-07-28 12:31:15', '2025-07-28 12:31:15'),
(5, 2, 'abdul.png', 'Fatih', 'Jl. A Yani Frontage Barat No.16-18, Wonokromo, Kec. Wonokromo, Surabaya, Jawa Timur 60243', '0854328768', 'fatih@gmail.com', '$2y$12$I4f08nNqOMNhkhZC4spLb.mgLQGkbI9.p2oi4LcCw7z8sk7VcSgyu', NULL, '2025-07-31 13:17:43', '2025-07-31 13:17:43'),
(7, 2, '1676441773.png', 'Hanifa Jauza A', 'Jl. A Yani Frontage Barat No.16-18, Wonokromo, Kec. Wonokromo, Surabaya, Jawa Timur 60243', '0867543287', 'hanifa@gmail.com', '$2y$12$weIBA2BrxdzkeaccbSjxMOEx3saaZescE628Fgi8JadZXVxeXvncy', NULL, '2025-07-31 13:50:12', '2025-07-31 13:53:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `varians`
--

DROP TABLE IF EXISTS `varians`;
CREATE TABLE IF NOT EXISTS `varians` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `produk_id` bigint UNSIGNED NOT NULL,
  `warna` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `varians`
--

INSERT INTO `varians` (`id`, `produk_id`, `warna`, `img`, `stok`, `created_at`, `updated_at`) VALUES
(1, 1, 'Cream', 'a75-cream.png', 2, NULL, '2025-07-28 12:34:03'),
(2, 1, 'Pink', 'a75-pink.png', 9, NULL, '2025-07-31 13:55:00'),
(3, 1, 'Black', 'a75-black.png', 9, NULL, NULL),
(4, 1, 'Cream Blue', 'a75-blue.png', 14, NULL, '2025-07-28 08:30:01'),
(5, 2, 'White Blue', 'k81-blue.png', 15, NULL, '2025-07-31 15:38:07'),
(6, 2, 'Black Green', 'k81-black.png', 5, NULL, NULL),
(7, 2, 'Pink', 'k81-pink.png', 17, NULL, '2025-07-31 15:18:17'),
(8, 3, 'Pink', 'f3061-pink.png', 19, NULL, NULL),
(9, 3, 'Black', 'f3061-black.png', 17, NULL, '2025-07-28 07:24:46'),
(10, 4, 'Black', 'win60he-black.png', 19, NULL, NULL),
(11, 4, 'Black Red', 'win60he-red.png', 19, NULL, NULL),
(12, 4, 'White Blue', 'win60he-blue.png', 18, NULL, '2025-07-31 13:15:17'),
(13, 4, 'Gray Yellow', 'win60he-gray.png', 19, NULL, NULL),
(14, 5, 'Gray Yellow', 'amg65-gray.png', 19, NULL, NULL),
(15, 5, 'Black Purple', 'amg65-black.png', 19, NULL, NULL),
(16, 5, 'Pink Blue', 'amg65-pink.png', 13, NULL, '2025-07-31 13:52:28'),
(17, 6, 'Black Green', 'f98-green.png', 18, NULL, '2025-07-28 08:30:01'),
(18, 6, 'Black Transparant', 'f98-black.png', 19, NULL, NULL),
(19, 6, 'Blue Orange', 'f98-blue.png', 19, NULL, NULL),
(20, 6, 'Gray Transparant', 'f98-gray.png', 19, NULL, NULL),
(21, 6, 'Cream', 'f98-cream.png', 19, NULL, NULL),
(22, 7, 'White Yellow', 'f2088-white.png', 13, NULL, '2025-07-31 13:26:50'),
(30, 16, 'White Purple', '1753990929_1.png', 14, '2025-07-31 12:42:09', '2025-07-31 12:42:09'),
(26, 15, 'Purple Retro', '1753990610_edit_26.png', 2, '2025-07-30 09:32:18', '2025-07-31 13:15:35'),
(29, 16, 'White Black', '1753990929_0.png', 28, '2025-07-31 12:42:09', '2025-07-31 12:42:09'),
(28, 15, 'Black Yellow', '1753990610_edit_28.png', 9, '2025-07-30 11:56:23', '2025-07-31 12:36:50'),
(31, 16, 'Black Orange', '1753990929_2.png', 33, '2025-07-31 12:42:09', '2025-07-31 12:42:09'),
(32, 17, 'Black Retro', '1753991160_0.png', 41, '2025-07-31 12:46:00', '2025-07-31 15:18:17'),
(33, 18, 'Black', '1753991405_0.png', 6, '2025-07-31 12:50:05', '2025-07-31 13:14:49'),
(34, 19, 'White Purple', '1753991683_0.png', 9, '2025-07-31 12:54:43', '2025-07-31 12:54:43'),
(35, 19, 'White', '1753991683_1.png', 18, '2025-07-31 12:54:43', '2025-07-31 12:54:43'),
(36, 19, 'Black White', '1753991683_2.png', 26, '2025-07-31 12:54:43', '2025-07-31 12:54:43');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
