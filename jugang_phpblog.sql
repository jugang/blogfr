-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 03, 2019 at 09:58 PM
-- Server version: 10.2.21-MariaDB-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jugang_phpblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'News'),
(2, 'Events'),
(3, 'Tutorials');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category`, `title`, `body`, `author`, `tags`, `date`) VALUES
(1, 2, 'Php Conference', '<p><img alt=\"\" class=\"front\" src=\"/blogfr/templates/js/ckeditor/kcfinder/upload/images/slajder-1.jpg\" style=\"height:950px; width:1920px\" /></p>\r\n\r\n<p>Nulla id tempor metus. Aliquam est purus, rhoncus quis venenatis in, pharetra vitae nulla. Cras laoreet purus lacus, at faucibus nisi rhoncus eget. Curabitur mollis, lacus sed lobortis scelerisque, est odio bibendum turpis, sed posuere neque justo rutrum urna. Curabitur sagittis, tortor vel congue volutpat, justo justo maximus tortor, quis sollicitudin tellus ligula a ex. Integer non urna eu elit aliquet venenatis. Sed vestibulum ullamcorper libero eget vulputate. Etiam porta porttitor dui. Suspendisse pulvinar ante felis, ut dapibus nisi gravida sagittis. Cras in ligula gravida, cursus risus sit amet, malesuada nulla. Aliquam id pulvinar dolor. In viverra massa vitae quam gravida, et porta massa accumsan. Curabitur ultricies urna nec augue rhoncus commodo. Etiam et dignissim metus. Praesent vehicula aliquam ex vitae pharetra.</p>\r\n\r\n<p>Nulla id tempor metus. Aliquam est purus, rhoncus quis venenatis in, pharetra vitae nulla. Cras laoreet purus lacus, at faucibus nisi rhoncus eget. Curabitur mollis, lacus sed lobortis scelerisque, est odio bibendum turpis, sed posuere neque justo rutrum urna. Curabitur sagittis, tortor vel congue volutpat, justo justo maximus tortor, quis sollicitudin tellus ligula a ex. Integer non urna eu elit aliquet venenatis. Sed vestibulum ullamcorper libero eget vulputate. Etiam porta porttitor dui. Suspendisse pulvinar ante felis, ut dapibus nisi gravida sagittis. Cras in ligula gravida, cursus risus sit amet, malesuada nulla. Aliquam id pulvinar dolor. In viverra massa vitae quam gravida, et porta massa accumsan. Curabitur ultricies urna nec augue rhoncus commodo. Etiam et dignissim metus. Praesent vehicula aliquam ex vitae pharetra.</p>\r\n', 'Jugoslav', 'php news, php events', '2017-05-02 11:07:31'),
(2, 1, 'Another blog post', '<p>Nulla id tempor metus. Aliquam est purus, rhoncus quis venenatis in, pharetra vitae nulla. Cras laoreet purus lacus, at faucibus nisi rhoncus eget. Curabitur mollis, lacus sed lobortis scelerisque, est odio bibendum turpis, sed posuere neque justo rutrum urna. Curabitur sagittis, tortor vel congue volutpat, justo justo maximus tortor, quis sollicitudin tellus ligula a ex. Integer non urna eu elit aliquet venenatis. Sed vestibulum ullamcorper libero eget vulputate. Etiam porta porttitor dui. Suspendisse pulvinar ante felis, ut dapibus nisi gravida sagittis. Cras in ligula gravida, cursus risus sit amet, malesuada nulla. Aliquam id pulvinar dolor. In viverra massa vitae quam gravida, et porta massa accumsan. Curabitur ultricies urna nec augue rhoncus commodo. Etiam et dignissim metus. Praesent vehicula aliquam ex vitae pharetra.</p>\r\n<p>Nulla id tempor metus. Aliquam est purus, rhoncus quis venenatis in, pharetra vitae nulla. Cras laoreet purus lacus, at faucibus nisi rhoncus eget. Curabitur mollis, lacus sed lobortis scelerisque, est odio bibendum turpis, sed posuere neque justo rutrum urna. Curabitur sagittis, tortor vel congue volutpat, justo justo maximus tortor, quis sollicitudin tellus ligula a ex. Integer non urna eu elit aliquet venenatis. Sed vestibulum ullamcorper libero eget vulputate. Etiam porta porttitor dui. Suspendisse pulvinar ante felis, ut dapibus nisi gravida sagittis. Cras in ligula gravida, cursus risus sit amet, malesuada nulla. Aliquam id pulvinar dolor. In viverra massa vitae quam gravida, et porta massa accumsan. Curabitur ultricies urna nec augue rhoncus commodo. Etiam et dignissim metus. Praesent vehicula aliquam ex vitae pharetra.</p>', 'Jugoslav', 'php, php release, php 5.6', '2017-05-02 11:07:31'),
(3, 3, 'Another blog post 2', 'Novi post', 'Ana', 'Tags new', '2017-05-07 20:28:10'),
(4, 4, 'Neki novi post', 'neki text koji dodajem', 'Juga', '', '2017-05-07 20:33:33'),
(5, 3, 'Stefanov post', '<p>balaad asldkfjalk</p>\r\n', 'Ana', 'Test tag', '2017-05-14 19:29:29');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(2) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'User', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
