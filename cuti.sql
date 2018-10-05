-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2018 at 01:45 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cuti`
--

-- --------------------------------------------------------

--
-- Table structure for table `cutiges`
--

CREATE TABLE IF NOT EXISTS `cutiges` (
  `id` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `nik_pegawai` varchar(20) NOT NULL,
  `mulai` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `akhir` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `stok_cuti` int(11) NOT NULL,
  `alasan` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cutiges`
--

INSERT INTO `cutiges` (`id`, `id_pegawai`, `nik_pegawai`, `mulai`, `akhir`, `stok_cuti`, `alasan`, `status`) VALUES
(54, 5, '111', '2018-09-30 17:00:00', '2018-10-02 17:00:00', 10, 'Sakit', 1),
(55, 5, '111', '2018-10-08 17:00:00', '2018-10-14 17:00:00', 4, 'SAKIT', 1),
(56, 5, '111', '2018-10-22 17:00:00', '2018-10-26 17:00:00', 0, 'SAKIT', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `id` int(11) NOT NULL,
  `nik` varchar(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `level` int(11) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nik`, `nama`, `level`, `password`) VALUES
(5, '111', 'Dani Hanafi', 1, '21232f297a57a5a743894a0e4a801fc3'),
(6, '123', 'admin', 0, '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cutiges`
--
ALTER TABLE `cutiges`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik_pegawai` (`nik_pegawai`),
  ADD KEY `nik_pegawai_2` (`nik_pegawai`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik` (`nik`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cutiges`
--
ALTER TABLE `cutiges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cutiges`
--
ALTER TABLE `cutiges`
  ADD CONSTRAINT `cutiges_ibfk_1` FOREIGN KEY (`nik_pegawai`) REFERENCES `pegawai` (`nik`),
  ADD CONSTRAINT `cutiges_ibfk_2` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
