-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2020 at 03:51 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbhotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `info_kamar`
--

CREATE TABLE `info_kamar` (
  `id_kamar` int(20) NOT NULL,
  `tipe` varchar(30) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info_kamar`
--

INSERT INTO `info_kamar` (`id_kamar`, `tipe`, `harga`, `deskripsi`) VALUES
(101, 'VIP', '3000000', 'Luas'),
(102, 'VVIP', '500000', 'Sangat Luas dan Megah'),
(103, 'BISNIS', '250000', 'Cukup Luas'),
(104, 'EKONOMI', '200000', 'Kamar Biasa\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kamar`
--

CREATE TABLE `tbl_kamar` (
  `id_kamar` int(10) NOT NULL,
  `no_identitas` int(20) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `tipe_kamar` varchar(10) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kamar`
--

INSERT INTO `tbl_kamar` (`id_kamar`, `no_identitas`, `nama_pelanggan`, `tanggal`, `tipe_kamar`, `harga`, `deskripsi`) VALUES
(103, 16220290, 'jeki', '2020-01-07', 'VIP', '3000000', 'Ruangan Sultan 2'),
(104, 16220280, 'Jainuddin', '2020-01-07', 'VIP', '250000', 'Ruangan Sangat Sultan'),
(107, 2147483647, 'Deni', '2019-02-01', 'VVIP', '3500000', 'Ruangan Bebas Rokok');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `passwd` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `passwd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', 'Jeki Fernandes', 1, 'Staff Hotel'),
('Muhiddin', '21232f297a57a5a743894a0e4a801fc3', 'Muhiddin@gmail.com', 'Muhiddin', 1, 'Staff'),
('suli', '21232f297a57a5a743894a0e4a801fc3', 'suli@gmail.com', 'Suli', 1, 'Staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_kamar`
--
ALTER TABLE `info_kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `tbl_kamar`
--
ALTER TABLE `tbl_kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_kamar`
--
ALTER TABLE `tbl_kamar`
  MODIFY `id_kamar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
