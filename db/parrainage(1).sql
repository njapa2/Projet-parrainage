-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 27 nov. 2023 à 05:25
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `parrainage`
--

-- --------------------------------------------------------

--
-- Structure de la table `filleul`
--

CREATE TABLE `filleul` (
  `id` int(11) NOT NULL,
  `matricule` varchar(100) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `numero_parrain` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `numero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `filleul_automeca`
--

CREATE TABLE `filleul_automeca` (
  `id` int(11) NOT NULL,
  `matricule` varchar(100) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `numero_parrain` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `numero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `filleul_chimie`
--

CREATE TABLE `filleul_chimie` (
  `id` int(11) NOT NULL,
  `matricule` varchar(100) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `numero_parrain` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `numero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `filleul_civil`
--

CREATE TABLE `filleul_civil` (
  `id` int(11) NOT NULL,
  `matricule` varchar(100) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `numero_parrain` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `numero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `filleul_eeat`
--

CREATE TABLE `filleul_eeat` (
  `id` int(11) NOT NULL,
  `matricule` varchar(100) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `numero_parrain` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `numero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `filleul_energetique`
--

CREATE TABLE `filleul_energetique` (
  `id` int(11) NOT NULL,
  `matricule` varchar(100) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `numero_parrain` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `numero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `filleul_energie`
--

CREATE TABLE `filleul_energie` (
  `id` int(11) NOT NULL,
  `matricule` varchar(100) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `numero_parrain` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `numero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `filleul_geophy`
--

CREATE TABLE `filleul_geophy` (
  `id` int(11) NOT NULL,
  `matricule` varchar(100) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `numero_parrain` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `numero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `filleul_gesi`
--

CREATE TABLE `filleul_gesi` (
  `id` int(11) NOT NULL,
  `matricule` varchar(100) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `numero_parrain` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `numero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `filleul_git`
--

CREATE TABLE `filleul_git` (
  `id` int(11) NOT NULL,
  `matricule` varchar(100) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `numero_parrain` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `numero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `filleul_ing_1`
--

CREATE TABLE `filleul_ing_1` (
  `id` int(11) NOT NULL,
  `matricule` varchar(100) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `numero_parrain` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `numero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `filleul_marine`
--

CREATE TABLE `filleul_marine` (
  `id` int(11) NOT NULL,
  `matricule` varchar(100) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `numero_parrain` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `numero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `filleul_mecanique`
--

CREATE TABLE `filleul_mecanique` (
  `id` int(11) NOT NULL,
  `matricule` varchar(100) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `numero_parrain` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `numero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `filleul_mm`
--

CREATE TABLE `filleul_mm` (
  `id` int(11) NOT NULL,
  `matricule` varchar(100) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `numero_parrain` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `numero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `filleul_physique`
--

CREATE TABLE `filleul_physique` (
  `id` int(11) NOT NULL,
  `matricule` varchar(100) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `numero_parrain` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `numero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `filleul_procede`
--

CREATE TABLE `filleul_procede` (
  `id` int(11) NOT NULL,
  `matricule` varchar(100) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `numero_parrain` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `numero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `filleul_qhse`
--

CREATE TABLE `filleul_qhse` (
  `id` int(11) NOT NULL,
  `matricule` varchar(100) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `numero_parrain` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `numero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `filleul_sdia`
--

CREATE TABLE `filleul_sdia` (
  `id` int(11) NOT NULL,
  `matricule` varchar(100) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `numero_parrain` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `numero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `parrain`
--

CREATE TABLE `parrain` (
  `id` int(11) NOT NULL,
  `matricule` varchar(100) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `nbre_filleul` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `numero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `parrain_automeca`
--

CREATE TABLE `parrain_automeca` (
  `id` int(11) NOT NULL,
  `matricule` varchar(100) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `nbre_filleul` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `numero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `parrain_chimie`
--

CREATE TABLE `parrain_chimie` (
  `id` int(11) NOT NULL,
  `matricule` varchar(100) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `nbre_filleul` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `numero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `parrain_civil`
--

CREATE TABLE `parrain_civil` (
  `id` int(11) NOT NULL,
  `matricule` varchar(100) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `nbre_filleul` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `numero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `parrain_eeat`
--

CREATE TABLE `parrain_eeat` (
  `id` int(11) NOT NULL,
  `matricule` varchar(100) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `nbre_filleul` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `numero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `parrain_energetique`
--

CREATE TABLE `parrain_energetique` (
  `id` int(11) NOT NULL,
  `matricule` varchar(100) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `nbre_filleul` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `numero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `parrain_energie`
--

CREATE TABLE `parrain_energie` (
  `id` int(11) NOT NULL,
  `matricule` varchar(100) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `nbre_filleul` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `numero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `parrain_geophy`
--

CREATE TABLE `parrain_geophy` (
  `id` int(11) NOT NULL,
  `matricule` varchar(100) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `nbre_filleul` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `numero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `parrain_gesi`
--

CREATE TABLE `parrain_gesi` (
  `id` int(11) NOT NULL,
  `matricule` varchar(100) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `nbre_filleul` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `numero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `parrain_git`
--

CREATE TABLE `parrain_git` (
  `id` int(11) NOT NULL,
  `matricule` varchar(100) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `nbre_filleul` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `numero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `parrain_ing_1`
--

CREATE TABLE `parrain_ing_1` (
  `id` int(11) NOT NULL,
  `matricule` varchar(100) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `nbre_filleul` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `numero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `parrain_marine`
--

CREATE TABLE `parrain_marine` (
  `id` int(11) NOT NULL,
  `matricule` varchar(100) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `nbre_filleul` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `numero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `parrain_mecanique`
--

CREATE TABLE `parrain_mecanique` (
  `id` int(11) NOT NULL,
  `matricule` varchar(100) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `nbre_filleul` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `numero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `parrain_mm`
--

CREATE TABLE `parrain_mm` (
  `id` int(11) NOT NULL,
  `matricule` varchar(100) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `nbre_filleul` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `numero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `parrain_physique`
--

CREATE TABLE `parrain_physique` (
  `id` int(11) NOT NULL,
  `matricule` varchar(100) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `nbre_filleul` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `numero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `parrain_procede`
--

CREATE TABLE `parrain_procede` (
  `id` int(11) NOT NULL,
  `matricule` varchar(100) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `nbre_filleul` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `numero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `parrain_qhse`
--

CREATE TABLE `parrain_qhse` (
  `id` int(11) NOT NULL,
  `matricule` varchar(100) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `nbre_filleul` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `numero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `parrain_sdia`
--

CREATE TABLE `parrain_sdia` (
  `id` int(11) NOT NULL,
  `matricule` varchar(100) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `nbre_filleul` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `numero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `filleul`
--
ALTER TABLE `filleul`
  ADD PRIMARY KEY (`id`),
  ADD KEY `numero_parrain` (`numero_parrain`);

--
-- Index pour la table `filleul_automeca`
--
ALTER TABLE `filleul_automeca`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `filleul_chimie`
--
ALTER TABLE `filleul_chimie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `filleul_civil`
--
ALTER TABLE `filleul_civil`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `filleul_eeat`
--
ALTER TABLE `filleul_eeat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `filleul_energetique`
--
ALTER TABLE `filleul_energetique`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `filleul_energie`
--
ALTER TABLE `filleul_energie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `filleul_geophy`
--
ALTER TABLE `filleul_geophy`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `filleul_gesi`
--
ALTER TABLE `filleul_gesi`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `filleul_git`
--
ALTER TABLE `filleul_git`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `filleul_ing_1`
--
ALTER TABLE `filleul_ing_1`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `filleul_marine`
--
ALTER TABLE `filleul_marine`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `filleul_mecanique`
--
ALTER TABLE `filleul_mecanique`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `filleul_mm`
--
ALTER TABLE `filleul_mm`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `filleul_physique`
--
ALTER TABLE `filleul_physique`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `filleul_procede`
--
ALTER TABLE `filleul_procede`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `filleul_qhse`
--
ALTER TABLE `filleul_qhse`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `filleul_sdia`
--
ALTER TABLE `filleul_sdia`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `parrain`
--
ALTER TABLE `parrain`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `parrain_automeca`
--
ALTER TABLE `parrain_automeca`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `parrain_chimie`
--
ALTER TABLE `parrain_chimie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `parrain_civil`
--
ALTER TABLE `parrain_civil`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `parrain_eeat`
--
ALTER TABLE `parrain_eeat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `parrain_energetique`
--
ALTER TABLE `parrain_energetique`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `parrain_energie`
--
ALTER TABLE `parrain_energie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `parrain_geophy`
--
ALTER TABLE `parrain_geophy`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `parrain_gesi`
--
ALTER TABLE `parrain_gesi`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `parrain_git`
--
ALTER TABLE `parrain_git`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `parrain_ing_1`
--
ALTER TABLE `parrain_ing_1`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `parrain_marine`
--
ALTER TABLE `parrain_marine`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `parrain_mecanique`
--
ALTER TABLE `parrain_mecanique`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `parrain_mm`
--
ALTER TABLE `parrain_mm`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `parrain_physique`
--
ALTER TABLE `parrain_physique`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `parrain_procede`
--
ALTER TABLE `parrain_procede`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `parrain_qhse`
--
ALTER TABLE `parrain_qhse`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `parrain_sdia`
--
ALTER TABLE `parrain_sdia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `filleul`
--
ALTER TABLE `filleul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `filleul_automeca`
--
ALTER TABLE `filleul_automeca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `filleul_chimie`
--
ALTER TABLE `filleul_chimie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `filleul_civil`
--
ALTER TABLE `filleul_civil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `filleul_eeat`
--
ALTER TABLE `filleul_eeat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `filleul_energetique`
--
ALTER TABLE `filleul_energetique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `filleul_energie`
--
ALTER TABLE `filleul_energie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `filleul_geophy`
--
ALTER TABLE `filleul_geophy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `filleul_gesi`
--
ALTER TABLE `filleul_gesi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `filleul_git`
--
ALTER TABLE `filleul_git`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `filleul_ing_1`
--
ALTER TABLE `filleul_ing_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `filleul_marine`
--
ALTER TABLE `filleul_marine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `filleul_mecanique`
--
ALTER TABLE `filleul_mecanique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `filleul_mm`
--
ALTER TABLE `filleul_mm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `filleul_physique`
--
ALTER TABLE `filleul_physique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `filleul_procede`
--
ALTER TABLE `filleul_procede`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `filleul_qhse`
--
ALTER TABLE `filleul_qhse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `filleul_sdia`
--
ALTER TABLE `filleul_sdia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `parrain`
--
ALTER TABLE `parrain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `parrain_automeca`
--
ALTER TABLE `parrain_automeca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `parrain_chimie`
--
ALTER TABLE `parrain_chimie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `parrain_civil`
--
ALTER TABLE `parrain_civil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `parrain_eeat`
--
ALTER TABLE `parrain_eeat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `parrain_energetique`
--
ALTER TABLE `parrain_energetique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `parrain_energie`
--
ALTER TABLE `parrain_energie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `parrain_geophy`
--
ALTER TABLE `parrain_geophy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `parrain_gesi`
--
ALTER TABLE `parrain_gesi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `parrain_git`
--
ALTER TABLE `parrain_git`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `parrain_ing_1`
--
ALTER TABLE `parrain_ing_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `parrain_marine`
--
ALTER TABLE `parrain_marine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `parrain_mecanique`
--
ALTER TABLE `parrain_mecanique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `parrain_mm`
--
ALTER TABLE `parrain_mm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `parrain_physique`
--
ALTER TABLE `parrain_physique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `parrain_procede`
--
ALTER TABLE `parrain_procede`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `parrain_qhse`
--
ALTER TABLE `parrain_qhse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `parrain_sdia`
--
ALTER TABLE `parrain_sdia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `filleul`
--
ALTER TABLE `filleul`
  ADD CONSTRAINT `filleul_ibfk_1` FOREIGN KEY (`numero_parrain`) REFERENCES `parrain` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
