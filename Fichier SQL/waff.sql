-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 17 Mars 2017 à 14:30
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `waff`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `NumClient` int(11) NOT NULL,
  `NomClient` varchar(255) NOT NULL,
  `PrenomClient` varchar(255) NOT NULL,
  `AdresseClient` varchar(255) NOT NULL,
  `Cp` varchar(255) NOT NULL,
  `VilleClient` varchar(255) NOT NULL,
  `PaysClient` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`NumClient`, `NomClient`, `PrenomClient`, `AdresseClient`, `Cp`, `VilleClient`, `PaysClient`) VALUES
(1, 'DEBABECHE', 'Benjamin', '7 chemin fried', '67000', 'Strasbourg', 'France'),
(2, 'Carrafe', 'Boubakar', '3 rue de la Boutade', '69888', 'FONSDALLE', 'Jamaique'),
(3, 'Jeje', 'Lolo', '5 rue de la ganache', '85420', 'Bouboule', 'Chine'),
(5, 'batista', 'david', '8 rue de la wwe', '99999', 'soufel', 'france');

-- --------------------------------------------------------

--
-- Structure de la table `d_facture`
--

CREATE TABLE `d_facture` (
  `Qte` int(11) NOT NULL,
  `NumFacture` int(11) NOT NULL,
  `NumProduit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE `facture` (
  `NumFacture` int(11) NOT NULL,
  `DateFacture` date NOT NULL,
  `NumClient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `facture`
--

INSERT INTO `facture` (`NumFacture`, `DateFacture`, `NumClient`) VALUES
(1, '2017-01-05', 2),
(3, '2017-01-05', 3),
(4, '2017-01-05', 2),
(6, '2017-03-17', 2),
(9, '2017-03-17', 3),
(10, '2017-03-17', 2);

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `NumProduit` int(11) NOT NULL,
  `Des` varchar(255) NOT NULL,
  `PUHT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `produits`
--

INSERT INTO `produits` (`NumProduit`, `Des`, `PUHT`) VALUES
(1, 'Ecran 4K', 400),
(2, 'Clavier', 80),
(6, 'zelda botw', 500),
(7, 'guitare', 95);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `userID` varchar(40) NOT NULL,
  `userMDP` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `userID`, `userMDP`) VALUES
(1, 'Echoes', '$2y$10$hqtn1YzyAwtbr/BAibnApOerVUkoNWb0vVBQvgn82DEdCiOLWhLci'),
(2, 'lol', '$2y$10$jzZs8U18yU6p.0JEz/4hj.eNVj7Mjj8PGA1oLRfOvwiUPfee0rGry'),
(4, 'benjy', '$2y$10$TvzbUHSYANRYCvtewwSgrOF9IZg3AO57JfRpiVcnYuLJrtxDvgn5G'),
(5, 'Ben', '$2y$10$h7DGlG1WJ6ULnr1ZLSTSSOB2VlMElEIsvoytEnhRUzgr2E.GEJeum');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`NumClient`);

--
-- Index pour la table `d_facture`
--
ALTER TABLE `d_facture`
  ADD PRIMARY KEY (`NumFacture`,`NumProduit`),
  ADD KEY `NumFacture` (`NumFacture`),
  ADD KEY `NumProduit` (`NumProduit`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`NumFacture`),
  ADD KEY `NumClient` (`NumClient`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`NumProduit`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `NumClient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `facture`
--
ALTER TABLE `facture`
  MODIFY `NumFacture` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `NumProduit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `d_facture`
--
ALTER TABLE `d_facture`
  ADD CONSTRAINT `d_facture_ibfk_1` FOREIGN KEY (`NumFacture`) REFERENCES `facture` (`NumFacture`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `d_facture_ibfk_2` FOREIGN KEY (`NumProduit`) REFERENCES `produits` (`NumProduit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `facture`
--
ALTER TABLE `facture`
  ADD CONSTRAINT `facture_ibfk_1` FOREIGN KEY (`NumClient`) REFERENCES `client` (`NumClient`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
