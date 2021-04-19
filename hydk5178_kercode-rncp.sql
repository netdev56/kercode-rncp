-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 19 avr. 2021 à 14:44
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
(25, 'AURAY // SAINT-GOUSTAN', 'Cette cité d’art et d’histoire nichée en contre-bas de la ville d’Auray a su garder son âme historique. \r\n\r\nIl est agréable de s’y balader dans les ruelles pavées avec ses maisons bretonnes avant de terminer la promenade dans l’un des bars et/ou restaurants du bar.', 'Cité d’art et d’histoire nichée en contre-bas de la ville d’Auray ', 'Saint-Goustan à Auray', 'app/public/front/images/articles/saint-goustan-auray.webp', 40),
(26, 'ROCHEFORT EN TERRE', 'Élu village préféré des français en 2016, cette commune a charmé les français avec ses bâtis en pierre regroupant différents styles architecturaux. \r\n\r\nSi vous avez l’occasion d’y venir pour Noël, le village est entièrement illuminé.', 'Élu village préféré des français en 2016', 'Rochefort en terre', 'app/public/front/images/articles/rochefort-en-terre.webp', 40),
(27, 'ÎLE AUX MOINES', 'Seules 5 minutes de bateau relie cette île au continent.\r\nL’île, toute en longueur, est l’une des deux îles principales du Golfe du Morbihan.\r\n\r\nÀ pied ou à vélo, les nombreux chemins mènent tous à un site exceptionnel.', 'À pied ou à vélo, les nombreux chemins mènent tous à un site exceptionnel', 'Ile aux moines', 'app/public/front/images/articles/ile-aux-moines.webp', 40),
(28, 'LA TRINITÉ SUR MER', 'Cette commune accueille plusieurs chantiers navals, un port de pêche et un port de plaisance. \r\n\r\nLa ville est connue et appréciée des skippers qui ont fait de la Trinité leur port d’attache. \r\nDe ce fait, plusieurs compétitions nautiques s’y déroulent durant l’année.', 'La ville est connue et appréciée des skippers qui ont fait de la Trinité leur port d’attache', 'La Trinité sur Mer', 'app/public/front/images/articles/trinite-sur-mer.webp', 40),
(30, 'ERDEVEN', 'Erdeven, c\'est avant tout des kilomètres de plage appréciées en toute saison au coeur d’un cordon de dunes sauvages préservé. Faites une balade sur chacune de ces plages pour découvrir celle qui correspond le mieux à vos aspirations de détente, de sports nautiques et de jeux en famille dans le Morbihan !\r\n\r\nA pied, de nombreux circuits de randonnée vous invitent à découvrir les villages et sites mégalithiques. A vélo, empruntez la voie verte pour vous rendre à Quiberon ou Étel.', 'A pied, de nombreux circuits de randonnée vous invitent à découvrir les villages et sites ', 'Erdeven', 'app/public/front/images/articles/erdeven.webp', 40),
(31, 'SAINT-CADO', 'Golfe marin alimenté par plusieurs cours d’eau, la ria d’Etel forme avec le pittoresque îlot Saint-Cado un des plus beaux sites de la région. \r\n\r\nEntre Lorient et Vannes, parcs ostréicoles, presqu’îles et marais offrent, dans cette mer intérieure de 22 km2 une carte postale d’une beauté insolite.', 'Saint-Cado est l\'un des plus beaux sites de la région', 'SAINT-CADO', 'app/public/front/images/articles/saint-cado.webp', 40),
(32, 'LARMOR-PLAGE', 'Larmor-Plage est aujourd’hui une station balnéaire, classée station de tourisme. Elle est située à 5 mn de Lorient, face à l’Île de Groix, à l’entrée sud de la rade de Lorient. Son littoral est riche et varié, alternant côte rocheuse, plages de sable fin, cordon dunaire avec ses marais, sa zone urbaine côtière avec ses villas anciennes et contemporaines, et son centre-ville.\r\n\r\nElle est adoptée par les touristes et les promeneurs locaux pour ses plages, son port de plaisance, son casino, ses restaurants (au bourg, sur le port, le long de la promenade de Port Maria, à Kernével), son marché traditionnel dominical sur la place de l’église et ses lieux de promenades avec vue sur l’île de Groix et la rade de Lorient.', 'Larmor-Plage est aujourd’hui une station balnéaire, classée station de tourisme.', 'Larmor-Plage', 'app/public/front/images/articles/larmor-plage.webp', 40),
(33, 'MALESTROIT', 'A la croisée du canal de Nantes à Brest et de la voie verte n°3, découvrez celle que l’on surnomme « La Perle de l’Oust » : Malestroit, la chaleureuse et l’authentique Petite cité de caractère. Son centre médiéval et sa cité millénaire offrent de nombreux trésors à ceux qui ouvrent leurs yeux.', 'Malestroit, chaleureuse et authentique Petite cité de caractère', 'Malestroit', 'app/public/front/images/articles/malestroit.webp', 40);

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
(15, 'Utilisateur1', 'utilisateur1@test.fr', 600000000, 'Bonjour,\r\nJe souhaiterais plus d\'informations sur la location.\r\nCordialement,\r\nUtilisateur1', 'RGPD du formulaire de contact validé'),
(17, 'Utilisateur2', 'utilisateur2@test.fr', 600000000, 'Bonjour, Avez-vous une connexion internet ? Cordialement, Utilisateur2', 'RGPD du formulaire de contact validé');

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
(46, 'Très beau gîte idéalement situé, au calme. Très bien équipé et très confortable. À recommander...', '2021-04-05 11:52:01', 65),
(47, 'Logement très soigné, équipements modernes de qualité, propreté impeccable, très bien situé! Accueil flexible et chaleureux. Nous avons passé un superbe séjour. Je le recommande sans réserve cet hébergement. Merci pour cet agréable séjour !', '2021-04-05 12:04:04', 69);

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
(40, 'Manuel', 'Manuel', 'Manuel', 'netdev56@gmail.com', '$2y$10$JSGqUV3YCBgbvlM6PMcFxurC1UzJTqWp.Q.SjgzKMLMidj/eNyLcO', 'admin', '2021-03-28 18:18:58'),
(65, 'Utilisateur1', 'Utilisateur1', 'Utilisateur1', 'utilisateur1@test.fr', '$2y$10$7YcXuSKnBLWKsvTnHE/tnOIxGnlTjj59trFrVkTXVuynk3KISgAmS', 'user', '2021-04-05 11:50:18'),
(66, 'Administrateur1', 'Administrateur1', 'Administrateur1', 'administrateur1@test.fr', '$2y$10$CNxY4WX0SxUhojn3A6ipne0kak7axe85ir93WpJ./u/rVz2QuZo/2', 'admin', '2021-04-05 11:55:51'),
(67, 'Administrateur2', 'Administrateur2', 'Administrateur2', 'administrateur2@test.fr', '$2y$10$DKhdOxo4oFhki4l.SC//EuXAQw3JkoT/qbwuJ9tkFNRK7Um/gaC4C', 'admin', '2021-04-05 11:57:29'),
(68, 'RNCP-ADMIN2', 'RNCP-ADMIN', 'RNCP-ADMIN', 'compterncp@administrateur.fr', '$2y$10$PctgjJ8SXseVAE8TFnQaH.9XNbEqKAq.R5wWyK0KqF41JvdKWLc9K', 'admin', '2021-04-05 11:58:08'),
(69, 'Utilisateur2', 'Utilisateur2', 'Utilisateur2', 'utilisateur2@test.fr', '$2y$10$Hch6.Sgr.CENj0aCU9B96e/qEeRKhCDmPs/Pi7oFFoDO5xciAt8we', 'user', '2021-04-05 11:59:07'),
(70, 'RNCP-USER', 'RNCP-USER', 'RNCP-USER', 'compterncp@utilisateur.fr', '$2y$10$LMqK7RDrnLtX0aYusnhLHOWS8ShVHiRLD9baVX2coaDOCPBZPtM/u', 'user', '2021-04-05 11:59:38');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `contactform`
--
ALTER TABLE `contactform`
  MODIFY `id_contactform` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `guestbooks`
--
ALTER TABLE `guestbooks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

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
