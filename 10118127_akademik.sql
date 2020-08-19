-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Agu 2020 pada 16.28
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `10118127_akademik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_dosen`
--

CREATE TABLE `t_dosen` (
  `id_dosen` int(11) NOT NULL,
  `nip` int(10) NOT NULL,
  `nama_dosen` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_dosen`
--

INSERT INTO `t_dosen` (`id_dosen`, `nip`, `nama_dosen`) VALUES
(3, 111122, 'Agyara'),
(4, 111123, 'Aji');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_mahasiswa`
--

CREATE TABLE `t_mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `NIM` int(8) NOT NULL,
  `Nama_mahasiswa` varchar(20) NOT NULL,
  `Tgl_Lahir` date NOT NULL,
  `Alamat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_mahasiswa`
--

INSERT INTO `t_mahasiswa` (`id_mahasiswa`, `NIM`, `Nama_mahasiswa`, `Tgl_Lahir`, `Alamat`) VALUES
(1, 10118127, 'Nouval Akmal Syakir', '2000-05-06', 'Jln Cigondewah Kaler'),
(2, 10118128, 'Anggi', '2000-05-14', 'Jln Holis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_matkul`
--

CREATE TABLE `t_matkul` (
  `id_matkul` int(11) NOT NULL,
  `kd_matkul` varchar(8) NOT NULL,
  `nama_matkul` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_matkul`
--

INSERT INTO `t_matkul` (`id_matkul`, `kd_matkul`, `nama_matkul`) VALUES
(1, 'IF3-222', 'Basis Data I'),
(4, 'IF3-444', 'Algoritma');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_dosen`
--
ALTER TABLE `t_dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indeks untuk tabel `t_mahasiswa`
--
ALTER TABLE `t_mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indeks untuk tabel `t_matkul`
--
ALTER TABLE `t_matkul`
  ADD PRIMARY KEY (`id_matkul`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_dosen`
--
ALTER TABLE `t_dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `t_mahasiswa`
--
ALTER TABLE `t_mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `t_matkul`
--
ALTER TABLE `t_matkul`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
