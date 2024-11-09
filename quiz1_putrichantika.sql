-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Nov 2024 pada 05.56
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz1_putrichantika`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `nidn` varchar(200) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `rumpun` varchar(100) NOT NULL,
  `tempat_lahir` varchar(150) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id`, `nidn`, `nama_lengkap`, `rumpun`, `tempat_lahir`, `tanggal_lahir`, `email`) VALUES
(3, '123456', 'putri chantika', 'Komputer', 'Banda Aceh', '2024-11-09', 'putrichantiikaa@gmail.com'),
(5, '53463457', 'pc', 'Komputer', 'Banda Aceh', '2024-11-09', 'p@gmail.com'),
(7, '', '', '', '', '0000-00-00', ''),
(39, '23456', 'pppp', 'Komputer', 'Banda Aceh', '2024-11-09', 'raihannramadhanii@gmail.com'),
(46, '123456789', 'chika', 'Manajemen', 'Banda Aceh', '2024-11-09', 'pcs@gmail.com'),
(50, '1234567890', 'kk', 'Akuntansi', 'Banda Aceh', '2024-11-09', 'hdfsuf@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
