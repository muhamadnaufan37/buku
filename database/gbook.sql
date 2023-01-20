-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jan 2023 pada 07.58
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gbook`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul` text NOT NULL,
  `author` text NOT NULL,
  `publisher` text NOT NULL,
  `tahun_terbit` text NOT NULL,
  `jumlah` int(11) NOT NULL,
  `rak_buku` int(11) NOT NULL,
  `katagori` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `author`, `publisher`, `tahun_terbit`, `jumlah`, `rak_buku`, `katagori`, `created_at`) VALUES
(1, 'Mikrotik Kung Fu : Kitab 1', 'Rendra Towidjojo', 'Jasakom', '2016', 5, 2, 'Umum', '2022-12-29 03:12:23'),
(2, 'Windows 10 : Panduan Lengkap', 'Indra Susanto', 'Jasakom', '2013', 5, 3, 'Umum', '2022-12-29 03:12:23'),
(3, 'Bisnis Online Revolution', 'Iwan Kenrianto', 'Gramedia', '2015', 5, 3, 'Umum', '2022-12-29 03:12:23'),
(4, '3 Tools Facebook Graph Gratisan', 'Suryadin Laoddang', 'Dosen Jualan', '2015', 5, 4, 'Umum', '2022-12-29 03:12:23'),
(5, 'Mengolah Database Excel', 'Sumonggo Surya', 'Andi Publisher', '2001', 5, 7, 'Umum', '2022-12-29 03:12:23'),
(6, 'Mahir Corel Draw Dalam 4 Hari', 'Yuli Kristanto S', 'Izuka Komp', '2008', 5, 6, 'Umum', '2022-12-29 03:12:23'),
(7, 'The Magic of Photoshop', 'Hendri Hendratama', 'Informatika', '2013', 500, 5, 'Umum', '2022-12-29 03:12:23'),
(8, 'Teknik Profesional Photoshop CS3', 'Rahmat Widiyanto', 'Elex Media Computindo', '2009', 5, 9, 'Umum', '2022-12-29 03:12:23'),
(9, 'Jago SEO', 'Hidayat Rahmad', 'Elex Media Computindo', '2011', 5, 8, 'Umum', '2022-12-29 03:12:23'),
(10, 'Hacking Wireless Network', 'Suryatama Udin', 'Jasakom', '2014', 5, 1, 'Umum', '2022-12-29 03:12:23'),
(11, 'Blender 3D Modelling', 'Hendri Hendratama', 'Informatika', '2015', 5, 9, 'Umum', '2022-12-29 03:12:23'),
(12, 'Aplikasi Berbasis Android', 'Hyua Hendra La', 'Moklet Publisher', '2019', 5, 2, 'Pelajar', '2022-12-29 03:12:23'),
(13, 'Membangun Aplikasi ASP', 'Hendro SPd', 'Moklet Publisher', '2020', 5, 1, 'Pelajar', '2022-12-29 03:12:23'),
(14, 'Basis Data Kebun Binatang', 'Ifa Khoirunnisa', 'Moklet Publisher', '2018', 5, 3, 'Pelajar', '2022-12-29 03:12:23'),
(15, 'Buku Panduan ASUS', 'Herman Dzumavo', 'Samsara', '2008', 5, 1, 'Pelajar', '2022-12-29 03:12:23'),
(16, 'The Power of Microsoft Edge', 'Steven Reward', 'Duston Magz', '2017', 5, 4, 'Pelajar', '2022-12-29 03:12:23'),
(17, 'MySQL Dasar dan Implementasi', 'Supratman Efendi', 'Ilmukom', '2014', 5, 5, 'Pelajar', '2022-12-29 03:12:23'),
(18, 'Nippon Against World', 'Hasirama Tadashi', 'Sung Yang', '2009', 5, 5, 'Pelajar', '2022-12-29 03:12:23'),
(19, 'Konfigursi Router Cisco', 'Solikin', 'Safari pub', '2019', 5, 6, 'Pelajar', '2022-12-29 03:12:23'),
(20, 'Fashion Paris', 'Amire Melaine', 'FranceTime', '2018', 5, 8, 'Pelajar', '2022-12-29 03:12:23'),
(21, 'Unreleashed Journal', 'Timothy Law', 'Askars', '2017', 5, 3, 'Umum', '2022-12-29 03:12:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `nip` int(11) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `nip`, `image`, `password`, `role_id`, `is_active`, `created_at`) VALUES
(2, 'Petugas', 'petugas@petugas.com', 2147483647, 'default.jpg', '$2y$10$oR3u1FECCLQ/0oPr/z59iOqLcnHQqfgYF5U8yIW9P1vfLJOwEe1SW', 2, 1, '2022-12-06 07:16:12'),
(3, 'Ikhsan', 'Ikhsan@Ikhsan.com', 2147483647, 'default.jpg', '$2y$10$F0ABzRuzbcYw2VL3Z3u5GupwCR13CPEbU.YA9k.OX2wz2d7AcVOpW', 1, 1, '2022-12-28 06:28:51');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
