-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2023 at 08:47 AM
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
-- Database: `artikel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `tgl_input` datetime NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `is_delete` int(11) NOT NULL,
  `penulis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `konten`, `tgl_input`, `gambar`, `is_delete`, `penulis`) VALUES
(1, 'judul 1', 'lorem ipsum dolor sit\r\nlorem ipsum dolor sit\r\nlorem ipsum dolor sit\r\nlorem ipsum dolor sitlorem ipsum dolor sit\r\nlorem ipsum dolor sit lorem ipsum dolor sitlorem ipsum dolor sitlorem ipsum dolor sit', '2023-09-11 00:00:00', 'image_20231013140800pm.jpg', 0, 'Penulis AAA'),
(2, 'Judul 2', 'lorem ipsum dolor sitlorem ipsum dolor sit\r\nlorem ipsum dolor sit\r\nlorem ipsum dolor sit\r\nlorem ipsum dolor sit\r\nlorem ipsum dolor sitlorem ipsum dolor sit\r\nlorem ipsum dolor sit lorem ipsum dolor sitlorem ipsum dolor sitlorem ipsum dolor sit', '2023-10-13 14:44:01', 'image_20231013144401pm.jpg', 0, 'Penulis BBB'),
(3, 'Judul 3', 'lorem ipsum dolor sit\r\nlorem ipsum dolor sit lorem ipsum dolor sit\r\nlorem ipsum dolor sit\r\nlorem ipsum dolor sit\r\nlorem ipsum dolor sitlorem ipsum dolor sit\r\nlorem ipsum dolor sit lorem ipsum dolor sitlorem ipsum dolor sitlorem ipsum dolor sit', '2023-10-13 14:44:40', 'image_20231013144440pm.jpg', 0, 'Penulis CCC');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_user` int(11) NOT NULL,
  `tgl_komentar` int(11) NOT NULL,
  `is_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
