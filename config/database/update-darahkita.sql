-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 13, 2019 at 06:33 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `darahkita`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(10) NOT NULL,
  `id_login` int(10) NOT NULL,
  `nik` varchar(40) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` mediumtext NOT NULL,
  `kode_pos` varchar(25) NOT NULL,
  `gender` enum('Laki-laki','Perempuan') NOT NULL,
  `goldar` varchar(20) NOT NULL,
  `riwayat_sakit` mediumtext NOT NULL,
  `email` text NOT NULL,
  `point` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `id_login`, `nik`, `nama`, `tempat_lahir`, `tgl_lahir`, `alamat`, `kode_pos`, `gender`, `goldar`, `riwayat_sakit`, `email`, `point`) VALUES
(1, 1, 'ADMIN', 'Administrator', 'Jakarta', '2001-03-01', 'Jogomertan,Petanahan,Kebumen,Jawa Tengah', '54351', '', '-', '-', 'admin@admin.com', 250000000);

-- --------------------------------------------------------

--
-- Table structure for table `cek_point`
--

CREATE TABLE `cek_point` (
  `token_point` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `id_anggota` int(10) NOT NULL,
  `tgl_scan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_event` int(10) NOT NULL,
  `judul_event` varchar(255) NOT NULL,
  `tempat_event` text NOT NULL,
  `tgl_event` datetime NOT NULL,
  `desc_event` text NOT NULL,
  `thumb_event` varchar(50) NOT NULL,
  `foto_event` varchar(255) NOT NULL,
  `foto_token` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `user_poster` varchar(25) NOT NULL,
  `user_level` varchar(10) NOT NULL,
  `user_tgl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id_item` int(10) NOT NULL,
  `nama_item` varchar(255) NOT NULL,
  `harga_item` int(255) NOT NULL,
  `stok_item` int(255) NOT NULL,
  `desc_item` text NOT NULL,
  `foto_item` varchar(50) NOT NULL,
  `user_add` varchar(25) NOT NULL,
  `user_edit` varchar(25) NOT NULL,
  `tgl_edit` datetime NOT NULL,
  `token_item` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level` enum('admin','petugas','anggota') NOT NULL DEFAULT 'anggota'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `point`
--

CREATE TABLE `point` (
  `id_point` int(10) NOT NULL,
  `token_point` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `isi_point` int(10) NOT NULL,
  `id_event` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `token_point` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`token_point`) VALUES
('0'),
('1'),
('2'),
('3'),
('4'),
('5'),
('6'),
('7'),
('8'),
('9'),
('A'),
('a'),
('B'),
('b'),
('C'),
('c'),
('D'),
('d'),
('E'),
('e'),
('F'),
('f'),
('G'),
('g'),
('H'),
('h'),
('I'),
('i'),
('J'),
('j'),
('K'),
('k'),
('L'),
('l'),
('M'),
('m'),
('N'),
('n'),
('O'),
('o'),
('P'),
('p'),
('Q'),
('q'),
('R'),
('r'),
('S'),
('s'),
('T'),
('t'),
('U'),
('u'),
('V'),
('v'),
('W'),
('w'),
('X'),
('x'),
('Y'),
('y'),
('Z'),
('z');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD UNIQUE KEY `id_login` (`id_login`);

--
-- Indexes for table `cek_point`
--
ALTER TABLE `cek_point`
  ADD UNIQUE KEY `token_point` (`token_point`),
  ADD KEY `id_anggota` (`id_anggota`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`),
  ADD UNIQUE KEY `id_token` (`foto_token`),
  ADD KEY `user_poster` (`user_poster`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id_item`),
  ADD KEY `id_petugas` (`user_add`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `point`
--
ALTER TABLE `point`
  ADD PRIMARY KEY (`id_point`),
  ADD UNIQUE KEY `token_point` (`token_point`),
  ADD KEY `id_event` (`id_event`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD UNIQUE KEY `code` (`token_point`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
