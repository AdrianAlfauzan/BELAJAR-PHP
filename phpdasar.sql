-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2024 at 04:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nrp` char(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Adrian Musa Alfauzan', '2250081020', 'Stalkerxstalk@gmail.com', 'Informatika', 'Ai.png'),
(2, 'Cristiano Ronaldo', '2250081030', 'CristianoRonaldo@gmail.com', 'Teknik Sepakbola', 'C.png'),
(10, 'Messi', '2250081090', 'messi@gmail.com', 'Teknik Barbie', 'Linux.png'),
(11, 'Kaka', '2250081060', 'kaka@gmail.com', 'Teknik Farmasi', 'Linux.png'),
(12, 'Beckham', '2250081045', 'beckham', 'Teknik Salom', 'Javascript.png'),
(13, 'De Gea', '2250081031', 'degea@gmail.com', 'Tenkik Keeper', 'Python.png'),
(14, 'Casillas', '2250081087', 'casillas@gmail.com', 'Teknik Management Keeper', 'Javascript.png'),
(15, 'Neymar Jr', '2250081076', 'neymar@gmail.com', 'Teknik Dance Brazil', 'Python.png'),
(17, 'Gerrard', '2250081066', 'Gerrard@gmail.com', 'Teknik Power Shots', 'C.png'),
(21, 'Essien M', '2250081093', 'essien@gmail.com', 'Teknik Persib', 'C.png'),
(49, 'asd', 'asdasd', 'asd', 'asd', '65f46d7e17f79.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'adrian', '$2y$10$rxWUhWWLFYShHDZIo5umdOAgSpPG7GzXQM9SSXw1ycPTRxv/G/7ru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
