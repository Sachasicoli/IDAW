-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 04, 2022 at 09:40 AM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Data1`
--

-- --------------------------------------------------------

--
-- Table structure for table `aliment`
--

CREATE TABLE `aliment` (
  `ID_ALIMENT` int(11) NOT NULL,
  `LIB_ALIMENT` varchar(200) NOT NULL,
  `ID_TYPE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aliment`
--

INSERT INTO `aliment` (`ID_ALIMENT`, `LIB_ALIMENT`, `ID_TYPE`) VALUES
(1, 'chips', 1),
(2, 'olives vertes', 1),
(3, 'fromage blanc 0%', 3),
(4, 'Lait 1/2 écrémé', 3),
(5, 'crème fraiche', 3),
(6, 'yaourt à 0%', 3),
(7, 'gruyère', 3),
(8, 'bière', 4),
(9, 'coca cola', 4),
(10, 'vin blanc', 4),
(11, 'sirop à l\'eau', 4),
(12, 'noix de cajou', 1),
(13, 'bifteck de boeuf', 2),
(14, 'côte de boeuf', 2),
(15, 'jambon cru', 2),
(16, 'jambon cuit', 2),
(17, 'poulet', 2),
(18, 'dinde', 2),
(19, 'cabillaud', 2),
(20, 'colin', 2),
(21, 'riz', 5),
(22, 'pâtes', 5),
(23, 'baguette de pain', 5),
(24, 'biscuits', 5),
(25, 'champignons', 6),
(26, 'pain brioché', 5),
(27, 'cookies', 7),
(28, 'crème glacée vanille', 7),
(29, 'barre kitkat', 7),
(30, 'nutella', 7),
(31, 'huile d\'olive', 8),
(32, 'huile de tournesol', 8),
(33, 'beurre', 8),
(47, 'poivrons', 6),
(48, 'courgettes', 6),
(49, 'carottes', 6),
(50, 'haricots verts', 6),
(51, 'maïs', 6),
(52, 'salade verte', 6),
(53, 'tomates', 6),
(54, 'bananes', 6),
(55, 'mandarines', 6),
(56, 'pêches', 6),
(57, 'fraises', 6),
(58, 'kiwis', 6),
(60, 'salade composée', 10),
(61, 'poêlée de légumes', 10),
(62, 'pâtes à la bolognaise', 10),
(63, 'riz aux champignons', 10),
(64, 'sandwich jambon beurre', 10),
(65, 'risotto de poisson', 10),
(66, 'brioche au nutella', 10),
(67, 'steak et haricots verts', 10),
(68, 'salade de fruits', 10);

-- --------------------------------------------------------

--
-- Table structure for table `composer`
--

CREATE TABLE `composer` (
  `ID_ALIMENT_COMPOSANT` int(255) NOT NULL,
  `ID_ALIMENT_COMPLEXE` int(255) NOT NULL,
  `POURCENTAGE` decimal(65,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `composer`
--

INSERT INTO `composer` (`ID_ALIMENT_COMPOSANT`, `ID_ALIMENT_COMPLEXE`, `POURCENTAGE`) VALUES
(2, 60, '10'),
(5, 63, '25'),
(5, 65, '15'),
(7, 60, '10'),
(7, 62, '5'),
(13, 62, '10'),
(13, 67, '45'),
(16, 64, '30'),
(19, 65, '55'),
(21, 63, '30'),
(21, 65, '30'),
(22, 62, '30'),
(23, 64, '60'),
(25, 61, '25'),
(25, 63, '45'),
(26, 66, '65'),
(30, 66, '35'),
(31, 62, '5'),
(32, 61, '10'),
(33, 64, '10'),
(33, 67, '5'),
(47, 61, '15'),
(48, 61, '35'),
(49, 61, '15'),
(50, 67, '50'),
(52, 60, '40'),
(53, 60, '40'),
(53, 62, '50'),
(54, 68, '25'),
(56, 68, '30'),
(57, 68, '25'),
(58, 68, '20');

-- --------------------------------------------------------

--
-- Table structure for table `consommer`
--

CREATE TABLE `consommer` (
  `EMAIL` varchar(255) CHARACTER SET latin1 NOT NULL,
  `ID_ALIMENT` int(255) NOT NULL,
  `QUANTITE` decimal(65,0) NOT NULL,
  `DATE` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contenir`
