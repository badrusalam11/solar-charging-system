-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2021 at 03:48 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `solar charging station`
--

-- --------------------------------------------------------

--
-- Table structure for table `charge now`
--

CREATE TABLE `charge now` (
  `Id` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Kode charge` varchar(15) NOT NULL,
  `Set time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `exchange point`
--

CREATE TABLE `exchange point` (
  `Id` int(11) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Harga` int(11) NOT NULL,
  `Foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `Id` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `First name` varchar(100) NOT NULL,
  `Last Name` varchar(100) NOT NULL,
  `Kode charge` varchar(15) NOT NULL,
  `Waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Kode unik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kode_valid`
--

CREATE TABLE `kode_valid` (
  `id` int(11) NOT NULL,
  `Kode charge` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table_point`
--

CREATE TABLE `table_point` (
  `Id` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Point` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Indexes for dumped tables
--

--
-- Indexes for table `charge now`
--
ALTER TABLE `charge now`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Username` (`Username`);

--
-- Indexes for table `exchange point`
--
ALTER TABLE `exchange point`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Username` (`Username`);

--
-- Indexes for table `kode_valid`
--
ALTER TABLE `kode_valid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_point`
--
ALTER TABLE `table_point`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Username` (`Username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `charge now`
--
ALTER TABLE `charge now`
  ADD CONSTRAINT `charge now_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `users` (`Username`);

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `users` (`Username`);

--
-- Constraints for table `table_point`
--
ALTER TABLE `table_point`
  ADD CONSTRAINT `table_point_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `users` (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
