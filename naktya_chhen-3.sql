-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 26, 2024 at 08:54 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `naktya_chhen`
--

-- --------------------------------------------------------

--
-- Table structure for table `abc`
--

CREATE TABLE `abc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `abc`
--

INSERT INTO `abc` (`id`, `name`, `age`, `email`, `date_of_birth`) VALUES
(1, 'John', 25, 'john@example.com', '1996-05-10'),
(2, 'Alice', 30, 'alice@example.com', '1992-12-15'),
(3, 'Bob', 40, 'bob@example.com', '1984-07-20');

-- --------------------------------------------------------

--
-- Table structure for table `admin_cred`
--

CREATE TABLE `admin_cred` (
  `sr_no` int(11) NOT NULL,
  `admin_name` varchar(150) NOT NULL,
  `admin_pass` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_cred`
--

INSERT INTO `admin_cred` (`sr_no`, `admin_name`, `admin_pass`) VALUES
(1, 'PrabinHudeo', 'admin'),
(2, 'sachin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `sr_no` int(11) NOT NULL,
  `contact_iframe` varchar(300) NOT NULL,
  `contact_address` varchar(100) NOT NULL,
  `contact_number1` varchar(30) NOT NULL,
  `contact_number2` varchar(30) NOT NULL,
  `contact_email` varchar(50) NOT NULL,
  `contact_fb` varchar(100) NOT NULL,
  `contact_insta` varchar(100) NOT NULL,
  `contact_twit` varchar(100) NOT NULL,
  `contact_wapp` varchar(100) NOT NULL,
  `contact_lin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`sr_no`, `contact_iframe`, `contact_address`, `contact_number1`, `contact_number2`, `contact_email`, `contact_fb`, `contact_insta`, `contact_twit`, `contact_wapp`, `contact_lin`) VALUES
(1, 'https://maps.app.goo.gl/7BjoQXkqvXS9mhHL8', 'Naxal, Kathmandu, Nepal', '+977 9876-543210', '+977 9876-543210', 'example@email.com', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.twitter.com/', 'https://www.whatsapp.com/', 'https://www.linkedin.com/');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `full_name`, `email`, `message`) VALUES
(1, 'salina', 'user@example.com', 'hello'),
(2, 'Sanvi', 'user@example.com', 'abc'),
(6, 'sachin', 'sachin@gmail.com', 'i love food.'),
(7, 'fds', 'NP03CS4S230137@heraldcollege.edu.np', 'sa'),
(8, 'fds', 'uzwal@gmail.com', 'hgfkjh'),
(9, 'sachin', 'sasas@gmail.com', 'sachin'),
(10, 'sachin', 'NP03CS4S230137@heraldcollege.edu.np', 'sachin'),
(11, 'fds', 'adfdadf@gmail.com', 'assas');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `arrival_time` varchar(255) NOT NULL,
  `number_of_people` int(11) NOT NULL,
  `table_number` varchar(255) NOT NULL,
  `notes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `full_name`, `email`, `phone`, `date`, `arrival_time`, `number_of_people`, `table_number`, `notes`) VALUES
(7, 'dsd', 'sachin@gmail.com', '9876543211', '2024-05-17', '', 4, '3', 'sachin booking\r\n'),
(8, 'babita', 'babita@gmail.com', '9876543211', '2024-05-24', '6PM', 2, 'Table 3', 'Baita booking');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `sr_no` int(11) NOT NULL,
  `site_title` varchar(100) NOT NULL,
  `site_content` varchar(500) NOT NULL,
  `shutdown` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`sr_no`, `site_title`, `site_content`, `shutdown`) VALUES
(1, 'Naktya Chhen  gcfhbjknml', 'Lorem ipsum dolor sit amet, ut', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(20) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `number`, `password`) VALUES
(18, 'King', 'surya@gmail.com', '9876543211', 'Surya@123'),
(19, 'sachin', 'sachin@gmail.com', '9876543212', 'sa'),
(20, 'Praksh', 'prakash@gmail.com', '9876543211', '$2y$10$UTe4Su3ae.N4BPUFrlhfaO9WuybNEHg.rK6SQpD7XTVS/LS0B6Gf2'),
(21, 'rahuk', 'rahul@gmail.com', '9876543211', 'Rahul@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abc`
--
ALTER TABLE `abc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_cred`
--
ALTER TABLE `admin_cred`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abc`
--
ALTER TABLE `abc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin_cred`
--
ALTER TABLE `admin_cred`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
