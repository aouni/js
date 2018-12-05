-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 04 Décembre 2018 à 10:36
-- Version du serveur :  5.5.39
-- Version de PHP :  5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `dbtest`
--

-- --------------------------------------------------------

--
-- Structure de la table `tab`
--

CREATE TABLE IF NOT EXISTS `tab` (
`id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `Poste` varchar(512) NOT NULL,
  `post_grade` varchar(256) NOT NULL,
  `Age` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Contenu de la table `tab`
--

INSERT INTO `tab` (`id`, `nom`, `Poste`, `post_grade`, `Age`) VALUES
(1, 'aic', 'php', 'senior', 30),
(2, 'user1', 'dba', 'Administrateur', 33),
(3, 'user2', '.net', 'senior', 31),
(4, 'user3', 'web master', 'senior', 29),
(5, 'user24', 'php', 'senior', 29),
(6, 'user44', 'graphiste', 'debutant', 25),
(7, 'user19', 'graphiste', 'senior', 32),
(8, 'user30', '.net', 'senior', 34),
(9, 'user080', 'php', 'senior', 31),
(10, 'user_Mob_55', 'mobile', 'senior', 33),
(11, 'user_Mob_62', 'mobile', 'debutant', 30),
(12, 'user118', 'ing java/j2ee', 'debutant', 29),
(13, 'user_javasite_21', 'ing java/j2ee', 'senior', 37),
(14, 'user_net_pro', '.net', 'senior', 37),
(15, 'admin1', 'php', 'Chef de  projet', 38),
(16, 'admin_mob', 'mobile', 'Chef de projet', 38),
(17, 'admin_graph', 'graphiste', 'D.A', 36),
(18, 'admin4', 'ing java/j2ee', 'Chef de projet', 40),
(19, 'user_javasite_21', 'ing java/j2ee', 'senior', 37),
(20, 'admin2', '.net', 'Chef de projet', 40);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `tab`
--
ALTER TABLE `tab`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `tab`
--
ALTER TABLE `tab`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
