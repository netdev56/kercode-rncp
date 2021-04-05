-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 05 avr. 2021 à 10:54
-- Version du serveur :  10.3.28-MariaDB
-- Version de PHP : 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hydk5178_kercode-rncp`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `description_articles` varchar(100) DEFAULT NULL,
  `titre_img_articles` varchar(255) DEFAULT 'Modifier le titre de l image',
  `image_articles` varchar(255) DEFAULT 'app/public/front/images/articles/article-morbihan-bretagne.webp',
  `idarticlesusers` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `description_articles`, `titre_img_articles`, `image_articles`, `idarticlesusers`) VALUES
(10, 'fgdfgd', 'dgfgdf', NULL, 'Modifier le titre de l image', 'app/public/front/images/articles/belle-ile-en-mer-morbihan.jpg', 37),
(11, 'fdsfs', 'sdfsdf', NULL, 'Modifier le titre de l image', 'app/public/front/images/articles/belle-ile-en-mer-morbihan.jpg', 37),
(12, 'sdfsdf', 'sdfdf', NULL, 'Modifier le titre de l image', 'app/public/front/images/articles/belle-ile-en-mer-morbihan.jpg', 37),
(13, 'sdsqdsq', 'qsdsqd', NULL, 'Modifier le titre de l image', 'app/public/front/images/articles/belle-ile-en-mer-morbihan.jpg', 37),
(14, 'qsdqsdqs', 'qsdqsd', NULL, 'Modifier le titre de l image', 'app/public/front/images/articles/belle-ile-en-mer-morbihan.jpg', 37),
(15, 'qsdqsd', 'qsdqsdsq', NULL, 'Modifier le titre de l image', 'app/public/front/images/articles/belle-ile-en-mer-morbihan.jpg', 37),
(18, 'hgfh', 'fghfghfg', NULL, 'Modifier le titre de l image22', 'app/public/front/images/articles/drapeau-breton.webp', 37),
(19, 'sqdqsd', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa alias sit, beatae at enim corporis maxime labore animi qui dolorum sed, nesciunt odit a. Eos expedita dignissimos optio atque repellat?\r\n\r\nLorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa alias sit, beatae at enim corporis maxime labore animi qui dolorum sed, nesciunt odit a. Eos expedita dignissimos optio atque repellat?', 'Lorem ipsum dolor sfdgfgdfgdfgfg  it amet consectetur adipisicing elit. Similique, non, fugit nnsect', 'Morbihan', 'app/public/front/images/articles/morbihan.jpg', 37),
(20, 'sqdsq', 'sqdsqdsqdsq', 'sqdqsdsqd', 'Modifier le titre de l image', 'app/public/front/images/articles/maison-location-gite-bretagne-morbihan-56.webp', 37),
(21, 'sdffd22', 'dfssdfsdf', 'sdfsdf', 'Modifier le titre de l image', 'app/public/front/images/articles/article-morbihan-bretagne.webp', 40);

-- --------------------------------------------------------

--
-- Structure de la table `contactform`
--

CREATE TABLE `contactform` (
  `id_contactform` bigint(20) UNSIGNED NOT NULL,
  `lastname_contactform` varchar(255) DEFAULT NULL,
  `email_contactform` text DEFAULT NULL,
  `telephone_contactform` bigint(20) DEFAULT NULL,
  `message_contactform` longtext DEFAULT NULL,
  `rgpd_contactform` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contactform`
--

INSERT INTO `contactform` (`id_contactform`, `lastname_contactform`, `email_contactform`, `telephone_contactform`, `message_contactform`, `rgpd_contactform`) VALUES
(9, 'test', 'manuj85@hotmail.fr', 54654654564654, '\r\nLorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa alias sit, beatae at enim corporis maxime labore animi qui dolorum sed, nesciunt odit a. Eos expedita dignissimos optio atque repellat?\r\n\r\nLorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa alias sit, beatae at enim corporis maxime labore animi qui dolorum sed, nesciunt odit a. Eos expedita dignissimos optio atque repellat?', 'RGPD du formulaire de contact validé'),
(10, 'sqdqsd', 'manuj85@hotmail.fr', 54654, '\r\nLorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa alias sit, beatae at enim corporis maxime labore animi qui dolorum sed, nesciunt odit a. Eos expedita dignissimos optio atque repellat?\r\n\r\nLorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa alias sit, beatae at enim corporis maxime labore animi qui dolorum sed, nesciunt odit a. Eos expedita dignissimos optio atque repellat?', 'RGPD du formulaire de contact validé'),
(12, 'fgh', 'fgghfgh@dfggf.gt', 564, 'sdgdfg', 'RGPD du formulaire de contact validé'),
(14, 'test22', 'test22@test22.fr', 5645, 'test22', 'RGPD du formulaire de contact validé');

