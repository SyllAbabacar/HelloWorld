-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 04 Janvier 2017 à 23:30
-- Version du serveur :  10.1.13-MariaDB
-- Version de PHP :  7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `db_courtage`
--
CREATE DATABASE IF NOT EXISTS `db_courtage` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_courtage`;

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

CREATE TABLE `activite` (
  `id_activite` int(11) NOT NULL,
  `lib_activite` varchar(50) NOT NULL,
  `desc_activite` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `activite`
--

INSERT INTO `activite` (`id_activite`, `lib_activite`, `desc_activite`) VALUES
(6, 'Automobile', 'tout ce qui est automobile'),
(7, 'Immobilier', 'tou ce qui est location ou vente de terrain, maison, ...'),
(8, 'Mobilier', 'toute materiel representant un meuble');

-- --------------------------------------------------------

--
-- Structure de la table `affichage`
--

CREATE TABLE `affichage` (
  `id_affichage` int(11) NOT NULL,
  `lib_affichage` varchar(60) NOT NULL,
  `etat_affichage` tinyint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `affichage`
--

INSERT INTO `affichage` (`id_affichage`, `lib_affichage`, `etat_affichage`) VALUES
(1, 'Page d''accueil', 1),
(2, 'Page publicitaire', 1),
(3, 'Slide', 1),
(4, 'Recommendation', 1),
(5, 'Annonce pro', 1);

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `id_annonce` int(11) NOT NULL,
  `date_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_localite` int(11) NOT NULL,
  `id_type_annonce` int(11) NOT NULL,
  `id_proprietaire` int(11) NOT NULL,
  `montant` int(11) NOT NULL,
  `libelle` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `adresse` varchar(250) NOT NULL,
  `transaction` tinyint(4) NOT NULL,
  `etat_annonce` tinyint(10) NOT NULL,
  `id_superviseur` int(11) NOT NULL,
  `id_courtier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `annonce`
--

