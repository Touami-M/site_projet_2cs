-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2023 at 08:59 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cos`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('admin@esi.dz', '123');

-- --------------------------------------------------------

--
-- Table structure for table `prestations`
--

CREATE TABLE `prestations` (
  `type` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `dossier` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prestations`
--

INSERT INTO `prestations` (`type`, `name`, `description`, `dossier`) VALUES
(3, 'Kouffa', 'Ramadane', 'Carte+esi'),
(3, 'Mouton', 'el+eid', 'carte'),
(3, 'Achat+d%27%C3%A9l%C3%A9ctrom%C3%A9nager', 'zeqrdqsf', 'ghgkk'),
(1, 'Achat+d%27%C3%A9l%C3%A9ctrom%C3%A9nagerkok', '1', '1'),
(2, '565665', '566', '5656');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