--

CREATE TABLE `contenir` (
  `ID_ALIMENT` int(255) NOT NULL,
  `ID_NUTRIMENT` int(255) NOT NULL,
  `PROPORTION` decimal(65,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contenir`
--

INSERT INTO `contenir` (`ID_ALIMENT`, `ID_NUTRIMENT`, `PROPORTION`) VALUES
(1, 1, '53'),
(1, 2, '34'),
(1, 3, '6'),
(1, 4, '1'),
(1, 5, '1'),
(1, 6, '551'),
(2, 1, '14'),
(2, 2, '1'),
(2, 3, '1'),
(2, 4, '0'),
(2, 5, '3'),
(2, 6, '145'),
(3, 1, '5'),
(3, 2, '0'),
(3, 3, '8'),
(3, 4, '4'),
(3, 5, '0'),
(3, 6, '48'),
(4, 1, '5'),
(4, 2, '2'),
(4, 3, '3'),
(4, 4, '5'),
(4, 5, '0'),
(4, 6, '47'),
(5, 1, '6'),
(5, 2, '15'),
(5, 3, '3'),
(5, 4, '4'),
(5, 5, '0'),
(5, 6, '170'),
(6, 1, '5'),
(6, 2, '0'),
(6, 3, '4'),
(6, 4, '5'),
(6, 5, '0'),
(6, 6, '36'),
(7, 1, '0'),
(7, 2, '32'),
(7, 3, '28'),
(7, 4, '0'),
(7, 5, '1'),
(7, 6, '400'),
(8, 1, '4'),
(8, 2, '0'),
(8, 3, '1'),
(8, 4, '1'),
(8, 5, '0'),
(8, 6, '57'),
(9, 1, '11'),
(9, 2, '0'),
(9, 3, '0'),
(9, 4, '11'),
(9, 5, '0'),
(9, 6, '42'),
(10, 1, '2'),
(10, 2, '0'),
(10, 3, '0'),
(10, 4, '0'),
(10, 5, '0'),
(10, 6, '83'),
(11, 1, '8'),
(11, 2, '0'),
(11, 3, '0'),
(11, 4, '8'),
(11, 5, '0'),
(11, 6, '31'),
(12, 1, '18'),
(12, 2, '48'),
(12, 3, '18'),
(12, 4, '10'),
(12, 5, '0'),
(12, 6, '583'),
(13, 1, '0'),
(13, 2, '4'),
(13, 3, '28'),
(13, 4, '0'),
(13, 5, '0'),
(13, 6, '149'),
(14, 1, '0'),
(14, 2, '24'),
(14, 3, '17'),
(14, 4, '0'),
(14, 5, '0'),
(14, 6, '283'),
(15, 1, '1'),
(15, 2, '16'),
(15, 3, '21'),
(15, 4, '1'),
(15, 5, '5'),
(15, 6, '232'),
(16, 1, '1'),
(16, 2, '5'),
(16, 3, '18'),
(16, 4, '1'),
(16, 5, '2'),
(16, 6, '121'),
(17, 1, '1'),
(17, 2, '2'),
(17, 3, '26'),
(17, 4, '0'),
(17, 5, '0'),
(17, 6, '121'),
(18, 1, '0'),
(18, 2, '1'),
(18, 3, '24'),
(18, 4, '0'),
(18, 5, '0'),
(18, 6, '106'),
(19, 1, '0'),
(19, 2, '1'),
(19, 3, '19'),
(19, 4, '0'),
(19, 5, '0'),
(19, 6, '83'),
(20, 1, '0'),
(20, 2, '2'),
(20, 3, '23'),
(20, 4, '0'),
(20, 5, '0'),
(20, 6, '115'),
(21, 1, '32'),
(21, 2, '0'),
(21, 3, '3'),
(21, 4, '0'),
(21, 5, '0'),
(21, 6, '145'),
(22, 1, '30'),
(22, 2, '1'),
(22, 3, '5'),
(22, 4, '1'),
(22, 5, '0'),
(22, 6, '151'),
(23, 1, '57'),
(23, 2, '2'),
(23, 3, '9'),
(23, 4, '2'),
(23, 5, '0'),
(23, 6, '286'),
(24, 1, '74'),
(24, 2, '22'),
(24, 3, '8'),
(24, 4, '13'),
(24, 5, '0'),
(24, 6, '446'),
(25, 1, '2'),
(25, 2, '0'),
(25, 3, '2'),
(25, 4, '1'),
(25, 5, '0'),
(25, 6, '22'),
(26, 1, '50'),
(26, 2, '13'),
(26, 3, '8'),
(26, 4, '2'),
(26, 5, '0'),
(26, 6, '357'),
(27, 1, '61'),
(27, 2, '25'),
(27, 3, '7'),
(27, 4, '31'),
(27, 5, '1'),
(27, 6, '504'),
(28, 1, '22'),
(28, 2, '16'),
(28, 3, '4'),
(28, 4, '21'),
(28, 5, '0'),
(28, 6, '249'),
(29, 1, '60'),
(29, 2, '28'),
(29, 3, '7'),
(29, 4, '45'),
(29, 5, '0'),
(29, 6, '521'),
(30, 1, '8'),
(30, 2, '4'),
(30, 3, '0'),
(30, 4, '8'),
(30, 5, '0'),
(30, 6, '80'),
(31, 1, '0'),
(31, 2, '100'),
(31, 3, '0'),
(31, 4, '0'),
(31, 5, '0'),
(31, 6, '900'),
(32, 1, '0'),
(32, 2, '100'),
(32, 3, '0'),
(32, 4, '0'),
(32, 5, '0'),
(32, 6, '900'),
(33, 1, '1'),
(33, 2, '82'),
(33, 3, '1'),
(33, 4, '1'),
(33, 5, '0'),
(33, 6, '745'),
(47, 1, '2'),
(47, 2, '0'),
(47, 3, '1'),
(47, 4, '0'),
(47, 5, '0'),
(47, 6, '29'),
(48, 1, '1'),
(48, 2, '0'),
(48, 3, '1'),
(48, 4, '0'),
(48, 5, '0'),
(48, 6, '16'),
(49, 1, '8'),
(49, 2, '0'),
(49, 3, '1'),
(49, 4, '5'),
(49, 5, '0'),
(49, 6, '40'),
(50, 1, '3'),
(50, 2, '0'),
(50, 3, '2'),
(50, 4, '3'),
(50, 5, '0'),
(50, 6, '29'),
(51, 1, '18'),
(51, 2, '2'),
(51, 3, '3'),
(51, 4, '3'),
(51, 5, '0'),
(51, 6, '106'),
(52, 1, '3'),
(52, 2, '0'),
(52, 3, '1'),
(52, 4, '2'),
(52, 5, '0'),
(52, 6, '15'),
(53, 1, '4'),
(53, 2, '0'),
(53, 3, '1'),
(53, 4, '3'),
(53, 5, '0'),
(53, 6, '18'),
(54, 1, '23'),
(54, 2, '0'),
(54, 3, '1'),
(54, 4, '12'),
(54, 5, '0'),
(54, 6, '89'),
(55, 1, '9'),
(55, 2, '0'),
(55, 3, '1'),
(55, 4, '9'),
(55, 5, '0'),
(55, 6, '49'),
(56, 1, '10'),
(56, 2, '0'),
(56, 3, '1'),
(56, 4, '8'),
(56, 5, '0'),
(56, 6, '39'),
(57, 1, '8'),
(57, 2, '0'),
(57, 3, '1'),
(57, 4, '5'),
(57, 5, '0'),
(57, 6, '33'),
(58, 1, '15'),
(58, 2, '1'),
(58, 3, '1'),
(58, 4, '9'),
(58, 5, '0'),
(58, 6, '61'),
(60, 1, '4'),
(60, 2, '3'),
(60, 3, '4'),
(60, 4, '2'),
(60, 5, '0'),
(60, 6, '68'),
(61, 1, '2'),
(61, 2, '10'),
(61, 3, '1'),
(61, 4, '1'),
(61, 5, '0'),
(61, 6, '111'),
(62, 1, '11'),
(62, 2, '7'),
(62, 3, '6'),
(62, 4, '2'),
(62, 5, '0'),
(62, 6, '134'),
(63, 1, '12'),
(63, 2, '4'),
(63, 3, '3'),
(63, 4, '1'),
(63, 5, '0'),
(63, 6, '96'),
(64, 1, '35'),
(64, 2, '11'),
(64, 3, '11'),
(64, 4, '2'),
(64, 5, '1'),
(64, 6, '282'),
(65, 1, '11'),
(65, 2, '3'),
(65, 3, '12'),
(65, 4, '1'),
(65, 5, '0'),
(65, 6, '115'),
(66, 1, '35'),
(66, 2, '10'),
(66, 3, '5'),
(66, 4, '4'),
(66, 5, '0'),
(66, 6, '260'),
(67, 1, '2'),
(67, 2, '6'),
(67, 3, '14'),
(67, 4, '2'),
(67, 5, '0'),
(67, 6, '119'),
(68, 1, '14'),
(68, 2, '0'),
(68, 3, '1'),
(68, 4, '8'),
(68, 5, '0'),
(68, 6, '54');

-- --------------------------------------------------------

--
-- Table structure for table `nutriment`
--

CREATE TABLE `nutriment` (
  `ID_NUTRIMENT` int(255) NOT NULL,
  `LIB_NUTRIMENT` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nutriment`
--

INSERT INTO `nutriment` (`ID_NUTRIMENT`, `LIB_NUTRIMENT`) VALUES
(1, 'Glucides (g/100 g)'),
(2, 'Lipides (g/100 g)'),
(3, 'Proteines (g/100 g)'),
(4, 'Sucre (g/100 g)'),
(5, 'Sel(g/100g)'),
(6, 'Calories (kcal/100g)');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `ID_TYPE` int(255) NOT NULL,
  `LIB_TYPE` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`ID_TYPE`, `LIB_TYPE`) VALUES
(1, 'apéritifs'),
(2, 'viandes, volailles, poissons'),
(3, 'produits laitiers'),
(4, 'boissons'),
(5, 'féculents'),
(6, 'fruits et légumes'),
(7, 'desserts et sucreries'),
(8, 'matières grasses'),
(9, 'autres'),
(10, 'plats composés');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `EMAIL` varchar(255) CHARACTER SET latin1 NOT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL,
  `DATE_NAISSANCE` date DEFAULT NULL,
  `SEXE` varchar(255) CHARACTER SET latin1 NOT NULL,
  `NIV_PRATIQUE_SPORT` varchar(255) CHARACTER SET latin1 NOT NULL,
  `NOM` varchar(255) CHARACTER SET latin1 NOT NULL,
  `PRENOM` varchar(255) CHARACTER SET latin1 NOT NULL,
  `POIDS` decimal(10,0) NOT NULL,
  `TAILLE` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`EMAIL`, `PASSWORD`, `DATE_NAISSANCE`, `SEXE`, `NIV_PRATIQUE_SPORT`, `NOM`, `PRENOM`, `POIDS`, `TAILLE`) VALUES
