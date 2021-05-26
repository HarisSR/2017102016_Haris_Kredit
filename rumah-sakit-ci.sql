-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 01, 2021 at 10:24 AM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `rumah_sakit_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `nama_admin`, `status`) VALUES
(1, 'admin', 'admin', 'Haris', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bidang_spesialis`
--

CREATE TABLE `tbl_bidang_spesialis` (
  `id_spesialis` int(11) NOT NULL,
  `kode_spesialis` varchar(50) NOT NULL,
  `nama_spesialis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_bidang_spesialis`
--

INSERT INTO `tbl_bidang_spesialis` (`id_spesialis`, `kode_spesialis`, `nama_spesialis`) VALUES
(1, 'S001', 'pernafasan'),
(2, 'S002', 'kulit'),
(3, 'S003', 'Hati'),
(5, 'S004', 'Kandungan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dokter`
--

CREATE TABLE `tbl_dokter` (
  `id_dokter` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `kode_dokter` varchar(50) NOT NULL,
  `nama_dokter` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `kode_spesialis` varchar(50) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_dokter`
--

INSERT INTO `tbl_dokter` (`id_dokter`, `nip`, `kode_dokter`, `nama_dokter`, `alamat`, `kode_spesialis`, `photo`) VALUES
(2, '2017102016', 'DK002', 'Haris SR', 'Cirebon', 'S002', 'c115d264fd55fdc978f65f19f192c324.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pasien`
--

CREATE TABLE `tbl_pasien` (
  `id_pasien` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `umur` int(10) NOT NULL,
  `alamat` text NOT NULL,
  `keluhan` text NOT NULL,
  `kode_spesialis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_pasien`
--

INSERT INTO `tbl_pasien` (`id_pasien`, `nik`, `nama_pasien`, `jk`, `umur`, `alamat`, `keluhan`, `kode_spesialis`) VALUES
(1, '207102016', 'Haris Shobaruddin Robbani', 'laki-laki', 22, 'Cirebon, Majasem', 'gatal-gatal berat di tangan', 'S003'),
(3, '3274052611980003', 'Putri', 'perempuan', 21, 'kuningan', 'sesak nafas', 'S001');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ruangan`
--

CREATE TABLE `tbl_ruangan` (
  `id_ruangan` int(11) NOT NULL,
  `nomor_ruangan` varchar(10) NOT NULL,
  `nama_ruangan` varchar(50) NOT NULL,
  `kode_spesialis` varchar(20) NOT NULL,
  `biaya` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_ruangan`
--

INSERT INTO `tbl_ruangan` (`id_ruangan`, `nomor_ruangan`, `nama_ruangan`, `kode_spesialis`, `biaya`) VALUES
(1, '001', 'Melati 1', 'S001', 300000),
(2, '002', 'Sehat', 'S003', 150000),
(3, '003', 'Keluarga Sehat', 'S002', 250000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_bidang_spesialis`
--
ALTER TABLE `tbl_bidang_spesialis`
  ADD PRIMARY KEY (`id_spesialis`);

--
-- Indexes for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `tbl_ruangan`
--
ALTER TABLE `tbl_ruangan`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_bidang_spesialis`
--
ALTER TABLE `tbl_bidang_spesialis`
  MODIFY `id_spesialis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_ruangan`
--
ALTER TABLE `tbl_ruangan`
  MODIFY `id_ruangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
