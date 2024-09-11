-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 17 juil. 2024 à 10:09
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `employee_management`
--

-- --------------------------------------------------------

--
-- Structure de la table `acte`
--

CREATE TABLE `acte` (
  `id` int(11) NOT NULL,
  `num` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `acte`
--

INSERT INTO `acte` (`id`, `num`, `nom`, `thumb`) VALUES
(1, 'pppp', 'pppp', '6661c2f931d6c7.55254703d.jpg'),
(2, '99999', 'LESLIE', '6661d9ca9cdfa0.814998173D.jpg'),
(3, '0123', 'LESLIE', '666289f449e3c0.739945223D.jpg'),
(4, 'oooo', 'oooo', '6662b22fb333d2.53038155a.jpg'),
(5, '9800', 'ALBERT', '6662d82488ed40.17515022Capture Cours.PNG'),
(6, '1284', 'ESTER', '6662db0685f597.713789612Capture.PNG'),
(7, '1111', 'ELE', '6662ecc82db511.49001295IMG-20240606-WA0026.jpg'),
(8, '0101', 'ALA', '6662ef7a08e392.17483498Acte.jpg'),
(9, '123', 'ABA', '666321aab99b21.38584638Acte.jpg'),
(10, '128', 'TEST2', '6663278db4f3f5.71799956Acte.jpg'),
(11, '3232', 'LILI', '66728f7d477130.96690515acte de naissance.PNG'),
(14, 'oooo', 'pppp', '667d801e6f4bf8.02553733acte de naissance.PNG'),
(15, 'pppp', 'pppp', '667d8883711b39.30372092acte de naissance.PNG'),
(16, 'pppp', 'pppp', '667d88d151a278.18039506Capture Cours.PNG'),
(17, '12345', 'MESSANGA', '667d8b5d292903.623478213Capture.PNG'),
(18, '12345', 'MESSANGA', '667d8c500f0887.276745213Capture.PNG'),
(19, '12345', 'MESSANGA', '667d8cea82a710.628421743Capture.PNG'),
(20, 'nnnn', 'nnnn', '667d8d9f2a5152.887132034.PNG'),
(21, 'nnn', 'nnn', '667d8ded6bbaa0.61574261Classeur3.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `acte_d`
--

CREATE TABLE `acte_d` (
  `id` int(11) NOT NULL,
  `num` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `acte_d`
--

INSERT INTO `acte_d` (`id`, `num`, `nom`, `thumb`) VALUES
(1, 'jjj', 'jjj', '667d9247b8d409.963607332Capture.PNG'),
(2, 'fff', 'fff', '667d944ad29365.49691494Capture Cours.PNG'),
(3, 'CCCC', 'CCC', '667d9546a48cd0.331706922Capture.PNG');

-- --------------------------------------------------------

--
-- Structure de la table `acte_m`
--

CREATE TABLE `acte_m` (
  `id` int(11) NOT NULL,
  `num` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `acte_m`
--

INSERT INTO `acte_m` (`id`, `num`, `nom`, `thumb`) VALUES
(1, 'aaa', 'aaa', '667d912945a217.76409294Capture Cours.PNG');

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(15) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `dob` varchar(15) DEFAULT NULL,
  `password` varchar(75) NOT NULL,
  `dp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `gender`, `dob`, `password`, `dp`) VALUES
(12, 'admin1', 'admin1@admin.com', '', 'Ebolowa-Sud', '1234', '6661bfe99a3f10.98539850d.jpg'),
(13, 'Ebolowa', 'ebolowae@gmail.com', '', 'Ebolowa-Sud', '1234', '');

-- --------------------------------------------------------

--
-- Structure de la table `certificat`
--

CREATE TABLE `certificat` (
  `id` int(11) NOT NULL,
  `num` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `certificat`
--

INSERT INTO `certificat` (`id`, `num`, `nom`, `thumb`) VALUES
(1, 'nnn', 'nnn', '667e549a3b4280.43264884quitus (10).pdf');

-- --------------------------------------------------------

--
-- Structure de la table `contrat`
--

CREATE TABLE `contrat` (
  `id` int(11) NOT NULL,
  `num` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contrat`
--

INSERT INTO `contrat` (`id`, `num`, `nom`, `thumb`) VALUES
(1, 'ccc', 'ccc', '667e50c178ed27.74574049Classeur3.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `diplome`
--

CREATE TABLE `diplome` (
  `id` int(11) NOT NULL,
  `num` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `diplome`
--

INSERT INTO `diplome` (`id`, `num`, `nom`, `thumb`) VALUES
(1, 'ddd', 'ddd', '667e4ca412bd31.91272715CDC  MARIAMA OUMAROU.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `employee`
--

CREATE TABLE `employee` (
  `id` int(15) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `password` varchar(75) NOT NULL,
  `salary` int(10) NOT NULL,
  `dp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `employee`
--

INSERT INTO `employee` (`id`, `name`, `email`, `gender`, `dob`, `password`, `salary`, `dp`) VALUES
(17, 'ANSELME MESSANGA', 'anselmzemessanga@gmail.com', 'Male', '2000-06-05', '1234', 6, '6661479d641046.83268666pic-3.jpg'),
(18, 'ANSELME ', 'anselmeessan@gmail.com', 'Male', '1990-06-20', '1234', 0, ''),
(20, 'ANSELME', 'anselmemessanga@gmail.com', 'Male', '1999-05-19', '1234', 1234, '');

-- --------------------------------------------------------

--
-- Structure de la table `emp_leave`
--

CREATE TABLE `emp_leave` (
  `id` int(11) NOT NULL,
  `reason` varchar(500) NOT NULL,
  `start_date` varchar(24) NOT NULL,
  `last_date` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `emp_leave`
--

INSERT INTO `emp_leave` (`id`, `reason`, `start_date`, `last_date`, `email`, `status`) VALUES
(9, 'I got sick', '2021-07-28', '2021-07-30', 'test@gmail.com', 'Canceled'),
(15, ' drnrdng', '2021-07-09', '2021-07-11', 'emp1@emp.com', 'Accepted'),
(16, ' drnrdng', '2021-07-14', '2021-07-25', 'emp1@emp.com', 'Canceled'),
(17, ' drnrdng', '2021-07-16', '2021-07-25', 'emp1@emp.com', 'Canceled'),
(20, ' dcw', '2021-07-10', '2021-07-11', 'emp3@emp.com', 'Accepted'),
(21, ' efwe', '2021-07-23', '2021-07-25', 'emp3@emp.com', 'Canceled'),
(22, ' ewfew', '2021-07-24', '2021-07-18', 'emp3@emp.com', 'Accepted'),
(23, ' drnrdng', '2021-07-01', '2021-07-02', 'emp3@emp.com', 'Canceled'),
(24, ' i got sick', '2021-07-03', '2021-07-06', 'test@gmail.com', 'Accepted'),
(25, ' i got sick', '2021-07-04', '2021-07-07', 'test@gmail.com', 'Canceled'),
(26, ' drnrdng', '2021-07-04', '2021-07-07', 'test@gmail.com', 'Accepted');

-- --------------------------------------------------------

--
-- Structure de la table `titre`
--

CREATE TABLE `titre` (
  `id` int(11) NOT NULL,
  `num` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `titre`
--

INSERT INTO `titre` (`id`, `num`, `nom`, `thumb`) VALUES
(1, 'aaa', 'a,b,c', '667d9b11bd1d30.50988059Classeur3.pdf');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `acte`
--
ALTER TABLE `acte`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `acte_d`
--
ALTER TABLE `acte_d`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `acte_m`
--
ALTER TABLE `acte_m`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `certificat`
--
ALTER TABLE `certificat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contrat`
--
ALTER TABLE `contrat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `diplome`
--
ALTER TABLE `diplome`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `emp_leave`
--
ALTER TABLE `emp_leave`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `titre`
--
ALTER TABLE `titre`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `acte`
--
ALTER TABLE `acte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `acte_d`
--
ALTER TABLE `acte_d`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `acte_m`
--
ALTER TABLE `acte_m`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `certificat`
--
ALTER TABLE `certificat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `contrat`
--
ALTER TABLE `contrat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `diplome`
--
ALTER TABLE `diplome`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `emp_leave`
--
ALTER TABLE `emp_leave`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `titre`
--
ALTER TABLE `titre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
