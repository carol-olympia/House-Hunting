-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2023 at 02:52 PM
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
-- Database: `house`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `phone_number`, `email_address`, `username`, `password`) VALUES
(65, 'Mark', 'Kinai', '0111893789', 'mark1kinai1@gmail.com', 'dcsmks594822', '$2y$10$7oUdd9PaaxFxJ5IfYIZ.WO9ucqmOhP6Lg.O6.WQVxlKtQpfjSGPoS'),
(66, 'Mark', 'Kinai', '0111893789', 'mark1kivvvvnai1@gmail.com', 'dcccsmks594822', '$2y$10$08XBxSVheKFAUfEg/vspHeFwasD1KSpwMslJgkzRNPTpmdgUaE1G.'),
(67, 'Mark', 'Kinai', '0111893789', 'mark1kinai1cvd@gmail.com', 'dddv csmks594822', '$2y$10$IgTDqpauhN1VF7r78jDsVO/iBdNO3AKB6ajiYGJpw5JrSYtbyboWG'),
(68, 'Mark', 'Kinai', '0111893789', 'markccccccccc1kinai1@gmail.com', 'dcccccccccsmks594822', '$2y$10$zE/3R4kSpG5h9auPdU8AgOpr0xGroFFB0r.G2k0uEG2LAF/.xymeG'),
(69, 'Mark', 'Kinai', '0111893789', 'mark1kinannn1@gmail.com', 'dcsnnmks594822', '$2y$10$QoNbe2PmjM0FO39R9ATVgeVql/x.a5It6iYDA/2NjeBPkA7cEUWzq'),
(70, 'Mark', 'Kinai', '+10111893789', 'mark1kicccnai1@gmail.com', 'dcsmcccks594822', '$2y$10$5JpVJJEAFoOQcle6FEotJeUZSxW08cy2xSCHl16/oQOCP6Wg4tI..'),
(71, 'Mark', 'Kinai', '+10111893789', 'mark1kiccsnai1@gmail.com', 'dcdcscsmks594822', '$2y$10$iwIhejZd8fYErCTMc/SqlOmD0hpJHGfRcu33dljMOxMcMjLuISPW2'),
(72, 'Mark', 'Kinai', '0111893789', 'mark1kcccnai1@gmail.com', 'dcsffmks594822', '$2y$10$vhGopDpgaSUllzsqaquh7etxcE93E9mJVtXE.TuE/zQDML/Jx47TS'),
(73, 'Mark', 'Kinai', '0111893789', 'caro1@gmail.com', 'cr1', '$2y$10$rKQcoVkiGmyuW1QZEnEIYuPA58T5nHpTcmXeQSGzfxpVCMOttOIsS');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
