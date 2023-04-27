-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 26, 2023 at 12:00 PM
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
-- Database: `contact_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `number`, `date`) VALUES
(6, 'Saurabh', 'skj@gmail.com', '123456', '2023-02-09 00:00:00'),
(7, 'Saurabh', 'skj@gmail.com', '123456', '2023-02-09 00:00:00'),
(8, 'Saurabh', 'skj@gmail.com', '123456', '2023-02-09 00:00:00'),
(9, 'Saurabh', 'skj@gmail.com', '123456', '2023-02-09 00:00:00'),
(10, 'Saurabh', 'skj@gmail.com', '123456', '2023-02-09 00:00:00'),
(11, 'Saurabh', 'skj@gmail.com', '123456', '2023-02-09 00:00:00'),
(12, 'Saurabh', 'skj@gmail.com', '123456', '2023-02-09 00:00:00'),
(13, 'Saurabh', 'skj@gmail.com', '123456', '2023-02-09 00:00:00'),
(14, 'Saurabh', 'skj@gmail.com', '123456', '2023-02-09 00:00:00'),
(15, 'Saurabh', 'skj@gmail.com', '123456', '2023-02-09 00:00:00'),
(16, 'Saurabh', 'skj@gmail.com', '123456', '2023-02-09 00:00:00'),
(17, 'Saurabh', 'skj@gmail.com', '123456', '2023-02-09 00:00:00'),
(18, 'Saurabh', 'skj@gmail.com', '123456', '2023-02-09 00:00:00'),
(19, 'Saurabh', 'skj@gmail.com', '123456', '2023-02-09 00:00:00'),
(20, 'Saurabh', 'skj@gmail.com', '123456', '2023-02-09 00:00:00'),
(21, 'Saurabh', 'skj@gmail.com', '123456', '2023-02-09 00:00:00'),
(22, 'Saurabh', 'skj@gmail.com', '123456', '2023-02-09 00:00:00'),
(23, 'Saurabh', 'skj@gmail.com', '123456', '2023-02-09 00:00:00'),
(24, 'Saurabh', 'skj@gmail.com', '123456', '2023-02-09 00:00:00'),
(25, 'Saurabh', 'skj@gmail.com', '123456', '2023-02-09 00:00:00'),
(26, 'Saurabh', 'skj@gmail.com', '123456', '2023-02-09 00:00:00'),
(27, 'Saurabh', 'skj@gmail.com', '123456', '2023-02-09 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
