-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 06, 2019 at 06:20 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `E-vent`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabelJoin`
--

CREATE TABLE `tabelJoin` (
  `id` int(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `telp` int(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `norek` int(50) NOT NULL,
  `alasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabelJoin`
--

INSERT INTO `tabelJoin` (`id`, `nama`, `telp`, `email`, `norek`, `alasan`) VALUES
(3, 'lut', 454545, 'lut@gmail', 2147483647, 'kopi'),
(4, 'luthfi', 82322145, 'l@gmail.com', 90678594, 'mau ikut');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_pembayaran` int(50) NOT NULL,
  `id_user` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_rek_pribadi` int(50) NOT NULL,
  `no_rek_tujuan` int(50) NOT NULL,
  `jns_bank` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(30) NOT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `judul` varchar(100) NOT NULL,
  `location` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `kontak` varchar(40) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `gambar`, `judul`, `location`, `tanggal`, `kontak`, `deskripsi`) VALUES
(0, 'saya', 'pawang meraj', 'bantul', '2018-11-07', '889988', 'mendekatu');

-- --------------------------------------------------------

--
-- Table structure for table `upload_post`
--

CREATE TABLE `upload_post` (
  `id_upload` int(30) NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `kontak` int(30) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload_post`
--

INSERT INTO `upload_post` (`id_upload`, `gambar`, `judul`, `location`, `tanggal`, `kontak`, `deskripsi`) VALUES
(44, 'images.jpg', 'KOPI JOGJA', 'Bantul', '2019-01-16', 909, 'silhakan datang'),
(45, 'abc.png', 'GREATES(2)', 'bandung', '2019-01-10', 909, 'datang dan saksikan'),
(46, 'ase.jpg', 'AEROFEST 2018', 'jogja', '2019-01-25', 909, 'Bagi yang mau ikut daftar'),
(47, 'abf.jpg', 'HISPANIC', 'Bantul', '2019-11-17', 909, 'Ayo Dance Bareng'),
(48, 'abe.jpg', 'BEER FESTIVAL', 'sleman', '2019-01-17', 909, 'Ayo Minum Bareng biar Ngefly'),
(49, 'abd.jpg', 'MAKING FOR GOD', 'bantul', '2019-01-18', 909, 'Utamakan Sholat');

-- --------------------------------------------------------

--
-- Table structure for table `User_Login`
--

CREATE TABLE `User_Login` (
  `id_user` int(30) NOT NULL,
  `nama` char(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat_1` text NOT NULL,
  `alamat_2` text NOT NULL,
  `kota` varchar(30) NOT NULL,
  `negara` varchar(30) NOT NULL,
  `kode_pos` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `User_Login`
--

INSERT INTO `User_Login` (`id_user`, `nama`, `email`, `password`, `alamat_1`, `alamat_2`, `kota`, `negara`, `kode_pos`) VALUES
(1, 'alut', 'a@gmail.com', 'ijijijhihugu', 'hhfhjfhjhcfhj', 'ihugugg', 'Solo', 'indonesia', 89889),
(2, 'kinah', 'k@kinah.com', '$2y$10$bX.S4tHuFhFDHri3ocpLveEy38JKYycwqYRfdNSBTQFmpATiOUw5.', '', '', 'palu', 'indonesia', 5558),
(3, 'sakinah', 's@kinah.com', '$2y$10$ryOk0psgE2EyltF2SQio.uVztuNvkyZfk3aCbuaY4aQk91oKXLxOG', '', '', 'rembang', 'indonesia', 55589),
(4, 'sakinah', 's@kinah.com', '$2y$10$rHoq0zIcVY1.o0EAI8SRu.R2c0OA7aC8Y6XBRx/8pb9glHSewX6Cq', 'karawnag', 'parigi', 'slema', 'indonesia', 55589),
(5, 'luthfi', 'luth@l.com', '$2y$10$kTPIWj68Qp.ltyCihl81BO.vDjBQBpAG3ZelmvpKZ0kAT5K1Xq0ZG', 'kaliurang', 'palu', 'palu', 'indonesia', 5586),
(6, '', 'hidayatfaisal07@gmail.com', '$2y$10$77FAYOpk.BUhb7Yd6LnEluaS20/ALs/ZI/0P6aKZHQu7a6BARtbvG', 'karangmojo', '', 'wonosari', 'indonesia', 55891),
(7, 'ical', 'shentry@gmail.com', '$2y$10$fsxv5bVjrejuBhpe3PL5quTTOBXvGebiLNUENt1MxHT7WlF463tf6', 'kd1', 'kd1', 'jogja', 'indo', 55891),
(8, 'aji', 'aji@gmail.com', '$2y$10$nnlkjYUY60UwhAzbijE3c.GC8fQ860qCGWbq6RWAKiuflfd9zgCie', 'smn', 'smn', 'jogja', 'indo', 558912),
(9, 'faisal', 'ical@gmail.com', '$2y$10$2fkS8jdUXYnaFwehBXs1f.aigh5ucRphQhD/XUKMyEZkNdvkAtk/q', 'gk', 'gk', 'jogja', 'indo', 55671);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabelJoin`
--
ALTER TABLE `tabelJoin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `bayar` (`id_user`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_post`
--
ALTER TABLE `upload_post`
  ADD PRIMARY KEY (`id_upload`);

--
-- Indexes for table `User_Login`
--
ALTER TABLE `User_Login`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabelJoin`
--
ALTER TABLE `tabelJoin`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_pembayaran` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `upload_post`
--
ALTER TABLE `upload_post`
  MODIFY `id_upload` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `User_Login`
--
ALTER TABLE `User_Login`
  MODIFY `id_user` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD CONSTRAINT `bayar` FOREIGN KEY (`id_user`) REFERENCES `User_Login` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
