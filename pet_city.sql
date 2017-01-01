-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2017 at 07:32 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pet_city`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `barang_kode` varchar(10) NOT NULL,
  `kd_brg` int(5) NOT NULL AUTO_INCREMENT,
  `nama_brg` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `deskripsi` tinytext NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `diskon` int(10) NOT NULL,
  `judul_gambar` varchar(225) NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `barang_tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`kd_brg`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`barang_kode`, `kd_brg`, `nama_brg`, `kategori`, `deskripsi`, `harga`, `jumlah`, `diskon`, `judul_gambar`, `gambar`, `barang_tanggal`) VALUES
('NRW1', 15, 'Norwich', '1bulan', 'paruh pendek, punggung lebar dan pendek, sayap dan ekor pendek', 3000000.00, 11, 0, 'Ken Norwich', 'img/3346f5d5c2a5a4aeb136a66f3c4ebd37.jpg', '2016-12-31 07:00:44'),
('YKR1', 16, 'Yorkshire', '2 bulan', 'ekor panjang, paruh panjang, bulu kuning', 2000000.00, 0, 0, 'Yorkshire', 'img/6d30dc0358ced9d5a2da89c6922e86d6.jpg', '2016-12-30 09:56:16'),
('BDR1', 20, 'Border', '2 bulan', 'badan bulat', 2000000.00, 3, 0, 'keanri border', 'img/8a101699008dc95d6fde090e27a0fcc4.jpg', '2016-12-31 13:13:18');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id_member` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(25) NOT NULL,
  `gender` set('L','P') NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kodepos` varchar(6) NOT NULL,
  `kota` varchar(25) NOT NULL,
  `telp` varchar(15) DEFAULT NULL,
  `level` enum('user','admin') NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`id_member`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama`, `gender`, `email`, `alamat`, `kodepos`, `kota`, `telp`, `level`, `password`) VALUES
(2, 'titik try change', 'P', 'faid@gmail.com', 'malang', '98078', 'malang', '03418983', 'admin', 'faid'),
(3, 'admin', 'L', 'admin.com', 'admin', '8888', 'admin', '8923', 'admin', 'admin'),
(12, 'Titik N', 'P', 'titik@gmail.com', 'malang', '898', 'malang', '09084', 'admin', 'titik'),
(17, 'masak sih', 'P', 'tiyur@mail', 'malang', '9234', 'malang', '09234', 'user', 'tiyur'),
(18, 'user1', 'P', 'user1@gmail.com', 'm', '9', 'm', '9', 'user', 'user1'),
(19, 'angkara', 'P', 'angkara@gmail.com', 'Jl.Merjosari no.54 - Malang - indonesia', '676431', 'Malang', '081252676312', 'user', 'angkara'),
(20, 'tweenorubah', 'P', 't@mail', 'malang', '67543', 'malang', '098776543', 'user', 'tweeno'),
(21, 'manisku', 'P', 'manisku@gmail.com', 'malang', '987654', 'malang', '923749387', 'user', 'manisku'),
(22, 'dina', 'P', 'dina@gmail.com', 'malang', '99876', 'malang', '098766544', 'user', 'dina');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id_orders` int(15) NOT NULL AUTO_INCREMENT,
  `barang_kode` varchar(255) NOT NULL,
  `nama_brg` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `harga` int(10) NOT NULL,
  `unit` int(5) NOT NULL,
  `total` int(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(100) NOT NULL,
  `status_orders` varchar(50) NOT NULL,
  PRIMARY KEY (`id_orders`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_orders`, `barang_kode`, `nama_brg`, `deskripsi`, `harga`, `unit`, `total`, `date`, `email`, `status_orders`) VALUES
(1, 'KNR3', 'Kenari 2', 'Cepat', 700000, 1, 700000, '2016-12-20 06:59:47', 'sjobs@apple.com', 'lunas/terkirim'),
(19, 'KNR4', 'Kenari 1', 'little little', 100000, 2, 200000, '2016-12-20 19:02:05', 'tiyur@mail', 'Lunas/Terkirim'),
(20, 'KNR3', 'Kenari 2', 'Cepat', 700000, 1, 700000, '2016-12-20 19:02:05', 'tiyur@mail', 'Lunas/Terkirim'),
(22, 'KNR3', 'Kenari 2', 'Cepat', 700000, 1, 700000, '2016-12-21 00:34:40', 'titik@mail', 'Lunas/Terkirim'),
(23, 'KNR3', 'Kenari 2', 'Cepat', 700000, 1, 700000, '2016-12-21 00:46:54', 'titik@mail', ''),
(24, 'KNR3', 'Kenari 2', 'Cepat', 700000, 1, 700000, '2016-12-21 01:03:18', 'titik@mail', ''),
(25, 'KNR3', 'Kenari 2', 'Cepat', 700000, 2, 1400000, '2016-12-21 02:23:37', 'user1@gmail.com', ''),
(26, 'KNR3', 'Kenari 2', 'Cepat', 700000, 2, 1400000, '2016-12-21 03:59:47', 'titik@mail', ''),
(27, 'KNR-nit', 'Kenari 1', 'little little', 100000, 2, 200000, '2016-12-21 03:59:47', 'titik@mail', ''),
(28, 'KNR-nit', 'Kenari 1', 'little little', 100000, 2, 200000, '2016-12-21 06:02:07', 'titik@mail', ''),
(29, 'KNR3', 'Kenari 2', 'Cepat', 700000, 2, 1400000, '2016-12-21 06:02:07', 'titik@mail', ''),
(30, 'KNR3', 'Kenari 2', 'Cepat', 700000, 1, 700000, '2016-12-22 00:11:30', 'titik@mail', ''),
(31, 'KNR3', 'Kenari 2', 'Cepat', 700000, 1, 700000, '2016-12-22 00:25:01', 'titik@mail', ''),
(32, 'KNR3', 'Kenari 2', 'Cepat', 700000, 1, 700000, '2016-12-22 01:49:58', 'titik@mail', ''),
(33, 'KENARI 1', 'KNR1', 'berbulu kunig', 9000000, 1, 9000000, '2016-12-22 03:52:33', 'titik@mail', ''),
(34, 'KENARI 1', 'KNR1', 'berbulu kunig', 9000000, 1, 9000000, '2016-12-22 04:01:00', 'angkara@gmail.com', ''),
(35, 'KENARI 1', 'KNR1', 'berbulu kunig', 9000000, 1, 9000000, '2016-12-26 01:26:03', 'titik@mail', ''),
(36, 'KENARI 1', 'KNR1', 'berbulu kunig', 9000000, 2, 18000000, '2016-12-27 02:08:24', 'titik@mail', ''),
(37, 'KENARI 1', 'KNR1', 'berbulu kunig', 9000000, 1, 9000000, '2016-12-27 02:27:03', 'titik@mail', ''),
(38, 'KENARI 1', 'KNR1', 'berbulu kunig', 9000000, 3, 27000000, '2016-12-27 04:01:52', 'tweeno@mail', ''),
(39, 'KENARI 1', 'KNR1', 'berbulu kunig', 9000000, 3, 27000000, '2016-12-27 05:18:51', 'manisku@gmail.com', ''),
(40, 'Kenari  No', 'Nor1', 'paruh pendek, punggung lebar dan pendek, sayap dan ekor pendek', 3000000, 1, 3000000, '2016-12-27 05:39:54', 'manisku@gmail.com', ''),
(41, 'KENARI 1', 'KNR1', 'berbulu kunig', 9000000, 2, 18000000, '2016-12-27 05:39:54', 'manisku@gmail.com', ''),
(42, 'Kenari  No', 'Nor1', 'paruh pendek, punggung lebar dan pendek, sayap dan ekor pendek', 3000000, 1, 3000000, '2016-12-27 05:56:56', 'manisku@gmail.com', ''),
(43, 'KENARI 1', 'KNR1', 'berbulu kunig', 9000000, 1, 9000000, '2016-12-27 14:47:37', 'dina@gmail.com', ''),
(44, 'YKR', 'Yorkrshire', 'ekor panjang, paruh panjang, bulu kuning', 2000000, 1, 2000000, '2016-12-27 14:47:37', 'dina@gmail.com', ''),
(45, 'YKR1', 'Yorkshire', 'ekor panjang, paruh panjang, bulu kuning', 2000000, 2, 4000000, '2016-12-30 09:56:16', 't@mail', ''),
(46, 'NRW1', 'Norwich', 'paruh pendek, punggung lebar dan pendek, sayap dan ekor pendek', 3000000, 1, 3000000, '2016-12-31 07:00:44', 't@mail', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
