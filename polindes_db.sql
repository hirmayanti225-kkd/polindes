-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Okt 2021 pada 16.06
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `polindes_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kunjungan`
--

CREATE TABLE `kunjungan` (
  `id` int(11) NOT NULL,
  `ibu_suami` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `usia` varchar(100) NOT NULL,
  `diameter` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `bt` varchar(100) NOT NULL,
  `bb` varchar(100) NOT NULL,
  `tb` varchar(100) NOT NULL,
  `td` varchar(100) NOT NULL,
  `keluhan` varchar(100) NOT NULL,
  `lab` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kunjungan`
--

INSERT INTO `kunjungan` (`id`, `ibu_suami`, `alamat`, `usia`, `diameter`, `tanggal`, `bt`, `bb`, `tb`, `td`, `keluhan`, `lab`, `keterangan`) VALUES
(8, 'hirma', 'pringga', '10', 'r', '2021-10-28', 'r', 'r', 'r', 'r', 'r', 'r', 'r'),
(9, 'd', 'd', 'd', 'd', '2021-10-12', 'd', 'd', 'd', 'd', 'd', 'd', 'd');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kunjungan`
--
ALTER TABLE `kunjungan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
