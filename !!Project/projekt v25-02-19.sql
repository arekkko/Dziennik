-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 25 Lut 2019, 08:53
-- Wersja serwera: 10.1.8-MariaDB
-- Wersja PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `projekt`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klasy`
--

CREATE TABLE `klasy` (
  `id_klasy` int(11) NOT NULL,
  `klasa` varchar(255) DEFAULT NULL,
  `id_rok_szkolny` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `klasy`
--

INSERT INTO `klasy` (`id_klasy`, `klasa`, `id_rok_szkolny`) VALUES
(1, '1A', 1),
(2, '1B', 1),
(3, '2A', 1),
(4, '2B', 1),
(5, '3A', 1),
(6, '3B', 1),
(7, '1A', 2),
(8, '1B', 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `nauczyciele`
--

CREATE TABLE `nauczyciele` (
  `id_nauczyciela` int(11) NOT NULL,
  `imie` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `id_przedmiotu` int(11) NOT NULL,
  `login` varchar(30) NOT NULL,
  `haslo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `nauczyciele`
--

INSERT INTO `nauczyciele` (`id_nauczyciela`, `imie`, `nazwisko`, `id_przedmiotu`, `login`, `haslo`) VALUES
(1, 'Andrzej', 'Kowalski', 5, 'akowalski', 'aGYassasaa7>v4r"'),
(2, 'Michał', 'Szpak', 7, 'mszpak', 'x"SSADDAv4r"'),
(3, 'Jan', 'Twain', 1, 'jtwain', 'xxxx3!G332r2dsa'),
(4, 'Marcin', 'Pimko', 3, 'mpimko', '@#WDAcxz22'),
(5, 'Arkadiusz', 'Blaszka', 10, 'ablaszka', 'dAS@EDz2'),
(6, 'Tomasz', 'Kapturzak', 9, 'tkapturzak', 'Pieskeasda'),
(7, 'Agata', 'Kubal', 2, 'akubal', 'Lubiekotki'),
(8, 'Weronika', 'Kran', 4, 'wkran', 'Jestemjestem123'),
(9, 'Zuzanna', 'Wasilewska', 8, 'zwasilewska', 'adadasdd2113we'),
(10, 'Justyna', 'Kaczmarska', 6, 'jkaczmarska', '123dzds@@'),
(11, 'Urszula', 'Lewak', 11, 'ulewak', '((((21eswa22@'),
(12, 'Mateusz', 'Polacki', 11, 'mpolacki', '&&sa122ZZ');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `oceny`
--

