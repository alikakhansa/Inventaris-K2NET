-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2021 at 08:52 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventaris_k2net`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_barang`
--

CREATE TABLE `daftar_barang` (
  `kode_barang` int(10) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `ket` varchar(255) NOT NULL,
  `qty` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_barang`
--

INSERT INTO `daftar_barang` (`kode_barang`, `nama_barang`, `ket`, `qty`) VALUES
(1, 'laptop', 'baru', 6),
(2, 'Proyektor', 'baru', 5),
(3, 'laptop', 'baru', 5),
(4, 'Proyektor', 'baru', 5);

-- --------------------------------------------------------

--
-- Table structure for table `inventaris`
--

CREATE TABLE `inventaris` (
  `id_inventaris` int(5) NOT NULL,
  `NIS` int(5) NOT NULL,
  `kode_barang` int(5) NOT NULL,
  `qty_pinjam` int(11) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `STATUS` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kembali`
--

CREATE TABLE `kembali` (
  `id_pengembalian` int(5) NOT NULL,
  `id_inventaris` int(5) NOT NULL,
  `NIS` int(5) NOT NULL,
  `kode_barang` int(5) NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `denda` varchar(64) NOT NULL,
  `STATUS` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(64) NOT NULL,
  `level` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`, `level`, `nama`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'admin', 'Chandra'),
(2, 'operator', '202cb962ac59075b964b07152d234b70', 'operator', 'Alika'),
(3, 'Alika', '202cb962ac59075b964b07152d234b70', 'operator', 'Alika');

-- --------------------------------------------------------

--
-- Table structure for table `master_siswa`
--

CREATE TABLE `master_siswa` (
  `NIS` int(5) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_siswa`
--

INSERT INTO `master_siswa` (`NIS`, `nama`, `kelas`) VALUES
(123456, 'Alika', 'XII  TKJ'),
(32731453, 'Alika Khansa Fadilah', 'XII  TKJ');

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `no` int(10) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `tanggal` date NOT NULL,
  `kategori` enum('setting jaringan','setting server','penambahan barang','perbaikan alat','lainnya') NOT NULL,
  `jumlah_barang` varchar(100) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`no`, `nama_sekolah`, `alamat`, `tanggal`, `kategori`, `jumlah_barang`, `keterangan`) VALUES
(1, 'SMPN 5 Bandung', 'Jalan Sumatra 40', '2021-08-24', 'setting jaringan', '-', 'asadasd'),
(2, 'SMPN 4 Bandung', 'Kosabi', '2021-08-24', 'setting server', '-', 'sasas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_barang`
--
ALTER TABLE `daftar_barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`id_inventaris`),
  ADD UNIQUE KEY `NIS` (`NIS`,`kode_barang`),
  ADD UNIQUE KEY `NIS_2` (`NIS`,`kode_barang`),
  ADD KEY `NIS_3` (`NIS`,`kode_barang`),
  ADD KEY `kode_barang` (`kode_barang`);

--
-- Indexes for table `kembali`
--
ALTER TABLE `kembali`
  ADD PRIMARY KEY (`id_pengembalian`),
  ADD UNIQUE KEY `id_inventaris_2` (`id_inventaris`),
  ADD KEY `id_inventaris` (`id_inventaris`,`NIS`,`kode_barang`),
  ADD KEY `NIS` (`NIS`),
  ADD KEY `kode_barang` (`kode_barang`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`),
  ADD KEY `nama` (`nama`);

--
-- Indexes for table `master_siswa`
--
ALTER TABLE `master_siswa`
  ADD PRIMARY KEY (`NIS`),
  ADD KEY `nama` (`nama`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`no`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `inventaris`
--
ALTER TABLE `inventaris`
  ADD CONSTRAINT `inventaris_ibfk_1` FOREIGN KEY (`NIS`) REFERENCES `master_siswa` (`NIS`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inventaris_ibfk_2` FOREIGN KEY (`kode_barang`) REFERENCES `daftar_barang` (`kode_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kembali`
--
ALTER TABLE `kembali`
  ADD CONSTRAINT `kembali_ibfk_1` FOREIGN KEY (`NIS`) REFERENCES `master_siswa` (`NIS`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kembali_ibfk_2` FOREIGN KEY (`kode_barang`) REFERENCES `daftar_barang` (`kode_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kembali_ibfk_3` FOREIGN KEY (`id_inventaris`) REFERENCES `inventaris` (`id_inventaris`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
