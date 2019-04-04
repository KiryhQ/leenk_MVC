-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Client :  db5000029838.hosting-data.io
-- Généré le :  Jeu 04 Avril 2019 à 20:06
-- Version du serveur :  5.7.25-log
-- Version de PHP :  7.0.33-0+deb9u3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dbs25035`
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
-- Contenu de la table `alert`
--

INSERT INTO `alert` (`id_alert`, `id_user`) VALUES
(31, 29),
(32, 29),
(16, 33),
(17, 40);

-- --------------------------------------------------------

--
-- Structure de la table `favorite`
--

CREATE TABLE `favorite` (
  `id_game` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `favorite`
--

INSERT INTO `favorite` (`id_game`, `id_user`) VALUES
(36, 29),
(2, 33),
(5, 33),
(31, 36),
(19, 40),
(30, 40);

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
-- Contenu de la table `games`
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
-- Contenu de la table `play`
--

INSERT INTO `play` (`id_game`, `id_user`) VALUES
(2, 29),
(13, 29),
(29, 29),
(36, 29),
(2, 33),
(5, 33),
(8, 33),
(10, 33),
(33, 33),
(3, 36),
(31, 36),
(33, 36),
(12, 37),
(6, 40),
(12, 40),
(15, 40),
(19, 40),
(21, 40),
(22, 40),
(30, 40),
(34, 40);

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
-- Contenu de la table `post`
--

INSERT INTO `post` (`id_post`, `content_post`, `id_user`) VALUES
(5, 'Je suis le renommé joueur d\'escalier.. Attention! :) ', 33),
(6, 'Bonjour, je suis un tout nouveau membre et j\'en suis fière !', 29),
(7, 'Bonjour', 37),
(14, 'Je joue principalement aux jeux de simultaion militaire :D', 40);

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
  `steamId_user` varchar(255) DEFAULT NULL,
  `avatar_user` varchar(255) DEFAULT 'public/ressources/avatar/defaultProfil.jpg',
  `bg_profil_user` varchar(255) DEFAULT 'public/ressources/banner_profil/bg1.png',
  `token_pwd` varchar(255) NOT NULL DEFAULT 'defaultToken'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_user`, `nickname_user`, `pwd_user`, `email_user`, `typeOf_user`, `post_value`, `steamId_user`, `avatar_user`, `bg_profil_user`, `token_pwd`) VALUES
(29, 'Mino', '$2y$10$64WB3MRKTC8U.XKHzUtbROHMdkI.QWdb.3qYWthhNDWFpCVNjB2tG', 'mino@gmail.com', 'Solo', 1, '', 'public/ressources/avatar/Mino.png', 'public/ressources/banner_profil/bg1.png', 'defaultToken'),
(32, 'nico', '$2y$10$QZL0F9VueY8pW4iPfQ20R.nievrKU87p9qWDUljjeDaVkfBgV3t5y', 'aaaaaa@mail.de', 'Solo', 0, '', 'public/ressources/avatar/defaultProfil.jpg', 'public/ressources/banner_profil/bg5.jpg', 'defaultToken'),
(33, 'Big Papa Jack', '$2y$10$Z8/s7jca79jzQSjIVgv.V.GvhX0KfDCH886cCTfKKhI4xih22Ag5W', 'romain.dereumaux@gmail.com', 'En groupe', 1, '', 'public/ressources/avatar/Big Papa Jack.png', 'public/ressources/banner_profil/bg3.jpg', 'defaultToken'),
(36, 'Dwaline', '$2y$10$MPM2VE5gdCANaem3nmkAQ.ptM1QxpyqbQ1j4Db1qvFdl7usF0Lv7W', 'dwaline_5689@hotmail.fr', 'En groupe', 0, '', 'public/ressources/avatar/defaultProfil.jpg', 'public/ressources/banner_profil/bg4.jpg', 'defaultToken'),
(37, 'Kiryh', '$2y$10$ipUs4DRx9kDA4SL1uTEGX..zpVCtXKMdy6L3gXeYCwQ4rDiDUVeFu', 'quentin.dereumaux@gmail.com', 'Solo', 1, '', 'public/ressources/avatar/defaultProfil.jpg', 'public/ressources/banner_profil/bg4.jpg', 'e8a5cc826226ae4211013a55c04e2bd7f9ce523f'),
(40, 'slashflex', '$2y$10$GzYj8MBIhk4ITk7Er/i2tuI5Eu/JTNH8VdgGUFmMcFaQwxL6nkYCu', 'pro.davidsaoud@gmail.com', 'Solo', 1, 'http://steamcommunity.com/id/1119245020', 'public/ressources/avatar/slashflex.png', 'public/ressources/banner_profil/bg3.jpg', 'defaultToken');

--
-- Index pour les tables exportées
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
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `alert`
--
ALTER TABLE `alert`
  MODIFY `id_alert` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT pour la table `games`
--
ALTER TABLE `games`
  MODIFY `id_game` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- Contraintes pour les tables exportées
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
