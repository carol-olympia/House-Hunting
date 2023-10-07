-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2023 at 12:03 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `house_sell`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `role` enum('Admin','User') NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `phone`, `role`, `status`, `password`) VALUES
(73, 'paul', 'jsmithmulaika', 'test@gmail.com', '0111893789', 'User', 'Active', '$2y$10$T2Y/GIWf0z8NS8R77wltHOrUi1KapdppBIT5aST56HTEn8bQEF1iG'),
(74, 'paul', 'mark', 'mark1kinai1@gmail.com', '+254 792 327265', 'Admin', 'Inactive', '$2y$10$tvU4L1MySC6/Bq6nbDwT3ujprzMPZHXZKx3A4MBaMAdIMSaEWymxG'),
(75, 'mark', 'admin', 'mark1kinai1@gmail.com', '+254 792 327265', 'Admin', 'Inactive', '$2y$10$kDv4AuP/q4fiX1U1DF8DDusYlYrCHZfHlsujUbPZi9XPvMz9fROQa'),
(76, 'paul', 'mark', 'admin@gmail.com', '0111893789', 'Admin', 'Active', '$2y$10$tYAVH4Nz0ANwhz9B9lhrx.oKen6ofEA3e7gdVLL2mIqcNipOLIqyC'),
(77, 'mark', 'mark', 'admin@gmail.com', '0111893789', 'Admin', 'Inactive', '$2y$10$0eOMSzAbQU28/TCzBwd5yuW4.29/CBCxWe5uCJV6pc0PdrwCV6S/G'),
(78, 'mark', 'admin', 'mark1kinai1@gmail.com', '0111893789', 'Admin', 'Active', '$2y$10$uJS9QH.N.kq4vc377iGMAeEAd/G3IWmKRhDnpouF6HfePWqWqujjC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
