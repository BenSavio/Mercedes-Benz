-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2024 at 01:50 PM
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
-- Database: `mercedes-benz`
--

-- --------------------------------------------------------

--
-- Table structure for table `datas`
--

CREATE TABLE `datas` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datas`
--

INSERT INTO `datas` (`id`, `name`, `phone`, `email`, `subject`, `message`) VALUES
(72, 'Ben Savio', '6363737367', 'bensavio63@gmail.com', 'Request a call back', 'About Mercedes-AMG ONE'),
(73, 'Sreehari', '3654985645', 'sreehari@gmail.com', 'Enquiry', 'About Mercedes-Maybach S 680 4MATIC'),
(74, 'Vishnu', '7895641325', 'vishnu@gmail.com', 'Enquiry', 'About Mercedes-AMG SL 63'),
(75, 'Sachin', '3698521659', 'sachin@gmail.com', 'Enquiry', 'Mercedes-AMG G 63'),
(76, 'Siva', '3637373675', 'siva@gmail.com', 'Request a call back', 'Mercedes-Maybach GLS 600'),
(77, 'Aswin', '9898986535', 'vmpzui007@gmail.com', 'Request a call back', 'Mercedes-AMG GLE 53 4MATIC+ Coupé'),
(78, 'Avinash', '757576498', 'avinash@gmail.com', 'Request a call back', 'Want to know details about Mercedes-AMG EQS Sedan'),
(79, 'Thushar', '9696934578', 'thushar@gmail.com', ' Mercedes-AMG GLS 63', 'To know about Mercedes-AMG GLS 63'),
(80, 'kannan', '8546251379', 'kannan@gmail.com', ' Mercedes-Benz EQS 580 4MATIC SUV', 'Details'),
(81, 'Sona', '8585231465', 'sona@gmail.com', ' Mercedes-AMG E63 S Wagon', 'Enquiry of Mercedes-AMG E63 S Wagon'),
(82, 'Lavanya', '7643152685', 'lavanya@gmail.com', 'Mercedes-AMG GLE 53 4MATIC+ Coupé', 'variants of Mercedes-AMG GLE 53 4MATIC+ Coupé'),
(83, 'Mebin', '7542136598', 'mebin@gmail.com', 'Request a call back', 'Mercedes-AMG EQS Sedan'),
(84, 'Shana', '9263548621', 'shana@gmail.com', 'Request a call back', 'Mercedes-AMG SL 63');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datas`
--
ALTER TABLE `datas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datas`
--
ALTER TABLE `datas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
