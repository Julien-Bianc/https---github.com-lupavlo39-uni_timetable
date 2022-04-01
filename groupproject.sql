-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 01 avr. 2022 à 20:41
-- Version du serveur :  5.7.17
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `groupproject`
--

-- --------------------------------------------------------

--
-- Structure de la table `modules`
--

CREATE TABLE `modules` (
  `IDModule` int(20) NOT NULL,
  `#NumRoom` int(20) NOT NULL,
  `ModuleName` varchar(30) NOT NULL,
  `day` varchar(10) NOT NULL,
  `hour` time NOT NULL,
  `duration` int(10) NOT NULL COMMENT '1 to 4 h',
  `semester` tinyint(1) NOT NULL COMMENT '0 sem 1 / 1 sem 2'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `modules`
--

INSERT INTO `modules` (`IDModule`, `#NumRoom`, `ModuleName`, `day`, `hour`, `duration`, `semester`) VALUES
(1041, 101, 'Math', 'Monday', '09:00:00', 3, 0),
(1042, 11, 'Computer Science', 'Tuesday', '10:00:00', 4, 0),
(1043, 1, 'Physics', 'wednesday', '12:00:00', 4, 0),
(1044, 4, 'Math', 'wednesday', '12:00:00', 4, 1),
(1045, 12, 'Computer Science', 'Monday', '09:00:00', 4, 1),
(1046, 104, 'Electronics', 'Monday', '12:30:00', 3, 1),
(2041, 2, 'Math', 'Thursday', '12:00:00', 3, 0),
(2042, 102, 'Computer Science', 'wednesday', '09:00:00', 4, 0),
(2043, 4, 'Mechanics', 'Monday', '08:00:00', 4, 0),
(2044, 101, 'Math', 'Monday', '08:00:00', 4, 1),
(2045, 5, 'Computer Science', 'Wednesday', '09:00:00', 4, 1),
(2046, 103, 'Engineering Science', 'Thursday', '12:00:00', 3, 1),
(3041, 105, 'Math', 'Tuesday', '09:00:00', 3, 0),
(3042, 11, 'Computer Science', 'Monday', '13:00:00', 4, 0),
(3043, 15, 'Group Project', 'Friday', '14:00:00', 4, 0),
(3044, 4, 'Math', 'Monday', '13:00:00', 4, 1),
(3045, 14, 'Computer Science', 'Friday', '14:00:00', 4, 1),
(3046, 101, 'Managment', 'Tuesday', '09:00:00', 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `programme`
--

CREATE TABLE `programme` (
  `IDProgramme` int(20) NOT NULL,
  `#IDModule` int(20) NOT NULL COMMENT 'Semester 1',
  `#IDModule2` int(20) NOT NULL COMMENT 'Semester 1',
  `#IDModule3` int(20) NOT NULL COMMENT 'Semester 1',
  `#IDModule4` int(20) NOT NULL COMMENT 'Semester 2',
  `#IDModule5` int(20) NOT NULL COMMENT 'Semester 2',
  `#IDModule6` int(20) NOT NULL COMMENT 'Semester 2'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `programme`
--

INSERT INTO `programme` (`IDProgramme`, `#IDModule`, `#IDModule2`, `#IDModule3`, `#IDModule4`, `#IDModule5`, `#IDModule6`) VALUES
(1000, 1041, 1042, 1043, 1044, 1045, 1046),
(2000, 2041, 2042, 2043, 2044, 2045, 2046),
(3000, 3041, 3042, 3043, 3044, 3045, 3046);

-- --------------------------------------------------------

--
-- Structure de la table `room`
--

CREATE TABLE `room` (
  `TypeRoom` varchar(20) NOT NULL,
  `NumRoom` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `room`
--

INSERT INTO `room` (`TypeRoom`, `NumRoom`) VALUES
('Lab', 15),
('Lab', 11),
('Lab', 12),
('Lab', 13),
('Lab', 14),
('Lecture', 105),
('Lecture', 101),
('Lecture', 102),
('Lecture', 103),
('Lecture', 104),
('Theatre', 1),
('Theatre', 2),
('Theatre', 3),
('Theatre', 4),
('Theatre', 5);

-- --------------------------------------------------------

--
-- Structure de la table `staff`
--

CREATE TABLE `staff` (
  `IDStaff` int(20) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `#IDModule` int(20) NOT NULL,
  `#IDModule2` int(20) NOT NULL,
  `#IDModule3` int(20) NOT NULL,
  `#IDModule4` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `staff`
--

INSERT INTO `staff` (`IDStaff`, `LastName`, `#IDModule`, `#IDModule2`, `#IDModule3`, `#IDModule4`) VALUES
(1001, 'Pepe', 3042, 1042, 1045, 2045),
(1002, 'Odegaard', 2043, 1043, 1046, 3045),
(1003, 'Walker', 1041, 3041, 2044, 1044),
(1004, 'Roni', 2041, 3043, 3046, 2046),
(1005, 'Payet', 2042, 2041, 3044, 3042);

-- --------------------------------------------------------

--
-- Structure de la table `student`
--

CREATE TABLE `student` (
  `ID` int(20) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `#IDProgramme` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `student`
--

INSERT INTO `student` (`ID`, `LastName`, `#IDProgramme`) VALUES
(21004301, 'Pavaard', 1000),
(21004302, 'Krante', 1000),
(22004303, 'Mbacle', 2000),
(22004304, 'Pogboum', 2000),
(23004305, 'Grisemine', 3000),
(23004306, 'Vacrane', 3000);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`IDModule`);

--
-- Index pour la table `programme`
--
ALTER TABLE `programme`
  ADD PRIMARY KEY (`IDProgramme`);

--
-- Index pour la table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`NumRoom`);

--
-- Index pour la table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`IDStaff`);

--
-- Index pour la table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `modules`
--
ALTER TABLE `modules`
  MODIFY `IDModule` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3047;
--
-- AUTO_INCREMENT pour la table `room`
--
ALTER TABLE `room`
  MODIFY `NumRoom` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
--
-- AUTO_INCREMENT pour la table `staff`
--
ALTER TABLE `staff`
  MODIFY `IDStaff` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1006;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
