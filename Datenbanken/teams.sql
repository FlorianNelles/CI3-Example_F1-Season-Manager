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
-- Tabellenstruktur für Tabelle `teams`
--

CREATE TABLE `teams` (
  `id` int(12) NOT NULL,
  `name` varchar(255) NOT NULL,
  `teamchef` varchar(255) NOT NULL,
  `motor` varchar(255) NOT NULL,
  `sitz` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `teams`
--

INSERT INTO `teams` (`id`, `name`, `teamchef`, `motor`, `sitz`) VALUES
(1, 'Mercedes', 'Toto Wolff', 'Mercedes', 'Brackley, Vereinigtes Königreich'),
(2, 'Ferrari', 'Mattia Binotto', 'Ferrari', 'Maranello, Italien'),
(3, 'Red Bull', 'Christian Horner', 'Honda', 'Militon Keynes, Vereinigtes Königreich'),
(4, 'Renault', 'Cyril Abiteboul', 'Renault', 'Viry-Chatillon, Frankreich'),
(5, 'McLaren', 'Andres Seidl', 'Renault', 'Woking, Vereinigtes Königreich'),
(6, 'Racing Point', 'Otmar Szafnauer', 'Mercedes', 'Silverstone, Vereinigtes Königreich'),
(7, 'AlphaTauri', 'Franz Tost', 'Honda', 'Faenza, Italien'),
(8, 'Alfa Romeo', 'Frederic Vasseur', 'Ferrari', 'Hinwil, Schweiz'),
(9, 'Haas', 'Günther Steiner', 'Ferrari', 'Kannapolis, Vereinigte Staaten'),
(10, 'Williams', 'Simon Roberts', 'Mercedes', 'Grove, Vereinigtes Königreich'),
(11, 'Eigenes Team', 'Eigener Chef', 'Eigener Motor', 'Eigener Sitz'),
(12, 'Kein Team', 'Kein Chef', 'Kein Motor', 'Kein Sitz');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