CREATE TABLE `oceny` (
  `id_oceny` int(11) NOT NULL,
  `ocena` int(11) DEFAULT NULL,
  `komentarz` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL,
  `id_przedmiotu` int(11) DEFAULT NULL,
  `id_ucznia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `oceny`
--

INSERT INTO `oceny` (`id_oceny`, `ocena`, `komentarz`, `id_przedmiotu`, `id_ucznia`) VALUES
(1, 1, 'Nie stara się', 6, 3),
(2, 2, 'Całkiem dobrze napisał sprawdzian', 2, 12),
(3, 4, NULL, 5, 6),
(4, 6, 'Świetnie', 8, 11),
(5, 5, 'Jesteś zdolny', 3, 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `przedmioty`
--

CREATE TABLE `przedmioty` (
  `id_przedmiotu` int(11) NOT NULL,
  `przedmiot` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `przedmioty`
--

INSERT INTO `przedmioty` (`id_przedmiotu`, `przedmiot`) VALUES
(1, 'Język Polski'),
(2, 'Matematyka'),
(3, 'Język Angielski'),
(4, 'Fizyka'),
(5, 'Geografia'),
(6, 'Chemia'),
(7, 'Informatyka'),
(8, 'Historia'),
(9, 'Religia'),
(10, 'WF'),
(11, 'DYREKCJA');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rok_szkolny`
--

CREATE TABLE `rok_szkolny` (
  `id_rok_szkolny` int(11) NOT NULL,
  `rok_szkolny` char(9) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `rok_szkolny`
--

INSERT INTO `rok_szkolny` (`id_rok_szkolny`, `rok_szkolny`) VALUES
(1, '2016/2017'),
(2, '2017/2018');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uczniowie`
--

CREATE TABLE `uczniowie` (
  `id_ucznia` int(11) NOT NULL,
  `imie` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL,
  `nazwisko` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL,
  `id_klasy` int(11) DEFAULT NULL,
  `zdjecie_ucznia` varchar(45) DEFAULT NULL,
  `login` varchar(30) NOT NULL,
  `haslo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `uczniowie`
--

INSERT INTO `uczniowie` (`id_ucznia`, `imie`, `nazwisko`, `id_klasy`, `zdjecie_ucznia`, `login`, `haslo`) VALUES
(1, 'Patryk', 'Mazurkiewicz', 1, NULL, 'pmazurkiewicz', 'Arektodzban!!'),
(2, 'Jan', 'Nowak', 1, NULL, 'jnowak', '%%%sadada'),
(3, 'Adam', 'Nowacki', 1, NULL, 'anowacki', '%%%sadada'),
(4, 'Kristofer', 'Kowalski', 1, NULL, 'kkowalski', '%%%sadada'),
(5, 'Jan', 'Dzban', 2, NULL, 'jdzban', '%%%sadada'),
(6, 'Anastazja', 'Drzewiecka', 2, NULL, 'adrzewiecka', '@@!#!!sadadacvvv'),
(7, 'Walery', 'Rafal', 2, NULL, 'wrafal', '@Esassaas121'),
(8, 'Daria', 'Nadal', 2, NULL, 'dnadal', 'vxzd12123@@'),
(9, 'Sofia', 'Magdalenowska', 3, NULL, 'smagdalenowska', 'xzd12123@@'),
(10, 'Magdalena', 'Klawiszowa', 3, NULL, 'mklawiszowa', 'xzd12123@@'),
(11, 'Anastazja', 'Mietczynska', 3, NULL, 'amietczynska', 'xzd12123@@'),
(12, 'Adam', 'Nowak', 3, NULL, 'anowak', 'xzd12123@@'),
(13, 'Lionel', 'Sesji', 4, NULL, 'lsesji', 'xzd12123@@'),
(14, 'Krystyna', 'Czubówna', 4, NULL, 'kczubowna', 'xzd12123@@'),
(15, 'Pioter', 'Ipawel', 4, NULL, 'pipawel', 'xzd12123@@'),
(16, 'Paweł', 'Ipiotr', 4, NULL, 'pipiotr', 'asDDDDDDDDDDD'),
(17, 'Ryszard', 'Ptak', 5, NULL, 'rptak', 'oooooooooooooooooooo'),
(18, 'Marcin', 'Lewandowski', 5, NULL, 'mlewandowski', '2dassdsdagghhj'),
(19, 'Maria', 'Murawska', 5, NULL, 'mmurawska', '@EQSAdsa'),
(20, 'Patrycja', 'Wasilewska', 5, NULL, 'pwasilewska', 'aGYassasaa7>v4r"'),
(21, 'Jagoda', 'Adamczak', 6, NULL, 'jadamczak', '&&sa122ZZ'),
(22, 'Daria', 'Kowalewska', 6, NULL, 'dkowalewska', 'xxxx3!G332r2dsa'),
(23, 'Weronika', 'Stanisławska', 6, NULL, 'wstanislawska', '@@@dsadadad'),
(24, 'Wiktoria', 'Staniszewska', 6, NULL, 'wstaniszewska', '999FDsfsdfASA'),
(25, 'Apeler', 'Seler', 7, NULL, 'aseler', '#**sdsfa11'),
(26, 'Potato', 'Tomato', 7, NULL, 'ptomato', '###dsadada'),
(27, 'Małgosia', 'Kuchoczka', 8, NULL, 'mkuchoczka', '212DDA21@@'),
(28, 'Plandeka', 'Mleka', 8, NULL, 'pmleka', '@!#Eeasdsad');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wychowawcy`
--

CREATE TABLE `wychowawcy` (
  `id_wychowawcy` int(11) NOT NULL,
  `id_klasy` int(11) DEFAULT NULL,
  `id_nauczyciela` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `wychowawcy`
--

INSERT INTO `wychowawcy` (`id_wychowawcy`, `id_klasy`, `id_nauczyciela`) VALUES
(1, 1, 2),
(2, 2, 4),
(3, 3, 6),
(4, 4, 8),
(5, 5, 9),
(6, 6, 1),
(7, 7, 5),
(8, 8, 10);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `klasy`
--
ALTER TABLE `klasy`
  ADD PRIMARY KEY (`id_klasy`),
  ADD KEY `id_rok_szkolny` (`id_rok_szkolny`);

--
-- Indexes for table `nauczyciele`
--
ALTER TABLE `nauczyciele`
  ADD PRIMARY KEY (`id_nauczyciela`),
  ADD KEY `id_przedmiotu` (`id_przedmiotu`);

--
-- Indexes for table `oceny`
--
ALTER TABLE `oceny`
  ADD PRIMARY KEY (`id_oceny`),
  ADD KEY `id_przedmiotu` (`id_przedmiotu`),
  ADD KEY `id_ucznia` (`id_ucznia`);

--
-- Indexes for table `przedmioty`
--
ALTER TABLE `przedmioty`
  ADD PRIMARY KEY (`id_przedmiotu`);

--
-- Indexes for table `rok_szkolny`
--
ALTER TABLE `rok_szkolny`
  ADD PRIMARY KEY (`id_rok_szkolny`);

--
-- Indexes for table `uczniowie`
--
ALTER TABLE `uczniowie`
  ADD PRIMARY KEY (`id_ucznia`),
  ADD KEY `id_klasy` (`id_klasy`);

--
-- Indexes for table `wychowawcy`
--
ALTER TABLE `wychowawcy`
  ADD PRIMARY KEY (`id_wychowawcy`),
  ADD KEY `id_klasy` (`id_klasy`),
  ADD KEY `id_nauczyciela` (`id_nauczyciela`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `klasy`
--
ALTER TABLE `klasy`
  MODIFY `id_klasy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT dla tabeli `nauczyciele`
--
ALTER TABLE `nauczyciele`
  MODIFY `id_nauczyciela` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT dla tabeli `oceny`
--
ALTER TABLE `oceny`
  MODIFY `id_oceny` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT dla tabeli `przedmioty`
--
ALTER TABLE `przedmioty`
  MODIFY `id_przedmiotu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT dla tabeli `rok_szkolny`
--
ALTER TABLE `rok_szkolny`
  MODIFY `id_rok_szkolny` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT dla tabeli `uczniowie`
--
ALTER TABLE `uczniowie`
  MODIFY `id_ucznia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT dla tabeli `wychowawcy`
--
ALTER TABLE `wychowawcy`
  MODIFY `id_wychowawcy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `klasy`
--
ALTER TABLE `klasy`
  ADD CONSTRAINT `klasy_ibfk_1` FOREIGN KEY (`id_rok_szkolny`) REFERENCES `rok_szkolny` (`id_rok_szkolny`);

--
-- Ograniczenia dla tabeli `nauczyciele`
--
ALTER TABLE `nauczyciele`
  ADD CONSTRAINT `nauczyciele_ibfk_1` FOREIGN KEY (`id_przedmiotu`) REFERENCES `przedmioty` (`id_przedmiotu`);

--
-- Ograniczenia dla tabeli `oceny`
--
ALTER TABLE `oceny`
  ADD CONSTRAINT `oceny_ibfk_1` FOREIGN KEY (`id_ucznia`) REFERENCES `uczniowie` (`id_ucznia`),
  ADD CONSTRAINT `oceny_ibfk_2` FOREIGN KEY (`id_przedmiotu`) REFERENCES `przedmioty` (`id_przedmiotu`);

--
-- Ograniczenia dla tabeli `uczniowie`
--
ALTER TABLE `uczniowie`
  ADD CONSTRAINT `uczniowie_ibfk_1` FOREIGN KEY (`id_klasy`) REFERENCES `klasy` (`id_klasy`);

--
-- Ograniczenia dla tabeli `wychowawcy`
--
ALTER TABLE `wychowawcy`
  ADD CONSTRAINT `wychowawcy_ibfk_1` FOREIGN KEY (`id_klasy`) REFERENCES `klasy` (`id_klasy`),
  ADD CONSTRAINT `wychowawcy_ibfk_2` FOREIGN KEY (`id_nauczyciela`) REFERENCES `nauczyciele` (`id_nauczyciela`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
