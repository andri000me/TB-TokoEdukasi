-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2019 at 09:29 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkl-dinsos`
--

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_tksk` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `uraian_tempat` varchar(255) NOT NULL,
  `pelaksana` varchar(255) NOT NULL,
  `sasaran` varchar(255) NOT NULL,
  `materi` varchar(255) NOT NULL,
  `hasil_kegiatan` varchar(255) NOT NULL,
  `faktor_pendukung_penghambat` varchar(255) NOT NULL,
  `upaya_pemecahan` varchar(255) NOT NULL,
  `rencana_kerja` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `id_user`, `nama_tksk`, `tanggal`, `uraian_tempat`, `pelaksana`, `sasaran`, `materi`, `hasil_kegiatan`, `faktor_pendukung_penghambat`, `upaya_pemecahan`, `rencana_kerja`) VALUES
(1, 1, '', '2019-01-09', 'Desa Junrejo', 'Dini Pus', 'masyarakat', '-', 'Berjalan', '-', '-', '-'),
(2, 2, '', '2019-01-09', 'Desa Junrejo', 'Dini Pus', 'masyarakat', '-', 'Berjalan', '-', '-', '-'),
(3, 3, '', '2019-01-09', 'Desa Junrejo', 'Dini Pus', 'masyarakat', '-', 'Berjalan', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_user`, `nama_lengkap`, `username`, `password`, `level`, `email`, `kecamatan`) VALUES
(1, '', 'dinsos', '845388911209126f2566e2edeedcbc45', 'admin', '', ''),
(2, '', 'desa', 'e54cc06625bbadf12163b41a3cb92bf8', 'admin', '', ''),
(3, 'dini', 'junrejo', 'junrejo', 'admin', 'junrejo@gmail.com', 'junrejo'),
(4, 'dina', 'pandanrejo', '1534e174b97c78c04873072ab0c96630', 'user', 'pandanrejo@gmail.com', 'pandanrejo'),
(5, 'abdul', 'pandanrejo', '1534e174b97c78c04873072ab0c96630', 'user', 'pandanrejo@gmail.com', 'pandanrejo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `login` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
