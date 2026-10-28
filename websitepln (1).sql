-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2026 at 02:57 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websitepln`
--

-- --------------------------------------------------------

--
-- Table structure for table `inputdata2`
--

CREATE TABLE `inputdata2` (
  `id` int(11) NOT NULL,
  `NAMATIM` varchar(25) NOT NULL,
  `KABEL50` text NOT NULL,
  `KABEL100` text NOT NULL,
  `KABEL150` text NOT NULL,
  `KABEL250` text NOT NULL,
  `ONTRAISECOM` text NOT NULL,
  `ONTHUAWEI` text NOT NULL,
  `ONTFIBERHOME` text NOT NULL,
  `STB` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inputdata2`
--

INSERT INTO `inputdata2` (`id`, `NAMATIM`, `KABEL50`, `KABEL100`, `KABEL150`, `KABEL250`, `ONTRAISECOM`, `ONTHUAWEI`, `ONTFIBERHOME`, `STB`) VALUES
(1, 'NAMA TIM 2', '1', '1', '1', '1', '', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `inputdata3`
--

CREATE TABLE `inputdata3` (
  `id` int(11) NOT NULL,
  `NAMATIM` varchar(30) NOT NULL,
  `KABEL50` text NOT NULL,
  `KABEL100` text NOT NULL,
  `KABEL150` text NOT NULL,
  `KABEL250` text NOT NULL,
  `ONTRAISECOM` text NOT NULL,
  `ONTHUAWEI` text NOT NULL,
  `ONTFIBERHOME` text NOT NULL,
  `STB` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inputdata4`
--

CREATE TABLE `inputdata4` (
  `id` int(11) NOT NULL,
  `NAMATIM` varchar(30) NOT NULL,
  `KABEL50` text NOT NULL,
  `KABEL100` text NOT NULL,
  `KABEL150` text NOT NULL,
  `KABEL250` text NOT NULL,
  `ONTRAISECOM` text NOT NULL,
  `ONTHUAWEI` text NOT NULL,
  `ONTFIBERHOME` text NOT NULL,
  `STB` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inputdata4`
--

INSERT INTO `inputdata4` (`id`, `NAMATIM`, `KABEL50`, `KABEL100`, `KABEL150`, `KABEL250`, `ONTRAISECOM`, `ONTHUAWEI`, `ONTFIBERHOME`, `STB`) VALUES
(1, 'GSP TANGGAMUS', '', '1', '7', '', '4', '6', '2', '1'),
(2, 'GSP SUNGAI PENUH', '', '4', '5', '', '10', '9', '', ''),
(3, 'GSP JAMBI 2', '', '6', '6', '', '6', '6', '4', ''),
(4, 'GSP BULIAN', '0', '1', '4', '', '2', '4', '5', ''),
(5, 'GSP TEBO-RIMBO BUJANG', '2', '2', '2', '', '5', '7', '', ''),
(6, 'GSP BENTENG MUARABANGKAHULU', '1', '8', '', '', '3', '7', '2', ''),
(7, 'GSP BENGKULU 1', '', '13', '', '', '1', '9', '3', ''),
(8, 'GSP BENGKULU 2', '', '8', '', '', '', '4', '2', ''),
(9, 'GSP MUKOMUKO - IPUH', '', '5', '', '', '', '9', '', ''),
(10, 'GSP MANNA-KAUR', '', '14', '2', '', '3', '11', '', ''),
(11, 'GSP LINGGAU', '5', '', '4', '', '', '4', '3', ''),
(12, 'GSP PRABUMULIH', '3', '1', '', '', '5', '3', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id user` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id user`, `email`, `password`) VALUES
(1, 'root@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `saldo_material`
--

CREATE TABLE `saldo_material` (
  `id` int(11) NOT NULL,
  `NAMATIM` varchar(30) NOT NULL,
  `KABEL50` text NOT NULL,
  `KABEL100` text NOT NULL,
  `KABEL150` text NOT NULL,
  `KABEL250` text NOT NULL,
  `ONTRAISECOM` text NOT NULL,
  `ONTHUAWEI` text NOT NULL,
  `ONTFIBERHOME` text NOT NULL,
  `STB` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `saldo_material`
--

INSERT INTO `saldo_material` (`id`, `NAMATIM`, `KABEL50`, `KABEL100`, `KABEL150`, `KABEL250`, `ONTRAISECOM`, `ONTHUAWEI`, `ONTFIBERHOME`, `STB`) VALUES
(1, 'NAMA TIM 1', '10', '10', '', '', '01', '', '10', '10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inputdata2`
--
ALTER TABLE `inputdata2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inputdata3`
--
ALTER TABLE `inputdata3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inputdata4`
--
ALTER TABLE `inputdata4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id user`);

--
-- Indexes for table `saldo_material`
--
ALTER TABLE `saldo_material`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inputdata2`
--
ALTER TABLE `inputdata2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inputdata3`
--
ALTER TABLE `inputdata3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inputdata4`
--
ALTER TABLE `inputdata4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `saldo_material`
--
ALTER TABLE `saldo_material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
