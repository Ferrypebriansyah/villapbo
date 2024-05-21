-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Mei 2024 pada 17.56
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_booking`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bookings`
--

CREATE TABLE IF NOT EXISTS `bookings` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `nomortel` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `cekin` date NOT NULL,
  `cekout` date NOT NULL,
  `villa` varchar(50) NOT NULL,
  `price_per_night` int(11) NOT NULL DEFAULT '0',
  `total_price` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bookings`
--

INSERT INTO `bookings` (`id`, `name`, `nomortel`, `email`, `nik`, `cekin`, `cekout`, `villa`, `price_per_night`, `total_price`) VALUES
(1, 'Ferry Pebriansyah', '0859106994043', 'ferryfeb10@gmail.com', '50422572', '2024-05-26', '2024-05-30', 'Milan', 1000000, 4000000),
(2, 'Bagus Satrio', '08592323433', 'bagus@example.com', '50422317', '2024-06-01', '2024-06-03', 'Venezia', 3000000, 6000000),
(3, 'Fathurrahman', '083463722323', 'fathur@yahoo.com', '51422049', '2024-05-28', '2024-05-30', 'Turin', 5000000, 10000000),
(4, 'Adam Firmansyah', '0859106994043', 'adam@example.com', '50422041', '2024-04-01', '2024-04-03', 'Venezia', 3000000, 6000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
