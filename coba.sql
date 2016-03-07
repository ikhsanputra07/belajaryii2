-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2016 at 11:33 AM
-- Server version: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coba`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `no` int(10) NOT NULL,
  `npm` varchar(35) NOT NULL DEFAULT '',
  `nama` varchar(40) DEFAULT NULL,
  `tangga_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`no`, `npm`, `nama`, `tangga_lahir`) VALUES
(1, '098678', 'rahis', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `rapor_murid`
--

CREATE TABLE IF NOT EXISTS `rapor_murid` (
  `npm` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `mata_kuliah` varchar(20) NOT NULL,
  `nilai` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rapor_murid`
--

INSERT INTO `rapor_murid` (`npm`, `nama`, `mata_kuliah`, `nilai`) VALUES
(567483, 'maman', 'ips', 76),
(5411456, 'rahis', 'ipa', 75),
(5432112, 'budi', 'matematika', 60);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`npm`);

--
-- Indexes for table `rapor_murid`
--
ALTER TABLE `rapor_murid`
  ADD PRIMARY KEY (`npm`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
