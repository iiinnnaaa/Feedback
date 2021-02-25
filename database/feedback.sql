-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 25, 2021 at 02:35 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `sent_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `firstname`, `lastname`, `email`, `message`, `sent_at`) VALUES
(20, 'Inna', 'Isoyan', 'asdn@kfks.fls', 'Etiam eu lorem sit amet mi bibendum auctor. Mauris nec risus a erat rutrum blandit. Vivamus sodales erat sit amet nibh elementum egestas.Etiam eu lorem sit amet mi bibendum auctor. Mauris nec risus a erat rutrum blandit. Vivamus sodales erat sit amet nibh elementum egestas.Etiam eu lorem sit amet mi bibendum auctor. Mauris nec risus a erat rutrum blandit. Vivamus sodales erat sit amet nibh elementum egestas.Etiam eu lorem sit amet mi bibendum auctor. Mauris nec risus a erat rutrum blandit. Vivamus sodales erat sit amet nibh elementum egestas.Etiam eu lorem sit amet mi bibendum auctor. Mauris nec risus a erat rutrum blandit. Vivamus sodales erat sit amet nibh elementum egestas.Etiam eu lorem sit amet mi bibendum auctor. Mauris nec risus a erat rutrum blandit. Vivamus sodales erat sit amet nibh elementum egestas.', '2021-02-19 17:52:51'),
(68, 'Inna', 'Isoyan', 'isoyan.inn@gmail.com', 'hhhhhhhhhhhhhhhhhhhhhggggggggggggggggggggggg', '2021-02-23 15:29:40'),
(69, 'Inna', 'Isoyan', 'isoyan.inn@gmail.com', 'aaaaaaaaaaaaaaaaaa', '2021-02-25 10:33:38'),
(70, 'Inna', 'Isoyan', 'isoyan.inn@gmail.com', 'aaaaaaaaaaaaaaaaaa', '2021-02-25 10:49:18'),
(71, 'Inna', 'Isoyan', 'isoyan.inn@gmail.com', 'aaaaaaaaaaaaaaaaaa', '2021-02-25 10:59:26'),
(72, 'Inna', 'Isoyan', 'isoyan.inn@gmail.com', 'aaaaaaaaaaaaaaaaaa', '2021-02-25 11:05:13'),
(73, 'Inna', 'Isoyan', 'isoyan.inn@gmail.com', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaertretvdervdfvrdc rdcfffffffffffffffffffffffyrdcfcvgbbbfghhhhhh', '2021-02-25 12:21:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '$2y$10$HBCAJlZUGJ61XEnTBWNlf.6XAmOGsfvuEHUYsu3WgNh6qSqHlAQ02'),
(2, 'admin2@gmail.com', '$2y$10$LAPwUls/wIwXCfmt0v7Ucer61JU6sst3t2eXS9/x1vDSeCTn6bdMW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
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
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
