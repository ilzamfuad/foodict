-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2017 at 09:31 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(11) NOT NULL,
  `tanggal_booking` date NOT NULL,
  `tanggal_peminjam` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `status_pinjam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id_booking`, `tanggal_booking`, `tanggal_peminjam`, `id_user`, `id_buku`, `status_pinjam`) VALUES
(1, '2017-06-12', '0000-00-00', 1, 1, 0),
(2, '2017-06-12', '2017-06-12', 1, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `nama_buku` varchar(128) NOT NULL,
  `tahun_terbit` date NOT NULL,
  `deskripsi_buku` varchar(128) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_penerbit` int(11) NOT NULL,
  `id_perpus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `nama_buku`, `tahun_terbit`, `deskripsi_buku`, `id_kategori`, `id_penerbit`, `id_perpus`) VALUES
(1, 'Sejarah dan Peradaban Islam', '1998-04-08', 'Buku Tentang Sejarah Peradapan Islam', 1, 1, 4),
(2, 'Pengantar Ilmu Antropologi', '1990-08-14', 'Ilmu Antropologi', 1, 2, 4),
(3, 'KAPITALISME NEGARA DAN MASYARAKAT', '2001-07-17', 'Negara dan Masyarakat', 2, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Sejarah'),
(2, 'Sosial'),
(3, 'Fiksi'),
(4, 'Non Fiksi'),
(5, 'Dongeng');

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi_kembali`
--

CREATE TABLE `konfirmasi_kembali` (
  `id_konfirmasi` int(11) NOT NULL,
  `id_booking` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `detail_denda` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `penerbit`
--

CREATE TABLE `penerbit` (
  `id_penerbit` int(11) NOT NULL,
  `nama_penerbit` varchar(128) NOT NULL,
  `alamat_penerbit` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penerbit`
--

INSERT INTO `penerbit` (`id_penerbit`, `nama_penerbit`, `alamat_penerbit`) VALUES
(1, 'PT Raja Grafindo Persada', 'Yogayakarta'),
(2, 'PT Rineka Cipta', 'Jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `perpus`
--

CREATE TABLE `perpus` (
  `id_perpus` int(11) NOT NULL,
  `nama_perpus` varchar(128) NOT NULL,
  `alamat_perpus` varchar(128) NOT NULL,
  `deskripsi_perpus` varchar(128) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perpus`
--

INSERT INTO `perpus` (`id_perpus`, `nama_perpus`, `alamat_perpus`, `deskripsi_perpus`, `latitude`, `longitude`) VALUES
(4, 'Perpustakaan Bank Indonesia', 'Surabaya', 'Perpus Dekat Mie Akhirat', -7.3019919, 112.7450068),
(5, 'Badan Arsip dan Perpustakaan', 'Surabaya', 'Perpustakaan Rungkut', -7.3296172, 112.7712281);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(128) NOT NULL,
  `alamat_petugas` varchar(128) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tempat_lahir_petugas` varchar(128) NOT NULL,
  `tanggal_lahir_petugas` date NOT NULL,
  `username_petugas` varchar(25) NOT NULL,
  `password_petugas` varchar(25) NOT NULL,
  `status_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `alamat_petugas`, `tanggal_masuk`, `tempat_lahir_petugas`, `tanggal_lahir_petugas`, `username_petugas`, `password_petugas`, `status_petugas`) VALUES
(1, 'admin', 'surabaya', '2017-03-08', 'surabaya', '2017-03-02', 'admin', 'admin', 1),
(2, 'Ilzam', 'Surabaya', '2017-06-12', 'Tuban', '1996-05-26', 'ilzam', 'ilzam', 2),
(3, 'Ajis', 'Surabaya', '2017-06-12', 'Surabaya', '1996-06-11', 'ajis', 'ajis', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(128) NOT NULL,
  `alamat_user` varchar(128) NOT NULL,
  `tempat_lahir_user` varchar(128) NOT NULL,
  `tanggal_lahir_user` date NOT NULL,
  `username_user` varchar(25) NOT NULL,
  `password_user` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `alamat_user`, `tempat_lahir_user`, `tanggal_lahir_user`, `username_user`, `password_user`) VALUES
(1, 'Ilzam', 'Suravaya', 'Tuban', '1996-06-26', 'ilzam', 'ilzam'),
(2, 'User', 'Surabaya', 'Surabaya', '1996-05-26', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_penerbit` (`id_penerbit`),
  ADD KEY `id_perpus` (`id_perpus`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `konfirmasi_kembali`
--
ALTER TABLE `konfirmasi_kembali`
  ADD PRIMARY KEY (`id_konfirmasi`),
  ADD KEY `id_petugas` (`id_petugas`),
  ADD KEY `id_booking` (`id_booking`);

--
-- Indexes for table `penerbit`
--
ALTER TABLE `penerbit`
  ADD PRIMARY KEY (`id_penerbit`);

--
-- Indexes for table `perpus`
--
ALTER TABLE `perpus`
  ADD PRIMARY KEY (`id_perpus`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `konfirmasi_kembali`
--
ALTER TABLE `konfirmasi_kembali`
  MODIFY `id_konfirmasi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penerbit`
--
ALTER TABLE `penerbit`
  MODIFY `id_penerbit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `perpus`
--
ALTER TABLE `perpus`
  MODIFY `id_perpus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
