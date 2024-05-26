-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Bulan Mei 2024 pada 15.38
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kia_project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_02_103755_create_suratmasuk_table', 1),
(6, '2022_11_15_084103_create_suratkeluar_table', 1),
(7, '2023_01_01_222102_create_template_table', 1),
(8, '2023_11_09_131855_create_data_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `suratkeluar`
--

CREATE TABLE `suratkeluar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_surat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(260) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namasuratklr` varchar(260) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nosurat` varchar(260) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pengirim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namapengirim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perihal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tertuju` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggalklr` date NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 0,
  `komen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ttd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `suratkeluar`
--

INSERT INTO `suratkeluar` (`id`, `jenis_surat`, `file`, `namasuratklr`, `nosurat`, `pengirim`, `namapengirim`, `perihal`, `tertuju`, `tanggalklr`, `status`, `komen`, `ttd`, `created_at`, `updated_at`) VALUES
(2, NULL, 'document (2).pdf2023-12-08.pdf', 'adsada', '100200020PB', 'kiaganteng', 'kia - ', 'dasda', 'winny', '2023-11-09', 1, NULL, NULL, NULL, NULL),
(3, NULL, 'lamaraan.pdf2024-01-12.pdf', 'SURAT PERINTAH TUGAS', '100200020PB', 'kiaganteng', 'kia - ', 'SPT KE MANADO', 'kiaganteng', '2023-12-08', 1, 'oke', NULL, NULL, NULL),
(4, NULL, 'Narasi2024-04-21.pdf', 'Narasi', '099/ /SPT/RO-ADPIM/IV/2024', 'kiaganteng', 'kia - ', 'HUT WONDAMA', 'abesanggeng', '2024-04-22', 0, NULL, NULL, NULL, NULL),
(5, 'SPPD (Surat Perintah Perjalanan Dinas)', 'Perintah Tugas Bali2024-05-24.pdf', 'Perintah Tugas Bali', '123123AAA', 'kiaganteng', 'kia - ', 'Perintah Ke BALI BROOO', 'karo', '2024-05-24', 0, NULL, 'TTDbrian.png', NULL, NULL),
(6, 'SPPD (Surat Perintah Perjalanan Dinas)', 'signed_Perintah Tugas Bali2024-05-24.pdf', 'Perintah Tugas Bali', NULL, 'kiaganteng', 'kia - ', 'Perintah Ke BALI BROOO', 'karo', '2024-05-24', 0, NULL, 'TTDkiaganteng.png', NULL, '2024-05-25 01:34:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suratmasuk`
--

CREATE TABLE `suratmasuk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namasuratmsk` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengirim` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namapengirim` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nosurat` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perihal` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tertuju` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggalmsk` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `suratmasuk`
--

INSERT INTO `suratmasuk` (`id`, `file`, `namasuratmsk`, `pengirim`, `namapengirim`, `nosurat`, `perihal`, `tertuju`, `tanggalmsk`, `created_at`, `updated_at`) VALUES
(1, 'Surat Undangan2023-11-09.pdf', 'Surat Undangan', 'kiaganteng', 'kia - ', '799779', 'Tiket undangan', 'kajocantik', '2023-11-09', NULL, NULL),
(2, 'Surat Edaran2023-12-08.pdf', 'Surat Edaran', 'kiaganteng', 'kia - ', '065/1721/SETDA-PB/2022', 'TATA NASKAH DINAS DI LINGKUNGAN PEMERINTAH PROVINSI PAPUA BARAT', 'kiaganteng', '2022-07-01', NULL, NULL),
(3, 'Narasi2024-01-12.pdf', 'Narasi', 'kiaganteng', 'kia - ', '065/1721/SETDA-PB/2023', 'Narasi undangan', 'karo', '2024-01-12', NULL, NULL),
(4, 'Kartu2024-04-21.pdf', 'Kartu', 'kiaganteng', 'kia - ', '034/ /SPT/RO-ADPIM/IV/2023', 'Nama NIP KARO', 'kiaganteng', '2024-04-22', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `template`
--

CREATE TABLE `template` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(260) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namasurat` varchar(260) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `template`
--

INSERT INTO `template` (`id`, `jenis_surat`, `file`, `namasurat`, `created_at`, `updated_at`) VALUES
(1, '', 'SPT BINTUNI JUNI.docx2023-11-28.docx', 'SPT BINTUNI JUNI.docx', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(25) UNSIGNED NOT NULL,
  `nama` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bagian` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tentang` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notelp` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biro` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttd` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user.png',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `bagian`, `status`, `tentang`, `notelp`, `alamat`, `biro`, `username`, `email`, `ttd`, `jabatan`, `role`, `email_verified_at`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'kia', 'Bagian Materi dan Komunikasi', 'Aktif', 'kia adpim', '085197200404', 'Wosi', 'BIRO ADMINISTRASI PIMPINAN', 'kiaganteng', 'kia@gmail.com', 'TTDkiaganteng.png', NULL, 'Staf', NULL, '$2y$10$hIxggEdbkTXx8o12U7d.au3SbTSbDEjTILYUqYOXxYOVdzeyVZpDu', 'FT2023-12-09.jpg', NULL, NULL, NULL),
(2, 'Brian Kembo', NULL, NULL, NULL, NULL, NULL, NULL, 'brianx', 'brian@adpim', NULL, NULL, 'Staf Bagian', NULL, '$2y$10$EpktNZ1D1f5nvPFbdSCsBOmrV5n.g3Wm7J9spVGQC.ZQkjPDfi4gG', 'user.png', NULL, NULL, NULL),
(3, 'Helen', 'Bagian Protokol', 'Aktif', 'win', '08128911323', 'Wosi', 'BIRO ADMINISTRASI PIMPINAN', 'karo', 'helen@gmail.com', NULL, 'Kabag', 'Kabag', NULL, '$2y$10$ND.EDPgeO33XdUYKux/cuO.BruPYBO.TTbJVcwnQHZl8Uz2Vvxq.u', 'user.png', NULL, NULL, NULL),
(6, 'Abe Rumadas', NULL, NULL, NULL, NULL, NULL, NULL, 'abepura', 'abepura@adpim', NULL, NULL, 'Staf', NULL, '$2y$10$OoE86XilloSBP7FXcB/ZL.uVgvncRSDFYaMLKC0MYnp0DFDlHwm2.', 'user.png', NULL, NULL, NULL),
(7, 'Abe', 'Bagian Kepegawaian', 'Aktif', 'sanggeng saya', '08219011993', 'sanggeng', 'BIRO ADMINISTRASI PIMPINAN', 'abesanggeng', 'abe@gmail.com', NULL, NULL, 'Anggota Adpim', NULL, '$2y$10$0I45AXK/pJoBRzbSaXHI0O9n/5/nKeGqClwv0XuRXwzmHQ7jPKDUS', 'FT2023-12-08.jpg', NULL, NULL, NULL),
(8, 'Helen F Dewi', NULL, NULL, NULL, NULL, NULL, NULL, 'kepalabiro', 'karo@gmail.com', NULL, NULL, 'Karo', NULL, '$2y$10$CqWRx/nks752EbTZYfGWX.nQMAB6grOrYFzkJM90SJ1rsm3bcCOf2', 'user.png', NULL, NULL, NULL),
(9, 'Rafles Wairara', 'Bagian Protokol', 'Aktif', 'hidup seperti larry', '081241911987', 'Reremi', 'BIRO ADMINISTRASI PIMPINAN', 'raflesia', 'rafles@gmail.com', NULL, NULL, 'Anggota Adpim', NULL, '$2y$10$vwcE15Kvz498PPy4XpI1JOR7fAQxSbpuWBEKTTnEm.TtI8nzc8sA.', 'user.png', NULL, NULL, NULL),
(10, 'Kepala Biro', NULL, NULL, NULL, NULL, NULL, NULL, 'karoadpim', 'kepalabiro@gmail.com', NULL, NULL, 'Karo', NULL, '$2y$10$6fDT5PTzpH7u3zh6SU6yR.13sn9izgWCsc2FqueoQ/8zRSPukL66.', 'user.png', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `suratkeluar`
--
ALTER TABLE `suratkeluar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `suratmasuk`
--
ALTER TABLE `suratmasuk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `data`
--
ALTER TABLE `data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `suratkeluar`
--
ALTER TABLE `suratkeluar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `suratmasuk`
--
ALTER TABLE `suratmasuk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `template`
--
ALTER TABLE `template`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(25) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
