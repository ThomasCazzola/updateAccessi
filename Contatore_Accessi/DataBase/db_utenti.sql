-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mar 29, 2022 alle 10:59
-- Versione del server: 10.4.6-MariaDB
-- Versione PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_utenti`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `id` int(10) UNSIGNED NOT NULL,
  `password` char(32) NOT NULL,
  `contatore` int(11) NOT NULL,
  `demo` tinyint(4) NOT NULL DEFAULT 0 COMMENT 'Se = 0 -> false',
  `nomeUtente` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`id`, `password`, `contatore`, `demo`, `nomeUtente`) VALUES
(1, '1a1dc91c907325c69271ddf0c944bc72', 1, 0, 'piero'),
(2, '1a1dc91c907325c69271ddf0c944bc72', 0, 1, 'giovanni'),
(3, '1a1dc91c907325c69271ddf0c944bc72', 0, 0, 'aldo'),
(4, '1a1dc91c907325c69271ddf0c944bc72', 0, 0, 'lorenzo'),
(5, '1a1dc91c907325c69271ddf0c944bc72', 0, 1, 'lucia'),
(6, '1a1dc91c907325c69271ddf0c944bc72', 0, 0, 'anna'),
(7, '1a1dc91c907325c69271ddf0c944bc72', 0, 1, 'elisa'),
(8, '1a1dc91c907325c69271ddf0c944bc72', 0, 0, 'gertrude');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `utenti`
--
ALTER TABLE `utenti`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
