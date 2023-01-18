-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jan 2023 pada 11.39
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbfmipavt`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `denahs`
--

CREATE TABLE `denahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luas` int(11) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `denah` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gedung_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `denahs`
--

INSERT INTO `denahs` (`id`, `nama`, `luas`, `kapasitas`, `denah`, `gedung_id`, `created_at`, `updated_at`) VALUES
(1, 'H 1.2', 64, 50, 'denah/63645cb893789.gif', 1, '2023-01-18 03:33:10', '2023-01-18 03:33:10'),
(2, 'H 1.1', 96, 70, 'denah/63645cf026343.gif', 1, '2023-01-18 03:33:10', '2023-01-18 03:33:10'),
(3, 'H 1.4', 128, 100, 'denah/63645d21d57ec.gif', 1, '2023-01-18 03:33:10', '2023-01-18 03:33:10'),
(4, 'Umum dan Perlengkapan', 192, 30, 'denah/6365f790837e1.gif', 1, '2023-01-18 03:33:11', '2023-01-18 03:33:11'),
(5, 'Akademik', 152, 25, 'denah/6365f7d15e550.gif', 1, '2023-01-18 03:33:11', '2023-01-18 03:33:11'),
(6, 'Kepegawaian', 32, 6, 'denah/6365f8269f2c9.gif', 1, '2023-01-18 03:33:11', '2023-01-18 03:33:11'),
(7, 'Tamu', 32, 8, 'denah/6365f8aa87ccf.gif', 1, '2023-01-18 03:33:11', '2023-01-18 03:33:11'),
(8, 'Baca', 64, 30, 'denah/6365f8da0dcc2.gif', 1, '2023-01-18 03:33:11', '2023-01-18 03:33:11'),
(9, 'H 2.2', 64, 60, 'denah/6365f9932f7ab.gif', 1, '2023-01-18 03:33:11', '2023-01-18 03:33:11'),
(10, 'H 2.4', 64, 60, 'denah/6365f9e124a47.gif', 1, '2023-01-18 03:33:12', '2023-01-18 03:33:12'),
(11, 'Dosen Kimia', 128, 35, 'denah/6365fa442ef88.gif', 1, '2023-01-18 03:33:12', '2023-01-18 03:33:12'),
(12, 'H 2.6', 64, 60, 'denah/6365fae71ad7e.gif', 1, '2023-01-18 03:33:12', '2023-01-18 03:33:12'),
(13, 'H 2.3', 64, 60, 'denah/6365fb25c672f.gif', 1, '2023-01-18 03:33:12', '2023-01-18 03:33:12'),
(14, 'Dosen Sistem Informasi', 96, 25, 'denah/6365fb8e961fe.gif', 1, '2023-01-18 03:33:12', '2023-01-18 03:33:12'),
(15, 'H 2.8', 64, 60, 'denah/6365fbe0db73a.gif', 1, '2023-01-18 03:33:12', '2023-01-18 03:33:12'),
(16, 'H 2.10', 64, 60, 'denah/6365fc41759d6.gif', 1, '2023-01-18 03:33:12', '2023-01-18 03:33:12'),
(17, 'Baca Matematika', 96, 25, 'denah/6365fd4ab9441.gif', 1, '2023-01-18 03:33:13', '2023-01-18 03:33:13'),
(18, 'Mushola Pria', 32, 25, 'denah/6365fde431fad.gif', 1, '2023-01-18 03:33:13', '2023-01-18 03:33:13'),
(19, 'Keuangan', 64, 15, 'denah/6365fe9384205.gif', 1, '2023-01-18 03:33:13', '2023-01-18 03:33:13'),
(20, 'Senat', 128, 60, 'denah/6365fef016937.gif', 1, '2023-01-18 03:33:13', '2023-01-18 03:33:13'),
(21, 'Dekan', 88, 15, 'denah/6365ffea00a1d.gif', 1, '2023-01-18 03:33:13', '2023-01-18 03:33:13'),
(22, 'Jurusan Ilmu Kelautan', 88, 24, 'denah/63660075a926f.gif', 1, '2023-01-18 03:33:13', '2023-01-18 03:33:13'),
(23, 'Jurusan Matematika', 96, 25, 'denah/6366010e3d17b.gif', 1, '2023-01-18 03:33:14', '2023-01-18 03:33:14'),
(24, 'Wakil Dekan', 96, 20, 'denah/636601942c0e4.gif', 1, '2023-01-18 03:33:14', '2023-01-18 03:33:14'),
(25, 'Jurusan Fisika', 128, 28, 'denah/636602142520e.gif', 1, '2023-01-18 03:33:14', '2023-01-18 03:33:14'),
(26, 'H 3.2', 64, 60, 'denah/6366030ebd21c.gif', 1, '2023-01-18 03:33:14', '2023-01-18 03:33:14'),
(27, 'H 3.4', 64, 60, 'denah/6366035434949.gif', 1, '2023-01-18 03:33:14', '2023-01-18 03:33:14'),
(28, 'H 3.1', 128, 100, 'denah/636603bb8a660.gif', 1, '2023-01-18 03:33:14', '2023-01-18 03:33:14'),
(29, 'H 3.3', 64, 60, 'denah/636605fe32b41.gif', 1, '2023-01-18 03:33:14', '2023-01-18 03:33:14'),
(30, 'H 3.6', 64, 60, 'denah/6366064632dcd.gif', 1, '2023-01-18 03:33:15', '2023-01-18 03:33:15'),
(31, 'Sidang', 32, 10, 'denah/636606ad35197.gif', 1, '2023-01-18 03:33:15', '2023-01-18 03:33:15'),
(32, 'Laboratorium Sistem Informasi', 96, 60, 'denah/636607242673f.gif', 1, '2023-01-18 03:33:15', '2023-01-18 03:33:15'),
(33, 'Dosen Statistik', 96, 25, 'denah/636607a10e758.gif', 1, '2023-01-18 03:33:15', '2023-01-18 03:33:15'),
(34, 'Mushola Wanita', 32, 15, 'denah/636607f2a5b12.gif', 1, '2023-01-18 03:33:15', '2023-01-18 03:33:15'),
(35, 'H 3.7', 64, 60, 'denah/636608c02b064.gif', 1, '2023-01-18 03:33:15', '2023-01-18 03:33:15'),
(36, 'Laboratorium Ilmu Kelautan', 64, 45, 'denah/63660c2d00257.gif', 1, '2023-01-18 03:33:15', '2023-01-18 03:33:15'),
(37, 'Laboratorium Komputasi Fisika', 96, 30, 'denah/63660ca595854.gif', 1, '2023-01-18 03:33:15', '2023-01-18 03:33:15'),
(38, 'H 3.10', 96, 60, 'denah/63660d0763e2d.gif', 1, '2023-01-18 03:33:16', '2023-01-18 03:33:16'),
(39, 'Kontrol', 64, 20, 'denah/63660d4720c5e.gif', 1, '2023-01-18 03:33:16', '2023-01-18 03:33:16'),
(40, 'Komputer B', 128, 95, 'denah/63660da58644f.gif', 1, '2023-01-18 03:33:16', '2023-01-18 03:33:16'),
(41, 'Komputer A', 192, 10, 'denah/63660e162add2.gif', 1, '2023-01-18 03:33:16', '2023-01-18 03:33:16'),
(42, 'Laboratorium Ekologi', 63, 10, 'denah/63660f68327f0.gif', 2, '2023-01-18 03:33:16', '2023-01-18 03:33:16'),
(43, 'Laboratorium Kultur Jaringan', 63, 20, 'denah/636615ae388d8.gif', 2, '2023-01-18 03:33:16', '2023-01-18 03:33:16'),
(44, 'Laboratorium Mikrobiologi', 64, 20, 'denah/6366161279cb0.gif', 2, '2023-01-18 03:33:16', '2023-01-18 03:33:16'),
(45, 'C 1', 63, 50, 'denah/636616924edc0.gif', 2, '2023-01-18 03:33:16', '2023-01-18 03:33:16'),
(46, 'Laboratorium Riset Kimia Organik', 63, 40, 'denah/6366171b3cda3.gif', 2, '2023-01-18 03:33:17', '2023-01-18 03:33:17'),
(47, 'C 2', 63, 50, 'denah/636617a11bde1.gif', 2, '2023-01-18 03:33:17', '2023-01-18 03:33:17'),
(48, 'BEM', 28, 10, 'denah/636617dea3135.gif', 2, '2023-01-18 03:33:17', '2023-01-18 03:33:17'),
(49, 'SEKBER HMJ', 98, 60, 'denah/63661871bb8b3.gif', 2, '2023-01-18 03:33:17', '2023-01-18 03:33:17'),
(50, 'Laboratorium Kimia B', 130, 50, 'denah/636618c8d89d6.gif', 2, '2023-01-18 03:33:17', '2023-01-18 03:33:17'),
(51, 'Sidang', 46, 30, 'denah/63661a71390dc.gif', 2, '2023-01-18 03:33:17', '2023-01-18 03:33:17'),
(52, 'F 2', 80, 50, 'denah/63661b1829cf1.gif', 2, '2023-01-18 03:33:18', '2023-01-18 03:33:18'),
(53, 'Prodi S2 Kimia', 80, 15, 'denah/63661b8a78045.gif', 2, '2023-01-18 03:33:18', '2023-01-18 03:33:18'),
(54, 'F 3', 80, 50, 'denah/63661c7e9ffc2.gif', 2, '2023-01-18 03:33:18', '2023-01-18 03:33:18'),
(55, 'F 4', 80, 50, 'denah/63661d1821ebd.gif', 2, '2023-01-18 03:33:18', '2023-01-18 03:33:18'),
(56, 'C 3', 63, 50, 'denah/63661d7e29206.gif', 2, '2023-01-18 03:33:18', '2023-01-18 03:33:18'),
(57, 'UKM', 0, 0, 'denah/63661f2e618d3.gif', 2, '2023-01-18 03:33:18', '2023-01-18 03:33:18'),
(58, 'Aula 1', 63, 50, 'denah/6366200976953.gif', 2, '2023-01-18 03:33:19', '2023-01-18 03:33:19'),
(59, 'Aula 2', 63, 50, 'denah/636620280998d.gif', 2, '2023-01-18 03:33:19', '2023-01-18 03:33:19'),
(60, 'Laboratorium Zoologi', 140, 30, 'denah/636621bca74cd.gif', 2, '2023-01-18 03:33:19', '2023-01-18 03:33:19'),
(61, 'Laboratorium Biologi', 0, 0, 'denah/636622613283d.gif', 2, '2023-01-18 03:33:19', '2023-01-18 03:33:19'),
(62, 'Laboratorium Kimia', 0, 0, 'denah/63662283778aa.gif', 2, '2023-01-18 03:33:19', '2023-01-18 03:33:19'),
(63, 'Dosen Fisika', 45, 7, 'denah/636623164c6ba.gif', 3, '2023-01-18 03:33:19', '2023-01-18 03:33:19'),
(64, 'Jurusan Fisika', 45, 6, 'denah/63662535d4d63.gif', 3, '2023-01-18 03:33:19', '2023-01-18 03:33:19'),
(65, 'Laboratorium Fisika Dasar', 100, 50, 'denah/6366257691eba.gif', 3, '2023-01-18 03:33:20', '2023-01-18 03:33:20'),
(66, 'Laboratorium Geofisika dan SIG', 80, 40, 'denah/636628e586b26.gif', 3, '2023-01-18 03:33:20', '2023-01-18 03:33:20'),
(67, 'Laboratorium Pigmen', 12, 3, 'denah/63662cbb14999.gif', 3, '2023-01-18 03:33:20', '2023-01-18 03:33:20'),
(68, 'Laboratorium Fisika Lanjut', 24, 4, 'denah/63662d1dae50a.gif', 3, '2023-01-18 03:33:20', '2023-01-18 03:33:20'),
(69, 'ASS', 10, 1, 'denah/63662d4e9409c.gif', 3, '2023-01-18 03:33:20', '2023-01-18 03:33:20'),
(70, 'Laboratorium Riset Kimia anorganik', 77, 25, 'denah/63662de7c360d.gif', 3, '2023-01-18 03:33:20', '2023-01-18 03:33:20'),
(71, 'Kepala Bioteknologi dan Riset', 12, 2, 'denah/63662e49ecfa8.gif', 3, '2023-01-18 03:33:20', '2023-01-18 03:33:20'),
(72, 'Laboratorium Ilmu Kelautan', 63, 22, 'denah/63662ec18a6f5.gif', 3, '2023-01-18 03:33:20', '2023-01-18 03:33:20'),
(73, 'Dosen Sistem Komputer', 80, 25, 'denah/63662f517511e.gif', 4, '2023-01-18 03:33:20', '2023-01-18 03:33:20'),
(74, 'Laboratorium Workshop', 80, 25, 'denah/63662fe188058.gif', 4, '2023-01-18 03:33:21', '2023-01-18 03:33:21'),
(75, 'Komputer B', 0, 0, 'denah/63663022e615a.gif', 4, '2023-01-18 03:33:21', '2023-01-18 03:33:21'),
(76, 'Komputer A', 0, 0, 'denah/6366306b988b5.gif', 4, '2023-01-18 03:33:21', '2023-01-18 03:33:21'),
(77, 'Siskom 1', 0, 0, 'denah/636630fd74d13.gif', 4, '2023-01-18 03:33:21', '2023-01-18 03:33:21'),
(78, 'Siskom 2', 0, 0, 'denah/6366317ef23f9.gif', 4, '2023-01-18 03:33:21', '2023-01-18 03:33:21'),
(79, 'Siskom 3', 0, 0, 'denah/636631b8a586b.gif', 4, '2023-01-18 03:33:22', '2023-01-18 03:33:22'),
(80, 'Siskom 4', 0, 0, 'denah/636631d0958fd.gif', 4, '2023-01-18 03:33:22', '2023-01-18 03:33:22');

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
-- Struktur dari tabel `gedungs`
--

CREATE TABLE `gedungs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gedung` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gedungs`
--

