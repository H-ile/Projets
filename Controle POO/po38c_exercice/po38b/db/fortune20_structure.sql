-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 16 nov. 2021 à 18:26
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `fortune20`
--
CREATE DATABASE IF NOT EXISTS `fortune20` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `fortune20`;

-- --------------------------------------------------------

--
-- Structure de la table `fortune`
--

DROP TABLE IF EXISTS `fortune`;
CREATE TABLE `fortune` (
  `id_fortune` int(11) NOT NULL,
  `rang` char(5) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `siege` varchar(50) DEFAULT NULL,
  `pays` varchar(50) DEFAULT NULL,
  `ca` decimal(10,2) DEFAULT NULL,
  `benefice` decimal(10,2) DEFAULT NULL,
  `nb_employes` int(10) DEFAULT NULL,
  `branche` varchar(50) DEFAULT NULL,
  `directeur` varchar(50) DEFAULT NULL,
  `evolution` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `fortune`
--
ALTER TABLE `fortune`
  ADD PRIMARY KEY (`id_fortune`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `fortune`
--
ALTER TABLE `fortune`
  MODIFY `id_fortune` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
