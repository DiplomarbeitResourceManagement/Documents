-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 17. Mai 2017 um 10:42
-- Server-Version: 10.1.16-MariaDB
-- PHP-Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `labdb`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `fach`
--

CREATE TABLE `fach` (
  `fachid` int(10) UNSIGNED NOT NULL,
  `fachname` varchar(255) COLLATE utf8_german2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_german2_ci;

--
-- Daten für Tabelle `fach`
--

INSERT INTO `fach` (`fachid`, `fachname`) VALUES
(1, 'F1'),
(2, 'F10'),
(3, 'F11'),
(4, 'F12'),
(5, 'F13'),
(6, 'F14'),
(7, 'F15'),
(8, 'F16'),
(9, 'F17'),
(10, 'F18'),
(11, 'F2'),
(12, 'F3'),
(13, 'F4'),
(14, 'F5'),
(15, 'F6'),
(16, 'F7'),
(17, 'F8'),
(18, 'F9'),
(19, 'SME'),
(20, 'Tisch'),
(21, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `firma`
--

CREATE TABLE `firma` (
  `fid` int(10) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8_german2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_german2_ci;

--
-- Daten für Tabelle `firma`
--

INSERT INTO `firma` (`fid`, `fname`) VALUES
(1, '3Com'),
(2, 'ABB'),
(3, 'ABB Goerz'),
(4, 'Acer'),
(5, 'Acterna'),
(6, 'AEG'),
(7, 'AEP'),
(8, 'Agilent'),
(9, 'Aim'),
(10, 'Altium'),
(11, 'AMD'),
(12, 'Analog Devices'),
(13, 'Anritsu'),
(14, 'Apple'),
(15, 'ARM Cortex'),
(16, 'A-TEK'),
(17, 'AV-JEFE'),
(18, 'Bay Networks'),
(19, 'BBC'),
(20, 'BBC/Goerz/Metrawatt'),
(21, 'Behringer'),
(22, 'Benedikt&Jäger'),
(23, 'Bernegger&Rainer'),
(24, 'Bernstein'),
(25, 'Brüel & Kjaer'),
(26, 'Busch & Jäger'),
(27, 'BWD Instruments PTY LTD'),
(28, 'CA21 RE4x/DC'),
(29, 'Chase'),
(30, 'Cherry'),
(31, 'Cisco'),
(32, 'Coherent,Silberbauer'),
(33, 'Compra'),
(34, 'Conitec'),
(35, 'Conrad'),
(36, 'Control Techniques'),
(37, 'Creative_Labs'),
(38, 'Cullmann'),
(39, 'Datentechnik'),
(40, 'dbx'),
(41, 'Delta'),
(42, 'Deumo'),
(43, 'E&A'),
(44, 'EAC'),
(45, 'EATON'),
(46, 'EATON/ABB'),
(47, 'EK'),
(48, 'Ekahau'),
(49, 'ELABO'),
(50, 'Elin'),
(51, 'Ellisys'),
(52, 'ELV'),
(53, 'ELWE'),
(54, 'EPIA'),
(55, 'ERB'),
(56, 'Escort'),
(57, 'Excel'),
(58, 'Excel by Seas'),
(59, 'F&G'),
(60, 'F.W. Bell'),
(61, 'Farnell'),
(62, 'Firmware Upgrade 2.0.0'),
(63, 'FLIR'),
(64, 'Fluke'),
(65, 'Forson'),
(66, 'FUG'),
(67, 'Gebhardt'),
(68, 'Goerz'),
(69, 'Gossen'),
(70, 'GPL'),
(71, 'Grundig'),
(72, 'G-Tec'),
(73, 'HAEFELY'),
(74, 'Hameg Instruments'),
(75, 'HP'),
(76, 'HPS'),
(77, 'HTL'),
(78, 'Huber&Suhner'),
(79, 'I.T. Electronic GmbH'),
(80, 'IFM'),
(81, 'Instruments'),
(82, 'Interstate'),
(83, 'ISO-Tech'),
(84, 'Janitza'),
(85, 'Jaquet'),
(86, 'JJ LOYD'),
(87, 'Josef Zelisko'),
(88, 'K&H'),
(89, 'Kathrein'),
(90, 'KEITHLEY'),
(91, 'Kolbinger'),
(92, 'Korona'),
(93, 'Kyoritsu'),
(94, 'Landis'),
(95, 'Lecroy'),
(96, 'LEM'),
(97, 'Lenze'),
(98, 'Leybold'),
(99, 'Little Bits'),
(100, 'Logitech'),
(101, 'Loxone'),
(102, 'Lucas-Nuelle'),
(103, 'LUXFROM'),
(104, 'Maxon'),
(105, 'Mecc Alte'),
(106, 'Mentor II'),
(107, 'Meterman'),
(108, 'Metex'),
(109, 'Metrawatt'),
(110, 'Metrix'),
(111, 'Miniböck'),
(112, 'Moeller'),
(113, 'MOXA'),
(114, 'Multikontakt'),
(115, 'Multitech'),
(116, 'NANO 80'),
(117, 'National_Instruments'),
(118, 'Nemo'),
(119, 'Nexus7 ASUS'),
(120, 'Nikon'),
(121, 'Norma'),
(122, 'NTI'),
(123, 'OHO-Elektronik'),
(124, 'Oltronix'),
(125, 'Omicron Lab'),
(126, 'Ono Sokki'),
(127, 'Optoma'),
(128, 'Oriental Motors'),
(129, 'PCQT'),
(130, 'P-Drive'),
(131, 'Peter Elektronic'),
(132, 'Philips'),
(133, 'Picotech'),
(134, 'Pioneer'),
(135, 'Pionier'),
(136, 'Raspberry Pi'),
(137, 'Raytek'),
(138, 'REO'),
(139, 'Rigol'),
(140, 'Rohde&Schwarz'),
(141, 'Roline'),
(142, 'RS-Components'),
(143, 'RUSA'),
(144, 'Samsung'),
(145, 'Schlöder'),
(146, 'Schlumberger'),
(147, 'Schrack'),
(148, 'Servogor'),
(149, 'SI'),
(150, 'Siemens'),
(151, 'SketchMate'),
(152, 'Socket'),
(153, 'Stabo'),
(154, 'Stannol'),
(155, 'Staudinger'),
(156, 'Sugawara'),
(157, 'SUNIX'),
(158, 'SuperStack'),
(159, 'TechTools'),
(160, 'Tektronix'),
(161, 'Telemecanique'),
(162, 'Tenma'),
(163, 'TES'),
(164, 'Testo'),
(165, 'Texas Instruments'),
(166, 'THURLBY'),
(167, 'Tiger'),
(168, 'TIMONTA'),
(169, 'TINI'),
(170, 'Tools At Work'),
(171, 'Toshiba'),
(172, 'trafomodern'),
(173, 'Trenz'),
(174, 'TRILUX'),
(175, 'TTi'),
(176, 'UEI'),
(177, 'VDE'),
(178, 'VEE'),
(179, 'VEEX-VEPAL'),
(180, 'Velleman'),
(181, 'Vivanco'),
(182, 'Voltcraft'),
(183, 'WaagenSchrenk'),
(184, 'WAGO'),
(185, 'Wavetek'),
(186, 'Wiener Schwachstromwerke'),
(187, 'Wimberger'),
(188, 'Würth Elektronik'),
(189, 'Xilinx'),
(190, 'YeongYang'),
(191, 'Zelisko'),
(192, 'Zumtobel'),
(193, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kasten`
--

CREATE TABLE `kasten` (
  `kid` int(10) UNSIGNED NOT NULL,
  `kname` varchar(255) COLLATE utf8_german2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_german2_ci;

--
-- Daten für Tabelle `kasten`
--

INSERT INTO `kasten` (`kid`, `kname`) VALUES
(1, 'EMV'),
(2, 'K07'),
(3, 'K1'),
(4, 'K10'),
(5, 'K11'),
(6, 'K12'),
(7, 'K13'),
(8, 'K14'),
(9, 'K15'),
(10, 'K16'),
(11, 'K17'),
(12, 'K18'),
(13, 'K2'),
(14, 'K23'),
(15, 'K24'),
(16, 'K26'),
(17, 'K28'),
(18, 'K3'),
(19, 'K4'),
(20, 'K5'),
(21, 'K6'),
(22, 'K7'),
(23, 'K8'),
(24, 'K9'),
(25, 'R1'),
(26, 'R10'),
(27, 'R2'),
(28, 'R3'),
(29, 'R5'),
(30, 'R6'),
(31, 'R7'),
(32, 'R8'),
(33, 'R9'),
(34, 'S1'),
(35, 'SME'),
(36, 'T1'),
(37, 'T2'),
(38, 'T3'),
(39, 'T4'),
(40, 'T5'),
(41, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kategorie`
--

CREATE TABLE `kategorie` (
  `katid` int(10) UNSIGNED NOT NULL,
  `katname` varchar(255) COLLATE utf8_german2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_german2_ci;

--
-- Daten für Tabelle `kategorie`
--

INSERT INTO `kategorie` (`katid`, `katname`) VALUES
(1, 'Adapter'),
(2, 'Audiotechnik'),
(3, 'Automatisierte_Messsysteme'),
(4, 'Bedienungsanleitung'),
(5, 'Beleuchtungstechnik'),
(6, 'Computer'),
(7, 'Dekaden'),
(8, 'Digitaltechnik'),
(9, 'Drucker/Plotter'),
(10, 'EMV'),
(11, 'Funktionsgenerator'),
(12, 'Gerät'),
(13, 'Hochfrequenztechnik'),
(14, 'Induktivität'),
(15, 'Kapazität'),
(16, 'Lehrsysteme'),
(17, 'Leistungselektronik'),
(18, 'LWL-Technik'),
(19, 'Messgerät'),
(20, 'Mikrocontroller'),
(21, 'Motor'),
(22, 'Netzgerät'),
(23, 'Netzwerktechnik'),
(24, 'Oszilloskop'),
(25, 'Schalter'),
(26, 'Servo'),
(27, 'Steckbrett'),
(28, 'Transformator'),
(29, 'Übungs- und Laboraufbauten'),
(30, 'Werkzeug'),
(31, 'Widerstand'),
(32, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `labor`
--

CREATE TABLE `labor` (
  `id` int(10) UNSIGNED NOT NULL,
  `fach_fachid` int(10) UNSIGNED NOT NULL,
  `kasten_kid` int(10) UNSIGNED NOT NULL,
  `raum_rid` int(10) UNSIGNED NOT NULL,
  `firma_fid` int(10) UNSIGNED NOT NULL,
  `kategorie_kid` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_german2_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `raum`
--

CREATE TABLE `raum` (
  `rid` int(10) UNSIGNED NOT NULL,
  `rname` varchar(255) COLLATE utf8_german2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_german2_ci;

--
-- Daten für Tabelle `raum`
--

INSERT INTO `raum` (`rid`, `rname`) VALUES
(1, 'Keller'),
(2, 'TU08a'),
(3, 'W091'),
(4, 'W092'),
(5, 'W094'),
(6, 'W096'),
(7, 'W109'),
(8, 'W110'),
(9, 'W13'),
(10, 'W91'),
(11, 'W92');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `fach`
--
ALTER TABLE `fach`
  ADD PRIMARY KEY (`fachid`);

--
-- Indizes für die Tabelle `firma`
--
ALTER TABLE `firma`
  ADD PRIMARY KEY (`fid`);

--
-- Indizes für die Tabelle `kasten`
--
ALTER TABLE `kasten`
  ADD PRIMARY KEY (`kid`);

--
-- Indizes für die Tabelle `kategorie`
--
ALTER TABLE `kategorie`
  ADD PRIMARY KEY (`katid`);

--
-- Indizes für die Tabelle `labor`
--
ALTER TABLE `labor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `labor_FKIndex1` (`kategorie_kid`),
  ADD KEY `labor_FKIndex2` (`firma_fid`),
  ADD KEY `labor_FKIndex3` (`raum_rid`),
  ADD KEY `labor_FKIndex4` (`kasten_kid`),
  ADD KEY `labor_FKIndex5` (`fach_fachid`);

--
-- Indizes für die Tabelle `raum`
--
ALTER TABLE `raum`
  ADD PRIMARY KEY (`rid`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `fach`
--
ALTER TABLE `fach`
  MODIFY `fachid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT für Tabelle `firma`
--
ALTER TABLE `firma`
  MODIFY `fid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;
--
-- AUTO_INCREMENT für Tabelle `kasten`
--
ALTER TABLE `kasten`
  MODIFY `kid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT für Tabelle `kategorie`
--
ALTER TABLE `kategorie`
  MODIFY `katid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT für Tabelle `labor`
--
ALTER TABLE `labor`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `raum`
--
ALTER TABLE `raum`
  MODIFY `rid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `labor`
--
ALTER TABLE `labor`
  ADD CONSTRAINT `labor_ibfk_1` FOREIGN KEY (`kategorie_kid`) REFERENCES `kategorie` (`katid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `labor_ibfk_2` FOREIGN KEY (`firma_fid`) REFERENCES `firma` (`fid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `labor_ibfk_3` FOREIGN KEY (`raum_rid`) REFERENCES `raum` (`rid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `labor_ibfk_4` FOREIGN KEY (`kasten_kid`) REFERENCES `kasten` (`kid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `labor_ibfk_5` FOREIGN KEY (`fach_fachid`) REFERENCES `fach` (`fachid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
