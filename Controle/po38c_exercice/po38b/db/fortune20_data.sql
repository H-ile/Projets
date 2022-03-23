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
USE `fortune20`;

--
-- Déchargement des données de la table `fortune`
--

INSERT INTO `fortune` (`id_fortune`, `rang`, `nom`, `siege`, `pays`, `ca`, `benefice`, `nb_employes`, `branche`, `directeur`, `evolution`) VALUES
(1, '1.', 'Walmart', 'Bentonville', 'États-Unis', '514405.00', '6670.00', 2200000, 'Commerce de détail', 'Douglas McMillon', '='),
(2, '2.', 'Sinopec', 'Pékin', 'Chine', '414649.90', '1537.00', 667793, 'Pétrole et Gaz', 'Wang Yupu', '1'),
(3, '3.', 'Royal Dutch Shell', 'La Haye', 'Pays-Bas', '396556.00', '23352.00', 81000, 'Pétrole et Gaz', 'Ben van Beurden', '2'),
(4, '4.', 'China National Petroleum Corporation', 'Pékin', 'Chine', '392976.60', '270.50', 1382401, 'Pétrole & Gaz', 'Zhang Jianhua', '='),
(5, '5.', 'State Grid', 'Pékin', 'Chine', '387056.00', '8174.00', 917717, 'Énergie', 'Kou Wei', '='),
(6, '6.', 'Saudi Aramco', 'Dhahran', 'Arabie saoudite', '355905.00', '110974.50', 76418, 'Énergie', 'Amin H. Nasser', 'entrée en 2018'),
(7, '7.', 'BP', 'Londres', 'Royaume-Uni', '303738.00', '9383.00', 73000, 'Pétrole et Gaz', 'Robert W. Dudley', '1'),
(8, '8.', 'ExxonMobil', 'Irving', 'États-Unis', '290212.00', '20840.00', 71000, 'Pétrole et Gaz', 'Darren  Woods', '1'),
(9, '9.', 'Volkswagen', 'Wolfsburg', 'Allemagne', '278341.50', '14322.50', 664496, 'Automobile', 'Matthias Müller', '-2'),
(10, '10.', 'Toyota Motor Corporation', 'Toyota', 'Japon', '272612.00', '16982.00', 370870, 'Automobile', 'Akio Toyoda', '-4'),
(11, '11.', 'Apple', 'Cupertino', 'États-Unis', '265595.00', '59531.00', 132000, 'Technologie', 'Tim Cook', '='),
(12, '12.', 'Berkshire Hathaway', 'Omaha', 'États-Unis', '247837.00', '4021.00', 389000, 'Finance', 'Warren Buffet', '-2'),
(13, '13.', 'Amazon', 'Seattle', 'États-Unis', '232887.00', '10073.00', 647500, 'Commerce électronique', 'Jeff Bezos', '5'),
(14, '14.', 'UnitedHealth Group', 'Minnetonka', 'États-Unis', '226247.00', '11986.00', 300000, 'Assurance et Bien-être', '', '1'),
(15, '15.', 'Samsung Electronics', 'Suwon', 'Corée du Sud', '221579.40', '39895.20', 309630, 'Technologie', '', '-3'),
(16, '16.', 'Glencore', 'Baar', 'Suisse', '219754.00', '3408.00', 85504, 'Mines', '', '-2'),
(17, '17.', 'McKesson', 'San Francisco', 'États-Unis', '214319.00', '34.00', 70000, 'Bien-être', '', '-4'),
(18, '18.', 'Daimler AG', 'Stuttgart', 'Allemagne', '197515.30', '8555.00', 298683, 'Automobile', '', '-2'),
(19, '19.', 'CVS Health', 'Woonsocket', 'États-Unis', '144579.00', '0.00', 295000, 'Assurance & Pharmacie', '', '-2'),
(20, '20.', 'Total', 'Courbevoie', 'France', '184106.00', '11446.00', 104460, 'Pétrole et Gaz', 'Patrick Pouyanné', '-2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