INSERT INTO `annonce` (`id_annonce`, `date_creation`, `id_localite`, `id_type_annonce`, `id_proprietaire`, `montant`, `libelle`, `description`, `adresse`, `transaction`, `etat_annonce`, `id_superviseur`, `id_courtier`) VALUES
(59, '2017-01-04 14:38:43', 1, 14, 18, 45000, 'feuiteil en cercle', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempory', 'fass', 1, 0, 19, 18),
(60, '2017-01-05 08:31:17', 1, 14, 18, 337000, 'Feuiteil en main', 'csdqjcjqdcjdhcbqjhbqk:jcn xwh,b  cqjhcb  jcbq cbh', 'km', 0, 2, 19, 18),
(61, '2017-01-03 14:36:37', 2, 12, 19, 5480000, 'auto police', 'tres belle voiture', 'ici', 1, 1, 18, 18),
(62, '2017-01-04 13:28:21', 1, 13, 19, 500000, 'superbe moto honda', 'ohhhhhh c une superbe moto honda 2016\r\nouf c chaud !!!', 'ici', 1, 1, 18, 18),
(63, '2017-01-04 13:28:21', 2, 13, 19, 8450999, 'Guzzi 2016', 'vitesse 500km/h c superbe !!!', 'keur masssar', 1, 1, 19, 18);

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id_commentaire` int(11) NOT NULL,
  `id_membre` int(11) NOT NULL,
  `id_annonce` int(11) NOT NULL,
  `contenu` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commentaire`
--

INSERT INTO `commentaire` (`id_commentaire`, `id_membre`, `id_annonce`, `contenu`, `date`) VALUES
(1, 18, 59, 'vu!!!!!!!!!', '2016-12-29 01:11:13'),
(2, 19, 60, 'ok!!!!!!!!!!!', '2016-12-29 01:11:13');

-- --------------------------------------------------------

--
-- Structure de la table `connexion`
--

CREATE TABLE `connexion` (
  `id_connexion` int(11) NOT NULL,
  `id_membre` int(11) NOT NULL,
  `jeton` varchar(250) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ip` varchar(250) NOT NULL,
  `support` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `duree`
--

CREATE TABLE `duree` (
  `id_duree` int(11) NOT NULL,
  `id_annonce_duree` int(11) NOT NULL,
  `id_affichage_duree` int(11) NOT NULL,
  `date_debut_duree` date NOT NULL,
  `date_fin_duree` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `duree`
--

INSERT INTO `duree` (`id_duree`, `id_annonce_duree`, `id_affichage_duree`, `date_debut_duree`, `date_fin_duree`) VALUES
(1, 59, 1, '2016-12-04', '2016-12-30'),
(2, 59, 2, '2016-12-30', '2018-12-21'),
(3, 63, 3, '2017-01-04', '2017-01-31'),
(4, 62, 3, '2017-01-18', '2017-02-28');

-- --------------------------------------------------------

--
-- Structure de la table `localite`
--

CREATE TABLE `localite` (
  `id_localite` int(11) NOT NULL,
  `id_region` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `localite`
--

INSERT INTO `localite` (`id_localite`, `id_region`, `nom`, `description`) VALUES
(1, 1, 'Mbao', ''),
(2, 1, 'Parcelle', '');

-- --------------------------------------------------------

--
-- Structure de la table `media`
--

CREATE TABLE `media` (
  `id_media` int(11) NOT NULL,
  `id_annonce` int(11) NOT NULL,
  `fichier` varchar(150) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `media`
--

INSERT INTO `media` (`id_media`, `id_annonce`, `fichier`, `description`) VALUES
(1, 59, 'salon10.jpg', 'azertyui'),
(2, 59, 'salon5.jpg', 'qwertyui'),
(3, 60, 'salon4.jpg', 'qsdfghjk'),
(4, 61, 'img1.jpg', 'azertyuio'),
(5, 61, 'img13.jpg', 'qwertyuio'),
(6, 61, 'img23.jpg', 'ohhh oups....'),
(7, 62, 'img9.jpg', 'joli'),
(8, 63, 'img20.jpg', 'hyper rapride'),
(9, 63, 'img27.jpg', 'azertyu'),
(10, 63, 'img10.jpg', 'qwrtyui'),
(11, 63, 'img3.jpg', 'dvbswcnlq');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id_membre` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pseudo` varchar(250) NOT NULL,
  `password` varchar(50) NOT NULL,
  `profil` int(11) NOT NULL,
  `jeton` varchar(250) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `tel` varchar(250) NOT NULL,
  `adresse` varchar(250) NOT NULL,
  `profession` varchar(50) NOT NULL,
  `date_naissance` date NOT NULL,
  `photo` varchar(250) NOT NULL,
  `facebook` varchar(250) NOT NULL,
  `twitter` varchar(250) NOT NULL,
  `google` varchar(250) NOT NULL,
  `youtube` varchar(250) NOT NULL,
  `linkedin` varchar(250) NOT NULL,
  `site` varchar(250) NOT NULL,
  `etat_membre` tinyint(1) NOT NULL,
  `date_membre` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`id_membre`, `email`, `pseudo`, `password`, `profil`, `jeton`, `nom`, `prenom`, `tel`, `adresse`, `profession`, `date_naissance`, `photo`, `facebook`, `twitter`, `google`, `youtube`, `linkedin`, `site`, `etat_membre`, `date_membre`) VALUES
(18, 'cheikh@tidiany.wgb', 'Tidiany', '@azerty', 1, 'charabia', 'toure', 'cheikh', '221 77 947 14 05', 'fass', 'analyste-developpeur-programeur', '2006-12-03', 'a revoir', 'fmame@yohoo.com', 'tmame@yohoo.com', 'gmame@yohoo.com', 'ymame@yohoo.com', 'lmame@yohoo.com', 'www.mame@cheikh.wgb', 1, '2016-12-29 00:55:32'),
(19, 'cheikh@tidiany.wgb', 'Tidiany', '@azerty', 1, 'charabia', 'toure', 'cheikh', '221 77 947 14 05', 'fass', 'analyste-developpeur-programeur', '2006-12-03', 'a revoir', 'fmame@yohoo.com', 'tmame@yohoo.com', 'gmame@yohoo.com', 'ymame@yohoo.com', 'lmame@yohoo.com', 'www.mame@cheikh.wgb', 1, '2016-12-29 01:02:35');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id_message` int(11) NOT NULL,
  `objet_message` varchar(250) NOT NULL,
  `contenu_message` text NOT NULL,
  `date_message` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `etat` int(11) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `id_destinataire` int(11) NOT NULL,
  `id_annonce` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`id_message`, `objet_message`, `contenu_message`, `date_message`, `etat`, `nom`, `email`, `id_destinataire`, `id_annonce`) VALUES
(5, 'blablabla', 'azertyui blablablablablablabla', '2017-01-04 10:53:37', 1, 'lamine diallo', 'lodiaminela@gm.com', 18, 61);

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE `pays` (
  `id_pays` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `activer` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `pays`
--

INSERT INTO `pays` (`id_pays`, `nom`, `activer`) VALUES
(1, 'Seneagl', 1),
(2, 'Gambie', 0);

-- --------------------------------------------------------

--
-- Structure de la table `profile`
--

CREATE TABLE `profile` (
  `id_profile` int(11) NOT NULL,
  `libelle` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `profile`
--

INSERT INTO `profile` (`id_profile`, `libelle`, `description`) VALUES
(1, 'Membre simple', ''),
(2, 'Coutier ', ''),
(3, 'Membre pro', ''),
(4, 'Superviseur', ''),
(5, 'Administrateur', '');

-- --------------------------------------------------------

--
-- Structure de la table `publication`
--

CREATE TABLE `publication` (
  `id_publication` int(11) NOT NULL,
  `titre_publication` varchar(250) NOT NULL,
  `contenu_publication` text NOT NULL,
  `date_publication` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_activite` int(11) NOT NULL,
  `id_membre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `publication`
--

INSERT INTO `publication` (`id_publication`, `titre_publication`, `contenu_publication`, `date_publication`, `id_activite`, `id_membre`) VALUES
(1, 'titre 1 pub', 'contenu 1 de pub', '2016-12-29 08:45:58', 6, 18),
(2, 'titre 2 de pub', 'contenu deux de pub', '2016-12-29 08:45:58', 7, 19);

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

CREATE TABLE `region` (
  `id_region` int(11) NOT NULL,
  `id_pays` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `activer` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `region`
--

INSERT INTO `region` (`id_region`, `id_pays`, `nom`, `activer`) VALUES
(1, 1, 'Dakar', 1),
(2, 1, 'Thies', 1),
(3, 1, 'Saint Louis', 1),
(4, 2, 'Bandioul', 0),
(5, 2, 'Serrekounda', 0);

-- --------------------------------------------------------

--
-- Structure de la table `type_annonce`
--

CREATE TABLE `type_annonce` (
  `id_type_annonce` int(11) NOT NULL,
  `libelle` varchar(50) NOT NULL,
  `id_activite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `type_annonce`
--

INSERT INTO `type_annonce` (`id_type_annonce`, `libelle`, `id_activite`) VALUES
(10, 'terrain', 7),
(11, 'Camion', 6),
(12, '4*4', 6),
(13, 'moto', 6),
(14, 'Feuilteil', 8);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `activite`
--
ALTER TABLE `activite`
  ADD PRIMARY KEY (`id_activite`);

--
-- Index pour la table `affichage`
--
ALTER TABLE `affichage`
  ADD PRIMARY KEY (`id_affichage`),
  ADD UNIQUE KEY `lib_affichage` (`lib_affichage`),
  ADD KEY `id_membre` (`lib_affichage`);

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`id_annonce`),
  ADD KEY `id_localite` (`id_localite`),
  ADD KEY `id_type_propriete` (`id_type_annonce`),
  ADD KEY `id_membre` (`id_proprietaire`),
  ADD KEY `id_superviseur` (`id_superviseur`,`id_courtier`),
  ADD KEY `id_courtier` (`id_courtier`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id_commentaire`),
  ADD KEY `id_membre` (`id_membre`),
  ADD KEY `id_annonce` (`id_annonce`);

--
-- Index pour la table `connexion`
--
ALTER TABLE `connexion`
  ADD PRIMARY KEY (`id_connexion`),
  ADD KEY `id_membre` (`id_membre`);

--
-- Index pour la table `duree`
--
ALTER TABLE `duree`
  ADD PRIMARY KEY (`id_duree`),
  ADD KEY `id_annonce_duree` (`id_annonce_duree`,`id_affichage_duree`),
  ADD KEY `id_affichage_duree` (`id_affichage_duree`);

--
-- Index pour la table `localite`
--
ALTER TABLE `localite`
  ADD PRIMARY KEY (`id_localite`),
  ADD KEY `id_region` (`id_region`);

--
-- Index pour la table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id_media`),
  ADD KEY `id_propriete` (`id_annonce`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id_membre`),
  ADD KEY `profil` (`profil`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`),
  ADD KEY `id_detinataire` (`id_destinataire`),
  ADD KEY `id_annonce` (`id_annonce`),
  ADD KEY `id_annonce_2` (`id_annonce`);

--
-- Index pour la table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id_pays`);

--
-- Index pour la table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id_profile`);

--
-- Index pour la table `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`id_publication`),
  ADD KEY `id_activite` (`id_activite`),
  ADD KEY `id_membre` (`id_membre`);

--
-- Index pour la table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id_region`),
  ADD KEY `id_pays` (`id_pays`);

--
-- Index pour la table `type_annonce`
--
ALTER TABLE `type_annonce`
  ADD PRIMARY KEY (`id_type_annonce`),
  ADD KEY `id_activite` (`id_activite`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `activite`
--
ALTER TABLE `activite`
  MODIFY `id_activite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `affichage`
--
ALTER TABLE `affichage`
  MODIFY `id_affichage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `id_annonce` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id_commentaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `connexion`
--
ALTER TABLE `connexion`
  MODIFY `id_connexion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `duree`
--
ALTER TABLE `duree`
  MODIFY `id_duree` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `localite`
--
ALTER TABLE `localite`
  MODIFY `id_localite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `media`
--
ALTER TABLE `media`
  MODIFY `id_media` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id_membre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `pays`
--
ALTER TABLE `pays`
  MODIFY `id_pays` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `profile`
--
ALTER TABLE `profile`
  MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `publication`
--
ALTER TABLE `publication`
  MODIFY `id_publication` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `region`
--
ALTER TABLE `region`
  MODIFY `id_region` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `type_annonce`
--
ALTER TABLE `type_annonce`
  MODIFY `id_type_annonce` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD CONSTRAINT `annonce_ibfk_1` FOREIGN KEY (`id_localite`) REFERENCES `localite` (`id_localite`),
  ADD CONSTRAINT `annonce_ibfk_5` FOREIGN KEY (`id_type_annonce`) REFERENCES `type_annonce` (`id_type_annonce`),
  ADD CONSTRAINT `annonce_ibfk_6` FOREIGN KEY (`id_proprietaire`) REFERENCES `membre` (`id_membre`),
  ADD CONSTRAINT `annonce_ibfk_7` FOREIGN KEY (`id_superviseur`) REFERENCES `membre` (`id_membre`),
  ADD CONSTRAINT `annonce_ibfk_8` FOREIGN KEY (`id_courtier`) REFERENCES `membre` (`id_membre`);

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`id_membre`) REFERENCES `membre` (`id_membre`),
  ADD CONSTRAINT `commentaire_ibfk_2` FOREIGN KEY (`id_annonce`) REFERENCES `annonce` (`id_annonce`);

--
-- Contraintes pour la table `connexion`
--
ALTER TABLE `connexion`
  ADD CONSTRAINT `connexion_ibfk_1` FOREIGN KEY (`id_membre`) REFERENCES `membre` (`id_membre`);

--
-- Contraintes pour la table `duree`
--
ALTER TABLE `duree`
  ADD CONSTRAINT `duree_ibfk_1` FOREIGN KEY (`id_annonce_duree`) REFERENCES `annonce` (`id_annonce`),
  ADD CONSTRAINT `duree_ibfk_2` FOREIGN KEY (`id_affichage_duree`) REFERENCES `affichage` (`id_affichage`);

--
-- Contraintes pour la table `localite`
--
ALTER TABLE `localite`
  ADD CONSTRAINT `localite_ibfk_1` FOREIGN KEY (`id_region`) REFERENCES `region` (`id_region`);

--
-- Contraintes pour la table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_2` FOREIGN KEY (`id_annonce`) REFERENCES `annonce` (`id_annonce`);

--
-- Contraintes pour la table `membre`
--
ALTER TABLE `membre`
  ADD CONSTRAINT `membre_ibfk_1` FOREIGN KEY (`profil`) REFERENCES `profile` (`id_profile`);

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`id_destinataire`) REFERENCES `membre` (`id_membre`),
  ADD CONSTRAINT `message_ibfk_2` FOREIGN KEY (`id_annonce`) REFERENCES `annonce` (`id_annonce`);

--
-- Contraintes pour la table `publication`
--
ALTER TABLE `publication`
  ADD CONSTRAINT `publication_ibfk_1` FOREIGN KEY (`id_activite`) REFERENCES `activite` (`id_activite`),
  ADD CONSTRAINT `publication_ibfk_2` FOREIGN KEY (`id_membre`) REFERENCES `membre` (`id_membre`);

--
-- Contraintes pour la table `region`
--
ALTER TABLE `region`
  ADD CONSTRAINT `region_ibfk_1` FOREIGN KEY (`id_pays`) REFERENCES `pays` (`id_pays`);

--
-- Contraintes pour la table `type_annonce`
--
ALTER TABLE `type_annonce`
  ADD CONSTRAINT `type_annonce_ibfk_1` FOREIGN KEY (`id_activite`) REFERENCES `activite` (`id_activite`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
