-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Sep 2021 pada 15.03
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `solar_charging_station`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `exchange point`
--

CREATE TABLE `exchange point` (
  `Id` int(11) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Harga` int(11) NOT NULL,
  `Foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `history`
--

CREATE TABLE `history` (
  `Id` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Kode_charge` varchar(15) NOT NULL,
  `Waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Durasi` int(11) NOT NULL,
  `Kode_unik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `history`
--

INSERT INTO `history` (`Id`, `Username`, `Kode_charge`, `Waktu`, `Durasi`, `Kode_unik`) VALUES
(4, 'bayuajies', '', '2021-09-11 10:43:28', 1, 1543401373),
(5, 'bayuajies', '', '2021-09-11 10:46:39', 1, 1921638175),
(6, 'bayuajies', '', '2021-09-11 12:10:42', 1, 1177077289),
(7, 'bayuajies', '', '2021-09-11 12:11:45', 1, 760003144),
(8, 'bayuajies', '', '2021-09-11 12:12:01', 1, 2046763246),
(9, 'bayuajies', 'UNTIRTA JAWARA', '2021-09-11 12:29:55', 1, 2011308109),
(10, 'bayuajies', 'UNTIRTA JAWARA', '2021-09-11 12:35:38', 1, 1954016227),
(11, 'bayuajies', 'UNTIRTA JAWARA', '2021-09-11 12:41:24', 1, 1789049458),
(12, 'bayuajies', 'UNTIRTA JAWARA', '2021-09-11 12:41:40', 1, 50605957),
(13, 'bayuajies', 'UNTIRTA JAWARA', '2021-09-11 12:42:18', 1, 1199497845),
(14, 'badrusalam11', 'UNTIRTA JAWARA', '2021-09-11 12:44:23', 5, 914611561),
(15, 'badrusalam11', 'UNTIRTA JAWARA', '2021-09-11 13:00:33', 15, 577082245);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kode_valid`
--

CREATE TABLE `kode_valid` (
  `id` int(11) NOT NULL,
  `Kode_charge` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kode_valid`
--

INSERT INTO `kode_valid` (`id`, `Kode_charge`) VALUES
(1, 'UNTIRTA JAWARA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_point`
--

CREATE TABLE `table_point` (
  `Id` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Point` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `table_point`
--

INSERT INTO `table_point` (`Id`, `Username`, `Point`) VALUES
(1, 'bayuajies', 2),
(10, 'badrusalam11', 30);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `First name` varchar(100) NOT NULL,
  `Last name` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Phone number` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `About me` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`First name`, `Last name`, `Username`, `Email`, `Password`, `Phone number`, `Address`, `About me`) VALUES
('', '', 'badrusalam11', 'badrusalam760@gmail.com', '$2y$10$IKN36V8cFAGlMKblvwhhiuhT8xZvNt58NYFyPsxJXc6MpkVUTcklm', '', '', ''),
('', '', 'bayuajies', 'bayuaji@gmail.com', '$2y$10$9ddSGCCeCcDWEJP3YagBFuIOhhXKnBwyXmZ040VrrbgM/yHbPbDEa', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `exchange point`
--
ALTER TABLE `exchange point`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Username` (`Username`);

--
-- Indeks untuk tabel `kode_valid`
--
ALTER TABLE `kode_valid`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `table_point`
--
ALTER TABLE `table_point`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Username` (`Username`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `exchange point`
--
ALTER TABLE `exchange point`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `history`
--
ALTER TABLE `history`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `kode_valid`
--
ALTER TABLE `kode_valid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `table_point`
--
ALTER TABLE `table_point`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `users` (`Username`);

--
-- Ketidakleluasaan untuk tabel `table_point`
--
ALTER TABLE `table_point`
  ADD CONSTRAINT `table_point_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `users` (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
