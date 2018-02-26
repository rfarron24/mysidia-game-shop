-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 07, 2013 at 08:13 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mysidiagame`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang_order`
--

CREATE TABLE IF NOT EXISTS `barang_order` (
  `no_order` char(12) NOT NULL,
  `kode_barang` char(8) NOT NULL,
  `jml_order` int(11) NOT NULL,
  `harga_barang` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_order`
--

INSERT INTO `barang_order` (`no_order`, `kode_barang`, `jml_order`, `harga_barang`) VALUES
('001', '002', 5, 25000);

-- --------------------------------------------------------

--
-- Table structure for table `data_barang`
--

CREATE TABLE IF NOT EXISTS `data_barang` (
  `kode_barang` char(8) NOT NULL,
  `nama_barang` varchar(70) NOT NULL,
  `platform` char(30) NOT NULL,
  `harga_barang` double NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  PRIMARY KEY (`kode_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_barang`
--

INSERT INTO `data_barang` (`kode_barang`, `nama_barang`, `platform`, `harga_barang`, `jumlah_barang`) VALUES
('002', 'Monster Hunter III', 'Nintendo Wii', 25000, 20),
('003', 'Legend Of Zelda', 'Playstation 2', 30000, 10),
('004', 'Sonic Hedgehog', 'Nintendo Wii', 140000, 15),
('006', 'Final Fantasy IV ', 'Nintendo DS', 45000, 10),
('011', 'Kingdom Hearts', 'PSP', 52000, 10);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `no_order` char(12) NOT NULL,
  `nama_pemesan` char(80) NOT NULL,
  `alamat` char(15) NOT NULL,
  `no_hp` char(12) NOT NULL,
  `email` char(50) NOT NULL,
  `bukti_bayar` char(200) NOT NULL,
  `status_kirim` char(15) NOT NULL,
  `tgl_order` char(11) NOT NULL,
  `tgl_kirim` char(11) NOT NULL,
  PRIMARY KEY (`no_order`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`no_order`, `nama_pemesan`, `alamat`, `no_hp`, `email`, `bukti_bayar`, `status_kirim`, `tgl_order`, `tgl_kirim`) VALUES
('001', 'Nana', 'Jl. Jend Sudirm', '081335569987', 'nana@gmail.com', '-', 'Belum Terkirim', 'Juni-04-201', 'Juni-10-201');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` char(10) NOT NULL,
  `password` char(10) NOT NULL,
  PRIMARY KEY (`username`,`password`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', 'admin'),
('user', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
