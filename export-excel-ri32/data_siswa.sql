-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 01, 2012 at 08:26 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE IF NOT EXISTS `data_siswa` (
  `id_siswa` int(5) NOT NULL AUTO_INCREMENT,
  `nama_siswa` varchar(20) NOT NULL,
  `nis` varchar(12) NOT NULL,
  `kelamin` enum('laki-laki','perempuan') NOT NULL,
  `alamat` text NOT NULL,
  `telpon` varchar(12) NOT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`id_siswa`, `nama_siswa`, `nis`, `kelamin`, `alamat`, `telpon`) VALUES
(2, 'Ibnu Siena', '50406041', 'laki-laki', 'Bogor', '0217703966'),
(3, 'Elka Fajar', '50406042', 'perempuan', 'Bojong', '0217703977'),
(4, 'Adi Kurnia', '50406043', 'laki-laki', 'Jakarta', '0217703988'),
(6, 'Blodod Eman', '50406045', 'laki-laki', 'Tangerang', '0217703944'),
(7, 'Athi Septiani', '50406046', 'perempuan', 'Jakarta', '0217703933'),
(8, 'Naila Larasati', '50406047', 'perempuan', 'Depok', '0217703922'),
(9, 'Rizkon Halali', '50406048', 'laki-laki', 'Mampang', '0217703955');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
