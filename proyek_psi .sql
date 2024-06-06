-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jun 2024 pada 08.54
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyek_psi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `homestays`
--

CREATE TABLE `homestays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `features` longtext NOT NULL,
  `room_size` varchar(255) NOT NULL,
  `occupancy` varchar(255) NOT NULL,
  `view` varchar(255) NOT NULL,
  `smoking` varchar(255) NOT NULL,
  `bed_size` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `room_service` varchar(255) NOT NULL,
  `swimming_pool` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `available` enum('true','false') NOT NULL DEFAULT 'true',
  `status` varchar(255) NOT NULL DEFAULT 'true',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `homestays`
--

INSERT INTO `homestays` (`id`, `user_id`, `name`, `slug`, `description`, `features`, `room_size`, `occupancy`, `view`, `smoking`, `bed_size`, `location`, `room_service`, `swimming_pool`, `price`, `available`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Boraspati Homestay', 'boraspati-homestay', 'Rasakan kedamaian dan keindahan alam di Boraspati Homestay, tempat menginap yang menawarkan pemandangan pedesaan dan persawahan yang memukau. Nikmati udara segar dan suasana tenang jauh dari hiruk pikuk kota, dengan fasilitas lengkap dan pelayanan ramah yang akan membuat Anda merasa nyaman. Pesan sekarang di Boraspati Homestay untuk liburan yang penuh kenangan indah!', 'Rumah Utuh yang Nyaman: Menyediakan satu rumah utuh dengan ruang tamu yang luas, kamar tidur yang nyaman, dapur yang dilengkapi, dan kamar mandi bersih. Lokasi Strategis: Terletak di pusat kota Balige, dengan akses mudah ke berbagai tempat wisata dan fasilitas umum. Pemandangan Indah: Nikmati pemandangan alam yang menakjubkan dari homestay, termasuk pemandangan Danau Toba yang memukau. Fasilitas Lengkap: Dilengkapi dengan fasilitas seperti AC, TV kabel, WiFi gratis, dan parkir yang aman. Kemudahan Berbelanja: Dekat dengan pasar tradisional dan toko-toko lokal untuk memenuhi kebutuhan Anda selama menginap. Pelayanan Ramah: Staf yang ramah dan siap membantu untuk memastikan pengalaman menginap Anda menjadi yang terbaik.', '6 X 9 m', 'Up to 5 Adults', 'Village and Rice Field View', 'No', 'Standard', 'Jl. Sibola Hotang No.29, Kec. Balige, Toba, Sumatera Utara 22312', 'yes', 'No', 200000, 'true', 'true', '2024-06-05 21:14:26', '2024-06-05 21:14:26'),
(2, 2, 'Chantika Homestay', 'chantika-homestay', 'Nikmati ketenangan dan keindahan di Chantika Homestay, tempat sempurna dengan pemandangan pedesaan dan persawahan yang memanjakan mata. Rasakan suasana damai dan alami, dilengkapi dengan fasilitas terbaik dan pelayanan hangat yang membuat Anda merasa seperti di rumah sendiri. Pesan sekarang di Chantika Homestay untuk liburan yang menenangkan dan tak terlupakan!', 'Rumah Utuh yang Nyaman: Menyediakan satu rumah utuh dengan ruang tamu yang luas, kamar tidur yang nyaman, dapur yang dilengkapi, dan kamar mandi bersih. Lokasi Strategis: Terletak di pusat kota Balige, dengan akses mudah ke berbagai tempat wisata dan fasilitas umum. Pemandangan Indah: Nikmati pemandangan alam yang menakjubkan dari homestay, termasuk pemandangan Danau Toba yang memukau. Fasilitas Lengkap: Dilengkapi dengan fasilitas seperti AC, TV kabel, WiFi gratis, dan parkir yang aman. Kemudahan Berbelanja: Dekat dengan pasar tradisional dan toko-toko lokal untuk memenuhi kebutuhan Anda selama menginap. Pelayanan Ramah: Staf yang ramah dan siap membantu untuk memastikan pengalaman menginap Anda menjadi yang terbaik.', '30 x 40 m', 'Up to 7 Adults', 'Village and Rice Field View', 'No', 'Deluxe', 'Sibola Hotangsas, Kec. Balige, Toba, Sumatera Utara 22312', 'yes', 'No', 400000, 'true', 'true', '2024-06-05 21:17:01', '2024-06-05 21:17:01'),
(3, 2, 'Martogi Homestay', 'martogi-homestay', 'Temukan ketenangan di Martogi Homestay, tempat sempurna untuk menikmati pemandangan pedesaan dan persawahan yang asri. Rasakan kedamaian dan keindahan alam, lengkap dengan fasilitas modern dan pelayanan ramah yang membuat Anda merasa nyaman. Pesan sekarang di Martogi Homestay untuk pengalaman liburan yang menenangkan dan penuh kenangan!', 'Rumah Utuh yang Nyaman: Menyediakan satu rumah utuh dengan ruang tamu yang luas, kamar tidur yang nyaman, dapur yang dilengkapi, dan kamar mandi bersih. Lokasi Strategis: Terletak di pusat kota Balige, dengan akses mudah ke berbagai tempat wisata dan fasilitas umum. Pemandangan Indah: Nikmati pemandangan alam yang menakjubkan dari homestay, termasuk pemandangan Danau Toba yang memukau. Fasilitas Lengkap: Dilengkapi dengan fasilitas seperti AC, TV kabel, WiFi gratis, dan parkir yang aman. Kemudahan Berbelanja: Dekat dengan pasar tradisional dan toko-toko lokal untuk memenuhi kebutuhan Anda selama menginap. Pelayanan Ramah: Staf yang ramah dan siap membantu untuk memastikan pengalaman menginap Anda menjadi yang terbaik.', '10 X 15 m', 'Up to 7 Adults', 'Village and Rice Field View', 'No', 'Reguler Size', 'Huta Simangunsong, pantai, Lumban Bulbul, Kec. Balige, Sumatera Utara', 'yes', 'No', 500000, 'true', 'true', '2024-06-05 21:21:01', '2024-06-05 21:21:01'),
(4, 4, 'Juwita Homestay', 'juwita-homestay', 'Nikmati ketenangan di Juwita Homestay, tempat sempurna dengan pemandangan pedesaan dan persawahan yang memanjakan mata. Rasakan suasana damai dan alami, dilengkapi dengan fasilitas terbaik dan pelayanan hangat yang membuat Anda merasa seperti di rumah sendiri. Pesan sekarang di Juwita Homestay untuk liburan yang menenangkan dan tak terlupakan!\', \'Rumah Utuh yang Nyaman: Menyediakan satu rumah utuh dengan ruang tamu yang luas, kamar tidur yang nyaman, dapur yang dilengkapi, dan kamar mandi bersih. Lokasi Strategis: Terletak di pusat kota Balige, dengan akses mudah ke berbagai tempat wisata dan fasilitas umum. Pemandangan Indah: Nikmati pemandangan alam yang menakjubkan dari homestay, termasuk pemandangan Danau Toba yang memukau. Fasilitas Lengkap: Dilengkapi dengan fasilitas seperti AC, TV kabel, WiFi gratis, dan parkir yang aman. Kemudahan Berbelanja: Dekat dengan pasar tradisional dan toko-toko lokal untuk memenuhi kebutuhan Anda selama menginap. Pelayanan Ramah: Staf yang ramah dan siap membantu untuk memastikan pengalaman menginap Anda menjadi yang terbaik.', 'Rumah Utuh yang Nyaman: Menyediakan satu rumah utuh dengan ruang tamu yang luas, kamar tidur yang nyaman, dapur yang dilengkapi, dan kamar mandi bersih. Lokasi Strategis: Terletak di pusat kota Balige, dengan akses mudah ke berbagai tempat wisata dan fasilitas umum. Pemandangan Indah: Nikmati pemandangan alam yang menakjubkan dari homestay, termasuk pemandangan Danau Toba yang memukau. Fasilitas Lengkap: Dilengkapi dengan fasilitas seperti AC, TV kabel, WiFi gratis, dan parkir yang aman. Kemudahan Berbelanja: Dekat dengan pasar tradisional dan toko-toko lokal untuk memenuhi kebutuhan Anda selama menginap. Pelayanan Ramah: Staf yang ramah dan siap membantu untuk memastikan pengalaman menginap Anda menjadi yang terbaik.', '10 X 15 m', 'Up to 7 Adults', 'Village and Rice Field View', 'No', 'Reguler Size', 'Jl. Pematang Siantar - Parapat, Kec. Girsang Sipangan Bolon, Kabupaten Simalungun, Sumatera Utara', 'yes', 'No', 600000, 'true', 'false', '2024-06-05 21:23:52', '2024-06-05 21:24:22'),
(5, 4, 'Josua Homestay', 'josua-homestay', 'Nikmati ketenangan di Juwita Homestay, tempat sempurna dengan pemandangan pedesaan dan persawahan yang memanjakan mata. Rasakan suasana damai dan alami, dilengkapi dengan fasilitas terbaik dan pelayanan hangat yang membuat Anda merasa seperti di rumah sendiri. Pesan sekarang di Juwita Homestay untuk liburan yang menenangkan dan tak terlupakan!', 'Rumah Utuh yang Nyaman: Menyediakan satu rumah utuh dengan ruang tamu yang luas, kamar tidur yang nyaman, dapur yang dilengkapi, dan kamar mandi bersih. Lokasi Strategis: Terletak di pusat kota Balige, dengan akses mudah ke berbagai tempat wisata dan fasilitas umum. Pemandangan Indah: Nikmati pemandangan alam yang menakjubkan dari homestay, termasuk pemandangan Danau Toba yang memukau. Fasilitas Lengkap: Dilengkapi dengan fasilitas seperti AC, TV kabel, WiFi gratis, dan parkir yang aman. Kemudahan Berbelanja: Dekat dengan pasar tradisional dan toko-toko lokal untuk memenuhi kebutuhan Anda selama menginap. Pelayanan Ramah: Staf yang ramah dan siap membantu untuk memastikan pengalaman menginap Anda menjadi yang terbaik.', '10 X 15 m', 'Up to 7 Adults', 'Village and Rice Field View', 'No', 'Reguler Size', 'Jl. Pematang Siantar - Parapat, Kec. Girsang Sipangan Bolon, Kabupaten Simalungun, Sumatera Utara', 'yes', 'No', 600000, 'true', 'true', '2024-06-05 21:25:46', '2024-06-05 21:25:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `homestays_images`
--

CREATE TABLE `homestays_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `homestays_id` bigint(20) UNSIGNED NOT NULL,
  `image_location` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `homestays_images`
