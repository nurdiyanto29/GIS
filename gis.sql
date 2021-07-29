-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 03, 2017 at 10:06 AM
-- Server version: 5.5.58-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tugasakhir_gis`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_galeri`
--

--
-- Dumping data for table `tb_galeri`
--


-- --------------------------------------------------------

-- CREATE TABLE IF NOT EXISTS `tb_review` (
--   `id_review` int(11) NOT NULL AUTO_INCREMENT,
--   `id_tempat` int(11) NOT NULL,
--   `nama` varchar(255) NOT NULL,
--   `komentar` varchar(255) NOT NULL,
--   PRIMARY KEY (`id_review`)
-- ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `tb_review`
--

-- INSERT INTO `tb_review` (`id_review`, `id_tempat`, `nama`, `komentar`) VALUES
-- (1, 11, 'joko', 'bagus kok'),
-- (2, 12, 'jiki', 'b aja');
--
-- Table structure for table `tb_options`
--

CREATE TABLE IF NOT EXISTS `tb_faq` (
  `id_faq` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pesan` varchar(255) NOT NULL,
  PRIMARY KEY (`id_faq`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

