-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 24, 2023 at 11:29 AM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nordic_greens`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Tomat'),
(2, 'Agurk'),
(3, 'Peberfrugt'),
(4, 'Salat');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `price` decimal(10,2) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `category_id`, `image`) VALUES
(1, 'Runde Tomater Øko', 'Pedersens Runde Tomater er passet, plejet og håndplukket på Fyn. De har fået lov til at modne helt på planten, hvilket giver dem en fin, sprød og aromatisk smag.', '10.99', 1, 'runde-tomater.jpeg'),
(2, 'Snack Mix', 'Vores skønne Snack Mix består af 2 udvalgte tomatsorter med unik, intens, sødmefyldt, frugtig smag og sprødhed. Pedersen synes, at Snack Mix er særdeles velegnet til den lette snack og perfekt til madpakken.', '8.99', 1, 'snackmix-tomater.jpeg'),
(3, 'Palermo Snack Peber', 'Denne peber er sagen med sin fantastiske sprødhed afrundet med sødme og noter af frugtsmag. Den er perfekt til grillen, til udskæring i lange skiver og som sund snack til både børn og voksne. Pedersen synes, det lyder som en flaske champagne der åbnes, når den sprøde Palermo snack peber knækkes.', '12.99', 3, 'palermo-peber.jpeg'),
(4, 'Produkt 4', 'Beskrivelse af produkt 4', '9.99', 1, 'produkt4.jpg'),
(5, 'Produkt 5', 'Beskrivelse af produkt 5', '7.77', 1, 'produkt5.jpg'),
(6, 'Produkt 6', 'Beskrivelse af Produkt 6', '24.99', 2, 'produkt6.jpg'),
(7, 'Produkt 7', 'Beskrivelse af produkt 7', '30.00', 3, 'produkt7.jpg'),
(8, 'Produkt 8', 'Beskrivelse af produkt 8', '27.00', 2, 'produkt8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersPwd`) VALUES
(1, 'Test A/S', 'test@mail.dk', '$2y$10$pYsZC33C0B9OawmaJKE0I.rUjZwFaUbppPxXwdjYf13IBnf9HGkdW'),
(2, 'test2', 'mail@mail.dk', '$2y$10$gqZ/a9O93zszv4DYX9zmc.o/idRqaI0yCqvIswTSKAQ74oCkpc5J6'),
(3, 'Bedemanden Sov NU!', 'bedemand@mail.dk', '$2y$10$ug/vyqeexTl6J4e0HkPvUOVtWD2SbEms50zWc0DHZB6wUG6/uRN2K'),
(4, '123', '123@123.dk', '$2y$10$XLfefS8LbxjHG8weYxXDGO15Bgxk3tHhBUtFSeW8KOX9kM0inKqg.'),
(5, '1234', '1234@1234.dk', '$2y$10$ya.fCeMh.vcnfVI9WWhEDOEPsVwOQlfWudwEG.VIjOI61KUdMU2fa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
