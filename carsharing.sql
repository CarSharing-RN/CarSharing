-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 07. Nov 2019 um 16:10
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
  `von` date DEFAULT NULL,
  `bis` date DEFAULT NULL,
  `ID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `fahrzeuge`
--

INSERT INTO `fahrzeuge` (`Modell`, `Wunsch`, `BNID`, `von`, `bis`, `ID`) VALUES
('Audi A6', 'Sargans', 'NULL', '0000-00-00', '0000-00-00', 7),
('Audi A6', 'Chur', 'NULL', '0000-00-00', '0000-00-00', 10),
('Audi A6', 'Ziegelbrueck', 'NULL', '0000-00-00', '0000-00-00', 12),
('Audi A6', 'Rapperswil', 'NULL', '0000-00-00', '0000-00-00', 13),
('Audi A3', 'Ziegelbrueck', 'NULL', '0000-00-00', '0000-00-00', 14),
('Audi A3', 'Sargans', 'NULL', '0000-00-00', '0000-00-00', 15),
('Audi A3', 'Chur', 'NULL', '0000-00-00', '0000-00-00', 16),
('Audi A3', 'Rapperswil', 'NULL', '0000-00-00', '0000-00-00', 17),
('Audi S1', 'Ziegelbrueck', 'NULL', '0000-00-00', '0000-00-00', 18),
('Audi S1', 'Chur', 'NULL', '0000-00-00', '0000-00-00', 19),
('Audi S1', 'Sargans', 'NULL', '0000-00-00', '0000-00-00', 20),
('Audi S1', 'Rapperswil', 'NULL', '0000-00-00', '0000-00-00', 21),
('VW Phaeton', 'Ziegelbrueck', 'NULL', '0000-00-00', '0000-00-00', 22),
('VW Phaeton', 'Rapperswil', 'NULL', '0000-00-00', '0000-00-00', 23),
('VW Phaeton', 'Sargans', 'NULL', '0000-00-00', '0000-00-00', 24),
('VW Phaeton', 'Chur', 'NULL', '0000-00-00', '0000-00-00', 25),
('VW Arteon', 'Ziegelbrueck', 'NULL', '0000-00-00', '0000-00-00', 26),
('VW Arteon', 'Chur', 'NULL', '0000-00-00', '0000-00-00', 27),
('VW Arteon', 'Sargans', 'NULL', '0000-00-00', '0000-00-00', 28),
('VW Arteon', 'Rapperswil', 'NULL', '0000-00-00', '0000-00-00', 29),
('VW Golf', 'Ziegelbrueck', 'NULL', '0000-00-00', '0000-00-00', 30),
('VW Golf', 'Rapperswil', 'NULL', '0000-00-00', '0000-00-00', 31),
('VW Golf', 'Sargans', 'NULL', '0000-00-00', '0000-00-00', 32),
('VW Golf', 'Chur', 'NULL', '0000-00-00', '0000-00-00', 33);

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
