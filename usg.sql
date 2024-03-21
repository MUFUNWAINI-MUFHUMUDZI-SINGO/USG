-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2024 at 11:44 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usg`
--

-- --------------------------------------------------------

--
-- Table structure for table `aerobics`
--

CREATE TABLE `aerobics` (
  `booking_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `time_slot` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `boxing`
--

CREATE TABLE `boxing` (
  `booking_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `time_slot` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `outfit` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `boxing`
--

INSERT INTO `boxing` (`booking_id`, `user_id`, `fullname`, `time_slot`, `date`, `outfit`) VALUES
(5, 8, 'ZULU JABULANI', '14:00', '7777-08-12', 'Team A');

-- --------------------------------------------------------

--
-- Table structure for table `cardio`
--

CREATE TABLE `cardio` (
  `booking_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `time_slot` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cardio`
--

INSERT INTO `cardio` (`booking_id`, `user_id`, `fullname`, `time_slot`, `date`) VALUES
(41, 2, 'Mufunwaini mufhumudzi', '05:00', '2024-03-18'),
(42, 8, 'ZULU JABULANI', '05:00', '0000-00-00'),
(43, 10, 'ak', '05:00', '2024-03-20');

-- --------------------------------------------------------

--
-- Table structure for table `groupfit`
--

CREATE TABLE `groupfit` (
  `booking_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `time_slot` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `karate`
--

CREATE TABLE `karate` (
  `booking_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `time_slot` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `team` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `karate`
--

INSERT INTO `karate` (`booking_id`, `user_id`, `fullname`, `time_slot`, `date`, `team`) VALUES
(13, 2, 'Mufunwaini mufhumudzi', '14:00', '2024-03-19', 'WHITE'),
(14, 2, 'Mufunwaini mufhumudzi', '14:00', '2024-03-19', 'BLACK');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `residence` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `picture_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `fullname`, `residence`, `password`, `picture_path`) VALUES
(2, '21000423@mvula.univen.ac.za', 'Mufunwaini mufhumudzi', 'DBSA', '$2y$10$M89VY0oGcDYQm4xlqeLfYezomTAaVM6VTKnnwxbPgkeuw5Sz5X5om', 'C:/xampp/htdocs/UNI Stud Gym/uploads/90eee616-84fd-4f24-887a-32531fc4ea8e.jpg'),
(5, '22014236@mvula.univen.ac.za', 'MADZIMA KUDAKWASHE', 'DBSA MALE ', '$2y$10$7k8kIWHYiYTw34v.3ZkJG.MXTN6tgZMQHVV7IZISWK/RzFfqTft9W', 'C:/xampp/htdocs/UNI Stud Gym/uploads/50e244af-3834-4e2c-a967-2bcea07ab961.jpg'),
(6, '21010700@mvula.univen.ac.za', 'AMOS MUTHALA', 'SUNCITY', '$2y$10$yOpz4wyhQQdv8uH68qk9wet2ZMo.UxPr6YbHM5v5b3aFcS6wMcD8q', 'C:/xampp/htdocs/UNI Stud Gym/uploads/kali-linux.jpg'),
(7, '21009517@mvula.univen.ac.za', 'MUOFHE BRIAN', 'DBSA', '$2y$10$3JMBLguXr1wUKgO7k9aU2uMwTTxjZ/VcjoF8GCHPJiFdqUUSobbuG', 'C:/xampp/htdocs/UNI Stud Gym/uploads/202e524e-bee1-4e50-89a4-87b5240688b5.jpg'),
(8, '21005355@mvula.univen.ac.za', 'ZULU JABULANI', 'DBSA', '$2y$10$EfQt8P9EsckPRWZabTlqrOSKUTeH06Amf/SlI9aouU6BRpu0K5XX2', 'C:/xampp/htdocs/UNI Stud Gym/uploads/50e244af-3834-4e2c-a967-2bcea07ab961.jpg'),
(9, '21001432@mvula.univen.ac.za', 'Bambile Vhuhwavho', 'Sun city', '$2y$10$K0ag/mwZPVBZ.X9tB2MgvOX36WM3hlArwQbU1DfUed/YrID8oHVGi', 'C:/xampp/htdocs/UNI Stud Gym/uploads/90eee616-84fd-4f24-887a-32531fc4ea8e.jpg'),
(10, '22010845@mvula.univen.ac.za', 'ak', 'Mango groove', '$2y$10$//0wKn.WLCxC9QzNqosLfO6jrGrzm4MlFtgNJRjhZ/0q0/aL/GPiK', 'C:/xampp/htdocs/UNI Stud Gym/uploads/4d480c8c-6102-4a52-b427-5a080b99a993.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `volleyball`
--

CREATE TABLE `volleyball` (
  `booking_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `time_slot` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `team` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `yoga`
--

CREATE TABLE `yoga` (
  `booking_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `time_slot` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `yoga`
--

INSERT INTO `yoga` (`booking_id`, `user_id`, `fullname`, `time_slot`, `date`) VALUES
(9, 9, 'Bambile Vhuhwavho', '14:00', '2024-03-19'),
(10, 10, 'ak', '14:00', '2024-03-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aerobics`
--
ALTER TABLE `aerobics`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `boxing`
--
ALTER TABLE `boxing`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `cardio`
--
ALTER TABLE `cardio`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `groupfit`
--
ALTER TABLE `groupfit`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `karate`
--
ALTER TABLE `karate`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volleyball`
--
ALTER TABLE `volleyball`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `yoga`
--
ALTER TABLE `yoga`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aerobics`
--
ALTER TABLE `aerobics`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `boxing`
--
ALTER TABLE `boxing`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cardio`
--
ALTER TABLE `cardio`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `groupfit`
--
ALTER TABLE `groupfit`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `karate`
--
ALTER TABLE `karate`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `volleyball`
--
ALTER TABLE `volleyball`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `yoga`
--
ALTER TABLE `yoga`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aerobics`
--
ALTER TABLE `aerobics`
  ADD CONSTRAINT `aerobics_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `boxing`
--
ALTER TABLE `boxing`
  ADD CONSTRAINT `boxing_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `cardio`
--
ALTER TABLE `cardio`
  ADD CONSTRAINT `cardio_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `groupfit`
--
ALTER TABLE `groupfit`
  ADD CONSTRAINT `groupfit_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `karate`
--
ALTER TABLE `karate`
  ADD CONSTRAINT `karate_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `volleyball`
--
ALTER TABLE `volleyball`
  ADD CONSTRAINT `volleyball_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `yoga`
--
ALTER TABLE `yoga`
  ADD CONSTRAINT `yoga_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
