-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 16 Mar 2019, 18:05
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
-- Struktura tabeli dla tabeli `logowanie`
--

CREATE TABLE `logowanie` (
  `login` varchar(255) NOT NULL,
  `haslo` varchar(255) NOT NULL,
  `id_login` int(11) NOT NULL,
  `nazwa_tabeli` varchar(255) NOT NULL,
  `id_uzytkownika` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `logowanie`
--

INSERT INTO `logowanie` (`login`, `haslo`, `id_login`, `nazwa_tabeli`, `id_uzytkownika`) VALUES
('pmaz', 'adadadssassda@@', 1, 'uczniowie', 1),
('jnow', 'D2C!CEDSA', 2, 'uczniowie', 2),
('anowacki', 'SDAD#RFzccxxa121', 3, 'uczniowie', 3),
('kkow', '@TDFGYSUAghb', 4, 'uczniowie', 4),
('jdzb', '@TDFGYSUAghbada', 5, 'uczniowie', 5),
('adrz', '@TDFGYSUAghb', 6, 'uczniowie', 6),
('wraf', 'adadavdfdafafa', 7, 'uczniowie', 7),
('dnad', '@TDFGYSUAghb121', 8, 'uczniowie', 8),
('smag', 'sdsadsaYSUAghbsadasdad', 9, 'uczniowie', 9),
('mkla', '@TDFGYSUAghb$@$$', 10, 'uczniowie', 10),
('amie', 'ewwwwUAghb', 11, 'uczniowie', 11),
('anowak', '@TD3233212SUAghb', 12, 'uczniowie', 12),
('lses', 'sSD@TDFGYSUAghb', 13, 'uczniowie', 13),
('kczu', '@T222222UAghb', 14, 'uczniowie', 14),
('pipa', 'aaaadvvvvv', 15, 'uczniowie', 15),
('pipi', '21e2wwww', 16, 'uczniowie', 16),
('rpta', '1442sTsssDFGYSUAghb', 17, 'uczniowie', 17),
('mlew', 'ggbnhnhjfy232', 18, 'uczniowie', 18),
('mmur', 'oofujoinb8y7232', 19, 'uczniowie', 19),
('pwas', '5n2908bvtyehw', 20, 'uczniowie', 20),
('jada', '8146sfhsdjfh', 21, 'uczniowie', 21),
('dkow', '8136tb7gfduskj', 22, 'uczniowie', 22),
('wstanislawska', '182yeruhsa', 23, 'uczniowie', 23),
('wstaniszewska', '6145etwfgv', 24, 'uczniowie', 24),
('asel', 'vbjanczuq@##', 25, 'uczniowie', 25),
('ptom', '1425aDD%^@!RERF', 26, 'uczniowie', 26),
('mkuc', '@^%!^%Eghsajsd', 27, 'uczniowie', 27),
('pmle', 'HADyuasgd', 28, 'uczniowie', 28),
('akowalski', '%@!RFGdsss', 29, 'nauczyciele', 1),
('mszpak', 'Najlepszyticzer', 30, 'nauczyciele', 2),
('jtwain', '187218sas', 31, 'nauczyciele', 3),
('mpimko', '12344455555', 32, 'nauczyciele', 4),
('ablaszka', 'abcdefghijklmnop', 33, 'nauczyciele', 5),
('tkapturzak', 'marchewka222', 34, 'nauczyciele', 6),
('akubal', 'propolayer', 35, 'nauczyciele', 7),
('wkran', 'DSDsasaasQada', 36, 'nauczyciele', 8),
('zwasilewska', '1ewaWe111', 37, 'nauczyciele', 9),
('jkaczmarska', 'asdDdar1rrrrsadasda211', 38, 'nauczyciele', 10),
('ulewak', 'vD@!Dsadasdaasdq1121', 39, 'nauczyciele', 11),
('mpolacki', 'D@!Dsadasda', 40, 'nauczyciele', 12);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `nauczyciele`
--

CREATE TABLE `nauczyciele` (
  `id_nauczyciela` int(11) NOT NULL,
  `imie` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `id_przedmiotu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `nauczyciele`
--

INSERT INTO `nauczyciele` (`id_nauczyciela`, `imie`, `nazwisko`, `id_przedmiotu`) VALUES
(1, 'Andrzej', 'Kowalski', 5),
(2, 'Michał', 'Szpak', 7),
(3, 'Jan', 'Twain', 1),
(4, 'Marcin', 'Pimko', 3),
(5, 'Arkadiusz', 'Blaszka', 10),
(6, 'Tomasz', 'Kapturzak', 9),
(7, 'Agata', 'Kubal', 2),
(8, 'Weronika', 'Kran', 4),
(9, 'Zuzanna', 'Wasilewska', 8),
(10, 'Justyna', 'Kaczmarska', 6),
(11, 'Urszula', 'Lewak', 11),
(12, 'Mateusz', 'Polacki', 11);

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
(1, 1, 'Bardzo słabo', 6, 3),
(2, 2, 'Słabo', 2, 12),
(3, 4, 'Średnio', 5, 6),
(4, 6, 'Wspaniale', 8, 11),
(5, 5, 'Bardzo dobrze', 3, 2),
(6, 3, 'Średnio', 6, 1),
(7, 4, 'Dobrze', 2, 1),
(8, 2, 'Słabo', 7, 7),
(9, 3, 'Średnio', 4, 26),
(10, 4, 'Dobrze', 10, 27),
(11, 4, 'Dobrze', 1, 21),
(12, 5, 'Bardzo dobrze', 9, 16),
(13, 5, 'Bardzo dobrze', 1, 25),
(14, 6, 'Wspaniale', 8, 8),
(15, 1, 'Bardzo źle', 8, 28),
(16, 1, 'Bardzo słabo', 10, 24),
(17, 1, 'Bardzo słabo', 2, 22),
(18, 5, 'Bardzo dobrze', 7, 11),
(19, 5, 'Bardzo dobrze', 6, 19),
(20, 3, 'Średnio', 5, 20),
(21, 3, 'Średnio', 3, 13),
(22, 2, 'Słabo', 7, 16),
(23, 4, 'Dobrze', 8, 14),
(24, 1, 'Bardzo źle', 2, 9),
(25, 5, 'Bardzo dobrze', 3, 2),
(26, 3, 'Średnio', 1, 11),
(27, 2, 'Słabo', 4, 2),
(28, 1, 'Bardzo słabo', 8, 18),
(29, 4, 'Dobrze', 2, 7),
(30, 5, 'Bardzo dobrze', 2, 10);

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
  `zdjecie_ucznia` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `uczniowie`
--

INSERT INTO `uczniowie` (`id_ucznia`, `imie`, `nazwisko`, `id_klasy`, `zdjecie_ucznia`) VALUES
(1, 'Patryk', 'Mazurkiewicz', 1, NULL),
(2, 'Jan', 'Nowak', 1, NULL),
(3, 'Adam', 'Nowacki', 1, NULL),
(4, 'Kristofer', 'Kowalski', 1, NULL),
(5, 'Jan', 'Dzban', 2, NULL),
(6, 'Anastazja', 'Drzewiecka', 2, NULL),
(7, 'Walery', 'Rafal', 2, NULL),
(8, 'Daria', 'Nadal', 2, NULL),
(9, 'Sofia', 'Magdalenowska', 3, NULL),
(10, 'Magdalena', 'Klawiszowa', 3, NULL),
(11, 'Anastazja', 'Mietczynska', 3, NULL),
(12, 'Adam', 'Nowak', 3, NULL),
(13, 'Lionel', 'Sesji', 4, NULL),
(14, 'Krystyna', 'Czubówna', 4, NULL),
(15, 'Pioter', 'Ipawel', 4, NULL),
(16, 'Paweł', 'Ipiotr', 4, NULL),
(17, 'Ryszard', 'Ptak', 5, NULL),
(18, 'Marcin', 'Lewandowski', 5, NULL),
(19, 'Maria', 'Murawska', 5, NULL),
(20, 'Patrycja', 'Wasilewska', 5, NULL),
(21, 'Jagoda', 'Adamczak', 6, NULL),
(22, 'Daria', 'Kowalewska', 6, NULL),
(23, 'Weronika', 'Stanisławska', 6, NULL),
(24, 'Wiktoria', 'Staniszewska', 6, NULL),
(25, 'Apeler', 'Seler', 7, NULL),
(26, 'Potato', 'Tomato', 7, NULL),
(27, 'Małgosia', 'Kuchoczka', 8, NULL),
(28, 'Plandeka', 'Mleka', 8, NULL);

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
-- Indexes for table `logowanie`
--
ALTER TABLE `logowanie`
  ADD PRIMARY KEY (`id_login`);

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
-- AUTO_INCREMENT dla tabeli `logowanie`
--
ALTER TABLE `logowanie`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT dla tabeli `nauczyciele`
--
ALTER TABLE `nauczyciele`
  MODIFY `id_nauczyciela` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT dla tabeli `oceny`
--
ALTER TABLE `oceny`
  MODIFY `id_oceny` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
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
