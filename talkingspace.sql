-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2017 at 10:09 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `talkingspace`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(400) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`) VALUES
(1, 'Web Programming', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id malesuada arcu. Vivamus sed gravida erat, et varius arcu. Nullam quis enim vestibulum, ullamcorper tellus eget, scelerisque ipsum.'),
(2, 'Web Design', 'Consectetur adipiscing elit. Curabitur id malesuada arcu. Vivamus sed gravida erat, et varius arcu. Nullam quis enim vestibulum, ullamcorper tellus eget, scelerisque ipsum.');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE IF NOT EXISTS `replies` (
`id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `body` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `topic_id`, `user_id`, `body`, `create_date`) VALUES
(1, 1, 1, 'this is a reply can you help me?', '2016-10-30 21:07:36'),
(2, 1, 2, 'this is a reply can you help me?', '2016-10-30 21:07:43'),
(3, 2, 1, '<p>sdasdwqeweqqeqwedasdasd</p>', '2016-11-05 12:36:14'),
(4, 1, 1, '<p>new reply here</p>', '2016-11-05 12:37:46'),
(5, 2, 1, '<p>dqweqweqwdasdasd</p>', '2016-11-05 12:43:30'),
(6, 1, 2, '<p>weqweewrretert ert eter qweqeqwe</p>', '2016-11-05 12:44:52'),
(7, 2, 1, '<p>asdasdqweqwe</p>', '2016-11-05 12:46:02'),
(8, 2, 1, '<p>aweqwweerwe rwer wer wer</p>', '2016-11-05 12:48:39'),
(9, 1, 1, '<p>asdasqweqweqwe</p>', '2016-11-05 12:49:39'),
(10, 1, 1, '<p>asdasdasdasd</p>', '2016-11-05 12:50:02');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE IF NOT EXISTS `topics` (
`id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `last_activity` datetime NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `category_id`, `user_id`, `title`, `body`, `last_activity`, `create_date`) VALUES
(1, 1, 1, 'Favorite Server-Side Language', 'What your favorite Server-Side Language?', '0000-00-00 00:00:00', '2017-05-21 21:42:24'),
(2, 2, 1, 'Howe did you learn Html and Css?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id malesuada arcu. Vivamus sed gravida erat, et varius arcu. Nullam quis enim vestibulum, ullamcorper tellus eget, scelerisque ipsum. Phasellus justo ligula, dignissim pellentesque urna malesuada, consequat placerat nibh. Aliquam non sodales arcu. Nulla pharetra quam quis enim euismod, vel dignissim elit iaculis.', '0000-00-00 00:00:00', '2017-05-21 21:42:24'),
(3, 2, 2, 'Neki naslov', 'Lorem ipsum dolor sit amet, consectetur adipiscing...', '0000-00-00 00:00:00', '2017-07-29 11:34:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(64) NOT NULL,
  `about` text NOT NULL,
  `last_activity` datetime NOT NULL,
  `join_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `avatar`, `username`, `password`, `about`, `last_activity`, `join_date`) VALUES
(1, 'Jugoslav Djokic', 'jugoslavng@gmail.com', 'avatar1.jpg', 'Juga', '123', 'I em a web developer from Serbia', '0000-00-00 00:00:00', '2017-05-21 21:30:16'),
(2, 'Ana Djokic', 'jugoslavneg@gmail.com', 'avatar1.jpg', 'Ana', '123', 'Ja ne znam da programiram', '0000-00-00 00:00:00', '2017-07-29 11:33:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
