-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 25, 2023 at 12:18 PM
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

CREATE DATABASE nordic_greens;

USE nordic_greens;

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
(1, 'Tomater'),
(2, 'Agurker'),
(3, 'Peberfrugter'),
(4, 'Salater'),
(5, 'Andet');

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
(4, 'Peberfrugter', 'Pedersens Peberfrugter har en ekstra sprød og tyk skal. De har fået tid til at modne helt på planten, og det giver dem deres søde og krydrede smag.', '9.99', 3, 'peberfrugt.jpg'),
(5, 'San Marzano Øko', 'Pedersens San Marzano er en udsøgt tomat med en flot mørkerød farve og en karakteristisk, kraftig og sød smag. Det er en af Pedersens favoritter.', '7.77', 1, 'sanmarzano.jpg'),
(6, 'Fravalgte Agurker Øko', 'Ægte skønhed kommer indefra. De her agurker har premium smag, men kan variere i størrelse og form. Vi kalder dem Pedersens Fravalgte.\r\nDe er sprøde og skønne, og så hjælper de os med at nedbringe mængden af madspild. Derudover støtter vi Stop Spild Af Mad foreningen med 25 øre pr. solgt pose.', '24.99', 2, 'fravalgteagurker.jpg'),
(7, 'Pastasauce', 'Pedersen har netop udviklet den lækreste pastasauce med Basilikum. Den består udelukkende af rene råvarer og indeholder ingen E-numre. Saucen er produceret af overskudstomater fra Pedersens gartneri i Bellinge på Fyn.', '30.00', 5, 'pastasauce.jpg'),
(8, 'Ketchup', 'Pedersens har udviklet sin helt egen ketchup, som udelukkende består af rene råvarer og selvfølgelig indeholder den ingen E-numre. Pedersens ketchup er ufiltreret og har derfor et lækkert ‘bid’. Tomaterne til Pedersens Udvalgte Ketchup er dyrket på Fyn og tappet på\r\nverdens måske mindste tomatfabrik på Samsø.', '27.00', 5, 'ketchup.jpg');

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
(7, 'TestAS', 'test@mail.dk', '$2y$10$u.nBtoQ5DuonpnVW3iSYDOIWMz6jim3gyKUgJW.u8JrVSh3YftzdS');

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
