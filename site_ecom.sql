-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 31 Mars 2015 à 10:35
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.6.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `site_ecom`
--

-- --------------------------------------------------------

--
-- Structure de la table `appartenir`
--

CREATE TABLE IF NOT EXISTS `appartenir` (
  `Qte` int(11) DEFAULT NULL,
  `id_commande` int(11) NOT NULL DEFAULT '0',
  `Id_produit` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_commande`,`Id_produit`),
  KEY `Id_produit` (`Id_produit`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `nom_client` varchar(30) DEFAULT NULL,
  `prenom_client` varchar(30) DEFAULT NULL,
  `adresse_client` varchar(50) DEFAULT NULL,
  `CP_client` char(5) DEFAULT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `id_commande` int(11) NOT NULL AUTO_INCREMENT,
  `num_client` int(11) NOT NULL DEFAULT '0',
  `Designation` varchar(30) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  PRIMARY KEY (`id_commande`,`num_client`),
  KEY `num_client` (`num_client`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `editeur`
--

CREATE TABLE IF NOT EXISTS `editeur` (
  `Id_editeur` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_editeur` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`Id_editeur`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `editeur`
--

INSERT INTO `editeur` (`Id_editeur`, `Nom_editeur`) VALUES
(1, 'Ubisoft'),
(2, 'Capcom'),
(3, 'EA Sports'),
(4, 'Electronic Arts'),
(5, 'Rockstar Games'),
(6, 'Square Enix');

-- --------------------------------------------------------

--
-- Structure de la table `exister`
--

CREATE TABLE IF NOT EXISTS `exister` (
  `Prix` float DEFAULT NULL,
  `Id_produit` int(11) NOT NULL DEFAULT '0',
  `NumPlat` int(11) NOT NULL DEFAULT '0',
  `Date_sortie` date DEFAULT NULL,
  PRIMARY KEY (`Id_produit`,`NumPlat`),
  KEY `NumPlat` (`NumPlat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `exister`
--

INSERT INTO `exister` (`Prix`, `Id_produit`, `NumPlat`, `Date_sortie`) VALUES
(59.99, 6, 5, '2015-03-20'),
(59.99, 6, 3, '2015-03-20'),
(59.99, 5, 5, '2014-11-18'),
(49.99, 5, 4, '2013-09-17'),
(59.99, 5, 3, '2014-11-18'),
(49.99, 5, 2, '2013-09-17'),
(49.99, 5, 1, '2015-04-14'),
(59.99, 4, 4, '2015-03-19'),
(59.99, 4, 3, '2015-03-19'),
(59.99, 4, 2, '2015-03-19'),
(49.99, 4, 1, '2015-09-25'),
(34.99, 3, 7, '2015-09-25'),
(29.99, 3, 6, '2015-09-25'),
(59.99, 3, 5, '2015-09-25'),
(49.99, 3, 4, '2015-09-25'),
(59.99, 3, 3, '2015-09-25'),
(49.99, 3, 2, '2015-09-25'),
(49.99, 3, 1, '2015-09-25'),
(39.99, 2, 5, '2015-03-10'),
(39.99, 2, 3, '2015-03-10'),
(59.99, 1, 4, '2014-11-13'),
(59.99, 1, 2, '2014-11-13'),
(49.99, 1, 1, '2015-03-10');

-- --------------------------------------------------------

--
-- Structure de la table `plateforme`
--

CREATE TABLE IF NOT EXISTS `plateforme` (
  `NumPlat` int(11) NOT NULL AUTO_INCREMENT,
  `NomPlat` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`NumPlat`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `plateforme`
--

INSERT INTO `plateforme` (`NumPlat`, `NomPlat`) VALUES
(1, 'PC'),
(2, 'PS3'),
(3, 'PS4'),
(4, 'Xbox 360'),
(5, 'Xbox One'),
(6, 'Wii'),
(7, 'PSVita'),
(8, '3DS');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `Id_produit` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_Produit` varchar(40) DEFAULT NULL,
  `Id_editeur` int(11) NOT NULL,
  `Stock` int(11) DEFAULT NULL,
  `Etat` varchar(15) DEFAULT NULL,
  `photo` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`Id_produit`),
  KEY `Id_editeur` (`Id_editeur`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`Id_produit`, `Nom_Produit`, `Id_editeur`, `Stock`, `Etat`, `photo`) VALUES
(1, 'Assassin''s Creed Rogue', 1, 100, 'Neuf', 'ACR.jpg'),
(2, 'Devil May Cry', 2, 100, 'Neuf', 'DmC.jpg'),
(3, 'Fifa 15', 3, 100, 'Neuf', 'Fifa15.jpg'),
(4, 'BattleField Hardline', 4, 100, 'Neuf', 'BattleField Hardline.jpg'),
(5, 'GTA V', 5, 100, 'Neuf', 'GTA V.jpg'),
(6, 'Final Fantasy Type-0 HD', 6, 100, 'Neuf', 'Final Fantasy Type-0 HD.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
