-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 30. Nopember 2012 jam 13:59
-- Versi Server: 5.5.8
-- Versi PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `upahdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `umr2013`
--

CREATE TABLE IF NOT EXISTS `umr2013` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `propinsi` varchar(50) NOT NULL,
  `upah` double NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `umr2013`
--

INSERT INTO `umr2013` (`no`, `propinsi`, `upah`) VALUES
(1, 'DKI Jakarta', 2200000),
(2, 'Kalimantan Barat', 1060000),
(3, 'Kalimantan Selatan', 1337500),
(4, 'Kalimantan Tengah ', 1553127),
(5, 'Kalimantan Timur ', 1762073),
(6, 'Aceh', 1550000),
(7, 'Sumatra Utara', 1305000),
(8, 'Sumatra Barat', 1350000),
(9, 'Jambi', 1300000),
(10, 'Bengkulu', 1200000);
