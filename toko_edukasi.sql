-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2018 at 04:54 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_edukasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(10) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_user`, `username`, `password`, `level`, `nama_lengkap`, `email`, `alamat`, `no_telp`, `foto`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin', 'admin@gmail.com', 'alamat admin', '12345', ''),
(2, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', 'user', 'user@gmail.com', 'alamat user', '0823112345', ''),
(3, 'user2', '7e58d63b60197ceb55a1c487989a3720', 'user', 'user2', 'user2@gmail.com', 'alamat user2', '08573278281', ''),
(4, 'user3', '92877af70a45fd6a2ed7fe81e1236b78', 'user', 'user3', 'user3@gmail.com', 'alamat user3', '08257923912', ''),
(5, 'user4', '3f02ebe3d7929b091e3d8ccfde2f3bc6', 'user', 'user4', 'user4@gmail.com', 'alamat user4', '0321342595', ''),
(6, 'user5', '0a791842f52a0acfbb3a783378c066b8', 'user', 'user5', 'user5@gmail.com', 'alamat user5', '0812182549', '');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(8) NOT NULL,
  `id_transaksi` int(8) NOT NULL,
  `no_kartu` int(20) NOT NULL,
  `nama_pemilik` varchar(50) NOT NULL,
  `masa_berlaku` date NOT NULL,
  `cvv` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(8) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga` int(200) NOT NULL,
  `stok` int(200) NOT NULL,
  `deskripsi` varchar(80) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga`, `stok`, `deskripsi`, `gambar`) VALUES
(1, 'Topi Sekolah SD', 15000, 5, 'Murah', 'c1.jpg'),
(2, 'Topi Sekolah SMP', 20000, 7, 'Nyaman, dan Aman', 'Topi_SMP.png'),
(3, 'Topi Sekolah SMA', 25000, 10, 'Khusus SMA', 'topi_sma.png'),
(4, 'Dasi SD', 10000, 7, 'Dasi standard', 'dasi_SD.jpg'),
(5, 'Dasi SMA', 12500, 10, 'Khusus SMA', 'dasi_SMA.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(8) NOT NULL,
  `id_user` int(8) NOT NULL,
  `id_produk` int(8) NOT NULL,
  `jumlah` int(200) NOT NULL,
  `total_harga` int(15) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `id_produk`, `jumlah`, `total_harga`, `tanggal`) VALUES
(1, 2, 1, 2, 30000, '2018-07-11'),
(2, 2, 1, 18, 270000, '2018-07-11'),
(3, 2, 5, 100, 1250000, '2018-07-11'),
(4, 2, 1, 16, 240000, '2018-07-11'),
(5, 2, 1, 5, 75000, '2018-07-11'),
(6, 2, 1, 5, 75000, '2018-07-11'),
(7, 2, 1, 6, 90000, '2018-07-11'),
(8, 2, 1, 6, 90000, '2018-07-11'),
(9, 2, 1, 100, 1500000, '2018-07-11'),
(10, 2, 1, 100, 1500000, '2018-07-11'),
(11, 2, 1, 10, 150000, '2018-07-11'),
(12, 2, 1, 5, 75000, '2018-07-11'),
(13, 2, 1, 6, 90000, '2018-07-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_pembayaran` (`id_pembayaran`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_produk` (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `login` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
