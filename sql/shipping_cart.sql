-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 27 Jul 2022 pada 10.49
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shipping_cart`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_barang`
--

CREATE TABLE `master_barang` (
  `id` int(11) NOT NULL,
  `kode_b` varchar(50) NOT NULL,
  `nama_b` varchar(100) NOT NULL,
  `berat_b` varchar(50) NOT NULL,
  `qty` int(50) NOT NULL,
  `harga_b` varchar(100) NOT NULL,
  `img_b` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_barang`
--

INSERT INTO `master_barang` (`id`, `kode_b`, `nama_b`, `berat_b`, `qty`, `harga_b`, `img_b`, `created_at`, `updated_at`) VALUES
(3, 'U12JSAN1', 'Es Teh Manis', '500 g', 100, '50000', 'MMM.png', '2021-08-26 11:43:58', '2021-08-27 02:04:48'),
(8, 'U12JJKAS', 'Garam FIlter', '31 MG', 100, '20000', 'MMM.png', '2021-08-28 02:11:44', '2021-08-28 02:11:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_keranjang`
--

CREATE TABLE `master_keranjang` (
  `id` int(11) NOT NULL,
  `kode_keranjang` varchar(50) NOT NULL,
  `nama_keranjang` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_keranjang`
--

INSERT INTO `master_keranjang` (`id`, `kode_keranjang`, `nama_keranjang`, `created_at`, `updated_at`) VALUES
(1, '001', 'Keranjang 1', '2021-08-27 03:37:48', '2021-08-27 03:37:48');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `kkeranjang_k` varchar(50) NOT NULL,
  `kbarang_k` varchar(100) NOT NULL,
  `qty_k` int(50) NOT NULL,
  `harga_k` varchar(100) NOT NULL,
  `is_status` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `kkeranjang_k`, `kbarang_k`, `qty_k`, `harga_k`, `is_status`, `created_at`, `updated_at`) VALUES
(22, '001', 'U12JJKAS', 1, '20000', 1, '2022-02-22 02:02:52', '2022-02-22 02:02:52'),
(23, '001', 'U12JSAN1', 1, '50000', 0, '2022-02-22 02:11:38', '2022-02-22 02:11:38'),
(24, '001', 'U12JJKAS', 1, '20000', 0, '2022-04-24 06:52:04', '2022-04-24 06:52:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `img`, `remember_token`, `created_at`, `updated_at`) VALUES
(16, 'Maulana', 'maul@maul.com', NULL, 1, '$2y$10$rzWQ1KyCacgHvvj8MXMHUuRy2.2j36SjDiRfhygaEFKQJrOfH4N.O', 'MMM.png', NULL, '2021-07-29 01:22:42', '2021-08-26 11:42:35'),
(29, 'Maulana', 'kasir@kasir.com', NULL, 0, '$2y$10$Eeoje8J/hXB3RvUWA4nxfulC9ZrNe6wrdVrizgBk4nOgCzohCRLMC', 'MMM.png', NULL, '2021-07-30 02:26:11', '2022-02-22 01:51:10'),
(32, 'Maulana', 'user@kasir.com', NULL, 0, '$2y$10$9eVYcMl.wP5UDBUxKv.aw.il/qlC7GYyXaeZ63KQCugu8d5ws3OyW', 'MMM.png', NULL, '2021-08-28 00:01:50', '2021-08-28 00:01:50'),
(34, 'Moel', 'moel@moel.com', NULL, 1, 'asasas', '', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_barang`
--
ALTER TABLE `master_barang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_b` (`kode_b`);

--
-- Indeks untuk tabel `master_keranjang`
--
ALTER TABLE `master_keranjang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_keranjang` (`kode_keranjang`),
  ADD UNIQUE KEY `nama_keranjang` (`nama_keranjang`);

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
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `master_barang`
--
ALTER TABLE `master_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `master_keranjang`
--
ALTER TABLE `master_keranjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
