-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 24 mars 2021 à 16:28
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `strutsdb`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cnom` varchar(50) DEFAULT NULL,
  `cadresse` varchar(50) DEFAULT NULL,
  `ctel` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`cid`, `cnom`, `cadresse`, `ctel`) VALUES
(1, 'kevin', 'ambodiharana', '033 44 567 88'),
(3, 'rodi', 'itaosy', '033 44 555 88');

-- --------------------------------------------------------

--
-- Structure de la table `consultation`
--

DROP TABLE IF EXISTS `consultation`;
CREATE TABLE IF NOT EXISTS `consultation` (
  `consid` int(11) NOT NULL AUTO_INCREMENT,
  `cnom` varchar(50) DEFAULT NULL,
  `pnom` varchar(50) DEFAULT NULL,
  `qte` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `etat` varchar(20) DEFAULT NULL,
  `motif` text,
  `facture` text,
  `validation` text,
  `dateConsultation` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`consid`)
) ENGINE=MyISAM AUTO_INCREMENT=89 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `consultation`
--

INSERT INTO `consultation` (`consid`, `cnom`, `pnom`, `qte`, `total`, `etat`, `motif`, `facture`, `validation`, `dateConsultation`) VALUES
(66, 'kevin', 'alcool', 2, 6000, 'panier', 'simple maladie', 'F00001', 'oui', '2021-01-14 11:51:16'),
(67, 'kevin', 'alcool', 1, 3000, 'panier', 'simple maladie', 'F00001', 'oui', '2021-01-14 11:51:16'),
(68, 'kevin', 'alcool', 2, 6000, 'panier', 'simple maladie', 'F00001', 'oui', '2021-01-14 11:51:16'),
(69, 'kevin', 'seringe', 2, 2000, 'panier', 'operation', 'F0002', 'oui', '2021-01-14 11:51:16'),
(70, 'kevin', 'coton', 1, 3000, 'panier', 'operation', 'F0002', 'oui', '2021-01-14 11:51:16'),
(71, 'kevin', 'coton', 2, 6000, 'panier', 'operation', 'F0002', 'oui', '2021-01-14 11:51:16'),
(72, 'kevin', 'coton', 1, 3000, 'panier', 'operation', 'F0002', 'oui', '2021-01-14 11:51:16'),
(73, 'kevin', 'coton', 1, 3000, 'panier', 'operation', 'F0002', 'oui', '2021-01-14 11:51:16'),
(74, 'kevin', 'seringe', 1, 1000, 'panier', 'operation', 'F0002', 'oui', '2021-01-14 11:51:16'),
(75, 'kevin', 'alcool', 1, 3000, 'panier', 'operation', 'F0002', 'oui', '2021-01-14 11:51:16'),
(76, 'kevin', 'seringe', 1, 1000, 'panier', 'operation', 'F0002', 'oui', '2021-01-14 11:51:16'),
(77, 'kevin', 'seringe', 1, 1000, 'panier', 'operation', 'F0002', 'oui', '2021-01-14 11:51:16'),
(78, 'kevin', 'seringe', 2, 2000, 'panier', 'operation', 'F003', 'oui', '2021-01-14 11:51:16'),
(79, 'kevin', 'seringe', 1, 1000, 'panier', 'operation', 'F003', 'oui', '2021-01-14 11:51:16'),
(80, 'kevin', 'alcool', 2, 6000, 'panier', 'operation', 'F003', 'oui', '2021-01-14 11:51:16'),
(81, 'rodi', 'alcool', 1, 3000, 'panier', 'maladie', 'F005', 'oui', '2021-01-14 11:51:16'),
(82, 'kevin', 'alcool', 1, 3000, 'panier', 'operation surergique', 'F00006', 'oui', '2021-01-14 11:52:22'),
(83, 'kevin', 'seringe', 1, 1000, 'panier', 'operation surergique', 'F00006', 'oui', '2021-01-15 13:45:06'),
(84, 'kevin', 'coton', 1, 3000, 'panier', 'operation surergique', 'F00006', 'oui', '2021-01-15 13:45:16'),
(85, 'rodi', 'alcool', 1, 3000, 'panier', 'simple maladie', 'F0008', 'oui', '2021-01-15 14:05:31'),
(86, 'rodi', 'alcool', 1, 3000, 'panier', 'simple maladie', 'F0009', 'oui', '2021-01-15 14:58:25'),
(87, 'rodi', 'seringe', 3, 3000, 'panier', 'simple maladie', 'F0009', 'oui', '2021-01-15 14:58:33'),
(88, 'rodi', 'seringe', 30, 30000, 'panier', 'simple maladie', 'F0009', 'oui', '2021-01-15 14:58:46');

-- --------------------------------------------------------

--
-- Structure de la table `depense`
--

DROP TABLE IF EXISTS `depense`;
CREATE TABLE IF NOT EXISTS `depense` (
  `depid` int(11) NOT NULL AUTO_INCREMENT,
  `deptyp` varchar(50) DEFAULT NULL,
  `deptot` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`depid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

DROP TABLE IF EXISTS `fournisseur`;
CREATE TABLE IF NOT EXISTS `fournisseur` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `fnom` varchar(50) DEFAULT NULL,
  `ftel` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fournisseur`
--

INSERT INTO `fournisseur` (`fid`, `fnom`, `ftel`) VALUES
(1, 'koto', '034 66 777 80'),
(2, 'lita', '034 56 880 91'),
(16, 'rakoto', '034 88 606 90');

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pword` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`id`, `fname`, `lname`, `email`, `pword`) VALUES
(1, 'jao', 'jao', 'jao', 'jao'),
(2, 'admin', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `panierid` int(11) NOT NULL AUTO_INCREMENT,
  `cnom` varchar(50) DEFAULT NULL,
  `cqte` int(11) DEFAULT NULL,
  PRIMARY KEY (`panierid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `pnom` varchar(50) DEFAULT NULL,
  `pprix` int(11) DEFAULT NULL,
  `pqte` int(11) DEFAULT NULL,
  `fnom` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`pid`, `pnom`, `pprix`, `pqte`, `fnom`) VALUES
(1, 'alcool', 3000, 61, 'koto'),
(3, 'seringe', 1000, -12, 'koto'),
(4, 'coton', 3000, 12, 'Njiva');

-- --------------------------------------------------------

--
-- Structure de la table `reaprov`
--

DROP TABLE IF EXISTS `reaprov`;
CREATE TABLE IF NOT EXISTS `reaprov` (
  `reid` int(11) NOT NULL AUTO_INCREMENT,
  `reprod` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`reid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ressource`
--

DROP TABLE IF EXISTS `ressource`;
CREATE TABLE IF NOT EXISTS `ressource` (
  `repid` int(11) NOT NULL AUTO_INCREMENT,
  `rmotif` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`repid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
