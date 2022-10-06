-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 06, 2022 at 05:45 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `menu`
--

-- --------------------------------------------------------

--
-- Table structure for table `bebidas`
--

DROP TABLE IF EXISTS `bebidas`;
CREATE TABLE IF NOT EXISTS `bebidas` (
  `id` int(3) NOT NULL,
  `nome` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bebidas`
--

INSERT INTO `bebidas` (`id`, `nome`, `descricao`, `preco`) VALUES
(1, 'Cha mate limao', 'É Cha, quer mais o que?', '4,50'),
(2, 'Agua', 'glub glub', '2,50'),
(3, 'Coca', 'TM', '6,00');

-- --------------------------------------------------------

--
-- Table structure for table `sanduiches`
--

DROP TABLE IF EXISTS `sanduiches`;
CREATE TABLE IF NOT EXISTS `sanduiches` (
  `id` int(3) NOT NULL,
  `nome` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanduiches`
--

INSERT INTO `sanduiches` (`id`, `nome`, `descricao`, `preco`) VALUES
(1, 'Sanduba de Frango', 'Frango <3', '9,90'),
(2, 'Presunto', '', '4,00'),
(4, 'Vegano', 'Nao servimos comunistas!', '99,99'),
(3, 'Pao com manteiga', 'Bom com cafe!', '2,50');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
