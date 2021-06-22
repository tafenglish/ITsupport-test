-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21 Jun 2021 pada 11.11
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jawaban`
--

CREATE TABLE `tbl_jawaban` (
  `id` int(11) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `pilihan_jawab` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jawaban`
--

INSERT INTO `tbl_jawaban` (`id`, `id_soal`, `pilihan_jawab`) VALUES
(1, 1, 'kang lampu'),
(2, 1, 'junalah'),
(5, 1, 'sujono lagi'),
(6, 1, 'sukoco lagi'),
(7, 2, 'inggris'),
(8, 2, 'indonesia'),
(9, 2, 'malaysia'),
(10, 2, 'nigeria'),
(11, 3, 'nigeria'),
(12, 3, 'indonesia'),
(13, 3, 'korea'),
(14, 3, 'inggris'),
(15, 4, '4'),
(16, 4, '3'),
(17, 4, '6'),
(18, 4, '16'),
(19, 5, 'nigeria'),
(20, 5, 'argentina'),
(21, 5, 'spanyol'),
(22, 5, 'italia'),
(23, 6, 'chelsea'),
(24, 6, 'newcastle united'),
(25, 6, 'man city'),
(26, 6, 'manchester united'),
(27, 7, 'sporting lisbon'),
(28, 7, 'benfica'),
(29, 7, 'manchester united'),
(30, 7, 'arsenal'),
(31, 8, 'rugby'),
(32, 8, 'baseball'),
(33, 8, 'sepak bola'),
(34, 8, 'renang'),
(35, 9, 'apple'),
(36, 9, 'fruit'),
(37, 9, 'eyes'),
(38, 9, 'hair'),
(39, 10, 'hidupkan'),
(40, 10, 'matikan'),
(41, 10, 'buang'),
(42, 10, 'tidur'),
(43, 11, 'toko hp'),
(44, 11, 'toko bunga'),
(45, 11, 'kang telor'),
(46, 11, 'material'),
(59, 15, 'duck'),
(60, 15, 'fish'),
(61, 15, 'pig'),
(62, 15, 'turtle');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_score`
--

CREATE TABLE `tbl_score` (
  `id` int(11) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_score`
--

INSERT INTO `tbl_score` (`id`, `score`) VALUES
(14, 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_soal`
--

CREATE TABLE `tbl_soal` (
  `id` int(11) NOT NULL,
  `soal` varchar(225) NOT NULL,
  `jawaban` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_soal`
--

INSERT INTO `tbl_soal` (`id`, `soal`, `jawaban`) VALUES
(1, 'siapa yang jualan lampu?', 'kang lampu'),
(2, 'Manchester united club asal negara mana?', 'inggris'),
(3, 'Persija club asal negara mana?', 'indonesia'),
(4, '4 x 4 : 4', '4'),
(5, 'Messi pemain asal negara mana?', 'argentina'),
(6, 'Juara Liga inggris 20 kali adalah klub?', 'manchester united'),
(7, 'cristiano ronaldo sebelum bermain untuk real madrid, dia membela klub mana?', 'manchester united'),
(8, 'olahraga paling populer di dunia?', 'sepak bola'),
(9, 'apa bahasa inggrisnya buah?', 'fruit'),
(10, 'arti dari \"turn off\" adalah?', 'matikan'),
(11, 'beli pasir di?', 'material'),
(15, 'apa bahasa inggrisnya bebek?', 'duck');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$dmRDHBpBm/HU6qYXDfhyhuE4US9fsBekoWKuwWd00Im9vh2ke./8y'),
(9, 'jono', '$2y$10$7VFNoOsNvI/cPsHkPFnHsON8l/LWkC8w0gVYyt2xsdYVaTn86.psO'),
(14, 'user1234', '$2y$10$K0uOJCmd/mSB7EmRWaqPYOk2HlG5Ll1F0m9WfhDugZ7jzbJFiFdjm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_jawaban`
--
ALTER TABLE `tbl_jawaban`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_score`
--
ALTER TABLE `tbl_score`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_soal`
--
ALTER TABLE `tbl_soal`
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
-- AUTO_INCREMENT for table `tbl_jawaban`
--
ALTER TABLE `tbl_jawaban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `tbl_score`
--
ALTER TABLE `tbl_score`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_soal`
--
ALTER TABLE `tbl_soal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
