-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 03, 2017 at 02:02 PM
-- Server version: 10.1.20-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id637674_intern`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `oauth_provider` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `oauth_uid` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `oauth_provider`, `oauth_uid`, `name`, `email`, `password`) VALUES
(13, 'Facebook', '1591893997494330', 'Arun Siddharth', 'arunaaa099@gmail.com', ''),
(14, 'Google', '114885434327438851310', 'JOYDIP SARKAR', '2015ucp1337@mnit.ac.in', ''),
(15, 'Facebook', '1181838595263171', 'Rishabh Kalakoti', 'rishabh.kalakoti@gmail.com', ''),
(17, '', '', 'Vaibhav', 'vaibhav@in.in', '$2y$10$BlzDJxgbOtJoFMOeRclVqOuZa.efpCW5/W.JgM8mN7.hytGf3WgcW'),
(18, 'Google', '115677493923801047646', '', 'cmonk1729@gmail.com', ''),
(19, 'Google', '106590845888262703612', 'Vinayak Sachdeva', '2015UCP1057@mnit.ac.in', ''),
(20, 'Google', '103994132920022038324', 'Vishu Sachdeva', 'vishusachdeva228@gmail.com', ''),
(21, 'Google', '112724001105521268062', 'Shubham Laddha', 'shubhamladdha.15@gmail.com', ''),
(22, '', '', '+', '+@1', '$2y$10$mpTRtOleZWRDtTOgYZtcz.U9hKJGMIUNu9qByS2vzQvwJno840LuO'),
(23, 'Google', '116937577476463988536', 'Chandraveer Dustawa', '2014uec1260@mnit.ac.in', ''),
(24, '', '', 'sumit ', 'sgkhatri1997@gmail.com', '$2y$10$19Ug48NLW2gUU7wMbVJGguXDO0uKgnbWsv2jVL9PPmystB0j8nHam'),
(25, '', '', 'kapil', 'kapilgahlothyhy@gmail.com', '$2y$10$MM8odLHqHO9Z2q98GxKxbug9LgTs3URH7h77BiU44/TORi5UROdM2'),
(26, '', '', 'parag', '1997parag.goyal@gmail.com', '$2y$10$8KfM3yGVhWNCY9roPt175.yx78L51HRaqW/OUVu1pFekxiNIhwhCi'),
(27, 'Google', '110800545116279062390', 'PRASOON SINGH', '2016umt1556@mnit.ac.in', ''),
(28, 'Google', '112242673325414980496', 'Arun Siddharth', '2015uec1283@mnit.ac.in', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_2` (`email`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
