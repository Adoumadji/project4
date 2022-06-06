-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 06 juin 2022 à 15:35
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
-- Base de données : `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `billet`
--

CREATE TABLE `billet` (
  `nom` varchar(250) NOT NULL,
  `numero` int(11) NOT NULL,
  `somme` int(11) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tabl`
--

CREATE TABLE `tabl` (
  `id` int(100) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `numero` int(100) NOT NULL,
  `date` datetime NOT NULL,
  `destination` varchar(250) NOT NULL,
  `somme` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tabl`
--

INSERT INTO `tabl` (`id`, `nom`, `numero`, `date`, `destination`, `somme`) VALUES
(2, 'Kidmo', 678876554, '2022-06-08 00:00:00', 'BINIdqng', 0),
(4, 'samson djimingar', 44444, '2022-06-11 00:00:00', 'VILLE', 400),
(7, 'bienvenue', 398900, '2022-06-23 00:00:00', 'VILLE', 9999),
(14, 'SAMSON', 222, '2022-06-02 00:00:00', '', 400);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `billet`
--
ALTER TABLE `billet`
  ADD PRIMARY KEY (`numero`);

--
-- Index pour la table `tabl`
--
ALTER TABLE `tabl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `billet`
--
ALTER TABLE `billet`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tabl`
--
ALTER TABLE `tabl`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