INSERT INTO `gedungs` (`id`, `gedung`, `created_at`, `updated_at`) VALUES
(1, 'Gedung Baru', '2023-01-18 03:33:09', '2023-01-18 03:33:09'),
(2, 'Gedung Lama', '2023-01-18 03:33:10', '2023-01-18 03:33:10'),
(3, 'Gedung Biotek', '2023-01-18 03:33:10', '2023-01-18 03:33:10'),
(4, 'Gedung Siskom', '2023-01-18 03:33:10', '2023-01-18 03:33:10');

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
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(11, '2022_12_05_104939_create_gedungs_table', 1),
(12, '2022_12_05_110023_create_denahs_table', 1);

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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'fmipa360@gmail.com', NULL, '$2y$10$IRFDTmLQpEdXoSH3RWq0cegdRwG/deClWVdy5t/d9BEbjPTkadpau', NULL, '2023-01-18 03:36:48', '2023-01-18 03:36:48');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `denahs`
--
ALTER TABLE `denahs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `denahs_gedung_id_foreign` (`gedung_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `gedungs`
--
ALTER TABLE `gedungs`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `denahs`
--
ALTER TABLE `denahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gedungs`
--
ALTER TABLE `gedungs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `denahs`
--
ALTER TABLE `denahs`
  ADD CONSTRAINT `denahs_gedung_id_foreign` FOREIGN KEY (`gedung_id`) REFERENCES `gedungs` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
