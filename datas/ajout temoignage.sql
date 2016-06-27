-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 27 Juin 2016 à 14:09
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `sophie`
--

-- --------------------------------------------------------

--
-- Structure de la table `citation`
--

CREATE TABLE IF NOT EXISTS `citation` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `texte` varchar(150) DEFAULT NULL,
  `auteur` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `creation`
--

CREATE TABLE IF NOT EXISTS `creation` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(150) DEFAULT NULL,
  `description` text,
  `imghref` text,
  `imgsrc` text,
  `vendu` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `creation`
--

INSERT INTO `creation` (`id`, `nom`, `description`, `imghref`, `imgsrc`, `vendu`) VALUES
(1, 'Nulla ultrices magna mass', 'Nulla ultrices magna massa, vel commodo ligula lobortis vel. Curabitur in molestie eros. Suspendisse posuere cursus sem ut tristique. Duis sit amet leo sit amet ex luctus volutpat et eget sem. Praesent feugiat mauris turpis, at ullamcorper mauris bibendum sed. Integer eu pellentesque urna. ', '001.jpg', '001.jpg', 1),
(2, 'Curabitur ', 'Duis sit amet leo sit amet ex luctus volutpat et eget sem. Praesent feugiat mauris turpis, at ullamcorper mauris bibendum sed. Integer eu pellentesque urna. ', '002.jpg', '002.jpg', 0),
(3, 'Mauris mi lorem', 'Cras vel velit quis lorem bibendum iaculis. Mauris pharetra magna magna, quis suscipit lacus sodales sit amet. Mauris mi lorem, convallis in dignissim eget, tincidunt quis lectus. Morbi vel leo porta, efficitur odio ut, placerat odio. ', '003.jpg', '003.jpg', 0),
(4, 'Proin in tortor quis diam', 'Cras vel velit quis lorem bibendum iaculis. Mauris pharetra magna magna, quis suscipit lacus sodales sit amet. Mauris mi lorem, convallis in dignissim eget, tincidunt quis lectus. Morbi vel leo porta, efficitur odio ut, placerat odio. ', '004.jpg', '004.jpg', 0),
(5, 'Ut pharetra ex', 'Cras vel velit quis lorem bibendum iaculis. Mauris pharetra magna magna, quis suscipit lacus sodales sit amet.', '005.jpg', '005.jpg', 0),
(6, 'Ut pharetra ex sed', 'Cras vel velit quis lorem bibendum iaculis. Mauris pharetra magna magna, quis suscipit lacus sodales sit amet.', '006.jpg', '006.jpg', 0),
(7, 'Ex luctus volutpat', 'Nulla ultrices magna massa, vel commodo ligula lobortis vel. Curabitur in molestie eros. Suspendisse posuere cursus sem ut tristique. Duis sit amet leo sit amet ex luctus volutpat et eget sem. Praesent feugiat mauris turpis, at ullamcorper mauris bibendum sed. Integer eu pellentesque urna. ', '007.jpg', '007.jpg', 0),
(8, 'Ut vitae dolor arcu', 'Donec fringilla risus sagittis, luctus quam eget, viverra lacus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.', '008.jpg', '008.jpg', 0),
(9, 'Aenean ', 'Vestibulum vel facilisis felis. Aenean imperdiet sollicitudin mi, sit amet blandit metus. Nullam sed lacus eget ex gravida tristique. Fusce ut iaculis magna. Aenean auctor facilisis diam, sit amet rutrum arcu luctus non. Nunc maximus tellus eu congue tincidunt.', '009.jpg', '009.jpg', 0),
(10, 'Integer ', 'Quisque fringilla, diam vel efficitur molestie, justo metus varius quam, et accumsan eros felis ac sapien. Integer ac tortor tristique odio rhoncus faucibus ut vel elit. ', '010.jpg', '010.jpg', 0),
(11, 'Morbi mattis', 'Nulla ultrices magna massa, vel commodo ligula lobortis vel. Curabitur in molestie eros. Suspendisse posuere cursus sem ut tristique. Duis sit amet leo sit amet ex luctus volutpat et eget sem. Praesent feugiat mauris turpis, at ullamcorper mauris bibendum sed. Integer eu pellentesque urna. ', '011.jpg', '011.jpg', 0),
(12, 'Morbi mattis', 'Nulla ultrices magna massa, vel commodo ligula lobortis vel. Curabitur in molestie eros. Suspendisse posuere cursus sem ut tristique. Duis sit amet leo sit amet ex luctus volutpat et eget sem. Praesent feugiat mauris turpis, at ullamcorper mauris bibendum sed. Integer eu pellentesque urna. ', '012.jpg', '012.jpg', 0),
(13, 'Proin neque libero', 'Quisque fringilla, diam vel efficitur molestie, justo metus varius quam, et accumsan eros felis ac sapien. Integer ac tortor tristique odio rhoncus faucibus ut vel elit. ', '013.jpg', '013.jpg', 0),
(14, 'Proin neque libero', 'Quisque fringilla, diam vel efficitur molestie, justo metus varius quam, et accumsan eros felis ac sapien. Integer ac tortor tristique odio rhoncus faucibus ut vel elit. ', '014.jpg', '014.jpg', 0),
(15, 'Curabitur finibus', 'Nulla ultrices magna massa, vel commodo ligula lobortis vel. Curabitur in molestie eros. Suspendisse posuere cursus sem ut tristique. Duis sit amet leo sit amet ex luctus volutpat et eget sem. Praesent feugiat mauris turpis, at ullamcorper mauris bibendum sed. Integer eu pellentesque urna. ', '015.jpg', '015.jpg', 0),
(16, 'Nunc posuere sollicitudin accumsan', 'Nulla ac turpis molestie, lacinia lorem vel, fringilla leo. In imperdiet eros nec tortor pharetra venenatis nec id metus. Proin neque libero, pellentesque tempor erat porttitor, elementum tristique diam. Cras facilisis consectetur leo non facilisis. Quisque fringilla, diam vel efficitur molestie, justo metus varius quam, et accumsan eros felis ac sapien. Integer ac tortor tristique odio rhoncus faucibus ut vel elit. ', '016.jpg', '016.jpg', 0),
(17, 'Cras ', 'Cras consequat accumsan egestas. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. ', '017.jpg', '017.jpg', 0);

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE IF NOT EXISTS `evenement` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(150) DEFAULT NULL,
  `ladate` timestamp NULL DEFAULT NULL,
  `description` text,
  `lieu` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `evenement`
