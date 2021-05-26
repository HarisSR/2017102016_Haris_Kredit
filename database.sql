-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 26, 2021 at 03:47 AM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `2017102016_kredit`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_angsuran`
--

CREATE TABLE `tbl_angsuran` (
  `id_angsuran` int(11) NOT NULL,
  `id_kredit` int(11) NOT NULL,
  `tanggal_angsur` date NOT NULL,
  `angsuran_ke` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id_customer` int(11) NOT NULL,
  `nama_customer` varchar(50) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `no_ktp` varchar(25) NOT NULL,
  `no_kk` varchar(25) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `no_telp` varchar(25) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id_customer`, `nama_customer`, `jk`, `no_ktp`, `no_kk`, `pekerjaan`, `no_telp`, `alamat`) VALUES
(2, 'Herni', 'perempuan', '44332211', '11223344', 'Guru PNS', '085767462737', 'Kesambi, Cirebon'),
(3, 'Haris Shobaruddin Robbani', 'laki-laki', '33552233', '99885544', 'Web Developer', '08123455334', 'Kesambi, Cirebon');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_karyawan`
--

CREATE TABLE `tbl_karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `no_ktp` varchar(25) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `photo` text NOT NULL,
  `jk` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_karyawan`
--

INSERT INTO `tbl_karyawan` (`id_karyawan`, `nip`, `nama_karyawan`, `no_ktp`, `no_telp`, `alamat`, `photo`, `jk`) VALUES
(5, '2017102016', 'Haris Shobaruddin Robbani', '3433444', '085767462737', 'Cirebon', '11097e9be6ecb064536e789920209336.png', 'laki-laki');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kendaraan`
--

CREATE TABLE `tbl_kendaraan` (
  `id_kendaraan` int(11) NOT NULL,
  `tipe` varchar(25) NOT NULL,
  `merek` varchar(25) NOT NULL,
  `tahun` date NOT NULL,
  `no_seri` varchar(25) NOT NULL,
  `no_mesin` varchar(25) NOT NULL,
  `no_kerangka` varchar(25) NOT NULL,
  `gambar` text NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_kendaraan`
--

INSERT INTO `tbl_kendaraan` (`id_kendaraan`, `tipe`, `merek`, `tahun`, `no_seri`, `no_mesin`, `no_kerangka`, `gambar`, `harga`) VALUES
(5, 'M4433', 'Honda', '2021-05-31', 'SSR554664', '255388848392', '56883743739', '05eeb2cb52fa97b5a9b76d2162fc0fbe.jpeg', 43000000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kredit`
--

CREATE TABLE `tbl_kredit` (
  `id_kredit` int(11) NOT NULL,
  `id_customer` varchar(20) NOT NULL,
  `id_kendaraan` varchar(20) NOT NULL,
  `dp` double NOT NULL,
  `tanggal_beli` date NOT NULL,
  `banyak_angsuran` int(11) NOT NULL,
  `total_bayar` double NOT NULL,
  `cicilan` double NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_kredit`
--

INSERT INTO `tbl_kredit` (`id_kredit`, `id_customer`, `id_kendaraan`, `dp`, `tanggal_beli`, `banyak_angsuran`, `total_bayar`, `cicilan`, `status`) VALUES
(2, '2', '5', 4000000, '2021-05-25', 12, 43680000, 3640000, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_admin`
--

CREATE TABLE `tbl_user_admin` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user_admin`
--

INSERT INTO `tbl_user_admin` (`id_user`, `username`, `password`, `nama_user`, `status`) VALUES
(1, 'admin', 'admin', 'Haris Shobaruddin Robbani', 'aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_angsuran`
--
ALTER TABLE `tbl_angsuran`
  ADD PRIMARY KEY (`id_angsuran`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `tbl_kendaraan`
--
ALTER TABLE `tbl_kendaraan`
  ADD PRIMARY KEY (`id_kendaraan`);

--
-- Indexes for table `tbl_kredit`
--
ALTER TABLE `tbl_kredit`
  ADD PRIMARY KEY (`id_kredit`);

--
-- Indexes for table `tbl_user_admin`
--
ALTER TABLE `tbl_user_admin`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_angsuran`
--
ALTER TABLE `tbl_angsuran`
  MODIFY `id_angsuran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_kendaraan`
--
ALTER TABLE `tbl_kendaraan`
  MODIFY `id_kendaraan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_kredit`
--
ALTER TABLE `tbl_kredit`
  MODIFY `id_kredit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user_admin`
--
ALTER TABLE `tbl_user_admin`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
