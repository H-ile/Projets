-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 02 fév. 2020 à 12:11
-- Version du serveur :  10.3.16-MariaDB
-- Version de PHP :  7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `marvel`
--
CREATE DATABASE IF NOT EXISTS `marvel` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `marvel`;

-- --------------------------------------------------------

--
-- Structure de la table `mcu`
--

DROP TABLE IF EXISTS `mcu`;
CREATE TABLE `mcu` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `phase` int(11) NULL,
  `us_release_date` date DEFAULT NULL,
  `directors` varchar(100) NOT NULL,
  `screenwriters` varchar(150) NOT NULL,
  `producers` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mcu`
--

INSERT INTO `mcu` (`id`, `title`, `phase`, `us_release_date`, `directors`, `screenwriters`, `producers`, `status`) VALUES
(1, 'Iron Man', 1, '2008-05-02', 'Jon Favreau', 'Mark Fergus & Hawk Ostby and Art Marcum & Matt Holloway', 'Avi Arad and Kevin Feige', 'completed'),
(2, 'The Incredible Hulk', 1, '2008-06-13', 'Louis Leterrier', 'Zak Penn', 'Avi Arad, Gale Anne Hurdand Kevin Feige', 'completed'),
(3, 'Iron Man 2', 1, '2010-05-07', 'Jon Favreau', 'Justin Theroux', 'Kevin Feige', 'completed'),
(4, 'Thor', 1, '2011-05-06', 'Kenneth Branagh', 'Ashley Edward Miller & Zack Stentz and Don Payne', 'Kevin Feige', 'completed'),
(5, 'Captain America: The First Avenger', 1, '2011-07-22', 'Joe Johnston', 'Christopher Markus & Stephen McFeely', 'Kevin Feige', 'completed'),
(6, 'Marvel\'s The Avengers', 1, '2012-05-04', 'Joss Whedon', 'Joss Whedon', 'Kevin Feige', 'completed'),
(7, 'Iron Man 3', 2, '2013-05-03', 'Shane Black', 'Drew Pearce and Shane Black', 'Kevin Feige', 'completed'),
(8, 'Thor: The Dark World', 2, '2013-11-08', 'Alan Taylor', 'Christopher L. Yost and Christopher Markus & Stephen McFeely', 'Kevin Feige', 'completed'),
(9, 'Captain America: The Winter Soldier', 2, '2014-04-04', 'Anthony and Joe Russo', 'Christopher Markus & Stephen McFeely', 'Kevin Feige', 'completed'),
(10, 'Guardians of the Galaxy', 2, '2014-08-01', 'James Gunn', 'James Gunn and Nicole Perlman', 'Kevin Feige', 'completed'),
(11, 'Avengers: Age of Ultron', 2, '2015-05-01', 'Joss Whedon', 'Joss Whedon', 'Kevin Feige', 'completed'),
(12, 'Ant-Man', 2, '2015-07-17', 'Peyton Reed', 'Edgar Wright & Joe Cornish and Adam McKay & Paul Rudd', 'Kevin Feige', 'completed'),
(13, 'Captain America: Civil War', 3, '2016-05-06', 'Anthony and Joe Russo', 'Christopher Markus & Stephen McFeely', 'Kevin Feige', 'completed'),
(14, 'Doctor Strange', 3, '2016-11-04', 'Scott Derrickson', 'Jon Spaihts and Scott Derrickson & C. Robert Cargill', 'Kevin Feige', 'completed'),
(15, 'Guardians of the Galaxy Vol. 2', 3, '2017-05-05', 'James Gunn', 'James Gunn', 'Kevin Feige', 'completed'),
(16, 'Spider-Man: Homecoming', 3, '2017-07-07', 'Jon Watts', 'Jonathan Goldstein & John Francis Daley andJon Watts & Christopher Ford andChris McKenna & Erik Sommers', 'Kevin Feige and Amy Pascal', 'completed'),
(17, 'Thor: Ragnarok', 3, '2017-11-03', 'Taika Waititi', 'Eric Pearson and Craig Kyle & Christopher L. Yost', 'Kevin Feige', 'completed'),
(18, 'Black Panther', 3, '2018-02-16', 'Ryan Coogler', 'Ryan Coogler & Joe Robert Cole', 'Kevin Feige', 'completed'),
(19, 'Avengers: Infinity War', 3, '2018-04-27', 'Anthony and Joe Russo', 'Christopher Markus & Stephen McFeely', 'Kevin Feige', 'completed'),
(20, 'Ant-Man and the Wasp', 3, '2018-07-06', 'Peyton Reed', 'Chris McKenna & Erik Sommers andPaul Rudd, Andrew Barrer & Gabriel Ferrari', 'Kevin Feige and Stephen Broussard', 'completed'),
(21, 'Captain Marvel', 3, '2019-03-08', 'Anna Boden and Ryan Fleck', 'Anna Boden & Ryan Fleck & Geneva Robertson-Dworet', 'Kevin Feige', 'completed'),
(22, 'Avengers: Endgame', 3, '2019-04-26', 'Anthony and Joe Russo', 'Christopher Markus & Stephen McFeely', 'Kevin Feige', 'completed'),
(23, 'Spider-Man: Far From Home', 3, '2019-07-02', 'Jon Watts', 'Chris McKenna & Erik Sommers', 'Kevin Feige and Amy Pascal', 'completed'),
(24, 'Black Widow', 4, '2020-05-01', 'Cate Shortland', 'Eric Pearson', 'Kevin Feige', 'Post-production'),
(25, 'The Eternals', 4, '2020-11-06', 'Chloé Zhao', 'Matthew K. Firpo & Ryan Firpo', 'Kevin Feige', 'Filming'),
(26, 'Shang-Chi and the Legend of the Ten Rings', 4, '2021-02-12', 'Destin Daniel Cretton', 'David Callaham', 'Kevin Feige', 'Pre-production'),
(27, 'Doctor Strange in the Multiverse of Madness', 4, '2021-05-07', 'TBA', 'Jade Bartlett', 'Kevin Feige', 'Pre-production'),
(28, 'Untitled Spider-Man: Far From Home sequel', 4, '2021-07-16', 'TBA', 'Chris McKenna & Erik Sommers', 'Kevin Feige and Amy Pascal', 'Pre-production'),
(29, 'Thor: Love and Thunder', 4, '2021-11-05', 'Taika Waititi', 'Taika Waititi', 'Kevin Feige', 'Pre-production'),
(30, 'Black Panther II', NULL, '2022-05-06', 'Ryan Coogler', 'Ryan Coogler', 'Kevin Feige', 'In development');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `mcu`
--
ALTER TABLE `mcu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `mcu`
--
ALTER TABLE `mcu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
