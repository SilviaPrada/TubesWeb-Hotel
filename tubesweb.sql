-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2022 at 12:23 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubesweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `useradmin` varchar(50) NOT NULL,
  `passadmin` varchar(50) NOT NULL,
  `namaadmin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `useradmin`, `passadmin`, `namaadmin`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `datakamar`
--

CREATE TABLE `datakamar` (
  `idKamar` int(255) NOT NULL,
  `namaKamar` varchar(255) NOT NULL,
  `hargaKamar` int(255) NOT NULL,
  `ukuranKamar` int(11) NOT NULL,
  `kapasitasKamar` int(11) NOT NULL,
  `kasurKamar` varchar(255) NOT NULL,
  `pemandanganKamar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datakamar`
--

INSERT INTO `datakamar` (`idKamar`, `namaKamar`, `hargaKamar`, `ukuranKamar`, `kapasitasKamar`, `kasurKamar`, `pemandanganKamar`) VALUES
(1, 'Deluxe Room', 150000, 30, 3, 'Single King Bed', 'Laut'),
(2, 'President Suite', 500000, 50, 4, 'Double King Beds', 'Gunung dan Laut'),
(3, 'Regular Room', 75000, 20, 2, 'Regular Bed', '-'),
(4, 'Superior Room', 300000, 35, 4, 'Double Regular Bed', 'Gunung');

-- --------------------------------------------------------

--
-- Table structure for table `gambarkamar`
--

CREATE TABLE `gambarkamar` (
  `idGambar` int(11) NOT NULL,
  `idKamar` int(11) NOT NULL,
  `gambarKamar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gambarkamar`
--

INSERT INTO `gambarkamar` (`idGambar`, `idKamar`, `gambarKamar`) VALUES
(1, 1, 'Kamar-Hotel-Penuh-Gaya-Foto-1.jpg'),
(3, 2, 'fezbot2000-80b0ydkwj9A-unsplash.jpg'),
(9, 1, 'room-1.jpg'),
(10, 2, 'room-4.jpg'),
(11, 3, 'room-3.jpg'),
(12, 3, 'rd-4.jpg'),
(13, 4, 'rd-1.jpg'),
(14, 4, 'rd-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `idPesan` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idKamar` int(11) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `namaPemesan` varchar(50) NOT NULL,
  `totalPesan` int(11) NOT NULL,
  `status` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`idPesan`, `idUser`, `idKamar`, `checkin`, `checkout`, `namaPemesan`, `totalPesan`, `status`) VALUES
(12, 16, 1, '2021-12-30', '2022-01-01', 'silvia', 300000, 'disetujui'),
(13, 16, 3, '2022-09-04', '2022-09-07', 'silvia', 225000, 'disetujui');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `namauser` varchar(255) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fotoprofil` varchar(255) NOT NULL DEFAULT '../img/users/user.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `username`, `password`, `namauser`, `telepon`, `email`, `fotoprofil`) VALUES
(12, 'rara', 'd8830ed2c45610e528dff4cb229524e9', 'rara', '081345678890', 'rara@gmail.com', '../img/users/user.jpg'),
(13, 'lisa', 'ed14f4a4d7ecddb6dae8e54900300b1e', 'lisa', '081543215678', 'lisa@gmail.com', '../img/users/user.jpg'),
(16, 'silvia', 'e5cb7c411f1d9a67f68deff4a954cfbc', 'silvia', '0986489266', 'silvia@gmail.com', '../img/users/user.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `datakamar`
--
ALTER TABLE `datakamar`
  ADD PRIMARY KEY (`idKamar`);

--
-- Indexes for table `gambarkamar`
--
ALTER TABLE `gambarkamar`
  ADD PRIMARY KEY (`idGambar`),
  ADD KEY `idKamar` (`idKamar`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`idPesan`),
  ADD KEY `pemesanan_ibfk_1` (`idKamar`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `datakamar`
--
ALTER TABLE `datakamar`
  MODIFY `idKamar` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gambarkamar`
--
ALTER TABLE `gambarkamar`
  MODIFY `idGambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `idPesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gambarkamar`
--
ALTER TABLE `gambarkamar`
  ADD CONSTRAINT `gambarkamar_ibfk_1` FOREIGN KEY (`idKamar`) REFERENCES `datakamar` (`idKamar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`idKamar`) REFERENCES `datakamar` (`idKamar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`idUser`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
