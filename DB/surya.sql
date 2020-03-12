-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2019 at 05:52 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surya`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(10) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Surat'),
(2, 'Undangan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_klasifikasi`
--

CREATE TABLE `tb_klasifikasi` (
  `kode` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `uraian` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_klasifikasi`
--

INSERT INTO `tb_klasifikasi` (`kode`, `nama`, `uraian`) VALUES
(1, 'Surat Dinas Keluar', 'te');

-- --------------------------------------------------------

--
-- Table structure for table `tb_suratmasuk`
--

CREATE TABLE `tb_suratmasuk` (
  `id_suratmasuk` int(10) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `asal_surat` varchar(200) NOT NULL,
  `isi_suratmasuk` varchar(256) NOT NULL,
  `tgl_surat` date NOT NULL,
  `tgl_diterima` date NOT NULL,
  `ket_suratmasuk` varchar(100) NOT NULL,
  `file_path` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_suratmasuk`
--

INSERT INTO `tb_suratmasuk` (`id_suratmasuk`, `kode`, `asal_surat`, `isi_suratmasuk`, `tgl_surat`, `tgl_diterima`, `ket_suratmasuk`, `file_path`) VALUES
(2, 'BSM527092019001', 'Perindag', '', '2019-09-27', '2019-09-30', 'dgbsdgbnfgnf', '40c6ff6aeaec0d2fa9d964683e192987.png'),
(3, 'BSM527092019002', 'BKPSDM', 'Monitoring P5', '2019-09-26', '2019-09-30', 'gbdfwefwargsethsnen', '682697dc5c943c5f404c79c9ebf1cec6.jpg');

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
(1, 'aktif', 'ekhel', '82bc8f5141a48dd57bb43d91a5faae88', 'ekhel123', 1, 'blackmanskill@gmail.com', 'Michael Karafir', '081344367764');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_level`
--

CREATE TABLE `tb_user_level` (
  `id_level` int(11) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user_level`
--

INSERT INTO `tb_user_level` (`id_level`, `level`) VALUES
(1, 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_klasifikasi`
--
ALTER TABLE `tb_klasifikasi`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tb_suratmasuk`
--
ALTER TABLE `tb_suratmasuk`
  ADD PRIMARY KEY (`id_suratmasuk`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_suratmasuk`
--
ALTER TABLE `tb_suratmasuk`
  MODIFY `id_suratmasuk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