('celine.behanzin@etu.imt-lille-douai.fr', 'passwordCeline', '2000-04-19', 'F', 'Faible', 'Behanzin', 'Celine', '68', '168'),
('clara.lachaux@etu.imt-lille-douai.fr', 'passwordClara', '2000-07-22', 'F', 'Faible', 'Lachaux', 'Clara', '58', '162'),
('clement.violot@etu.imt-lille-douai.fr', 'passwordClement', '1999-01-19', 'M', 'Faible', 'Violot', 'Clement', '60', '167'),
('geronimi.vanessa@free.fr', 'poulet', '2022-04-15', 'M', 'Avance', 'Sacha', 'Sicoli', '80', '178'),
('raphael.bielecki@etu.imt-lille-douai.fr', 'passwordRaphael', '2000-03-15', 'M', 'Avance', 'Bielecki', 'Raphael', '74', '180'),
('sacha.sicoli@etu.imt-nord-europe.fr', 'passwordSacha', '2001-05-29', 'M', 'Intermediaire', 'Sicoli', 'Sacha', '68', '172');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `EMAIL` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `DATE_NAISSANCE` varchar(100) NOT NULL,
  `SEXE` varchar(100) NOT NULL,
  `NIV_PRATIQUE_SPORT` varchar(100) NOT NULL,
  `NOM` varchar(100) NOT NULL,
  `PRENOM` varchar(100) NOT NULL,
  `POIDS` varchar(100) NOT NULL,
  `TAILLE` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`EMAIL`, `PASSWORD`, `DATE_NAISSANCE`, `SEXE`, `NIV_PRATIQUE_SPORT`, `NOM`, `PRENOM`, `POIDS`, `TAILLE`) VALUES
