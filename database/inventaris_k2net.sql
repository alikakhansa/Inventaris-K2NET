-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2021 at 05:25 AM
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
-- Table structure for table `daftar_alat`
--

CREATE TABLE `daftar_alat` (
  `kode_alat` varchar(100) NOT NULL,
  `nama_alat` varchar(225) NOT NULL,
  `stok_awal` varchar(100) NOT NULL,
  `stok_akhir` varchar(100) NOT NULL,
  `alat_masuk` varchar(255) NOT NULL,
  `alat_keluar` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_barang`
--

CREATE TABLE `daftar_barang` (
  `nama_barang` varchar(100) NOT NULL,
  `kode_barang` varchar(255) NOT NULL,
  `stok_awal` varchar(100) NOT NULL,
  `stok_akhir` varchar(100) NOT NULL,
  `b_masuk` varchar(100) NOT NULL,
  `b_keluar` varchar(100) NOT NULL,
  `ket` varchar(255) NOT NULL,
  `qty` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_barang`
--

INSERT INTO `daftar_barang` (`nama_barang`, `kode_barang`, `stok_awal`, `stok_akhir`, `b_masuk`, `b_keluar`, `ket`, `qty`) VALUES
('jam', ' 0000000003', '10', '10', '10', '10', 'baru', 10),
('keyboard', ' 0000000002', '10', '10', '10', '10', 'baru', 10),
('laptop', ' 0000000001', '10', '10', '10', '10', 'baru', 10),
('tmpt minum', ' 0000000004', '10', '10', '10', '10', 'baru', 5);

-- --------------------------------------------------------

--
-- Table structure for table `daftar_pekerjaan`
--

CREATE TABLE `daftar_pekerjaan` (
  `nama_sekolah` varchar(255) NOT NULL,
  `kode_pekerjaan` varchar(225) NOT NULL,
  `nama_pekerjaan` varchar(100) NOT NULL,
  `team_pelaksana` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_pengajuan`
--

CREATE TABLE `daftar_pengajuan` (
  `kode_pengajuan` varchar(10) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id_informasi` int(11) NOT NULL,
  `nama_spp` varchar(100) NOT NULL,
  `spp` text NOT NULL,
  `alamat_spp` text NOT NULL,
  `kec_spp` varchar(70) NOT NULL,
  `kab_spp` varchar(70) NOT NULL,
  `prov_spp` varchar(70) NOT NULL,
  `kode_pos_spp` int(6) NOT NULL,
  `telp_spp` varchar(14) NOT NULL,
  `email_sppp` varchar(50) NOT NULL,
  `logo_spp` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id_informasi`, `nama_spp`, `spp`, `alamat_spp`, `kec_spp`, `kab_spp`, `prov_spp`, `kode_pos_spp`, `telp_spp`, `email_sppp`, `logo_spp`) VALUES
(1, 'SPP Alikars', 'Aplikasi Pengelola Data Keuangan Sekolah (SPP)', 'Jl. Sekolah Nasional', 'Kiara Condong', 'bandung', 'Jawa Barat', 7218021, '081221373113', 'alikakf19@gmail.com', 'spp.png');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(64) NOT NULL,
  `level` varchar(255) NOT NULL,
  `team` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`, `level`, `team`, `nama`) VALUES
(1, 'alika', '202cb962ac59075b964b07152d234b70', 'operator', 'team 2', 'alika');

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
(2, 'SMPN 4 Bandung', 'Kosabi', '2021-08-24', 'setting server', '-', 'sasas'),
(1, 'SMPN 5 Bandung', 'Jalan Sumatra 40', '2021-08-24', 'setting jaringan', '-', 'asadasd');

-- --------------------------------------------------------

--
-- Table structure for table `tb_informasi`
--

CREATE TABLE `tb_informasi` (
  `id_informasi` int(11) NOT NULL,
  `nama_spp` varchar(100) NOT NULL,
  `spp` text NOT NULL,
  `alamat_spp` text NOT NULL,
  `kec_spp` varchar(70) NOT NULL,
  `kab_spp` varchar(70) NOT NULL,
  `prov_spp` varchar(70) NOT NULL,
  `kode_pos_spp` int(6) NOT NULL,
  `telp_spp` varchar(14) NOT NULL,
  `email_sppp` varchar(50) NOT NULL,
  `logo_spp` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_informasi`
--

INSERT INTO `tb_informasi` (`id_informasi`, `nama_spp`, `spp`, `alamat_spp`, `kec_spp`, `kab_spp`, `prov_spp`, `kode_pos_spp`, `telp_spp`, `email_sppp`, `logo_spp`) VALUES
(1, 'SPP Alikars', 'Aplikasi Pengelola Data Keuangan Sekolah (SPP)', 'Jl. Sekolah Nasional', 'Kiara Condong', 'bandung', 'Jawa Barat', 7218021, '081221373113', 'alikakf19@gmail.com', 'spp.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_alat`
--
ALTER TABLE `daftar_alat`
  ADD PRIMARY KEY (`kode_alat`);

--
-- Indexes for table `daftar_barang`
--
ALTER TABLE `daftar_barang`
  ADD PRIMARY KEY (`nama_barang`),
  ADD UNIQUE KEY `nama_barang` (`kode_barang`);

--
-- Indexes for table `daftar_pekerjaan`
--
ALTER TABLE `daftar_pekerjaan`
  ADD PRIMARY KEY (`kode_pekerjaan`),
  ADD UNIQUE KEY `nama_sekolah` (`nama_sekolah`);

--
-- Indexes for table `daftar_pengajuan`
--
ALTER TABLE `daftar_pengajuan`
  ADD PRIMARY KEY (`kode_pengajuan`),
  ADD UNIQUE KEY `nama_barang` (`nama_barang`),
  ADD UNIQUE KEY `nama_sekolah` (`nama_sekolah`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`),
  ADD KEY `nama` (`nama`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`nama_sekolah`);

--
-- Indexes for table `tb_informasi`
--
ALTER TABLE `tb_informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_informasi`
--
ALTER TABLE `tb_informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftar_pekerjaan`
--
ALTER TABLE `daftar_pekerjaan`
  ADD CONSTRAINT `daftar_pekerjaan_ibfk_1` FOREIGN KEY (`nama_sekolah`) REFERENCES `sekolah` (`nama_sekolah`);

--
-- Constraints for table `daftar_pengajuan`
--
ALTER TABLE `daftar_pengajuan`
  ADD CONSTRAINT `daftar_pengajuan_ibfk_1` FOREIGN KEY (`nama_barang`) REFERENCES `daftar_barang` (`nama_barang`),
  ADD CONSTRAINT `daftar_pengajuan_ibfk_2` FOREIGN KEY (`nama_sekolah`) REFERENCES `sekolah` (`nama_sekolah`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
