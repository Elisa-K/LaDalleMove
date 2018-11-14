-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  mer. 14 nov. 2018 à 15:45
-- Version du serveur :  5.6.34-log
-- Version de PHP :  7.2.1

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

CREATE TABLE `avatar` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `genre` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `avatar`
--

INSERT INTO `avatar` (`id`, `url`, `genre`) VALUES
(1, 'web/images/avatar_femme.svg', 'F'),
(2, 'web/images/avatar_homme.svg', 'M');

-- --------------------------------------------------------

--
-- Structure de la table `profil_result`
--

CREATE TABLE `profil_result` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `descript` text NOT NULL,
  `score_min` int(11) NOT NULL,
  `score_max` int(11) NOT NULL,
  `genre` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `profil_result`
--

INSERT INTO `profil_result` (`id`, `name`, `descript`, `score_min`, `score_max`, `genre`) VALUES
(1, 'Un Dalleux furieux', 'D’un naturel combatif, tu aimes te mesurer aux autres et aucun sport ne te résiste. Tu as su relever les défis, gravir les marches du dallomètre et montrer tes furieux talents de Dalleux. La Dalle coule dans tes veines !', 8, 15, 'M'),
(2, 'Un Dalleux curieux', 'Désireux de découvrir de nouveaux sports, tu as de l’énergie à revendre et tu ne lâches rien. Curieux tu es, mais furieux pas encore, garde la dalle ! ', 4, 7, 'M'),
(3, 'Un Dalleux en herbe', 'De nature ambitieux, tu as testé plusieurs disciplines accomplies avec bravoure et révélé ton talent de Dalleux en herbe. Bienvenue dans la grande famille de #LaDalleAngevine !', 3, 3, 'M'),
(4, 'Dalleuse furieuse', 'D’un naturel combative, tu aimes te mesurer aux autres et aucun sport ne te résiste. Tu as su relever les défis, gravir les marches du dallomètre et montrer tes furieux talents de Dalleuse. La Dalle coule dans tes veines ! ', 8, 15, 'F'),
(5, 'Dalleuse curieuse', 'Désireuse de découvrir de nouveaux sports, tu as de l’énergie à revendre et tu ne lâches rien. Curieuse tu es, mais furieuse pas encore, garde la dalle !', 4, 7, 'F'),
(6, 'Dalleuse en herbe', 'De nature ambitieuse, tu as testé plusieurs disciplines accomplies avec bravour et révélé ton talent de Dalleuse en herbe. Bienvenue dans la grande famille de #LaDalleAngevine !', 3, 3, 'F');

-- --------------------------------------------------------

--
-- Structure de la table `sport`
--

CREATE TABLE `sport` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `coordonnees` varchar(255) NOT NULL,
  `descript` text NOT NULL,
  `stand` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(10, 'Danse', '', '28,42,47,58', 'Mettras- tu le feu au dancefloor ?', 10),
(11, 'Football de table', '', '63,28,96,145', 'Ce n’est pas juste un débat entre Messi et Ronaldo à la fin d’un repas…', 11),
(12, 'Échiquier', '', '54,30,214,354', 'Le cerveau est un muscle comme un autre…', 12),
(13, 'Ultimate / Frisbee', '', '72,5,398,412', 'Ce n’est pas qu’un sport de plage !', 13),
(14, 'Hockey', '', '77,16,93,45', 'Pas b’soin de l’accent Québécois pour manier la cross, tu peux y aller !', 14),
(15, 'Arts martiaux', '', '69,19,974,65', 'Révèle le Jackie Chan qui est en toi ! ', 15);

-- --------------------------------------------------------

--
-- Structure de la table `sport_user`
--

CREATE TABLE `sport_user` (
  `id_sport` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `vote` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sport_user`
--

INSERT INTO `sport_user` (`id_sport`, `id_user`, `vote`) VALUES
(2, 6, 2),
(3, 6, NULL),
(3, 8, 1),
(4, 6, NULL),
(5, 8, 1),
(5, 9, 3),
(7, 6, 3),
(8, 8, 3),
(9, 8, 1),
(10, 6, 3),
(10, 8, 2),
(10, 9, NULL),
(13, 8, 3),
(13, 9, 2),
(14, 8, 2),
(15, 8, 3);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(25) NOT NULL,
  `stopDay` int(11) NOT NULL,
  `id_avatar` int(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `stopDay`, `id_avatar`, `password`) VALUES
(6, 'Christopher', 1, 2, '$2y$11$jwy7GiaEhqtbsUB5qskXouU3Fw8Udko4tcTWu1UU2gTDgCFXFbWke'),
(7, 'Romain', 0, 2, '$2y$11$rv3npM7r917NsWDoNw1cNuIJumJWYsejOgYXo6BaUew2zl.b27Inu'),
(8, 'Mathilde', 1, 1, '$2y$11$ZWK.ZGa9FxRVJoX.EkPUzeAs64TRIAtKJwbp6lqzs6rROczigKdZK'),
(9, 'Elisa', 1, 1, '$2y$11$1NqJEPcud/HAEvKI4cEyT.AiCJjbusiXsXJZG1RMi6DmVUN.aTJam');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `avatar`
--
ALTER TABLE `avatar`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `profil_result`
--
ALTER TABLE `profil_result`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sport`
--
ALTER TABLE `sport`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sport_user`
--
ALTER TABLE `sport_user`
  ADD PRIMARY KEY (`id_sport`,`id_user`),
  ADD KEY `Sport_user_user_FK` (`id_user`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_avatar_FK` (`id_avatar`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `avatar`
--
ALTER TABLE `avatar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `profil_result`
--
ALTER TABLE `profil_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `sport`
--
ALTER TABLE `sport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
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
