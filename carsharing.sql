-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 31. Okt 2019 um 15:50
-- Server-Version: 10.4.8-MariaDB
-- PHP-Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `carsharing`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `benutzer`
--

CREATE TABLE `benutzer` (
  `ID` int(255) NOT NULL,
  `Vorname` varchar(255) NOT NULL,
  `Nachname` varchar(255) NOT NULL,
  `Telefonnummer` int(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Benutzername` varchar(255) NOT NULL,
  `Passwort` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `benutzer`
--

INSERT INTO `benutzer` (`ID`, `Vorname`, `Nachname`, `Telefonnummer`, `Email`, `Benutzername`, `Passwort`) VALUES
(3, 'Remo', 'Winkler', 794344663, 'remowinkler@bluewin.ch', 'ReRe', '5d2a051782e4e01e7d07f9f633749b0b');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `fahrzeuge`
--

CREATE TABLE `fahrzeuge` (
  `Modell` varchar(255) NOT NULL,
  `Wunsch` varchar(255) NOT NULL,
  `BNID` varchar(255) DEFAULT NULL,
  `von` varchar(255) DEFAULT NULL,
  `bis` varchar(255) DEFAULT NULL,
  `ID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `fahrzeuge`
--

INSERT INTO `fahrzeuge` (`Modell`, `Wunsch`, `BNID`, `von`, `bis`, `ID`) VALUES
('Audi A6', 'Sargans', 'NULL', 'NULL', 'NULL', 7),
('Audi A6', 'Chur', 'NULL', 'NULL', 'NULL', 10),
('Audi A6', 'Ziegelbrueck', 'NULL', 'NULL', 'NULL', 12),
('Audi A6', 'Rapperswil', 'NULL', 'NULL', 'NULL', 13),
('Audi A3', 'Ziegelbrueck', 'NULL', 'NULL', 'NULL', 14),
('Audi A3', 'Sargans', 'NULL', 'NULL', 'NULL', 15),
('Audi A3', 'Chur', 'NULL', 'NULL', 'NULL', 16),
('Audi A3', 'Rapperswil', 'NULL', 'NULL', 'NULL', 17),
('Audi S1', 'Ziegelbrueck', 'NULL', 'NULL', 'NULL', 18),
('Audi S1', 'Chur', 'NULL', 'NULL', 'NULL', 19),
('Audi S1', 'Sargans', 'NULL', 'NULL', 'NULL', 20),
('Audi S1', 'Rapperswil', 'NULL', 'NULL', 'NULL', 21),
('VW Phaeton', 'Ziegelbrueck', 'NULL', 'NULL', 'NULL', 22),
('VW Phaeton', 'Rapperswil', 'NULL', 'NULL', 'NULL', 23),
('VW Phaeton', 'Sargans', 'NULL', 'NULL', 'NULL', 24),
('VW Phaeton', 'Chur', 'NULL', 'NULL', 'NULL', 25),
('VW Arteon', 'Ziegelbrueck', 'NULL', 'NULL', 'NULL', 26),
('VW Arteon', 'Chur', 'NULL', 'NULL', 'NULL', 27),
('VW Arteon', 'Sargans', 'NULL', 'NULL', 'NULL', 28),
('VW Arteon', 'Rapperswil', 'NULL', 'NULL', 'NULL', 29),
('VW Golf', 'Ziegelbrueck', 'NULL', 'NULL', 'NULL', 30),
('VW Golf', 'Rapperswil', 'NULL', 'NULL', 'NULL', 31),
('VW Golf', 'Sargans', 'NULL', 'NULL', 'NULL', 32),
('VW Golf', 'Chur', 'NULL', 'NULL', 'NULL', 33);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `benutzer`
--
ALTER TABLE `benutzer`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `fahrzeuge`
--
ALTER TABLE `fahrzeuge`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `benutzer`
--
ALTER TABLE `benutzer`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT für Tabelle `fahrzeuge`
--
ALTER TABLE `fahrzeuge`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
