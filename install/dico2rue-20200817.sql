-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Lun 17 Août 2020 à 19:07
-- Version du serveur :  5.7.31-0ubuntu0.18.04.1
-- Version de PHP :  7.2.24-0ubuntu0.18.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dico2rue`
--

-- --------------------------------------------------------

--
-- Structure de la table `comptes`
--

CREATE TABLE `comptes` (
  `id` int(11) NOT NULL,
  `id_user` bigint(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `comptes`
--

INSERT INTO `comptes` (`id`, `id_user`, `username`, `email`, `password`) VALUES
(1, 137663194467296, 'unicorn', 'boudeffa@gmail.com', '$2y$12$xWEy0/vLyk0ExV8qB.7ITuH5i05ljFbANC0XAihODBrigvnWXgaT.'),
(2, 419373195181546, 'shadowofthedusk', 'claude.lebrun@mail.com', '$2y$12$VOVaTqtpJRxxkO0ZD4PLv.dm5HiNzh1LNT6h8ggEUSlceWB8sGo.q'),
(3, 436463195351032, 'tetedecul', 'tetedecul@mail.com', '$2y$12$6pQ/l211D5yHqIXf0yg72u5Z6iBFY.00wylX2z/V9d8pHMgKxgxNi'),
(4, 791183195351580, 'tetedebite', 'tetedebite@mail.com', '$2y$12$N8GM7j0yzxJvAw2XAFsljOA6Ac0q71YZGtGEon.z35jaOX8KEqDzK');

-- --------------------------------------------------------

--
-- Structure de la table `mots`
--

CREATE TABLE `mots` (
  `id` int(11) NOT NULL,
  `id_mot` bigint(50) NOT NULL,
  `mot` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `definition` varchar(255) NOT NULL,
  `exemple` varchar(255) NOT NULL,
  `post_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `mots`
--

INSERT INTO `mots` (`id`, `id_mot`, `mot`, `username`, `definition`, `exemple`, `post_time`) VALUES
(1, 678703194467602, 'Kaira', 'unicorn', 'Racaille en verlan', 'T pas un kaira alors arr&ecirc;te de faire ton thug', 1597233801),
(2, 507073194666598, 'Bourzouf', 'unicorn', 'Argent fictif', 'Le pelo il les a tellement grosses qu&#39;il a moulte bourzouf', 1597333299),
(3, 947883194674986, 'Crevard', 'unicorn', 'Quelqu&#39;un qui n&#39;a pas peur de la loi', 'T&#39;as vu t&#39;est un d&eacute;gonfl&eacute; paske moi mon nom c&#39;est Cr3varD', 1597337493),
(4, 787663195181786, 'FDP', 'shadowofthedusk', 'En argot internet qui veut dire Fils De Pute', 'Le kaira c&#39;est un vrai FDP', 1597590893),
(5, 640353195351196, 'On s&#39;en bat les couilles', 'tetedecul', 'Autre fois se disait : &quot;j&#39;en ai rien &agrave; foutre&quot;', 'On s&#39;en bat les couilles de la police', 1597675598),
(6, 828373195351676, 'On s&#39;en balek', 'tetedebite', 'Se m&eacute;fier', 'Les cond&eacute;s on s&#39;en balek', 1597675838);

-- --------------------------------------------------------

--
-- Structure de la table `votes`
--

CREATE TABLE `votes` (
  `id` int(11) NOT NULL,
  `id_mot` bigint(50) NOT NULL,
  `id_user` bigint(50) NOT NULL,
  `up` tinyint(1) NOT NULL,
  `down` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `votes`
--

INSERT INTO `votes` (`id`, `id_mot`, `id_user`, `up`, `down`) VALUES
(1, 678703194467602, 137663194467296, 1, 0),
(2, 787663195181786, 419373195181546, 0, 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `comptes`
--
ALTER TABLE `comptes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mots`
--
ALTER TABLE `mots`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `comptes`
--
ALTER TABLE `comptes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `mots`
--
ALTER TABLE `mots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
