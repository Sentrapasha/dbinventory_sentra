-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 20, 2025 at 03:33 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbinventory_sentra_xi4`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(50) NOT NULL,
  `nama_barantg` varchar(50) DEFAULT NULL,
  `id_jenis` varchar(50) DEFAULT NULL,
  `harga` int DEFAULT NULL,
  `expired` date DEFAULT NULL,
  `stok` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barantg`, `id_jenis`, `harga`, `expired`, `stok`) VALUES
('B001', 'Cireng Isi', 'A001', 1000, '2025-12-23', 80),
('B002', 'Sandwitch', 'A001', 1000, '2025-12-23', 80),
('B003', 'Jamur Crips', 'A001', 1000, '2025-12-23', 80),
('B004', 'Kopikap', 'A002', 1000, '2025-12-23', 80),
('B005', 'Marimas', 'A002', 1000, '2025-12-23', 80);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_barang`
--

CREATE TABLE `jenis_barang` (
  `id_jenis` varchar(50) NOT NULL,
  `nama_jenis` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `jenis_barang`
--

INSERT INTO `jenis_barang` (`id_jenis`, `nama_jenis`) VALUES
('A001', 'Makanan'),
('A002', 'Minuman');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_jenis` (`id_jenis`);

--
-- Indexes for table `jenis_barang`
--
ALTER TABLE `jenis_barang`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_barang` (`id_jenis`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
