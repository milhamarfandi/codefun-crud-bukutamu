-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2020 at 01:58 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bukutamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bukutamu`
--

CREATE TABLE `tbl_bukutamu` (
  `id_bukutamu` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `aktifitas` text NOT NULL,
  `check_in` datetime NOT NULL,
  `check_out` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bukutamu`
--

INSERT INTO `tbl_bukutamu` (`id_bukutamu`, `nama`, `email`, `aktifitas`, `check_in`, `check_out`) VALUES
(8, 'ilham', 'ilham.arfandi.973@gmail.com', 'berkunjung', '2020-01-31 08:39:04', '2020-01-31 14:51:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bukutamu`
--
ALTER TABLE `tbl_bukutamu`
  ADD PRIMARY KEY (`id_bukutamu`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bukutamu`
--
ALTER TABLE `tbl_bukutamu`
  MODIFY `id_bukutamu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
