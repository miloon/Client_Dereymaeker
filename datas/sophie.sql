-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 28 Juin 2016 à 15:51
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `citation`
--

INSERT INTO `citation` (`id`, `texte`, `auteur`) VALUES
(1, '"Si une femme est mal habillée, on remarque sa robe, mais si elle est impeccablement vêtue, c''est elle que l''on remarque"', 'Coco Chanel'),
(2, '"Personne n''est jeune après quarante ans, mais on peut être irrésistible à tout âge"', 'Coco Chanel'),
(3, '"La beauté apparaît lorsque vous décidez d''être vous même"', 'Coco Chanel'),
(4, '"La mode se démode, le style jamais"', 'Coco Chanel');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `creation`
--

INSERT INTO `creation` (`id`, `nom`, `description`, `imghref`, `imgsrc`, `vendu`) VALUES
(1, 'Nulla ultrices magna mass', 'Nulla ultrices magna massa, vel commodo ligula lobortis vel. Curabitur in molestie eros. Suspendisse posuere cursus sem ut tristique. Duis sit amet leo sit amet ex luctus volutpat et eget sem. Praesent feugiat mauris turpis, at ullamcorper mauris bibendum sed. Integer eu pellentesque urna. ', '001.jpg', '001.jpg', 1),
(2, 'Curabitur ', 'Duis sit amet leo sit amet ex luctus volutpat et eget sem. Praesent feugiat mauris turpis, at ullamcorper mauris bibendum sed. Integer eu pellentesque urna. ', '002.jpg', '002.jpg', 0),
(3, 'Mauris mi lorem', 'Cras vel velit quis lorem bibendum iaculis. Mauris pharetra magna magna, quis suscipit lacus sodales sit amet. Mauris mi lorem, convallis in dignissim eget, tincidunt quis lectus. Morbi vel leo porta, efficitur odio ut, placerat odio. ', '003.jpg', '003.jpg', 1),
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `evenement`
--

INSERT INTO `evenement` (`id`, `titre`, `ladate`, `description`, `lieu`) VALUES
(1, 'Odio dignissimos ducimus', '2016-06-14 22:00:00', 'Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.', 'Chaussée de Charleroi 144, 1080 Bruxelles'),
(2, 'Morbi faucibus nibh odio', '2016-06-23 22:00:00', 'Duis in venenatis quam. Nulla tristique vel sem et semper. Nam facilisis, quam at faucibus ullamcorper, libero eros pulvinar neque, vitae commodo lectus lacus id mauris. Aliquam erat volutpat. Donec at lacus vitae odio efficitur commodo bibendum ac diam. ', 'Chaussée d''Ixelles 15, 1050 Ixelles'),
(3, 'Sed tempor pulvinar', '2016-05-31 22:00:00', 'Etiam ligula metus, aliquam at maximus vitae, pharetra a odio. In lobortis tincidunt nisi eget auctor. Phasellus et justo massa. Etiam non mi sit amet diam blandit elementum at eu lacus. Etiam odio urna, fringilla at tempus in, suscipit et nunc. Sed eros arcu, laoreet et dapibus quis, varius eu turpis. ', 'Rue de l''Eglise 15, 1520 Ville'),
(4, 'The Rolling Stones\r\n', '2016-10-06 22:00:00', 'Empire Polo Club\r\n\r\nRolling Stone est un magazine bimensuel américain sur la pop culture mais à dominante musicale, créé à San Francisco en 1967 par Jann Wenner et par le critique de musique Ralph J. Gleason. Wenner était en 2008 l''éditeur du magazine.\r\n\r\nLe titre est aujourd''hui publié dans dix-huit pays, dont la Chine, l''Inde, ou la Russie. L''édition en langue française a été lancée par Lionel Rotcage, ancien journaliste à Libération ; le no 1 est daté de janvier-février 1988.', 'Indio, CA'),
(5, 'Kalascima', '2016-08-22 22:00:00', 'Festival d''Art de Huy\r\n\r\nWorld music Alternative Indie Folk Psychedelic Trance Tarantella Band based in Salento Italy.', 'Place Verte, Huy, Belgium'),
(6, 'Marlene Kuntz', '2016-07-01 22:00:00', 'Area Palaverde\r\n\r\nMarlene Kuntz began forming in 1987 consisting of Luca Bergia on drums and Riccardo Tesio on guitar. Franco Ballatore joined the band on bass guitar the following year and that winter they found a rehearsal room in Confreria. In 1989, Cristiano Godano joined the band playing guitar and writing songs. Alex Astegiano also came in as the singer. In May they played their first concert in Cuneo playing "1° 2° 3°", "La verità" and "Emozioni Nascoste". In February 1990, they recorded a 4 song demo including "La verità", "Trasudamerica", "1° 2° 3°" and "Capello lungo". In April they also recorded their first video, "Merry X-mas". After the concert on April 25 at Cortemilia, Alex left the band due to working pressure. Cristiano replaced him as a lead singer while continuing playing guitar. In July, the new line-up recorded the second demo with 4 songs: "Donna L", "Gioia che mi do", "Signor Niente" and "Merry X-mas".', 'Azzano Decimo, Italy'),
(7, 'Red Hot Chili Peppers', '2016-07-21 22:00:00', 'Fuji Rock Festival\r\n\r\nRed Hot Chili Peppers (couramment abrégé en Red Hot ou RHCP) est un groupe de rock américain formé en 1983 à Los Angeles. Leur musique mêle principalement des éléments de rock et de funk, avec des influences punk, metal et de rap1.\r\n\r\nLes Red Hot Chili Peppers ont commencé à se faire connaître dans des clubs par des prestations très survoltées, avant d''enchaîner de nombreuses apparitions dans les festivals underground. Après la mort tragique du guitariste Hillel Slovak en 1988, ils ont commencé à écrire des textes plus profonds, accompagnés de mélodies plus complexes et recherchées.', 'Mukawa, Japan');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `partenaire`
--

