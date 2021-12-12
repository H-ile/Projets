-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 30 mars 2021 à 14:26
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `terminator`
--
USE `terminator`;

--
-- Déchargement des données de la table `acteur`
--

INSERT INTO `acteur` (`id_acteur`, `prenom`, `nom`) VALUES
(1, 'Arnold', 'Schwarzenegger'),
(2, 'Linda', 'Hamilton'),
(3, 'Michael', 'Biehn'),
(4, 'Edward', 'Furlong');

--
-- Déchargement des données de la table `film`
--

INSERT INTO `film` (`id_film`, `titre`, `realisateur`, `annee`) VALUES
(1, 'The Terminator', 'James Cameron', '1984'),
(2, 'Terminator 2: Judgment Day', 'James Cameron', '1991'),
(3, 'Terminator 3: Rise of the Machines', 'Jonathan Mostow', '2003'),
(4, 'Terminator Salvation', 'Joseph McGinty Nichol', '2009'),
(5, 'Terminator Genisys', 'Alan Taylor', '2015'),
(6, 'Terminator: Dark Fate', 'Tim Miller', '2019');

--
-- Déchargement des données de la table `film_acteur`
--

INSERT INTO `film_acteur` (`id_film`, `id_acteur`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(1, 2),
(2, 2),
(6, 2),
(1, 3),
(2, 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
