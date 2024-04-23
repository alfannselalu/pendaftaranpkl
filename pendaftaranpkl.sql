-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 05 Apr 2024 pada 09.44
-- Versi server: 8.0.30
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaranpkl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensis`
--

CREATE TABLE `absensis` (
  `id` bigint UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `jam_masuk` time DEFAULT NULL,
  `jam_pulang` time DEFAULT NULL,
  `nama_siswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `absensis`
--

INSERT INTO `absensis` (`id`, `tanggal`, `jam_masuk`, `jam_pulang`, `nama_siswa`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, '2024-04-03', '07:30:00', '16:00:00', 'Muhammad Alfan Syukron', 'Hadir', '2024-04-02 21:55:21', '2024-04-02 21:55:21'),
(2, '2024-04-03', '07:30:00', '16:00:00', 'Sultan Ramadani', 'Hadir', '2024-04-02 21:58:26', '2024-04-02 21:58:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`id`, `nama_admin`, `username`, `email`, `password`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad admin', 'admin', 'admin@gmail.com', '$2y$12$K9IfwLyRxvfn0tJQn5IBL.jN9R8VWVsFgI1FJuybblMkSsK2FKlHq', 'admin-photos/OTmC0Yp0gqfMce9DtstIQyzdz5xkok1cBwRkZXbU.jpg', '2024-04-02 21:34:14', '2024-04-02 21:43:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cek-ketersediaan`
--

CREATE TABLE `cek-ketersediaan` (
  `id` bigint UNSIGNED NOT NULL,
  `status` enum('0','Tersedia','Kosong') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_agendas`
--

CREATE TABLE `data_agendas` (
  `id` bigint UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_agendas`
--

INSERT INTO `data_agendas` (`id`, `tanggal`, `user_id`, `kelas`, `jurusan`, `kategori_id`, `created_at`, `updated_at`) VALUES
(1, '2024-04-03', 1, '1', '1', 3, '2024-04-02 22:05:42', '2024-04-02 22:05:42'),
(2, '2024-04-03', 2, '1', '2', 1, '2024-04-02 22:06:05', '2024-04-02 22:06:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `departments`
--

CREATE TABLE `departments` (
  `id` bigint UNSIGNED NOT NULL,
  `posisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','Tersedia','Kosong') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `departments`
--

INSERT INTO `departments` (`id`, `posisi`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Programming', 'Tersedia', '2024-04-02 21:44:29', '2024-04-02 21:45:14'),
(2, 'UI/UX Design', 'Kosong', '2024-04-02 21:44:46', '2024-04-02 21:45:24'),
(3, 'IT Support', 'Tersedia', '2024-04-02 21:45:01', '2024-04-02 21:45:34'),
(4, 'Marketing', 'Tersedia', '2024-04-02 22:33:05', '2024-04-02 22:33:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_agendas`
--

CREATE TABLE `kategori_agendas` (
  `id` bigint UNSIGNED NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategori_agendas`
--

INSERT INTO `kategori_agendas` (`id`, `kategori`, `created_at`, `updated_at`) VALUES
(1, 'Tugas Aplikasi Pendaftaran PKL', '2024-04-02 22:04:48', '2024-04-02 22:04:48'),
(2, 'Tugas Manual Book Cimory', '2024-04-02 22:05:01', '2024-04-02 22:05:01'),
(3, 'Tugas Menjadi IronMan', '2024-04-02 22:05:16', '2024-04-02 22:05:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `koordinator_p_k_l_s`
--

CREATE TABLE `koordinator_p_k_l_s` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_koor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` bigint UNSIGNED DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `koordinator_p_k_l_s`
--

INSERT INTO `koordinator_p_k_l_s` (`id`, `nama_koor`, `username`, `email`, `department_id`, `password`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Rudi', 'rudi', 'rudi@gmail.com', 1, '$2y$12$Gs9rIlGnjKtDoIcmFBO92exOo/EkeglVUhBB.pWY38lkfylHoxi.G', 'koor-photos/tlStsqshNn7SZGmeSoNEAlmLlkk5XvDEYVs0hQHn.jpg', '2024-04-02 21:34:14', '2024-04-02 22:00:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `message`
--

CREATE TABLE `message` (
  `id` bigint UNSIGNED NOT NULL,
  `sender_id` bigint UNSIGNED NOT NULL,
  `recipient_id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sertifikat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_12_19_081257_create_user_details_table', 1),
(6, '2023_12_20_071027_create_absensis_table', 1),
(7, '2023_12_22_041325_create_koordinator_p_k_l_s_table', 1),
(8, '2024_01_09_024932_create_admins_table', 1),
(9, '2024_01_18_033902_create_departments_table', 1),
(10, '2024_01_18_085314_cek-ketersediaan', 1),
(11, '2024_02_07_060322_create_kategori_agendas_table', 1),
(12, '2024_02_09_143503_create_data_agendas_table', 1),
(13, '2024_02_15_031301_create_nilai_praktiks_table', 1),
(14, '2024_02_15_043744_message', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_praktiks`
--

CREATE TABLE `nilai_praktiks` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `nama_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aspek_penilaian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `nilai_praktiks`
--

INSERT INTO `nilai_praktiks` (`id`, `user_id`, `nama_sekolah`, `nilai`, `aspek_penilaian`, `created_at`, `updated_at`) VALUES
(1, 1, '1', '90', 'Presentasi Aplikasi', '2024-04-02 22:26:34', '2024-04-02 22:26:34'),
(2, 2, '1', '100', 'Presentasi Manual Book', '2024-04-02 22:26:59', '2024-04-02 22:26:59'),
(3, 1, 'SMK NEGERI 9 BEKASI', '95', 'Sikap Disiplin', '2024-04-02 22:28:32', '2024-04-02 22:29:30'),
(4, 2, '1', '90', 'Presentasi Diagram', '2024-04-02 22:28:54', '2024-04-02 22:28:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `department_id` bigint UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pembimbing` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_bergabung` date NOT NULL,
  `status` enum('0','Diterima','Ditolak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `department_id`, `username`, `email`, `email_verified_at`, `password`, `image`, `nama`, `nama_sekolah`, `nama_pembimbing`, `kelas`, `jurusan`, `nomor_telepon`, `tanggal_bergabung`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Alfan', 'alfan@gmail.com', NULL, '$2y$12$kgfkxWbexcDj9Pnbildx3OdfsBL0Ep7x48.1mAktPWaDRYKCAaYpS', 'user-photos/5EnS5cfyt01SD2i7BtKcWCMQrWA9hibBevt1ax6x.jpg', 'Muhammad Alfan Syukron', 'SMK NEGERI 9 BEKASI', 'Fachry Dinnare', '13', 'Sistem Informatika Jaringan Dan Aplikasi', '083808865765', '2024-02-10', 'Diterima', NULL, '2024-04-02 21:53:15', '2024-04-02 22:03:39'),
(2, 3, 'Sultan', 'sultan@gmail.com', NULL, '$2y$12$o3kkZBf4p7u1LOJbdFi1OeTw/fFs9cvh//4AIVW.QYiSS2Gdg0pW6', 'user-photos/74A6fgAm6CbjSMXaGEsrZSbuxu5wfLWhTDFalgzL.jpg', 'Sultan Ramadhani', 'SMK NEGERI 9 BEKASI', 'Dian Kusmawati', '13', 'Sistem Informatika Jaringan Dan Aplikasi', '08388654332', '2024-01-12', 'Diterima', NULL, '2024-04-02 21:57:33', '2024-04-02 22:02:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_details`
--

CREATE TABLE `user_details` (
  `id` bigint UNSIGNED NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `user_details`
--

INSERT INTO `user_details` (`id`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `cv`, `created_at`, `updated_at`) VALUES
(1, '2005-05-15', 'L', 'Jl Raya Cikunir Gg Assamawi No 41A Rt01 Rw03', 'siswa-photos/1z2QcVVW9ogP4rtj80EXY8PiRPy52U4mkVWDcqu9.pdf', '2024-04-02 21:53:16', '2024-04-02 21:53:16'),
(2, '2005-11-10', 'L', 'Jl Raya Cikunir Gg Assamawi No 41A Rt01 Rw03', 'siswa-photos/Ti8cvADVSce3eVRqfm2Fkbr8rsjHZBRQPgO7VQUF.pdf', '2024-04-02 21:57:33', '2024-04-02 21:57:33');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensis`
--
ALTER TABLE `absensis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cek-ketersediaan`
--
ALTER TABLE `cek-ketersediaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_agendas`
--
ALTER TABLE `data_agendas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_agendas_user_id_foreign` (`user_id`),
  ADD KEY `data_agendas_kategori_id_foreign` (`kategori_id`);

--
-- Indeks untuk tabel `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kategori_agendas`
--
ALTER TABLE `kategori_agendas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `koordinator_p_k_l_s`
--
ALTER TABLE `koordinator_p_k_l_s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `message_sender_id_foreign` (`sender_id`),
  ADD KEY `message_recipient_id_foreign` (`recipient_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilai_praktiks`
--
ALTER TABLE `nilai_praktiks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nilai_praktiks_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

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
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absensis`
--
ALTER TABLE `absensis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `cek-ketersediaan`
--
ALTER TABLE `cek-ketersediaan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_agendas`
--
ALTER TABLE `data_agendas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori_agendas`
--
ALTER TABLE `kategori_agendas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `koordinator_p_k_l_s`
--
ALTER TABLE `koordinator_p_k_l_s`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `message`
--
ALTER TABLE `message`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `nilai_praktiks`
--
ALTER TABLE `nilai_praktiks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_agendas`
--
ALTER TABLE `data_agendas`
  ADD CONSTRAINT `data_agendas_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategori_agendas` (`id`),
  ADD CONSTRAINT `data_agendas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_recipient_id_foreign` FOREIGN KEY (`recipient_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `message_sender_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `nilai_praktiks`
--
ALTER TABLE `nilai_praktiks`
  ADD CONSTRAINT `nilai_praktiks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
