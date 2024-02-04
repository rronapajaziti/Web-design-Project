-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2024 at 07:13 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelagency`
--

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `rating` decimal(5,1) NOT NULL,
  `location` varchar(255) NOT NULL,
  `days` int(11) NOT NULL,
  `nights` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `added_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `image_path`, `name`, `description`, `rating`, `location`, `days`, `nights`, `price`, `added_by`) VALUES
(6, 'Photos/monaco.jpeg', 'Monaco', 'Paradise awaits you… If your idea of paradise is a pristine tropical island with swaying palm trees and pure white beaches surrounded by crystalline lagoons of varying shades of \r\n                                blue – then the Monaco will definitely fit the bill!', 3.5, 'Monaco', 3, 2, 200, 'Rrona'),
(7, 'Photos/NewYork.jpeg', 'New York', 'It is one of the things that make New York City so unique because its features are simply incredible. It has beautiful wildflowers, green spaces, stunning architecture, and outdoor art installations.Briliant!.', 3.0, 'New York', 3, 2, 150, 'erdina'),
(8, 'Photos/Los Angeles.jpeg', 'California', 'The huge, sprawling, and tortuously shaped city of Los Angeles occupies a sizable portion of the southern part of the county. It too has a varied topography, climbing from sea level at the beach community of Venice to Mount Lukens!', 4.0, 'Los Angeles', 3, 2, 400, 'erdina'),
(9, 'Photos/Indonesia.jpeg', 'Jakarata', 'home to some of nature\'s most beautiful natures, including beaches and deep seas, as well as tropical forests and mountains. Be wowed by gorgeous beaches such as those in Bali, Lombok, Nusa Dua, and the tranquil Gili Islands.', 5.0, 'Indonesia', 4, 3, 400, 'Rrona'),
(10, 'Photos/croatia.jpeg', 'Zagreb', 'A beautiful country with over four million smiling faces and more than a thousand islands, where the sea literally plays music, the sun waves goodbye as it sets down for a nap, and enchanting stories for every occasion.', 4.0, 'Croatia', 2, 1, 280, 'Rrona'),
(11, 'Photos/dubai.jpeg', 'Dubai', 'The City of Gold is known for its amazing architecture, breath-taking landmarks, the magnificent shopping festival (of course) and the warmth of its people.\r\n                            Dubai has just about everything you would need for a perfect holiday trip.', 5.0, 'Dubai', 2, 1, 170, 'Rrona');

-- --------------------------------------------------------

--
-- Table structure for table `travel_email`
--

CREATE TABLE `travel_email` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `travel_email`
--

INSERT INTO `travel_email` (`id`, `email`) VALUES
(2, 'erdina@gmail.com'),
(3, 'did@gmail.com'),
(4, 'did@gmail.com'),
(5, 'rrona@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `travel_register`
--

CREATE TABLE `travel_register` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(12) NOT NULL,
  `birthday` date NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `travel_register`
--

INSERT INTO `travel_register` (`id`, `name`, `surname`, `email`, `phone`, `birthday`, `password`, `user_type`) VALUES
(1, 'erdina', 'bislimi', 'erdina@gmail.com', 4400000, '2003-01-03', 'Erdina123?', 'admin'),
(2, 'Didi', 'Thaci', 'did@gmail.com', 44478398, '2001-11-01', 'Dionita123?', 'user'),
(3, 'Rrona', 'Pajaziti', 'rrona@gmail.com', 1234565432, '2004-03-02', 'Rrona123?', 'admin'),
(5, 'AHHA', 'SDASDSA', 'ssada@gmail.com', 1234565432, '2003-03-02', 'Erdina123?', 'user'),
(6, 'Art', 'Pajaziti', 'art@gmail.com', 44444444, '2002-02-25', 'ArtAt12+', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `travel_rezervo`
--

CREATE TABLE `travel_rezervo` (
  `id` int(11) NOT NULL,
  `flying_from` varchar(255) NOT NULL,
  `flying_to` varchar(255) NOT NULL,
  `departing` date NOT NULL,
  `returning` date DEFAULT NULL,
  `adults` int(50) NOT NULL,
  `children` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `images` blob NOT NULL,
  `travel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `travel_rezervo`
--

INSERT INTO `travel_rezervo` (`id`, `flying_from`, `flying_to`, `departing`, `returning`, `adults`, `children`, `name`, `last_name`, `email`, `images`, `travel`) VALUES
(5, 'kosovo', 'cyrih', '2024-01-26', '2024-02-04', 2, 0, 'Embla', 'bislimi', 'erdina@gmail.com', 0x63726f617469612e6a706567, 'Buisness Class'),
(6, 'kosovo', 'cyrih', '2024-02-02', '2024-03-01', 1, 0, 'Dissss', 'aSdSs', 'erdina@gmail.com', 0x7475726b65792e6a706567, 'First Class');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel_email`
--
ALTER TABLE `travel_email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel_register`
--
ALTER TABLE `travel_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel_rezervo`
--
ALTER TABLE `travel_rezervo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `travel_email`
--
ALTER TABLE `travel_email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `travel_register`
--
ALTER TABLE `travel_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `travel_rezervo`
--
ALTER TABLE `travel_rezervo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
