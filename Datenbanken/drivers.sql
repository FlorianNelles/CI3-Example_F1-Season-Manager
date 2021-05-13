-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 03. Nov 2020 um 22:00
-- Server-Version: 10.4.14-MariaDB
-- PHP-Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `civ3`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `drivers`
--

CREATE TABLE `drivers` (
  `name` varchar(255) NOT NULL,
  `startnr` int(2) NOT NULL,
  `team_id` int(12) NOT NULL,
  `points` int(11) NOT NULL,
  `id` int(12) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `drivers`
--

INSERT INTO `drivers` (`name`, `startnr`, `team_id`, `points`, `id`, `user_id`) VALUES
('Lewis Hamilton', 44, 1, 71, 19, 1),
('Max Verstappen', 33, 3, 67, 20, 1),
('Valtteri Bottas', 77, 1, 60, 21, 1),
('test', 24, 3, 1, 29, 8),
('Florian Nelles', 97, 4, 107, 37, 2),
('Sebastian Vettel', 5, 2, 24, 42, 1),
('Charles Leclerc', 16, 2, 25, 43, 1),
('Alexander Albon', 23, 3, 35, 44, 1),
('Lando Norris', 4, 5, 32, 45, 1),
('Charlos Sainz', 55, 5, 29, 46, 1),
('Daniel Ricciardo', 3, 4, 40, 47, 1),
('Esteban Ocon', 31, 4, 20, 48, 1),
('Pierre Gasly', 10, 7, 35, 49, 1),
('Daniil Kwjat', 26, 7, 19, 50, 1),
('Sergio Perez', 11, 6, 42, 51, 1),
('Lance Stroll', 18, 6, 29, 52, 1),
('Kimi Räikönen', 7, 8, 12, 53, 1),
('Antiono Giovinazzi', 99, 8, 8, 54, 1),
('Romain Grosjean', 8, 9, 5, 55, 1),
('Kevin Magnussen', 20, 9, 9, 56, 1),
('George Russel', 63, 10, 2, 57, 1),
('Nicholas Latifi', 6, 10, 0, 58, 1),
('TestFahre', 5, 6, 10, 59, 2),
('mil', 27, 8, 57, 61, 2);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
