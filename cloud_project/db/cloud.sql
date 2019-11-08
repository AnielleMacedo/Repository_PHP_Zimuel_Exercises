-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Nov 08, 2019 alle 14:58
-- Versione del server: 10.4.6-MariaDB
-- Versione PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cloud`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `username` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `privilege` int(2) NOT NULL,
  `close_registry` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `login`
--

INSERT INTO `login` (`id`, `name`, `username`, `email`, `password`, `privilege`, `close_registry`) VALUES
(1, 'ANIELLE GOMES MACEDO', 'anielle', 'anielle@gmail.com', '$2y$10$qUh8upByHwFa6WxHK4z6kOGrTOYuE.kGXxxFwIT0WkgKAs1/h.qR.', 0, '2019-11-08 13:47:22'),
(2, 'ALESSANDRO SARTORI', 'sartori', 'sartori@hotmail.com', '$2y$10$gFjBQuTkudGAhWKlObCk1OlSxow2dQkSnCH2dYudmbvyol9VFefga', 0, '2019-11-08 13:48:39'),
(3, 'ALESSANDRO MASON', 'mason', 'mason@gmail.com', '$2y$10$BjWLGnaEipuxaCj5r6R9ZO9aPNHQ62kflLf96c9QgFdTrwR4X1kGy', 0, '2019-11-08 13:50:08');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