-- --------------------------------------------------------

--
-- Structure de la table `guestbooks`
--

CREATE TABLE `guestbooks` (
  `id` int(10) UNSIGNED NOT NULL,
  `comments` text NOT NULL,
  `datecreatcomments` datetime NOT NULL DEFAULT current_timestamp(),
  `idguestbooksusers` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `guestbooks`
--

INSERT INTO `guestbooks` (`id`, `comments`, `datecreatcomments`, `idguestbooksusers`) VALUES
(28, '22Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum dolores minus sint tempora laboriosam iure at modi sequi earum placeat, magni mollitia tenetur ullam rem porro reiciendis repellendus inventore quod.', '2021-03-16 14:11:23', 27),
(30, '22Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum dolores minus sint tempora laboriosam iure at modi sequi earum placeat, magni mollitia tenetur ullam rem porro reiciendis repellendus inventore quod.', '2021-03-23 09:50:16', 37),
(36, 'gffdgsdgfdgfdgfgdddddd', '2021-03-30 17:36:49', 40),
(37, 'dfsdfdsf', '2021-03-31 11:04:33', 51),
(41, 'sqdsqdsqd22', '2021-04-01 15:26:12', 58);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `roleusers` varchar(255) NOT NULL,
  `dateinscription` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `lastname`, `firstname`, `email`, `pass`, `roleusers`, `dateinscription`) VALUES
