-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 11 nov 2021 om 17:39
-- Serverversie: 10.4.19-MariaDB
-- PHP-versie: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_eindopdracht_p5`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `scheldwoorden`
--

CREATE TABLE `scheldwoorden` (
  `id` int(11) NOT NULL,
  `woord` varchar(30) DEFAULT NULL,
  `gradatie` int(11) DEFAULT NULL,
  `goedgekeurd` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `scheldwoorden`
--

INSERT INTO `scheldwoorden` (`id`, `woord`, `gradatie`, `goedgekeurd`) VALUES
(1, 'kanker', 3, '0'),
(2, 'tering', 3, '0');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `scheldwoorden`
--
ALTER TABLE `scheldwoorden`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `scheldwoorden`
--
ALTER TABLE `scheldwoorden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
