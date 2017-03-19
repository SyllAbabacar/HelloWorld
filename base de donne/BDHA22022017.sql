-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 22 Février 2017 à 12:18
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
  `image` varchar(150) NOT NULL,
  `forfait` text NOT NULL,
  `condition_de_vente` text NOT NULL,
  `etat_affichage` tinyint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `affichage`
--

INSERT INTO `affichage` (`id_affichage`, `lib_affichage`, `description`, `image`, `forfait`, `condition_de_vente`, `etat_affichage`) VALUES
(1, 'Accueil', ' L’accueil vient après les annonces pros. Il est réservé aux dernières publications pour une durée déterminée selon l’annonceur.  ', 'accueil.PNG', 'L’accueil vous est proposé à une somme de 75 000f pour une durée de 15 jour renouvelable', 'azertyuioqwertyui                                     azertyuioqwertyui                                     azertyuioqwertyui                                     azertyuioqwertyui                                     azertyuioqwertyui                                     azertyuioq', 1),
(2, 'Publicite', 'Nous mettons à votre disposition des espaces publicitaire dans tous nos interfaces. L’annonceur aura la possibilité de choisir entre les interface ou l’accueil pour passer sa publicité que ce soit en image ou en vidéo.\nLes membres Pros auront la possibilité de démarcher leurs propres partenaires ou sponsors afin de passer des publicités dans leurs interface et dans leurs pages avec la coopération de l’administrateur de la plateforme.', 'publicite.PNG', 'Nos espaces publicitaires seront proposés aux enchères avec comme prix de départ 150 000f.\nLe membre pro aura à faire une remise de 30% sur le montant de chaque publicité décrochée pour avoir la permission de diffusion et de gestion de ses publicités.\n', 'Proin nonummy, lacus eget pulvinar lacinia, pede felis dignissim leo, vitae tristique magna lacus sit amet eros. Nullam ornare. Praesent odio ligula, dapibus sed, tincidunt eget, dictum ac, nibh. Nam quis lacus. Nunc eleifend molestie velit. Morbi lobortis quam eu velit. Donec euismod vestibulum massa. Donec non lectus. Aliquam commodo lacus sit amet nulla. Cras dignissim elit et augue. Nullam non diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In hac habitasse platea dictumst. Aenean vestibulum. Sed lobortis elit quis lectus. Nunc sed lacus at augue bibendum dapibus.', 1),
(3, 'Slider', 'Dans notre plateforme, les slides offrent une meilleure vue sur votre produit ou votre entreprise. Il apparait en grand format dès que l’on entre dans le site. Si un client entre dans le slide, il aura la possibilité d’avoir une large vue sur la gamme de vos produits que vous avez publié dans notre site. Nous vous offrons aussi dix possibilités d’annonces dans le même slide.', 'slider.PNG', 'Nous vous offrons nos slides à 150 000f pour une durée de 15 jour renouvelable.', '                                        Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi. Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst.', 1),
(4, 'Recommandation', 'Les recommandations viennent après les Annonces Pros. Elles offrent une parfaite visibilité de vos produits du fait qu’ils apparaissent dans tous les interfaces. ', 'recommandation.PNG', 'Nous vous proposons nos recommandations à 120 000f pour une durée de 15jours renouvelable.', '                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1),
(5, 'Annonce pro', 'Les annonces Pros viennent tout juste après les slides en format moyenne. Elles ont des options de filtres par rapport aux différentes activités. Si un client va sur une annonce spécifique, il aura par défaut toutes les annonces de ce type. ', 'annoncepro.PNG', 'Les Annonces Pros vous sont proposées à auteure de 105 000f pour une durée de 15 jours renouvelable.  ', '                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1),
(6, 'default', 'Zone d''affichage entièrement gratuit. En effet tout vos annonces s''affiche par défaut dans notre site pour une durée de deux semaine. Seulement pour y accéder il faut faire des recherches rapide. ', 'default.jpg', 'Pas de forfait', 'Respecter les condition d''utilisation standard pour tout utilisateur ', 1);

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
(60, '2017-02-18 13:48:49', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'RE0000601F', 1, 14, 24, 337999, 'Feuiteil en main', 'csdqjcjqdcjdhcbqjhbqk:jcn xwh,b  cqjhcb  jcbq cbhcsdqjcjqdcjdhcbqjhbqk:jcn xwh,b  cqjhcb  jcbq cbhcsdqjcjqdcjdhcbqjhbqk:jcn xwh,b  cqjhcb  jcbq cbh', 'keur mbaye fall', 0, 1, 19, 25),
(61, '2017-01-10 16:19:52', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'RE0000611F', 2, 12, 19, 5480000, 'auto police', 'tres belle voiture', 'ici', 1, 1, 18, 18),
(62, '2017-01-22 03:12:34', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'RE0000621F', 1, 13, 24, 500000, 'superbe moto honda', 'ohhhhhh c une superbe moto honda 2016\r\nouf c chaud !!!', 'ici', 1, 1, 18, 18),
(63, '2017-02-22 03:18:37', '2017-02-22 03:18:37', '2017-03-09 03:18:37', 'RE0000631F', 1, 13, 52, 8500999, 'Moto Guzzi 2017', 'vitesse 500km/h c superbe !!!', 'Petit mbao', 1, 1, 19, 20),
(64, '2017-01-22 03:04:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'RE0000641F', 1, 12, 23, 8337999, 'white 4*4', 'azertyui', 'gueoul', 1, 1, 18, 19),
(65, '2017-01-10 16:20:19', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'RE0000651F', 2, 13, 19, 250000, 'bicyclette', 'bicyclette a 2 pneu neuf', 'keur mbaye fall', 0, 1, 18, 19),
(66, '2017-01-22 03:13:01', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'RE0000661F', 2, 13, 24, 5246820, 'white moto', 'tres belle moto', 'gueoul', 1, 1, 18, 19),
(67, '2017-01-10 16:20:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'RE0000671F', 1, 12, 19, 25000000, '2 place hyper belle', 'a decouvrir', 'keur massar', 1, 1, 18, 19),
(68, '2017-01-10 18:02:50', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'RE0000681F', 1, 15, 18, 15000, 'black montre', 'azer 548 noir jaune', 'km', 1, 1, 18, 19),
(69, '2017-02-18 13:52:20', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'RE0000691F', 2, 18, 24, 2500000, 'salon en cuire', 'salon beige en cuire 5 pieces, table en verre, ... ', 'colobane', 0, 1, 19, 20),
(75, '2017-01-13 01:13:10', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'RE0000701F', 2, 10, 18, 574652, 'rvefdx', 'vref4Vzds', 'vrefbgf', 1, 0, NULL, NULL),
(76, '2017-01-24 18:04:17', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'RE0000761F', 1, 12, 24, 6599999, 'BMW 206', 'azertyui qwertyui 0000000', 'Keur Mbaye Fall', 1, 0, NULL, NULL),
(77, '2017-02-22 04:19:10', '2017-02-22 04:19:10', '2017-03-09 04:19:10', 'RE0000771F', 2, 12, 18, 4154121, 'gnfv', 'jgkgvhdxchd', 'azertyui', 1, 1, NULL, 25),
(78, '2017-01-13 10:53:44', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'RE0000781F', 2, 12, 18, 4154121, 'gnfv', 'jgkgvhdxchd', 'azertyui', 1, 0, NULL, NULL),
(79, '2017-01-24 20:41:12', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'RE0000791F', 1, 18, 24, 54276542, 'vefsgbres', 'fvefsvqzsvqsvzqsv fsbgnyrhf,u;ukj8754', 'cdvfebrd', 0, 3, NULL, NULL),
(80, '2017-01-13 10:54:51', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'RE0000801F', 2, 12, 18, 0, 'grhjyntf', 'btrnthg', 'vfsberthtr', 0, 0, NULL, NULL),
(81, '2017-01-24 20:41:30', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'RE0000811F', 1, 10, 18, 15000000, 'terrain 15mÂ²', 'sqdsvvlnoln', 'keur mbaye fall', 1, 3, NULL, NULL),
(82, '2017-02-18 16:08:54', '2017-02-18 16:08:54', '2017-02-18 16:08:54', 'RE0000821F', 2, 10, 24, 0, 'fsdvs', 'ESFDS', 'VEZS', 1, 0, NULL, NULL),
(83, '2017-02-18 18:25:01', '2017-02-18 18:25:01', '2017-03-05 18:25:01', 'RE0000831F', 2, 10, 24, 0, 'fsdvs', 'ESFDS', 'VEZS', 1, 1, NULL, 18),
(84, '2017-02-18 18:55:33', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'RE0000841F', 1, 18, 24, 6166165, 'dsfv', 'azertyuiodcbsjh;,', 'vfsdvc', 1, 0, NULL, NULL),
(85, '2017-02-18 19:07:31', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'RE0000851F', 1, 18, 24, 6868553, 'vdqzs', 'vfdbgfd', 'vfdesv', 1, 0, NULL, 46),
(86, '2017-02-19 00:25:40', '2017-02-19 00:25:40', '2017-03-06 00:25:40', 'RE0000861F', 1, 18, 24, 990000, 'black salon', 'azertyui', 'petite mbao', 1, 1, NULL, 20);

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
  `date_demande` datetime NOT NULL,
  `date_debut_duree` date NOT NULL,
  `date_fin_duree` date NOT NULL,
  `etat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `duree`
--

INSERT INTO `duree` (`id_duree`, `id_annonce_duree`, `id_affichage_duree`, `date_demande`, `date_debut_duree`, `date_fin_duree`, `etat`) VALUES
(1, 59, 1, '0000-00-00 00:00:00', '2016-12-04', '2017-02-23', 0),
(2, 66, 1, '0000-00-00 00:00:00', '2016-12-30', '2018-12-21', 0),
(3, 63, 3, '0000-00-00 00:00:00', '2017-01-04', '2017-03-29', 0),
(4, 62, 3, '0000-00-00 00:00:00', '2017-01-02', '2017-02-28', 1),
(5, 61, 5, '0000-00-00 00:00:00', '2016-12-31', '2017-02-16', 0),
(6, 62, 4, '0000-00-00 00:00:00', '2017-01-04', '2017-04-04', 0),
(7, 67, 5, '0000-00-00 00:00:00', '2017-01-10', '2017-03-21', 0),
(8, 65, 4, '0000-00-00 00:00:00', '2017-01-04', '2017-02-28', 0),
(9, 60, 5, '0000-00-00 00:00:00', '2017-01-10', '2017-02-24', 0),
(10, 60, 3, '0000-00-00 00:00:00', '2017-01-10', '2017-03-10', 0),
(11, 68, 5, '0000-00-00 00:00:00', '2017-01-10', '2017-03-23', 0),
(12, 69, 3, '0000-00-00 00:00:00', '2017-01-10', '2017-02-22', 0),
(13, 59, 4, '0000-00-00 00:00:00', '2017-01-31', '2017-02-28', 0),
(14, 63, 2, '0000-00-00 00:00:00', '2017-02-07', '2017-03-05', 0),
(15, 63, 4, '2017-02-22 02:48:28', '2017-02-01', '2017-03-05', 0),
(16, 63, 4, '2017-02-22 02:48:55', '2017-02-01', '2017-02-27', 0),
(17, 63, 6, '2017-02-22 02:54:24', '2017-02-09', '2017-02-25', 0);

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
  `description` varchar(250) DEFAULT NULL
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
(6, 61, 'img23.jpg', 'ohhh oups....                                                             debut ersgrevsd vdfdrfbes dbtgrd fin'),
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
(17, 69, 'salon3.jpg', 'azerty'),
(18, 85, 'WIN_20160722_13_46_09_Pro.jpg', 'fbdfbsdfbd'),
(19, 85, 'img8.jpg', 'dsvds'),
(20, 85, 'img11.jpg', 'fbsedrbetdf'),
(21, 85, 'I76.jpg', 'zertyu'),
(22, 86, 'salon6.jpg', 'vu de face'),
(23, 86, 'noimage.png', 'evzqvdw'),
(24, 86, 'salon5.jpg', 'fgesrdfv'),
(25, 86, 'salon4.jpg', 'sxlqw,l,'),
(26, 86, 'img11.jpg', 'dvswxc'),
(27, 61, 'secondarytile.png', 'dvswrgzs'),
(28, 60, 'secondarytile.png', 'dsfbxfdc'),
(29, 60, 'WIN_20160722_08_17_21_Pro.jpg', 'dfsvfdvedf dfvesdf'),
(30, 60, 'WIN_20170215_09_21_30_Pro.jpg', 'esdwvgersd'),
(31, 60, '', ''),
(32, 69, '', ''),
(33, 69, 'salon1.jpg', '86465'),
(34, 69, '', ''),
(35, 69, 'img12.jpg', 'uihkjn'),
(36, 75, 'fatima.jpg', 'bhuolj;'),
(37, 75, '', 'dswfv'),
(38, 75, 'mct.jpg', 'gvuvkgyk'),
(39, 75, 'vati.jpg', 'rcytkuvb'),
(40, 76, '8.jpg', 'rjcyfgv'),
(41, 76, 'salon8.jpg', 'fyckgvj'),
(42, 76, 'salon10.jpg', 'ykcfg'),
(43, 76, 'salon6.jpg', 'ulgvj;'),
(44, 77, 'array(1) {\n  ["file"]=>\n  array(5) {\n    ["name"]=>\n    string(9) "ICONE.png"\n    ["type"]=>\n    string(9) "image/png"\n    ["tmp_name"]=>\n    string(2', 'dsx'),
(45, 77, 'array(1) {\n  ["file"]=>\n  array(5) {\n    ["name"]=>\n    string(9) "ICONE.png"\n    ["type"]=>\n    string(9) "image/png"\n    ["tmp_name"]=>\n    string(2', 'dsvw'),
(46, 77, 'footereau.jpg', 'ds'),
(47, 77, 'FOOTER.png', 'dvsd'),
(48, 80, 'FOOTER.png', 'resrdf'),
(49, 80, 'footereau.jpg', NULL),
(50, 80, 'foot6.png', NULL),
(51, 80, 'foot7.jpg', 'yfgkjhk'),
(52, 78, 'foot3.jpg', 'esd'),
(53, 78, 'foot.jpg', 'azertyui'),
(54, 78, 'foot4.jpg', 'vglhj'),
(55, 78, 'shipping1.png', 'yiglhk');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id_membre` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `code` varchar(15) NOT NULL,
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

INSERT INTO `membre` (`id_membre`, `email`, `code`, `pseudo`, `password`, `profil`, `jeton`, `nom`, `prenom`, `tel`, `adresse`, `profession`, `date_naissance`, `photo`, `facebook`, `twitter`, `google`, `youtube`, `linkedin`, `site`, `etat_membre`, `date_membre`) VALUES
(18, 'cheikh@tidiany.wgb', 'dsvsd', 'Tidiany', '@azerty', 1, 'charabia', 'toure', 'cheikh', '221 77 947 14 05', 'fass', 'analyste-developpeur-programeur', '2006-12-03', 'profil.jpg', 'fmame@yohoo.com', 'tmame@yohoo.com', 'gmame@yohoo.com', 'ymame@yohoo.com', 'lmame@yohoo.com', 'www.mame@cheikh.wgb', 1, '2017-02-20 20:36:10'),
(19, 'cheikh@tidiany.wgb', 'dvresvrefsb', 'Tidiany548', '@azerty', 3, 'charabia', 'toure', 'cheikh', '221 77 947 14 05', 'fass', 'analyste-developpeur-programeur', '2006-12-03', 'profil.jpg', 'fmame@yohoo.com', 'tmame@yohoo.com', 'gmame@yohoo.com', 'ymame@yohoo.com', 'lmame@yohoo.com', 'www.mame@cheikh.wgb', 1, '2017-02-17 13:16:12'),
(20, 'testmail', 'dsvvrefsgvr', 'testPseudo', 'testPass', 2, '', 'testNom', 'testPrenom', 'testtel', 'testAdrs', 'testProfession', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 1, '2017-02-18 10:46:30'),
(21, 'ebf@uygy.hjbj', 'tnrdntrs', 'rbbs', '123', 1, '', 'vsfbv', 'bedfb', 'cyjht', 'cycfyjh', 'yfytj', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 1, '2017-02-18 10:46:32'),
(22, 'ghyi@fnhfgh.yjtfyg', 'vzqgrvd', 'y,tg', '123', 1, '', 'ghtr', 'nrdfg', 'sbdbxc', 'nt,jg', 'gf,hg', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 1, '2017-02-18 10:46:34'),
(23, 'azaq@erty.aa', 'vrdsbedf', 'azaq', 'manela', 1, '', 'azertyui', 'qwertyui', '114578522', 'azq', 'azertyuio', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 1, '2017-02-18 10:46:38'),
(24, 'lamzapro@gmail.com', 'vbqezbsfs', 'lamza', 'dadca1d6069ff95914dad703dbac7d00', 3, '', 'Diallo', 'Lamine', '772584565', 'Keur Mbaye Fall', 'Devellopeur', '1989-01-28', 'profil.jpg', '', '', '', '', '', '', 1, '2017-02-20 20:37:32'),
(25, 'fdwvsf@dvswx', 'bedbstrd', 'fdx', 'f244b2bbb8595dfa98738c05e41d8f47', 2, 'OS8v5kq8M9wFxGQrurcTerZnxxwkpGhWLx1', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-02-17 17:05:42'),
(27, 'tourecheikhmame1@gmail.com', 'bedfwbd', 'Toure', 'c0c16cbefde2883af2abd18e0528d04b', 3, 'Rj5Plx8fhmKKs7qI2we9qyDgF4WF3oOO9FI', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-02-17 13:16:25'),
(28, 'azer@FDFV', 'rbf qebf', 'VDES', 'f244b2bbb8595dfa98738c05e41d8f47', 1, 'FV7O8pGFZIucDs4A1jixbuafBNPkj4N2rg2', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-02-17 13:16:26'),
(29, 'tourecheikhmame2@gmail.com', 'vzdsve', 'Testmail', '60eb5170beb936570b89a0ecfd0f1049', 1, 'qTp7O5wzfL989uTjOoVQUHmMQQ6kQQL1Kfm', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-02-17 13:16:28'),
(32, 'tourecheikhmame@gmail.com', 'fsveqfd', 'azertyu', 'f244b2bbb8595dfa98738c05e41d8f47', 1, '2lYL5nl2PVA2NCEwY7e3fcTFooNfysXsV85', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-02-17 13:16:30'),
(33, 'tourecheikhmame@gmail.com', 'vefdbed', 'qwertyu', 'c0c16cbefde2883af2abd18e0528d04b', 1, 'kRURyCMv2oz6U3EP6p7xR1LHjc2PXHHJcU7', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-02-17 13:16:31'),
(34, 'makarttech@gmail.com', 'vfeswvf', 'Mak Dial', '60eb5170beb936570b89a0ecfd0f1049', 1, 'nTsXPmmFWOWoQQx9eKvNByWwYxIyivzTesW', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-02-17 13:16:33'),
(35, 'makarttech@gmail.com', ' bgdbsd', 'test', 'c0c16cbefde2883af2abd18e0528d04b', 1, 'gWQY3hmaDmx6EF2R26oK1JFoTQJWQDK3Nfy', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-02-17 13:16:34'),
(38, 'azer@dcsvd', 'vzqsvbefd', 'dsv', 'f244b2bbb8595dfa98738c05e41d8f47', 2, 'a2B3g8LjK7nyBRd99cnj7gszT9ylGueawXf', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-02-17 17:05:49'),
(44, 'dsxvd@ds.ds', 'M000039HA', 'qsc', 'f244b2bbb8595dfa98738c05e41d8f47', 1, 'd5kyyv3TNl1Lmmh1amhPEhJTTW7vdD9gMWZ', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-02-17 13:16:57'),
(46, 'makarttech@gmail.com', 'M000045HA', 'Makdial', '53a9f64ab59e12826810e36e94c83267', 1, 'ZzjvGcizP9O6jpl1qxFsYTlmlp6xZX4yX8y', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-02-09 12:39:30'),
(49, 'makarttech@gmail.com', 'M000047HA', 'Mak diallo', '53a9f64ab59e12826810e36e94c83267', 1, 'izl9VjOMXgaEfK2KGZru8yCQa12LLvQUqLR', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-02-09 12:47:47'),
(50, 'azert@cds.cds', 'M000050HA', 'mak diale', 'f244b2bbb8595dfa98738c05e41d8f47', 1, 'xHo96rgQ1GraRP78PFr4m8G9GFM7uIqgspl', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-02-15 20:31:16'),
(51, 'azert@cds.com', 'M000051HA', 'mak dialle', 'f244b2bbb8595dfa98738c05e41d8f47', 1, 'YGlBtGzZsmeEbJk5BYSpmR5RYg8ETl1esEW', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-02-15 20:34:19'),
(52, 'admin@admin.com', 'M000052HA', 'Admin', 'a8003444bfe359424f607b55998e766a', 5, 'BKmax5sdmN9M1mxE6benrjvVuSGCq3Bj7IS', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-02-20 20:46:27'),
(53, 'MSimple@ms', 'M000053HA', 'MSimple', '75e733389437c5960208a7f340c01538', 1, '91Dqcnj5gjWbs6aC3zLUZ3GyFkt4Td4VOKh', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-02-20 19:11:56'),
(54, 'MPro@mp.ha', 'M000054HA', 'MPro', '95168a12406a3ba2fd9e84bea7ff5eb3', 3, 'IF7ZVqRReDntQpetGAFkP4z9iVc6uDg7dPM', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-02-20 20:46:53'),
(55, 'Comm@com', 'M000055HA', 'Comm', 'ea795f06f8aba6f2ce1120070a3cc708', 2, 'FIEjHhVv7OpJSLtRSJJkzRF9U6Wbmr1l5Fh', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-02-20 20:47:02'),
(56, 'vfdx@vfdcx', 'M000056HA', 'vefdvf', 'f244b2bbb8595dfa98738c05e41d8f47', 1, '3sRi5ynWYtEfdEXMzePyItAK2ilxaTamPAD', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-02-20 19:24:08'),
(57, 'dvfewbfsebdfsebdtgfdx@vdzqs', 'M000057HA', 'vdsrvdw', 'f244b2bbb8595dfa98738c05e41d8f47', 1, 'rQWDq5FYp9eTalbtGLgulrmLokaSknGFJvf', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-02-20 19:32:16'),
(58, 'fvbdf@fdcx', 'M000058HA', 'rvfdwx', 'f244b2bbb8595dfa98738c05e41d8f47', 1, 'XjGFxEv7aENQeMxrGk3sSfOxIxGN8IWxQO3', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-02-20 19:34:54'),
(59, 'dfswbvfd@vdsw', 'M000059HA', 'vdfwds', 'f244b2bbb8595dfa98738c05e41d8f47', 1, 'UWLTe5XoWlvQK7wS59nOCUyMJ59WiT1naYd', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-02-20 19:37:59'),
(60, 'veswdvf@vfdw', 'M000060HA', 'vfedw', 'f244b2bbb8595dfa98738c05e41d8f47', 1, '7wCCbTaPwiuUbIkkgKc3asGcCOIITQR7EsN', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-02-20 19:40:07'),
(61, 'dfswbvfd@vfed', 'M000061HA', 'vfed', 'f244b2bbb8595dfa98738c05e41d8f47', 1, 'KlRSoNV1AXgx3mH9nlzw5EAJ2WhrWCA3o5r', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-02-20 19:44:45'),
(62, 'vrfesdvf@fdxc', 'M000062HA', 'dsvbrxfgc', 'f244b2bbb8595dfa98738c05e41d8f47', 1, 'MDwivKlMKdDBgAqrG2QlAnniUvB8eIrA9pl', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-02-20 19:46:26'),
(63, 'fbsdtfgbd@bfgr', 'M000063HA', 'fbsedbrgd', 'f244b2bbb8595dfa98738c05e41d8f47', 1, 'kASNfpq4nHbnb93c9nmOIe5wZqwoZg5Ev5N', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-02-20 19:55:21'),
(64, 'jhvvxhgchkhlk@j', 'M000064HA', 'gfhvhncv', 'f244b2bbb8595dfa98738c05e41d8f47', 1, 'cqfUEeHPmW3zYkXODi3hZXZKoAXDwzKeXQr', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-02-20 19:59:13'),
(65, 'fvbfdvckj@fvdxbc', 'M000065HA', 'vf esdbtfd', 'f244b2bbb8595dfa98738c05e41d8f47', 1, 'lZkOASY8pI8ej82IOQoJG3kyFkoqP3H88Dh', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-02-20 20:10:57'),
(66, 'fdwhvfbhxj@fd', 'M000066HA', 'defswvf', 'f244b2bbb8595dfa98738c05e41d8f47', 1, 'ec86P4oZohnA15LVgiyK92g8hsUkQKmzZrc', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-02-20 20:11:47'),
(67, 'fchvbsdkvbs@fdxb', 'M000067HA', 'fedxbtrsfgdbsdfijxncvjols', 'f244b2bbb8595dfa98738c05e41d8f47', 1, 'LFwhfMDHktmX3173VMSyxpFPvgpCXfj75w7', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-02-20 20:13:13'),
(68, 'fchvbsdkvbs@fdxbfwdbvfdx', 'M000068HA', 'fedxbtrsfgdbsdfijxncvjolsfvdwbfesdxdfwsedf', 'f244b2bbb8595dfa98738c05e41d8f47', 1, 'iIkFMZrdqm6JYFdlLeLE5iCSzPB8NQx3fdH', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-02-20 20:13:35'),
(69, '655@653', 'M000069HA', '656116', 'f244b2bbb8595dfa98738c05e41d8f47', 1, 'nxDsUwEuw7VKhUhhMV7JVOYPgL9McE8Osd6', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-02-20 20:14:16'),
(70, 'fdbfdxc@fdvxc', 'M000070HA', 'vrfedxc', 'f244b2bbb8595dfa98738c05e41d8f47', 1, 'Il8PrjNOfcQcwBgOv539VfuyK7YMaBCJ6JH', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-02-20 20:16:00'),
(71, 'vfdxcfdvbgfd@fdx', 'M000071HA', 'dfedswbtrnfxgh fc', 'f244b2bbb8595dfa98738c05e41d8f47', 1, 'eJoCpP3BROeAPxXX32GLsdlVmgsGFgcF8b6', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-02-20 20:18:50'),
(72, 'fdvxcfdvcx@fdxv', 'M000072HA', 'vefdwvxcdf', 'f244b2bbb8595dfa98738c05e41d8f47', 1, 'ev9qvJSMeZcJuKwfgqT9DpYkZgsNkVVvvnN', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-02-20 20:19:38'),
(73, 'fdbfgvcgfdvc@vfd', 'M000073HA', 'vrbsdndrgf', 'f244b2bbb8595dfa98738c05e41d8f47', 1, 'L85uSz2B3wmUhI4d7MZWyMD2OFYLW941AJ8', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-02-20 20:20:58'),
(74, 'vfsdbd@bfdsbx', 'M000074HA', 'brsdfgbgrfdcv', 'f244b2bbb8595dfa98738c05e41d8f47', 1, 'TdN1qZ5nDxHfbcZAsmCAnhuz2YlxOtyX3nW', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-02-20 20:21:26'),
(75, 'fdxbgfdc@bgfdvb', 'M000075HA', 'bvfsdxbv c', 'f244b2bbb8595dfa98738c05e41d8f47', 1, '2foOSsAd8p2Fcvy63kZEhdbNippIa9a3RHk', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-02-20 20:22:08'),
(76, 'vfdbfgdbd@gbfd', 'M000076HA', 'fdsbdfgxvc', 'f244b2bbb8595dfa98738c05e41d8f47', 1, 'qn4W6XqcjAeYzkCBWGCWWDBEBvR464gqmN1', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-02-20 20:25:36'),
(77, 'fdxbdfbrgfbbgrfd@fgbfgxcnfd', 'M000077HA', 'fbsdxbgrdf', '66cf76413d20414fdee035ba59893781', 1, '4kYVcy4VNElpv8DeSC8LGtIuBDeIQYjy2q8', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-02-20 20:27:30'),
(78, 'vfedswbfdbfg@fbsdbgf', 'M000078HA', 'fdbdfgv', 'f244b2bbb8595dfa98738c05e41d8f47', 1, '6DvqSKbErzfAwfvZGjwzfXkrBRjPFjyTwrv', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-02-20 20:29:34'),
(79, 'fdbfdfbbbf@fdxcb', 'M000079HA', 'fedsbrgfdbrfg', 'f244b2bbb8595dfa98738c05e41d8f47', 1, 'mVxRYGDDzHTOwyQwfZOdUF2DHt7dkJoToxi', '', '', '', '', '', '0000-00-00', 'profil.jpg', '', '', '', '', '', '', 0, '2017-02-20 20:32:05');

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
  `id_destinataire` int(11) DEFAULT NULL,
  `id_annonce` int(11) DEFAULT NULL,
  `id_type_message` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`id_message`, `objet_message`, `contenu_message`, `date_message`, `etat`, `nom`, `email`, `id_destinataire`, `id_annonce`, `id_type_message`) VALUES
(5, 'qvzsbfqefs', 'befdxcjl,:', '2017-02-09 02:20:09', 1, 'fdfdx', 'fdfd@fdwx', 24, 66, 1),
(6, 'sversbs', 'besrbesfbxc', '2017-01-27 16:58:49', 0, 'azerty', 'rsgvrs@vzqrsves', 23, 63, 1),
(7, 'test', 'azertyuiop', '2017-01-27 17:41:26', 1, 'azerty', 'qwerty@azerty.com', 24, 62, 1),
(8, 'test', 'azertyuiop', '2017-01-27 17:01:18', 0, 'azerty', 'qwerty@azerty.com', 24, 62, 1),
(9, 'edsw', 'verws', '2017-01-30 11:55:07', 0, 'dvfewd', 'rvebwd', 24, 60, 1),
(10, 'test', 'azertyu', '2017-02-20 16:57:22', 0, 'mak', 'mak@dial', NULL, NULL, 3),
(11, 'dsvs', 'vdsvefdbed', '2017-02-20 18:50:56', 0, 'dvesdf', 'dsw@dswv', NULL, NULL, 3),
(12, 'fdsbfdx', 'bf bgfdc', '2017-02-20 19:00:39', 0, 'fvedf', 'bfdxbvx@fedxc', NULL, NULL, 3);

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
(2, 'Commercial', ''),
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
(18, 'salon', 8),
(19, 'imprimente', 9);

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
(2, 'Plainte'),
(3, 'Contact');

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
  MODIFY `id_affichage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `id_annonce` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
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
  MODIFY `id_duree` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `localite`
--
ALTER TABLE `localite`
  MODIFY `id_localite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `media`
--
ALTER TABLE `media`
  MODIFY `id_media` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id_membre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
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
  MODIFY `id_type_annonce` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT pour la table `type_message`
--
ALTER TABLE `type_message`
  MODIFY `id_type_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
