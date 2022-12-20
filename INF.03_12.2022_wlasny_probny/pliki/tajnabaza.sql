-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 25 Lis 2022, 19:50
-- Wersja serwera: 10.4.25-MariaDB
-- Wersja PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `tajnabaza`
--
CREATE DATABASE IF NOT EXISTS `tajnabaza` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci;
USE `tajnabaza`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uprawnienia`
--

CREATE TABLE `uprawnienia` (
  `ID` int(11) NOT NULL,
  `NAME` text COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `uprawnienia`
--

INSERT INTO `uprawnienia` (`ID`, `NAME`) VALUES
(1, 'ADMIN'),
(2, 'USER'),
(3, 'AGENT'),
(4, 'SYGNALISTA');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `ID` int(11) NOT NULL,
  `LOGIN` text COLLATE utf8mb4_polish_ci NOT NULL,
  `HASLO` text COLLATE utf8mb4_polish_ci NOT NULL,
  `EMAIL` text COLLATE utf8mb4_polish_ci NOT NULL,
  `IMIE` text COLLATE utf8mb4_polish_ci NOT NULL,
  `NAZWISKO` text COLLATE utf8mb4_polish_ci NOT NULL,
  `uprawnienia_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`ID`, `LOGIN`, `HASLO`, `EMAIL`, `IMIE`, `NAZWISKO`, `uprawnienia_id`) VALUES
(4, 'q', 'q', 'q', 'q', 'q', 3),
(6, 'ee', 'ee', 'ee', 'ee', 'ee', 4),
(8, 'qw', 'qw', 'qw', 'qw', 'qw', 4),
(9, 'qe', 'qe', 'qe', 'qe', 'qe', 4);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `uprawnienia`
--
ALTER TABLE `uprawnienia`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `uprawnienia_id` (`uprawnienia_id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `uprawnienia`
--
ALTER TABLE `uprawnienia`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD CONSTRAINT `uzytkownicy_ibfk_1` FOREIGN KEY (`uprawnienia_id`) REFERENCES `uprawnienia` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
