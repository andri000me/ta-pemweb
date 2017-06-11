-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2017 at 09:25 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_penduduk`
--

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id_kab` int(4) NOT NULL,
  `nama_kab` varchar(25) NOT NULL,
  `kd_prov` varchar(15) NOT NULL,
  `jml_penduduk` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kabupaten`
--

INSERT INTO `kabupaten` (`id_kab`, `nama_kab`, `kd_prov`, `jml_penduduk`) VALUES
(2, 'Sleman', 'DIY', 1340),
(3, 'Bantul', 'DIY', 1150),
(4, 'Kulon Progo', 'DIY', 800),
(5, 'Kudus', 'JTG', 1100),
(6, 'Demak', 'JTG', 760),
(7, 'Garut', 'JBR', 870),
(8, 'Kuningan', 'JBR', 890),
(9, 'Bogor', 'JBR', 965),
(10, 'Bandung', 'JBR', 1250),
(11, 'Gunung Kidul', 'DIY', 890),
(12, 'Pangandaran', 'JBR', 980),
(13, 'Semarang', 'JTG', 1120);

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id_prov` int(4) NOT NULL,
  `kd_prov` varchar(15) NOT NULL,
  `nama_prov` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id_prov`, `kd_prov`, `nama_prov`) VALUES
(2, 'DIY', 'Daerah Istimewa Yogyakarta'),
(3, 'JTG', 'Jawa Tengah'),
(4, 'JTM', 'Jawa Timur'),
(5, 'JBR', 'Jawa Barat'),
(6, 'JKT', 'DKI Jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id_user` int(2) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `level` varchar(10) NOT NULL,
  `aktif` int(1) NOT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id_user`, `username`, `password`, `nama`, `level`, `aktif`, `last_login`) VALUES
(1, 'admin1', 'c93ccd78b2076528346216b3b2f701e6', 'Admin Deva', 'admin', 1, '2017-03-08 14:19:59'),
(2, 'user1', 'b5b73fae0d87d8b4e2573105f8fbe7bc', 'Devara Eko', 'user', 0, '2017-03-07 18:26:13'),
(4, 'katon', 'ac02850b47d641f5a944828f2d4fe332', 'Admin Katon', 'admin', 1, '2017-03-07 21:49:42'),
(5, 'mahardika', 'dd955cc7d09bb8f3c65a69a09415d35d', 'Mahardika', 'user', 1, '2017-03-08 15:20:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id_kab`),
  ADD KEY `kd_prov` (`kd_prov`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_prov`),
  ADD KEY `kd_prov` (`kd_prov`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id_kab` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_prov` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD CONSTRAINT `kd_prov` FOREIGN KEY (`kd_prov`) REFERENCES `provinsi` (`kd_prov`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
