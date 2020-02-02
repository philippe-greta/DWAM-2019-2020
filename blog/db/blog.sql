-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  Dim 02 fév. 2020 à 19:02
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
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `comment_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `author`, `comment`, `comment_date`) VALUES
(1, 1, 'Philippe', 'Mon commentaire sur le premier billet', '2019-07-11 11:18:31'),
(2, 2, 'Philippe', 'Mon commentaire sur le deuxième billet', '2019-07-11 11:18:57'),
(3, 1, 'Paul', 'Commentaire de Paul sur le premier billet', '2019-07-12 08:17:34'),
(4, 2, 'Pierre', 'Coucou les amis', '2019-07-12 09:12:58'),
(5, 2, 'petaramesh', 'C\'est sympa le blog', '2019-07-12 09:36:58'),
(6, 2, 'Paul', 'Bonjour tout le monde !', '2019-07-12 09:40:38'),
(7, 1, 'petaramesh', 'Bonsoir, il est tard', '2019-07-12 09:55:38'),
(8, 1, 'Paul', 'Salut tout le monde', '2019-07-12 10:23:00'),
(9, 1, 'PhilippeH', 'Un commentaire en passant vite fait', '2019-07-12 10:24:07'),
(10, 1, 'petaramesh', 'Comment ça va ?', '2019-07-12 10:25:11'),
(11, 1, 'PhilippeH', 'Ça boume, merci', '2019-07-13 11:13:42');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `creation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `creation_date`) VALUES
(1, 'Premier billet', 'Contenu du premier billet', '2019-07-11 10:37:29'),
(2, 'Deuxième billet', 'Contenu du deuxième billet', '2019-07-11 10:40:55'),
(3, 'Troisième billet', 'Contenu du troisième billet', '2019-07-11 10:40:55');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
