-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2022 at 09:48 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiketwisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
('', 'admin', '123'),
('1111', 'admin', 'admin123'),
('1111', 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `nama` varchar(50) NOT NULL,
  `no_identitas` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `tempat_wisata` text NOT NULL,
  `tgl_kunjungan` date NOT NULL,
  `jmlh_pengunjung` int(11) NOT NULL,
  `pengunjung_anak` int(11) NOT NULL,
  `harga` int(50) NOT NULL,
  `diskon` int(50) NOT NULL,
  `total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`nama`, `no_identitas`, `no_hp`, `tempat_wisata`, `tgl_kunjungan`, `jmlh_pengunjung`, `pengunjung_anak`, `harga`, `diskon`, `total`) VALUES
('Anit', '2018110044', '080863425456', 'jakabaring', '2022-09-21', 5, 3, 20000, 24000, 136000),
('Agung Dwi Prasetya ', '2018110055', '0859899489', 'jakabaring', '2022-09-21', 5, 1, 20000, 8000, 112000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`no_identitas`),
  ADD UNIQUE KEY `no_identitas` (`no_identitas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
