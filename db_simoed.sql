-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Des 2021 pada 05.20
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simoed`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahan`
--

CREATE TABLE `bahan` (
  `id_bahan` int(11) NOT NULL,
  `foto_bahan` varchar(50) NOT NULL,
  `nama_bahan` varchar(50) NOT NULL,
  `harga_bahan` varchar(50) NOT NULL,
  `stok_bahan` int(11) NOT NULL,
  `satuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bahan`
--

INSERT INTO `bahan` (`id_bahan`, `foto_bahan`, `nama_bahan`, `harga_bahan`, `stok_bahan`, `satuan`) VALUES
(1, 'ayam.jpg', 'Daging Ayam', '38000', 10, 'kg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `meja`
--

CREATE TABLE `meja` (
  `no_pesanan` int(11) NOT NULL,
  `no_meja` int(11) NOT NULL,
  `post` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `meja`
--

INSERT INTO `meja` (`no_pesanan`, `no_meja`, `post`) VALUES
(1, 5, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `makanan` varchar(50) NOT NULL,
  `jumlah_makanan` int(11) NOT NULL,
  `minuman` varchar(50) NOT NULL,
  `jumlah_minuman` int(11) NOT NULL,
  `no_pesanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`makanan`, `jumlah_makanan`, `minuman`, `jumlah_minuman`, `no_pesanan`) VALUES
('Nasi goreng', 1, 'Jus Alpukat', 2, 1),
('Ayam Goreng', 2, 'Chocolate', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Arham', 'arham', 'arham', 'pelayan'),
(2, 'Andika', 'andika', 'andika', 'karyawan'),
(3, 'Sofia', 'sofia', 'sofia', 'pemilik');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bahan`
--
ALTER TABLE `bahan`
  ADD PRIMARY KEY (`id_bahan`);

--
-- Indeks untuk tabel `meja`
--
ALTER TABLE `meja`
  ADD PRIMARY KEY (`no_pesanan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bahan`
--
ALTER TABLE `bahan`
  MODIFY `id_bahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
