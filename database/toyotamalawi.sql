-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2023 at 10:35 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toyotamalawi`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `service_type` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `appointment_date` date NOT NULL,
  `appointment_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `service_type`, `date_created`, `appointment_date`, `appointment_time`) VALUES
(1, 'tire_rotation', '2023-04-12 17:15:44', '2023-04-25', '10:14:00'),
(11, 'brake_service', '2023-04-13 17:12:36', '2023-04-14', '10:12:00');

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `queries` varchar(300) NOT NULL,
  `replies` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES
(1, 'hi|hello|hey|hy', 'hello there!'),
(2, 'What is your name|What is your name?', 'My name is chatbot made for Toyota Malawi Vehicle servicing Services to help assist you with solutions to any problems that you may have with your car. Feel Free to ask any question.'),
(3, 'what can i do when i have a flat tyre| my tyre is flat | flat tyre', 'If you have a flat tire, you can do the following:\r\n\r\nFind a safe spot: If you are driving, try to pull over to a safe and flat spot off the road, away from traffic.\r\n\r\nTurn on hazard lights: Turn on your hazard lights to alert other drivers that you are having car trouble.\r\n\r\nCheck the tire: Once y'),
(4, 'what can i do when my car is not starting| car not starting', 'If your car is not starting, you can do the following:\r\n\r\nCheck the battery: The most common reason for a car not starting is a dead battery. Check if the battery terminals are clean and secure, and if the battery has enough charge. If the battery is dead, try jump-starting your car or replacing the'),
(5, 'thank you!|thanks', 'You\'re welcome, im always available for assistance.'),
(6, 'service numbers|toyota malawi service numbers| what are toyota malawi service numbers |', 'Sure, Here are the service numbers: \r\n-0991264825\r\n-0883527364'),
(7, 'thank you!|thanks', 'You\'re welcome, im always available for assistance.'),
(8, 'service numbers|toyota malawi service numbers| what are toyota malawi service numbers |', 'Sure, Here are the service numbers: \r\n-0991264825\r\n-0883527364');

-- --------------------------------------------------------

--
-- Table structure for table `inf`
--

CREATE TABLE `inf` (
  `n_id` int(11) NOT NULL,
  `notifications_name` text NOT NULL,
  `message` text NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inf`
--

INSERT INTO `inf` (`n_id`, `notifications_name`, `message`, `active`) VALUES
(1, 'Due Maintanace', 'Your Maintanace is due on 25 April 2023', 1),
(5, 'Pickup Time', 'Your vehicle is ready for pickup', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pname`, `image`, `price`) VALUES
(1, 'Air Filter', 'AirFilter.jpg', 10000),
(2, 'Brake Pads', 'brakepads.jpg', 35000),
(3, 'Rear Break Shoe Set', 'RearBrakeShoeSet.jpg', 40000),
(4, 'Engine Oil ', 'total.jpg', 40000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `role_as` tinyint(255) NOT NULL,
  `status` tinyint(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `firstname`, `lastname`, `email`, `phonenumber`, `role_as`, `status`, `created_at`, `password`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '0991734932', 1, 0, '2023-04-05 16:13:33', '1234'),
(3, 'Hope', 'Nyanja', 'nyanjahope4@gmail.com', '+265991734932', 0, 0, '2023-04-13 11:57:27', '0000');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(10) NOT NULL,
  `make` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `year` int(10) NOT NULL,
  `numberplate` varchar(255) NOT NULL,
  `Mileage` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `make`, `model`, `year`, `numberplate`, `Mileage`) VALUES
(1, 'Toyota', 'Ractis', 2009, 'NS3476', 12321),
(3, 'Toyota ', 'Corolla', 2008, 'LL8989', 12342),
(4, '', '', 0, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inf`
--
ALTER TABLE `inf`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `inf`
--
ALTER TABLE `inf`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
