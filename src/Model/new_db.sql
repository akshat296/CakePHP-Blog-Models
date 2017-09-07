-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2017 at 09:51 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `quantity` int(5) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `name`, `body`, `quantity`, `category_id`) VALUES
(10, 'Jerome Gaines', 'Tempor aliqua Dolore in tenetur consectetur aliquip distinctio Minima neque in at sit deserunt', 890, 2),
(11, 'McKenzie Mueller', 'Rem impedit ex id praesentium', 7713, 3),
(13, 'Jolene Michael', 'Cum facere sit sed doloribus magnam anim sit quibusdam officiis enim cupidatat a deserunt fugiat eaque amet', 67975, 2),
(14, 'Stephen Bernard', 'Quis magnam facilis omnis cupiditate placeat beatae tenetur eum qui cillum expedita fugit ut quo est', 822, 6),
(15, 'Ezekiel Richards', 'Deleniti quis necessitatibus molestias et iure sit sed est consequat Est reprehenderit sint eveniet quas tempor sed', 987, 10),
(16, 'Thaddeus Baird', 'Maiores voluptates quaerat labore rem', 359, 11),
(17, 'akshat2', 'hello', 12, 5),
(21, 'bat', 'good', 1, 8),
(22, 'ac', 'a', 1, 2),
(23, 'as', 'At quia quia laboris fugit ut dolor aliquid cillum odit aute', 4, 8),
(24, 'asa', 'as', 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Sports2'),
(2, 'Cricket'),
(3, 'Football'),
(4, 'Chess'),
(5, 'Polo'),
(6, 'Games'),
(7, 'Magic'),
(8, 'Gatsby'),
(9, 'Tetris'),
(10, 'Tetris'),
(11, 'Tetris'),
(12, 'bott'),
(21, 'Sports2'),
(22, 'fhd'),
(23, 'bottle1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`) VALUES
(6, 'asd', '$2y$10$tgHWdoHx1p79S8ZZSQveUerJ1DdUqN0odBUYgNEHhtnTmDJ/VXOmG', 'admin', NULL, NULL),
(7, 'asd', '$2y$10$0ku1ZuIsG8CASObmURPv0.tsHFWrLacBCR.GNiGbINVGWTj7nFBHq', NULL, NULL, NULL),
(8, 'asdf', '$2y$10$TrYDncLeU2myVr1lrcwxR.yh5D0YRSjVpWWoET/uC2T8DAzAGfJsG', 'admin', NULL, NULL),
(9, 'akshat', '$2y$10$DtdPj1jfCk2LI83hTqPpV.SiUeZ6Cgr2RaoL19gdn9OKmmZ7Aiueq', 'admin', NULL, NULL),
(10, 'akshat123', '$2y$10$hzbdZ5.qzjyuBAOWqqAyGO1qjDujD44LCm0VtbWev8FvFeGwqyYKW', 'admin', NULL, NULL),
(11, 'Manish', '$2y$10$FNs5VuzOwFGKVdgp9S2mmuDUgICFjsRbxREKzXix./8NdIHV8la22', 'author', NULL, NULL),
(12, 'akshat123456', '$2y$10$l4X/DfG1jDOkLe34CE/0/.jLPY8EdM6Pkl3Pnu8MQ7YtOFPo9Rx4m', 'admin', NULL, NULL),
(13, 'akshat1234', '$2y$10$vIxHRUzSGnOuzrFk/omSzu8RMN6xfmb8HI.1tpswAtEGxm2AoIcEe', 'admin', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
