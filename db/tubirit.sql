-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2022 at 05:49 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubirit`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `idbuku` varchar(10) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `halaman` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `penerbit` varchar(30) NOT NULL,
  `summary` varchar(200) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `idgenre` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`idbuku`, `judul`, `halaman`, `tahun`, `penulis`, `penerbit`, `summary`, `rating`, `idgenre`) VALUES
('B001', 'Hujan', 320, 2016, 'Tere Liye', 'Gramedia', NULL, NULL, 'G004'),
('B002', 'The Magic Library', 284, 1993, 'Jostein Gaarder', 'Mizan', NULL, NULL, 'G003'),
('B003', 'Api Tauhid', 574, 2014, 'Habiburrahman El Shirazy', 'Republika', NULL, NULL, 'G001');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `idgenre` varchar(4) NOT NULL,
  `genre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`idgenre`, `genre`) VALUES
('G001', 'History'),
('G002', 'Adventure'),
('G003', 'Fantasy'),
('G004', 'Science-Fiction'),
('G005', 'Humor'),
('G006', 'Horror'),
('G007', 'Romance'),
('G008', 'Thriller');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `reqid` varchar(10) NOT NULL,
  `reqdate` date NOT NULL DEFAULT current_timestamp(),
  `reqjudul` varchar(30) NOT NULL,
  `reqpenulis` varchar(50) NOT NULL,
  `reqpenerbit` varchar(20) NOT NULL,
  `reqhalaman` int(11) NOT NULL,
  `reqtahun` int(11) NOT NULL,
  `reqsummary` varchar(500) DEFAULT NULL,
  `status` varchar(10) NOT NULL,
  `iduser` int(3) NOT NULL,
  `idgenre` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`reqid`, `reqdate`, `reqjudul`, `reqpenulis`, `reqpenerbit`, `reqhalaman`, `reqtahun`, `reqsummary`, `status`, `iduser`, `idgenre`) VALUES
('req001', '2022-06-11', 'Pulang', 'Tere Liye', 'Republika', 400, 2015, 'Novel ini menceritakan kisah seorang anak laki-laki bernama Bujang yang tinggal di dasar rimba Sumatra bersama Samad dan Midah, kedua orang tuanya. Hidupnya sederhana, sama seperti anak kecil pada umumnya. Hingga kedatangan rombongan Tauke Besar untuk berburu menjadi awal perubahan hidupnya.', 'Waiting', 1, 'G002');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `idRole` varchar(5) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`idRole`, `role`) VALUES
('role1', 'Admin'),
('role2', 'Member'),
('role3', 'Guest');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(3) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(42) DEFAULT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `nohp` varchar(15) DEFAULT NULL,
  `foto` varchar(30) DEFAULT NULL,
  `idrole` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `email`, `password`, `fname`, `lname`, `nohp`, `foto`, `idrole`) VALUES
(1, 'khaira.isyara@students.esqbs.ac.id', '$2y$10$B/e70UtczjW9shZgGoYAG.2TvngPMGDii.T', 'Khaira', 'Isyara', '081291519404', NULL, 'role1'),
(2, 'mohamad.reyhand.f@students.esq', '$2y$10$2MICrFZP6SaRGCaFexFKD.5Ew2joKnFsMhG', 'Reyhand', 'Fatturrahman', '08121234567', NULL, 'role2'),
(3, 'chiekal.mulia@students.esqbs.a', '$2y$10$g.QjjJLo6euoAWMfWqdlf.8/FVjzbpO7syH', 'Chiekal', 'Mulia', '02147483647', NULL, 'role3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`idbuku`),
  ADD KEY `C_genre` (`idgenre`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`idgenre`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`reqid`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `idgenre` (`idgenre`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`idRole`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `idrole` (`idrole`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `C_genre` FOREIGN KEY (`idgenre`) REFERENCES `genre` (`idgenre`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `idgenre` FOREIGN KEY (`idgenre`) REFERENCES `genre` (`idgenre`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `iduser` FOREIGN KEY (`iduser`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`idrole`) REFERENCES `role` (`idRole`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
