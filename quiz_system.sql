-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 09, 2020 at 03:20 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `Answer`
--

CREATE TABLE `Answer` (
  `id` int(11) NOT NULL,
  `text` varchar(100) NOT NULL,
  `is_correct` int(11) NOT NULL,
  `question_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Answer`
--

INSERT INTO `Answer` (`id`, `text`, `is_correct`, `question_id`) VALUES
(49, '.table2', 1, 23),
(50, '.table-striped', 0, 23),
(51, '.table-bordered', 0, 23),
(53, '.table-hover', 0, 23),
(54, 'Bootstrap form controls can have a block level', 0, 24),
(55, 'use the .help-block after the input.', 0, 24),
(56, 'Both of the above.', 1, 24),
(57, 'None of the above', 0, 24),
(58, '.img-rounded', 0, 25),
(59, '.img-circle', 1, 25),
(60, 'img-thumbnail', 0, 25),
(61, 'None of the above.', 0, 25),
(62, '.nav, .nav-tabs, .menu', 0, 26),
(63, '.nav, .nav-tabs, dropdown-.menu', 1, 26),
(64, 'nav, .nav-pills, .dropdown', 0, 26),
(65, '.nav, .nav-pills', 0, 26),
(66, 'Mozilla', 0, 27),
(67, 'Microsoft', 0, 27),
(68, 'Apple', 0, 27),
(69, 'The World Wide Web Consortium', 1, 27),
(70, 'Hyper Text Markup Language', 1, 28),
(71, 'Hyperlinks and Text Markup Language', 0, 28),
(72, 'Home Tool Markup Language', 0, 28),
(73, 'Tool Markup Language', 0, 28),
(74, 'Head, Title, HTML', 0, 29),
(75, 'Title, Head, HTML', 0, 29),
(76, 'HTML, Head, Title', 1, 29),
(77, 'IMG, Head, Title', 0, 29),
(78, 'g', 0, 30);

-- --------------------------------------------------------

--
-- Table structure for table `Question`
--

CREATE TABLE `Question` (
  `id` int(11) NOT NULL,
  `text` varchar(250) NOT NULL,
  `quiz_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Question`
--

INSERT INTO `Question` (`id`, `text`, `quiz_id`) VALUES
(23, 'class styles a table as a nice basic table with just some light padding and horizontal dividers?', 13),
(24, 'Which of the following is true about bootstrap help text?', 13),
(25, 'Which of the following bootstrap style of image makes the entire image round by adding border-radius:500px?', 13),
(26, 'Which of the following bootstrap styles are used to add a dropdown to a tab?', 13),
(27, 'Who is making the Web Standards?', 14),
(28, 'What does HTML stand for?', 14),
(29, 'What is the correct sequence of HTML tags for starting a webpage?', 14),
(30, 'when ya', 20);

-- --------------------------------------------------------

--
-- Table structure for table `Quiz`
--

CREATE TABLE `Quiz` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Quiz`
--

INSERT INTO `Quiz` (`id`, `name`, `Score`) VALUES
(13, 'Bootstrap', 100),
(14, 'HTML', 100),
(15, 'Python', 100),
(16, 'CSS', 100),
(17, 'SQL', 100),
(20, 'PHP', 100);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`) VALUES
(4, 'Ahmed Atif2', '123', 'm@m.com'),
(7, 'Yassmin', '123', 'monyelbialy@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_quiz`
--

CREATE TABLE `user_quiz` (
  `id` int(11) NOT NULL,
  `grade` float DEFAULT NULL,
  `pass` varchar(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `quiz_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_quiz`
--

INSERT INTO `user_quiz` (`id`, `grade`, `pass`, `user_id`, `quiz_id`) VALUES
(52, 51, 'pass', 4, 13),
(64, 33.3333, 'fail', 4, 14),
(66, 50, 'pass', 7, 13),
(67, 0, 'fail', 7, 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Answer`
--
ALTER TABLE `Answer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `Question`
--
ALTER TABLE `Question`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quiz_id` (`quiz_id`);

--
-- Indexes for table `Quiz`
--
ALTER TABLE `Quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_quiz`
--
ALTER TABLE `user_quiz`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quiz_id` (`quiz_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Answer`
--
ALTER TABLE `Answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `Question`
--
ALTER TABLE `Question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `Quiz`
--
ALTER TABLE `Quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_quiz`
--
ALTER TABLE `user_quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Answer`
--
ALTER TABLE `Answer`
  ADD CONSTRAINT `Answer_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `Question` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Question`
--
ALTER TABLE `Question`
  ADD CONSTRAINT `Question_ibfk_1` FOREIGN KEY (`quiz_id`) REFERENCES `Quiz` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_quiz`
--
ALTER TABLE `user_quiz`
  ADD CONSTRAINT `user_quiz_ibfk_1` FOREIGN KEY (`quiz_id`) REFERENCES `Quiz` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_quiz_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
