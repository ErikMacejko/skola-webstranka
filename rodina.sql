-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- LOGIN --> Macejko, localhost, WTZadanie2
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: Sun 02.Jan 2022, 11:20
-- Verzia serveru: 10.4.21-MariaDB
-- Verzia PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `rodina`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `rodina`
--

CREATE TABLE `rodina` (
  `id` int(11) NOT NULL,
  `Meno` varchar(255) NOT NULL,
  `Priezvisko` varchar(255) NOT NULL,
  `Vek` int(11) NOT NULL,
  `Pribuzenstvo` varchar(255) NOT NULL,
  `Pohlavie` varchar(10) NOT NULL,
  `RodneCislo` int(10) NOT NULL,
  `FarbaVlasov` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `rodina`
--

INSERT INTO `rodina` (`id`, `Meno`, `Priezvisko`, `Vek`, `Pribuzenstvo`, `Pohlavie`, `RodneCislo`, `FarbaVlasov`) VALUES
(1, 'Milan', 'Macejko', 56, 'otec', 'muž', 142345370, 'čierna'),
(3, 'Zuzana', 'Macejkova', 51, 'mama', 'žena', 789261037, 'blond'),
(4, 'Dominik', 'Macejko', 24, 'brat', 'muž', 945501555, 'hnedé');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `rodina`
--
ALTER TABLE `rodina`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `RodneCislo` (`RodneCislo`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `rodina`
--
ALTER TABLE `rodina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