--

INSERT INTO `homestays_images` (`id`, `homestays_id`, `image_location`, `created_at`, `updated_at`) VALUES
(1, 1, 'img/homestay/boraspati-homestay/0.webp', '2024-06-05 21:14:27', '2024-06-05 21:14:27'),
(2, 2, 'img/homestay/chantika-homestay/0.webp', '2024-06-05 21:17:01', '2024-06-05 21:17:01'),
(3, 3, 'img/homestay/martogi-homestay/0.webp', '2024-06-05 21:21:01', '2024-06-05 21:21:01'),
(4, 4, 'img/homestay/juwita-homestay/0.webp', '2024-06-05 21:23:52', '2024-06-05 21:23:52'),
(5, 5, 'img/homestay/josua-homestay/0.webp', '2024-06-05 21:25:46', '2024-06-05 21:25:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_04_25_091017_create_homestays_table', 1),
(5, '2024_04_25_091635_create_homestays_images_table', 1),
(6, '2024_04_25_092017_create_news_table', 1),
(7, '2024_04_25_094017_create_orders_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id`, `user_id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(5, 1, 'Tren Perjalanan Terbaru: Homestay Jadi Pilihan Populer Wisatawan', 'Homestay semakin populer di kalangan wisatawan yang mencari pengalaman lokal yang autentik. Menawarkan kenyamanan rumah serta interaksi langsung dengan tuan rumah, homestay menjadi alternatif menarik bagi akomodasi tradisional', 'img/news/tren-perjalanan-terbaru-homestay-jadi-pilihan-populer-wisatawan1717646721.png', '2024-06-05 21:05:21', '2024-06-05 21:05:21'),
(6, 1, 'Bisnis Homestay Meningkat Pesat: Pengusaha Mulai Investasi di Sektor Akomodasi Ini', 'Bisnis homestay sedang mengalami pertumbuhan pesat, dengan pengusaha yang semakin tertarik untuk berinvestasi di sektor akomodasi ini. Fleksibilitas, biaya rendah, dan permintaan yang meningkat membuat homestay menjadi pilihan menarik', 'img/news/bisnis-homestay-meningkat-pesat-pengusaha-mulai-investasi-di-sektor-akomodasi-ini1717646802.png', '2024-06-05 21:06:42', '2024-06-05 21:06:42'),
(7, 1, 'Homestay Berkonsep Ramah Lingkungan: Berbagai Inisiatif Menuju Akomodasi Berkelanjutan', 'Semakin banyak homestay yang mengadopsi konsep ramah lingkungan dengan memperkenalkan inisiatif-inisiatif berkelanjutan, seperti penggunaan energi terbarukan, daur ulang, dan produk lokal, sebagai upaya untuk mengurangi jejak karbon mereka', 'img/news/homestay-berkonsep-ramah-lingkungan-berbagai-inisiatif-menuju-akomodasi-berkelanjutan1717646854.png', '2024-06-05 21:07:34', '2024-06-05 21:07:34'),
(8, 1, 'Homestay di Era Digital: Platform Online Mempermudah Wisatawan Temukan Penginapan Lokal', 'Platform online telah mempermudah wisatawan untuk menemukan homestay yang sesuai dengan preferensi mereka. Dengan banyaknya pilihan dan ulasan dari pengguna sebelumnya, mencari akomodasi lokal menjadi lebih mudah dan transparan', 'img/news/homestay-di-era-digital-platform-online-mempermudah-wisatawan-temukan-penginapan-lokal1717646894.png', '2024-06-05 21:08:14', '2024-06-05 21:08:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `homestays_id` bigint(20) UNSIGNED NOT NULL,
  `check_in_date` date NOT NULL,
  `check_out_date` date NOT NULL,
  `people_count` varchar(255) NOT NULL,
  `total` int(11) NOT NULL,
  `bukti_bayar` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `homestays_id`, `check_in_date`, `check_out_date`, `people_count`, `total`, `bukti_bayar`, `status`, `created_at`, `updated_at`) VALUES
(1, 6, 5, '2024-06-14', '2024-06-15', '2', 1200000, NULL, 'Belum Verifikasi', '2024-06-05 23:42:20', '2024-06-05 23:42:20'),
(2, 7, 2, '2024-06-07', '2024-06-08', '2', 800000, NULL, 'Belum Verifikasi', '2024-06-05 23:48:04', '2024-06-05 23:48:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','owner','user') NOT NULL DEFAULT 'user',
  `verified` enum('true','false') NOT NULL DEFAULT 'false',
  `no_hp` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `verified`, `no_hp`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$jv84/ZDQlWlN0LdVTC66ru2TY8cuSHz/kCCF9GXZafcpFCl4TGXQW', 'admin', 'true', '081200101010', NULL, '2024-06-05 20:55:03', '2024-06-05 20:55:03'),
(2, 'Lusi Simangungsong', 'lusisimangunsong@gmail.com', NULL, '$2y$12$/gGswo6SITpA5QMr4pwAVeHoud/LQAaLUIrA78JwiRA04feJTBv9.', 'owner', 'true', '6281269019075', NULL, '2024-06-05 20:56:47', '2024-06-05 21:08:47'),
(3, 'Mona Napitupulu', 'monanapitupulu@gmail.com', NULL, '$2y$12$SCtbzUAdr4mfcjNJ3Jnds.rOh5uBxomhxgyZ4MQBqGz9WeQ2JhwOu', 'owner', 'false', '6282297828564', NULL, '2024-06-05 20:57:41', '2024-06-05 20:57:41'),
(4, 'Mariana Pangaribuan', 'chantikahomestay@gmail.com', NULL, '$2y$12$/uC36rvDut5luJQ0sFLjaetN2r09CErfYYj453WqYVFCTNRO36ChK', 'owner', 'true', '6281396565840', NULL, '2024-06-05 20:58:39', '2024-06-05 21:08:50'),
(5, 'Adrian Simangungsong', 'adriansimangunsong@gmail.com', NULL, '$2y$12$2RiNGM59K2NXzM4kGVp5v.dTOJ4F4BHfPpuw0VLxcHdtHWrpFCzdi', 'owner', 'false', '6285270676454', NULL, '2024-06-05 20:59:28', '2024-06-05 20:59:28'),
(6, 'Jaden', 'jadenowen211@gmail.com', NULL, '$2y$12$FUYmnNxhmZTp5BHKvUBV5u2lzsi/tQSaIgtHUFcOGPuaoClCs2fO2', 'user', 'true', '6281360456787', NULL, '2024-06-05 23:32:25', '2024-06-05 23:32:25'),
(7, 'Nando', 'nando@gmail.com', NULL, '$2y$12$m09PlcnbNv688qF0KykH9e/H9b8hgNhb3YTgSx0OvUfLUP0CaxxFm', 'user', 'true', '6281200903030', NULL, '2024-06-05 23:43:44', '2024-06-05 23:43:44');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `homestays`
--
ALTER TABLE `homestays`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `homestays_slug_unique` (`slug`),
  ADD KEY `homestays_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `homestays_images`
--
ALTER TABLE `homestays_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `homestays_images_homestays_id_foreign` (`homestays_id`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_homestays_id_foreign` (`homestays_id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `homestays`
--
ALTER TABLE `homestays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `homestays_images`
--
ALTER TABLE `homestays_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `homestays`
--
ALTER TABLE `homestays`
  ADD CONSTRAINT `homestays_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `homestays_images`
--
ALTER TABLE `homestays_images`
  ADD CONSTRAINT `homestays_images_homestays_id_foreign` FOREIGN KEY (`homestays_id`) REFERENCES `homestays` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_homestays_id_foreign` FOREIGN KEY (`homestays_id`) REFERENCES `homestays` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
