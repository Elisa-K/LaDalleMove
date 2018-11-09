-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 09 nov. 2018 à 15:28
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ladallemove`
--

-- --------------------------------------------------------

--
-- Structure de la table `avatar`
--

DROP TABLE IF EXISTS `avatar`;
CREATE TABLE IF NOT EXISTS `avatar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `avatar`
--

INSERT INTO `avatar` (`id`, `url`) VALUES
(1, '/web/img/avatar1.png'),
(2, '/web/img/avatar2.png');

-- --------------------------------------------------------

--
-- Structure de la table `profil_result`
--

DROP TABLE IF EXISTS `profil_result`;
CREATE TABLE IF NOT EXISTS `profil_result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `descript` text NOT NULL,
  `score_min` int(11) NOT NULL,
  `score_max` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `profil_result`
--

INSERT INTO `profil_result` (`id`, `name`, `descript`, `score_min`, `score_max`) VALUES
(1, 'Un Dalleux furieux', 'D’un naturel combatif, tu aimes te mesurer aux autres et aucun sport ne te résiste. Tu as su relever les défis, gravir les marches du dallomètre et montrer tes furieux talents de Dalleux. La Dalle coule dans tes veines !', 15, 8),
(2, 'Un Dalleux curieux', 'Désireux de découvrir de nouveaux sports, tu as de l’énergie à revendre et tu ne lâches rien. Curieux tu es, mais furieux pas encore, garde la dalle ! ', 4, 7),
(3, 'Un Dalleux en herbe', 'De nature ambitieux, tu as testé plusieurs disciplines accomplies avec bravoure et révélé ton talent de Dalleux en herbe. Bienvenue dans la grande famille de #LaDalleAngevine !', 3, 3);

-- --------------------------------------------------------

--
-- Structure de la table `sport`
--

DROP TABLE IF EXISTS `sport`;
CREATE TABLE IF NOT EXISTS `sport` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `coordonnees` varchar(255) NOT NULL,
  `descript` text NOT NULL,
  `stand` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sport`
--

INSERT INTO `sport` (`id`, `name`, `image`, `coordonnees`, `descript`, `stand`) VALUES
(1, 'Escrime', '', '3,46,15,15', 'Mets- toi en mode Zorro !', 1),
(2, 'Football Américain', '', '10,43,20,20', 'Réveille le Yankee qui est en toi !', 2),
(3, 'Baseball ', '', '38,41,30,30', 'Si tu sais courir vite c’est pour toi ! ', 3),
(4, 'Quidditch', '', '25,51,45,21', 'Chers sorciers, chères sorcières prenez de la hauteur et envolez- vous !', 4),
(5, 'Capoeira', '', '15,70,17,58', 'L’air de Copacabana envahit les bords de Maine !', 5),
(6, 'Kin ball', '', '19,76,74,92', 'Le deuxième sport préféré des Québecois après le hockey, tabernac !', 6),
(7, 'Tir à l’arc', '', '44,50,84,32', 'Glisse- toi dans la peau de Robin des bois !', 7),
(8, 'Tir sportif', '', '30,87,61,24', 'Promis tu ne blesseras personne !', 8),
(9, 'L’aviron', '', '17,48,63,21', 'Tu vas devoir ramer… Mais comme tout le monde !', 9),
(10, 'Dance', '', '28,42,47,58', 'Mettras- tu le feu au dancefloor ?', 10),
(11, 'Football de table', '', '63,28,96,145', 'Ce n’est pas juste un débat entre Messi et Ronaldo à la fin d’un repas…', 11),
(12, 'Échiquier', '', '54,30,214,354', 'Le cerveau est un muscle comme un autre…', 12),
(13, 'Ultimate / Frisbee', '', '72,5,398,412', 'Ce n’est pas qu’un sport de plage !', 13),
(14, 'Hockey', '', '77,16,93,45', 'Pas b’soin de l’accent Québécois pour manier la cross, tu peux y aller !', 14),
(15, 'Arts martiaux', '', '69,19,974,65', 'Révèle le Jackie Chan qui est en toi ! ', 15);

-- --------------------------------------------------------

--
-- Structure de la table `sport_user`
--

DROP TABLE IF EXISTS `sport_user`;
CREATE TABLE IF NOT EXISTS `sport_user` (
  `id_sport` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `vote` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_sport`,`id_user`),
  KEY `Sport_user_user_FK` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sport_user`
--

INSERT INTO `sport_user` (`id_sport`, `id_user`, `vote`) VALUES
(7, 6, NULL),
(9, 6, NULL),
(12, 6, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(25) NOT NULL,
  `stopDay` int(11) NOT NULL,
  `id_avatar` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_avatar_FK` (`id_avatar`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `stopDay`, `id_avatar`, `password`) VALUES
(5, '1234', 0, 1, '$2y$11$ilTvCs5GoqOXTRgrReCZOuSRzvaikACKh/LWJ5HUXWBkvItBh.FWS'),
(6, 'testPseudo', 0, 2, '$2y$11$jwy7GiaEhqtbsUB5qskXouU3Fw8Udko4tcTWu1UU2gTDgCFXFbWke');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `sport_user`
--
ALTER TABLE `sport_user`
  ADD CONSTRAINT `Sport_user_sport_FK` FOREIGN KEY (`id_sport`) REFERENCES `sport` (`id`),
  ADD CONSTRAINT `Sport_user_user_FK` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_avatar_FK` FOREIGN KEY (`id_avatar`) REFERENCES `avatar` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
