-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2015 at 03:53 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

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
-- Table structure for table `ajax_example`
--

CREATE TABLE IF NOT EXISTS `ajax_example` (
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(1) NOT NULL,
  `wpm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ajax_example`
--

INSERT INTO `ajax_example` (`name`, `age`, `sex`, `wpm`) VALUES
('Frank', 45, 'm', 87),
('Jerry', 120, 'm', 20),
('Jill', 22, 'f', 72),
('Julie', 35, 'f', 90),
('Regis', 75, 'm', 44),
('Tracy', 27, 'f', 0);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
`id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `description` varchar(155) NOT NULL,
  `on_sale` tinyint(1) NOT NULL,
  `cover` blob NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `subject`, `description`, `on_sale`, `cover`) VALUES
(1, 'PHP AJAX', '', '', '', 0, ''),
(2, 'PHP API', 'Bobi Jordan', '', '', 0, ''),
(3, 'PHP Eclipse', 'Edie Mcbride', '', '', 0, ''),
(4, 'PHP Prado', 'Buddy Panil', '', '', 0, ''),
(5, 'PHP SEO', 'Bob Roger', '', '', 0, ''),
(6, 'PHP  Web Services', '', '', '', 0, ''),
(7, 'PHP Zend Framework', 'Kevin Zed', '', '', 0, ''),
(8, 'PHP Pattern', 'Imanda', '', '', 0, ''),
(9, 'PHP Security', 'Jack Hijack', '', '', 0, ''),
(10, 'ZEND FRAMEWORK TUTORIAL', 'PHP Everyday', '', '', 0, 0x89504e470d0a1a0a0000000d494844520000005a0000005a08030000000f76b1300000006f504c5445910fa3ffffff89009d8d00a0f7f2f9e8d8ebc7a1cf840099fffdfffcfafc9000a2b779c2dec5e3f3ecf5bf87c9ebddeeb474c0f2e7f49726a8a95ab7931ba5c39acc9a34aadabce0ba87c5dec2e3e5d3e9ac69b9a247b1cfa8d6b781c2a551b4d3b2dac897d0a85fb69e3fadc18fcb769e8abc000003cf494441545885ad99eb76aa3010854342ab041141948ae0057cff673c215c5498243370f6ea8f7669be6eb7c9246498e7961f3f5e8732655a5973d857458418c65c6f28f625e35c08c90649a1fe6ec2cb76157a77509437f4438abfa9f360213a789eb980b083044ff796648ce8e866f03ba15f632afa25ac863fe1a14f415f322458c345854647357747f1295e42a900e81d368bb724078ccfd12f4e056be387d9449ca283fb22b24a3c9dcec309da6fc8618cec2cb6a113cacc984a8ac28c8e32dacc988a1726b49fae23ab5012181d2ccf7990cc22107d5c4d6ee709847e2e9c751376384717ff85acbeca6a8af6d9daaf7064271374f81f82ee24eedf68200e710a7ca782d3dc127f7ca1cff338c4af87d02ff06965f081ae80ef7039ba9f251a1d40cb7039ba5f94cc647a153a1cd119f032127d036716f77b740eae16143a82e7ac78f6e823b85a50e83f182dcf1d3a31fce7bff8c7a8be3047a6eac0771a7d32bcae4e8d266daeb6a459f7453270b9b82422bb6965bb45fb1b3af9604d5aa30b857ed0abe9a63be5259691e2a5d00772cd439866f2aed00d39ea21696b9299cf7c2a9889bddb74bb23b0981c35f79c49b7efca19bcca6d634e18d36a276160e9b2ca4724dd2e1ab627a2456fda354ed68cbadf7247f518d5b09af86c7172548f5119bbd3d059804a5aab24a1758d4724ad45748d4dba15bcc518c4736cd2adae04b46c3a32aa0ea7a4c947312d4bca92912921697965151e4d4a5adc08e5499f00daa45123c42fa1a8d2a607bf301f3c95012225adb7020fbb1cf985629aa501c3ad59bd8f129266f2a8b6dd0bf2031624d3aaac336f8b3ae20ca60d47d3b993b83d98a10a14d1745bc7d40fe6f8246b52d2ea98abd111c235d534ffe98eeeeea3193569597a1ddafd783e98769c3ddeef7ff468e7b14f4d5252d24c7a03da55a2784c34fd1cd10edbc31d87e1a167aecc7fa37756dbc335047a7a74cf6efd165d5b460da691256facebccfd59370931e9e20b6d7cc2a3273d3c8ebcef9e4ad3484e332db3608a36991a4c639f01df3794efcb3843dde611c9f47092fd42c317d7e2e6054a5b64d2a2f620b47700d91b2ddcc41b6fcba6e8d5579f220d4ce8ed7d155ba45f6d94efabf1ed71c5f5a7387f3768a6bd8270315bdc278d88598763598343cdbaeb94346f9eecd882c0a1c60cd0f2894ab27191fecc39600fec44eb27497e831a8f707b2d2174c1246f00cb46b44abcc1c1253f3f0c0873973477f4483b705a195bbcb6de6e711536eb928be3c532dcde368e1ef70dd8876dbbc64d9558073b9bdddbcbadccda6eb7905aea17ce5913e686b62b01ddca8ff36a1f5e8f6579acc37d95c74e6cab7ffd5e2be3bcb0cf560000000049454e44ae426082),
(11, 'ZEND FRAMEWORK TUTORIAL', 'PHP Everyday', '', '', 0, 0x89504e470d0a1a0a0000000d494844520000005a0000005a08030000000f76b1300000006f504c5445910fa3ffffff89009d8d00a0f7f2f9e8d8ebc7a1cf840099fffdfffcfafc9000a2b779c2dec5e3f3ecf5bf87c9ebddeeb474c0f2e7f49726a8a95ab7931ba5c39acc9a34aadabce0ba87c5dec2e3e5d3e9ac69b9a247b1cfa8d6b781c2a551b4d3b2dac897d0a85fb69e3fadc18fcb769e8abc000003cf494441545885ad99eb76aa3010854342ab041141948ae0057cff673c215c5498243370f6ea8f7669be6eb7c9246498e7961f3f5e8732655a5973d857458418c65c6f28f625e35c08c90649a1fe6ec2cb76157a77509437f4438abfa9f360213a789eb980b083044ff796648ce8e866f03ba15f632afa25ac863fe1a14f415f322458c345854647357747f1295e42a900e81d368bb724078ccfd12f4e056be387d9449ca283fb22b24a3c9dcec309da6fc8618cec2cb6a113cacc984a8ac28c8e32dacc988a1726b49fae23ab5012181d2ccf7990cc22107d5c4d6ee709847e2e9c751376384717ff85acbeca6a8af6d9daaf7064271374f81f82ee24eedf68200e710a7ca782d3dc127f7ca1cff338c4af87d02ff06965f081ae80ef7039ba9f251a1d40cb7039ba5f94cc647a153a1cd119f032127d036716f77b740eae16143a82e7ac78f6e823b85a50e83f182dcf1d3a31fce7bff8c7a8be3047a6eac0771a7d32bcae4e8d266daeb6a459f7453270b9b82422bb6965bb45fb1b3af9604d5aa30b857ed0abe9a63be5259691e2a5d00772cd439866f2aed00d39ea21696b9299cf7c2a9889bddb74bb23b0981c35f79c49b7efca19bcca6d634e18d36a276160e9b2ca4724dd2e1ab627a2456fda354ed68cbadf7247f518d5b09af86c7172548f5119bbd3d059804a5aab24a1758d4724ad45748d4dba15bcc518c4736cd2adae04b46c3a32aa0ea7a4c947312d4bca92912921697965151e4d4a5adc08e5499f00daa45123c42fa1a8d2a607bf301f3c95012225adb7020fbb1cf985629aa501c3ad59bd8f129266f2a8b6dd0bf2031624d3aaac336f8b3ae20ca60d47d3b993b83d98a10a14d1745bc7d40fe6f8246b52d2ea98abd111c235d534ffe98eeeeea3193569597a1ddafd783e98769c3ddeef7ff468e7b14f4d5252d24c7a03da55a2784c34fd1cd10edbc31d87e1a167aecc7fa37756dbc335047a7a74cf6efd165d5b460da691256facebccfd59370931e9e20b6d7cc2a3273d3c8ebcef9e4ad3484e332db3608a36991a4c639f01df3794efcb3843dde611c9f47092fd42c317d7e2e6054a5b64d2a2f620b47700d91b2ddcc41b6fcba6e8d5579f220d4ce8ed7d155ba45f6d94efabf1ed71c5f5a7387f3768a6bd8270315bdc278d88598763598343cdbaeb94346f9eecd882c0a1c60cd0f2894ab27191fecc39600fec44eb27497e831a8f707b2d2174c1246f00cb46b44abcc1c1253f3f0c0873973477f4483b705a195bbcb6de6e711536eb928be3c532dcde368e1ef70dd8876dbbc64d9558073b9bdddbcbadccda6eb7905aea17ce5913e686b62b01ddca8ff36a1f5e8f6579acc37d95c74e6cab7ffd5e2be3bcb0cf560000000049454e44ae426082),
(12, 'PHP Tutorial', 'W3School', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
`emp_id` int(11) NOT NULL,
  `emp_name` varchar(20) NOT NULL,
  `emp_address` char(30) DEFAULT NULL,
  `emp_salary` int(11) NOT NULL,
  `join_date` timestamp(5) NOT NULL DEFAULT CURRENT_TIMESTAMP(5) ON UPDATE CURRENT_TIMESTAMP(5)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_name`, `emp_address`, `emp_salary`, `join_date`) VALUES
(1, 'guest', 'XYZ', 2000, '2015-07-15 22:54:20.00000');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE IF NOT EXISTS `inventory` (
`id` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `uname` varchar(70) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `uname`, `password`) VALUES
(1, 'Ali', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ajax_example`
--
ALTER TABLE `ajax_example`
 ADD PRIMARY KEY (`name`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
 ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
