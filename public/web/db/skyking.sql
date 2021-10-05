-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 12, 2021 at 12:42 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skyking`
--

-- --------------------------------------------------------

--
-- Table structure for table `3d_model`
--

CREATE TABLE `3d_model` (
  `3d_model_id` int(11) NOT NULL,
  `3d_model_code` text NOT NULL,
  `3d_model_name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `3d_model`
--

INSERT INTO `3d_model` (`3d_model_id`, `3d_model_code`, `3d_model_name`) VALUES
(1, '<script src=\"https://static.kuula.io/embed.js\" data-kuula=\"https://kuula.co/share/723Bv?fs=1&vr=0&sd=1&thumbs=1&info=1&logo=1\" data-width=\"100%\" data-height=\"640px\"></script>', 'House in woods'),
(2, '<script src=\"https://static.kuula.io/embed.js\" data-kuula=\"https://kuula.co/share/73JMY?fs=1&vr=0&sd=1&thumbs=1&info=1&logo=0\" data-width=\"100%\" data-height=\"640px\"></script>', 'Washington Sunrise');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Ground Photo'),
(2, '360 Virtual Tours'),
(3, 'Videos'),
(4, 'Aerial Photos'),
(5, 'Services'),
(6, 'Construction'),
(7, 'Promotion'),
(8, 'OrthoMosaics'),
(9, 'Architecture');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `faq_id` int(11) NOT NULL,
  `question` varchar(2000) NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`faq_id`, `question`, `answer`) VALUES
(1, 'What is sky king?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc commodo quis arcu non venenatis. Cras lobortis ultricies arcu ut auctor. Nam sodales euismod turpis, quis commodo tortor congue ac. Maecenas tincidunt commodo lacus sed porta. Integer lobortis tempor dui ac venenatis. Aenean varius sem at volutpat tristique. Ut accumsan tristique ipsum, non molestie massa ornare id. Integer metus orci, tempor ac libero ut, varius suscipit lectus. Nulla facilisi. Mauris sit amet nulla id sem egestas ullamcorper a ultrices magna. Suspendisse congue posuere tortor in dapibus.'),
(2, 'Why Sky King', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc commodo quis arcu non venenatis. Cras lobortis ultricies arcu ut auctor. Nam sodales euismod turpis, quis commodo tortor congue ac. Maecenas tincidunt commodo lacus sed porta. Integer lobortis tempor dui ac venenatis. Aenean varius sem at volutpat tristique. Ut accumsan tristique ipsum, non molestie massa ornare id. Integer metus orci, tempor ac libero ut, varius suscipit lectus. Nulla facilisi. Mauris sit amet nulla id sem egestas ullamcorper a ultrices magna. Suspendisse congue posuere tortor in dapibus.'),
(3, 'Who are you?\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc commodo quis arcu non venenatis. Cras lobortis ultricies arcu ut auctor. Nam sodales euismod turpis, quis commodo tortor congue ac. Maecenas tincidunt commodo lacus sed porta. Integer lobortis tempor dui ac venenatis. Aenean varius sem at volutpat tristique. Ut accumsan tristique ipsum, non molestie massa ornare id. Integer metus orci, tempor ac libero ut, varius suscipit lectus. Nulla facilisi. Mauris sit amet nulla id sem egestas ullamcorper a ultrices magna. Suspendisse congue posuere tortor in dapibus.');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `media_id` int(11) NOT NULL,
  `media_name` varchar(500) NOT NULL,
  `media_desc` varchar(1000) NOT NULL,
  `media_file` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `thumbnail` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(254) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `password`, `user_email`) VALUES
(1, 'Faizan Ahmad', '$2y$10$a.olaXCPaoZuRr80pQXzk.jNaRyUn/3.SESb9u0wqdcWtyAkqL95q', 'fznshk91@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `3d_model`
--
ALTER TABLE `3d_model`
  ADD PRIMARY KEY (`3d_model_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`media_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `3d_model`
--
ALTER TABLE `3d_model`
  MODIFY `3d_model_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
