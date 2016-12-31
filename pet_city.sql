-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2016 at 05:01 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`barang_kode`, `kd_brg`, `nama_brg`, `kategori`, `deskripsi`, `harga`, `jumlah`, `diskon`, `judul_gambar`, `gambar`, `barang_tanggal`) VALUES
('KNR-nit', 8, 'Kenari 1', 'k', 'little little', 100000.00, 85, 0, 'Kenari 1', 'img/1e289135b6a33c73aaa068f7ae2d8f93.jpg', '2016-12-21 03:59:47'),
('KNR3', 9, 'Kenari 2', 'Bertarung', 'Cepat', 700000.00, 83, 0, 'Kenari 2', 'img/cd30485f7108819120be0aa3fe9acc73.jpg', '2016-12-21 03:59:47'),
('', 11, 'kenari 101', 'nothing', 'just try', 90000.00, 0, 0, 'kenari 4', 'img/33e7b0fc441cbb916b281f5233c26dba.jpg', '0000-00-00 00:00:00'),
('Kenari 90', 12, '098', 'kiloan', 'just try', 90000.00, 20, 0, 'kenari 90', 'img/54790a2d4def735ac68a369a3fdfc341.png', '0000-00-00 00:00:00'),
('jikaaku', 13, 'bukan kamu', 'ku berherhenti', 'melupakanmu', 90000.00, 0, 0, 'jika ak', 'img/f80ba51fa1ee2f028f27f5974894472f.png', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `idpelanggan` int(20) NOT NULL AUTO_INCREMENT,
  `nama` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`idpelanggan`),
  KEY `idpelanggan` (`idpelanggan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`idpelanggan`, `nama`, `email`, `password`) VALUES
(1, '', '', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama`, `gender`, `email`, `alamat`, `kodepos`, `kota`, `telp`, `level`, `password`) VALUES
(2, 'faid', 'P', 'faid@gmail.com', 'malang', '98078', 'malang', '03418983', 'admin', 'faid'),
(3, 'admin', 'L', 'admin.com', 'admin', '8888', 'admin', '8923', 'admin', 'admin'),
(12, 'titik', 'P', 'titik@mail', 'malang', '898', 'malang', '09084', 'user', 'titik'),
(17, 'masak sih', 'P', 'tiyur@mail', 'malang', '9234', 'malang', '09234', 'user', 'tiyur'),
(18, 'user1', 'P', 'user1@gmail.com', 'm', '9', 'm', '9', 'user', 'user1');

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
  PRIMARY KEY (`id_orders`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_orders`, `barang_kode`, `nama_brg`, `deskripsi`, `harga`, `unit`, `total`, `date`, `email`) VALUES
(1, 'KNR3', 'Kenari 2', 'Cepat', 700000, 1, 700000, '2016-12-20 06:59:47', 'sjobs@apple.com'),
(2, 'KNR3', 'Kenari 2', 'Cepat', 700000, 1, 700000, '2016-12-20 07:08:18', ''),
(3, '', 'kenari 101', 'just try', 90000, 2, 180000, '2016-12-20 07:08:18', ''),
(4, '', 'kenari 101', 'just try', 90000, 1, 90000, '2016-12-20 07:15:54', ''),
(5, 'KNR4', 'Kenari 1', 'little little', 100000, 1, 100000, '2016-12-20 07:20:34', '1'),
(6, 'KNR4', 'Kenari 1', 'little little', 100000, 1, 100000, '2016-12-20 07:24:59', '1'),
(7, 'KNR3', 'Kenari 2', 'Cepat', 700000, 1, 700000, '2016-12-20 16:20:24', '1'),
(8, 'KNR3', 'Kenari 2', 'Cepat', 700000, 1, 700000, '2016-12-20 16:27:39', '1'),
(9, 'KNR3', 'Kenari 2', 'Cepat', 700000, 1, 700000, '2016-12-20 16:29:28', ''),
(10, 'KNR3', 'Kenari 2', 'Cepat', 700000, 1, 700000, '2016-12-20 16:31:33', ''),
(11, 'KNR3', 'Kenari 2', 'Cepat', 700000, 1, 700000, '2016-12-20 16:32:38', ''),
(12, 'KNR3', 'Kenari 2', 'Cepat', 700000, 1, 700000, '2016-12-20 16:34:00', '1'),
(13, 'KNR3', 'Kenari 2', 'Cepat', 700000, 1, 700000, '2016-12-20 16:44:07', '1'),
(14, '', 'kenari 101', 'just try', 90000, 1, 90000, '2016-12-20 17:31:55', '1'),
(15, 'KNR3', 'Kenari 2', 'Cepat', 700000, 1, 700000, '2016-12-20 18:05:13', ''),
(16, '', 'kenari 101', 'just try', 90000, 1, 90000, '2016-12-20 18:05:51', ''),
(17, 'KNR3', 'Kenari 2', 'Cepat', 700000, 1, 700000, '2016-12-20 18:06:57', 'titik'),
(18, '', 'kenari 101', 'just try', 90000, 1, 90000, '2016-12-20 18:45:59', 'tiyur@mail'),
(19, 'KNR4', 'Kenari 1', 'little little', 100000, 2, 200000, '2016-12-20 19:02:05', 'tiyur@mail'),
(20, 'KNR3', 'Kenari 2', 'Cepat', 700000, 1, 700000, '2016-12-20 19:02:05', 'tiyur@mail'),
(21, '', 'kenari 101', 'just try', 90000, 2, 180000, '2016-12-21 00:03:53', 'titik@mail'),
(22, 'KNR3', 'Kenari 2', 'Cepat', 700000, 1, 700000, '2016-12-21 00:34:40', 'titik@mail'),
(23, 'KNR3', 'Kenari 2', 'Cepat', 700000, 1, 700000, '2016-12-21 00:46:54', 'titik@mail'),
(24, 'KNR3', 'Kenari 2', 'Cepat', 700000, 1, 700000, '2016-12-21 01:03:18', 'titik@mail'),
(25, 'KNR3', 'Kenari 2', 'Cepat', 700000, 2, 1400000, '2016-12-21 02:23:37', 'user1@gmail.com'),
(26, 'KNR3', 'Kenari 2', 'Cepat', 700000, 2, 1400000, '2016-12-21 03:59:47', 'titik@mail'),
(27, 'KNR-nit', 'Kenari 1', 'little little', 100000, 2, 200000, '2016-12-21 03:59:47', 'titik@mail');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
