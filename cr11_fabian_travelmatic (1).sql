-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 02. Sep 2019 um 10:39
-- Server-Version: 10.3.16-MariaDB
-- PHP-Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr11_fabian_travelmatic`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `concerts`
--

CREATE TABLE `concerts` (
  `ID` int(11) NOT NULL,
  `img` varchar(30) DEFAULT NULL,
  `name` varchar(30) NOT NULL,
  `adress` varchar(40) DEFAULT NULL,
  `descri` varchar(120) DEFAULT NULL,
  `homepage` varchar(40) DEFAULT 'NULL',
  `conc_date` date DEFAULT NULL,
  `conc_time` time DEFAULT NULL,
  `ticketPrice` tinyint(3) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `concerts`
--

INSERT INTO `concerts` (`ID`, `img`, `name`, `adress`, `descri`, `homepage`, `conc_date`, `conc_time`, `ticketPrice`) VALUES
(1, 'images/KontraK.jpg', 'Kontra K122471', 'avenue 901', 'cool musician', 'www.kontrak.de', '2019-11-30', '19:30:00', 30),
(2, 'images/Khaled.jpg', 'Khaled', 'avenue 91', 'awesome musician', 'www.khaled.dee', '2019-11-30', '19:00:00', 31);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `restaurants`
--

CREATE TABLE `restaurants` (
  `ID` int(11) NOT NULL,
  `img` varchar(40) DEFAULT NULL,
  `name` varchar(30) NOT NULL,
  `adress` varchar(40) DEFAULT NULL,
  `descri` varchar(40) DEFAULT NULL,
  `homepage` varchar(40) DEFAULT NULL,
  `teleph` bigint(20) NOT NULL,
  `type` enum('austrian','german','swedish') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `restaurants`
--

INSERT INTO `restaurants` (`ID`, `img`, `name`, `adress`, `descri`, `homepage`, `teleph`, `type`) VALUES
(4, 'images/Rest3.jpg', 'Wolfgangs austrian dinner1', 'street 92', 'best family ever', 'www.wolfgang.at', 43123456789, '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `system_users`
--

CREATE TABLE `system_users` (
  `system_user_ID` int(11) NOT NULL,
  `user_status` enum('admin','employee') NOT NULL,
  `user_pass` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `system_users`
--

INSERT INTO `system_users` (`system_user_ID`, `user_status`, `user_pass`) VALUES
(1, 'admin', '1234'),
(2, 'employee', '5678');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `things_to_do`
--

CREATE TABLE `things_to_do` (
  `ID` int(11) NOT NULL,
  `img` varchar(30) DEFAULT NULL,
  `name` varchar(30) NOT NULL,
  `adress` varchar(40) DEFAULT NULL,
  `descri` varchar(120) DEFAULT 'NULL',
  `homepage` varchar(40) DEFAULT 'NULL',
  `type` enum('sports','club','chill') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `things_to_do`
--

INSERT INTO `things_to_do` (`ID`, `img`, `name`, `adress`, `descri`, `homepage`, `type`) VALUES
(1, 'images/ToDo01.jpg', 'MC Fit121', 'plaza 901', 'best gym ever', 'www.mcfit.at', ''),
(2, 'images/ToDo02.jpg', 'VIP', 'plaza 91', 'best club ever', 'www.club.at', 'club');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `concerts`
--
ALTER TABLE `concerts`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `system_users`
--
ALTER TABLE `system_users`
  ADD PRIMARY KEY (`system_user_ID`);

--
-- Indizes für die Tabelle `things_to_do`
--
ALTER TABLE `things_to_do`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `concerts`
--
ALTER TABLE `concerts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT für Tabelle `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT für Tabelle `system_users`
--
ALTER TABLE `system_users`
  MODIFY `system_user_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `things_to_do`
--
ALTER TABLE `things_to_do`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
