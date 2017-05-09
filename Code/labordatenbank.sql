-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 09. Mai 2017 um 12:52
-- Server-Version: 10.1.16-MariaDB
-- PHP-Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `labordatenbank`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `firma`
--

CREATE TABLE `firma` (
  `fid` int(10) UNSIGNED NOT NULL,
  `fname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `firma`
--

INSERT INTO `firma` (`fid`, `fname`) VALUES
(1, 'Fluke'),
(2, 'AEG'),
(3, 'HTL'),
(4, 'Agilent'),
(5, 'BBC/Goerz/Metrawatt'),
(6, 'Servogor'),
(7, 'Leybold'),
(8, 'Benedikt&Jaeger'),
(9, 'A-TEK'),
(10, 'BWD Instruments PTY LTD'),
(11, 'Deumo'),
(12, 'Farnell'),
(13, 'LeCroy'),
(14, 'FUG'),
(15, 'Roline'),
(16, 'Goerz'),
(17, 'Josef Zelisko'),
(18, 'Norma'),
(19, 'Tektronix'),
(20, 'Gossen'),
(21, 'HPS'),
(22, ''),
(23, 'Cisco'),
(24, 'HP'),
(25, 'Datentechnik'),
(26, 'JJ LOYD'),
(27, 'ELWE'),
(28, 'Instruments'),
(29, 'Interstate'),
(30, 'Jaquet'),
(31, 'KEITHLEY'),
(32, '3Com'),
(33, 'National_Instruments'),
(34, 'LEM'),
(35, 'Lucas-Nuelle'),
(36, 'Metrawatt'),
(37, 'NANO 80'),
(38, 'Hoecherl & Hackl GmbH'),
(39, 'Bay Networks'),
(40, 'TIMONTA'),
(41, 'Busch & Jaeger'),
(42, 'Oltronix'),
(43, 'Ono Sokki'),
(44, 'Philips'),
(45, 'TES'),
(46, 'Houston Instruments'),
(47, 'SketchMate'),
(48, 'Nikon'),
(49, 'Rohde&Schwarz'),
(50, 'RS-Components'),
(51, 'Siemens'),
(52, 'ABB'),
(53, 'Lenze'),
(54, 'Bernegger&Rainer'),
(55, 'Mecc Alte'),
(56, 'Zumtobel'),
(57, 'ISO-Tech'),
(58, 'THURLBY'),
(59, 'Wavetek'),
(60, 'Wiener Schwachstromwerke'),
(61, 'Sugawara'),
(62, 'UEI'),
(63, 'WaagenSchrenk'),
(64, 'Texas Instrument'),
(65, 'EPIA'),
(66, 'Conrad'),
(67, 'Multitech'),
(68, 'TTi'),
(69, 'Metrix'),
(70, 'Huber&Suhner'),
(71, 'SI '),
(72, 'Meterman'),
(73, 'ERB'),
(74, 'HP '),
(75, 'Trenz'),
(76, 'Pioneer'),
(77, 'dbx'),
(78, 'Behringer'),
(79, 'Execel by Seas'),
(80, 'CA21 RE4x/DC'),
(81, 'TINI'),
(82, 'Toshiba'),
(83, 'Optoma'),
(84, 'Kolbinger'),
(85, 'Vivanco'),
(86, 'Keithley'),
(87, 'Stabo'),
(88, 'Lem'),
(89, 'Grundig'),
(90, 'Conitec'),
(91, 'Altium'),
(92, 'Tenma'),
(93, 'Metex'),
(94, 'K&H'),
(95, 'SUNIX'),
(96, 'Picotech'),
(97, 'Kathrein'),
(98, 'Forson'),
(99, 'AMD'),
(100, 'MOXA'),
(101, 'RUSA'),
(102, 'Zelisko'),
(103, 'EK'),
(104, 'Kyoritsu'),
(105, 'Moeller'),
(106, 'Elin'),
(107, 'VEE'),
(108, 'AEP'),
(109, 'Analog Devices'),
(110, 'Gebhardt'),
(111, 'SuperStack'),
(112, 'Wimberger'),
(113, 'Telemecanique'),
(114, 'trafomodern'),
(115, 'VDE'),
(116, 'Landis'),
(117, 'Cherry'),
(118, 'Tiger'),
(119, 'YeongYang'),
(120, 'Miniboeck'),
(121, 'Creative_Labs'),
(122, 'Acer'),
(123, 'Cullmann'),
(124, 'Stannol'),
(125, 'Omicron Lab'),
(126, 'F.W. Bell'),
(127, 'Escort'),
(128, 'Hameg Instruments'),
(129, 'Anritsu'),
(130, 'ABB Goerz'),
(131, 'GPL'),
(132, 'Excel'),
(133, 'I.T. Electronic GmbH'),
(134, 'AV-JEFE'),
(135, 'Velleman'),
(136, 'Multikontakt'),
(137, 'Firmware Upgrade 2.0.0'),
(138, 'BBC'),
(139, 'Schlumberger'),
(140, 'Pionier'),
(141, 'Raytek'),
(142, 'Testo'),
(143, 'Korona'),
(144, 'PCQT'),
(145, 'VEEX-VEPAL'),
(146, 'ACTERNA'),
(147, 'LUXFORM'),
(148, 'TRILUX'),
(149, 'Xilinx'),
(150, 'REO'),
(151, 'Mentor II'),
(152, 'Delta'),
(153, 'OHO-Elektronik'),
(154, 'NTI'),
(155, 'EATON/ABB'),
(156, 'EATON '),
(157, 'F&G'),
(158, 'EATON'),
(159, 'Schrack'),
(160, 'ELABO'),
(161, 'WAGO'),
(162, 'Coherent,Silberbauer'),
(163, 'Bernstein'),
(164, 'P-Drive'),
(165, 'E&A'),
(166, 'Homefibre'),
(167, 'ARM Cortex'),
(168, 'TechTools'),
(169, 'Voltcraft'),
(170, 'Socket'),
(171, 'IFM'),
(172, 'Compra'),
(173, 'Maxon'),
(174, 'Control Techniques'),
(175, 'Loxone'),
(176, 'Ellisys'),
(177, 'Rigol'),
(178, 'Wuerth Elektronik'),
(179, 'Oriental Motors'),
(180, 'Staudinger'),
(181, 'Tools At Work'),
(182, 'Nexus7 ASUS'),
(183, 'Samsung'),
(184, 'Apple'),
(185, 'EAC'),
(186, 'FLIR'),
(187, 'Trafomodern'),
(188, 'Nemo'),
(189, 'HAEFELY'),
(190, 'Chase'),
(191, 'Schloeder'),
(192, 'Brueel & Kjaer'),
(193, 'Aim'),
(194, 'Little Bits'),
(195, 'Raspberry Pi'),
(196, 'Peter Electronic'),
(197, 'Ekahau'),
(198, 'Janitza'),
(199, 'ELV'),
(200, 'Logitech'),
(201, 'G-Tec'),
(202, 'Test'),
(203, 'Test_Firma'),
(204, 'Firma3'),
(205, 'FirmaTestEnd'),
(206, 'FirmaTestTest'),
(207, 'FirmaAbgabe');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kategorie`
--

CREATE TABLE `kategorie` (
  `kid` int(10) UNSIGNED NOT NULL,
  `kname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `kategorie`
--

INSERT INTO `kategorie` (`kid`, `kname`) VALUES
(1, 'Oszilloskop'),
(2, 'Motor'),
(3, 'Uebungs-und Laboraufbauten'),
(4, 'Lehrsysteme'),
(5, 'Hochfrequenztechnik'),
(6, 'Drucker / Plotter'),
(7, 'Messgeraet'),
(8, 'Widerstand'),
(9, 'Steckbrett'),
(10, 'Netzgeraet'),
(11, 'Transformator'),
(12, 'Funktionsgenerator'),
(13, 'Leistungselektronik'),
(14, 'EMV'),
(15, 'automatisierte_Messsysteme'),
(16, 'Netzwerktechnik'),
(17, 'Audiotechnik'),
(18, 'Dekaden'),
(19, 'Digitaltechnik'),
(20, 'Mikrocontroller'),
(21, 'Computer'),
(22, 'Kapazitaet'),
(23, 'Induktivitaet'),
(24, 'Beleuchtungstechnik'),
(25, 'Adapter'),
(26, 'Schalter'),
(27, 'Werkzeug'),
(28, 'Computer '),
(29, 'Messgeraet '),
(30, 'Servo'),
(31, ''),
(32, 'Bedienungsanleitung'),
(33, 'LWL-Technik'),
(34, 'Geraet'),
(35, 'Test_Kategorie'),
(36, 'TestKategorie2'),
(37, ''),
(38, 'Kategorie'),
(39, 'KatTest'),
(40, 'Kategorie3'),
(41, 'KategorieTest'),
(42, 'KategorieTestEnde'),
(43, 'KategorieTestTest');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `labor`
--

CREATE TABLE `labor` (
  `id` int(10) UNSIGNED NOT NULL,
  `standort_sid` int(10) UNSIGNED NOT NULL,
  `firma_fid` int(10) UNSIGNED NOT NULL,
  `kategorie_kid` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `labor`
--

INSERT INTO `labor` (`id`, `standort_sid`, `firma_fid`, `kategorie_kid`) VALUES
(1, 11, 36, 1),
(2, 10, 35, 2),
(3, 9, 34, 3),
(4, 8, 33, 4),
(5, 7, 32, 5),
(6, 6, 31, 6),
(7, 5, 30, 7),
(8, 4, 29, 8),
(9, 3, 28, 9),
(10, 2, 27, 10),
(11, 1, 26, 11),
(12, 1, 25, 12),
(13, 2, 24, 13),
(14, 3, 23, 14),
(15, 4, 22, 15),
(16, 5, 21, 16),
(17, 6, 20, 17),
(18, 7, 19, 18),
(19, 8, 18, 19),
(20, 9, 17, 20),
(21, 10, 16, 21),
(22, 11, 15, 22),
(23, 11, 14, 23),
(24, 10, 13, 24),
(25, 9, 12, 25),
(26, 8, 11, 26),
(27, 7, 10, 27),
(28, 6, 9, 28),
(29, 5, 8, 29),
(30, 4, 7, 30),
(31, 3, 6, 31),
(32, 2, 5, 32),
(33, 1, 4, 33),
(34, 1, 3, 34),
(35, 1, 2, 34),
(36, 1, 1, 34);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `standort`
--

CREATE TABLE `standort` (
  `sid` int(10) UNSIGNED NOT NULL,
  `sname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `standort`
--

INSERT INTO `standort` (`sid`, `sname`) VALUES
(1, 'W096'),
(2, 'W109'),
(3, 'W92'),
(4, 'W91'),
(5, 'W094'),
(6, 'Keller'),
(7, 'W13'),
(8, 'W110'),
(9, 'TU08a'),
(10, 'W091'),
(11, 'W092'),
(12, 'tset'),
(13, 'test2'),
(14, 'StandortTestEnde'),
(15, 'StandortTestTest');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `firma`
--
ALTER TABLE `firma`
  ADD PRIMARY KEY (`fid`);

--
-- Indizes für die Tabelle `kategorie`
--
ALTER TABLE `kategorie`
  ADD PRIMARY KEY (`kid`);

--
-- Indizes für die Tabelle `labor`
--
ALTER TABLE `labor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `labor_FKIndex1` (`kategorie_kid`),
  ADD KEY `labor_FKIndex2` (`firma_fid`),
  ADD KEY `labor_FKIndex3` (`standort_sid`);

--
-- Indizes für die Tabelle `standort`
--
ALTER TABLE `standort`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `firma`
--
ALTER TABLE `firma`
  MODIFY `fid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;
--
-- AUTO_INCREMENT für Tabelle `kategorie`
--
ALTER TABLE `kategorie`
  MODIFY `kid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT für Tabelle `labor`
--
ALTER TABLE `labor`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT für Tabelle `standort`
--
ALTER TABLE `standort`
  MODIFY `sid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `labor`
--
ALTER TABLE `labor`
  ADD CONSTRAINT `labor_ibfk_1` FOREIGN KEY (`kategorie_kid`) REFERENCES `kategorie` (`kid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `labor_ibfk_2` FOREIGN KEY (`firma_fid`) REFERENCES `firma` (`fid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `labor_ibfk_3` FOREIGN KEY (`standort_sid`) REFERENCES `standort` (`sid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
