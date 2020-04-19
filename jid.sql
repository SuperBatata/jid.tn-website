-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Mar 31, 2020 at 10:09 AM
-- Server version: 5.7.28
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jid`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id_contact` int(11) NOT NULL AUTO_INCREMENT,
  `sujet` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_contact`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `sujet`, `email`, `nom`, `message`, `date`) VALUES
(1, 'premier contact', 'youssef.dridi@esprit.tn', 'youssef', 'prems', '2020-03-11 13:18:43'),
(5, 'deuxieme contact', 'youssef.dridi@esprit.tn', 'youssef', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br />\r\nUt enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br />\r\nDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <br />\r\nExcepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2020-03-11 13:18:43'),
(6, '', 'youssef@esprit.tn', 'youssef', '', '2020-03-11 13:18:43'),
(7, 'deuxieme contact', 'youssef.dridi@esprit.tn', 'youssef', 'kqshdbqsdkhbqsdjkhqsdbvhlqsdbjkhjqsbcqs<br />\r\nqjshbdkjhbdsjdqsbqs <br />\r\nsqkjnxw nwx cn wkxwc xwcxcwlncqs<br />\r\nxwnbcxw,xcwnbxwc,nxcw', '2020-03-11 13:18:43'),
(8, 'deuxieme contact', 'youssef.dridi@esprit.tn', 'youssef', 'kqshdbqsdkhbqsdjkhqsdbvhlqsdbjkhjqsbcqs<br />\r\nqjshbdkjhbdsjdqsbqs <br />\r\nsqkjnxw nwx cn wkxwc xwcxcwlncqs<br />\r\nxwnbcxw,xcwnbxwc,nxcw', '2020-03-11 13:18:43'),
(9, 'deuxieme contact', 'ms@ifes.tn', 'mayssa', 'mqsldsqkdqsjbsqdnbqsd <br />\r\nkjqdqhhqsdhqsd ckqnbdqs<br />\r\nqs,nqs', '2020-03-11 13:18:43'),
(10, 'deuxieme contact', 'youssef.dridi@esprit.tn', 'youssef', 'sqsqsqsqsxwv wxcwcwx', '2020-03-11 13:19:35'),
(11, 'deuxieme contact', 'gawistegaw@gmail.com', 'mayssa', 'sqdqdqsd sqksdqjsd qslkkjqsjsddsdq ljqsjdsjbsdq', '2020-03-28 00:52:59');

-- --------------------------------------------------------

--
-- Table structure for table `debat`
--

DROP TABLE IF EXISTS `debat`;
CREATE TABLE IF NOT EXISTS `debat` (
  `id_debat` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(255) CHARACTER SET latin1 NOT NULL,
  `nom` varchar(255) CHARACTER SET latin1 NOT NULL,
  `telephone` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `nomOgranisation` varchar(255) CHARACTER SET latin1 NOT NULL,
  `emailOgranisation` varchar(255) CHARACTER SET latin1 NOT NULL,
  `logo` varchar(255) CHARACTER SET latin1 NOT NULL,
  `themeDebat` varchar(255) CHARACTER SET latin1 NOT NULL,
  `description` varchar(255) CHARACTER SET latin1 NOT NULL,
  `nbrintervenant` int(11) NOT NULL,
  `duree` varchar(255) CHARACTER SET latin1 NOT NULL,
  `informationComplementaire` varchar(255) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id_debat`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `debat`
--

