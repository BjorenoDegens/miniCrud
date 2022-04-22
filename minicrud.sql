-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 22 apr 2022 om 08:55
-- Serverversie: 10.4.17-MariaDB
-- PHP-versie: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minicrud`
--
CREATE DATABASE IF NOT EXISTS `minicrud` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `minicrud`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gerechten`
--

CREATE TABLE `gerechten` (
  `ID` int(5) NOT NULL,
  `titel` varchar(50) NOT NULL,
  `prijs` decimal(4,2) NOT NULL,
  `beschrijving` text NOT NULL,
  `afbeelding` varchar(50) NOT NULL,
  `categorie` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `gerechten`
--

INSERT INTO `gerechten` (`ID`, `titel`, `prijs`, `beschrijving`, `afbeelding`, `categorie`) VALUES
(1, 'broodje doner', '6.50', 'brood met doner en salade', '', 'favorieten'),
(2, 'pizza doner', '9.00', 'tomatensaus kaas en doner', '', 'favorieten'),
(3, 'broodje doner', '5.50', 'brood met doner en salade', '', 'broodjes'),
(4, 'broodje kaas doner', '6.00', 'brood met doner salade en warme kaas', '', 'broodjes'),
(5, 'dürüm doner', '6.00', 'dürüm met doner en salade', '', 'dürüm'),
(6, 'dürüm kaas doner', '7.00', 'dürüm met doner salade en warme kaas', '', 'dürüm'),
(7, 'pizza doner', '10.00', 'tomaat kaas en doner', '', 'pizza'),
(8, 'pizza kapsalon doner', '13.00', 'tomaat kaas doner friet en salade', '', 'pizza'),
(9, 'kapsalon doner', '6.00', 'friet doner en salade', '', 'kapsalon'),
(10, 'kapsalon kalf doner', '7.00', 'friet kalfdoner en salade', '', 'kapsalon'),
(11, 'bak doner', '10.00', 'doner', '', 'gezinsbakken'),
(12, 'bak kalfdoner', '12.00', 'kalfdoner', '', 'gezinsbakken'),
(13, 'friet', '2.00', 'aardappel', '', 'friet'),
(14, 'patat', '4.00', 'aardappel', '', 'friet'),
(15, 'kids box', '3.00', 'doner', '', 'kids'),
(16, 'kids box extra', '6.00', 'doner en friet', '', 'kids'),
(17, 'mayonaise', '1.00', 'mayonaise', '', 'saus'),
(18, 'knoflook', '2.00', 'knoflook', '', 'saus'),
(19, 'coca cola', '2.00', 'cola', '', 'drinken'),
(20, 'grolsch', '2.75', 'pils', '', 'drinken');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `login_user`
--

CREATE TABLE `login_user` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `login_user`
--

INSERT INTO `login_user` (`id`, `name`, `user_name`, `password`) VALUES
(1, 'Bjoreno', 'bjoreno', 'admin');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `gerechten`
--
ALTER TABLE `gerechten`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `login_user`
--
ALTER TABLE `login_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `gerechten`
--
ALTER TABLE `gerechten`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT voor een tabel `login_user`
--
ALTER TABLE `login_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
