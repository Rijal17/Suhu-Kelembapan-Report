-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2022 at 02:41 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suhu`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('user','admin','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `level`) VALUES
(1, 'inayah', '$2y$10$ecymHCr.WtUs1GSMU.FnNOLg8ic46E0nJ2qhr2NVkk9NxrA6ehq2e', 'admin'),
(2, 'user', '$2y$10$9w8d1UtbOronHW8p8.2mZuK4XwihstAZkSgN2kCMo9hY5ufcivfiK', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `t_info`
--

CREATE TABLE `t_info` (
  `id` int(10) NOT NULL,
  `suhu` double(15,2) NOT NULL,
  `kelembaban` double(15,2) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_info`
--

INSERT INTO `t_info` (`id`, `suhu`, `kelembaban`, `waktu`) VALUES
(643, 28.70, 96.30, '2022-11-07 05:35:30'),
(644, 28.70, 96.30, '2021-01-02 09:17:26'),
(645, 28.70, 95.90, '2021-01-02 09:17:27'),
(646, 28.70, 95.90, '2021-01-02 09:17:28'),
(647, 28.70, 96.10, '2021-01-02 09:17:29'),
(648, 28.70, 96.10, '2021-01-02 09:17:30'),
(663, 28.81, 91.31, '2022-11-07 05:19:54'),
(664, 33.33, 44.44, '2022-11-07 05:37:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_info`
--
ALTER TABLE `t_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_info`
--
ALTER TABLE `t_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=665;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
