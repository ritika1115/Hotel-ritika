-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 28, 2022 at 07:26 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `Name` varchar(25) NOT NULL,
  `checkin_dt` date NOT NULL,
  `checkout_dt` date NOT NULL,
  `adults` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `rooms` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Name`, `checkin_dt`, `checkout_dt`, `adults`, `children`, `rooms`) VALUES
('karmanya', '2022-11-23', '2022-11-24', 2, 2, 2),
('xyz', '2022-11-27', '2022-11-29', 1, 1, 1),
('r', '2022-11-03', '2022-11-01', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fname`, `lname`, `email`, `phone`, `message`) VALUES
(2, 'ritika', 'kumari', 'r@gamil.com', 86525412, 'good'),
(3, 'r', 'k', 's@gmail.com', 23435666, '324edfrdhgg'),
(4, 'e', 'k', 's@gmail.com', 354678, 'dghfhjhjk');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` text NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `fname`, `lname`) VALUES
(1, 'ritika23', '12345', 'ritika', 'kumari'),
(2, 'r', '123', 'r', 'k');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
CREATE TABLE IF NOT EXISTS `room` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `features` text NOT NULL,
  `discription` text NOT NULL,
  `price` int(11) NOT NULL,
  `img` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `name`, `features`, `discription`, `price`, `img`) VALUES
(1, 'Luxury Rooms', 'Double bed\r\nAttached washroom\r\nComfortable sofas', 'When you get into a hotel room, you lock the door, and you know there is a secrecy, there is a luxury, there is fantasy. There is comfort. There is reassurance.\r\n\r\nI\'m so fast that last night I turned off the light switch in my hotel room and was in bed before the room was dark.', 12999, 'rooms.jpeg'),
(2, 'Luxury Rooms\r\n', 'King sized bed\r\nattached washroom\r\nLuxurious sofas', 'You need to have a home to go back to, whether it\'s a hotel room or a barn. It\'s only home when he\'s there.\r\n\r\nI do work-related stuff on airplanes. Then, when I\'m in the hotel room or just vegging out, I read for pleasure.', 15999, 'rooms2.jpeg'),
(3, 'Luxury Rooms', 'Single bed\r\nAttached washroom\r\nComfortable sofas', 'When I\'m alone in my hotel room in some foreign place, I feel very lonely. Then I tuck into my favourite chocolate - Chuckles or Whispers - for some comfort.\r\n\r\nI just want to stay in my hotel room, read my book. I enjoy that private time.', 9999, 'rooms3.jpeg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
