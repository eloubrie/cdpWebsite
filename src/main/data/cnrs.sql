-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 27 Septembre 2014 à 15:53
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `cnrs`
--

-- --------------------------------------------------------

--
-- Structure de la table `atelier`
--

CREATE TABLE IF NOT EXISTS `atelier` (
  `titre` varchar(100) NOT NULL,
  `thematique` varchar(150) NOT NULL,
  `type` varchar(50) NOT NULL,
  `horaire` date NOT NULL,
  `nomlab` varchar(50) NOT NULL,
  `Lieu` varchar(150) NOT NULL,
  `durée` int(11) NOT NULL,
  `capacité` int(11) NOT NULL,
  PRIMARY KEY (`titre`),
  UNIQUE KEY `titre` (`titre`),
  KEY `atelier_ibfk_1` (`nomlab`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `atelier`
--

INSERT INTO `atelier` (`titre`, `thematique`, `type`, `horaire`, `nomlab`, `Lieu`, `durée`, `capacité`) VALUES
('a', 'a', 'a', '0000-00-00', 'a', 'a', 0, 0),
('b', 'bb', 'b', '0000-00-00', 'b', 'b', 0, 0),
('c', 'c', 'c', '2014-09-01', 'c', 'c', 1, 1),
('cdscsdcsd', 'e', 's', '2014-09-01', 'd', 'f', 4, 1),
('dbz', 'e', 's', '2014-09-01', 'd', 'f', 4, 1),
('dedezd', 'c', 'c', '2014-09-01', 'c', 'c', 1, 1),
('fdsfds', 'fefe', 'gtgt', '2014-09-01', 'recherche1', 'gtgrgtr', 1, 1),
('super expo', 'on verra bien', 'pas important', '2014-09-01', 'cnrs', 'quelque part', 1, 1),
('super_expo', 'on verra bien', 'pas important', '2014-09-01', 'cnrs', 'quelque part', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `labo`
--

CREATE TABLE IF NOT EXISTS `labo` (
  `Nomlabo` varchar(150) NOT NULL,
  `Nomresp` varchar(50) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `motdepasse` varchar(20) NOT NULL,
  PRIMARY KEY (`Nomlabo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `labo`
--

INSERT INTO `labo` (`Nomlabo`, `Nomresp`, `tel`, `mail`, `motdepasse`) VALUES
('recherche1', 'youssef', '04251547', 'lesahri@hotmail.fr', 'omarsa'),
('recherche2', 'youssef', '04251547', 'lesahri@hotmail.fr', 'omarsa'),
('recherche3', 'youssef', '04251547', 'lesahri@hotmail.fr', 'omarsa'),
('recherche5', 'youssef', '04251547', 'lesahri@hotmail.fr', 'omarsa'),
('recherche7', 'youssef', '04251547', 'lesahri@hotmail.fr', 'omarsa');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
