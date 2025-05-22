-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Bulan Mei 2025 pada 03.41
-- Versi server: 8.0.30
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posyandu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_bayi`
--

CREATE TABLE `data_bayi` (
  `id` int NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Jenis_kelamin` enum('laki','perempuan') NOT NULL,
  `Tinggi_badan` int NOT NULL,
  `Berat_badan` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `data_bayi`
--

INSERT INTO `data_bayi` (`id`, `Nama`, `Jenis_kelamin`, `Tinggi_badan`, `Berat_badan`) VALUES
(3, 'karugasima', 'laki', 9, 17),
(5, 'Na&#039;im', 'laki', 170, 111),
(6, 'Geyzaks', 'perempuan', 4, -5),
(7, 'Henry', 'laki', 5, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kader`
--

CREATE TABLE `data_kader` (
  `Nama` varchar(255) NOT NULL,
  `Jenis_kelamin` enum('laki','perempuan') NOT NULL,
  `Umur` int NOT NULL,
  `id_anggota` int NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `data_kader`
--

INSERT INTO `data_kader` (`Nama`, `Jenis_kelamin`, `Umur`, `id_anggota`, `id`) VALUES
('Sena', 'laki', 30, 821111, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `Username`, `Password`) VALUES
(1, 'AdminMurka', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'Henry', 'f1290186a5d0b1ceab27f4e77c0c5d68'),
(3, 'karuga', 'f31c212427a3fa6c0d1cdd034f1a7ad2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_admin`
--

CREATE TABLE `user_admin` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `user_admin`
--

INSERT INTO `user_admin` (`id`, `username`, `password`) VALUES
(1, 'BudiArie', 'koruptor');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_bayi`
--
ALTER TABLE `data_bayi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_kader`
--
ALTER TABLE `data_kader`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_bayi`
--
ALTER TABLE `data_bayi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `data_kader`
--
ALTER TABLE `data_kader`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
