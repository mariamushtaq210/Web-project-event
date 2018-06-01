-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2015 at 05:00 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `event`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `email`) VALUES
(1, 'gulraiz', '12345', 'gulraiz@gmail.com'),
(2, 'mahnoor', '12345', 'mahnoor@gmail.com'),
(3, 'maria', 'maria', 'maria@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `user_id` int(11) NOT NULL,
  `e_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`user_id`, `e_id`, `user_name`, `comment`, `time_stamp`) VALUES
(1, 3, 'GULRAIZ', 'sadasdsada', '2015-07-22 13:45:29'),
(1, 3, 'GULRAIZ', 'askdjsakjdaskdjaskdjksa', '2015-07-22 14:23:31'),
(1, 3, 'GULRAIZ', 'askdjsakjdaskdjaskdjksa', '2015-07-22 14:25:33'),
(1, 3, 'GULRAIZ', 'askdjsakjdaskdjaskdjksa', '2015-07-22 14:25:47'),
(1, 3, 'GULRAIZ', 'askdjsakjdaskdjaskdjksa', '2015-07-22 14:25:50'),
(1, 3, 'GULRAIZ', 'askdjsakjdaskdjaskdjksa', '2015-07-22 14:26:59'),
(1, 3, 'GULRAIZ', 'ghfshas', '2015-07-23 05:55:10'),
(1, 3, 'GULRAIZ', 'masasad', '2015-07-23 05:56:28'),
(1, 6, 'GULRAIZ', 'hi i am coming', '2015-07-23 20:29:56');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `e_id` int(11) NOT NULL AUTO_INCREMENT,
  `e_name` varchar(200) NOT NULL,
  `e_address` varchar(200) NOT NULL,
  `e_city` varchar(50) NOT NULL,
  `e_category` varchar(10) NOT NULL,
  `e_time` time NOT NULL,
  `e_date` date NOT NULL,
  `e_request` varchar(10) NOT NULL,
  `e_managedby` varchar(100) NOT NULL,
  `e_contact` varchar(20) NOT NULL,
  `image_name` varchar(200) NOT NULL,
  `ext` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `Time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`e_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`e_id`, `e_name`, `e_address`, `e_city`, `e_category`, `e_time`, `e_date`, `e_request`, `e_managedby`, `e_contact`, `image_name`, `ext`, `user_id`, `user_name`, `Time_stamp`) VALUES
(1, 'Bithday', 'JoharTown', 'Karachi', 'Indoor', '00:59:00', '2015-12-31', 'REJECTED', '', '03002312432', 'project_pic11', '.jpg', 2, 'MAHNOOR', '2015-07-14 07:06:41'),
(2, 'MARATHON', 'Lahore Ring Road', 'Sheikhupura', 'Outdoor', '12:59:00', '2015-12-31', 'REJECTED', 'Saddam', '030045454545', 'images', '.jpg', 2, 'MAHNOOR', '2015-07-14 07:04:45'),
(3, 'Birthday', 'JoharTown', 'Lahore', 'Indoor', '13:00:00', '2015-01-01', 'ACCEPTED', 'Gulraiz', '012343020123', 'images2', '.jpg', 1, 'GULRAIZ', '2015-07-14 16:59:31'),
(4, 'a', 'a', 'Lahore', 'Indoor', '12:00:00', '2015-01-01', 'ACCEPTED', 'a', 'a', '1_ashra', '.jpg', 1, 'GULRAIZ', '2015-07-21 17:07:36'),
(5, 'a', 'a', 'Lahore', 'Indoor', '12:00:00', '2015-01-01', 'ACCEPTED', 'a', 'a', '124760', '.jpg', 1, 'GULRAIZ', '2015-07-21 17:07:34'),
(6, 'Birthday', 'Larechs', 'Lahore', 'Indoor', '01:00:00', '2015-07-30', 'ACCEPTED', 'Wasif', '1234567808', '1920x1440-harmandir-sahib-golden-temple-amritsar-punjab-hd-wallpapers', '.jpg', 13, 'WAS', '2015-07-23 20:29:34');

-- --------------------------------------------------------

--
-- Table structure for table `join`
--

CREATE TABLE IF NOT EXISTS `join` (
  `e_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `join`
--

INSERT INTO `join` (`e_id`, `user_id`) VALUES
(4, 9),
(4, 9),
(3, 1),
(3, 1),
(3, 0),
(3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `city` varchar(20) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `block` tinyint(1) NOT NULL DEFAULT '0',
  `no_event` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `firstname`, `lastname`, `username`, `email`, `password`, `gender`, `city`, `time_stamp`, `block`, `no_event`) VALUES
(1, 'gulraiz', 'ali', 'gul', 'gulraizali90@gmail.com', '123456', 'male', 'gujrat', '2015-06-30 16:31:34', 1, 1),
(8, 'mahnoor', 'zaheer', 'mano', 'mahnoor_zaheer@gmail.com', '123456', 'female', 'lahore', '2015-06-30 16:33:43', 1, 1),
(9, 'Gulraiz1', 'Ali', 'gul1', 'gul1@gmail.com', '12345', 'Male', 'Lahore', '0000-00-00 00:00:00', 0, 1),
(11, 'Gulraiz2', 'Ali', 'gul2', 'gul2@gmail.com', '12345', 'Male', 'Jhang', '0000-00-00 00:00:00', 0, 1),
(12, 'Gulraiz3', 'Ali', 'gul3', 'gul3@gmail.com', '12345', 'Male', 'Jhang', '2015-07-12 07:36:00', 0, 1),
(13, 'Wasif', 'Arshad', 'Was', 'was@gmail.com', '12345', 'Male', 'Lahore', '2015-07-23 20:26:44', 0, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
