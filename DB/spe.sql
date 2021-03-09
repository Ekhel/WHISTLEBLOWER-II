-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2021 at 07:49 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spe`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_aduan`
--

CREATE TABLE `tb_aduan` (
  `id_aduan` int(12) NOT NULL,
  `id_user` int(10) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_kategori` int(10) NOT NULL,
  `id_distrik` int(10) NOT NULL,
  `id_kampung` int(10) NOT NULL,
  `permasalahan` text NOT NULL,
  `terlapor` varchar(10) NOT NULL,
  `date_created` date NOT NULL,
  `status_read` int(1) NOT NULL DEFAULT '0',
  `status_pemeriksa` int(1) NOT NULL DEFAULT '0',
  `status_administrasi` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_aduan`
--

INSERT INTO `tb_aduan` (`id_aduan`, `id_user`, `nama`, `no_hp`, `email`, `id_kategori`, `id_distrik`, `id_kampung`, `permasalahan`, `terlapor`, `date_created`, `status_read`, `status_pemeriksa`, `status_administrasi`) VALUES
(1, 0, 'MICHAEL KARAFIR', '081344367764', 'michaelkarafir@gmail.com', 2, 2, 2, 'Test Aduan Masuk 1 Untuk Cek Status.', 'Kepala Kam', '2020-03-13', 1, 1, 1),
(2, 0, 'YOHANIS TUNYA', '08134453768', 'michael_inline@outlook.com', 2, 2, 2, 'Tes Aduan masuk 2 ', 'Kepala Kam', '2020-03-14', 1, 0, 0),
(3, 6, 'Maria', '08134453768', 'michael_inline@outlook.com', 2, 2, 2, 'Tes Aduan Masuk Ke Tiga', 'Kepala Kam', '2020-12-01', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_distrik`
--

CREATE TABLE `tb_distrik` (
  `id_distrik` int(10) NOT NULL,
  `distrik` varchar(50) NOT NULL,
  `kadis` varchar(120) NOT NULL,
  `sekdis` varchar(120) NOT NULL,
  `no_kontak` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_distrik`
--

INSERT INTO `tb_distrik` (`id_distrik`, `distrik`, `kadis`, `sekdis`, `no_kontak`) VALUES
(3, 'Sentani', '-', '-', '-'),
(4, 'Sentani Timur', '-', '-', '-'),
(5, 'Waibu', '-', '-', '-'),
(6, 'Ebungfauw', '-', '-', '-'),
(7, 'Sentani Barat', '-', '-', '-'),
(8, 'Depapre', '-', '-', '-'),
(9, 'Ravenirara', '-', '-', '-'),
(10, 'Yokari', '-', '-', '-'),
(12, 'Demta', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kampung`
--

CREATE TABLE `tb_kampung` (
  `id_kampung` int(10) NOT NULL,
  `id_distrik` int(10) NOT NULL,
  `kampung` varchar(50) NOT NULL,
  `kepala_kamp` varchar(50) NOT NULL,
  `sekam` varchar(50) NOT NULL,
  `kontak` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_keterangan_status`
--

CREATE TABLE `tb_keterangan_status` (
  `id_ket_status` int(10) NOT NULL,
  `status` varchar(50) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `keterangan_status` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_keterangan_status`
--

INSERT INTO `tb_keterangan_status` (`id_ket_status`, `status`, `icon`, `keterangan_status`) VALUES
(1, 'Aduan Telah Diterima', 'terbaca.png', 'Pengaduan Telah Masuk dan Diterima Oleh Admin.'),
(2, 'diteruskan ke pemeriksa', 'pemeriksa.png', 'Aduan Telah diverifikasi Admin dan Diteruskan ke bagian Pemeriksaan.'),
(3, 'Dikembalikan', 'kembali.png', 'Aduan dikembalikan dengan Alasan :'),
(4, 'Aduan diteruskan kebagian administrasi', 'administrasi.png', 'Aduan diteruskan kebagian administrasi dan akan diproses untuk kelengkapanpemeriksaan dalam waktu dekat');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE `tb_status` (
  `id_status` int(10) NOT NULL,
  `user` varchar(15) NOT NULL,
  `id_aduan` int(10) NOT NULL,
  `id_ket_status` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `ket` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_status`
--

INSERT INTO `tb_status` (`id_status`, `user`, `id_aduan`, `id_ket_status`, `tanggal`, `ket`) VALUES
(21, 'ekhel', 3, 1, '2020-12-18', NULL),
(22, 'ekhel', 3, 2, '2020-12-18', NULL),
(26, 'ekhel', 1, 1, '2021-01-26', NULL),
(27, 'ekhel', 1, 2, '2021-01-26', NULL),
(28, 'michael', 1, 4, '2021-01-26', NULL),
(29, 'michael', 3, 4, '2021-03-03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(14) NOT NULL,
  `status` enum('aktif','blok') CHARACTER SET utf8 NOT NULL,
  `nama` varchar(250) CHARACTER SET utf8 NOT NULL,
  `sandi` varchar(50) CHARACTER SET utf8 NOT NULL,
  `sandi_deskripsi` varchar(50) NOT NULL,
  `level` int(10) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `nama_lengkap` varchar(50) CHARACTER SET utf8 NOT NULL,
  `kontak` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `status`, `nama`, `sandi`, `sandi_deskripsi`, `level`, `email`, `nama_lengkap`, `kontak`) VALUES
(1, 'aktif', 'ekhel', '82bc8f5141a48dd57bb43d91a5faae88', 'ekhel123', 1, 'blackmanskill@gmail.com', 'Michael Karafir', '081344367764'),
(2, 'aktif', 'michael', '82bc8f5141a48dd57bb43d91a5faae88', 'ekhel123', 2, 'michaelkarafir@gmail.com', 'Mike', '-'),
(6, 'aktif', 'maria', 'f8461b554d59b3014e8ff5165dc62fac', 'maria123', 3, 'maria@gmail.com', 'Maria Lengkong', '0813445667554');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_level`
--

CREATE TABLE `tb_user_level` (
  `id_level` int(10) NOT NULL,
  `level` varchar(30) NOT NULL,
  `deskripsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user_level`
--

INSERT INTO `tb_user_level` (`id_level`, `level`, `deskripsi`) VALUES
(1, '1', 'admin'),
(2, '2', 'pemeriksa'),
(3, '3', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_aduan`
--
ALTER TABLE `tb_aduan`
  ADD PRIMARY KEY (`id_aduan`);

--
-- Indexes for table `tb_distrik`
--
ALTER TABLE `tb_distrik`
  ADD PRIMARY KEY (`id_distrik`);

--
-- Indexes for table `tb_kampung`
--
ALTER TABLE `tb_kampung`
  ADD PRIMARY KEY (`id_kampung`);

--
-- Indexes for table `tb_keterangan_status`
--
ALTER TABLE `tb_keterangan_status`
  ADD PRIMARY KEY (`id_ket_status`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_user_level`
--
ALTER TABLE `tb_user_level`
  ADD PRIMARY KEY (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_aduan`
--
ALTER TABLE `tb_aduan`
  MODIFY `id_aduan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_distrik`
--
ALTER TABLE `tb_distrik`
  MODIFY `id_distrik` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_kampung`
--
ALTER TABLE `tb_kampung`
  MODIFY `id_kampung` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_keterangan_status`
--
ALTER TABLE `tb_keterangan_status`
  MODIFY `id_ket_status` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_status`
--
ALTER TABLE `tb_status`
  MODIFY `id_status` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_user_level`
--
ALTER TABLE `tb_user_level`
  MODIFY `id_level` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
