-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 22, 2018 at 06:04 PM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 5.6.33-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cvp`
--

-- --------------------------------------------------------

--
-- Table structure for table `evento`
--

CREATE TABLE `evento` (
  `ide` int(11) NOT NULL,
  `designacao` varchar(254) DEFAULT NULL,
  `local` varchar(500) NOT NULL,
  `coordenadas` text,
  `categoria` text NOT NULL,
  `dataevento` date NOT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `inscricoes`
--

CREATE TABLE `inscricoes` (
  `idutilizador` int(11) NOT NULL,
  `idprova` int(11) NOT NULL,
  `datainsc` date NOT NULL,
  `datalimite` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `prova`
--

CREATE TABLE `prova` (
  `idp` int(11) NOT NULL,
  `designacao` text NOT NULL,
  `hora` time NOT NULL,
  `idevento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `utilizador`
--

CREATE TABLE `utilizador` (
  `idu` int(11) NOT NULL,
  `nome` text NOT NULL,
  `nif` text,
  `cc` text,
  `datan` text,
  `email` text NOT NULL,
  `telef` text,
  `morada` varchar(500) DEFAULT NULL,
  `nacionalidade` text,
  `genero` text,
  `ativo` tinyint(1) NOT NULL DEFAULT '0',
  `senha` varchar(100) NOT NULL,
  `federado` tinyint(1) NOT NULL DEFAULT '0',
  `tempos` text,
  `tamanho` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilizador`
--

INSERT INTO `utilizador` (`idu`, `nome`, `nif`, `cc`, `datan`, `email`, `telef`, `morada`, `nacionalidade`, `genero`, `ativo`, `senha`, `federado`, `tempos`, `tamanho`) VALUES
(1, 'AndrÃ©', NULL, NULL, NULL, 'admin@admin.com', NULL, NULL, NULL, NULL, 0, '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', 0, NULL, NULL),
(2, 'AndrÃ© Garcia', NULL, NULL, NULL, 'andre.f.garcia@inesctec.pt', NULL, NULL, NULL, NULL, 0, '8cb2237d0679ca88db6464eac60da96345513964', 0, NULL, NULL),
(3, 'Cristiano Ronaldo', NULL, NULL, NULL, 'cr7@gmail.com', NULL, NULL, NULL, NULL, 0, '8cb2237d0679ca88db6464eac60da96345513964', 0, NULL, NULL),
(4, 'Lionel Messi', NULL, NULL, NULL, 'andregarxia@gmail.com', NULL, NULL, NULL, NULL, 0, '8cb2237d0679ca88db6464eac60da96345513964', 0, NULL, NULL),
(5, 'Alexis', NULL, NULL, NULL, 'afg@inesctec.pt', NULL, NULL, NULL, NULL, 0, '8cb2237d0679ca88db6464eac60da96345513964', 0, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`ide`);

--
-- Indexes for table `inscricoes`
--
ALTER TABLE `inscricoes`
  ADD PRIMARY KEY (`idutilizador`,`idprova`);

--
-- Indexes for table `prova`
--
ALTER TABLE `prova`
  ADD PRIMARY KEY (`idp`);

--
-- Indexes for table `utilizador`
--
ALTER TABLE `utilizador`
  ADD PRIMARY KEY (`idu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `evento`
--
ALTER TABLE `evento`
  MODIFY `ide` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prova`
--
ALTER TABLE `prova`
  MODIFY `idp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `utilizador`
--
ALTER TABLE `utilizador`
  MODIFY `idu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
