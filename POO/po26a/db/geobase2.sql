-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 04 avr. 2019 à 16:35
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `geobase2`
--
CREATE DATABASE IF NOT EXISTS `geobase2` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `geobase2`;

-- --------------------------------------------------------

--
-- Structure de la table `departements`
--

DROP TABLE IF EXISTS `departements`;
CREATE TABLE `departements` (
  `id` varchar(3) NOT NULL,
  `libelle` varchar(50) NOT NULL,
  `id_region` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Départements de France';

--
-- Déchargement des données de la table `departements`
--

INSERT INTO `departements` (`id`, `libelle`, `id_region`) VALUES
('01', 'AIN', '84'),
('02', 'AISNE', '32'),
('03', 'ALLIER', '84'),
('04', 'ALPES-DE-HAUTE-PROVENCE', '93'),
('05', 'HAUTES-ALPES', '93'),
('06', 'ALPES-MARITIMES', '93'),
('07', 'ARDECHE', '84'),
('08', 'ARDENNES', '44'),
('09', 'ARIEGE', '76'),
('10', 'AUBE', '44'),
('11', 'AUDE', '76'),
('12', 'AVEYRON', '76'),
('13', 'BOUCHES-DU-RHONE', '93'),
('14', 'CALVADOS', '28'),
('15', 'CANTAL', '84'),
('16', 'CHARENTE', '75'),
('17', 'CHARENTE-MARITIME', '75'),
('18', 'CHER', '24'),
('19', 'CORREZE', '75'),
('21', 'COTE-D\'OR', '27'),
('22', 'COTES-D\'ARMOR', '53'),
('23', 'CREUSE', '75'),
('24', 'DORDOGNE', '75'),
('25', 'DOUBS', '27'),
('26', 'DROME', '84'),
('27', 'EURE', '28'),
('28', 'EURE-ET-LOIR', '24'),
('29', 'FINISTERE', '53'),
('2A', 'CORSE-DU-SUD', '94'),
('2B', 'HAUTE-CORSE', '94'),
('30', 'GARD', '76'),
('31', 'HAUTE-GARONNE', '76'),
('32', 'GERS', '76'),
('33', 'GIRONDE', '75'),
('34', 'HERAULT', '76'),
('35', 'ILLE-ET-VILAINE', '53'),
('36', 'INDRE', '24'),
('37', 'INDRE-ET-LOIRE', '24'),
('38', 'ISERE', '84'),
('39', 'JURA', '27'),
('40', 'LANDES', '75'),
('41', 'LOIR-ET-CHER', '24'),
('42', 'LOIRE', '84'),
('43', 'HAUTE-LOIRE', '84'),
('44', 'LOIRE-ATLANTIQUE', '52'),
('45', 'LOIRET', '24'),
('46', 'LOT', '76'),
('47', 'LOT-ET-GARONNE', '75'),
('48', 'LOZERE', '76'),
('49', 'MAINE-ET-LOIRE', '52'),
('50', 'MANCHE', '28'),
('51', 'MARNE', '44'),
('52', 'HAUTE-MARNE', '44'),
('53', 'MAYENNE', '52'),
('54', 'MEURTHE-ET-MOSELLE', '44'),
('55', 'MEUSE', '44'),
('56', 'MORBIHAN', '53'),
('57', 'MOSELLE', '44'),
('58', 'NIEVRE', '27'),
('59', 'NORD', '32'),
('60', 'OISE', '32'),
('61', 'ORNE', '28'),
('62', 'PAS-DE-CALAIS', '32'),
('63', 'PUY-DE-DOME', '84'),
('64', 'PYRENEES-ATLANTIQUES', '75'),
('65', 'HAUTES-PYRENEES', '76'),
('66', 'PYRENEES-ORIENTALES', '76'),
('67', 'BAS-RHIN', '44'),
('68', 'HAUT-RHIN', '44'),
('69', 'RHONE', '84'),
('70', 'HAUTE-SAONE', '27'),
('71', 'SAONE-ET-LOIRE', '27'),
('72', 'SARTHE', '52'),
('73', 'SAVOIE', '84'),
('74', 'HAUTE-SAVOIE', '84'),
('75', 'PARIS', '11'),
('76', 'SEINE-MARITIME', '28'),
('77', 'SEINE-ET-MARNE', '11'),
('78', 'YVELINES', '11'),
('79', 'DEUX-SEVRES', '75'),
('80', 'SOMME', '32'),
('81', 'TARN', '76'),
('82', 'TARN-ET-GARONNE', '76'),
('83', 'VAR', '93'),
('84', 'VAUCLUSE', '93'),
('85', 'VENDEE', '52'),
('86', 'VIENNE', '75'),
('87', 'HAUTE-VIENNE', '75'),
('88', 'VOSGES', '44'),
('89', 'YONNE', '27'),
('90', 'TERRITOIRE DE BELFORT', '27'),
('91', 'ESSONNE', '11'),
('92', 'HAUTS-DE-SEINE', '11'),
('93', 'SEINE-SAINT-DENIS', '11'),
('94', 'VAL-DE-MARNE', '11'),
('95', 'VAL-D\'OISE', '11'),
('971', 'GUADELOUPE', '01'),
('972', 'MARTINIQUE', '02'),
('973', 'GUYANE', '03'),
('974', 'LA REUNION', '04'),
('976', 'MAYOTTE', '06');

-- --------------------------------------------------------

--
-- Structure de la table `regions`
--

DROP TABLE IF EXISTS `regions`;
CREATE TABLE `regions` (
  `id` varchar(2) NOT NULL,
  `libelle` varchar(50) NOT NULL,
  `est_outremer` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Régions de France';

--
-- Déchargement des données de la table `regions`
--

INSERT INTO `regions` (`id`, `libelle`, `est_outremer`) VALUES
('01', 'GUADELOUPE', 1),
('02', 'MARTINIQUE', 1),
('03', 'GUYANE', 1),
('04', 'LA REUNION', 1),
('06', 'MAYOTTE', 1),
('11', 'ILE-DE-FRANCE', 0),
('24', 'CENTRE-VAL DE LOIRE', 0),
('27', 'BOURGOGNE-FRANCHE-COMTE', 0),
('28', 'NORMANDIE', 0),
('32', 'HAUTS-DE-FRANCE', 0),
('44', 'GRAND EST', 0),
('52', 'PAYS DE LA LOIRE', 0),
('53', 'BRETAGNE', 0),
('75', 'NOUVELLE-AQUITAINE', 0),
('76', 'OCCITANIE', 0),
('84', 'AUVERGNE-RHONE-ALPES', 0),
('93', 'PROVENCE-ALPES-COTE D\'AZUR', 0),
('94', 'CORSE', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `departements`
--
ALTER TABLE `departements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_region` (`id_region`);

--
-- Index pour la table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `departements`
--
ALTER TABLE `departements`
  ADD CONSTRAINT `fk_region_id` FOREIGN KEY (`id_region`) REFERENCES `regions` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
