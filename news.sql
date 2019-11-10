-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Dim 10 Novembre 2019 à 15:53
-- Version du serveur :  5.7.27-0ubuntu0.18.04.1
-- Version de PHP :  7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `animanails`
--

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `texte` text COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`id`, `image`, `title`, `texte`) VALUES
(1, 'assets/style/img/news/img1.jpg', 'Titre de la news', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt\r\n                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation\r\n                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit\r\n                    in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,\r\n                    sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt\r\n                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation\r\n                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit\r\n                    in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,\r\n                    sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(2, 'assets/style/img/news/img2.jpg', 'Titre de la news2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt\r\n                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation\r\n                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit\r\n                    in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,\r\n                    sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt\r\n                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation\r\n                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit\r\n                    in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,\r\n                    sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(11, 'assets/style/img/news/img2.jpg', 'test', '\r\n     aaaaaaaaaaaaaa               \r\n     aaaaaaaaaaaaaa               \r\n     aaaaaaaaaaaaaa               \r\n     aaaaaaaaaaaaaa               \r\n     aaaaaaaaaaaaaa               \r\n     aaaaaaaaaaaaaa               \r\n     aaaaaaaaaaaaaa               \r\n     aaaaaaaaaaaaaa               \r\n     aaaaaaaaaaaaaa               \r\n     aaaaaaaaaaaaaa               \r\n     aaaaaaaaaaaaaa               \r\n     aaaaaaaaaaaaaa               \r\n     aaaaaaaaaaaaaa               \r\n     aaaaaaaaaaaaaa               \r\n     aaaaaaaaaaaaaa               \r\n     aaaaaaaaaaaaaa               \r\n     aaaaaaaaaaaaaa               \r\n     aaaaaaaaaaaaaa               \r\n     aaaaaaaaaaaaaa               \r\n     aaaaaaaaaaaaaa               \r\n     aaaaaaaaaaaaaa               \r\n     aaaaaaaaaaaaaa               \r\n     aaaaaaaaaaaaaa               ');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
