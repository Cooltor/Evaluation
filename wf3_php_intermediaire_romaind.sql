-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 04 nov. 2022 à 14:22
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `wf3_php_intermediaire_romaind`
--

-- --------------------------------------------------------

--
-- Structure de la table `advert`
--

CREATE TABLE `advert` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `postal_code` varchar(5) NOT NULL,
  `city` varchar(30) NOT NULL,
  `type` enum('location','vente') NOT NULL,
  `price` varchar(15) NOT NULL,
  `reservation_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `advert`
--

INSERT INTO `advert` (`id`, `title`, `description`, `postal_code`, `city`, `type`, `price`, `reservation_message`) VALUES
(4, 'Maison en pierre 9 pieces', 'Maison EXCEPTIONNELLE en pierre de taille avec terrasse ! Venez vite découvrir cette magnifique maison, situé à proximité du métro Porte de Clignancourt (ligne 4).', '93400', 'Saint Ouen', 'vente', '1850000', ''),
(5, 'Appartement meublé', 'Belle appartement meublé 44m2 1 chambre', '93110', 'Rosny sous bois', 'location', '1150', ''),
(6, 'Appartement meublé 2 pièces', 'SUperbe 2 pièces refait à neuf avec une chambre et sdb avec douche italienne', '75016', 'Paris', 'location', '2500', ''),
(7, 'Appartement grandiose', 'A 300m du Métro Pont de Levallois. 92300 LEVALLOIS PERRET. Exclusivité. Dans Immeuble Moderne 1990 Haut Standing. 2 Pièces + Parking. 4ème étage avec ascenseur comprenant une entrée, un séjour avec balcon, un coin cuisine aménagé, une chambre avec balcon, une salle de bains et un WC séparé. Surface env. 44m². Balcon', '92700', 'Colombes', 'location', '1440', ''),
(8, 'Bel appartement', 'Superbe appartement sur front de mer \r\nsalon spacieux de 3m2 a cote de WC de 16m2', '75001', 'Paris', 'vente', '8000000', ''),
(9, 'Appartement bellevedere', 'bel appartement sur 36 etages avec vue sur peripherique baignoire dans le salon et très belle douche avec wifi', '80000', 'Amiens', 'location', '5632', ''),
(10, 'Maison pyramide', 'Très belle maison fantaisiste de forme pyramidale en plein désert. Ayant appartenu au plus grands : Ramsès 2, Akhenaton...', '99020', 'LeCaire', 'vente', '120000000', ''),
(11, 'Maison vaisseau spatiale', 'Très belle maison en forme de soucoupe volante avec escalator intégré dans la cheminée', '56200', 'Caen', 'vente', '12000000', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `advert`
--
ALTER TABLE `advert`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `advert`
--
ALTER TABLE `advert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
