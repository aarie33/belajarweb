-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05 Des 2016 pada 09.27
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_sjti`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id_user` int(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `lomba` varchar(20) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_user`, `nama`, `username`, `password`, `lomba`, `level`) VALUES
(10, 'General Admin', 'admin', 'db1f824fac0232024168ed1222793788', '', 'admin'),
(11, 'Fia', 'Fia', 'bd9371c6f89808d16dd65332fe0df36a', '', 'admin'),
(14, '', 'admin', '21232f297a57a5a743894a0e4a801fc3', '', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
`id` int(3) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` longtext NOT NULL,
  `tanggal` date NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `isi`, `tanggal`, `status`) VALUES
(1, 'EPIM-2015', 'Expo Pekan Ilmiah Mahasiswa (EPIM-TI) merupakan agenda kegiatan rutin tahunan yang akan diselenggarakan oleh Jurusan Teknologi Informasi Politeknik Negeri Jember. Kegiatan ini melibatkan segenap civitas akademika Jurusan Teknologi Informasi sehinggu juga menjadi agenda rutin tahunan Himpunan Mahasiswa Jurusan Teknologi Informasi (HMJ-TI)\n\nPada tahun 2015 ini, rangkaian kegiatan akan diselenggarakan pada tanggal 10-12 Desember 2015 di Gedung Aula Soetrisno Widjaja dan Gedung Olahraga Perjuangan 45 Politeknik Negeri Jember. EPIM Sendiri akan menghadirkan beberapa lomba lomba-lomba bidang TI dan pameran teknologi informasi yang melibatkan berbagai pemangku kepentingan dan pelaku usaha dibidang teknologi informasi dan bidang Agroindustri yang tentunya sayang untuk di lewatkan event akbar ini.', '2015-10-16', 1),
(7, 'Pendaftaran Diperpanjang', 'Pendaftaran EPIM 2015 diperpanjang hingga 21 Desember 2015 .', '2015-11-09', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_animasi`
--

CREATE TABLE IF NOT EXISTS `daftar_animasi` (
`id_daftar` int(3) NOT NULL,
  `tanggal` date NOT NULL,
  `sekolah` varchar(150) NOT NULL,
  `nama_team` varchar(50) NOT NULL,
  `nama_ketua` varchar(150) NOT NULL,
  `foto_ketua` varchar(225) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `anggota1` varchar(150) NOT NULL,
  `foto_anggota1` varchar(225) NOT NULL,
  `anggota2` varchar(150) NOT NULL,
  `foto_anggota2` varchar(225) NOT NULL,
  `lomba` varchar(50) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(225) NOT NULL,
  `bukti_bayar` varchar(225) NOT NULL,
  `link` varchar(225) NOT NULL,
  `status` int(1) NOT NULL,
  `level` enum('admin','peserta') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar_animasi`
--

INSERT INTO `daftar_animasi` (`id_daftar`, `tanggal`, `sekolah`, `nama_team`, `nama_ketua`, `foto_ketua`, `no_hp`, `email`, `anggota1`, `foto_anggota1`, `anggota2`, `foto_anggota2`, `lomba`, `username`, `password`, `bukti_bayar`, `link`, `status`, `level`) VALUES
(2, '2015-10-19', 'SMK Madinatul Ulum', 'TestAdmin', 'Pujiani', '2012-10-23 09.26.06.jpg', '9999', 'puji@gmail.com', 'Salma', '02052014_003.jpg', 'agus', '3x4.jpg', 'animasi', 'puji', 'f5e4b33c633b204ea454d36543559011', 'Koala.jpg', 'http://mediafire.com', 2, 'peserta'),
(3, '2015-11-06', 'SMK NEGERI 1 BANGIL', 'Nesaba 1', 'Bayu Dwi Laksono', 'BAYU DWI LAKSONO.jpg', '08984142316', 'bdwilaksono@gmail.com', 'Wahyu Oktafiana Hidayati', '33. WAHYU OKTAVIANA HIDAYATI.JPG', 'Tri Vanti Devi Yulia', '29. TRI VANTI DEVI YULIA.JPG', 'animasi', 'nesaba1', '34ffbda77d703fd83ae31ff3af491754', 'DSC_7457.JPG', '', 1, 'peserta'),
(4, '2015-11-06', 'SMK NEGERI 1 BANGIL', 'Nesaba 2', 'Nafa Nislinia', 'Nafa SMK JL1505.jpg', '08175118269', 'nafanesaba@gmail.com', 'Tirta Ardi Atmaja', 'Tirta ardi atmaja.jpg', 'Nova Dwi Rizkiana Sugiono', 'Picture 016.jpg', 'animasi', 'nesaba2', '9878d1cf45bed6cb1b49a4a83de2ddbf', 'DSC_7456.JPG', '', 1, 'peserta'),
(5, '2015-11-09', 'SMAN 2 Jember', 'Papa Jahat', 'Pramita Dewi Safitri', 'PicsArt_11-09-04.23.06[1].jpg', '+62856550397', 'mitashimaki@gmail.com', 'Ananda Putri Denia', 'IMG-20151109-WA0002[1].jpg', 'Anharits Pantito', 'IMG-20151109-WA0004[1].jpg', 'animasi', 'Papa_jahat', 'ed796e0765e63ca842ce6d58cc0753df', 'IMG-20151110-WA0000.jpg', '', 1, 'peserta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_jaringan`
--

CREATE TABLE IF NOT EXISTS `daftar_jaringan` (
`id_daftar` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(50) NOT NULL,
  `sekolah` varchar(225) NOT NULL,
  `foto` varchar(225) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `lomba` varchar(50) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(225) NOT NULL,
  `bukti_bayar` varchar(225) NOT NULL,
  `status` int(1) NOT NULL,
  `level` enum('admin','peserta') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar_jaringan`
--

INSERT INTO `daftar_jaringan` (`id_daftar`, `tanggal`, `nama`, `sekolah`, `foto`, `no_hp`, `email`, `lomba`, `username`, `password`, `bukti_bayar`, `status`, `level`) VALUES
(5, '2015-10-15', 'Test Admin', 'SMA X', '3x4.jpg', '085336180559', 'testAdmin@mail.com', 'jaringan', 'agus', 'fdf169558242ee051cca1479770ebac3', '3.jpg', 0, 'peserta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lomba`
--

CREATE TABLE IF NOT EXISTS `lomba` (
`id_lomba` int(3) NOT NULL,
  `nama_lomba` varchar(225) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lomba`
--

INSERT INTO `lomba` (`id_lomba`, `nama_lomba`, `tanggal`) VALUES
(1, 'Lomba Animasi', '0000-00-00'),
(2, 'Lomba Jaringan', '0000-00-00'),
(3, 'Lomba Poster', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
`id` int(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telpon` varchar(12) NOT NULL,
  `isi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_animasi`
--
ALTER TABLE `daftar_animasi`
 ADD PRIMARY KEY (`id_daftar`);

--
-- Indexes for table `daftar_jaringan`
--
ALTER TABLE `daftar_jaringan`
 ADD PRIMARY KEY (`id_daftar`);

--
-- Indexes for table `lomba`
--
ALTER TABLE `lomba`
 ADD PRIMARY KEY (`id_lomba`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `daftar_animasi`
--
ALTER TABLE `daftar_animasi`
MODIFY `id_daftar` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `daftar_jaringan`
--
ALTER TABLE `daftar_jaringan`
MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `lomba`
--
ALTER TABLE `lomba`
MODIFY `id_lomba` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
