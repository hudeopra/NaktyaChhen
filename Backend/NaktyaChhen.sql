-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2024 at 11:20 AM
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
-- Database: `one_bite_food`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `booking_history`
--

CREATE TABLE `booking_history` (
  `id` int(11) DEFAULT NULL,
  `phone_number` int(255) NOT NULL,
  `no_of_people` int(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `table_no` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `special_request` varchar(510) NOT NULL,
  `food_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'aasd', 'asd@gmail.com', 'asd'),
(2, 'aasd', 'asd@gmail.com', 'asd'),
(3, 'asd', 'asd@gmail.com', 'asd'),
(4, 'asd', 'asd@gmail.com', 'asd'),
(5, 'asd', 'asd@gmail.com', 'asd'),
(6, 'asd', 'asd@gmail.com', 'asd'),
(7, 'asd', 'asd@gmail.com', 'asd'),
(8, 'wtert', 'asd@gmail.com', 'ert'),
(9, 'qwerty', 'awerty@gmail.com', 'bvhs bshuikj svaxduhjn '),
(10, 'qwerty', 'awerty@gmail.com', 'bvhs bshuikj svaxduhjn '),
(11, ' cvhb nb ', 'awertygmail.com', 'cfvhb jm'),
(12, ' cvhb nb ', 'awertygmail.com', 'cfvhb jm'),
(13, 'salina', 'salina@gmail.com', 'dyhgb gvhn');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu_list`
--

CREATE TABLE `menu_list` (
  `food_code` int(255) NOT NULL,
  `food_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `portion` int(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `reward_point` int(255) NOT NULL,
  `food_type` varchar(255) NOT NULL,
  `preparation_time` varchar(255) NOT NULL,
  `flavour` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `private_event`
--

CREATE TABLE `private_event` (
  `id` int(11) NOT NULL,
  `time_duration` varchar(255) NOT NULL,
  `function_type` varchar(255) NOT NULL,
  `guest_expectation` int(255) NOT NULL,
  `hall_no` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(255) NOT NULL,
  `people` int(11) NOT NULL,
  `tableNumber` varchar(255) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `date`, `time`, `people`, `tableNumber`, `description`) VALUES
(1, '0000-00-00', '5PM', 1, 'Table 1', 'asd'),
(2, '2024-04-10', '6PM', 2, 'Table 3', 'asdvgsxkjnckhdilsaxk,c '),
(3, '2024-04-10', '6PM', 2, 'Table 3', 'asdvgsxkjnckhdilsaxk,c '),
(4, '2024-04-10', '6PM', 2, 'Table 3', 'asdvgsxkjnckhdilsaxk,c '),
(5, '2024-04-10', '6PM', 2, 'Table 3', 'asdvgsxkjnckhdilsaxk,c '),
(6, '2024-04-10', '6PM', 2, 'Table 3', 'asdvgsxkjnckhdilsaxk,c '),
(7, '2024-04-18', '7PM', 2, 'Table 2', 'cghvhb'),
(8, '2024-04-03', '6PM', 4, 'Table 4', 'qwerty werttyu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`,`phone`);

--
-- Indexes for table `menu_list`
--
ALTER TABLE `menu_list`
  ADD PRIMARY KEY (`food_name`);

--
-- Indexes for table `private_event`
--
ALTER TABLE `private_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `private_event`
--
ALTER TABLE `private_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
