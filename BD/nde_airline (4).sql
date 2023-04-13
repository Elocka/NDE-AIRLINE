-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 13 avr. 2023 à 16:05
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `nde_airline`
--

-- --------------------------------------------------------

--
-- Structure de la table `agence`
--

CREATE TABLE `agence` (
  `id_agence` int(11) NOT NULL,
  `intitule` varchar(100) NOT NULL,
  `localisation` varchar(100) NOT NULL,
  `ittineraire` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `agence`
--

INSERT INTO `agence` (`id_agence`, `intitule`, `localisation`, `ittineraire`) VALUES
(1, 'nde_airline dakar', 'dakar juste apres le marche', ''),
(2, 'nde_airline yaounde ngousso', 'ngousso juste apres le petit marche', ''),
(3, 'nde_airline edea', 'edea a cote de la gare', '');

-- --------------------------------------------------------

--
-- Structure de la table `bus`
--

CREATE TABLE `bus` (
  `id_bus` int(11) NOT NULL,
  `intitules_bus` varchar(100) NOT NULL,
  `caracteristique_bus` varchar(150) NOT NULL,
  `num_immatriculation` varchar(50) NOT NULL,
  `statut` enum('0','1') NOT NULL DEFAULT '1',
  `create_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `bus`
--

INSERT INTO `bus` (`id_bus`, `intitules_bus`, `caracteristique_bus`, `num_immatriculation`, `statut`, `create_at`) VALUES
(1, 'queen audrey', 'range rover noir', '002233445566', '1', '0000-00-00'),
(2, 'kkc', 'yaris bleue', '0088776655', '1', '0000-00-00');

-- --------------------------------------------------------

--
-- Structure de la table `colis`
--

CREATE TABLE `colis` (
  `id_colis` int(11) NOT NULL,
  `refference` varchar(50) NOT NULL,
  `caracteristique_colis` varchar(250) NOT NULL,
  `type_colis` varchar(100) NOT NULL,
  `statut_colis` enum('1','2','3') NOT NULL DEFAULT '2',
  `date_creation` date NOT NULL,
  `id_agence` int(11) NOT NULL,
  `nom_expediteur` text NOT NULL,
  `mail_expediteur` varchar(150) NOT NULL,
  `num_expediteur` int(20) NOT NULL,
  `num_cni_expediteur` int(30) NOT NULL,
  `nom_recepteur` text NOT NULL,
  `mail_recepteur` text NOT NULL,
  `num_cni_recepteur` int(20) NOT NULL,
  `id_transfert` int(11) NOT NULL,
  `prenom_recepteur` text NOT NULL,
  `prenom_expediteur` text NOT NULL,
  `num_recepteur` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `colis`
--

INSERT INTO `colis` (`id_colis`, `refference`, `caracteristique_colis`, `type_colis`, `statut_colis`, `date_creation`, `id_agence`, `nom_expediteur`, `mail_expediteur`, `num_expediteur`, `num_cni_expediteur`, `nom_recepteur`, `mail_recepteur`, `num_cni_recepteur`, `id_transfert`, `prenom_recepteur`, `prenom_expediteur`, `num_recepteur`, `id_user`) VALUES
(4, 'voiture0088776655440099887766', 'range rover noirs', 'voiture', '2', '2023-04-12', 1, '06 77 76 91 19', 'gainsom@gmail.com', 688997766, 99887766, 'heradie', 'gainsom@gmail.com', 2147483647, 1, 'Gainsom', 'audrey', 688997766, 0),
(5, 'VELO-008877665544-0099887766', 'velo noir blanc avec palette', 'velo', '2', '2023-04-12', 2, '0675315050', 'tamomoise@gmail.com', 688997766, 99887766, 'Tamo', 'tamomoise@gmail.com', 2147483647, 1, 'Gainsom', 'audrey', 675315050, 0);

-- --------------------------------------------------------

--
-- Structure de la table `transfert`
--

CREATE TABLE `transfert` (
  `id_transfert` int(11) NOT NULL,
  `date_envoie` date NOT NULL,
  `heure_envoie` time NOT NULL,
  `heure_arrivee` time NOT NULL,
  `description` varchar(250) NOT NULL,
  `id_bus` int(11) NOT NULL,
  `id_agence_recoit` int(11) NOT NULL,
  `date_reception` date NOT NULL,
  `reference` text NOT NULL,
  `etat` enum('0','1') NOT NULL DEFAULT '0',
  `id_user` int(11) NOT NULL,
  `create_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `transfert`
--

INSERT INTO `transfert` (`id_transfert`, `date_envoie`, `heure_envoie`, `heure_arrivee`, `description`, `id_bus`, `id_agence_recoit`, `date_reception`, `reference`, `etat`, `id_user`, `create_at`) VALUES
(1, '2023-04-12', '12:30:00', '22:30:00', 'transfert de l\'agence de douala a celui de yaounde', 1, 1, '2023-04-12', 'NDE_AIRLINE YAOUNDE NGOUSSO-2023-04-12-12:30-1-2023-04-12-22:30', '0', 6, '2023-04-12'),
(2, '2023-04-13', '18:00:00', '22:30:00', 'transfert de colis de l\'agence de Dakar a celle de Yaoundé', 2, 1, '2023-04-13', 'NDE_AIRLINE YAOUNDE NGOUSSO-2023-04-13-18:00-1-2023-04-13-22:30', '0', 4, '2023-04-13');

-- --------------------------------------------------------

--
-- Structure de la table `type_user`
--

CREATE TABLE `type_user` (
  `id_type_user` int(11) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `type_user`
--

INSERT INTO `type_user` (`id_type_user`, `type`) VALUES
(1, 'employe'),
(2, 'chef agence'),
(3, 'directeur');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `id_type_user` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `adresse` varchar(150) NOT NULL,
  `num_telephone` int(11) NOT NULL,
  `id_agence` int(11) NOT NULL,
  `situation_matrimoniale` enum('marie','celibataire') NOT NULL DEFAULT 'celibataire',
  `sexe` enum('feminin','masculin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `nom`, `prenom`, `password`, `id_type_user`, `email`, `photo`, `adresse`, `num_telephone`, `id_agence`, `situation_matrimoniale`, `sexe`) VALUES
(4, 'Audrey', 'Guiakam', '7c222fb2927d828af22f592134e8932480637c0d', 2, 'guiakamaudrey8@gmail.com', 'contact-5.jpg', 'ndogbong', 655028052, 2, 'marie', 'feminin'),
(5, 'Audrey Loveline', 'Guiakam', '7c222fb2927d828af22f592134e8932480637c0d', 3, 'guiakamaudrey3@gmail.com', 'contact-3.jpg', 'ndogbong', 655028052, 1, 'celibataire', 'feminin'),
(6, 'tamo', 'marielle', '7c222fb2927d828af22f592134e8932480637c0d', 1, 'user@gmail.com', '', 'ndogbong', 655028052, 2, 'celibataire', 'feminin'),
(7, 'Cabrel', 'Elocka', '7c222fb2927d828af22f592134e8932480637c0d', 1, 'elockacabrel@gmail.com', 'contact-3.jpg', 'ndogbong', 655028052, 2, 'celibataire', 'feminin'),
(8, 'Tamo', 'Moise', '7c222fb2927d828af22f592134e8932480637c0d', 1, 'tamomoise@gmail.com', 'contact-3.jpg', 'village borne10', 675315050, 2, 'celibataire', 'feminin'),
(9, 'heradie', 'Gainsom', '7c222fb2927d828af22f592134e8932480637c0d', 1, 'gainsom@gmail.com', 'profile.jpg', 'village borne10', 677769119, 2, 'celibataire', 'feminin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `agence`
--
ALTER TABLE `agence`
  ADD PRIMARY KEY (`id_agence`);

--
-- Index pour la table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id_bus`);

--
-- Index pour la table `colis`
--
ALTER TABLE `colis`
  ADD PRIMARY KEY (`id_colis`),
  ADD KEY `id_agence` (`id_agence`),
  ADD KEY `id_transfert` (`id_transfert`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `transfert`
--
ALTER TABLE `transfert`
  ADD PRIMARY KEY (`id_transfert`),
  ADD KEY `id_agence_recoit` (`id_agence_recoit`),
  ADD KEY `id_bus` (`id_bus`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `type_user`
--
ALTER TABLE `type_user`
  ADD PRIMARY KEY (`id_type_user`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_type_user` (`id_type_user`),
  ADD KEY `id_agence` (`id_agence`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `agence`
--
ALTER TABLE `agence`
  MODIFY `id_agence` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `bus`
--
ALTER TABLE `bus`
  MODIFY `id_bus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `colis`
--
ALTER TABLE `colis`
  MODIFY `id_colis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `transfert`
--
ALTER TABLE `transfert`
  MODIFY `id_transfert` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `type_user`
--
ALTER TABLE `type_user`
  MODIFY `id_type_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `colis`
--
ALTER TABLE `colis`
  ADD CONSTRAINT `colis_ibfk_1` FOREIGN KEY (`id_agence`) REFERENCES `agence` (`id_agence`) ON UPDATE CASCADE,
  ADD CONSTRAINT `colis_ibfk_4` FOREIGN KEY (`id_transfert`) REFERENCES `transfert` (`id_transfert`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `transfert`
--
ALTER TABLE `transfert`
  ADD CONSTRAINT `transfert_ibfk_1` FOREIGN KEY (`id_agence_recoit`) REFERENCES `agence` (`id_agence`) ON UPDATE CASCADE,
  ADD CONSTRAINT `transfert_ibfk_2` FOREIGN KEY (`id_bus`) REFERENCES `bus` (`id_bus`) ON UPDATE CASCADE,
  ADD CONSTRAINT `transfert_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_type_user`) REFERENCES `type_user` (`id_type_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`id_agence`) REFERENCES `agence` (`id_agence`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
