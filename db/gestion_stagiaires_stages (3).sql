-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 15 août 2022 à 22:19
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_stagiaires_stages`
--

-- --------------------------------------------------------

--
-- Structure de la table `affecter`
--

CREATE TABLE `affecter` (
  `id_affecter` int(11) NOT NULL,
  `encadrantsId` int(11) NOT NULL,
  `cin_affecter` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `projets_sta` int(11) NOT NULL,
  `date_debut_affe` date NOT NULL,
  `date_fin_affe` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `affecter_binome`
--

CREATE TABLE `affecter_binome` (
  `id_binome` int(11) NOT NULL,
  `encadrantsId` int(11) NOT NULL,
  `departement_affe` varchar(100) NOT NULL,
  `premier_stagiaires` int(11) NOT NULL,
  `deuxiem_stagiaire` int(11) NOT NULL,
  `date_debut_bino` date NOT NULL,
  `date_fin_bino` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `affecter_binome`
--

INSERT INTO `affecter_binome` (`id_binome`, `encadrantsId`, `departement_affe`, `premier_stagiaires`, `deuxiem_stagiaire`, `date_debut_bino`, `date_fin_bino`) VALUES
(28, 2, '2', 7, 7, '2022-08-19', '2022-08-28');

-- --------------------------------------------------------

--
-- Structure de la table `encdrants`
--

CREATE TABLE `encdrants` (
  `id_enca` int(11) NOT NULL,
  `nom_encadrant` varchar(100) NOT NULL,
  `prenom_encadrant` varchar(100) NOT NULL,
  `cin` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `departement` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `encdrants`
--

INSERT INTO `encdrants` (`id_enca`, `nom_encadrant`, `prenom_encadrant`, `cin`, `email`, `departement`, `phone`) VALUES
(2, 'safhi ', 'Mouad hicham', 'CD485866', 'safhi.mouad@gmail.com', 'Departement Informatique', '064333356'),
(11, 'SEQQAT', 'Khawla', 'CD456677', 'kenza@gmail.com', 'Departement Informatique', '064333356');

-- --------------------------------------------------------

--
-- Structure de la table `stages`
--

CREATE TABLE `stages` (
  `id_sta` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `cin` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `ville` varchar(100) NOT NULL,
  `filliere` varchar(200) NOT NULL,
  `cv` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `stages`
--

INSERT INTO `stages` (`id_sta`, `nom`, `prenom`, `cin`, `email`, `phone`, `date`, `ville`, `filliere`, `cv`) VALUES
(7, 'SEQQAT', 'Khawla', 'CD456677', 'kenza@gmail.com', '064333356', '2022-08-22', 'FES', 'developpement web et mobile', ''),
(8, 'ESSADKIA', 'WIAME', 'CD456677', 'wiameessadkia@gmail.com', '0643333561', '1999-02-01', 'Nador', 'Reseaux & telecoms', ''),
(13, 'Serraj', 'Laila', 'CD26711', 'laila.serraj@yahoo.com', '0618191456', '1998-01-01', 'Fes', 'Management', ''),
(14, 'Lahlou', 'meriem', 'CD485866', 'meriem@gmail.com', '0643333561', '1999-01-01', 'FES', 'développement web et mobile', ''),
(15, 'El aissaoui', 'Nouhaila', 'CD456677', 'nouahaila@alten.com', '0667119123', '1999-01-01', 'FES', 'développement web et mobile', ''),
(16, 'Rahmani', 'AYAMAN', 'CD123456', 'ayman.rahmani@gmail.com', '0612118911', '1999-01-01', 'MIssour', 'développement web et mobile', '');

-- --------------------------------------------------------

--
-- Structure de la table `taches`
--

CREATE TABLE `taches` (
  `id_taches` int(11) NOT NULL,
  `id_encadrant` int(11) NOT NULL,
  `id_stagiaires` int(11) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `projets` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `taches`
--

INSERT INTO `taches` (`id_taches`, `id_encadrant`, `id_stagiaires`, `designation`, `date_debut`, `date_fin`, `projets`, `qualification`) VALUES
(19, 2, 7, 'Conecption et UML', '2022-08-12', '2022-08-07', 'sujet:Application d une site web-alten', 'professionelle');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `username`, `password`, `role`) VALUES
(1, 'Lahlou Meriem', 'meriem', 'Stagiaire'),
(3, 'seqqat khawla', '202cb962ac59075b964b07152d234b70', 'Stagiaire'),
(4, 'zakariyae chergui', 'zakariyae', 'Stagiaire');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `affecter`
--
ALTER TABLE `affecter`
  ADD PRIMARY KEY (`id_affecter`),
  ADD KEY `encadrantsId` (`encadrantsId`),
  ADD KEY `affecter_ibfk_2` (`projets_sta`);

--
-- Index pour la table `affecter_binome`
--
ALTER TABLE `affecter_binome`
  ADD PRIMARY KEY (`id_binome`),
  ADD KEY `encadrantsId` (`encadrantsId`),
  ADD KEY `premier_stagiaire_fk` (`premier_stagiaires`),
  ADD KEY `deuxieme_stagiaire_fk` (`deuxiem_stagiaire`);

--
-- Index pour la table `encdrants`
--
ALTER TABLE `encdrants`
  ADD PRIMARY KEY (`id_enca`);

--
-- Index pour la table `stages`
--
ALTER TABLE `stages`
  ADD PRIMARY KEY (`id_sta`);

--
-- Index pour la table `taches`
--
ALTER TABLE `taches`
  ADD PRIMARY KEY (`id_taches`),
  ADD KEY `taches_ibfk_1` (`id_stagiaires`),
  ADD KEY `id_encadrant` (`id_encadrant`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `affecter`
--
ALTER TABLE `affecter`
  MODIFY `id_affecter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `affecter_binome`
--
ALTER TABLE `affecter_binome`
  MODIFY `id_binome` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `encdrants`
--
ALTER TABLE `encdrants`
  MODIFY `id_enca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `stages`
--
ALTER TABLE `stages`
  MODIFY `id_sta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `taches`
--
ALTER TABLE `taches`
  MODIFY `id_taches` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=326;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `affecter`
--
ALTER TABLE `affecter`
  ADD CONSTRAINT `affecter_ibfk_1` FOREIGN KEY (`encadrantsId`) REFERENCES `encdrants` (`id_enca`),
  ADD CONSTRAINT `affecter_ibfk_2` FOREIGN KEY (`projets_sta`) REFERENCES `taches` (`id_taches`);

--
-- Contraintes pour la table `affecter_binome`
--
ALTER TABLE `affecter_binome`
  ADD CONSTRAINT `affecter_binome_ibfk_4` FOREIGN KEY (`encadrantsId`) REFERENCES `encdrants` (`id_enca`),
  ADD CONSTRAINT `deuxieme_stagiaire_fk` FOREIGN KEY (`deuxiem_stagiaire`) REFERENCES `stages` (`id_sta`),
  ADD CONSTRAINT `premier_stagiaire_fk` FOREIGN KEY (`premier_stagiaires`) REFERENCES `stages` (`id_sta`);

--
-- Contraintes pour la table `taches`
--
ALTER TABLE `taches`
  ADD CONSTRAINT `taches_ibfk_1` FOREIGN KEY (`id_stagiaires`) REFERENCES `stages` (`id_sta`),
  ADD CONSTRAINT `taches_ibfk_2` FOREIGN KEY (`id_encadrant`) REFERENCES `encdrants` (`id_enca`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