INSERT INTO `partenaire` (`id`, `nom`, `logohref`, `logosrc`) VALUES
(1, 'CF2m', 'http://www.cf2m.be/', 'http://www.aid-com.be/sites/default/files/upload/Logos/logo_cf2m.png'),
(2, 'Bruxelles Formation', 'http://www.bruxellesformation.be/', 'http://www.bruxellesformation.be/uploads/images/la%20formation%20a%20bruxelles/logos/nouveau_logo/avec_slogan/logo_bf_300dpi_blue.png');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `temoignage`
--

INSERT INTO `temoignage` (`id`, `nom`, `email`, `profession`, `age`, `texte`) VALUES
(1, 'Isabelle', NULL, NULL, NULL, 'Quand j&#39;ai rencontré Sophie pour la première fois, je venais d&#39;avoir mon troisième enfant, quelques kilos de trop, les cheveux un peu ternes et une terrible envie de renouer avec une séduction toute féminine.\r\n\r\nLes premiers conseils de Sophie ont porté sur une analyse couleur.  A l&#39;aide d&#39;étoffes et d&#39;un miroir, elle m&#39;a fait prendre conscience des tons qui me flattent et de ceux à éviter.  Ensuite, je suis passée à l&#39;analyse morphologique. Munie de deux énormes bâtons, Sophie m&#39;a expliqué les atouts de ma silhouette, les formes de vêtements à privilégier et les coupes que je ne dois pas choisir. Pour terminer cette phase de conseil, Sophie m&#39;a aidée à trier ma garde-robe:\r\n\r\nmettre en avant les tenues dont les couleurs et les formes me vont le mieux.  Et nous avons terminé par une virée shopping, très sympa où j&#39;ai découvert des magasins, des marques et fait quelques très chouettes achats.\r\n\r\nLes premiers mois, je manquais de confiance dans mes choix.  Fallait-il acheter ce xème pull noir, si rassurant mais dont la couleur ne me convient pas du tout (je suis de type été)?  Est-ce que je devais donner ma confiance à une vendeuse très sympa mais qui me vantait une tenue dont la coupe ne convenait pas à ma morphologie? Ou écouter ma petite voix intérieur, les conseils de Sophie?  Il m&#39;a fallu un peu de temps pour donner à l&#39;approche de Sophie la place \r\nqu&#39;elle méritait dans ma vie.\r\n\r\nTrois ans plus tard, que me reste-t- il de cette expérience?  Un nuancier au fond de mon sac qui me permet, en cas de doute, de vérifier que la couleur de ce nouveau vêtement me convient. \r\n\r\nUne garde-robe où toutes les pièces me plaisent et s&#39;accordent les unes avec les autres. Un budget vêtements nettement revu à la baisse car je ne fais (presque) plus d&#39;erreurs quand j&#39;achète.\r\n\r\nMes fameux kilos de grossesse (mais plus personne ne les voit maintenant que je choisis bien les coupes de mes vêtements). Et régulièrement des compliments sur ma bonne mine (ca, c&#39;est le bon choix des couleurs) et mon style.'),
(2, 'Elisabeth P.', NULL, NULL, NULL, 'Lorsque les différents foulards de couleurs se sont posés sur moi, j’ai pu constater la lumière qui se dégageait de mes yeux, que certains tons révélaient un regard pétillant et lumineux, et d’autres couleurs au contraire, me donnaient un teint fade et triste.\r\n\r\nJe n’avais pas conscience que jouer avec les couleurs et le choix des tenues peuvent mettre en avant la beauté d’une personne et lui permettre de se sentir mieux.\r\n\r\nMerci à toi ma belle Sophie pour tes conseils si précieux qui font de moi une jolie « printemps » pétillante et rayonnante !'),
(3, 'Amélie J.', NULL, NULL, NULL, 'Un tout grand merci à vous, Sophie, pour votre professionnalisme, votre bienveillance et, surtout, vos précieux conseils ! À présent, je ne perds plus de temps dans les magasins, car je repère rapidement les couleurs qui me vont et celles que je dois éviter à tout prix ! Cela me permet aussi de ne plus faire de « mauvais achats », de ceux qui traînent dans nos garde-robes sans jamais être portés. Et puis, pour le maquillage, c’est pareil, je connais maintenant les tons qui mettent mon visage en valeur et surtout, je sais comment procéder ! Lunettes, coiffure, boucles d’oreilles et autres accessoires, idem ! Résultat : je m’aime un peu plus et je me sens plus sûre de moi. Une expérience que je recommande donc vivement !'),
(4, 'Véronique V.', NULL, NULL, NULL, 'J &#39;ai eu la chance de rencontrer Sophie et d&#39;avoir pu bénéficier d&#39;une séance de conseil en image.\r\n\r\nC&#39;était la première fois que je tentais cette expérience et ce fut, grâce au talent et à la personnalité dynamique et attentive de Sophie, un moment de détente et de bien-être au cours duquel j&#39;ai appris plusieurs choses.\r\n\r\nEtant dans la mode j&#39;avais bien sûr des notions de base concernant les couleurs qui me convenaient mais il était intéressant de voir comment ces couleurs se regroupaient et créaient très nettement une saison. Le test de personnalité a achevé de déterminer clairement à quelle saison j&#39;appartenais.\r\n\r\nDes conseils de maquillage ont complété son analyse.\r\n\r\nLe conseil en image convient aussi bien aux hommes.\r\n\r\nDans un monde où notre apparence est primordiale professionnellement et socialement , cela nous permet de nous présenter aux autres de la manière la plus positive qui soit car les couleurs qui nous conviennent ont le pouvoir de nous faire paraître plus frais, plus dynamique, plus jeune, plus beau et de rayonner. \r\n\r\nJe ne saurais que conseiller cette expérience.'),
(5, 'Virginie P.', NULL, NULL, NULL, 'Merci Sophie pour le super relooking!\r\n\r\nLes différentes étapes étaient toutes à la hauteur de mes espérances...\r\n\r\nD&#39;abord la séance analyse couleurs qui m&#39;aide souvent dans mes achats vestimentaires ... Le petit nuancier &quot;été&quot; reste toujours dans mon sac à main !\r\n\r\nTes conseils lors de la séance  coiffure et maquillage m&#39;ont donné de nouvelles idées ...\r\n\r\nEt puis le must pour moi c&#39;est la séance morphologie ... Tu as vraiment l&#39;œil, tu as un goût sûr et rien ne t&#39;échappe ... J&#39;ai changé de modèle de robe et de pantalon et j&#39;ai reçu de nombreux compliments ... Tes astuces pour allonger la silhouette sont bluffants !\r\n\r\nLa séance tri de garde robe était bien nécessaire !! Je redécouvre le plaisir de m&#39;habiller, de chercher les bonnes combinaisons et de trouver le petit détail qui fera toute la différence ! ..\r\n\r\nMerci pour ton écoute, ta ienveillance, ta patience, ton sourire sans quoi je n’aurais pas réussi à lâcher prise et à changer ...j’ai eu raison de te faire confiance car aujourd’hui, c’est en moi que j’ai confiance!!\r\n\r\nMerci !');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
