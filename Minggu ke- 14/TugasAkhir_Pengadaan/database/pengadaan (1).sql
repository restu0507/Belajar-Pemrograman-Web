-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2020 at 07:02 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengadaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kode_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jenis_barang` varchar(50) NOT NULL,
  `stock_barang` int(11) NOT NULL,
  `harga_barang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode_barang`, `nama_barang`, `jenis_barang`, `stock_barang`, `harga_barang`) VALUES
(6543, 'Kacang Tanah', 'Mentah', 6, 'Rp1.000'),
(9090, 'Ayam', 'Mentah', 5, 'Rp20.000');

-- --------------------------------------------------------

--
-- Table structure for table `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `kode_nota` int(11) NOT NULL,
  `kode_pesan` int(11) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `kode_suplier` int(11) NOT NULL,
  `kode_barang` int(11) NOT NULL,
  `jumlah_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang_masuk`
--

INSERT INTO `barang_masuk` (`kode_nota`, `kode_pesan`, `tanggal_masuk`, `kode_suplier`, `kode_barang`, `jumlah_barang`) VALUES
(4300, 6321, '2020-06-30', 1267, 6543, 5),
(4333, 6321, '2020-07-05', 9008, 6543, 4);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `kode_pesan` int(11) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `kode_suplier` int(11) NOT NULL,
  `kode_barang` int(11) NOT NULL,
  `jumlah_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`kode_pesan`, `tanggal_pesan`, `kode_suplier`, `kode_barang`, `jumlah_barang`) VALUES
(6321, '2020-06-30', 9008, 6543, 3);

-- --------------------------------------------------------

--
-- Table structure for table `suplier`
--

CREATE TABLE `suplier` (
  `kode_suplier` int(11) NOT NULL,
  `nama_suplier` varchar(100) NOT NULL,
  `jenis_suplier` varchar(50) NOT NULL,
  `alamat_suplier` varchar(200) NOT NULL,
  `telp_suplier` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suplier`
--

INSERT INTO `suplier` (`kode_suplier`, `nama_suplier`, `jenis_suplier`, `alamat_suplier`, `telp_suplier`) VALUES
(1267, 'Rudi', 'Daging', 'Semarang', 86241),
(9008, 'Iwan janu', 'Mentah', 'Semarang', 888867);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `jenis_user` varchar(50) NOT NULL,
  `role` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `foto_profil` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama_user`, `jenis_user`, `role`, `alamat`, `no_hp`, `foto_profil`) VALUES
(35, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Indra Aji', 'admin', 0, 'Jalan Maju', '086234234', '2.jpg'),
(37, 'restu', 'de9ce4ee35f378f6d801a3820855f1cd', 'restu prihandika', 'pemilik', 2, 'Jalan Mundur', '080627', 'A12.2018.05991.jpg'),
(38, 'gudang', '202446dd1d6028084426867365b0c7a1', 'bagas andriyanto', 'Staf Gudang', 1, 'jalan sadewa 1', '085234190', 'profil.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`kode_nota`),
  ADD KEY `barang_masuk_ibfk_1` (`kode_pesan`),
  ADD KEY `barang_masuk_ibfk_3` (`kode_barang`),
  ADD KEY `barang_masuk_ibfk_2` (`kode_suplier`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`kode_pesan`),
  ADD KEY `pemasanan_relasi` (`kode_barang`),
  ADD KEY `pemesanan_ibfk_1` (`kode_suplier`);

--
-- Indexes for table `suplier`
--
ALTER TABLE `suplier`
  ADD PRIMARY KEY (`kode_suplier`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD CONSTRAINT `barang_masuk_ibfk_1` FOREIGN KEY (`kode_pesan`) REFERENCES `pemesanan` (`kode_pesan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `barang_masuk_ibfk_2` FOREIGN KEY (`kode_suplier`) REFERENCES `suplier` (`kode_suplier`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `barang_masuk_ibfk_3` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemasanan_relasi` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`kode_suplier`) REFERENCES `suplier` (`kode_suplier`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
