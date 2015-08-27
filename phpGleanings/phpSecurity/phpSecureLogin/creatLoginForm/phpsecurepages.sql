-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2015 at 03:27 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phpsecurepages`
--

-- --------------------------------------------------------

--
-- Table structure for table `phpsp_users`
--

CREATE TABLE IF NOT EXISTS `phpsp_users` (
`primary_key` mediumint(8) unsigned NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `userlevel` tinyint(3) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `phpsp_users`
--

INSERT INTO `phpsp_users` (`primary_key`, `user`, `password`, `userlevel`) VALUES
(1, 'admin1', 'e00cf25ad42683b3df678c61f42c6bda', 5),
(2, 'admin2', 'c84258e9c39059a89ab77d846ddab909', 3),
(3, 'admin3', '32cacb2f994f6b42183a1300d9a3e8d6', 2),
(4, 'guest', '084e0343a0486ff05530df6c705c8bb4', 1),
(5, 'admin4', 'fc1ebc848e31e0a68e868432225e3c82', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `phpsp_users`
--
ALTER TABLE `phpsp_users`
 ADD PRIMARY KEY (`primary_key`), ADD KEY `user` (`user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `phpsp_users`
--
ALTER TABLE `phpsp_users`
MODIFY `primary_key` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