INSERT INTO `debat` (`id_debat`, `prenom`, `nom`, `telephone`, `email`, `nomOgranisation`, `emailOgranisation`, `logo`, `themeDebat`, `description`, `nbrintervenant`, `duree`, `informationComplementaire`) VALUES
(5, 'dridi', 'youssef', '23977150', 'oumaima.maynefzi@gmail.com', 'csdcsd', 'cscssqqsqsd@qsdqsdqsd.qsc', 'uploads/5e825ee929226', 'CitoyennetÃ©-  Ø§Ù„Ù…ÙˆØ§Ø·Ù†Ø©', 'cscqscsq qscqscscqs csqcscqs', 1, '11h30-13h', 'sqdssqdsdq sdqdssdqqsdsd'),
(3, 'dridi', 'mayssa', '23977150', 'gawistegaw@gmail.com', 'csdcsd', 'cscssqqsqsd@qsdqsdqsd.qsc', 'uploads/5e80f5d46198e', 'Immigration-  Ø§Ù„Ù‡Ø¬Ø±Ø©', 'sdqccscscqs', 1, '11h30-13h', 'sqcxqsqsc qssqcs'),
(4, 'dridi', 'youssef', '23977150', 'bobnajjarb@yahoo.fr', 'csdcsd', 'cscssqqsqsd@qsdqsdqsd.qsc', 'uploads/5e825d558aa3b', 'SÃ©curitÃ©-Ø§Ù„Ø£Ù…Ù†', 'cqscqs csqcs sqc qccsq', 1, '11h30-13h', 'sqccqsc ssdsqdcqs'),
(6, 'dridi', 'youssef', '23977150', 'bobnajjarb@yahoo.fr', 'csdcsd', 'cscssqqsqsd@qsdqsdqsdqsd.qsc', 'uploads/5e82641bb3a5d', 'CitoyennetÃ©-  Ø§Ù„Ù…ÙˆØ§Ø·Ù†Ø©', 'sqsqd qsddqsqsd qsdqsdsdq', 1, '11h30-13h', 'ssqdsdq sqdsdqsdqsd qsddssq'),
(7, 'dridi', 'youssef', '23977150', 'bobnajjarb@yahoo.fr', 'csdcsd', 'cscssqqsqsd@qsdqsdqsdqsd.qsc', 'uploads/5e8265536a851', 'CitoyennetÃ©-  Ø§Ù„Ù…ÙˆØ§Ø·Ù†Ø©', 'sqsqd qsddqsqsd qsdqsdsdq', 1, '11h30-13h', 'ssqdsdq sqdsdqsdqsd qsddssq'),
(8, 'dridi', 'youssef', '23977150', 'bobnajjarb@yahoo.fr', 'csdcsd', 'cscssqqsqsd@qsdqsdqsdqsd.qsc', 'uploads/5e82656ac19a7', 'CitoyennetÃ©-  Ø§Ù„Ù…ÙˆØ§Ø·Ù†Ø©', 'sqsqd qsddqsqsd qsdqsdsdq', 1, '11h30-13h', 'ssqdsdq sqdsdqsdqsd qsddssq');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL,
  `typeOrg` varchar(255) NOT NULL,
  `nameOrganisation` varchar(255) DEFAULT NULL,
  `webSite` varchar(255) DEFAULT NULL,
  `logo` varchar(255) NOT NULL,
  `presentation` text NOT NULL,
  `descriptionevent` text NOT NULL,
  `duree` varchar(255) NOT NULL,
  `place` varchar(255) CHARACTER SET utf8 NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longetude` varchar(255) NOT NULL,
  `placeName` varchar(255) NOT NULL,
  `exactplace` varchar(255) NOT NULL,
  `eventLink` varchar(255) NOT NULL,
  `eventProgram` varchar(255) NOT NULL,
  `accepter` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `start_event`, `end_event`, `typeOrg`, `nameOrganisation`, `webSite`, `logo`, `presentation`, `descriptionevent`, `duree`, `place`, `latitude`, `longetude`, `placeName`, `exactplace`, `eventLink`, `eventProgram`, `accepter`) VALUES
(9, 'ipsum Lorem', '2020-04-01 10:00:00', '2020-04-02 18:00:00', 'Association / Organisation', 'youssef', 'http://localhost/jdi.tn/views/view/deveniracteur.html', 'uploads/5e82978a9abf0', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', '1 Jour', 'La MunicipalitÃ©- Ù…Ù‚Ø± Ø§Ù„Ø¨Ù„Ø¯ÙŠØ©', '36.8394314', '10.3000846', 'arena', 'foire internationale du kram, Avenue Menzel Bourguiba, Tunisie', 'http://localhost/jdi.tn/views/view/deveniracteur.html', 'C:\\wamp64\\tmp\\phpA994.tmp', 0),
(10, 'ipsum Lorem', '2020-04-01 10:00:00', '2020-04-02 18:00:00', 'Association / Organisation', 'youssef', 'http://localhost/jdi.tn/views/view/deveniracteur.html', 'uploads/5e8297bcc0d4a', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', '1 Jour', 'La MunicipalitÃ©- Ù…Ù‚Ø± Ø§Ù„Ø¨Ù„Ø¯ÙŠØ©', '36.8394314', '10.3000846', 'arena', 'foire internationale du kram, Avenue Menzel Bourguiba, Tunisie', 'http://localhost/jdi.tn/views/view/deveniracteur.html', 'uploads/Guide e-learning pour Ã©tudiant.pdf', 0),
(11, 'ipsum Lorem', '2020-04-05 08:00:00', '2020-04-08 17:00:00', 'Association / Organisation', 'jid', 'http://jid.tn', 'uploads/5e82a0522c123', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', '3 Jours', 'La MunicipalitÃ©- Ù…Ù‚Ø± Ø§Ù„Ø¨Ù„Ø¯ÙŠØ©', '36.8394314', '10.3000846', 'arena', 'foire internationale du kram, Avenue Menzel Bourguiba, Tunisie', 'http://localhost/jdi.tn/views/view/deveniracteur.html', 'uploads/checkpoint1.html', 1),
(12, 'ipsum Lorem', '2020-04-05 08:00:00', '2020-04-08 17:00:00', 'Association / Organisation', 'jid', 'http://jid.tn', 'uploads/5e82a06f9471e', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', '3 Jours', 'La MunicipalitÃ©- Ù…Ù‚Ø± Ø§Ù„Ø¨Ù„Ø¯ÙŠØ©', '36.8394314', '10.3000846', 'arena', 'foire internationale du kram, Avenue Menzel Bourguiba, Tunisie', 'http://localhost/jdi.tn/views/view/deveniracteur.html', 'uploads/CahierDeChargeTechniqueEtFonctionnelleAnnexe1.pdf', 1),
(13, 'ipsum Lorem', '2020-05-01 00:00:00', '2020-06-01 23:59:00', 'Association / Organisation', 'mayssa', 'http://localhost/jdi.tn/views/view/deveniracteur.html', 'uploads/5e82dbd007558', 'sqdqsd sqdqsd sqdqsd <br />\r\nsqdqsd sqdqsd ', 'sqdqsd  sqdqsd <br />\r\nsqdqsd sqdqsd ', '1 Jour', 'La MunicipalitÃ©- Ù…Ù‚Ø± Ø§Ù„Ø¨Ù„Ø¯ÙŠØ©', '36.88911649999999', '10.3222671', 'qsdqssdsdq', 'Marsa, Tunisie', 'http://localhost/jdi.tn/views/view/deveniracteur.html', 'uploads/Youssef\'s Resume.pdf', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
