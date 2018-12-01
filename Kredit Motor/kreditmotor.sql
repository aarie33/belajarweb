-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 12, 2012 at 09:14 
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kreditmotor`
--
CREATE DATABASE `kreditmotor` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `kreditmotor`;

-- --------------------------------------------------------

--
-- Table structure for table `bayarcicilan`
--

CREATE TABLE IF NOT EXISTS `bayarcicilan` (
  `NomorByr` varchar(10) NOT NULL,
  `TanggalByr` date NOT NULL,
  `KodeKredit` varchar(10) NOT NULL,
  `Jumlah` double NOT NULL,
  `Sisa` double NOT NULL,
  `Cicilan` double NOT NULL,
  `Keterangan` varchar(50) NOT NULL,
  PRIMARY KEY (`NomorByr`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bayarcicilan`
--

INSERT INTO `bayarcicilan` (`NomorByr`, `TanggalByr`, `KodeKredit`, `Jumlah`, `Sisa`, `Cicilan`, `Keterangan`) VALUES
('BYR00001', '2012-01-23', 'KRD00001', 500000, 10000000, 2, 'Pembayaran Bulan Januari'),
('BYR00002', '2012-03-07', 'KRD00006', 300000, 15000000, 2, 'Pembayaran bulan Mar');

-- --------------------------------------------------------

--
-- Table structure for table `belicash`
--

