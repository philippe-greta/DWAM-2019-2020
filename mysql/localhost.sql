-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  Dim 26 mai 2019 à 07:10
-- Version du serveur :  10.1.33-MariaDB
-- Version de PHP :  7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `testmysql`
--
CREATE DATABASE IF NOT EXISTS `testmysql` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `testmysql`;

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `prenom`, `nom`, `email`) VALUES
(1, 'Jean', 'Dupont', 'jean.dupont@dupont.com'),
(2, 'Jane', 'Doe', 'jane.doe@hotmail.com'),
(5, 'Pierre', 'Juste', 'pierre@juste.com'),
(6, 'Anne', 'White', 'anne@white.com'),
(7, 'Paul', 'White', 'paul@white.com'),
(8, 'Pierre', 'Dupont', 'pierre@dupont.com'),
(9, 'Marie', 'Blanc', 'marie@blanc.com'),
(10, 'John', 'Doe', 'john@doe.com'),
(11, 'Pierre', 'Black', 'pierre@black.com'),
(12, 'Anne', 'Black', 'anne@black.com'),
(13, 'Paul', 'Royer', 'paul.royer@google.com'),
(14, 'Pierre', 'Roux', 'pierre@google.com'),
(15, 'Jacques', 'Blanc', 'jacques.blanc@google.com'),
(16, 'Pierre', 'Roux', 'pierre@roux.com'),
(17, 'Philippe', 'Durand', 'philippe.durand@google.com');

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `id` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `produit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `montant` double NOT NULL,
  `date_commande` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `commandes`
--

INSERT INTO `commandes` (`id`, `id_client`, `produit`, `montant`, `date_commande`) VALUES
(1, 11, 'Site vitrine HTML', 500, '2018-08-01'),
(2, 9, 'Boutique WordPress', 2000, '2018-09-04'),
(3, 6, 'Site vitrine HTML', 600, '2018-09-12'),
(4, 1, 'Boutique Magento', 3250, '2018-10-10'),
(5, 9, 'Plugin WordPress', 800, '2018-12-18'),
(6, 2, 'Boutique Prestashop', 2500, '2019-01-03'),
(7, 2, 'Plugin Prestashop', 1600, '2019-01-08'),
(8, 7, 'Site vitrine WordPress', 1500, '2019-02-13'),
(9, 8, 'Site vitrine WordPress', 1500, '2019-02-25'),
(10, 10, 'Application Android', 4500, '2019-03-04'),
(11, 13, 'Site vitrine WordPress', 1500, '2019-03-08'),
(12, 11, 'Site vitrine HTML', 800, '2019-03-12'),
(13, 12, 'Site vitrine HTML', 750, '2019-03-17'),
(14, 7, 'Plugin WordPress', 600, '2019-03-25');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
