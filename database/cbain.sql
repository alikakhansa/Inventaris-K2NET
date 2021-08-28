-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2021 at 10:23 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cbain`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_barang`
--

CREATE TABLE `daftar_barang` (
  `kode_barang` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `stok_awal` varchar(225) NOT NULL,
  `stok_akhir` varchar(255) NOT NULL,
  `b_masuk` varchar(255) NOT NULL,
  `b_keluar` varchar(255) NOT NULL,
  `ket` varchar(225) NOT NULL,
  `qty` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_barang`
--

INSERT INTO `daftar_barang` (`kode_barang`, `nama_barang`, `stok_awal`, `stok_akhir`, `b_masuk`, `b_keluar`, `ket`, `qty`) VALUES
(' 0000000001', 'Laptop', '10', '10', '10', '10', 'baruu', '10');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_pekerjaan`
--

CREATE TABLE `daftar_pekerjaan` (
  `kode_pekerjaan` int(10) NOT NULL,
  `nama_sekolah` varchar(255) NOT NULL,
  `nama_pekerjaan` varchar(225) NOT NULL,
  `team` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_pekerjaan`
--

INSERT INTO `daftar_pekerjaan` (`kode_pekerjaan`, `nama_sekolah`, `nama_pekerjaan`, `team`, `tanggal`, `keterangan`) VALUES
(2, 'SMK MVP ARS INT', 'Test', 'team 1', '2021-08-27', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_peminjaman`
--

CREATE TABLE `daftar_peminjaman` (
  `id_peminjaman` varchar(100) NOT NULL,
  `kode_alat` varchar(100) NOT NULL,
  `nama_alat` varchar(225) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `stok_awal` varchar(225) NOT NULL,
  `stok_akhir` varchar(255) NOT NULL,
  `alat_masuk` varchar(255) NOT NULL,
  `alat_keluar` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `daftar_peminjaman`
--

INSERT INTO `daftar_peminjaman` (`id_peminjaman`, `kode_alat`, `nama_alat`, `nama_sekolah`, `stok_awal`, `stok_akhir`, `alat_masuk`, `alat_keluar`, `tanggal`, `keterangan`) VALUES
(' 0000000001', ' 0000000001', 'Test', 'SMK MVP ARS INT', '10', '10', '1', '1', '2021-08-28', 'meminjam'),
(' 0000000002', ' 0000000002', 'Test', 'SMPN 13 Bandungg', '10', '10', '1', '1', '2021-08-28', 'meminjam');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_pengajuan`
--

CREATE TABLE `daftar_pengajuan` (
  `kode_pengajuan` int(10) NOT NULL,
  `nama_barang` varchar(225) NOT NULL,
  `nama_sekolah` varchar(225) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_pengajuan`
--

INSERT INTO `daftar_pengajuan` (`kode_pengajuan`, `nama_barang`, `nama_sekolah`, `qty`, `tanggal`, `keterangan`, `status`) VALUES
(2, 'Laptop', 'SMPN 4 Bandung', '6', '2021-08-27', 'asad', '1'),
(3, 'Laptop', 'SMPN 13 Bandungg', '10', '2021-08-28', 'Test', '0');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_pengembalian`
--

CREATE TABLE `daftar_pengembalian` (
  `id_pengembalian` varchar(100) NOT NULL,
  `id_peminjaman` varchar(225) NOT NULL,
  `nama_sekolah` varchar(225) NOT NULL,
  `kode_alat` varchar(255) NOT NULL,
  `tanggal_kembali` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_pengembalian`
--

INSERT INTO `daftar_pengembalian` (`id_pengembalian`, `id_peminjaman`, `nama_sekolah`, `kode_alat`, `tanggal_kembali`, `status`) VALUES
(' 0000000001', ' 0000000001', 'SMK MVP ARS INT', ' 0000000001', '2021-08-28', '1'),
(' 0000000002', ' 0000000002', 'SMPN 13 Bandungg', ' 0000000002', '2021-08-28', '1');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` varchar(100) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `level` varchar(255) NOT NULL,
  `team` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`, `level`, `team`, `nama`) VALUES
('1', 'alika', '202cb962ac59075b964b07152d234b70', 'operator', 'team 1', 'alika\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `id_sekolah` int(10) NOT NULL,
  `nama_sekolah` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id_sekolah`, `nama_sekolah`, `alamat`) VALUES
(1, 'SMPN 5 Bandung', 'Jalan Cicadas Pasar 1 No 54'),
(2, 'SMPN 4 Bandung', 'Jalan Cicadas Pasar 1 No 51'),
(3, 'SMK MVP ARS INT', 'Jalan Cicadas Pasar 1 No 54'),
(4, 'SMPN 13 Bandungg', 'Jalan Cicadas Pasar 1 No 54');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_informasi`
--

INSERT INTO `tb_informasi` (`id_informasi`, `nama_spp`, `spp`, `alamat_spp`, `kec_spp`, `kab_spp`, `prov_spp`, `kode_pos_spp`, `telp_spp`, `email_sppp`, `logo_spp`) VALUES
(1, 'K2NET', 'Network', 'P.H Mustofa', 'apa aja', 'apa aja', 'apa aja', 1234, '1234', 'K2NET@gmail.com', 'k2net.png');

-- --------------------------------------------------------

--
-- Table structure for table `view`
--

CREATE TABLE `view` (
  `id_view` int(10) NOT NULL,
  `id_sekolah` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `jumlah_barang` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `view`
--

INSERT INTO `view` (`id_view`, `id_sekolah`, `tanggal`, `kategori`, `jumlah_barang`, `keterangan`) VALUES
(9, 3, '2021-08-26', 'setting server', '10', 'mnm\r\n'),
(10, 3, '2021-08-26', 'setting server', '10', 'mnk'),
(11, 3, '2021-08-26', 'perbaikan alat', '10', 'ghv'),
(12, 2, '2021-08-27', 'penambahan barang', '10', 'asd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_barang`
--
ALTER TABLE `daftar_barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `daftar_pekerjaan`
--
ALTER TABLE `daftar_pekerjaan`
  ADD PRIMARY KEY (`kode_pekerjaan`);

--
-- Indexes for table `daftar_peminjaman`
--
ALTER TABLE `daftar_peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- Indexes for table `daftar_pengajuan`
--
ALTER TABLE `daftar_pengajuan`
  ADD PRIMARY KEY (`kode_pengajuan`);

--
-- Indexes for table `daftar_pengembalian`
--
ALTER TABLE `daftar_pengembalian`
  ADD PRIMARY KEY (`id_pengembalian`),
  ADD KEY `id_peminjaman` (`id_peminjaman`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `tb_informasi`
--
ALTER TABLE `tb_informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indexes for table `view`
--
ALTER TABLE `view`
  ADD PRIMARY KEY (`id_view`),
  ADD KEY `id_sekolah` (`id_sekolah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_pekerjaan`
--
ALTER TABLE `daftar_pekerjaan`
  MODIFY `kode_pekerjaan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `daftar_pengajuan`
--
ALTER TABLE `daftar_pengajuan`
  MODIFY `kode_pengajuan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_informasi`
--
ALTER TABLE `tb_informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `view`
--
ALTER TABLE `view`
  MODIFY `id_view` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftar_pengembalian`
--
ALTER TABLE `daftar_pengembalian`
  ADD CONSTRAINT `daftar_pengembalian_ibfk_1` FOREIGN KEY (`id_peminjaman`) REFERENCES `daftar_peminjaman` (`id_peminjaman`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
