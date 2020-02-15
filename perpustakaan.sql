-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Okt 2019 pada 04.49
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_anggota` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `username`, `password`, `nama_anggota`, `alamat`, `email`, `role_id`) VALUES
(1, 'ibnu', 'ibnu123', 'ibnu soffyan', 'cirebon timur', 'andre@gmail.com', 1),
(2, 'user', 'user123', 'ceria syekali', 'cirebon', 'user@gmail.com', 2),
(3, 'root', 'root123', 'root user', 'cirebon', 'root@gmail.com', 2),
(4, 'rahma', 'root123', 'rahma wati', 'cirebon', 'rahma@gmail.com', 2),
(5, 'user', 'root', 'user', 'cirebon', 'user', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(20) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `id_pengarang` int(11) NOT NULL,
  `rilis` date NOT NULL,
  `sinopsis` text NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `link` varchar(200) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `id_pengarang`, `rilis`, `sinopsis`, `kategori`, `link`, `foto`) VALUES
(22, 'assalamualaikum beijing', 4, '2019-09-25', 'hijab traveller yang asli tapi boong', 'Agama', 'https://drive.google.com/open?id=1vFwcaKmBV6-Bx1ClHdRApGcoO717GPNp', 'andreahirata.jpg'),
(23, 'Silaman', 5, '2019-09-25', 'hijab traveller yang asli', '', 'https://drive.google.com/open?id=1AAqzBmHC5QKNlCd5QFhJnlRBIiBN83ZK', 'gus-dur-nu-dan-masyarakat-sipil-AG_20160323_00000000021.jpg'),
(24, 'assalamualaikum beijingi', 6, '2019-09-25', 'mantap', 'Edukasi', 'https://drive.google.com/open?id=1vFwcaKmBV6-Bx1ClHdRApGcoO717GPNp', 'andreahirata1.jpg'),
(25, 'Daun yang jatuh tak pernah membenci angin', 10, '2019-10-01', 'Filosofi hati ketika membenci orang', 'Novel', 'https://drive.google.com/drive/u/0/folders/1-CqdcYJagJJPiG2lUgm5tpyb488UtyVL', '4221809_be30fd25-76ad-49e7-8774-9552fe166a00.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluhan`
--

CREATE TABLE `keluhan` (
  `id_keluhan` int(2) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `email` varchar(15) NOT NULL,
  `keluhan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keluhan`
--

INSERT INTO `keluhan` (`id_keluhan`, `nama`, `email`, `keluhan`) VALUES
(1, 'ibnu', 'ibnusoffyan@gma', 'Update dong pak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengarang`
--

CREATE TABLE `pengarang` (
  `id_pengarang` int(11) NOT NULL,
  `nama_pengarang` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `foto_pengarang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengarang`
--

INSERT INTO `pengarang` (`id_pengarang`, `nama_pengarang`, `email`, `foto_pengarang`) VALUES
(4, 'senorita sabrina', 'senorita@gmail.com', 'a.jpg'),
(5, 'senorita', 'ibnu.inf', 'ayamgeprek1.jpg'),
(6, 'safira', 'sarira@yahoo.com', 'p1.jpg'),
(7, 'obito', 'obito@gmail.com', 'p2.png'),
(8, 'andrea hirata', 'andreahirata@gmail.com', 'andreahirata5.jpg'),
(9, 'papa', 'a@gmail.com', 'contoh1.png'),
(10, 'Tere liye', 'tereliye@gmail.com', 'tere_liye.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `request`
--

CREATE TABLE `request` (
  `id_request` int(11) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `request`
--

INSERT INTO `request` (`id_request`, `judul_buku`, `pengarang`) VALUES
(1, 'salam', 'soffyan'),
(2, 'Ruu Kpk', 'Mahasiswa demo');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `keluhan`
--
ALTER TABLE `keluhan`
  ADD PRIMARY KEY (`id_keluhan`);

--
-- Indeks untuk tabel `pengarang`
--
ALTER TABLE `pengarang`
  ADD PRIMARY KEY (`id_pengarang`);

--
-- Indeks untuk tabel `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id_request`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `keluhan`
--
ALTER TABLE `keluhan`
  MODIFY `id_keluhan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pengarang`
--
ALTER TABLE `pengarang`
  MODIFY `id_pengarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `request`
--
ALTER TABLE `request`
  MODIFY `id_request` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
