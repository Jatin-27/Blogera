-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2021 at 02:45 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogerz`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(100) NOT NULL,
  `feature_image` varchar(200) NOT NULL,
  `view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `author`, `feature_image`, `view`) VALUES
(52, 'This is a new post for testing djhfjdhfjhdjfhjdhfjd  jhsfjhsjhjshjhsjhsj  hsjsdhjshdjshdjsh     ', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam lobortis malesuada porttitor. Pellentesque tristique eros ac velit convallis, efficitur rutrum nibh pretium. Nulla sed enim et arcu porttitor placerat eget sed nibh. Morbi porttitor, purus a hendrerit varius, libero ligula maximus metus, id feugiat turpis est non ante. Duis venenatis volutpat lacus quis viverra. Phasellus mollis, velit ac iaculis efficitur, tortor erat porta turpis, blandit viverra nunc mi ut velit. Donec neque erat, viverra eu tempus sed, mattis a nulla. Nam molestie, ex eu maximus congue, purus ipsum faucibus neque, non semper nisi diam eu orci. Fusce in metus a leo vestibulum bibendum nec rutrum risus. Nam non dui eget lacus gravida vestibulum. Vestibulum ornare non ligula sit amet suscipit. Donec eget ligula pretium, vestibulum orci ut, semper nisi.</p>\r\n\r\n<p>Aliquam erat volutpat. Nulla quis vestibulum odio. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam commodo vitae turpis nec faucibus. Quisque ultrices, ex a tincidunt volutpat, diam nisi porttitor enim, ac rutrum tellus nibh pretium nisi. Nulla non augue non tellus pretium vehicula. Sed pharetra tortor id dignissim imperdiet. Fusce ut tincidunt massa. Donec vitae sem eleifend, pretium dolor in, vehicula elit. Donec maximus, libero in maximus ornare, elit elit posuere libero, vel sodales enim arcu ut lorem. Duis varius quis elit vel sollicitudin. Sed vulputate at justo id tincidunt. Donec laoreet facilisis sapien, eget lobortis enim molestie et.</p>\r\n\r\n<p>Phasellus fringilla erat ac sollicitudin consectetur. Aenean at mauris in mi varius rutrum ac efficitur ex. Donec justo lacus, semper ut nunc in, sollicitudin pulvinar ex. Maecenas suscipit sit amet enim eget bibendum. Nullam feugiat ligula urna, id consequat risus semper at. Maecenas in condimentum felis. Nunc pellentesque id dolor vel fermentum. Morbi semper commodo leo, sit amet bibendum est. Maecenas pretium nisi sed nunc euismod, eu tristique ipsum dapibus. Phasellus iaculis ipsum in lorem ultricies aliquam non sit amet sem. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>\r\n', '', 'PC.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `username`, `password`) VALUES
(25, 'jchandravanshi30@gmail.com', 'Jatin@27', '$2y$10$m8TzYHQJC9dpuLsGcNyYl.CMyobS.d6d64kxdeWiRlSWsmWKzE3ui');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
