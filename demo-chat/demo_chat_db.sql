-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2024 at 07:59 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo_chat_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `queries` varchar(200) DEFAULT NULL,
  `replies` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES
(1, NULL, 'Hello there, how can I help you?'),
(2, 'Which phone brand is the best?', 'Apple.\nSamsung.\nXiaomi.\nTranssion.\nOPPO (includes OnePlus)\nVivo.\nHonor.\nMotorola.'),
(3, 'Which brand is best for laptops?', 'Top laptop brands in India.\nHP.\nLenovo.\nDell.\nAcer.\nASUS.\nApple.\nInfinix.'),
(4, 'Which is a best IT course?', 'Artificial Intelligence (AI) ...\nWeb Development. ...\nProgramming. ...\nCybersecurity. ...\nData Analytics. ...\nMachine Learning. ...\nSoftware Engineering. ...\nCloud Computing.'),
(5, 'How do I choose the best keyboard?', '5 Things to Consider When Buying a Keyboard\nCost.\nErgonomics.\nWired or Wireless.\nHotkeys and Media Keys.\nKeyboard Size.'),
(6, 'mujhe bhookh lagi hai', 'Pizza\nBurger\nVadapav\nDabeli');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
