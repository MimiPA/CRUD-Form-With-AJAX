-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2021 at 10:45 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dosen`
--

-- --------------------------------------------------------

--
-- Table structure for table `log_data`
--

CREATE TABLE `log_data` (
  `id_log` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `total_gaji_lama` varchar(20) DEFAULT NULL,
  `total_gaji_baru` varchar(20) DEFAULT NULL,
  `waktu` datetime DEFAULT NULL,
  `pengedit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_data`
--

INSERT INTO `log_data` (`id_log`, `id_dosen`, `total_gaji_lama`, `total_gaji_baru`, `waktu`, `pengedit`) VALUES
(1, 1, '4250000', '4250000', '2021-04-10 16:40:13', 'mimi'),
(2, 1, '4250000', '11000000', '2021-04-10 16:40:41', 'mimi'),
(3, 2, '2375000', '2375000', '2021-04-10 16:41:09', 'mimi'),
(4, 1, '11000000', '3875000', '2021-04-10 16:41:51', 'admin'),
(5, 2, '2375000', '9500000', '2021-04-10 16:42:12', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_dosen`
--

CREATE TABLE `tabel_dosen` (
  `id_dosen` int(11) NOT NULL,
  `nidn` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `tmpLahir` varchar(50) DEFAULT NULL,
  `tglLahir` date DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `pendidikan` enum('S2','S3') DEFAULT NULL,
  `gender` enum('L','P') DEFAULT NULL,
  `spesialisasi` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL,
  `golongan` enum('3A','3B','3C','4A','4B','4C') DEFAULT NULL,
  `pangkat` enum('AA','L','LK','GB') DEFAULT NULL,
  `pengalaman` text DEFAULT NULL,
  `gajiPokok` int(15) NOT NULL DEFAULT 0,
  `total_gaji` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_dosen`
--

INSERT INTO `tabel_dosen` (`id_dosen`, `nidn`, `nama`, `tmpLahir`, `tglLahir`, `telepon`, `pendidikan`, `gender`, `spesialisasi`, `username`, `pass`, `golongan`, `pangkat`, `pengalaman`, `gajiPokok`, `total_gaji`) VALUES
(1, 98765, 'Paramita Aditung', 'Makassar', '2000-05-11', '0852-0000-1111', 'S2', 'P', 'Programming,Networking,Database,Analyst,', 'paramita@yahoo.com', '123', '3A', 'AA', 'Hai', 1000000, 1875000),
(2, 123456, 'Mimi', 'Korea', '1111-01-01', '0852-0000-1111', 'S3', 'L', 'Programming,Networking,Database,Analyst,', 'paramita@yahoo.com', '456', '4B', 'L', 'lalala', 1000000, 2750000);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_login`
--

CREATE TABLE `tabel_login` (
  `id_login` int(11) NOT NULL,
  `user` varchar(20) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_login`
--

INSERT INTO `tabel_login` (`id_login`, `user`, `pass`) VALUES
(1, 'mimi', '123'),
(2, 'admin', '111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log_data`
--
ALTER TABLE `log_data`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `tabel_dosen`
--
ALTER TABLE `tabel_dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `tabel_login`
--
ALTER TABLE `tabel_login`
  ADD PRIMARY KEY (`id_login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log_data`
--
ALTER TABLE `log_data`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tabel_dosen`
--
ALTER TABLE `tabel_dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tabel_login`
--
ALTER TABLE `tabel_login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
