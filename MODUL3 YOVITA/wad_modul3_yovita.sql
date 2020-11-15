-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2020 at 03:44 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad_modul3_yovita`
--

-- --------------------------------------------------------

--
-- Table structure for table `event_table`
--

CREATE TABLE `event_table` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `mulai` time NOT NULL DEFAULT current_timestamp(),
  `berakhir` time NOT NULL DEFAULT current_timestamp(),
  `tempat` varchar(100) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `benefit` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_table`
--

INSERT INTO `event_table` (`id`, `name`, `deskripsi`, `gambar`, `kategori`, `tanggal`, `mulai`, `berakhir`, `tempat`, `harga`, `benefit`) VALUES
(11, 'Yovita Margaret Abigail', 'open mind lab', 'pict.png', 'Online', '2020-11-18', '10:00:00', '11:00:00', 'zoom', 200000, 'souvenir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event_table`
--
ALTER TABLE `event_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event_table`
--
ALTER TABLE `event_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
