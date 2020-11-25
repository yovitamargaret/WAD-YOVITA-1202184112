-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2020 at 03:37 PM
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
-- Database: `wad_modul4`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` bigint(255) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `no_hp`, `password`) VALUES
(4, 'ertyui', 'haha@gmail.com', 8567888, '$2y$10$ESY3smY3SYrhmDPGcD5aAOkXatR5RqV3NRBS/cOQZQgSkXoeB81Km'),
(5, 'dfghjkl', 'fghjk@gmail.com', 3456789, '$2y$10$WL/2fQOMVjgL8LCUAML2wOEEz3UEPuOLy7VMAUful6NgvK12qLwCy'),
(6, 'dfghjk', 'lalala@gmail.com', 23456789, '$2y$10$7KSngaNduLaU3x1vmWN4KuJtOteN70dZbr87sOrO3usKCi2y8QSSW'),
(7, 'ertyuio', 'jkdfghjk@gmail.com', 23456789, '$2y$10$8gc2uy0NeqxC5Rn2IJ5mm..fdTJZwJ3GoGlmd6BIOnmPNEXbGp7o6'),
(8, 'yovita', 'yovitaabigail@gmail.com', 182219542314, '$2y$10$8UY0LIy61XKNNcltWALgEejywSeMZSJ2o1DDYn5WyFVlZ9vAhsL/W'),
(9, 'teyut', 'yut@gmail.com', 2345789, '$2y$10$KJZrjNUvsnQMrpAjMHbwReefHOg8LpiyGqk9MuGYyUMn31VFv/Dii'),
(11, 'bts', 'bangtan@gmail.com', 45678899, '$2y$10$SqvkVL0shznRzwW61/iqceM7o9kfcp652HMI3ho3hkmRij9/jhEYC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
