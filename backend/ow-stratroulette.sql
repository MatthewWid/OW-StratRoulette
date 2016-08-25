-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2016 at 02:13 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ow-stratroulette`
--

-- --------------------------------------------------------

--
-- Table structure for table `strats`
--

CREATE TABLE `strats` (
  `id` int(11) NOT NULL,
  `header` text NOT NULL,
  `text` text NOT NULL,
  `author` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `strats`
--

INSERT INTO `strats` (`id`, `header`, `text`, `author`) VALUES
(1, 'Gotta Go Fast', 'Play with 6 Lucios and do a full marathon to the objective, non-stop speed bosts.', 'MatthewMob'),
(2, 'Rise of the Planet of the Apes', 'Play with 6 Winstons and use only your melee.', 'MEMELORD'),
(3, 'Blind Run', 'Play with 3 Hanzos and 3 Junkrats. No one looks directly at the enemy. Hanzos use their sonic arrow for vision, and Junkrats fire around corners to kill the enemies.', 'DuckLeg'),
(4, 'I''ll Cover You', 'Pharahs my only attack targets on the ground and soldiers may only attack targets in the air or on high ground.', 'DudeMIC'),
(5, 'NOSCOPE', 'Play as Widowmaker and only use SMG.', 'Volcan1c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `strats`
--
ALTER TABLE `strats`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `strats`
--
ALTER TABLE `strats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
