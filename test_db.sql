-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 20, 2017 at 08:50 AM
-- Server version: 5.5.55-0+deb8u1-log
-- PHP Version: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cc_callcenters`
--

CREATE TABLE IF NOT EXISTS `cc_callcenters` (
`id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cc_callcenters`
--

INSERT INTO `cc_callcenters` (`id`, `name`) VALUES
(1, 'CC1'),
(2, 'CC2'),
(3, 'CC3'),
(4, 'CC4');

-- --------------------------------------------------------

--
-- Table structure for table `cc_desks`
--

CREATE TABLE IF NOT EXISTS `cc_desks` (
`id` int(11) NOT NULL,
  `id_callcenter` int(11) NOT NULL,
  `desk_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cc_desks`
--

INSERT INTO `cc_desks` (`id`, `id_callcenter`, `desk_name`) VALUES
(1, 1, 'Desk 1'),
(2, 2, 'Desk 2'),
(3, 3, 'Desk 3'),
(4, 4, 'Desk 4');

-- --------------------------------------------------------

--
-- Table structure for table `cc_teams`
--

CREATE TABLE IF NOT EXISTS `cc_teams` (
`id` int(11) NOT NULL,
  `id_desk` int(11) NOT NULL,
  `team_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cc_teams`
--

INSERT INTO `cc_teams` (`id`, `id_desk`, `team_name`) VALUES
(1, 1, 'Team 1'),
(2, 2, 'Team 2'),
(3, 3, 'Team 3'),
(4, 4, 'Team 4');

-- --------------------------------------------------------

--
-- Table structure for table `cc_users`
--

CREATE TABLE IF NOT EXISTS `cc_users` (
  `user_id` int(11) NOT NULL,
  `stage_name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `team_id` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cc_users`
--

INSERT INTO `cc_users` (`user_id`, `stage_name`, `team_id`) VALUES
(2, 'Maksim IT', 1),
(6, 'Vlad', 1),
(36, 'Kirill', 1),
(37, 'Dmitriy', 1),
(38, 'Edik', 2),
(39, 'Roman', 2),
(40, 'Prince', 2),
(41, 'Aleksandr', 3),
(42, 'Nastya', 3),
(43, 'Denis', 4),
(46, 'SergeiS', 4),
(47, 'ViktorS', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cc_callcenters`
--
ALTER TABLE `cc_callcenters`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cc_desks`
--
ALTER TABLE `cc_desks`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `desk_name` (`desk_name`,`id_callcenter`);

--
-- Indexes for table `cc_teams`
--
ALTER TABLE `cc_teams`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cc_users`
--
ALTER TABLE `cc_users`
 ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cc_callcenters`
--
ALTER TABLE `cc_callcenters`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `cc_desks`
--
ALTER TABLE `cc_desks`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cc_teams`
--
ALTER TABLE `cc_teams`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
