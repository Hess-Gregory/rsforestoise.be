-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 18 Juin 2019 à 17:38
-- Version du serveur :  5.5.44-0+deb8u1
-- Version de PHP :  5.6.13-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `prod_rsforestoise`
--

-- --------------------------------------------------------

--
-- Structure de la table `actuality`
--

CREATE TABLE IF NOT EXISTS `actuality` (
`id` int(11) NOT NULL,
  `picture_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `slug` varchar(128) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `actuality`
--

INSERT INTO `actuality` (`id`, `picture_id`, `name`, `content`, `created_at`, `updated_at`, `slug`) VALUES
(5, 4, 'Résultats du match  Renaissance SP. Forestoise  vs Auderghem.               mercredi 11/11/2015', '<p>Ce mercredi 11/11/2015 notre &eacute;quipe a &eacute;t&eacute; &agrave; la hauteur pour vaincre l''&eacute;quipe adverssaire avec un score de 3-0.</p>\r\n<p>F&eacute;licitations au staff ainsi qu''aux joueurs,nous remercions tous nos supporters.</p>', '2015-11-11 00:00:00', '2015-11-11 19:58:01', 'resultats-du-match-renaissance-sp-forestoise-vs-auderghem-mercredi-11-11-2015'),
(6, 37, 'Complexe Bempt de FOREST', '<p>Chers amis sportif notre complexe sportif du Bempt reste ferm&eacute; et ceci juqu''au 30 novembre inclus,pour la s&eacute;curit&eacute; de nos enfants.</p>\r\n<p>L''&eacute;quipe de la Renaissance Sportive Forestoise.</p>', '2015-11-22 00:00:00', '2015-12-03 18:13:52', 'complexe-bempt-de-forest'),
(7, 33, 'Remise générale ce Weekend', '<p>Il ya eu une remise g&eacute;n&eacute;rale ce weekend suite &agrave; la dicition de l''union belge,pour la s&eacute;curit&eacute; de tous nos jeunes.</p>', '2015-11-22 00:00:00', '2015-11-22 20:17:39', 'remise-generale-ce-weekend'),
(9, 55, 'Complexe du Bempt de FOREST', '<p>Chers amis sportif c''est parti la lumi&egrave;re est enfin l&agrave; , nous vous souhaitons un agr&eacute;able entrainement. Toute l''&eacute;quipe de la Renaissance Sportive Forestoise.</p>', '2015-12-03 00:00:00', '2015-12-03 18:11:25', 'complexe-du-bempt-de-forest'),
(10, 34, 'Résultat du match du dimanche 06/12/2015. Ottignie vs RSF', '<p>Eh bien malg&eacute; une prestations qui n''est pas digne de notre &eacute;quipe en ce qui concerne le du dimanche 06/12/2015. L''&eacute;quipe &agrave; su &nbsp;emport&eacute; le match par 4buts &agrave; 1. Nous attendons les prochains performances de notre &eacute;quipe premi&egrave;re.</p>\r\n<p>Nous remercions la pr&eacute;sence de notre sponsor Eric Demin et son &eacute;pouse.</p>', '2015-12-08 00:00:00', '2015-12-13 12:12:20', 'resultat-du-match-du-dimanche-06-12-2015-ottignie-vs-rsf'),
(11, 54, 'Résultats du match  Maccabi  vs   Renaissance SP. Forestoise du samedi 12/12/2015', '<p>Chers amis sportif le match de ce week end, notre &eacute;quipe a vraiment &eacute;t&eacute; excellente en battant &nbsp;l''&eacute;quipe du Maccabi,c''est une victoire bien m&eacute;rit&eacute;. F&eacute;licitations &agrave; tous les joueurs et&nbsp;le staff,&nbsp;on continue dans la m&ecirc;me voie pour les match &agrave; venir. score 4-1.</p>\r\n<p>&nbsp;</p>', '2015-12-13 00:00:00', '2017-03-26 20:56:32', 'resultats-du-match-maccabi-vs-renaissance-sp-forestoise-du-samedi-12-12-2015'),
(12, 56, 'Résultats du match     Renaissance SP. Forestoise vs  RAS.Saintoise B du dimanche 19/12/2015', '<p>Chers amis sportif le match de ce dimanche 19/12/2015 &eacute;tait assez difficile malgres le score 9-2, car nous avons pas&nbsp;mal&nbsp;d''absent d''ailleurs sur le banc il yavait un joeur de U17 Younes et un joueur de U21 amin ils se sont bien adapt&eacute;s au jeux et joueurs , pour l''ensemble de l''&eacute;quipe nous leurs dirons merci pour la moiti&eacute; de ce &nbsp;championnat qui se termine bien pour le club mais le plus difficile reste &agrave; venir&nbsp;c''est &agrave; dire rester dans le sens de notre objectif&nbsp;et nous compton bien sur sur tous&nbsp;les joueurs ainsi que notre staff.</p>', '2015-12-20 00:00:00', '2015-12-20 19:28:56', 'resultats-du-match-renaissance-sp-forestoise-vs-ras-saintoise-b-du-dimanche-19-12-2015'),
(13, 57, 'Inauguration du terrain no2', '<p>Aujourd''hui s''est &eacute;ffectu&eacute; l''inauguration du terrain no 2 en pr&eacute;sence de Madame la Ministre des Sports Fadila LAANAN ainsi que Monsieur l''Echevin des Sports Ahmed Ouartassi sans oublier notre Bourgmestre &nbsp;Marc-Jean GHYSSELS et tous les Echevins,l''ambiance des jeunes &eacute;tait vraiment superbe malg&egrave; le mauvais temps.</p>\r\n<p>Nous remercions tous les parents qui se sont d&eacute;placer pour cet &eacute;v&egrave;nement et un grand merci &agrave; tous les coachs et arbitre.</p>', '2016-01-27 00:00:00', '2016-02-28 15:23:27', 'inauguration-du-terrain-no2'),
(14, 59, 'Résultats du match Renaissance SP. Forestoise vs FC Forest  du dimanche 07/02/2016', '<p>Tous d''abord, notre club tient &agrave; rem&eacute;rcier la pr&eacute;sence de notre bourgemestre M.Marc-Jean Ghyssels ainsi que monsieur l''&eacute;chevin des sports Ahmed Ouartassi lors de ce derby de la Renaissance-Fc Forest.</p>\r\n<p>Nous tenons sp&eacute;cialement &agrave; rem&eacute;rcier la t&eacute;nacit&eacute; de notre &eacute;quipe pour leur p&eacute;rformance. En effet, nous avons domin&eacute; notre sujet avec un tr&egrave;s bon jeu de football de la part de tous les joueurs ainsi que nos r&eacute;s&eacute;rvistes.&nbsp;</p>\r\n<p>Bien s&ucirc;r merci au STAFF.&nbsp;</p>\r\n<p>Il faut souligner le m&eacute;rite de l''&eacute;quipe adverse car m&ecirc;me en perdant 5-1 ils n''ont rien lach&eacute;.</p>\r\n<p>Bravo &agrave; eux.&nbsp;</p>', '2016-02-07 00:00:00', '2016-02-07 20:22:25', 'resultats-du-match-renaissance-sp-forestoise-vs-fc-forest-du-dimanche-07-02-2016'),
(15, 60, 'Remerciement à nos supporters.', '<p>Notre club remercie infiniment la pr&eacute;sence de nos supporters lors de nos matchs.&nbsp;</p>\r\n<p>Et nous comptons sur eux pour la suite du championnat.&nbsp;</p>\r\n<p>&nbsp;</p>', '2016-02-07 00:00:00', '2016-02-07 20:26:14', 'remerciement-a-nos-supporters'),
(16, 64, 'La Renaissance Forestoise en progrès', '<p>La capitale suit l''&eacute;volution de la renaissance sportive forestoise qui est en plein progression mais nous devons encore travailler afin de rester sur cette effort fourni par les joueurs et certainement de la part des coachs Yousfi Mohammed et Sarhrout Youssef,avec son exp&eacute;rience en tant qu''ancien joueur de la D1 de Mouloudia Oujda.</p>', '2016-02-19 00:00:00', '2017-05-01 16:07:17', 'la-renaissance-forestoise-en-progres'),
(17, 65, 'Suite du journal la capitale', '<p>L a suite de la capitale du journal concernant la Renaissance Sportive Forestoise</p>', '2016-02-19 00:00:00', '2016-02-19 19:16:49', 'suite-du-journal-la-capitale'),
(18, 68, 'Résultats du match Renaissance SP. Forestoise vs SC.M.BRAINE B du dimanche 27/02/2016', '<p>Ouf,que c''&eacute;tait stressant de ne pas marquer durant la premi&egrave;re mi-temps,pourtant nous avons domin&eacute; mais sans aucune concr&eacute;tisation,il a fallu attendre la deuxi&egrave;me mi-temps pour que la R.S.F se met vraiment &agrave; attaquer sans relache puisque le premier goal est tomb&eacute; &agrave; la 69&egrave;me minutes par Amraoui Jamal le deuxi&egrave;me buts par A.Zouaoui &agrave; la 93 &egrave;me minutes,le 3&egrave;me buts par Harfi R&eacute;da &agrave; la 98 &egrave;me minutes et un cadeau de la part de notre gardien malheureux face au projecteurs &agrave; encaisser lui m&ecirc;me le goal,mais tout est bien fini car nous avons empoch&eacute; les 3 points,merci &agrave; tous.</p>', '2016-02-28 00:00:00', '2016-02-28 15:51:38', 'resultats-du-match-renaissance-sp-forestoise-vs-sc-m-braine-b-du-dimanche-27-02-2016'),
(19, 69, 'Résultats du match Renaissance SP. Forestoise vs Nivelles du dimanche 03/04/2016', '<p>Nous tenons &agrave; remercier le vice pr&eacute;sident qui a donner l''entrainement la semaine pass&eacute; en l''absence des coachs en sachant que le vice pr&eacute;sident &agrave; entar&icirc;ner en P2. Nous f&eacute;licitons aussi&nbsp;tous nos joeurs pour ce beau match avec un score de 8-0 sans.Il faut remercier aussi tous les adminitrateurs d&eacute;l&eacute;gu&eacute;,soigneur et directeur sportif pour leur aide .</p>\r\n<p>&nbsp;</p>\r\n<p>Rendons hommage au p&egrave;re de DEKAKI Badr qui est d&eacute;c&egrave;d&eacute;,et beaucou de courage &agrave; notre joueur Badr et sa famille.</p>', '2016-04-03 00:00:00', '2017-03-26 20:54:25', 'resultats-du-match-renaissance-sp-forestoise-vs-nivelles-du-dimanche-03-04-2016'),
(20, 70, 'Mariage de Kabu Ouiseme', '<p>Le club Renaissance Sportive Forestoise F&eacute;licite Notre joueurs du milieu Kabu Ouiseme qui s''est mari&eacute; ce samedi 02/04/2016,nous lui souhaitons tous le bonheur.</p>\r\n<ol>\r\n<li><strong>&nbsp;FELICITATIONS</strong></li>\r\n</ol>', '2016-04-03 00:00:00', '2016-04-03 21:46:57', 'mariage-de-kabu-ouiseme'),
(21, 71, 'P3', '<p>Voil&agrave; la<strong> P3</strong> est l&agrave; nous avons des nouveaux joueurs qui sont arriv&eacute;s et &agrave; gr&acirc;ce aussi &agrave; des joueurs exp&eacute;riment&eacute;,les jeunes apprendrons beaucoup.</p>\r\n<p>cette ann&eacute;e sera nouveau pour nous et nous esp&eacute;rons faire de notre mieux ,gr&acirc;ce aussi au coach <strong>Yousfi M</strong>.qui s''investi au sein du club pour les r&eacute;sultats.&nbsp;</p>', '2016-08-11 00:00:00', '2017-03-26 20:52:20', 'p3'),
(22, 72, 'Match dimanche 11/09/2016 Ophain - RSF.  Score 0-1', '<p>La performance de nos &nbsp;joueurs lors du match de dimanche contre Ophain &agrave; montrer clairement le carat&egrave;re de chacun,car ils se sont battus jusqu''&agrave; la fin du match bravo &agrave; l''&eacute;quipe adverse qui n''a pas relacher les bras ce fut un match extraordinaire.3</p>\r\n<p>La victoire et largement m&eacute;rit&eacute;.</p>\r\n<p>Bravo et on continue vollen Dash.</p>', '2016-09-14 00:00:00', '2016-09-14 20:58:09', 'match-dimanche-11-09-2016-ophain-rsf-score-0-1'),
(23, 73, 'Match du samedi 1/10/2016 Nivelles - RSF.  Score 0-2', '<p>Tr&egrave;s bon r&eacute;sultat en d&eacute;placement ce fut un match tr&egrave;s difficile avec un temps difficile,pluie,vent et un bon positionnement de l''&eacute;quipe adverse. Il a fallut attendre la 64 &egrave;me minutes pour que Zakaria Etouzani marque le premier goal sur un corner.</p>\r\n<p>Le deuxi&egrave;me goal vient &agrave; la 74 &egrave;me minutes sur un corner bot&eacute; par R&eacute;da et inscrit par notre d&eacute;fenseur Khalid Rifi. Notre capitaine Charef Omar avec son exp&eacute;rience &agrave; su tr&egrave;s bien g&eacute;r&eacute; sa d&eacute;fense.</p>\r\n<p>l''&eacute;quipe a rempli&nbsp;son contrat jusqu''&agrave; la fin du match.</p>\r\n<p>Bravo &agrave; tous.</p>', '2016-10-02 00:00:00', '2016-10-02 14:27:29', 'match-du-samedi-1-10-2016-nivelles-rsf-score-0-2'),
(24, NULL, 'Un derby! ça se gagne!', '<p>Un gros morceau venait nous rendre visite ce week-end, il s''agit de nos confr&egrave;res molenbekois.</p>\r\n<p>C''est dans une ambiance festive, en pr&eacute;sence de nos jeunes poussins de l''&eacute;cole des jeunes et notre Echevin des sports Monsieur Ahmed OUARTASSI&nbsp;que nous&nbsp;avons disput&eacute; ce Derby.</p>\r\n<p>D&egrave;s le d&eacute;but du match&nbsp;nous avons remarqu&eacute; que nos adversaires du jour sont venus prendre des points.</p>\r\n<p>Une premi&egrave;re mi-temps pleine d''occasions pour les deux &eacute;quipes, la d&eacute;fense et les gardiens ont r&eacute;pondu pr&eacute;sents des deux c&ocirc;t&eacute;s, et surtout notre gardien Omar CHAREF.</p>\r\n<p>C''est sur un nul de z&eacute;ro partout que l''arbitre siffle la fin de premi&egrave;re mi-temps.</p>\r\n<p>Et comme on dit que la deuxi&egrave;me mi-temps est celle des coachs, notre staff technique a pris les choses en main en faisant des changements tactiques.</p>\r\n<p>Le jeu est devenu rapide des deux c&ocirc;t&eacute;s et aucune des deux &eacute;quipes ne voulait perdre des points.</p>\r\n<p>Les dix derni&egrave;res minutes &eacute;taient d&eacute;cisives pour tous les joueurs. Sur le visage de toutes les personnes pr&eacute;sentent, on pouvait voir qu''ils voyaient le match se finirait par un nul.</p>\r\n<p>Durant ce petit temps restant, la RSF a pris le dessus et joue le tout pour le tout.</p>\r\n<p>A la 85'', sur un coup franc de Karim ZOUAOUI, donn&eacute; au deuxi&egrave;me poteau, la d&eacute;fense repousse le ballon mais Khalid RIFIremet ce ballon dans le carr&eacute; vers Reda HARFI qui met le ballon dans le filet.</p>\r\n<p>La joie des supporters s''est directement faite entendre, les parents qui accompagnaient leurs poussins ont aid&eacute; les petits &agrave; mettre une ambiance de feu.</p>\r\n<p>Score final : RSF 1-0 AC.J. Molenbeek</p>\r\n<p>Les joueurs, le staff technique et les dirigeants remercient les parents, les jeunes ainsi que leurs coachs venus supporter notre &eacute;quipe premi&egrave;re.</p>\r\n<p>Un tout grand merci &agrave; Monsieur Ahmed OUARTASSI, &eacute;chevin des sports, pour sa pr&eacute;sence et son soutien.</p>\r\n<p><img class="lazy img-responsive" src="/web/media/uploads//42168446b64f4aa010535610c1303f42.jpg" alt="rsf_vs_molenbeek.jpg" width="960" height="540" data-original="/web/media/uploads//42168446b64f4aa010535610c1303f42.jpg" /></p>\r\n<p>&nbsp;</p>', '2016-10-30 00:00:00', '2016-10-30 22:59:42', 'un-derby-ca-se-gagne'),
(25, 89, 'Match dimanche 08/01/2017 RSF - Jette.  Score 4-1', '<p>Chers lecteurs sportifs, aujourd''hui c''&eacute;tait notre premier match apr&egrave;s la tr&egrave;ve, nous avons rencontr&eacute; une jeune &eacute;quipe de Jette et nos joueurs se sont montr&eacute;s &agrave; la hauteur puisque nous avons remport&eacute; le match par 4-1. Nos deux coachs ont bien men&eacute; notre &eacute;quipe &agrave; la victoire, mais le chemin est encore long et nous comptons sur tous l''ensemble des joueurs ainsi que le staff technique.</p>', '2017-01-08 00:00:00', '2017-01-08 21:41:05', 'match-dimanche-08-01-2017-rsf-jette-score-4-1'),
(26, 92, 'Match du 26/03/2017 ES BRAINE VS RSF .  Score 2-4', '<p>Ce fut ag&eacute;able le match disput&eacute; en d&eacute;placement &agrave; ES Braine, la premi&egrave;re mi-temps on domine mais les premi&egrave;res 45 minutes se sont sold&eacute;s par 1but &agrave; 1,deuxi&egrave;me mi-temps les joueurs ont serr&eacute; tant dans la d&eacute;fense qu''au milieu du jeu, apr&egrave;s un magnifique coup franc bott&eacute; par Ilias Yousfi suivit par soufiane Dkhissi qui marque le 2&egrave;me but pour la renaissance forestoise,ensuite vient le troisi&egrave;me but inscrit par Ilias Yousfi qui fait plus que la part de son travail,il ya eu bien sur des changements qui ont bien maintenu la pression sur l''&eacute;quipe adverse qui jouait des longues balles et par moment elle nous mettait en difficul&eacute;. Le panalty ramener par Omar Lehyan,celui -ci est tir&eacute; par Imad Eddine et inscrit le 4 &egrave;me gaol,les dix derni&egrave;res minutes notre &eacute;quipe a relach&eacute; la cadence et l''&eacute;quipe adverse en a profit&eacute; pour r&eacute;duire le score final &agrave; 2-4.</p>\r\n<p>Bravo &agrave; notre &eacute;quipe et au staff technique.</p>', '2017-03-26 00:00:00', '2017-03-26 20:47:06', 'match-du-26-03-2017-es-braine-vs-rsf-score-2-4'),
(27, 93, 'Match du 29/04/2017 Educ Active VS RSF . Score1-0', '<p>Chers amis sportifs hier ce fut un match le plus mauvais jouer &agrave; cause de l''adverssaire ,il n''yavit pas de jeu beaucoup de discussions,bien que nous &eacute;tions beaucoup plus fort que l''adverssaire nous n''avons pas pu pratiquer notre jeu comme d''habitude beaucoup d''arr&ecirc;t d&ucirc; aux fautes de part et d''autre,mais en final on a remport&eacute; le match 1-0. La victoire &eacute;tait importante afin de rester premier,il reste un match mais nous sommes d&eacute;j&agrave; en P2 magnifique exploit alors que au d&eacute;but de la saison nous voulions juste le maintient,c''est tr&egrave;s agr&eacute;able ,merci &agrave; tous sans exception.</p>', '2017-05-01 00:00:00', '2017-05-01 16:04:09', 'match-du-29-04-2017-educ-active-vs-rsf-score1-0'),
(28, 95, 'La présentation de l''équipe  première', '<p>Voici la photo des joueurs de l''&eacute;quipe premi&egrave;re, nous avons fait la pr&eacute;sentation des nouveaux la capitale &eacute;tait pr&eacute;sente pour &eacute;crire un nouveau article. Nous allons commencer une nouvelle saison qui promet beaucoup surprises.</p>\r\n<p>&nbsp;</p>', '2017-06-04 00:00:00', '2017-06-04 12:31:07', 'la-presentation-de-l-equipe-premiere'),
(29, 97, 'Inscriptions', '<p>Chers amis sportifs les inscriptions sont ouverts depuis un bon moment pour plus d''informations veuillez contacter MABTOUL Mimoune au no 0475.237.100.</p>\r\n<p>RSF.</p>', '2017-07-31 00:00:00', '2017-07-31 09:11:58', 'inscriptions'),
(30, 99, 'Match de ce dimanche 5/11/2017 RSF&Beauvechain 1-1', '<p>Chers amis sportif le match de ce dimanche &eacute;tait un peu ennuyux car notre &eacute;quipe &eacute;tait endormi face &agrave; une &eacute;quipe qui est venu juste d&eacute;fendre nous aurons pu gagner ce match h&eacute;las nous avo s pas su hausser la cadence de jeu. Le partage de 1-1 est m&eacute;diocre certains joueurs devrait se donner &agrave; fond lors des matchs.</p>\r\n<p>RSF.&nbsp;</p>', '2017-11-05 00:00:00', '2017-11-05 23:18:44', 'match-de-ce-dimanche-5-11-2017-rsf-beauvechain-1-1'),
(31, NULL, 'ACADEMY POUR ELLE', '<p>Ayant pour objectif de favoriser l&rsquo;acc&egrave;s du football au public f&eacute;minin, la Renaissance Sportive Forestoise et la Maison des Jeunes de Forest deviennent partenaire afin de cr&eacute;&eacute; sa propre section f&eacute;minine 2018 - 2019 &agrave; Forest.</p>\r\n<p>Ce programme, intitul&eacute; &laquo; Acad&eacute;my pour Elles &raquo;, est d&eacute;di&eacute; aux filles, et leur permettra de s&rsquo;&eacute;panouir dans ce double projet, sportif et social de l&rsquo;Acad&eacute;mie.</p>\r\n<p>Afin de mener &agrave; bien ce projet, la Renaissance Sportive Forestoise en partenariat avec la MJF met&nbsp;<span class="m_-2143602705294775733m_7892018011941681747gmail-text_exposed_show">&agrave; disposition toutes les infrastructures n&eacute;cessaires pour que nos jeunes puissent avoir la meilleure &eacute;volution et puissent s&rsquo;&eacute;panouir au maximum.</span></p>\r\n<div class="m_-2143602705294775733m_7892018011941681747gmail-text_exposed_show">\r\n<p>&laquo; L&rsquo;Acad&eacute;mie pour elles, c&rsquo;est l&rsquo;&eacute;ducation par le football, mais c&rsquo;est avant tout un double projet &eacute;ducatif qui replace l&rsquo;enfant au c&oelig;ur des pr&eacute;occupations afin de former l&rsquo;adulte de demain. &raquo;</p>\r\n<p>Si tu as entre 9 et 15 ans et que tu souhaite rejoindre &ldquo; l&rsquo;Acad&eacute;my pour elles &ldquo; ou recevoir plus d&rsquo;information, n&rsquo;h&eacute;site donc pas &agrave; contacter notre responsable du projet !</p>\r\n<p>Maroua SEBANI<br />0486.801.917</p>\r\n<p>&nbsp;</p>\r\n<p><img class="lazy img-responsive" src="/web/media/uploads//9bebd983ec62345cf8cf66c0e8c41ff8.png" alt="IMG_20180913_135621.png" width="1080" height="602" data-original="/web/media/uploads//9bebd983ec62345cf8cf66c0e8c41ff8.png" /></p>\r\n</div>', '2018-10-14 00:00:00', '2018-10-14 16:55:18', 'academy-pour-elle');

-- --------------------------------------------------------

--
-- Structure de la table `committee`
--

CREATE TABLE IF NOT EXISTS `committee` (
`id` int(11) NOT NULL,
  `picture_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `function` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_display` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `committee`
--

INSERT INTO `committee` (`id`, `picture_id`, `name`, `first_name`, `phone`, `function`, `order_display`) VALUES
(1, 58, 'Mabtoul', 'Mohammed', '0485 / 56 51 69', 'Président', 1),
(2, 7, 'Elmadih', 'Rachid', '0485 / 27 54 77', 'Vice Président', 2),
(3, NULL, 'El Makhoukhi', 'Ali', '0484 / 18 01 61', 'Trésorier', 5),
(4, 96, 'Mabtoul', 'Mimoune', '0475 / 23 71 00', 'Administrateur', 3),
(5, 9, 'Ben Ayad Daoudi', 'Rachid', '0488 / 51 88 65', 'Administrateur', 4),
(6, 10, 'Elmadih', 'Rachid', '0485 / 27 54 77', 'Correspondant Qualifié', 6);

-- --------------------------------------------------------

--
-- Structure de la table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
`id` int(11) NOT NULL,
  `seo_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `routing_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `page`
--

INSERT INTO `page` (`id`, `seo_id`, `name`, `routing_name`) VALUES
(1, 1, 'Accueil', 'front_end_homepage_default'),
(2, NULL, 'Actualités', 'front_end_actuality_default'),
(3, 2, 'Equipes - Jeunes', 'front_end_team_young_default'),
(4, NULL, 'Equipes - Jeunes Description', 'front_end_team_young_description'),
(5, 3, 'Equipes - Première', 'front_end_team_first_default'),
(6, NULL, 'Equipes - Première Description', 'front_end_team_first_description'),
(7, 4, 'Inscription', 'front_end_registration_default'),
(8, 5, 'Tournois', 'front_end_tournament_default'),
(9, 6, 'Comité du Club', 'front_end_committee_default');

-- --------------------------------------------------------

--
-- Structure de la table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
`id` int(11) NOT NULL,
  `player_id` int(11) DEFAULT NULL,
  `amount` smallint(6) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_payment` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `picture`
--

CREATE TABLE IF NOT EXISTS `picture` (
`id` int(11) NOT NULL,
  `actuality_id` int(11) DEFAULT NULL,
  `team_id` int(11) DEFAULT NULL,
  `player_id` int(11) DEFAULT NULL,
  `committee_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `original_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `teamStaff_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `picture`
--

INSERT INTO `picture` (`id`, `actuality_id`, `team_id`, `player_id`, `committee_id`, `name`, `file_type`, `original_name`, `teamStaff_id`) VALUES
(2, NULL, NULL, NULL, NULL, '564384672a75f.JPG', 'image/jpeg', 'DSC02467.JPG', NULL),
(4, 5, NULL, NULL, NULL, '5643862333be7.JPG', 'image/jpeg', 'DSC02481.JPG', NULL),
(6, NULL, NULL, NULL, 1, '564387d7eba18.JPG', 'image/jpeg', 'DSC02463.JPG', NULL),
(7, NULL, NULL, NULL, 2, '564388048f57b.JPG', 'image/jpeg', 'DSC02465.JPG', NULL),
(9, NULL, NULL, NULL, 5, '5643884e8b065.JPG', 'image/jpeg', 'DSC02483.JPG', NULL),
(10, NULL, NULL, NULL, 6, '564388770e4da.JPG', 'image/jpeg', 'DSC02465.JPG', NULL),
(16, NULL, NULL, NULL, NULL, '56438bf18e768.JPG', 'image/jpeg', 'DSC02506.JPG', NULL),
(33, 7, NULL, NULL, NULL, '5666ab4f1a5af.JPG', 'image/jpeg', 'DSC02482.JPG', NULL),
(34, 10, NULL, NULL, NULL, '5666acf39d890.JPG', 'image/jpeg', 'PICT0317.JPG', NULL),
(37, 6, NULL, NULL, NULL, '5666adb8dd310.JPG', 'image/jpeg', 'DSC02496.JPG', NULL),
(54, 11, NULL, NULL, NULL, '566d51ba118f5.JPG', 'image/jpeg', 'PICT0319.JPG', NULL),
(55, 9, NULL, NULL, NULL, '566d51e44952b.JPG', 'image/jpeg', 'PICT0288.JPG', NULL),
(56, 12, NULL, NULL, NULL, '5676f39ee28a1.JPG', 'image/jpeg', 'PICT0318.JPG', NULL),
(57, 13, NULL, NULL, NULL, '56a946aab6981.JPG', 'image/jpeg', 'DSC02532.JPG', NULL),
(58, NULL, NULL, NULL, 1, '56a949a28a9f8.JPG', 'image/jpeg', 'DSC02521.JPG', NULL),
(59, 14, NULL, NULL, NULL, '56b7999fd50d2.JPG', 'image/jpeg', 'PICT2545.JPG', NULL),
(60, 15, NULL, NULL, NULL, '56b79a73e35f5.JPG', 'image/jpeg', 'PICT2547.JPG', NULL),
(63, 16, NULL, NULL, NULL, '56c75ad949ee2.JPG', 'image/jpeg', 'PICT2554.JPG', NULL),
(64, 16, NULL, NULL, NULL, '56c75b9bd512d.JPG', 'image/jpeg', 'PICT2555.JPG', NULL),
(65, 17, NULL, NULL, NULL, '56c75c241efdb.JPG', 'image/jpeg', 'PICT2554.JPG', NULL),
(67, 18, NULL, NULL, NULL, '56d309cf1275a.JPG', 'image/jpeg', 'DSC02481.JPG', NULL),
(68, 18, NULL, NULL, NULL, '56d30a999f3fb.JPG', 'image/jpeg', 'PICT0293.JPG', NULL),
(69, 19, NULL, NULL, NULL, '570171df28ef5.JPG', 'image/jpeg', 'PICT0324.JPG', NULL),
(70, 20, NULL, NULL, NULL, '570172f5366a0.JPG', 'image/jpeg', 'PICT0308.JPG', NULL),
(71, 21, NULL, NULL, NULL, '57accedb17116.JPG', 'image/jpeg', '062.JPG', NULL),
(72, 22, NULL, NULL, NULL, '57d99e135d9f7.JPG', 'image/jpeg', 'PICT0314.JPG', NULL),
(73, 23, NULL, NULL, NULL, '57f0fcdddda07.JPG', 'image/jpeg', 'PICT0021.JPG', NULL),
(74, 24, NULL, NULL, NULL, '5817c258273dd.jpg', 'image/jpeg', 'FB_IMG_1477866783553.jpg', NULL),
(89, 25, NULL, NULL, NULL, '5872a3f72ffae.JPG', 'image/jpeg', 'PICT2942.JPG', NULL),
(92, 26, NULL, NULL, NULL, '58d80cd3354af.jpg', 'image/jpeg', '20170326_172435.jpg', NULL),
(93, 27, NULL, NULL, NULL, '5907406f3a54c.jpg', 'image/jpeg', '20170430_150217.jpg', NULL),
(95, 28, NULL, NULL, NULL, '5933e0d2b0d10.jpg', 'image/jpeg', '20170602_201839_001.jpg', NULL),
(96, NULL, NULL, NULL, 4, '597ed631a8dd4.jpg', 'image/jpeg', 'IMG-20170307-WA0016.jpg', NULL),
(97, 29, NULL, NULL, NULL, '597ed86b16662.jpg', 'image/jpeg', 'IMG-20170508-WA0006.jpg', NULL),
(98, 29, NULL, NULL, NULL, '597ed910951e8.jpg', 'image/jpeg', 'IMG-20170508-WA0012.jpg', NULL),
(99, 30, NULL, NULL, NULL, '59ff8e69c62b7.jpg', 'image/jpeg', 'IMG-20171105-WA0005.jpg', NULL),
(100, 30, NULL, NULL, NULL, '59ff8e94f028f.jpg', 'image/jpeg', 'IMG-20171105-WA0003.jpg', NULL),
(103, NULL, 18, NULL, NULL, '59ff907de9002.jpg', 'image/jpeg', 'IMG-20171016-WA0016.jpg', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `player`
--

CREATE TABLE IF NOT EXISTS `player` (
`id` int(11) NOT NULL,
  `team_id` int(11) DEFAULT NULL,
  `picture_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_birth` datetime DEFAULT NULL,
  `birthplace` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `street` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numberStreet` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailbox` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postalCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `responsible_phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_arrival` datetime DEFAULT NULL,
  `from_club` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `various_information` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `price`
--

CREATE TABLE IF NOT EXISTS `price` (
`id` int(11) NOT NULL,
  `price` smallint(6) NOT NULL,
  `date_start` datetime NOT NULL,
  `date_end` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `price`
--

INSERT INTO `price` (`id`, `price`, `date_start`, `date_end`) VALUES
(1, 300, '2015-06-01 00:00:00', '2016-05-31 00:00:00'),
(2, 300, '2016-06-01 00:00:00', '2017-05-31 00:00:00'),
(3, 300, '2017-06-01 00:00:00', '2018-05-31 00:00:00'),
(4, 300, '2018-06-01 00:00:00', '2019-05-31 00:00:00'),
(5, 300, '2019-06-01 00:00:00', '2020-05-31 00:00:00'),
(6, 300, '2020-06-01 00:00:00', '2021-05-31 00:00:00'),
(7, 300, '2021-06-01 00:00:00', '2022-05-31 00:00:00'),
(8, 300, '2022-06-01 00:00:00', '2023-05-31 00:00:00'),
(9, 300, '2023-06-01 00:00:00', '2024-05-31 00:00:00'),
(10, 300, '2024-06-01 00:00:00', '2025-05-31 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
`id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_birth` datetime NOT NULL,
  `birthplace` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `street` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number_street` smallint(6) NOT NULL,
  `mailbox` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postal_code` smallint(6) NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `responsible_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=116 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `registration`
--

INSERT INTO `registration` (`id`, `name`, `first_name`, `date_birth`, `birthplace`, `street`, `number_street`, `mailbox`, `postal_code`, `city`, `email`, `phone`, `responsible_phone`, `enabled`) VALUES
(1, 'Addy', 'Anthony', '2002-06-22 00:00:00', 'Jette', 'Rue frère orban', 2, '008', 1000, 'Bruxelles', 'juniory.addy@gmail.com', '0465705342', '0485030916', 1),
(2, 'capidis', 'nicolas', '1986-10-07 00:00:00', 'anderlecht', 'avenue joseph lemaire', 17, '9', 1080, 'molenbeek', 'nicolascapidis@hotmail.be', '0483751586', '0483751586', 1),
(3, 'EL Omari', 'Yassir', '2015-06-07 00:00:00', 'BRUXELLES', 'Rue ruysdeal', 22, '9', 1070, 'anderlecht', 'elomari-chaymae@live.fr', '0484543365', '0484140449', 1),
(4, 'Minhas', 'sanjot', '2003-01-27 00:00:00', 'bruxelles', 'Place Saint Denis 27', 27, '1', 1190, 'Bruxelles', 'minhas_balwinder@hotmail.com', '+32488800692', '+32486987160', 1),
(5, 'boufrahi', 'soufiane', '2003-01-14 00:00:00', 'berchem sainte agathe', 'rue de l''eau', 1, NULL, 1190, 'Bruxelles', 'rboufrahi74@gmail.com', '0489946280', '0487620621', 1),
(6, 'Baragragei', 'Mahmoud', '2001-01-15 00:00:00', '14ans', 'La Rue De Montènègro', 10, '24', 1060, 'Bruxelle', 'mahmoud2001@hotmil.com', '0465603253', '0465603253', 1),
(7, 'enes', 'sagir', '1998-01-26 00:00:00', 'istanbul', 'rue georges moreau', 64, NULL, 1070, 'anderlecht', 'enes.kaptan@windowslive.com', '0479020771', '0488199596', 0),
(8, 'Ahmed', 'El Houari', '1998-01-01 00:00:00', 'Berkane', 'Lot EL HASSANIA 2 hey Muqawama,Rue Zohor', 9, 'Chez pas ce champ', 5321, 'Berkane', 'meddounia.2507@gmail.com', '00212618381956', '00212668367193', 0),
(9, 'el mowafy', 'omar', '2004-12-28 00:00:00', 'bruxselles', 'rue edouard van muylders', 20, NULL, 1070, 'bruxelles', 'sharshar.king28@yahoo.fr', '0032478909619', '0032478909619', 0),
(10, 'Palikeshti', 'Arjon', '2008-04-12 00:00:00', 'bruxelles', 'AVENUE FRANS VAN KALKEN', 6, '66', 1070, 'ANDERLECHT', 'julianpalikeshti@hotmail.com', '0478710990', '0478710990', 0),
(11, 'Benarbia-Marcil', 'Milan', '2006-03-11 00:00:00', 'Bruxelles', 'Avenue du Parc', 54, NULL, 1060, 'Saint-Gilles', 'fouad.benarbia@hotmail.fr', '0486309064', '0476964401', 0),
(12, 'bou', 'alexandra', '2005-04-15 00:00:00', 'bruxelles', 'des alliés', 42, NULL, 1190, 'forest', 'murielmarchand1@hotmail.com', '0495/863557', '0495/863557', 0),
(13, 'muya bilema', 'rendy', '2005-10-31 00:00:00', 'saint pierre', 'rue des fabriques', 48, '5', 1000, 'bruxeles', 'muyarendy@yahoo.fr', '0465508722', '0465508722', 0),
(14, 'alpha barry', 'barry', '2005-02-09 00:00:00', 'nederland', 'rue de la porte rouge', 10, 'nr.10', 1000, 'bruxelles', 'adamadalaba@hotmail.com', '0489003457', '0489003457', 0),
(15, 'Mbuanga', 'Goldy', '1995-09-29 00:00:00', 'Ixelles', 'Chausseé de Hal', 93, NULL, 1640, 'Rhode-Saint-Genese', 'gooms@hotmail.be', '0479720916', '0479720916', 0),
(16, 'Pongombo ndjeka', 'Célestin', '1994-01-23 00:00:00', 'Kinshasa', 'Rue de Mérode', 397, '1', 1190, 'Bruxelles', 'glodypongombo@hotmail.com', '0492137258', '0466141483', 0),
(17, 'bah', 'mamadou', '1994-03-03 00:00:00', 'conakry', 'rue georges leclercq', 77, NULL, 1190, 'bruxelles', 'mamadou1994bah@hotmail.fr', '0487272574', '0487272574', 0),
(18, 'Okondji', 'Jonas', '1998-06-19 00:00:00', 'Uccle', 'gieterijstraat', 20, NULL, 1601, 'Ruisbroek', 'okondji58@gmail.com', '0488660774', '0484767765', 0),
(19, 'El Madani', 'Youness', '2003-09-17 00:00:00', 'Anderlecht', 'Square Jacques Frank', 1, '11/06', 1060, 'Bruxelles', 'meddebbarh@stgilles.irisnet.be', '0486752635', '0488907952', 0),
(20, 'PREVOST', 'BAPTISTE', '2002-05-06 00:00:00', 'LISBONNE', 'VANDERAEY', 31, NULL, 1180, 'UCCLE', 'wilfried.prevost@free.fr', '0033652227504', '0033652227504', 0),
(21, 'Karimi', 'Umeed', '2004-12-22 00:00:00', 'Islamabad', 'Montenegro', 1190, '122', 1190, 'Bruxelles', 'NavidKrm@Gmail.com', '0484981710', '0484981710', 0),
(22, 'Chilo', 'Wesley', '2008-12-09 00:00:00', 'Uccle', 'Rue de Savoie', 69, NULL, 1060, 'Saint-Gilles', 'lesliesangoku@hotmail.com', '0466 42 56 17', '0484 43 62 74', 0),
(23, 'Minhas', 'sanjot', '2016-01-27 00:00:00', 'bruxelles', 'Place Saint Denis 27', 27, NULL, 1190, 'Bruxelles', 'minhas_balwinder@hotmail.fr', '+32488800692', '+32488800692', 0),
(24, 'Roubinet', 'Noa-Louis', '2005-05-24 00:00:00', 'Ixelles', 'de la Croix de Pierre', 15, '6', 1060, 'Saint-Gilles', 'roubinet.pascale@gmail.com', '0477855205', '0477855205', 0),
(25, 'Godfroid', 'Dylan', '2003-03-29 00:00:00', 'Ixelles', 'Av brugmann', 101, NULL, 1190, 'Forests', 'Sbdlcmat12@gmail.com', '0476054735', '0476054735', 0),
(26, 'Godfroid', 'Christophe', '2005-09-23 00:00:00', 'Ixelles', 'Av brugmann', 101, NULL, 1190, 'Forest', 'Sbdlcmat12@gmail.com', '0476054735', '0476054735', 0),
(27, 'Dogan', 'Enes', '2004-03-22 00:00:00', 'bruxelles', 'boulevard de la revision 13', 13, '9', 1070, 'bruxelles', 'enes.dogan42@hotmail.com', '0466504904', '0487568111', 1),
(28, 'Jaramillo', 'Darlyn', '1998-08-08 00:00:00', 'Quito, Ecuador', 'Chaussée de Wavre', 140, '4', 1050, 'Ixelles', 'monteros98@outlook.com', '0485932504', '0472743129', 0),
(29, 'Latigui', 'Issame', '1998-03-25 00:00:00', 'Berkane', 'Rue mideltte', 13, NULL, 1030, 'Berkane', 'issam.laatigui@gmail.com', '+212618364686', '0668034183', 0),
(30, 'Detienne', 'Ismaël', '2007-07-22 00:00:00', 'Anderlecht', 'rue Georges Leclercq', 5, NULL, 1190, 'Forest', 'franck.detienne@gmail.com', '0484687266', '0484687266', 0),
(31, 'mavua', 'nathan', '2008-01-19 00:00:00', 'ixelles', 'notre dame de lourdes', 21, NULL, 1090, 'jette', 'mayalie1@hotmail.com', '0472833097', '0472833097', 0),
(32, 'BEN ADDI', 'ANISSE', '2007-09-14 00:00:00', 'BRUXELLES', 'Rue du croissant', 4, '1', 1060, 'bruxelles', 'bouhdidmariam@skynet.be', '0484614695', '0484614695', 0),
(33, 'Mssassi', 'Abdelnasser', '2000-07-10 00:00:00', 'Ixelles', 'Rue égide walskearts', 14, '3', 1060, 'Saint - Gilles', 'nassero10-07@hotmail.fr', '0485985264', '0485985264', 0),
(34, 'Pintrijel', 'Daniel', '1996-07-05 00:00:00', 'Roumanie', 'Rue aux marches du herbes', 31, '5b', 1000, 'Bruxelles', 'pintri.daniel@gmail.com', '0489998741', '0489998741', 0),
(35, 'barry', 'Mamadou Ardho', '1998-05-10 00:00:00', 'Guinée', 'Rue Vanderlinden', 12, '/', 1030, 'Schaerbeek', 'barryardho@hotmail.fr', '0485203516', '0485203516', 0),
(36, 'Bah', 'Mouhamadou-Aliyou', '2004-04-15 00:00:00', 'Ixelles', 'Rue Guillaume Lekeu', 25, '25', 1070, 'Bruxelles', 'aliyoubah1@gmx.fr', '0483046967', '0483046967', 0),
(37, 'agbere', 'razak', '2001-10-16 00:00:00', 'lome', 'RUE DE WAUTIER', 23, NULL, 1020, 'LAEKEN', 'agbereabdulrazak@gmail.com', '0465698991', '0485983652', 1),
(38, 'Abarkan', 'Ayoub', '2000-01-27 00:00:00', 'Bruxelles', 'Rue de mérode', 355, '4', 1190, 'Forest', 'ayoub2841@gmail.com', '+32488117693', '32488117693', 0),
(39, 'El-Mouhayer', 'Aïssa', '1995-06-08 00:00:00', 'Bruxelles', 'Rue Toots Thielemans', 7, '1', 1190, 'Forest', 'elmouhayera@gmail.com', '0484 378 544', '0484 378 544', 0),
(40, 'agbere', 'abdoulrazak', '2001-10-16 00:00:00', 'lome - togo', 'RUE DE WAUTIER', 23, '1', 1020, 'LAEKEN', 'agbereabdulrazak@gmail.com', '0465698991', '0485983652', 0),
(41, 'Kabemba', 'Cédric', '1998-05-08 00:00:00', 'Woluwe-Saint-Lambert', 'Rue Tête D''épine', 2, '/', 1640, 'Rhode-Saint-Genèse', 'cedric.kabemba@hotmail.com', '0486/39.15.50', '0478/97.42.96', 0),
(42, 'Deschryver', 'Charles', '2000-12-22 00:00:00', 'Bukavu', 'Avenue van overbeke', 243, NULL, 1083, 'Ganshoren', 'descharles2234@yahoo.com', '0489084206', '0479247450', 0),
(43, 'Mwinyi', 'Joël', '0096-06-13 00:06:32', 'Kinshasa', 'De bassin', 14, '04', 1070, 'Anderlecht', 'joelmwinyi9@gmail.com', '0470605187', '0470605187', 0),
(44, 'Agbere', 'Razak', '2001-10-16 00:00:00', 'Togo', 'Rue de liège', 80, '2c', 1190, 'Forêts', 'abdoulagbere6@gmail.com', '0465698991', '0465994749', 0),
(45, 'Charron', 'Yasmine', '2004-10-07 00:00:00', 'Pretoria, Afrique du Sud', 'Rue Langeveld', 101, NULL, 1180, 'Uccle', 'vincent.charron@international.gc.ca', '0475 67 31 48', '0470482029', 0),
(46, 'Sow', 'Ismael', '2001-11-23 00:00:00', 'Conakry', 'Fabriekstraat', 156, NULL, 1601, 'Ruisbroek', 'ismaelsow240@gmail.com', '0466285585', '0489328637', 0),
(47, 'Nsiku Dianzenza', 'Jonathan', '0094-08-18 00:06:32', 'Bruxelles', 'Avenue de la gazelle', 18, '1', 1180, 'Bruxelles', 'jonathan-nsiku@hotmail.be', '0465245308', '0473584899', 0),
(48, 'SARR', 'Alassane', '2009-04-12 00:00:00', 'Mauritanie', 'rue des Fortifications', 1, NULL, 1060, 'Saint Gilles', 'sawdatou@hotmail.be', '0492/53.03.95', '0492/53.03.95', 0),
(49, 'Sow', 'Ismael', '2001-11-23 00:00:00', 'Conakry', 'Fabriekstraat', 156, NULL, 1601, 'Ruisbroek', 'ismaelsow240@gmail.com', 'Pas', '0489328637', 0),
(50, 'Zibouh', 'Samir', '1998-07-08 00:00:00', 'Bruxelles', 'Rue des minimes', 115, '68', 1000, 'Bruxelles', 'samir_zibouh@hotmail.com', '0487807483', '0487807483', 0),
(51, 'Mssassi', 'Abdelnasser', '2000-07-10 00:00:00', 'Ixelles', 'Rue egide walskearts', 14, '3', 1060, 'Saint-Gilles', 'nassero10-07@hotmail.fr', '0485985264', '0485985264', 0),
(52, 'ba', 'Abou', '2001-05-10 00:00:00', 'Medina Gounass, Senegal', 'Rue des chaisiers', 7, '0', 1000, 'Bruxelles', 'mounta.ba94@gmail.com', '0486295843', '0486295843', 0),
(53, 'Henao carvajal', 'Nicolas', '2004-12-13 00:00:00', 'Cali Valle  (colombie)', 'Rue van de corput', 24, '1', 1190, 'Forest', 'carolina.carvajal1986@gmail.com', '0483179070', '0483179070', 0),
(54, 'El jari', 'Salim', '1989-07-16 00:00:00', 'Bruxelles', 'Darimon', 9, NULL, 1060, 'Saint gilles', 'Sohier1060@outlook.be', '0487217677', '0487217677', 0),
(55, 'D''Angelo', 'Simon', '1978-10-27 00:00:00', 'Uccle', 'Avenue Oscar Van Goidtsnoven', 91, NULL, 1190, 'Forest', 'simondangelo@hotmail.com', '0477 50 23 56', '0477 50 23 56', 0),
(56, 'agbere', 'razak', '2001-10-16 00:00:00', 'lome', 'rue de wautier', 23, NULL, 1020, 'Brussels', 'Agbereabdulrazak@gmail.com', '+32465698991', '+32465698991', 0),
(57, 'Baysal', 'Ahmet', '2009-04-07 00:00:00', 'Bruxelles', 'Chaussée Neerstal', 22, NULL, 1190, 'forest', 'savas_baysal@hotmail.com', '0486320528', '0485193636', 0),
(58, 'el kaouakibi', 'adam', '2012-04-04 00:00:00', 'bruxelles', 'de fierlant', 72, '01', 1190, 'bruxelles', 'jngoya-obackas@forest.brussels', '0486316076', '023347247', 0),
(59, 'Ndiman lilian', 'Godson', '1999-01-24 00:00:00', 'Ngaoundere', 'Van lint', 3, NULL, 1070, 'Bruxelles', 'SLROUGE@GMAIL.COM', 'O467669283', '0485979483', 0),
(60, 'Choua', 'Mohamed', '2017-04-17 00:00:00', 'Nador (Maroc)', 'Rue du melkriek', 50, NULL, 1180, 'Uccle', 'choua.mc@gmail.com', '0486842420', '0473670738', 0),
(61, 'balekomoso', 'alice', '2004-04-13 00:00:00', 'bruxelles', 'frans van kalken', 6, '25', 1070, 'anderlecht', 'cbalekomoso@gmail.com', '0467709870', '0465897543', 0),
(62, 'El mokhtari', 'Ayoub', '2006-01-15 00:00:00', 'Bruxelles', 'Rue coenraets', 14, NULL, 1060, 'Saint_gilles', 'nani.1975@hotmail.fr', '0485/72.43.04', '0485/72.43.04', 0),
(63, 'El haddadi', 'Sabri', '2006-04-22 00:00:00', 'Berchem st Agathe', 'Avenue du roi', 68, '1', 1060, 'Saint Gilles', 'el.khattuti.m@gmail.com', '0483132810', '0489204163', 0),
(64, 'TOURÉ', 'MAMADOU', '2008-10-25 00:00:00', 'Conakry Guinée', 'Boulevard Maurice lemonnier', 129, '16', 1000, 'Bruxelles', 'kadech1982@yahoo.fr', '0492492497', '0472356377', 0),
(65, 'Amoah', 'Ransford', '2004-12-28 00:00:00', 'Bruxelles', 'rue de longue', 44, NULL, 1620, 'Drogenbos', 'transfordilboudo343@gmail.com', '0486631370', '0486631370', 0),
(66, 'Rojas  perez', 'Matteo', '2004-05-06 00:00:00', 'Bruxelles', 'avenu   minerve', 27, '23', 1190, 'Bruxelles', 'patricia.g@live.cl', '0484380690', '0484380690', 0),
(67, 'Amoah', 'Ransford', '2004-12-28 00:00:00', 'Bxl', 'Rue longue', 44, NULL, 1620, 'Drogenbos', 'transfordilboudo343@gmail.com', '‭0478 47 35 66‬', '0478 47 35 66', 0),
(68, 'muya bilema', 'rendy', '2005-10-31 00:00:00', 'bruxelles', 'rue georges leclerq', 5, '1', 1190, 'forest', 'muyarendy@yahoo.com', '0465508722', '0465508722', 0),
(69, 'Mude', 'Christian', '2002-03-24 00:00:00', 'kinshasa', 'Rue de boulevard salongo', 13, NULL, 12, 'kinshasa', 'christianmude10@gmail.com', '0811721103', '0970262820', 0),
(70, 'Choua', 'Mohamed', '1999-04-17 00:00:00', 'Nador (Maroc)', 'Rue du melkriek', 50, NULL, 1180, 'Uccle', 'choua564@gmail.com', '0486842420', '0473670738', 0),
(71, 'NGADI', 'ABDELLAH', '2006-05-03 00:00:00', 'BRUXELLES', 'BD GUILLAUME VAN HAELEN', 126, '3', 1190, 'FOREST', 'slimangadi@hotmail.com', '0488136126', '0488136126 (papa)', 0),
(72, 'Alves Duarte', 'Juan Pablo', '2004-05-04 00:00:00', 'Bruxelles', 'Rue Pierre Decoster', 35, '03', 1190, 'Forest', 'cristinadias_1976@hotmail.com', '0487739211', '0487739211', 0),
(73, 'El mokhtari', 'Ayoub', '2006-01-15 00:00:00', 'Bruxelles', 'Coenraets', 14, NULL, 1060, 'Saint -gilles', 'nani.1975@hotmail.fr', '0485/72.43.04', '0485/72.43.04', 0),
(74, 'KEMMOGNE KUATSE', 'IVAN STEVE', '2000-01-15 00:00:00', 'Douala', 'Rue du Monténégro', 174, '3', 1190, 'Forest', 'kuatses@gmail.com', '0467615545', '‭+32 466 18 54 50‬', 0),
(75, 'ANDRE', 'ELIAS', '2006-07-09 00:00:00', 'IXELLES', 'RUE LONGUE', 46, '1', 1620, 'DROGENBOS', 'valelias.andre@gmail.com', '0475268655', '0475268655', 0),
(76, 'Adem-Hassan', 'Mohamed', '2003-01-17 00:00:00', 'Bruxelles', 'Parc Peterbos 14C/2', 14, '2', 1070, 'Bruxelles', 'maoza2003@gmail.com', '0485961163', '0484058353', 0),
(77, 'Seggour', 'Hakim', '2003-07-27 00:00:00', 'Bruxelles', 'Square Madelon', 6, '3', 1190, 'Bruxelles', 'hakimseggour8@gmail.com', '0477708689', '0477708689', 0),
(78, 'Muray ilundu', 'Johnny', '1998-01-08 00:00:00', 'Kinshasa', 'Rue de frères Lefort', 150, NULL, 1480, 'Tubize', 'johnnymuray@gmail.com', '0488974049', '0488975059', 0),
(79, 'Sangare', 'Ismael', '1995-11-09 00:00:00', 'Abidjan', 'parc du peterbos', 18, '610', 1070, 'Bruxelles', 'sangare-ismael@hotmail.com', '0498691414', '0498691414', 0),
(80, 'Minner', 'Marco', '2004-11-30 00:00:00', 'Bruxelles', 'des moucherons', 11, '3', 1000, 'Bruxelles', 'MinnerDenis@gmail.com', '0499382049', '0499382049', 0),
(81, 'Strano', 'Lorenzo', '2008-09-15 00:00:00', 'Skopje (Macedoine)', 'Avenue des Muguets', 33, NULL, 1950, 'Kraainem', 'angelostrano@hotmail.com', '0488 866212', '0488 866212', 0),
(82, 'Lamouissi', 'Salaheddine', '2011-02-20 00:00:00', 'Bruxelles', 'Docteur roux', 8, NULL, 1070, 'Anderlecht', 'famille-lamouissi@hotmail.be', '0488425825', 'O488425825', 0),
(83, 'Guerbaoui', 'Mohamed Amine', '1987-08-21 00:00:00', 'Berkane', 'Rue De Flessingue', 33, '3', 1080, 'Molenbeek-Saint-Jean', 'Mohamed-Amine-Guerbaoui@Outlook.Fr', '0474771721', '0474771721', 0),
(84, 'Schneider', 'Leo', '2009-10-15 00:00:00', 'Haguenau (France)', 'Avenue Jean et pierre carsoel', 19, '1', 1180, 'Uccle', 'virginieschneider2904@sfr.fr', '0478721849', '0478721849', 0),
(85, 'Hasan', 'Adam', '2010-05-12 00:00:00', 'Anderlecht', 'Rue du miroir', 68, '12', 1000, 'Bruxelles', 'Sarsoura1985@live.be', '+32487237644', '+32487237644', 1),
(86, 'Aman', 'Prince', '2002-11-03 00:00:00', 'Bouake', 'Théodore verhagen', 125, '0004', 1060, 'Bruxelles', 'princeaman005@gmail.com', '0467620878', '0465737979', 0),
(87, 'gharrafi', 'adem', '2003-03-07 00:00:00', '1000 bruxelles', 'chaussée de ninove', 632, NULL, 1070, 'Anderlecht', 'kourdous.r@outlook.fr', '+32487556126', '+32487556126', 0),
(88, 'Diallo', 'Yaya', '2003-01-05 00:00:00', 'Conakry', 'Boulevard Edmond Machtens', 3, '33', 1080, 'Molenbeek', 'dyaya2766@gmail.com', '0467/71/46/85', '0492/21/06/46', 0),
(89, 'Dieu', 'Martin', '2007-10-22 00:00:00', 'Antony (France)', 'Du Bambou', 7, NULL, 1180, 'Uccle', 'n.dieu@hotmail.fr', '0491080842', '0491080842', 0),
(90, 'Borselli', 'Niccolo', '2001-07-29 00:00:00', 'UCCLE', 'Avenue Kersbeek', 272, '1', 1190, 'Forest', 'niccolo.brs@gmail.com', '0477250547', '0499341231', 0),
(91, 'Zarioh', 'Youssef', '2008-09-17 00:00:00', 'Bruxelles', 'Rue haberman', 2, NULL, 1070, 'Anderlecht', 'zariohsalaheddine@gmail.com', '0472802824', '0472802824', 0),
(92, 'jami', 'abdelkarim', '2004-07-22 00:00:00', 'espagne', 'desstuveles', 54, '1', 1030, 'schaerbeek', 'niema-karim@hotmail.com', '0488251878', '0488251878', 0),
(93, 'Aoudia', 'Ali', '2008-04-04 00:00:00', 'Bruxelles', 'Félix Waefelaer', 22, 'TM', 1190, 'Bruxelles', 'abdell74@hotmail.com', '0499/836363', '0493/939543', 0),
(94, 'Rodrigues Braga', 'Diogo', '2004-02-05 00:00:00', 'Bruxelles', 'Rue de hal', 28, '1 boite', 1190, 'Bruxelles', 'Diogo94453@gmail.com', '0465718679', '0492268402', 0),
(95, 'Demedo', 'Aaron-Raphael', '2011-03-25 00:00:00', 'Jette', 'Openveldstraat16', 16, '/', 1731, 'Zellik', 'nanadjate@hotmail.com', '+3224635450', '0477188270', 0),
(96, 'Nkanu kisoka', 'Lenny', '2010-08-19 00:00:00', 'Bruxelles', 'Georges  leclercq', 46, '21', 1190, 'Forest', 'Letisuami@hotmail.com', '+32466060995', '+32465736798', 0),
(97, 'Bouchra', 'Taoufik', '3010-12-13 00:00:00', 'Bruxelles 1000', 'Avenue Victor Rousseau', 117, '07', 1190, 'Bruxelles', 'bouchtachoukri@hotmail.com', '0478922191', '0478922191', 0),
(98, 'Bouchta', 'Taoufik', '2010-12-13 00:00:00', 'Bruxelles 1000', 'Avenue Victor Rousseau', 117, '07', 1190, 'Bruxelles', 'bouchtachoukri@hotmail.com', '0478922191', '0478922191', 0),
(99, 'heider', 'youssef', '2006-09-20 00:00:00', '1190 forest bruxelle', 'merode', 303, NULL, 1190, 'forest', 'heider-rachid@hotmail.com', '0488666026', '0488666026', 0),
(100, 'konate', 'sekou', '2012-03-19 00:00:00', 'Belgique', 'avenue vanvolxem', 184, 'D12', 1190, 'FOREST', 'mohamedlaminekonate2@gmail.com', '0492 09 80 31', '0492 09 80 31', 0),
(101, 'Mihai', 'Visarion', '1994-05-06 00:00:00', 'Craiova', 'Bechetului', 248, '3g', 1190, '12', 'mihaivisarion94@gmail.com', '0465160716', '0465160716', 0),
(102, 'symeonidis', 'alexios', '2014-07-18 00:00:00', 'uccle Belgique', 'avenue marchale joffre', 113, '2', 1190, 'forest', 'sotiriadou.zoi@hotmail.gr', '0489270985', '0489270985', 0),
(103, 'Olapo', 'Fouad', '2004-07-04 00:00:00', 'Bruxelles', 'RUE DE LA FORET D''HOULTHULST', 3, '16', 1000, 'BRUXELLE', 'FOUADOLAPO2@GMAIL.COM', '+324867358', '+32486967358', 0),
(104, 'Amezean', 'Bilal', '2009-11-25 00:00:00', 'Bruxelles', 'Rue de la Sérénade, 28', 28, NULL, 1080, 'MOLENBEEK-SAINT-JEAN', 'najoua59@hotmail.fr', '+32486709546', '+32486709546', 0),
(105, 'Amezean', 'Bilal', '2009-11-25 00:00:00', 'Bruxelles', 'Rue de la Sérénade, 28', 28, NULL, 1080, 'MOLENBEEK-SAINT-JEAN', 'najoua59@hotmail.fr', '+32486709546', '+32486709546', 0),
(106, 'Kanza Mpata', 'Jonathan', '2002-09-01 00:00:00', 'Bruxelles', 'Chaussée de Neerstalle', 390, '024', 1180, 'Bruxelles', 'johnykanza42@gmail.com', '0488834128', '0484078979', 0),
(107, 'Snoussi', 'Moad', '2004-08-24 00:00:00', 'Bruxelles', 'Rue Georges Leclerq', 40, '32', 1190, 'Bruxelles', 'moade.snoussi@gmail.com', '0467704391', '0483727021', 0),
(108, 'Snoussi', 'Moad', '2004-08-24 00:00:00', 'Bruxelles', 'Rue Georges Leclerq', 40, '32', 1190, 'Bruxelles', 'snoussi.moade@gmail.com', '0467704391', '0483727021', 0),
(109, 'Soh Noubissi', 'Emmanuel-Darian', '2011-12-26 00:00:00', 'Bruxelles', 'Rue Georges Leclercq', 5, '3/1', 1190, 'Forest', 'jennyclaudem@yahoo.com', '048537959', '0485785684', 0),
(110, 'Afallah', 'Nadhir', '2005-12-30 00:00:00', 'Anderlecht', 'Rue de la sympathie', 65, '1', 1070, 'Anderlecht', 'afallahchikri@hotmail.com', '0477704317', '0477704317', 0),
(111, 'Kone', 'Inza', '1999-08-30 00:00:00', 'Daloa', 'Boulevard du Neuvième de Ligne 27', 27, '1000', 1000, 'Bruxelles', 'inza.kone.bxl@gmail.com', '+32465873001', '0465873001', 0),
(112, 'Olapo', 'Foud', '2018-04-07 00:00:00', 'Rue Haute st Pierre', 'Rue de la Forêt d''houthulst', 3, '16', 1000, 'Bruxelle', 'fouadolapo2@gmail.com', '0466339963', '0466339963', 0),
(113, 'Bouzerda', 'Achraf', '2005-04-01 00:00:00', 'Espagne', 'Avenue du roi', 30, '1060', 1060, 'Saint gille', 'ach360foot@gmail.com', '+32489693509', '+32489693509', 0),
(114, 'Dergal', 'Haytam', '2007-09-09 00:00:00', 'Bruxelles', 'Avenue de la gazelle', 50, '14', 1180, 'Uccle', 'Haytamdergal@outlook.be', '+32485764292', '0472355789', 0),
(115, 'Olapo', 'Fouad', '2004-04-07 00:00:00', 'Saint pierre', 'Rue de la forêt D''houthulst', 3, '16', 1000, 'Bruxelles', 'fouadolapo2@gmail.com', '0466339963', '0466339963', 0);

-- --------------------------------------------------------

--
-- Structure de la table `seo`
--

CREATE TABLE IF NOT EXISTS `seo` (
`id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `seo`
--

INSERT INTO `seo` (`id`, `title`, `description`) VALUES
(1, 'Renaissance Sportive Forestoise (RSF), votre Club de Football à Forest - Bruxelles', 'RSF est un club de football pour tous les ages se situant à Forest'),
(2, 'Toutes les équipes "Jeunes" de la Renaissance Sportive Forestoise', 'Une liste complète de toutes les équipes de U6 au U16de la RSF'),
(3, 'Toutes les équipes "Première" de la RSF', 'Une liste complète de toutes les équipes de la Renaissance Sportive Forestoise'),
(4, 'Inscription au club de Football Renaissance Sportive Forestoise situé à Forest', 'Formulaire d''inscription au club de foot RSF'),
(5, 'Inscription aux Tournois organisés par la RSF (Renaissance Sportive Forestoise)', 'Formulaire d''inscription au club de foot Renaissance Sportive Forestoise'),
(6, 'Tout le Comité du Club de la Renaissance Sportive Forestoise à Forest', 'Liste complète de tous les membres du comité de la RSF');

-- --------------------------------------------------------

--
-- Structure de la table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
`id` int(11) NOT NULL,
  `picture_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL,
  `slug` varchar(128) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `team`
--

INSERT INTO `team` (`id`, `picture_id`, `name`, `type`, `updated_at`, `slug`) VALUES
(1, NULL, 'U06-1', 'young', '2015-11-11 01:29:58', 'u06-1'),
(2, NULL, 'U07-1', 'young', '2015-11-11 01:29:58', 'u07-1'),
(3, NULL, 'U07-2', 'young', '2015-11-11 01:29:58', 'u07-2'),
(4, NULL, 'U08-1', 'young', '2015-11-11 01:29:58', 'u08-1'),
(5, NULL, 'U08-2', 'young', '2015-11-11 01:29:58', 'u08-2'),
(6, NULL, 'U09-1', 'young', '2015-11-11 01:29:58', 'u09-1'),
(7, NULL, 'U09-2', 'young', '2015-11-11 01:29:58', 'u09-2'),
(8, NULL, 'U10-1', 'young', '2015-11-11 01:29:58', 'u10-1'),
(9, NULL, 'U10-2', 'young', '2015-11-11 01:29:58', 'u10-2'),
(10, NULL, 'U11-1', 'young', '2015-11-11 01:29:58', 'u11-1'),
(11, NULL, 'U11-2', 'young', '2015-11-11 01:29:58', 'u11-2'),
(12, NULL, 'U12-1', 'young', '2015-11-11 01:29:58', 'u12-1'),
(13, NULL, 'U13-1', 'young', '2015-11-11 01:29:58', 'u13-1'),
(14, NULL, 'U15-1', 'young', '2015-11-11 01:29:58', 'u15-1'),
(15, NULL, 'U16', 'young', '2015-11-11 01:29:58', 'u16'),
(17, NULL, 'F01-P1', 'first', '2015-11-11 01:29:58', 'f01-p1'),
(18, NULL, 'F02-P3', 'first', '2017-05-25 21:10:36', 'f02-p3'),
(20, NULL, 'U14', 'young', '2018-08-04 21:40:21', 'u14'),
(21, NULL, 'U12', 'young', '2018-08-04 21:41:14', 'u12');

-- --------------------------------------------------------

--
-- Structure de la table `team_staff`
--

CREATE TABLE IF NOT EXISTS `team_staff` (
`id` int(11) NOT NULL,
  `picture_id` int(11) DEFAULT NULL,
  `team_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `function` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_display` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `team_staff`
--

INSERT INTO `team_staff` (`id`, `picture_id`, `team_id`, `name`, `first_name`, `function`, `order_display`) VALUES
(1, NULL, 1, 'El Ganfoud', 'Rachid', 'Directeur Sportif', 1),
(7, NULL, 13, 'YUTA', 'Félix', 'Coach formateur', 1),
(12, NULL, 18, 'MOHALLEM', 'Abdenbi', 'T1', 1),
(14, NULL, 18, 'BOUANANI', 'Abdelhamid', 'T2', 2);

-- --------------------------------------------------------

--
-- Structure de la table `text`
--

CREATE TABLE IF NOT EXISTS `text` (
`id` int(11) NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `text`
--

INSERT INTO `text` (`id`, `page_id`, `number`, `content`) VALUES
(1, 1, '1', '<p>Le club existe depuis 2014, c''est une id&eacute;e qui &eacute;tait en attente depuis plus de 10 ans et qui s''est enfin r&eacute;alis&eacute;e. Car apr&egrave;s constat les jeunes de Forest devaient se d&eacute;placer loin pour jouer, d''o&ugrave; la cr&eacute;ation de notre Club. Nous avons une &eacute;quipe dynamique et motiv&eacute;e pour accueillir tous les jeunes d&eacute;sirant pratiquer leur sport favori, le football.</p>'),
(2, 1, '2', '<p>&nbsp;</p>\r\n<p><strong>&nbsp;</strong></p>'),
(3, 8, '1', '<p>Conditions g&eacute;n&eacute;rales</p>');

-- --------------------------------------------------------

--
-- Structure de la table `tournament`
--

CREATE TABLE IF NOT EXISTS `tournament` (
`id` int(11) NOT NULL,
  `date_tournament` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `tournament`
--

INSERT INTO `tournament` (`id`, `date_tournament`) VALUES
(1, '2016-05-21 00:00:00'),
(2, '2016-05-22 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `tournament_pool`
--

CREATE TABLE IF NOT EXISTS `tournament_pool` (
`id` int(11) NOT NULL,
  `tournament_id` int(11) NOT NULL,
  `team` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `tournament_pool`
--

INSERT INTO `tournament_pool` (`id`, `tournament_id`, `team`, `time`) VALUES
(3, 2, 'U10 (2006) - U11 (2005)', '13h30 - 16h30'),
(4, 2, 'U12 (2004) - U13 (2003)', '9h30 - 12h30');

-- --------------------------------------------------------

--
-- Structure de la table `tournament_registration`
--

CREATE TABLE IF NOT EXISTS `tournament_registration` (
`id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `in_charge` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `registration_number` smallint(6) NOT NULL,
  `street` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number_street` smallint(6) NOT NULL,
  `postal_code` smallint(6) NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `condition_term` tinyint(1) NOT NULL,
  `date_registration` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `tournament_registration`
--

INSERT INTO `tournament_registration` (`id`, `name`, `in_charge`, `registration_number`, `street`, `number_street`, `postal_code`, `city`, `email`, `phone`, `condition_term`, `date_registration`) VALUES
(1, 'djelassi', 'djelassi', 7654, 'rue des soldats 124', 124, 1082, 'berchem st aghate', 'djelassijilani@outlook.fr', '0485212247', 1, '2016-12-09 19:58:00'),
(2, 'RSC Anderlecht', 'Ismail', 35, 'Boulevard de la révision', 75, 1070, 'Anderlecht', 'ism.elk@hotmail.com', '0489165653', 1, '2019-04-08 21:42:33');

-- --------------------------------------------------------

--
-- Structure de la table `tournament_registrations_tournament_registration_teams`
--

CREATE TABLE IF NOT EXISTS `tournament_registrations_tournament_registration_teams` (
  `tournament_registration_id` int(11) NOT NULL,
  `tournament_registration_team_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `tournament_registrations_tournament_registration_teams`
--

INSERT INTO `tournament_registrations_tournament_registration_teams` (`tournament_registration_id`, `tournament_registration_team_id`) VALUES
(1, 14),
(2, 16);

-- --------------------------------------------------------

--
-- Structure de la table `tournament_registration_team`
--

CREATE TABLE IF NOT EXISTS `tournament_registration_team` (
`id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `tournament_registration_team`
--

INSERT INTO `tournament_registration_team` (`id`, `name`) VALUES
(1, 'U6-1'),
(2, 'U6-2'),
(3, 'U7-1'),
(4, 'U7-2'),
(5, 'U8-1'),
(6, 'U8-2'),
(7, 'U9-1'),
(8, 'U9-2'),
(9, 'U10-1'),
(10, 'U10-2'),
(11, 'U11-1'),
(12, 'U11-2'),
(13, 'U12-1'),
(14, 'U12-2'),
(15, 'U13-1'),
(16, 'U13-2');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(1, 'mathieu', 'mathieu', 'thiry.math@gmail.com', 'thiry.math@gmail.com', 1, 'gf48qcgvaw0k088wkccw8sw0ggks0sk', 'AdXyIKHwbOq5ZEFsZdnkHn4plom8xpx9QZQRUWSrJNMYbrVZQCf8YMk1pIoAHEsjoO1yWVuX1b3qyW5xUBVMoA==', '2018-08-01 14:51:37', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}', 0, NULL),
(2, 'momo', 'momo', 'mohamednour11@hotmail.com', 'mohamednour11@hotmail.com', 1, '', 'IPzr1GXrGF1jjq7bcV0cZZfZ9299jgE56P7L+PZ3NFT2AZRZ6t2uTwmgQwFpBSE7eVim6GkkMS886uo7RTjmQg==', '2019-05-02 16:46:30', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}', 0, NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `actuality`
--
ALTER TABLE `actuality`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_4093DDD8EE45BDBF` (`picture_id`);

--
-- Index pour la table `committee`
--
ALTER TABLE `committee`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_D2F2C237EE45BDBF` (`picture_id`);

--
-- Index pour la table `page`
--
ALTER TABLE `page`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_140AB62097E3DD86` (`seo_id`);

--
-- Index pour la table `payment`
--
ALTER TABLE `payment`
 ADD PRIMARY KEY (`id`), ADD KEY `IDX_6D28840D99E6F5DF` (`player_id`);

--
-- Index pour la table `picture`
--
ALTER TABLE `picture`
 ADD PRIMARY KEY (`id`), ADD KEY `IDX_16DB4F89B84BD854` (`actuality_id`), ADD KEY `IDX_16DB4F89296CD8AE` (`team_id`), ADD KEY `IDX_16DB4F8999E6F5DF` (`player_id`), ADD KEY `IDX_16DB4F89ED1A100B` (`committee_id`), ADD KEY `IDX_16DB4F897F0AA5D1` (`teamStaff_id`);

--
-- Index pour la table `player`
--
ALTER TABLE `player`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_98197A65EE45BDBF` (`picture_id`), ADD KEY `IDX_98197A65296CD8AE` (`team_id`);

--
-- Index pour la table `price`
--
ALTER TABLE `price`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `registration`
--
ALTER TABLE `registration`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `seo`
--
ALTER TABLE `seo`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `team`
--
ALTER TABLE `team`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_C4E0A61FEE45BDBF` (`picture_id`);

--
-- Index pour la table `team_staff`
--
ALTER TABLE `team_staff`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_8568BAD2EE45BDBF` (`picture_id`), ADD KEY `IDX_8568BAD2296CD8AE` (`team_id`);

--
-- Index pour la table `text`
--
ALTER TABLE `text`
 ADD PRIMARY KEY (`id`), ADD KEY `IDX_3B8BA7C7C4663E4` (`page_id`);

--
-- Index pour la table `tournament`
--
ALTER TABLE `tournament`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tournament_pool`
--
ALTER TABLE `tournament_pool`
 ADD PRIMARY KEY (`id`), ADD KEY `IDX_981C1BB833D1A3E7` (`tournament_id`);

--
-- Index pour la table `tournament_registration`
--
ALTER TABLE `tournament_registration`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tournament_registrations_tournament_registration_teams`
--
ALTER TABLE `tournament_registrations_tournament_registration_teams`
 ADD PRIMARY KEY (`tournament_registration_id`,`tournament_registration_team_id`), ADD KEY `IDX_C27453016B300921` (`tournament_registration_id`), ADD KEY `IDX_C2745301DCA2AA75` (`tournament_registration_team_id`);

--
-- Index pour la table `tournament_registration_team`
--
ALTER TABLE `tournament_registration_team`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_1483A5E992FC23A8` (`username_canonical`), ADD UNIQUE KEY `UNIQ_1483A5E9A0D96FBF` (`email_canonical`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `actuality`
--
ALTER TABLE `actuality`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT pour la table `committee`
--
ALTER TABLE `committee`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `page`
--
ALTER TABLE `page`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `payment`
--
ALTER TABLE `payment`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `picture`
--
ALTER TABLE `picture`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT pour la table `player`
--
ALTER TABLE `player`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `price`
--
ALTER TABLE `price`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `registration`
--
ALTER TABLE `registration`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=116;
--
-- AUTO_INCREMENT pour la table `seo`
--
ALTER TABLE `seo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `team`
--
ALTER TABLE `team`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT pour la table `team_staff`
--
ALTER TABLE `team_staff`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `text`
--
ALTER TABLE `text`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `tournament`
--
ALTER TABLE `tournament`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `tournament_pool`
--
ALTER TABLE `tournament_pool`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `tournament_registration`
--
ALTER TABLE `tournament_registration`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `tournament_registration_team`
--
ALTER TABLE `tournament_registration_team`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `actuality`
--
ALTER TABLE `actuality`
ADD CONSTRAINT `FK_4093DDD8EE45BDBF` FOREIGN KEY (`picture_id`) REFERENCES `picture` (`id`) ON DELETE SET NULL;

--
-- Contraintes pour la table `committee`
--
ALTER TABLE `committee`
ADD CONSTRAINT `FK_D2F2C237EE45BDBF` FOREIGN KEY (`picture_id`) REFERENCES `picture` (`id`) ON DELETE SET NULL;

--
-- Contraintes pour la table `page`
--
ALTER TABLE `page`
ADD CONSTRAINT `FK_140AB62097E3DD86` FOREIGN KEY (`seo_id`) REFERENCES `seo` (`id`);

--
-- Contraintes pour la table `payment`
--
ALTER TABLE `payment`
ADD CONSTRAINT `FK_6D28840D99E6F5DF` FOREIGN KEY (`player_id`) REFERENCES `player` (`id`);

--
-- Contraintes pour la table `picture`
--
ALTER TABLE `picture`
ADD CONSTRAINT `FK_16DB4F89296CD8AE` FOREIGN KEY (`team_id`) REFERENCES `team` (`id`) ON DELETE SET NULL,
ADD CONSTRAINT `FK_16DB4F897F0AA5D1` FOREIGN KEY (`teamStaff_id`) REFERENCES `team_staff` (`id`) ON DELETE SET NULL,
ADD CONSTRAINT `FK_16DB4F8999E6F5DF` FOREIGN KEY (`player_id`) REFERENCES `player` (`id`) ON DELETE SET NULL,
ADD CONSTRAINT `FK_16DB4F89B84BD854` FOREIGN KEY (`actuality_id`) REFERENCES `actuality` (`id`) ON DELETE SET NULL,
ADD CONSTRAINT `FK_16DB4F89ED1A100B` FOREIGN KEY (`committee_id`) REFERENCES `committee` (`id`) ON DELETE SET NULL;

--
-- Contraintes pour la table `player`
--
ALTER TABLE `player`
ADD CONSTRAINT `FK_98197A65296CD8AE` FOREIGN KEY (`team_id`) REFERENCES `team` (`id`) ON DELETE SET NULL,
ADD CONSTRAINT `FK_98197A65EE45BDBF` FOREIGN KEY (`picture_id`) REFERENCES `picture` (`id`) ON DELETE SET NULL;

--
-- Contraintes pour la table `team`
--
ALTER TABLE `team`
ADD CONSTRAINT `FK_C4E0A61FEE45BDBF` FOREIGN KEY (`picture_id`) REFERENCES `picture` (`id`) ON DELETE SET NULL;

--
-- Contraintes pour la table `team_staff`
--
ALTER TABLE `team_staff`
ADD CONSTRAINT `FK_8568BAD2296CD8AE` FOREIGN KEY (`team_id`) REFERENCES `team` (`id`) ON DELETE SET NULL,
ADD CONSTRAINT `FK_8568BAD2EE45BDBF` FOREIGN KEY (`picture_id`) REFERENCES `picture` (`id`) ON DELETE SET NULL;

--
-- Contraintes pour la table `text`
--
ALTER TABLE `text`
ADD CONSTRAINT `FK_3B8BA7C7C4663E4` FOREIGN KEY (`page_id`) REFERENCES `page` (`id`);

--
-- Contraintes pour la table `tournament_pool`
--
ALTER TABLE `tournament_pool`
ADD CONSTRAINT `FK_981C1BB833D1A3E7` FOREIGN KEY (`tournament_id`) REFERENCES `tournament` (`id`);

--
-- Contraintes pour la table `tournament_registrations_tournament_registration_teams`
--
ALTER TABLE `tournament_registrations_tournament_registration_teams`
ADD CONSTRAINT `FK_C27453016B300921` FOREIGN KEY (`tournament_registration_id`) REFERENCES `tournament_registration` (`id`),
ADD CONSTRAINT `FK_C2745301DCA2AA75` FOREIGN KEY (`tournament_registration_team_id`) REFERENCES `tournament_registration_team` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
