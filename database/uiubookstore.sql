-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2022 at 10:23 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uiubookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `buybooks`
--

CREATE TABLE `buybooks` (
  `BookID` int(11) NOT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `AuthorName` varchar(255) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Category` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buybooks`
--

INSERT INTO `buybooks` (`BookID`, `Title`, `AuthorName`, `Price`, `Description`, `Category`) VALUES
(101, 'Introduction Algorithm', 'Thomas H. Cormen, Charles E. Leise', 450, NULL, '0'),
(102, 'Artificial Intelligence', 'Peter Norvig, Stuart J. Russell', 400, NULL, '0'),
(103, 'C programming Language', 'Dennis Ritchie, Brian Kernighan', 300, NULL, '0'),
(104, 'Compilers: Principles and Techniques', 'Alfred Aho, Ravi Sethi..', 500, NULL, '0'),
(105, 'Java: A Beginner\'s Guide', 'Herbert Schildt, Herbert Schildt', 350, NULL, '0'),
(106, 'Introduction to Computer Science', 'Perry Donham, Perry Donham', NULL, NULL, 'CSE'),
(107, 'Pragmatic Introduction to UML', ' Russ Miles and Kim Hamilton', 500, NULL, 'CSE'),
(108, 'JavaScript Programming Language', '', 200, NULL, 'CSE'),
(109, NULL, '', 300, NULL, 'BBA'),
(110, '', '', 200, NULL, 'CVIL'),
(111, '', '', 300, NULL, 'CSE'),
(112, '', '', 200, NULL, 'CVIL'),
(113, '', '', 300, NULL, 'EEE'),
(114, '', '', 200, NULL, 'BBA'),
(115, '', '', 300, NULL, 'EEE'),
(116, '', '', 200, NULL, 'CSE'),
(117, '', '', 300, NULL, 'EEE'),
(118, '', '', 200, NULL, 'CVIL'),
(119, '', '', 300, NULL, 'CSE'),
(120, '', '', 200, NULL, 'BBA'),
(121, '', '', 300, NULL, 'EEE'),
(122, '', '', 200, NULL, 'CVIL'),
(123, '', '', 300, NULL, 'EEE');

-- --------------------------------------------------------

--
-- Table structure for table `exchangebooks`
--

CREATE TABLE `exchangebooks` (
  `BookID` int(11) NOT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `AuthorName` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Category` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exchangebooks`
--

INSERT INTO `exchangebooks` (`BookID`, `Title`, `AuthorName`, `Description`, `Category`) VALUES
(200, 'Digital Electronics', 'Anil Kumar Maini', NULL, 'EEE'),
(201, ' Computer Software ', 'Charles Petzold\n', 'Even bad code can function. But if code isn\'t clean, it can bring a development organization to its knees.', 'CSE'),
(202, 'Basic Electrical Engineering', 'Mehta V.K. & Mehta Rohit', 'For close to 30 years, Basic Electrical Engineering has been the go-to text for students of Electrical Engineering.', 'EEE'),
(203, 'Accounting Principles', 'Jerry J. Weygandt', 'The Navigator is a learning system designed to guide students through each chapter and consists of a', 'BBA'),
(204, 'C, The Complete Reference', 'Herbert Schildt', NULL, 'CSE'),
(205, 'Programming Python', 'Mark Lutz', NULL, 'CSE'),
(206, 'Artificial Intelligence', 'Peter Norvig and Stuart', NULL, 'CSE'),
(207, '', NULL, NULL, 'BBA'),
(208, '', NULL, NULL, 'EEE'),
(209, '', NULL, NULL, 'EEE'),
(210, '', NULL, NULL, 'BBA'),
(211, 'Discrete Mathematics', 'Kenneth H. Rosen', NULL, 'CSE'),
(212, 'Digital Logic Design', 'B. Holdsworth', NULL, 'CSE'),
(213, 'Computer Networking', 'Jim Kurose', NULL, 'CSE'),
(214, '', NULL, NULL, 'BBA'),
(215, '', NULL, NULL, 'EEE'),
(216, '', NULL, NULL, 'EEE'),
(217, ' Machine Learning with Python', 'Andreas C. Müller', NULL, 'CSE'),
(218, '', NULL, NULL, 'EEE'),
(219, '', NULL, NULL, 'BBA'),
(220, 'Software Engineering', 'Bruce Maxim and Roger S. Pressman', NULL, 'CSE'),
(221, '', NULL, NULL, 'BBA'),
(222, '', NULL, NULL, 'EEE'),
(223, '', NULL, NULL, 'EEE'),
(224, '', NULL, NULL, 'BBA');

-- --------------------------------------------------------

--
-- Table structure for table `subcriber`
--

CREATE TABLE `subcriber` (
  `email_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcriber`
--

INSERT INTO `subcriber` (`email_id`, `email`) VALUES
(1, 'laesuddin@gmail.com'),
(2, 'f@gmail.com'),
(3, 'faa@gmail.com'),
(4, 'hello@gmail.com'),
(5, 'nm@gmail.com'),
(6, 'l@gmail.com'),
(7, 'mohan@gmail.com'),
(8, 'jobayer@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'laes', 'laesuddin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(2, '', 'la@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(3, '', 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buybooks`
--
ALTER TABLE `buybooks`
  ADD PRIMARY KEY (`BookID`);

--
-- Indexes for table `exchangebooks`
--
ALTER TABLE `exchangebooks`
  ADD PRIMARY KEY (`BookID`);

--
-- Indexes for table `subcriber`
--
ALTER TABLE `subcriber`
  ADD PRIMARY KEY (`email_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buybooks`
--
ALTER TABLE `buybooks`
  MODIFY `BookID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `exchangebooks`
--
ALTER TABLE `exchangebooks`
  MODIFY `BookID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225;

--
-- AUTO_INCREMENT for table `subcriber`
--
ALTER TABLE `subcriber`
  MODIFY `email_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
