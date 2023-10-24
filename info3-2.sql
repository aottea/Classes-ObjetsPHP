-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mar. 24 oct. 2023 à 18:30
-- Version du serveur : 5.7.39
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `info3`
--

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

CREATE TABLE `auteur` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`id`, `nom`, `prenom`) VALUES
(2, 'patrick', 'joseph'),
(3, 'klein', 'martine'),
(4, 'Victor', 'Hugo'),
(5, 'Victor', 'Hugo'),
(6, 'Victor', 'Hugo'),
(7, 'Victor', 'Hugo'),
(9, 'Victor', 'Hugo'),
(10, 'Victor', 'Hugo'),
(11, 'Victor', 'Hugo'),
(12, 'Victor', 'Hugo'),
(13, 'Victor', 'Hugo modifié'),
(14, 'Victor', 'Hugo'),
(15, 'Victor', 'Hugo'),
(16, 'Victor', 'Hugo'),
(17, 'Victor', 'Hugo'),
(18, 'Victor', 'Hugo'),
(19, 'Victor', 'Hugo'),
(20, 'Victor', 'Hugo'),
(21, 'Victor', 'Hugo'),
(22, 'Victor', 'Hugo'),
(23, 'Victor', 'Hugo'),
(24, 'Victor', 'Hugo'),
(25, 'tjfvjklfv', 'fvkfvkvfk'),
(26, 'tjfvjklfv', 'fvkfvkvfk'),
(27, 'tjfvjklfv', 'fvkfvkvfk'),
(28, 'tjfvjklfv', 'fvkfvkvfk'),
(29, 'tjfvjklfv', 'fvkfvkvfk'),
(30, 'tjfvjklfv', 'fvkfvkvfk'),
(31, 'sans nom', ''),
(32, 'sans nom', ''),
(33, 'Ernst', 'Isabelle');

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

CREATE TABLE `livre` (
  `titre` varchar(50) NOT NULL,
  `prix` int(11) NOT NULL,
  `resume` text NOT NULL,
  `id-auteur` bigint(20) UNSIGNED NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`titre`, `prix`, `resume`, `id-auteur`, `id`) VALUES
('la praire', 5, 'petit chaperon rouge dans la prairie', 13, 1),
('coucou', 2, 'coucou le hibou', 2, 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `auteur`
--
ALTER TABLE `auteur`
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `livre`
--
ALTER TABLE `livre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auteur` (`id-auteur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `auteur`
--
ALTER TABLE `auteur`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `livre`
--
ALTER TABLE `livre`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `livre`
--
ALTER TABLE `livre`
  ADD CONSTRAINT `livre_ibfk_1` FOREIGN KEY (`id-auteur`) REFERENCES `auteur` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