CREATE TABLE IF NOT EXISTS `belicash` (
  `KodeCash` varchar(10) NOT NULL,
  `TanggalCash` date NOT NULL,
  `KodeCust` varchar(10) NOT NULL,
  `KodeMotor` varchar(10) NOT NULL,
  `Harga` double NOT NULL,
  `Bayar` double NOT NULL,
  `Keterangan` varchar(50) NOT NULL,
  PRIMARY KEY (`KodeCash`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `belicash`
--

INSERT INTO `belicash` (`KodeCash`, `TanggalCash`, `KodeCust`, `KodeMotor`, `Harga`, `Bayar`, `Keterangan`) VALUES
('CHS00001', '2012-01-10', 'CUS00001', 'MTR00001', 14500000, 14500000, 'Lunas'),
('CHS00002', '2012-01-12', 'CUS00002', 'MTR00002', 13500000, 13500000, 'Lunas'),
('CHS00003', '2012-01-13', 'CUS00005', 'MTR00003', 15000000, 14500000, 'Lunas'),
('CHS00004', '2012-01-14', 'CUS00002', 'MTR00005', 13500000, 13500000, 'Lunas'),
('CHS00005', '2012-02-15', 'CUS00003', 'MTR00001', 14500000, 14500000, 'Lunas'),
('CHS00006', '2012-02-17', 'CUS00004', 'MTR00004', 14000000, 14000000, 'Lunas'),
('CHS00007', '2012-02-18', 'CUS00005', 'MTR00003', 15000000, 15000000, 'Lunas'),
('CHS00008', '2012-02-21', 'CUS00002', 'MTR00003', 15000000, 15000000, 'Lunas'),
('CHS00009', '2012-02-21', 'CUS00003', 'MTR00004', 14000000, 14000000, 'Lunas'),
('CHS00010', '2012-02-22', 'CUS00003', 'MTR00005', 13500000, 13500000, 'Lunas'),
('CHS00011', '2012-02-23', 'CUS00002', 'MTR00007', 19000000, 19000000, 'Lunas'),
('CHS00012', '2012-02-24', 'CUS00006', 'MTR00008', 21000000, 21000000, 'Lunas'),
('CSH00013', '2012-02-15', 'CUS00004', 'MTR00003', 15000000, 15000000, 'Lunas'),
('CSH00014', '2012-02-15', 'CUS00003', 'MTR00011', 18300000, 18300000, 'Lunas'),
('CSH00018', '2012-02-15', 'CUS00006', 'MTR00007', 19000000, 19000000, 'Lunas'),
('CSH00016', '2012-02-15', 'CUS00001', 'MTR00005', 13500000, 13500000, 'Lunas'),
('CSH00017', '2012-02-15', 'CUS00005', 'MTR00002', 13500000, 13500000, 'Lunas'),
('CSH00019', '2012-02-15', 'CUS00004', 'MTR00003', 15000000, 15000000, 'Lunas'),
('CSH00020', '2012-02-15', 'CUS00005', 'MTR00008', 21000000, 21000000, 'Lunas'),
('CSH00021', '2012-02-15', 'CUS00003', 'MTR00009', 12500000, 12500000, 'Lunas'),
('CSH00022', '2012-02-15', 'CUS00003', 'MTR00001', 14500000, 14500000, 'Lunas'),
('CSH00023', '2012-02-19', 'CUS00005', 'MTR00002', 13500000, 13500000, 'Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `belikredit`
--

CREATE TABLE IF NOT EXISTS `belikredit` (
  `KodeKredit` varchar(10) NOT NULL,
  `TanggalKredit` date NOT NULL,
  `KodeCust` varchar(10) NOT NULL,
  `KodeMotor` varchar(10) NOT NULL,
  `Harga` double NOT NULL,
  `UangMuka` double NOT NULL,
  `Bunga` float NOT NULL,
  `LamaCicilan` int(11) NOT NULL,
  `AngsuranKe` int(11) NOT NULL DEFAULT '1',
  `TelahBayar` double NOT NULL,
  `Sisa` double NOT NULL,
  `Keterangan` varchar(50) NOT NULL,
  PRIMARY KEY (`KodeKredit`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `belikredit`
--

INSERT INTO `belikredit` (`KodeKredit`, `TanggalKredit`, `KodeCust`, `KodeMotor`, `Harga`, `UangMuka`, `Bunga`, `LamaCicilan`, `AngsuranKe`, `TelahBayar`, `Sisa`, `Keterangan`) VALUES
('KRD00001', '2012-02-12', 'CUS00003', 'MTR00002', 13500000, 3000000, 9, 12, 2, 3500000, 10000000, ''),
('KRD00002', '2012-02-14', 'CUS00001', 'MTR00005', 13500000, 2000000, 9, 24, 1, 2000000, 13930000, ''),
('KRD00003', '2012-02-16', 'CUS00004', 'MTR00003', 15000000, 500000, 10, 12, 1, 500000, 16000000, ''),
('KRD00004', '2012-02-18', 'CUS00002', 'MTR00002', 14850000, 2500000, 10, 12, 1, 2500000, 12350000, ''),
('KRD00005', '2012-02-21', 'CUS00004', 'MTR00005', 13500000, 1000000, 9, 12, 1, 1000000, 12500000, ''),
('KRD00006', '2012-03-07', 'CUS00007', 'MTR00011', 18300000, 3000000, 5, 12, 2, 3300000, 15000000, '');

-- --------------------------------------------------------

--
-- Table structure for table `motor`
--

CREATE TABLE IF NOT EXISTS `motor` (
  `KodeMotor` varchar(10) NOT NULL,
  `Merk` varchar(20) NOT NULL,
  `Warna` varchar(20) NOT NULL,
  `Harga` double NOT NULL,
  PRIMARY KEY (`KodeMotor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `motor`
--

INSERT INTO `motor` (`KodeMotor`, `Merk`, `Warna`, `Harga`) VALUES
('MTR00001', 'Honda Beat', 'Hitam Silver', 14500000),
('MTR00002', 'Honda Revo', 'Merah Hitam', 13500000),
('MTR00003', 'Yamaha Jupiter', 'Hitam Biru', 15000000),
('MTR00004', 'Yamaha Vega', 'Hitam Silver', 14000000),
('MTR00005', 'Suzuki Smash', 'Merah Hati', 13500000),
('MTR00006', 'Suzuki Satria', 'Silver Putih', 18500000),
('MTR00007', 'Honda Tiger', 'Hitam', 19000000),
('MTR00008', 'Yamaha Nixon', 'Merah', 21000000),
('MTR00009', 'Yamaha Mio', 'Pink', 12500000),
('MTR00010', 'Honda Supra Fit', 'Biru-Hitam', 14500000),
('MTR00011', 'Suzuki Satria FU', 'Pink', 18300000);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `KodeCust` varchar(10) NOT NULL,
  `Nama` varchar(40) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Telepon` varchar(15) NOT NULL,
  `HP` varchar(15) NOT NULL,
  `NoKTP` varchar(20) NOT NULL,
  `KK` varchar(20) NOT NULL,
  `SlipGaji` double NOT NULL,
  `Keterangan` varchar(50) NOT NULL,
  PRIMARY KEY (`KodeCust`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`KodeCust`, `Nama`, `Alamat`, `Telepon`, `HP`, `NoKTP`, `KK`, `SlipGaji`, `Keterangan`) VALUES
('CUS00001', 'Andi Wijaya', 'Jl. Mawar 34A Tuban', '0356-345654', '089878765656', '12243412323', '23234342341', 1750000, ''),
('CUS00002', 'Budiman', 'Jl. Mertoasri 467 Palang-Tuban', '0356-326566', '085676563654', '34324132313', '42432423224', 2100000, ''),
('CUS00003', 'Candra Weni', 'Jl. Sekar Aji 349 Tuban', '0356787687', '087878787871', '86851323243', '31232424324', 1750000, ''),
('CUS00004', 'Dewi Setyowati', 'Jl. Hayam Wuruk 234 Tuban', '035645454654', '089873866771', '13243243241', '89898212311', 2500000, ''),
('CUS00005', 'Joko Pitoyo', 'Jl. Nambangan 32 Semanding Tuban', '0356764766', '089898787611', '12232423431', '42434324344', 1500000, ''),
('CUS00006', 'Kurniawan', 'Jl. Seger Waras 34 Tuban', '0356-42342343', '089887877267', '13232323243', '13243243435', 2000000, ''),
('CUS00007', 'Kelfin Eka Putra Wardani', 'Montong', '085850949959', '085850949959', '1232432432432', '1322234324342', 20000000, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `KodeUser` varchar(10) NOT NULL,
  `UserName` varchar(15) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Status` varchar(5) NOT NULL,
  PRIMARY KEY (`KodeUser`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`KodeUser`, `UserName`, `Password`, `Status`) VALUES
('USR00001', 'kelfin', 'c706950b907e4f4bf7f89cacb18cc2c6', 'admin'),
('USR00002', 'kelfin', 'kelfin', 'admin'),
('USR00003', 'admin', 'admin', 'admin'),
('USR00004', 'user', 'user', 'user');
