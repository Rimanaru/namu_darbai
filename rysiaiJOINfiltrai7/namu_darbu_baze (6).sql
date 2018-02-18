-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018 m. Vas 18 d. 20:45
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `namu_darbu_baze`
--

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `author`
--

CREATE TABLE `author` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `author`
--

INSERT INTO `author` (`id`, `name`, `surname`, `email`) VALUES
(1, 'Marija', 'Kazlaus', 'marija@st.lt'),
(2, 'Jhon', 'Smith', 'jhon@dd.com'),
(3, 'Mark', 'Tven', 'mark@jjj.com');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `marks`
--

CREATE TABLE `marks` (
  `id` int(11) NOT NULL,
  `student_no` varchar(10) DEFAULT NULL,
  `module_code` varchar(8) DEFAULT NULL,
  `mark` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `marks`
--

INSERT INTO `marks` (`id`, `student_no`, `module_code`, `mark`) VALUES
(1, '20060101', 'CM0001', 80),
(2, '20060101', 'CM0002', 65),
(3, '20060101', 'CM0003', 50),
(4, '20060102', 'CM0001', 75),
(5, '20060102', 'CM0003', 45),
(6, '20060102', 'CM0004', 70),
(7, '20060103', 'CM0001', 60),
(8, '20060103', 'CM0002', 75),
(9, '20060103', 'CM0004', 60),
(10, '20060104', 'CM0001', 55),
(11, '20060104', 'CM0002', 40),
(12, '20060104', 'CM0003', 45),
(13, '20060105', 'CM0001', 55),
(14, '20060105', 'CM0002', 50),
(15, '20060105', 'CM0004', 65);

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `modules`
--

CREATE TABLE `modules` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `module_code` varchar(8) DEFAULT NULL,
  `module_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `modules`
--

INSERT INTO `modules` (`id`, `parent_id`, `module_code`, `module_name`) VALUES
(1, 1, '1', 'Databases'),
(2, 2, '2', 'Programming Language'),
(3, 3, '3', 'Operating Systems'),
(4, 4, '4', 'Graphics');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `posts`
--

INSERT INTO `posts` (`id`, `name`, `parent_id`, `title`, `content`) VALUES
(2, 'romanas', 1, 'gerasRomanas', 'istorinis'),
(3, 'Detektyvas', 2, '', ''),
(4, 'biografija', 3, '', ''),
(5, 'kitas_romanas', 1, '', ''),
(6, 'kitas_detektyvas', 2, '', ''),
(7, 'kita_biografija', 3, '', ''),
(8, 'romanas', 1, '', ''),
(9, 'trecias detektyvas', 2, 'trecias detektyvas', 'trecias detektyvas');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `student_no` varchar(10) DEFAULT NULL,
  `surname` varchar(20) DEFAULT NULL,
  `forename` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `students`
--

INSERT INTO `students` (`id`, `parent_id`, `student_no`, `surname`, `forename`) VALUES
(1, 1, '20060101', 'Dickens', 'Charles'),
(2, 2, '20060102', 'ApGwilym', 'Dafydd'),
(3, 3, '20060103', 'Zola', 'Emile'),
(4, 4, '20060104', 'Mann', 'Thomas'),
(5, 5, '20060105', 'Stevenson', 'Robert');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `name`) VALUES
(1, 's', 'wwww', 'ss@ss.ss', 'sss'),
(2, 's', 'www', 'ss@ss.ss', 'sss'),
(3, 's', 'ddd', 'ss@ss.ss', 'sss'),
(4, 's', 'www', 'ss@ss.ss', 'sss'),
(5, 's', 'ss', 'ss@ss.ss', 'sss'),
(6, 'ss', 'ss', 's@s.s', 'ss'),
(7, 'ss', 'ss', 's@s.s', 'ss'),
(8, 'ss', 'ss', 'ss@ss.ss', 'ss'),
(9, 'ss', 'ss', 'ss@ss.ss', 'ss'),
(10, 's', 'ss', 'ss@ss.ss', 's');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `module_code` (`parent_id`) USING BTREE;

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_foreign` (`parent_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `marks_foreign` (`parent_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Apribojimai eksportuotom lentelėm
--

--
-- Apribojimai lentelei `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `author_foreign` FOREIGN KEY (`parent_id`) REFERENCES `author` (`id`);

--
-- Apribojimai lentelei `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `marks_foreign` FOREIGN KEY (`parent_id`) REFERENCES `marks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