('a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aliment`
--
ALTER TABLE `aliment`
  ADD PRIMARY KEY (`ID_ALIMENT`),
  ADD KEY `aliment_ibfk_1` (`ID_TYPE`);

--
-- Indexes for table `composer`
--
ALTER TABLE `composer`
  ADD PRIMARY KEY (`ID_ALIMENT_COMPOSANT`,`ID_ALIMENT_COMPLEXE`),
  ADD KEY `ID_ALIMENT_COMPLEXE` (`ID_ALIMENT_COMPLEXE`);

--
-- Indexes for table `consommer`
--
ALTER TABLE `consommer`
  ADD PRIMARY KEY (`EMAIL`,`ID_ALIMENT`) USING BTREE,
  ADD KEY `ID_ALIMENT` (`ID_ALIMENT`);

--
-- Indexes for table `contenir`
--
ALTER TABLE `contenir`
  ADD PRIMARY KEY (`ID_ALIMENT`,`ID_NUTRIMENT`),
  ADD KEY `ID_NUTRIMENT` (`ID_NUTRIMENT`);

--
-- Indexes for table `nutriment`
--
ALTER TABLE `nutriment`
  ADD PRIMARY KEY (`ID_NUTRIMENT`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`ID_TYPE`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`EMAIL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aliment`
--
ALTER TABLE `aliment`
  MODIFY `ID_ALIMENT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `nutriment`
--
ALTER TABLE `nutriment`
  MODIFY `ID_NUTRIMENT` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `ID_TYPE` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aliment`
--
ALTER TABLE `aliment`
  ADD CONSTRAINT `aliment_ibfk_1` FOREIGN KEY (`ID_TYPE`) REFERENCES `type` (`ID_TYPE`) ON UPDATE CASCADE;

--
-- Constraints for table `composer`
--
ALTER TABLE `composer`
  ADD CONSTRAINT `composer_ibfk_1` FOREIGN KEY (`ID_ALIMENT_COMPLEXE`) REFERENCES `aliment` (`ID_ALIMENT`) ON UPDATE CASCADE,
  ADD CONSTRAINT `composer_ibfk_2` FOREIGN KEY (`ID_ALIMENT_COMPOSANT`) REFERENCES `aliment` (`ID_ALIMENT`) ON UPDATE CASCADE;

--
-- Constraints for table `consommer`
--
ALTER TABLE `consommer`
  ADD CONSTRAINT `consommer_ibfk_1` FOREIGN KEY (`EMAIL`) REFERENCES `user` (`EMAIL`) ON UPDATE CASCADE,
  ADD CONSTRAINT `consommer_ibfk_2` FOREIGN KEY (`ID_ALIMENT`) REFERENCES `aliment` (`ID_ALIMENT`) ON UPDATE CASCADE;

--
-- Constraints for table `contenir`
--
ALTER TABLE `contenir`
  ADD CONSTRAINT `contenir_ibfk_1` FOREIGN KEY (`ID_ALIMENT`) REFERENCES `aliment` (`ID_ALIMENT`) ON UPDATE CASCADE,
  ADD CONSTRAINT `contenir_ibfk_2` FOREIGN KEY (`ID_NUTRIMENT`) REFERENCES `nutriment` (`ID_NUTRIMENT`) ON UPDATE CASCADE;

--
-- Constraints for table `nutriment`
--
ALTER TABLE `nutriment`
  ADD CONSTRAINT `nutriment_ibfk_1` FOREIGN KEY (`ID_NUTRIMENT`) REFERENCES `contenir` (`ID_NUTRIMENT`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