--

INSERT INTO `evenement` (`id`, `titre`, `ladate`, `description`, `lieu`) VALUES
(1, 'Odio dignissimos ducimus', '2016-06-14 20:00:00', 'Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.', 'Chaussée de Charleroi 144, 1080 Bruxelles'),
(2, 'Morbi faucibus nibh odio', '2016-06-23 20:00:00', 'Duis in venenatis quam. Nulla tristique vel sem et semper. Nam facilisis, quam at faucibus ullamcorper, libero eros pulvinar neque, vitae commodo lectus lacus id mauris. Aliquam erat volutpat. Donec at lacus vitae odio efficitur commodo bibendum ac diam. ', 'Chaussée d''Ixelles 15, 1050 Ixelles'),
(3, 'Sed tempor pulvinar', '2016-05-31 20:00:00', 'Etiam ligula metus, aliquam at maximus vitae, pharetra a odio. In lobortis tincidunt nisi eget auctor. Phasellus et justo massa. Etiam non mi sit amet diam blandit elementum at eu lacus. Etiam odio urna, fringilla at tempus in, suscipit et nunc. Sed eros arcu, laoreet et dapibus quis, varius eu turpis. ', 'Rue de l''Eglise 15, 1520 Ville');

-- --------------------------------------------------------

--
-- Structure de la table `partenaire`
--

CREATE TABLE IF NOT EXISTS `partenaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `logohref` text NOT NULL,
  `logosrc` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `peinture`
--

CREATE TABLE IF NOT EXISTS `peinture` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(150) DEFAULT NULL,
  `description` text,
  `imghref` text,
  `imgsrc` text,
  `vendu` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `peinture`
--

INSERT INTO `peinture` (`id`, `nom`, `description`, `imghref`, `imgsrc`, `vendu`) VALUES
(1, 'Un super titre !', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'img01.jpg', 'img01.jpg', 1),
(2, 'Un autre super titre très classe', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', 'img02.jpg', 'img02.jpg', 0),
(3, 'Ut enim ad minima veniam', 'Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 'img03.jpg', 'img03.jpg', 0),
(4, 'Ut enim ad minima veniam', 'Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 'img04.jpg', 'img04.jpg', 0),
(5, 'dfsqdfq fdsqf', 'dqf qfddfsdfqe reffsdgfgfgfd  fdsfsq dfd ', 'img05.jpg', 'img05.jpg', 0),
(6, 'fdsqjklfmsdqf ', 'dsqfsqfsdqf fsdfsd fsd dfdsd qAE RGFDGS  fdsdf', 'img06.jpg', 'img06.jpg', 0),
(7, 'De Finibus Bonorum et Malorum', 'Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?', 'img07.jpg', 'img07.jpg', 0),
(8, 'De Finibus Bonorum et Malorum', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. ', 'img08.jpg', 'img08.jpg', 0);

-- --------------------------------------------------------

--
-- Structure de la table `temoignage`
--

CREATE TABLE IF NOT EXISTS `temoignage` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `profession` varchar(150) DEFAULT NULL,
  `age` varchar(150) DEFAULT NULL,
  `texte` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `temoignage`
--

INSERT INTO `temoignage` (`id`, `nom`, `email`, `profession`, `age`, `texte`) VALUES
(1, 'da', 'da', 'da', 'da', 'da'),
(2, 'da', 'da', 'da', 'da', 'da');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
