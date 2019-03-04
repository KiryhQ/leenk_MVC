-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 04 mars 2019 à 12:52
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `leenk_test2`
--

-- --------------------------------------------------------

--
-- Structure de la table `alert`
--

CREATE TABLE `alert` (
  `id_alert` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `alert`
--

INSERT INTO `alert` (`id_alert`, `id_user`) VALUES
(1, 1),
(5, 2),
(6, 3),
(7, 4),
(8, 5),
(9, 6),
(10, 7),
(11, 8),
(12, 8),
(13, 9);

-- --------------------------------------------------------

--
-- Structure de la table `favorite`
--

CREATE TABLE `favorite` (
  `id_game` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `favorite`
--

INSERT INTO `favorite` (`id_game`, `id_user`) VALUES
(1, 1),
(1, 6),
(1, 9),
(3, 4),
(5, 2),
(5, 7),
(6, 8),
(8, 5),
(36, 3);

-- --------------------------------------------------------

--
-- Structure de la table `games`
--

CREATE TABLE `games` (
  `id_game` int(11) NOT NULL,
  `name_game` varchar(255) NOT NULL,
  `url_image_game` varchar(255) NOT NULL,
  `desc_game` text NOT NULL,
  `typeOf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `games`
--

INSERT INTO `games` (`id_game`, `name_game`, `url_image_game`, `desc_game`, `typeOf`) VALUES
(1, 'World Of Warcraft', './public/ressources/card_leenk/card_leenk_wow.png', 'World of Warcraft est un jeu vidéo de type MMORPG développé par la société Blizzard Entertainment.\r\n\r\nAzeroth est le foyer de nombreuses races différentes, qu’elles y aient vu le jour où qu’elles soient originaires d’autres royaumes. Fier défenseur de l’Alliance ou féroce gardien de la Horde, le choix de votre race détermine le camp que vous choisissez dans cette guerre permanente. Vers laquelle de ces deux factions ira votre loyauté ?\r\n', 'MMORPG'),
(2, 'CS:GO', './public/ressources/card_leenk/card_leenk_csgo.png', 'Counter-Strike: Global Offensive est un jeu de tir à la première personne multijoueur en ligne basé sur le jeu d\'équipe développé par Valve Corporation.\r\nComme dans les versions précédentes de Counter-Strike, il n\'y a pas de scénario dans ce jeu, qui est axé uniquement sur le multijoueur. Le seul aspect solo permet de jouer sur une map de son choix avec des bots. ', 'FPS'),
(3, 'League of legends', './public/ressources/card_leenk/card_leenk_lol.png', 'League of Legends (abrégé LoL) est un jeu vidéo de type arène de bataille en ligne (MOBA)', 'MOBA'),
(4, 'Grand Theft Auto V', './public/ressources/card_leenk/card_leenk_gtav.png', 'Grand Theft Auto V (plus communément abrégé GTA V) est un jeu vidéo d\'action-aventure, développé par Rockstar North et édité par Rockstar Games. Cet épisode se déroule dans la ville fictive de Los Santos et ses alentours, dans l’État fictif de San Andreas, inspirée de la véritable ville de Los Angeles et de la Californie du Sud. Le jeu se concentre principalement sur « la poursuite du dollar tout-puissant ». ', 'Action RPG'),
(5, 'Apex', './public/ressources/card_leenk/card_leenk_apex.png', 'Apex Legends est un jeu vidéo de type battle royale développé et édité par Respawn Entertainment', 'BattleRoyal'),
(6, 'Battlefield V', './public/ressources/card_leenk/card_leenk_battlefieldv.png', 'Battlefield V est un jeu vidéo de tir à la première personne développé par DICE et édité par Electronic Arts. Ce douzième opus de la série se déroule dans le contexte de la Seconde Guerre Mondiale, revenant aux origines de la série. ', 'FPS'),
(7, 'Battlefield 1', './public/ressources/card_leenk/card_leenk_battlefieldun.png', 'Battlefield 1 est un FPS se déroulant pendant la Première Guerre mondiale.', 'FPS'),
(8, 'Destiny 2', './public/ressources/card_leenk/card_leenk_destiny2.png', 'Destiny 2 est un FPS futuriste. Dans Destiny 2, il y a trois modes de jeu : le mode campagne avec une histoire et une aventure à travers différentes quêtes, le mode multijoueur coopératif avec des raids (alliance de 6 joueurs pour réussir les défis les plus compliqués du jeu) et des assauts (avec 3 joueurs (ou IA -gardiens-) pour infiltrer une zone avec pour but d\'éliminer toute menace) et le mode en multijoueur compétitif (combat de joueur à 4 contre 4). ', 'MMORPG'),
(9, 'Dofus', './public/ressources/card_leenk/card_leenk_Dofus.png', 'Dofus est un jeu de rôle en ligne massivement multijoueur français. Dans le Monde des Douze, les six Dofus primordiaux, des œufs de dragons conférant une grande puissance à leur porteur, ont été volés. Vous êtes un valeureux aventurier, prêt à explorer le vaste monde à la recherche des œufs égarés. Combattre des monstres, triompher des donjons, amasser des richesses et augmenter votre puissance, voilà quels défis vous attendent dans Dofus. ', 'MMORPG'),
(10, 'Escape From Tarkov', './public/ressources/card_leenk/card_leenk_eft.png', 'Escape from Tarkov est un jeu vidéo de tir tactique à la première personne, qui se situe dans un univers fictif, proche d\'une région Russe, ayant sa propre zone d\'économie. Le jeu est autant un FPS qu\'un Rogue Like. Sortirez vous avec votre stuff, au risque de tout perdre ? ', 'FPS'),
(11, 'Guild Wars 2', './public/ressources/card_leenk/card_leenk_guildwars2.png', 'Guild Wars 2 est un jeu de rôle en ligne massivement multijoueur (MMORPG). Le jeu se déroule en Tyrie, 250 ans après les événements de Guild Wars, à la suite de plusieurs cataclysmes causés par le réveil des dragons ancestraux, des créatures qui peuvent rivaliser avec les Dieux. ', 'MMORPG'),
(12, 'Rainbow Six Siege', './public/ressources/card_leenk/card_leenk_rs6.png', 'Tom Clancy\'s Rainbow Six: Siege est un jeu vidéo de tir tactique/FPS où le joueur incarne différents agents de plusieurs unités de forces spéciales et de groupes d\'interventions qui constituent l’équipe Rainbow.', 'FPS'),
(13, 'Smite', './public/ressources/card_leenk/card_leenk_smite.png', 'Smite est un jeu vidéo d\'arène de bataille en ligne multijoueur en vue à la troisième personne où les joueurs incarnent des divinités.', 'MOBA'),
(14, 'Star Wars Battlefront 2', './public/ressources/card_leenk/card_leenk_SWB2.png', 'Star Wars Battlefront II est un jeu vidéo de tir à la première et troisième personne. La campagne du jeu, présente dans ce second opus, débute après les événements du film Star Wars : Le Retour du Jedi, lorsque la base sidérale de l\'Empire galactique, l\'Étoile de la Mort, explose, mettant fin au règne de l\'Empereur. Un soldat d\'élite de l\'Empire, Iden Versio, est alors décidée à venger la mort de l\'Empereur.', 'FPS'),
(15, 'Albion', './public/ressources/card_leenk/card_leenk_albion.png', 'Description\r\nAlbion Online est un jeu vidéo de rôle en ligne massivement multijoueur.', 'MMORPG'),
(16, 'Anthem', './public/ressources/card_leenk/card_leenk_anthem.png', 'Anthem est un jeu vidéo d\'action-RPG.', 'FPS'),
(17, 'Archeage', './public/ressources/card_leenk/card_leenk_archeage.png', 'ArcheAge est un jeu de rôle en ligne massivement multijoueur médiéval fantastique.', 'MMORPG'),
(18, 'Ark', './public/ressources/card_leenk/card_leenk_ark.png', 'Ark: Survival Evolved est un jeu vidéo d’action-aventure et de survie.', 'Survie'),
(19, 'Arma III', './public/ressources/card_leenk/card_leenk_arma.png', 'ARMA III est un jeu de tir tactique.', 'FPS'),
(20, 'Diablo II ', './public/ressources/card_leenk/card_leenk_diablo2.png', 'Diablo II est un jeu vidéo d\'action et de rôle de type hack \'n\' slash.', 'Hack\'n\'slash'),
(21, 'Diablo III', './public/ressources/card_leenk/card_leenk_diablo3.png', 'Diablo III est un jeu vidéo d\'action et de rôle de type hack \'n\' slash.', 'Hack\'n\'slash'),
(22, 'Dota II', './public/ressources/card_leenk/card_leenk_dota.png', 'Dota 2 est un jeu vidéo de type arène de bataille en ligne multijoueur.', 'MOBA'),
(23, 'Fallout 76', './public/ressources/card_leenk/card_leenk_fallout76.png', 'Fallout 76 est un jeu vidéo de rôle et d’action multijoueur.', 'MMORPG'),
(24, 'Fortnite', './public/ressources/card_leenk/card_leenk_fortnite.png', 'Fortnite est un battle royal/FPS', 'BattleRoyal'),
(25, 'Garry\'s Mod', './public/ressources/card_leenk/card_leenk_garrysmod.png', 'Garry’s Mod est un mod de construction Half-Life 2.', 'Fun'),
(26, 'Minecraft', './public/ressources/card_leenk/card_leenk_minecraft.png', 'Minecraft est un jeu vidéo de type « bac à sable ».', 'SandBox'),
(27, 'Overwatch', './public/ressources/card_leenk/card_leenk_overwatch.png', 'Overwatch est un FPS, en équipes, en ligne.', 'FPS'),
(28, 'Path Of Exile', './public/ressources/card_leenk/card_leenk_pathofexile.png', 'Path of Exile est un jeu vidéo de type action-RPG situé dans un univers de dark fantasy.', 'Hack\'n\'slash'),
(29, 'Rust', './public/ressources/card_leenk/card_leenk_rust.png', 'Rust est un jeu vidéo d\'aventure et de survie en multijoueur.', 'Survie'),
(30, 'Squad', './public/ressources/card_leenk/card_leenk_squad.png', 'Squad est un jeu vidéo de tir tactique à la première personne \"se déroulant dans l\'environnement moderne\".', 'FPS'),
(31, 'Starcraft 2', './public/ressources/card_leenk/card_leenk_starcraft2.png', 'StarCraft 2: Wings of Liberty est un jeu vidéo de stratégie en temps réel.', 'STR'),
(32, 'Tera', './public/ressources/card_leenk/card_leenk_tera.png', 'TERA: Rising est un jeu de rôle en ligne massivement multijoueur orienté PvE.', 'MMORPG'),
(33, 'The Elder Scroll Online', './public/ressources/card_leenk/card_leenk_teso.png', 'The Elder Scrolls Online est un jeu vidéo de rôle en ligne massivement multijoueur.', 'MMORPG'),
(34, 'The Division 2', './public/ressources/card_leenk/card_leenk_thedivision2.png', 'Tom Clancy’s The Division 2 est un jeu vidéo en ligne en monde ouvert de tir tactique et d\'action-RPG faisant suite à Tom Clancy\'s The Division.', 'FPS'),
(35, 'Titanfall 2', './public/ressources/card_leenk/card_leenk_titanfall2.png', 'Titanfall 2 est un jeu vidéo de tir en vue à la première personne.', 'FPS'),
(36, 'Overcooked 2', './public/ressources/card_leenk/card_leenk_overcooked.png', 'Overcooked 2 est un jeu vidéo de simulation de cuisine coopératif.', 'Fun');

-- --------------------------------------------------------

--
-- Structure de la table `play`
--

CREATE TABLE `play` (
  `id_game` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `play`
--

INSERT INTO `play` (`id_game`, `id_user`) VALUES
(1, 1),
(1, 6),
(1, 9),
(2, 4),
(2, 7),
(3, 4),
(4, 1),
(5, 1),
(5, 2),
(5, 7),
(6, 8),
(6, 9),
(8, 5),
(11, 2),
(12, 4),
(15, 4),
(17, 6),
(30, 2),
(36, 3);

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL,
  `content_post` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id_post`, `content_post`, `id_user`) VALUES
(1, 'Bonjour', 8),
(2, 'Bonjour', 1),
(3, 'Bonjour', 6),
(4, 'bonjour blablabla', 9);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nickname_user` varchar(50) NOT NULL,
  `pwd_user` varchar(100) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `typeOf_user` varchar(100) NOT NULL,
  `post_value` int(11) NOT NULL,
  `steamId_user` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `nickname_user`, `pwd_user`, `email_user`, `typeOf_user`, `post_value`, `steamId_user`) VALUES
(1, 'Kiryh', '$2y$10$uEuIx0OV/sdgwWSZM9fqLeSRjKb9RPNuO0kruO/k91jh81xqNcRgW', 'quentin.dereumaux@gmail.com', 'Solo', 1, 'https://steamcommunity.com/profiles/76561198090680480/'),
(2, 'Supra', '$2y$10$6y4Ym6uvKpkxB5qomI/YD.AaJGJsTcAqmItyGmyw/4GIleQ9wLd9m', 'quentin.dereumaux@gmail.com', 'Solo', 0, 'https://steamcommunity.com/id/1119245020/'),
(3, 'MinoLeNoob', '$2y$10$dz5IqgcGbN5/xYaQgMQNw.OTRYuIZYY07zA5RpAd1xHZeYqXQSphS', 'quentin.dereumaux@gmail.com', 'En groupe', 0, 'https://steamcommunity.com/profiles/76561198174505833/'),
(4, 'TheoBZH', '$2y$10$cy00tn24akaeo28Bjf4vSeOsNHNgSTwBzA9MLvMWFGxwSsAvB2hhO', 'quentin.dereumaux@gmail.com', 'Solo', 0, 'https://steamcommunity.com/profiles/76561198169542665'),
(5, 'BratislaBoy', '$2y$10$YO133ZfVVwbxYPjU.gj9zul7TOgvKlKjluEWxT.jeSTjjvI3h/A/m', 'quentin.dereumaux@gmail.com', 'Solo', 0, 'https://steamcommunity.com/profiles/76561198031687583/'),
(6, 'Lyliah', '$2y$10$fdAqpQf75pYoF.gdihjEeOKtzQ2HBL2OTPZm/LMrnSS.t5JjYweQi', 'quentin.dereumaux@gmail.com', 'Solo', 1, ''),
(7, 'BigPapaJack', '$2y$10$rJndJ4o4/NqPVNI9Maztie1ev2chpel1l3a2Mve21ajMDmygL5HUq', 'quentin.dereumaux@gmail.com', 'Solo', 0, 'https://steamcommunity.com/profiles/76561197981659427'),
(8, 'Williamsii', '$2y$10$HoNe6qvcro/xBf5mkNGVa.GNTcIVSyO4lomUrjWgdqYQPtdGf5ZKK', 'quentin.dereumaux@gmail.com', 'Solo', 1, 'https://steamcommunity.com/profiles/76561198017169388'),
(9, 'Nicolay', '$2y$10$If/Cs2QvMSZs7Pb.QdP3MO9osM9sEdCmNudEk98HFaxgteWx35O0C', 'quentin.dereumaux@gmail.com', 'Solo', 1, '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `alert`
--
ALTER TABLE `alert`
  ADD PRIMARY KEY (`id_alert`),
  ADD KEY `alert_user_FK` (`id_user`);

--
-- Index pour la table `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`id_game`,`id_user`),
  ADD KEY `favorite_user0_FK` (`id_user`);

--
-- Index pour la table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id_game`);

--
-- Index pour la table `play`
--
ALTER TABLE `play`
  ADD PRIMARY KEY (`id_game`,`id_user`),
  ADD KEY `play_user0_FK` (`id_user`);

--
-- Index pour la table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`),
  ADD UNIQUE KEY `post_user_AK` (`id_user`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `alert`
--
ALTER TABLE `alert`
  MODIFY `id_alert` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `games`
--
ALTER TABLE `games`
  MODIFY `id_game` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `alert`
--
ALTER TABLE `alert`
  ADD CONSTRAINT `alert_user_FK` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Contraintes pour la table `favorite`
--
ALTER TABLE `favorite`
  ADD CONSTRAINT `favorite_games_FK` FOREIGN KEY (`id_game`) REFERENCES `games` (`id_game`),
  ADD CONSTRAINT `favorite_user0_FK` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Contraintes pour la table `play`
--
ALTER TABLE `play`
  ADD CONSTRAINT `play_games_FK` FOREIGN KEY (`id_game`) REFERENCES `games` (`id_game`),
  ADD CONSTRAINT `play_user0_FK` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Contraintes pour la table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_user_FK` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
