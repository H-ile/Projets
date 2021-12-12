-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 12 sep. 2021 à 12:06
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
-- Base de données : `resavite`
--
CREATE DATABASE IF NOT EXISTS `resavite` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `resavite`;

--
-- Déchargement des données de la table `resa`
--

INSERT INTO `resa` (`id_reservation`, `id_user`, `id_salle`, `debut`, `fin`, `nb_personnes`) VALUES
(1, 1, 1, '2021-09-01 10:00:00', '2021-09-01 12:00:00', 3),
(2, 1, 2, '2021-09-08 14:00:00', '2021-09-08 15:30:00', 5),
(3, 2, 1, '2021-10-04 08:00:00', '2021-10-04 10:00:00', 2);

--
-- Déchargement des données de la table `salle`
--

INSERT INTO `salle` (`id_salle`, `nom`, `nb_places_maxi`) VALUES
(1, 'R1', 30),
(2, 'R2', 18),
(3, 'R3', 12),
(4, 'R4', 12),
(5, 'R5', 6),
(6, 'R6', 6);

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `login`, `password`, `nom`, `prenom`, `email`, `telephone`) VALUES
(1, 'bob', 'bob31', 'smith', 'bob', 'bob@m2l.fr', '3360102030401'),
(2, 'douglas', 'douglas31', 'davis', 'douglas', 'douglas@m2l.fr', '3360102030402'),
(3, 'jef', 'jef31', 'rams', 'jef', 'jef@m2l.fr', '3360102030403'),
(4, 'carlos', 'carlos31', 'garcia', 'carlos', 'carlos@m2l.fr', '3360102030404'),
(5, 'marie', 'marie31', 'williams', 'marie', 'marie@m2l.fr', '3360102030405'),
(6, 'helena', 'helena31', 'moore', 'helena', 'helena@m2l.fr', '3360102030406'),
(7, 'peter', 'peter31', 'taylor', 'peter', 'peter@m2l.fr', '3360102030407'),
(8, 'olga', 'olga31', 'wilson', 'olga', 'olga@m2l.fr', '3360405060708');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