(24, 'a', 'a', 'a', 'a@d.fr', 'a', 'admin', '2021-03-12 08:40:52'),
(25, 'gfh', 'fh', 'gfh', 'test2@test2.fr', '$2y$10$Xu.qR2z5r6DmjlMLMOi0GemBeVEXbVH7S3j5xgp8xFIbXgBpfYM6a', 'admin', '2021-03-12 08:51:05'),
(26, 'test2', 'test', 'test', 'test4@test.fr', '$2y$10$3xd67Qa3E9bNAE37e58Q3OWEnw.OJHNMp3/bJx2Ko2/1vsnfyjl5m', '', '2021-03-12 08:51:26'),
(27, 'pass', 'pass', 'pass', 'pass@pass.fr', '$2y$10$c7tco9Xug9OKKwuTQypWbei/pi1IW4KLVMk4zBOmryizXsoi8wHCC', 'user', '2021-03-12 08:52:42'),
(29, 'vbn', 'sdf', 'sds', 'testt@testt.fr', '$2y$10$ejVec.dGdf4Ve7rmm/4KneD2GV5Dp1AsnHaMEHGVH0DJsn5PadGrO', 'user', '2021-03-12 08:57:10'),
(32, 'tyy', 'ytryy33', 'yttr', 'test@dssq.frsd', '$2y$10$dpiEbEo6qLCtVHTcn7AfbeGEaTZ4XHfcOiwDSJZ2EcHHcBjeLaSXK', '', '2021-03-12 09:58:34'),
(37, 'netdev56e@gmail.com', 'netdev56e@gmail.com', 'netdev56e@gmail.com', 'netdev56e@gmail.com', '$2y$10$Oi0sGEaIESSwV/8vloK53ucgZFbmiMBfL47Q/lbO9MAYmCAqscKJ6', 'admin', '2021-03-22 17:48:57'),
(40, 'Manu222ss', 'Manu22', 'Manu22ss', 'netdev56@gmail.com', '$2y$10$YyNveX2yyCPNgyJBqZ85jeCkZP5e2m2fOD.BYVe1Vx1ItWPUsIGkW', 'admin', '2021-03-28 18:18:58'),
(41, 'test@test.fr12', 'test@test.fr', 'test@test.fr', 'test@test.fr', '$2y$10$CMAVXN3k5OMqhQnpcBugq.ghXUP6jrrlDPuoiTAO2EeQUvmpJZ2Jm', '', '2021-03-29 16:51:08'),
(42, 'testt21', 'testt2', 'testt2', 'testt2@testt2.fr', '$2y$10$PhTTNyZqlsURn7KEqAg9HOQJ8lC0CJkyELmFp4DkprfNnsZ7Z.WJi', '', '2021-03-29 17:00:23'),
(43, 'fgsd', 'sfdgfdg', 'sdgfg', 'fdggf@dsfsqd.fr', '$2y$10$QjMr/b5sJLLbXg07QIJfPOIHDKSeW5fceh84UEij7jtuRi6w95l/q', 'admin', '2021-03-29 17:48:21'),
(47, 'tttt2', 'tttt', 'tttt', 'tttt@sqdsq.fr', '$2y$10$K1HuYNAgjhZJgQJf0Ndvf.uRjv3/xsPpo2Kz2FnSRf5tumOYJdNXK', '', '2021-03-29 17:53:14'),
(48, 'tete1', 'tete', 'tete', 'tete@rr.fr', '$2y$10$vy/Di67CzjmZhOxo91TLo.cspyLXm7c1ErJZClxrNkbPlvgu/BVXi', '', '2021-03-29 17:56:09'),
(49, 'fgdfdg', 'fgdfg', 'dfgfdg', 'fdgfdg@fgdf.fdfs', '$2y$10$pac4MszM/eb0eC2/nwDwHu12CrkRZ/REz7Cq/p3u5G3nG6axikN.6', 'user', '2021-03-31 09:22:42'),
(50, 'testt223', 'testt22', 'testt22', 'testt22@testt22.fr', '$2y$10$mz7GwPz.iejr2cNhYIi92.Qxc4XsBD2XlZaVDIqhN7fjjFzWaf6JC', '', '2021-03-31 09:28:25'),
(51, 'rettr22', 'ertr', 'erttr', 'testggg@test.fr', '$2y$10$My.1EqTRnOoVIzkpCsqpLu/vp47sxMgf6YKyMXj/GA7dWL6mmw266', 'user', '2021-03-31 11:04:04'),
(52, 'test245', 'test24', 'test24', 'test24@test24.fr', '$2y$10$8dKBNb8CQTMBs7Aua2aOAusF2C2gKlB/7H9vkEMDVn3UJx6OzmjN.', '', '2021-03-31 11:12:23'),
(54, 'sqsqd', 'sqsqd', 'sqsqd', 'sqsqd@sqsqd.fr', '$2y$10$JuPdanPhB4/4GoyvEF5RI.xyS/cpiS.7wgHtup/6RIV2psMCaTklu', 'user', '2021-04-01 10:06:44'),
(58, 'zazazeee', 'zazaz', 'zazazeeee', 'zazaz@zazaz.fr', '$2y$10$zk47gWIrCaAXV9VFu/wtjeH0UZyBjcTcEj69df25I423EaHX21Sfq', 'user', '2021-04-01 15:26:04'),
(60, 'ttest2', 'ttest2', 'ttest2', 'ttest2@ttest.fr', '$2y$10$ri0vR6r6c1bWc0WRBBqDIea0eKGqsSlilILCNC415d22XpWjXrODG', 'admin', '2021-04-04 11:17:20'),
(62, 'ttest2', 'ttest2', 'ttest2', 'ttest2@ttest.fr', '$2y$10$VXUemkNC0SVgxga.PRmjIe13DdtVD5cMGiRbw4BOY.KhUviMywHUW', 'admin', '2021-04-04 11:20:12'),
(63, 'fsdfdf', 'sdfdsf', 'sdfdsf', 'qfdsf@dsfqf.fr', '$2y$10$mjBctTT8J3VhsYqRs1HVyepBgeyxTEEm7GLZB81X/I74Ob0y2nVmC', 'admin', '2021-04-04 11:41:36'),
(64, 'sqdqsds', 'sqdsqd', 'sdsqd', 'sqdsd@sqdds.frs', '$2y$10$by33vBhob/L7wHb87qA1peoIbXfM5l2dlT9YOxDRm206/3yzpvpYe', 'user', '2021-04-04 11:41:50');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_articles_users` (`idarticlesusers`);

--
-- Index pour la table `contactform`
--
ALTER TABLE `contactform`
  ADD PRIMARY KEY (`id_contactform`);

--
-- Index pour la table `guestbooks`
--
ALTER TABLE `guestbooks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK__users` (`idguestbooksusers`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `contactform`
--
ALTER TABLE `contactform`
  MODIFY `id_contactform` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `guestbooks`
--
ALTER TABLE `guestbooks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `FK_articles_users` FOREIGN KEY (`idarticlesusers`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `guestbooks`
--
ALTER TABLE `guestbooks`
  ADD CONSTRAINT `FK__users` FOREIGN KEY (`idguestbooksusers`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
