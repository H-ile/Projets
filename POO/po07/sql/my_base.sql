-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 28 mars 2018 à 16:49
-- Version du serveur :  10.1.26-MariaDB
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `my_base`
--
CREATE DATABASE IF NOT EXISTS `my_base` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `my_base`;

-- --------------------------------------------------------

--
-- Structure de la table `my_table`
--

DROP TABLE IF EXISTS `my_table`;
CREATE TABLE `my_table` (
  `id` int(11) NOT NULL,
  `my_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `my_table`
--

INSERT INTO `my_table` (`id`, `my_date`) VALUES
(1, '2018-03-28 16:37:54'),
(2, '2018-03-28 16:37:56'),
(3, '2018-03-28 16:37:57'),
(4, '2018-03-28 16:37:57'),
(5, '2018-03-28 16:37:57'),
(6, '2018-03-28 16:37:57'),
(7, '2018-03-28 16:37:58'),
(8, '2018-03-28 16:37:58'),
(9, '2018-03-28 16:40:36'),
(10, '2018-03-28 16:44:44'),
(11, '2018-03-28 16:45:04'),
(12, '2018-03-28 16:45:23'),
(13, '2018-03-28 16:45:31'),
(14, '2018-03-28 16:45:32'),
(15, '2018-03-28 16:45:32'),
(16, '2018-03-28 16:45:33'),
(17, '2018-03-28 16:45:33'),
(18, '2018-03-28 16:45:51'),
(19, '2018-03-28 16:47:50');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `my_table`
--
ALTER TABLE `my_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `my_table`
--
ALTER TABLE `my_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
