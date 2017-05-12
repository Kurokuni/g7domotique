-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 12 Mai 2017 à 09:28
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `g7database`
--

-- --------------------------------------------------------

--
-- Structure de la table `actionneur`
--

CREATE TABLE `actionneur` (
  `IDACTIONNEUR` int(11) NOT NULL,
  `power` int(11) NOT NULL,
  `command` int(11) NOT NULL,
  `HAG` int(11) NOT NULL,
  `IDROOM` int(11) NOT NULL,
  `IDETAT` int(11) NOT NULL,
  `IDCOMMAND` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `adress_home`
--

CREATE TABLE `adress_home` (
  `IDADRESSE` int(11) NOT NULL,
  `IDHOME` int(11) NOT NULL,
  `street_num` int(11) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `zipcode` int(5) NOT NULL,
  `country` varchar(50) NOT NULL,
  `floor_num` int(11) NOT NULL,
  `room_num` int(11) NOT NULL,
  `capteur_num` int(11) NOT NULL,
  `area` int(11) NOT NULL,
  `IDUSER` int(11) NOT NULL,
  `Etage_-1` tinyint(1) NOT NULL,
  `Etage_0` tinyint(1) NOT NULL DEFAULT '1',
  `Etage_1` tinyint(1) NOT NULL,
  `Etage_2` tinyint(1) NOT NULL,
  `Etage_3` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `adress_home`
--

INSERT INTO `adress_home` (`IDADRESSE`, `IDHOME`, `street_num`, `street`, `city`, `zipcode`, `country`, `floor_num`, `room_num`, `capteur_num`, `area`, `IDUSER`, `Etage_-1`, `Etage_0`, `Etage_1`, `Etage_2`, `Etage_3`) VALUES
(1, 1, 42, 'aaa', 'Paris', 75007, 'France', 4, 11, 30, 250, 1, 1, 1, 1, 1, 0),
(2, 2, 2, 'Place Claude Monet', 'Buc', 78530, 'France', 3, 13, 40, 250, 4, 0, 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `capteur`
--

CREATE TABLE `capteur` (
  `IDCAPTEUR` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `value` int(11) NOT NULL,
  `power` int(11) NOT NULL,
  `HAG` int(11) NOT NULL,
  `IDROOM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `command`
--

CREATE TABLE `command` (
  `IDCOMMAND` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `value` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `IDACTIONNEUR` int(11) NOT NULL,
  `IDUSER` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `data`
--

CREATE TABLE `data` (
  `IDDATA` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `IDCAPTEUR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `etat`
--

CREATE TABLE `etat` (
  `IDETAT` int(11) NOT NULL,
  `data` int(11) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `hag`
--

CREATE TABLE `hag` (
  `IDHAG` int(11) NOT NULL,
  `room` int(11) NOT NULL,
  `home` int(11) NOT NULL,
  `command` int(11) NOT NULL,
  `IDETAGE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `room`
--

CREATE TABLE `room` (
  `IDROOM` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `floor` int(11) NOT NULL,
  `home` int(11) NOT NULL,
  `HAG` int(11) NOT NULL,
  `IDHAG` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `IDUSER` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_num` int(11) NOT NULL,
  `pass_word` varchar(50) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `birth_day` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `photo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`IDUSER`, `name`, `lastname`, `email`, `phone_num`, `pass_word`, `pseudo`, `birth_day`, `role`, `photo`) VALUES
(1, 'Jacques', 'Burie', 'jacques.burie@isep.fr', 629193625, '0000', 'ISEPJB', 25081995, 2, 1),
(2, 'Théo', 'Dalle Nogare', 'theo.dalle-nogare@isep.fr', 665443911, '0000', 'ISEPTDN', 28091996, 2, 2),
(3, 'Agnès', 'Happy Kwetchieu', 'agnes.happy-kwetchieu@isep.fr', 622324422, '0000', 'ISEPAHK', 12031996, 2, 3),
(4, 'Orianne', 'Joannic', 'orianne.joannic@isep.fr', 627964701, '0000', 'ISEPJO', 4031996, 2, 4);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `actionneur`
--
ALTER TABLE `actionneur`
  ADD PRIMARY KEY (`IDACTIONNEUR`);

--
-- Index pour la table `adress_home`
--
ALTER TABLE `adress_home`
  ADD PRIMARY KEY (`IDADRESSE`);

--
-- Index pour la table `capteur`
--
ALTER TABLE `capteur`
  ADD PRIMARY KEY (`IDCAPTEUR`);

--
-- Index pour la table `command`
--
ALTER TABLE `command`
  ADD PRIMARY KEY (`IDCOMMAND`);

--
-- Index pour la table `etat`
--
ALTER TABLE `etat`
  ADD PRIMARY KEY (`IDETAT`);

--
-- Index pour la table `hag`
--
ALTER TABLE `hag`
  ADD PRIMARY KEY (`IDHAG`);

--
-- Index pour la table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`IDROOM`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IDUSER`),
  ADD UNIQUE KEY `photo` (`photo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
