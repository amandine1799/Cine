-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  lun. 13 mai 2019 à 11:16
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `Acteur`
--

CREATE TABLE `Acteur` (
  `ID_Acteur` int(11) NOT NULL,
  `Nom` varchar(255) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `Naissance` varchar(255) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `Bio` text CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Filmographie` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Acteur`
--

INSERT INTO `Acteur` (`ID_Acteur`, `Nom`, `Naissance`, `Bio`, `Image`, `Filmographie`) VALUES
(1, 'Tom Cruise', '3 juillet 1962', 'Thomas Cruise Mapother IV est le fils de Thomas Cruise Mapother III (1934–1984), un ingénieur en électricité, et de Mary Lee Pfeiffer, professeur. Il a trois sœurs : Lee Anne, Marian et Cass. Son grand-père, d\'origine galloise, avait changé son nom Thomas Cruise O\'Mara en Thomas Cruise Mapother. Il a également des ascendances allemandes et irlandaises.\r\n\r\nIl découvre le théâtre à l\'école secondaire, en jouant dans des comédies musicales telles que Godspell, Blanches colombes et vilains messieurs. Contraint d\'abandonner la lutte à la suite d\'une blessure l\'obligeant à choisir une activité moins physique, il s\'installe à New York en 1980 à l’âge de dix-huit ans.', 'tomcruise.jpg', '1981 : Un amour infini <br/>\r\n1981 : Taps <br/>\r\n1983 : Outsiders <br/>\r\n1983 : American Teenagers <br/>\r\n1983 : L\'Esprit d\'&eacutequipe <br/>\r\n1983 : Risky Business <br/>\r\n1985 : Legend <br/>\r\n1986 : Top Gun <br/>\r\n1986 : La Couleur de l\'argent <br/>\r\n1988 : Cocktail <br/>\r\n1988 : Rain Man <br/>\r\n1989 : N&eacute un 4 juillet <br/>'),
(2, 'Will Smith', '25 septembre 1968', 'Willard Carroll Smith, Jr. nait à Philadelphie. Sa mère Caroline (née Bright) travaille dans une école et son père Willard Carroll Smith, Sr. est technicien. Il reçoit une éducation baptiste6. Ses parents se séparent quand il a 13 ans. Il a une sœur, plus âgée de 4 ans, Pamela, ainsi que des jumeaux, 3 ans plus jeunes que lui, Ellen et Harry8. Dès son enfance, Will Smith se révèle être un enfant intelligent et charismatique. Il est capable de charmer par ses discours et ainsi d\'éviter les ennuis, si bien que ses professeurs du lycée le surnomment « Prince Charming ».\r\n\r\nEn 1982, à l’âge de 14 ans, Will Smith est grandement influencé par Eddie Murphy et les nouveaux héros du hip-hop.\r\n\r\nÀ 16 ans, il rencontre Jeffrey Townes à une fête. Ils deviennent amis proches et commencent à chanter ensemble, Jeff en tant que DJ Jazzy Jeff et Smith en tant que The Fresh Prince.\r\n\r\nÉlève brillant, Smith fait ses études secondaires à la Julia Reynolds Masterman Laboratory and Demonstration School, école réputée de Philadelphie. Bien que cette idée soit largement répandue, il est faux qu\'il ait refusé une bourse d\'études au Massachusetts Institute of Technology (MIT) pour se consacrer à sa carrière musicale10. Il a déclaré à ce propos : « Ma mère qui travaillait pour la Commission Scolaire de Philadelphie était amie avec le directeur des admissions du MIT. Mon score au SAT était plutôt élevé et ils avaient besoin d\'enfants noirs de peau, donc j\'aurais probablement pu y être admis. Cependant, j\'avais nullement l\'intention d\'entrer à l\'université. »', 'willsmith.jpg', ''),
(3, 'Michael B. Jordan', '9 février 1987', 'Michael Bakari Jordan est un acteur américain, né le 9 février 1987 à Santa Ana (Californie).\r\n\r\nIl se fait connaître dans un premier temps, à la télévision, notamment pour son rôle de Wallace (en), un jeune dealer dans la série télévisée policière américaine Sur écoute, et pour celui de Vince Howard, le quarterback des deux dernières saisons de la série dramatique Friday Night Lights.\r\n\r\nIl confirme, au cinéma, notamment grâce à son interprétation d\'Adonis Creed, qui succède à Sylvester Stallone dans le film Creed : L\'Héritage de Rocky Balboa et par le rôle d\'Erik Killmonger, l\'ennemi de la Panthère noire dans le blockbuster à succès Black Panther.', 'michaelbjordan.jpg', ''),
(4, 'Sylvester Stallone', '6 juillet 1946', 'Après avoir commencé dans des petits rôles au début des années 1970, il se révèle au grand public en 1976 dans Rocky où sa prestation lui vaut d\'être nommé aux Oscars, aux Golden Globes et aux BAFTA du meilleur acteur et du meilleur scénario original. Ce succès considérable lance sa carrière, engendre une série de huit films rencontrant un important succès critique et commercial, dont le récit narre l\'histoire d\'un boxeur originaire de Philadelphie. Outre l\'incarnation du rôle principal, il y assure régulièrement la réalisation et l\'écriture. Son interprétation de Rocky Balboa s\'étale sur plus de quarante ans et lui permet de remporter le Golden Globe du meilleur acteur dans un second rôle en 2016 ainsi qu\'une troisième nomination aux Oscars dans la même catégorie.\r\n\r\nEn parallèle, il poursuit dans le registre sérieux et dramatique avec des films comme F.I.S.T. (1978), La Taverne de l\'enfer (1978), Les Faucons de la nuit (1981) et travaille pour des réalisateurs réputés tels Norman Jewison et John Huston. En 1982, son incarnation d\'un soldat traumatisé par la guerre du Viêt Nam dans Rambo lui permet d\'obtenir le deuxième rôle le plus emblématique de sa carrière. Le succès du film entraine la production d\'une série de trois suites centrées autour du personnage éponyme. À partir du milieu des années 1980, il s\'oriente vers les productions à gros budget : les suites de Rambo, Tango et Cash, Cliffhanger, Demolition Man ou encore la série de films Expendables. Hormis quelques drames tels Cop Land, les suites de Rocky et plusieurs tentatives dans la comédie, les films d\'action deviennent son principal genre d\'interprétation.\r\n', 'stallone.jpg', ''),
(5, 'Denzel Washington', '28 décembre 1954', 'Il est l’un des membres les plus emblématiques de la génération des acteurs noirs masculins avec Eddie Murphy, Morgan Freeman, Samuel L. Jackson, Wesley Snipes, Forest Whitaker, Will Smith ou Jamie Foxx – à être parvenu à se faire une place dans le cinéma hollywoodien à la fin du XXe siècle. Marchant dans les pas de Sidney Poitier, il s’est engagé contre le racisme anti-noir dans ses films, notamment dans Malcolm X réalisé par son ami Spike Lee, dans Hurricane Carter ou dans Le Plus Beau des combats. Il s’est engagé aussi dans d’autres luttes pour la justice et la tolérance à l’égard des minorités, les homosexuels par exemple dans Philadelphia de Jonathan Demme. Mais il a également joué dans des films plus légers, des thrillers en particulier, notamment à cinq reprises sous la direction de Tony Scott (Man on fire, USS Alabama, etc).\r\n\r\nIl a remporté deux oscars, celui du Meilleur acteur pour son rôle de policier véreux dans le thriller Training Day – Il est le deuxième Afro-Américain, après Sidney Poitier, à avoir obtenu cette récompense – et celui du Meilleur acteur dans un second rôle pour Glory. Il a aussi été nommé à huit reprises aux Golden Globes et récompensé deux fois. Il a reçu de nombreux autres prix, notamment un Tony Awards, 16 Images Awards et un Cecil B. DeMille Award pour l\'ensemble de sa carrière en 2016.', 'denzelwashington.jpg', ''),
(6, 'Robert Downey Jr.', '4 avril 1965', 'Révélé à la fin des années 1980, il est nommé pour l\'Oscar du meilleur acteur en 1993 pour son interprétation de Charlie Chaplin dans Chaplin, mais connaît ensuite un passage à vide du fait de graves problèmes de drogue et d\'alcool qui le conduisent en prison. Rétabli, il opère un retour en force et devient, en 2008, l\'interprète d\'Iron Man dans les films des studios Marvel, un premier film qui se trouve à l\'origine de la création de l\'Univers cinématographique Marvel. Ce rôle, qu\'il interprète dans la trilogie Iron Man ainsi que dans les films des séries Avengers, Captain America et Spider-Man lui vaut de d\'être l\'un des acteurs les mieux payés au monde.', 'robertdowney.jpg', ''),
(7, 'Bruce Willis', '19 mars 1955', 'Walter Bruce Willis est le fils de David Willis, un soldat américain basé à Idar-Oberstein en Allemagne de l\'Ouest (RFA), et de Marlene, une Allemande travaillant dans une banque. Il a deux frères, David et Robert (décédé en 2001 des suites d\'un cancer du pancréas) et une sœur, Florence. Avec sa famille, il quitte l\'Allemagne pour les États-Unis à l\'âge de 2 ans. C\'est à Penns Grove, dans le New Jersey, qu’il passe la majeure partie de son enfance. Au lycée, il montre déjà un vif intérêt pour la scène et préside le club de théâtre de l’école. Après le lycée, il trouve un emploi de gardien de sécurité à la centrale nucléaire de Salem puis transporte les équipes de travail à l\'usine de DuPont Works à Deepwater (en), dans le New Jersey. Il démissionne après la mort d\'un de ses collègues, puis travaille comme barman à New York.', 'brucewillis.jpg', '');

-- --------------------------------------------------------

--
-- Structure de la table `Contact`
--

CREATE TABLE `Contact` (
  `ID_Contact` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Contact`
--

INSERT INTO `Contact` (`ID_Contact`, `nom`, `prenom`, `mail`, `message`) VALUES
(4, 'Gaignière', 'Amandine', 'gaigniere.amandine@live.fr', 'Bonjour très bon cinéma !'),
(5, 'Gaignière', 'AMD', 'g@live.fr', 'Film'),
(6, 'Gaignière', 'AMD', 'g@live.fr', 'ttrezt');

-- --------------------------------------------------------

--
-- Structure de la table `Film`
--

CREATE TABLE `Film` (
  `ID_Film` int(11) NOT NULL,
  `Titre` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Duree` time NOT NULL,
  `Image` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Video` varchar(255) NOT NULL,
  `ID_Rea` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Film`
--

INSERT INTO `Film` (`ID_Film`, `Titre`, `Description`, `Duree`, `Image`, `Video`, `ID_Rea`) VALUES
(1, 'Avengers Endgame', 'Avengers: Endgame ou Avengers : Phase finale au Québec est un film américain réalisé par Anthony et Joe Russo, sorti en 2019. Il met en scène l\'équipe de super-héros des comics Marvel, les Avengers. Il s\'agit du 22e film de l\'Univers cinématographique Marvel, débuté en 2008 et du 10e et avant-dernier de la phase III.', '02:54:00', 'avengers.jpg', 'https://www.youtube.com/embed/wV-Q0o2OQjQ', 1),
(2, 'Mission-Impossible Fallout', 'Ethan Hunt et son équipe d\'agents de l\'organisation « Mission impossible », ainsi que le ministre et ancien chef de la CIA Alan Hunley et l\'agent britannique Ilsa Faust, reviennent une fois de plus dans une course désespérée alors qu\'ils doivent se battre pour sauver la planète du « Syndicat » et de son chef maléfique Solomon Lane.', '02:37:00', 'fallout.jpg', 'https://www.youtube.com/embed/8y5oSx3pB-s', 2),
(3, 'Creed 2', 'La vie est devenue un numéro d\'équilibriste pour Adonis Creed. Entre ses obligations personnelles et son entraînement pour son prochain grand match, il est à la croisée des chemins. L\'enjeu du combat est d\'autant plus élevé que son rival est lié au passé de sa famille. Toutefois, il peut compter sur la présence de Rocky Balboa à ses côtés : avec lui, il comprendra ce qui vaut la peine de se battre et découvrira qu\'il n\'y a rien de plus important que les valeurs familiales.', '02:54:00', 'creed.jpg', 'https://www.youtube.com/embed/AdS5ux3G-Gc', 3),
(4, 'Dumbo', 'Dumbo est un film fantastique américain réalisé par Tim Burton, sorti en 2019. Il s\'agit d\'une adaptation en prise de vues réelle du long-métrage d\'animation Dumbo des studios Disney sorti en 1941, lui-même basé sur l\'histoire éponyme écrite par Helen Aberson et illustrée par Harold Pearl, parue en 1939.', '01:39:00', 'dumbo.jpg', 'https://www.youtube.com/embed/lhwAcdj3HKg', 4),
(5, 'Equalizer 2', 'Robert McCall continue de servir la justice au nom des exploités et des opprimés, mais jusqu\'où est-il prêt à aller lorsque cela touche quelqu\'un qu\'il aime ?', '02:00:00', 'equalizer.jpg', 'https://www.youtube.com/embed/zEmqoNmdhsI', 5),
(6, 'Aladdin', 'Aladdin est un film d\'aventure fantastique américain coécrit et réalisé par Guy Ritchie, dont la sortie est prévue en 2019. Il s\'agit d\'une adaptation en prise de vues réelle du film homonyme de 1992, dans la lignée d\'autres projets de Walt Disney Pictures comme Le Livre de la jungle et Dumbo.', '02:54:02', 'aladdin.jpg', 'https://www.youtube.com/embed/IrzzGm3AmLg', 6),
(7, 'Men in Black', 'Chargés de protéger la Terre de toute infraction extraterrestre et de réguler l\'immigration intergalactique sur notre planète, les Men in black ou MIB opèrent dans le plus grand secret. Vêtus de costumes sombres et équipés des toutes dernières technologies, ils passent inaperçus aux yeux des humains dont ils effacent régulièrement la mémoire récente.', '02:00:00', 'mib.jpg', 'https://www.youtube.com/embed/xHzLoI6p1L4', 7),
(8, '58 Minutes pour Vivre', 'L\'inspecteur de police McClane attend que l\'avion de son épouse atterrisse dans un aéroport international proche de Washington. D\'étranges allers et venues attirent son attention. Il suit des hommes qui communiquent discrètement entre eux jusqu\'au sous-sol de l\'aéroport. Là, des inconnus tirent sur lui et des mercenaires prennent le contrôle de l\'aéroport, coupant toute communication avec l\'extérieur.', '02:03:00', 'diehard.png', 'https://www.youtube.com/embed/dC9UCRMxoZg', 8);

-- --------------------------------------------------------

--
-- Structure de la table `Realisateur`
--

CREATE TABLE `Realisateur` (
  `ID_Rea` int(11) NOT NULL,
  `Nom` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Naissance` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Bio` text COLLATE utf8_swedish_ci NOT NULL,
  `Image` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Déchargement des données de la table `Realisateur`
--

INSERT INTO `Realisateur` (`ID_Rea`, `Nom`, `Naissance`, `Bio`, `Image`) VALUES
(1, 'Joe Russo', '8 juillet 1971', 'Joe Russo est un réalisateur et scénariste américain. Il a travaillé sur plusieurs séries télévisées. Comptant parmi les principaux réalisateurs des films de l\'univers cinématographique Marvel, il dirige entre 2014 et 2019, Captain America : Le Soldat de l\'hiver et Captain America: Civil War, les deux suites du film Captain America: First Avenger sorti en 2011, puis en 2018, Avengers: Infinity War troisième opus réunissant l\'équipe de super-héros des Avengers et sa suite Avengers: Endgame, sortie en avril 2019.', 'joerusso.jpg'),
(2, 'Christopher McQuarrie', '12 juin 1968', 'Christopher McQuarrie est un scénariste et réalisateur américain né le 12 juin 1968 à West Windsor Township près de Princeton dans le New Jersey. Il est surtout connu pour sa collaboration avec le réalisateur Bryan Singer, notamment pour le film Usual Suspects, et avec l\'acteur Tom Cruise.', 'mcquarrie.jpg'),
(3, 'Steven Caple Jr', '16 février 1988', '\r\nDescriptionSteven Caple Jr. est un réalisateur, scénariste et producteur de cinéma américain, né le 16 février 1988 à Cleveland.', 'caple.jpg'),
(4, 'Tim Burton', '25 août 1958', 'Tim Burton est un réalisateur, scénariste et producteur de cinéma américain, né le 25 août 1958 à Burbank. Adepte du fantastique et influencé par Edgar Allan Poe, il est largement reconnu comme étant bon conteur et graphiste.', 'burton.jpg'),
(5, 'Antoine Fuqua', '19 janvier 1966', 'Installé à New York dès 1987, Antoine Fuqua fonde sa propre société de production au sein de laquelle il réalise son premier court, intitulé \"Exit\". Fortement sollicité par le milieu musical, il signe des clips pour Stevie Wonder, Coolio et Prince ainsi que des spots publicitaires pour les marques Honda, Reebok et Armani.\r\n\r\nEn 1997, Antoine Fuqua réalise son premier long métrage, Un tueur pour cible, film d\'action porté par Chow Yun-Fat sur lequel plane l\'ombre du cinéaste John Woo, d\'ailleurs producteur exécutif. Trois ans plus tard, le cinéaste récidive dans ce registre en dirigeant Jamie Foxx dans Piégé. Mais c\'est en 2001 qu\'Antoine s\'affranchit de ses influences et trouve son style avec le thriller Training day, qui vaut à Denzel Washington l\'Oscar du Meilleur acteur en 2002. \r\n\r\nTrès prisé à Hollywood, le réalisateur varie les genres et dirige désormais les plus grands, tels Bruce Willis et Monica Bellucci dans le film de guerre Les Larmes du soleil (2003) ou encore Clive Owen et Keira Knightley dans la fresque épique Le Roi Arthur (2004). En 2006, le metteur en scène retourne à l\'action pure avec Shooter, une production dans laquelle Mark Wahlberg incarne un tireur d\'élite en bien mauvaise posture.', 'fuqua.jpg'),
(6, 'Guy Ritchie', '10 septembre 1968', 'Guy Ritchie est un producteur, réalisateur et scénariste britannique né le 10 septembre 1968 à Hatfield dans le Hertfordshire. ', 'ritchie.jpg'),
(7, 'Barry Sonnenfeld', '1 avril 1953', 'Barry Sonnenfeld est un réalisateur, acteur, producteur et directeur de la photographie américain né le 1ᵉʳ avril 1953 à New York. Il est surtout connu pour avoir signé la mise en scène de la trilogie cinématographique à succès Men in Black, avec Will Smith et Tommy Lee Jones dans les rôles-titre', 'barry.jpg'),
(8, 'Renny Harlin', '15 mars 1959', 'Renny Harlin, de son vrai nom Renny Lauri Mauritz Harjola, est un r&eacutealisateur et producteur am&eacutericain d\'origine finlandaise n&eacute le 15 mars 1959 ? Riihim?ki (Finlande), connu pour ses films d\'action. Il est dans les ann?es 1990 un r&eacutealisateur important de blockbusters.', 'harlin.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `Role`
--

CREATE TABLE `Role` (
  `ID_Role` int(11) NOT NULL,
  `ID_Acteur` int(11) NOT NULL,
  `ID_Film` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Role`
--

INSERT INTO `Role` (`ID_Role`, `ID_Acteur`, `ID_Film`) VALUES
(1, 1, 2),
(3, 2, 6),
(4, 2, 7),
(5, 3, 3),
(6, 4, 3),
(7, 5, 5),
(8, 6, 1),
(9, 7, 8);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Acteur`
--
ALTER TABLE `Acteur`
  ADD PRIMARY KEY (`ID_Acteur`);

--
-- Index pour la table `Contact`
--
ALTER TABLE `Contact`
  ADD PRIMARY KEY (`ID_Contact`);

--
-- Index pour la table `Film`
--
ALTER TABLE `Film`
  ADD PRIMARY KEY (`ID_Film`);

--
-- Index pour la table `Realisateur`
--
ALTER TABLE `Realisateur`
  ADD PRIMARY KEY (`ID_Rea`);

--
-- Index pour la table `Role`
--
ALTER TABLE `Role`
  ADD PRIMARY KEY (`ID_Role`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Acteur`
--
ALTER TABLE `Acteur`
  MODIFY `ID_Acteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `Contact`
--
ALTER TABLE `Contact`
  MODIFY `ID_Contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `Film`
--
ALTER TABLE `Film`
  MODIFY `ID_Film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `Realisateur`
--
ALTER TABLE `Realisateur`
  MODIFY `ID_Rea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `Role`
--
ALTER TABLE `Role`
  MODIFY `ID_Role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
