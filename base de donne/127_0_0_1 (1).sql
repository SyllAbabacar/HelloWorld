-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 28 Janvier 2017 à 10:58
-- Version du serveur :  10.1.13-MariaDB
-- Version de PHP :  7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `newdbcourtage`
--
CREATE DATABASE IF NOT EXISTS `newdbcourtage` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `newdbcourtage`;

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
(8, 'Mobilier', 'toute materiel representant un meuble'),
(9, 'Informatique', 'tout ce qui est ordinateur portable etc...'),
(10, 'Accessoir', 'tout ce qui est accessoire, montre, colier, bijou, ...');

-- --------------------------------------------------------

--
-- Structure de la table `affichage`
--

CREATE TABLE `affichage` (
  `id_affichage` int(11) NOT NULL,
  `lib_affichage` varchar(60) NOT NULL,
  `description` text NOT NULL,
  `etat_affichage` tinyint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `affichage`
--

INSERT INTO `affichage` (`id_affichage`, `lib_affichage`, `description`, `etat_affichage`) VALUES
(1, 'Page d''accueil', '', 1),
(2, 'Page publicitaire', '', 1),
(3, 'Slider', '', 1),
(4, 'Recommendation', '', 1),
(5, 'Annonce pro', '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `id_annonce` int(11) NOT NULL,
  `date_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_validation` datetime NOT NULL,
  `date_expiration` datetime NOT NULL,
  `reference` varchar(10) NOT NULL,
  `id_localite` int(11) NOT NULL,
  `id_type_annonce` int(11) NOT NULL,
  `id_proprietaire` int(11) NOT NULL,
  `montant` int(11) NOT NULL,
  `libelle` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `adresse` varchar(250) NOT NULL,
  `transaction` tinyint(4) NOT NULL,
  `etat_annonce` tinyint(10) NOT NULL,
  `id_superviseur` int(11) DEFAULT NULL,
  `id_courtier` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `annonce`
--

INSERT INTO `annonce` (`id_annonce`, `date_creation`, `date_validation`, `date_expiration`, `reference`, `id_localite`, `id_type_annonce`, `id_proprietaire`, `montant`, `libelle`, `description`, `adresse`, `transaction`, `etat_annonce`, `id_superviseur`, `id_courtier`) VALUES
(59, '2017-01-24 20:40:22', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'RE0000591F', 1, 14, 24, 45000, 'feuiteil en cercle', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempory', 'fass', 1, 3, 19, 18),
(60, '2017-01-25 01:29:59', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'RE0000601F', 1, 14, 24, 337999, 'Feuiteil en main', 'csdqjcjqdcjdhcbqjhbqk:jcn xwh,b  cqjhcb  jcbq cbhcsdqjcjqdcjdhcbqjhbqk:jcn xwh,b  cqjhcb  jcbq cbhcsdqjcjqdcjdhcbqjhbqk:jcn xwh,b  cqjhcb  jcbq cbh', 'keur mbaye fall', 0, 0, 19, 18),
(61, '2017-01-10 16:19:52', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'RE0000611F', 2, 12, 19, 5480000, 'auto police', 'tres belle voiture', 'ici', 1, 1, 18, 18),
(62, '2017-01-22 03:12:34', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'RE0000621F', 1, 13, 24, 500000, 'superbe moto honda', 'ohhhhhh c une superbe moto honda 2016\r\nouf c chaud !!!', 'ici', 1, 1, 18, 18),
(63, '2017-01-22 03:04:21', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'RE0000631F', 2, 13, 23, 8450999, 'Moto Guzzi 2016', 'vitesse 500km/h c superbe !!!', 'keur masssar', 1, 1, 19, 18),
(64, '2017-01-22 03:04:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'RE0000641F', 1, 12, 23, 8337999, 'white 4*4', 'azertyui', 'gueoul', 1, 1, 18, 19),
(65, '2017-01-10 16:20:19', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'RE0000651F', 2, 13, 19, 250000, 'bicyclette', 'bicyclette a 2 pneu neuf', 'keur mbaye fall', 0, 1, 18, 19),
(66, '2017-01-22 03:13:01', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'RE0000661F', 2, 13, 24, 5246820, 'white moto', 'tres belle moto', 'gueoul', 1, 1, 18, 19),
(67, '2017-01-10 16:20:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'RE0000671F', 1, 12, 19, 25000000, '2 place hyper belle', 'a decouvrir', 'keur massar', 1, 1, 18, 19),
(68, '2017-01-10 18:02:50', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'RE0000681F', 1, 15, 18, 15000, 'black montre', 'azer 548 noir jaune', 'km', 1, 1, 18, 19),
(69, '2017-01-24 21:22:57', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'RE0000691F', 2, 18, 24, 2500000, 'salon en cuire', 'salon beige en cuire 5 pieces, table en verre, ... ', 'colobane', 0, 2, 19, 18),
(75, '2017-01-13 01:13:10', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'RE0000701F', 2, 10, 18, 574652, 'rvefdx', 'vref4Vzds', 'vrefbgf', 1, 0, NULL, NULL),
(76, '2017-01-24 18:04:17', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'RE0000761F', 1, 12, 24, 6599999, 'BMW 206', 'azertyui qwertyui 0000000', 'Keur Mbaye Fall', 1, 0, NULL, NULL),
(77, '2017-01-13 10:01:57', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'RE0000771F', 2, 12, 18, 4154121, 'gnfv', 'jgkgvhdxchd', 'azertyui', 1, 0, NULL, NULL),
(78, '2017-01-13 10:53:44', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'RE0000781F', 2, 12, 18, 4154121, 'gnfv', 'jgkgvhdxchd', 'azertyui', 1, 0, NULL, NULL),
(79, '2017-01-24 20:41:12', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'RE0000791F', 1, 18, 24, 54276542, 'vefsgbres', 'fvefsvqzsvqsvzqsv fsbgnyrhf,u;ukj8754', 'cdvfebrd', 0, 3, NULL, NULL),
(80, '2017-01-13 10:54:51', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'RE0000801F', 2, 12, 18, 0, 'grhjyntf', 'btrnthg', 'vfsberthtr', 0, 0, NULL, NULL),
(81, '2017-01-24 20:41:30', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'RE0000811F', 1, 10, 18, 15000000, 'terrain 15mÂ²', 'sqdsvvlnoln', 'keur mbaye fall', 1, 3, NULL, NULL);

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
(1, 18, 59, '                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\n', '2017-01-17 00:58:27'),
(2, 19, 60, '                                    Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi. Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst.\n', '2017-01-17 00:58:51'),
(3, 19, 59, '                                    Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi. Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst.\r\n', '2017-01-17 01:00:06'),
(4, 18, 59, '                                    Fusce convallis, mauris imperdiet gravida bibendum, nisl turpis suscipit mauris, sed placerat ipsum urna sed risus. In convallis tellus a mauris. Curabitur non elit ut libero tristique sodales. Mauris a lacus. Donec mattis semper leo. In hac habitasse platea dictumst. Vivamus facilisis diam at odio. Mauris dictum, nisi eget consequat elementum, lacus ligula molestie metus, non feugiat orci magna ac sem. Donec turpis. Donec vitae metus. Morbi tristique neque eu mauris. Quisque gravida ipsum non sapien. Proin turpis lacus, scelerisque vitae, elementum at, lobortis ac, quam. Aliquam dictum eleifend risus. In hac habitasse platea dictumst. Etiam sit amet diam. Suspendisse odio. Suspendisse nunc. In semper bibendum libero.\r\n', '2017-01-17 01:00:06');

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
(1, 59, 1, '2016-12-04', '2017-02-23'),
(2, 66, 1, '2016-12-30', '2018-12-21'),
(3, 63, 3, '2017-01-04', '2017-01-31'),
(4, 62, 3, '2017-01-02', '2017-02-28'),
(5, 61, 5, '2016-12-31', '2017-01-31'),
(6, 62, 4, '2017-01-04', '2017-02-04'),
(7, 67, 5, '2017-01-10', '2017-01-31'),
(8, 65, 4, '2017-01-04', '2017-02-04'),
(9, 60, 5, '2017-01-10', '2017-01-25'),
(10, 60, 3, '2017-01-10', '2017-01-18'),
(11, 68, 5, '2017-01-10', '2017-01-28'),
(12, 69, 3, '2017-01-10', '2017-02-22');

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
(11, 63, 'img3.jpg', 'dvbswcnlq'),
(12, 64, 'img24.jpg', 'qwertyuiuiop aqw'),
(13, 65, 'img22.jpg', 'lorem ipson'),
(14, 66, 'img17.jpg', ''),
(15, 67, 'img23.jpg', ''),
(16, 68, 'img16.jpg', 'montre noire jaune tres belle! venez vite le decouvrire'),
(17, 69, 'salon3.jpg', 'azerty');

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
(18, 'cheikh@tidiany.wgb', 'Tidiany', '@azerty', 1, 'charabia', 'toure', 'cheikh', '221 77 947 14 05', 'fass', 'analyste-developpeur-programeur', '2006-12-03', 'profil.jpg', 'fmame@yohoo.com', 'tmame@yohoo.com', 'gmame@yohoo.com', 'ymame@yohoo.com', 'lmame@yohoo.com', 'www.mame@cheikh.wgb', 1, '2017-01-11 19:56:36'),
(19, 'cheikh@tidiany.wgb', 'Tidiany548', '@azerty', 3, 'charabia', 'toure', 'cheikh', '221 77 947 14 05', 'fass', 'analyste-developpeur-programeur', '2006-12-03', 'profil.jpg', 'fmame@yohoo.com', 'tmame@yohoo.com', 'gmame@yohoo.com', 'ymame@yohoo.com', 'lmame@yohoo.com', 'www.mame@cheikh.wgb', 1, '2017-01-16 14:58:04'),
(20, 'testmail', 'testPseudo', 'testPass', 1, '', 'testNom', 'testPrenom', 'testtel', 'testAdrs', 'testProfession', '0000-00-00', '', '', '', '', '', '', '', 1, '2017-01-11 15:39:40'),
(21, 'ebf@uygy.hjbj', 'rbbs', '123', 1, '', 'vsfbv', 'bedfb', 'cyjht', 'cycfyjh', 'yfytj', '0000-00-00', '', '', '', '', '', '', '', 1, '2017-01-11 15:40:55'),
(22, 'ghyi@fnhfgh.yjtfyg', 'y,tg', '123', 1, '', 'ghtr', 'nrdfg', 'sbdbxc', 'nt,jg', 'gf,hg', '0000-00-00', '', '', '', '', '', '', '', 1, '2017-01-11 15:42:07'),
(23, 'azaq@erty.aa', 'azaq', 'manela', 1, '', 'azertyui', 'qwertyui', '114578522', 'azq', 'azertyuio', '0000-00-00', '', '', '', '', '', '', '', 1, '2017-01-11 15:50:34'),
(24, 'lamzapro@gmail.com', 'lamza', 'dadca1d6069ff95914dad703dbac7d00', 1, '', 'Diallo', 'Lamine', '772584565', 'Keur Mbaye Fall', 'Devellopeur', '1989-01-28', 'profil.jpg', '', '', '', '', '', '', 1, '2017-01-28 01:05:26'),
(25, 'fdwvsf@dvswx', 'fdx', 'f244b2bbb8595dfa98738c05e41d8f47', 1, 'OS8v5kq8M9wFxGQrurcTerZnxxwkpGhWLx1', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-01-22 02:22:41'),
(27, 'tourecheikhmame1@gmail.com', 'Toure', 'c0c16cbefde2883af2abd18e0528d04b', 3, 'Rj5Plx8fhmKKs7qI2we9qyDgF4WF3oOO9FI', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-01-25 14:42:36'),
(28, 'azer@FDFV', 'VDES', 'f244b2bbb8595dfa98738c05e41d8f47', 1, 'FV7O8pGFZIucDs4A1jixbuafBNPkj4N2rg2', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-01-25 13:57:29'),
(29, 'tourecheikhmame2@gmail.com', 'Testmail', '60eb5170beb936570b89a0ecfd0f1049', 1, 'qTp7O5wzfL989uTjOoVQUHmMQQ6kQQL1Kfm', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-01-25 15:16:39'),
(32, 'tourecheikhmame@gmail.com', 'azertyu', 'f244b2bbb8595dfa98738c05e41d8f47', 1, '2lYL5nl2PVA2NCEwY7e3fcTFooNfysXsV85', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-01-25 15:18:20'),
(33, 'tourecheikhmame@gmail.com', 'qwertyu', 'c0c16cbefde2883af2abd18e0528d04b', 1, 'kRURyCMv2oz6U3EP6p7xR1LHjc2PXHHJcU7', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-01-25 15:36:18'),
(34, 'makarttech@gmail.com', 'Mak Dial', '60eb5170beb936570b89a0ecfd0f1049', 1, 'nTsXPmmFWOWoQQx9eKvNByWwYxIyivzTesW', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-01-25 15:40:15'),
(35, 'makarttech@gmail.com', 'test', 'c0c16cbefde2883af2abd18e0528d04b', 1, 'gWQY3hmaDmx6EF2R26oK1JFoTQJWQDK3Nfy', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-01-25 16:14:47'),
(38, 'azer@dcsvd', 'dsv', 'f244b2bbb8595dfa98738c05e41d8f47', 1, 'a2B3g8LjK7nyBRd99cnj7gszT9ylGueawXf', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-01-25 16:21:29');

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
  `id_annonce` int(11) NOT NULL,
  `id_type_message` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`id_message`, `objet_message`, `contenu_message`, `date_message`, `etat`, `nom`, `email`, `id_destinataire`, `id_annonce`, `id_type_message`) VALUES
(5, 'qvzsbfqefs', 'befdxcjl,:', '2017-01-26 01:40:31', 0, 'fdfdx', 'fdfd@fdwx', 24, 66, 1),
(6, 'sversbs', 'besrbesfbxc', '2017-01-27 16:58:49', 0, 'azerty', 'rsgvrs@vzqrsves', 23, 63, 1),
(7, 'test', 'azertyuiop', '2017-01-27 17:41:26', 1, 'azerty', 'qwerty@azerty.com', 24, 62, 1),
(8, 'test', 'azertyuiop', '2017-01-27 17:01:18', 0, 'azerty', 'qwerty@azerty.com', 24, 62, 1);

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
(1, 'Senegal', 1),
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
(12, 'Vehicule', 6),
(13, 'moto', 6),
(14, 'Feuilteil', 8),
(15, 'montre', 10),
(16, 'ordinateur', 9),
(17, 'portable', 9),
(18, 'salon', 8);

-- --------------------------------------------------------

--
-- Structure de la table `type_message`
--

CREATE TABLE `type_message` (
  `id_type_message` int(11) NOT NULL,
  `libelle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `type_message`
--

INSERT INTO `type_message` (`id_type_message`, `libelle`) VALUES
(1, 'Message'),
(2, 'Plainte');

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
  ADD UNIQUE KEY `pseudo` (`pseudo`),
  ADD KEY `profil` (`profil`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`),
  ADD KEY `id_detinataire` (`id_destinataire`),
  ADD KEY `id_annonce` (`id_annonce`),
  ADD KEY `id_annonce_2` (`id_annonce`),
  ADD KEY `id_type_message` (`id_type_message`);

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
-- Index pour la table `type_message`
--
ALTER TABLE `type_message`
  ADD PRIMARY KEY (`id_type_message`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `activite`
--
ALTER TABLE `activite`
  MODIFY `id_activite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `affichage`
--
ALTER TABLE `affichage`
  MODIFY `id_affichage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `id_annonce` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id_commentaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `connexion`
--
ALTER TABLE `connexion`
  MODIFY `id_connexion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `duree`
--
ALTER TABLE `duree`
  MODIFY `id_duree` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `localite`
--
ALTER TABLE `localite`
  MODIFY `id_localite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `media`
--
ALTER TABLE `media`
  MODIFY `id_media` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id_membre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
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
  MODIFY `id_type_annonce` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `type_message`
--
ALTER TABLE `type_message`
  MODIFY `id_type_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
  ADD CONSTRAINT `message_ibfk_2` FOREIGN KEY (`id_annonce`) REFERENCES `annonce` (`id_annonce`),
  ADD CONSTRAINT `message_ibfk_3` FOREIGN KEY (`id_type_message`) REFERENCES `type_message` (`id_type_message`);

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
