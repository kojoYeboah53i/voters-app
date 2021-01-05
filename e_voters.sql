-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2021 at 12:36 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_voters`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` int(11) NOT NULL,
  `position` varchar(11) NOT NULL,
  `blue_team` int(255) NOT NULL,
  `royal_team` int(255) NOT NULL,
  `magenta_team` int(255) NOT NULL,
  `gold_team` int(255) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `position`, `blue_team`, `royal_team`, `magenta_team`, `gold_team`, `date_added`) VALUES
(1, 'president', 16, 4, 5, 8, '2021-01-04 15:13:38'),
(2, 'v_president', 0, 0, 0, 0, '2021-01-04 15:14:06'),
(3, ' gen_secret', 0, 0, 0, 0, '2021-01-04 15:14:36'),
(4, 'fin_secret', 0, 0, 0, 0, '2021-01-04 15:14:49'),
(5, 'cor_secret', 0, 0, 0, 0, '2021-01-04 15:15:57'),
(6, 'gen_organiz', 0, 0, 0, 0, '2021-01-04 15:16:25'),
(7, 'por', 0, 0, 0, 0, '2021-01-04 15:17:02');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_group_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `is_voted` varchar(40) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_group_id`, `username`, `password`, `firstname`, `lastname`, `phone`, `image`, `is_voted`, `ip`, `date_added`) VALUES
(1, 0, '', '', 'Isaac', '', '020455482', '', '', '', '2020-12-22 16:05:17');

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `is_voted` varchar(40) NOT NULL,
  `pin` varchar(40) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`user_id`, `username`, `password`, `firstname`, `lastname`, `phone`, `image`, `is_voted`, `pin`, `date_added`) VALUES
(26, '', '', 'lewis', '', '0505089464', '', '', '56841', '2020-12-26 09:38:34'),
(39, '', '', 'Ashes', '', '0274220219', '', '', '1991', '2021-01-03 18:08:38'),
(35, '', '', 'home', '', '0593718177', '', '', '856504', '2020-12-30 11:13:04'),
(38, '', '', 'mike', '', '0209455482', '', '', '2057', '2020-12-30 14:07:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
