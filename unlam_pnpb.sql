-- phpMyAdmin SQL Dump
-- version 3.4.5deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 25, 2013 at 07:50 PM
-- Server version: 5.1.67
-- PHP Version: 5.3.6-13ubuntu3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `unlam_pnpb`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id_berita` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `id_kategori` int(3) unsigned NOT NULL DEFAULT '0',
  `judul` varchar(100) NOT NULL DEFAULT '',
  `headline` text NOT NULL,
  `isi` text NOT NULL,
  `pengirim` varchar(15) NOT NULL DEFAULT '',
  `tanggal` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_berita`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `id_kategori`, `judul`, `headline`, `isi`, `pengirim`, `tanggal`) VALUES
(9, 1, 'Tes Berita', 'ini adalah berita RKAK', 'ini adalah isi berita RKAK', '', '2013-09-23 19:49:56'),
(2, 2, 'Tes berita PNBP', 'Diedit nah ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Waluh', '2013-09-14 15:14:41'),
(5, 1, 'Judul RKAK lagi', 'Tambah RKAK dalam hal admin', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', '2013-09-19 22:56:20');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `nm_kategori` varchar(30) NOT NULL DEFAULT '',
  `deskripsi` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_kategori`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nm_kategori`, `deskripsi`) VALUES
(1, 'rkak', 'semua tulisan berubungan dengan RKAK'),
(2, 'pnbp', 'semua tulisan berhubungan dengan PNBP');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bulan`
--

CREATE TABLE IF NOT EXISTS `tb_bulan` (
  `id_bulan` int(11) NOT NULL AUTO_INCREMENT,
  `bulan` int(3) NOT NULL,
  `tahun` int(4) NOT NULL,
  PRIMARY KEY (`id_bulan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tb_bulan`
--

INSERT INTO `tb_bulan` (`id_bulan`, `bulan`, `tahun`) VALUES
(1, 1, 2013),
(2, 2, 2013),
(3, 3, 2013),
(4, 4, 2013),
(5, 5, 2013),
(6, 6, 2013),
(7, 7, 2013),
(8, 8, 2013),
(9, 9, 2013),
(10, 10, 2013),
(11, 11, 2013),
(12, 12, 2013);

-- --------------------------------------------------------

--
-- Table structure for table `tb_ls`
--

CREATE TABLE IF NOT EXISTS `tb_ls` (
  `date` date NOT NULL,
  `sp2d` varchar(10) NOT NULL,
  `akun` int(7) NOT NULL,
  `id_hitung` int(7) NOT NULL AUTO_INCREMENT,
  `uraian` varchar(200) NOT NULL,
  `kotor` int(50) NOT NULL,
  `pajak` int(50) NOT NULL,
  PRIMARY KEY (`id_hitung`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tb_ls`
--

INSERT INTO `tb_ls` (`date`, `sp2d`, `akun`, `id_hitung`, `uraian`, `kotor`, `pajak`) VALUES
('2013-09-22', '0232', 521111, 9, 'Tes uraian ls pertama', 10000000, 1000000),
('2013-09-22', '3435', 542323, 10, 'Tes uraian ls kedua', 10000000, 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_up`
--

CREATE TABLE IF NOT EXISTS `tb_up` (
  `id_hitung` int(7) NOT NULL AUTO_INCREMENT,
  `no_bukti` varchar(50) NOT NULL,
  `uraian` varchar(200) NOT NULL,
  `dana_up` int(50) NOT NULL,
  `spj_up` int(50) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id_hitung`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tb_up`
--

INSERT INTO `tb_up` (`id_hitung`, `no_bukti`, `uraian`, `dana_up`, `spj_up`, `date`) VALUES
(9, '007/II/2013', 'Pertanggung jawaban UP honor mengajar', 50000000, 0, '0000-00-00'),
(11, '12/GU1/II/2013', 'Penarikan UP bln Feb (GU1)', 100000000, 0, '2013-09-20'),
(12, '12/GU1/II/2013', 'Penarikan UP bln Feb (GU1)', 100000000, 0, '2013-09-20'),
(13, '007/II/2013', 'Pertanggung jawaban UP honor mengajar', 0, 0, '2013-09-22'),
(14, '1321321', 'test aja', 0, 0, '2013-09-22');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(25) NOT NULL,
  `nama` varchar(27) NOT NULL,
  `password` varchar(25) NOT NULL,
  `akses` varchar(25) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `nama`, `password`, `akses`) VALUES
('surya', 'surya', '12345', 'admin'),
('muslihf', 'Muslih Farezhev', '12345', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
