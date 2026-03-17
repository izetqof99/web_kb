-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Bulan Mei 2024 pada 12.34
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_ibu`
--

CREATE TABLE `tabel_ibu` (
  `id` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `umur` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `usia_kandungan` varchar(15) NOT NULL,
  `jumlah_anak` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'aktif',
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_ibu`
--

INSERT INTO `tabel_ibu` (`id`, `nik`, `nama`, `umur`, `alamat`, `usia_kandungan`, `jumlah_anak`, `status`, `foto`) VALUES
(1, '202151155', 'atikoh', '30', 'Desa Tayu Wetan', '16 Minggu', '2', 'off', ''),
(10, '2021511578', 'Navlink', '20', 'Desa Ngeneng', '7 Minggu', '4', 'aktif', ''),
(13, '0099090909090909', 'Nining Khoirun Nisa', '21', 'Kayen', '2 Minggu', '15', 'aktif', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_kbpp`
--

CREATE TABLE `tabel_kbpp` (
  `id` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `umur` varchar(11) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `jenis_kb` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_kbpp`
--

INSERT INTO `tabel_kbpp` (`id`, `nik`, `nama`, `umur`, `alamat`, `jenis_kb`) VALUES
(2, '202151157', 'fera', '27', 'Dukuhseti', 'Implan'),
(7, '666677', 'siti', '46', 'Desa Juwana', 'Implan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_anak_stunting`
--

CREATE TABLE `tbl_anak_stunting` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `umur` varchar(15) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `problem_stunting` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kader`
--

CREATE TABLE `tbl_kader` (
  `id` int(11) NOT NULL,
  `role` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `lokasi_penugasan` varchar(25) NOT NULL,
  `nomor_telepon` varchar(25) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kader`
--

INSERT INTO `tbl_kader` (`id`, `role`, `nama`, `alamat`, `lokasi_penugasan`, `nomor_telepon`, `foto`) VALUES
(1, '1', 'atikoh', 'Desa Tayu Wetan', 'Desa Ngembal', '089765435298', ''),
(7, '2', 'coba', 'kalipucang', 'Pati', '089543267187', ''),
(9, '3', 'fera', 'Desa Juwana', 'Pati', '089543267187', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(5) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level` enum('kader','pengolah data') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'floyd', 'pengolah data', '12345', 'pengolah data'),
(2, 'izet', 'kader', '12345', 'kader');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_ibu`
--
ALTER TABLE `tabel_ibu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_kbpp`
--
ALTER TABLE `tabel_kbpp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_anak_stunting`
--
ALTER TABLE `tbl_anak_stunting`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_kader`
--
ALTER TABLE `tbl_kader`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_ibu`
--
ALTER TABLE `tabel_ibu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tabel_kbpp`
--
ALTER TABLE `tabel_kbpp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_anak_stunting`
--
ALTER TABLE `tbl_anak_stunting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_kader`
--
ALTER TABLE `tbl_kader`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
