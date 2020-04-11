-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 11, 2020 at 05:40 AM
-- Server version: 8.0.19
-- PHP Version: 7.4.4RC1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sewamobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `noplat` varchar(9) NOT NULL,
  `idtipe` char(5) DEFAULT NULL,
  `tahun` int DEFAULT NULL,
  `tarif` int DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`noplat`, `idtipe`, `tahun`, `tarif`, `status`) VALUES
('B1234CD', 'A0001', 2010, 200000, 'Baik'),
('D4567GGG', 'B0002', 2012, 225000, 'Baik'),
('F8888FF', 'C0003', 2014, 250000, 'Baik');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `noktp` char(16) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `telepon` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`noktp`, `nama`, `alamat`, `telepon`) VALUES
('1234567890123456', 'Nana', 'Magelang', '081344444444'),
('4567890123456789', 'Nona', 'Boyolali', '081355555555'),
('6789012345678901', 'Nina', 'Klaten', '081366666666');

-- --------------------------------------------------------

--
-- Table structure for table `sopir`
--

CREATE TABLE `sopir` (
  `idsopir` int NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `telepon` varchar(13) DEFAULT NULL,
  `sim` char(12) DEFAULT NULL,
  `tarif` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sopir`
--

INSERT INTO `sopir` (`idsopir`, `nama`, `alamat`, `telepon`, `sim`, `tarif`) VALUES
(1, 'Rosa', 'Semarang', '081311111111', '000000111111', 75000),
(2, 'Reza', 'Solo', '081322222222', '111111222222', 125000),
(3, 'Raja', 'Yogyakarta', '081333333333', '222222333333', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `tipekendaraan`
--

CREATE TABLE `tipekendaraan` (
  `idtipe` char(5) NOT NULL,
  `tipe` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tipekendaraan`
--

INSERT INTO `tipekendaraan` (`idtipe`, `tipe`) VALUES
('A0001', 'Matic'),
('B0002', 'Manual'),
('C0003', 'Matic');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `notransaksi` char(10) NOT NULL,
  `noplat` varchar(9) DEFAULT NULL,
  `idsopir` int DEFAULT NULL,
  `noktp` char(16) DEFAULT NULL,
  `tanggalpesan` date DEFAULT NULL,
  `tanggalpinjam` date DEFAULT NULL,
  `tanggalkembalirencana` date DEFAULT NULL,
  `jamkembalirencana` time DEFAULT NULL,
  `tanggalkembalirealisasi` date DEFAULT NULL,
  `jamkembalirealisasi` time DEFAULT NULL,
  `denda` int DEFAULT NULL,
  `kmpinjam` int DEFAULT NULL,
  `kmkembali` int DEFAULT NULL,
  `bbmpinjam` varchar(50) DEFAULT NULL,
  `bbmkembali` varchar(50) DEFAULT NULL,
  `kondisipinjam` varchar(100) DEFAULT NULL,
  `kondisikembali` varchar(100) DEFAULT NULL,
  `kerusakan` varchar(100) DEFAULT NULL,
  `biayakerusakan` int DEFAULT NULL,
  `biayabbm` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`notransaksi`, `noplat`, `idsopir`, `noktp`, `tanggalpesan`, `tanggalpinjam`, `tanggalkembalirencana`, `jamkembalirencana`, `tanggalkembalirealisasi`, `jamkembalirealisasi`, `denda`, `kmpinjam`, `kmkembali`, `bbmpinjam`, `bbmkembali`, `kondisipinjam`, `kondisikembali`, `kerusakan`, `biayakerusakan`, `biayabbm`) VALUES
('T000000001', 'B1234CD', 1, '1234567890123456', '2016-01-01', '2016-02-02', '2016-02-14', '18:00:00', '2016-02-14', '15:00:00', 0, 1000, 1200, 'full', 'full', 'baik', 'baik', 'tidak ada', 0, 0),
('T000000002', 'D4567GGG', 2, '4567890123456789', '2016-02-02', '2016-02-15', '2016-03-01', '18:00:00', '2016-03-03', '12:00:00', 400000, 700, 1500, 'full', 'setengah', 'baik', 'tidak', 'bemper penyok', 200000, 75000),
('T000000003', 'F8888FF', 3, '6789012345678901', '2016-03-03', '2016-03-11', '2016-04-04', '18:00:00', '2016-03-04', '21:00:00', 50000, 2000, 3000, 'setengah', 'full', 'baik', 'baik', 'tidak ada', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`noplat`),
  ADD KEY `kendaraan_ibfk_1` (`idtipe`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`noktp`),
  ADD UNIQUE KEY `telepon` (`telepon`);

--
-- Indexes for table `sopir`
--
ALTER TABLE `sopir`
  ADD PRIMARY KEY (`idsopir`),
  ADD UNIQUE KEY `telepon` (`telepon`),
  ADD UNIQUE KEY `sim` (`sim`);

--
-- Indexes for table `tipekendaraan`
--
ALTER TABLE `tipekendaraan`
  ADD PRIMARY KEY (`idtipe`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`notransaksi`),
  ADD KEY `transaksi_ibfk_1` (`noplat`),
  ADD KEY `transaksi_ibfk_2` (`idsopir`),
  ADD KEY `transaksi_ibfk_3` (`noktp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sopir`
--
ALTER TABLE `sopir`
  MODIFY `idsopir` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD CONSTRAINT `kendaraan_ibfk_1` FOREIGN KEY (`idtipe`) REFERENCES `tipekendaraan` (`idtipe`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`noplat`) REFERENCES `kendaraan` (`noplat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`idsopir`) REFERENCES `sopir` (`idsopir`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`noktp`) REFERENCES `pelanggan` (`noktp`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
